<body class="layout-top-nav" style="height: auto;">
    <div class="wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <h5 class="m-0 text-dark text-center">
                            <marquee>Inay Aplication Sistem || Sistem ini dibuat untuk memudahkan teman - teman
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
                    <div class="col-lg-12">
                        <div class="card card-info card-outline">
                            <div class="card-body">
                                <h4 class="card-title"><b>Data Santri</b></h4>
                                <p class="card-text">
                                    Ini adalah halaman dimana para orang tua dapat melihat riwayat pembayaran spp
                                    putra-putrinya.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body table-responsive">
                        <table id="example1" class="table table-bordered table-striped display" style="width: 100%;">
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Kelas</th>
                                    <th>Alamat</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($santri as $san) : ?>
                                <tr class="text-center">
                                    <td><?= $no++ ?></td>
                                    <td><?= $san->nama ?></td>
                                    <td><?= $san->nama_kls ?></td>
                                    <td><?= $san->alamat ?></td>
                                    <td>
                                        <a type="button" class="btn btn-sm btn-info" title=""
                                            href="<?= base_url('c_input_transaksi/input_transaksi/') ?><?= $san->id ?>">Lihat</a>
                                    </td>
                                </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.content -->
            </div>
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