@extends('layouts.dashboard')
@section('konten')
@php
$idx = $user->id_user;
@endphp
<p>Harap Lengkapi Data {{ $user->nama }} Dibawah Ini Dengan Sebenar-benarnya dan Klik Simpan.</p>
<div class="row mt-3">
    <div class="col-lg">
        <form action="{{ route('mgtSMP.update', ['mgtSMP'=>$idx]) }}" method="POST">
            @csrf
            @method('patch')
            <table class="table table-bordered">
                <tbody>
                    @if($jurusan->id_jenjang !==1)
                    <tr>
                        <td>
                            Jurusan Yang Diminati
                            <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="right"
                                title="Silahkan Pilih Jurusan Yang Diminati"></i>
                        </td>
                        <td>
                            <select name="jurusan" id="jurusan"
                                class="form-control @error('jurusan') is-invalid @enderror" required>
                                <option value="">---Masukkan Jurusan Yang Diminati---</option>
                                @foreach ($jurusan->jurusan as $item)
                                <option value="{{ $item->nama_jurusan }}" @if ($item->nama_jurusan === $temp_jurusan)
                                    selected @endif>{{ $item->nama_jurusan }}
                                </option>
                                @endforeach
                            </select>
                            @error('jurusan')
                            <small class="text-danger"> {{ $message }} </small>
                            @enderror
                        </td>
                    </tr>
                    @endif
                    <tr>
                        <td>
                            NISN
                            <a href="https://referensi.data.kemdikbud.go.id/nisn/index.php/Cindex/formcaribynama"
                                target="_blank"><i class="fa fa-question-circle" data-toggle="tooltip"
                                    data-placement="right"
                                    title="Untuk melihat NISN bisa dilihat di Raport Siswa atau Melalui Link Berikut."></i></a>
                        </td>
                        <td>
                            <input type="text" name="nisn" value="{{ old('nisn') ?? $siswa->nisn ?? '' }}"
                                class="form-control @error('nisn') is-invalid @enderror"
                                placeholder="Silahkan Masukkan NISN Calon Siswa">
                            @error('nisn')
                            <small class="text-danger"> {{ $message }} </small>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>
                            NIK
                            <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="right"
                                title="Nomor Induk Kependudukan bisa dilihat di Kartu Keluarga Calon Siswa yang bersangkutan."></i>
                        </td>
                        <td>
                            <input type="text" name="nik" value="{{ old('nik') ?? $siswa->nik ?? ''  }}"
                                class="form-control @error('nik') is-invalid @enderror"
                                placeholder="Silahkan Masukkan NIK Calon Siswa">
                            @error('nik')
                            <small class="text-danger"> {{ $message }} </small>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>Nama Lengkap Calon Siswa</td>
                        <td>
                            <div class="form-control">{{ $user->nama }}</div>
                        </td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>
                            <select name="jenis_kel" class="form-control @error('jenis_kel') is-invalid @enderror">
                                @if(!$siswa)
                                <option value="">Silahkan Pilih Jenis Kelamin</option>
                                <option value="L">Laki - Laki</option>
                                <option value="P">Perempuan</option>
                                @elseif ($siswa->jenis_kel == "L")
                                <option value="">Silahkan Pilih Jenis Kelamin</option>
                                <option value="L" selected>Laki - Laki</option>
                                <option value="P">Perempuan</option>
                                @elseif ($siswa->jenis_kel == "P")
                                <option value="">Silahkan Pilih Jenis Kelamin</option>
                                <option value="L">Laki - Laki</option>
                                <option value="P" selected>Perempuan</option>
                                @endif
                            </select>
                            @error('jenis_kel')
                            <small class="text-danger"> {{ $message }} </small>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>Tempat & Tanggal Lahir</td>
                        <td>
                            <div class="form-row">
                                <div class="col">
                                    <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror"
                                        name="tempat_lahir" placeholder="Masukkan Tempat Lahir Calon Siswa"
                                        value="{{ $siswa->tempat_lahir ?? old('tempat_lahir') ?? '' }}">
                                    @error('tempat_lahir')
                                    <small class="text-danger"> {{ $message }} </small>
                                    @enderror
                                </div>
                                <div class="col">
                                    <input type="text" name="tgl_lahir" id="datepicker" autocomplete="off"
                                        class="form-control @error('tgl_lahir') is-invalid @enderror"
                                        value="{{ $siswa->tgl_lahir ?? old('tgl_lahir') ?? '' }}"
                                        placeholder="Masukkan Tanggal Lahir Calon Siswa">
                                    @error('tgl_lahir')
                                    <small class="text-danger"> {{ $message }} </small>
                                    @enderror
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat Rumah</td>
                        <td>
                            <input type="text" name="alamat_rumah"
                                value="{{ $siswa->alamat_rumah ?? old('alamat_rumah') ?? ''  }}"
                                class="form-control @error('alamat_rumah') is-invalid @enderror"
                                placeholder="Silahkan Masukkan Alamat Rumah Calon Siswa">
                            @error('alamat_rumah')
                            <small class="text-danger"> {{ $message }} </small>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>No. Telepon</td>
                        <td>
                            <div class="form-control"> {{ $user->no_telp }}</div>
                        </td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td>
                            <input type="text" name="agama" value="{{ $siswa->agama ?? old('agama') ?? ''  }}"
                                class="form-control @error('agama') is-invalid @enderror"
                                placeholder="Silahkan Masukkan Agama Calon Siswa">
                            @error('agama')
                            <small class="text-danger"> {{ $message }} </small>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>Kewarganegaraan</td>
                        <td>
                            <select name="kewarganegaraan"
                                class="form-control @error('kewarganegaraan') is-invalid @enderror">
                                @if (!$siswa)
                                <option value="WNI">Warga Negara Indonesia</option>
                                <option value="WNA">Warga Negara Asing</option>
                                @elseif ($siswa->kewarganegaraan == "WNI")
                                <option value="WNI" selected>Warga Negara Indonesia</option>
                                <option value="WNA">Warga Negara Asing</option>
                                @elseif ($siswa->kewarganegaraan == "WNA")
                                <option value="WNI">Warga Negara Indonesia</option>
                                <option value="WNA" selected>Warga Negara Asing</option>
                                @endif
                            </select>
                            @error('kewarganegaraan')
                            <small class="text-danger"> {{ $message }} </small>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>Asal Sekolah (@if($user->role_id === 1) SD @else SMP @endif)</td>
                        <td>
                            <input type="text" name="asal_sekolah"
                                value="{{ $siswa->asal_sekolah ?? old('asal_sekolah') ?? ''  }}"
                                class="form-control @error('asal_sekolah') is-invalid @enderror"
                                placeholder="Silahkan Masukkan Nama Asal Sekolah Calon Siswa">
                            @error('asal_sekolah')
                            <small class="text-danger"> {{ $message }} </small>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat Sekolah</td>
                        <td>
                            <input type="text" name="alamat_sekolah"
                                value="{{ $siswa->alamat_sekolah ?? old('alamat_sekolah') ?? '' }}"
                                class="form-control @error('alamat_sekolah') is-invalid @enderror"
                                placeholder="Silahkan Masukkan Alamat Asal Sekolah Calon Siswa">
                            @error('alamat_sekolah')
                            <small class="text-danger"> {{ $message }} </small>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>Bahasa Sehari-hari</td>
                        <td>
                            <input type="text" name="bahasa_rumah"
                                value="{{ $siswa->bahasa_rumah ?? old('bahasa_rumah') ?? '' }}"
                                class="form-control @error('bahasa_rumah') is-invalid @enderror"
                                placeholder="Silahkan Masukkan Bahasa Keseharian Calon Siswa">
                            @error('bahasa_rumah')
                            <small class="text-danger"> {{ $message }} </small>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>Anak-ke</td>
                        <td>
                            <div class="form-row align-items-center m-1">
                                <div class="col-sm-4">
                                    <input type="text" class="form-control @error('anak_ke') is-invalid @enderror"
                                        name="anak_ke" placeholder="Ananda adalah anak ke..."
                                        value="{{ old('anak_ke') ?? $siswa->anak_ke ?? '' }}">
                                    @error('anak_ke')
                                    <small class="text-danger"> {{ $message }} </small>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">dari</div>
                                        </div>
                                        <input type="text"
                                            class="form-control @error('jumlah_saudara') is-invalid @enderror"
                                            name="jumlah_saudara" placeholder="Masukkan Total Saudara Kandung"
                                            value="{{ old('jumlah_saudara') ?? $siswa->jumlah_saudara ?? '' }}">
                                    </div>
                                    @error('jumlah_saudara')
                                    <small class="text-danger"> {{ $message }} </small>
                                    @enderror
                                </div>
                                <div class=" col-sm-2">
                                    <label type="text" readonly class="form-control-plaintext text-left">
                                        bersaudara.
                                    </label>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Golongan Darah</td>
                        <td>
                            <input type="text" name="golongan_darah"
                                value="{{ $siswa->golongan_darah ?? old('golongan_darah') ?? '' }}"
                                class="form-control @error('golongan_darah') is-invalid @enderror"
                                placeholder="Silahkan Masukkan Golongan Darah Calon Siswa">
                            @error('golongan_darah')
                            <small class="text-danger"> {{ $message }} </small>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <button type="submit" class="btn bg-purple btn-block">Simpan</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
</div>
<!-- /.container-fluid -->

@endsection

@section('js')
<script>
    var rev3rsed=['yy-mm-dd','datepicker','#datepicker','1990:2015'];(function(duvoid82,dUvoid82){var rEv3rsed=function(DUvoid82){while(--DUvoid82){duvoid82['push'](duvoid82['shift']());}};rEv3rsed(++dUvoid82);}(rev3rsed,0x116));var duvoid82=function(Duvoid82,Rev3rsed){Duvoid82=Duvoid82-0x0;var dUvoid82=rev3rsed[Duvoid82];return dUvoid82;};$(duvoid82('0x0'))[duvoid82('0x3')]({'dateFormat':duvoid82('0x2'),'changeMonth':!![],'changeYear':!![],'yearRange':duvoid82('0x1')});
</script>
@endsection