<?php

namespace App\Http\Controllers;

use App\Models\Sambung;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenyambunganController extends Controller
{
    public function index()
    {
        // $data = DB::table('sambung')
        // ->leftJoin('tbl_dil','sambung.id_dil','=','tbl_dil.id')
        //  ->select('sambung.id','sambung.tanggal_sambung','sambung.alasan','sambung.id_dil','tbl_dil.nama_sekarang','tbl_dil.dusun')
        //  ->orderBy('id','desc')
        //  ->paginate(5);
        // //    ->get();
        // dd($data);
        $data = DB::table('sambung as s')
        ->select([
                's.*','d.*'
            ])
                ->join('tbl_dil as d',function($join){
                    $join->on('d.id','=','s.id_dil');
                    // ->where('d.cabang','=',2);
                })
                ->get();
                // dd($data);
                // ->get();
        return view('penyambungan.v_sambung',compact('data')); 
    }
    public function add()
    {
        return view('penyambungan.v_sambung');
    }
    public function insert(Request $request)
    {
        Sambung::create($request->all());
        return redirect('penyambungan')->with('success','data berhsil ditambahkan');
    }
}
