<?php
	session_start();
	
	require_once "config.php";

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileupload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);


// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "pdf" && $imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "JPEG"
&& $imageFileType != "PDF") {
    
	$_SESSION['message']='Sorry, only JPG, JPEG, PNG & PDF files are allowed.';
	header("Location:fill_form3.php");
    $uploadOk = 0;
}


// Check if image file is a actual image or fake image
/*else
{
	if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileupload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
}*/


$target_dir_pic = "uploads/";
$target_file_pic = $target_dir_pic . basename($_FILES["pic"]["name"]);
$uploadOkpic = 1;
$imageFileTypePic = pathinfo($target_file_pic,PATHINFO_EXTENSION);

/*if($imageFileTypePic != "jpg" && $imageFileTypePic != "png" && $imageFileTypePic != "jpeg"
&& $imageFileTypePic != "JPG" && $imageFileTypePic != "PNG" && $imageFileTypePic != "JPEG") {
    
	$_SESSION['message']='Sorry, only JPG, JPEG & PNG files are allowed.';
	header("Location:fill_form3.php");
    $uploadOkpic = 0;
}*/


$target_dir_sign = "uploads/";
$target_file_sign = $target_dir_sign . basename($_FILES["sign"]["name"]);
$uploadOksign = 1;
$imageFileTypeSign = pathinfo($target_file_sign,PATHINFO_EXTENSION);


$_SESSION['message']='Form Submitted Successfully!';
header("Location:dashboard.php");
?>