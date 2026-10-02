@extends('layouts.app')

@section('content')
    <h2>Form Laporan Banjir</h2>
    <form action="{{ route('lapor.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Nama Pelapor:</label>
            <input type="text" name="nama_pelapor" placeholder="Masukkan nama lengkap" required>
        </div>
        <div class="form-group">
            <label>Lokasi Kejadian (Kecamatan/Desa):</label>
            <input type="text" name="lokasi" placeholder="Contoh: Baleendah / Dayeuhkolot" required>
        </div>
        <div class="form-group">
            <label>Tinggi Genangan Air (cm):</label>
            <input type="number" name="tinggi_genangan" placeholder="Contoh: 50" required>
        </div>
        <button type="submit">Kirim Laporan</button>
    </form>
@endsection