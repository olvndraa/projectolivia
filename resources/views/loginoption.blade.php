<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Pilihan - LYV'S</title>
    <link rel="stylesheet" href={{asset("assets/bootstrap/css/bootstrap.min.css")}}>
  
    <style>
        body {
            background-color: #ffe6f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-choice-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .login-title {
            margin-bottom: 20px;
            font-weight: bold;
            color: #ff6699;
        }
        .btn-login-choice {
            background-color: #ff6699;
            color: white;
            width: 100%;
            margin-bottom: 15px;
        }
        .btn-login-choice:hover {
            background-color: #ff3366;
        }
    </style>
</head>
<body>
    <div class="login-choice-container">
        <h3 class="login-title">LOGIN LYV'S</h3>
        <button class="btn btn-login-choice"><a href="/login">Login untuk admin</a></button>
        <button class="btn btn-login-choice">Login untuk User</button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
