<?php

namespace App\Exports;

use App\Models\MobilisasiLinmas;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithMapping;

class ExportExcelMobilisasiLinmas implements FromCollection, WithHeadings, ShouldAutoSize, WithMapping
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
            $row->linmas,
            $row->kecamatan,
            $row->desa,
            $row->jenis_mobilisasi,
        ];
    }

    public function headings(): array
    {
        return [
            'No',
            'Tanggal',
            'LINMAS',
            'Kecamatan',
            'Desa',
            'Jenis Mobilisasi',
        ];
    }
}
