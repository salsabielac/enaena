<!DOCTYPE html>
<html>

<?php 
	session_start();
  	include '../config/Check.php';
	  include '../components/head.php'; ?>    

<body>
  <div class="app app-red">

    <?php include '../components/sidebar.php'; ?>

    <div class="app-container">

    <?php include '../components/navbar.php'; ?>

    <?php include '../components/adm-dashboard.php'; ?>

    <?php include '../components/footer.php'; ?>
    </div>
  </div>

</body>
</html>