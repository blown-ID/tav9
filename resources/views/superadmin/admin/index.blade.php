@php
$id = Auth::user()->id_user;
@endphp

@extends('layouts.dashboard')
@section('konten')
<div class="row">
    <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="clearfix">
                    <h4 class="card-title float-left">Tambah Admin</h4>
                    <br>
                    <form class="mt-2" action="{{ route('admin.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama Admin</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                placeholder="Masukkan Nama Admin" name="nama" value="{{ old('nama') }}" id="nama">
                            @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control @error('username') is-invalid @enderror"
                                placeholder="Masukkan Username Admin" value="{{ old('username') }}" name="username"
                                id="username">
                            @error('username')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                placeholder="Masukkan Password" name="password" id="password">
                            @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="role">Role</label>
                            <select class="form-control @error('role') is-invalid @enderror" id="role" name="role"
                                value="{{ old('role') }}">
                                <option selected disabled>---Pilih Role---</option>
                                @foreach ($role as $role)
                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                            @error('role')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type=" submit" class="btn bg-purple btn-block">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-8 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">List Admin</h4>
                <br>
                <table class="mt-2 table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama Admin</th>
                            <th scope="col">Username</th>
                            <th scope="col">Role</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($admin as $admin)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $admin->nama }}</td>
                            <td>{{ $admin->email }}</td>
                            <td>{{ $admin->role_name }}</td>
                            <td>
                                @if ($id !== $admin->id_user)
                                <form action="{{ route('admin.destroy', ['admin'=>$admin->id_user]) }}" method="POST"
                                    class="form-delete" id="form-delete">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="badge badge-danger">Hapus</button>
                                </form>
                                @else
                                <p class="badge badge-success">Anda</p>
                                @endif
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="text-center">Data Tidak Ditemukan</td>
                        </tr>
                        @endforelse
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