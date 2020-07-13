<?php

namespace App\Exports;

use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class SMPExport implements FromView, ShouldAutoSize
{
    public function view(): View
    {
        $dataa = DB::select('SELECT * FROM users LEFT JOIN detail_siswa ON users.id_user = detail_siswa.id_user LEFT JOIN detail_ortu ON detail_siswa.id_ortu = detail_ortu.id_ortu LEFT JOIN nilai ON detail_siswa.id_siswa = nilai.id_siswa WHERE users.role_id = 1 ORDER BY users.bayar_pendaftaran DESC, users.nama ASC');
        return view('admin.smp.exportexcel',  [
            'dataa' => $dataa
        ]);
    }
}
