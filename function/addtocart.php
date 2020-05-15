<?php

include_once('database.php');
session_start();

if(!isset($_SESSION['cart']))
{
$_SESSION['cart']=array();
$_SESSION['cart'][1]=0;
$_SESSION['cart'][2]=0;
}
$conn=connection();
$id=$_GET['id'];
$redirect=$_GET['redirect'];
if($id==1)
{
$_SESSION['cart'][1]=$_SESSION['cart'][1]+1;
$_SESSION['notification']="You added ".ucfirst($_SESSION['roomname1'])." Room to your cart";
$_SESSION['notification_type']="alert alert-success alert-dismissible fade in";
header('location:../booking.php');
/*header('location:../'.$redirect);*/
}
elseif($id==2)
{
$_SESSION['cart'][2]=$_SESSION['cart'][2]+1;
$_SESSION['notification']="You added ".ucfirst($_SESSION['roomname2'])." Room to your cart";
$_SESSION['notification_type']="alert alert-success alert-dismissible fade in";
/*header('location:../'.$redirect);*/
header('location:../booking.php');
}


?>