<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit My Profile</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/home">Admin</a></li>
                        <li class="breadcrumb-item active">My Profile</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-md-center">
                <div class="col-md-8">
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
                                <img class="profile-user-img img-fluid img-circle" src="<?= base_url().$foto; ?>" alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center"><?= $user->nama; ?></h3>

                            <p class="text-muted text-center"><?= $profesi->nama; ?></p>
                            <form action="<?php echo base_url(); ?>profile/update/<?= $user->id; ?>" method="post" id="register" enctype="multipart/form-data">
                                <ul class="list-group list-group-unbordered mb-3">

                                    <li class="list-group-item">
                                        <b>Nama</b> <a class="float-right">
                                            <input type="text" class="form-control form-control-border" id="nama" name="nama" value="<?= $user->nama; ?>">
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Username</b> <a class="float-right">
                                            <input type="text" class="form-control form-control-border" id="username" name="username" value="<?= $user->username; ?>">
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Email</b> <a class="float-right">
                                            <input type="text" class="form-control form-control-border" id="email" name="email" value="<?= $user->email; ?>">

                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Profesi</b><a class="float-right">
                                            <select class="custom-select form-control-border" name="profesi">
                                                <?php foreach ($profesi_all->result() as $i) { ?>
                                                    <option value="<?= $i->id; ?>" <?php if ($i->id == $user->profesi_id) {
                                                                                        echo "selected";
                                                                                    } ?>><?= $i->nama; ?></option>
                                                <?php } ?>
                                            </select>
                                        </a>
                                    </li>
                                </ul>
                                <div class="form-group">
                                    <label for="customFile">Change account picture</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="foto" name="foto">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-block"><b>Save</b></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</section>
</div>