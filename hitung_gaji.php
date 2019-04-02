<!DOCTYPE html>
<html>
<head>
	<title>Penghitungan Gaji</title>
</head>
<body bgcolor="darkblue">
<?php
	$no = 1;
	$nama = $_POST["nama"];
	$bday = $_POST["bday"];
	$jk = $_POST["gender"];
	$jml_i = $_POST["jml_i"];
	$jml_a = $_POST["jml_a"];
	$tlp = $_POST["notlp"];
	$alamat = $_POST["alamat"];
	$email = $_POST["email"];
	$rb = $_POST["rb"];
	$norek = $_POST["norek"];
	if (empty($_POST["vehicle"])) {
		$vehicle = " ";
	}
	$gol = $_POST["gol"];
	$pend = $_POST["pend"];
	gaji_tj($gol);
	tp_tk($pend, $gaji);
	tj_keluarga($jml_i, $jml_a, $gaji);
	$tt = 500000;
	$um = 0.5 * $tt;
	$jms = 50000;
	$jml_terima = $gaji+$tj+$tp+$tk+$tt+$um;
	$jml_keluar = $jms;
	$total = $jml_terima - $jml_keluar; 
	//menentukan status : beristri / bersuami
	if ($jk==1) {
		$status = "Istri";
	}else{
		$status = "Suami";
	}
?>
<table border="1" bgcolor="white">
	<tr><td>
		<table>
			<tr>
				<td>Nama </td><td>:</td>
				<td><?php echo $nama ?></td>
				<td rowspan="2" width="300" align="center"><h2> SLIP GAJI </h2></td>
				<td>Alamat </td><td>:</td>
				<td><?php echo $alamat ?></td>
			</tr><tr>
				<td>Golongan</td><td>:</td>
				<td><?php echo $gol?></td>
				<td>Telepon </td><td>:</td>
				<td><?php echo $tlp ?></td>
			</tr><tr>
		<td colspan="7">
			<table>
			<tr>
				<td colspan="3"><hr></td>
			</tr><tr>
				<td>NO</td>
				<td width="600">KETERANGAN</td>
				<td>JUMLAH</td>
			</tr><tr>
				<td colspan="3"><hr></td>
			</tr><tr>
				<td colspan="3"><b>Penerimaan (+)</b></td>
			</tr><tr>
				<td><?php echo $no++;?></td>
				<td>Gaji Pokok</td>
				<td align="right"><?php echo $gaji;?></td>
			</tr><tr>
				<td><?php echo $no++;?></td>
				<td>Tunjangan Jabatan</td>
				<td align="right"><?php echo $tj;?></td>
			</tr><tr>
				<td><?php echo $no++;?></td>
				<td>Tunjangan Pendidikan</td>
				<td align="right"><?php echo $tp;?></td>
			</tr><tr>
				<td><?php echo $no++;?></td>
				<td>Tunjangan Keluarga</td>
				<td align="right"><?php echo $tk;?></td>
			</tr><tr>
				<td><?php echo $no++;?></td>
				<td>Tunjangan Transport</td>
				<td align="right"><?php echo $tt;?></td>
			</tr><tr>
				<td><?php echo $no++;?></td>
				<td>Uang Makan</td>
				<td align="right"><?php echo $um;?></td>
			</tr><tr>
				<td colspan="2"></td>
				<td><hr></td>
			</tr><tr>
				<td colspan="2"></td>
				<td align="right"><?php echo $jml_terima;?></td>
			</tr><tr>
				<td colspan="3"><b>Pengeluaran (-)</b></td>
			</tr><tr>
				<td><?php echo $no++;?></td>
				<td>Potongan Jamsostek</td>
				<td align="right"><?php echo $jms;?></td>
			</tr><tr>
				<td colspan="2"></td>
				<td><hr></td>
			</tr><tr>
				<td colspan="2"></td>
				<td align="right"><?php echo $jml_keluar;?></td>
			</tr><tr>
				<td colspan="3"><hr></td>
			</tr><tr>
				<td colspan="2" align="right">GAJI BERSIH</td>
				<td align="right"><?php echo $total;?></td>
			</tr><tr>
				<td colspan="3"><hr></td>
			</tr><tr>
				<td colspan="2"></td>
				<td align="center">Penerima, <br><br> <?php echo $nama;?></td>
			</tr><tr>
				<td colspan="3"><h3>Catatan :</h3></td>
			</tr><tr>
				<td colspan="3">Gaji Bersih akan dikirimkan melalui Rekening Bank <?php echo $rb ?> dengan No Rekening : <?php echo $norek ?>
				</td>
			</tr><tr>
				<td colspan="3"><h2>Keterangan Tambahan :</h3></td>
			</tr><tr>
				<td colspan="3">
					<table>
					<tr>
						<td colspan="3">Sdr <?php echo $nama;?> memiliki data diri sebagai berikut : </td>
					</tr><tr>
						<td>Tanggal Lahir</td><td >:</td>
						<td><?php echo $bday;?></td>
					</tr><tr>
						<td>E-mail</td><td >:</td>
						<td><?php echo $email;?></td>
					</tr><tr>
						<td>Jumlah <?php echo $status;?></td><td >:</td>
						<td><?php echo $jml_i;?></td>
					</tr><tr>
						<td>Jumlah anak</td><td >:</td>
						<td><?php echo $jml_a;?></td>
					</tr></table>
				</td>
			</tr><tr>
				<td colspan="2"></td>
				<td><input type="button" value="BACK" onclick="history.back(-1)"></td>
			</tr>
		</table>
		</td>
	</tr>
</table>
<?php 
//mencari gajitetap dan tunjangan jabatan berdasarkan golongan
function gaji_tj($gol){
	global $gaji, $tj;
	if ($gol == 1) {
		$gaji = 1500000;
		$tj = 0.05 * $gaji;
	}elseif ($gol == 2) {
		$gaji = 2000000;
		$tj = 0.1 * $gaji;
	}else {
		$gaji = 2500000;
		$tj = 0.15 * $gaji;
	}
}
//mencari tunjangn pendidikan berdasarkan tingkatan pendidikan dan besar gaji tetap
function tp_tk($pend, $gaji){
	global $tp;
	if ($pend == 1) {
		$tp = 0.025 * $gaji;
	}elseif ($pend == 2) {
		$tp = 0.05 * $gaji;
	}else {
		$tp = 0.075 * $gaji;
	}
}
//mencari tunjangan keluarga berdasarkan jumlah istri dan jumlah anak
function tj_keluarga($jml_i, $jml_a, $gaji){
	global $tk;
	//tunjangan istri
	if ($jml_i == 0) {
		$ti = 0;
	}else{
		$ti = 0.030 * $gaji;
	}
	//tunjangan anak
	if ($jml_a == 0) {
		$ta = 0;
	}elseif ($jml_a == 1) {
		$ta = 0.025 * $gaji;
	}else {
		$ta = 0.05 * $gaji;
	}
	$tk = $ti + $ta;
}
?>
</body>
</html>

