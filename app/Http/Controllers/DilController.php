<?php

namespace App\Http\Controllers;


use App\Models\Merek;
use App\Models\DilModel;
use PDF;
use App\Exports\DilExport;
use App\Imports\DilImport;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;


class DilController extends Controller
{
    public function index(Request $request)
   
    {

        // sudah oke jangan dihapus
            $data = DB::table('tbl_dil')
            ->leftJoin('merek','tbl_dil.id_merek','=','merek.id')
            ->select('tbl_dil.id','tbl_dil.cabang','tbl_dil.no_rekening','tbl_dil.status','tbl_dil.nama_sekarang','tbl_dil.nama_pemilik','tbl_dil.jml_jiwa_tetap',
            'tbl_dil.jml_jiwa_tidak_tetap',
            'tbl_dil.tanggal_pasang','tbl_dil.id_merek','merek.merek')
            ->get();
           
        return view('dil.v_dil', compact('data'));
    }
    public function add()
    {
        $mer = Merek::all();
        return view('dil.v_dil_tambah',compact('mer'));

    }
    public function insert(Request $request)
    {
        $this->validate($request,[
          'id' => 'required|unique:tbl_dil,id|min:10|max:10',
          'cabang'=>'required',
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
          'bln_billing' => 'required|max:2',
          'thn_billing' => 'required|min:4|max:4',
          'sumber_lain' => 'required',
          'jenisusaha' => 'required',
          'id_merek',

        ]);
  
        DilModel::create([
          
          'id' => $request->id,
          'cabang' => $request->cabang,
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
    public function edit($id)
    {
       // ini cara baru
        $data = DilModel::find($id);
        // dd($data);
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
        // $data = DilModel::all();
        $data = DilModel::select('status')->where('id',$id)->first();
        // dd($data);
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
   public function exportpdf()
   {
        $data = DilModel::select('*')
        ->where('status', 1)
        ->get();
        // return $data;
        view()->share('data', $data);
        $pdf = PDF::loadView('coba');
        return $pdf->download('dataDIL.pdf');
      
   }
   public function importexcel(Request $request)
   {
    $this->validate($request, [
        'file' => 'required|mimes:csv,xls,xlsx'
    ]);
    $data = $request->file('file');
    $namafile = $data->getClientOriginalName();
    $data->move('Pelanggan',$namafile);
    

    $import = Excel::import(new DilImport, \public_path('/Pelanggan/'. $namafile));
 
    if($import) {
        //redirect
        return redirect()->route('dil')->with(['success' => 'Data Berhasil Diimport!']);
    } else {
        //redirect
        return redirect()->route('dil')->with(['error' => 'Data Gagal Diimport!']);
    }
   }
}
