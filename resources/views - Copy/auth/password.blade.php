@extends('layouts.dashboard')

@section('judul', 'Ganti Password')


@section('konten')
<p>Silahkan Isi Data Yang Dibutuhkan.</p>
<form action="" method="post">
    @csrf
    <div class="form-group">
        <label for="pass_sekarang">Password Saat Ini</label>
        <input type="password" class="form-control @error('pass_sekarang') is-invalid @enderror" id="pass_sekarang"
            name="pass_sekarang" placeholder="Masukkan Password Saat Ini">
        @error('pass_sekarang')
        <small class="text-danger"> {{ $message }} </small>
        @enderror
    </div>
    <div class="form-group">
        <label for="password_baru">Password Baru</label>
        <input type="password" class="form-control @error('password_baru') is-invalid @enderror" id="password_baru"
            name="password_baru" placeholder="Masukkan Password Baru">
        @error('password_baru')
        <small class="text-danger"> {{ $message }} </small>
        @enderror
    </div>
    <div class="form-group">
        <label for="konfirmasi_password">Konfirmasi Password Baru</label>
        <input type="password" class="form-control @error('konfirmasi_password') is-invalid @enderror"
            id="konfirmasi_password" name="konfirmasi_password" placeholder="Masukkan Ulang Password Baru">
        @error('konfirmasi_password')
        <small class="text-danger"> {{ $message }} </small>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary btn-block">Ubah Password</button>
</form>
@endsection
