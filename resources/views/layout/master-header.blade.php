    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
          <img src="img/logo/logo2.png">
        </div>
        <div class="sidebar-brand-text mx-3">RuangAdmin</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item {{ Request::is('admin') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('/admin') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Features
      </div>
      <li class="nav-item {{ Request::is('tambah-buku-digital','daftar-buku-digital') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap1"
          aria-expanded="true" aria-controls="collapseBootstrap1">
          <i class="far fa-fw fa-window-maximize"></i>
          <span>Buku Digital</span>
        </a>
        <div id="collapseBootstrap1" class="collapse {{ Request::is('tambah-buku-digital','daftar-buku-digital') ? 'show' : '' }}" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Buku Digital</h6>
            <a class="collapse-item {{ Request::is('tambah-buku-digital') ? 'active' : '' }}" href="{{ url('/tambah-buku-digital') }}">Tambah Buku Digital</a>
            <a class="collapse-item {{ Request::is('daftar-buku-digital') ? 'active' : '' }}" href="{{ url('/daftar-buku-digital') }}">Daftar Buku Digital</a>
            <a class="collapse-item {{ Request::is('daftar-buku-dibaca') ? 'active' : '' }}" href="{{ url('/daftar-buku-dibaca') }}">Daftar Sering Dibaca</a>
            <a class="collapse-item {{ Request::is('daftar-buku-terfavorit') ? 'active' : '' }}" href="{{ url('/daftar-buku-terfavorit') }}">Daftar Terfavorit</a>
          </div>
        </div>
      </li>
      <li class="nav-item {{ Request::is('tambah-buku-fisik','daftar-buku-fisik') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap2"
          aria-expanded="true" aria-controls="collapseBootstrap2">
          <i class="far fa-fw fa-window-maximize"></i>
          <span>Buku Fisik</span>
        </a>
        <div id="collapseBootstrap2" class="collapse {{ Request::is('tambah-buku-fisik','daftar-buku-fisik') ? 'show' : '' }}" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Buku Fisik</h6>
            <a class="collapse-item {{ Request::is('tambah-buku-fisik') ? 'active' : '' }}" href="{{ url('/tambah-buku-fisik') }}">Tambah Buku Fisik</a>
            <a class="collapse-item {{ Request::is('daftar-buku-fisik') ? 'active' : '' }}" href="{{ url('/daftar-buku-fisik') }}">Daftar Buku Fisik</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('daftar-jenis-buku') ? 'active' : '' }}" href="/daftar-jenis-buku" >
          <i class="fas fa-fw fa-table"></i>
          <span>Daftar Jenis Buku</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('masukan') ? 'active' : '' }}" href="/daftar-masukan" >
          <i class="fas fa-fw fa-table"></i>
          <span>Saran Dan Masukan</span>
        </a>
      </li>
      <li class="nav-item {{ Request::is('kelola-user') ? 'active' : '' }}" href="/kelola-user">
        <a class="nav-link" href="ui-colors.html">
          <i class="fas fa-fw fa-palette"></i>
          <span>Kelola User</span>
        </a>
      </li>
      <!-- <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Examples
      </div>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage" aria-expanded="true"
          aria-controls="collapsePage">
          <i class="fas fa-fw fa-columns"></i>
          <span>Pages</span>
        </a>
        <div id="collapsePage" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Example Pages</h6>
            <a class="collapse-item" href="login.html">Login</a>
            <a class="collapse-item" href="register.html">Register</a>
            <a class="collapse-item" href="404.html">404 Page</a>
            <a class="collapse-item" href="blank.html">Blank Page</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span>
        </a>
      </li>
      <hr class="sidebar-divider">
      <div class="version" id="version-ruangadmin"></div> -->
    </ul>
    <!-- Sidebar -->
