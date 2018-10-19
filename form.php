<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="aksi.php" method="POST" enctype="multipart/form-data">
		<center>
		<h1>FORM PENDAFTARAN MAHASISWA BARU</h1>
		Nama : <input type="text" name="nama"><br><br>
		Nim : <input type="text" name="nim"><br><br>
		Tanggal Lahir : <input type="date" name="tanggal"><br><br>
		Jenis Kelamin : <select name="jeniskelamin">
						<option value="Laki-laki">Laki-laki</option>
						<option value="Perempuan">Perempuan</option>
						</select><br><br>
		Program Studi : <select name="prodi">
						<option value="MI">MI</option>
						<option value="IF">IF</option>
						<option value="TK">TK</option>
						<option value="SM">SM</option>
						</select><br><br>
		Fakultas : <input type="radio" name="fakultas" value="FIT">FIT
				   <input type="radio" name="fakultas" value="FIF">FIF
				   <input type="radio" name="fakultas" value="FRI">FRI
				   <input type="radio" name="fakultas" value="FIK">FIK
				   <br><br>
		Asal : <input type="text" name="asal"><br><br>
		Moto Hidup : <input type="textarea" name="moto"><br><br>
		<input type="submit" name="submit" value="SUBMIT">
	</center>

</body>
</html>