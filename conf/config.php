<?php
// Setting database
$server = "localhost";
$user = "root";
$password = "TOOR";
$db_name = "e-surat";

$conn = mysqli_connect($server, $user, $password,$db_name);
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

// setting base url
$base_url = 'http://mr-day.test/e-surat';
?>