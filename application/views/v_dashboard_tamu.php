<div class="content-header">
    <div class="container">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Santri</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Santri</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
        <div class="card">
            <!-- /.card-header -->
            <div class="card-body table-responsive">
                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="dataTables_length" id="example1_length"><label>Show <select
                                        name="example1_length" aria-controls="example1"
                                        class="custom-select custom-select-sm form-control form-control-sm">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select> entries</label></div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search"
                                        class="form-control form-control-sm" placeholder=""
                                        aria-controls="example1"></label></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="example1" class="table table-bordered table-striped display dataTable no-footer"
                                style="width: 100%;" role="grid" aria-describedby="example1_info">
                                <thead>
                                    <tr class="text-center" role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-sort="ascending"
                                            aria-label="No: activate to sort column descending" style="width: 20px;">No
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="Nama: activate to sort column ascending"
                                            style="width: 42px;">Nama
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="NIS: activate to sort column ascending"
                                            style="width: 25px;">NIS
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="Kamar: activate to sort column ascending"
                                            style="width: 48px;">Kamar
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="Kelas: activate to sort column ascending"
                                            style="width: 54px;">Kelas
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="Bayar: activate to sort column ascending"
                                            style="width: 56px;">Bayar
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="Aksi: activate to sort column ascending"
                                            style="width: 31px;">Aksi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center odd" role="row">
                                        <td class="sorting_1">1</td>
                                        <td>Wakhid</td>
                                        <td>122</td>
                                        <td>Umar 1</td>
                                        <td>Ibtida</td>
                                        <td>
                                            <a type="button" class="btn btn-sm btn-info" title="Input Transaksi"
                                                href="http://localhost/spp_pondok/c_input_transaksi/input_transaksi/4">Input
                                                Transaksi</a>
                                        </td>
                                        <td>
                                            <a href="http://localhost/spp_pondok/c_santri/detail/4"
                                                class="btn btn-success btn-sm"><i class="fa fa-search-plus"> </i></a>
                                            <!-- <a href="http://localhost/spp_pondok/delete/4" type="button" class="btn btn-secondary"
                            onclick="return confirm('Anda yakin ingin menghapus data ini?')"><i
                                class="bi bi-eye-fill"></i></a> -->
                                            <button data-toggle="modal" data-target="#edit4"
                                                class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                                            <a href="http://localhost/spp_pondok/delete/4" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Anda yakin ingin menghapus data ini?')"><i
                                                    class="fas fa-trash"></i></a>
                                            <!-- <a href="http://localhost/spp_pondok/delete/4" class="btn btn-danger btn-sm"><i
                                class="fas fa-trash"></i></a> -->
                                        </td>
                                    </tr>
                                    <tr class="text-center even" role="row">
                                        <td class="sorting_1">2</td>
                                        <td>Wakhid</td>
                                        <td>122</td>
                                        <td>Umar 2</td>
                                        <td>Ibtida</td>
                                        <td>
                                            <a type="button" class="btn btn-sm btn-info" title="Input Transaksi"
                                                href="http://localhost/spp_pondok/c_input_transaksi/input_transaksi/5">Input
                                                Transaksi</a>
                                        </td>
                                        <td>
                                            <a href="http://localhost/spp_pondok/c_santri/detail/5"
                                                class="btn btn-success btn-sm"><i class="fa fa-search-plus"> </i></a>
                                            <button data-toggle="modal" data-target="#edit5"
                                                class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                                            <a href="http://localhost/spp_pondok/delete/5" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Anda yakin ingin menghapus data ini?')"><i
                                                    class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr class="text-center odd" role="row">
                                        <td class="sorting_1">3</td>
                                        <td>aku</td>
                                        <td>2</td>
                                        <td>Umar 3</td>
                                        <td>Ibtida</td>
                                        <td>
                                            <a type="button" class="btn btn-sm btn-info" title="Input Transaksi"
                                                href="http://localhost/spp_pondok/c_input_transaksi/input_transaksi/9">Input
                                                Transaksi</a>
                                        </td>
                                        <td>
                                            <a href="http://localhost/spp_pondok/c_santri/detail/9"
                                                class="btn btn-success btn-sm"><i class="fa fa-search-plus"> </i></a>
                                            <button data-toggle="modal" data-target="#edit9"
                                                class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                                            <a href="http://localhost/spp_pondok/delete/9" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Anda yakin ingin menghapus data ini?')"><i
                                                    class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr class="text-center even" role="row">
                                        <td class="sorting_1">4</td>
                                        <td>baru1</td>
                                        <td>322</td>
                                        <td>Umar 1</td>
                                        <td>Ibtida</td>
                                        <td>
                                            <a type="button" class="btn btn-sm btn-info" title="Input Transaksi"
                                                href="http://localhost/spp_pondok/c_input_transaksi/input_transaksi/16">Input
                                                Transaksi</a>
                                        </td>
                                        <td>
                                            <a href="http://localhost/spp_pondok/c_santri/detail/16"
                                                class="btn btn-success btn-sm"><i class="fa fa-search-plus"> </i></a>
                                            <button data-toggle="modal" data-target="#edit16"
                                                class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                                            <a href="http://localhost/spp_pondok/delete/16"
                                                class="btn btn-danger btn-sm"
                                                onclick="return confirm('Anda yakin ingin menghapus data ini?')"><i
                                                    class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr class="text-center odd" role="row">
                                        <td class="sorting_1">5</td>
                                        <td>q</td>
                                        <td>1211</td>
                                        <td>Umar 3</td>
                                        <td>Jurumiyah</td>
                                        <td>
                                            <a type="button" class="btn btn-sm btn-info" title="Input Transaksi"
                                                href="http://localhost/spp_pondok/c_input_transaksi/input_transaksi/10">Input
                                                Transaksi</a>
                                        </td>
                                        <td>
                                            <a href="http://localhost/spp_pondok/c_santri/detail/10"
                                                class="btn btn-success btn-sm"><i class="fa fa-search-plus"> </i></a>
                                            <button data-toggle="modal" data-target="#edit10"
                                                class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                                            <a href="http://localhost/spp_pondok/delete/10"
                                                class="btn btn-danger btn-sm"
                                                onclick="return confirm('Anda yakin ingin menghapus data ini?')"><i
                                                    class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr class="text-center even" role="row">
                                        <td class="sorting_1">6</td>
                                        <td>baru1</td>
                                        <td>1223</td>
                                        <td>Umar 2</td>
                                        <td>Jurumiyah</td>
                                        <td>
                                            <a type="button" class="btn btn-sm btn-info" title="Input Transaksi"
                                                href="http://localhost/spp_pondok/c_input_transaksi/input_transaksi/15">Input
                                                Transaksi</a>
                                        </td>
                                        <td>
                                            <a href="http://localhost/spp_pondok/c_santri/detail/15"
                                                class="btn btn-success btn-sm"><i class="fa fa-search-plus"> </i></a>
                                            <!-- <a href="http://localhost/spp_pondok/delete/15" type="button" class="btn btn-secondary"
                            onclick="return confirm('Anda yakin ingin menghapus data ini?')"><i
                                class="bi bi-eye-fill"></i></a> -->
                                            <button data-toggle="modal" data-target="#edit15"
                                                class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                                            <a href="http://localhost/spp_pondok/delete/15"
                                                class="btn btn-danger btn-sm"
                                                onclick="return confirm('Anda yakin ingin menghapus data ini?')"><i
                                                    class="fas fa-trash"></i></a>
                                            <!-- <a href="http://localhost/spp_pondok/delete/15" class="btn btn-danger btn-sm"><i
                                class="fas fa-trash"></i></a> -->
                                        </td>
                                    </tr>
                                    <tr class="text-center odd" role="row">
                                        <td class="sorting_1">7</td>
                                        <td>akua</td>
                                        <td>22</td>
                                        <td>Umar Bambu</td>
                                        <td>Jurumiyah</td>
                                        <td>
                                            <a type="button" class="btn btn-sm btn-info" title="Input Transaksi"
                                                href="http://localhost/spp_pondok/c_input_transaksi/input_transaksi/17">Input
                                                Transaksi</a>
                                        </td>
                                        <td>
                                            <a href="http://localhost/spp_pondok/c_santri/detail/17"
                                                class="btn btn-success btn-sm"><i class="fa fa-search-plus"> </i></a>
                                            <!-- <a href="http://localhost/spp_pondok/delete/17" type="button" class="btn btn-secondary"
                            onclick="return confirm('Anda yakin ingin menghapus data ini?')"><i
                                class="bi bi-eye-fill"></i></a> -->
                                            <button data-toggle="modal" data-target="#edit17"
                                                class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                                            <a href="http://localhost/spp_pondok/delete/17"
                                                class="btn btn-danger btn-sm"
                                                onclick="return confirm('Anda yakin ingin menghapus data ini?')"><i
                                                    class="fas fa-trash"></i></a>
                                            <!-- <a href="http://localhost/spp_pondok/delete/17" class="btn btn-danger btn-sm"><i
                                class="fas fa-trash"></i></a> -->
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-5">
                            <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1
                                to 7
                                of 7 entries</div>
                        </div>
                        <div class="col-sm-12 col-md-7">
                            <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                                <ul class="pagination">
                                    <li class="paginate_button page-item previous disabled" id="example1_previous"><a
                                            href="#" aria-controls="example1" data-dt-idx="0" tabindex="0"
                                            class="page-link">Previous</a></li>
                                    <li class="paginate_button page-item active"><a href="#" aria-controls="example1"
                                            data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                    <li class="paginate_button page-item next disabled" id="example1_next"><a href="#"
                                            aria-controls="example1" data-dt-idx="2" tabindex="0"
                                            class="page-link">Next</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.container-fluid -->
    <style>
    /* table.dataTable thead .sorting {
    display: none;
} */
    </style>
</div>