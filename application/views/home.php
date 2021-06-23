<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SIWIKODE | Sistem Informasi Wisata Kota Depok</title>
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>/assetsdist/img/logo.png">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/plugins/ekko-lightbox/ekko-lightbox.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/dist/css/style.css">
</head>

<body class="hold-transition layout-top-nav layout-navbar-fixed text-sm">
  <div class="wrapper">
    <nav class="main-header navbar navbar-expand-md navbar-dark navbar-primary text-sm border-bottom-0">
      <div class="container">
        <a href="<?php echo base_url(); ?>/assetsindex.html" class="navbar-brand">
          <img src="<?php echo base_url(); ?>/assets/dist/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">S I W I K O D E</span>
        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a href="<?php echo base_url(); ?>/assetsindex.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>/assetsrekreasi.html" class="nav-link">Wisata Rekreasi</a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>/assetskuliner.html" class="nav-link">Wisata Kuliner</a>
            </li>
            <li class="nav-item dropdown">
              <a id="dropdownSubMenu1" href="<?php echo base_url(); ?>/assets#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Registrasi</a>
              <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                <li><a href="<?php echo base_url(); ?>/assetsrekreasi_tambah.html" class="dropdown-item">Registrasi Wisata Rekreasi</a></li>
                <li class="dropdown-divider"></li>
                <li><a href="<?php echo base_url(); ?>/assetskuliner_tambah.html" class="dropdown-item">Registrasi Wisata Kuliner </a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>/assetsabout.html" class="nav-link">About Me</a>
            </li>
          </ul>
        </div>
        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
          <li class=" user user-menu">
            <a href="<?php echo base_url(); ?>/assetslogin.html" class="nav-link">Login</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="carousel slide" id="carousel-711235">
      <ol class="carousel-indicators">
        <li data-slide-to="0" data-target="#carousel-711235" class="active">
        </li>
        <li data-slide-to="1" data-target="#carousel-711235">
        </li>
        <li data-slide-to="2" data-target="#carousel-711235">
        </li>
      </ol>
      <div class="carousel-inner" style="margin-top: 3.5rem!important;margin-bottom: -3rem!important;">
        <div class="carousel-item active">
          <img class="d-block w-100" alt="Carousel Bootstrap First" src="<?php echo base_url(); ?>/assets/dist/img/slide/1.jpg" />
          <div class="carousel-caption">
            <h4>
              Wisata Rekreasi & Kuliner Unggulan Kota Depok
            </h4>
            <p>
              Nikmatin berbagai pilihan Wisata Rekreasi & Wisata Kuliner yang terbaik di Kota Depok
            </p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" alt="Carousel Bootstrap Second" src="<?php echo base_url(); ?>/assets/dist/img/slide/2.jpg" />
          <div class="carousel-caption">
            <h4>
              Daftar Wisata Rekreasi Kota Depok
            </h4>
            <p>
              Di Kota Depok andak akan menemukan berbagai Wisata Rekreasi yang terbaik baik untuk anda maupun untuk
              keluarga anda.
            </p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" alt="Carousel Bootstrap Third" src="<?php echo base_url(); ?>/assets/dist/img/slide/3.jpg" />
          <div class="carousel-caption">
            <h4>
              Daftar Wisata Kuliner Kota Depok
            </h4>
            <p>
              Makanan terbaik kuliner di Kota Depok kami sajikan berbagai macam pilihan ketika anda berkunjung di Kota
              Depok
            </p>
          </div>
        </div>
      </div> <a class="carousel-control-prev" href="<?php echo base_url(); ?>/assets#carousel-711235" data-slide="prev"><span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" href="<?php echo base_url(); ?>/assets#carousel-711235" data-slide="next"><span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
    </div>
    <div class="content-wrapper">
      <div class="content-header">
        <div class="container">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-2 text-primary"> Sistem Informasi Wisata Kota Depok <small>SIWIKODE</small></h1>
            </div>
          </div>
        </div>
      </div>
      <div class="content">
        <div class="container">
          <div class="row">
            <!-- RANDOM 3 STAR 5 -->
            <?php foreach ($randFive->result() as $i) { ?>
              <div class="col-lg-4">
                <div class="card" style="min-height: 340px;">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo ($i->nama); ?></h5>
                    <p class="card-text">
                    <div class="row">
                      <div class="col-md-4">
                        <img src="https://placeimg.com/480/480/nature" class="img-fluid mb-2" alt="Gambar" />
                      </div>
                      <div class="col-md-8">
                        <p class="text-secondary">
                        <?php echo ($i->deskripsi); ?>
                        </p>
                        <a href="<?php echo base_url(); ?>/assetsrekreasi_detail.html" class="card-link">Detail</a>
                      </div>
                    </div>
                    </p>
                  </div>
                </div>
              </div>
            <?php } ?>
          </div>
          <div class="row">
            <!-- RANDOM 4 STAR 4 -->
            <?php foreach ($randFour->result() as $randFour) { ?>
            <div class="col-md-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title"><?php echo ($randFour->nama); ?></h5>
                  <p class="card-text">
                  <div class="row">
                    <div class="col-md-4">
                      <img src="https://placeimg.com/480/480/arch" class="img-fluid mb-2" alt="Gambar" />
                    </div>
                    <div class="col-md-8">
                      <p class="text-secondary">
                      <?php echo ($randFour->deskripsi); ?>
                      </p>
                      <a href="<?php echo base_url(); ?>/assetskuliner_detail_2.html" class="card-link">Detail</a>
                    </div>
                  </div>
                  </p>
                </div>
              </div>
            </div>
            <?php }?>
          </div>
        </div>
      </div>
    </div>

    <aside class="control-sidebar control-sidebar-dark">
      <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
      </div>
    </aside>

    <footer class="main-footer">
      <div class="float-right d-none d-sm-inline">
        <b>Version</b> 1.0
      </div>
      <strong>Develop By <a href="<?php echo base_url(); ?>/assetsadmin/about.html">Mahasiswa</a> &copy; STT NF
        <script>
          document.write(new Date().getFullYear());
        </script> ~ Sistem Informasi Wisata Kota Depok.
      </strong>
    </footer>
  </div>
  <script src="<?php echo base_url(); ?>/assets/plugins/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/plugins/jquery-validation/jquery.validate.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/plugins/jquery-validation/additional-methods.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/plugins/jquery-validation/localization/messages_id.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/plugins/sweetalert2/sweetalert2.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/dist/js/adminlte.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/dist/js/demo.js"></script>
  <script src="<?php echo base_url(); ?>/assets/dist/js/style.js"></script>
</body>

</html>