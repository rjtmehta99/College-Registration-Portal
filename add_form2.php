<?php

	session_start();
	
	require_once "config.php";

	
	$creditsEarned=$_POST['creditsEarned'];


		

	if (isset($_POST['course1'])){
    	$course1 = $_POST['course1'];
	}

	else {$course1 = '';}


	if (isset($_POST['code1'])){
    	$code1 = $_POST['code1'];
	}

	else {$code1 = '';}


	if (isset($_POST['credit1'])){
    	$credit1 = $_POST['credit1'];
	}

	else {$credit1 = '';}




	if (isset($_POST['course2'])){
    	$course2 = $_POST['course2'];
	}

	else {$course2 = '';}

	if (isset($_POST['code2'])){
    	$code2 = $_POST['code2'];
	}

	else {$code2 = '';}


	if (isset($_POST['credit2'])){
    	$credit2 = $_POST['credit2'];
	}

	else {$credit2 = '';}




	if (isset($_POST['course3'])){
    	$course3 = $_POST['course3'];
	}

	else {$course3 = '';}

	if (isset($_POST['code3'])){
    	$code3 = $_POST['code3'];
	}

	else {$code3 = '';}


	if (isset($_POST['credit3'])){
    	$credit3 = $_POST['credit3'];
	}

	else {$credit3 = '';}




	if (isset($_POST['course4'])){
    	$course4 = $_POST['course4'];
	}

	else {$course4 = '';}

	if (isset($_POST['code4'])){
    	$code4 = $_POST['code4'];
	}

	else {$code4 = '';}


	if (isset($_POST['credit4'])){
    	$credit4 = $_POST['credit4'];
	}

	else {$credit4 = '';}




	if (isset($_POST['course5'])){
    	$course5 = $_POST['course5'];
	}

	else {$course5 = '';}

	if (isset($_POST['code5'])){
    	$code5 = $_POST['code5'];
	}

	else {$code5 = '';}


	if (isset($_POST['credit5'])){
    	$credit5 = $_POST['credit5'];
	}

	else {$credit5 = '';}




	if (isset($_POST['course6'])){
    	$course6 = $_POST['course6'];
	}

	else {$course6 = '';}

	if (isset($_POST['code6'])){
    	$code6 = $_POST['code6'];
	}

	else {$code6 = '';}


	if (isset($_POST['credit6'])){
    	$credit6 = $_POST['credit6'];
	}

	else {$credit6 = '';}




	if (isset($_POST['course7'])){
    	$course7 = $_POST['course7'];
	}

	else {$course7 = '';}

	if (isset($_POST['code7'])){
    	$code7 = $_POST['code7'];
	}

	else {$code7 = '';}


	if (isset($_POST['credit7'])){
    	$credit7 = $_POST['credit7'];
	}

	else {$credit7 = '';}




	if (isset($_POST['course8'])){
    	$course8 = $_POST['course8'];
	}

	else {$course8 = '';}

	if (isset($_POST['code8'])){
    	$code8 = $_POST['code8'];
	}

	else {$code8 = '';}


	if (isset($_POST['credit8'])){
    	$credit8 = $_POST['credit8'];
	}

	else {$credit8 = '';}




	if (isset($_POST['course9'])){
    	$course9 = $_POST['course9'];
	}

	else {$course9 = '';}

	if (isset($_POST['code9'])){
    	$code9 = $_POST['code9'];
	}

	else {$code9 = '';}


	if (isset($_POST['credit9'])){
    	$credit9 = $_POST['credit9'];
	}

	else {$credit9 = '';}




	if (isset($_POST['course10'])){
    	$course10 = $_POST['course10'];
	}

	else {$course10 = '';}

	if (isset($_POST['code10'])){
    	$code10 = $_POST['code10'];
	}

	else {$code10 = '';}


	if (isset($_POST['credit10'])){
    	$credit10 = $_POST['credit10'];
	}

	else {$credit10 = '';}


	if ($creditsEarned >=75 && (($credit1+$credit2+$credit3+$credit4+$credit5+$credit6+$credit7+$credit8+$credit9+$credit10)>=20)) {
		

	$sql="INSERT INTO `academicDetail` (`creditsEarned`, `course1`, `code1`, `credit1`, `course2`, `code2`, `credit2`, `course3`, `code3`, `credit3`, `course4`, `code4`, `credit4`, `course5`, `code5`, `credit5`, `course6`, `code6`, `credit6`, `course7`, `code7`, `credit7`, `course8`, `code8`, `credit8`, `course9`, `code9`, `credit9`, `course10`, `code10`, `credit10`) values ('".$creditsEarned."', '".$course1."', '".$code1."', '".$credit1."', '".$course2."', '".$code2."', '".$credit2."', '".$course3."', '".$code3."', '".$credit3."', '".$course4."', '".$code4."', '".$credit4."', '".$course5."', '".$code5."', '".$credit5."', '".$course6."', '".$code6."', '".$credit6."', '".$course7."', '".$code7."', '".$credit7."', '".$course8."', '".$code8."', '".$credit8."', '".$course9."', '".$code9."', '".$credit9."', '".$course10."', '".$code10."', '".$credit10."')";

	$mysql->query($sql); //Send a MySQL query

	header("Location:fill_form3.php"); //Changes to be made here
}

	else {

		$_SESSION['message']='Credits are not sufficient to register!';

		header("Location:fill_form2.php");
	}

	//$_SESSION['message']='Details Added Successfully!';
	
?>