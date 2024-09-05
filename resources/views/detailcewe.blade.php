<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
    <link rel="stylesheet" href={{asset("assets/bootstrap/css/bootstrap.min.css")}}>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        .navbar-pink {
            background-color: #e697a4; /* Warna background pink */
        }
        .navbar-brand, .nav-link {
            color: white !important; /* Teks warna putih */
        }
        .product-detail {
            background-color: #e697a4;
            border-radius: 8px;
            padding: 20px;
            margin: 20px;
            text-align: left;
            width: 1100px;
            height: 400px;
        }
        .product-detail img {
            width: 32%;
            border-radius: 8px;
        }
        .product-description, .product-price {
            color: #ffffff;
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
        .quantity {
            margin-top: 15px;
            color: white;
        }
        .quantity label {
            font-size: 1rem;
            margin-right: 10px;
        }
        .quantity input {
            width: 60px;
            text-align: center;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        .quantity button {
            background-color: white;
            border: 1px solid #ccc;
            width: 30px;
            height: 30px;
            border-radius: 5px;
            font-weight: bold;
            line-height: 1;
            color: #000;
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
                    {{-- <form class="d-flex me-3">
                        <div class="input-group">
                            <span class="input-group-text bg-white border-0">
                                <i class="bi bi-search"></i>
                            </span>
                            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                        </div>
                    </form> --}}
                    <a href="" class="nav-link">
                        <i class="bi bi-bag" style="font-size: 1.5rem; color: rgb(255, 255, 255);"></i>
                    </a>
                </div>
            </div>
        </nav>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6 product-detail" style="margin-top: 3%;">
                <img src="https://down-id.img.susercontent.com/file/id-11134207-7r98v-ll96cd4l3ekkfe" alt="Jam Tangan Wanita Rubber" class="img-fluid">
                <div class="deskripsi" style="margin-left: 40%; margin-top: -30%;" >
                    <h4 style="color: white; ">OLEVS Jam Tangan Wanita Anti Air Tanggal Include Box Batrai</h4>
                    <div class="product-description">SPESIFIKASI PRODUK :
                        • DIAMETER : 34mm
                        • PRODUK : IMPORT HIGH QUALITY
                        • FITUR : TANGGAL AKTIF
                        • DISPLAY : ANALOG
                        • TALI/STRAP : RUBBER</div>
                    <div class="product-price">Rp 190.000</div>
                    <div class="rating">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-half"></i>
                        <p>(3k)</p>
                    </div>
                    <div class="quantity">
                        <label for="quantity">Kuantitas:</label>
                        <div class="input-group">
                            <button class="btn-minus">-</button>
                            <input type="number" id="quantity" name="quantity" value="1" min="1" max="99">
                            <button class="btn-plus">+</button>
                        </div>
                    </div> 
                    <form action="{{ route('cart.add') }}" method="POST">
                        @csrf
                        <input type="hidden" name="name" value="New Arrival Jam Tangan Wanita FoxxiL 7198">
                        <input type="hidden" name="price" value="40000">
                        <input type="hidden" name="quantity" id="quantity" value="1">
                        <a href="/cart"><button class="btn btn-light mt-3" type="submit">Masukkan ke Keranjang</button></a>
                    </form>
                                
        
                     <form action="{{ route('checkout') }}" method="POST" style="display:inline;">
                        @csrf
                        <input type="hidden" name="name" value="New Arrival Jam Tangan Wanita FoxxiL 7198">
                        <input type="hidden" name="price" value="40000">
                        <input type="hidden" name="quantity" id="checkout_quantity" value="1"> 
                        <a href="/checkout"><button class="btn btn-light mt-3" type="submit">Beli Sekarang</button></a>
                    </form>
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
      
      

    <script src={{asset("assets/bootstrap/js/bootstrap.min.js")}}></script>
    <script>
        // Script untuk tombol plus dan minus
        document.querySelector('.btn-plus').addEventListener('click', function() {
            let quantityInput = document.getElementById('quantity');
            let currentValue = parseInt(quantityInput.value);
            if (currentValue < quantityInput.max) {
                quantityInput.value = currentValue + 1;
            }
        });

        document.querySelector('.btn-minus').addEventListener('click', function() {
            let quantityInput = document.getElementById('quantity');
            let currentValue = parseInt(quantityInput.value);
            if (currentValue > quantityInput.min) {
                quantityInput.value = currentValue - 1;
            }
        });

        document.getElementById('add').addEventListener('click', function() {
            // Menyimpan data produk ke localStorage (atau bisa dikirim ke backend)
            let product = {
                name: "New Arrival Jam Tangan Wanita FoxxiL 7198",
                price: 40000,
                quantity: parseInt(document.getElementById('quantity').value)
            };

            // Menambahkan produk ke localStorage (keranjang)
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            cart.push(product);
            localStorage.setItem('cart', JSON.stringify(cart));

            // Redirect ke halaman keranjang
            window.location.href = '/cart';
        });

        
    document.querySelector('.btn-plus').addEventListener('click', function() {
        let quantityInput = document.getElementById('quantity');
        let checkoutQuantityInput = document.getElementById('checkout_quantity');
        let currentValue = parseInt(quantityInput.value);
        if (currentValue < quantityInput.max) {
            quantityInput.value = currentValue + 1;
            checkoutQuantityInput.value = currentValue + 1;
        }
    });

    document.querySelector('.btn-minus').addEventListener('click', function() {
        let quantityInput = document.getElementById('quantity');
        let checkoutQuantityInput = document.getElementById('checkout_quantity');
        let currentValue = parseInt(quantityInput.value);
        if (currentValue > quantityInput.min) {
            quantityInput.value = currentValue - 1;
            checkoutQuantityInput.value = currentValue - 1;
        }
    });
    </script>

</body>
</html>
