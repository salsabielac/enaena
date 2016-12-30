<!DOCTYPE html>
<html>
	<?php 
	      session_start();
		  include '../components/head.php';
		  include '../config/Database.php';

		  if (isset($_GET['id_produk'])) {
		  	# code...
		  }
	?>
	<body>
		<div class="app app-red">
			<?php include '../components/sidebar.php'; ?>
			<div class="app-container">
				<?php include '../components/navbar.php'; ?>
				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-header">
							<input class="btn btn-danger" value="Tambah Produk" type="button" value="This is button link" onclick="window.location.href='adm-produk.php'">
							</div>
							<div class="card-body">
								<table class="datatable table table-striped primary cellspacing="0" width="100%"">
									<thead>
										<tr>
											<th>#</th>
											<th>Kode</th>
											<th>Nama Kue</th>
											<th>Deskripsi</th>
											<th>Harga Satuan</th>
											<th>Stok</th>
											<th>Opsi</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$no = 1;
										$view = $connect->query("SELECT * FROM tb_produk");
										$no = 1;
										while ($data = $view->fetch_assoc()) {
										echo '<br>';
										echo '<tr>';
											echo '<td>' .$no. '</td>';
											echo '<td>' .$data['id_produk']. '</td>';
											echo '<td>' .$data['nama_produk']. '</td>';
											echo '<td>' .$data['deskripsi_produk']. '</td>';
											echo '<td>' .$data['harga_satuan']. '</td>';
											echo '<td>' .$data['stok']. '</td>';
											echo '<td>';
												echo '<a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal"
													>';
													echo '<span class="fa fa-eye"></span>';
												echo '</a>';
												echo "&nbsp;";
												echo '<a class="btn btn-success btn-sm" href="adm-produk-edit.php?id_produk='.$data['id_produk'].'" >';
													echo '<span class="fa fa-pencil"></span>';
												echo '</a>';
												echo "&nbsp;";
												//Button Delete
												echo '<a class="btn btn-danger btn-sm" href="adm-produk-del.php?id_produk='.$data['id_produk'].'" >';
													echo '<span class="fa fa-trash"></span>';
												echo '</a>';
											echo '</td>';
										echo '</tr>';
										$no++;
										}
										?>

									</tbody>
								</table>
								<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
												<h4 class="modal-title"><?php var_dump($_GET) ?></h4>
											</div>
											<div class="modal-body">
												<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl</p>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
												<button type="button" class="btn btn-sm btn-success">Save changes</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php include '../components/footer.php'; ?>
			</div>
		</div>
	</body>
</html>