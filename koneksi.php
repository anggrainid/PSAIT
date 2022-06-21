<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "wisata_bekasi";

$koneksi = mysqli_connect($host, $user, $password, $database);

if($koneksi === false){
    die("ERROR: Database tidak dapat terhubung. " . mysqli_connect_error());
}

?>