<?php 
		 session_start();
		 include '../config/Database.php';
		
		 if (isset($_GET['id_produk'])) {
		 $id = $_GET['id_produk'];
	  	 $query = $connect->query("DELETE FROM tb_produk WHERE id_produk = '$id'");
	  	 if ($query == true) {
	  	 	header('location:adm-produk-list.php?delete_success');
	  	 }else{
	  	 	header('location:adm-produk.php?delete_failure');
	  	 }
	}

 ?>