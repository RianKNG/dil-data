<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\Bbn;
use App\Models\Sambung;
use App\Models\DilModel;
use App\Models\Penutupan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AccesoriesController extends Controller
{

    public function index()
    {
             $ada = DB::table('tbl_dil')->where('segel','ada')->count();
             $tidakada = DB::table('tbl_dil')->where('segel','tidak ada')->count();
             $sada = DB::table('tbl_dil')->where('stop_kran','ada')->count();
             $stidakada = DB::table('tbl_dil')->where('stop_kran','tidak ada')->count();
             $cada = DB::table('tbl_dil')->where('ceck_valve','ada')->count();
             $ctidakada = DB::table('tbl_dil')->where('ceck_valve','tidak ada')->count();
             $kada = DB::table('tbl_dil')->where('kopling','ada')->count();
             $ktidakada = DB::table('tbl_dil')->where('kopling','tidak ada')->count();
             $pada = DB::table('tbl_dil')->where('plugran','ada')->count();
             $ptidakada = DB::table('tbl_dil')->where('plugran','tidak ada')->count();
             $bada = DB::table('tbl_dil')->where('box','ada')->count();
             $btidakada = DB::table('tbl_dil')->where('box','tidak ada')->count();
             $rada = DB::table('tbl_dil')->where('status_milik','sewa')->count();
             $rtidakada = DB::table('tbl_dil')->where('status_milik','Hak Milik')->count();
             $semuapelanggan = DB::table('tbl_dil')->count();
             

        return view('accesories.index',compact('rada','rtidakada','ada','tidakada','sada','stidakada','cada','ctidakada','kada','ktidakada','pada','ptidakada','bada','btidakada','semuapelanggan'));
    }
    public function tidakada(Request $request)
    {
       
            $tsegel = DB::table('tbl_dil as a')
            ->select(DB::raw("(a.cabang)  as `cabang` "))
            ->groupBy(DB::raw("cabang"))
            ->where('segel','=','tidak ada')
            ->pluck('cabang');
            
            $ttsegel = DB::table('tbl_dil as a')
            ->select(DB::raw("count(a.segel)  as `segel` "))
            ->groupBy(DB::raw("cabang"))
            ->where('segel','=','tidak ada')
            ->pluck('segel');
            
      
        return view('accesories.indextidakada',compact('tsegel','ttsegel'));
    }
    public function ada(Request $request)
    {
       
            $tsegel1 = DB::table('tbl_dil as a')
            ->select(DB::raw("(a.cabang)  as `cabang` "))
            ->groupBy(DB::raw("cabang"))
            ->where('segel','=','ada')
            ->pluck('cabang');
            
            $ttsegel11 = DB::table('tbl_dil as a')
            ->select(DB::raw("count(a.segel)  as `segel` "))
            ->groupBy(DB::raw("cabang"))
            ->where('segel','=','ada')
            ->pluck('segel');
            // return $request->all();
            // $dil = DilModel::all();
      
            return view('accesories.indexada',compact('tsegel1','ttsegel11'));
    }
    public function stidakada(Request $request)
    {
       
            $stsegel = DB::table('tbl_dil as a')
            ->select(DB::raw("(a.cabang)  as `cabang` "))
            ->groupBy(DB::raw("cabang"))
            ->where('stop_kran','=','tidak ada')
            ->pluck('cabang');
            
            $sttsegel = DB::table('tbl_dil as a')
            ->select(DB::raw("count(a.segel)  as `segel` "))
            ->groupBy(DB::raw("cabang"))
            ->where('stop_kran','=','tidak ada')
            ->pluck('segel');
            
      
        return view('accesories.indexstada',compact('stsegel','sttsegel'));
    }
    public function sada(Request $request)
    {
       
            $tsegel1 = DB::table('tbl_dil as a')
            ->select(DB::raw("(a.cabang)  as `cabang` "))
            ->groupBy(DB::raw("cabang"))
            ->where('stop_kran','=','ada')
            ->pluck('cabang');
            
            $ttsegel11 = DB::table('tbl_dil as a')
            ->select(DB::raw("count(a.segel)  as `segel` "))
            ->groupBy(DB::raw("cabang"))
            ->where('stop_kran','=','ada')
            ->pluck('segel');
            // return $request->all();
            // $dil = DilModel::all();
      
            return view('accesories.indexsada',compact('tsegel1','ttsegel11'));
    }
    public function cvada(Request $request)
    {
       
            $tsegel1 = DB::table('tbl_dil as a')
            ->select(DB::raw("(a.cabang)  as `cabang` "))
            ->groupBy(DB::raw("cabang"))
            ->where('ceck_valve','=','ada')
            ->pluck('cabang');
            
            $ttsegel11 = DB::table('tbl_dil as a')
            ->select(DB::raw("count(a.segel)  as `segel` "))
            ->groupBy(DB::raw("cabang"))
            ->where('ceck_valve','=','ada')
            ->pluck('segel');
            // return $request->all();
            // $dil = DilModel::all();
      
            return view('accesories.indexcvada',compact('tsegel1','ttsegel11'));
    }
    public function cvtidakada(Request $request)
    {
       
            $stsegel = DB::table('tbl_dil as a')
            ->select(DB::raw("(a.cabang)  as `cabang` "))
            ->groupBy(DB::raw("cabang"))
            ->where('ceck_valve','=','tidak ada')
            ->pluck('cabang');
            
            $sttsegel = DB::table('tbl_dil as a')
            ->select(DB::raw("count(a.segel)  as `segel` "))
            ->groupBy(DB::raw("cabang"))
            ->where('ceck_valve','=','tidak ada')
            ->pluck('segel');
            
        return view('accesories.indexcvtada',compact('stsegel','sttsegel'));
    }
    public function kptada(Request $request)
    {
       
            $segel = DB::table('tbl_dil as a')
            ->select(DB::raw("(a.cabang)  as `cabang` "))
            ->groupBy(DB::raw("cabang"))
            ->where('kopling','=','ada')
            ->pluck('cabang');
            
            $segel1 = DB::table('tbl_dil as a')
            ->select(DB::raw("count(a.segel)  as `segel` "))
            ->groupBy(DB::raw("cabang"))
            ->where('kopling','=','ada')
            ->pluck('segel');
            // return $request->all();
            // $dil = DilModel::all();
      
            return view('accesories.indexkpada',compact('segel','segel1'));
    }
    public function kpada(Request $request)
    {
       
            $segel = DB::table('tbl_dil as a')
            ->select(DB::raw("(a.cabang)  as `cabang` "))
            ->groupBy(DB::raw("cabang"))
            ->where('kopling','=','tidak ada')
            ->pluck('cabang');
            
            $segel1 = DB::table('tbl_dil as a')
            ->select(DB::raw("count(a.segel)  as `segel` "))
            ->groupBy(DB::raw("cabang"))
            ->where('kopling','=','tidak ada')
            ->pluck('segel');
            
        return view('accesories.indexkptada',compact('segel','segel1'));
    }
    public function pkada(Request $request)
    {
       
            $segel = DB::table('tbl_dil as a')
            ->select(DB::raw("(a.cabang)  as `cabang` "))
            ->groupBy(DB::raw("cabang"))
            ->where('plugran','=','ada')
            ->pluck('cabang');
            
            $segel1 = DB::table('tbl_dil as a')
            ->select(DB::raw("count(a.segel)  as `segel` "))
            ->groupBy(DB::raw("cabang"))
            ->where('plugran','=','ada')
            ->pluck('segel');
            // return $request->all();
            // $dil = DilModel::all();
      
            return view('accesories.indexpktada',compact('segel','segel1'));
    }
    public function pktada(Request $request)
    {
       
            $segel = DB::table('tbl_dil as a')
            ->select(DB::raw("(a.cabang)  as `cabang` "))
            ->groupBy(DB::raw("cabang"))
            ->where('plugran','=','tidak ada')
            ->pluck('cabang');
            
            $segel1 = DB::table('tbl_dil as a')
            ->select(DB::raw("count(a.segel)  as `segel` "))
            ->groupBy(DB::raw("cabang"))
            ->where('plugran','=','tidak ada')
            ->pluck('segel');
            
        return view('accesories.indexpkada',compact('segel','segel1'));
    }
    public function bxtada(Request $request)
    {
       
            $segel = DB::table('tbl_dil as a')
            ->select(DB::raw("(a.cabang)  as `cabang` "))
            ->groupBy(DB::raw("cabang"))
            ->where('box','=','ada')
            ->pluck('cabang');
            
            $segel1 = DB::table('tbl_dil as a')
            ->select(DB::raw("count(a.segel)  as `segel` "))
            ->groupBy(DB::raw("cabang"))
            ->where('box','=','ada')
            ->pluck('segel');
            // return $request->all();
            // $dil = DilModel::all();
      
            return view('accesories.indexbxtada',compact('segel','segel1'));
    }
    public function bxada(Request $request)
    {
       
            $segel = DB::table('tbl_dil as a')
            ->select(DB::raw("(a.cabang)  as `cabang` "))
            ->groupBy(DB::raw("cabang"))
            ->where('box','=','tidak ada')
            ->pluck('cabang');
            
            $segel1 = DB::table('tbl_dil as a')
            ->select(DB::raw("count(a.segel)  as `segel` "))
            ->groupBy(DB::raw("cabang"))
            ->where('box','=','tidak ada')
            ->pluck('segel');
            
        return view('accesories.indexbxada',compact('segel','segel1'));
    }
    public function rada(Request $request)
    {
       
            $segel = DB::table('tbl_dil as a')
            ->select(DB::raw("(a.cabang)  as `cabang` "))
            ->groupBy(DB::raw("cabang"))
            ->where('status_milik','=','Hak Milik')
            ->pluck('cabang');
            
            $segel1 = DB::table('tbl_dil as a')
            ->select(DB::raw("count(a.segel)  as `segel` "))
            ->groupBy(DB::raw("cabang"))
            ->where('status_milik','=','Hak Milik')
            ->pluck('segel');
            // return $request->all();
            // $dil = DilModel::all();
      
            return view('accesories.indexrtada',compact('segel','segel1'));
    }
    public function rtada(Request $request)
    {
       
            $segel = DB::table('tbl_dil as a')
            ->select(DB::raw("(a.cabang)  as `cabang` "))
            ->groupBy(DB::raw("cabang"))
            ->where('status_milik','=','sewa')
            ->pluck('cabang');
            
            $segel1 = DB::table('tbl_dil as a')
            ->select(DB::raw("count(a.segel)  as `segel` "))
            ->groupBy(DB::raw("cabang"))
            ->where('status_milik','=','sewa')
            ->pluck('segel');
            
        return view('accesories.indexrada',compact('segel','segel1'));
    }
    public function all(Request $request)
    {
       
            $datacabang = DB::table('tbl_dil as a')
            ->select(DB::raw("(a.cabang)  as `cabang` "))
            ->groupBy(DB::raw("cabang"))
                ->where('status',1)
            ->pluck('cabang');
        //     dd($datacabang);
            $jumlahdatacabang = DB::table('tbl_dil as a')
            ->select(DB::raw("count(*)  as `all` "))
            ->groupBy(DB::raw("a.cabang"))
                ->where('status',1)
            ->pluck('all');
        //     dd($jumlahdatacabang);
        return view('accesories.all',compact('datacabang','jumlahdatacabang'));
    }
    

}
