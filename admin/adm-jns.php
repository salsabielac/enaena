<!DOCTYPE html>
<html>

<?php 
	  session_start();
	  include '../components/head.php'; 
	  include '../config/Database.php';

	  if (isset($_POST['Submit'])) {
	  	$set_ket = $_POST['keterangan'];
	  	$query = $connect->query("INSERT INTO tb_jenis VALUES('','$set_ket')");

	  	if ($query == true) {
	  		header('location:adm-jns.php?success');
	  	} else {
	  		header('location:adm-jns.php?failure');
	  	}
	  }

	  if (isset($_GET['id'])) {
	  	 $id = $_GET['id'];
	  	 $query = $connect->query("DELETE FROM tb_jenis WHERE id = '$id'");
	  	 if ($query == true) {
	  	 	header('location:adm-jns.php?delete_success');
	  	 }else{
	  	 	header('location:adm-jns.php?delete_failure');
	  	 }
	  }

?>    

<body>
  <div class="app app-red">

    <?php include '../components/sidebar.php'; ?>

    <div class="app-container">

    <?php include '../components/navbar.php'; ?>

    <?php include '../components/index_jns.php'; ?>

    <?php include '../components/footer.php'; ?>
    </div>
  </div>

</body>
</html>