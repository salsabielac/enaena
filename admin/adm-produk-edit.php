<!DOCTYPE html>
<html>
	<?php 
		  session_start();
		  include '../components/head.php';
		  include '../config/Database.php';

		  if (isset($_GET['id_produk'])) {
		  	$id = $_GET['id_produk'];
		  	$getById = $connect->query("SELECT * FROM tb_produk where id_produk='$id'");
		  	$data = $getById->fetch_assoc();
		  }

	?>
	<body>
		<div class="app app-red">
		
			<?php include '../components/sidebar.php'; ?>
			<div class="app-container">
				<?php include '../components/navbar.php'; ?>
				<div class="row">
					<div class="col-md-8">
						<form action="" method="POST" enctype="multipart/form-data">
							<div class="card">
								<div class="card-header"><h4>Form Rasa</h4></div>
								<div class="card-body"><!-- card body start   -->
								<div class="row">
									<div class="col-md-12">
										<label>Nama Kue</label>
										<input value="<?php echo $data['nama_produk']; ?>" type="text" class="form-control" name="nama">
										<label>Deskripsi</label>
										<textarea class="form-control" name="keterangan"><?php echo $data['deskripsi_produk']; ?></textarea>
										<label>Gambar</label>
										<input value="<?php echo $data['image'] ; ?>" type="file" class="form-control" name="gambar">

										<label>Harga Satuan</label>
										<input value="<?php echo $data['harga_satuan']; ?>" type="text" class="form-control" name="h_satuan">
										<label>Stok</label>
										<input value="<?php echo $data['stok']; ?>" type="text" class="form-control" name="stok">

										<label>Jenis Kue</label>
										<select class="form-control" name="j_kue" required autofocus="true">
											<option>-- Pilih --</option>
											<?php
											$c = $connect->query("select * from tb_jenis");
											while ($data = $c->fetch_assoc()) {
											echo '<option value='.$data['id'].'>'.$data['ket_jenis'].'</option>';
											}
											?>
										</select>
										<label>Rasa</label>
										<select class="form-control" name="rasa" required autofocus="true">
											<option>-- Pilih --</option>
											<?php
											$c = $connect->query("select * from tb_rasa");
											while ($data = $c->fetch_assoc()) {
											echo '<option value='.$data['id_rasa'].'>'.$data['keterangan'].'</option>';
											}
											?>
										</select>
										
										<br>
										<input type="submit" class="btn btn-danger" name="Submit">
										<input type="reset" class="btn btn-danger"  name="Cancel">
									</div>
								</div>
								</div><!-- card body end  -->
							</div>
						</form>
					</div>
				</div>
				<?php include '../components/footer.php'; ?>
			</div>
		</div>
	</body>
</html>