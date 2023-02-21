<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT p.id_pend, p.nik,  k.no_kk, p.nama, p.tempat_lh, p.tgl_lh, p.jekel, p.desa, p.rt, p.rw, p.agama,p.kawin,   p.kewarganegaraan, p.pendidikan, p.pekerjaan, p.ktp, p.kk   from tb_pdd p left join tb_kk k on k.kepala=p.id_pend where  id_pend ='".$_GET['kode']."' ";
		
        $data_cek = mysqli_query($koneksi, $sql_cek);
		$data_cek = $data_cek->fetch_assoc();
		
    }
?>

<div class="card card-success">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-user"></i> Detail Penduduk</h3>
		</h3>
		<div class="card-tools">
		</div>
	</div>
	<div class="card-body p-0">
		<table class="table">
			<tbody>
				<tr>
					<td style="width: 150px">
						<b>NIK</b>
					</td>
					<td>:
						<?php echo $data_cek['nik']; ?>
					</td>
				</tr>
				<tr>
					<td style="width: 150px">
						<b>NO KK</b>
					</td>
					<td>:
						<?php echo $data_cek['no_kk']; ?>
					</td>
				</tr>
				<tr>
					<td style="width: 150px">
						<b>Nama</b>
					</td>
					<td>:
						<?php echo $data_cek['nama']; ?>
					</td>
				</tr>
				<tr>
					<td style="width: 150px">
						<b>TTL</b>
					</td>
					<td>:
						<?php echo $data_cek['tempat_lh']; ?>
						,
						<?php echo $data_cek['tgl_lh']; ?>
					</td>
				</tr>
				<tr>
					<td style="width: 150px">
						<b>Jenis Kelamin</b>
					</td>
					<td>:
						<?php echo $data_cek['jekel']; ?>
					</td>
				</tr>
				<tr>
					<td style="width: 150px">
						<b>Alamat</b>
					</td>
					<td>:
						<?php echo $data_cek['desa']; ?>, RT
						<?php echo $data_cek['rt']; ?>/ RW
						<?php echo $data_cek['rw']; ?>
					</td>
				</tr>
				<tr>
					<td style="width: 150px">
						<b>Agama</b>
					</td>
					<td>:
						<?php echo $data_cek['agama']; ?>
					</td>
				</tr>
				<tr>
					<td style="width: 150px">
						<b>Status Kawin</b>
					</td>
					<td>:
						<?php echo $data_cek['kawin']; ?>
					</td>
				</tr>
				<tr>
					<td style="width: 150px">
						<b>Kewarganegaraan</b>
					</td>
					<td>:
						<?php echo $data_cek['kewarganegaraan']; ?>
					</td>
				</tr>
				<tr>
					<td style="width: 200px">
						<b>Pendidikan Terakhir</b>
					</td>
					<td>:
						<?php echo $data_cek['pendidikan']; ?>
					</td>
				</tr>
				<tr>
					<td style="width: 150px">
						<b>Pekerjaan</b>
					</td>
					<td>:
						<?php echo $data_cek['pekerjaan']; ?>
					</td>
				</tr>
				<tr>
					<td style="width: 150px">
						<b>KTP</b>
					</td>
					<td>:
						<?php echo $data_cek['ktp']; ?>
						<br>
						<img src="file_ktp/<?php echo $data_cek['ktp']; ?>" width="400px" />
					</td>
				</tr>
				<tr>
					<td style="width: 150px">
						<b>KK</b>
					</td>
					<td>:
						<?php echo $data_cek['kk']; ?>
						<br>
						<img src="file_kk/<?php echo $data_cek['kk']; ?>" width="400px" />
					</td>
				</tr>



			</tbody>
		</table>
		<div class="card-footer">
			<a href="?page=data-pend" class="btn btn-warning">Kembali</a>
		</div>
	</div>
</div>