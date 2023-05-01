<!DOCTYPE html>
<html>
<head>
	<title>TAMBAH</title>
</head>
<body>
    <center>
	<h1>TAMBAH DATA PEGAWAI</h1>
	<form method="POST" action="tambahpegawai.php">
		<table>
			<tr>			
				<td>ID Pegawai </td>
				<td><input type="text" name="id"></td>
			</tr>
			<tr>			
				<td>Nama  </td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Email  </td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>No Hp  </td>
				<td><input type="text" name="no_hp"></td>
			</tr>
			<tr>
				<td>Alamat  </td>
				<td><input type="text" name="alamat"></td>
			</tr>
            <tr>
				<td>Gaji  </td>
				<td><input type="text" name="gaji"></td>
			</tr>
			<tr>
				<td>Id Department  </td>
				<td><input type="text" name="iddept"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="Tambah" value="Tambah Data"></td>
			</tr>		
		</table>
	</form>
    </center>
</body>
</html>