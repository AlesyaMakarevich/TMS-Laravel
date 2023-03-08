<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [MainController::class, 'main'])->name('main');
Route::get('/about', [AboutController::class, 'about'])->name('about');
Route::get('/cart', [CartController::class, 'cart'])->name('cart');
Route::get('/checkout', [CheckoutController::class, 'checkout'])->name('checkout');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/blog', [BlogController::class, 'blog'])->name('blog');
