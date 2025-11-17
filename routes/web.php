<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\TokoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/admin', function () {

    if (!auth()->check()) {
        return redirect('/login');
    }

    if (auth()->user()->role !== 'admin') {
        abort(403, 'Akses Khusus Admin');
    }

    return app(AdminController::class)->index();

});


Route::prefix('admin')->middleware('auth')->group(function () {
  Route::resource('products', ProductController::class);
    Route::get('/users', [AdminUserController::class, 'index']);
    Route::get('/users/create', [AdminUserController::class, 'create']);
    Route::post('/users', [AdminUserController::class, 'store']);
    Route::get('/users/{id}/edit', [AdminUserController::class, 'edit']);
    Route::put('/users/{id}', [AdminUserController::class, 'update']);
    Route::delete('/users/{id}', [AdminUserController::class, 'destroy']);

    Route::get('/toko', [TokoController::class, 'index'])->name('toko.index');
    Route::get('/toko/create', [TokoController::class, 'create'])->name('toko.create');
    Route::post('/toko', [TokoController::class, 'store'])->name('toko.store');
    Route::get('/toko/{id}/edit', [TokoController::class, 'edit'])->name('toko.edit');
    Route::put('/toko/{id}', [TokoController::class, 'update'])->name('toko.update');
    Route::delete('/toko/{id}', [TokoController::class, 'destroy'])->name('toko.destroy');

});
