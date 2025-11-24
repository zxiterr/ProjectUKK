<?php

namespace App\Http\Controllers;

use App\Models\TentangKami;
use Illuminate\Http\Request;

class TentangKamiController extends Controller
{
    public function index()
    {
        $data = TentangKami::first();
        return view('admin.tentang_kami', compact('data'));
    }

    public function save(Request $request)
    {
        TentangKami::updateOrCreate(
            ['id' => 1],
            $request->all()
        );

        return back()->with('success', 'Data Tentang Kami berhasil disimpan!');
    }
}
