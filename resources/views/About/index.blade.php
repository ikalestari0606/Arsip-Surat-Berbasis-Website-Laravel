@extends('layouts.app')

@section('title', 'Data About')

@section('contents')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">About</h6>
        </div>
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <form action="{{ route('About') }}" method="get" class="form-inline mb-3">
                
                
            </form>
            <!-- Link untuk mencetak data sdmSatpol sesuai filter tanggal -->
            <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img src="img/ika.jpg" alt="Foto Ika Lestari" class="img-fluid">
            </div>
            <div class="col-md-6" style="width: 300px;">
                <h2>Website ini dibuat oleh:</h2>
                <table>
                <tbody>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td>Ika Lestari</td>
                    </tr>
                    <tr>
                        <td>Prodi</td>
                        <td>:</td>
                        <td>D3-MI PSDKU Kediri</td>
                    </tr>
                    <tr>
                        <td>NIM</td>
                        <td>:</td>
                        <td>2131730090</td>
                    </tr>
                    <tr>
                        <td>Tanggal</td>
                        <td>:</td>
                        <td>21 November 2023</td>
                    </tr>
                </tbody>
                </table>
            </div>


        </div>
    </div>
        </div>
    </div>

@endsection
