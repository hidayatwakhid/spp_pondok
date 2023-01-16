<form action="<?= base_url('c_history_non_spp/tambah_aksi') ?>" method="POST" enctype="multipart/form-data">
    <div class="form-group" <?php if ($jenis == 'pengeluaran') {
                                echo 'hidden';
                            } ?>>
        <label for="">Pemasukan</label>
        <input type="text" name="pemasukan" id="" class="form-control" value="<?php if ($jenis == 'pengeluaran') {
                                                                                    echo '0';
                                                                                } ?>">
        <?= form_error('pemasukan', '<div class="text-small text-danger">', '</div>'); ?>
    </div>
    <div class="form-group" <?php if ($jenis == 'pemasukan') {
                                echo 'hidden';
                            } ?>>
        <label for="">Pengeluaran</label>
        <input type="text" name="pengeluaran" id="" class="form-control" value="<?php if ($jenis == 'pemasukan') {
                                                                                    echo '0';
                                                                                } ?>">
        <?= form_error('pengeluaran', '<div class="text-small text-danger">', '</div>'); ?>
    </div>
    <div class="form-group">
        <label for="">Tanggal</label>
        <input type="date" name="tgl_history_non_spp" id="" class="form-control">
        <?= form_error('tgl_history_non_spp', '<div class="text-small text-danger">', '</div>'); ?>
    </div>
    <div class="form-group">
        <label for="">Keterangan</label>
        <input type="text" name="keterangan" id="" class="form-control">
        <?= form_error('keterangan', '<div class="text-small text-danger">', '</div>'); ?>
    </div>

    <div class="form-group">
        <label for="">Bukti Transaksi</label>
        <input type="file" name="bukti" id="" class="form-control" required>

    </div>

    <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
    <button type="reset" class="btn btn-danger btn-sm"> Reset</i></button>
</form>