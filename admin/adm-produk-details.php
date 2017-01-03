<?php 
		  session_start();
		  include '../components/head.php';
		  include '../config/Database.php';
		  if (isset($_GET['id_produk'])) {
		  	$id = $_GET['id_produk'];
		  	$getById = $connect->query("SELECT * FROM tb_produk a join tb_jenis b on a.fk_jenis = b.id join tb_rasa c on a.fk_rasa = c.id_rasa join tb_pembuatan d on a.fk_pem = d.id where a.id_produk='$id'");
		  	$data = $getById->fetch_assoc();
		  }
	?>
<!DOCTYPE html>
<html class="no-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Product Details</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>Detail Produk</h4>
                </div>
                <div class="card-body">
                    <!-- card body start   -->
                    <div class="row">
                        <div class="col-md-8">
                           <div class="thumbnail">
	    					<img class="img-thumbnail" src='../upload/<?php echo $data['image']; ?>'>
	    					</div>
                        </div>
						<div class="col-md-4">
							<h2><?php echo $data['nama_produk']; ?></h2>
							<br>
							<label>Deskripsi Produk</label>
							<p><?php echo $data['deskripsi_produk']; ?></p>
							<label>Kategori</label>
							<span class="label label-warning"><?php echo $data['ket_jenis']; ?></span>
							<br>
							<label>Rasa</label>
							<span class="label label-success"><?php echo $data['keterangan']; ?></span>
							<br>
							<label>Proses Pembuatan</label>
							<span class="label label-success"><?php echo $data['rasa']; ?></span>
							<label>Harga Satuan</label>
							<strong>Rp <?php echo $data['harga_satuan']; ?></strong>
							<br>
							<label>Stok</label>
							<strong><?php echo $data['stok']; ?></strong>
						</div>
                    </div>
                </div>
                <!-- card body end  -->
            </div>
        </div>
    </div>
		</div>
</body>
</html>