<?php
if (!$_SESSION['username']) {
	header('location:../sign.php?belumlogin');
}
?>