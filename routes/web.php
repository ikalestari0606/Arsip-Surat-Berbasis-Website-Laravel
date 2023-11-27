<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PatroliController;
use App\Http\Controllers\PamController;
use App\Http\Controllers\PemadamanController;
use App\Http\Controllers\ResqueController;
use App\Http\Controllers\KualifikasiSertifPemadamController;
use App\Http\Controllers\OperasiPenertibanController;
use App\Http\Controllers\PendataanLinmasController;
use App\Http\Controllers\PeningkatanKapasitasLinmasController;
use App\Http\Controllers\MobilisasiLinmasController;
use App\Http\Controllers\SdmSatpolController;
use App\Http\Controllers\TrantibumlinmasController;
use App\Http\Controllers\PelanggaranPerdaController;
use App\Http\Controllers\PelanggaranPerkadaController;
use App\Http\Controllers\PenegakanPerdaController;
use App\Http\Controllers\SosialisasiPerdaController;
use App\Http\Controllers\ArsipController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\AboutController;
use Dompdf\Dompdf;
use App\Models\PAM;
use App\Models\PATROLI;
use App\Models\OPERASIPENERTIBAN;
use App\Models\SDMSATPOL;
use App\Models\PENDATAANLINMAS;
use App\Models\ARSIP;
use App\Models\PENINGKATANKAPASITASLINMAS;
use App\Models\MOBILISASILINMAS;
use App\Models\PENEGAKANPERDA;
use App\Models\SOSIALISASIPERDA;
use App\Models\PEMADAMAN;
use App\Models\RESQUE;
use App\Models\KualifikasiSertifPemadam;
use App\Models\TRANTIBUMLINMAS;
use App\Models\PELANGGARANPERDA;
use App\Models\PELANGGARANPERKADA;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::controller(AuthController::class)->group(function(){
    Route::get('register','register')->name('register');
    Route::post('register','registerSimpan')->name('register.simpan');

    Route::get('login','login')->name('login');
    Route::post('login','loginAksi')->name('login.aksi');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::get('/', function () {
    return view('welcome');
});
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/dashboard/filter', [DashboardController::class, 'filter'])->name('dashboard.filter');
    
    Route::controller(ArsipController::class)->prefix('Arsip')->group(function() {
        Route::get('','index')->name('Arsip');
        Route::get('/arsip/lihat/{id}', [ArsipController::class, 'lihat'])->name('arsip.lihat');
        Route::get('tambah','tambah')->name('Arsip.tambah');
        Route::post('tambah','simpan')->name('Arsip.tambah.simpan');
        Route::get('edit/{id}','edit')->name('Arsip.edit');
        Route::put('edit/{id}','update')->name('Arsip.tambah.update');
        Route::get('hapus/{id}','hapus')->name('Arsip.hapus');
       
    });

    Route::controller(KategoriController::class)->prefix('Kategori')->group(function() {
        Route::get('','index')->name('Kategori');
        Route::get('tambah','tambah')->name('Kategori.tambah');
        Route::post('tambah','simpan')->name('Kategori.tambah.simpan');
        Route::get('edit/{id}','edit')->name('Kategori.edit');
        Route::post('edit/{id}','update')->name('Kategori.update');
        Route::get('hapus/{id}','hapus')->name('Kategori.hapus');
       
    });

    Route::controller(AboutController::class)->prefix('About')->group(function() {
        Route::get('','index')->name('About');
       
    });
    
 });