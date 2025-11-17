@extends('layouts.admin')

@section('content')
<h2>Kelola Produk</h2>

<a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Tambah Produk</a>

@if (session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Harga</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>Rp {{ number_format($product->price) }}</td>
            <td>
                @if($product->image)
                <img src="/uploads/products/{{ $product->image }}" width="60">
                @else
                -
                @endif
            </td>
            <td>
                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button onclick="return confirm('Hapus produk?')" class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </td>
        </tr>
        @empty
        <tr><td colspan="4" class="text-center">Belum ada produk.</td></tr>
        @endforelse
    </tbody>
</table>

{{ $products->links() }}
@endsection
