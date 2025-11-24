<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $products = Product::latest()->take(12)->get();

        return view('beranda', compact('categories', 'products'));
    }


}
