<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaporBanjir - BPBD Kabupaten Bandung</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f0f2f5; margin: 0; padding: 0; }
        header { background-color: #0d6efd; color: white; padding: 20px; text-align: center; }
        nav { background-color: #343a40; padding: 10px; text-align: center; }
        nav a { color: white; text-decoration: none; margin: 0 15px; font-weight: 600; }
        nav a:hover { text-decoration: underline; }
        .container { max-width: 600px; margin: 30px auto; background: #ffffff; padding: 30px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); }
        footer { text-align: center; padding: 20px; color: #6c757d; font-size: 13px; margin-top: 40px; }
        .form-group { margin-bottom: 20px; }
        label { display: block; margin-bottom: 8px; font-weight: 600; color: #333; }
        input[type="text"], input[type="number"] { width: 100%; padding: 10px; box-sizing: border-box; border: 1px solid #ced4da; border-radius: 4px; font-size: 14px; }
        button { background-color: #0d6efd; color: white; border: none; padding: 12px 20px; border-radius: 4px; cursor: pointer; width: 100%; font-size: 16px; font-weight: 600; }
        button:hover { background-color: #0b5ed7; }
        .alert-box { background-color: #d1e7dd; color: #0f5132; padding: 12px; border-radius: 4px; margin-bottom: 20px; text-align: center; font-weight: 600; border: 1px solid #badbcc; }
        .card-item { background: #f8f9fa; border: 1px solid #dee2e6; border-radius: 6px; padding: 15px; margin-bottom: 15px; }
        .badge { display: inline-block; padding: 4px 8px; border-radius: 4px; font-size: 12px; font-weight: bold; color: white; }
        .badge-waspada { background-color: #ffc107; color: #000; }
        .badge-siaga { background-color: #fd7e14; }
        .badge-awas { background-color: #dc3545; }
    </style>
</head>
<body>

    <header>
        <h1>Sistem Pelaporan Banjir (LaporBanjir)</h1>
        <p>BPBD Kabupaten Bandung</p>
    </header>


    <nav>
        <a href="{{ route('lapor.index') }}">Form Laporan</a>
        <a href="{{ route('lapor.daftar') }}">Daftar Laporan</a>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        &copy; 2026 BPBD Kabupaten Bandung. All rights reserved.
    </footer>

</body>
</html>