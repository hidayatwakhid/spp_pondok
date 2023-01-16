<form action="<?= base_url('c_santri/tambah_aksi') ?>" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="">Nama Santri</label>
        <input type="text" name="nama" id="" class="form-control">
        <!-- <?= form_error('nama', '<div class="text-small text-danger">', '</div>'); ?> -->
    </div>

    <div class="form-group">
        <label for="">Tanggal lahir</label>
        <input type="date" name="tgl_lahir" id="" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Alamat</label>
        <input type="text" name="alamat" id="" class="form-control">
    </div>

    <div class="form-group">
        <label for="">Jenis Kelamin</label>
        <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
            <option value="Laki-laki">Laki-laki</option>';
            <option value="Perempuan">Perempuan</option>';
        </select>
    </div>

    <div class="form-group">
        <label for="">Kamar</label>
        <!-- <input type="text" name="id_kamar" id="" class="form-control"> -->
        <select class="form-control" name="id_kamar" id="id_kamar">
            <?php
            foreach ($kamar as $key => $value) {
                var_dump($value->id_kmr);
                echo '<option value="' . $value->id_kmr . '">' . $value->nama_kmr . '</option>';
            }
            ?>
        </select>
    </div>
    <div class="form-group">
        <label for="">Kelas</label>
        <!-- <input type="text" name="id_kamar" id="" class="form-control"> -->
        <select class="form-control" name="id_kelas" id="id_kelas">
            <?php
            foreach ($kelas as $key => $value) {
                var_dump($value->id_kls);
                echo '<option value="' . $value->id_kls . '">' . $value->nama_kls . '</option>';
            }
            ?>
        </select>
    </div>

    <div class="form-group">
        <label for="">No Hp</label>
        <input type="text" name="no_hp" id="" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="">Tanggal Masuk</label>
        <input type="date" name="tgl_masuk" id="" class="form-control">
    </div>


    <div class="form-group">
        <label for="">Status</label>
        <select class="form-control" name="status" id="status">
            <option value="Santri">Santri</option>';
            <option value="Pengurus">Pengurus</option>';
            <option value="Alumni">Alumni</option>';
        </select>
    </div>

    <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
    <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"> Reset</i></button>
</form>