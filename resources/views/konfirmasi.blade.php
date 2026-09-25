<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmasi Laporan Banjir</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f0f2f5; margin: 0; padding: 50px; }
        .card { background: #ffffff; padding: 30px; border-radius: 8px; max-width: 500px; margin: auto; box-shadow: 0 4px 8px rgba(0,0,0,0.1); }
        h2 { color: #198754; margin-top: 0; text-align: center; }
        .alert { background-color: #d1e7dd; color: #0f5132; padding: 10px; border-radius: 4px; margin-bottom: 20px; text-align: center; font-size: 14px; }
        ul { list-style-type: none; padding: 0; }
        li { padding: 12px 0; border-bottom: 1px solid #dee2e6; font-size: 15px; }
        li strong { display: inline-block; width: 160px; color: #495057; }
        .btn-back { display: block; text-align: center; margin-top: 20px; text-decoration: none; background-color: #6c757d; color: white; padding: 10px; border-radius: 4px; font-weight: 600; }
        .btn-back:hover { background-color: #5c636a; }
    </style>
</head>
<body>
    <div class="card">
        <h2>Konfirmasi Laporan</h2>
        <div class="alert">
            Data berhasil diproses sementara oleh Controller (Tanpa Database)[cite: 1].
        </div>
        <ul>
            <li><strong>Nama Pelapor:</strong> {{ $data['nama_pelapor'] }}[cite: 1]</li>
            <li><strong>Lokasi Kejadian:</strong> {{ $data['lokasi'] }}[cite: 1]</li>
            <li><strong>Tinggi Genangan:</strong> {{ $data['tinggi_genangan'] }} cm[cite: 1]</li>
        </ul>
        <a href="/lapor-banjir" class="btn-back">Kirim Laporan Lain</a>
    </div>
</body>
</html>