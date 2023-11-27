<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    public function index(Request $request)
    {

        // Mengambil semua data kategori
        $query = Kategori::query();

        // Menambahkan fungsionalitas pencarian
        if ($request->has('search')) {
            $searchTerm = $request->input('search');
            $query->where('id_kategori', 'like', '%' . $searchTerm . '%')
                  ->orWhere('nama', 'like', '%' . $searchTerm . '%')
                  ->orWhere('keterangan', 'like', '%' . $searchTerm . '%');
        }

        $data = $query->get();

        return view('Kategori.index', compact('data'));
    }

    public function tambah()
    {
        return view('Kategori.tambah');  
    }

    public function simpan(Request $request)
    {
       
        $data = [
            'id_kategori'=>$request->id_kategori,
            'nama'=>$request->nama,
            'keterangan'=>$request->keterangan,
        ];

        Kategori::create($data) ;

        return redirect()->route('Kategori')->with('success', 'Data berhasil ditambahkan');
    }

    public function hapus($id)
    {
        Kategori::find($id)->delete();

        return redirect()->route('Kategori');
    }

    public function edit($id)
    {
        $Kategori = Kategori::find($id);

        return view('Kategori.edit', ['Kategori'=>$Kategori]);
    }

    public function update($id, Request $request)
    {
        $data = [
            'nama' => $request->nama,
            'keterangan' => $request->keterangan,
        ];

        Kategori::find($id)->update($data);

        return redirect()->route('Kategori')->with('success', 'Data berhasil diupdate');
    }

}
