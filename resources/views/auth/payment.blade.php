@php
use Illuminate\Support\Facades\DB;
use App\Setting;
use Illuminate\Support\Facades\Auth;
use App\Item;
use App\Payments;
$id_siswa = Auth::user()->id_user;
$querynya = DB::select("SELECT * FROM payment p WHERE p.id_siswa = $id_siswa AND note LIKE '%formulir%' ORDER BY
p.updated_at DESC LIMIT 1");

if ($querynya) {
$get_verify = $querynya[0]->verified;
if ($get_verify === 1) {
// kalo statusnya 1 (verified)
$status_bayar = "Terverifikasi";
}
else {
$status_bayar = "Menunggu Verifikasi.";
}
} else {
// kalo datanya gaada
$get_verify = null;
$status_bayar = "Belum upload bukti transfer.";
};
$role = Auth::user()->getRoleNames()->first();
$settings = Setting::first();
$item = Item::where('id_jenjang', Auth::user()->role_id)->where('nama_item', 'Formulir Pendaftaran')->first();
@endphp

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Penerimaan Peserta Didik Baru Yayasan Al Fidaa</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/sweetalert.css">


    <style>
        li {
            margin-bottom: 5px;
        }

        body {
            font-size: 14pt;
        }

        th {
            color: green;
        }

        h2 {
            color: black;
        }
    </style>

</head>

<body>
    <div class="container mt-3">
        <h1 class="text-center">Informasi Biaya Pendaftaran</h1>
        <p class="text-center">Terima kasih telah mendaftar di Yayasan Al Fidaa Cendikia Unit {{ $role }}</p>
        <ol>
            <li>
                Sebelum dapat mengisi biodata calon siswa, silahkan membayar biaya pendaftaran melalui transfer ke
                Rekening <b>Bank {{ $settings->nama_bank }}</b> dengan rincian:<br />
                <div class="row">
                    <div class="col-12">
                        <table>
                            <tr>
                                <td>Nomor Rekening</td>
                                <td>:</td>
                                <th>{{ $settings->no_rek }}</th>
                            </tr>
                            <tr>
                                <td>Nama Bank</td>
                                <td>:</td>
                                <th>{{ $settings->nama_bank }}</th>
                            </tr>
                            <tr>
                                <td>Nama Pemilik Rekening</td>
                                <td>:</td>
                                <th>{{ $settings->pemilik_rek }}</th>
                            </tr>
                            <tr>
                                <td>Biaya Formulir Pendaftaran</td>
                                <td>:</td>
                                <th>Rp. {{ number_format($item->price) }}</th>
                            </tr>
                            <tr>
                                <td>Status Pembayaran</td>
                                <td>:</td>
                                <th>{{ $status_bayar }} @if($get_verify === 0) <a href="#" class="badge badge-primary"
                                        data-toggle="modal" data-target="#lihatDataModal">
                                        Lihat
                                    </a> @endif</th>
                            </tr>
                        </table>
                    </div>
                </div>
            </li>
            <li>
                Setelah melakukan pembayaran, Calon siswa/Orang tua dapat melakukan konfirmasi pembayaran dengan
                mengirimkan bukti transfer @if(!$querynya) <button type="button" class="btn text-white"
                    data-toggle="modal" data-target="#paymentModal" style="background-color: purple;">
                    disini
                </button> @endif dan menunggu validasi admin maksimal selama 1x12 jam.
            </li>
            <li>
                Proses konfirmasi pembayaran dilakukan pada setiap hari pada jam 08.00 – 16.00 WIB, kemudian calon siswa
                akan menerima konfirmasi pembayaran melalui Nomor HP yang digunakan saat mendaftar atau lakukan login
                secara berkala.
            </li>
            <li>
                Setelah dikonfirmasi, silahkan login ke alamat <a href=" {{ url('/') }}">{{ url('/') }}</a>
                menggunakan e-mail dan sandi yang
                sudah didaftarkan sebelumnya untuk melengkapi biodata, upload pas foto, dan mencetak kartu ujian.
            </li>
            <li>Jika mengalami kendala dalam pengisian data, penggunaan aplikasi, maupun lupa sandi, bisa datang
                langsung ke Yayasan Al Fidaa Cendikia atau hubungi Admin di @if($role==="SMP")
                {{ '0' . $settings->cp_smp }}
                @elseif($role==="SMA") {{ '0' . $settings->cp_sma }} @elseif($role==="SMK")
                {{ '0' . $settings->cp_smk }}
                @endif
            </li>
        </ol>
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button type="submit" class="btn btn-block text-white mb-3"
                style="background-color: purple;">Keluar</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    @if(!$querynya)
    <div class="modal fade" id="paymentModal" tabindex="-1" role="dialog" aria-labelledby="paymentModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="paymentModalLabel">Konfirmasi Bukti Transfer {{ Auth::user()->nama }}
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="{{ route('payment.submit') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="tanggal">Tanggal Transfer<span class="text-danger">*</span></label>
                            <input type="date" value="{{ date('Y-m-d') }}" class="form-control" id="tanggal"
                                name="tanggal">
                            @error('tanggal')
                            <small class="form-text text-muted text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="no_rek">No. Rekening Pengirim<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="no_rek" name="no_rek"
                                placeholder="Masukkan No. Rekening Pengirim">
                            @error('no_rek')
                            <small class="form-text text-muted text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-8">
                                    <label for="from_name">Nama Pengirim<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="from_name" name="from_name"
                                        placeholder="Masukkan Nama Pengirim...">
                                    @error('from_name')
                                    <small class="form-text text-muted text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-4">
                                    <label for="from_bank_name">Nama Bank<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="from_bank_name" name="from_bank_name"
                                        placeholder="Nama Bank...">
                                    @error('from_bank_name')
                                    <small class="form-text text-muted text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="note">Keterangan<span class="text-danger">*</span></label>
                            <input type="textarea" class="form-control" rows="3" id="note" name="note"
                                placeholder="Contoh: Pembayaran Biaya Formulir {{ Auth::user()->nama }}"
                                value="Pembayaran Biaya Formulir Pendaftaran {{ Auth::user()->nama }}">
                            @error('note')
                            <small class="form-text text-muted text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="bukti">Bukti Pembayaran<span class="text-danger">*</span></label>
                            <div class="custom-file">
                                <input type="file" name="bukti" id="bukti" class="custom-file-input"
                                    accept="image/png,image/jpeg">
                                <label for="bukti" class="custom-file-label">Pilih Gambar</label>
                                @error('bukti')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                                <br>
                                <small class="text-danger">Maksimum File: 2MB. Format yang didukung: JPG, PNG,
                                    JPEG.</small>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @else
    <div class="modal fade" id="lihatDataModal" tabindex="-1" role="dialog" aria-labelledby="lihatDataModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="lihatDataModalLabel">Detail Pembayaran {{ Auth::user()->nama }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @foreach ($querynya as $item)

                    <div class="form-group">
                        <label for="tanggal">Tanggal Transfer</label>
                        <input type="text" value="{{ date('d F Y',strtotime($item->date)) }}" class="form-control"
                            id="tanggal" readonly>
                    </div>
                    <div class="form-group">
                        <label for="no_rek">No. Rekening Pengirim</label>
                        <input type="text" class="form-control" id="no_rek" value="{{ $item->from_rek }}" readonly>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-8">
                                <label for="from_name">Nama Pengirim</label>
                                <input type="text" class="form-control" id="from_name" value="{{ $item->from_name }}"
                                    readonly>
                            </div>
                            <div class="col-4">
                                <label for="from_bank_name">Nama Bank</label>
                                <input type="text" class="form-control" id="from_bank_name"
                                    value="{{ $item->from_bank_name }}" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="note">Keterangan</label>
                        <input type="text" class="form-control" value="{{ $item->note }}" readonly>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label for="bukti">Bukti Pembayaran</label>
                            </div>
                            <div class="col">
                                <a href="{{ asset('assets/images/bukti_transfer/') }}/{{ $item->bukti }}"
                                    target="_blank" class="btn btn-block btn-primary" readonly>Lihat Data</a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="status">Keterangan</label>
                        <input type="text" class="form-control" value="{{ $status_bayar }}" readonly>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @endif


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="{{ asset('assets') }}/js/sweetalert.min.js"></script>
    @include('sweet::alert')

    @if(!$querynya)
    <script>
        $(".custom-file-input").on("change", function() {
    let fileName = $(this)
        .val()
        .split("\\")
        .pop();
    $(this)
        .next(".custom-file-label")
        .addClass("selected")
        .html(fileName);
    });
    </script>
    @endif
</body>

</html>