<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrderPenawaranController;
use App\Http\Controllers\Admin\OrderPenjualanController;
use App\Http\Controllers\Customer\BerandaUserController;
use App\Http\Controllers\Admin\FakturPenjualanController;
use App\Http\Controllers\Customer\CustomerLoginController;
use App\Http\Controllers\Customer\OrderPermintaanController;
use App\Http\Controllers\Admin\ManageAkunPerusaaanController;
use App\Http\Controllers\Customer\CustomerRegisterController;

// Route::get('/', [SessionController::class]);

Route::get('/', function () {
    return view('homepage');
});


// Customer
Route::prefix('login')->group(function () {
    Route::get('/', [CustomerLoginController::class, 'index'])->name('login');
    Route::post('/', [CustomerLoginController::class, 'authenticate']);
});

Route::get('/register', [CustomerRegisterController::class, 'index'])->name('register');
Route::post('/register/submit', [CustomerRegisterController::class, 'submit'])->name('register.submit');

Route::prefix('user')->group(function () {
    Route::get('beranda', [BerandaUserController::class, 'index'])->name('beranda-user');
    Route::get('permintaan', [OrderPermintaanController::class, 'indexuser'])->name('permintaan-user');
    Route::get('permintaan/create', [OrderPermintaanController::class, 'create'])->name('permintaan-create');
    Route::post('permintaan', [OrderPermintaanController::class, 'store'])->name('permintaan-store');
    // Route::post('permintaan', [OrderPermintaanController::class, 'store']->name('permintaan.store'));
    Route::post('bottles', 'BottleController@store')->name('bottles.store');
});

// Admin Staff
Route::prefix('admin')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('permintaan', [OrderPermintaanController::class, 'indexadmin'])->name('permintaan-admin');
    Route::get('penawaran', [OrderPenawaranController::class, 'index'])->name('penawaran-admin');
    Route::get('penjualan', [OrderPenjualanController::class, 'index'])->name('penjualan-admin');
    Route::get('faktur', [FakturPenjualanController::class, 'index'])->name('fakturpenjualan-admin');
    Route::get('manage', [ManageAkunPerusaaanController::class, 'index'])->name('manage-akun');
});
