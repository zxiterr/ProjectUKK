<?php

namespace App\Http\Controllers;

use App\Models\Toko;
use Illuminate\Http\Request;

class TokoController extends Controller
{
    public function index()
    {
        $toko = Toko::latest()->paginate(10);
        return view('admin.toko.index', compact('toko'));
    }

    public function create()
    {
        return view('admin.toko.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_toko' => 'required',
            'alamat' => 'required',
            'pemilik' => 'required',
        ]);

        Toko::create($request->all());

        return redirect()->route('toko.index')->with('success', 'Toko berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $toko = Toko::findOrFail($id);
        return view('admin.toko.edit', compact('toko'));
    }

    public function update(Request $request, $id)
    {
        $toko = Toko::findOrFail($id);

        $request->validate([
            'nama_toko' => 'required',
            'alamat' => 'required',
            'pemilik' => 'required',
        ]);

        $toko->update($request->all());

        return redirect()->route('toko.index')->with('success', 'Toko berhasil diperbarui.');
    }

    public function destroy($id)
    {
        Toko::findOrFail($id)->delete();
        return redirect()->route('toko.index')->with('success', 'Toko berhasil dihapus.');
    }
}
