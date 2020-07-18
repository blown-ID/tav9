<?php

namespace App\Http\Controllers;

use App\Payments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PembayaranSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $judul = "Pembayaran Siswa";
        $payments = Payments::where('id_siswa', Auth::user()->id_user)->get();
        return view('pembayaransiswa.index', compact('judul', 'payments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // Form Validation
        $messages = [
            'required' => ':attribute wajib diisi!',
            'alpha' => ':attribute hanya dapat berupa alfabet!',
            'min' => ':attribute minimal :min karakter!',
            'max' => ':attribute maksimal :max karakter!',
        ];

        $request->validate([
            'tanggal' => 'required|max:64',
            'from_rek' => 'required|max:64',
            'nama_pengirim' => 'required|max:64',
            'nama_bank' => 'required|max:64',
            'note' => 'required|max:64',
            'image' => 'required',
        ], $messages);

        if ($request->hasFile('image')) {
            // kalo upload gambar
            $this->validate($request, [
                // cek validasi gambar
                'image' => 'required|image|mimes:jpg,png,jpeg|max:2048',
            ]);
            $namaFile = 'img_' . time() . '.' . $request->image->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/assets/images/bukti_transfer/', $namaFile);
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

            DB::table('payment')->insert([
                'id_siswa' => Auth::user()->id_user,
                'nama_siswa' => Auth::user()->nama,
                'role_siswa' => Auth::user()->role_id,
                'id_invoice' => $id_invoice,
                'note' => $request->note,
                'date' => $request->tanggal,
                'from_rek' => $request->from_rek,
                'from_name' => $request->nama_pengirim,
                'from_bank_name' => $request->nama_pengirim,
                'verified' => 0,
                'bukti' => $namaFile,
            ]);

            return redirect()->back()->with('success', 'Data Sudah Berhasil Dimasukkan! Harap Tunggu Admin Kami Memvalidasi Pembayaran!');
        } else {
            return redirect()->back()->with('warning', 'hah?');
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
        //
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
        //
    }
}
