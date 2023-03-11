<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ganti;
use Illuminate\Support\Facades\DB;

class PenggantianController extends Controller
{
    public function index()
    {
        $data = DB::table('ganti as a')
        ->select([
                'a.*','d.*'
            ])
                ->join('tbl_dil as d',function($join){
                    $join->on('d.id','=','a.id_dil');
                    // ->where('d.cabang','=',2);
                })
                ->get();
        return view('penggantian.v_index',compact('data'));
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
}
