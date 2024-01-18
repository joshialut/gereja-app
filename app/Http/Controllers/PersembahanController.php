<?php

namespace App\Http\Controllers;

use App\Models\Persembahan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class PersembahanController extends Controller
{
    public function index(Request $request, Persembahan $persembahans)
    {
        $q = $request->input('q');
        $persembahan = Persembahan::paginate(5);
        return view('dashboard.persembahan', compact('persembahan'));
       }

    public function create(Request $request, Persembahan $persembahans)
    {
        return view('dashboard.persembahan.create', compact('persembahans'));
    }

    public function store(Request $request)
    {
        Persembahan::create($request->except(['_token','simpan','updated_at']));
        return redirect('/persembahan');
    }

    public function edit($id_persembahan){
        $persembahan = Persembahan::find($id_persembahan);
        return view('dashboard.persembahan.edit',compact(['persembahan']));
    }

    public function update($id_persembahan, Request $request)
    {
        $persembahan = Persembahan::find($id_persembahan);
        $persembahan->update($request->except(['_token','simpan','updated_at']));
        return redirect('/persembahan');
    }

    public function destroy($id_persembahan)
    {
        $persembahan = Persembahan::find($id_persembahan);
        $persembahan->delete();
        return redirect('/persembahan');
    }
}
