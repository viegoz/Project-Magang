<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EntryController extends Controller
{
    public function submit(Request $request)
    {
        $data = $request->validate([
            'id_kantor' => 'required|string|max:255',
            'nama_kantor' => 'required|string|max:255',
            'jenis_kantor' => 'required|string|max:255',
            'pso_non_pso' => 'required|string|max:255',
            'kcu_kc' => 'required|string|max:255',
            'nomor_nde' => 'required|string|max:255',
            'tanggal_nde' => 'required|string|max:255',
            'perihal' => 'required|string|max:255',
            'pejabat_pengirim_nde' => 'required|string|max:255',
            'regional' => 'required|string|max:255',
            'jenis_pengajuan' => 'required|string|max:255',
            'biaya_yang_diajukan' => 'required|string|max:255',
            'masa_sewa' => 'required|string|max:255',
            'tmt' => 'required|string|max:255',
            'sd' => 'required|string|max:255',
            'kinerja_2021' => 'required|string|max:255',
            'kinerja_2022' => 'required|string|max:255',
            'kinerja_2023' => 'required|string|max:255',
        ]);

        DB::table('izin_operasi')->insert($data);

        return back()->with('success', 'Data has been submitted successfully.');
    }
}
