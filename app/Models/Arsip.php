<?php

namespace App\Models;

use App\Models\Kategori;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arsip extends Model
{
    use HasFactory;
    
    protected $table = 'arsip';

    protected $fillable = ['nomor_surat', 'kategori_id',  'judul', 'file_surat', 'waktu_pengarsipan']; 


    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }

}
