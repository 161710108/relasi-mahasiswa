<!DOCTYPE html>
<html>
 <head>
  </head>
  <center>
<h1>DATA MAHASISWA</h1>
       <td><a href='tambah3.php'>Tambah Data >></a></td>
<table border="3">
    <th>Nomor</th>
    <th>Nama Lengkap</th>
    <th>Nim </th>
    <th>Nama Wali </th>
    <th>Nama Dosen </th>
    <th colspan="3"><center>Opsi</center></th>

  <?php
  include('koneksi.php');
  $ma = mysqli_query($koneksi,"SELECT mahasiswa.id, mahasiswa.nama, mahasiswa.nim, dosen.nama as nama_dosen, wali.nama as nama_wali FROM                 mahasiswa JOIN dosen ON dosen.id = mahasiswa.id_dosen JOIN wali ON wali.id = mahasiswa.id_wali");
  $no = 1;
  foreach ($ma as $data) {
    echo "<tr>
     <td>$no</td>
     <td>".$data['nama']."</td>
     <td>".$data['nim']."</td>   
     <td>".$data['nama_wali']."</td>
     <td>".$data['nama_dosen']."</td>
     <td><a href='show3.php?id=$data[id]'>Show</a></td>
     <td><a href='edit3.php?id=$data[id]'>Edit</a></td>
     <td><a href='delete3.php?id=$data[id]'>Delete</a></td>
     </tr>";
     $no++;
  }
  ?>
</table>
</center>
  </body>
</html>