<?php

include_once('../database.php');
date_default_timezone_set('Asia/Kolkata');
session_start();
$conn=connection();
$roomname1=$_SESSION['roomname1'];
$roomname2=$_SESSION['roomname2'];




/*
Basic PHP script to handle Instamojo RAP webhook.
*/
$paymentid=$_GET['payment_id'];


$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://www.instamojo.com/api/1.1/payments/'.$paymentid.'/');
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,
            array("X-Api-Key:1f80fa0d044c524528cc9161c46d5d95",
                  "X-Auth-Token:4915a86de2dd815bf4b33a2349c519d3"));

$response = curl_exec($ch);
curl_close($ch); 

$result = json_decode($response  ,true);
$result1= ($result['success']);


			$paymentstatus=$result;
			$paymentstatus1=$paymentstatus['payment']['status'];
echo $paymentstatus1."<br>";

echo $result1;
if(($result1==1)&&($paymentstatus1=='Credit'))
{







$name=$_SESSION['name'];
$email=$_SESSION['email'];
$gender=$_SESSION['gender'];
$phno=$_SESSION['phno'];
$address=$_SESSION['address'];
$adults=$_SESSION['adults'];
$children=$_SESSION['children'];
$arrival_date=$_SESSION['online_arrival'];
$departure_date=$_SESSION['online_departure'];
$noofdays=$_SESSION['days'];
				
					$amountquery=mysqli_query($conn,"select * from room where id=1;");
			 		$amounfetch=mysqli_fetch_array($amountquery);
			 		$amount_room1=$amounfetch['price'];
			 		$amountquery=mysqli_query($conn,"select * from room where id=2;");
			 		$amounfetch=mysqli_fetch_array($amountquery);
			 		$amount_room2=$amounfetch['price'];
			 		$cart=$_SESSION['cart'];

			 			 $noofdays=$_SESSION['days'];
			 			 $netamout1=$noofdays*$amount_room1;
			 			 $netamout2=$noofdays*$amount_room2;


			 			  if($cart[1]>0){
			 			 	while($cart[1]>0)
			 			 	{
			 			 		

			 			 		$submitquery="INSERT INTO `booking` (`id`, `name`, `email`, `gender`, `phno`, `arrival`, `departure`, `adults`, `children`, `roomtype`, `days`, `address`, `amount`, `paymentid`, `status`, `bookingdate`) VALUES (NULL, '$name', '$email', '$gender', '$phno', '$arrival_date', '$departure_date', '$adults', '$children', '$roomname1', '$noofdays', '$address', '$netamout1', '$paymentid', 'paid', now());";
			 			 		$submit=mysqli_query($conn,$submitquery);
			 			 		$cart[1]=$cart[1]-1;

			 			 	}
			 			 }
			 			 if($cart[2]>0){
			 			 	while($cart[2]>0)
			 			 	{
			 			 		

			 			 		$submitquery="INSERT INTO `booking` (`id`, `name`, `email`, `gender`, `phno`, `arrival`, `departure`, `adults`, `children`, `roomtype`, `days`, `address`, `amount`, `paymentid`, `status`, `bookingdate`) VALUES (NULL, '$name', '$email', '$gender', '$phno', '$arrival_date', '$departure_date', '$adults', '$children', '$roomname2', '$noofdays', '$address', '$netamout2', '$paymentid', 'paid', now());";
			 			 		$submit=mysqli_query($conn,$submitquery);
			 			 		$cart[2]=$cart[2]-1;

			 			 	}
			 			 
			 			 }

			 			 if($submit==true){
							session_destroy();
			 			 	session_start();
			 			 	$_SESSION['notification']="Thank you for Booking with us. Your Booking Request was Submitted Successfully,Your payment receipt Sent to your email address.";
							$_SESSION['notification_type']="alert alert-success alert-dismissible fade in";
							header('location:../../contact-us.php');

						}
						else
						{
							session_destroy();
			 			 	session_start();

			 			 	$_SESSION['notification']="Unfortunately, your payment was not completed successfully";
							$_SESSION['notification_type']="alert alert-danger alert-dismissible fade in";
							header('location:../../contact-us.php');
						}
					}





					else
					{
						 session_destroy();
    session_start();
    $_SESSION['notification']="Unfortunately, your payment was not completed successfully";
    $_SESSION['notification_type']="alert alert-danger alert-dismissible fade in";
    header('location:../../contact-us.php');

					}


?>