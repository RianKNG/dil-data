<?php

namespace App\Http\Controllers;

use App\Models\Bbn;
use App\Exports\BbnExport;
use App\Imports\BbnImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class BbnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('bbn as b')
        ->select([
            'b.*','d.nama_sekarang','d.nama_pemilik','d.id_merek','d.no_rekening'
        ])
        ->join('tbl_dil as d',function($join){
            $join->on('d.id','=','b.id_dil');
            // ->where('d.cabang','=',2);
        })
       
        // ->leftJoin('tbl_dil as d','d.id','=','b.id_dil')
        // ->get();
        ->get();
    
        // dd($data);
        
        
        
        
       
// dd($data);
        return view ('bbn.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Bbn::create($request->all());
        return redirect ('bbn');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function hapus($id)
    {
        $data = Bbn::find($id);
        $data->delete();

        return redirect()->route('bbn')->with('success','data penutupan berhasil dithapus');
    }
    public function exportbbn()
    {
        return Excel::download(new BbnExport, 'dataBbn.xlsx');
    }
    public function importbbn(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);
        $data = $request->file('file');
        $namafile = $data->getClientOriginalName();
        $data->move('Pelanggan',$namafile);
        
    
        $import = Excel::import(new BbnImport, \public_path('/Pelanggan/'. $namafile));
     
        if($import) {
            //redirect
            return redirect()->route('bbn')->with(['success' => 'Data Berhasil Diimport!']);
        } else {
            //redirect
            return redirect()->route('bbn')->with(['error' => 'Data Gagal Diimport!']);
        }
    }
}
