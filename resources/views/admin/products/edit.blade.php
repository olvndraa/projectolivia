@extends('admin.layout')

@section('title', 'Edit Product')

@section('content')
<header>
    <h1>Edit Product</h1>
    <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">Back</a>
</header>

<div class="form-container">
    <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ $product->name }}" required>
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select id="category" name="category" class="form-select" required>
                <option value="jam tangan wanita" {{ $product->category == 'jam tangan wanita' ? 'selected' : '' }}>Jam Tangan Wanita</option>
                <option value="jam tangan pria" {{ $product->category == 'jam tangan pria' ? 'selected' : '' }}>Jam Tangan Pria</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="photo" class="form-label">Photo</label>
            <input type="file" id="photo" name="photo" class="form-control">
            @if($product->photo)
                <img src="{{ asset('storage/' . $product->photo) }}" width="100" class="mt-2">
            @endif
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea id="description" name="description" class="form-control" rows="3" required>{{ $product->description }}</textarea>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" id="price" name="price" class="form-control" step="0.01" value="{{ $product->price }}" required>
        </div>
        <div class="mb-3">
            <label for="stock" class="form-label">Stock</label>
            <input type="number" id="stock" name="stock" class="form-control" value="{{ $product->stock }}" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Update Product</button>
    </form>
</div>
@endsection
