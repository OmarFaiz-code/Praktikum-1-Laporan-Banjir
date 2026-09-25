<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller
{
}

class Laporan_Banjir_Controller extends Controller
{
    public function index()
    {
        return view('lapor');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_pelapor'    => 'required|string|max:255',
            'lokasi'          => 'required|string|max:255',
            'tinggi_genangan' => 'required|numeric',
        ]);

        return view('konfirmasi', ['data' => $validated]);
    }
}
