<?php
namespace App\Exports;
use App\Models\DilModel;


use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
// use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithMapping;

class DilExport implements FromQuery,WithMapping
{
    private $cabang;
    use Exportable;
    public function __construct($cabang)
    {
        // $this->cabang = $cabang;
        $this->cabang = $cabang;

    }

    public function query()
    {
        return DilModel::query()->where('cabang', $this->cabang);
      
        
        
    }
    public function headings(): array
    {
        return [
            // 'cabang',
            // 'RT', 
            // 'alamat' => $row[3], 
        ];
    }
    public function map($cabang): array
    {
        return [
            $cabang->cabang,
            $cabang->rt,
            $cabang->merek()->pluck('merek')->implode(', '),
            $cabang->golongan()->pluck('nama_golongan')->implode(', '),
        ];
    }
}