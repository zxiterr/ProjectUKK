<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f6fa; /* sama seperti background dashboard */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-box {
            width: 350px;
            background: #1f2937; /* warna gelap mengikuti sidebar admin */
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
            color: white;
        }

        .login-box h2 {
            text-align: center;
            margin-bottom: 25px;
            font-size: 22px;
            color: #fff;
        }

        .login-box label {
            font-weight: bold;
            display: block;
            margin-top: 12px;
            color: #e5e7eb;
        }

        .login-box input {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            border-radius: 6px;
            border: 1px solid #4b5563;
            background: #374151;
            color: #fff;
        }

        .login-box input::placeholder {
            color: #9ca3af;
        }

        .btn-login {
            width: 100%;
            margin-top: 20px;
            padding: 10px;
            background: #2563eb; /* biru modern */
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-weight: bold;
        }

        .btn-login:hover {
            background: #1e4fc5;
        }

        .error {
            background: #ffdddd;
            border-left: 4px solid red;
            padding: 10px;
            margin-top: 10px;
            color: black;
            border-radius: 5px;
        }
    </style>

</head>
<body>

<div class="login-box">
    <h2>Login Admin</h2>

    @if ($errors->any())
        <div class="error">
            <strong>Error!</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('login.post') }}">
        @csrf

        <label>Email</label>
        <input type="email" name="email" placeholder="Masukkan email" required>

        <label>Password</label>
        <input type="password" name="password" placeholder="Masukkan password" required>

        <button class="btn-login">Login</button>
    </form>
</div>

</body>
</html>
