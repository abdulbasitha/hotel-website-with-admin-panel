<?php 

function availability($arrival,$departure){
	date_default_timezone_set('Asia/Kolkata');
	include_once('database.php');
	
	$conn=connection();
	$roomname1=$_SESSION['roomname1'];
	$roomname2=$_SESSION['roomname2'];
	$arrival1 = explode('-', $arrival);
			$arrival=strtotime($arrival1[0]);
			$departure1=explode('-', $departure);
			$departure=strtotime($departure1[0]);
			$arrival_date=date('Y-m-d',$arrival);
			$departure_date=date('Y-m-d',$departure);
			$daysexe= strtotime($departure_date)- strtotime($arrival_date);
			$days=round($daysexe/(60*60*24));
			$query="select * from room where id=1";
            	$queryexe=mysqli_query($conn,$query);
                $result=mysqli_fetch_assoc($queryexe);
				$room1=$result['quadity'];
				$query="select * from room where id=2";
            	$queryexe=mysqli_query($conn,$query);
                $result=mysqli_fetch_assoc($queryexe);
                $room2=$result['quadity'];
                 mysqli_query($conn,"select * from booking where roomtype='$roomname1' and '$arrival_date' between arrival and departure;");
                $used_ecnomy_room=mysqli_affected_rows($conn);
                 mysqli_query($conn,"select * from booking where roomtype='$roomname2' and '$arrival_date' between arrival and departure;");
                 $used_standerd_room=mysqli_affected_rows($conn);
                 $balance_ecnomy=$room1-$used_ecnomy_room;
				$balance_standerd=$room2-$used_standerd_room;
				 if(($balance_ecnomy==$_SESSION['avail_ecnomy'])&&( $balance_standerd==$_SESSION['available_standerd']))
					return 1;
				

}



?>