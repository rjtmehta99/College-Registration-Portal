<?php
	session_start(); 
	

	$link=mysqli_connect('localhost', 'root', '', 'webtech');

	if(mysqli_connect_error())
	{
		die ("Error");
	}


$query = "TRUNCATE TABLE personaldetail";

if($result = mysqli_query($link, $query))
{
	echo "DONE";
	header("Location:adminDashboard.php");	
}	


?>