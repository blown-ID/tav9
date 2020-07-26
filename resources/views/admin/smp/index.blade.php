@extends('layouts.dashboard')
@section('konten')
@hasrole('Super Admin|Admin SMP')
<a class="btn text-white mb-3 btn-success" href="{{ route('laporansmp') }}">
    <i class="far fa fa-file-excel mr-2"></i> Unduh Data (Excel)
</a>
@endhasrole
<table class="table table-bordered table-hover dataTable dtr-inline" id="table">
    <thead>
        <tr>
            <th>No. Daftar</th>
            <th>Nama Lengkap</th>
            <th>E-Mail</th>
            <th>Status Bayar</th>
            <th>Status Lulus</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($users as $user)

        @php
        if ($user->is_lulus === 0) {
        $status_lulus = "Menunggu";
        } elseif ($user->is_lulus === 1) {
        $status_lulus = "Lulus";
        } else {
        $status_lulus = "Ditolak";
        }

        if (!$user->no_daftar) {
        $noDaftar = "Belum Isi Data";
        } else {
        $noDaftar = $user->no_daftar;
        }


        @endphp
        <tr>
            <td>{{ $noDaftar }}</td>
            <td>{{ $user->nama }}</td>
            <td>{{ $user->email }}</td>
            <td class="text-center">
                @if ($user->bayar_pendaftaran === 1)
                Sudah
                @else
                <span>Belum</span>
                @endif
            </td>
            {{-- <td>{{ $status_bayar }}</td> --}}
            <td>{{ $status_lulus }}</td>
            <td>
                @hasanyrole('Super Admin|Admin Keuangan')
                <a href="{{ route('biaya.buat', ['id'=>$user->id_user]) }}" class="badge badge-success">Buat
                    Invoice</a>
                @endhasanyrole
                @unlessrole('Admin Keuangan')
                <a href="{{ route('mgtSMP.show', ['mgtSMP'=>$user->id_user]) }}" class="badge badge-primary">Detail</a>
                <form action="{{ route('mgtSMP.destroy', ['mgtSMP'=>$user->id_user]) }}" method="POST"
                    class="form-delete d-inline" id="form-delete">
                    @method('delete')
                    @csrf
                    <button type="submit" class="badge badge-danger d-inline">Hapus</button>
                </form>
                @endunlessrole
            </td>
        </tr>
        @empty
        <td colspan="6" class="text-center">Data Tidak Ditemukan</td>
        @endforelse
    </tbody>
</table>
@endsection
@section('js')
<script>
    $(function () {
        $("#table").DataTable({
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

        // $('.form-confirm-payment').on('submit', function(e){
        //     var form = this;
        //     e.preventDefault();

        //     swal({
        //         title: "Apakah Anda Yakin?",
        //         text: "Anda Akan Mengkonfirmasi Pembayaran Formulir. Setelah dikonfirmasi, user ini dapat mengisi biodata.",
        //         icon: "info",
        //         buttons: true,
        //         })
        //         .then((proses) => {
        //         if (proses) {
        //             return form.submit();
        //         } 
        //     });
        // });
</script>


@endsection