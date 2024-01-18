<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\IbadahController;
use App\Http\Controllers\JemaatController;
use App\Http\Controllers\KhotbahController;
use App\Http\Controllers\PersembahanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PengurusController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('test');
});
Route::get('/test', function () {
    return view('test');
});
Route::get('/khotbahPdf', function () {
    return view('dashboard.khotbahPdf');
});
Auth::routes();

Route::resource('/posts', \App\Http\Controllers\PostController::class);
//home
Route::get('/dashboard', [DashboardController::class,'index']);

//Jadwal
Route::get('/jadwal', [IbadahController::class, 'index']);
Route::get('/jadwal/create', [IbadahController::class, 'create']);
Route::post('/jadwal/store', [IbadahController::class, 'store']);
Route::get('/jadwal/{id_ibadah}/edit', [IbadahController::class, 'edit']);
Route::put('/jadwal/{id_ibadah}', [IbadahController::class, 'update']);
Route::delete('/jadwal/{id_ibadah}', [IbadahController::class, 'destroy']);

//Jemaat
Route::get('/jemaat',[JemaatController::class, 'index']);
Route::get('/jemaat/create',[JemaatController::class, 'create']);
Route::post('/jemaat/store',[JemaatController::class, 'store']);
Route::get('/jemaat/{id_jemaat}/edit',[JemaatController::class, 'edit']);
Route::put('/jemaat/{id_jemaat}',[JemaatController::class, 'update']);
Route::delete('/jemaat/{id_jemaat}',[JemaatController::class, 'destroy']);

//Persembahan
Route::get('/persembahan', [PersembahanController::class, 'index']);
Route::get('/persembahan/create', [PersembahanController::class, 'create']);
Route::post('/persembahan/store' ,[PersembahanController::class, 'store']);
Route::get('/persembahan/{id_persembahan}/edit', [PersembahanController::class, 'edit']);
Route::put('/persembahan/{id_persembahan}', [PersembahanController::class, 'update']);
Route::delete('/persembahan/{id_persembahan}', [PersembahanController::class, 'destroy']);

//Khotbah
Route::get('/khotbah', [KhotbahController::class, 'index']);
Route::get('/khotbah/create', [KhotbahController::class, 'create']);
Route::post('/khotbah/store' ,[KhotbahController::class, 'store']);
Route::get('/khotbah/{id_khotbah}/edit', [KhotbahController::class, 'edit']);
Route::put('/khotbah/{id_khotbah}', [KhotbahController::class, 'update']);
Route::delete('/khotbah/{id_khotbah}', [KhotbahController::class, 'destroy']);
Route::get('khotbahPdf', [KhotbahController::class,'generatePdf'])->name('cetakPdf');

//Pengurus
Route::get('/pengurus', [PengurusController::class, 'index']);
Route::get('/pengurus/create', [PengurusController::class, 'create']);
Route::post('/pengurus/store' ,[PengurusController::class, 'store']);
Route::get('/pengurus/{id_pengurus}/edit', [PengurusController::class, 'edit']);
Route::put('/pengurus/{id_pengurus}', [PengurusController::class, 'update']);
Route::delete('/pengurus/{id_pengurus}', [PengurusController::class, 'destroy']);

