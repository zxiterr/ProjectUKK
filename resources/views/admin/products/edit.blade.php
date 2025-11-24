@extends('layouts.admin')

@section('content')
<h2>Edit Produk</h2>

<form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Nama Produk</label>
        <input type="text" name="name" class="form-control" value="{{ $product->name }}" required>
    </div>

    <div class="mb-3">
        <label>Harga</label>
        <input type="number" name="price" class="form-control" value="{{ $product->price }}" required>
    </div>

    <div class="mb-3">
        <label>Deskripsi</label>
        <textarea name="description" class="form-control">{{ $product->description }}</textarea>
    </div>

    <div class="mb-3">
        <label>Gambar Produk</label><br>
        @if($product->image)
            <img src="/uploads/products/{{ $product->image }}" width="80">
        @endif
        <input type="file" name="image" class="form-control mt-2">
    </div>

    <div class="d-flex gap-2 mt-3">
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('products.index') }}" class="btn btn-danger">Kembali</a>
    </div>
</form>
@endsection
