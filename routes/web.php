<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\MemberProductController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TentangKamiController;
use App\Http\Controllers\TokoController;
use App\Http\Controllers\MemberDashboardController;
use App\Models\Product;


Route::get('/', function () {
    $products = Product::latest()->get();
    $categories = Category::all();

    return view('beranda', compact('products', 'categories'));

});

Route::get('/category/{id}', function ($id) {
    $products = Product::where('category_id', $id)->latest()->get();
    $category = \App\Models\Category::findOrFail($id);

    return view('beranda-category', compact('products', 'category'));
})->name('beranda.category');

Route::get('/product/{id}', function ($id) {
    $product = \App\Models\Product::findOrFail($id);
    return view('product-detail', compact('product'));
})->name('product.detail');


Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');


Route::get('/tentang-kami', [TentangKamiController::class, 'index'])->name('tentang-kami');
Route::post('/tentang-kami/save', [TentangKamiController::class, 'save'])->name('tentang-kami.save');


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


    Route::resource('products', ProductController::class)
        ->only(['index', 'show', 'edit', 'update', 'destroy']);


    Route::get('/users', [AdminUserController::class, 'index']);
    Route::get('/users/create', [AdminUserController::class, 'create']);
    Route::post('/users', [AdminUserController::class, 'store']);
    Route::get('/users/{id}/edit', [AdminUserController::class, 'edit']);
    Route::put('/users/{id}', [AdminUserController::class, 'update']);
    Route::delete('/users/{id}', [AdminUserController::class, 'destroy']);


    Route::resource('categories', CategoryController::class);


    Route::get('/toko', [TokoController::class, 'index'])->name('toko.index');
    Route::get('/toko/create', [TokoController::class, 'create'])->name('toko.create');
    Route::post('/toko', [TokoController::class, 'store'])->name('toko.store');
    Route::get('/toko/{id}/edit', [TokoController::class, 'edit'])->name('toko.edit');
    Route::put('/toko/{id}', [TokoController::class, 'update'])->name('toko.update');
    Route::delete('/toko/{id}', [TokoController::class, 'destroy'])->name('toko.destroy');
});


Route::middleware(['auth', 'isMember'])->group(function () {


    Route::get('/member/products', [MemberProductController::class, 'index'])
        ->name('member.products.index');
    Route::get('/member/products/create', [MemberProductController::class, 'create'])
        ->name('member.products.create');
    Route::post('/member/products', [MemberProductController::class, 'store'])
        ->name('member.products.store');
    Route::get('/member/products/{id}/edit', [MemberProductController::class, 'edit'])
        ->name('member.products.edit');
    Route::put('/member/products/{id}', [MemberProductController::class, 'update'])
        ->name('member.products.update');
    Route::delete('/member/products/{id}', [MemberProductController::class, 'destroy'])
        ->name('member.products.destroy');
    Route::get('/member/dashboard', [MemberDashboardController::class, 'index'])
        ->name('member.dashboard');
    Route::get('/member/riwayat-belanja', [MemberDashboardController::class, 'riwayatBelanja'])
        ->name('member.riwayat');
});

