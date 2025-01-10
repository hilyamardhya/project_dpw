<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #3a3a3a;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-container {
            background-color: #d6d6d6;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.25);
            width: 100%;
            max-width: 400px;
        }

        .form-control {
            background-color: #5b4f4f;
            color: #fff;
            border: none;
            border-radius: 20px;
            padding: 10px 20px;
        }

        .form-control::placeholder {
            color: #ccc;
        }

        .btn-login {
            background-color: #ff0000;
            color: #fff;
            border: none;
            border-radius: 20px;
            padding: 10px 20px;
        }

        .btn-login:hover {
            background-color: #cc0000;
        }

        .register-link {
            text-align: center;
            margin-top: 10px;
        }

        .register-link a {
            color: #007bff;
            text-decoration: none;
        }

        .register-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <form action="{{ route('login.post') }}" method="POST">
            @csrf
            <div class="mb-3">
                <input type="email" name="email" class="form-control" placeholder="Email" required>
            </div>
            <div class="mb-3">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            <button type="button" class="btn btn-login w-100" onclick="window.location='{{ route('home') }}'">Login</button>
            <div class="register-link">
                <p>Belum memiliki akun? <a href="{{ route('register') }}">Register</a></p>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
