   <!-- Sidebar -->
   <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/admin') }}">
        <div class="sidebar-brand-icon">
            <img src="{{ asset('assets/img/logo.png') }}" width="35px" alt="">
        </div>
        <div class="sidebar-brand-text mx-3">OKK 2021</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider mt-3">

    <div class="sidebar-heading mt-3">
        Utama
    </div>

    <li class="nav-item active">
        <a class="nav-link" href="{{ url('/admin') }}">
            <i class="fas fa-chart-line"></i>
            <span>Dashboard</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <div class="sidebar-heading mt-3">
        Master Data
    </div>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ url('pengumumanAdmin') }}">
            <i class="fas fa-bullhorn"></i>
            <span>Pengumuman</span></a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href="{{ url('galeriAdmin') }}">
            <i class="fas fa-photo-video"></i>
            <span>Galeri</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->

@stack('sidebar-scripts')