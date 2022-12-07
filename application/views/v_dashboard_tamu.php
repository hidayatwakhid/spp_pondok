<div class="card">
    <div class="card-body table-responsive">
        <table id="example1" class="table table-bordered table-striped display" style="width: 100%;">
            <thead>
                <tr class="text-center">
                    <th>No</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($santri as $san) : ?>
                <tr class="text-center">
                    <td><?= $no++ ?></td>
                    <td><?= $san->nama ?></td>
                    <td><?= $san->nama_kls ?></td>
                    <td><?= $san->alamat ?></td>
                    <td>
                        <a type="button" class="btn btn-sm btn-info" title="Input Transaksi"
                            href="<?= base_url('c_input_transaksi/input_transaksi/') ?><?= $san->id ?>">Lihat</a>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>