<?php

namespace App\Http\Controllers;

use Auth;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Pengurus;

class PengurusController extends Controller
{
   public function index (Request $request, Pengurus $penguruss)
   {
    $q = $request->input('q');
    $pengurus = Pengurus::paginate(10);
    // dd($pengurus);
    return view('dashboard.pengurus', compact('pengurus'));
   }

   public function create (Request $request, Pengurus $penguruss)
   {
    return view('dashboard.pengurus.create', compact('penguruss'));
   }

   public function store (Request $request)
   {
    Pengurus::create($request->except(['_token','simpan','updated_at']));
    return redirect('/pengurus');
   }

   public function edit ($id_pengurus)
   {
    $pengurus = Pengurus::find($id_pengurus);
    return view('dashboard.pengurus.edit', compact(['pengurus']));
   }

   public function update ($id_pengurus, Request $request)
   {
    $pengurus = Pengurus::find($id_pengurus);
    $pengurus->update($request->except(['_token','simpan','update_at']));
    return redirect('/pengurus');
   }
   public function destroy ($id_pengurus)
   {
    $pengurus = Pengurus::find($id_pengurus);
    $pengurus->delete();
    return redirect('/pengurus');
   }
}
