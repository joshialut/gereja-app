<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Khotbah;
use Illuminate\Support\Facades\App;
use Barryvdh\DomPDF\Facade\Pdf;

class KhotbahController extends Controller
{
    public function index(Request $request, Khotbah $khotbahs)
    {
        $q = $request->input('q');
        $khotbah = Khotbah::all();
        return view('dashboard.khotbah', compact('khotbah'));
    }
    public function create(Request $request, Khotbah $khotbahs)
    {
        return view('dashboard.khotbah.create', compact('khotbahs'));
    }
    public function store(Request $request)
    {
        Khotbah::create($request->except(['_token','simpan']));
        return redirect('/khotbah');
    }
    public function edit($id_khotbah){
        $khotbah = Khotbah::find($id_khotbah);
        return view('dashboard.khotbah.edit',compact(['khotbah']));
    }
    public function update($id_khotbah, Request $request)
    {
        $khotbah = Khotbah::find($id_khotbah);
        $khotbah->update($request->except(['_token','simpan','updated_at']));
        return redirect('/khotbah');
    }
    public function destroy($id_khotbah)
    {
        $khotbah = Khotbah::find($id_khotbah);
        $khotbah->delete();
        return redirect('/khotbah');
    }
    public function generatePdf()
    {
        $khotbah = Khotbah::All();

        $pdf = Pdf::loadView('dashboard.khotbahPdf' ,compact('khotbah'));
        return $pdf->stream('RingkasanKhotbah.pdf');
    }
}
