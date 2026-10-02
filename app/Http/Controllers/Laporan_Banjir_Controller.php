<?php

namespace App\Http\Controllers;

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
            'nama_pelapor'    => 'required|string|max:255',
            'lokasi'          => 'required|string|max:255',
            'tinggi_genangan' => 'required|numeric|min:0',
        ]);

        return view('lapor.konfirmasi', ['data' => $validated]);
    }

    public function daftar()
    {
        $dataLaporan = [
            [
                'nama_pelapor'    => 'Budi Santoso',
                'lokasi'          => 'Kec. Baleendah, Kel. Andir',
                'tinggi_genangan' => 25,
            ],
            [
                'nama_pelapor'    => 'Siti Rahma',
                'lokasi'          => 'Kec. Dayeuhkolot, Kel. Citeureup',
                'tinggi_genangan' => 50,
            ],
            [
                'nama_pelapor'    => 'Ahmad Fauzi',
                'lokasi'          => 'Kec. Bojongsoang, Kel. Dayeuhkolot',
                'tinggi_genangan' => 85,
            ],
        ];

        return view('lapor.daftar', ['laporans' => $dataLaporan]);
    }
}
