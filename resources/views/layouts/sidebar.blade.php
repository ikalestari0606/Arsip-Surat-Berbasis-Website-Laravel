<style>
    .background{
        background-color: #0D0D8C;
        border-radius: 10px;
        margin: 10px;
    }

    .navbar-nav .nav-item .nav-link {
        position: relative;
        transition: background-color 0.3s ease;
        border-radius: 10px 0 0 10px;
        margin: 5px;
    }

    .navbar-nav .nav-item .nav-link:hover {
        background-color: #ffffff;
        color: #0D0D8C;
    }

    .navbar-nav .nav-item .nav-link:hover::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(255, 255, 255, 0.2);
        z-index: -1;
    }

    .nav-item.active .nav-link:hover i {
    color: #0D0D8C;
    }
</style>

<ul class="navbar-nav background sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon">
        <img src="{{ asset('img/logo_polinema.png') }}" alt="Logo" style="height: 40px; width: auto;">
    </div>
        <div class="sidebar-brand-text mx-3">Arsip Surat</div>
    </a>

    <!-- Nav Item - Dashboard -->
    @if (auth()->user()->level === 'administrator' || auth()->user()->level === 'pelaksana' || auth()->user()->level === 'fungsional')
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>
    @endif 

    @if (auth()->user()->level === 'administrator' || auth()->user()->level === 'pelaksana')

        <!-- Arsip -->
        <li class="nav-item active">
    <a class="nav-link" href="{{ route('Arsip') }}">
        <i class="fas fa-fw fa-folder"></i>
        <span>Arsip Surat</span>
    </a>
</li>
<li class="nav-item active">
    <a class="nav-link" href="{{ route('Kategori') }}">
        <i class="fas fa-fw fa-folder"></i> <!-- Change the class to represent a folder icon -->
        <span>Kategori Surat</span>
    </a>
</li>
<li class="nav-item active">
    <a class="nav-link" href="{{ route('About') }}">
        <i class="fas fa-fw fa-folder"></i>
        <span>About</span>
    </a>
</li>


    @endif
</ul>
