@extends('layouts.app')

@section('title', 'Form Edit Arsip')

@section('contents')
    <form action="{{ route('Arsip.tambah.update', ['id' => $Arsip->id]) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="row">
            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Form Edit Arsip</h6>
                    </div>
                    <div class="form-group">
                        <label for="nomor_surat">Nomor Surat</label>
                        <input type="text" class="form-control" id="nomor_surat" name="nomor_surat"
                            value="{{ $Arsip->nomor_surat }}">
                    </div>
                    <div class="form-group">
                        <label for="kategori_id">Kategori</label>
                        <select class="form-control" id="kategori_id" name="kategori_id">
                            @foreach ($kategoriList as $kategori)
                                <option value="{{ $kategori->id }}" {{ $kategori->id == $Arsip->kategori_id ? 'selected' : '' }}>
                                    {{ $kategori->nama }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul"
                            value="{{ $Arsip->judul }}">
                    </div>
                    <div class="form-group">
                        <label for="file_surat">File Surat</label>
                        <input type="file" class="form_control" id="file_surat" name="file_surat" accept=".pdf">
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('Arsip') }}" class="btn btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-primary">UPDATE</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
