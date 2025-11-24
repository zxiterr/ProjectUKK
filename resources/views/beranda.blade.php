<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Beranda MarketzPlace</title>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --bg-dark: #1f2137;
            --bg-card: #1f2937;
            --primary: #235eff;
            --accent: #3b82f6;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: var(--bg-dark);
            color: #e5e7eb;
        }


        .navbar-hostinger {
            background: #ffffff;
            padding: 12px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #e5e7eb;
        }

        .navbar-left h2 {
            margin: 0;
            font-size: 22px;
            color: #1f2937;
            font-weight: bold;
        }

        .navbar-menu {
            display: flex;
            gap: 25px;
            margin-left: 40px;
        }

        .navlink {
            text-decoration: none;
            color: #1f2937;
            font-weight: bold;
            font-size: 15px;
            transition: 0.2s;
        }

        .navlink:hover {
            color: var(--accent);
        }


        .navbar-center {
            flex-grow: 1;
            display: flex;
            justify-content: center;
        }

        .search-box {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .search-input {
            width: 260px;
            padding: 12px 16px;
            background: #0f172a;
            border: 1px solid #334155;
            border-radius: 50px;
            color: white;
            font-size: 15px;
            transition: 0.3s;
        }

        .search-input:focus {
            border-color: var(--accent);
            outline: none;
        }

        .btn-search {
            padding: 12px 20px;
            background: #000000;
            border: none;
            border-radius: 50px;
            color: white;
            cursor: pointer;
            font-weight: bold;
            transition: 0.3s;
        }

        .btn-search:hover {
            background: #111111;
        }

        .btn-login {
            padding: 8px 18px;
            background: white;
            border: 1px solid #000000;
            color: #000000;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
        }


        .hero {
            background: linear-gradient(to right, var(--accent), #1e3a8a);
            padding: 60px;
            text-align: center;
            color: white;
            border-radius: 0 0 20px 20px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.4);
        }

        .hero h1 {
            margin: 0;
            font-size: 40px;
        }


        .product-box {
            padding: 40px;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 20px;
        }

        .product-card {
            background: var(--bg-card);
            padding: 15px;
            border-radius: 12px;
            text-align: center;
            transition: 0.2s;
        }

        .product-card:hover {
            transform: translateY(-5px);
        }

        .product-card img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 10px;
        }

        .price {
            color: var(--accent);
            font-weight: bold;
        }

        .btn-cart {
            padding: 8px 12px;
            background: var(--accent);
            border: none;
            border-radius: 8px;
            color: white;
            cursor: pointer;
        }


        footer {
            background: var(--primary);
            text-align: center;
            padding: 40px;
            color: white;
            margin-top: 50px;
        }

        footer .social-icons a {
            color: white;
            margin: 0 10px;
            font-size: 22px;
            transition: 0.3s;
        }

        footer .social-icons a:hover {
            opacity: 0.7;
        }
    </style>
</head>

<body>

<!-- NAV -->
<div class="navbar-hostinger">
    <div class="navbar-left">
        <h2>Zschool</h2>
    </div>

    <div class="navbar-menu">
        <a href="/" class="navlink">Beranda</a>
        <a href="/member/produk" class="navlink">Produk</a>
        <a href="/toko" class="navlink">Toko</a>
        <a href="/tentang-kami" class="navlink">Tentang Kami</a>
    </div>

    <div class="navbar-center">
        <div class="search-box">
            <input type="text" class="search-input" placeholder="Cari produk...">
            <button class="btn-search">Cari</button>
        </div>
    </div>

    <div class="navbar-right">
        <a href="/login" class="btn-login">Login</a>
    </div>
</div>


<div class="hero">
    <h1>Selamat Datang di MarketzPlace Zschool</h1>
</div>


<!-- FOOTER -->
<footer>
    <h2 style="margin: 0; font-size: 24px;">Marketplace Sekolah</h2>

    <p style="margin-top: 10px; opacity: 0.85;">
        Media jual beli produk kreativitas siswa yang aman dan terpercaya.
    </p>

    <div class="social-icons" style="margin-top: 20px;">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-whatsapp"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
    </div>

    <p style="margin-top: 20px; opacity: 0.7;">
        © 2025 Marketplace Sekolah – All Rights Reserved
    </p>
</footer>

</body>
</html>
