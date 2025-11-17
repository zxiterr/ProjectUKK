<h1>Edit Toko</h1>

<form action="{{ route('toko.update', $toko->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Nama Toko</label>
    <input type="text" name="nama_toko" value="{{ $toko->nama_toko }}" required>

    <label>Alamat</label>
    <input type="text" name="alamat" value="{{ $toko->alamat }}" required>

    <label>Pemilik</label>
    <input type="text" name="pemilik" value="{{ $toko->pemilik }}" required>

    <button type="submit" class="btn">Update</button>
</form>

<style>
    input {
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
