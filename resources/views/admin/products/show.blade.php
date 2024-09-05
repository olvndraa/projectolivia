@extends('admin.layout')

@section('content')
<h1>Product Details</h1>

<div class="product-details">
    <img src="{{ asset('storage/'.$product->photo) }}" alt="{{ $product->name }}" class="img-fluid">
    <h2>{{ $product->name }}</h2>
    <p>Category: {{ $product->category }}</p>
    <p>Description: {{ $product->description }}</p>
    <p>Price: {{ $product->price }}</p>
    <p>Stock: {{ $product->stock }}</p>
    <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">Back</a>
</div>

