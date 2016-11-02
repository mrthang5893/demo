<?php
    session_start();
    $app_id = "185583881895274";
    $app_secret = "2efd77762a3a5c8df72491d29e716136";
    $redirect_uri = urlencode("http://localhost:8080/demo/fb-callback.php");
    // Get code value
    $code = $_GET['code'];
    // Get access token info
    $facebook_access_token_uri = "https://graph.facebook.com/oauth/access_token?client_id=$app_id&redirect_uri=$redirect_uri&client_secret=$app_secret&code=$code";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $facebook_access_token_uri);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    $response = curl_exec($ch);
    curl_close($ch);
    // Get access token
    $access_token = str_replace('access_token=', '', explode("&", $response)[0]);
    // Get user infomation
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://graph.facebook.com/me?access_token=$access_token");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    $response = curl_exec($ch);
    curl_close($ch);
    $user = json_decode($response);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://graph.facebook.com/me/friends?access_token=$access_token");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    $response = curl_exec($ch);
    curl_close($ch);
    $friend =json_decode($response);
    // Log user in
    $_SESSION['user_login'] = true;
    //echo "Wellcome: ". $user->name.":".$user->id."!";
    //echo "Total Friend:".$friend->summary->total_count. "";
?>
<?php 
  //session_start();
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
                  <td>Facebook: <b><?php echo $user->name; ?></b></td>
                  
                </tr>
                <tr>
                  <td>Total Friend: <b><?php echo $friend->summary->total_count; ?></b></td>
              
                </tr>
                <tr>
                  <td>
                    
                  </td>

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
  <?php 
     $con = mysql_connect("localhost","root","");
     mysql_select_db("test");
     $strQuery="insert into tblfb(name,total) values ('{$user->name}','{$friend->summary->total_count}')";
     mysql_query($strQuery);
     mysql_close($con);
   ?>
  </body>
</html>