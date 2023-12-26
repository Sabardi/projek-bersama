<?php
include 'desain.php';
include 'database.php';
$db = new database();
$data_user = $db->tampil_data();
?>

<div class="container mt-5">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h1>DAFTAR NAMA HARI INI</h1>
				</div>
<!-- start tabel nya -->

<div class="card-body">
	<table class="table table-striped">
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>no telpon</th>
		<th>Opsi</th>
	</tr>

	<?php
	$no = 1;
	foreach($data_user as $row){
	?>

	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $row['nama']; ?></td>
		<td><?php echo $row['alamat']; ?></td>
		<td><?php echo $row['no_telpon']; ?></td>
		<td>
			<a href="edit.php?id=<?php echo $row['id']; ?>&aksi=edit" class="btn btn-warning btn-sm">Edit</a>
			<a href="proses.php?id=<?php echo $row['id']; ?>&aksi=hapus" class="btn btn-danger btn-sm"
            	onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</a>			
		</td>
	</tr>
	<?php
	}
	?>
</table>

		</div>

			</div>

    </div>
</div>