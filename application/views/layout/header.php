<?php $this->load->view('function/function'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIWIKODE | Sistem Informasi Wisata Kota Depok</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/dist/img/logo.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/ekko-lightbox/ekko-lightbox.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/style.css">
</head>

<body class="hold-transition layout-top-nav layout-navbar-fixed text-sm">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand-md navbar-dark navbar-primary text-sm border-bottom-0">
            <div class="container">
                <a href="<?php echo base_url(); ?>" class="navbar-brand">
                    <img src="<?php echo base_url(); ?>assets/dist/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                    <span class="brand-text font-weight-light">S I W I K O D E</span>
                </a>

                <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a href="<?php echo base_url(); ?>" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url(); ?>wisata/rekreasi" class="nav-link">Wisata Rekreasi</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url(); ?>wisata/kuliner" class="nav-link">Wisata Kuliner</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="dropdownSubMenu1" href="<?php echo base_url(); ?>assets#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Registrasi</a>
                            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                                <li><a href="<?php echo base_url(); ?>assetsrekreasi_tambah.html" class="dropdown-item">Registrasi Wisata Rekreasi</a></li>
                                <li class="dropdown-divider"></li>
                                <li><a href="<?php echo base_url(); ?>assetskuliner_tambah.html" class="dropdown-item">Registrasi Wisata Kuliner </a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url(); ?>about/me" class="nav-link">About Me</a>
                        </li>
                    </ul>
                </div>
                <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                    <li class=" user user-menu">
                        <?php
                        if ($this->session->userdata('logged_in') == TRUE) {
                            $id = $this->session->userdata('id');
                            $userLogin = $this->user_model->findById($id);
                            $userProfesi = $this->profesi_model->findById($userLogin->profesi_id);
                        ?>
                    <li class="nav-item dropdown">
                        <a id="dropdownSubMenu1" href="<?php echo base_url(); ?>assets#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle"><?= $userLogin->username; ?></a>
                        <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                            <?php if($this->session->userdata('role') == 'admin'){?>
                            <li><a href="<?php echo base_url(); ?>admin/home" class="dropdown-item">Admin</a></li>
                            <li class="dropdown-divider"></li>
                            <?php } ?>
                            <li><a href="<?php echo base_url(); ?>/login/logout" class="dropdown-item">Logout </a></li>
                        </ul>
                    </li>
                <?php } else { ?>
                    <a href="<?php echo base_url(); ?>login" class="nav-link">Login</a>
                <?php } ?>
                </li>
                </ul>
            </div>
        </nav>