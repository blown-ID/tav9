@extends('layouts.dashboard')
@section('konten')
<div class="invoice p-3 mb-3">
    <!-- title row -->
    <div class="row">
        <div class="col-12">
            <h4>
                <img src="{{ asset('assets/images/alfidaa.png') }}" alt="Alfidaa Cendikia Logo" class="brand-image mr-3"
                    width="50px"><span class="alfidaa">Al Fidaa Cendikia</span>
                <small class="float-right">Date: {{ date('d F Y') }}</small>
            </h4>
        </div>
        <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
            Dari
            <address>
                <strong>Lee MG</strong><br>
                No. Rek: (804) 123-5432<br>
                Email: leemg@gmail.com
            </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
            Kepada
            <address>
                <strong>Yayasan Islam Al Fidaa</strong><br>
                No. Rek: (555) 539-1037<br>
                Email: admin@alfidaacendikia.sch.id
            </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
            <b>Invoice #12365645654</b><br>
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
                    <tr>
                        <td>1</td>
                        <td>Uang Seragam</td>
                        <td>SMP</td>
                        <td>Rp. 380.000</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

    <div class="row">
        <!-- accepted payments column -->
        <div class="col-6">
            <p class="lead">Pembayaran Melalui:</p>
            <img src="https://awsimages.detik.net.id/community/media/visual/2017/03/29/f29e7493-2c71-42e1-99d1-ca5115c6d9dd.png?w=700&q=80"
                alt="Visa" width="150px">

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
                            <td>Rp. 380.000</td>
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
            <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
            <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                <i class="fas fa-download"></i> Download PDF
            </button>
        </div>
    </div>
</div>
@endsection