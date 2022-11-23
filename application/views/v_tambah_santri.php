<form action="<?= base_url('c_santri/tambah_aksi') ?>" method="POST">
    <div class="form-group">
        <label for="">Nama Santri</label>
        <input type="text" name="nama" id="" class="form-control">
        <!-- <?= form_error('nama', '<div class="text-small text-danger">', '</div>'); ?> -->
    </div>
    <div class="form-group">
        <label for="">NIS</label>
        <input type="text" name="nis" id="" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Tanggal lahir</label>
        <input type="date" name="tgl_lahir" id="" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Alamat</label>
        <input type="text" name="alamat" id="" class="form-control">
    </div>
    <fieldset class="form-group">
        <div class="row">
            <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
            <div class="col-sm-10">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="jenis_kelamin" name="jenis_kelamin" value="Laki-laki" <?php if (set_value('jenis_kelamin') == "Laki-laki") : echo "checked";
                                                                                                                            endif; ?>>
                    <label class="form-check-label" for="jenis_kelamin">
                        Laki-laki
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="jenis_kelamin2" name="jenis_kelamin" value="Perempuan" <?php if (set_value('jenis_kelamin') == "Perempuan") : echo "checked";
                                                                                                                            endif; ?>>
                    <label class="form-check-label" for="jenis_kelamin2">
                        Perempuan
                    </label>
                </div>
            </div>
        </div>
    </fieldset>
    <!-- <div class="form-group">
        <label for="">Jenis Kelamin</label>
        <select class="form-control" name="jenis_kelamin" values="<?php echo $san->jenis_kelamin ?>">
            <option>Laki - Laki</option>
            <option>Perempuan</option>
        </select> -->
    <!-- <input type="text" name="jenis_kelamin" id="" class="form-control" value="<?= $san->jenis_kelamin ?>">
        <?= form_error('jenis_kelamin', '<div class="text-small text-danger">', '</div>'); ?> -->
    <!-- <label for="">Jenis Kelamin</label>
        <input type="text" name="jenis_kelamin" id="" class="form-control">
        <?= form_error('jenis_kelamin', '<div class="text-small text-danger">', '</div>'); ?> -->
    <!-- </div> -->
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
    <!-- <div class="form-group">
        <label for="">Kelas</label>
        <input type="text" name="id_kelas" id="" class="form-control">
        <?= form_error('id_kelas', '<div class="text-small text-danger">', '</div>'); ?>
    </div> -->
    <div class="form-group">
        <label for="">No Hp</label>
        <input type="text" name="no_hp" id="" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Password</label>
        <input type="text" name="password" id="" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Tanggal Masuk</label>
        <input type="date" name="tgl_masuk" id="" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Status</label>
        <input type="text" name="status" id="" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Foto</label>
        <input type="text" name="foto" id="" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
    <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"> Reset</i></button>
</form>