{{-- @dd($ceksiswa) --}}
@extends('layouts.dashboard')

@section('judul', 'Cetak Kartu Ujian')

@section('konten')
@php $id = Auth::user()->id_user @endphp
<form method="POST" action="{{ route('examcard.post') }}">
    @csrf
    <div class="container">
        <div class="alert alert-info" role="alert">
            Untuk Fotokopi Berkas Pendukung <b>( KK, AKTE KELAHIRAN, IJAZAH, SKHUN, RAPORT KELAS @role('SMP') 4,5,6 SD
                @endrole @hasanyrole('SMA|SMK')
                7,8,9 SMP
                @endrole)</b> Masing-masing 1
            lembar. harap dibawa maksimal H-1 Sebelum ujian berlangsung, terima kasih.
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="text-center" colspan="3">Persyaratan Cetak Kartu Ujian</th>
                </tr>
                <tr>
                    <th class="text-center" scoxpe="col">Persyaratan</th>
                    <th class="text-center" scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Membayar Biaya Pendaftaran/Formulir</td>
                    <td @if ($ceksiswa->bayar_pendaftaran === 1) class="badge-success text-center" @else
                        class="badge-success text-center" @endif>
                        @if ($ceksiswa->bayar_pendaftaran === 1) Sudah @else Belum @endif
                    </td>
                </tr>
                <tr>
                    <td><a href="{{ route('biodata.index') }}">Mengisi Biodata Siswa</a></td>
                    <td @if ($valid_id==="Sudah" ) class="badge-success text-center" @else
                        class="badge-danger text-center" @endif">
                        {{ $valid_id }}
                    </td>
                </tr>
                <tr>
                    <td><a href="{{ route('avatar') }}">Mengupload Pas Foto (opsional)</a></td>
                    <td @if ($ceksiswa->photo !== "default.jpg") class="badge-success text-center" @else
                        class="badge-danger text-center" @endif>
                        @if ($ceksiswa->photo !== "default.jpg") Sudah @else Belum @endif
                    </td>
                </tr>
                <tr>
                    <td><a href="{{ route('orangtua.index') }}">Mengisi Biodata Orangtua Siswa</a></td>
                    <td @if ($cekOrtu==="Sudah" ) class="badge-success text-center" @else
                        class="badge-danger text-center" @endif>
                        @if ($cekOrtu === "Sudah") Sudah @else Belum @endif
                    </td>
                </tr>
            </tbody>
        </table>
        @if ($cekOrtu==="Sudah" && $ceksiswa->bayar_pendaftaran === 1 && $valid_id==="Sudah")
        <button type="submit" class="btn btn-primary btn-block my-4" id="btn-submit">Cetak!</button>
        @endif
    </div>
</form>

@endsection
@if ($cekOrtu==="Sudah" && $ceksiswa->bayar_pendaftaran === 1 && $valid_id==="Sudah")
@section('js')
<script>
    $('#btn-submit').on('click',function(e){
    e.preventDefault();
    var form = $(this).parents('form');
    swal({
  title: "Cetak Kartu Ujian?",
  text: "Setelah Menekan Tombol OK, Data Yang Ananda Masukkan Tidak Akan Bisa Diubah Kembali dan Ananda Dapat Mencetak Kartu Ujian.",
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

@endif