<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM tb_bantuan WHERE id_bantuan='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>

<div class="card card-success">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Ubah Data</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">No Sistem</label>
				<div class="col-sm-2">
					<input type="text" class="form-control" id="id_bantuan" name="id_bantuan" value="<?php echo $data_cek['id_bantuan']; ?>"
					 readonly/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Keluarga</label>
				<div class="col-sm-6">
					<select name="id_kk" id="id_kk" class="form-control select2bs4" required disabled>
						<option selected="">- Pilih -</option>
						<?php
                        // ambil data dari database
                        $query = "select k.id_kk, k.no_kk, p.nama as kepala from tb_kk k left join tb_pdd p on p.id_pend = k.kepala";
                        $hasil = mysqli_query($koneksi, $query);
                        while ($row = mysqli_fetch_array($hasil)) {
                        ?>
						<option value="<?php echo $row['id_kk'] ?>" <?=$data_cek[
						 'id_kk']==$row[ 'id_kk'] ? "selected" : null ?>>
							<?php echo $row['no_kk'] ?>
							-
							<?php echo $row['kepala'] ?>
						</option>
						<?php
                        }
                        ?>
					</select>
				</div>
			</div>


            
            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Alamat</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $data_cek['alamat']; ?>"
					 required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jenis Bantuan</label>
				<div class="col-sm-6">
					
						<h5><input type="checkbox" name="jenis_bantuan[]" value="BPNT" <?php if (in_array("BPNT", explode(",",$data_cek['jenis_bantuan']))) echo "checked";?>> BPNT (Bantuan Pangan Non Tunai)</h5><br>
						<h5><input type="checkbox" name="jenis_bantuan[]" value="PKH" <?php if (in_array("PKH", explode(",",$data_cek['jenis_bantuan']))) echo "checked";?>> PKH 	(Program Keluarga Harapan)</h5><br>
						<h5><input type="checkbox" name="jenis_bantuan[]" value="PBI"  <?php if (in_array("PBI", explode(",",$data_cek['jenis_bantuan']))) echo "checked";?>> PBI 	(Penerima Bantuan Iuran)</h5><br> 
				</div> 
			</div>
<?php print_r(explode(",",$data_cek['jenis_bantuan'])); ?>

		</div>
		<div class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
			<a href="?page=data-bantuan" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php

    if (isset ($_POST['Ubah'])){
    $sql_ubah = "UPDATE tb_bantuan SET 
		no_kk ='".$_POST['no_kk']."',
		alamat='".$_POST['alamat']."',
		jenis_bantuan='".$_POST['jenis_bantuan']."'
		id_kk='".$_POST['id_kk']."'

		WHERE id_bantuan='".$_POST['id_bantuan']."'";

		$jenis_bantuan = implode(",", $_POST['jenis_bantuan']);
	$alamat = $_POST['alamat'];
	$id_kk = $_POST['id_kk'];

	$sql_simpan = "INSERT INTO tb_bantuan (id_kk, alamat, jenis_bantuan) VALUES ('$id_kk', '$alamat', '$jenis_bantuan')";

	$query_simpan = mysqli_query($koneksi, $sql_simpan);
    $query_ubah = mysqli_query($koneksi, $sql_ubah);
	echo mysqli_error($koneksi);
    mysqli_close($koneksi);

    if ($query_ubah) {
        echo "<script>
      Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-bantuan';
        }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-bantuan';
        }
      })</script>";
    }}
