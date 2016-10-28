<?php 
	require_once("DAO/userDAO.php");
	//Lấy về mã
	$ma = $_GET["ma"];
	//Update CSDL
	$objuserDAO = new userDAO();
	$objuserDAO ->deleteById($ma);
	header("Location:listuser.php");
 ?>