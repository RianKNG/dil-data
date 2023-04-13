<?php

namespace App\Http\Controllers;

use App\Models\DilModel;
use App\Models\Penutupan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function index(Request $request)
    {
       
        $dil = DB::table('tbl_dil as a')
        ->leftJoin('merek as b','b.id','=','a.id_merek')
        ->leftJoin('penutupan as c','c.id_dil','=','a.id')
        ->leftJoin('ganti as d','d.id_dil','=','a.id')
        ->leftJoin('sambung as e','e.id_dil','=','a.id')

        ->select([
            'a.id','a.cabang','b.merek','c.tanggal_tutup','d.tanggal_ganti','e.tanggal_sambung'
        ])
        
        ->get();
       
        return view('report.index',compact('dil'));
    }
    public function search(Request $request){
        $cabang = $request->cabang;
        $dil = DB::table('tbl_dil as a')
        ->leftJoin('merek as b','b.id','=','a.id_merek')
        ->leftJoin('penutupan as c','c.id_dil','=','a.id')
        ->leftJoin('ganti as d','d.id_dil','=','a.id')
        ->leftJoin('sambung as e','e.id_dil','=','a.id')

        ->select([
            'a.id','a.cabang','b.merek','c.tanggal_tutup','d.tanggal_ganti','e.tanggal_sambung'
        ])
        ->get();
        $dilCount = $dil->count();
        if ($request->cabang==31) {
            $dil = DB::table('tbl_dil as a')
        ->leftJoin('merek as b','b.id','=','a.id_merek')
        ->leftJoin('penutupan as c','c.id_dil','=','a.id')
        ->leftJoin('ganti as d','d.id_dil','=','a.id')
        ->leftJoin('sambung as e','e.id_dil','=','a.id')

        ->select([
            'a.id','a.cabang','b.merek','c.tanggal_tutup','d.tanggal_ganti','e.tanggal_sambung'
        ])
        ->where('cabang','=',31)
        ->get();
        $dilCount = $dil->count();
        } elseif($request->cabang==3) {
            $dil = DB::table('tbl_dil as a')->leftJoin('merek as b','b.id','=','a.id_merek')->leftJoin('penutupan as c','c.id_dil','=','a.id')->leftJoin('ganti as d','d.id_dil','=','a.id')
            ->leftJoin('sambung as e','e.id_dil','=','a.id')
            ->select([
                'a.id','a.cabang','b.merek','c.tanggal_tutup','d.tanggal_ganti','e.tanggal_sambung'
            ])
            ->where('cabang','=',3)
            
            ->get();
            $dilCount = $dil->count();
        }
        return view('report.index',compact('dil','cabang','dilCount'));
    }
   
}
