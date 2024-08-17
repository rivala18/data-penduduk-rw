<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  @yield('csrf')
  <title>@yield('title')</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href={{asset('assets/modules/bootstrap/css/bootstrap.min.css')}}>
  <link rel="stylesheet" href={{asset('assets/modules/fontawesome/css/all.min.css')}}>

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{asset('assets/modules/jquery-ui/jquery-ui.css')}}">
  <link rel="stylesheet" href={{asset('assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.css')}}>
  <link rel="stylesheet" href={{asset('assets/modules/datatables/scroller.bootstrap4.css')}}>
  <link rel="stylesheet" href={{asset('assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css')}}>
  <link rel="stylesheet" href="{{asset('assets/select2/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/modules/jquery-selectric/selectric.css')}}">
  @stack('libraries-css')

  <!-- Template CSS -->
  <link rel="stylesheet" href={{asset('assets/css/style.css')}}>
  <link rel="stylesheet" href={{asset('assets/css/components.css')}}>
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA -->
{{-- @route --}}
</head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
          </ul>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src={{asset('assets/img/avatar/avatar-1.png')}} class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi, Ujang Maman</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">Logged in 5 min ago</div>
              <a href="features-profile.html" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <a href="features-settings.html" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Settings
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href=" {{route('data.penduduk')}} ">Data Penduduk</a></li>
                <li><a class="nav-link" href=" {{route('penduduk.input')}} ">Input Data Penduduk</a></li>
                <li><a class="nav-link" href=" {{route('data.kk')}} ">Data Kartu Keluarga</a></li>
                {{-- <li><a class="nav-link" href=" {{route('kk.input')}} ">Input Data Kartu Keluarga</a></li> --}}
                {{-- <li><a class="nav-link" href="index.html">Ecommerce Dashboard</a></li> --}}
              </ul>
            </li>
          </ul>       
        </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
            @yield('content')
          {{-- <div class="section-header">
            <h1>uhuyy</h1>
          </div>

          <div class="section-body">
          </div> --}}
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
        </div>
        <div class="footer-right">
          
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src={{asset('assets/modules/jquery.min.js')}}></script>
  <script src={{asset('assets/modules/popper.js')}}></script>
  <script src={{asset('assets/modules/tooltip.js')}}></script>
  <script src={{asset('assets/modules/bootstrap/js/bootstrap.min.js')}}></script>
  <script src={{asset('assets/modules/nicescroll/jquery.nicescroll.min.js')}}></script>
  <script src={{asset('assets/modules/moment.min.js')}}></script>
  <script src={{asset('assets/js/stisla.js')}}></script>
  
  <!-- JS Libraies -->
  
  <script src={{asset('assets/modules/datatables/datatables.min.js')}}></script>
  <script src={{asset('assets/modules/datatables/dataTables.scroller.js')}}></script>
  <script src={{asset('assets/modules/datatables/scroller.bootstrap4.js')}}></script>
  <script src={{asset('assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js')}}></script>
  <script src="https://cdn.datatables.net/scroller/2.4.3/js/dataTables.scroller.js"></script>
  <script src="https://cdn.datatables.net/scroller/2.4.3/js/scroller.bootstrap4.js"></script>
  {{-- <script src="https://cdn.datatables.net/keytable/2.12.1/js/keyTable.bootstrap4.js"></script> --}}
  <script src={{asset('assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js')}}></script>
  <script src= {{asset('assets/modules/datatables/Responsive-2.2.1/js/dataTables.responsive.js')}} ></script>
  {{-- <script src={{asset('assets/modules/jquery-ui/jquery-ui.js')}}></script> --}}

  
  <script src={{asset('assets/modules/sweetalert/sweetalert.min.js')}}></script>
  
  <script src={{asset('assets/select2/select2.min.js')}}></script>
  <script src={{asset('assets/modules/jquery-selectric/jquery.selectric.min.js')}}></script>
  @stack('libraries-js')

  <!-- Page Specific JS File -->
  @stack('scripts')
  
  <!-- Template JS File -->
  <script src={{asset('assets/js/scripts.js')}}></script>
  <script src={{asset('assets/js/custom.js')}}></script>

</body>
</html>