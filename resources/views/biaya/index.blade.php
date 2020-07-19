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
                    <th scope="col">Tanggal</th>
                    <th scope="col">Note</th>
                    <th scope="col">Divalidasi Oleh</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($payment as $payment)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $payment->id_invoice }}</td>
                    <td>{{ $payment->nama_siswa }} ({{ $payment->role_siswa }})</td>
                    <td>{{ date('d F Y', strtotime($payment->date)) }}</td>
                    <td>{{ $payment->note }}</td>
                    <td>@if($payment->verified_by){{ $payment->verified_by }}@else Belum Divalidasi @endif</td>
                    <td>
                        <a href="{{ route('biaya.print', ['id'=>$payment->id_payment]) }}"
                            class="badge bg-purple">Print</a>
                        <a href="{{ route('biaya.edit', ['biaya'=>$payment->id_payment]) }}"
                            class="badge badge-info">Detail</a>
                        <form action="{{ route('biaya.destroy', ['biaya'=>$payment->id_payment]) }}" method="POST"
                            class="d-inline form-delete">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-xs btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" align="center">Data Tidak Ditemukan</td>
                </tr>
                @endforelse
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