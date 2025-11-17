@extends('layouts.admin')

@section('content')

<h2 class="mb-4">Tambah User</h2>

<div class="card" style="max-width: 500px;">
    <div class="card-body">

        <form action="/admin/users" method="POST">
            @csrf

            <!-- Nama -->
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="name" class="form-control" placeholder="Masukkan nama" required>
            </div>

            <!-- Email -->
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Masukkan email" required>
            </div>

            <!-- Password -->
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Masukkan password" required>
            </div>

            <!-- Role -->
            <div class="mb-3">
                <label class="form-label">Role</label>
                <select name="role" class="form-select">
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select>
            </div>

            <!-- Tombol -->
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="/admin/users" class="btn btn-secondary">Kembali</a>

        </form>

    </div>
</div>

@endsection
