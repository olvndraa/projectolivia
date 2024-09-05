<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        .navbar-pink {
            background-color: #e697a4; /* Warna background pink */
        }
        .navbar-brand, .nav-link {
            color: white !important; /* Teks warna putih */
        }
        .btn-custom {
            background-color: #f1ede7;
            color: #000;
        }
        .btn-custom:hover {
            background-color: #e0d8d0;
        }
        .form-control {
        border-radius: 10; /* Menghilangkan border-radius */
    }
    .product-card {
        background-color: #4d4d4d; /* Warna pink */
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
    </style>
</head>
<body>
    <div class="fixed-top">
        <nav class="navbar navbar-expand-lg navbar-pink">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">WATCH LIVI'S</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/home">KATEGORI</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about">ABOUT US</a>
                        </li>
                        <li class="nav-item">
                            <button class="btn btn-custom ms-2" type="button" onclick="window.location.href='/login'">MASUK</button>
                        </li>
                        <li class="nav-item">
                            <button class="btn btn-custom ms-2" type="button" onclick="window.location.href='/register'">DAFTAR</button>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="bi bi-bag" style="font-size: 1.5rem;"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div id="banner" style="background-color: rgb(173, 173, 175); width: 100%; height: 20%; margin-top: 7%; justify-content: center;">
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

    <h5 style="color: #4d4d4d; margin-top: 2%; text-align: center;">KOLEKSI TERPOPULER</h5>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6">
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
                    <img src="https://down-id.img.susercontent.com/file/id-11134207-7r98w-llj05r84ennwa3" alt="Jam Tangan Wanita Rubber Chrono Off">
                    <div class="product-description">REBIRTH Jam Tangan Wanita Korea Anti Air</div>
                    <div class="product-price">Rp 288.000</div>
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
                    <img src="https://down-id.img.susercontent.com/file/a48aed5e05ba82b0b74d1868637cfd11" alt="Jam Tangan Wanita">
                    <div class="product-description">HANNAH MARTIN Jam Tangan Pria Original Tahan air</div>
                    <div class="product-price">Rp 299.000</div>
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
        <h5 style="color: #4d4d4d; margin-top: 2%; text-align: center;">PRODUK TERBARU</h5>
        <div id="carouselPria" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
        <!-- Slide 1 -->
        <div class="carousel-item active">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <a href="/detailcowo" class="text-decoration-none">
                            <div class="product-card" style="background-color: #4d4d4d;">
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
                        <div class="product-card" style="background-color: #4d4d4d;">
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
                        <div class="product-card" style="background-color:#4d4d4d;">
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
                        <div class="product-card" style="background-color: #4d4d4d;">
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
          
    <script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
