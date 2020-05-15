<?php

function connection(){

	
	$connection=mysqli_connect("localhost","root","Aba4333250","resort");

	return $connection;
}