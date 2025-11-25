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

             <img src="/uploads/products/{{ $product->image }}" width="250" style="border-radius:8px; border:1px solid #ddd;">


            <div style="flex:1;">
                <h2 style="margin-top:0;">{{ $product->name }}</h2>

                <h3 style="color:#2563eb; margin:10px 0;">
                    Rp {{ number_format($product->price) }}
                </h3>

                <p style="line-height:1.6; margin-top:15px;">
                    <strong>Deskripsi Produk:</strong><br>
                    {{ $product->description }}
                </p>

                <p style="margin-top:15px;">
                    <strong>Kategori:</strong>
                    {{ $product->category->name ?? 'Tidak ada kategori' }}
                </p>

                @php
                    $waNumber = '6281234567890'; // ganti nomor WA
                    $message = urlencode("Halo, saya ingin membeli produk *{$product->name}* dengan harga Rp " . number_format($product->price));
                    $waLink = "https://wa.me/$waNumber?text=$message";
                @endphp

                <a href="{{ $waLink }}" target="_blank"
                   style="
                        display:inline-block;
                        padding:12px 20px;
                        background:#25D366;
                        color:white;
                        border-radius:8px;
                        text-decoration:none;
                        font-weight:bold;
                        margin-top:20px;
                    ">
                    💬 Beli Via WhatsApp
                </a>

                <button style="
                    padding:12px 20px;
                    background:#2563eb;
                    color:white;
                    border:none;
                    border-radius:8px;
                    margin-top:10px;
                    cursor:pointer;
                    display:block;
                ">
                    Tambahkan ke Keranjang
                </button>
            </div>

        </div>

        <div style="
            margin-top:30px;
            background:white;
            padding:20px;
            border-radius:12px;
            border:1px solid #ddd;
        ">
            <h3>Detail Tambahan</h3>
            <p style="line-height:1.7;">
                {{ $product->long_description ?? 'Belum ada detail tambahan untuk produk ini.' }}
            </p>
        </div>

    </div>

</body>
</html>
