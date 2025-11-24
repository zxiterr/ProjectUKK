@extends('layouts.admin')

@section('content')

<h2 class="mb-4">Edit User</h2>

<div class="card" style="max-width: 500px;">
    <div class="card-body">

        <form action="/admin/users/{{ $user->id }}" method="POST">
            @csrf
            @method('PUT')


            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input
                    type="text"
                    name="name"
                    value="{{ $user->name }}"
                    class="form-control"
                    required>
            </div>


            <div class="mb-3">
                <label class="form-label">Username</label>
                <input
                    type="username"
                    name="username"
                    value="{{ $user->email }}"
                    class="form-control"
                    required>
            </div>


            <div class="mb-3">
                <label class="form-label">Password (opsional)</label>
                <input
                    type="password"
                    name="password"
                    class="form-control"
                    placeholder="Isi password baru jika ingin mengganti">
            </div>


            <div class="mb-3">
                <label class="form-label">Role</label>
                <select name="role" class="form-select">
                    <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                    <option value="user"  {{ $user->role == 'user' ? 'selected' : '' }}>Member</option>
                </select>
            </div>


            <button type="submit" class="btn btn-primary">Update</button>
            <a href="/admin/users" class="btn btn-danger">Kembali</a>

        </form>

    </div>
</div>

@endsection
