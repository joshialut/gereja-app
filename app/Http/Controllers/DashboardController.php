<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
   public function index()
   {
    // $wilayah = Wilayah::count();
    $chartJemaat = DB::table('jemaats')
    ->select('wilayahs.nama_wilayah AS name',DB::raw('COUNT(jemaats.id_jemaat) AS y'))
    ->join('wilayahs','jemaats.id_wilayah','=','wilayahs.id_wilayah')
    ->groupBy('jemaats.id_wilayah')
    ->get();
    $jumlahJemaat = DB::table('jemaats')
    ->count('id_jemaat');
    $jumlahWilayah = DB::table('wilayahs')
    ->count('id_wilayah');
    // dd($jumlahJemaat);
    // dd($chartJemaat);
    return view('dashboard',compact('chartJemaat','jumlahJemaat','jumlahWilayah'));
   }
//    public function jumlahJemaat(Jemaat $jemaats)
//    {
//     $jumlahJemaat = DB::table('jemaats')
//     ->select('COUNT(id_jemaat) AS JumlahJemaat')
//     ->get();
//     dd($jumlahJemaat);
//     return view('dashboard',compact('jumlahJemaat'));
//    }
}
