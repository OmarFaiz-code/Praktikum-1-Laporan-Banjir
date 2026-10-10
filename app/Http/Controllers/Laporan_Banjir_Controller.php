<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class Laporan_Banjir_Controller extends Controller
{
    public function index()
    {
        return view('lapor.form');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_pelapor' => ['required', 'string', 'max:255'],
            'lokasi' => ['required', 'string', 'max:255'],
            'tinggi_genangan' => ['required', 'numeric', 'min:0'],
        ]);

        $validated['tanggal_kejadian'] = now()->format('Y-m-d');

        Laporan::create($validated);

        return view('lapor.konfirmasi', ['data' => $validated]);
    }

    public function daftar()
    {
        $dataLaporan = Laporan::query()
            ->orderBy('tanggal_kejadian', 'desc')
            ->get();

        return view('lapor.daftar', ['laporans' => $dataLaporan]);
    }
}