<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PhysicBookController;
use App\Http\Controllers\DigitalBookController;
use App\Http\Controllers\RegisterController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

//Login dan Register
    //Admin
    //User
        Route::get('/login', [LoginController::class, 'index']);
        Route::get('/register', [RegisterController::class, 'index']);

//Dashboard
    //Admin
        Route::get('/admin', [UserController::class, 'index']);
        Route::get('/masukan', [HomeController::class, 'kontak_us']);
        Route::get('/kelol-user', [HomeController::class, 'kelola_user']);


    //User
        Route::get('/', [HomeController::class, 'index']);
        Route::get('/about', [HomeController::class, 'about']);
        Route::get('/contact', [HomeController::class, 'contact']);

//Digital Book
    //Admin
        Route::get('/daftar-buku-digital', [DigitalBookController::class, 'daftar_buku_digital']);
        Route::get('/tambah-buku-digital', [DigitalBookController::class, 'tambah_buku_digital']);
        Route::get('/daftar-buku-dibaca', [DigitalBookController::class, 'daftar_buku_dibaca']);
        Route::get('/daftar-jenis-buku', [DigitalBookController::class, 'daftar_jenis_buku']);
        Route::get('/daftar-buku-terfavorit', [DigitalBookController::class, 'daftar_buku_terfavorit']);
        Route::post('/tambah-buku-digital-store', [DigitalBookController::class, 'store']);
        Route::put('/buku/{id}', [DigitalBookController::class, 'update'])->name('buku.update');
        Route::delete('/buku/{id}', [DigitalBookController::class, 'destroy'])->name('buku.hapus');

    //User
        Route::get('/buku-digital', [DigitalBookController::class, 'index']);
        Route::get('/buku-digital-detail{id}', [DigitalBookController::class, 'detail'])->name('buku.digital.detail');

//Offline Book
    //Admin
        Route::get('/daftar-buku-fisik', [PhysicBookController::class, 'daftar_buku_fisik']);
        Route::get('/tambah-buku-fisik', [PhysicBookController::class, 'tambah_buku_fisik']);
        Route::post('/tambah-buku-fisik-store', [PhysicBookController::class, 'store']);
        Route::put('/buku/{id}', [PhysicBookController::class, 'update_fisik'])->name('buku.fisik.update');
        Route::delete('/buku/{id}', [PhysicBookController::class, 'destroy'])->name('buku.fisik.hapus');
    //User
        Route::get('/buku-fisik', [PhysicBookController::class, 'index'])->name('buku.fisik');
        Route::get('/buku-fisik-detail', [PhysicBookController::class, 'detail'])->name('buku.fisik.detail');
        Route::get('/search', [PhysicBookController::class, 'ajaxSearch'])->name('buku.ajaxSearch');
