<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Sambung;
use App\Models\Penutupan;
use App\Models\Bbn;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\ElseIf_;
use Illuminate\Support\Facades\DB;
use App\Helpers\Helper;
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
     Bbn::all();
            
      $coba = Sambung::all();
      $categories = [];
      foreach($coba as $mp){
        $categories[] = $mp->tanggal_sambung;

      }
      //data DIL baru
       $databill = DB::table('tbl_dil as a')
        // ->where('status','=',1) 
        ->whereMonth('tanggal_pasang', Carbon::now()->month)
        ->get();
        $databilling =  $databill
        ->count();
        
      //data penutupan
      $jumlahtutup = DB::table('penutupan as a')
      ->join('tbl_dil as b','a.id_dil','=','b.id')
        ->select('a.*','b.*')
        ->whereMonth('tanggal_tutup', Carbon::now()->month)
        ->get();
        $datatutupjumlah = $jumlahtutup
        ->count();

      //data Penyambungan
      $datahitungp = DB::table('sambung as t')
        ->join('tbl_dil as h','h.id','=','t.id_dil')
        ->select('t.*','h.*')
        ->whereMonth('tanggal_sambung', Carbon::now()->month)
        ->get();
      $dataz = $datahitungp
          ->count();
          
      //data Penggantian
      $datahitunganganti = DB::table('ganti as a')
      ->join('tbl_dil as b','a.id_dil','=','b.id')
       ->select('a.*','b.*')
       ->whereMonth('tanggal_ganti', Carbon::now()->month)
       ->get();
      $datatest = $datahitunganganti
          ->count();
          
      //untuk BBN
      $datahitungan = DB::table('bbn as h')
        ->join('tbl_dil as t','h.id_dil','=','t.id')
        ->select('t.*','h.*')
        ->whereMonth('tanggal_bbn', Carbon::now()->month)
        ->get();
        $datat = $datahitungan
        ->count();
        
      //untuk Pelanggan Aktip
      $datajum = DB::table('tbl_dil as a')
      ->whereStatus('1')
        ->get();
          $jumlahdil = $datajum->count();
         
       //untuk Pelanggan Non Aktip
       $datanon = DB::table('tbl_dil as a')
       ->whereStatus('0')
         ->get();
           $jumlahnon = $datanon->count();

      //untuk Total Dil
       $totdil = DB::table('tbl_dil as a')
         ->get();
           $totdilcount = $totdil->count();


               //data Grafik DIL baru
            $grafik1 = DB::table('tbl_dil')->whereMonth('tanggal_file','01')->count();
            $grafik2 = DB::table('tbl_dil')->whereMonth('tanggal_file','02')->count();
            $grafik3 = DB::table('tbl_dil')->whereMonth('tanggal_file','03')->count();
            $grafik4 = DB::table('tbl_dil')->whereMonth('tanggal_file','04')->count();
            $grafik5 = DB::table('tbl_dil')->whereMonth('tanggal_file','05')->count();
            $grafik6 = DB::table('tbl_dil')->whereMonth('tanggal_file','06')->count();
            $grafik7 = DB::table('tbl_dil')->whereMonth('tanggal_file','07')->count();
            $grafik8 = DB::table('tbl_dil')->whereMonth('tanggal_file','08')->count();
            $grafik9 = DB::table('tbl_dil')->whereMonth('tanggal_file','09')->count();
            $grafik10 = DB::table('tbl_dil')->whereMonth('tanggal_file','10')->count();
            $grafik11 = DB::table('tbl_dil')->whereMonth('tanggal_file','11')->count();
            $grafik12 = DB::table('tbl_dil')->whereMonth('tanggal_file','12')->count();

            $tutup1 = DB::table('penutupan')->whereMonth('tanggal_tutup','01')->count();
            $tutup2 = DB::table('penutupan')->whereMonth('tanggal_tutup','02')->count();
            $tutup3 = DB::table('penutupan')->whereMonth('tanggal_tutup','03')->count();
            $tutup4 = DB::table('penutupan')->whereMonth('tanggal_tutup','04')->count();
            $tutup5 = DB::table('penutupan')->whereMonth('tanggal_tutup','05')->count();
            $tutup6 = DB::table('penutupan')->whereMonth('tanggal_tutup','06')->count();
            $tutup7 = DB::table('penutupan')->whereMonth('tanggal_tutup','07')->count();
            $tutup8 = DB::table('penutupan')->whereMonth('tanggal_tutup','08')->count();
            $tutup9 = DB::table('penutupan')->whereMonth('tanggal_tutup','09')->count();
            $tutup10 = DB::table('penutupan')->whereMonth('tanggal_tutup','10')->count();
            $tutup11 = DB::table('penutupan')->whereMonth('tanggal_tutup','11')->count();
            $tutup12 = DB::table('penutupan')->whereMonth('tanggal_tutup','12')->count();

            $sambung1 = DB::table('sambung')->whereMonth('tanggal_sambung','01')->count();
            $sambung2 = DB::table('sambung')->whereMonth('tanggal_sambung','02')->count();
            $sambung3 = DB::table('sambung')->whereMonth('tanggal_sambung','03')->count();
            $sambung4 = DB::table('sambung')->whereMonth('tanggal_sambung','04')->count();
            $sambung5 = DB::table('sambung')->whereMonth('tanggal_sambung','05')->count();
            $sambung6 = DB::table('sambung')->whereMonth('tanggal_sambung','06')->count();
            $sambung7 = DB::table('sambung')->whereMonth('tanggal_sambung','07')->count();
            $sambung8 = DB::table('sambung')->whereMonth('tanggal_sambung','08')->count();
            $sambung9 = DB::table('sambung')->whereMonth('tanggal_sambung','09')->count();
            $sambung10 = DB::table('sambung')->whereMonth('tanggal_sambung','10')->count();
            $sambung11 = DB::table('sambung')->whereMonth('tanggal_sambung','11')->count();
            $sambung12 = DB::table('sambung')->whereMonth('tanggal_sambung','12')->count();

            $ganti1 = DB::table('ganti')->whereMonth('tanggal_ganti','01')->count();
            $ganti2 = DB::table('ganti')->whereMonth('tanggal_ganti','02')->count();
            $ganti3 = DB::table('ganti')->whereMonth('tanggal_ganti','03')->count();
            $ganti4 = DB::table('ganti')->whereMonth('tanggal_ganti','04')->count();
            $ganti5 = DB::table('ganti')->whereMonth('tanggal_ganti','05')->count();
            $ganti6 = DB::table('ganti')->whereMonth('tanggal_ganti','06')->count();
            $ganti7 = DB::table('ganti')->whereMonth('tanggal_ganti','07')->count();
            $ganti8 = DB::table('ganti')->whereMonth('tanggal_ganti','08')->count();
            $ganti9 = DB::table('ganti')->whereMonth('tanggal_ganti','09')->count();
            $ganti10 = DB::table('ganti')->whereMonth('tanggal_ganti','10')->count();
            $ganti11 = DB::table('ganti')->whereMonth('tanggal_ganti','11')->count();
            $ganti12 = DB::table('ganti')->whereMonth('tanggal_ganti','12')->count();
            
             
              

               return view('v_home',compact(
                 'grafik1',
                 'grafik2',
                 'grafik3',
                 'grafik4',
                 'grafik5',
                 'grafik6',
                 'grafik7',
                 'grafik8',
                 'grafik9',
                 'grafik10',
                 'grafik11',
                 'grafik12',
                 //tutup
                 'tutup1',
                 'tutup2',
                 'tutup3',
                 'tutup4',
                 'tutup5',
                 'tutup6',
                 'tutup7',
                 'tutup8',
                 'tutup9',
                 'tutup10',
                 'tutup11',
                 'tutup12',
                 //samubng
                 'sambung1',
                 'sambung2',
                 'sambung3',
                 'sambung4',
                 'sambung5',
                 'sambung6',
                 'sambung7',
                 'sambung8',
                 'sambung9',
                 'sambung10',
                 'sambung11',
                 'sambung12',
                  //ganti
                  'ganti1',
                  'ganti2',
                  'ganti3',
                  'ganti4',
                  'ganti5',
                  'ganti6',
                  'ganti7',
                  'ganti8',
                  'ganti9',
                  'ganti10',
                  'ganti11',
                  'ganti12',
                  'databill',
                  'databilling',
                  'jumlahtutup',
                  'datatutupjumlah',
                  'datahitungp',
                  'dataz',
                  'datahitunganganti',
                  'datatest',
                  'datahitungan',
                  'totdil',
                  'totdilcount',
                  'datanon','jumlahnon',
                  'coba',
                  'datat',
                  'categories',
                  'jumlahdil'));
                 
                 
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
