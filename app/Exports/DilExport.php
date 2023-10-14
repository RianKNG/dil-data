<?php

namespace App\Exports;

use App\Models\DilModel;
use Maatwebsite\Excel\Concerns\FromCollection;

class DilExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DilModel::select('no_rekening','nama_sekarang')  
        ->where('cabang', 'Like', '%' . request('cabang') . '%')
        ->get();
       
    }
    
    
}
