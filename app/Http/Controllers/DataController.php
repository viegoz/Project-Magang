<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataModel;

class DataController extends Controller
{
    public function edit($id)
    {
        $data = DataModel::find($id);
        $allData = DataModel::all();
        if (!$data) {
            return redirect()->route('entry')->with('error', 'Data tidak ditemukan');
        }
        return view('update', compact('data', 'allData'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'perihal' => 'required|string|max:255',
            'keterangan' => 'required|string|max:255',
            'status' => 'required|string|in:Diterima,Ditolak',
            'tanggal_edit' => 'required|date',
        ]);

        $data = DataModel::find($id);
        if (!$data) {
            return redirect()->route('entry')->with('error', 'Data tidak ditemukan');
        }

        $data->perihal = $request->perihal;
        $data->keterangan = $request->keterangan;
        $data->status = $request->status;
        $data->tanggal_edit = $request->tanggal_edit ?? Carbon::now()->toDateString();
        $data->save();

        return redirect()->route('update.edit', $data->id)->with('success', 'Data berhasil diperbarui');
    }

    public function getPerihalByNde(Request $request)
    {
        $data = DataModel::find($request->id);
        return response()->json(['perihal' => $data->perihal, 'nomor_nde' => $data->nomor_nde]);
    }

    public function getPerihalByNdeInput(Request $request)
    {
        $data = DataModel::where('nomor_nde', $request->nomor_nde)->first();
        if ($data) {
            return response()->json(['perihal' => $data->perihal, 'id' => $data->id]);
        }
        return response()->json([], 404);
    }
}
