@extends('layouts.admin')

@section('content')
<h2>Edit Kategori</h2>

<form action="{{ route('categories.update', $category->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Nama Kategori</label>
        <input type="text" name="name" class="form-control" value="{{ $category->name }}" required>
    </div>

    <div style="display: flex; gap: 10px;">
        <button class="btn btn-primary">Update</button>
        <a href="{{ route('categories.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
</form>
@endsection
