<?php $this->load->view('function/function');
$uriString = $this->uri->uri_string();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SIWIKODE | Sistem Informasi Wisata Kota Depok</title>
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/dist/img/logo.png">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/style.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed text-sm">
  <div class="wrapper">
    <nav class="main-header navbar navbar-expand navbar-dark navbar-primary text-sm border-bottom-0">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">
            Sistem Informasi Wisata Kota Depok - SIWIKODE
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="dropdown user user-menu">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <img src="<?php echo base_url(); ?>assets/dist/img/user.jpg" class="user-image-sm" alt="User Image">
            <span class="hidden-xs"><?php echo $this->session->userdata('username') ?></span>
          </a>
          <ul class="dropdown-menu">
            <li class="user-header">
              <img src="<?php echo base_url(); ?>assets/dist/img/user.jpg" class="img-circle" alt="User Image">
              <p>
                <?php echo $this->session->userdata('username') ?> - <?= $this->session->userdata('profesi') ?>
                <small>Member since - <?php echo date("d F Y", strtotime($this->session->userdata('created_at')));  ?></small>
              </p>
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="float-left">
                <a href="<?php echo base_url(); ?>admin/profil" class="btn btn-primary btn-sm">Profile</a>
              </div>
              <div class="float-right">
                <a href="<?php echo base_url(); ?>login/logout" class="btn btn-danger btn-sm">Log out</a>
              </div>
            </li>
          </ul>
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
    <aside class="main-sidebar main-sidebar-custom sidebar-light-primary elevation-4">
      <a href="<?php echo base_url(); ?>" class="brand-link text-sm navbar-primary">
        <img src="<?php echo base_url(); ?>assets/dist/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light text-light">S I W I K O D E</span>
      </a>

      <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="<?php echo base_url(); ?>assets/dist/img/user.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="<?php echo base_url(); ?>admin/home" class="d-block">Administrator</a>
          </div>
        </div>

        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column nav-flat nav-compact nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>admin/home" class="nav-link <?= checkUri($uriString, 'home') ?>">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>admin/testimoni" class="nav-link <?= checkUri($uriString, 'testimoni') ?>">
                <i class="nav-icon fas fa-comment"></i>
                <p>
                  Testimony Wisata
                </p>
              </a>
            </li>
            <li class="nav-item <?php if (strpos($uriString, 'wisata/')) {echo "menu-open";}?>">
              <a href="#" class="nav-link <?= checkUri($uriString, 'wisata/') ?>">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  Wisata
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?php echo base_url(); ?>admin/wisata/rekreasi" class="nav-link <?= checkUri($uriString, 'rekreasi') ?>">
                    <i class="far fa-circle nav-icon text-info"></i>
                    <p>Wisata Rekreasi</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url(); ?>admin/wisata/kuliner" class="nav-link <?= checkUri($uriString, 'kuliner') ?>">
                    <i class="far fa-circle nav-icon text-info"></i>
                    <p class="">Wisata Kuliner</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-header">Master Data</li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>admin/jenis_wisata" class="nav-link <?= checkUri($uriString, 'jenis_wisata') ?>">
                <i class="nav-icon fas fa-map-marked-alt"></i>
                <p>
                  Jenis Rekreasi
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>admin/jenis_kuliner" class="nav-link <?= checkUri($uriString, 'jenis_kuliner') ?>">
                <i class="nav-icon fas fa-drumstick-bite"></i>
                <p>
                  Jenis Kuliner
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>admin/profesi" class="nav-link <?= checkUri($uriString, 'profesi') ?>">
                <i class="nav-icon fas fa-industry"></i>
                <p>
                  Profesi
                </p>
              </a>
            </li>

            <li class="nav-header">Profile</li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>admin/users" class="nav-link <?= checkUri($uriString, 'users') ?>">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  Master User
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>admin/profile" class="nav-link <?= checkUri($uriString, 'profile') ?>">
                <i class="nav-icon fas fa-user"></i>
                <p>
                  My Profile
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>about" class="nav-link <?= checkUri($uriString, 'about') ?>">
                <i class="nav-icon fas fa-info-circle"></i>
                <p>
                  About
                </p>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </aside>