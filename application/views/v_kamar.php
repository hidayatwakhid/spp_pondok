<div class="card">
    <div class="card-header">
        <a href="<?= base_url('c_kamar/tambah') ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"> Tambah
                Data</i></a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr class="text-center">
                    <th>No</th>
                    <th>Nama Kamar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($kamar as $kmr) : ?>
                <tr class="text-center">
                    <td><?= $no++ ?></td>
                    <td><?= $kmr->nama_kmr ?></td>
                    <td>
                        <button data-toggle="modal" data-target="#edit<?= $kmr->id_kmr ?>"
                            class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                        <a href="<?= base_url('c_kamar/delete/' . $kmr->id_kmr) ?>" class="btn btn-danger btn-sm"
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
<?php foreach ($kamar as $kmr) { ?>
<div class="modal fade" id="edit<?= $kmr->id_kmr ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data kamar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('c_kamar/edit/' . $kmr->id_kmr) ?>" method="POST">
                    <div class="form-group">
                        <label for="">Nama kamar</label>
                        <input type="text" name="nama_kmr" id="" class="form-control" value="<?= $kmr->nama_kmr ?>">
                        <?= form_error('nama_kamar', '<div class="text-small text-danger">', '</div>'); ?>
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