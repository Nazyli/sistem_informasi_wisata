<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Change Password</h1>
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
                                <img class="profile-user-img img-fluid img-circle" src="https://i.pravatar.cc/50" alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center"><?= $user->nama; ?></h3>

                            <p class="text-muted text-center"><?= $profesi->nama; ?></p>
                            <form action="<?php echo base_url(); ?>profile/updatePassword/<?= $user->id; ?>" method="post" id="register">

                                <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item">
                                        <b>Password Lama</b> <a class="float-right">
                                            <input type="password" class="form-control form-control-border" id="passLama" name="passLama">
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Password Baru</b> <a class="float-right">
                                            <input type="password" class="form-control form-control-border" id="password" name="password">
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Retype Password</b> <a class="float-right">
                                            <input type="password" class="form-control form-control-border" id="retype" name="retype">

                                        </a>
                                    </li>
                                </ul>
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