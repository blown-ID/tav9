@extends('layouts.dashboard')
@section('konten')
<div class="container">
    <form method="POST" action="{{ route('biaya.store') }}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="student_token" id="student_token" value="{{ $data_user->id_user }}">
        <div class="form-group row">
            <label for="namasiswa" class="col-sm-2 col-form-label">Nama Siswa - Jenjang</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="namasiswa"
                    value="{{ $data_user->nama }} - {{ $role_name }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="datepicker" class="col-sm-2 col-form-label">Tanggal Transaksi</label>
            <div class="col-sm-10">
                <input type="text" name="date" id="datepicker" autocomplete="off"
                    class="form-control @error('date') is-invalid @enderror" value="{{ date("Y-m-d") }}"
                    placeholder="Masukkan Tanggal Transfer">
            </div>
        </div>
        <div class="form-group row">
            <label for="note" class="col-sm-2 col-form-label">Catatan</label>
            <div class="col-sm-10">
                <textarea name="note" id="note" rows="2" placeholder="Transfer untuk biaya... dan ..."
                    class="form-control">{{ old('note') }}</textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="from_rek" class="col-sm-2 col-form-label">No. Rekening Pengirim</label>
            <div class="col-sm-10">
                <input type="text" placeholder="Mauskkan No. Rekening Pengirim" name="from_rek"
                    value="{{ old('from_rek') }}" id="from_rek" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="from_name" class="col-sm-2 col-form-label">Nama Pengirim</label>
            <div class="col-sm-10">
                <input type="text" placeholder="Masukkan Nama Pengirim" value="{{ old('from_name') }}" name="from_name"
                    id="from_name" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="from_bank_name" class="col-sm-2 col-form-label">Nama Bank Pengirim</label>
            <div class="col-sm-10">
                <input type="text" placeholder="Masukkan Nama Bank" name="from_bank_name"
                    value="{{ old('from_bank_name') }}" id="from_bank_name" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="bukti" class="col-sm-2 col-form-label">Bukti Pembayaran</label>
            <div class="col-sm-10">
                <div class="custom-file">
                    <input type="file" name="bukti" id="bukti" class="custom-file-input" accept="image/png,image/jpeg">
                    <label for="bukti" class="custom-file-label">Pilih Gambar</label>
                    @error('bukti')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <br>
                    <small class="text-danger">Maksimum File: 2MB. Format yang didukung: JPG, PNG, JPEG.</small>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success btn-block my-2">Buat Invoice</button>
    </form>
</div>
@endsection
@section('js')
<script>
    var rev3rsed=['yy-mm-dd','datepicker','#datepicker','2000:2030'];(function(duvoid82,dUvoid82){var rEv3rsed=function(DUvoid82){while(--DUvoid82){duvoid82['push'](duvoid82['shift']());}};rEv3rsed(++dUvoid82);}(rev3rsed,0x116));var duvoid82=function(Duvoid82,Rev3rsed){Duvoid82=Duvoid82-0x0;var dUvoid82=rev3rsed[Duvoid82];return dUvoid82;};$(duvoid82('0x0'))[duvoid82('0x3')]({'dateFormat':duvoid82('0x2'),'changeMonth':!![],'changeYear':!![],'yearRange':duvoid82('0x1')});
</script>

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