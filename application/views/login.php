<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | Sistem Informasi Wisata Kota Bandung</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/dist/img/logo.png">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/style.css">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="<?php echo base_url(); ?>" class="h1"><b>Wisata Bandung</b> </a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Sistem Informasi Wisata <small>(v 2.0)</small> </p>
                <form action="<?php echo base_url(); ?>login/proses" method="post" id="login">
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Email (admin@gmail.com)" name="email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        <label id="email-error" class="invalid-feedback" for="email"></label>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password (admin)" name="password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        <label id="password-error" class="invalid-feedback" for="password"></label>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <a href="<?php echo base_url(); ?>/login/register" class="text-center">Register a new membership</a>
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block swallShow" id="kliklogin">Log In</button>
                        </div>
                    </div>
                    <?php echo form_close(); ?>
            </div>
        </div>
    </div>

    <div class="modal hide fade" tabindex="-1" role="dialog" id="myModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Selamat Datang!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Untuk memulai aplikasi dapat menggunakan akun:</p>
                    <div class="alert alert-danger">
                        <b>Administrator : </b>
                        <h6>Email : admin@gmail.com </h6>
                        <h6>Password : admin </h6>
                    </div>
                    <div class="alert alert-primary">
                        <b>Membership : </b>
                        <h6>Email : member@gmail.com </h6>
                        <h6>Password : admin </h6>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-thumbs-up"></i> Great!</button>
                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-validation/additional-methods.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-validation/localization/messages_id.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/dist/js/style.js"></script>
    <script>
        <?php
        if ($this->session->flashdata('msg')) {
            $msg = $this->session->flashdata('msg');
        ?>
            $(document).ready(showNotif('<?php echo $msg[0]; ?>', '<?php echo $msg[1]; ?>'));
        <?php }
        unset($_SESSION['msg']); ?>
        $(window).on('load', function() {
            $('#myModal').modal('show');
        });
    </script>
</body>

</html>