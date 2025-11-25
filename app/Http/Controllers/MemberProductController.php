<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;

class MemberProductController extends Controller
{
    /**
     * Menampilkan semua produk milik member yang sedang login
     */
    public function index()
    {
       $products = Product::where('user_id', auth()->id())
                ->with('category')
                ->get();
        $category = Category::all();

    return view('member.products.index', compact('products', 'category'));
    }

    /**
     * Form tambah produk
     */
    public function create()
    {
         $categories = Category::all();
         return view('member.products.create', compact('categories'));
    }

    /**
     * Simpan produk baru
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required',
            'price'       => 'required|numeric',
            'description' => 'nullable',
            'image'       => 'nullable|image',
        ]);

        $filename = null;

        if ($request->image) {
            $filename = time() . '_' . $request->image->getClientOriginalName();
            $request->image->move(public_path('uploads/products'), $filename);
        }

        Product::create([
            'user_id'     => auth()->id(),
            'name'        => $request->name,
            'price'       => $request->price,
            'description' => $request->description,
            'image'       => $filename,
        ]);

        return redirect()
            ->route('member.products.index')
            ->with('success', 'Produk berhasil ditambahkan!');
    }

    /**
     * Form edit produk
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);

    // Ambil semua kategori
    $categories = Category::all();

    return view('member.products.edit', compact('product', 'categories'));
    }

    /**
     * Update produk
     */
    public function update(Request $request, $id)
    {
       $product = Product::findOrFail($id);

    $product->name = $request->name;
    $product->price = $request->price;
    $product->description = $request->description;
    $product->category_id = $request->category_id;

    // Jika upload foto baru
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('products', 'public');
        $product->image = $imagePath;
    }

    $product->save();

    return redirect()->route('member.products.index')
        ->with('success', 'Produk berhasil diperbarui!');
    }

    /**
     * Hapus produk
     */
    public function destroy($id)
    {
        $product = Product::where('user_id', auth()->id())->findOrFail($id);

        // Hapus gambar dari folder jika ada
        $imagePath = public_path('products/' . $product->image);

        if ($product->image && file_exists($imagePath)) {
            unlink($imagePath);
        }

        $product->delete();

        return redirect()
            ->route('member.products.index')
            ->with('success', 'Produk berhasil dihapus!');
    }
}
