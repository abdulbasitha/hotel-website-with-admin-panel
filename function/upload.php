<?php
include_once('database.php');
date_default_timezone_set('Asia/Kolkata');
session_start();
$conn=connection();
	if(!$conn){
	$_SESSION['alert_type']='w3-panel w3-red w3-display-container';
	$_SESSION['alert_typeclass']='w3-button w3-red w3-large w3-display-topright';
	$_SESSION['alert_msg']='Something Went Wrong Please Try Again';
	$_SESSION['alert_typei']='Error';
	header('location:../admin/dashboard/add_photo.php');
	}
	else
	{
$cat=strtolower($_POST['category']);
$file="images/".basename($_FILES['image']['name']);
$image=$_FILES['image']['name'];
$file_size = $_FILES['image']['size'];
$imageMimeTypes = array(
    'image/png',
    'image/gif',
    'image/jpeg');
    $fileMimeType = mime_content_type($_FILES['image']['tmp_name']);
    $ex=in_array($fileMimeType, $imageMimeTypes);
		
   if($ex==0){

			
	$_SESSION['alert_type']='w3-panel w3-red w3-display-container';
	$_SESSION['alert_typeclass']='w3-button w3-red w3-large w3-display-topright';
	$_SESSION['alert_msg']='Uploaded File Is Not A Valid Image';
	$_SESSION['alert_typei']='Error';
	header('location:../admin/dashboard/add_photo.php');
	}
elseif($file_size>=300000)
	{
	$_SESSION['alert_type']='w3-panel w3-red w3-display-container';
	$_SESSION['alert_typeclass']='w3-button w3-red w3-large w3-display-topright';
	$_SESSION['alert_msg']='The File Is Too Big(Max:300kb)';
	$_SESSION['alert_typei']='Error';
	header('location:../admin/dashboard/add_photo.php');
	}
	else
	{
		$submit= mysqli_query($conn,"INSERT INTO `images` (`id`, `cat`, `image`, `date`) VALUES (NULL, '$cat', '$image', now());");
		$move=move_uploaded_file($_FILES['image']['tmp_name'],$file);
		if(($submit==true)&&($move==true)){

			$_SESSION['alert_type']='w3-panel w3-green w3-display-container';
			$_SESSION['alert_typeclass']='w3-button w3-green w3-large w3-display-topright';
			$_SESSION['alert_msg']='Image Uploaded Successfully';
			$_SESSION['alert_typei']='Success!';
			header('location:../admin/dashboard/add_photo.php');
		}
		else
		{
			$_SESSION['alert_type']='w3-panel w3-red w3-display-container';
			$_SESSION['alert_typeclass']='w3-button w3-red w3-large w3-display-topright';
			$_SESSION['alert_msg']='Something Went Wrong Please Try Again';
			$_SESSION['alert_typei']='Error';
			header('location:../admin/dashboard/add_photo.php');
		}

	}
	}

/*

if(move_uploaded_file($_FILES['image']['tmp_name'],$file))
	echo "yes";*/



?>