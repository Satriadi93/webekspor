<?php
session_start();
if (!isset($_SESSION["login"])) {
  header("Location: ../Login/login.php");
  exit;
}
require 'function.php';
$lobster = query("SELECT * FROM data_lobster");
$sumbulan = query("SELECT SUM(x1) as x1 FROM data_lobster");
$sumperayaan = query("SELECT SUM(x2) as x2 FROM data_lobster");
$sumharga = query("SELECT SUM(y) as y FROM data_lobster");
$sumx1_2 = query("SELECT SUM(x1_2) as x1_2 FROM data_lobster");
$sumx2_2 = query("SELECT SUM(x2_2) as x2_2 FROM data_lobster");
$sumy_2 = query("SELECT SUM(y_2) as y_2 FROM data_lobster");
$sumx1y = query("SELECT SUM(x1y) as x1y FROM data_lobster");
$sumx2y = query("SELECT SUM(x2y) as x2y FROM data_lobster");
$sumx1x2 = query("SELECT SUM(x1x2) as x1x2 FROM data_lobster");
$n = query("SELECT COUNT(*) as n FROM data_lobster WHERE x1 != 0;");
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

$halaman = "lobster";
$mode = $perhitungan[0]['status'];

?>
<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
  <script src="../assets/js/color-modes.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.115.4">
  <title>Admin</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/docs.min.css" rel="stylesheet">
  <link href="css/dashboard.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
  <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
    <symbol id="door-closed" viewBox="0 0 16 16">
      <path d="M3 2a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V2zm1 13h8V2H4v13z" />
      <path d="M9 9a1 1 0 1 0 2 0 1 1 0 0 0-2 0z" />
    </symbol>
    <symbol id="file-earmark" viewBox="0 0 16 16">
      <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z" />
    </symbol>
    <symbol id="news" viewBox="0 0 16 16">
      <path d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5v-11zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5H12z" />
      <path d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z" />
    </symbol>
    <symbol id="gear-wide-connected" viewBox="0 0 16 16">
      <path d="M7.068.727c.243-.97 1.62-.97 1.864 0l.071.286a.96.96 0 0 0 1.622.434l.205-.211c.695-.719 1.888-.03 1.613.931l-.08.284a.96.96 0 0 0 1.187 1.187l.283-.081c.96-.275 1.65.918.931 1.613l-.211.205a.96.96 0 0 0 .434 1.622l.286.071c.97.243.97 1.62 0 1.864l-.286.071a.96.96 0 0 0-.434 1.622l.211.205c.719.695.03 1.888-.931 1.613l-.284-.08a.96.96 0 0 0-1.187 1.187l.081.283c.275.96-.918 1.65-1.613.931l-.205-.211a.96.96 0 0 0-1.622.434l-.071.286c-.243.97-1.62.97-1.864 0l-.071-.286a.96.96 0 0 0-1.622-.434l-.205.211c-.695.719-1.888.03-1.613-.931l.08-.284a.96.96 0 0 0-1.186-1.187l-.284.081c-.96.275-1.65-.918-.931-1.613l.211-.205a.96.96 0 0 0-.434-1.622l-.286-.071c-.97-.243-.97-1.62 0-1.864l.286-.071a.96.96 0 0 0 .434-1.622l-.211-.205c-.719-.695-.03-1.888.931-1.613l.284.08a.96.96 0 0 0 1.187-1.186l-.081-.284c-.275-.96.918-1.65 1.613-.931l.205.211a.96.96 0 0 0 1.622-.434l.071-.286zM12.973 8.5H8.25l-2.834 3.779A4.998 4.998 0 0 0 12.973 8.5zm0-1a4.998 4.998 0 0 0-7.557-3.779l2.834 3.78h4.723zM5.048 3.967c-.03.021-.058.043-.087.065l.087-.065zm-.431.355A4.984 4.984 0 0 0 3.002 8c0 1.455.622 2.765 1.615 3.678L7.375 8 4.617 4.322zm.344 7.646.087.065-.087-.065z" />
    </symbol>
    <symbol id="graph-up" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0Zm14.817 3.113a.5.5 0 0 1 .07.704l-4.5 5.5a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61 4.15-5.073a.5.5 0 0 1 .704-.07Z" />
    </symbol>
    <symbol id="post" viewBox="0 0 16 16">
      <path d="M4 3.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-8z" />
      <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z" />
    </symbol>
  </svg>

  <header class="navbar sticky-top bg-primary flex-md-nowrap p-0 shadow" data-bs-theme="dark">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white" href="#">Ş€Δ₣ØØĐ ŁØΜβØҜ</a>

    <div id="navbarSearch" class="navbar-search w-100 collapse">
      <input class="form-control w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
    </div>
  </header>

  <div class="container-fluid">
    <div class="row">
      <div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
        <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarMenuLabel">Ş€Δ₣ØØĐ ŁØΜβØҜ</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
          </div>

          <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
            <ul class="nav flex-column">
              <li class="nav-item" style="background-color:#b3d1ff">
                <a class="nav-link  d-flex align-items-center gap-2 " aria-current="page" href="index.php">
                  <svg class="bi">
                    <use xlink:href="#graph-up" />
                  </svg>
                  Harga
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link  d-flex align-items-center gap-2 " aria-current="page" href="posts.php">
                  <svg class="bi">
                    <use xlink:href="#post" />
                  </svg>
                  Posts
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link d-flex align-items-center gap-2" href="berita.php">
                  <svg class="bi">
                    <use xlink:href="#news" />
                  </svg>
                  Berita
                </a>
              </li>
            </ul>

            <hr class="my-3">

            <ul class="nav flex-column mb-auto">
              <li class="nav-item">
                <a href="logout.php" onclick="confirm('anda akan keluar ?')" class="nav-link d-flex align-items-center gap-2" name="logout">
                  <svg class="bi">
                    <use xlink:href="#door-closed" />
                  </svg>
                  Sign out
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <main id="content" class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

        <div class="modal fade" id="tambah-data-lobster" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Lobster</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form onsubmit="submitForm(event)">
                  <input type="hidden" name="lobster" value="true" />
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
                  <a href="#" onclick="loadContent('hargaLobster')">
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
          <a id="NavbarTwo" class="nav-link text-primary border-primary border-bottom me-4" href="#" onclick="loadContent('hargaLobster')">
            <h5 class="h5 ">Lobster</h5>
          </a>
          <a class="nav-link  me-4" onclick="loadContent('hargaKepiting')" href="#">
            <h5 class="h5 ">Kepiting</h5>
          </a>
          <a class="nav-link  " onclick="loadContent('hargaRumputLaut')" href="#">
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
              foreach ($lobster as $data) : ?>
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
                      <a class="nav-link " href="#" data-bs-toggle="modal" data-bs-target="#update-data-lobster" onclick="loadModalContent(<?= $data['id'] ?>)">
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
            <button type="button" class="btn btn-outline-primary mx-2" data-bs-toggle="modal" data-bs-target="#tambah-data-lobster">Tambah Data</button>
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

        <div class="modal fade" id="update-data-lobster" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Data Lobster</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form onsubmit="submitFormUpdate(event)">
                  <input type="hidden" name="lobster" value="true" />
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
                  <a href="#" onclick="loadContent('hargaLobster')">
                    <div class="modal-footer  justify-content-start">
                      <button data-bs-dismiss="modal" type="submit" value="update" class="btn btn-success">Update</button>
                    </div>
                  </a>
                </form>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>

  </div>
  <script src="js/script.js"></script>
  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js" integrity="sha384-gdQErvCNWvHQZj6XZM0dNsAoY4v+j5P1XDpNkcM3HJG1Yx04ecqIHk7+4VBOCHOG" crossorigin="anonymous"></script>

  <div class="modal fade" id="tambah-data-lobster" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Lobster</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form onsubmit="submitForm(event)">
            <input type="hidden" name="lobster" value="true" />
            <span class="mb-1">Bulan</span>
            <div class="input-group mb-3">
              <input type="text" class="form-control" name="bulan" value="" aria-describedby="basic-addon1">
            </div>

            <span class="mb-1">Bulan Ke</span>
            <div class="input-group mb-3">
              <input type="number" class="form-control" name="bulanke" value="" aria-describedby="basic-addon1">
            </div>

            <span class="mb-1">Perayaan</span>
            <div class="input-group mb-3">
              <input type="number" class="form-control" name="perayaan" value="" aria-describedby="basic-addon1">
            </div>

            <span class="mb-1">Harga</span>
            <div class="input-group mb-3">
              <input type="number" class="form-control" name="harga" value="" aria-describedby="basic-addon1">
            </div>
            <a href="#" onclick="loadContent('hargaLobster')">
              <div class="modal-footer  justify-content-start">
                <button data-bs-dismiss="modal" type="submit" value="save" class="btn btn-success">Save</button>
              </div>
            </a>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="js/script.js"></script>
</body>

</html>