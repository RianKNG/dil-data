<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $dataquery = User::all();
        return view('user.v_user',compact('dataquery'));
    }
   
}
