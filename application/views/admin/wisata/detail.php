<?php
$judul = "";
if ($wisata->jenis_wisata_id != null) {
  $judul = "Rekreasi";
} else {
  $judul = "Kuliner";
}
?>
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Detail Wisata <?= $judul; ?></h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin">Admin</a></li>
            <li class="breadcrumb-item">Kelola Wisata <?= $judul; ?></li>
            <li class="breadcrumb-item active"><?= $wisata->nama; ?></li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h3 class="card-title">Detail Wisata - <?= $wisata->nama; ?> <sup><?= createStar($wisata->bintang); ?> </sup></h3>
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
              <!-- GALLERY -->
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header bg-lightblue">
                      <h3 class="card-title">Gallery Foto</h3>
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
                      <div class="row">
                        <?php
                        for ($x = 1; $x <= 6; $x++) {  ?>
                          <div class="col-sm-2">
                            <a href="http://cvsolokoi.com/wp-content/uploads/2021/01/9.png" data-toggle="lightbox" data-title="Gambar <?php echo $x; ?>" data-gallery="gallery">
                              <img src="http://cvsolokoi.com/wp-content/uploads/2021/01/9.png" class="img-fluid mb-2" alt="Gambar" />
                            </a>
                          </div>
                        <?php } ?>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="callout callout-success">
                    <h5 class="text-success"><i class="fas fa-info"></i> Deskripsi
                      Fasilitas:</h5>
                    <p>
                      <?php echo $wisata->deskripsi; ?>
                    </p>
                    <div class="alert alert-success">
                      <b>Fasilitas : </b> <?php echo $wisata->fasilitas; ?>
                    </div>
                    <div class="alert alert-info">
                      <b>Kontak : </b> <?php echo $wisata->kontak; ?>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="position-relative">
                    <iframe src="https://maps.google.com/maps?q=<?php echo $wisata->latlong; ?>&hl=es;z=14&amp;output=embed" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    <div class="ribbon-wrapper ribbon-xl">
                      <div class="ribbon bg-primary">
                        Alamat & Peta Lokasi
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="card card-primary card-outline">
                    <div class="card-header">
                      <h3 class="card-title text-primary"><?php echo count($testimoni->result());?>  Testimony & Komentar</h3>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <?php foreach ($testimoni->result() as $i) { ?>
                          <div class="col-md-4">
                            <div class="post clearfix">
                              <div class="user-block">
                                <img class="img-circle img-bordered-sm" src="https://img.pngio.com/cool-phone-icon-202181-free-icons-library-cool-cell-phone-png-512_512.jpg" alt="User Image">
                                <span class="username">
                                  <a href="#"><?php echo $i->nama; ?> - <?php echo $i->profesi; ?></a>
                                </span>
                                <span class="description">
                                  <?php
                                  createStar($i->rating);
                                  ?>
                                </span>
                              </div>
                              <p>
                                <?php echo $i->komentar; ?>
                              </p>
                            </div>
                          </div>

                        <?php } ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer">
              Sistem Informasi Wisata Kota Depok
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>