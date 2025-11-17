@extends('layouts.admin')

@section('content')

<h2 class="mb-4">Kelola User</h2>

<a href="/admin/users/create" class="btn btn-primary mb-3">+ Tambah User</a>

<div class="card">
    <div class="card-header">
        <strong>Daftar User</strong>
    </div>

    <div class="card-body p-0">
        <table class="table table-striped table-hover mb-0">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th style="width: 150px;">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach($users as $u)
                    <tr>
                        <td>{{ $u->id }}</td>
                        <td>{{ $u->name }}</td>
                        <td>{{ $u->email }}</td>
                        <td>{{ ucfirst($u->role) }}</td>

                        <td>
                            <a href="/admin/users/{{ $u->id }}/edit" class="btn btn-warning btn-sm">
                                Edit
                            </a>

                            <form action="/admin/users/{{ $u->id }}"
                                  method="POST"
                                  style="display:inline-block;"
                                  onsubmit="return confirm('Yakin ingin menghapus user ini?')">

                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">
                                    Hapus
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
