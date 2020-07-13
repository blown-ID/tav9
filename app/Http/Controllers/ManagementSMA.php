<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Detail_Siswa;
use App\Gelombang;
use App\Item;
use App\Jenjang;
use App\Nilai;
use App\Jurusan;
use App\Orangtua;
use App\Payment_detail;
use App\Payments;
use App\Role;
use App\Setting;
use App\User;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ManagementSMA extends Controller
{
    public function index()
    {
        $judul = "Manajemen Siswa SMA";
        $users = DB::table('users')
            ->leftJoin('detail_siswa', 'users.id_user', '=', 'detail_siswa.id_user')
            ->select('users.*', 'detail_siswa.no_daftar')
            ->where('users.role_id', '=', '2')
            ->get();
        // dd($users);
        return view('admin/SMA/index', compact('users', 'judul'));
    }

    public function destroy($id)
    {
        $user = User::where('id_user', $id)->first();
        // $role_id = $user->role_id;
        $siswa = Detail_Siswa::where('id_siswa', $id)->first();
        $ortu = Orangtua::where('id_ortu', $id)->first();
        $nilai = Nilai::where('id_nilai', $id)->first();
        if ($ortu) {
            $ortu->delete();
        }
        if ($siswa) {
            $siswa->delete();
        }
        if ($nilai) {
            $nilai->delete();
        }
        $user->delete();
        return redirect(route('mgtSMA.index'))->with('success', 'Data Siswa Sudah Berhasil Dihapus!');
    }

    public function show($id)
    {
        $user = User::where('id_user', $id)->first();
        if (!$user) {
            return redirect()->back()->with('errors', 'Data Tidak Ditemukan');
        }
        if ($user->role_id != 2) {
            return redirect()->back()->with('errors', '403 Forbidden');
        }
        $judul = "Manajemen Siswa SMA";
        $siswa = Detail_Siswa::where('id_siswa', $id)->first();
        $ortu = Orangtua::where('id_ortu', $id)->first();
        $nilai = Nilai::where('id_siswa', $id)->first();
        return view('admin/SMA/show', compact('user', 'judul', 'siswa', 'ortu', 'nilai'));
    }

    public function edit($id)
    {
        $user = User::where('id_user', $id)->first();
        if (!$user) {
            return redirect()->back()->with('errors', 'Data Tidak Ditemukan');
        }
        if ($user->role_id !== 2) { //validasi hanya role SMA yg bisa diedit disini
            return redirect()->back()->with('errors', '403 Forbidden');
        }
        // end validasi
        $siswa = Detail_Siswa::where('id_siswa', $id)->first();
        $role_id_get = $user->role_id;
        $jurusan = Jenjang::with('jurusan')->where('id_jenjang', $role_id_get)->first();
        // dd($jurusan);
        $judul = "Manajemen Siswa SMA";
        return view('admin/SMA/editsiswa', compact('user', 'judul', 'siswa', 'jurusan'));
    }

    public function editparents($id)
    {
        $user = User::where('id_user', $id)->first();
        if (!$user) {
            return redirect()->back()->with('errors', 'Data Tidak Ditemukan');
        }
        if ($user->role_id !== 2) { //validasi hanya role SMA yg bisa diedit disini
            return redirect()->back()->with('errors', '403 Forbidden');
        }
        // end validasi
        $orangtua = Orangtua::where('id_ortu', $id)->first();
        $judul = "Manajemen Siswa SMA";
        return view('admin/SMA/editortu', compact('user', 'judul', 'orangtua'));
    }

    public function updateparents(Request $request, $id)
    {
        // Form Validation
        $messages = [
            'required' => ':attribute wajib diisi!',
            'alpha' => ':attribute hanya dapat berupa alfabet!',
            'min' => ':attribute minimal :min karakter!',
            'max' => ':attribute maksimal :max karakter!',
        ];

        $request->validate([
            'nama_ayah' => 'required|min:3|max:64',
            'nama_ibu' => 'required|min:3|max:64',
            'alamat_ayah' => 'required|min:3|max:64',
            'alamat_ibu' => 'required|min:3|max:64',
            'telp_ayah' => 'required|min:3|max:64',
            'telp_ibu' => 'required|min:3|max:64',
            'pendidikan_ayah' => 'required|max:64',
            'pendidikan_ibu' => 'required|max:64',
            'penghasilan_ayah' => 'required',
            'penghasilan_ibu' => 'required',
            'pekerjaan_ayah' => 'required|min:1|max:64',
            'pekerjaan_ibu' => 'required|min:1|max:64',

        ], $messages);
        $orangtua = Orangtua::where('id_ortu', $id)->first();
        // dd($orangtua);
        if ($orangtua) {
            $siswa = Orangtua::updateOrCreate(
                [
                    'id_ortu' => $id,
                ],
                [
                    'nama_ayah' => htmlspecialchars(strtoupper($request->nama_ayah)),
                    'nama_ibu' => htmlspecialchars(strtoupper($request->nama_ibu)),
                    'alamat_ayah' => htmlspecialchars(strtoupper($request->alamat_ayah)),
                    'alamat_ibu' => htmlspecialchars(strtoupper($request->alamat_ibu)),
                    'telp_ayah' => htmlspecialchars(strtoupper($request->telp_ayah)),
                    'telp_ibu' => htmlspecialchars(strtoupper($request->telp_ibu)),
                    'pendidikan_ayah' => htmlspecialchars(strtoupper($request->pendidikan_ayah)),
                    'pendidikan_ibu' => htmlspecialchars(strtoupper($request->pendidikan_ibu)),
                    'penghasilan_ayah' => htmlspecialchars($request->penghasilan_ayah),
                    'penghasilan_ibu' => htmlspecialchars($request->penghasilan_ibu),
                    'pekerjaan_ayah' => htmlspecialchars(strtoupper($request->pekerjaan_ayah)),
                    'pekerjaan_ibu' => htmlspecialchars(strtoupper($request->pekerjaan_ibu))
                ]
            );
            return redirect(route('mgtSMA.show', $id))->with('success', 'Data Orangtua Sudah Berhasil Diperbarui!');
        } else {
            $siswa = Orangtua::firstOrCreate(
                [
                    'id_ortu' => $id,
                ],
                [
                    'id_ortu' => $id,
                    'nama_ayah' => htmlspecialchars(strtoupper($request->nama_ayah)),
                    'nama_ibu' => htmlspecialchars(strtoupper($request->nama_ibu)),
                    'alamat_ayah' => htmlspecialchars(strtoupper($request->alamat_ayah)),
                    'alamat_ibu' => htmlspecialchars(strtoupper($request->alamat_ibu)),
                    'telp_ayah' => htmlspecialchars(strtoupper($request->telp_ayah)),
                    'telp_ibu' => htmlspecialchars(strtoupper($request->telp_ibu)),
                    'pendidikan_ayah' => htmlspecialchars(strtoupper($request->pendidikan_ayah)),
                    'pendidikan_ibu' => htmlspecialchars(strtoupper($request->pendidikan_ibu)),
                    'penghasilan_ayah' => htmlspecialchars($request->penghasilan_ayah),
                    'penghasilan_ibu' => htmlspecialchars($request->penghasilan_ibu),
                    'pekerjaan_ayah' => htmlspecialchars(strtoupper($request->pekerjaan_ayah)),
                    'pekerjaan_ibu' => htmlspecialchars(strtoupper($request->pekerjaan_ibu))
                ]
            );
            $siswa = Detail_Siswa::find($id);
            $siswa->id_ortu = $id;
            $siswa->save();
            return redirect(route('mgtSMA.show', $id))->with('success', 'Data Orangtua Sudah Berhasil Disimpan!');
        }
    }

    public function update(Request $request, $id)
    {
        // START NOMOR OTOMATIS
        $user = User::where('id_user', $id)->first();
        $role_id = $user->role_id;
        $dump_rolename = Jenjang::where('id_jenjang', $role_id)->first('nama_jenjang');
        $rolename = $dump_rolename->nama_jenjang;
        $tempUser = $user->id_user;
        $AWAL = "0" . $role_id . ".";
        $noUrutAkhir = Detail_Siswa::where('no_daftar', 'LIKE', $AWAL . '%')->count();
        $no = 1;
        if ($noUrutAkhir) {
            $test = "$AWAL" . sprintf("%03s", abs($noUrutAkhir + 1));
        } else {
            $test = "$AWAL" . sprintf("%03s", $no);
        }
        // END NOMOR OTOMATIS

        // START VALIDASI JURUSAN
        if ($rolename === "SMP") {
            $jurusan = "-";
        } elseif ($rolename === "SMA" || $rolename === "SMK") {
            $jurusan = htmlspecialchars($request->jurusan);
        }
        // END VALIDASI JURUSAN

        // Form Validation
        $messages = [
            'required' => ':attribute wajib diisi!',
            'numeric' => ':attribute hanya dapat berupa angka',
            'date_format' => 'Format Tanggal Tidak Sesuai! (yyyy-mm-dd)',
            'lte' => 'Kesalahan pada value Anak Ke',
            'gte' => 'Kesalahan pada value Jumlah Saudara',
            'in' => 'Kesalahan pada value Jenis Kelamin',
            'size' => ':attribute Harus :size Karakter',
            'max' => ':attribute Harus :max Karakter',
            'numeric' => ':attribute harus berupa angka',
        ];

        $request->validate([
            // 'jurusan' => 'required',
            'nisn' => 'required|numeric',
            'nik' => 'required|size:16',
            'jenis_kel' => 'required|in:L,P|size:1',
            'tempat_lahir' => 'required|max:64',
            'tgl_lahir' => 'required|date_format:Y-m-d',
            'alamat_rumah' => 'required|max:128',
            'agama' => 'required|max:20',
            'kewarganegaraan' => 'required|max:3|in:WNI,WNA',
            'asal_sekolah' => 'required|max:100',
            'alamat_sekolah' => 'required|max:128',
            'bahasa_rumah' => 'required|max:30',
            'anak_ke' => 'required|max:2|lte:jumlah_saudara',
            'jumlah_saudara' => 'required|max:2|gte:anak_ke',
            'golongan_darah' => 'required|max:5',
        ], $messages);

        if ($rolename === "SMA" || $rolename === "SMK") {
            $temp = Jurusan::where('id_jenjang', $role_id)->get('nama_jurusan')->toArray();
            // dd($temp);
            foreach ($temp as $key) {
                $checker[] = $key['nama_jurusan'];
            }
            // dd($checker);
            if (!in_array($jurusan, $checker)) {
                // kalo ga ada
                // dd('ga ada');
                return redirect(route('biodata.index'))->with('errors', 'Invalid Request!');
            }
        }

        $cekSiswa = Detail_Siswa::where('id_user', $tempUser)->first();
        if ($cekSiswa) {
            // Kalau data siswanya ada
            $siswa = Detail_Siswa::updateOrCreate(
                [
                    'id_user' => $tempUser,
                ],
                [
                    'id_siswa' => $tempUser,
                    'id_ortu' => $tempUser,
                    'nisn' => htmlspecialchars($request->nisn),
                    'nik' => htmlspecialchars($request->nik),
                    'jenis_kel' => htmlspecialchars(strtoupper($request->jenis_kel)),
                    'tempat_lahir' => htmlspecialchars(strtoupper($request->tempat_lahir)),
                    'tgl_lahir' => htmlspecialchars($request->tgl_lahir),
                    'alamat_rumah' => htmlspecialchars(strtoupper($request->alamat_rumah)),
                    'agama' => htmlspecialchars(strtoupper($request->agama)),
                    'kewarganegaraan' => htmlspecialchars(strtoupper($request->kewarganegaraan)),
                    'asal_sekolah' => htmlspecialchars(strtoupper($request->asal_sekolah)),
                    'alamat_sekolah' => htmlspecialchars(strtoupper($request->alamat_sekolah)),
                    'bahasa_rumah' => htmlspecialchars(strtoupper($request->bahasa_rumah)),
                    'anak_ke' => htmlspecialchars($request->anak_ke),
                    'jumlah_saudara' => htmlspecialchars($request->jumlah_saudara),
                    'golongan_darah' => htmlspecialchars(strtoupper($request->golongan_darah)),
                    'jurusan' => $jurusan,
                ]
            );
            return redirect(route('mgtSMA.show', $tempUser))->with('success', 'Data Sudah Berhasil Diperbarui!');
        } else {
            $siswa = Detail_Siswa::firstOrCreate(
                [
                    'id_user' => $tempUser,
                ],
                [
                    'id_siswa' => $tempUser,
                    'id_ortu' => $tempUser,
                    'no_daftar' => htmlspecialchars($test),
                    'nisn' => htmlspecialchars(strtoupper($request->nisn)),
                    'nik' => htmlspecialchars(strtoupper($request->nik)),
                    'jenis_kel' => htmlspecialchars(strtoupper($request->jenis_kel)),
                    'tempat_lahir' => htmlspecialchars(strtoupper($request->tempat_lahir)),
                    'tgl_lahir' => htmlspecialchars(strtoupper($request->tgl_lahir)),
                    'alamat_rumah' => htmlspecialchars(strtoupper($request->alamat_rumah)),
                    'agama' => htmlspecialchars(strtoupper($request->agama)),
                    'kewarganegaraan' => htmlspecialchars(strtoupper($request->kewarganegaraan)),
                    'asal_sekolah' => htmlspecialchars(strtoupper($request->asal_sekolah)),
                    'alamat_sekolah' => htmlspecialchars(strtoupper($request->alamat_sekolah)),
                    'bahasa_rumah' => htmlspecialchars(strtoupper($request->bahasa_rumah)),
                    'anak_ke' => htmlspecialchars(strtoupper($request->anak_ke)),
                    'jumlah_saudara' => htmlspecialchars(strtoupper($request->jumlah_saudara)),
                    'golongan_darah' => htmlspecialchars(strtoupper($request->golongan_darah)),
                    'jurusan' => $jurusan,
                ]
            );
            return redirect(route('mgtSMA.show', $tempUser))->with('success', 'Data Sudah Berhasil Disimpan!');
            // dd(Auth::user()->id_user);
            // dd($request->all());
        }
    }

    public function updatepassword(Request $request, $id)
    {
        $messages = [
            'required' => ':attribute wajib diisi!',
            'min' => ':attribute minimal :min karakter!',
        ];

        $request->validate([
            'password' => 'required|min:6|',
        ], $messages);

        $user = User::where('id_user', $id)->first();
        $user->password = password_hash($request->password, PASSWORD_BCRYPT);
        $user->save();
        return redirect(route('mgtSMA.show', $user->id_user))->with('success', "Password $user->nama Sudah Berhasil Diganti!");
    }

    public function printkartu($id)
    {
        $user = User::where('id_user', $id)->first();
        $cek_siswa = Detail_Siswa::where('id_siswa', $id)->count();
        $cek_ortu = Orangtua::where('id_ortu', $id)->count();
        // dd($cek_ortu);
        if ($cek_siswa < 1) {
            return redirect(route('mgtSMA.show', $user->id_user))->with('errors', "Silahkan Lengkapi Biodata Siswa Terlebih Dahulu");
        }
        if ($cek_ortu < 1) {
            return redirect(route('mgtSMA.show', $user->id_user))->with('errors', "Silahkan Lengkapi Data Orang Tua Terlebih Dahulu");
        }

        // Kalau udah lengkap semua datanya...
        $id = $user->id_user;
        User::where('id_user', $user->id_user)->update(['sudah_cetak' => 1]);
        $siswa = Detail_Siswa::where('id_user', $user->id_user)->first();
        $settings = Setting::first();
        $gelombang = Gelombang::where('id_gelombang', $user->dgk)->first();
        $role = Role::where('id', $user->role_id)->first();
        $pdf = PDF::loadview('biodata.admin_kartuUjian', compact('user', 'siswa', 'settings', 'gelombang', 'role'));
        // return $pdf->download('Kartu Tes ' . $user->nama . '.pdf');
        return $pdf->stream();
    }

    public function updatenilai(Request $request, $id)
    {
        $messages = [
            'required' => ':attribute wajib diisi!',
            'min' => 'Nilai :attribute minimal :min!',
            'between' => 'Rentang nilai :attribute minimal :min, dan maksimal :max',
            'max' => 'Nilai :attribute maksimal :max!',
            'max' => 'Ukuran Seragam Tidak Valid!',
        ];

        $request->validate([
            'tkd' => 'required|integer|between:0,100',
            'tpa' => 'required|integer|between:0,100',
            'taq' => 'required|integer|between:0,100',
            'seragam' => 'required|in:S,M,L,XL,XXL',
        ], $messages);
        $user = User::where('id_user', $id)->first();
        $cek_siswa = Detail_Siswa::where('id_siswa', $id)->count();
        $cek_ortu = Orangtua::where('id_ortu', $id)->count();
        // dd($cek_siswa);
        if ($cek_siswa < 1) {
            return redirect(route('mgtSMA.show', $user->id_user))->with('errors', "Silahkan Lengkapi Biodata Siswa Terlebih Dahulu");
        }
        if ($cek_ortu < 1) {
            return redirect(route('mgtSMA.show', $user->id_user))->with('errors', "Silahkan Lengkapi Data Orang Tua Terlebih Dahulu");
        }
        // start hitung rata rata
        $tpa = $request->tpa;
        $taq = $request->taq;
        $tkd = $request->tkd;
        $average = (int) (($tpa + $taq + $tkd) / 3);
        // dd($average);
        // end hitung rata rata
        $cek_nilai = Nilai::where('id_siswa', $id)->first();
        if ($cek_nilai) {
            // kalau nilai sudah ada
            // Kalau data siswanya ada
            $score = Nilai::updateOrCreate(
                [
                    'id_siswa' => $id,
                ],
                [
                    'id_siswa' => $id,
                    'tkd' => $tkd,
                    'tpa' => $tpa,
                    'taq' => $taq,
                    'rata' => $average,
                    'seragam' => $request->seragam
                ]
            );
            return redirect(route('mgtSMA.show', $id))->with('success', 'Data Nilai Sudah Berhasil Diperbarui!');
        } else {
            $score = Nilai::firstOrCreate(
                [
                    'id_siswa' => $id,
                ],
                [
                    'id_siswa' => $id,
                    'tkd' => $tkd,
                    'tpa' => $tpa,
                    'taq' => $taq,
                    'rata' => $average,
                    'seragam' => $request->seragam
                ]
            );
            return redirect(route('mgtSMA.show', $id))->with('success', 'Data Nilai Sudah Berhasil Disimpan!');
        }
    }

    public function bayarformulir($id)
    {
        $user = User::where('id_user', $id)->first();
        $setting = Setting::first();
        $get_role = Role::where('id', $user->role_id)->first();
        $role_id = $get_role->id;
        $role_name = $get_role->name;
        $item = Item::where('id_jenjang', $role_id)->where('nama_item', 'Formulir Pendaftaran')->first();
        // dd($item);
        $AWAL = date('Y') . "-";
        $getLatestID = DB::table('payment')
            ->select('id_payment')
            ->orderByDesc('id_payment')
            ->first();
        // dd($getLatestID);
        $noUrutAkhir = $getLatestID->id_payment ?? '';
        $no = 1;
        if ($noUrutAkhir) {
            $id_invoice = "$AWAL" . sprintf("%05s", abs($noUrutAkhir + 1));
        } else {
            $id_invoice = "$AWAL" . sprintf("%05s", $no);
        };
        Payments::create([
            'id_siswa' => $id,
            'id_invoice' => $id_invoice,
            'nama_siswa' => $user->nama,
            'role_siswa' => $role_name,
            'note' => "Pembayaran Uang Formulir Pendaftaran $user->nama",
            'date' => date('Y-m-d'),
            'from_rek' => $setting->no_rek,
            'from_name' => $setting->pemilik_rek,
            'from_bank_name' => $setting->nama_bank,
            'verified_by' => Auth::user()->nama,
        ]);

        $get_id_payment = Payments::where('id_siswa', $id)
            ->orderBy('id_payment', 'desc')
            ->first();
        // dd($get_id_payment);

        Payment_detail::create([
            'id_payment' => $get_id_payment->id_payment,
            'id_item' => $item->id_item,
            'price' => $item->price,
        ]);

        User::where('id_user', $user->id_user)
            ->update(['bayar_pendaftaran' => 1]);

        return redirect(route('mgtSMA.index'))->with('success', 'Data Pembayaran ' . $user->nama . ' sudah berhasil diperbarui! Sekarang ' . $user->nama . ' dapat masuk kedalam sistem untuk melengkapi data.');
    }
}
