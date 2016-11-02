<?php 
  session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Add User</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </head>
  <body>
  
  <?php 
    require_once("DAO/userDAO.php");
    require_once("DTO/userDTO.php");
    
   ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

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
       <div  class="col-md-12">
            <h2 class="page-header text-center">Influencer Marketing System</h2>
        </div>
            <div class="jumbotron col-md-4">

              <a href="admin.php"><p class="text-primary text-center"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Dashboad</p></a>
                  <ul class="nav nav-tabs">
                                <li><a href=""><span class="glyphicon glyphicon-book" aria-hidden="true"></span>Influencer Marketing</a>
                    <ul >
                      <li><a href=""><span class="glyphicon glyphicon-list" aria-hidden="true"></span>List Influencer</a></li>
                      <li><a href=""><span class="glyphicon glyphicon-list" aria-hidden="true"></span>List Post</a></li>
                    </ul>
                  </li>
                                <li><a href=""><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Manager User</a>
                                  <ul>
                                    <li><a href="listuser.php"><span class="glyphicon glyphicon-list" aria-hidden="true"></span>List User</a></li>
                                <li><a href="adduser.php"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Add User</a></li>
                                  </ul>

                                </li>
                                
                            </ul>
            </div>

        <div class="jumbotron col-md-8">  
          <p class="text-center text-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Add User</p>
          <?php 

            if(isset($_POST['txtemail'])){
              
              if(mysqli_num_rows(mysqli_query("SELECT email FROM user WHERE email='{$_POST['txtemail']}'")) > 0){
                  echo "Email nay da co nguoi dung";
                  exit;
              }


             }
           ?>
            <form action="adduserxuly.php" method="post">
              <b>UserID</b><br>
              <input type="text" name="txtuser" value="" class="form-control" placeholder="UserID" required="">

              <b>Fullname</b><br>
              <input type="text" name="txtname" value="" class="form-control" placeholder="Fullname" required="">

              <b>Email</b><br>
              <input type="text" name="txtemail" value="" class="form-control" placeholder="Email" required="">

              <b>Password</b><br>
              <input type="password" name="txtpass" value="" class="form-control" placeholder="Password" required="">

              <b>Re-Password</b><br>
              <input type="password" name="" value="" class="form-control" placeholder="Re-Password" required=""><br>

              <input type="submit" name="btnsubmit" class="btn btn-success form-control" value="Save">
              
            </form>
    
        </div>

        

  </div>

  </body>
</html>