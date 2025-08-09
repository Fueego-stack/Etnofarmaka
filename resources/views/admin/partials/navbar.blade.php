<nav class="navbar navbar-main navbar-expand-lg px-0 mx-3 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
  <div class="container-fluid py-1 px-3">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="#">Admin</a></li>
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">@yield('title')</li>
      </ol>
    </nav>

    <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
      <!-- Search -->
      <div class="ms-md-auto pe-md-3 d-flex align-items-center">
        <div class="input-group input-group-outline">
          <label class="form-label">Search...</label>
          <input type="text" class="form-control">
        </div>
      </div>

      <!-- Right Menu -->
      <ul class="navbar-nav d-flex align-items-center justify-content-end">
        <!-- Settings -->
        <li class="nav-item px-3 d-flex align-items-center">
          <a href="#" class="nav-link text-body p-0">
            <i class="material-symbols-rounded">settings</i>
          </a>
        </li>

        <!-- Notifications -->
        <li class="nav-item dropdown pe-3 d-flex align-items-center">
          <a href="#" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="material-symbols-rounded">notifications</i>
          </a>
          <ul class="dropdown-menu dropdown-menu-end px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
            <li>
              <a class="dropdown-item border-radius-md" href="#">Tidak ada notifikasi</a>
            </li>
          </ul>
        </li>

        <!-- Profile & Logout -->
        <li class="nav-item dropdown pe-3 d-flex align-items-center">
          <a href="#" class="nav-link p-0 d-flex align-items-center" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="{{ asset('images/p1.jpg') }}" alt="Admin" class="avatar avatar-sm rounded-circle">
            <span class="ms-2 d-none d-sm-inline text-dark fw-bold">
              {{ Auth::user()->name ?? 'Admin' }}
            </span>
          </a>
          <ul class="dropdown-menu dropdown-menu-end px-2 py-3 me-sm-n4" aria-labelledby="profileDropdown">
            <li>
              <a class="dropdown-item border-radius-md" href="#">
                <i class="material-symbols-rounded me-2">person</i> Profil Saya
              </a>
            </li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="dropdown-item border-radius-md text-danger">
                  <i class="material-symbols-rounded me-2">logout</i> Logout
                </button>
              </form>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
