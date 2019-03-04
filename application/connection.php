<?php
$servername = "36.37.122.138";
$database = "Akun";
$username = "root";
$password = "homsaccountdatabase";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";

?>