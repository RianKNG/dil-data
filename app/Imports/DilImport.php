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
                   'dusun' => $row[9],
                   'desa' => $row[10],
                   'kecamatan'=> $row[11],
                   'status_milik'=> $row[12],
                   'jml_jiwa_tetap'=> $row[13],
                   'jml_jiwa_tidak_tetap'=> $row[14],
                   'tanggal_pasang'=> $row[15],
                   'tanggal_file'=> $row[16],
                   'segel'=> $row[17],
                   'stop_kran'=> $row[18],
                   'ceck_valve'=> $row[19],
                   'kopling'=> $row[20],
                   'plugran'=> $row[21],
                   'box'=> $row[22],
                   'sumber_lain'=> $row[23],
                   'jenisusaha'=> $row[24],
                   'no_seri' => $row[25],
                   'created_at'=> $row[26],
                   'updated_at'=> $row[27],
                   'id_merek'=> $row[28],
                   'id_golongan'=> $row[29],
                   
                  

             
    
        ]);
    }
}
