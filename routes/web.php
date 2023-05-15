<?php

use App\Http\Livewire\Customers\ShowCustomers;
use App\Http\Livewire\Categories\ShowCategories;
use App\Http\Livewire\Sales\SaleDetails;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ShowPosts;

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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', ShowPosts::class)->name('dashboard');
    Route::get('/customers', ShowCustomers::class)->name('customers.index');
    Route::get('/categories', ShowCategories::class)->name('categories.index');
    Route::get('/order', \App\Http\Livewire\Sales\Order::class)->name('sales.order');
    Route::get('/sales', \App\Http\Livewire\Sales\ShowSales::class)->name('sales.index');
    Route::get('/sales/{id}/details', SaleDetails::class)->name('sale-details');
    Route::get('/customers/{id}/details', App\Http\Livewire\Sales\CustomerDetails::class)->name('customer-details');
    Route::get('/customers/{customerId}/order', \App\Http\Livewire\Sales\CustomerOrder::class)->name('customer-order');
    Route::get('/sidebar', \App\Http\Livewire\App\Sidebar::class)->name('sidebar');
    Route::get('/products', \App\Http\Livewire\Products\ShowProducts::class)->name('products.index');
    Route::get('/product/create', \App\Http\Livewire\Products\CreateProduct::class)->name('products.create-product');
});
