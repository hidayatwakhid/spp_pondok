<form action="<?= base_url('c_administrator/tambah_aksi') ?>" method="POST">
    <div class="form-group">
        <label for="">Username</label>
        <input type="text" name="username" id="" class="form-control">
        <?= form_error('nama_kmr', '<div class="text-small text-danger">', '</div>'); ?>
    </div>
    <div class="form-group">
        <label for="">Email</label>
        <input type="text" name="email" id="" class="form-control">
        <?= form_error('nama_kmr', '<div class="text-small text-danger">', '</div>'); ?>
    </div>
    <div class="form-group">
        <label for="">Password</label>
        <input type="password" name="password" id="" class="form-control">
        <?= form_error('nama_kmr', '<div class="text-small text-danger">', '</div>'); ?>
    </div>
    <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
    <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"> Reset</i></button>
</form>