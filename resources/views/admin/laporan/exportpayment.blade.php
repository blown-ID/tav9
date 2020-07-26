<table>
    <tr>
        <th align="center" style="font-weight: bold; background-color: #6F42C1; color:#ffffff;" rowspan="2">No.</th>
        <th align="center" style="font-weight: bold; background-color: #6F42C1; color:#ffffff;" rowspan="2">Nama Siswa
        </th>
        <th align="center" style="font-weight: bold; background-color: #6F42C1; color:#ffffff;" rowspan="2">Jenjang</th>
        <th align="center" style="font-weight: bold; background-color: #6F42C1; color:#ffffff;" rowspan="2">Note</th>
        <th align="center" style="font-weight: bold; background-color: #6F42C1; color:#ffffff;" rowspan="2">Tanggal
            Transaksi</th>
        <th align="center" style="font-weight: bold; background-color: #6F42C1; color:#ffffff;" rowspan="2">No. Rekening
            Pengirim</th>
        <th align="center" style="font-weight: bold; background-color: #6F42C1; color:#ffffff;" rowspan="2">Nama
            Pengirim
        </th>
        <th align="center" style="font-weight: bold; background-color: #6F42C1; color:#ffffff;" rowspan="2">Dari Bank
        </th>
        <th align="center" style="font-weight: bold; background-color: #6F42C1; color:#ffffff;" rowspan="2">Status
            Validasi</th>
        <th align="center" style="font-weight: bold; background-color: #6F42C1; color:#ffffff;" rowspan="2">Total
            Pembayaran</th>
        <th align="center" style="font-weight: bold; background-color: #6F42C1; color:#ffffff; text-align: center;"
            colspan="2">Detail Pembayaran</th>
    </tr>
    <tr>
        <th align="center" style="font-weight: bold; background-color: #6F42C1; color:#ffffff;">Jenis Biaya</th>
        <th align="center" style="font-weight: bold; background-color: #6F42C1; color:#ffffff;">Harga</th>
    </tr>
    @foreach ($data as $item)
    <tr>
        <td align="center" rowspan="<?= $item['sp_length'] > 1 ? $item['sp_length'] : 1 ?>">{{ $loop->iteration }}</td>
        <td align="center" rowspan="<?= $item['sp_length'] > 1 ? $item['sp_length'] : 1 ?>">{{ $item['nama_siswa'] }}
        </td>
        <td align="center" rowspan="<?= $item['sp_length'] > 1 ? $item['sp_length'] : 1 ?>">{{ $item['role_siswa'] }}
        </td>
        <td align="center" rowspan="<?= $item['sp_length'] > 1 ? $item['sp_length'] : 1 ?>">{{ $item['note'] }}</td>
        <td align="center" rowspan="<?= $item['sp_length'] > 1 ? $item['sp_length'] : 1 ?>">
            {{ date('d F Y',strtotime($item['date'])) }}</td>
        <td align="center" rowspan="<?= $item['sp_length'] > 1 ? $item['sp_length'] : 1 ?>">{{ $item['from_rek'] }}</td>
        <td align="center" rowspan="<?= $item['sp_length'] > 1 ? $item['sp_length'] : 1 ?>">{{ $item['from_name'] }}
        </td>
        <td align="center" rowspan="<?= $item['sp_length'] > 1 ? $item['sp_length'] : 1 ?>">
            {{ $item['from_bank_name'] }}</td>
        <td align="center" rowspan="<?= $item['sp_length'] > 1 ? $item['sp_length'] : 1 ?>">
            @if($item['verified'] === 1) Terverifikasi oleh {{ $item['verified_by'] }}@else Belum Divalidasi @endif
        </td>
        <td align="center" rowspan="<?= $item['sp_length'] > 1 ? $item['sp_length'] : 1 ?>">Rp.
            {{ number_format($item['jumlah']) }}</td>
        @if ($item['sp_length'] === 1)
        @foreach ($item['detail_payment'] as $detail_payment)
        <td align="center">{{ $detail_payment['nama_item'] }}</td>
        <td align="center">Rp. {{ number_format($detail_payment['price']) }}</td>
        @endforeach
    </tr>
    @endif
    @if ($item['sp_length'] === 0)
    <td align="center">-</td>
    <td align="center">-</td>
    </tr>
    @endif
    @if ($item['sp_length'] > 1)
    @foreach ($item['detail_payment'] as $detail_payment)
    <?= $loop->iteration === 1 ? '' : '<tr>' ?>
    <td align="center">{{ $detail_payment['nama_item'] }}</td>
    <td align="center">Rp. {{ number_format($detail_payment['price']) }}</td>
    </tr>
    @endforeach
    @endif
    @endforeach
    <tr>
        <td colspan="11" style="font-weight: bold; text-align: right">Akumulasi Keseluruhan</td>
        <td style="text-align: center"><b>Rp. {{ number_format($totalnya) }}</b></td>
    </tr>
</table>