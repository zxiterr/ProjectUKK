@extends('layouts.member')

@section('content')
<div class="container mt-4">

    <h3 class="mb-3">Edit Produk</h3>


    @if ($errors->any())
        <div style="background:#ffe6e6; padding:10px; border-radius:5px; margin-bottom:15px;">
            <strong>Perhatian!</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('member.products.update', $product->id) }}"
          method="POST" enctype="multipart/form-data">

        @csrf
        @method('PUT')

        <label>Nama Produk</label>
        <input type="text" name="name" value="{{ $product->name }}" class="form-control" required>

        <label class="mt-3">Harga</label>
        <input type="number" name="price" value="{{ $product->price }}" class="form-control" required>

        <label class="mt-3">Deskripsi</label>
        <textarea name="description" class="form-control" rows="4" required>{{ $product->description }}</textarea>

        <label class="mt-3">Kategori</label>
        <select name="category_id" class="form-control" required>
            @foreach ($categories as $c)
                <option value="{{ $c->id }}" {{ $product->category_id == $c->id ? 'selected' : '' }}>
                    {{ $c->name }}
                </option>
            @endforeach
        </select>

        <label class="mt-3 d-block">Foto Produk Saat Ini:</label>
        <img src="{{ asset('storage/' . $product->image) }}"
             alt="Foto Produk" width="200" class="rounded">

        <label class="mt-3">Ganti Foto (opsional)</label>
        <input type="file" name="image" class="form-control">

        <button class="btn btn-primary mt-4">Update Produk</button>
    </form>



    <form action="{{ route('member.products.destroy', $product->id) }}"
          method="POST" class="mt-3">

        @csrf
        @method('DELETE')

        <button class="btn btn-danger"
                onclick="return confirm('Yakin ingin menghapus produk ini?')">
            Hapus Produk
        </button>
    </form>

</div>
@endsection
