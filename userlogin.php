<?php session_start(); ?>
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
    <?php 
    if(isset($_SESSION['txtemail']) && $_SESSION['txtemail']){
      echo 'Xin chào!: '.$_SESSION['txtemail']."<br/>";
      echo '<a href="logout.php" >Đăng xuất</a>';
    }
    else{
      echo 'Bạn chưa đăng nhập';
    }
   ?>
    <div  class="row">
        <div  class="col-md-12">
            <h1 class="page-header">Influencer Marketing</h1>
        </div>
        <div id="menu" class="jumbotron col-md-3">

          <h3 class="page-header">Menu</h3>
          <input type="text" name="" value="" class="form-control" placeholder="Search">
          <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>Search</button><br>
          <a href=""><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>App Install</a>

        </div>
        <div id="content" class="jumbotron col-md-9">
          <h2 class="page-header">App Install</h2>
        
          <div class="col-md-4">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th class=" text-primary">Facebook</th>
                </tr>
              
              </thead>
              <tbody>
                <tr>
                  <td>Facebook:</td>
                  
                </tr>
                <tr>
                  <td>Total Friend:</td>
              
                </tr>
                <tr>
                  <td><button type="button" class="form-control btn btn-primary">Connect to Facebook</button></td>

                </tr>
              </tbody>
            </table>

          </div>
          <div class=" col-md-4">
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class=" text-primary">Twitter</th>
                  </tr>
                
                </thead>
                <tbody>
                  <tr>
                    <td>Twitter:</td>
                    
                  </tr>
                  <tr>
                    <td>Total Folower:</td>
                
                  </tr>
                  <tr>
                    <td><button type="button" class="form-control btn btn-info">Connect to Twitter</button></td>

                  </tr>
                </tbody>
            </table>
            </div>
          <div class=" col-md-4">
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class=" text-primary">Instagram</th>
                  </tr>
                
                </thead>
                <tbody>
                  <tr>
                    <td>Instagram:</td>
                    
                  </tr>
                  <tr>
                    <td>Total Folower:</td>
                
                  </tr>
                  <tr>
                    <td><button type="button" class="form-control btn btn-warning">Connect to Instagram</button></td>

                  </tr>
                </tbody>
            </table>
          </div>
      

        </div>
    </div>
  </div>
  </body>
</html>