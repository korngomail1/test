<?php
 
use Illuminate\Support\Facades\Route;

use App\Models\Category;
use App\Models\Product;

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
    $category = Category::get();
    return view('home', compact('category'));
})->name('home');;

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/setting_category', function () {
    return view('category');
})->name('setting_category');

Route::get('/product_category', function () {
    $category = Category::get();
    return view('productcategory',compact('category'));
})->name('product_category');

//auth
Route::post('register', [App\Http\Controllers\Auth\RegisteredUserController::class, 'store'])->name('register');
Route::post('postlogin', [App\Http\Controllers\Auth\AuthController::class, 'postlogin'])->name('postlogin');
Route::get('logout', [App\Http\Controllers\Auth\AuthController::class, 'logout'])->name('logout');

Route::post('store_category', [App\Http\Controllers\CategoryController::class, 'store'])->name('store_category'); 
Route::post('store_product_category', [App\Http\Controllers\ProductController::class, 'store'])->name('store_product_category');

