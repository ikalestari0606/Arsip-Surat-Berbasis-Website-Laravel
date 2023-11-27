@extends('layouts.app')

@section('title', 'Dashboard')

@section('contents')

<div class="card shadow mb-4">
<div class="card-header py-3">
<div class="row mb-4">
    <div class="col-md-4">
        <form action="{{ route('dashboard.filter') }}" method="POST">
            @csrf
            
    </div>
</div>

<div id="result-container">
            <div class="row">    
                <div class="col-md-6 mb-3">
                    <a href="{{ route('Arsip') }}" style="text-decoration: none; color: inherit;">
                        <div class="card h-100" style="border-left: 4px solid #9999FF; color: #9999FF;">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-custom text-uppercase mb-1" style="color: #9999FF;">
                                            Arsip</div>
                                        <div class="h5 mb-0 font-weight-bold text-muted">{{ $totalArsip }}</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-file fa-2x text-custom" style="color: #9999FF;"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 mb-3">
    <a href="{{ route('Kategori') }}" style="text-decoration: none; color: inherit;">
        <div class="card h-100" style="border-left: 4px solid #009999; color: #009999;">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-custom text-uppercase mb-1" style="color: #009999;">
                            Kategori</div>
                        <div class="h5 mb-0 font-weight-bold text-muted">{{ $totalKategori }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-tasks fa-2x text-custom" style="color: #009999;"></i>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>





       
    </div>
</div>





<script src="https://kit.fontawesome.com/YOUR_KIT_ID.js" crossorigin="anonymous"></script>







    
@endsection
