@extends('layouts.app')

@section('title', 'Lihat Arsip')

@section('contents')
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Detail Arsip</h6>
                </div>
                <div class="card-body">
                <table>
                            <tr>
                                <td><strong>Nomor Surat</strong></td>
                                <td>:</td>
                                <td>{{ $Arsip->nomor_surat }}</td>
                            </tr>
                            <tr>
                                <td><strong>Kategori</strong></td>
                                <td>:</td>
                                <td>{{ optional($Arsip->kategori)->nama }}</td>
                            </tr>
                            <tr>
                                <td><strong>Judul</strong></td>
                                <td>:</td>
                                <td>{{ $Arsip->judul }}</td>
                            </tr>
                            <tr>
                                <td><strong>Waktu Pengarsipan</strong></td>
                                <td>:</td>
                                <td>{{ $Arsip->waktu_pengarsipan }}</td>
                            </tr>
                        </table>

                        <br>
                        <!-- Penampil PDF -->
                        <iframe src="{{ asset('storage/file_surat/' . $Arsip->file_surat) }}" width="100%" height="500px"></iframe>
                </div>
                <div class="card-footer">
                    <a href="{{ route('Arsip') }}" class="btn btn-secondary">Kembali</a>
                    <a href="{{ route('Arsip.edit', $Arsip->id) }}" class="btn btn-primary"><i
                                        ></i>Update</a>
                </div>
            </div>
        </div>
    </div>
@endsection
