@extends('layouts.admin')

@section('style')
<style>
    h2 {
        font-weight: 700;
        color: #f8f8fc;
    }

    .btn-primary-custom {
        background: linear-gradient(45deg, #4a00e0, #8e2de2);
        padding: 8px 15px;
        color: white;
        border-radius: 8px;
        font-weight: 600;
        text-decoration: none;
        box-shadow: 0 3px 10px rgba(78,0,224,0.3);
    }

    table {
        width: 100%;
        border-collapse: collapse;
        background: white;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 14px rgba(0,0,0,0.08);
    }

    thead {
        background: linear-gradient(45deg, #4a00e0, #8e2de2);
        color: white;
    }

    th, td {
        padding: 14px 16px;
        font-size: 14px;
        vertical-align: middle;
    }

    tbody tr:nth-child(even) {
        background-color: #f8f5ff;
    }

    tbody tr:hover {
        background: rgba(98, 0, 255, 0.08);
        transition: 0.25s;
    }

    .btn-edit {
        background: #4a00e0;
        color: white;
        padding: 8px 14px;
        border-radius: 6px;
        font-weight: 500;
        display: inline-flex;
        align-items: center;
        gap: 6px;
        text-decoration: none;
    }

    .btn-edit:hover {
        background: #3600a8;
    }

    .btn-delete {
        background: #ff4d4f;
        color: white;
        padding: 8px 14px;
        border-radius: 6px;
        border: none;
        cursor: pointer;
        font-weight: 500;
        display: inline-flex;
        align-items: center;
        gap: 6px;
    }

    .btn-delete:hover {
        background: #e04344;
    }
</style>
@endsection


@section('content')

<h2 class="mb-4" style="color:#293ceb;">Kelola Produk</h2>

<a href="{{ route('products.create') }}" class="btn-primary-custom">
    + Tambah Produk
</a>

<div class="card mt-3" style="border-radius:14px; overflow:hidden;">
    <div class="card-header" style="
        background: linear-gradient(45deg, #4a00e0, #8e2de2);
        color:white; font-weight:bold; padding:16px 20px;">
        Daftar Produk
    </div>

    <div class="card-body p-3">
        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Gambar</th>
                    <th style="width:150px;">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>Rp {{ number_format($product->price) }}</td>
                    <td>
                        @if($product->image)
                            <img src="/uploads/products/{{ $product->image }}" width="60" style="border-radius:8px;">
                        @else
                            -
                        @endif
                    </td>
                    <td>
                        <div style="display:flex; gap:10px;">


                            <a href="{{ route('products.edit', $product->id) }}"
                                class="btn-edit">
                                <i class="fa fa-edit"></i>
                            </a>


                            <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn-delete"
                                    onclick="return confirm('Hapus produk ini?')">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>

                        </div>
                    </td>
                </tr>

                @empty
                <tr>
                    <td colspan="4" style="text-align:center; padding:15px;">
                        Belum ada produk.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>

        <div class="mt-3">
            {{ $products->links() }}
        </div>
    </div>
</div>

@endsection
