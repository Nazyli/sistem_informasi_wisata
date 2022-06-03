<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Gallery Wisata <?= $wisata->nama; ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/home">Admin</a></li>
                        <li class="breadcrumb-item active">Kelola foto Wisata <?= $wisata->nama; ?></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Add Data</h3>
                        </div>
                        <div class="card-body">
                            <form action="<?php echo base_url(); ?>admin/gallery_wisata/save/<?= $wisata->id; ?>" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="customFile">Upload Foto</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="foto_wisata" name="foto_wisata">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-block"><b>Save</b></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card card-primary card-outline"">
                        <div class=" card-header">
                        <h3 class="card-title">Kelola Data Foto - <?= $wisata->nama; ?></h3>
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
                        <table id="datatable" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th class="w-75">Foto</th>
                                    <th>Hapus Foto</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($gallery_wisata->result() as $i) { ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <?php
                                        if ($i->foto_wisata != NULL) {
                                            $fotoPath = 'assets/upload/wisata/' . $i->foto_wisata;
                                            $foto = (file_exists($fotoPath)) ? $fotoPath : 'assets/dist/img/wisata.jpg';
                                        } else {
                                            $foto = 'assets/dist/img/default.png';
                                        }
                                        ?>
                                        <td>
                                            <img class="rounded mx-auto d-block img-thumbnail" src="<?= base_url() . $foto; ?>" alt="User Image">
                                        </td>
                                        <td>
                                            <a href="<?php echo base_url(); ?>admin/gallery_wisata/delete/<?= $i->id; ?>" class="btn btn-outline-danger btn-sm" onclick="swalSuccesDelete(event)"><i class="fas fa-trash fa-xl"></i></a>
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