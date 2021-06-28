<div class="content-wrapper">

  <div class="content-header">
    <div class="container">
      <div class="row mb-2 mt-4">
        <div class="col-sm-6">
          <h1>Daftar Wisata Rekreasi Kota Depok</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Wisata Rekreasi</li>
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
                  <img src="https://placeimg.com/200/200/arc" class="img-fluid mb-2" alt="Gambar" />
                </div>
                <div class="col-md-8">
                  <p class="text-secondary">
                    <?php echo $getOne->deskripsi; ?>
                  </p>
                  <a href="<?php echo base_url(); ?>rekreasi/detail/<?php echo ($getOne->id); ?>" class="card-link">Detail</a>
                </div>
              </div>
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <?php foreach ($rekreasi->result() as $i) { ?>
          <div class="col-md-6">
            <div class="card">
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
                    <a href="<?php echo base_url(); ?>rekreasi/detail/<?php echo ($i->id); ?>" class="card-link">Detail</a>
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