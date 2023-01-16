<body class="hold-transition login-page" style="background-repeat: no-repeat;
            background-size: cover; background-image:url( <?= base_url('assets/template/foto/login3.jpg') ?> );">
    <div class="login-box">
        <div class="login-logo">
            <b>Login ADMIN</b>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <?php if ($this->session->flashdata('pesan')) : ?>
                    <?= $this->session->flashdata('pesan'); ?>
                <?php endif; ?>
                <p class="login-box-msg">Isikan form dengan benar.</p>

                <form action="<?= base_url('c_login/login') ?>" method="post">
                    <div class="input-group mb-3">
                        <input type="username" class="form-control" name="username" placeholder="Username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <label for="remember">
                                <a href="<?= base_url('') ?>" class="btn btn-warning btn-block">Kembali</a>
                            </label>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Masuk</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <div class="social-auth-links text-center mb-3">
                    <!-- <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a> -->
                </div>
                <!-- /.social-auth-links -->

                <!-- <p class="mb-1">
        <a href="#">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="#" class="text-center">Register a new membership</a>
      </p> -->
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="<?= base_url('assets/template') ?>/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('assets/template') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('assets/template') ?>/dist/js/adminlte.min.js"></script>

    <!-- <script>
    // setTimeout(function() {
    $.ajax({
        url: "http://localhost/spp_inay/data_santri/hilangflasdata",
    });
    // }, 1000);
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    })
    </script> -->
</body>