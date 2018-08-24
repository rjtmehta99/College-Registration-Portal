<?php
	session_start(); 
	#require_once "config.php";

	$link=mysqli_connect('localhost', 'root', '', 'webtech');

	if(mysqli_connect_error())
	{
		die ("Error");
	}


$query = "TRUNCATE TABLE academicdetail";

if($result = mysqli_query($link, $query))
{
	echo "DONE";
	header("Location:adminDashboard.php");	
}

	
#mysqli_query($query);
#$query = "TRUNCATE TABLE academicdetail";

#if ($result = mysqli_query($query))
 #{
#	header("Location:adminDashboard.php");	
 #}

	
	
	


?>