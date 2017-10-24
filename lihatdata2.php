<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<center>
<h1>DATA WALI</h1>
<td><a href='tambah2.php?id=$data[id]'>Tambah Data >></a></td>
<table border="3">
     <th>Nomor</th>
	 <th>Nama Wali</th>
     <th colspan="3">Opsi</th>
     
     <?php
        include('koneksi.php');
        $ma = mysqli_query($koneksi,"select * from wali");
        $no= 1;
        foreach ($ma as $data) {
        	echo"<tr>
        	<td>$no</td>
        	<td>".$data['nama']."</td>
        	<td><a href='show2.php?id=$data[id]'>show</a></td>
        	<td><a href='edit2.php?id=$data[id]'>edit</a></td>
        	<td><a href='delete2.php?id=$data[id]'>delete</a></td>
        	</tr>";
        	$no++;
        }
        	?>
</table>
</center>
</body>
</html>                                                