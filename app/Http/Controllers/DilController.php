<?php

namespace App\Http\Controllers;


use App\Models\DilModel;
use App\Exports\DilExport;
use App\Imports\DilImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;


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
        $this->validate($request,[
          'id' => 'required|unique:tbl_dil,id|min:10|max:10',
          'status' => 'required',
          'no_rekening' => 'required|unique:tbl_dil,no_rekening|min:5|max:5',
          'nama_sekarang' => 'required',
          'nama_pemilik' => 'required',
          'no_rumah' => 'required',
          'rt' => 'required|numeric',
          'rw' => 'required|numeric',
          'blok' => 'required',
          'dusun' => 'required',
          'kecamatan' => 'required',
          'status_milik' => 'required',
          'jml_jiwa_tetap' => 'required|numeric',
          'jml_jiwa_tidak_tetap' => 'required|numeric',
          'tanggal_pasang' => 'required',
          'segel' => 'required',
          'stop_kran' => 'required',
          'ceck_valve' => 'required',
          'kopling' => 'required',
          'plugran' => 'required',
          'box' => 'required',
          'bln_billing' => 'required|min:2|max:2',
          'thn_billing' => 'required|min:4|max:4',
          'sumber_lain' => 'required',
          'jenisusaha' => 'required',
          'id_merek',

        ]);
  
        DilModel::create([
          
          'id' => $request->id,
          'status' => $request->status,
          'no_rekening' => $request->no_rekening,
          'nama_sekarang' => $request->nama_sekarang,
          'nama_pemilik' => $request->nama_pemilik,
          'no_rumah' => $request->no_rumah,
          'rt' => $request->rt,
          'rw' => $request->rw,
          'blok' => $request->blok,
          'dusun' => $request->dusun,
          'kecamatan' => $request->kecamatan,
          'status_milik' => $request->status_milik,
          'jml_jiwa_tetap' => $request->jml_jiwa_tetap,
          'jml_jiwa_tidak_tetap' => $request->jml_jiwa_tidak_tetap,
          'tanggal_pasang' => $request->tanggal_pasang,
          'segel' => $request->segel,
          'stop_kran' => $request->stop_kran,
          'ceck_valve' => $request->ceck_valve,
          'kopling' => $request->kopling,
          'plugran' => $request->plugran,
          'box' => $request->box,
          'bln_billing' => $request->bln_billing,
          'thn_billing' => $request->thn_billing,
          'sumber_lain' => $request->sumber_lain,
          'jenisusaha' => $request->jenisusaha,
          'id_merek' => $request->id_merek,
        ]);
      
        return redirect()->route('dil')->with('success','data berhasil ditambahkan');
      }  
        // ini cara lama
        // $data = new DilModel();
        // $data::create($request->all());
        // dd($data);
        
        // return view('dil.v_dil', compact('data'));

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

   public function exportexcel()
   {
     return Excel::download(new DilExport, 'datadil.xlsx');
   }
   public function importexcel(Request $request)
   {
    $data = $request->file('file');
    $namafile = $data->getClientOriginalName();
    $data->move('Pelanggan',$namafile);

    Excel::import(new DilImport, \public_path('/Pelanggan/'. $namafile));
    return redirect()->back();
   }
}
