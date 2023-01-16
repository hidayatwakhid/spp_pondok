        <!-- Main content -->
        <section class="content">
            <div class="page-content page-container" id="page-content">
                <div class="">
                    <div class="">
                        <!-- Small boxes (Stat box) -->
                        <div class="row">
                            <div class="col-3">
                                <!-- small box -->
                                <div class="small-box bg-info">
                                    <div class="inner">
                                        <h4>Rp. <?= number_format($pemasukan_spp, 2, ',', '.') ?></h4>

                                        <p>Pemasukan SPP</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-dollar-sign"></i>
                                    </div>
                                </div>
                            </div>


                            <div class="col-3">
                                <!-- small box -->
                                <div class="small-box bg-info">
                                    <div class="inner">
                                        <h4>Rp. <?= number_format($jumlah_pemasukan, 2, ',', '.') ?></h4>

                                        <p>Pemasukan Non SPP</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-dollar-sign"></i>
                                    </div>
                                </div>
                            </div>


                            <div class="col-3">
                                <!-- small box -->
                                <div class="small-box bg-danger ">
                                    <div class="inner">
                                        <h4>Rp. <?= number_format($jumlah_pengeluaran, 2, ',', '.') ?></h4>

                                        <p>Pengeluaran</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-dollar-sign"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-3">
                                <!-- small box -->
                                <div class="small-box bg-success">
                                    <div class="inner">
                                        <h4>Rp.
                                            <?= number_format($pemasukan_spp + $jumlah_pemasukan - $jumlah_pengeluaran, 2, ',', '.') ?>
                                        </h4>

                                        <p>Saldo</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-dollar-sign"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- ./col -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-9">
                        <div class="padding">
                            <div class="card card-secondary">
                                <div class="card-header">
                                    Grafik
                                </div>
                                <div class="row">
                                    <div class="col-lg-2">

                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mt-4 ml-4 mb-4">
                                            <canvas id="myChart" style="width: 200px;"></canvas>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <ul class="nav nav-pills flex-column mt-4 mr-4">
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">
                                                    Pemasukan
                                                    <span class="float-right text-blue">
                                                        <?= $jumlah_pemasukan + $pemasukan_spp; ?>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">
                                                    Pengeluaran
                                                    <span class="float-right text-danger">
                                                        <?= $jumlah_pengeluaran; ?>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">
                                                    Saldo
                                                    <span class="float-right text-bold">
                                                        <?= $jumlah_pemasukan + $pemasukan_spp - $jumlah_pengeluaran; ?>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


        </section>


        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <script>
const labels = [
    'Pemasukan',
    'Pengeluaran',
];

const data = {
    labels: [
        'Pemasukan',
        'Pengeluaran',
    ],

    datasets: [{
        label: 'My First Dataset',
        data: [
            <?= $jumlah_pemasukan + $pemasukan_spp; ?>,
            <?= $jumlah_pengeluaran; ?>
        ],
        backgroundColor: [
            'rgb(54, 162, 235)',
            'rgb(255, 99, 132)',
        ],
        hoverOffset: 4
    }]
};

const config = {
    type: 'doughnut',
    data: data,
    options: {}
};
        </script>

        <script>
const myChart = new Chart(
    document.getElementById('myChart'),
    config
);
        </script>