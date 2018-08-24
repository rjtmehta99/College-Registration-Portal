<?php 
  session_start();
  if(!isset($_SESSION['username']) || empty($_SESSION['username'])) 
  {
    header('location:index.php');
    exit;
  }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Web Tech Project</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/form.css">
  <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
  <!-- <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
  <script src="js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/sweetalert.css">
  <script src="js/sweetalert-dev.js"></script>
</head>

<body>
    
    <nav class="navbar navbar-inverse navbar-fixed-top bg-primary">
      <div class="container-fluid"> 
        <!--<div class="row">
          <div class="col-md-2">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <!-- the class="navbar-toggle" is used to get the styles. Data-toggle="collapse" attribute is used to control the show and hide. The data-target = "#id" attribute is used to connect the button with the collapsible div. Icon-bar is used to create a button with three horizontal lines. This button is displayed when the screen width is small -->
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
                <!--<a href="dashboard.php"><img src="images/MUJ.jpg" class="navbar-brand" alt="logoR" height=200px width=250px></a> -->              
                <ul class = "nav navbar-nav">
                <li><a href="dashboard.php">Home</a></li>
                <li><a href="#" data-toggle="modal" data-target="#myModal">Instructions</a></li>
                </ul>               
            <!--</div>
        </div>-->
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
<br><br>
<div class="containerx" >
<ul class="pagination">
    <li><a href="fill_form.php">Personal Details</a></li>
    <li><a href="#">Academic Details</a></li>
    <li><a href="#">Fee Details</a></li>
  </ul>
</div>
<div class="container">
<div class="col-md-8">
  <form name="registrationForm" class="form-horizontal" action="add_form.php" method="POST">
    <div class="row">
      <div class="col-md-6 mb-3">
        <div class="form-group row">
            <label>Name of the student:</label>
            <input required type="text" id="studentName" class="form-control" name="studentName"/>                   
        </div>          
      </div>
      <div class="col-md-6 mb-3">
        <div class="form-group">
              <label for="registrationNumber">Registration Number:</label>
          <input required type="number" id="registrationNumber" class="form-control" name="registrationNumber" />        
        </div>     
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-6 mb-3">
        <div class="form-group"> 
          <label>Name of Parents:</label> 
              <div class="form-group">
                <label for="fatherName">Father's Name:</label>
                <input required type="text" id="fatherName" class="form-control" name="fatherName" />  
              </div>
              
              <div class="form-group">
                <label for="motherName">Mother's Name:</label>
                <input required type="text" id="motherName" class="form-control" name="motherName" />  
              </div>   
          
        </div>
      </div>
      <div class="col-md-6 mb-3">
      <div class="form-group">
            <label>Mobile Number:</label> 
    
              <div class="form-group">
                <label for="selfNumber">Self:</label>
                <input required type="number" id="selfNumber" class="form-control" name="selfNumber"/>  
              </div>
                  <div class="form-group">
                <label for="parentNumber">Parent's:</label>
                <input required type="number" id="parentNumber" class="form-control" name="parentNumber" />  
              </div>
           </div>     
    </div>
  </div>

  <div class="row">
      <div class="col-md-6 mb-3">  
      <div class="form-group">
        <label for="program" name="program">Program:</label>
          <select class="form-control" id="program" name="program">
            <option>B. Tech.</option>
            <option>B. Arch.</option>
            <option>B. A.</option>
            <option>B. L. A.</option>
            <option>B. P. E. S.</option>
            <option>B. Sc. (Hons)</option>
            <option>B. Sc. (Pass)</option>
            <option>B. B. A.</option>
            <option>B. Comm.</option>
            <option>B. C. A.</option>
            <option>M. B. A.</option>
            <option>B. H. M.</option>
            <option>B. A. (J and MC)</option>
            <option>L. L. B.</option>
            <option>B. A. (LLB)</option>
            <option>B. Des.(Fashion Design)</option>
            <option>B. Des.(Applied Arts)</option>
            <option>B. Des.(Interior Design)</option>
            <option>B. Des.(Jewellery Design)</option>
          </select>
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <div class="form-group">
        <label for="branch" name="branch">Branch:</label>
          <select class="form-control" id="branch" name="branch">
            <option>None</option>
            <option>Automobile Engineering</option>
            <option>Chemical Engineering</option>
            <option>Civil Engineering</option>
            <option>Computer and Communication Engineering</option>
            <option>Computer Science and Engineering</option>
            <option>Electrical Engineering</option>
            <option>Electronics and Communication Engineering</option>
            <option>Information Technology</option>
            <option>Mechanical Engineering</option>
            <option>Mechatronics Engineering</option>
          </select>
      </div>
    </div>
  </div>

<div class="row">
      <div class="col-md-6 mb-3">  
       <div class="form-group">
        <label for="semester" name="semester">Semester:</label>   
          <select class="form-control" id="semester" name="semester">
            <option>I</option>
            <option>II</option>
            <option>III</option>
            <option>IV</option>
            <option>V</option>
            <option>VI</option>
            <option>VII</option>
            <option>VIII</option>
          </select>
      </div>
    </div>
    <div class="col-md-6 mb-3"> 
      <div class="form-group">
        <label for="section" name="section">Section:</label>
          <select class="form-control" id="section" name="section">
            <option>A</option>
            <option>B</option>
            <option>C</option>
            <option>D</option>
          </select>
      </div>
    </div>
  </div>

  <div class="submit-button">
    <input type="submit" class="btn btn-primary" value="Save and Next" style="height:40px;width:150px">
  </div>

<!--    
  <div class="row">
      <div class="col-md-6 mb-3">
        <div class="form-group row">
            <label>Address:</label>
            <textarea required type="text" id="address" class="form-control" name="address"></textarea>                   
        </div>          
      </div>
      <div class="col-md-6 mb-3">
        <div class="form-group">
              <label>Country:</label>
          <input required type="text" id="country" class="form-control" name="country" />        
        </div>     
      </div>
    </div>
    <div class="row">
      <div class="col-md-5 mb-3">
        <div class="form-group row">
            <label>State:</label>
            <input required type="text" id="state" class="form-control" name="state" />                   
        </div>          
      </div>
      <div class="col-md-4 mb-3">
        <div class="form-group">
              <label>City:</label>
          <input required type="text" id="city" class="form-control" name="city" />        
        </div>     
      </div>
      <div class="col-md-3 mb-3">
        <div class="form-group">
              <label>Zip Code:</label>
          <input required type="number" id="zip" class="form-control" name="zip" />        
        </div>     
      </div>
    </div>-->
    
</form>
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