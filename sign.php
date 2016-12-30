<!DOCTYPE html>
<html>

<?php 
	  session_start();
	  include 'frontend/head.php';
	  include 'config/Database.php';

	  if (isset($_POST['Login'])) {
	  	
	 $usr = $_POST['username'];
	 $pass = $_POST['password'];
	 $login = $connect->query("SELECT * FROM tb_user where username='$usr' AND password='$pass'");
	 $count = mysqli_num_rows($login); 
	 if ( $count == 0) {
	 	echo "Failure";
	 }else {
	 	$cemewew = mysqli_fetch_assoc($login);
	 	if ($cemewew['role'] == 'admin') {
	 		$_SESSION['username'] = $usr;
	 		
	 		header('location:admin/index.php?success_login');
	 	}else if($cemewew['role'] == 'user'){
	 		$_SESSION['username'] = $usr;
	 		header('location:index.php?success_login');
	 	}

	 }
	}
?>   

<body>

  <div class="app app-red">

  	<?php include 'components/login/index.php'; ?>

    <?php include 'components/footer.php'; ?>
    </div>
</body>
</html>