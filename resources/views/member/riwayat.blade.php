<!DOCTYPE html>
<html>
<head>
    <title>Riwayat Belanja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f4f7fe;
        }
        .card-main {
            border-radius: 12px;
            border: none;
            box-shadow: 0 5px 18px rgba(0,0,0,0.08);
        }
    </style>
</head>

<body>

<nav class="navbar navbar-expand-lg bg-white shadow-sm px-4">
    <a class="navbar-brand fw-bold">Marketplace Sekolah</a>

    <div class="ms-auto d-flex gap-2">
        <a href="{{ route('member.dashboard') }}" class="btn btn-secondary btn-sm">Kembali</a>

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="btn btn-danger btn-sm">Logout</button>
        </form>
    </div>
</nav>


<div class="container mt-5">

    <h3 class="text-center mb-4">🛒 Riwayat Belanja Saya</h3>

    <div class="card card-main">

        <table class="table table-hover mb-0">
            <thead class="table-primary">
                <tr>
                    <th>No</th>
                    <th>Produk</th>
                    <th>Jumlah</th>
                    <th>Total (Rp)</th>
                    <th>Tanggal</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($riwayat as $r)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $r['produk'] }}</td>
                        <td>{{ $r['jumlah'] }}</td>
                        <td>{{ number_format($r['total'], 0, ',', '.') }}</td>
                        <td>{{ $r['tanggal'] }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center text-muted">
                            Belum ada transaksi.
                        </td>
                    </tr>
                @endforelse
            </tbody>

        </table>

    </div>

</div>

</body>
</html>
