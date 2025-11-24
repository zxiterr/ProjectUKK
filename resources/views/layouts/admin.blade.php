<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Marketz</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        body {
            margin: 0;
            background: #f5f5f7;
            font-family: 'Segoe UI', sans-serif;
        }


        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 240px;
            height: 100vh;
            background: linear-gradient(180deg, #4a00e0, #8e2de2);
            color: white;
            padding: 25px 20px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
        }

        .sidebar h2 {
            font-size: 20px;
            margin-bottom: 30px;
            text-align: center;
            font-weight: 700;
        }

        .sidebar a {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 15px;
            color: white;
            text-decoration: none;
            margin-bottom: 8px;
            border-radius: 10px;
            transition: 0.2s;
            font-weight: 500;
            font-size: 15px;
        }

        .sidebar a i {
            font-size: 18px;
            width: 22px;
        }

        .sidebar a:hover {
            background: rgba(255,255,255,0.2);
        }

        /* CONTENT WRAPPER */
        .admin-content {
            margin-left: 260px;
            padding: 35px;
            max-width: 1200px;
        }

        /* LOGOUT BUTTON */
        #logout-form button {
            width: 100%;
            border-radius: 8px;
            padding: 10px;
            font-weight: 600;
            background: #ff4d4d;
            border: none;
        }
        #logout-form button:hover {
            background: #e04444;
        }
    </style>

    @yield('style')
</head>

<body>

    <!-- SIDEBAR -->
    <div class="sidebar">
        <h2>Admin Marketz</h2>

        <a href="/admin">
            <i class="fa fa-home"></i> Dashboard
        </a>

        <a href="/admin/users">
            <i class="fa fa-users"></i> User
        </a>

        <a href="/admin/products">
            <i class="fa fa-box"></i> Produk
        </a>

        <a href="/admin/toko">
            <i class="fa fa-store"></i> Toko
        </a>

         <a href="/admin/categories">
            <i class="fa-solid fa-icons"></i> Category
        </a>

        <form id="logout-form" action="/logout" method="POST" class="mt-4">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </div>

    <!-- MAIN CONTENT -->
    <div class="admin-content">
        @yield('content')
    </div>

</body>
</html>
