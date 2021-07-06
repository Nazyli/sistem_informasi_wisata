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
                        <li class="breadcrumb-item"><a href="testimony.html">Pengelolaan Pencatatan</a></li>
                        <li class="breadcrumb-item active"><?= $wisata->nama ?></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">

                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle" src="<?= base_url(); ?>assets/dist/img/kuliner/1.jpeg" alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center"><?= $wisata->nama ?></h3>
                            <p class="text-center"><a href="<?= $wisata->web; ?><"><?= $wisata->web; ?></a></p>
                            <p class="text-center"><?= createStar($wisata->bintang); ?></p>

                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Testimony</b> <a class="float-right"><?= count($testimoni->result()) ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Galery Foto</b> <a class="float-right">543</a>
                                </li>
                            </ul>
                            <a href="<?= base_url(); ?>admin/wisata/detail/<?= $wisata->id; ?>" class="btn btn-primary btn-block"><b>Detail</b></a>
                        </div>
                    </div>
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">About Travel</h3>
                        </div>
                        <div class="card-body">
                            <strong><i class="fas fa-book mr-1"></i> Description</strong>

                            <p class="text-muted">
                                <?= $wisata->deskripsi; ?>
                            </p>

                            <hr>
                            <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>
                            <p class="text-muted"><?= $wisata->alamat; ?></p>
                            <hr>
                        </div>
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="card card-primary card-outline"">
                            <div class=" card-header p-3">
                        <h3 class="card-title">Kelola Data Wisata Rekreasi</h3>
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
                        <div class="tab-content">
                            <div class="active tab-pane" id="activity">
                                <?php foreach ($testimoni->result() as $i) { ?>
                                    <div class="post">
                                        <div class="user-block">
                                            <img class="img-circle img-bordered-sm" src="https://i.pravatar.cc/20?u=<?= $i->id; ?>" alt="user image">
                                            <span class="username">
                                                <a href="#"><?= $i->nama; ?></a>
                                                <div class="float-right btn-tool">
                                                    <a href="#" class=""> <?= createStar($i->rating); ?></a>
                                                    <a href="<?php echo base_url(); ?>admin/testimoni/delete/<?= $i->id; ?>" class="text-danger ml-3" onclick="swalSuccesDelete(event)"><i class="fas fa-trash fa-xl"></i></a>
                                                </div>
                                            </span>
                                            <span class="description"><?= $i->profesi; ?> - <?= $i->created_at; ?></span>
                                        </div>
                                        <p class="ulasan">
                                            <?= $i->komentar; ?>
                                        </p>
                                        <p class="mt-2">
                                            <a href="whatsapp://send?text=<?= 'By : ' . $i->nama . ' - ' . $i->komentar; ?>" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                                            <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>