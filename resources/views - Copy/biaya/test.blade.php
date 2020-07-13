@extends('layouts.dashboard')

@section('konten')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center"><img src="{{ asset('assets') }}/images/alfidaa.png" alt="" height="150px"><span
                        class="alfidaa ml-3" style="font-size: 36px">Al
                        Fidaa Cendikia</span>
                </div>
            </div>
            <div class="col-md-6 mt-4">
                <table>
                    <tbody>
                        <tr>
                            <td width="30%">Nama Siswa</td>
                            <td>:</td>
                            <td>Lee MG</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td>Jl. Raya Siliwangi No. 6</td>
                        </tr>
                        <tr>
                            <td>No Telp</td>
                            <td>:</td>
                            <td>123654789</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td>leemg@gmail.com
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-6 mt-4">
                <table>
                    <tbody>
                        <tr>
                            <td width="30%">Nama Sekolah</td>
                            <td>:</td>
                            <td>Al Fidaa Cendikia</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td>Jl. Damai No.8</td>
                        </tr>
                        <tr>
                            <td>No Telp</td>
                            <td>:</td>
                            <td>021 123654789</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td>admin@alfidaacendikia.sch.id</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-12 mt-3">
                <form action="http://localhost:9999/invoice/4" method="post"><input type="hidden" name="_token"
                        value="mlXH0lGbrur2s0fz7SxN4eeN92XV9gexb2v9dNKp">
                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <td>#</td>
                                <td>Biaya Yang Dibayarkan</td>
                                <td>Harga</td>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Uang Seragam</td>
                                <td>Rp. 385.000</td>
                                <td><input type="hidden" name="_token" value="mlXH0lGbrur2s0fz7SxN4eeN92XV9gexb2v9dNKp">
                                    <input type="hidden" name="_method" value="DELETE" class="form-control"> <button
                                        class="btn btn-danger btn-sm">Hapus</button></td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="3">
                                    <select name="" id="" class="form-control">
                                        <option value="" selected disabled>---Pilih Biaya---</option>
                                        <option value="#">Uang Seragam</option>
                                        <option value="#">Uang Gedung</option>
                                        <option value="#">Uang dll</option>
                                    </select>
                                </td>
                                <td><a href="#" class="btn bg-purple btn-sm">Tambah</a></td>
                            </tr>
                        </tfoot>
                    </table>
                </form>
            </div>
            <div class="col-md-4 offset-md-8">
                <table class="table table-hover table-bordered">
                    <tbody>
                        <tr>
                            <td>Total</td>
                            <td>:</td>
                            <td>Rp 385.000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection