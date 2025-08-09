<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>@yield('title', 'Dashboard Admin')</title>

  <!-- Google Fonts & Icons -->
  <link href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded" rel="stylesheet">

  <!-- Nucleo Icons & Material Dashboard CSS -->
  <link href="{{ asset('adminpage/assets/css/nucleo-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('adminpage/assets/css/nucleo-svg.css') }}" rel="stylesheet">
  <link href="{{ asset('adminpage/assets/css/material-dashboard.css') }}" rel="stylesheet">

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

  <!-- Additional styles (optional from child views) -->
  @stack('styles')
</head>
<body class="g-sidenav-show bg-gray-100">

  <!-- Sidebar -->
  @include('admin.partials.sidebar')

  <!-- Main Content -->
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
    @include('admin.partials.navbar')

    <div class="container-fluid py-4">
      @yield('content')
    </div>
  </main>

  <!-- Core JS Files -->
  <script src="{{ asset('adminpage/assets/js/core/popper.min.js') }}"></script>
  <script src="{{ asset('adminpage/assets/js/core/bootstrap.min.js') }}"></script>
  <script src="{{ asset('adminpage/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
  <script src="{{ asset('adminpage/assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
  <script src="{{ asset('adminpage/assets/js/plugins/chartjs.min.js') }}"></script>
  <script src="{{ asset('adminpage/assets/js/material-dashboard.min.js') }}"></script>

  <!-- Additional scripts (optional from child views) -->
  @stack('scripts')
</body>
</html>
  