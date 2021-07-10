<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Selamat Datang</h1>
          <h6 class="mt-2 text-primary"> <i class="fas fa-minus mr-2"></i> Sistem Informasi Kota Depok</h6>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active"><a href="#">Admin</a></li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3 col-sm-6 col-12">
          <div class="info-box bg-primary disabled">
            <span class="info-box-icon"><i class="fas fa-map-marked-alt"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Wisata Rekreasi</span>
              <span class="info-box-number"><?php echo count($rekreasi->result()); ?> Wisata</span>

              <div class="progress">
                <div class="progress-bar" style="width: 100%"></div>
              </div>
              <span class="progress-description">
                <a href="rekreasi.html" class="text-light">
                  More info <i class="fas fa-arrow-circle-right"></i>
                </a>
              </span>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-12">
          <div class="info-box bg-teal">
            <span class="info-box-icon"><i class="fas fa-drumstick-bite"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Wisata Kuliner</span>
              <span class="info-box-number"><?php echo count($kuliner->result()); ?> Kuliner</span>

              <div class="progress">
                <div class="progress-bar" style="width: 100%"></div>
              </div>
              <a href="kuliner.html" class="text-light">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-12">
          <div class="info-box bg-indigo">
            <span class="info-box-icon"><i class="fas fa-comments"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Testimony</span>
              <span class="info-box-number"><?php echo count($testimoni->result()); ?> Komentar</span>

              <div class="progress">
                <div class="progress-bar" style="width: 100%"></div>
              </div>
              <a href="testimony.html" class="text-light">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-12">
          <div class="info-box bg-maroon">
            <span class="info-box-icon"><i class="far fa-images"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Gallery Foto</span>
              <span class="info-box-number"><?php echo count($gallery->result()); ?> Foto</span>

              <div class="progress">
                <div class="progress-bar" style="width: 100%"></div>
              </div>
              <span class="progress-description">
                Foto - foto wisata
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>


      <div class="row">
        <div class="col-md-6">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="<?php echo base_url(); ?>assets/dist/img/slide/1.jpg" alt="First slide">
                <div class="carousel-caption">
                  <h4>
                    Wisata Rekreasi & Kuliner Unggulan Kota Depok
                  </h4>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo base_url(); ?>assets/dist/img/slide/2.jpg" alt="Second slide">
                <div class="carousel-caption">
                  <h4>
                    Daftar Wisata Rekreasi Kota Depok
                  </h4>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo base_url(); ?>assets/dist/img/slide/3.jpg" alt="Third slide">
                <div class="carousel-caption">
                  <h4>
                    Daftar Wisata Kuliner Kota Depok
                  </h4>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-custom-icon" aria-hidden="true">
                <i class="fas fa-chevron-left"></i>
              </span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-custom-icon" aria-hidden="true">
                <i class="fas fa-chevron-right"></i>
              </span>
              <span class="sr-only">Next</span>
            </a>
          </div>

          <div class="position-relative p-3 bg-navy mt-2">
            <div class="ribbon-wrapper ribbon-lg">
              <div class="ribbon bg-primary">
                Information
              </div>
            </div>
            <blockquote class="bg-navy">
              <h5 class="quote-primary text-light"><i class="fas fa-info"></i> SIWIKODE</h5>
              <p>Aplikasi Sistem Informasi Kota Depok menyajikan berbagai informasi seputar wisata rekreasi &
                kuliner unggulan kota Depok </p>
              <small>Sistem Informasi Kota Depok <cite title="Source Title">SIWIKODE</cite></small>
            </blockquote>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card card-primary card-outline"">
                <div class=" card-header p-3">
            <h3 class="card-title">Testimony Komentar Terbaru</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <?php foreach ($new_testimoni->result() as $i) { ?>
                  <div class="post">
                    <div class="user-block">
                      <?php
                      if ($i->foto != NULL) {
                        $fotoPath = 'assets/upload/user/' . $i->foto;
                        $foto = (file_exists($fotoPath)) ? $fotoPath : 'assets/dist/img/default.png';
                      } else {
                        $foto = 'assets/dist/img/default.png';
                      }
                      ?>
                      <img class="img-circle img-bordered-sm" src="<?= base_url() . $foto; ?>" alt="user image">
                      <span class="username">
                        <a href="<?= base_url() . 'admin/testimoni/detail/' . $i->wisata_id ?>"><?= $i->nama; ?></a>
                        <a href="#" class="float-right btn-tool">
                          <?php createStar($i->rating); ?>

                        </a>
                      </span>
                      <span class="description">At <?= $i->wisata; ?> - <?= $i->created_at; ?></span>
                    </div>
                    <p class="ulasan">
                      <?= $i->komentar; ?>
                    </p>
                    <p class="mt-2">
                      <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                      <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>

                  </div>
                <?php } ?>

              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
</div>