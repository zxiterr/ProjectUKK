<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Akun - Marketplace</title>

    <style>
        body {
            margin: 0;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, #4a00e0, #8e2de2);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .register-container {
            width: 400px;
            background: #ffffff;
            padding: 35px 30px;
            border-radius: 16px;
            box-shadow: 0 15px 45px rgba(0, 0, 0, 0.15);
            animation: fadeIn 0.5s ease;
        }

        .register-container h2 {
            text-align: center;
            margin-bottom: 25px;
            font-size: 26px;
            font-weight: 700;
            color: #333;
        }

        .form-group {
            margin-bottom: 18px;
        }

        label {
            font-weight: 600;
            display: block;
            margin-bottom: 6px;
            font-size: 14px;
            color: #444;
        }

        input {
            width: 100%;
            padding: 12px 14px;
            border-radius: 10px;
            border: 1px solid #ddd;
            background: #f8f8f8;
            font-size: 14px;
            box-sizing: border-box;
            transition: 0.2s;
        }

        input:focus {
            outline: none;
            border-color: #4a00e0;
            background: #fff;
            box-shadow: 0 0 5px rgba(74, 0, 224, 0.3);
        }

        .btn-register {
            width: 100%;
            padding: 13px;
            border: none;
            border-radius: 10px;
            background: linear-gradient(90deg, #4a00e0, #8e2de2);
            color: white;
            font-weight: 600;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn-register:hover {
            opacity: 0.9;
            transform: translateY(-2px);
        }

        .error {
            background: #ffeded;
            border-left: 4px solid red;
            padding: 12px;
            border-radius: 8px;
            margin-bottom: 15px;
            font-size: 14px;
            color: #333;
        }

        .error ul {
            padding-left: 20px;
            margin: 5px 0 0 0;
        }

        .login-link {
            text-align: center;
            margin-top: 15px;
            font-size: 14px;
        }

        .login-link a {
            color: #4a00e0;
            font-weight: 600;
            text-decoration: none;
        }

        .login-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <div class="register-container">
        <h2>Register Akun</h2>

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

        <form method="POST" action="{{ route('register.post') }}">
            @csrf

            <div class="form-group">
                <label for="name">Nama Lengkap</label>
                <input type="text"
                       name="name"
                       id="name"
                       placeholder="Masukkan nama lengkap"
                       value="{{ old('name') }}"
                       required>
            </div>

            <div class="form-group">
                <label for="username">Username</label>
                <input type="text"
                       name="username"
                       id="username"
                       placeholder="Masukkan username"
                       value="{{ old('username') }}"
                       required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password"
                       name="password"
                       id="password"
                       placeholder="Masukkan password"
                       required>
            </div>

            <div class="form-group">
                <label for="password_confirmation">Konfirmasi Password</label>
                <input type="password"
                       name="password_confirmation"
                       id="password_confirmation"
                       placeholder="Ulangi password"
                       required>
            </div>

            <button type="submit" class="btn-register">Daftar</button>
        </form>

        <p class="login-link">
            Sudah punya akun?
            <a href="{{ route('login') }}">Login di sini</a>
        </p>
    </div>

</body>

</html>
