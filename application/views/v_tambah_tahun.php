<form action="<?= base_url('c_tahun/tambah_aksi') ?>" method="POST">
    <div class="form-group">
        <label for="">Nama Tahun</label>
        <input type="text" name="nama_thn" id="" class="form-control">
        <?= form_error('nama_thn', '<div class="text-small text-danger">', '</div>'); ?>
    </div>
    <div class="form-group">
        <label for="">Nominal Tagihan</label>
        <input type="text" name="nominal_tagihan" id="" class="form-control">
        <?= form_error('nominal_tagihan', '<div class="text-small text-danger">', '</div>'); ?>
    </div>
    <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
    <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"> Reset</i></button>
</form>