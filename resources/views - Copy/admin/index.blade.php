@php
use App\Role;
@endphp
@extends('layouts.dashboard')
@section('judul', 'Dashboard')
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
                More info <i class="fas fa-arrow-circle-right"></i>
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
                More info <i class="fas fa-arrow-circle-right"></i>
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
                More info <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <div class="small-box bg-orange">
            <div class="inner text-white">
                <h3>{{ $bb }}</h3>
                <p>Belum Bayar Pendaftaran</p>
            </div>
            <div class="icon">
                <i class="fas fa-users"></i>
            </div>
            <a href="#" class="small-box-footer">
                <span class="text-white">More info</span> <i class="fas fa-arrow-circle-right text-white"></i>
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
          data: [38,131,21]
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