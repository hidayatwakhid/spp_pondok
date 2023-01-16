<div class="card card-secondary">
    <div class="card-header">
        Cetak
    </div>
    <form action="<?= base_url('c_laporan/cetak') ?>" method="post">
        <div class="card-body">
            <div class="row">
                <div class="col-3">
                    <div class="form-group">
                        <label>Pilih Tahun</label>
                        <select name="id_tahun" id="id_tahun" class="custom-select">
                            <?php foreach ($tahun as $th) { ?>
                                <option value="<?= $th->id_thn ?>"><?= $th->nama_thn ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="col-4">
                    <div class="form-group">
                        <label>Pilih Kamar</label>
                        <select name="id_kamar" id="id_kamar" class="custom-select">
                            <?php foreach ($kamar as $th) { ?>
                                <option value="<?= $th->id_kmr ?>"><?= $th->nama_kmr ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="col-5">
                    <div class="row mt-2 ml-2">
                        <div class="form-group">
                            <br>
                            <button class="btn btn-info" formtarget="__blank" type="submit">Print</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</form>
<!-- /.card-body -->
</div>