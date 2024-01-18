<?php

namespace App\Http\Controllers;

use Auth;
use Validator;
use App\Models\Jemaat;
use App\Models\Pelayanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class JemaatController extends Controller
{
    public function index(Request $request, Jemaat $jemaats)
    {
        $q = $request->input('q');
        // SELECT
        // jemaats.id_jemaat, jemaats.nama,jemaats.nik,jemaats.tempat_lahir,jemaats.tanggal_lahir,jemaats.gol_darah,jemaats.jenis_kelamin,jemaats.alamat_jemaat, jemaats.no_telepon,wilayahs.nama_wilayah,
        // GROUP_CONCAT(pelayanans.jenis_pelayanan) as jenis_pelayanan
        // FROM jemaats
        // JOIN wilayahs ON jemaats.id_wilayah = wilayahs.id_wilayah
        // LEFT JOIN jemaats_pelayanans ON jemaats.id_jemaat = jemaats_pelayanans.id_jemaats
        // LEFT JOIN pelayanans ON jemaats_pelayanans.id_pelayanans = pelayanans.id_pelayanan
        // GROUP BY jemaats.id_jemaat, jemaats.nama,jemaats.nik,jemaats.tempat_lahir,jemaats.tanggal_lahir,jemaats.gol_darah,jemaats.jenis_kelamin,jemaats.alamat_jemaat,jemaats.no_telepon,wilayahs.nama_wilayah
        // ORDER BY jemaats.nama ASC;
        // $jemaat = DB::table('jemaats')
        // ->select('jemaats.id_jemaat','jemaats.nama','jemaats.nik','jemaats.tempat_lahir','jemaats.tanggal_lahir','jemaats.gol_darah','jemaats.jenis_kelamin','jemaats.alamat_jemaat','jemaats.no_telepon','wilayahs.nama_wilayah',DB::raw('GROUP_CONCAT(pelayanans.jenis_pelayanan) as jenis_pelayanan'))
        // ->join('wilayahs','jemaats.id_wilayah','=','wilayahs.id_wilayah')
        // ->leftJoin('jemaats_pelayanans','jemaats.id_jemaat','=','jemaats_pelayanans.id_jemaats')
        // ->leftJoin('pelayanans','jemaats_pelayanans.id_pelayanans','=','pelayanans.id_pelayanan')
        // ->groupBy(['jemaats.id_jemaat','jemaats.nama','jemaats.nik','jemaats.tempat_lahir','jemaats.tanggal_lahir','jemaats.gol_darah','jemaats.jenis_kelamin','jemaats.alamat_jemaat','jemaats.no_telepon','wilayahs.nama_wilayah'])
        // ->orderBy('jemaats.nama','ASC')
        $jemaat = DB::table('jemaats')
        ->select('jemaats.id_jemaat','jemaats.nama','jemaats.nik','jemaats.tempat_lahir','jemaats.tanggal_lahir','jemaats.gol_darah','jemaats.jenis_kelamin','jemaats.alamat_jemaat','jemaats.no_telepon','jemaats.jenis_pelayanan','jemaats.id_wilayah','wilayahs.nama_wilayah')
        ->join('wilayahs','jemaats.id_wilayah','=','wilayahs.id_wilayah')
        ->paginate(5);
        // dd($jemaat);
        return view('dashboard.jemaat', compact('jemaat'));
    }

    public function create(Request $request, Jemaat $jemaats)
    {
        $wilayah = DB::table('wilayahs')->select('id_wilayah', 'nama_wilayah')->get();
        $pelayanan = DB::table('pelayanans')->select('id_pelayanan','jenis_pelayanan')->get();
        // dd($wilayah, $pelayanan);
        return view('dashboard.jemaat.create', ['dataWilayah'=>$wilayah,'dataPelayanan'=>$pelayanan]);
    }
    public function store(Request $request)
    {
        $data = [
            'nama' => $request->input('nama'),
            'nik' => $request->input('nik'),
            'tempat_lahir' => $request->input('tempat_lahir'),
            'tanggal_lahir' => $request->input('tanggal_lahir'),
            'gol_darah' => $request->input('gol_darah'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'alamat_jemaat' => $request->input('alamat_jemaat'),
            'no_telepon' => $request->input('no_telepon'),
            'id_wilayah' => $request->input('nama_wilayah'),
            'jenis_pelayanan' => $request->input('jenis_pelayanan'),
        ];
        // $data->pelayans()->attach($pelayanan);
        // dd($data, $pelayanan);
        DB::table('jemaats')->insert($data);
        // DB::table('jemaats_pelayanans')->insert($pelayanan);


        return redirect('/jemaat');
    }
    public function edit($id_jemaat) {
        $jemaat = Jemaat::find($id_jemaat);
        // $pelayanan = DB::table('pelayanans')->select('id_pelayanan', 'jenis_pelayanan')->get();
        // dd($pelayanan);
        $wilayah = DB::table('wilayahs')->select('id_wilayah', 'nama_wilayah')->get();
        // dd($jemaat);
        return view('dashboard.jemaat.edit',compact(['jemaat'], ['wilayah']));
    }
    public function update($id_jemaat, Request $request)
    {
        $jemaat = Jemaat::find($id_jemaat);
        $jemaat->update($request->except(['_token','simpan','updated_at']));
        return redirect('/jemaat');
    }

    public function destroy($id_jemaat)
    {
        $jemaat = Jemaat::find($id_jemaat);
        $jemaat->delete();
        return redirect('/jemaat    ');
    }
    // public function totalWilayah($wilayah)
    // {
    //     $wilayah = DB::table('wilayahs')->select('id_wilayah', 'nama_wilayah')->get();

    // }

}
