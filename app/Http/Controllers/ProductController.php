<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    // ===========================
    // ADMIN & MEMBER → Lihat produk
    // ===========================
    public function index()
    {
        // admin lihat semua produk
        if (Auth::user()->role === 'admin') {
            $products = Product::latest()->paginate(10);
        } else {
            // member hanya lihat produk dia sendiri
            $products = Product::where('user_id', Auth::id())->latest()->paginate(10);
        }

        return view('admin.products.index', compact('products'));
    }

    // ===========================
    // HANYA MEMBER → Form tambah
    // ===========================
    public function create()
    {
        if (Auth::user()->role !== 'member') {
            abort(403, 'Admin tidak boleh tambah produk');
        }

        return view('admin.products.create');
    }

    // ===========================
    // HANYA MEMBER → Simpan produk
    // ===========================
    public function store(Request $request)
    {
        if (Auth::user()->role !== 'member') {
            abort(403, 'Admin tidak boleh tambah produk');
        }

        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'description' => 'nullable',
            'image' => 'nullable|image'
        ]);

        $filename = null;

        if ($request->image) {
            $filename = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/products'), $filename);
        }

        Product::create([
            'user_id' => Auth::id(), // 🟢 SIMPAN ID MEMBER
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'image' => $filename,
        ]);

        return redirect()->route('products.index')->with('success','Produk berhasil ditambahkan');
    }

    // ===========================
    // HANYA MEMBER → Edit produk miliknya
    // ===========================
    public function edit(Product $product)
    {
        if (Auth::id() !== $product->user_id) {
            abort(403, 'Tidak boleh edit produk orang lain');
        }

        return view('admin.products.edit', compact('product'));
    }

    // ===========================
    // HANYA MEMBER → Update produk miliknya
    // ===========================
    public function update(Request $request, Product $product)
    {
        if (Auth::id() !== $product->user_id) {
            abort(403, 'Tidak boleh update produk orang lain');
        }

        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'image' => 'nullable|image'
        ]);

        $filename = $product->image;

        if ($request->image) {
            $filename = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/products'), $filename);
        }

        $product->update([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'image' => $filename,
        ]);

        return redirect()->route('products.index')->with('success','Produk berhasil diperbarui');
    }

    // ===========================
    // HANYA MEMBER → Hapus produk miliknya
    // ===========================
    public function destroy(Product $product)
    {
        if (Auth::id() !== $product->user_id) {
            abort(403, 'Tidak boleh hapus produk orang lain');
        }

        if ($product->image && file_exists(public_path('uploads/products/' . $product->image))) {
            unlink(public_path('uploads/products/' . $product->image));
        }

        $product->delete();

        return redirect()->route('products.index')->with('success','Produk berhasil dihapus');
    }
}
