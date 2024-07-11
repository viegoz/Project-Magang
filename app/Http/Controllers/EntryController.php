<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EntryController extends Controller
{
    public function getKantorList()
    {
    $kantorList = DB::table('referensi')->select('nama_kantor')->get();
    return response()->json($kantorList);
    }

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
            'tanggal_submit_surat' => 'required|date',
        ]);

        // Fungsi untuk menghitung total kinerja
        function calculateTotalKinerja($kinerja)
        {
            list($kurlog, $payment, $ritel) = array_map('intval', explode(',', $kinerja));

            $kurlog = ($kurlog * 20) / 100;
            $payment = ($payment * 60) / 100;
            $ritel = ($ritel * 20) / 100;

            return $kurlog + $payment + $ritel;
        }

        // Menghitung total kinerja untuk setiap tahun
        $data['kinerja_2021'] = calculateTotalKinerja($data['kinerja_2021']);
        $data['kinerja_2022'] = calculateTotalKinerja($data['kinerja_2022']);
        $data['kinerja_2023'] = calculateTotalKinerja($data['kinerja_2023']);

        // Menambahkan nilai default untuk kolom status
        $data['status'] = 'Pending';

        DB::table('izin_operasi')->insert($data);

        return back()->with('success', 'Data has been submitted successfully.');
    }

    public function getKantorData(Request $request)
{
    $namaKantor = $request->input('nama_kantor');
    $kantorData = DB::table('referensi')
        ->select('id_kantor', 'jenis_kantor', 'pso_non_pso', 'regional', 'kcu', 'kc')
        ->where('nama_kantor', $namaKantor)
        ->first();

    if ($kantorData) {
        return response()->json($kantorData);
    } else {
        return response()->json(['message' => 'Data not found'], 404);
    }
}
}
