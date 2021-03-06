<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Quản Lý Sinh Viên | Bảng Điều Khiển</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('public/backend/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('public/backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('public/backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('public/backend/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('public/backend/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('public/backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('public/backend/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('public/backend/plugins/summernote/summernote-bs4.min.css')}}">
  {{-- Validation Form CSS --}}
  <link rel="stylesheet" href="{{asset('public/backend/dist/css/formValidation.min.css')}}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{URL::to('public/backend/dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      {{-- <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> --}}
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

   
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">0</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">Không có thông báo</span>
          
      </li>
      <!-- Strat Logout admin -->
      <li class="nav-item ">
        <a class="nav-link"  href="{{URL::to('/logout-admin')}}">
            <i class="fas fa-power-off"></i>
        </a>
          
      </li>





      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{URL::to('public/backend/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Dev</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{URL::to('public/backend/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Session::get('admin_name')}}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Tìm Kiếm" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>




      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Bản Điều Khiển
              </p>
            </a>
          </li>
          {{-- Quản Lý Điểm --}}
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-marker nav-icon"></i>
              <p>
                Quản Lý Điểm
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{URL::to('/score-list')}}" class="nav-link">
                  <i class="fas fa-list nav-icon"></i>
                  <p> Danh Sách</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{URL::to('/scholarship')}}" class="nav-link">
                  <i class="fas fa-graduation-cap nav-icon"></i>
                  <p>Bảng Điểm Theo Lớp</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{URL::to('/add-point')}}" class="nav-link">
                  <i class="fas fa-plus-square nav-icon"></i>
                  <p> Nhập Điểm </p>
                </a>
              </li>
            </ul>
          </li>
          {{--Quản lý sinh viên--}}
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-user-graduate nav-icon"></i>
              <p>
                 Sinh Viên
                <i class="right fas fa-angle-left "></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{URL::to('/student-list')}}" class="nav-link">
                  <i class="fas fa-list nav-icon"></i>
                  <p> Danh Sách</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{URL::to('/add-student')}}" class="nav-link">
                  <i class="fas fa-plus-square nav-icon"></i>
                  <p>Thêm Sinh Viên</p>
                </a>
              </li>
            </ul>
          </li>
          {{--Quản lý Giảng Viên--}}
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-chalkboard-teacher nav-icon"></i>
              <p>
                Giảng Viên
                <i class="right fas fa-angle-left "></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{URL::to('lecturers-list')}}" class="nav-link">
                  <i class="fas fa-list nav-icon"></i>
                  <p> Danh Sách</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{URL::to('/add-lecturers')}}" class="nav-link">
                  <i class="fas fa-plus-square nav-icon"></i>
                  <p>Thêm Giảng Viên</p>
                </a>
              </li>
            </ul>
          </li>
          {{--Quản Lý Môn Học--}}
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-book nav-icon"></i>
              <p>
                Môn Học
                <i class="right fas fa-angle-left "></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{URL::to('subject-list')}}" class="nav-link">
                  <i class="fas fa-list nav-icon"></i>
                  <p> Danh Sách</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{URL::to('/add-subject')}}" class="nav-link">
                  <i class="fas fa-plus-square nav-icon"></i>
                  <p>Thêm Môn Học</p>
                </a>
              </li>
            </ul>
          </li>
          {{--Quản Lý Lớp Học--}}
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-school nav-icon"></i>
              <p>
                Lớp Học
                <i class="right fas fa-angle-left "></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{URL::to('class-list')}}" class="nav-link">
                  <i class="fas fa-list nav-icon"></i>
                  <p> Danh Sách</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{URL::to('/add-class')}}" class="nav-link">
                  <i class="fas fa-plus-square nav-icon"></i>
                  <p>Thêm Lớp Học</p>
                </a>
              </li>
            </ul>
          </li>
          {{--Quản Lý Ngành Học--}}
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-laptop nav-icon"></i>
              <p>
                Ngành Học
                <i class="right fas fa-angle-left "></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{URL::to('major-list')}}" class="nav-link">
                  <i class="fas fa-list nav-icon"></i>
                  <p> Danh Sách</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{URL::to('/add-major')}}" class="nav-link">
                  <i class="fas fa-plus-square nav-icon"></i>
                  <p>Thêm Ngành Học</p>
                </a>
              </li>
            </ul>
          </li>
          {{--Quản Lý Khóa--}}
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-id-card nav-icon"></i>
              <p>
                Khóa
                <i class="right fas fa-angle-left "></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{URL::to('course-list')}}" class="nav-link">
                  <i class="fas fa-list nav-icon"></i>
                  <p> Danh Sách</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{URL::to('/add-course')}}" class="nav-link">
                  <i class="fas fa-plus-square nav-icon"></i>
                  <p>Thêm Khóa</p>
                </a>
              </li>
            </ul>
          </li>
          {{--Lịch Học--}}
          <li class="nav-item">
            <a href="{{URL::to('/calendar')}}" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>
                Lịch Học
                <span class="badge badge-info right">0</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/calendar.html" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Quản Lý User
              </p>
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
      @yield('content-header')
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid"> 
         {{-- main-content --}}
         @yield('admin_content')
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2021 <a href="https://adminlte.io">Quản Lý Sinh Viên</a>.</strong>
    Đã Đăng Kí Bản Quyền.
    <div class="float-right d-none d-sm-inline-block">
      
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('public/backend/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('public/backend/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('public/backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('public/backend/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('public/backend/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('public/backend/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('public/backend/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('public/backend/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('public/backend/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('public/backend/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('public/backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('public/backend/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('public/backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('public/backend/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('public/backend/dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('public/backend/dist/js/pages/dashboard.js')}}"></script>
{{-- JQuery Validation Form --}}
<script src="{{asset('public/backend/dist/js/formValidation.js')}}"></script>
<script type="text/javascript">
  $.validate({

  });

</script>
<script>
$('#reservationtime').daterangepicker({
  timePicker: true,
  timePickerIncrement: 30,
  locale: {
    format: 'DD/MM/YYYY hh:mm A'
  }
})
$('#reservationdate').datetimepicker({
        format: 'L'
    });

  var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData        = {
      labels: [
          'Chrome',
          'IE',
          'FireFox',
          'Safari',
          'Opera',
          'Navigator',
      ],
      datasets: [
        {
          data: [700,500,400,600,300,100],
          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions
    })

    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieData        = donutData;
    var pieOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(pieChartCanvas, {
      type: 'pie',
      data: pieData,
      options: pieOptions
    })

</script>


</body>
</html>
