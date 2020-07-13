@php
$jenjang = Auth::user()->getRoleNames()->first()
@endphp
@extends('layouts.dashboard')
@section('judul', 'Informasi Kelulusan')
{{-- @dd($user); --}}
@section('konten')
<table class="table table-bordered text-center">
    <tbody>
        <tr>
            <td class="align-middle" rowspan="2">NO</td>
            <td class="align-middle" rowspan="2">URAIAN BIAYA</td>
            <td colspan="2">JUMLAH</td>
        </tr>
        <tr>
            <td>IKHWAN</td>
            <td>AKHWAT</td>
        </tr>
        @foreach ($item as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->nama_item }}</td>
            <td>{{'Rp. ' . number_format($item->price) }}</td>
            <td>{{'Rp. ' . number_format($item->price) }}</td>
        </tr>
        @endforeach
        <tr>
            <td>8</td>
            <td>Seragam</td>
            @foreach ($seragam as $seragam)
            <td>{{'Rp. ' . number_format($seragam->price) }}</td>
            @endforeach
        </tr>
    </tbody>
</table>
@endsection