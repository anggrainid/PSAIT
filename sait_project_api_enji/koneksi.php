<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "wisata_bekasi";

$mysqli = mysqli_connect($host, $user, $password, $database);

if($mysqli === false){
    die("ERROR: Database tidak dapat terhubung. " . mysqli_connect_error());
}

?>