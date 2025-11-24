<div class="form-container">
    <h1>Edit Toko</h1>

    <form action="{{ route('toko.update', $toko->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>Nama Toko</label>
            <input type="text" name="nama_toko" value="{{ $toko->nama_toko }}" required>
        </div>

        <div class="form-group">
            <label>Pemilik</label>
            <input type="text" name="pemilik" value="{{ $toko->pemilik }}" required>
        </div>

        <div class="form-group">
            <label>Deskripsi</label>
            <input type="text" name="deskripsi" value="{{ $toko->deskripsi }}" required>
        </div>

        <div class="btn-row">
            <button type="submit" class="btn">Update</button>
            <a href="{{ route('toko.index') }}" class="btn-back">Kembali</a>
        </div>

    </form>
</div>

<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: #f5f6fa;
        display: flex;
        justify-content: center;
        align-items: flex-start;
        padding: 50px 0;
    }

    .form-container {
        background: #fff;
        padding: 30px 40px;
        border-radius: 12px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        width: 400px;
    }

    h1 {
        text-align: center;
        margin-bottom: 25px;
        color: #0062ff;
    }

    .form-group {
        margin-bottom: 20px;
    }

    label {
        display: block;
        margin-bottom: 5px;
        font-weight: 600;
        color: #116cec;
    }

    input {
        width: 100%;
        padding: 12px 15px;
        border-radius: 8px;
        border: 1px solid #d1d5db;
        transition: border-color 0.3s, box-shadow 0.3s;
        font-size: 14px;
    }

    input:focus {
        border-color: #3b82f6;
        box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.2);
        outline: none;
    }

    /* Tombol sejajar */
    .btn-row {
        display: flex;
        gap: 10px;
        margin-top: 20px;
    }

    .btn {
        flex: 1;
        padding: 12px;
        background: #125df5;
        border: none;
        color: white;
        font-weight: bold;
        border-radius: 8px;
        cursor: pointer;
        transition: background 0.3s, transform 0.2s;
        font-size: 16px;
        text-align: center;
    }

    .btn:hover {
        background: #2563eb;
        transform: translateY(-2px);
    }

    .btn-back {
        flex: 1;
        padding: 12px;
        background: #c50e0e;
        border-radius: 8px;
        color: #fff;
        font-weight: bold;
        text-align: center;
        transition: 0.3s ease;
        text-decoration: none;
    }

    .btn-back:hover {
        background: #5b6369;
    }
</style>
