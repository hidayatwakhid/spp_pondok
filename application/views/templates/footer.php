</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<body>
    <div>
        <footer class="main-footer">
            <strong>Copyright &copy; 2022-2023 </strong> || Pondok Pesantren Inayatullah.
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.0.5
            </div>
        </footer>
    </div>
</body>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= base_url('assets/template') ?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/template') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="<?= base_url('assets/template') ?>/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/template') ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/template') ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url('assets/template') ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
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