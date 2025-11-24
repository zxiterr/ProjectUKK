<?php

namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\Product;
use App\Models\Toko;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $totalUsers = User::count();
        $totalProducts = Product::count();
        $totalToko = Toko::count();
        $totalKategori = Category::count();

        $latestProducts = Product::latest()->take(5)->get();
        return view('admin.dashboard', compact('totalUsers','totalProducts','totalToko','latestProducts','totalKategori'));

    }
}
