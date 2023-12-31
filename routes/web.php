<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Front\FrontendController;
use App\Http\Controllers\Admin\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [FrontendController::class, 'index'])->name('front');


Route::group(['middleware'=>'auth'],function(){
    Route::post('/add-to-cart', [FrontendController::class, 'addToCart'])->name('add.cart');
    Route::get('/total-cart-item', [FrontendController::class, 'getTotalCartItem'])->name('total.cart.item');
    Route::get('/checkout', [FrontendController::class, 'checkout'])->name('checkout');
    Route::get('/cart-items', [FrontendController::class, 'cartItem'])->name('cart.items');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['as' => 'admin.','prefix' => 'admin/','middleware'=>'auth'],function(){
    Route::get('dashboard', [DashboardController::class,'dashboard'])->name('dashboard');
});
