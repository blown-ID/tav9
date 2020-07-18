@extends('layouts.dashboard')
@section('konten')
<div class="row">
    <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="clearfix">
                    <h4 class="card-title float-left">Tambah Data Pembayaran</h4>
                    <br>
                    <form class="mt-2" enctype="multipart/form-data" action="{{ route('pembayaransiswa.store') }}"
                        method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="tanggal">Tanggal Transfer</label>
                            <input type="date" class="form-control @error('tanggal') is-invalid @enderror"
                                placeholder="Masukkan tanggal Admin" name="tanggal" value="{{ old('tanggal') }}">
                            @error('tanggal')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="from_rek">No. Rekening Pengirim</label>
                            <input type="text" class="form-control @error('from_rek') is-invalid @enderror"
                                placeholder="Masukkan No. Rekening Pengirim" name="from_rek"
                                value="{{ old('from_rek') }}" id="from_rek">
                            @error('from_rek')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-7">
                                <div class="form-group">
                                    <label for="nama_pengirim">Nama Pengirim</label>
                                    <input type="text" class="form-control @error('nama_pengirim') is-invalid @enderror"
                                        placeholder="Nama Pengirim..." name="nama_pengirim"
                                        value="{{ old('nama_pengirim') }}" id="nama_pengirim">
                                    @error('nama_pengirim')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="form-group">
                                    <label for="nama_bank">Nama Bank</label>
                                    <input type="text" class="form-control @error('nama_bank') is-invalid @enderror"
                                        placeholder="Nama Bank" name="nama_bank" value="{{ old('nama_bank') }}"
                                        id="nama_bank">
                                    @error('nama_bank')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="note">Catatan</label>
                            <input type="text" class="form-control @error('note') is-invalid @enderror"
                                placeholder="Masukkan Catatan" name="note" value="{{ old('note') }}" id="note">
                            @error('note')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="bukti">Bukti Transfer</label>
                            <div class="custom-file">
                                <input type="file" name="image" id="image" class="custom-file-input">
                                <label for="image" class="custom-file-label">Pilih Gambar</label>
                                @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <small class="text-danger">Maksimum File: 2MB. Format yang didukung: JPG, PNG,
                                    JPEG.</small>
                            </div>
                        </div>
                        <button type=" submit" class="btn bg-purple btn-block">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-8 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">List Pembayaran Saya</h4>
                <br>
                <table class="mt-2 table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Nama Pengirim</th>
                            <th scope="col">No. Rek</th>
                            <th scope="col">Note</th>
                            <th scope="col">Status</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($payments as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ date('d-m-Y',strtotime($item->date)) }}</td>
                            <td>{{ $item->from_name }}</td>
                            <td>{{ $item->from_rek }} - ({{ $item->from_bank_name }})</td>
                            <td>{{ $item->note }}</td>
                            <td>@if($item->verified == 1) Diterima @else Menunggu @endif</td>
                            <td>
                                <form action="" method="POST" class="form-delete" id="form-delete">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="badge badge-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="20">Data Pembayaran Belum Ada</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
    $('.form-delete').on('submit', function(e){
            var form = this;
            e.preventDefault();

            swal({
                title: "Apakah Anda Yakin?",
                text: "Data yang akan dihapus tidak bisa dikembalikan!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
                })
                .then((willDelete) => {
                if (willDelete) {
                    return form.submit();
                } 
            });
        });
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