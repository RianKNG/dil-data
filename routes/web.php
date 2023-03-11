<?php

use Illuminate\Support\Facades\Auth;




use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WmController;
use App\Http\Controllers\BbnController;
use App\Http\Controllers\DilController;
use App\Http\Controllers\CobaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PenutupanController;
use App\Http\Controllers\PenggantianController;
use App\Http\Controllers\PenyambunganController;
// use App\Http\Controllers\PenyambunganController;

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
//DIL
// Route::get('/', [HomeController::class,'index'])->name('guru');
Route::get('/', [HomeController::class,'index']);
// Route::get('/dil', [DilController::class,'index'])->name('dil');
Route::get('/dil/add', [DilController::class,'add']);
Route::post('/dil/insert', [DilController::class,'insert']);
Route::get('/dil/edit/{id}', [DilController::class,'edit']);
Route::post('/dil/update/{id}', [DilController::class,'update']);
Route::get('/dil/hapus/{id}', [DilController::class,'hapus']);
Route::get('/dil/status/{id}', [DilController::class,'status']);
Route::get('/dil/jumlah', [DilController::class,'jumlah']);

//Penutupan
Route::get('/penutupan', [PenutupanController::class,'index'])->name('penutupan');
Route::post('/penutupan/insert', [PenutupanController::class,'insert']);
Route::get('/penutupan/hapus/{id}', [PenutupanController::class,'hapus']);
Route::get('/penutupan/edit/{id}',[PenutupanController::class,'edit']);
Route::post('/penutupan/update/{id}',[PenutupanController::class,'update']);
Route::get('/penutupan/hitung', [PenutupanController::class,'hitung']);
//Penyambungan
Route::get('/penyambungan', [PenyambunganController::class,'index'])->name('penyambungan');
Route::get('/penyambungan/add', [PenyambunganController::class,'add']);
Route::post('/penyambungan/insert', [PenyambunganController::class,'insert']);
// Route::get('/penutupan/edit/{id}',[PenyambunganController::class,'edit']);
// Route::post('/penutupan/update/{id}',[PenyambunganController::class,'update']);

//bbn
Route::get('/bbn',[BbnController::class,'index'])->name('bbn');
Route::post('/bbn/store', [BbnController::class,'store']);
Route::get('/bbn/add', [BbnController::class,'add']);


Route::get('/coba',[CobaController::class,'index'])->name('coba');


//penggantian
Route::get('/penggantian', [PenggantianController::class,'index'])->name('penggantian');
Route::get('/penggantian/add', [PenggantianController::class,'add']);
Route::post('/penggantian/insert', [PenggantianController::class,'insert']);

//watermeter
Route::get('/watermeter', [WmController::class,'index'])->name('watermeter');
Route::post('/watermeter/insert', [WmController::class,'insert']);
Route::get('/watermeter/hapus/{id}', [WmController::class,'hapus']);


Route::get('/layanan', [LayananController::class,'index'])->name('layanan');
//export
Route::get('/exportexcel', [DilController::class,'exportexcel'])->name('exportexcel');
//import
Route::post('/importexcel', [DilController::class,'importexcel'])->name('importexcel');
//import
Route::get('/exportpdf', [DilController::class,'exportpdf'])->name('exportpdf');







Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/dil', [DilController::class,'index'])->name('dil');  
});