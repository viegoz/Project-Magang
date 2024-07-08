<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MonitoringController extends Controller
{
    public function index(Request $request)
    {
        // Mengambil nilai filter dari request
        $month = $request->input('month');
        $year = $request->input('year');
        $regional = $request->input('regional');
        $status = $request->input('status');

        // Query dasar
        $query = DB::table('izin_operasi');

        // Menambahkan kondisi filter jika ada
        if ($month) {
            $query->whereMonth('tmt', $month);
        }
        if ($year) {
            $query->whereYear('tmt', $year);
        }
        if ($regional) {
            $query->where('regional', 'like', '%' . $regional . '%');
        }
        if ($status) {
            $query->where('status', $status);
        }

        // Mengambil data yang sudah difilter
        $data = $query->get();

        // Mengirim data ke view monitoring
        return view('monitoring', ['data' => $data]);
    }
}
