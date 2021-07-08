<div class="content-wrapper">
    <section class="content-header">
        <div class="container">
            <div class="row mb-2 mt-4">
                <div class="col-sm-6">
                    <h1>My Profile</h1>
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
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-8">
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
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="<?php echo base_url(); ?>profile/edit" class="btn btn-primary btn-block"><b>Edit</b></a>

                                </div>
                                <div class="col-md-6">
                                    <a href="<?php echo base_url(); ?>profile/changePassword" class="btn btn-primary btn-block"><b>Change Password</b></a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</section>
</div>