<div class="card">
    <div class="card-header">
        <a href="<?= base_url('c_jurnal/tambah') ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"> Tambah
                Data</i></a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Pemasukan</th>
                    <th>Pengeluaran</th>
                    <th>Tanggal Jurnal</th>
                    <th>Keterangan</th>
                    <th>Createt By</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($jurnal as $jrnl) : ?>
                <tr class="text-center">
                    <td><?= $no++ ?></td>
                    <td><?= $jrnl->pemasukan ?></td>
                    <td><?= $jrnl->pengeluaran ?></td>
                    <td><?= $jrnl->tgl_jurnal ?></td>
                    <td><?= $jrnl->keterangan ?></td>
                    <td><?= $jrnl->created_by ?></td>
                    <td>
                        <button data-toggle="modal" data-target="#edit<?= $jrnl->id_jurnal_umum ?>"
                            class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                        <a href="<?= base_url('c_jurnal/delete/' . $jrnl->id_jurnal_umum) ?>"
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
<?php foreach ($jurnal as $jrnl) { ?>
<div class="modal fade" id="edit<?= $jrnl->id_jurnal_umum ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data Jurnal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('c_jurnal/edit/' . $jrnl->id_jurnal_umum) ?>" method="POST">
                    <div class="form-group">
                        <label for="">Pemasukan</label>
                        <input type="text" name="pemasukan" id="" class="form-control" value="<?= $jrnl->pemasukan ?>">
                        <?= form_error('pemasukan', '<div class="text-small text-danger">', '</div>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="">Pengeluaran</label>
                        <input type="text" name="pengeluaran" id="" class="form-control"
                            value="<?= $jrnl->pengeluaran ?>">
                        <?= form_error('pengeluaran', '<div class="text-small text-danger">', '</div>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal</label>
                        <input type="text" name="tgl_jurnal" id="" class="form-control"
                            value="<?= $jrnl->tgl_jurnal ?>">
                        <?= form_error('tgl_jurnal', '<div class="text-small text-danger">', '</div>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="">Keterangan</label>
                        <input type="text" name="keterangan" id="" class="form-control"
                            value="<?= $jrnl->keterangan ?>">
                        <?= form_error('keterangan', '<div class="text-small text-danger">', '</div>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="">Created By</label>
                        <input type="text" name="created_by" id="" class="form-control"
                            value="<?= $jrnl->created_by ?>">
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