<!DOCTYPE html>
<html>

<?php include 'components/head.php'; 
	  include 'config/Database.php';

	  if (isset($_GET['id_rasa'])) {
	  	$id = $_GET['id_rasa'];
	  	$getById = $connect->query("SELECT * FROM tb_rasa where id_rasa = '$id' ");
	  	$extract = $getById->fetch_assoc();

	  if (isset($_POST['Submit'])) {
	  	$ket = $_POST['keterangan'];
	  	$update = $connect->query("UPDATE tb_rasa SET keterangan='$ket' where id_rasa='$id'");
	  		if ($update == true) {
	  			header('location:adm-rasa.php?upd_success');
	  		}else{
	  			header('location:adm-rasa-edit?upd_failure');
	  		}
	  	}
	  }

?>    

<body>
  <div class="app app-red">

    <?php include 'components/sidebar.php'; ?>

    <div class="app-container">

    <?php include 'components/navbar.php'; ?>

    <?php include 'components/edit_rasa.php'; ?>

    <?php include 'components/footer.php'; ?>
    </div>
  </div>

</body>
</html>