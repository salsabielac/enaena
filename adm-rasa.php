<!DOCTYPE html>
<html>

<?php 
	  include 'components/head.php'; 
	  include 'config/Database.php';
	  include 'objects/Rasa.php';

	  $database = new Database();
	  $db = $database->getConnection();
	  $rasa = new Rasa($db);
	  $st = $rasa->viewRasa();

	  if (isset($_POST['Submit'])) {

	  	$ket = $_POST['keterangan'];
  		
 		$rasa->insertRasa($ket);
 		var_dump($_POST);
}

?>    

<body>
  <div class="app app-red">

    <?php include 'components/sidebar.php'; ?>

    <div class="app-container">

    <?php include 'components/navbar.php'; ?>

    <?php include 'components/rasa/index.php'; ?>

    <?php include 'components/footer.php'; ?>
    </div>
  </div>

</body>
</html>