<?php
require 'admin/function.php';
$posts = query("SELECT * FROM posts");
$news = query("SELECT * FROM news");
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

<body>


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
            <a class="nav-link active" aria-current="page" href="admin/index.php">Home</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="#aboutus">About Us</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="#gallery">Gallery</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="#product">Product</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="#news">News</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="#team">Team</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
        </ul>
        <div>
          <a href="Login/login.php"><button class="button-secondary">Login Admin</button></a>
        </div>
      </div>
    </div>
  </nav>

  <!-- Hero Home Section -->
  <section id="hero" class="hero-section">
    <div class="container h-100">
      <div class="row h-100">
        <div class="col-md-6 col-sm-12 hero-tagline my-auto">
          <h1>Feel Taste
            of The Sea
          </h1>
          <p><span class="fw-bold">Indonesia is home </span>to an enormous variety of
            marine resources. This megadiversity country
            delivers seafood to the world, with around US$5
            billion generated every year in exports alone.
            Key to continued growth and productivity is
            safety and sustainability. And that’s where we
            come in.</p>
        </div>
      </div>
      <img src="Assets/img/Hero banner.png" alt="" class="img-hero position-absolute end-0 bottom-0 img-hero">
      <img src="Assets/img/Accsent.png" alt="" class="accsent-img h-100 position-absolute top-0 start-0">
      <img src="Assets/Img/Accsent2.png" alt="" class="accsent2-img h-100 position-absolute top-0 end-0">
    </div>
  </section>

  <!-- About Us Section -->
  <section id="aboutus">
    <div class="container">
      <div class="row">
        <div class="col-md-6 my-auto">
          <img src="Assets/Img/About img.png" alt="" class="about-img img-fluid">
        </div>
        <div class="col-md-5 order-5 my-auto caption-about">
          <h2>Seafood is packaged
            in various types of
            containers</h2>
          <p class="fw-lighter rata">Indonesia is the worlds largest archipelagic country and a
            home to more than 8,500 fish species. Indonesia
            produces more than 66% of global tropic seaweed. A
            supply of more than 6 million tons per year of sustainable
            captured fish and almost 18 million hectares of
            aquaculture. All of Indonesia Seafood Exporters are GMP
            Certified and proactively apply sustainable fisheries
            practices as well. Indonesia Seafood quality is best
            guaranteed by 46 accredited labs spread throughout the
            Country.</p>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-md-4 text-center">
          <div class="card-aboutus">
            <div>
              <img src="Assets/Img/lobster.png" alt="" class="img-card">
            </div>
            <h3 class="mt-4">Lobster</h3>
            <p class="mt-3">Lobster, a crustacean, boasts tasty meat and a tough shell, often savored as a culinary delicacy.</p>
          </div>
        </div>

        <div class="col-md-4 text-center">
          <div class="card-aboutus">
            <div>
              <img src="Assets/Img/crab.png" alt="" class="img-card">
            </div>
            <h3 class="mt-4">Crab</h3>
            <p class="mt-3">Crab, a brackish habitat crustacean, delicacy when cooked, commonly found in coastal regions.</p>
          </div>
        </div>

        <div class="col-md-4 text-center">
          <div class="card-aboutus">
            <div>
              <img src="Assets/Img/fish.png" alt="" class="img-card">
            </div>
            <h3 class="mt-4">Fish</h3>
            <p class="mt-3">Freshwater fish are those that spend some or all of their lives in fresh water,
              such as rivers and lakes.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Gallery Section -->
  <section id="gallery">
    <div class="container">
      <div class="row">
        <div class="col-md-6 caption-gallery my-auto">
          <h3 class="p-3">Fresh From The Sea</h3>
          <p class="p-3">We are proud to be the preferred seafood partner of a diverse range of food
            service customers including leading hotels, restaurants, clubs and cruise
            lines, and our loyal customers are a testimony to our service and product
            quality.</p>
        </div>
        <div class="col-md-6 p-5">
          <div class="ratio ratio-16x9">
            <iframe width="536" height="315" src="https://www.youtube.com/embed/z87ixppEP8o?si=AKrh5xaDUIpL9hhY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          </div>
        </div>
      </div>
      <div class="row mt-4 p-1">
        <div class="col-md-6 mb-4">
          <div class="card-gallery">
            <div>
              <img src="Assets/Img/galerry 2.png" alt="" class="img-cardgallery border border-primary border-5 mx-auto d-block img-pisah2 img-fluid">
            </div>
          </div>
        </div>

        <div class="col-md-3 mb-4 col-sm-6">
          <div class="card-gallery">
            <div>
              <img src="Assets/Img/galerry 1.png" alt="" class="img-cardgallery border border-primary border-5 mx-auto d-block img-pisah1 img-fluid">
            </div>
          </div>
        </div>

        <div class="col-md-3 mb-4 col-sm-6">
          <div class="card-gallery">
            <div>
              <img src="Assets/Img/gallery 3.png" alt="" class="img-cardgallery border border-primary border-5 mx-auto d-block img-pisah1 img-fluid">
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Product Section -->
  <section id="product">
    <div class="container-fluid">
    <div class="row mx-auto">
        <div class="col">
        </div>
        <div class="col-md-auto mt-5 col-sm-6">
          <h3 class="mt-3 p-2 text-wrap fw-bold text-product text-center">PRODUCT</h3>
        </div>
        <div class="col">
        </div>
      </div>
      <div class="row product-item pro2">
        <div class="col-md-6 mt-5 pro3">
          <img src="<?=substr($posts[0]['img'],3)?>" alt="" class="img-product1 start-0">
        </div>
        <div class="col-md-6 caption-product">
          <h1 class="tag-prouct1 mb-4"><?= $posts[0]["title"] ?></h1>
          <p class="caption-tag-product1 mb-5"><?= $posts[0]["description"] ?></p>
          <table class="table table-bordered table-secondary">
            <thead>
              <tr>
                <th colspan="2" class="text-center">Product Information</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td scope="row">Calories</td>
                <td><?= $posts[0]["calories"] ?></td>
              </tr>
              <tr>
                <td scope="row">Total Fat</td>
                <td><?= $posts[0]["total_fat"] ?></td>
              </tr>
              <tr>
                <td scope="row">Sodium</td>
                <td><?= $posts[0]["sodium"] ?></td>
              </tr>
              <tr>
                <td scope="row">Protein</td>
                <td><?= $posts[0]["protein"] ?></td>
              </tr>
              <tr>
                <td scope="row">Price</td>
                <td><?= $posts[0]["price"] ?></td>
              </tr>
              <tr>
                <td scope="row">Prediksi Harga</td>
                <td><?= $posts[0]["prediksi_harga"] ?></td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="row pro2 bagus">
          <div class="col-md-6 caption-product">
            <h1 class="tag-prouct1 mb-4"><?= $posts[1]["title"] ?></h1>
            <p class="caption-tag-product1 mb-5"><?= $posts[1]["description"] ?></p>
            <table class="table table-bordered table-secondary">
              <thead>
                <tr>
                  <th colspan="2" class="text-center">Product Information</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td scope="row">Calories</td>
                  <td><?= $posts[1]["calories"] ?></td>
                </tr>
                <tr>
                  <td scope="row">Total Fat</td>
                  <td><?= $posts[1]["total_fat"] ?></td>
                </tr>
                <tr>
                  <td scope="row">Sodium</td>
                  <td><?= $posts[1]["sodium"] ?></td>
                </tr>
                <tr>
                  <td scope="row">Protein</td>
                  <td><?= $posts[1]["protein"] ?></td>
                </tr>
                <tr>
                  <td scope="row">Price</td>
                  <td><?= $posts[1]["price"] ?></td>
                </tr>
                <tr>
                  <td scope="row">Prediksi Harga</td>
                  <td><?= $posts[1]["prediksi_harga"] ?></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-md-6 pro2">
            <img src="<?=substr($posts[1]['img'],3)?>" alt="" class="img-product1 img-product2">
          </div>
        </div>


        <div class="col-md-6 pro3">
          <img src="<?=substr($posts[2]['img'],3)?>" alt="" class="img-product1">
        </div>
        <div class="col-md-6 caption-product">
          <h1 class="tag-prouct1 mb-4"><?= $posts[2]["title"] ?></h1>
          <p class="caption-tag-product1 mb-5"><?= $posts[2]["description"] ?></p>
          <table class="table table-bordered table-secondary">
            <thead>
              <tr>
                <th colspan="2" class="text-center">Product Information</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td scope="row">Calories</td>
                <td><?= $posts[2]["calories"] ?></td>
              </tr>
              <tr>
                <td scope="row">Total Fat</td>
                <td><?= $posts[2]["total_fat"] ?></td>
              </tr>
              <tr>
                <td scope="row">Sodium</td>
                <td><?= $posts[2]["sodium"] ?></td>
              </tr>
              <tr>
                <td scope="row">Protein</td>
                <td><?= $posts[2]["protein"] ?></td>
              </tr>
              <tr>
                <td scope="row">Price</td>
                <td><?= $posts[2]["price"] ?></td>
              </tr>
              <tr>
                <td scope="row">Prediksi Harga</td>
                <td><?= $posts[2]["prediksi_harga"] ?></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>

  <!-- News Section -->
  <section id="news">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h2 class="h2news">Our Lates News</h2>
          <span class="sub-title">You can see our blog here, click to see blog detail. You can see our daily activity or news about exported, product process and many more.</span>
        </div>

        <div class="row p-5">
          <?php foreach ($news as $berita) : ?>
          <div class="col-md-4 box">
            <img src="<?=substr($berita['img'],3)?>" alt="" class="news5 img-fluid">
            <h4 class="fw-bold"><?= $berita['title'] ?></h4>
            <p><?= $berita['excerpt'] ?></p>
            <a href="berita.php?id=<?=$berita['id']?>" class="readmore-btn">Read More</a>
          </div>
          <?php endforeach ?>

        </div>
      </div>
    </div>
  </section>

  <!-- Team Section -->
  <section id="team">
    <div class="container">
      <div class="row text-center">
        <div class="col-12">
          <h2 class="h2team">Teams</h2>
          <p class="sub-title1">We believe a great presentation evokes interest and drives business results far better than any saying can. Hence, We strive to be one of the best & biggest
            suppliers.</p>
        </div>

        <div class="col-md p-5">
          <div class="card-team mx-auto img-fluid">
            <img src="Assets/Img/team (1).png" alt="" class="teams1 img-fluid">
            <h4 class="name-team">Arga</h4>
          </div>
        </div>

        <div class="col-md p-5">
          <div class="card-team mx-auto img-fluid">
            <img src="Assets/Img/team (2).png" alt="" class="teams1 img-fluid">
            <h4 class="name-team">Sutri</h4>
          </div>
        </div>

        <div class="col-md p-5">
          <div class="card-team mx-auto img-fluid">
            <img src="Assets/Img/team (3).png" alt="" class="teams1 img-fluid">
            <h4 class="name-team">Pratama</h4>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center pcontact p-5">
          <p>Copyright © 2023 Export Indonesia. All Rights Reserved.</p>
          <h1 class="contact3 p-2">Ş€Δ₣ØØĐ ŁØΜβØҜ</h1>
          <p>Jl. Indonesia Raya, Sudirman, Jakarta Selatan,</p>
          <p>DKI Jakarta,  Indonesia, 10150</p>
          <p>+62 8199 9741 418</p>
          <p>Arga6524@gmail.com</p>
          <a href="#"><img src="Assets/Img/facebook.png" alt="" class="sosmed mx-3 mt-2"></a>
          <a href="#"><img src="Assets/Img/instagram (1).png" alt="" class="sosmed mx-3 mt-2"></a>
          <a href="#"><img src="Assets/Img/youtube.png" alt="" class="sosmed mx-3 mt-2"></a>
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