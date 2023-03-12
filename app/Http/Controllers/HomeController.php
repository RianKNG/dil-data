<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Sambung;
use App\Models\Penutupan;
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
      Penutupan::all();
      Sambung::all();
            
      $coba = Sambung::all();
      $categories = [];
      foreach($coba as $mp){
        $categories[] = $mp->tanggal_sambung;

      }
      

      // dd(json_encode($categories));
      $datahitungdil = DB::table('tbl_dil as a')
      ->join('merek as b','b.id','=','a.id_merek')
       ->select('a.*','b.*');
          $datadil = $datahitungdil
          // ->where('status','=',1) 
          ->whereMonth('a.created_at', Carbon::now()->month)
          ->count();

              $datahitung = DB::table('penutupan as a')
              ->join('tbl_dil as b','a.id_dil','=','b.id')
               ->select('a.*','b.status','b.nama_sekarang','b.nama_pemilik','b.id_merek','b.segel','b.cabang');
                  $data = $datahitung
                  ->where('b.status','=',1) 
                  ->whereMonth('tanggal_tutup', Carbon::now()->month)
                  ->count();
              $datahitungp = DB::table('sambung as t')
              ->join('tbl_dil as h','h.id','=','t.id_dil')
               ->select('t.*','h.*');
              
                  $dataz = $datahitungp
                  ->where('status','=',1) 
                  ->whereMonth('tanggal_sambung', Carbon::now()->month)
                  ->count();
                  // ->get();
                  // dd($dataz);
              $datahitunggan = DB::table('ganti as a')
              ->join('tbl_dil as b','a.id_dil','=','b.id')
               ->select('a.*','b.*');
                  $datagan = $datahitunggan
                  ->where('b.status','=',1) 
                  ->whereMonth('tanggal_ganti', Carbon::now()->month)
                  ->count();

            $datahitungtanggat = DB::table('penutupan as a')
              ->join('tbl_dil as b','a.id_dil','=','b.id')
               ->select('a.*','b.status','b.nama_sekarang','b.nama_pemilik','b.id_merek','b.segel','b.cabang');
              $datat = $datahitungtanggat
              ->select(DB::raw('count(b.id) as d'))
              // ->whereMonth('tanggal_tutup', Carbon::now()->month)
              ->groupBy(DB::raw("Month(tanggal_tutup)"))
              // ->where('status','=','1')
              ->pluck('d');
              //  return view('v_home',compact('data','datat'));
              // penyambungan
              // dd($datat);
            $datahitungtanggas = DB::table('sambung as a')
              ->join('tbl_dil as b','a.id_dil','=','b.id')
               ->select('a.*','b.*');
              $datas = $datahitungtanggas
              ->select(DB::raw('count(b.id) as e'))
              // ->select(DB::raw("DATE_FORMAT(tanggal_sambung,'%M %Y') as months"),)
              // ->whereMonth('tanggal_sambung', Carbon::now()->month)
              ->groupBy(DB::raw("DATE_FORMAT(tanggal_sambung,'%M %Y')"),)
              // ->where('status','=','1')
              ->pluck('e');
              // dd($datas);
            $datahitunggan = DB::table('ganti as s')
              ->join('tbl_dil as b','b.id','=','s.id_dil')
               ->select('s.*','b.*');
              $datac = $datahitunggan
              ->select(DB::raw('count(s.id) as e'))
              // ->whereMonth('tanggal_sambung', Carbon::now()->month)
              ->groupBy(DB::raw("Month(tanggal_ganti)"))
              // ->where('status','=','1')
              ->pluck('e');
              // ->get();
              // dd($datac);
              $data = 3;
            $datahitunggan = DB::table('bbn as s')
              ->join('tbl_dil as b','b.id','=','s.id_dil')
               ->select('s.*','b.*');
              $datad = $datahitunggan
              ->select(DB::raw('count(s.id) as e'))
              // ->whereMonth('tanggal_sambung', Carbon::now()->month)
               ->groupBy(DB::raw("Month(tanggal_bbn)"));
              // ->where('status','=','1')
              // ->pluck('e');
              // ->get();
              // dd($datad);
            
               return view('v_home',compact('datadil','data','dataz','datat','datas','datagan','datac','datad','categories'));
    }
     public function test()
     {
      $datahitungh = DB::table('sambung as t')
      ->join('tbl_dil as h','h.id','=','t.id_dil')
       ->select('t.*','h.*');
      
          $datalaporan = $datahitungh
          ->where('status','=',1) 
          ->whereMonth('tanggal_sambung', Carbon::now()->month)
          ->count();
          // ->get();
          // dd($dataz);
      return view('test',compact('datalaporan'));
    }
}
