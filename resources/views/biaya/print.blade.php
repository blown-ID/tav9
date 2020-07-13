@extends('layouts.dashboard')
@section('konten')
<div class="invoice p-3 mb-3">
    <!-- title row -->
    <div class="row">
        <div class="col-12">
            <h4>
                <img src="{{ asset('assets/images/alfidaa.png') }}" alt="Alfidaa Cendikia Logo" class="brand-image mr-3"
                    width="50px"><span class="alfidaa">Al Fidaa Cendikia</span>
                <small class="float-right">Tanggal: {{ date('d F Y', strtotime($payment->date)) }}</small>
            </h4>
        </div>
        <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
            Dari
            <address>
                <strong>{{ $payment->from_name }}</strong><br>
                No. Rek: {{ $payment->from_rek . ' - ' . $payment->from_bank_name }}<br>
                Email: {{ $user->email }}
            </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
            Kepada
            <address>
                <strong>{{ $setting->pemilik_rek }}</strong><br>
                No. Rek: {{ $setting->no_rek . ' - ' . $setting->nama_bank }}<br>
                Email: admin@alfidaacendikia.sch.id
            </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
            <b>Invoice #{{ $payment->id_invoice }}</b><br>
            <b>Nama Siswa:</b> {{ $user->nama }}<br>
            <b>Catatan:</b> {{ $payment->note }}<br>
            <br>
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
        <div class="col-12 table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Keterangan</th>
                        <th>Jenjang Pendaftaran</th>
                        <th>Jumlah</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    use App\Item;
                    @endphp
                    @forelse ($payment_detail as $item)
                    @php
                    $list = Item::where('id_item', $item->id_item)->first();
                    @endphp
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $list->nama_item }}</td>
                        <td>{{ $role_name->name }}</td>
                        <td>{{'Rp. ' . number_format($item->price) }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4">Data Tidak Ditemukan</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

    <div class="row">
        <!-- accepted payments column -->
        <div class="col-6">
            <p class="lead">Pembayaran Dikirim Ke Rekening:</p>
            <img src="{{ asset('assets/images/bni.png') }}" alt="Visa" width="150px">

            <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                Kwitansi Pembayaran Dianggap Valid (Sah) Jika Sudah Ditandatangani Dan Di Stempel Oleh Kami (Tekan
                Tombol Download Dibawah Untuk Mengunduh).
            </p>
        </div>
        <!-- /.col -->
        <div class="col-6">

            <div class="table-responsive">
                <table class="table">
                    <tbody>
                        <tr>
                            <th>Total:</th>
                            <td>Rp. {{ number_format($total[0]->total) }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- this row will not appear when printing -->
    <div class="row no-print">
        <div class="col-12">
            <form action="{{ route('biaya.printpayment') }}" method="POST">
                @csrf
                <input type="hidden" name="user_token" id="user_token"
                    value="{{ Crypt::encrypt($payment->id_payment) }}">
                <button type="submit" class="btn bg-purple float-right" style="margin-right: 5px;">
                    <i class="fas fa-download"></i> Download PDF
                </button>
            </form>
        </div>
    </div>
</div>
@endsection