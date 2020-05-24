<!DOCTYPE html>
<html>
<html class="no-js" lang="en">
<head>
   <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login | Automatic Time Table Generator BY NGPR</title>
    <meta name="description" content="">
     <meta http-equiv='content-type' content='text/html;charset=utf-8' />
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	 
   </head>
<body style="background-color: darkslategray">
  
  <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
            <div class="col-md-4 col-md-4 col-sm-4 col-xs-12">
                <div class="text-center m-b-md custom-login">
    <h3 class="text-center" style="color:white">Admin Login</h3>
	</div>
    <?php
      if(isset($_POST['submit'])){
        $username = $_POST['username']; $password = $_POST['password'];
        if($username === 'admin' && $password === 'password'){
          session_start();
		  $_SESSION["login"] = true; 
		  header('LOCATION:all_department_tt.php'); 
		  die();
        } {
          echo "<div class='alert alert-danger'>Username and Password do not match.</div>";
        }

      }
    ?>
	<div class="hpanel">
	<div class="panel-body">
    <form action="" method="post">
      <div class="form-group">
        <label style="color:white" for="username">Username:</label>
        <input type="text" class="form-control" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label style="color:white" for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" name="password" required>
      </div>
      <button type="submit" style="background-color:orangered" name="submit" class="btn btn-default btn-block"  href="" >Login</button>
      <button type="button" style="background-color:Lightgrey" name="userlogin" class="btn btn-default btn-block"  onclick="window.location.href='login.php'"> Goto User Login</button>
    </form>
  </div>
  </div>
  </div>
   <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
 </div>
 </div>
</body>
</html>