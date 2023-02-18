<?php

namespace App\Http\Controllers;

use App\Models\Sambung;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenyambunganController extends Controller
{
    public function index()
    {
        $data = DB::table('sambung')
        ->leftJoin('tbl_dil','sambung.id_dil','=','tbl_dil.id')
        // jangan select id parentnya karena akan terpanggil parent nya
         ->select('sambung.id','sambung.tanggal_sambung','sambung.alasan','sambung.id_dil','tbl_dil.status','tbl_dil.nama','tbl_dil.alamat','tbl_dil.id_merek')
        //  ->orderBy('id','desc')
        //  ->paginate(5);
           ->get();
        // dd($data);
        return view('penyambungan.v_sambung',compact('data')); 
    }
}
