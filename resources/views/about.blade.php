<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Livi's Watch</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
      .hero-section {
            /* background: url('https://via.placeholder.com/1920x600') no-repeat center center; */
            background-color:rgb(124, 124, 156);
            background-size: cover;
            color: white;
            padding: 100px 0;
            text-align: center;
        }
        .team-member img {
            width: 100%;
            height: auto;
            border-radius: 50%;
        }
        .team-member {
            margin-bottom: 30px;
        }
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
        :root {
          --footer-bg-color: #e697a4; /* Warna background footer */
          --footer-text-color: #ffffff; /* Warna teks footer */
          --footer-link-color: #ecf0f1; /* Warna link footer */
          --footer-link-hover-color: #bdc3c7; /* Warna link saat hover */
        }
      
        footer {
          background-color: var(--footer-color);
          color: var(--footer-text-color);
        }
      
        footer a {
          color: var(--footer-link-color);
          text-decoration: none;
        }
      
        footer a:hover {
          color: var(--footer-link-hover-color);
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
                    <!-- Links -->
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
                            <a href="/home2" class="nav-link" style="font-size: large;">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a href="/home" class="nav-link" style="font-size: large;">KATEGORI</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" style="font-size: large;">ABOUT US</a>
                        </li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-link nav-link" style="color: white;">LOGOUT</button>
                        </form>                    
                    </ul>
                        <!-- Shopping Bag Icon -->
                        <a href="/cart" class="nav-link">
                            <i class="bi bi-bag" style="font-size: 1.5rem; color: rgb(255, 255, 255);"></i>
                        </a>
                    </div>
                </div>
            </nav>
        </div>

    <!-- Hero Section -->
    <div class="hero-section">
        <div class="container">
            <h1>Tentang Kami</h1>
            <p>Sumber terpercaya Anda untuk jam tangan premium.</p>
        </div>
    </div>

    <!-- Content Section -->
    <div class="container my-5">
        <!-- Our Story -->
        <section class="company-history mb-5">
            <h2 class="mb-4">Cerita Kami</h2>
            <p>
                Didirikan pada tahun 2024, Livi's Watch telah berdedikasi untuk menyediakan jam tangan berkualitas tinggi bagi para penggemar jam tangan di seluruh dunia.
            </p>
        </section>

        <!-- Mission and Vision -->
        <section class="mission-vision mb-5">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="mb-4">Misi Kami</h2>
                    <p>
                        Untuk menyediakan jam tangan luar biasa yang menggabungkan gaya, fungsionalitas, dan keahlian.
                    </p>
                </div>
                <div class="col-md-6">
                    <h2 class="mb-4">Visi Kami</h2>
                    <p>
                        Menjadi platform e-commerce jam tangan terkemuka.
                    </p>
                </div>
            </div>
        </section>

        <!-- Why Choose Us -->
        <section class="why-choose-us mb-5">
            <h2 class="mb-4">Mengapa Memilih Kami</h2>
            <div class="row">
                <div class="col-md-4">
                    <h4>Jaminan Kualitas</h4>
                    <p>Kami memastikan setiap jam tangan dalam koleksi kami memenuhi standar kualitas tertinggi.</p>
                </div>
                <div class="col-md-4">
                    <h4>Pilihan yang Luas</h4>
                    <p>Pilihan luas dari jam tangan mewah hingga olahraga dan pintar.</p>
                </div>
                <div class="col-md-4">
                    <h4>Layanan Pelanggan</h4>
                    <p>Tim dukungan kami yang berdedikasi siap membantu Anda.</p>
                </div>
            </div>
        </section>

        <!-- Our Team -->
    

        <!-- Contact Us -->
        <section class="contact-us mb-5">
            <h2 class="mb-4">Hubungi Kami</h2>
            <p>Hubungi kami di <a href="mailto:support@liviswatch.com">support@liviswatch.com</a> atau telepon (123) 456-7890.</p>
        </section>
    </div>
      
      <style>
        :root {
          --footer-bg-color: #d17989; 
          --footer-text-color: #ffffff;
          --footer-link-color: #f5f5f5; 
          --footer-link-hover-color: #d1d1d1; 
        }
      
        footer {
          background-color: var(--footer-bg-color);
          color: var(--footer-text-color);
        }
      
        footer a {
          color: var(--footer-link-color);
          text-decoration: none;
        }
      
        footer a:hover {
          color: var(--footer-link-hover-color);
        }
      </style>
      
      <footer class="pt-4 pb-4">
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
      
      

    {{-- @include('partials.footer') <!-- Pastikan Anda memiliki partial footer --> --}}

    <script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
