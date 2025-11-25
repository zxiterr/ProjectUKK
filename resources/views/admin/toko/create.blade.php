<h1 style="text-align:center; margin-bottom: 25px; font-weight: 700; color: #1160e0;">
    Tambah Toko
</h1>

<div class="form-wrapper">
    <form action="{{ route('toko.store') }}" method="POST">
        @csrf

        <label class="form-label">Nama Toko</label>
        <input type="text" name="nama_toko" class="form-input" required>

        <label class="form-label">Pemilik</label>
        <input type="text" name="pemilik" class="form-input" required>

        <label class="form-label">Deskripsi</label>
        <input type="text" name="deskripsi" class="form-input" required>

        <div class="btn-row">
            <button type="submit" class="btn-submit">Simpan</button>
            <a href="{{ route('toko.index') }}" class="btn-kembali">Kembali</a>
        </div>

    </form>
</div>

<style>
    .form-wrapper {
        max-width: 500px;
        margin: auto;
        background: #ffffff;
        padding: 25px 30px;
        border-radius: 15px;
        box-shadow: 0 4px 15px rgba(5, 14, 133, 0.08);
    }

    .form-label {
        font-weight: 600;
        margin-top: 15px;
        margin-bottom: 5px;
        display: block;
        color: #5323d6;
    }

    .form-input {
        width: 100%;
        padding: 12px;
        border-radius: 10px;
        border: 1px solid #dcdcdc;
        background: #f9f9f9;
        transition: all 0.25s ease;
    }

    .form-input:focus {
        border-color: #3b82f6;
        background: #fff;
        box-shadow: 0 0 6px rgba(59,130,246,0.4);
        outline: none;
    }

    
    .btn-row {
        display: flex;
        gap: 10px;
        margin-top: 25px;
    }

    .btn-submit {
        flex: 1;
        padding: 12px;
        background: linear-gradient(135deg, #007efc, #0c0ca0);
        border: none;
        color: #fff;
        font-weight: 600;
        cursor: pointer;
        border-radius: 10px;
        transition: 0.3s ease;
        letter-spacing: 0.5px;
    }

    .btn-submit:hover {
        opacity: 0.9;
        transform: translateY(-2px);
        box-shadow: 0 5px 12px rgba(12, 98, 228, 0.25);
    }

    .btn-kembali {
        flex: 1;
        padding: 12px;
        background: #e71e1e;
        border-radius: 10px;
        text-align: center;
        color: #fff;
        font-weight: 600;
        display: inline-block;
        transition: 0.3s ease;
    }

    .btn-kembali:hover {
        background: #5b6369;
    }
</style>
