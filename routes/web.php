<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;

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

Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/register', 'register')->name('panggil_register');
    Route::post('/store', 'store')->name('panggil_store');
    Route::get('/login', 'login')->name('panggil_login');
    Route::post('/authenticate', 'authenticate')->name('panggil_authenticate');
    Route::get('/dashboard', 'dashboard')->name('panggil_dashboard');
    Route::post('/logout', 'logout')->name('panggil_logout');
});