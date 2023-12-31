<div>
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/', []) }}"
            wire:navigate>
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">SPK OSN </div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item @if(Request::is('/'))
active
        @endif">
            <a class="nav-link" href="{{ url('/', []) }}" wire:navigate>
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Home</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Interface
        </div>

        <li class="nav-item @if(Request::is('olimpiade'))
        active
                @endif ">
            <a class="nav-link" href="{{ url('olimpiade', []) }}" wire:navigate>
                <i class="fas fa-fw fa-table"></i>
                <span>Olimpiade</span></a>
        </li>
        <li class="nav-item @if(Request::is('kriteria'))
        active
                @endif ">
            <a class="nav-link" href="{{ url('kriteria', []) }}" wire:navigate>
                <i class="fas fa-fw fa-table"></i>
                <span>Kriteria</span></a>
        </li>
        <li class="nav-item @if(Request::is('bobotnilai'))
        active
                @endif">
            <a class="nav-link" href="{{ url('bobotnilai', []) }}" wire:navigate>
                <i class="fas fa-fw fa-table"></i>
                <span>Bobot Nilai Kriteria</span></a>
        </li>
        <li class="nav-item @if(Request::is('perbandingan'))
        active
                @endif">
            <a class="nav-link" href="{{ url('perbandingan', []) }}" wire:navigate>
                <i class="fas fa-fw fa-table"></i>
                <span>Perbandingan</span></a>
        </li>

        <li class="nav-item @if(Request::is('data-siswa'))
        active
                @endif">
            <a class="nav-link" href="{{ url('data-siswa', []) }}" wire:navigate>
                <i class="fas fa-fw fa-table"></i>
                <span>Data Siswa</span></a>
        </li>
        <li class="nav-item @if(Request::is('penilaian'))
        active
                @endif ">
            <a class="nav-link" href="{{ url('penilaian', []) }}" wire:navigate>
                <i class="fas fa-fw fa-table"></i>
                <span>Penilaian</span></a>
        </li>
        <li class="nav-item @if(Request::is('hasil-penentuan'))
        active
                @endif">
            <a class="nav-link" href="{{ url('hasil-penentuan', []) }}" wire:navigate>
                <i class="fas fa-fw fa-table"></i>
                <span>Hasil penentuan</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">



        <li class="nav-item">
            <a class="nav-link" href="tables.html">
                <i class="fas fa-fw fa-table"></i>
                <span>Akun</span></a>
        </li>



    </ul>
</div>
