<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesanan Berhasil</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
</head>
<body>
    <div class="container mt-5">
        <h2>Pesanan Anda Telah Diterima</h2>
        <p>Terima kasih telah berbelanja dengan kami! Pesanan Anda sedang diproses dan kami akan mengirimkan konfirmasi lebih lanjut.</p>
        <a href="{{ url('/') }}" class="btn btn-primary">Kembali ke Beranda</a>
    </div>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>
