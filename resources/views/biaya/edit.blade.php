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
                            <td>No. Invoice</td>
                            <td>:</td>
                            <td>{{ $payment->id_invoice }}</td>
                        </tr>
                        <tr>
                            <td width="30%">Nama Siswa</td>
                            <td>:</td>
                            <td>{{ $user->nama }} - {{ $role_name }}</td>
                        </tr>
                        <tr>
                            <td>No Telp</td>
                            <td>:</td>
                            <td>{{ $user->no_telp }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td>{{ $user->email }}
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
                            <td>{{ $setting->alamat_sekolah }}</td>
                        </tr>
                        <tr>
                            <td>No Telp</td>
                            <td>:</td>
                            <td>{{ $setting->telp_sekolah }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-12 mt-3">
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
                        @foreach ($payment_detail as $payment_detail)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $payment_detail->nama_item }}</td>
                            <td>Rp. {{ number_format($payment_detail->price) }}</td>
                            <td>
                                <form
                                    action="{{ route('biaya.delete_detail', ['id'=>$payment_detail->id_payment_detail]) }}"
                                    method="POST" class="form-delete" id="form-delete">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <form action="{{ route('biaya.tambah_detail', ['id'=>$payment->id_payment]) }}"
                                method="post">
                                @csrf
                                <td colspan="3">
                                    <select name="detail_bayar" id="" class="form-control">
                                        <option selected disabled>---Pilih Biaya---</option>
                                        @foreach ($item as $item)
                                        <option value="{{ $item->id_item }}">{{ $item->nama_item }} (Rp.
                                            {{ number_format($item->price) }})
                                        </option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>
                                    <button type="submit" class="btn bg-purple btn-sm">Tambah</button>
                                </td>
                            </form>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="col-md-4 offset-md-8">
                <table class="table table-hover table-bordered">
                    <tbody>
                        <tr>
                            <td>Total</td>
                            <td>:</td>
                            <td>Rp. {{ number_format($total[0]->total) }}</td>
                        </tr>
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
@endsection