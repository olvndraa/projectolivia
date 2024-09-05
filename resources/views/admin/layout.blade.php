
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WATCH LIVI'S</title>
    <link rel="stylesheet" href={{asset("assets/bootstrap/css/bootstrap.min.css")}}>  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        .navbar-pink {
            background-color: #e697a4;
        }
        .navbar-brand, .nav-link {
            color: white !important; 
        }
        .form-container {
            max-width: 700px;
            margin: 0px auto;
            padding: 10px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    
    </style>
</head>
<body>

 
    <nav class="navbar navbar-expand-lg navbar-pink fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">WATCH LIVI'S</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="home">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/home">KATEGORI</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">ABOUT US</a>
                    </li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-link nav-link" style="color: white;">LOGOUT</button>
                    </form>  
                </ul>
                <form class="d-flex ms-3">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">
                        <i class="bi bi-search"></i>
                    </button>
                </form>
                <a class="nav-link ms-3" href="#">
                    <i class="bi bi-bag" style="font-size: 1.5rem; color: white;"></i>
                </a>
            </div>
        </div>
    </nav>
        <div class="container" style="margin-top: 5%">
        @yield('content')
    </div>
    <script src={{asset("assets/bootstrap/js/bootstrap.min.js")}}></script>
</body>
</html>
