@extends('layouts.dashboard')
@section('konten')
<a href="" class="btn bg-purple mb-3" data-toggle="modal" data-target="#datasekolahModal">Edit Data
    Sekolah</a>
<a href="{{ route('settings.editbiaya') }}" class="btn bg-purple mb-3">Edit Biaya Pendaftaran</a>
<div class="alert alert-info mb-3" role="alert">
    Untuk Mengedit Gelombang, Silahkan memasukkan gelombang yang ingin di edit pada form pengaturan
    gelombang.
</div>
<div class="row">
    <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="clearfix">
                    <h4 class="card-title float-left">Pengaturan Gelombang</h4>
                    <br>
                    <form class="mt-2" action="{{ route('settings.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nama_gelombang">Gelombang Ke:</label>
                            <input type="number" class="form-control @error('nama_gelombang') is-invalid @enderror"
                                id="nama_gelombang" name="nama_gelombang" placeholder="Masukkan Gelombang" min="1"
                                max="10">
                            @error('nama_gelombang')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tgl_ujian">Tanggal Ujian:</label>
                            <input type="text" name="tgl_ujian" id="datepicker" autocomplete="off"
                                class="form-control @error('tgl_ujian') is-invalid @enderror"
                                placeholder=" Masukkan Tanggal Ujian">
                            @error('tgl_ujian')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nilai_lulus">Nilai Lulus Minimal</label>
                            <input type="number" name="nilai_lulus"
                                class="form-control @error('nilai_lulus') is-invalid @enderror" min="0" max="100"
                                placeholder="Masukkan Nilai Lulus Minimal">
                            @error('nilai_lulus')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
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
                <h4 class="card-title">Detail Gelombang</h4>
                <br>
                <table class="mt-2 table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama Gelombang</th>
                            <th scope="col">Tanggal Ujian</th>
                            <th scope="col">Nilai Lulus</th>
                            <th scope="col">Status</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($gelombang as $gelombang)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            @if ($gelombang->id_gelombang === 1)
                            <td>Tutup Pendaftaran</td>
                            @else
                            <td>Gelombang Ke-{{ $gelombang->nama_gelombang }}</td>
                            @endif
                            <td>@if($gelombang->tgl_ujian) {{ date('d F Y', strtotime($gelombang->tgl_ujian)) }} @else -
                                @endif
                            </td>
                            <td>{{ $gelombang->nilai_lulus }}</td>
                            <td>
                                @if ($gelombang->active === 1)
                                <p class="badge badge-success">Active</p>
                                @endif
                            </td>
                            <td>
                                @if ($gelombang->active === 0)
                                <form action="{{ route('settings.updategelombang', ['id'=>$gelombang->id_gelombang]) }}"
                                    class="d-inline" method="POST">
                                    @csrf
                                    <button type="submit" class="badge badge-info">Set Active</button>
                                </form>
                                @endif
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center">Data Tidak Ditemukan</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="datasekolahModal" tabindex="-1" role="dialog" aria-labelledby="datasekolahModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="datasekolahModalLabel">Pengaturan Aplikasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('updatepengaturan', ['id'=>1]) }}" method="POST">
                    @method('put')
                    @csrf
                    <div class="form-group">
                        <label for="nama_bank">Nama Bank</label>
                        <input type="text" class="form-control" id="nama_bank" name="nama_bank"
                            value="{{ $setting->nama_bank }}" placeholder="Masukkan Nama Bank Sekolah">
                    </div>
                    <div class="form-group">
                        <label for="no_rek">No. Rekening</label>
                        <input type="text" name="no_rek" class="form-control" id="no_rek" value="{{ $setting->no_rek }}"
                            placeholder="Masukkan No. Rekening Sekolah">
                    </div>
                    <div class="form-group">
                        <label for="pemilik_rek">Nama Pemilik Rekening</label>
                        <input type="text" name="pemilik_rek" class="form-control" id="pemilik_rek"
                            value="{{ $setting->pemilik_rek }}" placeholder="Masukkan Nama Pemilik Rekening Sekolah">
                    </div>
                    <div class="form-group">
                        <label for="cp_smp">Kontak Admin SMP</label>
                        <input type="text" name="cp_smp" class="form-control" id="cp_smp" value="{{ $setting->cp_smp }}"
                            placeholder="Masukkan No. HP Admin SMP">
                    </div>
                    <div class="form-group">
                        <label for="cp_sma">Kontak Admin SMA</label>
                        <input type="text" name="cp_sma" class="form-control" id="cp_sma" value="{{ $setting->cp_sma }}"
                            placeholder="Masukkan No. HP Admin SMA">
                    </div>
                    <div class="form-group">
                        <label for="cp_smk">Kontak Admin SMK</label>
                        <input type="text" name="cp_smk" class="form-control" id="cp_smk" value="{{ $setting->cp_smk }}"
                            placeholder="Masukkan No. HP Admin SMK">
                    </div>
                    <div class="form-group">
                        <label for="cp_keuangan">Kontak Keuangan</label>
                        <input type="text" name="cp_keuangan" class="form-control" id="cp_keuangan"
                            value="{{ $setting->cp_keuangan }}" placeholder="Masukkan No. HP Admin SMK">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn bg-purple">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
    $("#datepicker").datepicker({
    dateFormat: "yy-mm-dd",
    changeMonth: true,
    changeYear: true,
    yearRange: "2019:2030"
});

</script>
@endsection