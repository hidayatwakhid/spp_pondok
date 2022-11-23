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
                            <a type="button" class="btn btn-sm btn-info" title="Input Transaksi" href="<?= base_url('c_input_transaksi/input_transaksi/') ?><?= $san->id ?>">Input Transaksi</a>
                        </td>
                        <td>
                            <a href="<?= base_url('c_santri/detail/') ?><?= $san->id ?>" class="btn btn-success btn-sm"><i class="fa fa-search-plus"> </i></a>
                            <!-- <a href="<?= base_url('delete/' . $san->id) ?>" type="button" class="btn btn-secondary"
                            onclick="return confirm('Anda yakin ingin menghapus data ini?')"><i
                                class="bi bi-eye-fill"></i></a> -->
                            <button data-toggle="modal" data-target="#edit<?= $san->id ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                            <a href="<?= base_url('delete/' . $san->id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus data ini?')"><i class="fas fa-trash"></i></a>
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
                    <form action="<?= base_url('c_santri/edit/' . $san->id) ?>" method="POST">
                        <div class="form-group">
                            <label for="">Nama Santri</label>
                            <input type="text" name="nama" id="" class="form-control" value="<?= $san->nama ?>">
                        </div>
                        <div class="form-group">
                            <label for="">NIS</label>
                            <input type="text" name="nis" id="" class="form-control" value="<?= $san->nis ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal lahir</label>
                            <input type="date" name="tgl_lahir" id="" class="form-control" value="<?= $san->tgl_lahir ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <input type="text" name="alamat" id="" class="form-control" value="<?= $san->alamat ?>">
                        </div>

                        <fieldset class="form-group">
                            <div class="row">
                                <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                                <div class="col-sm-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="jenis_kelamin" name="jenis_kelamin" value="Laki-laki" <?php if ($san->jenis_kelamin == "Laki-laki") : echo "checked";
                                                                                                                                                endif; ?>>
                                        <label class="form-check-label" for="jenis_kelamin">
                                            Laki-laki
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="jenis_kelamin2" name="jenis_kelamin" value="Perempuan" <?php if ($san->jenis_kelamin == "Perempuan") : echo "checked";
                                                                                                                                                endif; ?>>
                                        <label class="form-check-label" for="jenis_kelamin2">
                                            Perempuan
                                        </label>
                                    </div>
                                    <!-- <small class="text-danger">
                                        <?php echo form_error('jenis_kelamin') ?>
                                    </small> -->
                                </div>
                            </div>
                        </fieldset>
                        <!-- <div class="form-group">
                            <label for="">Jenis Kelamin</label>

                            <select class="form-control" name="jenis_kelamin" values="<?= $san->jenis_kelamin ?>"> -->

                        <!-- jika value = laki-laki,
                                maka tampilkan option selectec ke laki" -->
                        <!-- <option>Laki - Laki</option>
                            <option>Perempuan</option> -->
                        </select>
                        <!-- <input type="text" name="jenis_kelamin" id="" class="form-control"
                            value="<?= $san->jenis_kelamin ?>">-->
                        <!-- </div> -->
                        <div class="form-group">
                            <label for="">Kamar</label>
                            <!-- <input type="text" name="id_kmr" id="" class="form-control" value="<?= $san->id_kamar ?>"> -->

                            <select class="form-control" name="id_kamar" id="id_kamar">
                                <?php foreach ($kamar as $key => $value) { ?>
                                    <option value="<?= $value->id_kmr; ?>"><?= $value->nama_kmr; ?></option>';
                                <?php }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Kelas</label>
                            <select class="form-control" name="id_kelas" id="id_kelas">
                                <?php foreach ($kelas as $key => $value) { ?>
                                    <option value="<?= $value->id_kls; ?>"><?= $value->nama_kls ?></option>';
                                <?php }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">No Hp</label>
                            <input type="text" name="no_hp" id="" class="form-control" value="<?= $san->no_hp ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="text" name="password" id="" class="form-control" value="<?= $san->password ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Masuk</label>
                            <input type="date" name="tgl_masuk" id="" class="form-control" value="<?= $san->tgl_masuk ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Status</label>
                            <input type="text" name="status" id="" class="form-control" value="<?= $san->status ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Foto</label>
                            <input type="text" name="foto" id="" class="form-control" value="<?= $san->foto ?>">
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