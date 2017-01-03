<!DOCTYPE html>
<html>
	<?php 
	      session_start();
		  include '../components/head.php';
		  include '../config/Database.php';

	if (isset($_POST['Submit'])) {
		$name = $_POST['nama'];
		$desc = $_POST['keterangan'];

		$imgFile = $_FILES['gambar']['name'];
		$tmp_dir = $_FILES['gambar']['tmp_name'];
		$typeImg = $_FILES['gambar']['type'];
		$imgSize = $_FILES['gambar']['size'];
		
		$upload_dir = "../upload/".$imgFile;
				
		$jenis = $_POST['j_kue'];
		$pb = $_POST['pem'];
		$rasa = $_POST['rasa'];
		$satuan = $_POST['h_satuan'];
		$stok = $_POST['stok'];

		if($typeImg == "image/jpeg" || $typeImg == "image/png"){
		if($imgSize <= 1000000){
			if(move_uploaded_file($tmp_dir,$upload_dir)){
					$query = $connect->query("INSERT INTO tb_produk VALUES ('','$name','$desc','$imgFile','$jenis','$rasa','$pb','$satuan','$stok')");
							if ($query == true) {
								header('location:adm-produk-list.php?success');
							}else{
								var_dump($_POST);
							}
				}
			}
		}
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
										<input type="text" class="form-control" name="nama">
										<label>Deskripsi</label>
										<textarea class="form-control" name="keterangan"></textarea>
										<label>Gambar</label>
										<input type="file" class="form-control" name="gambar">
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
										<label>Pembuatan</label>
										<select class="form-control" name="pem" required autofocus="true">
											<option>-- Pilih --</option>
											<?php
											$c = $connect->query("select * from tb_pembuatan");
											while ($data = $c->fetch_assoc()) {
											echo '<option value='.$data['id'].'>'.$data['rasa'].'</option>';
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
										<label>Harga Satuan</label>
										<input type="text" class="form-control" name="h_satuan">
										<label>Stok</label>
										<input type="text" class="form-control" name="stok">
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