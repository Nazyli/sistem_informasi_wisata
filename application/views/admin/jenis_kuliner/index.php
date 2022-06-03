<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Jenis Wisata Kuliner</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/home">Admin</a></li>
                        <li class="breadcrumb-item active">Kelola Jenis Wisata Kuliner</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <?php if (isset($jenis_kuliner)) { ?>
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Edit Data</h3>
                            </div>
                            <div class="card-body">
                                <form action="<?php echo base_url(); ?>admin/jenis_kuliner/update/<?= $jenis_kuliner->id; ?>" method="post" id="addJenisWisata">
                                    <div class="form-group">
                                        <label for="exampleInputBorder"><strong><i class="fas fa-map-marked-alt"></i> Jenis Wisata Kuliner</strong></label>
                                        <input type="text" class="form-control form-control-border" id="namaJenisWisata" name="namaJenisWisata" value="<?= $jenis_kuliner->nama; ?>">
                                    </div>
                                    <button class="btn btn-primary btn-block"><b>Save</b></button>
                                </form>
                            </div>
                        </div>
                    <?php } else { ?>
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Add Data</h3>
                            </div>
                            <div class="card-body">
                                <form action="<?php echo base_url(); ?>admin/jenis_kuliner/save" method="post" id="addJenisWisata">
                                    <div class="form-group">
                                        <label for="exampleInputBorder"><strong><i class="fas fa-map-marked-alt"></i> Jenis Wisata Kuliner</strong></label>
                                        <input type="text" class="form-control form-control-border" id="namaJenisWisata" name="namaJenisWisata">
                                    </div>
                                    <button class="btn btn-primary btn-block"><b>Save</b></button>
                                </form>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="col-md-9">
                    <div class="card card-primary card-outline"">
                        <div class=" card-header">
                        <h3 class="card-title">Kelola Data Jenis Wisata Kuliner</h3>
                        <div class="card-tools">
                            <?php if (isset($jenis_kuliner)) { ?>
                                <a href="<?php echo base_url(); ?>admin/jenis_kuliner" class="btn btn-primary btn-sm"> Add Data </a>
                            <?php } ?>
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
                                    <th>Total Wisata</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($jenis_kuliner_all->result() as $i) { ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $i->nama; ?></td>
                                        <td> <?= $i->total; ?></td>
                                        <td>
                                            <a href="<?php echo base_url(); ?>admin/jenis_kuliner/edit/<?= $i->id; ?>" class="btn btn-outline-primary btn-sm"><i class="fas fa-pencil-alt fa-xl"></i></a>
                                            <a href="<?php echo base_url(); ?>admin/jenis_kuliner/delete/<?= $i->id; ?>" class="btn btn-outline-danger btn-sm" onclick="swalSuccesDelete(event)"><i class="fas fa-trash fa-xl"></i></a>
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