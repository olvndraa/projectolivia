@extends('admin.layout')

@section('title', 'Add New Product')

@section('content')
<header>
    <h4 style="margin-left: 20%">Tambah Produk</h4>
    <a href="{{ route('admin.products.index') }}" class="btn btn-secondary" style="margin-left: 15%; " style="margin-top: 50%">Back</a>
</header>

<div class="form-container">
    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama Produk</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select id="category" name="category" class="form-select" required>
                <option value="jam tangan wanita">Jam Tangan Wanita</option>
                <option value="jam tangan pria">Jam Tangan Pria</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="photo" class="form-label">Photo</label>
            <input type="file" id="photo" name="photo" class="form-control">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea id="description" name="description" class="form-control" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" id="price" name="price" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="stock" class="form-label">Stock</label>
            <input type="number" id="stock" name="stock" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Add Product</button>
    </form>
</div>
@endsection
