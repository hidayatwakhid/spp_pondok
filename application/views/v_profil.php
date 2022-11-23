<section style="background-color: #eee;">
    <div class="container py-1">
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
                        <img src="<?= base_url('assets/template/') ?>foto/profil.png" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
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
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <a type="button" class="btn btn-warning" href="<?= base_url('c_santri') ?>">Kembali</a>
            </div>
        </div>
    </div>
</section>