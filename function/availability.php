<?php
include_once('database.php');
date_default_timezone_set('Asia/Kolkata');
session_start();
$conn=connection();

$redirect=$_GET['redirect'];
$id=$_GET['id'];
$redirect=$redirect."?id=".$id;
$backpage=$_GET['page'];
$roomname1=$_SESSION['roomname1'];
$roomname2=$_SESSION['roomname2'];
				/*<---calculate of of days--->*/
			/*	echo $_POST['arrival'];*/

			$arrival1 = explode('-', $_POST['arrival']);
			$arrival=strtotime($arrival1[0]);
			$departure1=explode('-', $_POST['departure']);
			$departure=strtotime($departure1[0]);
			$arrival_date=date('Y-m-d',$arrival);
			$departure_date=date('Y-m-d',$departure);
			$daysexe= strtotime($departure_date)- strtotime($arrival_date);
			$days=round($daysexe/(60*60*24));




	if(date('Y-m-d')>$arrival_date)
			{
$_SESSION['notification']="Error !!!.Please Enter a Valid Date";
$_SESSION['notification_type']="alert alert-danger alert-dismissible fade in";
unset($_SESSION['days']);
unset($_SESSION['availability_check']);
unset($_SESSION['arrival']);
unset($_SESSION['departure']);
unset($_SESSION['adults']);
unset($_SESSION['children']);

header('location:../'.$backpage);
			}
	elseif($arrival_date==$departure_date){
		$_SESSION['notification']="Sorry !!!.Number of days must be at least one day";
		$_SESSION['notification_type']="alert alert-info alert-dismissible fade in";
		unset($_SESSION['days']);
		unset($_SESSION['availability_check']);
		unset($_SESSION['arrival']);
		unset($_SESSION['departure']);
		unset($_SESSION['adults']);
		unset($_SESSION['children']);

		header('location:../'.$backpage);
	}
			
elseif($days<=0)
{
$_SESSION['notification']="Error !!!.Please Enter a Valid Date";
$_SESSION['notification_type']="alert alert-danger alert-dismissible fade in";
unset($_SESSION['days']);
unset($_SESSION['availability_check']);
unset($_SESSION['arrival']);
unset($_SESSION['departure']);
unset($_SESSION['adults']);
unset($_SESSION['children']);

header('location:../'.$backpage);

}
else
	
{				
				$query="select * from room where id=1";
            	$queryexe=mysqli_query($conn,$query);
                $result=mysqli_fetch_assoc($queryexe);
				$room1=$result['quadity'];
				$query="select * from room where id=2";
            	$queryexe=mysqli_query($conn,$query);
                $result=mysqli_fetch_assoc($queryexe);
                $room2=$result['quadity'];
               
                /*check need*/
                /*check room */
                
                mysqli_query($conn,"select * from booking where roomtype='$roomname1' and '$arrival_date' between arrival and departure;");
                $used_ecnomy_room=mysqli_affected_rows($conn);
                 mysqli_query($conn,"select * from booking where roomtype='$roomname2' and '$arrival_date' between arrival and departure;");
                 $used_standerd_room=mysqli_affected_rows($conn);


		
		$balance_ecnomy=$room1-$used_ecnomy_room;
		$balance_standerd=$room2-$used_standerd_room;
		if(($balance_ecnomy>0)||($balance_standerd>0))
		{
		$_SESSION['avail_ecnomy']=$balance_ecnomy;
		$_SESSION['available_standerd']=$balance_standerd;
		$_SESSION['days']=$days;
		$_SESSION['availability_check']="true";
		$_SESSION['arrival']= $_POST['arrival'];
		$_SESSION['departure']=$_POST['departure'];
		$_SESSION['adults']=$_POST['adults'];
		$_SESSION['children']=$_POST['children'];
		$_SESSION['notification']="Select Your Room.";
		$_SESSION['notification_type']="alert alert-info alert-dismissible fade in";
		header('location:../'.$redirect);
		}
		else{
			
			$_SESSION['notification']="Sorry !!!.Rooms Not Available ,Further Information Contact Us.";
			$_SESSION['notification_type']="alert alert-danger alert-dismissible fade in";
			unset($_SESSION['avail_ecnomy']);
			unset($_SESSION['available_standerd']);
			unset($_SESSION['days']);
			unset($_SESSION['availability_check']);
			unset($_SESSION['arrival']);
			unset($_SESSION['departure']);
			unset($_SESSION['adults']);
			unset($_SESSION['children']);
			header('location:../contact-us.php');
		}
}











?>