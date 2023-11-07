<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: ../Login/login.php");
    exit;
}
var_dump($_POST);
require 'function.php';
global $conn;

$a = htmlspecialchars($_POST['a']);
$b1 = htmlspecialchars($_POST['b1']);
$b2 = htmlspecialchars($_POST['b2']);
$x1 = htmlspecialchars($_POST['x1']);
$x2 = htmlspecialchars($_POST['x2']);
$hasil = htmlspecialchars($_POST['hasil']);
$halaman = htmlspecialchars($_POST['halaman']);
$action = htmlspecialchars($_POST['action']);
$mode = htmlspecialchars($_POST['mode']);
$bulan = htmlspecialchars($_POST['bulan']);
$bulanke = htmlspecialchars($_POST["bulanke"]);
$perayaan = htmlspecialchars($_POST["perayaan"]);
$harga = htmlspecialchars($_POST["harga"]);
$id = htmlspecialchars($_POST["id"]);
$section = htmlspecialchars($_POST["section"]);
$title = htmlspecialchars($_POST["title"]);
$description = htmlspecialchars($_POST["description"]);
$calories = htmlspecialchars($_POST["calories"]);
$total_fat = htmlspecialchars($_POST["total_fat"]);
$sodium = htmlspecialchars($_POST["sodium"]);
$protein = htmlspecialchars($_POST["protein"]);
$price = htmlspecialchars($_POST["price"]);
$prediksi_harga = htmlspecialchars($_POST["prediksi_harga"]);
$title = htmlspecialchars($_POST["title"]);


if ($action === 'simpan hasil') {
    if ($halaman === "lobster") {
        $query = "UPDATE perhitungan SET a_lobster='$a', b1_lobster='$b1', b2_lobster='$b2', x1_lobster='$x1', x2_lobster='$x2',
                    hasil_lobster='$hasil'";
        mysqli_query($conn, $query);
    } elseif ($halaman === "kepiting") {
        $query = "UPDATE perhitungan SET a_kepiting='$a', b1_kepiting='$b1', b2_kepiting='$b2', x1_kepiting='$x1', x2_kepiting='$x2', hasil_kepiting='$hasil'";
        mysqli_query($conn, $query);
    } else {
        $query = "UPDATE perhitungan SET a_rumput_laut='$a', b1_rumput_laut='$b1', b2_rumput_laut='$b2', x1_rumput_laut='$x1', x2_rumput_laut='$x2',
                    hasil_rumput_laut='$hasil'";
        mysqli_query($conn, $query);
    }
} elseif ($action === 'ubah mode') {
    $query = "UPDATE perhitungan SET status='$mode'";
    mysqli_query($conn, $query);
} elseif ($action === 'tambah data') {
    if (isset($_POST["lobster"])) {
        $query = "INSERT INTO data_lobster (bulan, x1, x2, y) 
                        VALUES ('$bulan', '$bulanke', '$perayaan', '$harga')";
        mysqli_query($conn, $query);
    } else if (isset($_POST["kepiting"])) {
        $query = "INSERT INTO data_kepiting (bulan, x1, x2, y) 
                        VALUES ('$bulan', '$bulanke', '$perayaan', '$harga')";
        mysqli_query($conn, $query);
    } else if (isset($_POST["rumputlaut"])) {
        $query = "INSERT INTO data_rumput_laut (bulan, x1, x2, y) 
                        VALUES ('$bulan', '$bulanke', '$perayaan', '$harga')";
        mysqli_query($conn, $query);
    }
} elseif ($action === 'update data') {
    if (isset($_POST["lobster"])) {
        $query = "UPDATE data_lobster SET bulan='$bulan', x1='$bulanke', x2='$perayaan', y='$harga' WHERE id='$id'";
        mysqli_query($conn, $query);
    } else if (isset($_POST["kepiting"])) {
        $query = "UPDATE data_kepiting SET bulan='$bulan', x1='$bulanke', x2='$perayaan', y='$harga' WHERE id='$id'";
        mysqli_query($conn, $query);
    } else if (isset($_POST["rumputlaut"])) {
        $query = "UPDATE data_rumput_laut SET bulan='$bulan', x1='$bulanke', x2='$perayaan', y='$harga' WHERE id='$id'";
        mysqli_query($conn, $query);
    }
} elseif ($action === 'hapus data') {
    if ($halaman === "lobster") {
        $query = "DELETE FROM data_lobster WHERE id = $id";
        mysqli_query($conn, $query);
    } elseif ($halaman === "kepiting") {
        $query = "DELETE FROM data_kepiting WHERE id = $id";
        mysqli_query($conn, $query);
    } else {
        $query = "DELETE FROM data_rumput_laut WHERE id = $id";
        mysqli_query($conn, $query);
    }
} elseif ($action === 'ubah post1') {
    $query = query("SELECT img FROM posts WHERE section='$section'");
    $getImgOld = $query[0]['img'];
    $targetDir = "../Assets/img/post";
    $targetFile = $targetDir . basename($_FILES["img"]["name"]);
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    $query = "UPDATE posts SET  title='$title', description='$description' WHERE section='$section'";
    mysqli_query($conn, $query);

    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "<script>alert('Maaf, hanya file JPG, JPEG, PNG & GIF yang diizinkan.')</script>";
    } else {
        //unlink($getImgOld);
        if (move_uploaded_file($_FILES["img"]["tmp_name"], $targetFile)) {
            $query = "UPDATE posts SET img='$targetFile' WHERE section='$section'";
            mysqli_query($conn, $query);
        } else {
            echo "<script>alert(' data gagal disimpan.')</script>";
        }
    }
} elseif ($action === 'ubah post2') {
    $query = "UPDATE posts SET calories='$calories', total_fat='$total_fat', sodium='$sodium', protein='$protein', price='$price',
              prediksi_harga='$prediksi_harga' WHERE section='$section'";
    mysqli_query($conn, $query);
} elseif ($action === 'tambah berita') {
    $excerpt = substr($description, 0, 100);
    $targetDir = "../Assets/img/berita";
    $targetFile = $targetDir . basename($_FILES["img"]["name"]);
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "<script>alert('Maaf, hanya file JPG, JPEG, PNG & GIF yang diizinkan.')</script>";
    } else {
        if (move_uploaded_file($_FILES["img"]["tmp_name"], $targetFile)) {
            $query = "INSERT INTO news (img, title, excerpt, description) 
                      VALUES ('$targetFile','$title', '$excerpt', '$description')";
            mysqli_query($conn, $query);
        } else {
            echo "<script>alert(' data gagal disimpan.')</script>";
        }
    }
} elseif ($action === 'ubah berita') {
    $excerpt = substr($description, 0, 100);
    $query = query("SELECT img FROM news WHERE id='$id'");
    $getImgOld = $query[0]['img'];
    $targetDir = "../Assets/img/";
    $targetFile = $targetDir . basename($_FILES["img"]["name"]);
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    $query = "UPDATE news SET  title='$title', excerpt='$excerpt', description='$description' WHERE id='$id'";
    mysqli_query($conn, $query);

    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "<script>alert('Maaf, hanya file JPG, JPEG, PNG & GIF yang diizinkan.')</script>";
    } else {
        unlink($getImgOld);
        if (move_uploaded_file($_FILES["img"]["tmp_name"], $targetFile)) {
            $query = "UPDATE news SET img='$targetFile' WHERE id='$id'";
            mysqli_query($conn, $query);
        } else {
            echo "<script>alert(' data gagal disimpan.')</script>";
        }
    }
} else {
    $query = query("SELECT img FROM news WHERE id='$id'");
    $getImgOld = $query[0]['img'];
    unlink($getImgOld);
    $query = "DELETE FROM news WHERE id = $id";
    mysqli_query($conn, $query);
}
