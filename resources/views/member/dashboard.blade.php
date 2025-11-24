<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Member</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        body {
            margin: 0;
            background: #f5f5f7;
            font-family: 'Segoe UI', sans-serif;
        }

        /* SIDEBAR */
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 240px;
            height: 100vh;
            background: linear-gradient(180deg, #4a00e0, #8e2de2);
            color: white;
            padding: 25px 20px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
        }

        .sidebar h2 {
            font-size: 20px;
            margin-bottom: 30px;
            text-align: center;
            font-weight: 700;
        }

        .sidebar a {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 15px;
            color: white;
            text-decoration: none;
            margin-bottom: 8px;
            border-radius: 10px;
            transition: 0.2s;
            font-weight: 500;
            font-size: 15px;
        }

        .sidebar a i {
            font-size: 18px;
            width: 22px;
        }

        .sidebar a:hover,
        .sidebar a.active {
            background: rgba(255,255,255,0.25);
        }


        .content-container {
            margin-left: 260px;
            padding: 35px;
        }

        .card-box {
            background: white;
            border-radius: 12px;
            padding: 20px;
            border: 1px solid #e5e7f3;
            box-shadow: 0px 3px 10px rgba(0,0,0,0.05);
        }

        footer {
            margin-top: 40px;
            padding: 15px;
            background: white;
            border: 1px solid #dfe3f1;
            border-radius: 10px;
            text-align: center;
            color: #64748b;
        }


        .logout-btn {
            width: 100%;
            border-radius: 8px;
            padding: 10px;
            font-weight: 600;
            background: #ff4d4d;
            border: none;
            margin-top: 15px;
        }

        .logout-btn:hover {
            background: #e04444;
        }
    </style>
</head>
<body>

<!-- SIDEBAR -->
<div class="sidebar">
    <h2>Member Marketz</h2>

    <a href="/member/dashboard" class="active">
        <i class="fa fa-home"></i> Dashboard
    </a>

    <a href="/member/products">
        <i class="fa fa-bag-shopping"></i> Lihat Produk
    </a>

    <a href="/member/riwayat-belanja">
        <i class="fa fa-receipt"></i> Riwayat Belanja
    </a>

    <a href="/tentang-kami">
        <i class="fa fa-info-circle"></i> Tentang Kami
    </a>

    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button class="logout-btn">Logout</button>
    </form>
</div>

<!-- CONTENT -->
<div class="content-container">

    <h3>Halo, {{ auth()->user()->name }} </h3>
    <p>Selamat datang di Marketplace Sekolah!</p>

    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card-box">
                <h5 class="fw-bold mb-2">Profil Anda</h5>
                <p class="m-0">Nama : {{ auth()->user()->name }}</p>
                <p class="m-0">Username : {{ auth()->user()->username }}</p>
                <p class="m-0"><strong>Member</strong></p>
            </div>
        </div>
    </div>

    <footer class="mt-5">
        © {{ date('Y') }} Marketplace Sekolah - Dashboard Member
    </footer>

</div>

</body>
</html>
