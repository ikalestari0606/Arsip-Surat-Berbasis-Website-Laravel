<?php

namespace App\Exports;

use App\Models\Pemadaman;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithMapping;

class ExportExcelPemadaman implements FromCollection, WithHeadings, ShouldAutoSize, WithMapping
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
            $row->kecamatan,
            $row->desa,
            $row->tempat,
            $row->regu,
            $row->waktu_tanggap,
            $row->korban_jiwa,
            $row->material,
        ];
    }

    public function headings(): array
    {
        return [
            'No',
            'Tanggal',
            'Kecamatan',
            'Desa',
            'Tempat',
            'Regu',
            'Waktu Tanggap',
            'Korban Jiwa',
            'Material',
        ];
    }
}

