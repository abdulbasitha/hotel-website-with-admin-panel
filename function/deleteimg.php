<?php

include_once('database.php');
date_default_timezone_set('Asia/Kolkata');
session_start();
$conn=connection();
$id=$_GET['id'];
$url=$_GET['redirect'];
$que=mysqli_query($conn,"select * from images where id='$id';");
$quexe=mysqli_fetch_array($que);
$imgname=$quexe['image'];
	 unlink('images/'.$imgname);
	 mysqli_query($conn,"DELETE FROM `images` WHERE `images`.`id` = '$id'");


header('location:'.$url);





?>