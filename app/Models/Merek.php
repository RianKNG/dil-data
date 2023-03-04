<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merek extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    protected $table = 'merek';

    protected $tableKey = ['id'];
    protected $fillable = ['id','merek','created_at','updated_at'];

    // public function dilmodell()
    // {

    //     return $this->hasMany(DilModel::class);
    // }

}
