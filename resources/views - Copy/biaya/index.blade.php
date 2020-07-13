@extends('layouts.dashboard')
@section('konten')
<div class="card">
    <div class="card-body">
        <p>Untuk menambah invoice, silahkan pilih data siswa terlebih dahulu di menu manajemen siswa.</p>
        <table id="invoice" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">ID Invoice</th>
                    <th scope="col">Nama Siswa</th>
                    <th scope="col">Dari Rekening</th>
                    <th scope="col">Divalidasi Oleh</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>ID_INV_0001</td>
                    <td>Lee MG</td>
                    <td>1050920157</td>
                    <td>Super Admin</td>
                    <td>
                        <a href="{{ route('biaya.print') }}" class="badge bg-navy">Print</a>
                        <a href="{{ route('biaya.test') }}" class="badge badge-info">Detail</a>
                        <a href="#" class="badge badge-danger">Hapus</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('js')
<script>
    $(function() {
        $("#invoice").DataTable({
            "responsive": true,
            "autoWidth": false,
            "info": true,
        });
    });
</script>
@endsection