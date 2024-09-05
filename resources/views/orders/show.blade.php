<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center">Order Details</h1>
    <div class="card mt-4">
        <div class="card-header">
            Order ID: {{ $order->id }}
        </div>
        <div class="card-body">
            <h5 class="card-title">Customer: {{ $order->user->name }}</h5>
            <p class="card-text">Status: {{ $order->status }}</p>
            <p class="card-text">Shipping Address: {{ $order->shipping_address }}</p>
            <p class="card-text">Total Price: ${{ $order->total_price }}</p>
            <h5>Order Items:</h5>
            <ul>
                @foreach ($order->orderItems as $item)
                    <li>{{ $item->product->name }} (x{{ $item->quantity }}) - ${{ $item->price }}</li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
