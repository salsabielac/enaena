<!DOCTYPE html>
<html>
<?php 
	  include 'frontend/head.php'; 
	  include 'config/Database.php';
	  ?>
<body>
  <div class="app app-red">
    <div class="app-container">
    <?php 
	include 'frontend/sidebar.php';
	include 'frontend/navbar.php'; 	
	?>
    <div class="row">
    <?php 
    	$no = 1;
		$view = $connect->query("SELECT * FROM tb_produk");
		$no = 1;
		while ($data = $view->fetch_assoc()) {
    ?>
    	<div class="col-md-3">
    	<div class="card">
    		<div class="card-header">
    		<a href="#"><?php echo $data['nama_produk']; ?></a>
    		</div>
    		<div class="card-body">
	    		<div class="thumbnail">
	    			<img class="img-thumbnail" src='upload/<?php echo $data['image']; ?>'>
	    		</div>
				<label>Harga Rp.<?php echo $data['harga_satuan']; ?></label>
    		</div>
    		<div class="container">
    			<a class="btn btn-success btn-sm" href="#">Beli
                <span class="fa fa-shopping-basket"></span>
                </a>  
                <a class="btn btn-success btn-sm" href="#">Detail
                <span class="fa fa-eye"></span>
                </a>
    		</div>
    	</div>
    	</div>
    <?php } ?>
    </div>

    <?php include 'frontend/footer.php'; ?>
    </div>
  </div>

</body>
</html>