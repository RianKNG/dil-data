<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
            
             
           
              $datahitung = DB::table('penutupan as a')
              ->join('tbl_dil as b','a.id_dil','=','b.id')
              // jangan select id parentnya karena akan terpanggil parent nya
              // ->select('a.id','a.tanggal_tutup','a.alasan','a.id_dil','b.status','b.nama_sekarang','b.nama_pemilik','b.id_merek','b.segel');
              
               ->select('a.*','b.status','b.nama_sekarang','b.nama_pemilik','b.id_merek','b.segel','b.cabang');
              //  ->get();
              //  ->orderBy('id','desc')
               
                  // ->where('a.tanggal_tutup','=',"2023-03-07")
                  $data = $datahitung
                  ->where('b.status','=',1) 
                  // ->orderBy('tanggal_tutup')
                  // ->where('b.cabang','=', 6) 
                  // oke ini
              //     ->groupBy(function($val) {
              //         return Carbon::parse($val->tanggal_tutup)->format('m');
              //  });
              // sampesini
                  // ->GroupBy(DB::raw("MONTH(tanggal_tutup)"))
                  // ->pluck('datahitung');
                  ->whereMonth('tanggal_tutup', Carbon::now()->month)
      
                  ->count();
                  
              //    dd($data);
                  
                  // return($data);
                  
          //     dd($data, $tanggal);
              $datahitungpeny = DB::table('sambung as a')
              ->join('tbl_dil as b','a.id_dil','=','b.id')
              // jangan select id parentnya karena akan terpanggil parent nya
              // ->select('a.id','a.tanggal_tutup','a.alasan','a.id_dil','b.status','b.nama_sekarang','b.nama_pemilik','b.id_merek','b.segel');
              
               ->select('a.*','b.status','b.nama_sekarang','b.nama_pemilik','b.id_merek','b.segel','b.cabang');
                  $datap = $datahitung
                  ->where('b.nama_sekarang','=','Coba') 
                  ->whereMonth('tanggal_tutup', Carbon::now()->month)
                  ->count();
                  dd($datap);
          return view('v_home',compact('data'));
    }
}
