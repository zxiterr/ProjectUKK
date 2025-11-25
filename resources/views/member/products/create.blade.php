<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Produk - Member</title>
</head>

<body style="margin:0; font-family:Arial, sans-serif; background:#f5f5f7;">

    <div style="margin-left:260px; padding:35px;">


        <a href="{{ route('member.dashboard') }}"
            style="
                display:inline-block;
                margin-bottom:18px;
                padding:10px 16px;
                background:#e5e7eb;
                color:#111827;
                text-decoration:none;
                border-radius:8px;
                font-size:14px;
                font-weight:600;
            ">
            ← Kembali
        </a>

        <h3 style="font-weight:bold; margin-bottom:5px;">Tambah Produk</h3>
        <p style="color:#64748b; margin-top:0;">Silakan isi detail produk baru anda.</p>

        <div style="
            background:white;
            padding:25px;
            border-radius:12px;
            border:1px solid #e5e7f3;
            box-shadow:0 3px 10px rgba(0,0,0,0.05);
            max-width:650px;
        ">

            <form action="{{ route('member.products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div style="margin-bottom:18px;">
                    <label style="font-weight:600; display:block; margin-bottom:6px;">Nama Produk</label>
                    <input type="text" name="name"
                        style="width:100%; padding:12px; border:1px solid #ccc; border-radius:8px;"
                        placeholder="Masukkan nama produk" required>
                </div>

                <div style="margin-bottom:18px;">
                    <label style="font-weight:600; display:block; margin-bottom:6px;">Harga</label>
                    <input type="number" name="price"
                        style="width:100%; padding:12px; border:1px solid #ccc; border-radius:8px;"
                        placeholder="Masukkan harga" required>
                </div>

                <div style="margin-bottom:18px;">
                    <label style="font-weight:600; display:block; margin-bottom:6px;">Kategori</label>
                    <select name="category_id"
                        style="width:100%; padding:12px; border:1px solid #ccc; border-radius:8px;" required>

                        <option value="">-- Pilih Kategori --</option>
                        @foreach ($categories as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                        @endforeach

                    </select>
                </div>

                <div style="margin-bottom:18px;">
                    <label style="font-weight:600; display:block; margin-bottom:6px;">Deskripsi</label>
                    <textarea name="description" rows="4"
                        style="width:100%; padding:12px; border:1px solid #ccc; border-radius:8px;"
                        placeholder="Masukkan deskripsi produk"></textarea>
                </div>

                <div style="margin-bottom:20px;">
                    <label style="font-weight:600; display:block; margin-bottom:6px;">Gambar Produk</label>
                    <input type="file" name="image"
                        style="width:100%; padding:10px; border:1px solid #ccc; border-radius:8px;">
                </div>

                <button type="submit"
                    style="
                        width:100%;
                        padding:14px;
                        background:#4a00e0;
                        color:white;
                        border:none;
                        border-radius:10px;
                        font-size:16px;
                        font-weight:600;
                        cursor:pointer;
                    ">
                    Simpan Produk
                </button>

            </form>
        </div>

    </div>

</body>
</html>
