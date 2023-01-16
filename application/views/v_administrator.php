<div class="card">
    <div class="card-header">
        <a href="<?= base_url('c_administrator/tambah') ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"> Tambah
                Data</i></a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr class="text-center">
                    <th>No</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($admin as $adm) : ?>
                    <tr class="text-center">
                        <td><?= $no++ ?></td>
                        <td><?= $adm->username ?></td>
                        <td><?= $adm->email ?></td>
                        <td>
                            <button data-toggle="modal" data-target="#edit<?= $adm->id_admin ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                            <a href="<?= base_url('c_administrator/delete/' . $adm->id_admin) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus data ini?')"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal Edit-->
<?php foreach ($admin as $adm) { ?>
    <div class="modal fade" id="edit<?= $adm->id_admin ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Data administrator</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('c_administrator/edit/' . $adm->id_admin) ?>" method="POST">
                        <div class="form-group">
                            <label for="">Nama administrator</label>
                            <input type="text" name="username" id="" class="form-control" value="<?= $adm->username ?>">
                            <?= form_error('username', '<div class="text-small text-danger">', '</div>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" name="email" id="" class="form-control" value="<?= $adm->email ?>">
                            <?= form_error('email', '<div class="text-small text-danger">', '</div>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="text" name="password" id="" class="form-control" value="<?= $adm->password ?>">
                            <?= form_error('password', '<div class="text-small text-danger">', '</div>'); ?>
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