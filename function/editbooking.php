<?php
include_once('database.php');
date_default_timezone_set('Asia/Kolkata');
session_start();
$conn=connection();
$id=$_GET['id'];
	if(!$conn){
	$_SESSION['alert_type']='w3-panel w3-red w3-display-container';
	$_SESSION['alert_typeclass']='w3-button w3-red w3-large w3-display-topright';
	$_SESSION['alert_msg']='Something Went Wrong Please Try Again';
	$_SESSION['alert_typei']='Error';
	header('location:../admin/dashboard/edit_booking.php?id='.$id);
	}
	else
	{
	$name=strtolower($_POST['name']);
	$email=strtolower($_POST['email']);
	$gender=strtolower($_POST['gender']);
	$phno=$_POST['phno'];
	$arrival=$_POST['arrival'];
	$departure=$_POST['departure'];
	$adults=strtolower($_POST['adults']);
	$children=strtolower($_POST['children']);
	$payment=strtolower($_POST['payment']);
	$address=strtolower($_POST['address']);
	$roomtype=strtolower($_POST['roomname']);
	

		/*--No of days--*/
		
		$daysexe= strtotime($departure)- strtotime($arrival);
		$days=round($daysexe/(60*60*24));
		$roomquery=mysqli_query($conn,"select * from room where roomname='$roomtype'");
		$room=mysqli_fetch_array($roomquery);
		$amount=$room['price']*$days;

		$submit=mysqli_query($conn,"UPDATE booking SET name = '$name', email = '$email', gender = '$gender', phno = '$phno', arrival = '$arrival', departure = '$departure', adults = '$adults', children = '$children', roomtype = '$roomtype', days = '$days', address = '$address', status = '$payment' WHERE booking. id = $id;");
		if($submit==true){

			$_SESSION['alert_type']='w3-panel w3-green w3-display-container';
			$_SESSION['alert_typeclass']='w3-button w3-green w3-large w3-display-topright';
			$_SESSION['alert_msg']='Record Updated Successfully';
			$_SESSION['alert_typei']='Success!';
			header('location:../admin/dashboard/edit_booking.php?id='.$id);
				}
				else
				{
					$_SESSION['alert_type']='w3-panel w3-red w3-display-container';
					$_SESSION['alert_typeclass']='w3-button w3-red w3-large w3-display-topright';
					$_SESSION['alert_msg']='Something Went Wrong Please Try Again';
					$_SESSION['alert_typei']='Error';
					header('location:../admin/dashboard/edit_booking.php?id='.$id);
				}


		}

?>