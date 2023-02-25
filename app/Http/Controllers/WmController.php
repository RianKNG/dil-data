<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Merek;
use Illuminate\Support\Facades\DB;

class WmController extends Controller
{
    public function index(Request $request)
    {
        $data = Merek::get();

        return view('watermeter.index',compact('data'));
    }
    public function insert(Request $request)
    {
        Merek::create($request->all());
   
        return redirect()->route('watermeter')->with('success','data berhasil ditambahkan');

      
    }
}
