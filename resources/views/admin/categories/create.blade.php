@extends('layouts.admin')

@section('content')
<h2>Tambah Kategori</h2>

<form action="{{ route('categories.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label>Nama Kategori</label>
        <input type="text" name="name" class="form-control" required>
    </div>

    <div style="display: flex; gap: 10px;">
        <button class="btn btn-primary">Simpan</button>
        <a href="{{ route('categories.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
</form>
@endsection
