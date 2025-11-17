<h1>Tambah Toko</h1>

<form action="{{ route('toko.store') }}" method="POST">
    @csrf

    <label>Nama Toko</label>
    <input type="text" name="nama_toko" required>

    <label>Alamat</label>
    <input type="text" name="alamat" required>

    <label>Pemilik</label>
    <input type="text" name="pemilik" required>

    <button type="submit" class="btn">Simpan</button>
</form>

<style>
    input, select {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }

    .btn {
        margin-top: 20px;
        width: 100%;
        padding: 10px;
        background: #007bff;
        border: none;
        color: white;
        cursor: pointer;
        border-radius: 5px;
    }
</style>
