<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $judul }}</title>
    <style>
        *,
        table.tableizer-table {
            font-size: 12px;
            /* border: 1px solid #CCC; */
            font-family: Arial, Helvetica, sans-serif;
        }

        .tableizer-table td {
            padding: 4px;
            margin: 3px;
            border: 1px solid #CCC;
        }

        .tableizer-table th {
            background-color: #FFFFFF;
            color: #FFF;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <table style="margin-top: 3px; width: 90%">
        <tbody>
            <tr style="">
                <td width="10%">
                    <img src="{{ asset('assets') }}/images/alfidaa.png" style="width: 65px; height: auto;">
                </td>
                <td width="90%" align="center" style="font-weight:bold; font-size: 12px;">
                    YAYASAN PENDIDIKAN ISLAM<br><span
                        style="font-weight: bold; font-size: 16px; margin-top: 5px; margin-bottom: 5px">AL FIDAA
                        CENDIKIA</span><br><i>{{ $setting->alamat_sekolah }}</i><br><i>Telp.
                        {{ $setting->telp_sekolah }}</i>
                </td>
            </tr>
        </tbody>
    </table>
    <hr style="margin-top: 5px;">
    <h4 style="font-weight: bold; text-align: center; margin-top: 5px; margin-bottom: 5px;">Bukti Pembayaran Calon Siswa
    </h4>
    <h5 style="font-weight: bold; text-align: center; margin-top: -3px; margin-bottom: 5px;">No. Invoice:
        {{ $payment->id_invoice }}</h5>
    <table style="font-weight: bold; width: 90%" align="center">
        <tr>
            <td>No. Rek Pengirim</td>
            <td>:</td>
            <td>{{ $payment->from_rek }}</td>
            <td>&nbsp;</td>
            <td>Nama Siswa</td>
            <td>:</td>
            <td>{{ $user->nama }}</td>
        </tr>
        <tr>
            <td>Nama Pengirim</td>
            <td>:</td>
            <td>{{ $payment->from_name }}</td>
            <td>&nbsp;</td>
            <td>Tanggal Setoran</td>
            <td>:</td>
            <td>{{ $payment->date }}</td>
        </tr>
        <tr>
            <td>Nama Bank</td>
            <td>:</td>
            <td>{{ $payment->from_bank_name }}</td>
            <td>&nbsp;</td>
            <td>Jenjang</td>
            <td>:</td>
            <td>{{ $role_name->name }}</td>
        </tr>
    </table>
    {{-- <br> --}}
    <h4 style="font-weight: bold; text-align: center; margin-top: 5px; margin-bottom: 5px;">Detail Pembayaran
    </h4>
    <table border="1px" cellpadding=5 cellspacing=0 style="width: 90%;" align="center">
        <tr>
            <th>No.</th>
            <th>Keterangan</th>
            <th>Jumlah</th>
        </tr>
        @php
        use App\Item;
        @endphp
        @foreach ($payment_detail as $item)
        @php
        $list = Item::where('id_item', $item->id_item)->first();
        @endphp
        <tr style="text-align: center">
            <td>{{ $loop->iteration }}</td>
            <td>{{ $list->nama_item }}</td>
            <td>{{'Rp. ' . number_format($item->price) }}</td>
        </tr>
        @endforeach
        <tr>
            <td colspan="3" style="text-align: right">{{ 'Total: Rp.' . number_format($total[0]->total) }}</td>
        </tr>
    </table>
    <br>
    <table style="font-weight: bold; width: 90%">
        <tr>
            <td style="text-align: right">Bekasi, {{ date('d F Y') }}</td>
        </tr>
        <tr>
            <td style="height: 50px;"></td>
        </tr>
        <tr>
            <td style="text-align: right">(.................................)</td>
        </tr>
    </table>
</body>

</html>