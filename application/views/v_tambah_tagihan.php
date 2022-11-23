<form action="<?= base_url('c_tagihan/tambah_aksi') ?>" method="POST">
    <div class="form-group">
        <label for="">Tahun</label>
        <input type="text" name="id_thn" id="" class="form-control">
        <?= form_error('id_thn', '<div class="text-small text-danger">', '</div>'); ?>
    </div>
    <div class="form-group">
        <label for="">Bulan</label>
        <input type="text" name="id_bln" id="" class="form-control">
        <?= form_error('id_bln', '<div class="text-small text-danger">', '</div>'); ?>
    </div>
    <div class="form-group">
        <label for="">Nominal</label>
        <input type="text" name="nominal" id="" class="form-control">
        <?= form_error('nominal', '<div class="text-small text-danger">', '</div>'); ?>
    </div>
    <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
    <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"> Reset</i></button>
</form>