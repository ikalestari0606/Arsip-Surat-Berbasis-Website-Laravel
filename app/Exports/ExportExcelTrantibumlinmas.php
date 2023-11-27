<?php

namespace App\Exports;

use App\Models\Trantibumlinmas;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithMapping;

class ExportExcelTrantibumlinmas implements FromCollection, WithHeadings, ShouldAutoSize, WithMapping
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
            $row->jenis_gangguan,
            $row->tanggal,
            $row->kecamatan,
            $row->desa,
            $row->tempat,
            $row->danru,
            $row->tindak_lanjut,
        ];
    }

    public function headings(): array
    {
        return [
            'No',
            'Jenis Gangguan',
            'Tanggal',
            'Kecamatan',
            'Desa',
            'Tempat',
            'Danru',
            'Tindak Lanjut',
        ];
    }
}
