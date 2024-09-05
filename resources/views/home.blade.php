<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>WATCH LIVI'S</title>
<link rel="stylesheet" href={{asset("assets/bootstrap/css/bootstrap.min.css")}}>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<style>
    .navbar-pink {
        background-color: #e697a4; /* Warna background pink */
 /* Warna background pink */
    }
    .navbar-brand, .nav-link {
        color: white !important; /* Teks warna putih */
    }
    .form-control {
        border-radius: 10; /* Menghilangkan border-radius */
    }
    .product-card {
        background-color: #e697a4; /* Warna pink */
        border-radius: 8px;
        padding: 10px;
        text-align: left;
        margin-bottom: 20px;
        height: 400px; /* Menetapkan tinggi tetap agar desain konsisten */
        display: flex;
        flex-direction: column;
        justify-content: space-between;

    }
    .product-card img {
        width: 100%;
        height: auto;
        border-radius: 8px;
    }
    .product-description {
        font-size: 1.0rem;
        color: #ffffff;
        margin-top: 10px;
    }
    .product-price {
        font-size: 1.2rem;
        color: #ffffff;
        margin-top: 5px;
    }
    .rating {
        color: white;
    }
    .rating i {
        font-size: 1.2rem;
    }
    .rating p {
        display: inline;
        margin-left: 5px;
        color: #ccc;
    }
    .product-description, .product-price, .rating {
        justify-content: space-between;
    }
    /* Menyusun kolom untuk 4 kolom di layar besar */
    /* @media (min-width: 100px) {
        .col-lg-2 {
            flex: 0 0 15%;
            max-width: 25%;
        } */
        .footer-pink {
            background-color: #77757a;
            color: white;
            padding: 40px 0;
            width: 100%;
            height: 300px;
            margin-top: 3%
        }
        .footer-pink a {
            color: white;
            text-decoration: none;
        }
        .footer-pink a:hover {
            text-decoration: underline;
        }
        .footer-bottom {
            background-color:#e697a4;
            color: #000;
            padding: 10px 0;
            text-align: center;
            margin-top: 8%
        }
    
</style>
</head>
<body>
<div class="fixed-top">
    <nav class="navbar navbar-expand-sm navbar-pink">
        <div class="container-fluid">
            <a href="#" class="navbar-brand" style="margin-left: 10%;">WATCH LIVI'S</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="myNavbar">
    
                <ul class="navbar-nav me-3">
                    <form class="d-flex me-3">
                        <div class="input-group">
                            <span class="input-group-text bg-white border-0">
                                <i class="bi bi-search"></i>
                            </span>
                            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                        </div>
                    </form>
                    <li class="nav-item">
                        <a href="/" class="nav-link" style="font-size: large;">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a href="/home" class="nav-link" style="font-size: large;">KATEGORI</a>
                    </li>
                    <li class="nav-item">
                        <a href="/about" class="nav-link" style="font-size: large;">ABOUT US</a>
                    </li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-link nav-link" style="color: white;">LOGOUT</button>
                    </form>                    
                </ul>
                    <a href="/cart" class="nav-link">
                        <i class="bi bi-bag" style="font-size: 1.5rem; color: rgb(255, 255, 255);"></i>
                    </a>
                </div>
            </div>
        </nav>
    </div>
    <div id="banner" style="background-color: rgb(187, 187, 197); width: 100%; height: 20%; margin-top: 7%; justify-content: center;">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://images.jamtangan.com/preset:sharp/dpr:1.5/plain/https://assets.jamtangan.com/images/banners/home/H1/b/0724/new-casio-jdm-a792bb43959ee82548c17a8e07976e8d.jpg" class="d-block w-80" alt="Banner 1" style="width: 70%; height: 350px; margin-top: 0%; margin-left: 17%;">
          </div>
          <div class="carousel-item">
            <img src="https://images.jamtangan.com/preset:sharp/dpr:1.5/plain/https://assets.jamtangan.com/images/banners/home/H1/b/0724/tsar-bomba-now-8b562b9eb3b431ee376f6f73556cf885.jpg" class="d-block w-80" alt="Banner 2" style="width: 70%; height: 350px; margin-top: 0%;  margin-left: 17%;">
          </div>
          <div class="carousel-item">
            <img src="https://images.jamtangan.com/preset:sharp/dpr:1.5/plain/https://assets.jamtangan.com/images/banners/home/H1/b/0824/dbs-august-4fb1fab087c19614c8fb1c92e311b3c6.jpg" class="d-block w-80" alt="Banner 3" style="width: 70%; height: 350px; margin-top: 0%;  margin-left: 17%;">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

    <h5 style="color :#e697a4; ;margin-top: 2%; text-align: center;">KOLEKSI JAM TANGAN WANITA</h5>
    <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="container mt-5">
                    <div class="row d-flex">
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <a href="/detailproduk" class="text-decoration-none">
                            <div class="product-card">
                                <img src="https://down-id.img.susercontent.com/file/id-11134207-7qul8-li30fe2z75gqce" alt="Jam Tangan Wanita Rubber">
                                <div class="product-description">Jam Tangan Wanita Rubber</div>
                                <div class="product-price">Rp 40.000</div>
                                <div class="rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-half"></i>
                                    <p>(3k)</p>
                                    <div class="cart-icon" style="margin-left: 80%; margin-top: -10%">
                                        <i class="bi bi-cart" style="margin-top: -10%"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6" style="margin-left: 25%; margin-top: -37%;">
                            <div class="product-card">
                            <a href="halaman-produk.html" class="text-decoration-none">
                                <img src="https://down-id.img.susercontent.com/file/id-11134207-7r98q-lplv9otb6p5q16" alt="Jam Tangan Wanita Rubber Chrono Off">
                                <div class="product-description">Jam tangan wanita kuarsa kulit indah</div>
                                <div class="product-price">Rp 43.000</div>
                                <div class="rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-half"></i>
                                    <p>(3k)</p>
                                    <div class="cart-icon" style="margin-left: 80%; margin-top: -10%">
                                        <i class="bi bi-cart" style="margin-top: -10%"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6" style="margin-left: 50%; margin-top: -37%;">
                            <div class="product-card">
                            <a href="halaman-produk.html" class="text-decoration-none">
                                <img src="https://down-id.img.susercontent.com/file/sg-11134201-22120-7gb3v6e0nlkv72" alt="Jam Tangan Wanita">
                                <div class="product-description">Jam Tangan Guess Rubber New Model</div>
                                <div class="product-price">Rp 53.000</div>
                                <div class="rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-half"></i>
                                    <p>(3k)</p>
                                    <div class="cart-icon" style="margin-left: 80%; margin-top: -10%">
                                        <i class="bi bi-cart" style="margin-top: -10%"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6" style="margin-left: 75%; margin-top: -37%;">
                            <a href="halaman-produk.html" class="text-decoration-none">

                            <div class="product-card">
                                <img src="https://down-id.img.susercontent.com/file/id-11134207-7r98r-lqvuju66dpq1af" alt="Jam Tangan Wanita">
                                <div class="product-description">Jam Tangan Wanita Rantai Casual Fullset</div>
                                <div class="product-price">Rp 122.000</div>
                                <div class="rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <p>(3k)</p>
                                    <div class="cart-icon" style="margin-left: 80%; margin-top: -10%">
                                        <i class="bi bi-cart" style="margin-top: -10%"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="carousel-item">
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <a href="/detailcewe"></a>
                            <div class="product-card">
                                <img src="https://down-id.img.susercontent.com/file/id-11134207-7r98v-ll96cd4l3ekkfe" alt="Jam Tangan Wanita Rubber">
                                <div class="product-description">OLEVS Jam Tangan Wanita Anti Air</div>
                                <div class="product-price">Rp 169.000</div>
                                <div class="rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-half"></i>
                                    <p>(3k)</p>
                                    <div class="cart-icon" style="margin-left: 80%; margin-top: -10%">
                                        <i class="bi bi-cart" style="margin-top: -10%"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="product-card">
                                <img src="https://down-id.img.susercontent.com/file/id-11134207-7r98q-lplv9otb6p5q16" alt="Jam Tangan Wanita Rubber Chrono Off">
                                <div class="product-description">Jam tangan wanita kuarsa kulit indah</div>
                                <div class="product-price">Rp 43.000</div>
                                <div class="rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-half"></i>
                                    <p>(3k)</p>
                                    <div class="cart-icon" style="margin-left: 80%; margin-top: -10%">
                                        <i class="bi bi-cart" style="margin-top: -10%"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="product-card">
                                <img src="https://down-id.img.susercontent.com/file/sg-11134201-22120-7gb3v6e0nlkv72" alt="Jam Tangan Wanita">
                                <div class="product-description">Jam Tangan Guess Rubber New Model</div>
                                <div class="product-price">Rp 53.000</div>
                                <div class="rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-half"></i>
                                    <p>(3k)</p>
                                    <div class="cart-icon" style="margin-left: 80%; margin-top: -10%">
                                        <i class="bi bi-cart" style="margin-top: -10%"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="product-card">
                                <img src="https://down-id.img.susercontent.com/file/id-11134207-7r98r-lqvuju66dpq1af" alt="Jam Tangan Wanita">
                                <div class="product-description">Jam Tangan Wanita Rantai Casual Fullset</div>
                                <div class="product-price">Rp 122.000</div>
                                <div class="rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <p>(3k)</p>
                                    <div class="cart-icon" style="margin-left: 80%; margin-top: -10%">
                                        <i class="bi bi-cart" style="margin-top: -10%"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    
    <h5 style="color: rgb(161, 161, 199); margin-top: 2%; text-align: center;">KOLEKSI JAM TANGAN PRIA</h5>
    <div id="carouselPria" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <a href="/detailcowo" class="text-decoration-none">
                                <div class="product-card" style="background-color: rgb(149, 149, 184);">
                                    <img src="https://down-id.img.susercontent.com/file/a0b4f7843e56ce46b926f3fd0680239e" alt="Jam Tangan Pria Kuarsa Tali Stainless Steel">
                                <div class="product-description" style="color: white;">Jam Tangan Pria Kuarsa Tali Stainless Steel</div>
                                <div class="product-price" style="color: white;">Rp 289.000</div>
                                <div class="rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <p>(3k)</p>
                                    <div class="cart-icon" style="margin-left: 80%; margin-top: -10%">
                                        <i class="bi bi-cart" style="margin-top: -10%"></i>
                                    </div>
                                </div>
                            </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="product-card" style="background-color: rgb(149, 149, 184);">
                                <img src="https://down-id.img.susercontent.com/file/id-11134207-7qul1-lfkr61t6pf0tb0" alt="OLEVS Jam Tangan Pria Original Stainless Steel">
                                <div class="product-description" style="color: white;">OLEVS Jam Tangan Pria Original Stainless Steel</div>
                                <div class="product-price" style="color: white;">Rp 600.000</div>
                                <div class="rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <p>(3k)</p>
                                    <div class="cart-icon" style="margin-left: 80%; margin-top: -10%">
                                        <i class="bi bi-cart" style="margin-top: -10%"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="product-card" style="background-color: rgb(149, 149, 184);">
                                <img src="https://down-id.img.susercontent.com/file/id-11134207-7qul1-lgjahxbz0vxk18" alt="Sunlifex Jam Tangan Pria 9094 Original Kuarsa">
                                <div class="product-description" style="color: white;">Sunlifex Jam Tangan Pria 9094 Original Kuarsa</div>
                                <div class="product-price" style="color: white;">Rp 299.000</div>
                                <div class="rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <p>(3k)</p>
                                    <div class="cart-icon" style="margin-left: 80%; margin-top: -10%">
                                        <i class="bi bi-cart" style="margin-top: -10%"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="product-card" style="background-color: rgb(149, 149, 184);">
                                <img src="https://down-id.img.susercontent.com/file/id-11134201-23020-5f0m3wjg5jnvd7" alt="FNGEEN 5308 Jam Tangan Pria Luxury Stainless Steel">
                                <div class="product-description" style="color: white;">FNGEEN 5308 Jam Tangan Pria Luxury Stainless Steel</div>
                                <div class="product-price" style="color: white;">Rp 199.000</div>
                                <div class="rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <p>(3k)</p>
                                    <div class="cart-icon" style="margin-left: 80%; margin-top: -10%">
                                        <i class="bi bi-cart" style="margin-top: -10%"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="carousel-item">
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="product-card" style="background-color: rgb(161, 161, 212);">
                                <img src="https://down-id.img.susercontent.com/file/a0b4f7843e56ce46b926f3fd0680239e" alt="Jam Tangan Pria Kuarsa Tali Stainless Steel">
                                <div class="product-description" style="color: white;">Jam Tangan Pria Kuarsa Tali Stainless Steel</div>
                                <div class="product-price" style="color: white;">Rp 289.000</div>
                                <div class="rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <p>(3k)</p>
                                    <div class="cart-icon" style="margin-left: 80%; margin-top: -10%">
                                        <i class="bi bi-cart" style="margin-top: -10%"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="product-card" style="background-color: rgb(161, 161, 212);">
                                <img src="https://down-id.img.susercontent.com/file/id-11134207-7qul1-lfkr61t6pf0tb0" alt="OLEVS Jam Tangan Pria Original Stainless Steel">
                                <div class="product-description" style="color: white;">OLEVS Jam Tangan Pria Original Stainless Steel</div>
                                <div class="product-price" style="color: white;">Rp 600.000</div>
                                <div class="rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <p>(3k)</p>
                                    <div class="cart-icon" style="margin-left: 80%; margin-top: -10%">
                                        <i class="bi bi-cart" style="margin-top: -10%"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="product-card" style="background-color: rgb(161, 161, 212);">
                                <img src="https://down-id.img.susercontent.com/file/id-11134207-7qul1-lgjahxbz0vxk18" alt="Sunlifex Jam Tangan Pria 9094 Original Kuarsa">
                                <div class="product-description" style="color: white;">Sunlifex Jam Tangan Pria 9094 Original Kuarsa</div>
                                <div class="product-price" style="color: white;">Rp 299.000</div>
                                <div class="rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <p>(3k)</p>
                                    <div class="cart-icon" style="margin-left: 80%; margin-top: -10%">
                                        <i class="bi bi-cart" style="margin-top: -10%"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="product-card" style="background-color: rgb(161, 161, 212);">
                                <img src="https://down-id.img.susercontent.com/file/id-11134201-23020-5f0m3wjg5jnvd7" alt="FNGEEN 5308 Jam Tangan Pria Luxury Stainless Steel">
                                <div class="product-description" style="color: white;">FNGEEN 5308 Jam Tangan Pria Luxury Stainless Steel</div>
                                <div class="product-price" style="color: white;">Rp 199.000</div>
                                <div class="rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <p>(3k)</p>
                                    <div class="cart-icon" style="margin-left: 80%; margin-top: -10%">
                                        <i class="bi bi-cart" style="margin-top: -10%"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselPria" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselPria" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<style>
    :root {
      --footer-bg-color: #d17989; 
      --footer-text-color: #ffffff;
      --footer-link-color: #f5f5f5; 
      --footer-link-hover-color: #d1d1d1; 
      --width: 100%;
    }
  
    footer {
      background-color: var(--footer-bg-color);
      color: var(--footer-text-color);
      width: 100%;
    }
  
    footer a {
      color: var(--footer-link-color);
      text-decoration: none;
    }
  
    footer a:hover {
      color: var(--footer-link-hover-color);
    }
  </style>
  
  <footer class="pt-4 pb-4" style="margin-top: 5%">
    <div class="container">
      <div class="row">
        <!-- About Section -->
        <div class="col-md-4">
          <h5>Tentang Kami</h5>
          <p>Kami menyediakan koleksi jam tangan pria dan wanita dengan kualitas terbaik. Anda bisa custom jam tangan sesuai dengan gaya Anda.</p>
        </div>
        
        <!-- Quick Links -->
        <div class="col-md-4">
          <h5>Link Cepat</h5>
          <ul class="list-unstyled">
            <li><a href="#">Beranda</a></li>
            <li><a href="#">Produk</a></li>
            <li><a href="#">Kategori</a></li>
            <li><a href="#">Kontak</a></li>
          </ul>
        </div>
        
        <!-- Contact Information -->
        <div class="col-md-4">
          <h5>Hubungi Kami</h5>
          <p><i class="fas fa-map-marker-alt"></i> Jalan Jam Custom No. 1, Bandung</p>
          <p><i class="fas fa-phone-alt"></i> +62 987 654 321</p>
          <p><i class="fas fa-envelope"></i> custom@jamstore.com</p>
          {{-- <a href="#" class="btn btn-outline-light btn-floating m-1" ></a> --}}
        </div>
      </div>
      
      <div class="text-center mt-4">
        <p>&copy; 2024 WATCH LIVI'S. All rights reserved.</p>
      </div>
    </div>
</footer>
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

    <script src={{asset("assets/bootstrap/js/bootstrap.min.js")}}></script>
</body>
</html>
