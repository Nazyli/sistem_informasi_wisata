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
        <!-- RANDOM WISATA-->
        <?php foreach ($randRekreasi->result() as $i) { ?>
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
                    <a href="<?php echo base_url(); ?>assetsrekreasi_detail.html" class="card-link">Detail</a>
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
                    <img src="https://placeimg.com/480/480/arch" class="img-fluid mb-2" alt="Gambar" />
                  </div>
                  <div class="col-md-8">
                    <p class="text-secondary">
                      <?php echo ($i->deskripsi); ?>
                    </p>
                    <a href="<?php echo base_url(); ?>assetskuliner_detail_2.html" class="card-link">Detail</a>
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