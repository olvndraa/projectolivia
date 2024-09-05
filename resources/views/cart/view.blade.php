<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Keranjang - Livi's Watch</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        .cart-container {
            margin-top: 80px; /* Margin untuk memberi jarak dari navbar tetap */
        }
        .cart-item {
            border-bottom: 1px solid #ddd;
            padding: 15px 0;
        }
        .cart-item img {
            width: 100px;
            height: auto;
        }
        .navbar-pink {
            background-color: #e697a4; /* Warna background pink */
        }
        .navbar-brand, .nav-link {
            color: white !important; /* Teks warna putih */
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-pink fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">WATCH LIVI'S</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/">HOME</a>
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
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="bi bi-bag" style="font-size: 1.5rem;"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h1 style="margin-top: 10%">Keranjang Belanja</h1>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Foto</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Kuantitas</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $subtotal = 0;
                @endphp
                @forelse($cart as $key => $item)
                    <tr>
                        {{-- <td>{{$key}}</td> --}}
                        <td><img src="https://down-id.img.susercontent.com/file/id-11134207-7qul8-li30fe2z75gqce" style="width: 100px; height: auto;"/></td>   
                        <td>{{ $item['name'] }}</td>
                        <td>{{ number_format($item['price'], 2) }}</td>
                            <td>{{ $item['quantity'] }}</td>
                            <td>
                                <a href="/cart/delete/{{$key}}" class="btn btn-danger btn-sm">Hapus</a>
                            </td>
                        </tr>
                        {{-- <td>
                            <form action="{{ route('cart.update') }}" method="POST" class="d-inline">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-sm btn-secondary" name="action" value="decrease">-</button>
                                <span>{{ $item['quantity'] }}</span>
                                <button type="submit" class="btn btn-sm btn-secondary" name="action" value="increase">+</button>
                            </form>
                        </td> --}}
                        {{-- <td>
                            <form action="{{ route('cart.remove') }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                            </form>
                        </td>                         --}}
                    </tr>
                    @php
                        $subtotal += $item['price'] * $item['quantity'];
                    @endphp
                @empty
                    <tr>
                        <td colspan="5">Keranjang belanja Anda kosong.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        
        <div class="text-end mt-3">
            <h6>Subtotal: Rp {{ number_format($subtotal, 2) }}</h6>
        </div>
        
        <a href="/" class="btn btn-primary mt-3">Kembali ke Beranda</a>
    </div>

    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>
