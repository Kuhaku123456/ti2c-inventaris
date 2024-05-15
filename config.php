<?php
$servername = "localhost";
$database = "inventaris";
$username = "root";
$password = "";

// Create connection
$db = mysqli_connect($servername, $username, $password, $database);
echo "Berhasil terhubung...";
if(!$db) {
    die("Gagal terhubung : ". mysqli_connect_error());
}
?>