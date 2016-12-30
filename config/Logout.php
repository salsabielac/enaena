<?php 

session_start();
session_destroy();
header('location:../sign.php?logout_success');

?>