<form action="<?= base_url('c_jurnal/tambah_aksi') ?>" method="POST">
    <div class="form-group">
        <label for="">Pemasukan</label>
        <input type="text" name="pemasukan" id="" class="form-control">
        <?= form_error('pemasukan', '<div class="text-small text-danger">', '</div>'); ?>
    </div>
    <div class="form-group">
        <label for="">Pengeluaran</label>
        <input type="text" name="pengeluaran" id="" class="form-control">
        <?= form_error('pengeluaran', '<div class="text-small text-danger">', '</div>'); ?>
    </div>
    <div class="form-group">
        <label for="">Tanggal</label>
        <input type="date" name="tgl_jurnal" id="" class="form-control">
        <?= form_error('tgl_jurnal', '<div class="text-small text-danger">', '</div>'); ?>
    </div>
    <div class="form-group">
        <label for="">Keterangan</label>
        <input type="text" name="keterangan" id="" class="form-control">
        <?= form_error('keterangan', '<div class="text-small text-danger">', '</div>'); ?>
    </div>
    <div class="form-group">
        <label for="">Created By</label>
        <input type="text" name="created_by" id="" class="form-control">
        <?= form_error('created_by', '<div class="text-small text-danger">', '</div>'); ?>
    </div>
    <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
    <button type="reset" class="btn btn-danger btn-sm"><i class=""> Reset</i></button>
</form>