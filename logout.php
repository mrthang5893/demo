<?php 
	session_start();
	if(isset($_SESSION['txtemail'])){
		unset($_SESSION['txtemail']);
	}
	header("location:login.php");

 ?>