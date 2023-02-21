<?php

    if(isset($_GET['kode'])){  // salah disini (liat file data-pend)
        $sql_cek = "SELECT p.id_pend, p.nik,  k.no_kk, p.nama, p.tempat_lh, p.tgl_lh, p.jekel, p.desa, p.rt, p.rw, p.agama,p.kawin,   p.kewarganegaraan, p.pendidikan, p.pekerjaan, p.ktp, p.kk   from tb_pdd p left join tb_kk k on k.kepala=p.id_pend where  id_pend ='".$_GET['kode']."' ";
        $data_cek = mysqli_query($koneksi, $sql_cek);
		$data_cek = $data_cek->fetch_assoc();
    }
?>

<div class="card card-success">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Ubah Data Penduduk</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">No Sistem</label>
				<div class="col-sm-2">
					<input type="text" class="form-control" id="id_pend" name="id_pend" value="<?php echo $data_cek['id_pend']; ?>"
					 readonly/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">NIK</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="nik" name="nik" value="<?php echo $data_cek['nik']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">No KK</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="no_kk" name="no_kk" value="<?php echo $data_cek['no_kk']; ?>"
					readonly/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data_cek['nama']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">TTL</label>
				<div class="col-sm-3">
					<input type="text" class="form-control" id="tempat_lh" name="tempat_lh" value="<?php echo $data_cek['tempat_lh']; ?>"
					/>
				</div>
				<div class="col-sm-3">
					<input type="date" class="form-control" id="tgl_lh" name="tgl_lh" value="<?php echo $data_cek['tgl_lh']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jenis Kelamin</label>
				<div class="col-sm-3">
					<select name="jekel" id="jekel" class="form-control">
						<option value="">-- Pilih jekel --</option>
						<?php
                //mengecek data yg dipilih sebelumnya
                if ($data_cek['jekel'] == "Laki-laki") echo "<option value='Laki-laki' selected>Laki-laki</option>";
                else echo "<option value='Laki-laki'>Laki-laki</option>";

                if ($data_cek['jekel'] == "Perempuan") echo "<option value='Perempuan' selected>Perempuan</option>";
                else echo "<option value='Perempuan'>Perempuan</option>";
            ?>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Desa</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="desa" name="desa" value="<?php echo $data_cek['desa']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">RT/RW</label>
				<div class="col-sm-3">
					<input type="text" class="form-control" id="rt" name="rt" value="<?php echo $data_cek['rt']; ?>"
					/>
				</div>
				<div class="col-sm-3">
					<input type="text" class="form-control" id="rw" name="rw" value="<?php echo $data_cek['rw']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Agama</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="agama" name="agama" value="<?php echo $data_cek['agama']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Status Perkawinan</label>
				<div class="col-sm-3">
					<select name="kawin" id="kawin" class="form-control">
						<option value="">-- Pilih Status --</option>
						<?php
                //mengecek data yg dipilih sebelumnya
                if ($data_cek['kawin'] == "Sudah") echo "<option value='Sudah' selected>Sudah</option>";
                else echo "<option value='Sudah'>Sudah</option>";

                if ($data_cek['kawin'] == "Belum") echo "<option value='Belum' selected>Belum</option>";
				else echo "<option value='Belum'>Belum</option>";
				
				if ($data_cek['kawin'] == "Cerai Mati") echo "<option value='Cerai Mati' selected>Cerai Mati</option>";
                else echo "<option value='Cerai Mati'>Cerai Mati</option>";

                if ($data_cek['kawin'] == "Cerai Hidup") echo "<option value='Cerai Hidup' selected>Cerai Hidup</option>";
                else echo "<option value='Cerai Hidup'>Cerai Hidup</option>";
            ?>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kewarganegaraan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="kewarganegaraan" name="kewarganegaraan" value="<?php echo $data_cek['kewarganegaraan']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Pendidikan Terakhir</label>
				<div class="col-sm-3">
					<select name="pendidikan" id="pendidikan" class="form-control">
						<option value="">-- Pilih Status --</option>
						<?php
                //mengecek data yg dipilih sebelumnya
                if ($data_cek['pendidikan'] == "SD") echo "<option value='SD' selected>SD</option>";
                else echo "<option value='SD'>SD</option>";

                if ($data_cek['pendidikan'] == "SMP") echo "<option value='SMP' selected>SMP</option>";
				else echo "<option value='SMP'>SMP</option>";
				
				if ($data_cek['pendidikan'] == "SMA") echo "<option value='SMA' selected>SMA</option>";
                else echo "<option value='SMA'>SMA</option>";

                if ($data_cek['pendidikan'] == "Diploma") echo "<option value='Diploma' selected>Diploma</option>";
                else echo "<option value='Diploma'>Diploma</option>";

				if ($data_cek['pendidikan'] == "Sarjana") echo "<option value='Sarjana' selected>Sarjana</option>";
                else echo "<option value='Sarjana'>Sarjana</option>";
            ?>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Pekerjaan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="<?php echo $data_cek['pekerjaan']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">KTP</label>
				<div class="col-sm-6">
					<input type="file" class="form-control" id="ktp" name="ktp"> *file JPG
				</div>

			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">KK</label>
				<div class="col-sm-6">
					<input type="file" class="form-control" id="kk" name="kk"> *file JPG
				</div>

			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Perubah</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="peng_input" name="peng_input" placeholder="Nama Perubah" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jabatan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Jabatan" required>
				</div>
			</div>
			

		</div>
		<div class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
			<a href="?page=data-pend" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php

	
    if (isset ($_POST['Ubah'])){

	$acak = mt_rand(1000, 9999);
	$sumber = $_FILES["ktp"]["tmp_name"];
	$target_dir = "file_ktp";
	$temp = explode(".",$_FILES["ktp"]["name"]);
	$nama_baru = ("ktp-".$acak).'.'.end($temp);

		if(!empty($sumber)){
			$ktp=$data_cek['ktp'];
			if (file_exists("file_ktp/$ktp")){
				unlink("file_ktp/$ktp");
			}
			
		move_uploaded_file($_FILES["ktp"]["tmp_name"], $target_dir."/".$nama_baru);
	
		$sql_ubah = "UPDATE tb_pdd, tb_kk SET 
			ktp='".$nama_baru."',
			nik='".$_POST['nik']."',
			no_kk='".$_POST['no_kk']."',
			nama='".$_POST['nama']."',
			tempat_lh='".$_POST['tempat_lh']."',
			tgl_lh='".$_POST['tgl_lh']."',
			jekel='".$_POST['jekel']."',
			desa='".$_POST['desa']."',
			rt='".$_POST['rt']."',
			rw='".$_POST['rw']."',
			agama='".$_POST['agama']."',
			kawin='".$_POST['kawin']."',
			kewarganegaraan='".$_POST['kewarganegaraan']."'
			pendidikan='".$_POST['pendidikan']."'
			pekerjaan='".$_POST['pekerjaan']."'
			WHERE id_pend='".$_POST['id_pend']."'";
		$query_ubah = mysqli_query($koneksi, $sql_ubah);
	}
    mysqli_close($koneksi);

    if ($query_ubah) {
        echo "<script>
      Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-pend';
        }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-pend';
        }
      })</script>";
    }}

	if (isset ($_POST['Ubah'])){

	$acak = mt_rand(1000, 9999);
	$sumber = $_FILES["kk"]["tmp_name"];
	$target_dir = "file_kk";
	$temp = explode(".",$_FILES["kk"]["name"]);
	$nama_baru = ("kk-".$acak).'.'.end($temp);

		if(!empty($sumber)){
			$ktp=$data_cek['kk'];
			if (file_exists("file_kk/$ktp")){
				unlink("file_kk/$ktp");
			}
			
		move_uploaded_file($_FILES["kk"]["tmp_name"], $target_dir."/".$nama_baru);
	
		$sql_ubah = "UPDATE tb_pdd, tb_kk SET 
			ktp='".$nama_baru."',
			nik='".$_POST['nik']."',
			no_kk='".$_POST['no_kk']."',
			nama='".$_POST['nama']."',
			tempat_lh='".$_POST['tempat_lh']."',
			tgl_lh='".$_POST['tgl_lh']."',
			jekel='".$_POST['jekel']."',
			desa='".$_POST['desa']."',
			rt='".$_POST['rt']."',
			rw='".$_POST['rw']."',
			agama='".$_POST['agama']."',
			kawin='".$_POST['kawin']."',
			kewarganegaraan='".$_POST['kewarganegaraan']."'
			pendidikan='".$_POST['pendidikan']."'
			pekerjaan='".$_POST['pekerjaan']."'
			WHERE id_pend='".$_POST['id_pend']."'";
		$query_ubah = mysqli_query($koneksi, $sql_ubah);
	}
	echo mysqli_error ($koneksi);
    mysqli_close($koneksi);

    if ($query_ubah) {
         echo "<script>
       Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
       }).then((result) => {if (result.value)
         {window.location = 'index.php?page=data-pend';
         }
       })</script>";
       }else{
       echo "<script>
       Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
       }).then((result) => {if (result.value)
         {window.location = 'index.php?page=data-pend';
         }
       })</script>";
    }}
?>
