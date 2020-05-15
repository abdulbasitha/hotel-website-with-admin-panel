<?php

include_once('database.php');
date_default_timezone_set('Asia/Kolkata');
session_start();
$conn=connection();
$id=$_GET['id'];
$name=strtolower($_POST['roomname']);
$price=$_POST['price'];
$type=strtolower($_POST['type']);
$quantity=$_POST['quantity'];
$description=$_POST['description'];

if(!$conn){
	$_SESSION['alert_type']='w3-panel w3-red w3-display-container';
	$_SESSION['alert_typeclass']='w3-button w3-red w3-large w3-display-topright';
	$_SESSION['alert_msg']='Something Went Wrong Please Try Again';
	$_SESSION['alert_typei']='Error';
	header('location:../admin/dashboard/edit_room.php');
}
	else
	{
		$submit=mysqli_query($conn,"UPDATE room SET roomname = '$name', price = '$price',oneline='$type', comments = '$description', `quadity` = '$quantity' WHERE `room`.`id` = $id;");

		if($submit==true)
		{
			$_SESSION['alert_type']='w3-panel w3-green w3-display-container';
			$_SESSION['alert_typeclass']='w3-button w3-green w3-large w3-display-topright';
			$_SESSION['alert_msg']='Record Updated Successfully';
			$_SESSION['alert_typei']='Success!';
			header('location:../admin/dashboard/edit_room.php?id='.$id);
		}
		else
		{
			$_SESSION['alert_type']='w3-panel w3-red w3-display-container';
					$_SESSION['alert_typeclass']='w3-button w3-red w3-large w3-display-topright';
					$_SESSION['alert_msg']='Something Went Wrong Please Try Again';
					$_SESSION['alert_typei']='Error';
					header('location:../admin/dashboard/edit_room.php?id='.$id);
		}
		
	}



?>