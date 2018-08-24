<?php

	session_start();
	
	require_once "config.php";

	$studentName=$_POST['studentName'];

	$registrationNumber=$_POST['registrationNumber'];

	$fatherName=$_POST['fatherName'];

	$motherName=$_POST['motherName'];

	$selfNumber=$_POST['selfNumber'];

	$parentNumber=$_POST['parentNumber'];


	if (isset($_POST['program'])){
    	$program = $_POST['program'];
	}

	else {$program = '';}

	if (isset($_POST['branch'])){
    	$branch = $_POST['branch'];
	}

	else {$branch = '';}

	if (isset($_POST['semester'])){
    	$semester = $_POST['semester'];
	}

	else {$semester = '';}

	if (isset($_POST['section'])){
    	$section = $_POST['section'];
	}

	else {$section = '';}


	/* $address=$_POST['address'];

	$country=$_POST['country'];

	$state=$_POST['state'];

	$city=$_POST['city'];

	$zip=$_POST['zip']; */
	

	/*$program= (isset($_POST['program'])) ? $_POST['program'] : '';

	$branch= (isset($_POST['branch'])) ? $_POST['branch'] : '';

	$semester= (isset($_POST['semester'])) ? $_POST['semester'] : '';

	$section= (isset($_POST['section'])) ? $_POST['section'] : ''; */

	$sql="INSERT INTO `personalDetail` (`studentName`, `registrationNumber`, `fatherName`, `motherName`, `selfNumber`, `parentNumber`, `program`, `branch`, `semester`, `section`) values ('".$studentName."', '".$registrationNumber."', '".$fatherName."', '".$motherName."', '".$selfNumber."', '".$parentNumber."', '".$program."', '".$branch."', '".$semester."', '".$section."')";

	$mysql->query($sql); //Send a MySQL query

	//$_SESSION['message']='Details Added Successfully!';

	header("Location:fill_form2.php"); //Changes to be made here

?>