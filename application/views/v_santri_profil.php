<!-- <style>
    .main-footer {
        position: fixed;
        width: 100%;
        bottom: 0;
    }
</style> -->

<body class="layout-top-nav" style="height: auto;">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-green">
            <div class="container">
                <a href="<?= base_url('dashboard_santri') ?>" class="navbar-brand">
                    <img src="<?= base_url() ?>assets/template/foto/logo_pondok.png" alt="AdminLTE Logo"
                        class="brand-image img-circle elevation-3" style="opacity: .8">
                </a><a href="#" class="nav-link" style=" color: white; ">INAYATULLAH </a>
                <button class="navbar-toggler order-1" type="button" data-toggle="collapse"
                    data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav">
                        <li class="nav-item"></li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a type="button" href="<?= base_url() ?>c_login_tamu/logout"
                                class="btn btn-block btn-danger btn-sm"><b>LOGOUT</b></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Main content -->
        <div class="content" style="background-color: #EEEEEE;">
            <div class="container">

                <div class="container py-3">
                    <div class="row">
                        <div class="col">
                            <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                                <h3>Profil santri</h3>
                                <h6>Santri dapat melihat dan mengedit data dirinya.</h6>
                            </nav>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card mb-4">
                                <div class="card-body text-center">
                                    <img src="<?= base_url('assets/template/') ?>foto/<?php if ($data->foto) {
                            echo $data->foto; 
                        }else {
                            echo "profil.png";
                        }
                         ?>" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                                    <h5 class="my-3">Santri Inay</h5>
                                    <p class="text-muted mb-1"><?= $data->status ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Nama</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0"><?= $data->nama ?></p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">NIS</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0"><?= $data->nis ?></p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Tanggal Lahir</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0"><?= $data->tgl_lahir ?></p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Alamat</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0"><?= $data->alamat ?></p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Jenis Kelamin</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0"><?= $data->jenis_kelamin ?></p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Kamar</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0"><?= $data->nama_kmr ?></p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Kelas</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0"><?= $data->nama_kls ?></p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">No HP</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0"><?= $data->no_hp ?></p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Tanggal Masuk Pondok</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0"><?= $data->tgl_masuk ?></p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Status</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0"><?= $data->status ?></p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <a type="button" class="btn btn-warning"
                                                href="<?= base_url('dashboard_santri') ?>">Kembali</a>
                                            <!-- <a type="button" class="btn btn-success" href="<?= base_url('dashboard_santri') ?>">Edit</a> -->
                                            <button data-toggle="modal" data-target="#edit<?= $data->id ?>"
                                                class="btn btn-blue btn-success">Edit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Edit-->

        <div class="modal fade" id="edit<?= $data->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Data Santri</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('c_login_santri/edit/' . $data->id) ?>" method="POST"
                            enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="">Nama Santri</label>
                                <input type="text" name="nama" id="" class="form-control" value="<?= $data->nama ?>">
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal lahir</label>
                                <input type="date" name="tgl_lahir" id="" class="form-control"
                                    value="<?= $data->tgl_lahir ?>">
                            </div>
                            <div class="form-group">
                                <label for="">Alamat</label>
                                <input type="text" name="alamat" id="" class="form-control"
                                    value="<?= $data->alamat ?>">
                            </div>

                            <div class="form-group">
                                <label for="">Jenis Kelamin</label>
                                <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                                    <option value="Laki-laki" <?php if ($data->jenis_kelamin == 'Laki-laki') {
                                                                            echo 'selected';
                                                                        } ?>>Laki-laki</option>';
                                    <option value="Perempuan" <?php if ($data->jenis_kelamin != 'Laki-laki') {
                                                                            echo 'selected';
                                                                        } ?>>Perempuan</option>';
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="">Kamar</label>
                                <!-- <select class="form-control" name="id_kamar" id="id_kamar">
                                        <?php
                                        foreach ($kamar as $key => $value) {
                                            var_dump($value->id_kmr);
                                            echo '<option value="' . $value->id_kmr . '">' . $value->nama_kmr . '</option>';
                                        }
                                        ?>
                                    </select> -->
                                <select class="form-control" name="id_kamar" id="id_kamar">
                                    <?php foreach ($kamar as $key => $value) { ?>
                                    <option value="<?= $value->id_kmr; ?>" <?php if ($data->id_kamar == $value->id_kmr) {
                                                                                                echo 'selected';
                                                                                            } ?>>
                                        <?= $value->nama_kmr; ?></option>';
                                    <?php }
                                            ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="">Kelas</label>
                                <select class="form-control" name="id_kelas" id="id_kelas">
                                    <?php foreach ($kelas as $key => $value) { ?>
                                    <option value="<?= $value->id_kls; ?>" <?php if ($data->id_kelas == $value->id_kls) {
                                                                                                echo 'selected';
                                                                                            } ?>>
                                        <?= $value->nama_kls ?></option>';
                                    <?php }
                                            ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">No Hp</label>
                                <input type="text" name="no_hp" id="" class="form-control" value="<?= $data->no_hp ?>">
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal Masuk</label>
                                <input type="date" name="tgl_masuk" id="" class="form-control"
                                    value="<?= $data->tgl_masuk ?>">
                            </div>

                            <div class="form-group">
                                <label for="">Status</label>
                                <select class="form-control" name="status" id="status">
                                    <option value="Santri" <?php if ($data->status == 'Santri') {
                                                                        echo 'selected';
                                                                    } ?>>Santri</option>';
                                    <option value="Pengurus" <?php if ($data->status == 'Pengurus') {
                                                                            echo 'selected';
                                                                        } ?>>Pengurus</option>';
                                    <option value="Alumni" <?php if ($data->status == 'Alumni') {
                                                                        echo 'selected';
                                                                    } ?>>Alumni</option>';
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="">Foto</label>
                                <br>
                                <img src="<?= base_url('assets/template/') ?>foto/<?php if ($data->foto) {
                                        echo $data->foto; 
                                    }else {
                                        echo "profil.png";
                                    }
                                 ?>" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                                <input type="file" name="foto" id="foto" class="form-control" size="20"
                                    value="<?= $data->foto ?>">
                            </div>


                            <div class="modal-footer">
                                <!-- <button type="submit" class="btn btn-primary brn-sm"><i class="fas fa-save"></i></button> -->
                                <button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <div>
            <footer class="main-footer">
                <strong>Copyright &copy; 2022-2023 </strong> || Pondok Pesantren Inayatullah.
                <div class="float-right d-none d-sm-block">
                    <b>Version</b> 3.0.5
                </div>
            </footer>
        </div>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="<?= base_url('assets/template') ?>/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('assets/template') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables -->
    <script src="<?= base_url('assets/template') ?>/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('assets/template') ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url('assets/template') ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js">
    </script>
    <script src="<?= base_url('assets/template') ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js">
    </script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('assets/template') ?>/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url('assets/template') ?>/dist/js/demo.js"></script>
    <!-- page script -->
    <script>
    $(function() {
        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
    </script>
    <!-- ChartJS -->
    <script src="<?= base_url('assets/template') ?>/plugins/chart.js/Chart.min.js"></script>
    <!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.bundle.min.js'></script> -->
    <script>
    $(document).ready(function() {
        var ctx = $("#chart-line");
        var myLineChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ["Spring", "Summer", "Fall", "Winter"],
                datasets: [{
                    data: [1200, 1700, 800, 200],
                    backgroundColor: ["rgba(255, 0, 0, 0.5)", "rgba(100, 255, 0, 0.5)",
                        "rgba(200, 50, 255, 0.5)", "rgba(0, 100, 255, 0.5)"
                    ]
                }]
            },
            options: {
                title: {
                    display: true,
                    text: 'Weather'
                }
            }
        });
    });
    </script>
</body>

</html>