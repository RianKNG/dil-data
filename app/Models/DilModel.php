<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DilModel extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'tbl_dil';
    protected $fillable = ['id','no_sambungan','nama','alamat','merek','created_at'];
}
