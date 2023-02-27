<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DilModel extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'tbl_dil';
    // protected $tableKey = ['id'];
    protected $fillable = ['id','status','no_rekening','nama_sekarang','nama_pemilik','no_rumah','rt','rw','blok','dusun','kecamatan','status_milik','jml_jiwa_tetap','jml_jiwa_tidak_tetap','tanggal_pasang','segel',
    'stop_kran','ceck_valve','kopling','plugran','box','bln_billing','thn_billing','sumber_lain','jenisusaha','id_merek','created_at'];
}
