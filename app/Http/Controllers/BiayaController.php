<?php

namespace App\Http\Controllers;

use App\Detail_Siswa;
use App\Item;
use App\Jenjang;
use App\Payment_detail;
use App\Payments;
use App\Role;
use App\Setting;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Auth;
use PDF;


class BiayaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // SELECT * FROM payment LEFT JOIN payment_detail ON payment.id_payment = payment_detail.id_payment left JOIN detail_siswa ON detail_siswa.id_siswa = payment.id_siswa LEFT JOIN item ON item.id_item = payment_detail.id_item
        $payment = DB::select('SELECT * FROM payment LEFT JOIN detail_siswa ON detail_siswa.id_siswa = payment.id_siswa ORDER BY payment.verified asc', [1]);
        // dd($payment);
        $judul = "Pembuatan Nota";
        return view('biaya.index', compact('judul', 'payment'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function buat(Request $request, $id)
    {
        $data_user = User::where('id_user', $id)->first();
        if (!$data_user) {
            return redirect()->back()->with('warning', 'Invalid Request');
        } else {
            // $id = $request->auth_tokens;
            $judul = "Pembuatan Nota";
            $rolenya = Role::where('id', $data_user->role_id)->first();
            $role_name = $rolenya->name;
            return view('biaya.buat', compact('judul', 'data_user', 'role_name'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id_user = $request->student_token;
        if ($request->hasFile('bukti')) {
            // kalo upload gambar
            $this->validate($request, [
                // cek validasi gambar
                'note' => 'required',
                'date' => 'required',
                'from_rek' => 'required',
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
                'note' => $request->note,
                'date' => date('Y-m-d'),
                'from_rek' => $request->from_rek,
                'from_name' => $request->from_name,
                'from_bank_name' => $request->from_bank_name,
                'verified' => 1,
                'verified_by' => Auth::user()->nama,
                'bukti' => $namaFile,
            ]);
            $get_id_baru = Payments::where('id_siswa', $id_user)->orderByDesc('id_payment')->first();
            return redirect("/biaya/$get_id_baru->id_payment/edit")->with('success', 'Silahkan Mengisi Detail Pembayaran!');
        } else {
            return redirect()->route('biaya.index')->with('warning', 'Bukti Pembayaran Harus Valid!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $payment = DB::select('SELECT * FROM payment LEFT JOIN payment_detail ON payment.id_payment = payment_detail.id_payment LEFT JOIN users ON payment.id_siswa = users.id_user LEFT JOIN detail_siswa ON detail_siswa.id_siswa = payment.id_siswa LEFT JOIN item ON item.id_item = payment_detail.id_item', [1]);
        $payment_detail = DB::select("SELECT * FROM payment_detail LEFT JOIN item ON item.id_item = payment_detail.id_item WHERE id_payment = $id", [1]);
        // dd($payment_detail);
        $payment = Payments::where('id_payment', $id)->first();
        // dd($payment);
        $id_user = $payment->id_siswa;
        $user = User::where('id_user', $id_user)->first();
        if (!$user) {
            return redirect(route('biaya.index'))->with('errors', 'Data Siswa Ini Sudah Dihapus. Tidak Dapat Mengubah Detail.');
        }
        $setting = Setting::first();
        $get_role = Jenjang::where('id_jenjang', $user->role_id)->first('nama_jenjang');
        $role_name = $get_role->nama_jenjang;
        $item = Item::where('id_jenjang', $user->role_id)->get();
        $total = DB::select("SELECT SUM(price) AS total FROM payment_detail WHERE id_payment = $id", [1]);
        $judul = "Pembuatan Nota";
        return view('biaya.edit', compact('judul', 'payment_detail', 'user', 'setting', 'payment', 'item', 'role_name', 'total'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data_master = Payments::where('id_payment', $id)->first();
        $data_siswa = User::where('id_user', $data_master->id_siswa)->first();
        $detail_payment = Payment_detail::where('id_payment', $id)->get();
        // dd($detail_payment);
        foreach ($detail_payment as $dp) {
            $item_pay = Item::where('id_item', $dp->id_item)->first();
            if (strpos($item_pay->nama_item, 'Formulir') !== false) {
                // Kalau formulir yang dihapus, atur status bayarnya menjadi 0
                $data_siswa = User::where('id_user', $data_master->id_siswa)->update(['bayar_pendaftaran' => 0]);
                $delete = Payment_detail::where('id_payment', $id)->delete();
            } else {
                $delete = Payment_detail::where('id_payment', $id)->delete();
            };
        }
        // $delete_detail = Payment_detail::where('id_payment', $id)->delete();
        $delete_master = Payments::where('id_payment', $id)->delete();
        return redirect()->back()->with('success', 'Data Sudah Berhasil Dihapus!');
    }

    public function tambah_detail(Request $request, $id)
    {
        $payment = Payments::where('id_payment', $id)->first();
        $siswa = User::where('id_user', $payment->id_siswa)->first();
        $detail_item = Item::where('id_item', $request->detail_bayar)->first();
        if ($detail_item->id_jenjang !== $siswa->role_id) {
            return redirect()->back()->with('errors', '403 Invalid Request');
        } else {
            // dd($payment);
            $item_payment = Payment_detail::firstOrCreate(
                ['id_item' => $request->detail_bayar, 'id_payment' => $payment->id_payment],
                [
                    'id_payment' => $payment->id_payment,
                    'id_item' => $detail_item->id_item,
                    'price' => $detail_item->price,
                ]
            );
        }

        if (strpos($detail_item->nama_item, 'Formulir') !== false) {
            // Kalau formulir yang ditambah, atur status bayarnya menjadi 1
            $update_user = User::where('id_user', $payment->id_siswa)->update(['bayar_pendaftaran' => 1]);
        };
        return redirect()->back()->with('success', 'Pembayaran Sudah Berhasil Ditambahkan!');
    }

    public function delete_detail($id)
    {
        $apaan = Payment_detail::where('id_payment_detail', $id)->first();
        $nama_item = Item::where('id_item', $apaan->id_item)->first('nama_item');
        // dd($nama_item->nama_item);
        if (strpos($nama_item->nama_item, 'Formulir') !== false) {
            // Kalau formulir yang dihapus, atur status bayarnya menjadi 0
            $get_payment_master = Payments::where('id_payment', $apaan->id_payment)->first();
            $update_user = User::where('id_user', $get_payment_master->id_siswa)->update(['bayar_pendaftaran' => 0]);
            $delete = Payment_detail::where('id_payment_detail', $id)->delete();
        } else {
            $delete = Payment_detail::where('id_payment_detail', $id)->delete();
        };
        return redirect()->back()->with('success', 'Data Sudah Berhasil Dihapus!');
    }

    public function print($id_payment)
    {
        $payment = Payments::where('id_payment', $id_payment)->first();
        $user = User::where('id_user', $payment->id_siswa)->first();
        $role_name = Role::where('id', $user->role_id)->first();
        $payment_detail = Payment_detail::where('id_payment', $id_payment)->get();
        $setting = Setting::first();
        $total = DB::select("SELECT SUM(price) AS total FROM payment_detail WHERE id_payment = $id_payment", [1]);
        // dd($total);
        $judul = "Pembuatan Nota";
        return view('biaya.print', compact('judul', 'payment', 'payment_detail', 'user', 'setting', 'role_name', 'total'));
    }

    public function printpayment(Request $request)
    {
        try {
            $id_payment = Crypt::decrypt($request->user_token);
        } catch (DecryptException $e) {
            return redirect()->back()->with('errors', 'Invalid User Tokens!');
        };
        $payment = Payments::where('id_payment', $id_payment)->first();
        $user = User::where('id_user', $payment->id_siswa)->first();
        $role_name = Role::where('id', $user->role_id)->first();
        $payment_detail = Payment_detail::where('id_payment', $id_payment)->get();
        $setting = Setting::first();
        $total = DB::select("SELECT SUM(price) AS total FROM payment_detail WHERE id_payment = $id_payment", [1]);
        $judul = "Nota Pembayaran $user->nama";
        $pdf = PDF::loadview('biaya.printpayment', compact('judul', 'payment', 'payment_detail', 'user', 'setting', 'role_name', 'total'));
        // return $pdf->download('Kartu Tes ' . $user->nama . '.pdf');
        return $pdf->stream();
    }
}
