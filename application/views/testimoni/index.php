<div class="content-wrapper">
    <section class="content-header">
        <div class="container">
            <div class="row mb-2 mt-4">
                <div class="col-sm-6">
                    <h1>Pengelolaan Pencatatan Komentar</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?></a></li>
                        <li class=" breadcrumb-item"><a href="<?php echo base_url(); ?>admin/testimoni">Pengelolaan Pencatatan</a></li>
                        <li class="breadcrumb-item active">My Testimoni</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-3">

                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">

                        <div class="card-body box-profile">
                            <div class="text-center">
                                <?php
                                if ($user->foto != NULL) {
                                    $fotoPath = 'assets/upload/user/' . $user->foto;
                                    $foto = (file_exists($fotoPath)) ? $fotoPath : 'assets/dist/img/default.png';
                                } else {
                                    $foto = 'assets/dist/img/default.png';
                                }
                                ?>
                                <img class="profile-user-img img-fluid img-circle" src="<?= base_url() . $foto; ?>" alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center"><?= $user->nama; ?></h3>

                            <p class="text-muted text-center"><?= $profesi->nama; ?></p>

                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Nama</b> <a class="float-right"><?= $user->nama; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Username</b> <a class="float-right"><?= $user->username; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Email</b> <a class="float-right"><?= $user->email; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Profesi</b> <a class="float-right"><?= $profesi->nama; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Bergabung Pada</b> <a class="float-right"><?= date("d F Y h:m:s A", strtotime($this->session->userdata('created_at'))); ?></a>
                                </li>
                            </ul>
                            <a href="<?php echo base_url(); ?>profile/me" class="btn btn-primary btn-block"><b>My Profil</b></a>

                        </div>
                    </div>

                </div>

                <div class="col-md-9">
                    <div class="card card-primary card-outline"">
                            <div class=" card-header p-3">
                        <h3 class="card-title">Kelola Komentar Saya</h3>
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
                                <?php foreach ($wisata->result() as $i) {
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
                                    <div class="post">
                                        <div class="user-block">
                                            <img class="img-circle img-bordered-sm" src="<?= base_url() . $foto_rand; ?>" alt="user image">
                                            <span class="username">
                                                <a href="<?php echo base_url(); ?>wisata/detail/<?php echo $i->id; ?>"><?= $i->nama; ?></a>
                                                <div class="float-right btn-tool">
                                                    <a href="#" class=""> <?= createStar($i->rating); ?></a>
                                                    <a href="<?php echo base_url(); ?>testimoni/edit/<?= $i->testimoni_id; ?>" class="text-primary ml-3"><i class="fas fa-pencil-alt fa-xl"></i></a>
                                                    <a href="<?php echo base_url(); ?>testimoni/delete/<?= $i->testimoni_id; ?>" class="text-danger ml-3" onclick="swalSuccesDelete(event)"><i class="fas fa-trash fa-xl"></i></a>
                                                </div>
                                            </span>
                                            <span class="description"><?= $i->web; ?> - <?= $i->created_at; ?></span>
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