<?php
include 'desain.php';
?>



<div class="container mt-5">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h1>Tambah member</h1>
				</div>

				<!-- tabel  -->
				<div class="card-body">
	<form action="proses.php?aksi=tambah" method="post">
		
			<div class="form-group">
				<label for="nama">Nama</label>
				<input type="text" name="nama" class="form-control" required>
			</div>

			<div class="form-group">
				<label for="nama">Alamat</label>
				<input type="text" name="alamat" class="form-control" required>
			</div>

			<div class="form-group">
				<label for="nama">No Telpon</label>
				<input type="text" name="no_telpon" class="form-control" required>
			</div>
			
			<br>
			<button type="submit" class="btn btn-primary">Simpan</button>
			<a href="index.php" class="btn btn-secondary">Batal</a>

	</form>
</div>
			</div>
		</div>
	</div>
</div>
