{{-- <div style="background: yellow">
    ini sidebar
</div> --}}

{{-- @extends('administrator.theme') --}}
{{-- @section('content') --}}
<div>
    <!-- navbar vertical -->
    <!-- Sidebar -->
    <nav class="navbar-vertical navbar">
        <div class="nav-scroller">
            <!-- Brand logo -->
            <a class="navbar-brand" href="./index.html" style="color: white">
                {{-- <img src="./assets/images/brand/logo/logo.svg" alt="" /> --}}
                <b>SISLAB POLINDRA</b>
            </a>
            <!-- Navbar nav -->
            <ul class="navbar-nav flex-column" id="sideNavbar">
                <li class="nav-item">
                    <a class="nav-link has-arrow active" href="./index.html">
                        <i data-feather="home" class="nav-icon icon-xs me-2"></i>
                        Dashboard
                    </a>
                </li>

                <!-- Nav item -->
                <li class="nav-item">
                    <div class="navbar-heading">MASTER DATA</div>
                </li>

                <!-- Nav item -->
                <li class="nav-item">
                    <a class="nav-link has-arrow collapsed" href="#!" data-bs-toggle="collapse"
                        data-bs-target="#navPages" aria-expanded="false" aria-controls="navPages">
                        <i data-feather="users" class="nav-icon icon-xs me-2"> </i>
                        Pengguna
                    </a>

                    <div id="navPages" class="collapse" data-bs-parent="#sideNavbar">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="./pages/profile.html">
                                    Admin
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link has-arrow" href="./pages/settings.html">
                                    Mahasiswa
                                </a>
                            </li>
                    </div>
                </li>

                <!-- Nav item -->
                <li class="nav-item">
                    <a class="nav-link" href="./pages/layout.html">
                        <i data-feather="box" class="nav-icon icon-xs me-2"> </i>
                        Barang
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./pages/layout.html">
                        <i data-feather="book-open" class="nav-icon icon-xs me-2"> </i>
                        Peminjaman
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./pages/layout.html">
                        <i data-feather="book" class="nav-icon icon-xs me-2"> </i>
                        Pengembalian
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</div>
{{-- @endsection --}}