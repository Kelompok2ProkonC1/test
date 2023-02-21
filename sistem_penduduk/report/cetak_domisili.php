<?php
	include "../inc/koneksi.php";
	
	if (isset ($_POST['btnCetak'])){
	$id = $_POST['id_pend'];
	}

	$tanggal = date("m/y");
	$tgl = date("d/m/y");
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>CETAK SURAT</title>
</head>

<body>


	<center>
	
<!-- awal kepala surat -->
	<div id="kepala_surat"><img src="dist/img/logo_indramayu.jpg" width="100px" height="100px" id="logo_surat" valign="baseline"/>
	<strong>PEMERINTAHAN KABUPATEN INDRAMAYU<br/>
		KECAMATAN  INDRAMAYU<br/>
		DESA  TELUKAGUNG<br/></strong>

	</div>

	<div class="garis"></div>
		<!--<h4>PEMERINTAH KABUPATEN INDRAMAYU</h4>
		<h4>KECAMATAN INDRAMAYU</h4>
			<h1>DESA TELUKAGUNG</h1>-->

		<p>________________________________________________________________________</p>

		<?php
			$sql_tampil = "select * from tb_pdd
			where id_pend ='$id'";
			
			$query_tampil = mysqli_query($koneksi, $sql_tampil);
			$no=1;
			while ($data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)) {
		?>
	</center>

	<center>
		<h4>
			<u>SURAT KETARANGAN DOMISILI</u>
		</h4>
		<h4>No Surat :
			<?php echo $data['id_pend']; ?>/Ket.Domisili/
			<?php echo $tanggal; ?>
		</h4>
	</center>
	<p>Yang bertandatangan dibawah ini Kepala Desa Telukagung, Kecamatan Indramayu, Kabupaten Indramayu, dengan ini menerangkan
		bahawa :</P>
	<table>
		<tbody>
			<tr>
				<td>NIK</td>
				<td>:</td>
				<td>
					<?php echo $data['nik']; ?>
				</td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td>
					<?php echo $data['nama']; ?>
				</td>
			</tr>
			<tr>
				<td>TTL</td>
				<td>:</td>
				<td>
					<?php echo $data['tempat_lh']; ?>/
					<?php echo $data['tgl_lh']; ?>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
	<p>Adalah benar-benar warga Desa Telukagung, Kecamatan Indramayu, Kabupuaten Indramayu.</P>
	<p>Demikian Surat ini dibuat, agar dapat digunakan sebagai mana mestinya.</P>
	<br>
	<br>
	<br>
	<br>
	<br>
	<p align="right">
		Telukagung,
		<?php echo $tgl; ?>
		<br> KEPALA DESA Telukagung
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>(....................................................)
	</p>


	<script>
		window.print();
	</script>

</body>

</html>