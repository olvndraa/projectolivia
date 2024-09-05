<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin E-Commerce - Input Produk</title>
    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar-pink {
            background-color: #e697a4; /* Warna background pink */
        }
        .navbar-brand, .nav-link {
            color: white !important; /* Teks warna putih */
        }
        .form-control {
            border-radius: 0; /* Menghilangkan border-radius */
        }
    </style>
</head>
<body>
    @endif
    <form action="/inputadmin" method="post">
    @csrf
    <div class="fixed-top">
        <nav class="navbar navbar-expand-sm navbar-pink">
            <div class="container-fluid">
                <a href="#" class="navbar-brand" style="margin-left: 10%;">INPUT PRODUK</a>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</head>
<body>
        <form style="margin-top: 5%; margin-left: 5%;">
            <div class="mb-3">
                <label for="productName" class="form-label">Nama Produk</label>
                <input type="text" class="form-control" id="productName" placeholder="Masukkan nama produk" name="{{old('produk')}}">
            </div>
            <div class="mb-3">
                <label for="productDescription" class="form-label">Deskripsi Produk</label>
                <textarea class="form-control" id="productDescription" rows="3" placeholder="Masukkan deskripsi produk"></textarea name="{{old('deskripsi')}}">
            </div>
            <div class="mb-3">
                <label for="productPrice" class="form-label">Harga Produk</label>
                <input type="number" class="form-control" id="productPrice" placeholder="Masukkan harga produk" name="{{old('harga')}}">
            </div>
            <div class="mb-3">
                <label for="productImage" class="form-label">Gambar Produk</label>
                <input class="form-control-file" type="file" id="productImage" name="foto">
            </div>
            <button type="submit" class="btn btn-primary">Tambah Produk</button>
        </form>
    </div>>
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>

</body>
</html>
