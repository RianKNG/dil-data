<?php

namespace App\Http\Controllers;

use App\Models\Penutupan;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenutupanController extends Controller
{
  
    public function index()
    {
            
            $data = DB::table('penutupan')
                   ->leftJoin('tbl_dil','penutupan.id_dil','=','tbl_dil.id')
                   // jangan select id parentnya karena akan terpanggil parent nya
                    ->select('penutupan.id','penutupan.tanggal_tutup','penutupan.alasan','penutupan.id_dil','tbl_dil.status','tbl_dil.nama_sekarang','tbl_dil.nama_pemilik','tbl_dil.id_merek','tbl_dil.segel')
                    ->orderBy('id','desc')
                    ->paginate(5);
        //   dd($data);
        return view('penutupan.index', compact('data'));
    }
    public function add()
    {
        return view('penutupan.v_add');
        
    }
    public function insert(Request $request)
    {
        // ini cara baru tapi mau coba lama dulu
       Penutupan::create($request->all());
        // ini cara lama
        // $data = new DilModel();
        // $data::create($request->all());
        
        return redirect()->route('penutupan')->with('success','data penutupan berhasil ditambahkan');
    }
    public function edit($id)
    {
        $data = Penutupan::find($id);
        return view('penutupan.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = Penutupan::find($id);
        $data->update($request->all());
        return redirect()->route('penutupan')->with('success','data penutupan berhasil dirubah');
    }
    // public function hapus(Penutupan $penutupan)
    // $data = Penutupan::find($penutupan->id);
    public function hapus($id)
    {

        
        $data = Penutupan::find($id);
        $data->delete();

        return redirect()->route('penutupan')->with('success','data penutupan berhasil dithapus');
    }
    // public function index()
    // {
    //     $data = DB::table('penutupan')
    //     ->leftJoin('tbl_dil','penutupan.id_dil','=','tbl_dil.id')
    //     //                // jangan select id nya karena akan terpanggil parent nya
    //     ->select('penutupan.id','tbl_dil.no_sambungan','tbl_dil.nama')
    //     ->get();
    //     $dataa = DB::table('penutupan')
    //     ->leftJoin('tbl_dil','penutupan.id_dil','=','tbl_dil.id')
    //     // jangan select id nya karena akan terpanggil parent nya
    //      ->select('tbl_dil.id')
    //      ->get();
    //     $datab = DB::table('penutupan')
    //     ->leftJoin('tbl_dil','penutupan.id_dil','=','tbl_dil.id')
    //     // jangan select id nya karena akan terpanggil parent nya
    //     ->select('penutupan.id','tbl_dil.no_sambungan','tbl_dil.nama')
    //      ->get();
    //   if ($dataa == $datab) {
    
    //   } 
    // return view('penutupan.index', compact('data','dataa','datab'));
         
    // }
    
}
