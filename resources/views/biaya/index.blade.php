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
                    <th scope="col">Bukti Transfer</th>
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
                    <td>
                        <a href="{{ asset('assets/images/bukti_transfer/') }}/{{ $payment->bukti }}"
                            data-toggle="lightbox" data-gallery="gallery">
                            <img src="{{ asset('assets/images/bukti_transfer/') }}/{{ $payment->bukti }}"
                                class="imggallery">
                        </a>
                    </td>
                    <td>@if($payment->verified_by){{ $payment->verified_by }}@else Belum Divalidasi @endif</td>
                    <td>
                        @if ($payment->verified ===1)
                        <a href="{{ route('biaya.print', ['id'=>$payment->id_payment]) }}"
                            class="badge bg-purple">Detail</a>
                        <a href="{{ route('biaya.edit', ['biaya'=>$payment->id_payment]) }}"
                            class="badge badge-info">Edit Pembayaran</a>
                        @else
                        @php
                        $pesan = "Apakah Anda Yakin Ingin Memvalidasi Pembayaran User $payment->nama_siswa?"
                        @endphp
                        <a href="{{ route('biaya.validatePayment', ['biaya'=>$payment->id_payment]) }}"
                            class="badge bg-fuchsia" onclick='return confirm("{{$pesan}}")'>Validasikan Pembayaran</a>
                        @endif
                        <form action="{{ route('biaya.destroy', ['biaya'=>$payment->id_payment]) }}" method="POST"
                            class="d-inline form-delete">
                            @method('delete')
                            @csrf
                            <button type="submit" class="badge badge-danger">Hapus</button>
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

<script>
    $(document).on("click", '[data-toggle="lightbox"]', function(event){
      event.preventDefault();
      $(this).ekkoLightbox();
    });
</script>
@endsection