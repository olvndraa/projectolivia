<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProdukController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home2');
});
// Route::get('/indexx', [UserController::class, 'showindex']);
// Route::post('/auth', [UserController::class,'authentication']);
// Route::get('/login', [UserController::class,'login']);
// Route::get('/logout', [UserController::class, 'logout']);
Route::get('/home', [UserController::class, 'index']);
// Route::get('/login', [UserController::class, 'loginoption']);
// Route::get('/dashboard', [DashboardController::class, 'adminn']);


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', [LoginController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [LoginController::class, 'register']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/home', [UserController::class, 'index']);
Route::get('/adminn', [UserController::class, 'admin']);
Route::get('/detailproduk', [UserController::class, 'detail']);
Route::get('/detailcowo', [UserController::class, 'detailco']);
Route::get('/about', [UserController::class, 'about']);
Route::get('/detailcewe', [UserController::class, 'detailcewe']);




Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    // Route::get('dashboard', [DashboardController::class, 'orders'])->name('dashboard');
    // Route::get('dashboard', [DashboardController::class, 'customer'])->name('dashboard');
    Route::resource('products', ProdukController::class);
});
Route::redirect('/admin', '/admin/dashboard');

Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
Route::get('/orders/{id}', [OrderController::class, 'show'])->name('orders.show');
use App\Http\Controllers\CustomerController;

Route::resource('customers', CustomerController::class);

// Route::middleware(['auth'])->group(function () {
//     Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
//     Route::get('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
//     Route::get('/cart', [CartController::class, 'view'])->name('cart.view');

// });
Route::get('/cart', [CartController::class, 'view'])->name('cart.view');
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::get('/cart/delete/{id}', [CartController::class, 'destroy'])->name('cart.delete');
Route::get('/cart', [CartController::class, 'view'])->name('cart.view');


// return redirect()->route('cart.delete', ['name' => $item->name]);



// Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
// // Menampilkan halaman checkout
// Route::get('/checkout', [CheckoutController::class, 'showCheckoutForm'])->name('checkout.form');

// // Proses checkout
// Route::post('/checkout', [CheckoutController::class, 'processCheckout'])->name('checkout.process');

// web.php
Route::get('/checkout', function () {
    $cart = session('cart', []);
    $total = array_reduce($cart, function($carry, $item) {
        return $carry + ($item['price'] * $item['quantity']);
    }, 0);

    return view('checkout', ['total' => $total]);
})->name('checkout');

Route::post('/order/place', [OrderController::class, 'place'])->name('order.place');
Route::post('/checkout', [OrderController::class, 'checkout'])->name('checkout');


use Illuminate\Support\Facades\Auth;

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login')->with('status', 'Anda telah berhasil logout.');
})->name('logout');


