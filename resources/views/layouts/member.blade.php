<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Member Panel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f5f5f7;
            font-family: 'Segoe UI', sans-serif;
        }
        .navbar {
            background: #6a11cb;
            background: linear-gradient(90deg, #6a11cb, #2575fc);
        }
        .navbar a {
            color: white !important;
            font-weight: 600;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg px-4">
    <a class="navbar-brand text-white fw-bold" href="/member/dashboard">Member Marketz</a>

    <div class="collapse navbar-collapse">
        <ul class="navbar-nav ms-3">
            <li class="nav-item"><a href="/member/dashboard" class="nav-link">Dashboard</a></li>
            <li class="nav-item"><a href="/member/products" class="nav-link">Produk Saya</a></li>
        </ul>
    </div>

    <form action="/logout" method="POST" class="d-flex">
        @csrf
        <button class="btn btn-danger btn-sm">Logout</button>
    </form>
</nav>

<div class="p-4">
    @yield('content')
</div>

</body>
</html>
