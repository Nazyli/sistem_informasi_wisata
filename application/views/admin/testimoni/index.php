<?php
$this->load->model('testimoni_model');
?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Pengelolaan Pencatatan Komentar</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/testimoni">Pengelolaan Pencatatan</a></li>
                        <li class="breadcrumb-item active">Testimony Tempat Wisata</li>
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
                            <h3 class="card-title">Testimony Tempat Wisata</h3>
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
                                        <th>Nama</th>
                                        <th>Total</th>
                                        <th>Testimoni 1</th>
                                        <th>Testimoni 2</th>
                                        <th>Testimoni 3</th>
                                        <th width="50">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($wisata->result() as $i) {
                                        $testimoni = $this->testimoni_model->findByWisataId($i->id)->result();
                                    ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $i->nama++; ?>
                                            <td><?= count($testimoni) ?>
                                            </td>
                                            <?php
                                            for ($j = 0; $j < 3; $j++) {
                                                if (count($testimoni) > $j) { ?>
                                                    <td>
                                                        <div class="post clearfix">
                                                            <div class="user-block">
                                                                <?php
                                                                if ($testimoni[$j]->foto != NULL) {
                                                                    $fotoPath = 'assets/upload/user/' . $testimoni[$j]->foto;;
                                                                    $foto = (file_exists($fotoPath)) ? $fotoPath : 'assets/dist/img/default.png';
                                                                } else {
                                                                    $foto = 'assets/dist/img/default.png';
                                                                }
                                                                ?>
                                                                <img class="img-circle img-bordered-sm" src="<?= base_url() . $foto; ?>" alt="User Image">
                                                                <span class="username text-xs">
                                                                    <a href="#"><?= $testimoni[$j]->nama; ?></a>
                                                                </span>
                                                                <span class="description text-xs">
                                                                    <?= createStar($testimoni[$j]->rating); ?>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                <?php } else { ?>
                                                    <td></td>
                                            <?php }
                                            } ?>
                                            <td>
                                                <a href="<?php echo base_url(); ?>admin/testimoni/detail/<?= $i->id; ?>" class="btn btn-block btn-primary btn-xs">Show All</a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>