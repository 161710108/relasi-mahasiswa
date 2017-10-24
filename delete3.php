<?php 
include('koneksi.php');
$id =$_GET['id'];

$delete = "DELETE FROM Mahasiswa WHERE id='$id'";
mysqli_query($koneksi,$delete);
header("location:lihatdata3.php");
?>