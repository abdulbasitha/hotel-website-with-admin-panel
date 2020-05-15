<?php
session_start();
if(($_SESSION['cart'][1]!=0)||($_SESSION['cart'][2]!=0)){
	header('location:../booking.php');
}
else
{
	header('location:../room.php');
}

?>