<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pelanggan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center">Edit Pelanggan</h1>
    <form action="{{ route('customers.update', $customer->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $customer->name) }}" required>
        </div>
        
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $customer->email) }}" required>
        </div>
        
        <div class="mb-3">
            <label for="phone_number" class="form-label">No. Telepon</label>
            <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{ old('phone_number', $customer->phone_number) }}" required>
        </div>
        
        <div class="mb-3">
            <label for="address" class="form-label">Alamat</label>
            <textarea class="form-control" id="address" name="address" rows="3" required>{{ old('address', $customer->address) }}</textarea>
        </div>
        
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('customers.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
