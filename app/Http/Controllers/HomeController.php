<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Pemasok;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    //
    public function index()
    {
        $barang = Barang::count();
        $supplier = Pemasok::count();
        $total_hariIni = Transaksi::whereDate('created_at', now())->sum('total');
        $total_bulanIni = Transaksi::sum('total');
        //
        $total_harga = Transaksi::select(DB::raw("CAST(SUM(total) as int) as total"))
            ->whereYear('created_at', now()->year)
            ->groupBy(DB::raw("MONTH(created_at)"))
            ->pluck('total');

        $bulan = Transaksi::select(DB::raw("MONTHNAME(created_at) as bulan"))
        ->groupBy(DB::raw("MONTHNAME(created_at)"))
        ->orderBy(DB::raw("MONTH(created_at)"))
        ->pluck('bulan');
        //
        return view('home', ['barang' => $barang, 'pemasok' => $supplier, 
                                'total_hariini' => $total_hariIni,
                                'total_bulanini' => $total_bulanIni,
                                'total_harga' => $total_harga, 'bulan' => $bulan]);
    }
}
