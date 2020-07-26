<table style="border: 1px solid black">
    <tr>
        <th colspan="31" style="font-weight: bold; text-align: center">Data Siswa Baru YAYASAN AL FIDAA CENDIKIA</th>
    </tr>
    <thead>
        <tr>
            <th>No.</th>
            <th>Jenjang</th>
            <th>No. Daftar</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Telp. Siswa</th>
            <th>NISN</th>
            <th>NIK</th>
            <th>Jenis Kelamin</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Alamat Rumah</th>
            <th>Agama</th>
            <th>Kewarganegaraan</th>
            <th>Asal Sekolah</th>
            <th>Alamat Sekolah</th>
            <th>Bahasa Rumah</th>
            <th>Anak Ke</th>
            <th>Golongan Darah</th>
            <th>Nama Ayah</th>
            <th>Nama Ibu</th>
            <th>Alamat Ayah</th>
            <th>Alamat Ibu</th>
            <th>Telp. Ayah</th>
            <th>Telp. Ibu</th>
            <th>Pendidikan Ayah</th>
            <th>Pendidikan Ibu</th>
            <th>Penghasilan Ayah</th>
            <th>Penghasilan Ibu</th>
            <th>Pekerjaan Ayah</th>
            <th>Pekerjaan Ibu</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>@if($item->role_id === 1) SMP @elseif($item->role_id === 2) SMA @elseif($item->role_id === 3) SMK @endif
                @if($item->jurusan !== "-") - {{ $item->jurusan }}@endif</td>
            <td>'{{ $item->no_daftar }}</td>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->no_telp }}</td>
            <td>{{ $item->nisn }}</td>
            <td>'{{ (string)$item->nik }}</td>
            <td>{{ $item->jenis_kel }}</td>
            <td>{{ $item->tempat_lahir }}</td>
            <td>{{ date("d F Y", strtotime($item->tgl_lahir)) }}</td>
            <td>{{ $item->alamat_rumah }}</td>
            <td>{{ $item->agama }}</td>
            <td>{{ $item->kewarganegaraan }}</td>
            <td>{{ $item->asal_sekolah }}</td>
            <td>{{ $item->alamat_sekolah }}</td>
            <td>{{ $item->bahasa_rumah }}</td>
            <td>{{ $item->anak_ke }} dari {{ $item->jumlah_saudara }} bersaudara.</td>
            <td>{{ $item->golongan_darah }}</td>
            <td>{{ $item->nama_ayah }}</td>
            <td>{{ $item->nama_ibu }}</td>
            <td>{{ $item->alamat_ayah }}</td>
            <td>{{ $item->alamat_ibu }}</td>
            <td>{{ $item->telp_ayah }}</td>
            <td>{{ $item->telp_ibu }}</td>
            <td>{{ $item->pendidikan_ayah }}</td>
            <td>{{ $item->pendidikan_ibu }}</td>
            <td>{{ $item->penghasilan_ayah }}</td>
            <td>{{ $item->penghasilan_ibu }}</td>
            <td>{{ $item->pekerjaan_ayah }}</td>
            <td>{{ $item->pekerjaan_ibu }}</td>
        </tr>
        @endforeach
    </tbody>
</table>