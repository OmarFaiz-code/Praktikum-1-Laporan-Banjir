<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaporBanjir - Form Pelaporan</title>

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 50px;
        }

        .card {
            background: #ffffff;
            padding: 30px;
            border-radius: 8px;
            max-width: 500px;
            margin: auto;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        h2 {
            color: #0d6efd;
            margin-top: 0;
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #333;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ced4da;
            border-radius: 4px;
            font-size: 14px;
        }

        button {
            background-color: #0d6efd;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
            font-weight: 600;
        }

        button:hover {
            background-color: #0b5ed7;
        }
    </style>
</head>

<body>

    <div class="card">
        <h2>LaporBanjir BPBD</h2>

        <form action="/lapor-banjir" method="POST">
            @csrf

            <div class="form-group">
                <label>Nama Pelapor:</label>
                <input
                    type="text"
                    name="nama_pelapor"
                    placeholder="Masukkan nama lengkap"
                    required
                >
            </div>

            <div class="form-group">
                <label>Lokasi Kejadian (Kecamatan/Desa):</label>
                <input
                    type="text"
                    name="lokasi"
                    placeholder="Contoh: Baleendah / Dayeuhkolot"
                    required
                >
            </div>

            <div class="form-group">
                <label>Tinggi Genangan Air (cm):</label>
                <input
                    type="number"
                    name="tinggi_genangan"
                    placeholder="Contoh: 50"
                    required
                >
            </div>

            <button type="submit">Kirim Laporan</button>
        </form>
    </div>

</body>
</html>