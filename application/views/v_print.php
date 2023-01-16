<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
    * {
        box-sizing: border-box;
        font-size: 12 px;
    }

    .col-bulan {
        width: 20px;
    }



    .row {
        margin-left: -5px;
        margin-right: -5px;

    }

    .container {
        /* align:center; */
        /* text-align: center; */
        /* margin-left: 400px; */
        width: 297mm;
        height: 210mm;
        padding: 2px;
    }

    .column {
        float: left;
        /* width: 50%; */
        padding: 0px;
    }

    /* Clearfix (clear floats) */
    .row::after {
        content: "";
        clear: both;
        display: table;

    }

    table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 0.1px solid #ddd;
    }

    th,
    td {
        text-align: center;
        padding: 4px;
        width: 10px;
        height: 30px;
    }


    tr {
        height: 30px;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    /* Tata letak responsif - membuat dua kolom bertumpuk, bukan bersebelahan pada layar yang lebih kecil dari 600 piksel */
    @media screen and (max-width: 600px) {
        .column {
            width: 100%;
        }


    }

    @media print {
        * {
            font-size: 12 px;
        }

        .container {
            width: 297mm;
            height: 210mm;
            padding: 2px;
        }

        th,
        td {
            text-align: center;
            padding: 4px;
            width: 30px;
            height: 30px;
        }


        #printPageButton {
            display: none;
        }
    }
    </style>
</head>

<body onload="myFunction()">

    <div class="container">
        <h2 align="center">Laporan Pembayaran SPP </h2>

        <hr>
        <div class="d-flex justify-content-between">
            <div>
                <h6>Tahun :
                    <?php foreach ($data_tahun as $dt) { ?>
                    <?= $dt->nama_thn; ?>
                    <?php } ?> </h6>
            </div>

            <div>
                <h6>Kamar : <?= $data_kamar->nama_kmr ?> </h6>
            </div>
        </div>



        <div class="row">
            <div class="column">
                <table>
                    <tr>
                        <th>No</th>
                    </tr>

                    <?php
                    $no = 1;
                    foreach ($data_santri as $ns) { ?>

                    <tr>
                        <td><?= $no++ ?></td>
                    </tr>

                    <?php } ?>

                </table>
            </div>
            <div class="column">
                <table>
                    <tr>
                        <th style="width: 300px">Nama</th>
                    </tr>

                    <?php
                    $no = 1;
                    foreach ($data_santri as $ns) { ?>

                    <tr>
                        <td><?= $ns->nama ?></td>
                    </tr>

                    <?php } ?>

                </table>
            </div>
            <div class="column">
                <table>
                    <tr>
                        <th class="col-bulan">Januari</th>
                    </tr>

                    <?php
                    foreach ($data_januari as $jan) { ?>
                    <tr>
                        <td <?php if ($jan->keterangan == '') {
                                        echo 'style="background-color: red;"';
                                    } elseif ($jan->keterangan == '0') {
                                        echo 'style="background-color: red;"';
                                    } ?>>

                            <?php
                                    if ($jan->keterangan == '1') { ?>
                            <!-- <?= date('d-m-Y ', strtotime($jan->keterangan));  ?> -->
                            <span style="font-family: wingdings; ">&#252;</span>
                            <?php } ?>

                        </td>
                    </tr>

                    <?php } ?>

                </table>
            </div>
            <div class="column">
                <table>
                    <tr>
                        <th class="col-bulan">Februari</th>
                    </tr>

                    <?php
                    foreach ($data_februari as $jan) { ?>

                    <tr>
                        <td <?php if ($jan->keterangan == '') {
                                        echo 'style="background-color: red;"';
                                    } elseif ($jan->keterangan == '0') {
                                        echo 'style="background-color: red;"';
                                    } ?>>

                            <?php
                                    if ($jan->keterangan == '1') { ?>
                            <!-- <?= date('d-m-Y ', strtotime($jan->keterangan));  ?> -->
                            <span style="font-family: wingdings; ">&#252;</span>
                            <?php } ?>

                        </td>
                    </tr>

                    <?php } ?>

                </table>
            </div>
            <div class="column">
                <table>
                    <tr>
                        <th class="col-bulan">Maret</th>
                    </tr>

                    <?php
                    foreach ($data_maret as $jan) { ?>

                    <tr>
                        <td <?php if ($jan->keterangan == '') {
                                        echo 'style="background-color: red; width: 50px;"';
                                    } elseif ($jan->keterangan == '0') {
                                        echo 'style="background-color: red;"';
                                    } else {
                                        echo 'width: 50px;"';
                                    } ?>>

                            <?php
                                    if ($jan->keterangan == '1') { ?>
                            <!-- <?= date('d-m-Y ', strtotime($jan->keterangan));  ?> -->
                            <span style="font-family: wingdings; ">&#252;</span>
                            <?php } ?>

                        </td>
                    </tr>

                    <?php } ?>

                </table>
            </div>
            <div class="column">
                <table>
                    <tr>
                        <th class="col-bulan">April</th>
                    </tr>

                    <?php
                    foreach ($data_april as $jan) { ?>

                    <tr>
                        <td <?php if ($jan->keterangan == '') {
                                        echo 'style="background-color: red; width: 50px;"';
                                    } elseif ($jan->keterangan == '0') {
                                        echo 'style="background-color: red;"';
                                    } else {
                                        echo 'width: 50px;"';
                                    } ?>>

                            <?php
                                    if ($jan->keterangan == '1') { ?>
                            <!-- <?= date('d-m-Y ', strtotime($jan->keterangan));  ?> -->
                            <span style="font-family: wingdings; ">&#252;</span>
                            <?php } ?>

                        </td>
                    </tr>

                    <?php } ?>

                </table>
            </div>
            <div class="column">
                <table>
                    <tr>
                        <th class="col-bulan">Mei</th>
                    </tr>

                    <?php
                    foreach ($data_mei as $jan) { ?>

                    <tr>
                        <td <?php if ($jan->keterangan == '') {
                                        echo 'style="background-color: red; width: 50px;"';
                                    } elseif ($jan->keterangan == '0') {
                                        echo 'style="background-color: red;"';
                                    } else {
                                        echo 'width: 50px;"';
                                    } ?>>

                            <?php
                                    if ($jan->keterangan == '1') { ?>
                            <!-- <?= date('d-m-Y ', strtotime($jan->keterangan));  ?> -->
                            <span style="font-family: wingdings; ">&#252;</span>
                            <?php } ?>

                        </td>
                    </tr>

                    <?php } ?>

                </table>
            </div>
            <div class="column">
                <table>
                    <tr>
                        <th class="col-bulan">Juni</th>
                    </tr>

                    <?php
                    foreach ($data_juni as $jan) { ?>

                    <tr>
                        <td <?php if ($jan->keterangan == '') {
                                        echo 'style="background-color: red;  width: 50px;"';
                                    } elseif ($jan->keterangan == '0') {
                                        echo 'style="background-color: red;"';
                                    } else {
                                        echo 'width: 50px;"';
                                    } ?>>

                            <?php
                                    if ($jan->keterangan == '1') { ?>
                            <!-- <?= date('d-m-Y ', strtotime($jan->keterangan));  ?> -->
                            <span style="font-family: wingdings; ">&#252;</span>
                            <?php } ?>

                        </td>
                    </tr>

                    <?php } ?>

                </table>
            </div>
            <div class="column">
                <table>
                    <tr>
                        <th class="col-bulan">Juli</th>
                    </tr>

                    <?php
                    foreach ($data_juli as $jan) { ?>

                    <tr>
                        <td <?php if ($jan->keterangan == '') {
                                        echo 'style="background-color: red; width: 50px;"';
                                    } elseif ($jan->keterangan == '0') {
                                        echo 'style="background-color: red;"';
                                    } else {
                                        echo 'width: 50px;"';
                                    } ?>>

                            <?php
                                    if ($jan->keterangan == '1') { ?>
                            <!-- <?= date('d-m-Y ', strtotime($jan->keterangan));  ?> -->
                            <span style="font-family: wingdings; ">&#252;</span>
                            <?php } ?>

                        </td>
                    </tr>

                    <?php } ?>

                </table>
            </div>
            <div class="column">
                <table>
                    <tr>
                        <th class="col-bulan">Agust</th>
                    </tr>

                    <?php
                    foreach ($data_agustus as $jan) { ?>

                    <tr>
                        <td <?php if ($jan->keterangan == '') {
                                        echo 'style="background-color: red;"';
                                    } ?>>

                            <?php
                                    if ($jan->keterangan == '1') { ?>
                            <!-- <?= date('d-m-Y ', strtotime($jan->keterangan));  ?> -->
                            <span style="font-family: wingdings; ">&#252;</span>
                            <?php } ?>

                        </td>
                    </tr>

                    <?php } ?>

                </table>
            </div>
            <div class="column">
                <table>
                    <tr>
                        <th class="col-bulan">Sept</th>
                    </tr>

                    <?php
                    foreach ($data_september as $jan) { ?>

                    <tr>
                        <td <?php if ($jan->keterangan == '') {
                                        echo 'style="background-color: red;"';
                                    } ?>>

                            <?php
                                    if ($jan->keterangan == '1') { ?>
                            <!-- <?= date('d-m-Y ', strtotime($jan->keterangan));  ?> -->
                            <span style="font-family: wingdings; ">&#252;</span>
                            <?php } ?>

                        </td>
                    </tr>

                    <?php } ?>

                </table>
            </div>
            <div class="column">
                <table>
                    <tr>
                        <th class="col-bulan">Okt</th>
                    </tr>

                    <?php
                    foreach ($data_oktober as $jan) { ?>

                    <tr>
                        <td <?php if ($jan->keterangan == '') {
                                        echo 'style="background-color: red;"';
                                    } ?>>

                            <?php
                                    if ($jan->keterangan == '1') { ?>
                            <!-- <?= date('d-m-Y ', strtotime($jan->keterangan));  ?> -->
                            <span style="font-family: wingdings; ">&#252;</span>
                            <?php } ?>

                        </td>
                    </tr>

                    <?php } ?>

                </table>
            </div>
            <div class="column">
                <table>
                    <tr>
                        <th class="col-bulan">Nov</th>
                    </tr>

                    <?php
                    foreach ($data_november as $jan) { ?>

                    <tr>
                        <td <?php if ($jan->keterangan == '') {
                                        echo 'style="background-color: red;"';
                                    } ?>>

                            <?php
                                    if ($jan->keterangan == '1') { ?>
                            <!-- <?= date('d-m-Y ', strtotime($jan->keterangan));  ?> -->
                            <span style="font-family: wingdings; ">&#252;</span>
                            <?php } ?>

                        </td>
                    </tr>

                    <?php } ?>

                </table>
            </div>
            <div class="column">
                <table>
                    <tr>
                        <th class="col-bulan">Des</th>
                    </tr>

                    <?php
                    foreach ($data_desember as $jan) { ?>

                    <tr>
                        <td <?php if ($jan->keterangan == '') {
                                        echo 'style="background-color: red;"';
                                    } ?>>

                            <?php
                                    if ($jan->keterangan == '1') { ?>
                            <!-- <?= date('d-m-Y ', strtotime($jan->keterangan));  ?> -->
                            <span style="font-family: wingdings; ">&#252;</span>
                            <?php } ?>

                        </td>
                    </tr>

                    <?php } ?>

                </table>
            </div>
        </div>
        <br>
        <h6>NB : Silakan kepada santri - santri yang belum melunasi pembayaran untuk segera melunasinya.</h6><br><br>

        <!-- <button id="printPageButton" onclick="window.print()">Print this page</button> -->
    </div>
</body>
<script>
function myFunction() {
    window.print()
}
</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh6U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>


</html>