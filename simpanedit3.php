
 <?php
include ('koneksi.php');

$id      = $_POST['id'];
$nama    = $_POST['nama'];
$nim     = $_POST['nim'];
$id_dosen= $_POST['id_dosen'];
$id_wali = $_POST['id_wali'];

$edit ="UPDATE  mahasiswa SET nama='$nama', nim='$nim',  id_dosen='$id_dosen', id_wali='$id_wali' WHERE id='$id'";
mysqli_query($koneksi,$edit);
header("location:lihatdata3.php");

?>