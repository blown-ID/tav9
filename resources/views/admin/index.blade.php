@php
use App\Role;
@endphp
@extends('layouts.dashboard')
@section('judul', 'Dashboard')
@hasrole('Super Admin')
@section('konten')
<div class="row">
    <div class="col-lg-3 col-6">
        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{ $jumlah[0] }}</h3>
                <p>Jumlah Calon Siswa SMP</p>
            </div>
            <div class="icon">
                <i class="fas fa-users"></i>
            </div>
            <a href="{{ route('mgtSMP.index') }}" class="small-box-footer">
                Info <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <div class="small-box bg-secondary">
            <div class="inner">
                <h3>{{ $jumlah[1] }}</h3>
                <p>Jumlah Calon Siswa SMA</p>
            </div>
            <div class="icon">
                <i class="fas fa-users"></i>
            </div>
            <a href="#" class="small-box-footer">
                Info <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
            <div class="inner">
                <h3>{{ $jumlah[2] }}</h3>
                <p>Jumlah Calon Siswa SMK</p>
            </div>
            <div class="icon">
                <i class="fas fa-users"></i>
            </div>
            <a href="#" class="small-box-footer">
                Info <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <div class="small-box bg-orange">
            <div class="inner text-white">
                <h3>{{ $bb }}</h3>
                <p>Pembayaran Belum Dikonfirmasi</p>
            </div>
            <div class="icon">
                <i class="fas fa-file-invoice"></i>
            </div>
            <a href="{{ route('biaya.index') }}" class="small-box-footer">
                <span class="text-white">Info</span> <i class="fas fa-arrow-circle-right text-white"></i>
            </a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6 col-6">
        <div class="small-box bg-olive">
            <div class="inner">
                <h3>{{ $isCompleted }}</h3>
                <p>Siswa Yang Sudah Membayar > 50% Biaya per {{ date('d-m-Y') }}</p>
            </div>
            <div class="icon">
                <i class="fas fa-users"></i>
            </div>
            <a href="{{ route('laporan_is_completed') }}" class="small-box-footer">
                Unduh Data <i class="fas fa-arrow-circle-down"></i>
            </a>
        </div>
    </div>
    <div class="col-lg-6 col-6">
        <div class="small-box bg-purple">
            <div class="inner">
                <h3>Rp. {{ number_format($sumPayment) }}</h3>
                <p>Akumulasi Pembayaran per {{ date('d-m-Y') }}</p>
            </div>
            <div class="icon">
                <i class="fas fa-file-invoice-dollar"></i>
            </div>
            <a href="{{ route('biaya.laporan_pembayaran') }}" class="small-box-footer">
                Unduh Data <i class="fas fa-arrow-circle-down"></i>
            </a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-7 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="clearfix">
                    <h4 class="card-title float-left">Statistik Pendaftar</h4>
                    <div id="visit-sale-chart-legend"
                        class="rounded-legend legend-horizontal legend-top-right float-right"></div>
                </div>
                <canvas id="statistik-pendaftar" class="mt-4"></canvas>
            </div>
        </div>
    </div>
    <div class="col-md-5 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Status Penerimaan</h4>
                <canvas id="doughnut-chart"></canvas>
                <div id="traffic-chart-legend" class="rounded-legend legend-vertical legend-bottom-left pt-4"></div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
    new Chart(document.getElementById("statistik-pendaftar"), {
    type: 'horizontalBar',
    data: {
      labels: ["SMP", "SMA", "SMK"],
      datasets: [
        {
          label: "Jumlah Calon Peserta Didik",
          backgroundColor: ["#3e95cd", "#7A8EA9","#3cba9f"],
          data: {!! json_encode($jumlah) !!}
        }
      ]
    },
    options: {
        scales: {
        xAxes: [{
            ticks: {
                beginAtZero: true
            }
        }]
    },
      legend: { display: false },
      title: {
        display: true,
        text: 'Statistik Pendaftar Calon Peserta Didik Baru'
      },
    }
});
</script>

<script>
    new Chart(document.getElementById("doughnut-chart"), {
    type: 'doughnut',
    data: {
      labels: ["Menunggu", "Diterima", "Ditolak"],
      datasets: [
        {
          label: "Population (millions)",
          backgroundColor: ["#6c757d", "#28a745","#dc3545"],
          data: {!! json_encode($piechart) !!}
        }
      ]
    },
    options: {
      title: {
        display: true,
        text: 'Status Keseluruhan Penerimaan Peserta Didik Baru'
      },
      legend: {
        display: true,
        align: 'center',
        position: 'bottom'
      },
      animation: {animateScale: true},
    }
});
</script>
@endsection
@endhasrole

@hasrole('Admin SMP')
@section('konten')
<div class="row">
    <div class="col-lg-6 col-6">
        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{ $jumlah[0] }}</h3>
                <p>Jumlah Calon Siswa SMP</p>
            </div>
            <div class="icon">
                <i class="fas fa-users"></i>
            </div>
            <a href="{{ route('mgtSMP.index') }}" class="small-box-footer">
                Info <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <div class="col-lg-6 col-6">
        <div class="small-box bg-success">
            <div class="inner">
                <h3>Unduh</h3>
                <p>Data Siswa SMP</p>
            </div>
            <div class="icon">
                <i class="fas fa-file"></i>
            </div>
            <a href="{{ route('mgtSMP.index') }}" class="small-box-footer">
                Klik Untuk Mengunduh <i class="fas fa-arrow-circle-down"></i>
            </a>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <div class="row no-gutters">
            <div class="col-md-3">
                <img src="{{ asset('assets') }}/images/profile/{{ Auth::user()->photo }}" class="card-img" alt="...">
            </div>
            <div class="col-md-9">
                <div class="card-body">
                    <h5 class="card-title">{{ Auth::user()->nama }}</h5>
                    <p class="card-text">Admin SMP</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@endhasrole