@extends('layouts.dashboard')
@section('konten')
@php
$get_id_jenjang = request()->route('id');
@endphp
<div class="col-12 text-center my-3">
    <a href="{{ url('editbiaya/1') }}" class="btn bg-purple m-2">Pengaturan Biaya SMP</a>
    <a href="{{ url('editbiaya/2') }}" class="btn bg-purple m-2">Pengaturan Biaya SMA</a>
    <a href="{{ url('editbiaya/3') }}" class="btn bg-purple m-2">Pengaturan Biaya SMK</a>
</div>
<p>Pengaturan Biaya: {{ $jenjang->nama_jenjang ?? '' }}</p>
@if($get_id_jenjang !== null)
<form action="{{ route('settings.editbiaya', ['id'=>$get_id_jenjang]) }}" method="POST">
    @csrf
    @method('put')
    <table class="table table-bordered text-center">
        <tbody>
            <tr>
                <td class="align-middle" rowspan="2">NO</td>
                <td class="align-middle" rowspan="2">URAIAN BIAYA</td>
                <td colspan="2">JUMLAH</td>
            </tr>
            <tr>
                <td>PUTRA</td>
                <td>PUTRI</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Formulir Pendaftaran</td>
                <td colspan="2">
                    <input type="number" name="formulir" id="formulir" class="form-control"
                        value="{{ old('formulir') ?? $item[0]->price }}" placeholder="Masukkan Biaya Formulir...">
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Sarana Pendidikan</td>
                <td colspan="2">
                    <input type="number" name="sarana" id="sarana" class="form-control"
                        value="{{ old('sarana') ?? $item[1]->price }}" placeholder="Masukkan Biaya Sarana...">
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>SPP/Bulan</td>
                <td colspan="2">
                    <input type="number" name="spp" id="spp" class="form-control"
                        value="{{ old('spp') ?? $item[2]->price}}" placeholder="Masukkan Biaya SPP...">
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>POMG/Bulan</td>
                <td colspan="2">
                    <input type="number" name="pomg" id="pomg" class="form-control"
                        value="{{ old('pomg') ?? $item[3]->price}}" placeholder="Masukkan Biaya POMG..."></td>
            </tr>
            <tr>
                <td>5</td>
                <td>Buku/Tahun</td>
                <td colspan="2">
                    <input type="number" name="buku" id="buku" class="form-control"
                        value="{{ old('buku') ?? $item[4]->price}}" placeholder="Masukkan Biaya Buku..."></td>
            </tr>
            <tr>
                <td>6</td>
                <td>Seragam</td>
                <td>
                    <input type="number" name="seragam_l" id="seragam_l" class="form-control"
                        value="{{ old('seragam_l') ?? $item[5]->price}}"
                        placeholder="Masukkan Biaya Seragam (Putra)...">
                </td>
                <td>
                    <input type="number" name="seragam_p" id="seragam_p" class="form-control"
                        value="{{ old('seragam_p') ?? $item[6]->price}}"
                        placeholder="Masukkan Biaya Seragam (Putri)...">
                </td>
            </tr>
            <tr>
                <td>7</td>
                <td>Kesehatan</td>
                <td colspan="2">
                    <input type="number" name="kesehatan" id="kesehatan" class="form-control"
                        value="{{ old('kesehatan') ?? $item[7]->price}}" placeholder="Masukkan Biaya Kesehatan...">
                </td>
            </tr>
            <tr>
                <td>8</td>
                <td>Program/Tahun</td>
                <td colspan="2">
                    <input type="number" name="program" id="program" class="form-control"
                        value="{{ old('program') ?? $item[8]->price}}" placeholder="Masukkan Biaya Program Tahunan...">
                </td>
            </tr>
        </tbody>
    </table>
    <div class="row">
        <div class="col">
            <a href="{{ route('settings.index') }}" class="btn btn-secondary my-3 btn-block">Kembali</a>
        </div>
        <div class="col">
            <button type="submit" class="btn bg-purple my-3 btn-block">Simpan</button>
        </div>
    </div>
</form>
@endif
@endsection


{{-- @section('js')
<script>
    $('#jenjang').change(function(){
    var id = $(this).val();
    var url = '{{ route("settings.getdetails", ":id") }}';
url = url.replace(':id', id);

$.ajax({
url: url,
type: 'get',
dataType: 'json',
success: function(response){
if(response != null){
console.log(response)
$('#formulir').val(response.rev_no);
// $('#title').val(response.title);
}
}
});
});
</script>
@endsection --}}