<?php

include_once('database.php');
date_default_timezone_set('Asia/Kolkata');
session_start();
$conn=connection();
$name=$_POST['name'];
	$email=$_POST['email'];
		$phno=$_POST['number'];
			$message=$_POST['message'];
			
			if(!$conn){
				session_destroy();
				session_start();
		$_SESSION['notification']="Oops!!! Something Went Wrong Please Try Again";
		$_SESSION['notification_type']="alert alert-danger alert-dismissible fade in";
		header('location:../contact-us.php');
			}
			else{
				$submit=mysqli_query($conn,"INSERT INTO `message` (`id`, `name`, `email`, `phno`, `msg`, `date`) VALUES (NULL, '$name', '$email', '$phno', '$message', now());");
				if($submit==true)
				{
						session_destroy();
				session_start();
		$_SESSION['notification']="Thank You :) , Your message is successfully sent...";
		$_SESSION['notification_type']="alert alert-success alert-dismissible fade in";
		header('location:../contact-us.php');
				}
				else{
				session_destroy();
				session_start();
				$_SESSION['notification']="Oops!!! Something Went Wrong Please Try Again";
				$_SESSION['notification_type']="alert alert-danger alert-dismissible fade in";
				header('location:../contact-us.php');
				}

			}








?>