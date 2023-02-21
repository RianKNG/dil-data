<?php

namespace App\Http\Controllers;


use App\Models\DilModel;
use Illuminate\Http\Request;

class DilController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $data = DilModel::where('nama','LIKE','%'.$request->search.'%')
            ->orWhere('nama','LIKE','%'.$request->search.'%')
            ->orWhere('status','LIKE','%'.$request->search.'%')
            ->get();
            //agar has carinya kebawa
            $data->appends($request->all());
        } else {
            $data = DilModel::get();
        }
        
        return view('dil.v_dil', compact('data'));
    }
    public function add()
    {

        return view('dil.v_dil_tambah');

    }
    public function insert(Request $request)
    {
        // ini cara baru tapi mau coba lama dulu
        DilModel::create($request->all());
        
        // ini cara lama
        // $data = new DilModel();
        // $data::create($request->all());
        // dd($data);
        return redirect()->route('dil')->with('success','data berhasil ditambahkan');
        // return view('dil.v_dil', compact('data'));
    }
    public function edit($id)
    {
       // ini cara baru
        $data = DilModel::find($id);
        return view('dil.v_editdil',compact('data'));
    }
    public function update(Request $request,$id)
    {
        $data = DilModel::find($id);
        $data->update($request->all());
        // ini cara lama
        
        return redirect()->route('dil')->with('success','data berhasil diubah');
    }
    public function hapus($id)
    {
        $data = DilModel::find($id);
        $data->delete();
      
        
        return redirect()->route('dil')->with('success','data berhasil hapus');
    }
    public function status($id)
    {
        // $data = DilModel::find($id);
        $data = DilModel::select('status')->where('id',$id)->first();
        if ($data->status == 1) {
            $status = 0;
        } else {
            $status = 1;
        }
        DilModel::where('id',$id)->update(['status'=>$status]);
        // return $data;
    return redirect()->route('dil')->with('success','berhasil diubah');

    }
    public function jumlah(Request $request)
    {
        // $data = DilModel::get();
        // $stok = DilModel::Count('status');
        $data = DilModel::select('status')->sum('status',1);
        
        // dd($data);
       return view('v_home',compact('data'));
    }
  
}
