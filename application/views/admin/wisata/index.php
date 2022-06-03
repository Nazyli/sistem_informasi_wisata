<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Wisata <?= $judul ?></h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Admin</a></li>
            <li class="breadcrumb-item active">Kelola Wisata Wisata <?= $judul ?></li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Kelola Data Wisata <?= $judul ?></h3>
              <div class="card-tools">
                <a href="<?php echo base_url(); ?>admin/wisata/create/<?= $judul; ?>" class="btn btn-primary btn-sm"> Add Data </a>
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <table id="datatable" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jenis Wisata</th>
                    <th>Rating</th>
                    <th>Kontak Person</th>
                    <th>Upload Foto</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no =1; foreach ($wisata->result() as $i) { ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $i->nama; ?></td>
                      <td><?= $i->wisata; ?></td>
                      <td><?= createStar($i->bintang); ?></td>
                      <td><?= $i->kontak; ?></td>
                      <td> <a href="<?php echo base_url(); ?>admin/gallery_wisata/index/<?= $i->id; ?>">Gallery Foto</a></td>
                      <td>
                        <a href="<?php echo base_url(); ?>admin/wisata/detail/<?= $i->id; ?>" class="btn btn-outline-info btn-sm"><i class="fas fa-info-circle fa-xl"></i></a>
                        <a href="<?php echo base_url(); ?>admin/wisata/edit/<?= $i->id; ?>" class="btn btn-outline-primary btn-sm"><i class="fas fa-pencil-alt fa-xl"></i></a>
                        <a href="<?php echo base_url(); ?>admin/wisata/delete/<?= $i->id; ?>" class="btn btn-outline-danger btn-sm" onclick="swalSuccesDelete(event)"><i class="fas fa-trash fa-xl"></i></a>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
            <div class="card-footer">
              Sistem Informasi Wisata Kota Bandung
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>