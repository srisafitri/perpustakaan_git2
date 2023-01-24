<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="{{url('/dashboard')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>


                <a class="nav-link" href="{{url('/books')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    Buku
                </a>
                <a class="nav-link" href="{{url('/students')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Siswa
                </a>
                <a class="nav-link" href="{{url('/operators')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Operators
                </a>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div> Profil
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{url('/profil')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Pengaturan
                            </a></li>
                    </ul>
                </li>

            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            {{Auth::user()->name}}
        </div>
    </nav>
</div>