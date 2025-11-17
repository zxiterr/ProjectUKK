<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard - Marketplace</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f5f6fa;
        }

      
        .sidebar {
            width: 230px;
            background: #1f2937;
            height: 100vh;
            padding-top: 20px;
            position: fixed;
            color: white;
        }

        .sidebar h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        .sidebar a {
            display: block;
            padding: 12px 20px;
            color: #d1d5db;
            text-decoration: none;
            margin-bottom: 5px;
            border-radius: 5px;
        }

        .sidebar a:hover {
            background: #374151;
            color: #fff;
        }


        .content {
            margin-left: 250px;
            padding: 25px;
        }

        h1 {
            margin-bottom: 10px;
        }


        .cards {
            display: flex;
            gap: 20px;
            margin-top: 20px;
        }

        .card {
            background: white;
            padding: 20px;
            border-radius: 12px;
            width: 250px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }

        .card h3 {
            margin: 0;
            color: #374151;
        }

        .count {
            font-size: 32px;
            font-weight: bold;
            color: #111827;
        }


        .section {
            margin-top: 40px;
        }

        .section h2 {
            margin-bottom: 10px;
            color: #374151;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }

        table thead {
            background: #1f2937;
            color: white;
        }

        table th, table td {
            padding: 12px 15px;
            text-align: left;
        }

        table tbody tr:nth-child(even) {
            background: #f3f4f6;
        }

    </style>
</head>

<body>


    <div class="sidebar">
        <h2>Admin Marketz</h2>
        <a href="/admin">Dashboard</a>
        <a href="/admin/users">Kelola User</a>
        <a href="/admin/products">Kelola Produk</a>
        <a href="/admin/toko">Kelola Toko</a>


        <form id="logout-form" action="/logout" method="POST" style="display:none;">
            @csrf
        </form>
    </div>


    <div class="content">

        <h1>Dashboard Admin Marketz</h1>
        <p>Selamat datang kembali, <strong>{{ Auth::user()->name }}</strong>!</p>

        <!-- TOP CARDS -->
        <div class="cards">
            <div class="card">
                <h3>Total User</h3>
                <p class="count">{{ $totalUsers }}</p>
            </div>

            <div class="card">
                <h3>Total Produk</h3>
                <p class="count">{{ $totalProducts }}</p>
            </div>

            <div class="card">
                <h3>Total Toko</h3>
                <p class="count">{{ $totalToko }}</p>
            </div>
        </div>


        <div class="section">
            <h2>Produk Terbaru</h2>

            <table>
                <thead>
                    <tr>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Toko</th>
                        <th>Tanggal Dibuat</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($latestProducts as $p)
                    <tr>
                        <td>{{ $p->nama }}</td>
                        <td>Rp {{ number_format($p->harga, 0, ',', '.') }}</td>
                        <td>{{ $p->toko->nama ?? '-' }}</td>
                        <td>{{ $p->created_at->format('d M Y') }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4">Belum ada produk.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

    </div>

</body>
</html>
