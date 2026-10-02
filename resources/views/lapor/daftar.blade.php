@extends('layouts.app')

@section('content')
    <h2>Daftar Laporan Banjir Warga</h2>
    <p style="margin-bottom: 20px; color: #666;">Berikut adalah contoh data laporan yang dikelola sementara dalam array controller:</p>

    @forelse($laporans as $item)
        
        @include('partials.laporan-card', ['item' => $item])
    @empty
        <p style="text-align: center; color: #777;">Belum ada data laporan.</p>
    @endforelse
@endsection