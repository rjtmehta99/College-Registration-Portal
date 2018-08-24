<?php
	session_start(); 
	require_once "config.php";

	$email=$_POST['email'];
	$password=$_POST['password'];

	$sql="SELECT * from `users` WHERE `email`='".$email."' AND `password`='".$password."'";

	//Result set which contains methods for fetching data
	$result=$mysql->query($sql);

	//Actual user from database
	$user=$result->fetch_row();

	//Validating User
	if($user && $user[2] == 'admin' && $user[3] == 'admin')
	{
		//User Found
		//From user object from database
		$_SESSION['username']= $user[1];
		$_SESSION['email']=$user[2];
		$_SESSION['user_id']=$user[0];
		//$_SESSION['message']='You Have Logged In!' ;
		header("Location:adminDashboard.php");
	}

	else if($user)
	{
		//User Found
		//From user object from database
		$_SESSION['username']= $user[1];
		$_SESSION['email']=$user[2];
		$_SESSION['user_id']=$user[0];
		//$_SESSION['message']='You Have Logged In!' ;
		header("Location:dashboard.php");
	}
	else
	{
		//User not found
		$_SESSION['message']='Either Email Or Password Is Incorrect !';
		header("Location:signIn.php");
	}
?>