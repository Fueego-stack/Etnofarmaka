<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-radius-lg fixed-start ms-2 bg-white my-2" id="sidenav-main">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-dark opacity-5 position-absolute end-0 top-0 d-none d-xl-none" id="iconSidenav"></i>
    <a class="navbar-brand px-4 py-3 m-0" href="#">
      <img src="{{ asset('logo_toga.png') }}" class="navbar-brand-img" width="26" height="26" alt="logo">
      <span class="ms-1 text-sm text-dark">Toga Nusantara</span>
    </a>
  </div>
  <hr class="horizontal dark mt-0 mb-2">
  <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active bg-gradient-success text-white" href="{{ route('admin.dashboard') }}">
          <i class="material-symbols-rounded opacity-5">dashboard</i>
          <span class="nav-link-text ms-1">Dashboard</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link text-dark" href="#">
          <i class="material-symbols-rounded opacity-5">groups</i>
          <span class="nav-link-text ms-1">Data Pengguna</span>
        </a>
      </li>

      <!-- Menu Tambah Tanaman -->
      <li class="nav-item">
        <a class="nav-link text-dark" href="{{ route('tanaman.create') }}">
          <i class="material-symbols-rounded opacity-5">local_florist</i>
          <span class="nav-link-text ms-1">Tambah Tanaman</span>
        </a>
      </li>
    </ul>
  </div>
  <div class="sidenav-footer position-absolute w-100 bottom-0">
    <div class="mx-3">
      <a class="btn btn-outline-dark mt-4 w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/overview/material-dashboard" target="_blank">Dokumentasi</a>
    </div>
  </div>
</aside>
