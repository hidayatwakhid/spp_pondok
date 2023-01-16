<div class="card">
    <div class="card-header">
        <a href="<?= base_url('c_tahun/tambah') ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"> Tambah
                Data</i></a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr class="text-center">
                    <th>No</th>
                    <th>Nama Tahun</th>
                    <th>Nominal Tagihan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($tahun as $thn) : ?>
                <tr class="text-center">
                    <td><?= $no++ ?></td>
                    <td><?= $thn->nama_thn ?></td>
                    <td><?= $thn->nominal_tagihan ?></td>
                    <td>
                        <!-- <button data-toggle="modal" data-target="#edit<?= $thn->id_thn ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button> -->
                        <a href="<?= base_url('c_tahun/delete/' . $thn->id_thn) ?>" class="btn btn-danger btn-sm"
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
<?php foreach ($tahun as $thn) { ?>
<div class="modal fade" id="edit<?= $thn->id_thn ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
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
                <form action="<?= base_url('c_tahun/edit/' . $thn->id_thn) ?>" method="POST">
                    <div class="form-group">
                        <label for="">Nama tahun</label>
                        <input type="text" name="nama_thn" id="" class="form-control" value="<?= $thn->nama_thn ?>">
                        <?= form_error('nama_tahun', '<div class="text-small text-danger">', '</div>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="">Nominal tagihan</label>
                        <input type="text" name="nominal_tagihan" id="" class="form-control"
                            value="<?= $thn->nominal_tagihan ?>">
                        <?= form_error('nomil_tagihan', '<div class="text-small text-danger">', '</div>'); ?>
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