@extends('layouts.app')

@section('title', 'Data Arsip')

@section('contents')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Arsip</h6>
        </div>
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            
            <form action="{{ route('Arsip') }}" method="get" class="form-inline mb-3">
            <input type="text" name="search" class="form-control mr-sm-2" style="width: 800px;" placeholder="Search...">
            <button type="submit" class="btn btn-outline-primary my-2 my-sm-0">Search</button>
        </form>
  
                
            </form>
            <!-- Link untuk mencetak data sdmSatpol sesuai filter tanggal -->
                <div class="d-flex justify-content-between mb-3">
                    <a href="{{ route('Arsip.tambah') }}" class="btn btn-sm btn-primary shadow-sm">
                        <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data
                    </a>
                </div>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nomor Surat</th>
                            <th>Kategori</th>
                            <th>Judul</th>
                            <th>Waktu Pengarsipan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($no = 1)
                        @foreach ($data as $row)
                            <tr>
                                <th>{{ $no++ }}</th>
                                <td>{{ $row->nomor_surat }}</td>
                                <td>{{ optional($row->kategori)->nama }}</td>
                                <td>{{ $row->judul }}</td>
                                <td>{{ $row->waktu_pengarsipan }}</td>
                                <td>

                                    <a href="{{ route('Arsip.hapus', $row->id) }}" class="btn btn-danger"
                                        onclick="return confirm('Anda yakin ingin menghapus data ini?');"><i
                                            class="fas fa-trash"></i></a>
                                            <a href="{{ asset('storage/file_surat/' . $row->file_surat) }}" download="{{ $row->judul }}.pdf"
                                                    class="btn btn-warning"><i class="fas fa-download"></i> Unduh</a>
                                                <a href="{{ route('arsip.lihat', $row->id) }}" class="btn btn-info"><i class="fas fa-eye"></i> Lihat</a>
                                </td>
                                
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
