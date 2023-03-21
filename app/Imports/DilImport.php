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
        return "dfsdfs"
;    //     return new DilModel([
            
    //                'id' => $row[0],
    //                'cabang' => $row[1],
    //                'status' => $row[2],
    //                'no_rekening' => $row[3],
    //                'nama_sekarang'=> $row[4],
    //                'nama_pemilik'=> $row[5],
    //                'no_rumah'=> $row[6],
    //                'rt'=> $row[7],
    //                'rw'=> $row[8],
    //                'blok'=> $row[9],
    //                'dusun' => $row[10],
    //                'kecamatan'=> $row[11],
    //                'status_milik'=> $row[12],
    //                'jml_jiwa_tetap'=> $row[13],
    //                'jml_jiwa_tidak_tetap'=> $row[14],
    //                'tanggal_pasang'=> $row[15],
    //                'segel'=> $row[16],
    //                'stop_kran'=> $row[17],
    //                'ceck_valve'=> $row[18],
    //                'kopling'=> $row[19],
    //                'plugran'=> $row[20],
    //                'box'=> $row[21],
    //                'sumber_lain'=> $row[22],
    //                'jenisusaha'=> $row[23],
    //                'created_at'=> $row[24],
    //                'updated_at'=> $row[25],
    //                'id_merek'=> $row[26],
                  

             
    
    //     ]);
    // }
}
