<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AvatarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $judul = "Biodata Calon Siswa";
        $siswa = User::where('id_user', Auth::user()->id_user)->first();
        return view('avatar.index', compact('siswa', 'judul'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $siswa = User::where('id_user', Auth::user()->id_user)->first();
        // dd($request->all());
        if ($request->hasFile('image')) {
            // kalo upload gambar
            $this->validate($request, [
                // cek validasi gambar
                'image' => 'required|image|mimes:jpg,png,jpeg|max:2048',
            ]);
            $namaFile = 'img_' . time() . '.' . $request->image->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/assets/images/profile/', $namaFile);
            // Validasi Nama file
            if (Auth::user()->photo !== "default.jpg") {
                unlink(public_path() . '/assets/images/profile/' . Auth::user()->photo);
            }
            User::where('id_user', Auth::user()->id_user)->update(['photo' => $namaFile]);
            return redirect(route('biodata.index'))->with('success', 'Foto Sudah Berhasil Diperbaharui!');
        } else {
            return redirect(route('biodata.index'));
        }
        // if ($request->hasFile('image')) {
        //     $request->file('image')->move('images/' . $request->file['image']->getOriginalName());
        // }
    }
}
