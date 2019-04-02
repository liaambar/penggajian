<!DOCTYPE html>
<html>
<head>
	<title>Form Penggajian</title>
</head>
<body bgcolor="darkblue">
	<h2><font color="white">Input Gaji Karyawan PT Jonitech &copy;</h2>*required field<br></font>
<form action="hitung_gaji.php" method="post">
	<table bgcolor="white" width="700">
		<tr>
			<td><br>Nama </td><td>:</td>
			<td><input type="text" name="nama" size=60><font color="red"> *</font></td>
		</tr><tr>
			<td>Tanggal Lahir</td><td>:</td>
			<td><input type="date" name="bday"><br></td>
		</tr><tr>
			<td rowspan="2" valign="top">Jenis Kelamin</td><td rowspan="2" valign="top">:</td>
			<td><input type="radio" name="gender" value="1" checked>Male</td>
		</tr><tr>
			<td><input type="radio" name="gender" value="2">Female</td>
		</tr><tr>
			<td>Jumlah Suami/Istri</td><td>:</td>
			<td><input type="number" name="jml_i"></td>
		</tr><tr>
			<td>Jumlah Anak</td><td>:</td>
			<td><input type="number" name="jml_a"></td>
		</tr><tr>
			<td>Telepon</td><td>:</td>
			<td><input type="number" name="notlp"><font color="red"> *</font></td>
		</tr><tr>
			<td>E-mail</td><td >:</td>
			<td><input type="email" name="email" autocomplete="off" size="30"><font color="red"> *</font></td>
		</tr><tr>
			<td valign="top">Alamat</td><td valign="top">:</td>
			<td><textarea name="alamat" cols="45" rows="5"></textarea><font color="red"> *</font></td>
		</tr><tr>
			<td>Rekening Bank</td><td>:</td>
			<td><select name="rb">
				<option value="BRI">BRI</option>
				<option value="BCA">BCA</option>
				<option value="BNI">BNI</option>
				<option value="Mandiri">Mandiri</option>
			</select><br></td>
		</tr><tr>
			<td>No Rekening </td><td>:</td>
			<td><input type="number" name="norek"><font color="red"> *</font></td>
		</tr><tr>
			<td rowspan="4" valign="top">Kepemilikan Kendaraan</td><td rowspan="4" valign="top">:</td>
			<td><input type="checkbox" name="vehicle" value="Sepeda Onthel">Sepeda Onthel<br></td>
		</tr><tr>
			<td><input type="checkbox" name="vehicle" value="Sepeda Motor">Sepeda Motor<br></td>
		</tr><tr>
			<td><input type="checkbox" name="vehicle" value="Mobil">Mobil<br></td>
		</tr><tr>
			<td><input type="checkbox" name="vehicle" value="Bus">Bus<br></td>
		</tr><tr>
			<td>Golongan</td><td>:</td>
			<td><input type="number" name="gol" min="1" max="3"><font color="red"> *</font></td>
		</tr><tr>
			<td>Jenjang Pendidikan</td><td>:</td>
			<td><select name="pend">
				<option value="1">SMU/sederajat</option>
				<option value="2">D3</option>
				<option value="3">S1</option>
			</select><font color="red"> *</font></td>
		</tr><tr>
			<td colspan="2"></td>
			<td><input type="submit" value="SUBMIT" >&nbsp;&nbsp;
				<input type="reset" value="RESET"><br><br></td>
		</tr>
	</table>
</form>
</body>
</html>