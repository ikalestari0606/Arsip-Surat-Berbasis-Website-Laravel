<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Arsip;
use App\Models\Kategori;
use Illuminate\Support\Facades\Storage;

class ArsipController extends Controller
{
    public function index(Request $request)
    {

       // Mengambil semua data arsip
       $query = Arsip::query();

       // Menambahkan fungsionalitas pencarian
       if ($request->has('search')) {
           $searchTerm = $request->input('search');
           $query->where('nomor_surat', 'like', '%' . $searchTerm . '%')
                 ->orWhere('judul', 'like', '%' . $searchTerm . '%');
       }

       $data = $query->get();

       return view('Arsip.index', compact('data'));
    }

    public function tambah()
    {
        $kategoriList = Kategori::all();
        return view('Arsip.tambah', compact('kategoriList')); 
    }

    public function simpan(Request $request)
{
    // Validasi data yang masuk (nomor_surat, kategori_id, judul, file_surat)
    $request->validate([
        'nomor_surat' => 'required',
        'kategori_id' => 'required|exists:kategori,id',
        'judul' => 'required|string|max:255',
        'file_surat' => 'required|mimes:pdf|max:2048', // maksimal ukuran file 2MB
    ]);

    // Mengelola file surat yang diunggah
    $file_surat = $request->file('file_surat');
    $nama_file_surat = 'Surat' . date('Ymdhis') . '.' . $file_surat->getClientOriginalExtension();
    $file_surat->storeAs('public/file_surat', $nama_file_surat);

    // Menyimpan data arsip ke database
    Arsip::create([
        'nomor_surat' => $request->nomor_surat,
        'kategori_id' => $request->kategori_id,
        'judul' => $request->judul,
        'file_surat' => $nama_file_surat,
    ]);

    return redirect()->route('Arsip')->with('success', 'Data berhasil ditambahkan');
}


    public function hapus($id)
    {
        // Cari data arsip berdasarkan ID
        $arsip = Arsip::find($id);

        if (!$arsip) {
            return redirect()->route('arsip')->with('error', 'Data tidak ditemukan');
        }

        // Hapus file surat dari penyimpanan jika ada
        if ($arsip->file_surat) {
            // Hapus file dari penyimpanan
            Storage::delete('public/file_surat/' . $arsip->file_surat);
        }

        // Hapus data arsip dari database
        $arsip->delete();

        // Redirect atau berikan respon sukses
        return redirect()->route('Arsip')->with('success', 'Data berhasil dihapus');
    }
    
    
    public function Lihat($id)
    {
        $Arsip = Arsip::findOrFail($id);
        return view('arsip.lihat', compact('Arsip'));
    }

    public function Edit($id)
    {
        // Cari data arsip berdasarkan ID
        $Arsip = Arsip::find($id);

        if (!$Arsip) {
            return redirect()->route('arsip')->with('error', 'Data tidak ditemukan');
        }

        $kategoriList = Kategori::all();

        return view('arsip.edit', compact('Arsip', 'kategoriList'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data yang masuk
        $request->validate([
            'nomor_surat' => 'required',
            'kategori_id' => 'required',
            'judul' => 'required|string|max:255',
            'file_surat' => 'nullable|mimes:pdf|max:2048',
        ]);

        // Cari data arsip berdasarkan ID
        $arsip = Arsip::find($id);

        if (!$arsip) {
            return redirect()->route('Arsip')->with('error', 'Data tidak ditemukan');
        }

        // Inisialisasi variabel $fileSuratPath
        $fileSuratPath = $arsip->file_surat;

        // Jika ada file surat yang diunggah
        if ($request->hasFile('file_surat')) {
            // Hapus file surat lama jika ada
            if ($arsip->file_surat) {
                // Hapus file dari penyimpanan
                Storage::delete('public/file_surat/' . $arsip->file_surat);
            }

            // Upload file surat baru
            $fileSuratPath = 'Surat' . date('Ymdhis') . '.' . $request->file('file_surat')->getClientOriginalExtension();
            $request->file('file_surat')->storeAs('public/file_surat', $fileSuratPath);
        }

        // Update data ke database
        $arsip->update([
            'nomor_surat' => $request->nomor_surat,
            'kategori_id' => $request->kategori_id,
            'judul' => $request->judul,
            'file_surat' => $fileSuratPath, // Gunakan path file surat baru atau yang lama
        ]);

        // Redirect atau berikan respon sukses
        return redirect()->route('Arsip')->with('success', 'Data berhasil diperbarui');
    }
}
