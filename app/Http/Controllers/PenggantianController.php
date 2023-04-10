<?php

namespace App\Http\Controllers;

use App\Models\Ganti;
use App\Models\Merek;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenggantianController extends Controller
{
    public function index(Request $request)
    
    {

        if ($request->has('search')) {
            $mer = Merek::all();
            $data = DB::table('ganti AS d')
            ->leftJoin('merek as m','d.id_merek','=','m.id')
            ->leftJoin('tbl_dil as n','d.id_dil','=','n.id')
            ->select([
                'd.id','d.tanggal_ganti','d.no_wmbaru','d.id_dil','d.id_merek'
            ])
            ->where('id_dil','LIKE','%'.$request->search.'%')
            ->get();
                   
        } else {
            $mer = Merek::all();
            $data = DB::table('ganti AS d')
            ->leftJoin('merek as m','d.id_merek','=','m.id')
            ->leftJoin('tbl_dil as n','d.id_dil','=','n.id')
            ->select([
                'd.id','d.tanggal_ganti','d.no_wmbaru','d.id_dil','d.id_merek'
            ])
    
            ->get();
        }
        
        // $data = DB::table('ganti as a')
        // ->select([
        //         'a.*','d.*'
        //     ])
        //         ->join('tbl_dil as d',function($join){
        //             $join->on('d.id','=','a.id_dil');
        //             // ->where('d.cabang','=',2);
        //         })
        //         ->get();
    

        return view('penggantian.v_index',compact('data','mer'));
    }
    public function add()
    {
        return view('penggantian.v_penggantian');
    }
    public function insert(Request $request)
    {
        
        Ganti::create($request->all());
        return redirect('penggantian')->with('success','data berhasil di tambahkan');
    }
    public function hapus($id)
    {

        
        $data = ganti::find($id);
      
        $data->delete();
       

        return redirect()->route('penggantian')->with('success','data d berhasil dithapus');
    }
}
