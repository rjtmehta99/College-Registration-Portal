<?php 
  session_start();
  if(!isset($_SESSION['username']) || empty($_SESSION['username'])) {
    header('location:index.php');
    exit;
  }
?>

<!DOCTYPE html>
<html class>
<head>
	<title>Project</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
  <!-- <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
  <script src="js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/sweetalert.css">
  <script src="js/sweetalert-dev.js"></script>
</head>
<style type="text/css">
  body
  {
    background-color: lightgrey;
    font-family: 'Inconsolata', monospace;
    font-size: 19px;
  }

  .centered
  {
    margin-top: 270px;
    margin-bottom: 100px;
    margin-left: 350px;
  }

</style>
<body>
    
    <nav class="navbar navbar-inverse navbar-fixed-top bg-primary">
      <div class="container-fluid"> 
    		<div class="row">
      		<div class="col-md-2">
	        	<div class="navbar-header">
		          	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <!-- the class="navbar-toggle" is used to get the styles. Data-toggle="collapse" attribute is used to control the show and hide. The data-target = "#id" attribute is used to connect the button with the collapsible div. Icon-bar is used to create a button with three horizontal lines. This button is displayed when the screen width is small -->
			            <span class="sr-only">Toggle navigation</span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			        </button>
		          	<a href="dashboard.php"><img src="images/MUJ.jpg" class="navbar-brand" alt="logoR" width=230px></a>
		          	<ul class="nav navbar-nav">
          				<li><a href="dashboard.php">Home</a></li>
                  <li><a href="#" data-toggle="modal" data-target="#myModal">Instructions</a></li>
                  </ul>          			
		        </div>
		    </div>
        <div class="col-md-6"></div>
		    <div class="col-md-4">
				<div id="navbar" class="collapse navbar-collapse">
        				<ul class="nav navbar-nav">
          				<li class="dropdown">
            					<button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                      <a href="#" role="button" aria-haspopup="true" aria-expanded="false">Signed in as: <?php echo $_SESSION['username']; ?> <span class="caret"></span></a></button>
            					<ul class="dropdown-menu">
              					<li><a href="contact_admin.php">Contact Admin</a></li>
              					<li><a href="#">View Form</a></li>
                        <li class="divider"></li>
              					<li><a href="logout.php">Logout</a></li>
            					</ul>
          				</li>
        				</ul>
      	</div>
		    </div>
      	</div> 
    	</div>
      
    </nav>
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <!-- Modal content-->
        <div class="modal-content">

          <div class="modal-header">

            <!--<button type="button" class="close" data-dismiss="modal">&times;</button> -->
            <h3 class="modal-title" style="font-weight: bold">Instructions while filling form: </h3>
          
          </div>

        <div class="modal-body">

          <ol class="list-group">

          <li class="list-group-item">Please fill all the details carefully.</li>
          <li class="list-group-item list-group-item-info">Fee should be paid before filling form or else registration will not be considered.</li>
          <li class="list-group-item">Please confirm the number of credits earned till last semester from your respective academic departments.</li>
          <li class="list-group-item list-group-item-info">Attach your photograph and signature of the specified dimensions only.</li>
          <li class="list-group-item">If any doubt or discrepancy, please contact your respective Teacher Co-Ordinators.</li>
          <li class="list-group-item list-group-item-info">The last date to fill the form is <strong><em>15-01-2018</em></strong>.</li>

            
          </ol>

        </div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="font-weight: bold;">Close</button>
        </div>

        </div>                      
    </div>
</div>

    <div class="container">
    <div class="centered">
    <a href="fill_form.php" type="button" class="btn btn-primary" style="font-size: 40px" data-toggle="tooltip" data-placement="auto" title="Click to fill registration form">Fill Registration Form</a>
    <br><br>
    <a href="#" type="button" class="btn btn-success" style="font-size: 40px"data-toggle="tooltip" data-placement="auto" title="Click to view the filled registration form">View Registration Form</a>
    </div>
    </div>
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
    <?php 
      if(isset($_SESSION['message']))
      {
        echo "<script>sweetAlert('".$_SESSION['message']."');</script>";
        unset($_SESSION['message']);
      }
    ?>
    <script>
      $(document).ready(function()
      {
        $('[data-toggle="tooltip"]').tooltip();   
      });
    </script>
</body>
</html>