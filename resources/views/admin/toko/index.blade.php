@extends('layouts.admin')

@section('content')

<div class="section">
    <h2 style="color:#374151; margin-bottom:15px;">Kelola Toko</h2>

    <a href="{{ route('toko.create') }}"
       style="background:#1f2937; color:white; padding:10px 15px; border-radius:8px; text-decoration:none;">
        + Tambah Toko
    </a>

    @if (session('success'))
        <div style="background:#d1fae5; padding:10px; margin-top:15px; border-left:4px solid #10b981; border-radius:5px;">
            {{ session('success') }}
        </div>
    @endif

    <div style="margin-top:25px;">
        <table style="width:100%; background:white; border-radius:10px; overflow:hidden;
                       box-shadow:0 3px 10px rgba(0,0,0,0.1); border-collapse:collapse;">

            <thead style="background:#1f2937; color:white;">
                <tr>
                    <th style="padding:12px 15px;">Nama Toko</th>
                    <th style="padding:12px 15px;">Pemilik</th>
                    <th style="padding:12px 15px;">Deskripsi</th>
                    <th style="padding:12px 15px;">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($toko as $t)
                <tr style="border-bottom:1px solid #e5e7eb;">
                    <td style="padding:12px 15px;">{{ $t->nama }}</td>
                    <td style="padding:12px 15px;">{{ $t->user->name ?? '-' }}</td>
                    <td style="padding:12px 15px;">{{ $t->deskripsi }}</td>

                    <td style="padding:12px 15px;">
                        <a href="{{ route('toko.edit', $t->id) }}"
                           style="background:#fbbf24; color:black; padding:6px 10px; border-radius:6px; text-decoration:none;">
                            Edit
                        </a>

                        <form action="{{ route('toko.destroy', $t->id) }}"
                              method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Hapus toko ini?')"
                                style="background:#dc2626; color:white; padding:6px 10px; border:none; border-radius:6px;">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" style="padding:15px; text-align:center; color:#6b7280;">
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
