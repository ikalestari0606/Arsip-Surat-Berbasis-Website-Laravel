@extends('layouts.app')

@section('title', 'Form Edit Kategori Surat')

@section('contents')
<form action="{{ route('Kategori.update', $Kategori->id) }}" method="post">
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
                        <h6 class="m-0 font-weight-bold text-primary">Form Edit Kategori Surat</h6>
                    </div>
                    <div class="card-body">
                    <div class="form-group">
                        <label for="id_kategori">ID Kategori</label>
                        <input type="text" class="form-control" id="id_kategori" name="id_kategori"
                            value="{{ $Kategori->id_kategori }}" readonly>
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama Kategori</label>
                        <input type="text" class="form-control" id="nama" name="nama"
                            value="{{ $Kategori->nama }}">
                    </div>

                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <input type="text" class="form-control" id="keterangan" name="keterangan"
                            value="{{ $Kategori->keterangan }}">
                    </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('Kategori') }}" class="btn btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-primary">UPDATE</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
