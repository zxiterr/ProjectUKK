@extends('layouts.admin')

@section('content')

<h2 class="mb-4">Tambah User</h2>

<div class="card" style="max-width: 500px;">
    <div class="card-body">

        <form action="/admin/users" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="name" class="form-control" placeholder="Masukkan nama" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" name="username" class="form-control" placeholder="Masukkan username" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Masukkan password" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Role</label>
                <select name="role" class="form-select">
                    <option value="admin">Admin</option>
                    <option value="member">Member

                    </option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="/admin/users" class="btn btn-danger">Kembali</a>

        </form>

    </div>
</div>

@endsection
