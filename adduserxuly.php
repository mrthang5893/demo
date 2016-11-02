<?php 
	require_once("DAO/userDAO.php");
	require_once("DTO/userDTO.php");
//Tạo đối tượng cho DTO user
	$objuserDTO = new userDTO();
	$objuserDTO->user = $_POST["txtuser"];
	$objuserDTO->name = $_POST["txtname"];
	$objuserDTO->email = $_POST["txtemail"];
	$objuserDTO->pass = $_POST["txtpass"];
//Thêm vào Database
	$objuserDAO = new userDAO();
	$objuserDAO->insert($objuserDTO);

	header("Location:listuser.php");	
 ?>