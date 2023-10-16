<?php
namespace App\Exports;
use App\Models\DilModel;
use Carbon\Carbon;

use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
// use Maatwebsite\Excel\Concerns\ToModel;

use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
// use Maatwebsite\Excel\Concerns\FromCollection;


class DilExport implements FromQuery,WithMapping,WithHeadings,WithEvents,ShouldAutoSize
{
    private $cabang;
    protected $from, $to;
    
    use Exportable;
    public function __construct($cabang,$from,$to)
    {
        // $this->cabang = $cabang;
        $this->cabang = $cabang;
        $this->from = $from;
        $this->to = $to;


  

    }
   
    public function query()
    {
        
     
        return DilModel::query()
        ->where('cabang', $this->cabang)
        ->whereBetween('tanggal_pasang', [$this->from, $this->to]);
       
    
        
        
    }
    public function headings(): array
    {
        return [
            'NO SAMBUNGAN',
            'GOLONGAN',
            'NAMA REKENING',
            'NAMA PEMILIK',
            'RT', 
            'RW',
            'NO RUMAH',
            'DUSUN',
            'DESA',
            'KECAMATAN',
            'STATUS MILIK',
            'JUMLAH JIWA TETAP',
            'JUMLAH JIWA TIDAK TETAP',
            'SEGEL',
            'STOP KRAN',
            'CECK VALVE',
            'KOPLING',
            'PLUGH KRAN',
            'BOX',
            'SUMBER LAIN',
            'JENIS USAHA',
            'MEREK',
            'NO SERI',
            'TANGGAL PENETAPAN DIL PDVR',
            
        ];
    }
    public function map($cabang): array
    {
        return [
            $cabang->id,
            $cabang->golongan()->pluck('nama_golongan')->implode(', '),
            $cabang->nama_sekarang,
            $cabang->nama_pemilik,
            $cabang->rt,
            $cabang->rw,
            $cabang->no_rumah,
            $cabang->dudun,
            $cabang->desa,
            $cabang->kecamatan,
            $cabang->status_milik,
            $cabang->jml_jiwa_tetap,
            $cabang->jml_jiwa_tidak_tetap,
            $cabang->segel,
            $cabang->stop_kran,
            $cabang->ceck_valve,
            $cabang->kopling,
            $cabang->plugran,
            $cabang->box,
            $cabang->sumber_lain,
            $cabang->jenisusaha,
            $cabang->merek()->pluck('merek')->implode(', '),
            $cabang->no_seri,
            $cabang->tanggal_pasang,
           
        ];
    }
    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function(AfterSheet $event) {
                $cellRange = 'A1:W1'; // All headers
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(14);
            },
        ];
    }
}