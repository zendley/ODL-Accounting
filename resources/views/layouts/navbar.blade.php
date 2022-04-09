
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  {{-- <meta name="csrf-token" content="{{ csrf_token() }}"/> --}}
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title') || ODL</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">



    
  
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- fontawesom icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
  <!-- Datatables Css -->
  <link rel="stylesheet" href="{{ asset('assets/CSS/index.css') }}">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">





  {{-- Fullcalander --}}
  <meta charset='utf-8' />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" rel='stylesheet' />
  


  



</head>
<body class="hold-transition sidebar-mini layout-fixed">



  
<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('plugins/sparklines/sparkline.js') }}"></script>

<!-- JQVMap -->
<script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.js') }}"></script>
<!-- AdminLTE for demo purposes -->
{{-- <script src="{{ asset('dist/js/demo.js') }}"></script> --}}
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>
<!-- JS -->
<script src="{{ asset('assets/js//index.js') }}"></script>

{{-- DataTables Js --}}
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>


{{-- datatable function --}}
<script>
  $(document).ready(function() {
    $('#datatable').DataTable();
  } );
</script>


{{-- jsPDF & autoTable --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.debug.js"></script>
<script src="https://unpkg.com/jspdf-autotable@3.5.22/dist/jspdf.plugin.autotable.js"></script>


{{-- FullCalander --}}
{{-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


{{-- print --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/printThis/1.15.0/printThis.min.js"></script>


{{-- html2pdf --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>








<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset('assets/images/Avatar.png') }}" alt="AdminLTELogo" height="60" width="60">
  </div>

   <!-- Navbar -->
   {{--
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ asset('dist/img/user1-128x128.jpg') }}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ asset('dist/img/user8-128x128.jpg') }}" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ asset('dist/img/user3-128x128.jpg') }}" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar --> --}}

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #BB292A">
      <div class="sidebar">


        <div class="user-panel mt-3 pb-3 mb-3 d-flex" style="justify-content: center; border-bottom: none;">
            <div class="image" style="padding: 0%">
              <img src="{{asset('storage/logos/'.$apst->company_logo)}}" class="" alt="User Image" style="max-height: 6em; width:100%; ">
            </div>
            {{-- <div class="info">
              <a href="#" class="d-block">Alexander Pierce</a>
            </div> --}}
        
        

    {{-- <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div> --}}
      </div>

      <!-- SidebarSearch Form -->
      {{-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> --}}

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->



               <li class="nav-item">
                <a href="/" class="nav-link {{'/' == request()->path() ? 'active' : ''}} ">
                  <i class="nav-icon fas fa-house"></i>
                  <p>
                    Home
                    {{-- <span class="right badge badge-danger">New</span> --}}
                  </p>
                </a>
              </li>



              <li class="nav-item">
                <a href="/salesandreports" class="nav-link {{'salesandreports' == request()->path() ? 'active' : ''}} ">
                  <i class="nav-icon fas fa-file-signature"></i>
                  <p>
                    Sales & Expenses
                    {{-- <span class="right badge badge-danger">New</span> --}}
                  </p>
                </a>
              </li>
              


              <li class="nav-item 
              {{ 'suppliers' == request()->path() ? 'menu-open' : '' }}
              {{ 'supplier_payout' == request()->path() ? 'menu-open' : '' }}
              {{ 'supplier_weekly' == request()->path() ? 'menu-open' : '' }}
              ">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-truck-field"></i>
                  <p>
                    Suppliers
                    <i class="fas fa-angle-left right"></i>
                    {{-- <span class="badge badge-info right">6</span> --}}
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="/suppliers" class="nav-link {{'suppliers' == request()->path() ? 'active' : ''}} ">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Suppliers</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/supplier_payout" class="nav-link {{'supplier_payout' == request()->path() ? 'active' : ''}} ">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Suppliers Payout</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/supplier_weekly" class="nav-link {{'supplier_weekly' == request()->path() ? 'active' : ''}} ">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Suppliers Weekly Report</p>
                    </a>
                  </li>                
                </ul>
              </li>


              @role('Admin')   {{-- Only Admins can see these pages --}}
              <li class="nav-item 
              {{ 'staff' == request()->path() ? 'menu-open' : '' }}
              {{ 'staff_wages' == request()->path() ? 'menu-open' : '' }}
              {{ 'staff_payout' == request()->path() ? 'menu-open' : '' }}
              ">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-users"></i>
                  <p>
                    Staff
                    <i class="fas fa-angle-left right"></i>
                    {{-- <span class="badge badge-info right">6</span> --}}
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="/staff" class="nav-link {{'staff' == request()->path() ? 'active' : ''}} ">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Staff</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/staff_wages" class="nav-link {{'staff_wages' == request()->path() ? 'active' : ''}} ">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Staff Wages</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/staff_payout" class="nav-link {{'staff_payout' == request()->path() ? 'active' : ''}} ">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Staff Payouts</p>
                    </a>
                  </li>                
                </ul>
              </li>
              @endrole



              <li class="nav-item">
                <a href="/invoices" class="nav-link {{'invoices' == request()->path() ? 'active' : ''}} ">
                  <i class="nav-icon fa fa-file-invoice"></i>
                  <p>
                    invoice
                    {{-- <span class="right badge badge-danger">New</span> --}}
                  </p>
                </a>
              </li>



              <li class="nav-item">
                <a href="/quote" class="nav-link {{'quote' == request()->path() ? 'active' : ''}} ">
                  <i class="nav-icon fa fa-file-lines"></i>
                  <p>
                    Quote
                    {{-- <span class="right badge badge-danger">New</span> --}}
                  </p>
                </a>
              </li>



              <li class="nav-item">
                <a href="/calander" class="nav-link {{'calander' == request()->path() ? 'active' : ''}} ">
                  <i class="nav-icon fa fa-calendar-days"></i>
                  <p>
                    Calander
                    {{-- <span class="right badge badge-danger">New</span> --}}
                  </p>
                </a>
              </li>


              @role('Admin')   {{-- Only Admins can see these pages --}}
              <li class="nav-item 
              {{ 'admin_accounts' == request()->path() ? 'menu-open' : '' }}
              {{ 'user_accounts' == request()->path() ? 'menu-open' : '' }}
              {{ 'app_settings' == request()->path() ? 'menu-open' : '' }}
              ">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-gear"></i>
                  <p>
                    Settings
                    <i class="fas fa-angle-left right"></i>
                    {{-- <span class="badge badge-info right">6</span> --}}
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="/admin_accounts" class="nav-link {{'admin_accounts' == request()->path() ? 'active' : ''}} ">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Admin Accounts</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/user_accounts" class="nav-link {{'user_accounts' == request()->path() ? 'active' : ''}} ">
                      <i class="far fa-circle nav-icon"></i>
                      <p>User Accounts</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/app_settings" class="nav-link {{'app_settings' == request()->path() ? 'active' : ''}} ">
                      <i class="far fa-circle nav-icon"></i>
                      <p>App Settings</p>
                    </a>
                  </li>
                  {{-- <li class="nav-item">
                    <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Drop Database</p>
                    </a>
                  </li>                 --}}
                </ul>
              </li>
              @endrole



              <li class="nav-item" style="margin-top: 150px; background-color:rgba(0, 0, 0, .4); margin-left: -8px;">
                <a href="{{route('logout')}}" class="nav-link" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                  <i class="nav-icon fas fa-arrow-right-from-bracket"></i>
                  <p>
                    Logout
                    {{-- <span class="right badge badge-danger">New</span> --}}
                  </p>
                  <form id='logout-form' action="{{route('logout')}}" method="POST" style="display: none">
                    @csrf
                </form>
                </a>
              </li>

              

        


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">


    <!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2" style="justify-content: center; align-items: center;">
        <div class="col-sm-6" style="display: flex;">
            {{-- <li class="nav-item"> --}}
                <a class="nav-link" data-widget="pushmenu" href="#" role="button" style="color: #BB292A"><i class="fas fa-bars"></i></a>
              {{-- </li> --}}
          <h1 class="m-0" style="color: #BB292A">@yield('title')</h1>

          
        </div><!-- /.col -->
        
        <div class="col-sm-6" >
          {{-- <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard v1</li>
          </ol> --}}


          <div class="image d-flex" style="justify-content: flex-end; align-items: center;">
            <a href="#" class="nav-link" style="color: black; pointer-events: none; padding:0px;">{{{auth()->user()->name}}}</a>
            <img src="{{ asset('assets/images/Avatar.png') }}" class="rounded-circle" style="width: 50px;border-radius: 50px;" alt="User Image">
        </div>


        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
    


    @yield('content')




  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2022 <a style="color: #BB292A" href="">Zendley</a>.</strong>
    All rights reserved.
    <div style="color: #BB292A" class="float-right d-none d-sm-inline-block">
      <b style="color: #869099">Powered By</b> Muhammad Mushahid
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

</body>
</html>
