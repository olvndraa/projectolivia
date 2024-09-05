<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;

class DashboardController extends Controller
{
    public function index()
    {
        $totalOrders = Order::count();
        $totalQuantitySold = Order::sum('quantity');

        return view('admin.dashboard.index', compact('totalOrders', 'totalQuantitySold'));
    }
    public function adminn() {
        return view('admin.dashboard.index');
    }
}

