<?php

namespace App\Imports;

use App\Models\DilModel;
use Maatwebsite\Excel\Concerns\ToModel;

class DilImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new DilModel([
            
                   'id' => $row[0],
                   'status' => $row[1],
                   'no_rekening' => $row[2],
                   'nama_sekarang'=> $row[3],
                   'nama_pemilik'=> $row[4],
                   'no_rumah'=> $row[5],
                   'rt'=> $row[6],
                   'rw'=> $row[7],
                   'blok'=> $row[8],
                   'dusun' => $row[9],
                   'kecamatan'=> $row[10],
                   'status_milik'=> $row[11],
                   'jml_jiwa_tetap'=> $row[12],
                   'jml_jiwa_tidak_tetap'=> $row[13],
                   'tanggal_pasang'=> $row[14],
                   'segel'=> $row[15],
                   'stop_kran'=> $row[16],
                   'ceck_valve'=> $row[17],
                   'kopling'=> $row[18],
                   'plugran'=> $row[19],
                   'box'=> $row[20],
                   'bln_billing'=> $row[21], 
                   'thn_billing' => $row[22],
                   'sumber_lain'=> $row[23],
                   'jenisusaha'=> $row[24],
                   'created_at'=> $row[25],
                   'updated_at'=> $row[26],
                   'id_merek'=> $row[27],
                  

             
    
        ]);
    }
}
