<?php
$host = "localhost";
$user = "root";
$pass = "";

$database = "fakultas";
$koneksi = mysqli_connect($host,$user,$pass,$database) or
    die("database tidak konek");
?>