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
                   'cabang' => $row[2],
                   'no_rekening' => $row[3],
                   'nama_sekarang'=> $row[4],
                   'nama_pemilik'=> $row[5],
                   'no_rumah'=> $row[6],
                   'rt'=> $row[7],
                   'rw'=> $row[8],
                   'blok'=> $row[9],
                   'dusun' => $row[10],
                   'desa' => $row[11],
                   'kecamatan'=> $row[12],
                   'status_milik'=> $row[13],
                   'jml_jiwa_tetap'=> $row[14],
                   'jml_jiwa_tidak_tetap'=> $row[15],
                   'tanggal_pasang'=> $row[16],
                   'tanggal_file'=> $row[17],
                   'segel'=> $row[18],
                   'stop_kran'=> $row[19],
                   'ceck_valve'=> $row[20],
                   'kopling'=> $row[21],
                   'plugran'=> $row[22],
                   'box'=> $row[23],
                   'sumber_lain'=> $row[24],
                   'jenisusaha'=> $row[25],
                   'created_at'=> $row[26],
                   'updated_at'=> $row[27],
                   'id_merek'=> $row[28],
                   'no_seri' => $row[29],
                  

             
    
        ]);
    }
}
