<body class="hold-transition sidebar-mini layout-fixed os-dragging">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a type="button" href="#" class="btn btn-block btn-danger btn-sm"><b>LOGOUT</b></a>
                </li>

            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-succes elevation-1">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <img src="<?= base_url('assets/template/') ?>foto/logo_pondok.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">INAYATULLAH</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?= base_url('assets/template/') ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="<?= base_url('c_profil') ?>" class="d-block">Alexander Pierce</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="<?= base_url('dashboard') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'dashboard') echo 'active' ?>">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= base_url('c_santri') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'c_santri') echo 'active' ?>">
                                <i class="nav-icon fas fa-users"></i>
                                <p>Data Santri</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('c_kamar') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'c_kamar') echo 'active' ?>">
                                <i class="nav-icon fas fa-igloo"></i>
                                <p>Data Kamar</p>
                            </a>
                        </li>
                        <br>

                        <li class="nav-item">
                            <a href="<?= base_url('c_tahun') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'c_tahun') echo 'active' ?>">
                                <i class="nav-icon fas fa-calendar-alt"></i>
                                <p>Data Tahun</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('c_tagihan') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'c_tagihan') echo 'active' ?>">
                                <i class="nav-icon fas fa-file-invoice-dollar"></i>
                                <p>Data Tagihan</p>
                            </a>
                        </li>
                        <br>

                        <li class="nav-item">
                            <a href="<?= base_url('c_history') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'c_history') echo 'active' ?>">
                                <i class="nav-icon fas fa-history"></i>
                                <p>History Transaksi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('c_grafik') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'c_grafik') echo 'active' ?>">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>Grafik</p>
                            </a>
                        </li>
                        <br>
                        <li class="nav-item">
                            <a href="<?= base_url('c_jurnal') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'c_jurnal') echo 'active' ?>">
                                <i class="fas fa-edit nav-icon"></i>
                                <p>Jurnal Umum</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('c_laporan') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'c_laporan') echo 'active' ?>">
                                <i class="fas fa-receipt nav-icon"></i>
                                <p>Laporan Keuangan</p>
                            </a>
                        </li>
                        <br>
                        <li class="nav-item">
                            <a href="<?= base_url('c_administrator') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'c_administrator') echo 'active' ?>">
                                <i class="fas fa-user-cog nav-icon"></i>
                                <p>Administrator</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark"><?= $title ?></h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active"><?= $title ?></li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->