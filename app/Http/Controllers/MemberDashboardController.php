<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberDashboardController extends Controller
{

    public function index()
    {
        return view('member.dashboard');
    }


    public function riwayatBelanja()
    {
     
        $riwayat = [
            [
                'produk' => 'Minuman Teh Botol',
                'jumlah' => 2,
                'total'  => 16000,
                'tanggal' => '2025-01-15'
            ],
            [
                'produk' => 'Roti Coklat',
                'jumlah' => 1,
                'total'  => 12000,
                'tanggal' => '2025-01-18'
            ]
        ];

        return view('member.riwayat', compact('riwayat'));
    }
}
