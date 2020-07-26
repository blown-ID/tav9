<?php

namespace App\Exports;

use App\Payment_detail;
use App\Payments;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class PaymentsExport implements FromView, ShouldAutoSize
{
    public function view(): View
    {
        $payments = Payments::all();
        $payment_details = Payment_detail::leftJoin('item', 'payment_detail.id_item', '=', 'item.id_item')->get();
        $data2 = [];
        foreach ($payments as $payment) {
            $totalnya = 0;
            $data_detail_payment = [];
            $price = 0;
            foreach ($payment_details as $payment_detail) {
                if ($payment_detail->id_payment === $payment->id_payment) {
                    $data_detail_payment[] = [
                        'id_payment' => $payment_detail->id_payment,
                        'price' => $payment_detail->price,
                        'nama_item' => $payment_detail->nama_item,
                    ];
                    $price += $payment_detail->price;
                }
                $totalnya += $payment_detail->price;
            }

            $data2[] = [
                'nama_siswa' => $payment->nama_siswa,
                'role_siswa' => $payment->role_siswa,
                'note' => $payment->note,
                'date' => $payment->date,
                'from_rek' => $payment->from_rek,
                'from_name' => $payment->from_name,
                'from_bank_name' => $payment->from_bank_name,
                'verified' => $payment->verified,
                'verified_by' => $payment->verified_by,
                'jumlah' => $price,
                'sp_length' => count($data_detail_payment),
                'detail_payment' => $data_detail_payment,
            ];
        }
        return view('admin.laporan.exportpayment',  [
            'data' => $data2,
            'totalnya' => $totalnya
        ]);
    }
}
