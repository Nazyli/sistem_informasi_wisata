<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Master Users</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/home">Admin</a></li>
                        <li class="breadcrumb-item active">Master Users</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <?php if (isset($userId)) { ?>
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Edit Data</h3>
                            </div>
                            <div class="card-body">
                                <form action="<?php echo base_url(); ?>admin/users/update/<?= $userId->id; ?>" method="post" id="addJenisWisata">
                                    <div class="form-group">
                                        <label for="exampleInputBorder"><strong><i class="fas fa-id-card "></i> Full Name</strong></label>
                                        <input type="text" class="form-control form-control-border" id="nama" name="nama" value="<?= $userId->nama; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputBorder"><strong><i class="fas fa-user"></i> Username</strong></label>
                                        <input type="text" class="form-control form-control-border" id="username" name="username" value="<?= $userId->username; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputBorder"><strong><i class="fas fa-envelope"></i> Email</strong></label>
                                        <input type="text" class="form-control form-control-border" id="email" name="email" value="<?= $userId->email; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputBorder"><strong><i class="fas fa-user-cog"></i> Role</strong></label>
                                        <select class="custom-select form-control-border" name="role">
                                            <option disabled value></option>
                                            <option value="admin" <?php if ($userId->role == 'admin') {
                                                                        echo "selected";
                                                                    } ?>>Administrator</option>
                                            <option value="member" <?php if ($userId->role == 'member') {
                                                                        echo "selected";
                                                                    } ?>>Membership</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputBorder"><strong><i class="fas fa-industry"></i> Profesi</strong></label>
                                        <select class="custom-select form-control-border" name="profesi">
                                            <?php foreach ($profesi->result() as $i) { ?>
                                                <option value="<?= $i->id; ?>" <?php if ($i->id == $userId->profesi_id) {
                                                                                    echo "selected";
                                                                                } ?>><?= $i->nama; ?></option>
                                            <?php } ?>
                                        </select>
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
                                <form action="<?php echo base_url(); ?>admin/users/save" method="post" id="register">
                                    <div class="form-group">
                                        <label for="exampleInputBorder"><strong><i class="fas fa-id-card "></i> Full Name</strong></label>
                                        <input type="text" class="form-control form-control-border" id="nama" name="nama">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputBorder"><strong><i class="fas fa-user"></i> Username</strong></label>
                                        <input type="text" class="form-control form-control-border" id="username" name="username">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputBorder"><strong><i class="fas fa-envelope"></i> Email</strong></label>
                                        <input type="text" class="form-control form-control-border" id="email" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputBorder"><strong><i class="fas fa-lock"></i> Password</strong></label>
                                        <input type="password" class="form-control form-control-border" id="password" name="password">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputBorder"><strong><i class="fas fa-lock"></i> Retype password</strong></label>
                                        <input type="password" class="form-control form-control-border" id="retype" name="retype">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputBorder"><strong><i class="fas fa-user-cog"></i> Role</strong></label>
                                        <select class="custom-select form-control-border" name="role">
                                            <option disabled selected value></option>
                                            <option value="admin">Administrator</option>
                                            <option value="member">Membership</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputBorder"><strong><i class="fas fa-industry"></i> Profesi</strong></label>
                                        <select class="custom-select form-control-border" name="profesi">
                                            <option disabled selected value></option>
                                            <?php foreach ($profesi->result() as $i) { ?>
                                                <option value="<?= $i->id; ?>"><?= $i->nama; ?></option>
                                            <?php } ?>
                                        </select>
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
                        <h3 class="card-title">Data Master Users</h3>
                        <div class="card-tools">
                            <?php if (isset($userId)) { ?>
                                <a href="<?php echo base_url(); ?>admin/users" class="btn btn-primary btn-sm"> Add Data </a>
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
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($users->result() as $i) { ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $i->nama; ?></td>
                                        <td> <?= $i->username; ?></td>
                                        <td> <?= $i->email; ?></td>
                                        <td>
                                            <?php if ($i->role == 'admin') { ?>
                                                <span class="badge badge-danger">Administrator</span>
                                            <?php } else { ?>
                                                <span class="badge badge-primary">Membership</span>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <a href="<?php echo base_url(); ?>admin/users/edit/<?= $i->id; ?>" class="btn btn-outline-primary btn-sm"><i class="fas fa-pencil-alt fa-xl"></i></a>
                                            <?php if ($this->session->userdata('id') != $i->id) { ?>
                                                <a href="<?php echo base_url(); ?>admin/users/delete/<?= $i->id; ?>" class="btn btn-outline-danger btn-sm" onclick="swalSuccesDelete(event)"><i class="fas fa-trash fa-xl"></i></a>
                                            <?php } ?>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        Sistem Informasi Wisata Kota Depok
                    </div>
                </div>
            </div>
        </div>
</div>
</section>
</div>