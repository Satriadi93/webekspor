<?php
require 'admin/function.php';
$id = $_GET['id'];
$detailberita = query("SELECT * FROM news WHERE id = '$id'");
?>

<!doctype html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <title>Seafood Lombok</title>
</head>

<!-- Font Google -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">

<!-- My Stile -->
<link rel="stylesheet" href="css/style.css">

<!-- Responsive style -->
<link rel="stylesheet" href="css/responsive.css">

<!-- Logo Title Bar -->
<link rel="icon" href="Assets/Img/logo-removebg-preview.png" type="image/icon">

<body style="background-color:#274291;">

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-transparent position-fixed w-100">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="Assets/img/logo-removebg-preview.png" alt="" width="30" class="d-inline-block align-text-top me-3">
        Seafood Lombok</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item mx-2">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="index.php?#aboutus">About Us</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="index.php?#gallery">Gallery</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="index.php?#product">Product</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="index.php?#news">News</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="index.php?#team">Team</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="index.php?#contact">Contact</a>
          </li>
        </ul>
        <div>
          <a href="Login/login.html"><button class="button-secondary">Login Admin</button></a>
        </div>
      </div>
    </div>
  </nav>


  <section id="berita">
    <div class="container  ">
      <div class=" mx-auto p-5 text-center ">
        <div class="mt-5 mx-auto bg-light p-5">
          <img src="<?= substr($detailberita[0]['img'], 3) ?>" alt="">
        
          <h1 class="mt-4 text-center "><?= $detailberita[0]['title'] ?></h1>
          <p class="mt-3 text-justify" style="text-align: justify !important;"><?= $detailberita[0]['description'] ?></p>
        </div>
      </div>
    </div>
  </section>


  <!-- Button WA -->
  <a href="https://wa.me/6281999741418" target="_blank" class="whatsapp-float">
    <img src="Assets/Img/whatsapp (1).png" alt="WhatsApp Icon">
  </a>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="js/script.js"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>