<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ValidasiController;
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


Route::prefix('jennyhouse')->group(function () {
    Route::get('/',[HomeController::class,'index'])->name('home');
    Route::get('/about',[HomeController::class,'about'])->name('about');
    Route::get('/login',[ValidasiController::class,'viewLogin'])->name('view.login');
    Route::get('/register',[ValidasiController::class,'viewRegister'])->name('view.register');
    Route::get('/product',[BarangController::class,'viewProduct'])->name('product');
    Route::post('/login/validasi',[ValidasiController::class,'validasiLogin'])->name('validasi.login');
    Route::post('/register/validasi',[ValidasiController::class,'validasiRegister'])->name('validasi.register');
    Route::get('/product/{id}',[BarangController::class,'optionProduct'])->name('option.product');
    Route::get('/product/detail/{id}',[BarangController::class,'detailProduct'])->name('detail.product');
    Route::get('/logout',[ValidasiController::class,'logout'])->name('logout');
});
