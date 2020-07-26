<?php

namespace App\Exports;

use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;


class IsCompletedExport implements FromView, ShouldAutoSize
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function view(): View
    {
        $data = DB::select('SELECT * FROM users u LEFT JOIN detail_siswa ds ON u.id_user = ds.id_user LEFT JOIN detail_ortu do ON ds.id_siswa = do.id_ortu LEFT JOIN jenjang j ON ds.jurusan = j.id_jenjang WHERE u.is_completed = 1 AND u.bayar_pendaftaran = 1 AND u.sudah_cetak = 1 AND u.is_lulus = 1 ORDER BY role_id ASC');
        return view('admin.laporan.isCompleted',  [
            'data' => $data
        ]);
    }
}
