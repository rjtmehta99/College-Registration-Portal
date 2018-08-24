<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Web Tech Project
	</title>

	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
    <!-- <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/sweetalert.css">
    <script src="js/sweetalert-dev.js"></script>
  	<script>
  		function validateForm() 
  		{
 		   var x = document.forms["signUpForm"]["email"].value;
    		var atpos = x.indexOf("@");
    		var dotpos = x.lastIndexOf(".");
    		if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) 
    		{
        	sweetalert("Not a valid e-mail address");
            return false;
   			 }
		}
   	</script>
</head>
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
    	left: 150px;
    	width: 100%;
    }

</style>
<body>		
   		
   	<div class="container">
   	<div>
		<div class="jumbotron">
			<h1 id="header" class="text-center" >Sign-Up Here!</h1>
		</div>
		<div class="row">
			<div class="col-md-4">				
		</div>
			<div class="col-md-4">
				<form name="signUpForm" action="add_user.php" onsubmit="return validateForm();"  method="POST">
					<div class="form-group">
						<label for="name">Username</label>
						<div class="input-group">
						<div class="input-group-addon">
							<i class="input-group-addon fa fa-user-circle" data-toggle="tooltip" data-placement="auto" title="Enter the Username you want" style="width: 39px"></i>
						</div>		
						<input required type="text" id="name" class="form-control" name="username" style="height: 40px" />
					</div>
					</div>					
				<div class="form-group">
					<label for="email">Email</label>
					<div class="input-group">
						<div class="input-group-addon">
							<i class="input-group-addon glyphicon glyphicon-envelope" data-toggle="tooltip" data-placement="auto" title="Enter your email id"></i>
						</div>	
				 		<input required type="email" id="email" class="form-control" name="email" style="height: 40px" />
				 	</div>
				</div>	 
					<!--<div class="form-group">
						<label for="email">Email</label>
						<input required type="text" id="email" class="form-control" name="email"/>
					</div> -->
					
					<div class="form-group">
						<label for="password">Password</label>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="input-group-addon glyphicon glyphicon-lock" data-toggle="tooltip" data-placement="auto" title="Enter your password"></i>
								</div>	
				 				<input required type="password" id="password" class="form-control" name="password" style="height: 40px" />
				 			</div>		
					</div>

					
					<!--<div class="form-group">
						<label for="Passwordd">Password</label>
						<input required type="password" id="password" class="form-control" name="password"/>
					</div> -->
					<div class="form-group">
						<div class="centered">
							<!--<input type="submit" class="btn btn-danger form-control" value="Submit"> -->
							<button class="btn btn-default btn-md" type="submit">

								<div class="col-md-1" >
									<i class="glyphicon glyphicon-send" data-toggle="tooltip" data-placement="auto" title="Submit Data"></i>
								</div>	
							</button>			
						</div>
					</div>
					<br>			
					<!--<div class="col-md-4"> -->
						<div class="form-group" style="text-align: center;" >
							<p><br>Already have an account? <a href="signIn.php">Sign In</a></p>
						</div>
						
				</form>
			</div>
			
		</div>
	</div>
	</div>
	<?php 
		if(isset($_SESSION['message'])){
			echo "<script>sweetAlert('".$_SESSION['message']."');</script>";
			unset($_SESSION['message']);
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
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>
</body>
</html>