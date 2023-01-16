<style>
.min-footer {
    /* position: fixed; */
    margin-top: 10px;
    width: 100%;
    height: 60px;

    background: #fff;
    border-top: 1px solid #dee2e6;
    color: #869099;
    padding: 1rem;
    /* bottom: 0; */
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
                            <a type="button" href="<?= base_url() ?>c_login_tamu/logout"
                                class="btn btn-block btn-danger btn-sm"><b>LOGOUT</b></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <br>
        <!-- Main content -->
        <div class="content">
            <div class="container">
                <div class="card card-secondary">
                    <div class="card-header ">
                        Riwayat Pembayaran
                    </div>

                    <!-- <div class="card-header">
                    <a href="<?= base_url('c_input_transaksi/tambah') ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"> Tambah
                            Data</i></a>
                    </div> -->
                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                        <table id="example1" class="table table-bordered table-striped display" style="width: 100%;">
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Tahun Bayar</th>
                                    <th>Bulan Bayar</th>
                                    <th>Besar Tagihan</th>
                                    <th>Jumlah Bayar</th>
                                    <th>Sisa/Kurang</th>
                                    <th>Keterangan</th>
                                    <th>Waktu Bayar</th>
                                    <th>Created By</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- <td><?= $data->jumlah_byr ?></td> -->
                                <?php $no = 1;
                                foreach ($input_transaksi as $intrs) : ?>
                                <tr class="text-center">
                                    <td><?= $no++ ?></td>
                                    <td><?= $intrs->nama ?></td>
                                    <td><?= $intrs->nama_thn ?></td>
                                    <td><?= $intrs->nama_bln ?></td>
                                    <td><?= $intrs->nominal ?></td>
                                    <td><?php if ($intrs->jumlah_byr == '') { ?>

                                        <?php } else { ?>
                                        <?= $intrs->jumlah_byr ?>
                                        <?php } ?></td>
                                    <td><?= $intrs->sisa ?>
                                        <?php if ($intrs->keterangan == '0') { } else if ($intrs->sisa > 0) { } ?></td>

                                    <td><?php if ($intrs->keterangan == '1') {
                                                    echo '<span class="badge badge-success">Lunas</span>';
                                                } elseif ($intrs->keterangan == '0') {
                                                    echo '<span class="badge badge-warning">Belum Lunas</span>';
                                                } else {
                                                    echo '';
                                                } ?></td>
                                    <td><?= $intrs->tgl_byr ?></td>
                                    <td><?= $intrs->created_by ?></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <a type="button" class="btn btn-warning" href="<?= base_url('dashboard_santri') ?>">Kembali</a>
                    </div>
                </div>
                <!-- Modal Update-->
                <?php foreach ($input_transaksi as $intrs) { ?>
                <div class="modal fade" id="update<?= $intrs->id_data_transaksi ?>" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Update Data Transaksi</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="<?= base_url('c_input_transaksi/update/' . $intrs->id_data_transaksi) ?>"
                                    method="POST">
                                    <div class="form-group">
                                        <label for="">Nama : <?= $intrs->nama ?></label>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Tahun : <?= $intrs->nama_thn ?></label>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Bulan : <?= $intrs->nama_bln ?></label>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Besar Tagihan : <?= $intrs->nominal ?></label>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Sisa/kurang : <?= $intrs->sisa ?></label>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Keterangan : <?= $intrs->keterangan ?></label>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Jumlah Bayar :</label>
                                        <input type="text" name="jumlah_byr" id="" class="form-control"
                                            value="<?= abs($intrs->sisa) ?>">
                                    </div>

                                    <div class="modal-footer">
                                        <!-- <button type="submit" class="btn btn-primary brn-sm"><i class="fas fa-save"></i></button> -->

                                        <button type="reset" class="btn btn-secondary"
                                            data-dismiss="modal">Keluar</button>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>

                <!-- Modal Edit-->
                <?php foreach ($input_transaksi as $intrs) { ?>
                <div class="modal fade" id="edit<?= $intrs->id_data_transaksi ?>" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Data Transaksi</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="<?= base_url('c_input_transaksi/edit/' . $intrs->id_data_transaksi) ?>"
                                    method="POST">
                                    <div class="form-group">
                                        <label for="">Nama : <?= $intrs->nama ?></label>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Tahun : <?= $intrs->nama_thn ?></label>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Bulan : <?= $intrs->nama_bln ?></label>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Besar Tagihan : <?= $intrs->nominal ?></label>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Sisa/kurang : <?= $intrs->sisa ?></label>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Keterangan : <?= $intrs->keterangan ?></label>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Jumlah Bayar :</label>
                                        <input type="text" name="jumlah_byr" id="" class="form-control"
                                            value="<?= abs($intrs->sisa) ?>">
                                    </div>

                                    <div class="modal-footer">
                                        <!-- <button type="submit" class="btn btn-primary brn-sm"><i class="fas fa-save"></i></button> -->

                                        <button type="reset" class="btn btn-secondary"
                                            data-dismiss="modal">Keluar</button>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>

                <!-- Modal Kembali-->
                <?php foreach ($input_transaksi as $intrs) { ?>
                <div class="modal fade" id="kembali<?= $intrs->id_data_transaksi ?>" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Untuk Kembalian?</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="<?= base_url('c_input_transaksi/kembali/' . $intrs->id_data_transaksi) ?>"
                                    method="POST">
                                    <div>Sisa pembayaran akan dikembalikan.</div>
                                    <div class="modal-footer">
                                        <button type="reset" class="btn btn-secondary"
                                            data-dismiss="modal">Keluar</button>
                                        <button type="submit" class="btn btn-primary">Ya</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <!-- Modal Next-->
                <?php foreach ($input_transaksi as $intrs) { ?>
                <div class="modal fade" id="next<?= $intrs->id_data_transaksi ?>" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Untuk Bulan Selanjutnya?</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="<?= base_url('c_input_transaksi/next/' . $intrs->id_data_transaksi) ?>"
                                    method="POST">
                                    <div>Sisa pembayaran akan masuk ke bulan depan.</div>
                                    <div class="modal-footer">
                                        <button type="reset" class="btn btn-secondary"
                                            data-dismiss="modal">Keluar</button>
                                        <button type="submit" class="btn btn-primary">Ya</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>



                <!-- Modal Tambah-->
                <?php foreach ($input_transaksi as $intrs) { ?>
                <div class="modal fade" id="tambah<?= $intrs->id_data_transaksi ?>" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Transaksi</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="<?= base_url('c_input_transaksi/tambah/' . $intrs->id_data_transaksi) ?>"
                                    method="POST">
                                    <input hidden type="text" name="idnya_santri" value="28">
                                    <div class="form-group">
                                        <label for="">Nama : <?= $intrs->nama ?></label>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Tahun : <?= $intrs->nama_thn ?></label>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Bulan : <?= $intrs->nama_bln ?></label>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Besar Tagihan : <?= $intrs->nominal ?></label>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Sisa/kurang : <?= $intrs->sisa ?></label>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Keterangan : <?= $intrs->keterangan ?></label>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Jumlah Bayar :</label>
                                        <input type="text" name="jml_bayar" id="" class="form-control"
                                            value="<?= $intrs->nominal ?>">
                                        <input hidden type="text" name="id_transaksi" id="" class="form-control"
                                            value="<?= $intrs->id_data_transaksi ?>">
                                    </div>

                                    <div class="modal-footer">
                                        <!-- <button type="submit" class="btn btn-primary brn-sm"><i class="fas fa-save"></i></button> -->

                                        <button type="reset" class="btn btn-secondary"
                                            data-dismiss="modal">Keluar</button>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <!-- /.content -->
            </div>
        </div>


        <!-- <div>
            <footer class="main-footer">
                <strong>Copyright &copy; 2022-2023 </strong> || Pondok Pesantren Inayatullah.
                <div class="float-right d-none d-sm-block">
                    <b>Version</b> 3.0.5
                </div>
            </footer>
        </div> -->

        <footer>
            <div class="min-footer">
                <strong>Copyright &copy; 2022-2023 </strong> || Pondok Pesantren Inayatullah.
                <b>Version</b> 3.0.5
            </div>
        </footer>
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