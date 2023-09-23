<?php

namespace App\Http\Controllers;


use PDF;
use App\Models\Merek;

use App\Models\DilModel;
use App\Models\Golongan;
use App\Exports\DilExport;
use App\Imports\DilImport;
use Illuminate\Http\Request;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;


class DilController extends Controller
{
    protected $user;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user = Auth::user();
            return $next($request);
          });
    }
    
    public function index(Request $request)
   
    {
        
        $username = $this->user->name;
        if($username == 'admin') {
            $data = DB::table('tbl_dil AS d')
        ->select([
            'd.id','d.cabang','d.status','d.no_rekening','d.nama_sekarang','d.nama_pemilik','d.no_rumah','d.rt','d.rw','d.dusun','d.kecamatan','d.status_milik','d.jml_jiwa_tetap','d.jml_jiwa_tidak_tetap','d.tanggal_pasang','d.tanggal_file','d.segel','d.stop_kran',
            'd.ceck_valve','d.kopling','d.plugran','d.box','d.sumber_lain','d.jenisusaha','d.created_at','d.updated_at','d.id_merek',
            'm.merek',
            'd.id_golongan','g.nama_golongan','g.kode','s.nama_baru'
        ])
        ->Join('merek as m','d.id_merek','=','m.id')
        ->Join('golongan as g','d.id_golongan','=','g.id')
        ->leftJoin('bbn as s','s.id_dil','=','d.id')
        ->where('cabang',11)
        ->get();
        return view('dil.v_dil', compact('data'));
        }elseif($username == 'rian'){
            $data = DB::table('tbl_dil AS d')
        ->select([
            'd.id','d.cabang','d.status','d.no_rekening','d.nama_sekarang','d.nama_pemilik','d.no_rumah','d.rt','d.rw','d.dusun','d.kecamatan','d.status_milik','d.jml_jiwa_tetap','d.jml_jiwa_tidak_tetap','d.tanggal_pasang','d.tanggal_file','d.segel','d.stop_kran',
            'd.ceck_valve','d.kopling','d.plugran','d.box','d.sumber_lain','d.jenisusaha','d.created_at','d.updated_at','d.id_merek',
            'm.merek',
            'd.id_golongan','g.nama_golongan','g.kode','s.nama_baru'
        ])
        ->Join('merek as m','d.id_merek','=','m.id')
        ->Join('golongan as g','d.id_golongan','=','g.id')
        ->leftJoin('bbn as s','s.id_dil','=','d.id')
        ->where('cabang',12)
        ->get();
        return view('dil.v_dil', compact('data'));
        }else{
            $data = DB::table('tbl_dil as d')
            // ->select(DB::raw("(COUNT(*)) as jumlah"),'cabang', DB::raw('COUNT(tanggal_file) as tanggal_file'),'tanggal_file')
            // ->whereMonth('tanggal_file', Carbon::now()->month)
            // ->groupBy('cabang')
            // ->groupBy('tanggal_file')
            // ->get();
               
        ->select([
            'd.id','d.cabang','d.status','d.no_rekening','d.nama_sekarang','d.nama_pemilik','d.no_rumah','d.rt','d.rw','d.dusun','d.desa','d.kecamatan','d.status_milik','d.jml_jiwa_tetap','d.jml_jiwa_tidak_tetap','d.tanggal_pasang','d.tanggal_file','d.segel','d.stop_kran',
            'd.ceck_valve','d.kopling','d.plugran','d.box','d.sumber_lain','d.jenisusaha','d.created_at','d.updated_at','d.id_merek',
            'm.merek',
            'd.id_golongan','g.nama_golongan','g.kode','s.nama_baru','p.alasan'
        ])
        ->Join('merek as m','d.id_merek','=','m.id')
        ->Join('golongan as g','d.id_golongan','=','g.id')
        ->leftJoin('bbn as s','s.id_dil','=','d.id')
        ->leftJoin('penutupan as p','p.alasan','=','d.id')
        // ->orderBy('d.status')
        ->where('d.status',2)
        ->paginate(100);
        // ->chunk(10);
        // dd($data);

        
        return view('dil.v_dil', compact('data'))->render(); 
        }
    
       
    
        // ini contoh 1 sudaj oke id paren jangan dibawa ke ID master karena kan tertimpah id oleh ID chil
        
        // ->where('cabang','=','2')
        // ->leftJoin('merek as m','m.id','m.merek','d.id','=','m.id_merek')

    // ini contoh 2 sudaj oke dengan query
    // $dataquery = DB::table('tbl_dil as d')
    // ->select([
    //     'd.id','d.cabang','d.status','d.no_rekening','d.nama_sekarang','d.nama_pemilik','d.no_rumah','d.rt','d.rw','d.dusun','d.kecamatan','d.status_milik','d.jml_jiwa_tetap','d.jml_jiwa_tidak_tetap','d.tanggal_pasang','d.tanggal_file','d.segel','d.stop_kran',
    //     'd.ceck_valve','d.kopling','d.plugran','d.box','d.sumber_lain','d.jenisusaha','d.created_at','d.updated_at','d.id_merek',
    //     'm.merek',
    //     'd.id_golongan','g.nama_golongan','g.kode'
    // ])
    //         ->leftJoin('merek as m',function($join){
    //             $join->on('m.id','=','d.id_merek');
    //             // ->where('d.cabang','=',2);
    //         })
            
    //         ->leftJoin('golongan as g',function($join){
    //             $join->on('g.id','=','d.id_golongan');
    //             // ->where('d.cabang','=',2);
    //         })
            
            // dd($dataquery);
            // 
//  $data = $dataquery->where('cabang','=',4);
//  $data = $dataquery->all();



           
      
    }
    public function add()
    {
        $mer = Merek::all();
        $gol = Golongan::all();
        return view('dil.v_dil_tambah',compact('mer','gol'));

    }
    public function insert(Request $request)
    {
        // dd($request->all()); 
        $this->validate($request,[
          'id' => 'required|unique:tbl_dil,id|max:10',
          'status' => 'required',
          'cabang'=>'required',
          'no_rekening' => 'required|unique:tbl_dil,no_rekening|max:8',
          'nama_sekarang' => 'required',
          'nama_pemilik' => 'required',
          'no_rumah' => 'required',
          'rt' => 'required|numeric',
          'rw' => 'required|numeric',
          'dusun' => 'required',
          'desa'=>'required',
          'kecamatan' => 'required',
          'status_milik' => 'required',
          'jml_jiwa_tetap' => 'required|numeric',
          'jml_jiwa_tidak_tetap' => 'required|numeric',
          'tanggal_pasang' => 'required|date:d/m/Y',
          'tanggal_file' => 'required|date:d/m/Y',
          'segel' => 'required',
          'stop_kran' => 'required',
          'ceck_valve' => 'required',
          'kopling' => 'required',
          'plugran' => 'required',
          'box' => 'required',
          'sumber_lain' => 'required',
          'jenisusaha' => 'required',
          'id_merek' => 'required',
          'id_golongan' => 'required',
          'no_seri' => 'required',

        ]);
        
        
        DilModel::create([
          
          'id' => $request->id,
          'status' => $request->status,
          'cabang' => $request->cabang,
          'no_rekening' => $request->no_rekening,
          'nama_sekarang' => $request->nama_sekarang,
          'nama_pemilik' => $request->nama_pemilik,
          'no_rumah' => $request->no_rumah,
          'rt' => $request->rt,
          'rw' => $request->rw,
          'dusun' => $request->dusun,
          'desa' => $request->desa,
          'kecamatan' => $request->kecamatan,
          'status_milik' => $request->status_milik,
          'jml_jiwa_tetap' => $request->jml_jiwa_tetap,
          'jml_jiwa_tidak_tetap' => $request->jml_jiwa_tidak_tetap,
          'tanggal_pasang' => $request->tanggal_pasang,
          'tanggal_file' => $request->tanggal_file,
          'segel' => $request->segel,
          'stop_kran' => $request->stop_kran,
          'ceck_valve' => $request->ceck_valve,
          'kopling' => $request->kopling,
          'plugran' => $request->plugran,
          'box' => $request->box,
          'sumber_lain' => $request->sumber_lain,
          'jenisusaha' => $request->jenisusaha,
          'id_merek' => $request->id_merek,
          'id_golongan' => $request->id_golongan,
          'no_seri' => $request->no_seri,
        ]);
        
        return redirect()->route('dil')->with('success','data berhasil ditambahkan');
      }  
        // ini cara lama
        // $data = new DilModel();
        // $data::create($request->all());
    public function edit($id)
    {
       // ini cara baru
       $mer = Merek::all();
       $gol = Golongan::all();
        $data = DilModel::find($id);
        // dd($data);
        return view('dil.v_editdil',compact('data','mer','gol'));
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
            $status = 2;
        } else {
            $status = 1;
        }
        DilModel::where('id',$id)->update(['status'=>$status]);
        // return $data;
    return redirect()->route('dil')->with('success','status pelanggan berhasil diubah');

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
        // ->where('status', 1)
        ->get();
        // return $data;
        view()->share('data', $data);
        $pdf = PDF::loadView('coba');
        return $pdf->download('dataDIL.pdf');
      
   }
   public function exportpdfa()
   {
        $data = DilModel::select('*')
        ->where('status', 1)
        ->get();
        // return $data;
        view()->share('data', $data);
        $pdf = PDF::loadView('coba');
        return $pdf->download('dataDIL.pdf');
      
   }
   public function exportpdfn()
   {
        $data = DilModel::select('*')
        ->where('status', 2)
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
   public function detail(Request $request, $id)
   {
       
    // $dataz = DilModel::find($id);
    // $lain = DB::table('tbl_dil as d')
    
   
    //  ->select([
    //         'd.id','d.cabang','d.status','d.no_rekening','d.nama_sekarang','d.nama_pemilik','d.no_rumah','d.rt','d.rw','d.dusun','d.desa','d.kecamatan','d.status_milik','d.jml_jiwa_tetap','d.jml_jiwa_tidak_tetap','d.tanggal_pasang','d.segel','d.stop_kran',
    //         'd.ceck_valve','d.kopling','d.plugran','d.box','d.sumber_lain','d.jenisusaha','d.created_at','d.updated_at','d.id_merek',
    //         'm.merek','d.no_seri'
    //     ])
    //         ->join('merek as m',function($join){
    //             $join->on('m.id','=','d.id_merek');
    //             // ->where('d.cabang','=',2);
    //         })
    $lain = DB::table('tbl_dil as d')
    // ->select(DB::raw("(COUNT(*)) as jumlah"),'cabang', DB::raw('COUNT(tanggal_file) as tanggal_file'),'tanggal_file')
    // ->whereMonth('tanggal_file', Carbon::now()->month)
    // ->groupBy('cabang')
    // ->groupBy('tanggal_file')
    // ->get();
       
->select([
    'd.id','d.cabang','d.status','d.no_rekening','d.nama_sekarang','d.nama_pemilik','d.no_rumah','d.rt','d.rw','d.dusun','d.kecamatan','d.status_milik','d.jml_jiwa_tetap','d.jml_jiwa_tidak_tetap','d.tanggal_pasang','d.tanggal_file','d.segel','d.stop_kran',
    'd.ceck_valve','d.kopling','d.plugran','d.box','d.sumber_lain','d.jenisusaha','d.created_at','d.updated_at','d.id_merek',
    'm.merek',
    'd.id_golongan','g.nama_golongan','g.kode','s.nama_baru','t.tanggal_tutup','gan.tanggal_ganti'
])
->Join('merek as m','d.id_merek','=','m.id')
->Join('golongan as g','d.id_golongan','=','g.id')
->leftJoin('bbn as s','s.id_dil','=','d.id')
->leftJoin('penutupan as t','t.id_dil','=','d.id')
->leftJoin('ganti as gan','gan.id_dil','=','d.id')
->where('d.id', $id)
->get();

    //   dd($lain);
        
//    dd($lain);

    return view('dil.v_detail',compact('lain'));
   }
   public function statustutup($id)
   {
       
       // $data = DilModel::find($id);
       // $data = DilModel::all();
       $data = DilModel::select('status')->where('id',$id)->first();
       // dd($data);
       if ($data->status == 1) {
           $status = 2;
       } else {
           $status = 1;
       }
       DilModel::where('id',$id)->update(['status'=>$status]);
       // return $data;
       return redirect()->route('penutupan')->with('success','data penutupan berhasil dithapus');
    }
   public function statussambung($id)
   {
       
       // $data = DilModel::find($id);
       // $data = DilModel::all();
       $data = DilModel::select('status')->where('id',$id)->first();
       // dd($data);
       if ($data->status == 1) {
           $status = 2;
       } else {
           $status = 1;
       }
       DilModel::where('id',$id)->update(['status'=>$status]);
       // return $data;
        return redirect()->route('penyambungan')->with('success','data penutupan berhasil dithapus');
    }
}
