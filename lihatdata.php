<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<center>
<td><a href='tambah.php?id=$data[id]'>Tambah Data >></a></td>
<table border="2">
     <th>Nomor</th>
	 <th>Nama Dosen</th>
     <th>Nomor Induk Pengajar Dosen</th>
     <th colspan="3">Opsi</th>
     <?php
        include('koneksi.php');
        $ma = mysqli_query($koneksi,"select * from dosen");
        $no= 1;
        foreach ($ma as $data) {
        	echo"<tr>
        	<td>$no</td>
        	<td>".$data['nama']."</td>
        	<td>".$data['nipd']."</td>
        	<td><a href='show.php?id=$data[id]'>show</a></td>
        	<td><a href='edit.php?id=$data[id]'>edit</a></td>
        	<td><a href='delete.php?id=$data[id]'>delete</a></td>
        	</tr>";
        	$no++;
        }
        	?>
</table>
</center>
</body>
</html>                                               