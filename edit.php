<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit User</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
 <div class="container">
 <?php 
    if(isset($_SESSION['txtemail']) && $_SESSION['txtemail']){
      echo 'Xin chào!: '.$_SESSION['txtemail']."<br/>";
      echo '<a href="logout.php" >Đăng xuất</a>';
    }
    else{
      echo 'Bạn chưa đăng nhập';
    }
   ?>
 	<div class="row">
 		<div class="col-md-12">
 			<h2 class="page-header text-center">Influencer Marketing System</h2>
 		</div>

 		<div class="jumbotron col-md-4">
 			<a href="admin.php"><p class="text-center text-primary"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Dashboad</p></a>
 			<ul class="nav nav-tabs">
 				<li>
 					<a href=""><span class="glyphicon glyphicon-book" aria-hidden="true"></span>Influencer Marketing</a>
 					<ul>
 						<li>
 							<a href=""><span class="glyphicon glyphicon-list" aria-hidden="true"></span>List Influencer</a>
 						</li>
 						<li>
 							<a href=""><span class="glyphicon glyphicon-list" aria-hidden="true"></span>List Post</a>
 						</li>
 					</ul>					
 				</li>
 				<li>
 					<a href=""><span class="glyphicon glyphicon-book" aria-hidden="true"></span>Manager User</a>
 					<ul>
 						<li>
 							<a href="listuser.php"><span class="glyphicon glyphicon-list" aria-hidden="true"></span>List User</a>
 						</li>
 						<li>
 							<a href="adduser.php"><span class="glyphicon glyphicon-list" aria-hidden="true"></span>Add User</a>
 						</li>
 					</ul>
 				</li>
 			</ul>

 		</div>
 		<div class="jumbotron col-md-8">
 			<p class="text-primary text-center"><span class="glyphicon glyphicon-plus"></span>Edit User</p>
 			<?php 
				require_once("DAO/userDAO.php");
				require_once("DTO/userDTO.php");
				$ma = $_GET["ma"];
				$objuserDAO = new userDAO();
				$objuserDTO = $objuserDAO->getById($ma);
            ?>
 			<form action="editxl.php" method="post">
 			    <b>ID</b><br>
 				<input type="text" name="txtma" value="<?php echo $objuserDTO->ma; ?>" class="form-control" >
 				<b>UserID</b><br>
 				<input type="text" name="txtuser" value="<?php echo $objuserDTO->user; ?>" class="form-control">
 				<b>Fullname</b><br>
 				<input type="text" name="txtname" value="<?php echo $objuserDTO->name; ?>" class="form-control">
 				<b>Email</b><br>
 				<input type="text" name="txtemail" value="<?php echo $objuserDTO->email; ?>" class="form-control">
 				<b>Password</b><br>
 				<input type="password" name="txtpass" value="<?php echo $objuserDTO->pass; ?>" class="form-control">
 				<b>Re-Password</b><br>
 				<input type="password" name="txtrepass" value="" class="form-control">
 				<br>
 				<input type="submit" name="" value="Save" class="btn btn-success form-control">
 			</form>
 		</div>
 	</div>
 </div>
</body>
</html>