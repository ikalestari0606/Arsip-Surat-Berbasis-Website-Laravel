<?php

namespace App\Exports;

use App\Models\KualifikasiSertifPemadam;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithMapping;

class ExportExcelKualifikasiSertifPemadam implements FromCollection, WithHeadings, ShouldAutoSize, WithMapping
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
            $row->tanggal_pengisian,
            $row->nama,
            $row->nip,
            $row->jabatan,
            $row->kualifikasi,
            $row->tanggal_sttp,
        ];
    }

    public function headings(): array
    {
        return [
            'No',
            'Tanggal Pengisian',
            'Nama',
            'NIP',
            'Jabatan',
            'Kualifikasi',
            'Tanggal STTP',
        ];
    }
}

