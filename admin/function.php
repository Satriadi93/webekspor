<?php
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


// ambil data database
function query($query){
  global $conn;
  $result = mysqli_query($conn, $query);
  $rows = [];
  while($row = mysqli_fetch_assoc($result)){
      $rows[] = $row; 
    }
    return $rows;
}

$∑x1_2 = 0.0;
$∑x2_2 = 0.0;
$∑y_2 = 0.0;
$∑x1y = 0.0;
$∑x2y = 0.0;
$∑x1x2 = 0.0;
$b1 = 0.0;
$b2 = 0.0;
$a = 0.0;
$y=0.0;

function perhitungan($∑x1p, $∑x2p, $∑yp, $∑x1_2p, $∑x2_2p, $∑y_2p, $∑x1yp, $∑x2yp, $∑x1x2p, $np ){
  global $∑x1_2, $∑x2_2, $∑y_2, $∑x1y, $∑x2y, $∑x1x2, $b1, $b2, $a; 
  $∑x1_2 = ∑x12dany_2_($∑x1_2p, $∑x1p, $np);
  $∑x2_2 = ∑x12dany_2_($∑x2_2p, $∑x2p, $np);
  $∑y_2 = ∑x12dany_2_($∑y_2p, $∑yp, $np);
  $∑x1y = ∑x12ydanx1x2($∑x1yp, $∑x1p, $∑yp, $np);
  $∑x2y = ∑x12ydanx1x2($∑x2yp, $∑x2p, $∑yp, $np);
  $∑x1x2 = ∑x12ydanx1x2($∑x1x2p, $∑x1p, $∑x2p, $np);
  $b1 = b($∑x2_2, $∑x1y, $∑x1x2, $∑x2y, $∑x1_2);
  $b2 = b($∑x1_2, $∑x2y, $∑x1x2, $∑x1y, $∑x2_2);
  $a = a($∑yp, $np, $b1, $∑x1p, $b2, $∑x2p);
}

function ∑x12dany_2_($a, $b, $c){
  if ($c != 0) {
      return $a - (($b * $b) / $c);
  } else {
      return 0;
  }
}

function ∑x12ydanx1x2($a, $b, $c, $d){
  if ($d != 0) {
      return $a - (($b * $c) / $d);
  } else {
      return 0;
  }
}

function b($a, $b, $c, $d, $e){
  if ($e*$a - $c * $c != 0) {
      return (($a*$b)-($c*$d))/(($e*$a)-($c * $c));
  } else {
      return 0;
  }
}

function a($a, $b, $c, $d, $e, $f){
  if ($b != 0) {
      return ($a/$b)-(($c*$d)/$b)-(($e*$f)/$b);
  } else {
      return 0;
  }
}

function y($a, $b1, $x1, $b2, $x2){
  return $a + ($b1 * $x1) + ($b2 * $x2);
}

?>