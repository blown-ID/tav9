<?php

namespace App\Http\Controllers;

use App\Detail_Siswa;
use App\Gelombang;
use App\Item;
use App\Orangtua;
use App\Setting;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;
use Spatie\Permission\Models\Role;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware('cekPayment');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $judul = "Dashboard";
        $role_name = Auth::user()->getRoleNames()->first();
        $cek_siswa = Detail_Siswa::where('id_siswa', Auth::user()->id_user)->count();
        $cek_ortu = Orangtua::where('id_ortu', Auth::user()->id_user)->count();
        if ($cek_siswa > 0) {
            $valid_id = "Sudah";
        } else {
            $valid_id = "Belum";
        }

        if ($cek_ortu > 0) {
            $cekOrtu = "Sudah";
        } else {
            $cekOrtu = "Belum";
        }

        if ($role_name === "SMP" || $role_name === "SMA" || $role_name === "SMK") {
            return view('siswa.index', compact('judul', 'valid_id', 'cekOrtu'));
        } else {
            // role = Admin
            $jsmp = User::where('role_id', 1)->count();
            $jsma = User::where('role_id', 2)->count();
            $jsmk = User::where('role_id', 3)->count();
            $bb = User::where('bayar_pendaftaran', 0)->count();
            $jumlah = [$jsmp, $jsma, $jsmk];
            return view('admin.index', compact('jumlah', 'judul', 'bb'));
        }
        // dd(Auth::user());
    }

    public function payment()
    {
        if (Auth::user()->bayar_pendaftaran === 1) {
            return redirect(route('home'));
        } else {
            return view('auth.payment');
        }
    }

    public function examcard()
    {
        $judul = "Cetak Kartu Ujian";
        $cek_siswa = Detail_Siswa::where('id_siswa', Auth::user()->id_user)->count();
        $cek_ortu = Orangtua::where('id_ortu', Auth::user()->id_user)->count();
        if ($cek_siswa > 0) {
            $valid_id = "Sudah";
        } else {
            $valid_id = "Belum";
        }

        if ($cek_ortu > 0) {
            $cekOrtu = "Sudah";
        } else {
            $cekOrtu = "Belum";
        }

        $ceksiswa = Auth::user();
        // dd($ceksiswa);

        return view('siswa.examcard', compact('valid_id', 'judul', 'cekOrtu', 'ceksiswa'));
    }

    public function examcardPost(Request $request)
    {
        $id = Auth::user()->id_user;
        $Detail_siswa = User::find($id)->first();
        $Detail_siswa->sudah_cetak = 1;
        $Detail_siswa->save();
        User::where('id_user', Auth::user()->id_user)->update(['sudah_cetak' => 1]);
        // return redirect(route('examcard'));
        $user = User::where('id_user', Auth::user()->id_user)->first();
        $siswa = Detail_Siswa::where('id_user', Auth::user()->id_user)->first();
        $settings = Setting::first();
        $gelombang = Gelombang::where('id_gelombang', Auth::user()->dgk)->first();
        $pdf = PDF::loadview('biodata.kartuUjian', compact('user', 'siswa', 'settings', 'gelombang'));
        return $pdf->download('Kartu Tes ' . $user->nama . '.pdf');
        // return $pdf->stream();
    }

    public function information()
    {
        $judul = "Informasi Kelulusan";
        $gelombang = Gelombang::first();
        $setting = Setting::first();
        $tanggal = strtotime($gelombang->tgl_ujian);
        $validasi = date('d F Y', strtotime("+2 weeks", $tanggal));
        $user = User::where('id_user', Auth::user()->id_user)->first();
        $siswa = Detail_Siswa::where('id_user', Auth::user()->id_user)->first();
        if ($user->sudah_cetak === 0) {
            return redirect(route('examcard'))->with('info', 'Silahkan Melengkapi Data Dan Mencetak Kartu Ujian Terlebih Dahulu!');
        } else {
            return view("information.index", compact('user', 'judul', 'validasi', 'siswa', 'gelombang', 'setting'));
        }

        // jenis yang ada pada sweetalert: warning, success, errors, info, message, basic
        // return redirect(route('home'))->with('success', 'Profile updated!');
    }

    public function rincian_biaya()
    {
        $judul = "Rincian Biaya";
        $role = Auth::user()->role_id;
        $item = Item::where('id_jenjang', $role)->where('nama_item', 'not like', "%Seragam%")->get();
        $seragam = Item::where('id_jenjang', $role)->where('nama_item', 'like', "%Seragam%")->get();
        // dd($seragam);
        return view('information.rincian_biaya', compact('item', 'judul', 'seragam'));
    }
}
