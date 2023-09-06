<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ResiController;
use App\Http\Controllers\Admin\PackingController;
use App\Http\Controllers\FrontEnd\HomeController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\AdminDashboardController;

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

// Front End //
Route::get('/', [AdminLoginController::class, 'index'])->name('admin-login');
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Admin Login //
Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminLoginController::class, 'index'])->name('admin-login');
    Route::post('/login-submit', [AdminLoginController::class, 'login_submit'])->name('admin-login-submit');
    Route::get('/forget-password', [AdminLoginController::class, 'forgetPassword'])->name('admin-forget-password');
    Route::post('/forget-password-submit', [AdminLoginController::class, 'forgetPasswordSubmit'])->name('admin-forget-password-submit');
    Route::get('/reset-password/{token}/{email}', [AdminLoginController::class, 'resetPassword'])->name('admin-reset-password');
    Route::post('/reset-password-submit', [AdminLoginController::class, 'resetPasswordSubmit'])->name('admin-reset-password-submit');
    Route::get('/logout', [AdminLoginController::class, 'logout'])->name('admin-logout');
});

// Admin Dashboard //
Route::prefix('admin')->middleware('admin:admin')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin-dashboard');
    Route::get('/setting', [AdminDashboardController::class, 'indexSetting'])->name('admin-setting');
    Route::get('/form', [AdminDashboardController::class, 'indexForm'])->name('admin-form');

    Route::get('/resi', [ResiController::class, 'index'])->name('admin-resi');
    Route::get('/resi-create', [ResiController::class, 'create'])->name('admin-resi-create');
    Route::post('/resi-store', [ResiController::class, 'store'])->name('admin-resi-store');
    Route::get('/resi-show/{id}', [ResiController::class, 'show'])->name('admin-resi-show');
    Route::post('/resi-show/{id}', [ResiController::class, 'destroy'])->name('admin-resi-destroy');

    Route::get('/packing', [PackingController::class, 'index'])->name('admin-packing');

    Route::get('/table', [AdminDashboardController::class, 'indexTable'])->name('admin-table');
    Route::get('/invoice', [AdminDashboardController::class, 'indexInvoice'])->name('admin-invoice');

    //Admin Profile//
    Route::get('/edit-profile', [AdminProfileController::class, 'index'])->name('admin-profile');
    Route::post('/update-profile', [AdminProfileController::class, 'updateProfile'])->name('admin-update-profile');
});
