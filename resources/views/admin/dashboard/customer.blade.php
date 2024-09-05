<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers Management</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card-header {
            background-color: #007bff; /* Biru untuk header card */
            color: #fff;
        }
        .btn-primary {
            background-color: #007bff; /* Biru untuk tombol */
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3; /* Biru gelap untuk hover tombol */
            border-color: #004085;
        }
        .table thead th {
            background-color: #007bff; /* Biru untuk header tabel */
            color: #fff;
        }
        .nav-link.active {
            background-color: #ff63b4; /* Pink untuk link aktif */
            color: #fff;
        }
        .nav-link:hover {
            background-color: #ff63b4; /* Pink untuk hover link */
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Orders
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">
                                Customers
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Products
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Customers</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <a href="#" class="btn btn-primary">Add New Customer</a>
                        </div>
                    </div>
                </div>

                <!-- Customers Table -->
                <div class="card">
                    <div class="card-header">
                        Customers List
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Customer ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Joined Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#001</td>
                                    <td>Alice Smith</td>
                                    <td>alice@example.com</td>
                                    <td>2024-01-15</td>
                                    <td>
                                        <a href="#" class="btn btn-info btn-sm">View</a>
                                        <a href="#" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#002</td>
                                    <td>Bob Johnson</td>
                                    <td>bob@example.com</td>
                                    <td>2024-02-22</td>
                                    <td>
                                        <a href="#" class="btn btn-info btn-sm">View</a>
                                        <a href="#" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                                <!-- More rows here -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
