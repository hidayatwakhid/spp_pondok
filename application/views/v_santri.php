<?= $this->session->flashdata('pesan'); ?>
<style>
/* table.dataTable thead .sorting {
    display: none;
} */
</style>
<div class="card">
    <div class="card-header">
        <a href="<?= base_url('c_santri/tambah') ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"> Tambah
                Data</i></a>
    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive">
        <table id="example1" class="table table-bordered table-striped display" style="width: 100%;">
            <thead>
                <tr class="text-center">
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIS</th>
                    <th>Kamar</th>
                    <th>Kelas</th>
                    <th>Bayar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($santri as $san) : ?>
                <tr class="text-center">
                    <td><?= $no++ ?></td>
                    <td><?= $san->nama ?></td>
                    <td><?= $san->nis ?></td>
                    <td><?= $san->nama_kmr ?></td>
                    <td><?= $san->nama_kls ?></td>
                    <td>
                        <a type="button" class="btn btn-sm btn-info" title="Input Transaksi"
                            href="<?= base_url('c_input_transaksi/input_transaksi/') ?><?= $san->id ?>">Input
                            Transaksi</a>
                    </td>
                    <td>
                        <a href="<?= base_url('c_santri/detail/') ?><?= $san->id ?>" class="btn btn-success btn-sm"><i
                                class="fa fa-search-plus"> </i></a>
                        <!-- <a href="<?= base_url('delete/' . $san->id) ?>" type="button" class="btn btn-secondary"
                            onclick="return confirm('Anda yakin ingin menghapus data ini?')"><i
                                class="bi bi-eye-fill"></i></a> -->
                        <button data-toggle="modal" data-target="#edit<?= $san->id ?>" class="btn btn-warning btn-sm"><i
                                class="fas fa-edit"></i></button>
                        <a href="<?= base_url('delete/' . $san->id) ?>" class="btn btn-danger btn-sm"
                            onclick="return confirm('Anda yakin ingin menghapus data ini?')"><i
                                class="fas fa-trash"></i></a>
                        <!-- <a href="<?= base_url('delete/' . $san->id) ?>" class="btn btn-danger btn-sm"><i
                                class="fas fa-trash"></i></a> -->
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal Edit-->
<?php foreach ($santri as $san) { ?>
<div class="modal fade" id="edit<?= $san->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data Santri</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('c_santri/edit/' . $san->id) ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Nama Santri</label>
                        <input type="text" name="nama" id="" class="form-control" value="<?= $san->nama ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal lahir</label>
                        <input type="date" name="tgl_lahir" id="" class="form-control" value="<?= $san->tgl_lahir ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <input type="text" name="alamat" id="" class="form-control" value="<?= $san->alamat ?>">
                    </div>

                    <div class="form-group">
                        <label for="">Jenis Kelamin</label>
                        <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                            <option value="Laki-laki" <?php if ($san->jenis_kelamin == 'Laki-laki') {
                                                                    echo 'selected';
                                                                } ?>>Laki-laki</option>';
                            <option value="Perempuan" <?php if ($san->jenis_kelamin != 'Laki-laki') {
                                                                    echo 'selected';
                                                                } ?>>Perempuan</option>';
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Kamar</label>
                        <select class="form-control" name="id_kamar" id="id_kamar">
                            <?php foreach ($kamar as $key => $value) { ?>
                            <option value="<?= $value->id_kmr; ?>" <?php if ($san->id_kamar == $value->id_kmr) {
                                                                                        echo 'selected';
                                                                                    } ?>><?= $value->nama_kmr; ?>
                            </option>';
                            <?php }
                                    ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Kelas</label>
                        <select class="form-control" name="id_kelas" id="id_kelas">
                            <?php foreach ($kelas as $key => $value) { ?>
                            <option value="<?= $value->id_kls; ?>" <?php if ($san->id_kelas == $value->id_kls) {
                                                                                        echo 'selected';
                                                                                    } ?>><?= $value->nama_kls ?>
                            </option>';
                            <?php }
                                    ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">No Hp</label>
                        <input type="text" name="no_hp" id="" class="form-control" value="<?= $san->no_hp ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Masuk</label>
                        <input type="date" name="tgl_masuk" id="" class="form-control" value="<?= $san->tgl_masuk ?>">
                    </div>

                    <div class="form-group">
                        <label for="">Status</label>
                        <select class="form-control" name="status" id="status">
                            <option value="Santri" <?php if ($san->status == 'Santri') {
                                                                echo 'selected';
                                                            } ?>>Santri</option>';
                            <option value="Pengurus" <?php if ($san->status == 'Pengurus') {
                                                                    echo 'selected';
                                                                } ?>>Pengurus</option>';
                            <option value="Alumni" <?php if ($san->status == 'Alumni') {
                                                                echo 'selected';
                                                            } ?>>Alumni</option>';
                        </select>
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
<?php } ?>