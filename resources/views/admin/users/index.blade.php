@extends('layouts.admin')

@section('content')

<h2 class="mb-4" style="color:#293ceb;">Kelola User</h2>

<a href="/admin/users/create"
   class="btn mb-3"
   style="background:#6a11cb; border:none; color:white; padding:8px 15px; border-radius:6px;">
   + Tambah User
</a>

<div class="card" style="border:none; box-shadow:0 4px 10px rgba(0,0,0,0.1);">
    <div class="card-header"
         style="background:#6a11cb; color:white; font-weight:bold;">
        Daftar User
    </div>

    <div class="card-body p-0">
        <table class="table table-hover mb-0">
            <thead style="background:#111; color:white;">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Role</th>
                    <th style="width: 150px;">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach($users as $u)
                    <tr>
                        <td>{{ $u->id }}</td>
                        <td>{{ $u->name }}</td>
                        <td>{{ $u->username }}</td>
                        <td>
                            <span style="background:#6a11cb; padding:4px 10px; border-radius:6px; color:white;">
                                {{ ucfirst($u->role) }}
                            </span>
                        </td>

                        <td>
                            <a href="/admin/users/{{ $u->id }}/edit"
                               class="btn btn-sm"
                               style="background:#2575fc; color:white; border:none;">
                                <i class="fa fa-edit"></i>
                            </a>

                            <form action="/admin/users/{{ $u->id }}"
                                  method="POST"
                                  style="display:inline-block;"
                                  onsubmit="return confirm('Yakin ingin menghapus user ini?')">

                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger btn-sm"
                                        style="background:#ff4d4d; border:none;">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                @if($users->count() == 0)
                    <tr>
                        <td colspan="5" class="text-center p-3">
                            Belum ada user.
                        </td>
                    </tr>
                @endif

            </tbody>
        </table>
    </div>
</div>

@endsection
