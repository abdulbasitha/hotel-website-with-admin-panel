<?php
include_once('database.php');
session_start();
$id=$_GET['id'];
$redirect=$_GET['redirect'];
if($id==1)
{
$_SESSION['cart'][1]=$_SESSION['cart'][1]-1;
$_SESSION['notification']="You Removed ".ucfirst($_SESSION['roomname1'])." Room from your cart";
$_SESSION['notification_type']="alert alert-warning alert-dismissible fade in";
header('location:'.$redirect);
}
else
{
	$_SESSION['cart'][2]=$_SESSION['cart'][2]-1;
	$_SESSION['notification']="You Removed ".ucfirst($_SESSION['roomname2'])." Room from your cart";
	$_SESSION['notification_type']="alert alert-warning alert-dismissible fade in";
header('location:'.$redirect);
}
?>