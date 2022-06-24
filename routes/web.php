<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Newslatter;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;
use App\Http\Livewire\Auth\Login;
use \App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Shop;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function(){
    return view('landing-page');
});

Route::get('/login', function(){
    return view('pages.login');
})->middleware('guest');

// profiling
Route::get('/profile/{id}' ,[UserController::class, 'profile'])->middleware('auth')->name('profile');
Route::get('/voucher', [UserController::class, 'voucher'])->middleware('auth')->name('voucher');
// end profiling

// admin
Route::get('/admin/product', [AdminController::class, 'index'])->middleware('admin')->name('admin.product');
Route::get('/admin/article', [AdminController::class, 'article'])->middleware('admin')->name('admin.article');
Route::get('/admin/category', [AdminController::class, 'category'])->middleware('admin')->name('admin.category');
Route::get('/admin/voucher', [AdminController::class, 'voucher'])->middleware('admin')->name('admin.voucher');
// end admin

// article
Route::get('/articles', [ArticleController::class, 'index'])->name('articles');
Route::get('/article/{post:slug}', [ArticleController::class, 'show']);
// end articles

Route::post('newslatter', Newslatter::class);

Route::get('/register', Register::class)->middleware('guest');

Route::get('/shop', [ShopController::class, 'index'])->name('shop');
Route::get('/shop/{id}', [ShopController::class, 'show']);

Route::get('/cart', [CartController::class, 'index'])->name('cart');

Route::get('/tes', [UserController::class, 'tes']);