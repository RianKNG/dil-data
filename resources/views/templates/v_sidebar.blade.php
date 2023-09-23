

  <nav class="mt-2">
    <li>
        <label for="">Dashboard</label>
    </li>
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
           <li class="{{ Request::is('/')? "active":"" }}">
        <a href="/" class="nav-link">
            <i class="nav-icon far fa-circle text-info"></i>
            <p class="btn-xs">Dashboard</p>
          </a>
      </li>
      <li class="{{ Request::is('/test')? "active":"" }}">
        <a href="/test" class="nav-link">
            <i class="nav-icon far fa-circle text-info"></i>
            <p class="btn-xs">Dashboard Accesories</p>
          </a>
      </li>
    <li>
        <label for="">Data Dil</label>
    </li>
    <li class="{{ Request::is('/dil')? "active":"" }}">
      <a href="/dil" class="nav-link">
        <i class="nav-icon far fa-circle text-danger"></i>
        <p class="btn-xs">
          Master DIL  {{ Auth::user()->name }}
        </p>
      </a>
    </li>
    <li>
      <label for="">Layanan</label>
    </li>
    <li class="{{ Request::is('/dil/add')? "active":"" }}">
      <a href="/dil/add" class="nav-link">
        <i class="nav-icon fa fa-plus text-danger"></i>
        <p class="btn-xs">
          Tambah DIl
        </p>
      </a>
    </li>
    <li class="{{ Request::is('/penutupan')? "active":"" }}">
      <a href="/penutupan" class="nav-link">
        {{-- <i class="nav-icon far fa-circle text-blue"></i> --}}
        <i class="nav-icon far fa-circle text-danger"></i>
        <p class="btn-xs">
          Penutupan
        </p>
      </a>
    </li>
     {{-- <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-th"></i>
        <p>
          Layanan SL Baru
        </p>
      </a>
    </li> --}}
    <li class="{{ Request::is('/penyambungan')? "active":"" }}">
      <a href="/penyambungan" class="nav-link">
        {{-- <i class="nav-icon far fa-circle text-success"></i> --}}
        <i class="nav-icon far fa-circle text-success"></i>
        <p class="btn-xs">
          Penyambungan
        </p>
      </a>
    </li>
    <li class="{{ Request::is('/penggantian')? "active":"" }}">
      <a href="/penggantian" class="nav-link">
        {{-- <i class="nav-icon far fa-circle text-white"></i> --}}
        <i class="nav-icon far fa-circle text-warning"></i>
        <p class="btn-xs">
          Penggantian
        </p>
      </a>
    </li>
    <li class="{{ Request::is('/bbn')? "active":"" }}">
      <a href="/bbn" class="nav-link">
        {{-- <i class="nav-icon far fa-circle text-green"></i> --}}
        <i class="nav-icon far fa-circle text-primary"></i>
        <p class="btn-xs">
          Balik Nama
        </p>
      </a>
    </li>
    <li>
      <label for="">Master Data</label>
    </li>
    <li class="{{ Request::is('/watermeter')? "active":"" }}">
      <a href="/watermeter" class="nav-link">
        <i class="nav-icon far fa-circle text-warning"></i>
        <p class="btn-xs">
          Master WM
        </p>
      </a>
    </li>
    <li class="{{ Request::is('/golongan')? "active":"" }}">
      <a href="/golongan" class="nav-link">
        <i class="nav-icon far fa-circle text-warning"></i>
        <p class="btn-xs">
          Master Golongan
        </p>
      </a>
    </li>
    <li>
      <label for="">Managenent User</label>
    </li>
      <li class="{{ Request::is('/user')? "active":"" }}">
        <a href="/user" class="nav-link">
          <i class="nav-icon far fa-circle text-danger"></i>
          <p class="btn-xs">
            Master User
          </p>
        </a>
      </li>
     
     
      <li>
        <label for="">Laporan</label>
      </li>

      <li class="{{ Request::is('/layanan')? "active":"" }}">
      {{-- <li class="nav-item"> --}}
        <a href="/layanan" class="nav-link">
          <i class="nav-icon fas fa-book"></i>
          <p class="btn-xs">
            Layanan
          </p>
        </a>
      </li>
      <li class="{{ Request::is('/layanan')? "active":"" }}">
        <a href="/report" class="nav-link">
          <i class="nav-icon fas fa-user"></i>
          <p class="btn-xs">
            Report Pelanggan
          </p>
        </a>
      </li>
    </ul>
  </nav> 