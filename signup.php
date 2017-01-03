<!DOCTYPE html>
<html>

<?php include 'frontend/head.php';
	  include 'config/Database.php';

	  if (isset($_POST['submit'])) {
	  	$fulllname = $_POST['fullname'];
	  	$user = $_POST['username'];
	  	$pass = $_POST['password'];
	  	$bd = $_POST['bd'];

	  	$register = $connect->query("INSERT INTO tb_user VALUES('','$user','$pass','$fulllname','NULL','NULL','$bd','user')");
	  	if ($register == true) {
	  		header('location:sign.php?register_success');
	  		//var_dump($_POST);
	  	}else{
	  		header('location:signup.php?register_faulire');
	  		//var_dump($_POST);
	  	}
	  }

 ?>    

<body>
  <div class="app app-red">

  	<?php include './components/register/index.php'; ?>

    </div>
</body>
</html>