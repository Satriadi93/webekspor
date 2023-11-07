<?php
session_start();
if (isset($_SESSION["login"])) {
  header("Location: ../admin/index.php");
}
$info = "";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "seafood_lombok";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST["login"])) {
  $username = $_POST["email"];
  $password = $_POST["password"];
  $check = mysqli_query($conn, "SELECT * FROM admin WHERE username = '$username';");

  if (mysqli_num_rows($check) === 1) {
    $row = mysqli_fetch_assoc($check);
    $info = "email salah";
    if (password_verify($password, $row["password"])) {
      $_SESSION["login"] = true;
      header("Location: ../admin/index.php");
      exit;
    }
  } else {
    $info = "username salah";
  }
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/login.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Login Admin | Seafood Lombok</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<!-- Logo Title Bar -->
<link rel="icon" href="../Assets/Img/logo-removebg-preview.png" type="image/icon">

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-transparent position-fixed w-100">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="../Assets/img/logo-removebg-preview.png" alt="" width="30" class="d-inline-block align-text-top me-3">
        Seafood Lombok</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div>
        <a href="../index.php"><button class="button-secondary">Back To Home</button></a>
      </div>
    </div>
  </nav>

  <!-- login admin -->
  <div class="global-container">
    <div class="card login-form text-light">
      <div class="card-body">
        <h1 class="card-title text-center text-primary fw-bold">L O G I N | A D M I N</h1>
      </div>
      <div class="card-text">
        <form action="login.php" method="POST">
          <div id="info"><?php echo "<font color='red'>$info</font>"  ?></div>
          <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div>
          <div class="d-grid gap-2">
            <button type="submit" name="login" class="btn btn-dark">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>