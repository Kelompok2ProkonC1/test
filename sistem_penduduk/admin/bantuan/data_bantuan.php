<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Data Penerima Bantuan</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<div>
				<a href="?page=add-bantuan" class="btn btn-primary">
					<i class="fa fa-edit"></i> Tambah Data</a>
			</div>
			<br>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>No KK</th>
						<th>Alamat</th>
						<th>Jenis Bantuan</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>

					<?php
              $no = 1;
            //   $sql = $koneksi->query("select * from tb_bantuan");
              $sql = $koneksi->query("SELECT b.id_bantuan, b.alamat, b.jenis_bantuan, k.no_kk, p.nama as kepala 
			  from tb_bantuan b left join tb_kk k on k.id_kk=b.id_kk left join tb_pdd p on p.id_pend=k.kepala ");
			  while ($data= $sql->fetch_assoc()) {
            ?>

					<tr>
						<td>
							<?php echo $no++; ?>
						</td>
						<td>
							<?php echo $data['no_kk']; ?> -
							<?php echo $data['kepala']; ?>
						</td>
						<td>
							<?php echo $data['alamat']; ?>
						</td>
						<td>
							<?php echo $data['jenis_bantuan']; ?>
						</td>
						<td>
							<a href="?page=edit-bantuan&kode=<?php echo $data['id_bantuan']; ?>" title="Ubah" class="btn btn-success btn-sm">
								<i class="fa fa-edit"></i>
							</a>
							<a href="?page=del-bantuan&kode=<?php echo $data['id_bantuan']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')"
							 title="Hapus" class="btn btn-danger btn-sm">
								<i class="fa fa-trash"></i>
							</a>
						</td>
					</tr>

					<?php
              }
            ?>
				</tbody>
				</tfoot>
			</table>
		</div>
	</div>
	<!-- /.card-body -->