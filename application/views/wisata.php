<div class="content-wrapper">

  <div class="content-header">
    <div class="container">
      <div class="row mb-2 mt-4">
        <div class="col-sm-6">
          <h1>Daftar <?php echo $wisata; ?> Kota Depok</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active"><?php echo $wisata; ?></li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><?php echo $getOne->nama; ?></h5>
              <p class="card-text">
              <div class="row">
                <div class="col-md-4">
                <?php
                    $galleryWisata = $this->gallery_wisata_model->randWisataLimit($getOne->id, 1)->row();
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
                    <?php echo $getOne->deskripsi; ?>
                  </p>
                  <a href="<?php echo base_url(); ?>wisata/detail/<?php echo ($getOne->id); ?>" class="card-link">Detail</a>
                </div>
              </div>
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <?php foreach ($data->result() as $i) { ?>
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