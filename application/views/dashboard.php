<div class="content-wrapper">
  <div class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-2 text-primary"> Sistem Informasi Wisata Kota Bandung</h1>
        </div>
      </div>
    </div>
  </div>
  <div class="content">
    <div class="container">
      <div class="row">
        <!-- RANDOM WISATA-->
        <?php foreach ($randRekreasi->result() as $i) { ?>
          <div class="col-lg-4">
            <div class="card" style="min-height: 340px;">
              <div class="card-body">
                <h5 class="card-title"><?php echo ($i->nama); ?></h5>
                <p class="card-text">
                <div class="row">
                  <div class="col-md-4">
                    <?php
                    $galleryWisata = $this->gallery_wisata_model->randWisataLimit($i->id, 1)->row();
                    if (isset($galleryWisata)) {
                      if ($galleryWisata->foto_wisata != NULL) {
                        $fotoPath = 'assets/upload/wisata/' . $galleryWisata->foto_wisata;
                        $foto = (file_exists($fotoPath)) ? $fotoPath : 'assets/dist/img/wisata.jpg';
                      } else {
                        $foto = 'assets/dist/img/wisata.jpg';
                      }
                      $foto_rand = $foto;
                    } else {
                      $foto_rand = 'assets/dist/img/wisata.jpg';
                    }
                    ?>
                    <img src="<?= base_url().$foto_rand; ?>" class="img-fluid mb-2 rounded" alt="Gambar" />
                  </div>
                  <div class="col-md-8">
                    <p class="text-secondary">
                      <?php echo ($i->deskripsi); ?>
                    </p>
                    <a href="<?php echo base_url(); ?>wisata/detail/<?php echo ($i->id); ?>" class="card-link">Detail</a>
                  </div>
                </div>
                </p>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
      <div class="row">
        <!-- RANDOM KULIENR-->
        <?php foreach ($randKuliner->result() as $i) { ?>
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title"><?php echo ($i->nama); ?></h5>
                <p class="card-text">
                <div class="row">
                  <div class="col-md-4">
                  <?php
                    $galleryWisata = $this->gallery_wisata_model->randWisataLimit($i->id, 1)->row();
                    if (isset($galleryWisata)) {
                      if ($galleryWisata->foto_wisata != NULL) {
                        $fotoPath = 'assets/upload/wisata/' . $galleryWisata->foto_wisata;
                        $foto = (file_exists($fotoPath)) ? $fotoPath : 'assets/dist/img/wisata.jpg';
                      } else {
                        $foto = 'assets/dist/img/wisata.jpg';
                      }
                      $foto_rand = $foto;
                    } else {
                      $foto_rand = 'assets/dist/img/wisata.jpg';
                    }
                    ?>
                    <img src="<?= base_url().$foto_rand; ?>" class="img-fluid mb-2 rounded" alt="Gambar" />
                  </div>
                  <div class="col-md-8">
                    <p class="text-secondary">
                      <?php echo ($i->deskripsi); ?>
                    </p>
                    <a href="<?php echo base_url(); ?>wisata/detail/<?php echo ($i->id); ?>" class="card-link">Detail</a>
                  </div>
                </div>
                </p>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
</div>