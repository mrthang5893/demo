<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>List User</title>

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
  
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <div class="container">
    <div class="row">
       <div  class="col-lg-12">
            <h1 class="text-center"><b>Influencer Marketing System</b></h1>
        </div>
        <div class="text-right">
          <?php 
            if(isset($_SESSION['txtemail']) && $_SESSION['txtemail']){
              echo ''.$_SESSION['txtemail']." || ";
              echo '<a href="logout.php" >Đăng xuất</a>';
            }
            else{
              echo 'Bạn chưa đăng nhập';
            }
          ?>
        </div>
        <hr>

        <div class="col-lg-3">
          <ul class="nav nav-tabs">
              <li>
                <a href="admin.php"><p class="form-control"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Dashboad</p></a>
              </li>

              <li><a href=""><p class="form-control"><span class="glyphicon glyphicon-book" aria-hidden="true"></span>Manager Profile</p></a>
                  <ul class="nav">
                    <li><a href="list_influencer.php"><span class="glyphicon glyphicon-list" aria-hidden="true"></span>List Profile</a></li>
                    <li><a href=""><span class="glyphicon glyphicon-list" aria-hidden="true"></span>List Post</a></li>
                  </ul>
              </li>

              <li><a href=""><p class="form-control"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Manager User</p></a>
                  <ul class="nav">
                      <li><a href="listuser.php"><span class="glyphicon glyphicon-list" aria-hidden="true"></span>List User</a></li>
                      <li><a href="adduser.php"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Add User</a></li>
                  </ul>

              </li>
                            
          </ul>
        </div>
        <?php 
          $conn = mysqli_connect("localhost","root","","test");
          $strQuery="select * from tblfb";
          $result = mysqli_query($conn,$strQuery);
         ?>

        <div class="col-lg-8">
          <h3 class="text-center page-header"><b>List Influencer</b></h3>
          <table class="table table-bordered">
                <tr>
                  <td><b>#</b></td>
                  <td><b>FB_Name</b></td>
                  <td><b>Total_Friend</b></td>
                  <td><b>Email</b></td>
                </tr>
                <?php 
                  while($row = mysqli_fetch_array($result))
                  {
                 ?>
                 <tr>
                  <td><?php echo $row["id"]; ?></td>
                  <td><?php echo $row["name"]; ?></td>
                  <td><?php echo $row["total"]; ?></td>
                  <td></td>
                </tr>
                <?php 
                  }
                 ?>
                
          </table>
        </div>
    </div>
  </div>
  <?php 
    mysqli_close($conn);
   ?>
  </body>
}
</html>