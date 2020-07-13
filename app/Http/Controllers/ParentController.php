<?php

namespace App\Http\Controllers;

use App\Detail_Siswa;
use App\Orangtua;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ParentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $judul = "Data Orang Tua / Wali";
        $orangtua = Orangtua::where('id_ortu', Auth::user()->id_user)->first();
        return view('orangtua.index', compact('orangtua', 'judul'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $judul = "Data Orang Tua / Wali";
        if (Auth::user()->sudah_cetak === 1) {
            return redirect(route('orangtua.index'))->with('errors', 'Data sudah tidak bisa diubah!');
        } else {
            $orangtua = Orangtua::where('id_ortu', Auth::user()->id_user)->first();
            return view('orangtua.create', compact('orangtua', 'judul'));
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
        $id = Auth::user()->id_user;
        // Form Validation
        $messages = [
            'required' => ':attribute wajib diisi!',
            'alpha' => ':attribute hanya dapat berupa alfabet!',
            'min' => ':attribute minimal :min karakter!',
            'max' => ':attribute maksimal :max karakter!',
        ];

        $request->validate([
            'nama_ayah' => 'required|min:3|max:64',
            'nama_ibu' => 'required|min:3|max:64',
            'alamat_ayah' => 'required|min:3|max:64',
            'alamat_ibu' => 'required|min:3|max:64',
            'telp_ayah' => 'required|min:3|max:64',
            'telp_ibu' => 'required|min:3|max:64',
            'pendidikan_ayah' => 'required|max:64',
            'pendidikan_ibu' => 'required|max:64',
            'penghasilan_ayah' => 'required',
            'penghasilan_ibu' => 'required',
            'pekerjaan_ayah' => 'required|min:1|max:64',
            'pekerjaan_ibu' => 'required|min:1|max:64',

        ], $messages);
        $orangtua = Orangtua::where('id_ortu', Auth::user()->id_user)->first();
        // dd($orangtua);
        if ($orangtua) {
            $siswa = Orangtua::updateOrCreate(
                [
                    'id_ortu' => Auth::user()->id_user,
                ],
                [
                    'nama_ayah' => htmlspecialchars(strtoupper($request->nama_ayah)),
                    'nama_ibu' => htmlspecialchars(strtoupper($request->nama_ibu)),
                    'alamat_ayah' => htmlspecialchars(strtoupper($request->alamat_ayah)),
                    'alamat_ibu' => htmlspecialchars(strtoupper($request->alamat_ibu)),
                    'telp_ayah' => htmlspecialchars(strtoupper($request->telp_ayah)),
                    'telp_ibu' => htmlspecialchars(strtoupper($request->telp_ibu)),
                    'pendidikan_ayah' => htmlspecialchars(strtoupper($request->pendidikan_ayah)),
                    'pendidikan_ibu' => htmlspecialchars(strtoupper($request->pendidikan_ibu)),
                    'penghasilan_ayah' => htmlspecialchars($request->penghasilan_ayah),
                    'penghasilan_ibu' => htmlspecialchars($request->penghasilan_ibu),
                    'pekerjaan_ayah' => htmlspecialchars(strtoupper($request->pekerjaan_ayah)),
                    'pekerjaan_ibu' => htmlspecialchars(strtoupper($request->pekerjaan_ibu))
                ]
            );
            return redirect(route('orangtua.index'))->with('success', 'Data Sudah Berhasil Diperbarui!');
        } else {
            $siswa = Orangtua::firstOrCreate(
                [
                    'id_ortu' => Auth::user()->id_user,
                ],
                [
                    'id_ortu' => Auth::user()->id_user,
                    'nama_ayah' => htmlspecialchars(strtoupper($request->nama_ayah)),
                    'nama_ibu' => htmlspecialchars(strtoupper($request->nama_ibu)),
                    'alamat_ayah' => htmlspecialchars(strtoupper($request->alamat_ayah)),
                    'alamat_ibu' => htmlspecialchars(strtoupper($request->alamat_ibu)),
                    'telp_ayah' => htmlspecialchars(strtoupper($request->telp_ayah)),
                    'telp_ibu' => htmlspecialchars(strtoupper($request->telp_ibu)),
                    'pendidikan_ayah' => htmlspecialchars(strtoupper($request->pendidikan_ayah)),
                    'pendidikan_ibu' => htmlspecialchars(strtoupper($request->pendidikan_ibu)),
                    'penghasilan_ayah' => htmlspecialchars($request->penghasilan_ayah),
                    'penghasilan_ibu' => htmlspecialchars($request->penghasilan_ibu),
                    'pekerjaan_ayah' => htmlspecialchars(strtoupper($request->pekerjaan_ayah)),
                    'pekerjaan_ibu' => htmlspecialchars(strtoupper($request->pekerjaan_ibu))
                ]
            );
            $siswa = Detail_Siswa::find($id);
            if ($siswa) {
                $siswa->id_ortu = $id;
                $siswa->save();
            }
            return redirect(route('orangtua.index'))->with('success', 'Data Sudah Berhasil Disimpan!');
            // dd(Auth::user()->id_user);
            // dd($request->all());
        }

        // $siswa =Orangtua::with('payment','payment.payment_detail')
    }
}
