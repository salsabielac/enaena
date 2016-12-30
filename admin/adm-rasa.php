<!DOCTYPE html>
<html>

<?php 
	  session_start();	
	  include '../components/head.php'; 
	  include '../config/Database.php';

	  if (isset($_POST['Submit'])) {
	  	$set_ket = $_POST['keterangan'];
	  	$query = $connect->query("INSERT INTO tb_rasa VALUES('','$set_ket')");

	  	if ($query == true) {
	  		header('location:adm-rasa.php?success');
	  	} else {
	  		header('location:adm-rasa.php?failure');
	  	}
	  }

	  if (isset($_GET['id_rasa'])) {
	  	 $id = $_GET['id_rasa'];
	  	 $query = $connect->query("DELETE FROM tb_rasa WHERE id_rasa = '$id'");
	  	 if ($query == true) {
	  	 	header('location:adm-rasa.php?delete_success');
	  	 }else{
	  	 	header('location:adm-rasa.php?delete_failure');
	  	 }
	  }

?>    

<body>
  <div class="app app-red">

    <?php include '../components/sidebar.php'; ?>

    <div class="app-container">

    <?php include '../components/navbar.php'; ?>

    <?php include '../components/index_rasa.php'; ?>

    <?php include '../components/footer.php'; ?>
    </div>
  </div>

</body>
</html>