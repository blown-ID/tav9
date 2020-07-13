<table style="border: 1px solid black">
    <tr>
        <th colspan="37" style="font-weight: bold">Data Siswa SMP YAYASAN AL FIDAA CENDIKIA</th>
    </tr>
    <thead>
        <tr>
            <th>No. Daftar</th>
            <th>Nama</th>
            <th>Email</th>
            <th>No. Telp</th>
            <th>Status Lulus</th>
            <th>Tanggal Daftar</th>
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
            <th>Jumlah Saudara</th>
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
            <th>Nilai Tes Kemampuan Dasar</th>
            <th>Nilai Tes Potensi Akademik</th>
            <th>Nilai Tes Baca Tulis Al-Qur'an</th>
            <th>Nilai Rata-Rata</th>
            <th>Ukuran Seragam</th>
        </tr>
    </thead>
    <tbody>
        @foreach($dataa as $item)
        <tr>
            <td>{{ $item->no_daftar }}</td>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->no_telp }}</td>
            <td>@if($item->bayar_pendaftaran === 1) Lulus @elseif($item->bayar_pendaftaran === 0) Belum Dinilai @else
                Tidak Lulus @endif
            </td>
            <td>{{ date("d F Y H:i", strtotime($item->created_at)) }}</td>
            <td>{{ $item->nisn }}</td>
            <td>{{ (string)$item->nik }}</td>
            <td>{{ $item->jenis_kel }}</td>
            <td>{{ $item->tempat_lahir }}</td>
            <td>{{ date("d F Y", strtotime($item->tgl_lahir)) }}</td>
            <td>{{ $item->alamat_rumah }}</td>
            <td>{{ $item->agama }}</td>
            <td>{{ $item->kewarganegaraan }}</td>
            <td>{{ $item->asal_sekolah }}</td>
            <td>{{ $item->alamat_sekolah }}</td>
            <td>{{ $item->bahasa_rumah }}</td>
            <td>{{ $item->anak_ke }}</td>
            <td>{{ $item->jumlah_saudara }}</td>
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
            <td>{{ $item->tkd }}</td>
            <td>{{ $item->tpa }}</td>
            <td>{{ $item->taq }}</td>
            <td>{{ $item->rata }}</td>
            <td>{{ $item->seragam }}</td>
        </tr>
        @endforeach
    </tbody>
</table>