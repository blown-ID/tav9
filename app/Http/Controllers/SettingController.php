<?php

namespace App\Http\Controllers;

use App\Gelombang;
use App\Item;
use App\Jenjang;
use App\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $judul = "Pengaturan Aplikasi";
        $setting = Setting::first();
        $gelombang = Gelombang::all();
        return view('settings.index', compact('gelombang', 'judul', 'setting'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => ':attribute wajib diisi!',
            'between' => ':attribute minimal :min, dan maksimal :max',
        ];

        $request->validate([
            'nama_gelombang' => 'required|integer|between:1,10',
            'tgl_ujian' => 'required|max:50',
            'nilai_lulus' => 'required|integer|between:1,100'
        ], $messages);

        $gelombang = Gelombang::where('nama_gelombang', $request->nama_gelombang)->first();
        // dd($gelombang);
        if ($gelombang) {
            $wave = Gelombang::updateOrCreate(
                [
                    'nama_gelombang' => $request->nama_gelombang,
                ],
                [
                    'tgl_ujian' => $request->tgl_ujian,
                    'nilai_lulus' => $request->nilai_lulus,
                ]
            );
            return redirect(route('settings.index'))->with('success', 'Gelombang berhasil diubah!');
        } else {
            $wave = Gelombang::firstOrCreate(
                [
                    'nama_gelombang' => $request->nama_gelombang,
                ],
                [
                    'nama_gelombang' => $request->nama_gelombang,
                    'tgl_ujian' => $request->tgl_ujian,
                    'nilai_lulus' => $request->nilai_lulus,
                    'active' => 0,
                ]
            );
            return redirect(route('settings.index'))->with('success', 'Gelombang berhasil ditambahkan!');
        }
    }

    public function updategelombang($id)
    {
        Gelombang::where('active', 1)
            ->update(['active' => 0]);
        Gelombang::where('id_gelombang', $id)
            ->update(['active' => 1]);
        if ($id == 1) {
            return redirect(route('settings.index'))->with('info', 'Pendaftaran Berhasil Ditutup. Sekarang Calon Peserta Didik Tidak Dapat Mendaftar Kedalam Sistem.');
        }
        return redirect(route('settings.index'))->with('success', 'Status Gelombang Aktif Berhasil Diubah! Silahkan Perbaharui Biaya Pendaftaran Jika Dibutuhkan.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request);
        Setting::where('id_gelombang', $id)
            ->update([
                'nama_bank' => $request->nama_bank,
                'no_rek' => $request->no_rek,
                'pemilik_rek' => $request->pemilik_rek,
                'cp_smp' => $request->cp_smp,
                'cp_sma' => $request->cp_sma,
                'cp_smk' => $request->cp_smk,
                'cp_keuangan' => $request->cp_keuangan,
                'active' => $request->active,
                'alamat_sekolah' => $request->alamat_sekolah,
                'telp_sekolah' => $request->telp_sekolah,
                'nama_gelombang' => $request->nama_gelombang,
                'tgl_ujian' => $request->tgl_ujian,
            ]);
        return redirect(route('settings.index'));
    }

    public function updatepengaturan(Request $request, $id)
    {
        $messages = [
            'required' => ':attribute wajib diisi!',
            'max' => ':attribute maksimal :max karakter',
        ];

        $request->validate([
            'nama_bank' => 'required|string|max:50',
            'no_rek' => 'required|string|max:50',
            'pemilik_rek' => 'required|string|max:50',
            'cp_smp' => 'required|string|max:50',
            'cp_sma' => 'required|string|max:50',
            'cp_smk' => 'required|string|max:50',
            'cp_keuangan' => 'required|string|max:50',
        ], $messages);

        Setting::where('id_settings', $id)
            ->update([
                'nama_bank' => $request->nama_bank,
                'no_rek' => $request->no_rek,
                'pemilik_rek' => $request->pemilik_rek,
                'cp_smp' => $request->cp_smp,
                'cp_sma' => $request->cp_sma,
                'cp_smk' => $request->cp_smk,
                'cp_keuangan' => $request->cp_keuangan,
            ]);
        return redirect(route('settings.index'))->with('success', 'Pengaturan Berhasil Diubah!');
    }

    public function editBiaya($id = null)
    {
        // jika ID terdefinisi, (via isset, maka ambil id nya, kalau ga di set, otomatis ambil null (diatas). ? = null coalescing operator)
        $id = isset($id) ? $id : $id;
        // $aha = Item::where('id_jenjang', $id)->get();
        if ($id === '1' || $id === '2' || $id === '3' || !$id) {
            $jenjang = Jenjang::where('id_jenjang', $id)->first();
            $item = Item::where('id_jenjang', $id)->orderBy('id_item', 'asc')->get();
            // dd($item[0]->price);
            $judul = "Pengaturan Aplikasi";
            return view('admin.biaya.index', compact('judul', 'item', 'jenjang'));
        } else {
            return redirect()->route('settings.editbiaya', ['id' => ''])->with('errors', 'Invalid Request!');
        }
    }

    public function updatebiaya(Request $request, $id)
    {
        // dump($id);
        // dd($request->all());
        if ($id === '1' || $id === '2' || $id === '3') {
            $jenjang = Jenjang::where('id_jenjang', $id)->first();
            // dd($jenjang->nama_jenjang);
            $messages = [
                'required' => 'Harga :attribute wajib diisi!',
                'integer' => 'Harga :attribute hanya dapat berupa angka!',
                'min' => 'Harga :attribute tidak dapat diisi dengan minus'
            ];

            $request->validate([
                'buku' => 'required|integer|min:0',
                'formulir' => 'required|integer|min:0',
                'kesehatan' => 'required|integer|min:0',
                'pomg' => 'required|integer|min:0',
                'program' => 'required|integer|min:0',
                'sarana' => 'required|integer|min:0',
                'seragam_l' => 'required|integer|min:0',
                'seragam_p' => 'required|integer|min:0',
                'spp' => 'required|integer|min:0',
            ], $messages);

            // Get updated data
            $r_formulir = $request->formulir;
            $r_sarana = $request->sarana;
            $r_spp = $request->spp;
            $r_pomg = $request->pomg;
            $r_buku = $request->buku;
            $r_seragam_l = $request->seragam_l;
            $r_seragam_p = $request->seragam_p;
            $r_kesehatan = $request->kesehatan;
            $r_program = $request->program;
            // end get updated data

            Item::where('id_jenjang', $id)->where('nama_item', 'Formulir Pendaftaran')
                ->update([
                    'price' => $r_formulir,
                ]);
            Item::where('id_jenjang', $id)->where('nama_item', 'Sarana')
                ->update([
                    'price' => $r_sarana,
                ]);
            Item::where('id_jenjang', $id)->where('nama_item', 'SPP')
                ->update([
                    'price' => $r_spp,
                ]);
            Item::where('id_jenjang', $id)->where('nama_item', 'POMG')
                ->update([
                    'price' => $r_pomg,
                ]);
            Item::where('id_jenjang', $id)->where('nama_item', 'Buku')
                ->update([
                    'price' => $r_buku,
                ]);
            Item::where('id_jenjang', $id)->where('nama_item', 'Seragam Ikhwan')
                ->update([
                    'price' => $r_seragam_l,
                ]);
            Item::where('id_jenjang', $id)->where('nama_item', 'Seragam Akhwat')
                ->update([
                    'price' => $r_seragam_p,
                ]);
            Item::where('id_jenjang', $id)->where('nama_item', 'Kesehatan')
                ->update([
                    'price' => $r_kesehatan,
                ]);
            Item::where('id_jenjang', $id)->where('nama_item', 'Program')
                ->update([
                    'price' => $r_program,
                ]);
            return redirect(route('settings.index'))->with('success', "Pengaturan Biaya $jenjang->nama_jenjang Berhasil Diubah!");
        } else {
            return redirect()->route('settings.editbiaya', ['id' => ''])->with('errors', 'Invalid Request!');
        }
    }
}
