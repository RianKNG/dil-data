<?php

use Illuminate\Support\Facades\Route;




use App\Http\Controllers\DilController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PenutupanController;
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
Route::get('/dil', [DilController::class,'index'])->name('dil');
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
//Penyambungan
Route::get('/penyambungan', [PenyambunganController::class,'index'])->name('penyambungan');
// Route::get('/penutupan/add', [PenyambunganController::class,'add']);
// Route::get('/penutupan/hapus/{id}', [PenyambunganController::class,'hapus']);
// Route::get('/penutupan/edit/{id}',[PenyambunganController::class,'edit']);
// Route::post('/penutupan/update/{id}',[PenyambunganController::class,'update']);




