<?php
include_once('../function/database.php');
session_start();
	$conn=connection();
		$username=strtolower($_POST['b1']);
		$pass=$_POST['b2'];
			if(!$conn)
			{
				$_SESSION['error']=1;
				header('location:index.php');

			}
			else{

				$query=("select * from admin where email='$username';");
				$queryexe=mysqli_query($conn,$query);
				$queryfetch=mysqli_fetch_array($queryexe);
				if(($queryfetch['email']==$username)&&($pass==$queryfetch['password'])){
					$_SESSION['admin_name']=$queryfetch['name'];
					$_SESSION['admin_email']=$queryfetch['email'];
					$_SESSION['login_status']="true";
					header('location:dashboard/');
					
				}
				else
				{
					$_SESSION['error']=2;
				header('location:index.php');
				}
			}


?>