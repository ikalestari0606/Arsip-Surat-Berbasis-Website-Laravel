<?php

namespace App\Exports;

use App\Models\SdmSatpol;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithMapping;

class ExportExcelSdmSatpol implements FromCollection, WithHeadings, ShouldAutoSize, WithMapping
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
            $row->jenis_diklat,
            $row->tanggal,
            $row->nip,
            $row->nama,
        ];
    }

    public function headings(): array
    {
        return [
            'No',
            'Jenis Diklat',
            'Tanggal',
            'NIP',
            'Nama',
        ];
    }
}
