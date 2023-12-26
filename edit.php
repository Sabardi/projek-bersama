<?php
include 'desain.php';
include 'database.php';
$db = new database();
// $data_user = $db->tampil_data();
?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
					<h1>edit data </h1>
				</div>

                <!-- tabel -->
<form action="proses.php?aksi=update" method="post">

<?php
foreach($db->edit($_GET['id']) as $data){
?>
    <!-- <table> -->
    <div class="card-body">
        
        <div class="form-group">
			<label for="nama">Id</label>
			<input type="text" name="id" value="<?php echo $data['id'] ?>" class="form-control"  required>
		</div>

        <div class="form-group">
			<label for="nama">Nama</label>
			<input type="text" name="nama" value="<?php echo $data['nama'] ?>" class="form-control"  required>
		</div>

        <div class="form-group">
			<label for="nama">Alamat</label>
			<input type="text" name="alamat" value="<?php echo $data['alamat'] ?>" class="form-control"  required>
		</div>

        <div class="form-group">
			<label for="nama">usia</label>
			<input type="text" name="usia" value="<?php echo $data['usia'] ?>" class="form-control"  required>
		</div>
    </div>

        <td></td>
        <td></td>
        <td><input type="submit" name="tombol" value="Simpan" class="btn btn-primary"></td>
        <td></td>
        <td>
            <a href="index.php" class="btn btn-secondary">Batal</a>
        </td>
    <?php
}
?>
</form>
                
            </div>
        </div>

    </div>
</div>