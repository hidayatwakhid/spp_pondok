<div class="card">
    <!-- <div class="card-header">
        <a href="<?= base_url('c_tagihan/tambah') ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"> Tambah
                Data</i></a>
    </div> -->
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr class="text-center">
                    <th>No</th>
                    <th>Tahun</th>
                    <th>Bulan</th>
                    <th>Nomilan</th>
                    <!-- <th>Aksi</th> -->
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($tagihan as $tghn) : ?>
                    <tr class="text-center">
                        <td><?= $no++ ?></td>
                        <td><?= $tghn->nama_thn ?></td>
                        <td><?= $tghn->nama_bln ?></td>
                        <td><?= $tghn->nominal_tagihan ?></td>
                        <!-- <td>
                            <button data-toggle="modal" data-target="#edit<?= $tghn->id ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                            <a href="<?= base_url('c_tagihan/delete/' . $tghn->id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus data ini?')"><i class="fas fa-trash"></i></a>
                        </td> -->
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal Edit-->
<?php foreach ($tagihan as $tghn) { ?>
    <div class="modal fade" id="edit<?= $tghn->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Data Tagihan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('c_tagihan/edit/' . $tghn->id) ?>" method="POST">
                        <div class="form-group">
                            <label for="">Tahun</label>
                            <input type="text" name="id_thn" id="" class="form-control" value="<?= $tghn->id_thn ?>">
                            <?= form_error('id_thn', '<div class="text-small text-danger">', '</div>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="">Bulan</label>
                            <input type="text" name="id_bln" id="" class="form-control" value="<?= $tghn->id_bln ?>">
                            <?= form_error('id_bln', '<div class="text-small text-danger">', '</div>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="">Nominal</label>
                            <input type="text" name="nominal" id="" class="form-control" value="<?= $tghn->nominal ?>">
                            <?= form_error('nominal', '<div class="text-small text-danger">', '</div>'); ?>
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