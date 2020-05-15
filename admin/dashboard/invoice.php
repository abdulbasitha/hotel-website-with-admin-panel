<?php
include_once('../../function/database.php');
$tottleamt=0;

$room_array=array();

$conn=connection();

$fetch_profile=mysqli_query($conn,"select * from profile where id=1");
$profile=mysqli_fetch_array($fetch_profile);


$room1=mysqli_query($conn,"select * from room where id=1;");
$room1_fetch=mysqli_fetch_array($room1);

$room2=mysqli_query($conn,"select * from room where id=2;");
$room2_fetch=mysqli_fetch_array($room2);
$room_array[0]=$room1_fetch['roomname'];
$room_array[1]=$room2_fetch['roomname'];

$id= $_GET['id'];
$arrival= $_GET['checkin'];
$depart= $_GET['checkout'];

$phno= $_GET['phno'];
$query=mysqli_query($conn,"select * from booking where arrival='$arrival' and departure='$depart' and phno='$phno' and status='paid'");
while($fetch=mysqli_fetch_array($query)){
        
            $tottleamt=$tottleamt+($fetch['amount']);
       
                
         $username=$fetch['name'];
         $address=$fetch['address'];
         $uerphno=$fetch['phno'];
         $ueremail=$fetch['email'];
         $paymentid=$fetch['paymentid'];




    }




?>



<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Kairali Farm Resort | Invoice </title>
    
    <style>
    img[src="https://cdn.rawgit.com/000webhost/logo/e9bd13f7/footer-powered-by-000webhost-white2.png"]{
display:none;





}
 img[src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"]{
display:none;


}
    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }
    
    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }
    
    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }
    
    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }
    
    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }
    
    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }
    
    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }
    
    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }
    
    .invoice-box table tr.item.last td {
        border-bottom: none;
    }
    
    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }
        
        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }
    
    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }
    
    .rtl table {
        text-align: right;
    }
    
    .rtl table tr td:nth-child(2) {
        text-align: left;
    }

    </style>
    <style type="text/css" media="print">
@page {
    size: auto;   /* auto is the initial value */
    margin: 0;  /* this affects the margin in the printer settings */
}
</style>
</head>
<script type="text/javascript">
    function myFunction() {
    window.print();
}
</script>
<body onload=" yFunction()">
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="../../img/logo-sticky.png" style="width:100%; max-width:300px;">
                            </td>
                            <br><br>
                            <td>
                                Invoice #: <?php echo $id; ?><br>
                                 Invoice Date : <?php echo date('d-m-Y'); ?><br>

                                Check-In: <?php echo (date("F d Y", strtotime($arrival))); ?><br>
                                Check-Out:  <?php echo (date("F d Y", strtotime($depart))); ?>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
         




            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                <?php echo $profile['resort_name']  ?><br>
                                <?php echo $profile['resort_address'] ?><br>
                                 <?php echo $profile['resort_phno'] ?><br>
                                 <?php echo $profile['resort_email'] ?>


                            </td>
                           
                            <td>
                                <?php echo ucfirst($username); ?><br>
                                <?php echo ucfirst($address); ?><br>
                                 <?php echo ($uerphno); ?><br>
                                 <?php echo ($ueremail); ?>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="heading">
                <td>
                    Payment Method
                </td>
                
                <td>
                   Payment id #
                </td>
            </tr>
            
            <tr class="details">
                <td>
                    <?php
                    if($paymentid=='OFFLINE'){
                        echo "Offline";
                        $paymentid_id="........";
                        $gate=0;
                        $conff=0;

                    }
                    else
                    {
                       echo "Online"; 
                       $paymentid_id=$paymentid;
                       $gate=(($tottleamt*2)/100)+3;
                       $conff=($gate*18)/100;
                    }
                    ?>
                </td>
                
                <td>
                    <?php echo $paymentid_id;  ?>
                </td>
            </tr>
            
            <tr class="heading">
                <td>
                    Room
                </td>
                 
                <td>
                    Price
                </td>
            </tr>
            <?php
            $temp_roomname1=$room_array[0];
            $temp_roomname2=$room_array[1];
            $query=mysqli_query($conn,"select * from booking where arrival='$arrival' and departure='$depart' and phno='$phno' and roomtype='$temp_roomname1' and status='paid' ");
            $room_1_price=mysqli_fetch_array($query);

            $noof_room1=mysqli_affected_rows($conn);

             $query=mysqli_query($conn,"select * from booking where arrival='$arrival' and departure='$depart' and phno='$phno' and roomtype='$temp_roomname2' and status='paid'");
             $room_2_price=mysqli_fetch_array($query);

             $noof_room2=mysqli_affected_rows($conn);
             ?>
             <?php
             if($noof_room1!=0) 
             {
             ?>
            <tr class="item">
                <td>
                    
                    <?php echo ucfirst($room_array[0]);  ?> x (<?php echo $noof_room1;?>) x <?php echo $room_1_price['days'];?> Day
                </td>
                
                <td>
                    ₹  <?php echo ucfirst($room_1_price['amount']*$noof_room1);  ?>/-
                </td>
            </tr>
            <?php

        }
            ?>
                <?php
                    if($noof_room2!=0)
                    {
                ?>
             <tr class="item">
                <td>
                    <?php echo ucfirst($room_array[1]);  ?> x (<?php echo $noof_room2;?>) x <?php echo $room_2_price['days'];?> Day
                </td>
                
                <td>
                    ₹  <?php echo ucfirst($room_2_price['amount']*$noof_room2);  ?>/-
                   
                </td>
            </tr>
            <?php
                }
            ?>
         
          <tr class="item">
                <td>
                    Gateway charge
                </td>
            
            <td>
                ₹  <?php echo $gate+$conff;  ?>/-
            </td>
            
            <tr class="total">
                <td></td>
                
                <td>
                   Total: ₹<?php echo $tottleamt+$gate+$conff;  ?>/-
                </td>
            </tr>
        </table>

    </div>
</body>

</html>
<?php



?>