<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kategori - {{ $category->name }}</title>

    <style>
        body {
            margin: 0;
            font-family: Arial;
            background: #0f172a;
            color: #f8fafc;
        }

        .container {
            max-width: 1200px;
            margin: auto;
            padding: 40px 20px;
        }

        .btn-back {
            display: inline-block;
            padding: 10px 18px;
            background: #1e293b;
            border: 1px solid #334155;
            color: #38bdf8;
            border-radius: 8px;
            text-decoration: none;
            margin-bottom: 20px;
            transition: .2s;
            font-weight: bold;
        }

        .btn-back:hover {
            background: #38bdf8;
            color: #0f172a;
        }

        .title {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 30px;
            text-align: center;
            color: #38bdf8;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            gap: 25px;
        }

        .card {
            background: #1e293b;
            border-radius: 14px;
            padding: 16px;
            border: 1px solid #334155;
            transition: 0.25s;
            text-align: center;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(56, 189, 248, 0.12);
            border-color: #38bdf8;
        }

        .card img {
            width: 100%;
            height: 160px;
            object-fit: cover;
            border-radius: 10px;
        }

        .card h4 {
            margin: 12px 0 6px;
            font-size: 17px;
            font-weight: bold;
            color: #e2e8f0;
        }

        .card p {
            margin: 4px 0;
            color: #94a3b8;
            font-size: 15px;
        }

        .desc {
            font-size: 13px;
            opacity: 0.8;
            margin-top: 6px;
        }

    </style>
</head>

<body>

    <div class="container">

        <!-- Tombol Kembali -->
        <a href="{{ url()->previous() }}" class="btn-back">← Kembali</a>

        <div class="title">Kategori: {{ $category->name }}</div>

        <div class="grid">
            @forelse ($products as $product)
                <div class="card">
                    <img src="/uploads/products/{{ $product->image }}" alt="{{ $product->name }}">

                    <h4>{{ $product->name }}</h4>

                    <p>Rp {{ number_format($product->price) }}</p>

                    <p class="desc">
                        {{ Str::limit($product->description, 60) }}
                    </p>
                </div>
            @empty
                <p style="grid-column:1 / -1; text-align:center; opacity:0.7;">
                    Tidak ada produk di kategori ini.
                </p>
            @endforelse
        </div>
    </div>

</body>
</html>
