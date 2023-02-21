<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Tambah Data</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">NIK</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="nik" name="nik" placeholder="NIK" required = required> *isi sesuai KTP
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">No KK</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="no_kk" name="no_kk" placeholder="NO KK" > *isi sesuai KK
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Penduduk" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">TTL</label>
				<div class="col-sm-3">
					<input type="text" class="form-control" id="tempat_lh" name="tempat_lh" placeholder="Tempat Lahir" required>
				</div>
				<div class="col-sm-3">
					<input type="date" class="form-control" id="tgl_lh" name="tgl_lh" placeholder="Tanggal Lahir" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jenis Kelamin</label>
				<div class="col-sm-3">
					<select name="jekel" id="jekel" class="form-control">
						<option>- Pilih -</option>
						<option>Laki-laki</option>
						<option>Perempuan</option>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Desa</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="desa" name="desa" placeholder="Desa" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">RT/RW</label>
				<div class="col-sm-3">
					<input type="text" class="form-control" id="rt" name="rt" placeholder="RT" required>
				</div>
				<div class="col-sm-3">
					<input type="text" class="form-control" id="rw" name="rw" placeholder="RW" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Agama</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="agama" name="agama" placeholder="Agama" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Status Perkawinan</label>
				<div class="col-sm-3">
					<select name="kawin" id="kawin" class="form-control">
						<option>- Pilih -</option>
						<option>Sudah</option>
						<option>Belum</option>
						<option>Cerai Mati</option>
						<option>Cerai Hidup</option>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kewarganegaraan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="kewarganegaraan" name="kewarganegaraan" placeholder="Kewarganegaraan">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Pendidikan Terakhir</label>
				<div class="col-sm-3">
					<select name="pendidikan" id="pendidikan" class="form-control">
						<option>- Pilih -</option>
						<option>SD</option>
						<option>SMP</option>
						<option>SMA</option>
						<option>Diploma</option>
						<option>Sarjana</option>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Pekerjaan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="Pekerjaan" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">KTP</label>
				<div class="col-sm-6">
					<input type="file" class="form-control" id="ktp" name="ktp" > *file JPG
				</div>

			</div>

			 <div class="form-group row">
				<label class="col-sm-2 col-form-label">KK</label>
				<div class="col-sm-6">
					<input type="file" class="form-control" id="kk" name="kk" > *file JPG
				</div>

			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Penginput</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="peng_input" name="peng_input" placeholder="Nama Penginput" >
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jabatan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="jabatan" >
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
			<a href="?page=data-pend" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php
    if (isset ($_POST['Simpan'])){

	$acak = mt_rand(1000, 9999);

	$sumber = $_FILES["ktp"]["tmp_name"];
	$target_dir = "file_ktp";
	$temp = explode(".",$_FILES["ktp"]["name"]);
	$nama_ktp_baru = ("ktp-".$acak).'.'.end($temp);
	move_uploaded_file($_FILES["ktp"]["tmp_name"], $target_dir."/".$nama_ktp_baru);

	$sumber = $_FILES["kk"]["tmp_name"];
	$target_dir = "file_kk";
	$temp = explode(".",$_FILES["kk"]["name"]);
	$nama_kk_baru = ("kk-".$acak).'.'.end($temp);
	move_uploaded_file($_FILES["kk"]["tmp_name"], $target_dir."/".$nama_kk_baru);


    	//mulai proses simpan data
        $sql_simpan = "INSERT INTO tb_pdd (ktp ,kk, nik, no_kk, nama, tempat_lh, tgl_lh, jekel, desa, rt, rw, agama, kawin,kewarganegaraan,pendidikan, pekerjaan, peng_input, jabatan, status) VALUES (
            '".$nama_ktp_baru."',
			'".$nama_kk_baru."',
			'".$_POST['nik']."',
			'".$_POST['no_kk']."',
            '".$_POST['nama']."',
			'".$_POST['tempat_lh']."',
			'".$_POST['tgl_lh']."',
            '".$_POST['jekel']."',
            '".$_POST['desa']."',
			'".$_POST['rt']."',
			'".$_POST['rw']."',
			'".$_POST['agama']."',
			'".$_POST['kawin']."',
			'".$_POST['kewarganegaraan']."',
			'".$_POST['pendidikan']."',
			'".$_POST['pekerjaan']."',
			'".$_POST['peng_input']."',
			'".$_POST['jabatan']."',
            'Ada')";
        $query_simpan = mysqli_query($koneksi, $sql_simpan);
        mysqli_close($koneksi);

    if ($query_simpan) {
      echo "<script>
		Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
		}).then((result) => {if (result.value){
			window.location = 'index.php?page=data-pend';
			}
		})</script>";
		}else{
		echo "<script>
		Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
		}).then((result) => {if (result.value){
			window.location = 'index.php?page=add-pend';
			}
		})</script>";
		}
	}

?>

<!-- end -->