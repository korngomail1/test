<?php
 
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('auth.register');
})->name('register');
Route::get('/login', function () {
    
    return view('auth.login');
})->name('login');

Route::resource('home', App\Http\Controllers\HomeController::class);
Route::post('register', [App\Http\Controllers\Auth\RegisteredUserController::class, 'store'])->name('register');
Route::post('postlogin', [App\Http\Controllers\Auth\AuthController::class, 'postlogin'])->name('postlogin');
Route::get('logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

