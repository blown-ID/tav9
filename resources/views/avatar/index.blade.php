@extends('layouts.dashboard')

@section('konten')
<p>Silahkan Upload Pas Foto Calon Siswa berukuran 1x1 atau 4x6</p>
<form action="" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group row">
        <label for="email" class="col-sm-2 col-form-label"> Email
        </label>
        <div class="col-sm-10">
            <input type="text" name="email" id="email" class="form-control" value="{{ $siswa->email }}" readonly>
        </div>
    </div>
    <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label"> Nama Lengkap
        </label>
        <div class="col-sm-10">
            <input type="text" name="name" id="name" class="form-control" value="{{ $siswa->nama }}" readonly>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-2">Foto Profil</div>
        <div class="col-sm-10">
            <div class="row">
                <div class="col-sm-3">
                    <img src="{{ asset('assets') }}/images/profile/{{ $siswa->photo }}" alt="profile"
                        class="img-thumbnail">
                </div>
                <div class="col-sm-9">
                    <div class="custom-file">
                        <input type="file" name="image" id="image" class="custom-file-input"
                            accept="image/png,image/jpeg">
                        <label for="image" class="custom-file-label">Pilih Gambar</label>
                        @error('image')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <small class="text-danger">*abaikan jika tidak ingin mengganti foto profil.</small>
                        <br>
                        <small class="text-danger">Maksimum File: 2MB. Format yang didukung: JPG, PNG, JPEG.</small>
                    </div>
                </div>
                <div class="mt-2 form-group row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" class="btn bg-purple">Edit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection

@section('js')
<script>
    $(".custom-file-input").on("change", function() {
    let fileName = $(this)
        .val()
        .split("\\")
        .pop();
    $(this)
        .next(".custom-file-label")
        .addClass("selected")
        .html(fileName);
});
</script>
@endsection