<h1 align="center">Input Biodata Dosen</h1>
<fieldset style="width; 50%; margin; auto;">
	<legend>Form Input Biodata Dosen</legend>

	<form action="simpan.php" method="post">
		<p>
		Nama Lengkap Dosen<br />
		<input type="text" name="nama" required />
		</p>
		<p>
		Nomor Induk Pelajar<br />
		<textarea name="nipd" cols="50" required></textarea>
		</p>
		<p>
			<input type="submit" value="Simpan" />
			<input type="reset" value="Reset" onclick="return confirm ('Hapus Data Yang Telah Diinput?')">
		</p>
	</form>
</fieldset>
<br />
<center><a href="lihatdata.php">&Lt; Tabel Biodata </a></center>