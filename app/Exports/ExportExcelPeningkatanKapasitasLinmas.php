<?php

namespace App\Exports;

use App\Models\PeningkatanKapasitasLinmas;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithMapping;

class ExportExcelPeningkatanKapasitasLinmas implements FromCollection, WithHeadings, ShouldAutoSize, WithMapping
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
            $row->st,
        ];
    }

    public function headings(): array
    {
        return [
            'No',
            'Tanggal',
            'LINMAS',
            'Kecamatan',
            'Surat Tugas',
        ];
    }
}
