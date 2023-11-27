<?php

namespace App\Exports;

use App\Models\OperasiPenertiban;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithMapping;

class ExportExcelOperasiPenertiban implements FromCollection, WithHeadings, ShouldAutoSize, WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function collection()
    {
        return $this->data;
    }


    public function map($row): array
    {
        return [
            $row->id,
            $row->tanggal,
            $row->anak_jalanan,
            $row->pkl,
            $row->reklame,
            $row->odgj,
            $row->siswa_bolos,
            $row->tempat_hiburan,
            $row->lain_lain,
        ];
    }

    public function headings(): array
    {
        return [
            'No',
            'Tanggal',
            'Anak Jalanan',
            'PKL',
            'Reklame',
            'ODGJ',
            'Siswa Bolos',
            'Tempat Hiburan',
            'Lain-Lain',
        ];
    }
}
