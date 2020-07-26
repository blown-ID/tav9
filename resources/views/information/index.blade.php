@php
use App\Nilai;
$jenjang = Auth::user()->getRoleNames()->first();
$nilai = Nilai::where('id_siswa', Auth::user()->id_user)->first();

@endphp
@extends('layouts.dashboard')
@section('judul', 'Informasi Kelulusan')
{{-- @dd($user); --}}
@section('konten')
<h4 class="text-center font-weight-bold mb-3" style="color: #000"> PENGUMUMAN HASIL KELULUSAN PENERIMAAN PESERTA DIDIK
    BARU
    ALFIDAA CENDIKIA 2020/2021 </h4>
<div class="container">
    <div class="card text-black">
        <table class="table table-borderless text-center">
            <thead>
                <tr>
                    <th colspan="2">Informasi Kelulusan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>No. Daftar</td>
                    <td>{{ $siswa->no_daftar }}</td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>{{ $user->nama }}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>{{ $user->email }}</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>{{ $siswa->alamat_rumah }}</td>
                </tr>
                <tr>
                    <td>Instansi Pendaftaran</td>
                    <td>{{ $jenjang }} @if($jenjang !== "SMP") - {{ $siswa->jurusan }} @endif</td>
                </tr>
                <tr>
                    <td colspan="2">
                        @if ($user->is_lulus === 2)
                        <div class="alert alert-danger" role="alert">
                            Mohon maaf, ananda belum diterima dalam seleksi penerimaan peserta didik baru pada
                            {{ Auth::user()->getRoleNames()[0] }} Al Fidaa Cendikia. Jangan putus asa, tetap semangat!
                        </div>
                    </td>
                    @elseif($user->is_lulus === 1)
                    <div class="alert alert-success" role="alert">
                        Selamat, ananda dinyatakan <b>diterima</b> dalam seleksi penerimaan peserta didik baru pada
                        {{ Auth::user()->getRoleNames()[0] }} Al Fidaa Cendikia!
                    </div>
                    @if($nilai)
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Nama</th>
                                <th scope="col">Nilai TKD</th>
                                <th scope="col">Nilai TPA</th>
                                <th scope="col">Nilai TAQ</th>
                                <th scope="col">Ukuran Seragam</th>
                                <th scope="col">Rata-Rata Nilai</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ Auth::user()->nama }}</td>
                                <td>{{ $nilai->tkd }}</td>
                                <td>{{ $nilai->tpa }}</td>
                                <td>{{ $nilai->taq }}</td>
                                <td>{{ $nilai->seragam }}</td>
                                <td>{{ $nilai->rata }}</td>
                            </tr>
                        </tbody>
                    </table>
                    @endif
                <tr>
                    <td colspan="2">
                        <p>Silakan datang langsung ke Yayasan Al Fidaa untuk melakukan registrasi ulang, sebelum tanggal
                            <b>{{ date("d F Y", strtotime( date( "d F Y", strtotime( date($gelombang->tgl_ujian) ) ) . "+1 month" ) ) }}</b>.
                        </p>
                        <p>Dengan melakukan tahapan pembayaran minimal 50% dari <a href="{{ route('rincian_biaya') }}"
                                class=" badge badge-info text-white">Rincian Biaya</a> </p>
                        <p> ke rekening Bank {{ $setting->nama_bank }}, No. Rekening: <b>{{ $setting->no_rek }} a.n
                                {{ $setting->pemilik_rek }}</b> dan mengupload bukti transfer ke menu <a
                                href="{{ route('pembayaransiswa.index') }}" class="badge badge-primary">Data
                                Pembayaran</a>.</p>
                    </td>
                </tr>
                @else
                <div class="alert alert-secondary" role="alert">
                    Menunggu Verifikasi Kelulusan, Pengumuman hasil tes maksimal tanggal <b>{{ $validasi }}</b>.
                </div>
                @endif
                </td>
                </tr>
                <tr>
                    <td colspan="2">
                        @role('SMP')
                        <p>Untuk informasi lebih lanjut hubungi 0{{ $setting->cp_smp }} atau melalui tombol <a
                                target="_blank"
                                href="https://wa.me/62{{ $setting->cp_smp }}?text=Assalamu'alaikum, saya ingin bertanya mengenai informasi PPDB Al Fidaa Cendikia"
                                class="badge badge-info">berikut</a>
                        </p>
                        @endrole
                        @role('SMA')
                        <p>Untuk informasi lebih lanjut hubungi 0{{ $setting->cp_sma }} atau melalui tombol <a
                                target="_blank"
                                href="https://wa.me/62{{ $setting->cp_sma }}?text=Assalamu'alaikum, saya ingin bertanya mengenai informasi PPDB Al Fidaa Cendikia"
                                class="badge badge-info">berikut</a>
                        </p>
                        @endrole
                        @role('SMK')
                        <p>Untuk informasi lebih lanjut hubungi 0{{ $setting->cp_smk }} atau melalui tombol <a
                                target="_blank"
                                href="https://wa.me/62{{ $setting->cp_smk }}?text=Assalamu'alaikum, saya ingin bertanya mengenai informasi PPDB Al Fidaa Cendikia"
                                class="badge badge-info">berikut</a>
                        </p>
                        @endrole
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection