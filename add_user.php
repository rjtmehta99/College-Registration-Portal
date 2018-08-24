<?php 
	session_start();
	
	require_once "config.php";

	$email=$_POST['email'];

	$username=$_POST['username'];

	$password=$_POST['password'];

	$sql="INSERT INTO `users` (`username`, `email`, `password`) values ('".$username."', '".$email."', '".$password."')";

	$mysql->query($sql); //Send a MySQL query

	$_SESSION['message']='User Added Successfully!';

	header("Location:signIn.php"); //Changes to be made here
?>