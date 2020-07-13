@extends('layouts.dashboard')
@section('konten')
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

        if ($user->bayar_pendaftaran === 1) {
        $status_bayar = "Sudah";
        } else {
        $status_bayar = "Belum";
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
            <td>{{ $status_bayar }}</td>
            <td>{{ $status_lulus }}</td>
            <td>
                @hasanyrole('Super Admin|Admin - Keuangan')
                <a href="{{ route('biaya.index') }}" class="badge bg-purple">Buat Invoice</a>
                @endhasanyrole
                @unlessrole('Admin - Keuangan')
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

            // swal({
            //     title: 'Apa anda yakin ingin menghapus siswa ?',
            //     text: "Data yang dihapus tidak bisa dikembalikan!",
            //     type: 'warning',
            //     showCancelButton: true,
            //     confirmButtonColor: '#3085d6',
            //     cancelButtonColor: '#d33',
            //     confirmButtonText: 'Hapus'
            // }).then((result) => {
            //     if (result.value) {
            //         return form.submit();
            //     }
            // })
        });
</script>


@endsection