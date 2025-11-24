@extends('layouts.admin')

@section('content')
<h2 class="mb-4" style="color:#293ceb;">Kelola Category</h2>

<a href="{{ route('categories.create') }}" class="btn btn-primary

mb-3">+ Tambah Kategori</a>

<table class="table table-bordered">
    <thead class="table-">
        <tr>
            <th>No</th>
            <th>Nama Kategori</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $c)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $c->name }}</td>
            <td>
                <a href="{{ route('categories.edit', $c->id) }}" class="btn btn-primary btn-sm">
                    <i class="fa fa-edit"></i>
                </a>

                <form action="{{ route('categories.destroy', $c->id) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button onclick="return confirm('Yakin ingin menghapus?')" class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
