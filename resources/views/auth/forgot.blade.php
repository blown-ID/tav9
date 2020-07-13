@extends('layouts.app')
@section('judul', 'Login Calon Peserta')
@section('konten')
<div class="register-form">
    <div class="register-form">
        <p class="text-justify">Jika ananda lupa sandi untuk login, silahkan hubungi admin melalui WhatsApp <a
                href="http://web.whatsapp.com" class="badge badge-dark"> Disini </a> atau langsung datang ke Yayasan
            <span class="alfidaa">Al Fidaa</span> untuk mendapatkan kembali akses login.</p>
        <p><a href="{{ route('login') }}" class=" text-center">&larr; Kembali Ke Login</a></p>
    </div>
</div>
@endsection