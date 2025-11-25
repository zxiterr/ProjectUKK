<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>{{ $product->name }}</title>
</head>

<body style="margin:0; font-family:Arial; background:#f5f5f7;">

    <div style="padding:40px; max-width:900px; margin:auto;">

        <a href="{{ url()->previous() }}"
           style="display:inline-block; padding:8px 14px;
                  background:#4a00e0; color:white; border-radius:8px;
                  text-decoration:none; margin-bottom:20px;">
            ← Kembali
        </a>

        <div style="
            background:white;
            padding:25px;
            border-radius:12px;
            display:flex;
            gap:25px;
            border:1px solid #ddd;
        ">

            <img src="{{ asset('storage/' . $product->image) }}"
                 style="width:300px; border-radius:12px; border:1px solid #ccc;">

            <div>
                <h2 style="margin-top:0;">{{ $product->name }}</h2>

                <h3 style="color:#2563eb; margin:10px 0;">
                    Rp {{ number_format($product->price) }}
                </h3>

                <p style="line-height:1.6;">
                    {{ $product->description }}
                </p>

                <p style="margin-top:15px;">
                    <strong>Kategori:</strong>
                    {{ $product->category->name ?? 'Tidak ada kategori' }}
                </p>

                <button style="
                    padding:12px 20px;
                    background:#2563eb;
                    color:white;
                    border:none;
                    border-radius:8px;
                    margin-top:20px;
                    cursor:pointer;
                ">
                    Beli Sekarang
                </button>
            </div>

        </div>

    </div>

</body>
</html>
