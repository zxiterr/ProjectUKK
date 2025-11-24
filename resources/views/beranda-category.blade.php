<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kategori - {{ $category->name }}</title>

    <style>
        body {
            margin: 0;
            font-family: Arial;
            background: #1f2937;
            color: #e5e7eb;
        }

        .container {
            padding: 30px;
        }

        .title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
            gap: 20px;
        }

        .card {
            background: #262b40;
            padding: 12px;
            border-radius: 10px;
            border: 1px solid #2d3148;
            text-align: center;
        }

        .card img {
            width: 100%;
            height: 130px;
            object-fit: cover;
            border-radius: 8px;
        }

        .card h4 {
            margin: 8px 0 4px;
        }

        .card p {
            opacity: 0.8;
            margin: 0;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="title">Kategori: {{ $category->name }}</div>

        <div class="grid">
            @forelse ($products as $product)
                <div class="card">
                    <img src="{{ asset('storage/' . $product->image) }}">
                    <h4>{{ $product->name }}</h4>
                    <p>Rp {{ number_format($product->price) }}</p>
                </div>
            @empty
                <p>Tidak ada produk di kategori ini.</p>
            @endforelse
        </div>
    </div>

</body>
</html>
