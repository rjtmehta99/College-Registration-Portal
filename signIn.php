<?php
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>
    Web Tech Project
  </title>
</head>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
<script src="js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/sweetalert.css">
<script src="js/sweetalert-dev.js"></script> 
<style type="text/css">
  body
  {
     background-color: lightgrey;
     font-family: 'Inconsolata', monospace;
     font-size: 20px;
    }

    .centered
    {
      position: absolute;
      left: 350px;
      width: 100%;
    }
</style>
<body>

<div class="container">
    <div class="jumbotron">
      <h1 id="header" class="text-center" style="font-size: 70px" >MUJ Registration Form</h1>
    </div>
    <div class="row">
      <div class="col-md-4">
    </div>
</div>

<div class="col-md-4" align="center" class="container">
 <div class="centered">
  
    <form name="loginForm" action="verify_user.php" method="POST" >
      <div class="form-group">

        <label for="email">Email</label>
        <div class="input-group">
          <div class="input-group-addon">
            <i class="input-group-addon glyphicon glyphicon-envelope" data-toggle="tooltip" data-placement="auto" title="Enter the provided email"></i>
          </div>  
          <input required type="text" id="email" class="form-control" name="email" style="height: 40px" />
         </div>
      </div>   

      <div class="form-group">
        <label for="password">Password</label>
        <div class="input-group">
          <div class="input-group-addon">
            <i class="input-group-addon glyphicon glyphicon-lock" data-toggle="tooltip" data-placement="auto" title="Enter the provided password"></i>
          </div>  
          <input required type="password" id="password" class="form-control" name="password" style="height: 40px" />
         </div>   
      </div>

      <div class="form-group" >
        <input type="submit" class="btn btn-danger form-control" value="Login" style="height: 40px">
      </div>

      <div class="form-group" style="text-align: center;">
        <p>Do not have an account? <a href="signup.php">SignUp</a></p>
      </div>

    </form>
    
</div>
</div>
</div>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>

<?php 
    if(isset($_SESSION['message'])){
      echo "<script>sweetAlert('".$_SESSION['message']."');</script>";
        unset($_SESSION['message']);
      //session_destroy();
    }
  ?>
  <footer class="footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
              <p class="text-primary">MUJ Registration Form</p>
            </div>
            <div class="col-md-6" style="color: red" >
               Made With  
              <i class="fa fa-heart" aria-hidden="true" style="color: red"></i>
              <p class="text-primary" style="float: right;">Version 1.0</p>
            </div>
          </div>
        </div>
    </footer>
    
</body>
</html>