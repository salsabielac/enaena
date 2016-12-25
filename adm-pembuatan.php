<!DOCTYPE html>
<html>

<?php include 'components/head.php'; 
	  include 'config/Database.php';

	  if (isset($_POST['Submit'])) {
	  	$set_ket = $_POST['keterangan'];
	  	$query = $connect->query("INSERT INTO tb_pembuatan VALUES('','$set_ket')");

	  	if ($query == true) {
	  		header('location:adm-pembuatan.php?success');
	  	} else {
	  		header('location:adm-pembuatan.php?failure');
	  	}
	  }

	  if (isset($_GET['id'])) {
	  	 $id = $_GET['id'];
	  	 $query = $connect->query("DELETE FROM tb_pembuatan WHERE id = '$id'");
	  	 if ($query == true) {
	  	 	header('location:adm-pembuatan.php?delete_success');
	  	 }else{
	  	 	header('location:adm-pembuatan.php?delete_failure');
	  	 }
	  }

?>    

<body>
  <div class="app app-red">

    <?php include 'components/sidebar.php'; ?>

    <div class="app-container">

    <?php include 'components/navbar.php'; ?>

    <?php include 'components/index_pembuatan.php'; ?>

    <?php include 'components/footer.php'; ?>
    </div>
  </div>

</body>
</html>