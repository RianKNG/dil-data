<?php

namespace App\Models;


use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Penutupan extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'penutupan';
    protected $tableKey = 'id';
    protected $fillable = ['id','id_dil','nama','tanggal_tutup','alasan','created_at'];
    
    // public function allData()
    // {
    //     // $data = 
    //         return DB::table('penutupan')
    //             ->join('tbl_dil','tbl_dil.id','=','penutupan.id')
    //             ->select('penutupan.*','tbl_dil.*')
    //             ->get();
    //             // return $data;
    // }
    

}
