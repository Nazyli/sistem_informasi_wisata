<div class="content-wrapper">

    <div class="content-header">
        <div class="container">
            <div class="row mb-2 mt-4">
                <div class="col-sm-6">
                    <div class="d-flex flex-row">
                        <div class="mr-1">
                            <h1><?php echo $rekreasi->nama; ?> </h1>
                        </div>
                        <div>
                            <sup>
                                <?php
                                createStar($rekreasi->bintang);
                                ?>
                            </sup>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <?php if ($rekreasi->jenis_wisata_id != null) { ?>
                            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>wisata/rekreasi">Wisata Rekreasi</a></li>
                        <?php } else { ?>
                            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>wisata/kuliner">Wisata Kuliner</a></li>
                        <?php } ?>
                        <li class="breadcrumb-item active"><?php echo $rekreasi->nama; ?></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">Detail Wisata - <?php echo $rekreasi->nama; ?></h3>
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
                                            <?php echo $rekreasi->deskripsi; ?>
                                        </p>
                                        <div class="alert alert-success">
                                            <b>Fasilitas : </b> <?php echo $rekreasi->fasilitas; ?>
                                        </div>
                                        <div class="alert alert-info">
                                            <b>Kontak : </b> <?php echo $rekreasi->kontak; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative">
                                        <iframe src="https://maps.google.com/maps?q=<?php echo $rekreasi->latlong; ?>&hl=es;z=14&amp;output=embed" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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
                                            <h3 class="card-title text-primary">
                                                <?php echo count($testimoni->result()); ?>
                                                Testimony & Komentar
                                            </h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <?php foreach ($testimoni->result() as $i) { ?>
                                                    <div class="col-md-4">
                                                        <div class="post clearfix">
                                                            <div class="user-block">
                                                                <img class="img-circle img-bordered-sm" src="https://img.pngio.com/cool-phone-icon-202181-free-icons-library-cool-cell-phone-png-512_512.jpg" alt="User Image">
                                                                <span class="username">
                                                                    <a href="#"><?php echo $i->nama; ?></a>
                                                                    <?php if ($this->session->userdata('logged_in') == TRUE) {
                                                                        if ($i->user_id == $this->session->userdata('id')) {
                                                                    ?>
                                                                            <div class="float-right btn-tool">
                                                                                <a href="<?php echo base_url(); ?>testimoni/edit/<?= $i->id; ?>" class="text-primary ml-3"><i class="fas fa-pencil-alt fa-xl"></i></a>
                                                                                <a href="<?php echo base_url(); ?>testimoni/delete/<?= $i->id; ?>" class="text-danger ml-3" onclick="swalSuccesDelete(event)"><i class="fas fa-trash fa-xl"></i></a>
                                                                            </div>
                                                                    <?php }
                                                                    } ?>
                                                                </span>
                                                                <span class="description">
                                                                    <?php echo $i->profesi; ?> <sup>
                                                                        <?php
                                                                        createStar($i->rating);
                                                                        ?></sup>
                                                                </span>
                                                            </div>
                                                            <p>
                                                                <?php echo $i->komentar; ?>
                                                            </p>
                                                        </div>
                                                    </div>

                                                <?php } ?>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="card card-primary card-outline">
                                                        <div class="card-body">
                                                            <?php if ($this->session->userdata('logged_in') == TRUE) { ?>
                                                                <form action="<?php echo base_url(); ?>testimoni/saveByWisata/<?= $rekreasi->id ?>" method="post" id="testimoni">
                                                                    <div class="post">
                                                                        <div class="user-block">
                                                                            <img class="img-circle img-bordered-sm" src="https://i.pravatar.cc/150" alt="user image">
                                                                            <span class="username">
                                                                                <a href="<?php echo base_url(); ?>profile/me"><?= $user->nama; ?></a>
                                                                                <div class="float-right btn-tool">
                                                                                    <div class="rating-star d-inline">
                                                                                        <input id="rating-5" type="radio" name="rating" value="5" /><label for="rating-5"><i class="fas fa-star"></i></label>
                                                                                        <input id="rating-4" type="radio" name="rating" value="4" /><label for="rating-4"><i class="fas fa-star"></i></label>
                                                                                        <input id="rating-3" type="radio" name="rating" value="3" /><label for="rating-3"><i class="fas fa-star"></i></label>
                                                                                        <input id="rating-2" type="radio" name="rating" value="2" /><label for="rating-2"><i class="fas fa-star"></i></label>
                                                                                        <input id="rating-1" type="radio" name="rating" value="1" /><label for="rating-1"><i class="fas fa-star"></i></label>
                                                                                    </div>
                                                                                </div>
                                                                            </span>
                                                                            <span class="description mt-1">
                                                                                <b> <?= $profesi->nama; ?></b> -
                                                                                <?php if ($user->role == 'admin') { ?>
                                                                                    <span class="badge badge-danger">Administrator</span>
                                                                                <?php } else { ?>
                                                                                    <span class="badge badge-primary">Membership</span>
                                                                                <?php } ?>
                                                                            </span>
                                                                            <label id="rating-error" class="invalid-feedback" for="rating"></label>
                                                                        </div>
                                                                        <p class="ulasan">
                                                                        <div class="input-group input-group-sm mb-0">
                                                                            <input class="form-control form-control-sm" type="text" id="komentar" name="komentar" placeholder="Add Response Testimoni">
                                                                            <div class="input-group-append">
                                                                                <button type="submit" class="btn btn-danger">Send</button>
                                                                            </div>
                                                                            <label id="komentar-error" class="invalid-feedback" for="komentar"></label>
                                                                        </div>
                                                                        </p>
                                                                    </div>
                                                                </form>
                                                            <?php } else { ?>
                                                                <blockquote class="quote-secondary">
                                                                    <h5><i class="fas fa-comments"></i> Note:</h5>
                                                                    <b><a href="<?php echo base_url(); ?>login">Silakan Login!</a> </b> untuk menambahkan komentar
                                                                </blockquote>
                                                                <div class="input-group input-group-sm mb-0">
                                                                    <input class="form-control form-control-sm" type="text" id="komentar" name="komentar" placeholder="Add Response Testimoni" disabled>
                                                                    <div class="input-group-append">
                                                                        <button type="submit" class="btn btn-danger" disabled>Send</button>
                                                                    </div>
                                                                    <label id="komentar-error" class="invalid-feedback" for="komentar"></label>
                                                                </div>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                </div>
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
    </div>
</div>