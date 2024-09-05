<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href={{asset("assets/bootstrap/css/bootstrap.min.css")}}>

</head>
<body>
<div class="container mt-5">
    <h1 class="text-center">Orders</h1>
    <table class="table table-bordered mt-4">
        <thead class="table-primary">
            <tr>
                <th>Order ID</th>
                <th>Customer</th>
                <th>Total Price</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->user->name }}</td>
                    <td>${{ $order->total_price }}</td>
                    <td>{{ $order->status }}</td>
                    <td>
                        <a href="{{ route('orders.show', $order->id) }}" class="btn btn-info">View</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<script src={{asset("assets/bootstrap/js/bootstrap.min.js")}}></script>
</body>
</html>
