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
            ->leftJoin('penutupan','penutupan.id','=','sambung.id')
            ->leftJoin('tbl_dil','sambung.id_dil','=','tbl_dil.id')
            ->select('sambung.id','sambung.penutupan_id','sambung.tanggal_sambung','sambung.alasan','penutupan.id_dil','penutupan.alasan','penutupan.spk','tbl_dil.nama','tbl_dil.no_sambungan')
           
            
        ->get();
        // dd($data);
        return view('penyambungan.v_sambung',compact('data')); 
    }
}
