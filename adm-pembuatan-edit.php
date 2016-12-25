<!DOCTYPE html>
<html>

<?php include 'components/head.php'; 
	  include 'config/Database.php';

	  if (isset($_GET['id'])) {
	  	$id = $_GET['id'];
	  	$getById = $connect->query("SELECT * FROM tb_pembuatan where id = '$id' ");
	  	$extract = $getById->fetch_assoc();

	  if (isset($_POST['Submit'])) {
	  	$ket = $_POST['keterangan'];
	  	$update = $connect->query("UPDATE tb_pembuatan SET keterangan='$ket' where id='$id'");
	  		if ($update == true) {
	  			header('location:adm-pembuatan.php?upd_success');
	  		}else{
	  			header('location:adm-pembuatan-edit?upd_failure');
	  		}
	  	}
	  }

?>    

<body>
  <div class="app app-red">

    <?php include 'components/sidebar.php'; ?>

    <div class="app-container">

    <?php include 'components/navbar.php'; ?>

    <?php include 'components/edit_pemb.php'; ?>

    <?php include 'components/footer.php'; ?>
    </div>
  </div>

</body>
</html>