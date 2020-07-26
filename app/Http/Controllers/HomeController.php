<?php

namespace App\Http\Controllers;

use App\Payments;
use Illuminate\Support\Facades\DB;
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
use Excel;
use App\Exports\IsCompletedExport;
use App\Payment_detail;

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
            $bb = count(Payments::where('verified', 0)->get());
            $isCompleted = count(User::where('is_completed', 1)->get());
            $sumPayment = Payment_detail::sum('price');
            $menunggu = DB::select('SELECT COUNT("menunggu") AS menunggu FROM users u WHERE u.is_lulus = 0 AND (role_id = 1 OR role_id = 2 OR role_id = 3)');
            $lulus = DB::select('SELECT COUNT("lulus") AS lulus FROM users u WHERE u.is_lulus = 1 AND (role_id = 1 OR role_id = 2 OR role_id = 3)');
            $tidak_lulus = DB::select('SELECT COUNT("tidak_lulus") AS tidak_lulus FROM users u WHERE u.is_lulus = 2 AND (role_id = 1 OR role_id = 2 OR role_id = 3)');
            $jumlah = [$jsmp, $jsma, $jsmk];
            $piechart = [$menunggu[0]->menunggu, $lulus[0]->lulus, $tidak_lulus[0]->tidak_lulus];
            return view('admin.index', compact('jumlah', 'judul', 'bb', 'piechart', 'isCompleted', 'sumPayment'));
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

    public function submitpayment(Request $request)
    {
        // dd($request->all());
        $id_user = Auth::user()->id_user;
        if ($request->hasFile('bukti')) {
            // kalo upload gambar
            $this->validate($request, [
                // cek validasi gambar
                'note' => 'required',
                'tanggal' => 'required',
                'no_rek' => 'required',
                'from_name' => 'required',
                'from_bank_name' => 'required',
                'bukti' => 'required|image|mimes:jpg,png,jpeg|max:2048',
            ]);
            $namaFile = 'img_' . time() . '.' . $request->bukti->getClientOriginalExtension();
            $request->file('bukti')->move(public_path() . '/assets/images/bukti_transfer/', $namaFile);
            $get_user = User::where('id_user', $id_user)->first();
            $nama_role = Role::where('id', $get_user->role_id)->first();
            $setting = Setting::first();
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
            // dd($id_user);
            Payments::create([
                'id_siswa' => $id_user,
                'id_invoice' => $id_invoice,
                'nama_siswa' => $get_user->nama,
                'role_siswa' => $nama_role->name,
                'note' => "Formulir " . $request->note,
                'date' => $request->tanggal,
                'from_rek' => $request->no_rek,
                'from_name' => $request->from_name,
                'from_bank_name' => $request->from_bank_name,
                'verified' => 0,
                'bukti' => $namaFile,
            ]);
            return redirect()->back()->with('success', 'Harap Menunggu Konfirmasi Admin!');
        } else {
            return redirect()->route('biaya.index')->with('warning', 'Bukti Pembayaran Harus Valid!');
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
        $gelombang = Gelombang::where('id_gelombang', Auth::user()->dgk)->first();
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

    public function laporan_is_completed()
    {
        $tanggal = date('d-m-Y');
        return Excel::download(new IsCompletedExport, "Laporan Siswa Baru $tanggal.xlsx");
    }
}
