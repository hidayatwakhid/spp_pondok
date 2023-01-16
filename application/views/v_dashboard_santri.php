<style>
.main-footer {
    position: fixed;
    width: 100%;
    bottom: 0;
}
</style>

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
                            <a type="button" href="<?= base_url() ?>c_login_santri/logout"
                                class="btn btn-block btn-danger btn-sm"><b>LOGOUT</b></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <h5 class="m-0 text-dark text-center">
                            <marquee>Sistem ini dibuat untuk memudahkan teman - teman
                                santri
                                dalam hal informasi
                                pembayaran biaya bulanan atau SPP atau Syahriah Semoga bermanfaat.
                            </marquee>
                        </h5>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container">
                <!-- isikonten -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h5 class="card-title m-0">Syahriah</h5>
                            </div>
                            <div class="card-body">
                                <h6 class="card-title">Berisi Informasi pembayaran syahriah.</h6>

                                <p class="card-text">Santri dapat melihat history pembayaran syahriah-nya.</p>
                                <a type="button" class="btn btn-sm btn-info"
                                    href="<?= base_url('c_login_santri/lihat/') ?><?= $this->session->userdata['id']; ?>">Lihat</a>
                                <!-- <a href="<?= base_url('c_login_santri/lihat/') ?><?= $this->session->userdata['id']; ?>" class="btn btn-info">Lihat</a> -->
                                <!-- <a type="button" class="btn btn-sm btn-info" title="" href="<?= base_url('c_login_santri/lihat/') ?><?= $san->id ?>">Lihat</a> -->
                            </div>
                        </div>


                    </div>
                    <!-- /.col-md-6 -->
                    <div class="col-lg-6">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h5 class="card-title m-0">Profil</h5>
                            </div>
                            <div class="card-body">
                                <h6 class="card-title">Berisi data diri.</h6>

                                <p class="card-text">Santri dapat mengedit atau melengkapi data diri-nya.</p>
                                <a type="button" class="btn btn-sm btn-info"
                                    href="<?= base_url('c_login_santri/profil/') ?><?= $this->session->userdata['id']; ?>">Lihat
                                    Profil</a>
                                <!-- <a href="<?= base_url('profil_santri/detail/') ?><?= $this->session->userdata['id']; ?>" class="btn btn-info">Lihat Profil</a> -->
                            </div>
                        </div>

                    </div>
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.content -->
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