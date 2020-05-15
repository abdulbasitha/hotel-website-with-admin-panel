<?php
include_once('database.php');
$conn=connection();
session_start();
$id=$_GET['id'];
$url=$_GET['redirect'];
if($id!=Null){
mysqli_query($conn,"DELETE FROM `booking` WHERE `booking`.`id` = '$id'");

}
header('location:'.$url);
?>