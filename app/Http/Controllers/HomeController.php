<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Sambung;
use App\Models\Penutupan;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\ElseIf_;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

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
    public function index(Request $request)
    {
      Penutupan::all();
      Sambung::all();
            
      $coba = Sambung::all();
      $categories = [];
      foreach($coba as $mp){
        $categories[] = $mp->tanggal_sambung;

      }
      //data DIL baru
       $databill = DB::table('tbl_dil as a')
       //sementara
        // ->where('status','=',1) 
        ->whereMonth('tanggal_pasang', Carbon::now()->month)
        ->get();
        
      // $databill = DB::table('penutupan as a')
      // ->join('tbl_dil as b','a.id_dil','=','b.id')
     //sementara
      //   ->select('a.*','b.*')
      //   // ->where('bln_billing','=',4) 
      //   ->get();
        // return($databill);
        $databilling =  $databill
        ->count();
        // dd($databilling);
      $jumlahtutup = DB::table('penutupan as a')
      ->join('tbl_dil as b','a.id_dil','=','b.id')
        ->select('a.*','b.*')
        ->whereMonth('tanggal_tutup', Carbon::now()->month)
        ->get();
       
        $datatutupjumlah=  $jumlahtutup
        ->count();

      //data penutupan
      $datahitungtanggat = DB::table('penutupan as a')
        ->join('tbl_dil as b','a.id_dil','=','b.id')
        ->select('a.*','b.status','b.nama_sekarang','b.nama_pemilik','b.id_merek','b.segel','b.cabang');
      $datat = $datahitungtanggat
          ->select(DB::raw('count(b.id) as d'))
          // ->whereMonth('tanggal_tutup', Carbon::now()->month)
          ->groupBy(DB::raw("Month(tanggal_tutup)"))
          // ->where('status','=','1')
          ->pluck('d');
         
          
      
      //data Penyambungan
      $datahitungp = DB::table('sambung as t')
        ->join('tbl_dil as h','h.id','=','t.id_dil')
        ->select('t.*','h.*');
      $dataz = $datahitungp
          ->where('status','=',1) 
          ->whereMonth('tanggal_sambung', Carbon::now()->month)
          ->count();
          
      //data Penggantian
      $datahitunggan = DB::table('ganti as a')
      ->join('tbl_dil as b','a.id_dil','=','b.id')
       ->select('a.*','b.*');
          $datagan = $datahitunggan
          ->where('b.status','=',1) 
          ->whereMonth('tanggal_ganti', Carbon::now()->month)
          ->count();
      
      //data Jumlah DIL
      $datajum = DB::table('tbl_dil as a')
        ->get();
          $jumlahdil = $datajum->count();

      //untuk BBN
      $datahitunggan = DB::table('bbn as s')
      // ->join('tbl_dil as b','b.id','=','s.id_dil')
       ->select('s.*');
      $datad = $datahitunggan
      // ->select(DB::raw('count(s.id) as e'))
      ->whereMonth('tanggal_bbn', Carbon::now()->month)
      //  ->groupBy(DB::raw("Month(tanggal_bbn)"))
      // ->where('status','=','1')
      // ->pluck('e');
      ->count();
      // dd($datad);
    

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

            //tabel penyambungan
            $datas = DB::table('sambung as a')
              ->join('tbl_dil as b','a.id_dil','=','b.id')
              //  ->select('a.stat','b.*');
              // $datas = $datahitungtanggas
              ->select(DB::raw('count(b.id) as total_sambung'))
              // ->select(DB::raw("DATE_FORMAT(tanggal_sambung,'%M %Y') as months"),)
              // ->whereMonth('tanggal_sambung', Carbon::now()->month)
              // ->groupBy(DB::raw("DATE_FORMAT(tanggal_sambung,'%M %Y')"),)
              ->groupBy(DB::raw("Month(tanggal_sambung)"))
              
              ->where('status','=','1')
              ->pluck('total_sambung');
              // ->get();
              $cobacabang = DB::table('sambung as a')
              ->join('tbl_dil as b','a.id_dil','=','b.id')
              // ->select(DB::raw("b.cabang as cabang",))
              ->select(DB::raw("(  (count(b.cabang)  ) )  as `cabang` "))
              ->groupBy(DB::raw("cabang"))
              // ->groupBy(DB::raw("MonthName(tanggal_sambung)"))
              ->pluck('cabang');
              // ->get();
              
          //  dd($cobacabang);
              

              // $monthsArray=[1,2,3,4,5,6,7,8,9,10,11,12];
              // $now = Carbon::now();
                // $cobaa = ['January','February','April'];
              // $startMonth = Carbon::now()->addMonth($now)->day(1)->format("Y-m-d");
              // dd($startMonth);
              $coba = DB::table('sambung as a')
              ->join('tbl_dil as b','a.id_dil','=','b.id')
              ->select(DB::raw("MonthName(tanggal_sambung) as bulan"))
              ->groupBy([DB::raw("MonthName(tanggal_sambung)")])
              ->orderBy('bulan')
              // ->pluck('bulan');
              ->pluck('bulan');
              // $coba=array_map(
              //   function($monthNumber){
              //        return date("F", mktime(0, 0, 0, $monthNumber));
              //        }
              //  ,$monthsArray);
            //   $coba = collect( range(1, $now->month) )->map( function($month) use ($now) {
            //     return Carbon::createFromDate($now->year, $month)->format('F');
            // })->toArray();
             
              // ->toArray($coba);
              // $games =  $coba->merge($cobaa);
          
            
              // dd($coba);
              
           
// dd($coba);
            

            //table penggantian
            $datahitunggan = DB::table('ganti as s')
              ->join('tbl_dil as b','b.id','=','s.id_dil')
               ->select('s.*','b.*');
              $datac = $datahitunggan
              ->select(DB::raw('count(s.id) as e'))
              // ->whereMonth('tanggal_sambung', Carbon::now()->month)
              ->groupBy(DB::raw("Month(tanggal_ganti)"))
              ->pluck('e');
              

               return view('v_home',compact('datatutupjumlah','cobacabang','coba','datadil','data','dataz','datat','datas','datagan','datac','datad','categories','jumlahdil','databill','databilling','jumlahtutup'));
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
