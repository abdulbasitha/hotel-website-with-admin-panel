<?php
include_once('database.php');
include_once('availability_true.php');
include_once('payment/index.php');
date_default_timezone_set('Asia/Kolkata');
session_start();
$conn=connection();
if(!$conn)
{
	session_destroy();
	session_start();
	$_SESSION['notification']="Oops!!! Something Went Wrong Please Try Again";
	$_SESSION['notification_type']="alert alert-danger alert-dismissible fade in";
	header('location:../contact-us.php');
}
else
{


$roomname1=$_SESSION['roomname1'];
$roomname2=$_SESSION['roomname2'];
	$name=strtolower($_POST['name']);
	$email=strtolower($_POST['email']);
	$gender=strtolower($_POST['gender']);
	$phno=$_POST['phno'];
	$arrival=$_POST['arrival'];
	$departure=$_POST['departure'];
	$adults=$_POST['adults'];
	$children=$_POST['children'];
	$method_payment=$_POST['method_payment'];
	$address=strtolower($_POST['address']);
				$_SESSION['name']=$name;
				$_SESSION['email']=$email;
				$_SESSION['gender']=$gender;
				$_SESSION['phno']=$phno;

				$_SESSION['method_payment']=$method_payment;
				$_SESSION['address']=$address;

					$arrival1 = explode('-', $arrival);
					$arrival2=strtotime($arrival1[0]);
					$departure1=explode('-', $departure);
					$departure2=strtotime($departure1[0]);
					$arrival_date=date('Y-m-d',$arrival2);
					$departure_date=date('Y-m-d',$departure2);
					$onlinebook=$_SESSION['cart'];
					$amountquery=mysqli_query($conn,"select * from room where id=1;");
			 		$amounfetch=mysqli_fetch_array($amountquery);
			 		$amount_room1=$amounfetch['price'];
			 		$amountquery=mysqli_query($conn,"select * from room where id=2;");
			 		$amounfetch=mysqli_fetch_array($amountquery);
			 		$amount_room2=$amounfetch['price'];
			 	$_SESSION['online_arrival']=$arrival_date;
			 	$_SESSION['online_departure']=$departure_date;


				if(($_SESSION['cart'][1]!=0)&&($_SESSION['cart'][2])){
					$online_room = "ROOM BOOKING ".ucfirst($roomname1)."(".$_SESSION['cart'][1].")".",".ucfirst($roomname2)."(".$_SESSION['cart'][1].")";
					$online_money=($_SESSION['cart'][1]*$amount_room1*$_SESSION['days'])+($_SESSION['cart'][2]*$amount_room2*$_SESSION['days']);
					
				}
				elseif($_SESSION['cart'][1]!=0)
				{
					$online_room =ucfirst($roomname1)."(".$_SESSION['cart'][1].")";
					$online_money=($_SESSION['cart'][1]*$amount_room1*$_SESSION['days']);
				}
				else
				{
					$online_room =ucfirst($roomname2)."(".$_SESSION['cart'][2].")";
					$online_money=($_SESSION['cart'][2]*$amount_room2*$_SESSION['days']);
					
				}

			
	if(($arrival!=$_SESSION['arrival'])||($departure!=$_SESSION['departure'])){
		session_destroy();
		session_start();
		$_SESSION['notification']="Oops!!! Something Went Wrong Please Try Again";
		$_SESSION['notification_type']="alert alert-danger alert-dismissible fade in";
		
		header('location:../index.php');
	}
	elseif(($arrival==$_SESSION['arrival'])&&($departure==$_SESSION['departure']))
	{
			 if(availability($arrival,$departure)!=1){

			 	session_destroy();
			 	session_start();
			 	$_SESSION['notification']="Oops!!! Something Went Wrong Please Try Again";
				$_SESSION['notification_type']="alert alert-danger alert-dismissible fade in";
				header('location:../index.php');

			 }
			 else{
			 		
			 	switch ($method_payment) {
			 		case 'ONLINE PAYMENT':

			 			payment(strtoupper($name),$phno,$online_money,$email,$online_room);
									break;
			 		case 'OFFLINE PAYMENT':
			 			$cart=$_SESSION['cart'];
			 			 $noofdays=$_SESSION['days'];
			 			 $netamout1=$noofdays*$amount_room1;
			 			 $netamout2=$noofdays*$amount_room2;
			 			 if($cart[1]>0){
			 			 	while($cart[1]>0)
			 			 	{
			 			 		

			 			 		$submitquery="INSERT INTO `booking` (`id`, `name`, `email`, `gender`, `phno`, `arrival`, `departure`, `adults`, `children`, `roomtype`, `days`, `address`, `amount`, `paymentid`, `status`, `bookingdate`) VALUES (NULL, '$name', '$email', '$gender', '$phno', '$arrival_date', '$departure_date', '$adults', '$children', '$roomname1', '$noofdays', '$address', '$netamout1', 'OFFLINE', 'unpaid', now());";
			 			 		$submit=mysqli_query($conn,$submitquery);
			 			 		$cart[1]=$cart[1]-1;

			 			 	}
			 			 	}
						if($cart[2]>0){
			 			 	while($cart[2]>0)
			 			 	{
			 			 		

			 			 		$submitquery="INSERT INTO `booking` (`id`, `name`, `email`, `gender`, `phno`, `arrival`, `departure`, `adults`, `children`, `roomtype`, `days`, `address`, `amount`, `paymentid`, `status`, `bookingdate`) VALUES (NULL, '$name', '$email', '$gender', '$phno', '$arrival_date', '$departure_date', '$adults', '$children', '$roomname2', '$noofdays', '$address', '$netamout2', 'OFFLINE', 'unpaid', now());";
			 			 		$submit=mysqli_query($conn,$submitquery);
			 			 		$cart[2]=$cart[2]-1;

			 			 	}
			 			 	
			 			 }
			 			 if($submit==true){
			 			 	session_destroy();
			 			 	session_start();
			 			 	$_SESSION['notification']="Thank you for Booking with us. Your Booking Request was Submitted Successfully. We will contact you soon.";
							$_SESSION['notification_type']="alert alert-success alert-dismissible fade in";
							header('location:../contact-us.php');
						}
						else
						{
						session_destroy();
			 			session_start();
			 			$_SESSION['notification']="Oops!!! Something Went Wrong Please Try Again";
						$_SESSION['notification_type']="alert alert-danger alert-dismissible fade in";
			 				header('location:../contact-us.php');
						}
						break;
			 		default:
			 			session_destroy();
			 			session_start();
			 			$_SESSION['notification']="Oops!!! Something Went Wrong Please Try Again";
						$_SESSION['notification_type']="alert alert-danger alert-dismissible fade in";
						header('location:../index.php');
			 			break;
			 	}
			 }



	}





}


?>