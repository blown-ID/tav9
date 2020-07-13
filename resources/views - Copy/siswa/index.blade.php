@extends('layouts.dashboard')
@section('konten')
@php
$userstat = Auth::user();
@endphp
<div class="callout callout-info">
    <h5>Selamat datang di halaman registrasi, {{ Auth::user()->nama }}!</h5>
    <p>Silahkan melengkapi data yang diperlukan untuk registrasi dengan menekan menu di kiri layar atau menggunakan
        tombol di bawah ini. Jika mengalami kesulitan, silahkan unduh atau lihat cara menggunakan aplikasi ini
        <a href="https://alfidaacendikia.sch.id/wp-content/uploads/2019/11/Tutorial-PPDB-Online-SIT-Al-Fidaa-Cendikia.pdf"
            class="badge badge-primary text-white" target="_blank">Disini</a>.
    </p>
</div>
<h5 class="mb-2 mt-4">Menu Navigasi</h5>
<div class="row">
    <div class="col-lg-3 col-6">
        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{ $valid_id }}</h3>
                <p>Data Calon Siswa</p>
            </div>
            <div class="icon">
                <i class="fas fa-address-card"></i>
            </div>
            <a href="{{ route('biodata.index') }}" class="small-box-footer">
                Lengkapi Data <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{ $cekOrtu }}</h3>
                <p>Data Orangtua</p>
            </div>
            <div class="icon">
                <i class="fas fa-home"></i>
            </div>
            <a href="{{ route('orangtua.index') }}" class="small-box-footer">
                Lengkapi Data <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <div class="small-box bg-info">
            <div class="inner">
                <h3>@if($userstat->photo === "default.jpg") Belum @else Sudah @endif</h3>
                <p>Mengunggah pas foto</p>
            </div>
            <div class="icon">
                <i class="far fa-user-circle"></i>
            </div>
            <a href="{{ route('avatar') }}" class="small-box-footer">
                Lengkapi Data <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <div class="small-box bg-info">
            <div class="inner">
                <h3>@if($userstat->sudah_cetak == 0) Belum @else Sudah @endif</h3>
                <p>Mencetak Kartu Ujian</p>
            </div>
            <div class="icon">
                <i class="fas fa-id-card"></i>
            </div>
            <a href="{{ route('examcard') }}" class="small-box-footer">
                Cetak Kartu <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
</div>
<h5 class="h4 mt-2 mb-4 text-gray-800">Informasi Akun</h5>
<div class="card">
    <div class="card-body">
        <div class="row no-gutters">
            <div class="col-md-3">
                <img src="{{ asset('assets') }}/images/profile/{{ Auth::user()->photo }}" class="card-img" alt="...">
            </div>
            <div class="col-md-9">
                <div class="card-body">
                    <h5 class="card-title">{{ Auth::user()->nama }}</h5>
                    <p class="card-text">{{ Auth::user()->email }}</p>
                    <p class="card-text"><small class="text-muted">Tanggal
                            Pendaftaran: {{ Auth::user()->created_at->format('d M Y') }}.
                            (Gelombang-{{Auth::user()->dgk}})</small></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection