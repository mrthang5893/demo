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
    <title>Connecting Success</title>

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
    
    <div class="container">
    
    <div  class="row">
        
        <div  class="col-lg-12">
            <h1 class=" text-center"><b>Influencer Marketing</b></h1>
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
        
        <div id="menu" class="col-lg-2">
          <ul class="nav nav-pills">
            <li><a href=""><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
            <li><a href=""><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Profile</a></li>
            <li><a href=""><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>App Install</a></li>
          </ul>
        </div>

        <div id="content" class="col-lg-9">

          <h2 class="page-header text-center"><b>App Install</b></h2>
        
          <div class="col-lg-4">
          
                    <a class="btn btn-primary form-control" href="https://www.facebook.com/dialog/oauth?client_id=185583881895274&scope=user_friends&redirect_uri=http://shutbrick.esy.es/fb-callback.php">Connect to Facebook</a>
          </div>

          <div class=" col-lg-4">
            <button type="button" class="form-control btn btn-info">Connect to Twitter</button></td>
          </div>

          <div class=" col-lg-4">
            <button type="button" class="form-control btn btn-warning">Connect to Instagram</button></td>
          </div>

        </div>
    </div>
  </div>
  </body>
</html>