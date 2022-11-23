<?= $this->session->flashdata('pesan'); ?>
<style>
/* table.dataTable thead .sorting {
    display: none;
} */
</style>
<div class="card">
    <div class="card-header">
        <a href="<?= base_url('c_santri/tambah') ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"> Tambah
                Data</i></a>
    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive">
        <table id="example1" class="table table-bordered table-striped display" style="width: 100%;">
            <thead>
                <tr class="text-center">
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIS</th>
                    <th>Tgl Lahir</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Kamar</th>
                    <th>Kelas</th>
                    <!-- <th>No HP</th>
                    <th>Password</th>
                    <th>Tanggal Masuk</th>
                    <th>Status</th>
                    <th>Foto</th> -->
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($santri as $san) : ?>
                <tr class="text-center">
                    <td><?= $no++ ?></td>
                    <td><?= $san->nama ?></td>
                    <td><?= $san->nis ?></td>
                    <td><?= $san->tgl_lahir ?></td>
                    <td><?= $san->alamat ?></td>
                    <td><?= $san->jenis_kelamin ?></td>
                    <td><?= $san->id_kamar ?></td>
                    <td><?= $san->id_kelas ?></td>
                    <!-- <td><?= $san->no_hp ?></td>
                    <td><?= $san->password ?></td>
                    <td><?= $san->tgl_masuk ?></td>
                    <td><?= $san->status ?></td>
                    <td><?= $san->foto ?></td> -->
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>