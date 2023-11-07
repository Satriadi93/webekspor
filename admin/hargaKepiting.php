<?php

session_start();
if (!isset($_SESSION["login"])) {
  header("Location: ../Login/login.php");
  exit;
}
require 'function.php';
global $conn;
$kepiting = query("SELECT * FROM data_kepiting");
$sumbulan = query("SELECT SUM(x1) as x1 FROM data_kepiting");
$sumperayaan = query("SELECT SUM(x2) as x2 FROM data_kepiting");
$sumharga = query("SELECT SUM(y) as y FROM data_kepiting");
$sumx1_2 = query("SELECT SUM(x1_2) as x1_2 FROM data_kepiting");
$sumx2_2 = query("SELECT SUM(x2_2) as x2_2 FROM data_kepiting");
$sumy_2 = query("SELECT SUM(y_2) as y_2 FROM data_kepiting");
$sumx1y = query("SELECT SUM(x1y) as x1y FROM data_kepiting");
$sumx2y = query("SELECT SUM(x2y) as x2y FROM data_kepiting");
$sumx1x2 = query("SELECT SUM(x1x2) as x1x2 FROM data_kepiting");
$n = query("SELECT COUNT(*) as n FROM data_kepiting WHERE x1 != 0;");
$perhitungan = query("SELECT * FROM perhitungan");
perhitungan(
    $sumbulan[0]['x1'],
    $sumperayaan[0]['x2'],
    $sumharga[0]['y'],
    $sumx1_2[0]['x1_2'],
    $sumx2_2[0]['x2_2'],
    $sumy_2[0]['y_2'],
    $sumx1y[0]['x1y'],
    $sumx2y[0]['x2y'],
    $sumx1x2[0]['x1x2'],
    $n[0]['n']
);

$halaman = "kepiting";
$mode = $perhitungan[0]['status'];
?>

<div class="modal fade" id="tambah-data-kepiting" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Kepiting</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form onsubmit="submitForm(event)">
                    <input type="hidden" name="kepiting" value="true" />
                    <span class="mb-1">Bulan</span>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="bulan" value="">
                    </div>

                    <span class="mb-1">Bulan Ke</span>
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" name="bulanke" value="">
                    </div>

                    <span class="mb-1">Perayaan</span>
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" name="perayaan" value="">
                    </div>

                    <span class="mb-1">Harga</span>
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" name="harga" value="">
                    </div>
                    <a href="#" onclick="loadContent('hargaKepiting')">
                        <div class="modal-footer  justify-content-start">
                            <button data-bs-dismiss="modal" type="submit" value="save" class="btn btn-success">Save</button>
                        </div>
                    </a>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="sticky-top d-flex flex-wrap flex-md-nowrap align-items-center pt-2 pb-2 mb-3 border-bottom ">
    <a class="nav-link me-4" href="#" onclick="loadContent('hargaLobster')">
        <h5 class="h5 ">Lobster</h5>
    </a>
    <a class="nav-link text-primary border-primary border-bottom me-4" onclick="loadContent('hargaKepiting')" href="#" id="NavbarTwo">
        <h5 class="h5 ">Kepiting</h5>
    </a>
    <a class="nav-link " onclick="loadContent('hargaRumputLaut')" href="#">
        <h5 class="h5">Rumput Laut</h5>
    </a>
</div>
<div class="content" id="contentHalamanHarga">
    <table class="table table-striped table-bordered">
        <thead class="table-danger">
            <tr>
                <th style="width: 5%;" class="text-center">No</th>
                <th class="text-center">Bulan</th>
                <th class="text-center">Bulan ke</th>
                <th class="text-center">Perayaan</th>
                <th class="text-center">Harga</th>
                <th class="text-center" style="width: 6%;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sliders" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3h9.05zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8h2.05zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1h9.05z" />
                    </svg>
                </th>
            </tr>
        </thead>
        <tbody class="table-primary">
            <?php
            $i = 1;
            foreach ($kepiting as $data) : ?>
                <tr>
                    <td style="width: 5%;" class="text-center"><?= $i ?></td>
                    <td id="bulan<?= $data['id'] ?>"><?= $data["bulan"] ?></td>
                    <td id="x1<?= $data['id'] ?>"><?php if (!$data["x1"] == 0) {
                                                        echo $data['x1'];
                                                    }  ?></td>
                    <td id="x2<?= $data['id'] ?>"><?php if (!$data["x2"] == 0) {
                                                        echo $data['x2'];
                                                    }  ?></td>
                    <td id="y<?= $data['id'] ?>"><?php if (!$data["y"] == 0) {
                                                        echo $data['y'];
                                                    }  ?></td>
                    <td style="width: 6%;" class="text-center">
                        <div class="d-flex justify-content-center">
                            <a class="nav-link " href="#" data-bs-toggle="modal" data-bs-target="#update-data-kepiting" onclick="loadModalContent(<?= $data['id'] ?>)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-pencil-square me-2" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                </svg>
                            </a>
                            <a href="#" class="nav-link text-danger" onclick="hapusData(<?= $data['id'] ?>,'<?= $halaman ?>')">
                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                    <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                </svg>
                            </a>
                        </div>
                    </td>
                </tr>
            <?php $i++;
            endforeach ?>
            <tr class="table-danger">
                <th class="text-center">∑</th>
                <th class="text-center">Total</th>
                <th><?php echo $sumbulan[0]['x1']; ?></th>
                <th><?php echo $sumperayaan[0]['x2']; ?></th>
                <th><?php echo $sumharga[0]['y']; ?></th>
                <th style="width: 5%;"></th>
            </tr>
        </tbody>
    </table>

    <table class="table table-striped table-bordered mt-4">
        <thead class="table-danger">
            <tr>
                <th class="text-center">n</th>
                <th class="text-center">∑x1<sup>2</sup></th>
                <th class="text-center">∑x2<sup>2</sup></th>
                <th class="text-center">∑y<sup>2</sup></th>
                <th class="text-center">∑x1y</th>
                <th class="text-center">∑x2y</th>
                <th class="text-center">∑x1x2</th>
                <th class="text-center">b1</th>
                <th class="text-center">b2</th>
                <th class="text-center">a</th>
            </tr>
        </thead>
        <tbody class="table-primary">
            <tr>
                <td class="text-center"><?= $n[0]['n'] ?></td>
                <td class="text-center"><?= $∑x1_2 ?></td>
                <td class="text-center"><?= $∑x2_2 ?></td>
                <td class="text-center"><?= $∑y_2 ?></td>
                <td class="text-center"><?= $∑x1y ?></td>
                <td class="text-center"><?= $∑x2y ?></td>
                <td class="text-center"><?= $∑x1x2 ?></td>
                <td class="text-center"><?= $b1 ?></td>
                <td class="text-center"><?= $b2 ?></td>
                <td class="text-center"><?= $a ?></td>
            </tr>
        </tbody>
    </table>
    <div class="d-flex justify-content-center my-5">
        <button type="button" class="btn btn-outline-primary mx-2" data-bs-toggle="modal" data-bs-target="#tambah-data-kepiting">Tambah Data</button>
        <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">Perhitungan</button>
        <ul class="dropdown-menu">
            <li><a onclick="mode('default')" class="dropdown-item <?php if ($mode === "default") {
                                                                        echo 'text-primary';
                                                                    } ?>">Default</a></li>
            <li><a onclick="mode('custom')" class="dropdown-item <?php if ($mode === "custom") {
                                                                        echo 'text-primary';
                                                                    } ?>">Custom</a></li>
        </ul>

        <button type="button" class="btn btn-outline-primary mx-2" onclick="simpanHasil('<?= $halaman ?>')">Simpan Hasil</button>
    </div>

    <div class="rumus mt-4 d-flex justify-content-center">
        <h1>y = 𝑎+ (b1 * X1) + (b2 * X2)</h1>
    </div>
    <div class="input-group mt-4 mb-3 d-flex justify-content-center">
        <span class="input-group-text">
            <h2>y = </h2>
        </span>
        <input <?php if ($mode === "default") {
                    echo 'readonly';
                } ?> type="text" class="form-control fs-3" id="a" value="<?php if ($mode === "custom") {
                                                                                echo $perhitungan[0]['a_' . $halaman];
                                                                            } else {
                                                                                echo $a;
                                                                            } ?>">
        <span class="input-group-text">
            <h2>+ (</h2>
        </span>
        <input <?php if ($mode === "default") {
                    echo 'readonly';
                } ?> type="text" class="form-control fs-3" id="b1" value="<?php if ($mode === "custom") {
                                                                                echo $perhitungan[0]['b1_' . $halaman];
                                                                            } else {
                                                                                echo $b1;
                                                                            } ?>">
        <span class="input-group-text">
            <h2>*</h2>
        </span>
        <input type="text" class="form-control fs-3" id="x1" value="<?= $perhitungan[0]['x1_' . $halaman] ?>" oninput="hitung()">
        <span class="input-group-text">
            <h2> ) + (</h2>
        </span>
        <input <?php if ($mode === "default") {
                    echo 'readonly';
                } ?> type="text" class="form-control fs-3" id="b2" value="<?php if ($mode === "custom") {
                                                                                echo $perhitungan[0]['b2_' . $halaman];
                                                                            } else {
                                                                                echo $b2;
                                                                            } ?>">
        <span class="input-group-text">
            <h2>*</h2>
        </span>
        <input type="text" class="form-control fs-3" id="x2" value="<?= $perhitungan[0]['x2_' . $halaman] ?>" oninput="hitung()">
        <span class="input-group-text">
            <h2>) = </h2>
        </span>
        <span class="input-group-text">
            <h2 id="hasil"><?= $perhitungan[0]['hasil_' . $halaman] ?> </h2>
        </span>
        <input type="hidden" id="data" value="<?= $halaman ?>">

    </div>

</div>
<canvas class="my-4 w-100" id="myChart" width="900" height="100vh"></canvas>

<div class="modal fade" id="update-data-kepiting" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Data Kepiting</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form onsubmit="submitFormUpdate(event)">
                    <input type="hidden" name="kepiting" value="true" />
                    <input type="hidden" name="id" id="idUpdate" />
                    <span class="mb-1">Bulan</span>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="bulan" id="bulanUpdate">
                    </div>

                    <span class="mb-1">Bulan Ke</span>
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" name="bulanke" id="bulankeUpdate">
                    </div>

                    <span class="mb-1">Perayaan</span>
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" name="perayaan" id="perayaanUpdate">
                    </div>

                    <span class="mb-1">Harga</span>
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" name="harga" id="hargaUpdate">
                    </div>
                    <a href="#" onclick="loadContent('hargaKepiting')">
                        <div class="modal-footer  justify-content-start">
                            <button data-bs-dismiss="modal" type="submit" value="update" class="btn btn-success">Update</button>
                        </div>
                    </a>
                </form>
            </div>
        </div>
    </div>
</div>