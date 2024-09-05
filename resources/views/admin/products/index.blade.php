@extends('admin.layout')

@section('title', 'Products List')

@section('content')
<header>
    <h4>Products List</h4>
    <a href="{{ route('admin.products.create') }}" class="btn btn" style="background-color: pink" style="color: white">Tambah Produk</a>
</header>

<div class="table-responsive mt-4">
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Photo</th>
                <th>Nama Produk</th>
                <th>Kategori</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Stock</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $index => $product)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td><img src="{{ asset('storage/' . $product->photo) }}" width="50" height="50"></td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->category }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->stock }}</td>
                    <td>
                        <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-success">Edit</a>
                        <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
