<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Marketplace Zschool</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --bg-dark: #1f2137;
            --bg-card: #262b40;
            --primary: #3b82f6;
            --text-light: #e5e7eb;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: var(--bg-dark);
            color: var(--text-light);
        }

        /* NAVBAR */
        .navbar {
            background: #fff;
            padding: 12px 35px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #ddd;
        }

        .navbar h2 {
            margin: 0;
            font-size: 20px;
            color: #1f2937;
            font-weight: bold;
        }

        .navbar-menu {
            display: flex;
            gap: 20px;
            align-items: center;
        }

        .navlink {
            font-weight: bold;
            text-decoration: none;
            color: #1f2937;
        }

        .navlink:hover {
            color: var(--primary);
        }

        /* DROPDOWN */
        .dropdown {
            position: relative;
        }

        .dropdown-menu {
            position: absolute;
            background: white;
            padding: 10px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.2);
            display: none;
        }

        /* HERO */
        .hero {
            background: #1f2937;
            padding: 35px 20px;
            text-align: center;
            border-bottom: 1px solid #2e354d;
        }

        .hero h1 {
            margin: 0;
            font-size: 28px;
        }

        /* PRODUCTS */
        .product-section {
            padding: 25px 30px;
        }

        .product-title {
            margin-bottom: 15px;
            font-size: 22px;
            font-weight: bold;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
            gap: 18px;
        }

        .product-card {
            background: var(--bg-card);
            padding: 12px;
            border-radius: 10px;
            text-align: center;
            border: 1px solid #2d3148;
        }

        .product-card img {
            width: 100%;
            height: 130px;
            object-fit: cover;
            border-radius: 8px;
        }

        .btn-detail {
            display: inline-block;
            margin-top: 8px;
            padding: 8px 13px;
            background: var(--primary);
            border-radius: 6px;
            font-size: 13px;
            font-weight: bold;
            color: white;
            text-decoration: none;
        }

        
        footer {
            background: #111827;
            padding: 35px;
            margin-top: 40px;
            text-align: center;
            color: #e5e7eb;
            border-top: 1px solid #2e354d;
        }
    </style>
</head>

<body>

    <div class="navbar">
        <h2>Zschool</h2>

        <div class="navbar-menu">



            <a href="{{ url('/') }}" class="navlink">Beranda</a>


            <div class="dropdown">
                <a class="navlink" style="cursor:pointer;">Category ▼</a>

                <div class="dropdown-menu">
                    @foreach ($categories as $c)
                        <a href="{{ route('beranda.category', $c->id) }}"
                           style="display:block; padding:8px; color:#1f2937; text-decoration:none;">
                            {{ $c->name }}
                        </a>
                    @endforeach
                </div>
            </div>

            <a href="{{ url('/tentang-kami') }}" class="navlink">Tentang Toko Kami</a>
            <a href="{{ route('login') }}" class="navlink" style="color:#3b82f6;">Login</a>
        </div>
    </div>


    <script>
        const dropdown = document.querySelector('.dropdown');
        const menu = document.querySelector('.dropdown-menu');

        dropdown.addEventListener('mouseover', () => menu.style.display = 'block');
        dropdown.addEventListener('mouseleave', () => menu.style.display = 'none');
    </script>


    <div class="hero">
        <h1>Marketplace Sederhana untuk Kreativitas Siswa</h1>
    </div>


    <div class="product-section">

        <div class="product-title">
            {{ request('q') ? 'Hasil Pencarian: ' . request('q') : 'Produk Terbaru' }}
        </div>

        <div class="product-grid">
            @forelse ($products as $product)
                <div class="product-card">
                    <img src="{{ asset('storage/' . $product->image) }}">

                    <h3>{{ $product->name }}</h3>
                    <p>Rp {{ number_format($product->price, 0, ',', '.') }}</p>

                    <a href="#" class="btn-detail">Detail</a>
                </div>
            @empty
                <p style="grid-column:1/-1; text-align:center; opacity:0.6;">
                    Tidak ada produk ditemukan.
                </p>
            @endforelse
        </div>
    </div>


    <footer>
        <h2>Marketplace Sekolah</h2>
        <p>Media jual beli produk kreativitas siswa yang aman dan terpercaya.</p>
        <p style="margin-top:15px;">© 2025 Marketplace Sekolah — All Rights Reserved</p>
    </footer>

</body>
</html>
