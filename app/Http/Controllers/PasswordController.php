<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $judul = "Ganti Password";
        return view('auth.password', compact('judul'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->current_pass);
        // Form Validation
        $messages = [
            'required' => ':attribute wajib diisi!',
            'same' => ':attribute tidak sama dengan :other!',
            'different' => ':attribute tidak boleh sama dengan :other!',
            'min' => ':attribute minimal :min karakter!',
        ];

        $request->validate([
            'pass_sekarang' => 'required|min:6|different:password_baru',
            'password_baru' => 'required|min:6|same:konfirmasi_password',
            'konfirmasi_password' => 'required|min:6',
        ], $messages);

        $pass_sekarang = $request->pass_sekarang;
        $new_pass = $request->password_baru;
        $user_pw = Auth::user()->password;
        if (!password_verify($pass_sekarang, $user_pw)) {
            // kalau passordnya beda
            return redirect()->back()->with('warning', 'Password Lama Anda Salah.');
        } else {
            $user = Auth::user();
            $user->password = password_hash($new_pass, PASSWORD_BCRYPT);
            $user->save();
            return redirect()->back()->with('success', 'Password Sudah Berhasil Diganti.');
        }
    }
}
