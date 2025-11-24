@extends('layouts.admin')

@section('style')
<style>

    .cards {
        display: flex;
        gap: 25px;
        margin-top: 25px;
        flex-wrap: wrap;
    }


    .card {
        background: linear-gradient(135deg, #1e1b4b, #312e81);
        padding: 22px;
        border-radius: 14px;
        width: 250px;
        color: #e0e7ff;
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.25);
        transition: 0.3s;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 22px rgba(0, 0, 0, 0.35);
    }

    .card h3 {
        margin: 0;
        font-size: 16px;
        opacity: 0.85;
        font-weight: 500;
    }

    .card .count {
        font-size: 34px;
        font-weight: bold;
        margin-top: 10px;
        color: #a5b4fc;
    }


    .section h2 {
        margin-top: 45px;
        font-size: 22px;
        color: #1e1b4b;
        font-weight: 700;
    }

    /* TABLE */
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 15px;
        background: white;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 8px 18px rgba(0, 0, 0, 0.1);
    }

    table thead {
        background: #1e1b4b;
        color: #e0e7ff;
    }

    table th, table td {
        padding: 14px 18px;
        text-align: left;
        font-size: 14px;
    }

    table tbody tr:nth-child(even) {
        background: #f3f4f6;
    }

    table tbody tr:hover {
        background: #e0e7ff;
    }
</style>
@endsection

@section('content')

<h1 class="page-title">Dashboard Admin Marketz</h1>
<p>Selamat datang kembali, <strong style="color:#312e81;">{{ Auth::user()->name }}</strong>!</p>


<div class="cards">
    <div class="card">
        <h3>Total User</h3>
        <p class="count">{{ $totalUsers }}</p>
    </div>

    <div class="card">
        <h3>Total Produk</h3>
        <p class="count">{{ $totalProducts }}</p>
    </div>

    <div class="card">
        <h3>Total Toko</h3>
        <p class="count">{{ $totalToko }}</p>
    </div>
    <div class="card">
        <h3>Total Kategori</h3>
       <p class="count">{{ $totalKategori }}</p>
</div>

</div>

<div class="section">
    <h2>Produk Terbaru</h2>

   
</div>

@endsection

