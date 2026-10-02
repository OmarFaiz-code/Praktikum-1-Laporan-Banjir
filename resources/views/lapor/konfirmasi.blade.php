@extends('layouts.app')

@section('content')
    <h2>Konfirmasi Laporan</h2>

    <x-alert>
        Laporan berhasil dikirim dan diproses sementara oleh Controller!
    </x-alert>

    <ul>
        <li><strong>Nama Pelapor:</strong> {{ $data['nama_pelapor'] }}</li>
        <li><strong>Lokasi Kejadian:</strong> {{ $data['lokasi'] }}</li>
        <li><strong>Tinggi Genangan:</strong> {{ $data['tinggi_genangan'] }} cm</li>
    </ul>

    <a href="{{ route('lapor.index') }}" style="display: block; text-align: center; margin-top: 20px; text-decoration: none; background-color: #6c757d; color: white; padding: 10px; border-radius: 4px; font-weight: 600;">Kirim Laporan Lain</a>
@endsection