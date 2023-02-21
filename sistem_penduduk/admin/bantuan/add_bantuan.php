<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Tambah Data Penerima Bantuan</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">


			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Keluarga</label>
				<div class="col-sm-6">
					<select name="id_kk" id="id_kk" class="form-control select2bs4" required>
						<option selected="selected">- Pilih KK -</option>
						<?php
                        // ambil data dari database
                        $query = "select k.id_kk, k.no_kk, p.nama from tb_kk k left join tb_pdd p on k.kepala=p.id_pend";
                        $hasil = mysqli_query($koneksi, $query);
                         while ($row = mysqli_fetch_array($hasil))
						{
                        ?>
						<option value="<?php echo $row['id_kk'] ?>">
							<?php echo $row['no_kk'] ?>
							-
							<?php echo $row['nama'] ?>
						</option>
						<?php
                        }
                        ?>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Alamat (Lengkap)</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jenis Bantuan</label>
				<div class="col-sm-6">
					
						<h5><input type="checkbox" name="jenis_bantuan[]" value="BPNT"> BPNT (Bantuan Pangan Non Tunai)</h5><br>
						<h5><input type="checkbox" name="jenis_bantuan[]" value="PKH "> PHK 	(Program Keluarga Harapan)</h5><br>
						<h5><input type="checkbox" name="jenis_bantuan[]" value="PBI"> PBI 	(Penerima Bantuan Iuran)</h5><br> 
					
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
			<a href="?page=data-kartu" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php
if (isset ($_POST['Simpan'])){
	$jenis_bantuan = implode(",", $_POST['jenis_bantuan']);
	$alamat = $_POST['alamat'];
	$id_kk = $_POST['id_kk'];

	$sql_simpan = "INSERT INTO tb_bantuan (id_kk, alamat, jenis_bantuan) VALUES ('$id_kk', '$alamat', '$jenis_bantuan')";
	$query_simpan = mysqli_query($koneksi, $sql_simpan);


	echo mysqli_error($koneksi);
	mysqli_close($koneksi);
		if ($query_simpan) {
		  echo "<script>
		  Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
		  }).then((result) => {if (result.value){
			  window.location = 'index.php?page=data-bantuan';
			  }
		  })</script>";
		  }else{
		   echo "<script>
		   Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
		   }).then((result) => {if (result.value){
		 	  window.location = 'index.php?page=add-bantuan';
		 	  }
		   })</script>";
		}
}
?>

<!-- end -->