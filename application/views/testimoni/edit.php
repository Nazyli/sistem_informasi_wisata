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
                                <img class="profile-user-img img-fluid img-circle" src="https://i.pravatar.cc/50" alt="User profile picture">
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
                                <form action="<?php echo base_url(); ?>testimoni/update/<?= $wisata->testimoni_id; ?>" method="post" id="testimoni">
                                    <div class="post">
                                        <div class="user-block">
                                            <img class="img-circle img-bordered-sm" src="https://i.pravatar.cc/20?u=<?= $wisata->id; ?>" alt="user image">
                                            <span class="username">
                                                <a href="#"><?= $wisata->nama; ?></a>
                                                <div class="float-right btn-tool">
                                                    <div class="rating d-inline">
                                                        <input id="rating-5" type="radio" name="rating" value="5" <?php if ($wisata->rating == 5) {
                                                                                                                        echo "checked";
                                                                                                                    } ?> /><label for="rating-5"><i class="fas fa-star"></i></label>
                                                        <input id="rating-4" type="radio" name="rating" value="4" <?php if ($wisata->rating == 4) {
                                                                                                                        echo "checked";
                                                                                                                    } ?> /><label for="rating-4"><i class="fas fa-star"></i></label>
                                                        <input id="rating-3" type="radio" name="rating" value="3" <?php if ($wisata->rating == 3) {
                                                                                                                        echo "checked";
                                                                                                                    } ?> /><label for="rating-3"><i class="fas fa-star"></i></label>
                                                        <input id="rating-2" type="radio" name="rating" value="2" <?php if ($wisata->rating == 2) {
                                                                                                                        echo "checked";
                                                                                                                    } ?> /><label for="rating-2"><i class="fas fa-star"></i></label>
                                                        <input id="rating-1" type="radio" name="rating" value="1" <?php if ($wisata->rating == 1) {
                                                                                                                        echo "checked";
                                                                                                                    } ?> /><label for="rating-1"><i class="fas fa-star"></i></label>
                                                    </div>
                                                </div>
                                            </span>
                                            <span class="description"><?= $wisata->web; ?> - <?= $wisata->created_at; ?></span>
                                        </div>
                                        <p class="ulasan">
                                        <div class="input-group input-group-sm mb-0">
                                            <input class="form-control form-control-sm" name="komentar" placeholder="Edit Komentar" value="<?= $wisata->komentar; ?>">
                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-danger">Edit</button>
                                            </div>
                                        </div>
                                        </p>
                                        <p class="mt-2">
                                            <a href="whatsapp://send?text=<?= 'By : ' . $wisata->nama . ' - ' . $wisata->komentar; ?>" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                                            <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>