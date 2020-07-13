@extends('layouts.dashboard')
@section('konten')
<p>Harap Lengkapi Data Orang Tua Dengan Sebenar-benarnya.</p>

<form action="{{ route('mgtSMA.updateparents', ['id'=>$user->id_user]) }}" method="post">
    @csrf
    <table class="table table-bordered text-center">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Ayah (Kandung/Wali)</th>
                <th scope="col">Ibu (Kandung/Wali)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Nama Lengkap</td>
                <td>
                    <input type="text" name="nama_ayah" class="form-control @error('nama_ayah') is-invalid @enderror"
                        value="{{ old('nama_ayah') ?? $orangtua->nama_ayah ?? '' }}">
                    @error('nama_ayah')
                    <small class="text-danger"> {{ $message }} </small>
                    @enderror
                </td>
                <td>
                    <input type=" text" name="nama_ibu" class="form-control @error('nama_ibu') is-invalid @enderror"
                        value="{{ old('nama_ibu') ?? $orangtua->nama_ibu ?? '' }}">
                    @error('nama_ibu')
                    <small class="text-danger"> {{ $message }} </small>
                    @enderror
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Alamat Rumah</td>
                <td>
                    <input type="text" name="alamat_ayah"
                        class="form-control @error('alamat_ayah') is-invalid @enderror"
                        value="{{ old('alamat_ayah') ?? $orangtua->alamat_ayah ?? '' }}">
                    @error('alamat_ayah')
                    <small class="text-danger"> {{ $message }} </small>
                    @enderror
                </td>
                <td>
                    <input type="text" name="alamat_ibu" class="form-control @error('alamat_ibu') is-invalid @enderror"
                        value="{{ old('alamat_ibu') ?? $orangtua->alamat_ibu ?? '' }}">
                    @error('alamat_ibu')
                    <small class="text-danger"> {{ $message }} </small>
                    @enderror
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Nomor Telepon</td>
                <td>
                    <input type="text" name="telp_ayah" class="form-control @error('telp_ayah') is-invalid @enderror"
                        value="{{ old('telp_ayah') ?? $orangtua->telp_ayah ?? '' }}">
                    @error('telp_ayah')
                    <small class="text-danger"> {{ $message }} </small>
                    @enderror
                </td>
                <td>
                    <input type="text" name="telp_ibu" class="form-control @error('telp_ibu') is-invalid @enderror"
                        value="{{ old('telp_ibu') ?? $orangtua->telp_ibu ?? '' }}">
                    @error('telp_ibu')
                    <small class="text-danger"> {{ $message }} </small>
                    @enderror
                </td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>Pendidikan Tertinggi</td>
                <td>
                    <input type="text" name="pendidikan_ayah"
                        class="form-control @error('pendidikan_ayah') is-invalid @enderror"
                        value="{{ old('pendidikan_ayah') ?? $orangtua->pendidikan_ayah ?? ''}}">
                    @error('pendidikan_ayah')
                    <small class="text-danger"> {{ $message }} </small>
                    @enderror
                </td>
                <td>
                    <input type="text" name="pendidikan_ibu"
                        class="form-control @error('pendidikan_ibu') is-invalid @enderror"
                        value="{{ old('pendidikan_ibu') ?? $orangtua->pendidikan_ibu ?? '' }}">
                    @error('pendidikan_ibu')
                    <small class="text-danger"> {{ $message }} </small>
                    @enderror
                </td>
            </tr>
            <tr>
                <th scope="row">5</th>
                <td>Pekerjaan</td>
                <td>
                    <input type="text" name="pekerjaan_ayah"
                        class="form-control @error('pekerjaan_ayah') is-invalid @enderror"
                        value="{{ old('pekerjaan_ayah') ?? $orangtua->pekerjaan_ayah ?? '' }}">
                    @error('pekerjaan_ayah')
                    <small class="text-danger"> {{ $message }} </small>
                    @enderror
                </td>
                <td>
                    <input type="text" name="pekerjaan_ibu"
                        class="form-control @error('pekerjaan_ibu') is-invalid @enderror"
                        value="{{ old('pekerjaan_ibu') ?? $orangtua->pekerjaan_ibu ?? '' }}">
                    @error('pekerjaan_ibu')
                    <small class="text-danger"> {{ $message }} </small>
                    @enderror
                </td>
            </tr>
            <tr>
                <th scope="row">6</th>
                <td>Penghasilan</td>
                <td>
                    <input type="text" name="penghasilan_ayah"
                        class="form-control @error('penghasilan_ayah') is-invalid @enderror" id="rupiah"
                        value="{{ old('penghasilan_ayah') ?? $orangtua->penghasilan_ayah ?? '' }}">
                    @error('penghasilan_ayah')
                    <small class="text-danger"> {{ $message }} </small>
                    @enderror
                </td>
                <td>
                    <input type="text" name="penghasilan_ibu"
                        class="form-control @error('penghasilan_ibu') is-invalid @enderror" id="rupiah2"
                        value="{{ old('penghasilan_ibu') ?? $orangtua->penghasilan_ibu ?? '' }}">
                    @error('penghasilan_ibu')
                    <small class="text-danger"> {{ $message }} </small>
                    @enderror
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <button type="submit" class="btn bg-purple btn-block">Simpan Data</button>
                </td>
            </tr>
        </tbody>
    </table>
</form>

@endsection

@section('js')
<script>
    var rupiah = document.getElementById("rupiah");
    rupiah.addEventListener("keyup", function(e) {
    rupiah.value = formatRupiah(this.value, "Rp. ");
});

    var rupiah2 = document.getElementById("rupiah2");
    rupiah2.addEventListener("keyup", function(e) {
    rupiah2.value = formatRupiah(this.value, "Rp. ");
});

function formatRupiah(angka, prefix) {
  var number_string = angka.replace(/[^,\d]/g, "").toString(),
    split = number_string.split(","),
    sisa = split[0].length % 3,
    rupiah = split[0].substr(0, sisa),
    ribuan = split[0].substr(sisa).match(/\d{3}/gi);

  if (ribuan) {
    separator = sisa ? "." : "";
    rupiah += separator + ribuan.join(".");
  }

  rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
  return prefix == undefined ? rupiah : rupiah ? "Rp. " + rupiah : "";
}

</script>
@endsection