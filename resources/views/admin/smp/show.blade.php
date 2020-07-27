@extends('layouts.dashboard')
@section('konten')
<h6>Detail Siswa: {{ $user->nama }}</h6>
<div class="container">
    <div class="col-12 text-center my-3">
        <a href="{{ route('mgtSMP.edit', ['mgtSMP'=>$user->id_user]) }}" class="btn bg-purple m-2">Edit Biodata Calon
            Siswa</a>
        <a href="{{ route('mgtSMP.editparents', ['id'=>$user->id_user]) }}" class="btn bg-purple m-2">Edit Data Orangtua
            Calon Siswa</a>
        <a href="#" class="btn bg-purple m-2" data-toggle="modal" data-target="#gantipassword">Ganti Password Calon
            Siswa</a>
        <form action="{{ route('mgtSMP.printkartu', ['id'=>$user->id_user]) }}" class="d-inline" method="post">
            @csrf
            <button type="submit" class="d-inline btn bg-purple m-2" id="btn-submit">Cetak Kartu Ujian</button>
        </form>
        <a href="#" class="btn bg-purple m-2" data-toggle="modal" data-target="#inputnilaimodal">Input Nilai Ujian</a>
    </div>

    <h5 class="my-3 text-center">Biodata Calon Siswa</h5>
    <table class="table table-hover table-bordered">
        <tbody>
            <tr>
                <td>Pas Foto (Opsional)</td>
                <td>
                    <img class="img-thumbnail" style="height: 75px; width: 75px;"
                        src="{{ asset('assets') }}/images/profile/{{ $user->photo }}">
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>{{ $user->email ?? '' }}</td>
            </tr>
            <tr>
                <td>No. Pendaftaran</td>
                <td>{{ $siswa->no_daftar ?? '' }}</td>
            </tr>
            <tr>
                <td>NISN</td>
                <td>{{ $siswa->nisn ?? '' }}</td>
            </tr>
            <tr>
                <td>NIK</td>
                <td>{{ $siswa->nik ?? '' }}</td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td>{{$user->nama }}</td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                @if ($siswa->jenis_kel ?? '')
                @if ($siswa->jenis_kel === "L")
                <td>Laki - Laki</td>
                @else
                <td>Perempuan</td>
                @endif
                @else
                <td></td>
                @endif
            </tr>
            <tr>
                <td>Tempat & Tanggal Lahir</td>
                @if ($siswa->tempat_lahir ?? '')
                <td>{{ $siswa->tempat_lahir }}, {{ date('d M Y', strtotime($siswa->tgl_lahir))}}</td>
                @else
                <td></td>
                @endif
            </tr>
            <tr>
                <td>Alamat Rumah</td>
                <td>{{ $siswa->alamat_rumah ?? '' }}</td>
            </tr>
            <tr>
                <td>No. Telepon</td>
                <td>{{$user->no_telp }}</td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>{{ $siswa->agama ?? '' }}</td>
            </tr>
            <tr>
                <td>Kewarganegaraan</td>
                <td>{{ $siswa->kewarganegaraan ?? '' }}</td>
            </tr>
            <tr>
                <td>Asal Sekolah</td>
                <td>{{ $siswa->asal_sekolah ?? '' }}</td>
            </tr>
            <tr>
                <td>Alamat Sekolah</td>
                <td>{{ $siswa->alamat_sekolah ?? '' }}</td>
            </tr>
            <tr>
                <td>Bahasa Sehari-hari</td>
                <td>{{ $siswa->bahasa_rumah ?? '' }}</td>
            </tr>
            <tr>
                <td>Anak-ke</td>
                <td>{{ $siswa->anak_ke  ?? '-' }} dari {{ $siswa->jumlah_saudara ?? '-' }} bersaudara</td>
            </tr>
            <tr>
                <td>Golongan Darah</td>
                <td>{{ $siswa->golongan_darah ?? '' }}</td>
            </tr>
        </tbody>
    </table>
</div>

<div class="modal fade" id="inputnilaimodal" tabindex="-1" role="dialog" aria-labelledby="inputnilaimodalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="inputnilaimodalLabel">Input Nilai Ujian Untuk: {{ $user->nama }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('mgtSMP.updatenilai', ['id'=>$user->id_user]) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="tkd">Tes Kemampuan Dasar</label>
                        <input type="number" class="form-control" name="tkd" id="tkd" placeholder="Masukkan Nilai TKD"
                            value="{{ $nilai->tkd ?? '' }}" min="0" max="100">
                    </div>
                    <div class="form-group">
                        <label for="tpa">Tes Potensi Akademik</label>
                        <input type="number" class="form-control" name="tpa" id="tpa" placeholder="Masukkan Nilai TPA"
                            value="{{ $nilai->tpa ?? '' }}" min="0" max="100">
                    </div>
                    <div class="form-group">
                        <label for="taq">Tes Al-Qur'an</label>
                        <input type="number" class="form-control" name="taq" id="taq" placeholder="Masukkan Nilai TAQ"
                            value="{{ $nilai->taq ?? '' }}" min="0" max="100">
                    </div>
                    <div class="form-group">
                        <label for="seragam">Ukuran Seragam</label>
                        <select class="form-control" id="seragam" name="seragam">
                            <option value="S" @if($nilai) @if($nilai->seragam === 'S') selected @endif @endif>S</option>
                            <option value="M" @if($nilai) @if($nilai->seragam === 'M') selected @endif @endif>M</option>
                            <option value="L" @if($nilai) @if($nilai->seragam === 'L') selected @endif @endif>L</option>
                            <option value="XL" @if($nilai) @if($nilai->seragam === 'XL') selected @endif @endif>XL
                            </option>
                            <option value="XXL" @if($nilai) @if($nilai->seragam === 'XXL') selected @endif @endif>XXL
                            </option>
                        </select>
                    </div>
                    <p>Rata Rata Nilai: {{ $nilai->rata ?? '-' }}</p>
                    <p>Gelombang: {{ $user->dgk }}. Status Lulus: @if($user->is_lulus === 1) "Lulus"
                        @elseif($user->is_lulus === 2)
                        Tidak Lulus @else Menunggu Nilai... @endif</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn bg-purple">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="gantipassword" tabindex="-1" role="dialog" aria-labelledby="gantipasswordLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="gantipasswordLabel">Ganti Password: {{ $user->nama }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('mgtSMP.updatepassword', ['id'=>$user->id_user]) }}" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        @csrf
                        <label for="password">Masukkan Password Baru</label>
                        <input type="password" class="form-control" name="password" id="password"
                            placeholder="Masukkan Password Baru untuk {{ $user->nama }}">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn bg-purple">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

{{-- @if ($cekOrtu==="Sudah" && $ceksiswa->bayar_pendaftaran === 1 && $valid_id==="Sudah") --}}
@section('js')
<script>
    $('#btn-submit').on('click',function(e){
    e.preventDefault();
    var form = $(this).parents('form');
    swal({
  title: "Cetak Kartu Ujian?",
  text: "Pastikan Data Calon Siswa Sudah Benar dan Lengkap. Calon Siswa Sudah Tidak Dapat Merubah Data Mereka Setelah Kartu Dicetak.",
  icon: "info",
  buttons: true,
})
.then((cetak) => {
  if (cetak) {
    return form.submit();
  }
});
});
</script>
@endsection

{{-- @endif --}}