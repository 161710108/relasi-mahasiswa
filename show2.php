<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
	<?php
include ('koneksi.php');
    $id   =$_GET['id'];
    $mhs  =mysqli_query($koneksi,"SELECT * FROM wali WHERE id='$id'");
    $data =mysqli_fetch_array($mhs);
?>

<center><h2>Show Data wali</h2></center>
<fieldset style="width: 50%; margin: auto;">
<legend>Form Show Biodata wali</legend>
<input type="hidden" name="id" value="<?php echo $data['id'];?>">
<p>
			Nama Lengkap Wali<br />
			<input type="text" name="nama" class="form-control" value="<?php echo $data['nama'];?>" readonly>
</p>
</fieldset>
<br/><center><a href="lihatdata2.php" class="btnbtn-primary">&Lt; Lihat Data </a></center>
</body>
</html>