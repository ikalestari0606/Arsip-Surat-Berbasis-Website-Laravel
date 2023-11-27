<?php

namespace App\Exports;

use App\Models\PenegakanPerda;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithMapping;

class ExportExcelPenegakanPerda implements FromCollection, WithHeadings, ShouldAutoSize, WithMapping
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
            $row->jenis_tertib,
            $row->tindakan,
            $row->tanggal,
            $row->kecamatan,
            $row->desa,
            $row->tempat,
            $row->tindak_lanjut,
        ];
    }

    public function headings(): array
    {
        return [
            'No',
            'Jenis Tertib',
            'Tindakan',
            'Tanggal',
            'Kecamatan',
            'Desa',
            'Tempat',
            'Tindak Lanjut',
        ];
    }
}
