<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "seafood_lombok";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$emaillama = "ahmadsatriadimm93@gmail.com";
$email = "ahmadsatriadimm93@gmail.com";
$pw = "ahmad";
$pwencryp = password_hash($pw, PASSWORD_DEFAULT);

$query = "UPDATE admin SET username = '$email', password = '$pwencryp' WHERE username = '$emaillama'";

if (mysqli_query($conn, $query)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
