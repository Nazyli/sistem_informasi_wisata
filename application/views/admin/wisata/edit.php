<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Edit Wisata <?= $judul; ?></h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
            <li class="breadcrumb-item"><a href="index.html">Admin</a></li>
            <li class="breadcrumb-item">Kelola Wisata <?= $judul; ?></li>
            <li class="breadcrumb-item active">Edit Data</li>
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
              <h3 class="card-title">Edit Data - <?= $wisata->nama; ?></h3>
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
              <form action="<?php echo base_url() .'admin/wisata/update/'. $wisata->id; ?>" method="post" id="addWisata">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label for="namaWisata" class="col-sm-4 col-form-label">Nama</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="namaWisata" id="namaWisata" value="<?= $wisata->nama; ?>" placeholder="Nama Tempat Wisata">
                      </div>
                    </div>
                    <?php if ($judul == 'Rekreasi') { ?>
                      <div class="form-group row">
                        <label for="jenisWisata" class="col-sm-4 col-form-label">Jenis Wisata</label>
                        <div class="col-sm-8">
                          <select class="custom-select" name="jenisWisata">
                            <option value="">Jenis Wisata</option>
                            <?php foreach ($rekreasi->result() as $i) { ?>
                              <option value="<?= $i->id; ?>" <?php if ($wisata->jenis_wisata_id == $i->id) {
                                                                echo "Selected";
                                                              } ?> ><?= $i->nama; ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>
                    <?php }
                    if ($judul == 'Kuliner') { ?>
                      <div class="form-group row">
                        <label for="jenisKuliner" class="col-sm-4 col-form-label">Jenis Kuliner</label>
                        <div class="col-sm-8">
                          <select class="custom-select" name="jenisKuliner">
                            <option value="">Jenis Kuliner</option>
                            <?php foreach ($kuliner->result() as $i) { ?>
                              <option value="<?= $i->id; ?>" <?php if ($wisata->jenis_kuliner_id == $i->id) {
                                                                echo "Selected";
                                                              } ?>><?= $i->nama; ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>
                    <?php } ?>


                    <div class="form-group row">
                      <label for="deskripsi" class="col-sm-4 col-form-label">Deskripsi</label>
                      <div class="col-sm-8">
                        <textarea class="form-control" rows="3" placeholder="Deskripsi Wisata . . ." name="deskripsi"><?= $wisata->deskripsi; ?></textarea>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="cp" class="col-sm-4 col-form-label">Fasilitas</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="fasilitas" id="fasilitas" value="<?= $wisata->fasilitas; ?>" placeholder="Fasilitas">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="noTelp" class="col-sm-4 col-form-label">No Telp</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="noTelp" id="noTelp" value="<?= $wisata->kontak; ?>" placeholder="Nomor HP / Telp">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label for="namaWisata" class="col-sm-4 col-form-label">Email</label>
                      <div class="col-sm-8">
                        <input type="email" class="form-control" name="email" id="email" value="<?= $wisata->email; ?>" placeholder="example@email.com">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="alamatWeb" class="col-sm-4 col-form-label">Alamat
                        Web</label>
                      <div class="col-sm-8">
                        <input type="url" class="form-control" name="alamatWeb" id="alamatWeb" value="<?= $wisata->web; ?>" placeholder="https://alamatwebsite.com">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
                      <div class="col-sm-8">
                        <textarea class="form-control" rows="3" placeholder="Alamat Lengkap Wisata . . ." name="alamat"><?= $wisata->alamat; ?></textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="LatLot" class="col-sm-4 col-form-label">Latitude,
                        Longitude</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="LatLot" id="LatLot" value="<?= $wisata->latlong; ?>" placeholder="ex : -6.352961,106.830286">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="float-right">
                      <button type="reset" class="btn btn-secondary">Reset</button>
                      <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                  </div>
                </div>
              </form>
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