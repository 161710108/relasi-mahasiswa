<!DOCTYPE html>
<html>
<head>
	<title>Mahasiswa</title>
</head>
<body>
<?php 
include ('koneksi.php');
$id   =$_GET['id'];
$mhs  =mysqli_query($koneksi,"SELECT * FROM mahasiswa WHERE id='$id'");
$data =mysqli_fetch_array($mhs);
?>

<h3 align="center">Edit Data Mahasiswa</h3> 
<fieldset style="width:50%; margin: auto;">
<legend>Form Edit Biodata Mahasiswa</legend>

<form action="simpanedit3.php" method="post">
	<input type="hidden" name="id" value="<?php echo $data ['id'];?>">
<p>
	Nama Lengkap Mahasiswa <br />
	<input type="text" name="nama" class="form-control" value="<?php echo $data['nama'];?>" required/> 	
</p>
<p>
	Nomor Induk Pengajar Mahasiswa<br />
	<input type="text" name="nim" class="form-control" value="<?php echo $data['nim'];?>" required/>
</p>

	<p>
		Nama Wali <br />
		<?php
			include('koneksi.php');
			$wali= mysqli_query($koneksi,"SELECT id,nama FROM wali");?>
		<select name="id_wali">
         <?php
			foreach ($wali as $data ) { 
		  ?>
          <option value="<?php echo $data['id'];?>"> <?php echo $data['nama'];?> </option>
         <?php 
         } ?> 
	    </select>
	</p>

	<p>
		Nama Dosen <br />
		<?php
			include('koneksi.php');
			$dosen= mysqli_query($koneksi,"SELECT id,nama FROM dosen");
			?>
		<select name="id_dosen">
         <?php
			foreach ($dosen as $data ) { 
		  ?>
          <option value="<?php echo $data['id'];?>"> <?php echo $data['nama'];?> </option>
         <?php 
         }?> 
	    </select>
	</p>

<p>
	<input type="submit" value="Simpan" />
</p>

</form>
</fieldset>
<br /><center><a href="lihatdata3.php"> &Lt; Lihat Data </a></center>
</body>
</html>