<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DilModel extends Model
{
    use HasFactory;
    // protected $dateFormat='m-d-Y';
    protected $guarded = [];
    protected $table = 'tbl_dil';
    protected $tableKey = ['id'];
    public $timestamps = false;
    protected $fillable = ['id','cabang','status','no_rekening','nama_sekarang','nama_pemilik','no_rumah','rt','rw','dusun','desa','kecamatan','status_milik','jml_jiwa_tetap','jml_jiwa_tidak_tetap','tanggal_pasang','tanggal_file','segel',
    'stop_kran','ceck_valve','kopling','plugran','box','sumber_lain','jenisusaha','id','id_merek','merek','no_seri','id_golongan','nama_golongan','created_at','nama_baru','updated_at','tanggal_tutup'];
    // public function Merek()
    // {

    //     return $this->belongsTo(Merek::class);
    // }
    // public function getTanggalPasangAttribute()
    // {
    //     return \Carbon\Carbon::parse($this->attributes['tanggal_pasang'])
    //        ->format('d M Y ');
    // }
    // public function getTanggalFileAttribute()
    // {
    //     return \Carbon\Carbon::parse($this->attributes['tanggal_file'])
    //        ->format('d M Y ');
    // }
    public function merek()
    {
        return $this->belongsTo(Merek::class,'id_merek');
    }
    public function golongan()
    {
        return $this->belongsTo(Golongan::class,'id_golongan');
    }
}