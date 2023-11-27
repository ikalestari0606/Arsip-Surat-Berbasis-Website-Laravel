<?php

namespace App\Exports;

use App\Models\Pam;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithMapping;

class ExportexcelPam implements FromCollection, WithHeadings, ShouldAutoSize, WithMapping
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
            $row->acara,
            $row->tanggal,
            $row->kecamatan,
            $row->desa,
            $row->tempat,
            $row->komandan,
            $row->anggota,
            $row->hasil,
        ];
    }

    public function headings(): array
    {
        return [
            'No',
            'Acara',
            'Tanggal',
            'Kecamatan',
            'Desa',
            'Tempat',
            'Komandan',
            'Anggota',
            'Hasil',
        ];
    }
}
