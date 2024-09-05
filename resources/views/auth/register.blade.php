<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Livi's Watch</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <style>
        body {
            background-color: #ffe6f2;
        }
        .register-container {
            max-width: 400px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .register-title {
            text-align: center;
            margin-bottom: 20px;
            font-weight: bold;
            color: #ee8ede;
        }
        .form-label {
            color: #ff6699;
        }
        .btn-register {
            background-color: #ff6699;
            color: white;
        }
        .btn-register:hover {
            background-color: #ff3366;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <h3 class="register-title">LIVI'S WATCH</h3>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('register') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" required>
            </div>
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Confirm Password</label>
                <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" required>
            </div>
            <button type="submit" class="btn btn-register w-100">REGISTER</button>
        </form>
    </div>
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>
