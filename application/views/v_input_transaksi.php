<!-- <?= $this->session->flashdata('pesan'); ?>
<style>
    /* table.dataTable thead .sorting {
    display: none;
} */
</style> -->

<div class="card">

    <!-- <div class="card-header">
        <a href="<?= base_url('c_input_transaksi/tambah') ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"> Tambah
                Data</i></a>
    </div> -->
    <!-- /.card-header -->
    <div class="card-body table-responsive">
        <table id="example1" class="table table-bordered table-striped display" style="width: 100%;">
            <thead>
                <tr class="text-center">
                    <th>No</th>
                    <th>Nama</th>
                    <th>Tahun Bayar</th>
                    <th>Bulan Bayar</th>
                    <th>Besar Tagihan</th>
                    <th>Jumlah Bayar</th>
                    <th>Sisa/ Kurang</th>
                    <th>Keterangan</th>
                    <th>Waktu Bayar</th>
                    <th>Created By</th>
                    <th style="width: 50px;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- <td><?= $data->jumlah_byr ?></td> -->
                <?php $no = 1;
                foreach ($input_transaksi as $intrs) : ?>
                <tr class="text-center">
                    <td><?= $no++ ?></td>
                    <td><?= $intrs->nama ?></td>
                    <td><?= $intrs->nama_thn ?></td>
                    <td><?= $intrs->nama_bln ?></td>
                    <td><?= $intrs->nominal ?></td>
                    <td><?php if ($intrs->jumlah_byr == '') { ?>
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#tambah<?= $intrs->id_data_transaksi ?>">
                            Bayar
                        </button>
                        <?php } else { ?>
                        <?= $intrs->jumlah_byr ?>
                        <?php } ?>
                    </td>
                    <td><?= $intrs->sisa ?> <?php if ($intrs->keterangan == '0') {
                                                        echo '<button data-toggle="modal" data-target="#update' . $intrs->id_data_transaksi . '" class="btn btn-warning btn-sm">Update</button>';
                                                    } else if ($intrs->sisa > 0) {
                                                        echo '<button type="button" class="btn btn-success" style="margin-right: 5px ;"data-toggle="modal" data-target="#next' . $intrs->id_data_transaksi . '">Next</button>';
                                                        echo '<button type="button" class="btn btn-success" data-toggle="modal" data-target="#kembali' . $intrs->id_data_transaksi . '">Kembalian</button>';
                                                    } ?></td>

                    <td><?php if ($intrs->keterangan == '1') {
                                    echo '<span class="badge badge-success">Lunas</span>';
                                } elseif ($intrs->keterangan == '0') {
                                    echo '<span class="badge badge-warning">Belum Lunas</span>';
                                } else {
                                    echo '';
                                } ?></td>

                    <td><?= $intrs->tgl_byr ?></td>
                    <td><?= $intrs->created_by ?></td>
                    <td class="text-center;">
                        <button style="margin-bottom: 2px;" data-toggle="modal"
                            data-target="#edit<?= $intrs->id_data_transaksi ?>" class="btn btn-warning btn-sm"><i
                                class="fas fa-edit"></i></button>
                        <a type="button" class="btn btn-success"
                            href="<?= base_url('c_input_transaksi/reminder/') ?><?= $intrs->id_data_transaksi ?>/<?= $intrs->id_data_santri ?>">Reminder</a>
                        <!-- <button class="btn btn-success btn-sm">Reminder</button> -->



                        <!-- <a href="<?= base_url('c_input_transaksi/delete/' . $intrs->id_data_transaksi) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus data ini?')"><i class="fas fa-trash"></i></a> -->
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal Update-->
<?php foreach ($input_transaksi as $intrs) { ?>
<div class="modal fade" id="update<?= $intrs->id_data_transaksi ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Data Transaksi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('c_input_transaksi/update/' . $intrs->id_data_transaksi) ?>" method="POST">
                    <div class="form-group">
                        <label for="">Nama : <?= $intrs->nama ?></label>
                    </div>
                    <div class="form-group">
                        <label for="">Tahun : <?= $intrs->nama_thn ?></label>
                    </div>
                    <div class="form-group">
                        <label for="">Bulan : <?= $intrs->nama_bln ?></label>
                    </div>
                    <div class="form-group">
                        <label for="">Besar Tagihan : <?= $intrs->nominal ?></label>
                    </div>

                    <div class="form-group">
                        <label for="">Sisa/kurang : <?= $intrs->sisa ?></label>
                    </div>
                    <div class="form-group">
                        <label for="">Keterangan : <?= ($intrs->keterangan==1)?'lunas':'belum lunas';?></label>
                    </div>
                    <div class="form-group">
                        <label for="">Jumlah Bayar :</label>
                        <input type="text" name="jumlah_byr" id="" class="form-control"
                            value="<?= abs($intrs->sisa) ?>">
                    </div>

                    <div class="modal-footer">
                        <!-- <button type="submit" class="btn btn-primary brn-sm"><i class="fas fa-save"></i></button> -->

                        <button type="reset" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php } ?>

<!-- Modal Edit-->
<?php foreach ($input_transaksi as $intrs) { ?>
<div class="modal fade" id="edit<?= $intrs->id_data_transaksi ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data Transaksi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('c_input_transaksi/edit/' . $intrs->id_data_transaksi) ?>" method="POST">
                    <div class="form-group">
                        <label for="">Nama : <?= $intrs->nama ?></label>
                    </div>
                    <div class="form-group">
                        <label for="">Tahun : <?= $intrs->nama_thn ?></label>
                    </div>
                    <div class="form-group">
                        <label for="">Bulan : <?= $intrs->nama_bln ?></label>
                    </div>
                    <div class="form-group">
                        <label for="">Besar Tagihan : <?= $intrs->nominal ?></label>
                    </div>

                    <div class="form-group">
                        <label for="">Sisa/kurang : <?= $intrs->sisa ?></label>
                    </div>
                    <div class="form-group">
                        <label for="">Keterangan : <?= ($intrs->keterangan==1)?'lunas':'belum lunas';?></label>
                    </div>
                    <div class="form-group">
                        <label for="">Jumlah Bayar :</label>
                        <input type="text" name="jumlah_byr" id="" class="form-control"
                            value="<?= abs($intrs->sisa) ?>">
                    </div>

                    <div class="modal-footer">
                        <!-- <button type="submit" class="btn btn-primary brn-sm"><i class="fas fa-save"></i></button> -->

                        <button type="reset" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php } ?>

<!-- Modal Kembali-->
<?php foreach ($input_transaksi as $intrs) { ?>
<div class="modal fade" id="kembali<?= $intrs->id_data_transaksi ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Untuk Kembalian?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('c_input_transaksi/kembali/' . $intrs->id_data_transaksi) ?>" method="POST">
                    <div>Sisa pembayaran akan dikembalikan.</div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                        <button type="submit" class="btn btn-primary">Ya</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php } ?>
<!-- Modal Next-->
<?php foreach ($input_transaksi as $intrs) { ?>
<div class="modal fade" id="next<?= $intrs->id_data_transaksi ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Untuk Bulan Selanjutnya?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('c_input_transaksi/next/' . $intrs->id_data_transaksi) ?>" method="POST">
                    <div>Sisa pembayaran akan masuk ke bulan depan.</div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                        <button type="submit" class="btn btn-primary">Ya</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php } ?>



<!-- Modal Tambah-->
<?php foreach ($input_transaksi as $intrs) { ?>
<div class="modal fade" id="tambah<?= $intrs->id_data_transaksi ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Transaksi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('c_input_transaksi/tambah/' . $intrs->id_data_transaksi) ?>" method="POST">
                    <input hidden type="text" name="idnya_santri" value="28">
                    <div class="form-group">
                        <label for="">Nama : <?= $intrs->nama ?></label>
                    </div>
                    <div class="form-group">
                        <label for="">Tahun : <?= $intrs->nama_thn ?></label>
                    </div>
                    <div class="form-group">
                        <label for="">Bulan : <?= $intrs->nama_bln ?></label>
                    </div>
                    <div class="form-group">
                        <label for="">Besar Tagihan : <?= $intrs->nominal ?></label>
                    </div>

                    <div class="form-group">
                        <label for="">Sisa/kurang : <?= $intrs->sisa ?></label>
                    </div>
                    <div class="form-group">
                        <label for="">Keterangan : <?= $intrs->keterangan ?></label>
                    </div>
                    <div class="form-group">
                        <label for="">Jumlah Bayar :</label>
                        <input type="text" name="jml_bayar" id="" class="form-control" value="<?= $intrs->nominal ?>">
                        <input hidden type="text" name="id_transaksi" id="" class="form-control"
                            value="<?= $intrs->id_data_transaksi ?>">
                    </div>

                    <div class="modal-footer">
                        <!-- <button type="submit" class="btn btn-primary brn-sm"><i class="fas fa-save"></i></button> -->

                        <button type="reset" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php } ?>