<?php

include_once('database.php');
date_default_timezone_set('Asia/Kolkata');
session_start();
$conn=connection();
$re_name=$_POST['resortname'];
$phno=$_POST['phone'];
$email=$_POST['email'];
$fb=$_POST['fbid'];
$inta=$_POST['instaid'];
$whats=$_POST['whatsappid'];
$address=$_POST['address'];
$about=$_POST['about'];
$feture=$_POST['features'];
	if(!$conn){
		$_SESSION['alert_type']='w3-panel w3-red w3-display-container';
	$_SESSION['alert_typeclass']='w3-button w3-red w3-large w3-display-topright';
	$_SESSION['alert_msg']='Something Went Wrong Please Try Again';
	$_SESSION['alert_typei']='Error';
	header('location:../admin/dashboard/profile.php');
	}
	else{
			$submit=mysqli_query($conn,"UPDATE `profile` SET `resort_name` = '$re_name', `resort_phno` = '$phno', `resort_email` = '$email', `resort_fb` = '$fb', `resort_insta` = '$inta', `resort_whatsapp` = '$whats', `resort_address` = '$address', `resort_about` = '$about', `resort_features` = '$feture' WHERE `profile`.`id` = 1;");
				if($submit==true){
					$_SESSION['alert_type']='w3-panel w3-green w3-display-container';
					$_SESSION['alert_typeclass']='w3-button w3-green w3-large w3-display-topright';
					$_SESSION['alert_msg']='Record Updated Successfully';
					$_SESSION['alert_typei']='Success!';
					header('location:../admin/dashboard/profile.php');
				}
				else{
					$_SESSION['alert_type']='w3-panel w3-red w3-display-container';
					$_SESSION['alert_typeclass']='w3-button w3-red w3-large w3-display-topright';
					$_SESSION['alert_msg']='Something Went Wrong Please Try Again(#P035)';
					$_SESSION['alert_typei']='Error';
					header('location:../admin/dashboard/profile.php');
				}
	}







?>