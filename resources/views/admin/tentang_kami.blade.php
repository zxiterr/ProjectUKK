<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - Marketplace Sekolah</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .header {
            background: #3b82f6;
            color: white;
            padding: 35px 20px;
            text-align: center;
        }

        .header h1 {
            margin: 0;
            font-size: 28px;
            font-weight: bold;
        }

        .container {
            max-width: 850px;
            margin: 30px auto;
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        h3 {
            margin-top: 25px;
            font-size: 20px;
            font-weight: bold;
            color: #222;
        }

        p, ul li {
            font-size: 15px;
            line-height: 1.6;
        }

        ul {
            padding-left: 18px;
        }

        .btn-back {
            display: inline-block;
            margin-bottom: 20px;
            background: #3b82f6;
            color: white;
            padding: 10px 18px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: bold;
        }
        .btn-back:hover {
            background: #2563eb;
        }

        footer {
            background: #3b82f6;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 40px;
            font-size: 14px;
        }
    </style>
</head>

<body>


    <div class="header">
        <h1>Tentang Marketplace Sekolah</h1>
        <p>Platform sederhana untuk jual beli di lingkungan sekolah</p>
    </div>


    <div class="container">


        <a href="{{ url('/') }}" class="btn-back">← Kembali</a>

        <h3>Apa Itu Marketplace Sekolah?</h3>
        <p>
            Marketplace Sekolah adalah platform sederhana yang digunakan oleh siswa,
            guru, dan warga sekolah untuk melakukan jual beli secara lebih mudah
            dan terorganisir.
        </p>

        <h3>Tujuan Dibuatnya</h3>
        <ul>
            <li>Mendukung kreativitas dan usaha siswa.</li>
            <li>Menyediakan tempat untuk menjual produk karya siswa.</li>
            <li>Mempermudah pembelian kebutuhan sekolah.</li>
            <li>Membuat transaksi lebih rapi dan praktis.</li>
        </ul>

        <h3>Siapa Saja yang Bisa Menggunakan?</h3>
        <ul>
            <li><strong>Siswa</strong>  menjual atau membeli produk.</li>
            <li><strong>Guru</strong>  memantau aktivitas marketplace.</li>
            <li><strong>Koperasi & Kantin</strong>  menjual kebutuhan sekolah.</li>
        </ul>

        <h3>Keunggulan</h3>
        <ul>
            <li>Transaksi lebih mudah dan aman.</li>
            <li>Produk sesuai kebutuhan sekolah.</li>
            <li>Data transaksi lebih teratur.</li>
            <li>Meningkatkan jiwa wirausaha siswa.</li>
        </ul>

        <h3>Kontak</h3>
        <p>Email: marketzplace@gmail.com</p>
        <p>Telp: 0812-3456-7890</p>

    </div>

    <!-- Footer -->
    <footer>
        © 2025 Marketplace Sekolah — All Rights Reserved
    </footer>

</body>
</html>
