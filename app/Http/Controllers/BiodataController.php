<?php

namespace App\Http\Controllers;

use App\Detail_Siswa;
use App\Item;
use App\Jurusan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $judul = "Biodata Calon Siswa";
        $siswa = Detail_Siswa::where('id_user', Auth::user()->id_user)->first();
        return view('biodata.index', compact('siswa', 'judul'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $judul = "Biodata Calon Siswa";
        if (Auth::user()->sudah_cetak === 1) {
            return redirect(route('biodata.index'))->with('errors', 'Data sudah tidak bisa diubah!');
        } else {
            $siswa = Detail_Siswa::where('id_user', Auth::user()->id_user)->first();
            return view('biodata.create', compact('siswa', 'judul'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // START NOMOR OTOMATIS
        $id = Auth::user()->roles->pluck('id')->first();
        $rolename = Auth::user()->getRoleNames()->first();
        $tempUser = Auth::user()->id_user;
        $AWAL = "0" . $id . ".";
        $noUrutAkhir = Detail_Siswa::where('no_daftar', 'LIKE', $AWAL . '%')->count();
        // dd($noUrutAkhir);
        $no = 1;
        if ($noUrutAkhir) {
            $test = "$AWAL" . sprintf("%03s", abs($noUrutAkhir + 1));
            // dd($test);
        } else {
            $test = "$AWAL" . sprintf("%03s", $no);
            // dd($test);
        }
        // END NOMOR OTOMATIS

        // START VALIDASI JURUSAN
        if ($rolename === "SMP") {
            $jurusan = "-";
        } elseif ($rolename === "SMA" || $rolename === "SMK") {
            $jurusan = htmlspecialchars($request->jurusan);
        }
        // END VALIDASI JURUSAN

        // Form Validation
        $messages = [
            'required' => ':attribute wajib diisi!',
            'numeric' => ':attribute hanya dapat berupa angka',
            'date_format' => 'Format Tanggal Tidak Sesuai! (yyyy-mm-dd)',
            'lte' => 'Kesalahan pada value Anak Ke',
            'gte' => 'Kesalahan pada value Jumlah Saudara',
            'in' => 'Kesalahan pada value Jenis Kelamin',
            'size' => ':attribute Harus :size Karakter',
            'max' => ':attribute Harus :max Karakter',
            'numeric' => ':attribute harus berupa angka',
        ];

        // dd($request);
        $request->validate([
            // 'jurusan' => 'required',
            'nisn' => 'required|numeric',
            'nik' => 'required|size:16',
            'jenis_kel' => 'required|in:L,P|size:1',
            'tempat_lahir' => 'required|max:64',
            'tgl_lahir' => 'required|date_format:Y-m-d',
            'alamat_rumah' => 'required|max:128',
            'agama' => 'required|max:20',
            'kewarganegaraan' => 'required|max:3|in:WNI,WNA',
            'asal_sekolah' => 'required|max:100',
            'alamat_sekolah' => 'required|max:128',
            'bahasa_rumah' => 'required|max:30',
            'anak_ke' => 'required|max:2|lte:jumlah_saudara',
            'jumlah_saudara' => 'required|max:2|gte:anak_ke',
            'golongan_darah' => 'required|max:5',
        ], $messages);

        if ($rolename === "SMA" || $rolename === "SMK") {
            $temp = Jurusan::where('id_jenjang', $id)->get('nama_jurusan')->toArray();
            foreach ($temp as $key) {
                $checker[] = $key['nama_jurusan'];
            }
            // dd($checker);
            if (!in_array($jurusan, $checker)) {
                // kalo ga ada
                // dd('ga ada');
                return redirect(route('biodata.index'))->with('errors', 'Invalid Request!');
            }
        }

        $cekSiswa = Detail_Siswa::where('id_user', $tempUser)->first();
        if ($cekSiswa) {
            // Kalau data siswanya ada
            $siswa = Detail_Siswa::updateOrCreate(
                [
                    'id_user' => $tempUser,
                ],
                [
                    'id_siswa' => $tempUser,
                    'id_ortu' => $tempUser,
                    'nisn' => htmlspecialchars($request->nisn),
                    'nik' => htmlspecialchars($request->nik),
                    'jenis_kel' => htmlspecialchars(strtoupper($request->jenis_kel)),
                    'tempat_lahir' => htmlspecialchars(strtoupper($request->tempat_lahir)),
                    'tgl_lahir' => htmlspecialchars($request->tgl_lahir),
                    'alamat_rumah' => htmlspecialchars(strtoupper($request->alamat_rumah)),
                    'agama' => htmlspecialchars(strtoupper($request->agama)),
                    'kewarganegaraan' => htmlspecialchars(strtoupper($request->kewarganegaraan)),
                    'asal_sekolah' => htmlspecialchars(strtoupper($request->asal_sekolah)),
                    'alamat_sekolah' => htmlspecialchars(strtoupper($request->alamat_sekolah)),
                    'bahasa_rumah' => htmlspecialchars(strtoupper($request->bahasa_rumah)),
                    'anak_ke' => htmlspecialchars($request->anak_ke),
                    'jumlah_saudara' => htmlspecialchars($request->jumlah_saudara),
                    'golongan_darah' => htmlspecialchars(strtoupper($request->golongan_darah)),
                    'jurusan' => $jurusan,
                ]
            );
            return redirect(route('biodata.index'))->with('success', 'Data Sudah Berhasil Diperbarui!');
        } else {
            $siswa = Detail_Siswa::firstOrCreate(
                [
                    'id_user' => $tempUser,
                ],
                [
                    'id_siswa' => $tempUser,
                    'id_ortu' => $tempUser,
                    'no_daftar' => htmlspecialchars($test),
                    'nisn' => htmlspecialchars(strtoupper($request->nisn)),
                    'nik' => htmlspecialchars(strtoupper($request->nik)),
                    'jenis_kel' => htmlspecialchars(strtoupper($request->jenis_kel)),
                    'tempat_lahir' => htmlspecialchars(strtoupper($request->tempat_lahir)),
                    'tgl_lahir' => htmlspecialchars(strtoupper($request->tgl_lahir)),
                    'alamat_rumah' => htmlspecialchars(strtoupper($request->alamat_rumah)),
                    'agama' => htmlspecialchars(strtoupper($request->agama)),
                    'kewarganegaraan' => htmlspecialchars(strtoupper($request->kewarganegaraan)),
                    'asal_sekolah' => htmlspecialchars(strtoupper($request->asal_sekolah)),
                    'alamat_sekolah' => htmlspecialchars(strtoupper($request->alamat_sekolah)),
                    'bahasa_rumah' => htmlspecialchars(strtoupper($request->bahasa_rumah)),
                    'anak_ke' => htmlspecialchars(strtoupper($request->anak_ke)),
                    'jumlah_saudara' => htmlspecialchars(strtoupper($request->jumlah_saudara)),
                    'golongan_darah' => htmlspecialchars(strtoupper($request->golongan_darah)),
                    'jurusan' => $jurusan,
                ]
            );
            return redirect(route('biodata.index'))->with('success', 'Data Sudah Berhasil Disimpan!');
            // dd(Auth::user()->id_user);
            // dd($request->all());
        }
    }
}
