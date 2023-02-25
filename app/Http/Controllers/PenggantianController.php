<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ganti;
use Illuminate\Support\Facades\DB;

class PenggantianController extends Controller
{
    public function index()
    {
        $data = Ganti::get();
        return view('penggantian.v_penggantian',compact('data'));
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
