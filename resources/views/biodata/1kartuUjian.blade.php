@php
use Illuminate\Support\Facades\Auth;
@endphp

<style type="text/css">
    * {
        margin-top: 0;
        padding: 0;

        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }

    .line-sign {
        border: 0;
        border-style: inset;
        border-top: 0.5px solid #000;
    }

    table.tableizer-table {
        font-size: 12px;
        font-family: Arial, Helvetica, sans-serif;
    }

    .tableizer-table td {
        margin: 1px;
    }

    .tableizer-table th {
        color: #FFF;
        font-weight: bold;
    }

    /* tr td {
		white-space: nowrap;
	} */
</style>
<table width="17cm" style="border: 1px solid black; margin-top: 3px;">
    <tbody>
        <tr style="">
            <td>
                <img src="{{ asset('assets') }}/images/alfidaa.png" style="width: 60px; height: auto;">
            </td>
            <td align="center" style="font-weight:bold; font-size: 12px; font-family: Arial, Helvetica, sans-serif;">
                KARTU UJIAN PPDB ({{ Auth::user()->getRoleNames()->first() }})<br> YAYASAN PENDIDIKAN ISLAM AL FIDAA
                CENDIKIA
            </td>
        </tr>
    </tbody>
</table>
<table class="tableizer-table" width="17cm"
    style=" filter: alpha(opacity=40); opacity: 0.95;border:1px black solid; border-top: 0px;">
    <tbody>
        {{-- siswa, settings, user --}}
        <tr>
            <td rowspan="12" style="text-align:center; vertical-align:middle;">
                <?php if ($siswa->photo === "default.jpg") : ?>
                <img src="{{ asset('assets') }}/images/2x3.png" width="80px;">
                <?php else : ?>
                <img src="{{ asset('assets') }}/images/profile/{{ $user->photo }}" width="80px;">
                <?php endif; ?>
            </td>
            <td>No. Tes</td>
            <td class="white-space: nowrap;">:</td>
            <td>{{ $siswa->no_daftar }}</td>
            <td>Tanggal</td>
            <td>:</td>
            <td>{{ date('d - m - Y', strtotime($settings->tgl_ujian)) }}</td>
        </tr>
        <tr>
            <td>Nama Siswa</td>
            <td class="white-space: nowrap;">:</td>
            <td>{{ $user->nama }}</td>
            <td>Waktu tes</td>
            <td>:</td>
            <td>07.00 - 12.00 WIB</td>
        </tr>
        <tr>
            <td>Jenjang Tes</td>
            <td class="white-space: nowrap;">:</td>
            @if ($user->role_id === 1)
            <td>{{ Auth::user()->getRoleNames()->first() }}</td>
            @elseif ($user->role_id === 2 || $user->role_id === 3)
            <td>{{ Auth::user()->getRoleNames()->first() - $siswa->jurusan }}</td>
            @endif
            <td>Materi Tes</td>
            <td>:</td>
            <td><input type="checkbox"> Tes Kemampuan Dasar</td>
        </tr>
        <tr>
            <td>Agenda Lainnya</td>
            <td class="white-space: nowrap;">:</td>
            <td><input type="checkbox"> Ukur Seragam</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><input type="checkbox"> Tes Potensi Akademik</td>
        </tr>
        <tr>
            <td align="center">Peserta</td>
            <td>&nbsp;</td>
            <td align="center">Pengawas</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><input type="checkbox"> Tes Al-Qur'an</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <th scope="row" class="text-center">
                <hr class="line-sign" width="90%" align="center">
                <p>&nbsp;</p>
            </th>
            <td>&nbsp;</td>
            <th scope="row" class="text-center">
                <hr class="line-sign" width="100%" align="center">
                <p style="text-align: center; color: black;">Panitia PPDB
                    <?php echo date('Y', strtotime("+1 year")) ?>/<?php echo date('Y', strtotime("+2 years")) ?></p>
            </th>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td colspan="6">Alamat Tes: {{ $settings->alamat_sekolah }}</td>
        </tr>
        <tr>
            <td colspan="6">1. Mohon disimpan dan dibawa kartu tanda ujian peserta tes ini pada saat mengikuti tes.</td>
        </tr>
        <tr>
            <td colspan="6">2. Pada saat tes membawa <b>Pas Foto</b> ukuran 3x4 satu lembar, serta <b>fotokopi</b>
                berkas
                pendukung berupa <b>KK, Akte Kelahiran, Ijazah, SKHUN Serta Raport 3 tahun terakhir</b>.</td>
        </tr>
    </tbody>
</table>
