<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Livi's Watch</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <style>
        body {
            background-color: #ffe6f2;
        }
        .login-container {
            max-width: 400px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .login-title {
            text-align: center;
            margin-bottom: 20px;
            font-weight: bold;
            color: #ee8ede;
        }
        .form-label {
            color: #ff6699;
        }
        .btn-login {
            background-color: #ff6699;
            color: white;
        }
        .btn-login:hover {
            background-color: #ff3366;
        }
        .forgot-password {
            text-align: center;
            margin-top: 10px;
        }
        .forgot-password a {
            color: #ff6699;
            text-decoration: none;
        }
        .forgot-password a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h3 class="login-title">LIVI'S WATCH</h3>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('login') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" required>
            </div>
            <button type="submit" class="btn btn-login w-100"><a href="/home"></a>LOGIN</button>
            <div class="forgot-password">
                <a href="#">Forgot Password?</a>
            </div>
        </form>
    </div>
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>
