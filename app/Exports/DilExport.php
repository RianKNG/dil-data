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
        return DilModel::all();
       
    }
    
    
}
