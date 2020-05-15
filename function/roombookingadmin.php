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
	header('location:../admin/dashboard/new_booking.php');
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
	$noofroom=$_POST['noofroom'];

		/*--No of days--*/
		
		$daysexe= strtotime($departure)- strtotime($arrival);
			$days=round($daysexe/(60*60*24));
			if(date('Y-m-d')>$arrival)
			{
				$_SESSION['alert_type']='w3-panel w3-red w3-display-container';
	$_SESSION['alert_typeclass']='w3-button w3-red w3-large w3-display-topright';
	$_SESSION['alert_msg']='Please Enter a Valid Date';
	$_SESSION['alert_typei']='Error';
	header('location:../admin/dashboard/new_booking.php');
			}
			elseif($arrival==$departure){
				$_SESSION['alert_type']='w3-panel w3-blue w3-display-container';
				$_SESSION['alert_typeclass']='w3-button w3-blue w3-large w3-display-topright';
				$_SESSION['alert_msg']='Sorry !!!.Number of days must be at least one day';
				$_SESSION['alert_typei']='Info';
				header('location:../admin/dashboard/new_booking.php');

			}
			elseif($days<=0)
			{
							$_SESSION['alert_type']='w3-panel w3-red w3-display-container';
							$_SESSION['alert_typeclass']='w3-button w3-red w3-large w3-display-topright';
							$_SESSION['alert_msg']='Please Enter a Valid Date';
							$_SESSION['alert_typei']='Error';
							header('location:../admin/dashboard/new_booking.php');
			}
			else{

				$roomquery=mysqli_query($conn,"select * from room where roomname='$roomtype'");
				$room=mysqli_fetch_array($roomquery);
				$amount=$room['price']*$days;

for($i=$noofroom;$i>0;$i--){

			$submit=mysqli_query($conn,"INSERT INTO booking (id, name, email, gender, phno, arrival, departure, adults, children, roomtype, days, address, amount, paymentid, status, bookingdate) VALUES (NULL, '$name', '$email', '$gender', '$phno', '$arrival', '$departure', '$adults', '$children', '$roomtype', '$days', '$address', '$amount', 'OFFLINE', '$payment', now());");
		}
			if($submit==true){

			$_SESSION['alert_type']='w3-panel w3-green w3-display-container';
			$_SESSION['alert_typeclass']='w3-button w3-green w3-large w3-display-topright';
			$_SESSION['alert_msg']='Thank you for Booking with us. Your Booking Request was Submitted Successfully';
			$_SESSION['alert_typei']='Success!';
			header('location:../admin/dashboard/new_booking.php');
				}
				else
				{
					$_SESSION['alert_type']='w3-panel w3-red w3-display-container';
					$_SESSION['alert_typeclass']='w3-button w3-red w3-large w3-display-topright';
					$_SESSION['alert_msg']='Something Went Wrong Please Try Again';
					$_SESSION['alert_typei']='Error';
					header('location:../admin/dashboard/new_booking.php');
				}

			

			
}

	}
?>