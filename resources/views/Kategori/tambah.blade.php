@extends('layouts.app')

@section('title', 'Form Tambah Kategori Surat')

@section('contents')
    <form action="{{ route('Kategori.tambah.simpan') }}" method="post">
        @csrf
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="row">
            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                     {{ isset($Arsip) ? 'Form Tambah Kategori Surat' : '' }}</h6>

                    <div class="form-group">
                    <label for="id_kategori">ID Kategori</label>
                    <input type="text" class="form-control" id="id_kategori" name="id_kategori"
                        value="{{ isset($Kategori) ? $Kategori->id_kategori : '' }}">
                    </div>
                    <div class="form-group">
                    <label for="nama">Nama Kategori</label>
                    <input type="text" class="form-control" id="nama" name="nama"
                        value="{{ isset($Kategori) ? $Kategori->nama : '' }}">
                    </div>
                    <div class="form-group">
    <label for="keterangan">Keterangan</label>
    <textarea class="form-control" id="keterangan" name="keterangan" rows="5">{{ isset($Kategori) ? $Kategori->keterangan : '' }}</textarea>
</div>

                    
                    <div class="card-footer">
                        <a href="{{ route('Kategori') }}" class="btn btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-primary">SIMPAN</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
