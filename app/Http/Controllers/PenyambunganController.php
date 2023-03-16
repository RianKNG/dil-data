<?php

namespace App\Http\Controllers;

use App\Models\Sambung;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class PenyambunganController extends Controller
{
    //query builder
    public function index(Request $request)
    {
        $data = DB::table('sambung as d')
    ->select([
        'd.*','m.nama_sekarang','m.status'
    ])
    ->join('tbl_dil as m',function($join){
        $join->on('m.id','=','d.id_dil');
    })
   ;

        $start_date = date('Y-m-d 00:00:00', strtotime($request->get('start_date')));

$end_date = date('Y-m-d 23:59:59', strtotime($request->get('end_date')));


if($request->has('start_date')) 
{

       $data->where('tanggal_sambung', '>=', $start_date);
}

if ($request->has('end_date')) 
{
       $data->where('tanggal_sambung', '<=', $end_date);
}

$data = $data->get();
//elequent
       
        // if (request()->start_date || request()->end_date) {
        //     $start_date = Carbon::parse(request()->start_date)->toDateTimeString();
        //     $end_date = Carbon::parse(request()->end_date)->toDateTimeString();
        //     $data = DB::table('sambung as d')
        //     ->select([
        //         'd.*','m.nama_sekarang','m.status'
        //     ])
        //     ->join('tbl_dil as m',function($join){
        //         $join->on('m.id','=','d.id_dil');
        //     })
        //     ->whereDate('when', $start_date)->where('when', '>', $end_date)->get();
        // } else {
        //     $data = DB::table('sambung as d')
        //     ->select([
        //         'd.*','m.nama_sekarang','m.status'
        //     ])
        //         ->join('tbl_dil as m',function($join){
        //             $join->on('m.id','=','d.id_dil');
        //         })
        //         ->get();
        // }
        
        // $data = DB::table('sambung')
        // ->leftJoin('tbl_dil','sambung.id_dil','=','tbl_dil.id')
        //  ->select('sambung.id','sambung.tanggal_sambung','sambung.alasan','sambung.id_dil','tbl_dil.nama_sekarang','tbl_dil.dusun')
        //  ->orderBy('id','desc')
        //  ->paginate(5);
        // //    ->get();
        // dd($data);
        // $data = DB::table('sambung as s')
        // ->select([
        //         's.*','d.*'
        //     ])
        //         ->join('tbl_dil as d',function($join){
        //             $join->on('d.id','=','s.id_dil');
        //             // ->where('d.cabang','=',2);
        //         })
        //         ->latest()
        //         ->get();
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
    public function search(Request $request)
    {
        $keyword = $request->search;
        $data = Sambung::where('alasan', 'like', "%" . $keyword . "%")->get();
        return view('penyambungan.v_sambung',compact('data')); 
    }
}
