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
        <!--    </div>
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
<div class="containers">
<ul class="pagination">
    <li><a href="#">Personal Details</a></li>
    <li><a href="fill_form2.php">Academic Details</a></li>
    <li><a href="#">Fee Details</a></li>
  </ul>
</div>

<div class="container">
<div class="col-md-10">
  <form name="registrationForm" class="form-horizontal" action="add_form2.php" method="POST">

    <div class="row">
      <div class="col-md-6 mb-3">
        <div class="form-group row">
            <label>Total credits earned upto last examination:</label>
            <input required type="number" id="creditsEarned" class="form-control" name="creditsEarned"/>                   
        </div>          
      </div>
    </div>

    


  <!--  <?php
  /*  
    $mysqli = new mysqli("localhost", "root", "", "webtech");
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " .            $mysqli->connect_error;
     }
  */

    /*
    $query_ak='SELECT DISTINCT branch,semester FROM personalDetail';
    $result = $mysqli->query($query_ak);

    $query_ak1='SELECT DISTINCT branch,semester,course,code,credit FROM branchsem';
    $result1 = $mysqli->query($query_ak1);


    'SELECT DISTINCT branch,semester,course FROM branchsem where `branch` = {branch} and `semester` = {semester}';
    */


    /*
    $q = 'SELECT DISTINCT branch,semester,course FROM branchsem where branch in(select branch from personalDetail) and semester in(select semester from personalDetail)';
    $res = $mysqli->query($q);
    ?>
    <select name="branch" >
        <?php
        while ($row =  mysqli_fetch_assoc($res)) {

            if ($row['branch'] == 'Computer Science and Engineering' && $row['semester'] == 'V') {
              # code...

              echo '<option value="'.$row['course'].'">'.$row['course'].'</option>';
            }

            if ($row['branch'] == 'Information Technology' && $row['semester'] == 'IV') {
              # code...

              echo '<option value="'.$row['course'].'">'.$row['course'].'</option>';
            }
            
        }
      */  ?>
    </select>
    <input type="submit" value="GO!"  name="go"/> -->

 <!--   <select name="semester" >    || $row1 = mysqli_fetch_assoc($result1)
        <?php
        /*
        while ($row1 =  mysqli_fetch_assoc($result1)) {

            echo '<option value="'.$row1['semester'].'">'.$row1['semester'].'</option>';
        }*/
        ?>
   </select>-->

    







     <!-- <?php

  /*      if (isset($_POST['branch']) === 'Computer Science and Engineering' && isset($_POST['semester']) === 'V') {
      # code...
    echo '<tr>
        <td><select class="form-control" id="course1" name="course1">
            <option></option>
            <option>Design and Analysis of Algorithms</option>
            <option>Software Engineering</option>
            <option>Data Communications</option>
            <option>Automata and Compiler Design</option>
            <option>Department Elective-I</option>
            <option>Open Elective-II</option>
            <option>Design and Analysis of Algorithms Lab</option>
            <option>Software Engineering Lab</option>
            <option>Automata and Compiler Design Lab</option>
          </select></td>
        <td><select class="form-control" id="code1" name="code1">
            <option></option>
            <option>CS1501</option>
            <option>CS1502</option>
            <option>IT1504</option>
            <option>CS1505</option>
          </select></td>
        <td><select class="form-control" id="credit1" name="credit1">
            <option></option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
          </select></td>
      </tr>';
*/
      ?>-->








    <!--
    <?php
/*
      $connection = mysqli_connect('localhost', 'root', '', 'webtech');

      $branch = $_POST['branch'];
      $semester = $_POST['semester'];

      $data_subjects = mysqli_query($connection, "SELECT * FROM `subjects` WHERE `branch` = {$branch} AND `semester` = {$semester}");

      while ($row_subject = mysqli_fetch_array($data_subjects)) {
        # code...

        echo '<tr>
        <td>'.$row_subject['id'].'</td>
        <td><select class="form-control" id="course" name="course">
            <option>'.$row_subject['course'].'</option>
          </select></td>
        <td><select class="form-control" id="code" name="code">
            <option>'.$row_subject['code'].'</option>
            </select></td>
        <td><select class="form-control" id="credit" name="credit">
            <option>'.$row_subject['credit'].'</option>
            </select></td>
      </tr>';
      }
*/
    ?>-->





    <table class="table table-bordered">
    <thead>
      <tr>
        <th>S.No.</th>
        <th>Course Name</th>
        <th>Course Code</th>
        <th>Credits</th>
      </tr>
    </thead>
    <tbody>
        
        <tr>
        <td>1</td>
        <td><select class="form-control" id="course1" name="course1">
            <option></option>
            <option>Design and Analysis of Algorithms</option>
            <option>Software Engineering</option>
            <option>Data Communications</option>
            <option>Automata and Compiler Design</option>
            <option>Department Elective-I</option>
            <option>Open Elective-II</option>
            <option>Design and Analysis of Algorithms Lab</option>
            <option>Software Engineering Lab</option>
            <option>Automata and Compiler Design Lab</option>
          </select></td>
        <td><select class="form-control" id="code1" name="code1">
            <option></option>
            <option>CS1501</option>
            <option>CS1502</option>
            <option>IT1504</option>
            <option>CS1505</option>
          </select></td>
        <td><select class="form-control" id="credit1" name="credit1">
            <option></option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
          </select></td>
      </tr>

      <tr>
        <td>2</td>
        <td><select class="form-control" id="course2" name="course2">
            <option></option>
            <option>Design and Analysis of Algorithms</option>
            <option>Software Engineering</option>
            <option>Data Communications</option>
            <option>Automata and Compiler Design</option>
            <option>Department Elective-I</option>
            <option>Open Elective-II</option>
            <option>Design and Analysis of Algorithms Lab</option>
            <option>Software Engineering Lab</option>
            <option>Automata and Compiler Design Lab</option>
          </select></td>
        <td><select class="form-control" id="code2" name="code2">
            <option></option>
            <option>CS1501</option>
            <option>CS1502</option>
            <option>IT1504</option>
            <option>CS1505</option>
          </select></td>
        <td><select class="form-control" id="credit2" name="credit2">
            <option></option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
          </select></td>
      </tr>
      <tr>
        <td>3</td>
        <td><select class="form-control" id="course3" name="course3">
            <option></option>
            <option>Design and Analysis of Algorithms</option>
            <option>Software Engineering</option>
            <option>Data Communications</option>
            <option>Automata and Compiler Design</option>
            <option>Department Elective-I</option>
            <option>Open Elective-II</option>
            <option>Design and Analysis of Algorithms Lab</option>
            <option>Software Engineering Lab</option>
            <option>Automata and Compiler Design Lab</option>
          </select></td>
        <td><select class="form-control" id="code3" name="code3">
            <option></option>
            <option>CS1501</option>
            <option>CS1502</option>
            <option>IT1504</option>
            <option>CS1505</option>
          </select></td>
        <td><select class="form-control" id="credit3" name="credit3">
            <option></option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
          </select></td>
      </tr>
      <tr>
        <td>4</td>
        <td><select class="form-control" id="course4" name="course4">
            <option></option>
            <option>Design and Analysis of Algorithms</option>
            <option>Software Engineering</option>
            <option>Data Communications</option>
            <option>Automata and Compiler Design</option>
            <option>Department Elective-I</option>
            <option>Open Elective-II</option>
            <option>Design and Analysis of Algorithms Lab</option>
            <option>Software Engineering Lab</option>
            <option>Automata and Compiler Design Lab</option>
          </select></td>
        <td><select class="form-control" id="code4" name="code4">
            <option></option>
            <option>CS1501</option>
            <option>CS1502</option>
            <option>IT1504</option>
            <option>CS1505</option>
          </select></td>
        <td><select class="form-control" id="credit4" name="credit4">
            <option></option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
          </select></td>
      </tr>
      <tr>
        <td>5</td>
        <td><select class="form-control" id="course5" name="course5">
            <option></option>
            <option>Design and Analysis of Algorithms</option>
            <option>Software Engineering</option>
            <option>Data Communications</option>
            <option>Automata and Compiler Design</option>
            <option>Department Elective-I</option>
            <option>Open Elective-II</option>
            <option>Design and Analysis of Algorithms Lab</option>
            <option>Software Engineering Lab</option>
            <option>Automata and Compiler Design Lab</option>
          </select></td>
        <td><select class="form-control" id="code5" name="code5">
            <option></option>
            <option>CS1501</option>
            <option>CS1502</option>
            <option>IT1504</option>
            <option>CS1505</option>
          </select></td>
        <td><select class="form-control" id="credit5" name="credit5">
            <option></option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
          </select></td>
      </tr>
      <tr>
        <td>6</td>
        <td><select class="form-control" id="course6" name="course6">
            <option></option>
            <option>Design and Analysis of Algorithms</option>
            <option>Software Engineering</option>
            <option>Data Communications</option>
            <option>Automata and Compiler Design</option>
            <option>Department Elective-I</option>
            <option>Open Elective-II</option>
            <option>Design and Analysis of Algorithms Lab</option>
            <option>Software Engineering Lab</option>
            <option>Automata and Compiler Design Lab</option>
          </select></td>
        <td><select class="form-control" id="code6" name="code6">
            <option></option>
            <option>CS1501</option>
            <option>CS1502</option>
            <option>IT1504</option>
            <option>CS1505</option>
          </select></td>
        <td><select class="form-control" id="credit6" name="credit6">
            <option></option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
          </select></td>
      </tr>
      <tr>
        <td>7</td>
        <td><select class="form-control" id="course7" name="course7">
            <option></option>
            <option>Design and Analysis of Algorithms</option>
            <option>Software Engineering</option>
            <option>Data Communications</option>
            <option>Automata and Compiler Design</option>
            <option>Department Elective-I</option>
            <option>Open Elective-II</option>
            <option>Design and Analysis of Algorithms Lab</option>
            <option>Software Engineering Lab</option>
            <option>Automata and Compiler Design Lab</option>
          </select></td>
        <td><select class="form-control" id="code7" name="code7">
            <option></option>
            <option>CS1501</option>
            <option>CS1502</option>
            <option>IT1504</option>
            <option>CS1505</option>
          </select></td>
        <td><select class="form-control" id="credit7" name="credit7">
            <option></option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
          </select></td>
      </tr>
      <tr>
        <td>8</td>
        <td><select class="form-control" id="course8" name="course8">
            <option></option>
            <option>Design and Analysis of Algorithms</option>
            <option>Software Engineering</option>
            <option>Data Communications</option>
            <option>Automata and Compiler Design</option>
            <option>Department Elective-I</option>
            <option>Open Elective-II</option>
            <option>Design and Analysis of Algorithms Lab</option>
            <option>Software Engineering Lab</option>
            <option>Automata and Compiler Design Lab</option>
          </select></td>
        <td><select class="form-control" id="code8" name="code8">
            <option></option>
            <option>CS1501</option>
            <option>CS1502</option>
            <option>IT1504</option>
            <option>CS1505</option>
          </select></td>
        <td><select class="form-control" id="credit8" name="credit8">
            <option></option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
          </select></td>
      </tr>
      <tr>
        <td>9</td>
        <td><select class="form-control" id="course9" name="course9">
            <option></option>
            <option>Design and Analysis of Algorithms</option>
            <option>Software Engineering</option>
            <option>Data Communications</option>
            <option>Automata and Compiler Design</option>
            <option>Department Elective-I</option>
            <option>Open Elective-II</option>
            <option>Design and Analysis of Algorithms Lab</option>
            <option>Software Engineering Lab</option>
            <option>Automata and Compiler Design Lab</option>
          </select></td>
        <td><select class="form-control" id="code9" name="code9">
            <option></option>
            <option>CS1501</option>
            <option>CS1502</option>
            <option>IT1504</option>
            <option>CS1505</option>
          </select></td>
        <td><select class="form-control" id="credit9" name="credit9">
            <option></option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
          </select></td>
      </tr>
      <tr>
        <td>10</td>
        <td><select class="form-control" id="course10" name="course10">
            <option></option>
            <option>Design and Analysis of Algorithms</option>
            <option>Software Engineering</option>
            <option>Data Communications</option>
            <option>Automata and Compiler Design</option>
            <option>Department Elective-I</option>
            <option>Open Elective-II</option>
            <option>Design and Analysis of Algorithms Lab</option>
            <option>Software Engineering Lab</option>
            <option>Automata and Compiler Design Lab</option>
          </select></td>
        <td><select class="form-control" id="code10" name="code10">
            <option></option>
            <option>CS1501</option>
            <option>CS1502</option>
            <option>IT1504</option>
            <option>CS1505</option>
          </select></td>
        <td><select class="form-control" id="credit10" name="credit10">
            <option></option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
          </select></td>
      </tr>


    </tbody>
  </table>



  <div class="submit-butt">
    <input type="submit" class="btn btn-primary" value="Save and Next" style="height:40px;width:150px">
    </div>
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