<?php 
	require_once("DAO/userDAO.php");
	require_once("DTO/userDTO.php");
//Tạo đối tượng DTO user
	if(isset($_POST)){
	$objuserDTO = new userDTO();
	$objuserDTO->ma = $_POST['txtma'];
	$objuserDTO->user =$_POST["txtuser"];
	$objuserDTO->name = $_POST["txtname"];
	$objuserDTO->email=$_POST["txtemail"];
	$objuserDTO->pass=$_POST["txtpass"];
//Update Database
	$objuserDAO = new userDAO();
	$objuserDAO->update($objuserDTO);
	header("Location:listuser.php"); 
 }
 ?>