<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laundry Berkah</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/assets/AdminLTE/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/assets/AdminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- uPlot -->
  <link rel="stylesheet" href="/assets/AdminLTE/plugins/uplot/uPlot.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/assets/AdminLTE/dist/css/adminlte.min.css">
  <!-- Icon style -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <!-- <li class="nav-item d-none d-sm-inline-block">
          <a href="/assets/AdminLTE/index3.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
        </li> -->
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">


        <!-- Messages Dropdown Menu -->

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
      <a href="/assets/AdminLTE/index3.html" class="brand-link">
        <img src="/assets/AdminLTE/dist/img/logolaundry.png" alt="Laundry Berkah Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Laundry Berkah</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="<?= base_url('/assets/AdminLTE/dist/img/avatar5.png') ?>" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block"><?= ucfirst(user()->username) ?></a>
          </div>
        </div>

        <!-- SidebarSearch Form -->
        <!-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->

            <!-- --- -->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="bi bi-speedometer2 nav-icon"></i>
                <p>
                  DASHBOARD
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/" class="nav-link">
                  <i class="bi bi-house mr-2"></i>
                    <p>Dashboard</p>
                  </a>
                </li>
              </ul>
            </li>
            <!-- ---------------- -->


            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="bi bi-bank nav-icon"></i>
                <p>
                  KEUANGAN
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/nota" class="nav-link">
                    <i class="bi bi-bag"></i>
                    <p>
                      Nota Order
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/pemasukan" class="nav-link">
                    <i class="bi bi-arrow-down"></i>
                    <p>
                      Pemasukan
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/pengeluaran" class="nav-link">
                    <i class="bi bi-arrow-up"></i>
                    <p>
                      Pengeluaran
                    </p>
                  </a>
                </li>
              </ul>
            </li>

            ----


            <li class="nav-header">KELUAR</li>
            <li class="nav-item">
              <a href="/logout" class="nav-link">
                <i class="nav-icon bi bi-box-arrow-right"></i>
                <p>
                  Keluar
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
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="ml-4"><?= $title; ?></h1>
            </div>
            <div class="col-sm-6">
              <!-- <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Layout</a></li>
                <li class="breadcrumb-item active">Fixed Layout</li>
              </ol> -->
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <?= $this->renderSection('content') ?>
        </div>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.1.0
      </div>
      <strong>Copyright &copy; 2022</strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="/assets/AdminLTE/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="/assets/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- uPlot -->
  <script src="/assets/AdminLTE/plugins/uplot/uPlot.iife.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="/assets/AdminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="/assets/AdminLTE/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="/assets/AdminLTE/dist/js/demo.js"></script>
  <!-- Page specific script -->
  <script>
    $(function() {
      /* uPlot
       * -------
       * Here we will create a few charts using uPlot
       */

      function getSize(elementId) {
        return {
          width: document.getElementById(elementId).offsetWidth,
          height: document.getElementById(elementId).offsetHeight,
        }
      }

      let data = [
        [0, 1, 2, 3, 4, 5, 6],
        [28, 48, 40, 19, 86, 27, 90],
        [65, 59, 80, 81, 56, 55, 40]
      ];

      //--------------
      //- AREA CHART -
      //--------------

      const optsAreaChart = {
        ...getSize('areaChart'),
        scales: {
          x: {
            time: false,
          },
          y: {
            range: [0, 100],
          },
        },
        series: [{},
          {
            fill: 'rgba(60,141,188,0.7)',
            stroke: 'rgba(60,141,188,1)',
          },
          {
            stroke: '#c1c7d1',
            fill: 'rgba(210, 214, 222, .7)',
          },
        ],
      };

      let areaChart = new uPlot(optsAreaChart, data, document.getElementById('areaChart'));

      const optsLineChart = {
        ...getSize('lineChart'),
        scales: {
          x: {
            time: false,
          },
          y: {
            range: [0, 100],
          },
        },
        series: [{},
          {
            fill: 'transparent',
            width: 5,
            stroke: 'rgba(60,141,188,1)',
          },
          {
            stroke: '#c1c7d1',
            width: 5,
            fill: 'transparent',
          },
        ],
      };

      let lineChart = new uPlot(optsLineChart, data, document.getElementById('lineChart'));

      window.addEventListener("resize", e => {
        areaChart.setSize(getSize('areaChart'));
        lineChart.setSize(getSize('lineChart'));
      });
    })
  </script>
</body>

</html>