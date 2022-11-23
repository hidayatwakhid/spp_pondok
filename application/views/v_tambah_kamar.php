<form action="<?= base_url('c_kamar/tambah_aksi') ?>" method="POST">
    <div class="form-group">
        <label for="">Nama Kamar</label>
        <input type="text" name="nama_kmr" id="" class="form-control">
        <?= form_error('nama_kmr', '<div class="text-small text-danger">', '</div>'); ?>
    </div>
    <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
    <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"> Reset</i></button>
</form>