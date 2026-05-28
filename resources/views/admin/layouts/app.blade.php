<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light-style layout-menu-fixed" dir="ltr"
  data-theme="theme-default" data-assets-path="{{ asset('admin-assets/assets/')}}"
  data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Edion Admin Dashboard</title>

  {{-- <title>Admin Dashboard</title> --}}

  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="{{ asset('admin-assets/assets/media/edion.png') }}" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet" />

  <!-- Icons. Uncomment required icon fonts -->
  <link rel="stylesheet" href="{{ asset('admin-assets/assets/vendor/fonts/boxicons.css')}}">

  <!-- Core CSS -->
  <link rel="stylesheet" href="{{ asset('admin-assets/assets/vendor/css/core.css')}}"
    class="template-customizer-core-css" />
  <link rel="stylesheet" href="{{ asset('admin-assets/assets/vendor/css/theme-default.css')}}"
    class="template-customizer-theme-css" />
  <link rel="stylesheet" href="{{ asset('admin-assets/assets/css/demo.css')}}" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="{{ asset('admin-assets/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />

  <link rel="stylesheet" href="{{ asset('admin-assets/assets/vendor/libs/apex-charts/apex-charts.css')}}" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.1/dist/sweetalert2.min.css">
  <!-- Page CSS -->

  <!-- Helpers -->
  <script src="{{ asset('admin-assets/assets/vendor/js/helpers.js')}}"></script>

  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="{{ asset('admin-assets/assets/js/config.js')}}"></script>
  <style>
    canvas {
      border: 1px dotted red;
    }

    .chart-container {
      position: relative;
      margin: auto;
      height: 80vh;
      width: 80vw;
    }
  </style>
</head>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->

      <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <div class="app-brand demo">
          <a href="{{route('dashboard')}}" class="app-brand-link">
            <span class="app-brand-logo demo">
              @php
                $header_setting = \Illuminate\Support\Facades\DB::table('headers')->first();
              @endphp
              <img class="dark-mode" width="150px"
                src="{{ asset('storage/' . str_replace('public/', '', ($header_setting ? $header_setting->website_logo_light : ''))) }}"
                alt="Site Logo"> </span>
          </a>

          <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
          </a>
        </div>

        <div class="menu-inner-shadow"></div>

        @include('admin.layouts.sidebar');
      </aside>
      <!-- / Menu -->

      <!-- Layout container -->
      <div class="layout-page">
        <!-- Navbar -->

        @include('admin.layouts.navigation')

        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->

          @yield('main-content')
          <!-- / Content -->

          <!-- Footer -->
          @include('admin.layouts.footer')
          <!-- / Footer -->

          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
  </div>
  <!-- / Layout wrapper -->



  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.1/dist/sweetalert2.min.js"></script>
  <script src="{{ asset('admin-assets/assets/vendor/libs/jquery/jquery.js')}}"></script>
  <script src="{{ asset('admin-assets/assets/vendor/libs/popper/popper.js')}}"></script>
  <script src="{{ asset('admin-assets/assets/vendor/js/bootstrap.js')}}"></script>
  <script src="{{ asset('admin-assets/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>

  <script src="{{ asset('admin-assets/assets/vendor/js/menu.js')}}"></script>
  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="{{ asset('admin-assets/assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>

  <!-- Main JS -->
  <script src="{{ asset('admin-assets/assets/js/main.js')}}"></script>

  <!-- Page JS -->
  <script src="{{ asset('admin-assets/assets/js/dashboards-analytics.js')}}"></script>

  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>