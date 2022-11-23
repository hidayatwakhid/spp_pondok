<div class="card">
    <div class="card-header">
        <a href="<?= base_url('c_history/tambah') ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"> Tambah
                Data</i></a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Tagihan</th>
                    <th>Jumlah Bayar</th>
                    <th>Sisa</th>
                    <th>Keterangan</th>
                    <th>Tanggal Bayar</th>
                    <th>Created By</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($history as $his) : ?>
                <tr class="text-center">
                    <td><?= $no++ ?></td>
                    <td><?= $his->id_data_santri ?></td>
                    <td><?= $his->id_data_tagihan ?></td>
                    <td><?= $his->jumlah_byr ?></td>
                    <td><?= $his->sisa ?></td>
                    <td><?= $his->keterangan ?></td>
                    <td><?= $his->tgl_byr ?></td>
                    <td><?= $his->created_by ?></td>
                    <td>
                        <button data-toggle="modal" data-target="#edit<?= $his->id_data_transaksi ?>"
                            class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                        <a href="<?= base_url('c_history/delete/' . $his->id_data_transaksi) ?>"
                            class="btn btn-danger btn-sm"
                            onclick="return confirm('Anda yakin ingin menghapus data ini?')"><i
                                class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal Edit-->
<?php foreach ($history as $his) { ?>
<div class="modal fade" id="edit<?= $his->id_data_transaksi ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data Tahun</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('c_history/edit/' . $his->id_data_transaksi) ?>" method="POST">
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" name="id_data_santri" id="" class="form-control"
                            value="<?= $his->id_data_santri ?>">
                        <?= form_error('id_data_santri', '<div class="text-small text-danger">', '</div>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="">Tagihan</label>
                        <input type="text" name="id_data_tagihan" id="" class="form-control"
                            value="<?= $his->id_data_tagihan ?>">
                        <?= form_error('id_data_tagihan', '<div class="text-small text-danger">', '</div>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="">Jumlah Bayar</label>
                        <input type="text" name="jumlah_byr" id="" class="form-control" value="<?= $his->jumlah_byr ?>">
                        <?= form_error('jumlah_byr', '<div class="text-small text-danger">', '</div>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="">Sisa</label>
                        <input type="text" name="sisa" id="" class="form-control" value="<?= $his->sisa ?>">
                        <?= form_error('sisa', '<div class="text-small text-danger">', '</div>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="">Keterangan</label>
                        <input type="text" name="keterangan" id="" class="form-control" value="<?= $his->keterangan ?>">
                        <?= form_error('keterangan', '<div class="text-small text-danger">', '</div>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Bayar</label>
                        <input type="text" name="tgl_byr" id="" class="form-control" value="<?= $his->tgl_byr ?>">
                        <?= form_error('tgl_byr', '<div class="text-small text-danger">', '</div>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="">Created By</label>
                        <input type="text" name="created_by" id="" class="form-control" value="<?= $his->tgl_byr ?>">
                        <?= form_error('created_by', '<div class="text-small text-danger">', '</div>'); ?>
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