<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>UserLogin</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="userlogin.js" type="text/javascript" charset="utf-8" async defer></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </head>
  <body>
  <?php 
    session_start();
    $conn = mysqli_connect("mysql.hostinger.vn","u852828225_root","123456","u852828225_local");  
    if(isset($_POST["btn_submit"]))
      {

        

        $username = addslashes($_POST["txtemail"]);
        $password = addslashes($_POST["txtpass"]);


      if ($username == "" || $password =="") {
        echo "username hoặc password bạn không được để trống!";
      }else{
        $sql = "select * from user where email = '$username' and pass = '$password' ";
        $query = mysqli_query($con,$sql);
        $num_rows = mysqli_num_rows($query);
        if ($num_rows==0) {
          echo "tên đăng nhập hoặc mật khẩu không đúng !";
        }else{
          $row = mysqli_fetch_assoc($query);
          $_SESSION['txtemail']=$username;
          if($row['level'] == 1) {
            header("Location: admin.php");
          } else {
            header("location:userlogin.php");
          }

        }

        }

      }
    
   ?>
  

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
      <div class="container">
        <div  class="row">
            <div  class="col-lg-12">
                <h1 class="page-header text-center"><b>Welcome to IMS..!</b></h1>
            </div>
            <div class="col-lg-4">
              
            </div>
            <div  class="col-lg-4">

              <h3 class="page-header"><b>Please Sign In</b></h3>
                  <form action="index.php" method="post" name="frmlogin">
                    <input type="text" name="txtemail" id="txtemail" class="form-control" placeholder="Email"><br>
                    <div style="color:#FF0000" id="emailfail"></div>
                    <input type="password" name="txtpass" id="txtpass" class="form-control" placeholder="Password"><br>
                    <div style="color:#FF0000" id="passfail"></div>
                    <input type="checkbox" name="" value="">Remember Me
                    <br>
                    <input type="submit" name="btn_submit" value="Login" class="btn btn-primary form-control">
                    <a href="" class="text-info">Forget to password</a>
                  </form>
            </div>

        </div>
      </div>
  </body>
</html>