<!DOCTYPE html>
<html>
  <head>
</head>
  <body>
    
<?php
  include('koneksi.php');
  $mk = mysqli_query($koneksi, "SELECT mahasiswa.id , mahasiswa.nama , mahasiswa.nim , dosen.nama as nama_dosen, wali.nama as nama_wali FROM mahasiswa join dosen on dosen.id = mahasiswa.id_dosen join wali on wali.id=mahasiswa.id_wali");
  $data = mysqli_fetch_array($mk);
?>
  <center><h2>Show Data Mahasiswa</h2></center>
<fieldset style="width: 50%; margin: auto;">
<legend>Form Show Biodata Mahasiswa</legend>
<input type="hidden" name="id" value="<?php echo $data['id'];?>">
<p>
      Nama Lengkap <br />
      <input type="text" name="nama" class="form-control" value="<?php echo $data['nama'];?>" readonly>
</p>
<p>
      Nim <br />
      <input type="text" name="nim" class="form-control" value="<?php echo $data['nim'];?>" readonly>
</p>

<p>
      Nama Wali <br />
      <input type="text" name="nama" class="form-control" value="<?php echo $data['nama_wali'];?>" readonly>
</p>
<p>
      Nama Dosen <br />
      <input type="text" name="nama" class="form-control" value="<?php echo $data['nama_dosen'];?>" readonly>
</p>

</fieldset>
<br/><center><a href="lihatdata3.php" class="btnbtn-primary">&Lt; Lihat Data </a></center>
  </body>
</html>