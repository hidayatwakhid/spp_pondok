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
                    <th>Sisa/Kurang</th>
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
                        <td><?= $intrs->jumlah_byr ?></td>
                        <td><?= $intrs->sisa ?></td>
                        <td><?= $intrs->keterangan ?></td>
                        <td><?= $intrs->tgl_byr ?></td>
                        <td><?= $intrs->created_by ?></td>
                        <td>
                            <button data-toggle="modal" data-target="#edit<?= $intrs->id_data_transaksi ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                            <a href="<?= base_url('c_input_transaksi/delete/' . $intrs->id_data_transaksi) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus data ini?')"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal Edit-->
<?php foreach ($input_transaksi as $intrs) { ?>
    <div class="modal fade" id="edit<?= $intrs->id_data_transaksi ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Data Tahun</h5>
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
                            <label for="">Keterangan : <?= $intrs->keterangan ?></label>
                        </div>
                        <div class="form-group">
                            <label for="">Jumlah Bayar :</label>
                            <input type="text" name="created_by" id="" class="form-control" value="<?= $intrs->jumlah_byr ?>">
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