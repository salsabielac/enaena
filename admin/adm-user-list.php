<!DOCTYPE html>
<html>
	<?php 
	      session_start();
		  include '../components/head.php';
		  include '../config/Database.php';
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
							<input class="btn btn-danger" value="Tambah User" type="button" value="This is button link" onclick="window.location.href='adm-produk.php'">
							</div>
							<div class="card-body">
								<table class="datatable table table-striped primary cellspacing="0" width="100%"">
									<thead>
										<tr>
											<th>#</th>
											<th>Kode</th>
											<th>Username</th>
											<th>Fullname</th>
											<th>Alamat</th>
                                            <th>Role</th>
											<th>Opsi</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$no = 1;
										$view = $connect->query("SELECT * FROM tb_user");
										$no = 1;
										while ($data = $view->fetch_assoc()) {
										?>	
									
										<tr>
											<td><?php echo $no ?></td>
											<td><?php echo $data['id'] ?></td>
											<td><?php echo $data['username'] ?></td>
											<td><?php echo $data['fullname'] ?></td>
											<td><?php echo $data['alamat'] ?></td>
                                            <td><?php echo $data['role'] ?></td>
											<td>
												<a class="btn btn-primary btn-sm" href="adm-user-details.php?id=<?php echo $data['id'] ?>">
													<span class="fa fa-eye"></span>
												</a>
												<a class="btn btn-success btn-sm" href="adm-user-edit.php?id=<?php echo $data['id'] ?>">
													<span class="fa fa-pencil"></span>
												</a>
												<a class="btn btn-danger btn-sm" href="adm-user-del.php?id=<?php echo $data['id'] ?>">
													<span class="fa fa-trash"></span>
												</a>
										   </td>
										</tr>
										<?php
										$no++;
										}
										?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<?php include '../components/footer.php'; ?>
			</div>
		</div>
	</body>
</html>