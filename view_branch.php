<?php
	session_start(); 
	#require_once "config.php";

	$link=mysqli_connect('localhost', 'root', '', 'webtech');

	if(mysqli_connect_error())
	{
		die ("Error");
	}


$query = "SELECT * FROM personaldetail ORDER BY branch";

if($result = mysqli_query($link, $query))
{
	while($row = mysqli_fetch_array($result))
	{
		echo '<pre>';
		var_export($row); 
		echo '</pre>';
		echo "\n\n";
	}
}

	
#mysqli_query($query);
#$query = "TRUNCATE TABLE academicdetail";

#if ($result = mysqli_query($query))
 #{
#	header("Location:adminDashboard.php");	
 #}
?>