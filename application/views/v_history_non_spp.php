<?= $this->session->flashdata('pesan'); ?>
<div class="card">
    <div class="card-header">
        <a href="<?= base_url('c_history_non_spp/tambah/pemasukan') ?>" class="btn btn-primary btn-sm"><i
                class="fas fa-plus">
                Tambah
                Pemasukan</i></a>
        <a href="<?= base_url('c_history_non_spp/tambah/pengeluaran') ?>" class="btn btn-warning btn-sm"><i
                class="fas fa-plus">
                Tambah
                Pengeluaran</i></a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr class="text-center">
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Pemasukan</th>
                    <th>Pengeluaran</th>
                    <th>Keterangan</th>
                    <th>Createt By</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($jurnal as $jrnl) : ?>
                <tr class="text-center">
                    <td><?= $no++ ?></td>
                    <td><?= $jrnl->tgl_history_non_spp ?></td>
                    <td><?= $jrnl->pemasukan ?></td>
                    <td><?= $jrnl->pengeluaran ?></td>
                    <td><?= $jrnl->keterangan ?></td>
                    <td><?= $jrnl->created_by ?></td>
                    <td>
                        <!-- <button data-toggle="modal" data-target="#edit<?= $jrnl->id_history_non_spp ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button> -->
                        <!-- <a href="<?= base_url('c_history_non_spp/delete/' . $jrnl->id_history_non_spp) ?>"
                            class="btn btn-danger btn-sm"
                            onclick="return confirm('Anda yakin ingin menghapus data ini?')"><i
                                class="fas fa-trash"></i></a> -->
                        <button data-toggle="modal" data-target="#bukti<?= $jrnl->id_history_non_spp ?>"
                            class="btn btn-warning btn-sm">Lihat
                            Bukti</button>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal bukti-->
<?php foreach ($jurnal as $jrnl) { ?>
<div class="modal fade" id="bukti<?= $jrnl->id_history_non_spp ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Bukti Transaksi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('c_history_non_spp/bukti/' . $jrnl->id_history_non_spp) ?>" method="POST">
                    <div class="form-group center">
                        <img src="<?= base_url('assets/template/') ?>foto/bukti/<?php if ($jrnl->bukti) {
                                        echo $jrnl->bukti; 
                                    }else {
                                        echo "profil.png";
                                    }
                                 ?>" alt="avatar" class="" style="width: 150px;">
                        <?= form_error('pemasukan', '<div class="text-small text-danger">', '</div>'); ?>
                    </div>

                    <div class="modal-footer">
                        <!-- <button type="submit" class="btn btn-primary brn-sm"><i class="fas fa-save"></i></button> -->

                        <button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php } ?>