@extends('layouts.admin')

@section('style')
<style>
    h2 {
        font-weight: 700;
        color: #f8f4ff;
    }

    .btn-primary-custom {
        background: linear-gradient(45deg, #4a00e0, #8e2de2);
        color: white;
        padding: 10px 15px;
        border-radius: 8px;
        text-decoration: none;
        font-weight: 600;
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
        padding: 8px 16px;
        border-radius: 6px;
        text-decoration: none;
        font-weight: 500;
        display: inline-flex;
        align-items: center;
        gap: 6px;
    }

    .btn-edit:hover {
        background: #3600a8;
    }

    .btn-delete {
        background: #ff4d4f;
        color: white;
        padding: 8px 16px;
        border: none;
        border-radius: 6px;
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

<div class="section">
    <h2 class="mb-4" style="color:#293ceb;">Kelola Toko</h2>

    <a href="{{ route('toko.create') }}" class="btn-primary-custom">
        + Tambah Toko
    </a>

    @if (session('success'))
        <div style="background:#d1fae5; padding:10px; margin-top:15px;
                    border-left:4px solid #10b981; border-radius:5px;">
            {{ session('success') }}
        </div>
    @endif

    <div style="margin-top:25px;">
        <table>
            <thead>
                <tr>
                    <th>Nama Toko</th>
                    <th>Pemilik</th>
                    <th>Deskripsi</th>
                    <th style="width:150px;">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($toko as $t)
                <tr>
                    <td>{{ $t->nama_toko }}</td>
                    <td>{{ $t->pemilik }}</td>
                    <td>{{ $t->deskripsi }}</td>

                    <td style="display:flex; gap:10px;">
                        <a href="{{ route('toko.edit', $t->id) }}" class="btn-edit">
                            <i class="fa fa-edit"></i>
                        </a>

                        <form action="{{ route('toko.destroy', $t->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    class="btn-delete"
                                    onclick="return confirm('Hapus toko ini?')">
                                <i class="fa fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" style="text-align:center; padding:15px; color:#6b7280;">
                        Belum ada toko.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div style="margin-top:20px;">
        {{ $toko->links() }}
    </div>
</div>

@endsection
