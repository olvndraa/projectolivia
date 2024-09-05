<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - Livi's Watch</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        .navbar-pink {
            background-color: #e697a4; /* Warna background pink */
        }
        .navbar-brand, .nav-link {
            color: white !important; /* Teks warna putih */
        }
        .checkout-form {
            background-color: rgb(175, 175, 175);
            border-radius: 8px;
            padding: 20px;
            margin: 20px;
            width: 100%;
            max-width: 800px;
            margin-left: 15%;
            margin-top: 10%
        }
        .form-control, .form-select {
            border-radius: 5px;
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
                    <a href="/cart" class="nav-link">
                        <i class="bi bi-bag" style="font-size: 1.5rem; color: rgb(255, 255, 255);"></i>
                    </a>
                </div>
            </div>
        </nav>
    </div>
    <div class="container">
        <div class="checkout-card">
            <h2 class="mb-4" style="margin-top: 10%">Checkout</h2>
            <form action="{{ route('order.place') }}" method="POST">
                @csrf
                <div class="row mb-4">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" id="name" name="name" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Alamat</label>
                    <textarea id="address" name="address" class="form-control" rows="3" required></textarea>
                </div>
                <div class="row mb-4">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="city" class="form-label">Kota</label>
                            <input type="text" id="city" name="city" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="postal_code" class="form-label">Kode Pos</label>
                            <input type="text" id="postal_code" name="postal_code" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Nomor Telepon</label>
                    <input type="text" id="phone" name="phone" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="shipping" class="form-label">Biaya Pengiriman</label>
                    <select id="shipping" name="shipping" class="form-select" required>
                        <option value="0">Pilih Opsi Ongkir</option>
                        <option value="10000">Ongkir Reguler - Rp 10.000</option>
                        <option value="20000">Ongkir Ekspres - Rp 20.000</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="payment_method" class="form-label">Metode Pembayaran</label>
                    <select id="payment_method" name="payment_method" class="form-select" required>
                        <option value="credit_card">Kartu Kredit</option>
                        <option value="bank_transfer">Transfer Bank</option>
                        <option value="cash_on_delivery">Bayar di Tempat</option>
                    </select>
                </div>

                <h4 class="mb-3">Keranjang Anda</h4>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Nama Produk</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Kuantitas</th>
                            <th scope="col">Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach(session('cart', []) as $item)
                            <tr>
                                <td>{{ $item['name'] }}</td>
                                <td>Rp {{ number_format($item['price'], 2) }}</td>
                                <td>{{ $item['quantity'] }}</td>
                                <td>Rp {{ number_format($item['price'] * $item['quantity'], 2) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="text-end mt-3">
                    <h5>Total: Rp {{ number_format($total, 2) }}</h5>
                </div>

                <button type="submit" class="btn btn-custom">Selesaikan Pembayaran</button>
            </form>
        </div>
    </div>

    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>
