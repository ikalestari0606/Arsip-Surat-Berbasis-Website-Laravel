<?php

namespace App\Http\Controllers;

use App\Models\Pam; // Ganti dengan model yang sesuai untuk tabel PAM
use App\Models\Patroli; // Ganti dengan model yang sesuai untuk tabel Patroli
use App\Models\OperasiPenertiban;
use App\Models\SdmSatpol;
use App\Models\PendataanLinmas;
use App\Models\PeningkatanKapasitasLinmas;
use App\Models\MobilisasiLinmas;
use App\Models\PenegakanPerda;
use App\Models\SosialisasiPerda;
use App\Models\Pemadaman;
use App\Models\Resque;
use App\Models\KualifikasiSertifPemadam;
use App\Models\Trantibumlinmas;
use App\Models\PelanggaranPerda;
use App\Models\PelanggaranPerkada;
use App\Models\Arsip;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Impor kelas DB dari namespace yang benar
use Carbon\Carbon;

class DashboardController extends Controller
{   
    public function index()
    {
        // ... Your existing code ...

        $totalArsip = \App\Models\Arsip::count();
        $totalKategori = \App\Models\Kategori::count();

        return view('dashboard', compact('totalArsip', 'totalKategori'));
    }


    public function dashboard()
{
    $totalArsip = Arsip::count();
    $totalKategori = Kategori::count();

    return view('dashboard', compact('totalArsip', 'totalKategori'));
}
}
