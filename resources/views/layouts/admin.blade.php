<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Marketplace</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <!-- Sidebar Style -->
    <style>
        body {
            background-color: #f4f6fa;
        }

        .sidebar {
            width: 230px;
            background: #1f2937;   /* dark gray */
            height: 100vh;
            padding: 20px 20px;
            position: fixed;
            color: white;
        }

        .sidebar a {
            display: block;
            padding: 12px 20px;
            color: #d1d5db;  /* gray-300 */
            text-decoration: none;
            margin-bottom: 5px;
            border-radius: 5px;
        }

        .sidebar a:hover {
            background: #374151;  /* gray-700 */
            color: #fff;
        }

        .content {
            margin-left: 250px;
            padding: 25px;
        }

        thead {
            background: #1f2937 !important;
            color: white !important;
        }

        .btn-primary {
            background: #1f2937 !important;
            border-color: #1f2937 !important;
        }

        .btn-primary:hover {
            background: #374151 !important;
            border-color: #374151 !important;
        }

        .card-custom {
            background: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
            color: #111827;
        }
    </style>
</head>

<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <a href="/admin">Dashboard</a>
        <a href="/admin/users">Kelola User</a>
        <a href="/admin/products">Kelola Produk</a>
        <a href="/admin/toko">Kelola Toko</a>

        <form action="{{ route('logout') }}" method="POST" style="margin-top: 15px;">
            @csrf
            <button type="submit" class="btn btn-danger w-100">
                Logout
            </button>
        </form>
    </div>

    <!-- Content -->
    <div class="content">
        @yield('content')
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
