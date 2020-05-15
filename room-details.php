<?php  
error_reporting(E_ALL);
ini_set('display_errors', 0);
$actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

include_once('function/database.php');
session_start();
if(!isset($_SESSION['cart']))
{
$_SESSION['cart']=array();
$_SESSION['cart'][1]=0;
$_SESSION['cart'][2]=0;
}
$conn=connection();
$id=$_GET['id'];
if($id==1){
    $query="select * from room where id=1";
            $queryexe=mysqli_query($conn,$query);
                $result=mysqli_fetch_assoc($queryexe);
            $room_name=$result['roomname'];
            $room_price=$result['price'];
            $room_desc=$result['oneline'];
            $comments=nl2br($result['comments']);
            $photourl1='room-details11.jpg';
            $photourl2='room-details12.jpg';

}
if($id==2)
{
    $query2="select * from room where id=2";
    
    $queryexe=mysqli_query($conn,$query2);
    $result=mysqli_fetch_assoc($queryexe);
            $room_name=$result['roomname'];
            $room_price=$result['price'];
            $room_desc=$result['oneline'];
            $comments=nl2br($result['comments']);
            $photourl1='room-details21.jpg';
            $photourl2='room-details22.jpg';
}
if($id>2)
{
    header('location:404.html');
}
if($id<1)
{
    header('location:404.html');
}
if($id==NULL)
{
    header('location:404.html');
}
/* else */
?>
<?php
$fetch=mysqli_query($conn,"select * from profile where id=1");
$fetch_array=mysqli_fetch_array($fetch);
?>


<!DOCTYPE html>
<html lang="en">
    <head>
              <style>


.form-control1{
    width: 100%;
    border: none;
    border: 1px solid #dedede;
    height: 46px;
    padding: 0px 18px;
    font-size: 13px;
    font-family: "Montserrat", sans-serif;
    color: #8c8c8c;
    text-transform: uppercase;
}
.astext {
    width: 100%;
    background:none;
    border:none;
    margin:0;
    padding:0;
    cursor: pointer;
    background: #47a223;
    color: #fff;
    line-height: 40px;
    display: inline-block;
    padding: 0px 25px;
    font-size: 14px;
    font-family: "Montserrat", sans-serif;
    font-weight: bold;
    letter-spacing: .28px;
    position: relative;
    z-index: 2;
    -webkit-transition-duration: 0.5s;
    -o-transition-duration: 0.5s;
    transition-duration: 0.5s;
    text-transform: uppercase;
    text-align: center;
    border: 2px solid #47a223;}

</style>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Kairali Resort | Room-Details</title>

        <!-- Icon css link -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="vendors/stroke-icon/style.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Rev slider css -->
        <link href="vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="vendors/revolution/css/navigation.css" rel="stylesheet">
        <link href="vendors/animate-css/animate.css" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="vendors/magnify-popup/magnific-popup.css" rel="stylesheet">
        <link href="vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
        <link href="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
        <link href="vendors/bootstrap-selector/bootstrap-select.css" rel="stylesheet">
        
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
    </head>
    <body>

        <!--================Header Area =================-->
        <header class="main_header_area">
           <div class="header_top">
                <div class="container">
                    <div class="header_top_inner">
                        <div class="pull-left">
                           <a ><font color="black"> <i class="fa fa-phone"></i><b>+91 <?php echo $fetch_array['resort_phno'] ; ?></b></font></a>
                            <a href="mailto:<?php echo $fetch_array['resort_email'] ;  ?>"><font color="black"><i class="fa fa-envelope-o"></i><b><?php echo $fetch_array['resort_email'] ; ?></b></font></a>
                        </div>
                        <div class="pull-right">
                            <ul class="header_social">
                                <li><a href="<?php  echo $fetch_array['resort_fb'] ?>"><b><font color="black"size="5px"><i class="fa fa-facebook"></i></font></b></a></li>
                                <li><a href="<?php echo $fetch_array['resort_insta'] ?>"><b><font color="black" size="5px"><i class="fa fa-youtube"></i></font></b></a></li>
                                 <li><a href="<?php echo "" ?>"><b><font color="black"size="5px"><i class="fa fa-instagram"size="5px"></i></font></a></b></li>
                                <li><a href="<?php echo $fetch_array['resort_whatsapp'] ?>"><b><font color="black"size="5px"><i class="fa fa-whatsapp"></i></font></a></b></li>


                               
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header_menu">
                <nav class="navbar navbar-default">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">
                        <img src="img/logo.png" alt="">
                        <img src="img/logo-sticky.png" alt="">
                                
                            </a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                               
                                    <li ><a href="index.php"> Home</a></li>
                                    <li class="dropdown submenu active" ><a href="room.php">Rooms</a></li>
                                    <li><a href="gallery.php">GALLERY</a></li>
                                  <li><a href="about-us.php">About Us</a></li>
                                <li><a href="contact-us.php">Contact Us</a></li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                            
                                <li class="book_btn">
                                    <a class="book_now_btn" href="function/booknow.php">Book now</a>
                                </li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            </div>
             <?php 
            if(isset($_SESSION['notification']))
            {
                ?>
            
        <div class="<?php echo $_SESSION['notification_type'];?>">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong><center><?php echo $_SESSION['notification'];?></center></strong> 
        </div>
        <?php 
            }
            unset($_SESSION['notification']);
            unset($_SESSION['notification_type']);
            ?>
        </header>
        <!--================Header Area =================-->
        
        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_inner_content">
                    <h3>Room Details</h3>
                    <ul>
                        <li ><a href="index.php">Home</a></li>
                        <li  class="active"><a href="search.php">Rooms Details</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
        
        <!--================Search Room Area =================-->
        <section class="room_details_area">
            <div class="container">
                <div class="row room_details_inner">
                    <div class="col-md-8">
                        <div class="room_details_content">
                            <div class="room_d_main_text">
                                <div class="room_details_img owl-carousel">
                                    <div class="item">
                                        <img src="img/room/<?php echo $photourl1;  ?>" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="img/room/<?php echo $photourl2;  ?>" alt="">
                                    </div>
                                    
                                </div>
                                <a href="#"><h4><?php echo $room_name." "; ?><span>rooms</span></h4></a>
                                <?php
                                if($id==2)
                                {
                                    ?>
                                 <font color="red"><?php if(isset($_SESSION['avail_ecnomy'])){

                                    if($_SESSION['available_standerd']>0)
                                    echo $_SESSION['available_standerd']." Room Available";
                                    else
                                    echo " Room Not Available";}

                                    ?></font> <?php }?>
                                     <?php
                                if($id==1)
                                {
                                    ?>
                                 <font color="red"><?php if(isset($_SESSION['avail_ecnomy'])){

                                    if($_SESSION['avail_ecnomy']>0)
                                    echo $_SESSION['avail_ecnomy']." Room Available";
                                    else
                                    echo " Room Not Available";}

                                    ?></font> <?php }?>
                                <h5>₹<?php echo $room_price ?> <span>/ Day</span></h5>
                                <p><?php echo $comments?></p>
                            </div>
                            <div class="room_service_list">
                                <h3 class="room_d_title">Room facilities & services</h3>
                                <div class="row room_service_list_inner">
                                    <div class="col-sm-5 col-md-offset-right-1">
                                        <div class="resot_list">
                                            <ul>
                                                <li><a><i class="fa fa-caret-right" aria-hidden="true"></i>24 Hour  Front Desk</a></li>
                                                <li><a><i class="fa fa-caret-right" aria-hidden="true"></i>Delicious Breakfast</a></li>
                                                <li><a><i class="fa fa-caret-right" aria-hidden="true"></i>Room Service</a></li>
                                                <li><a><i class="fa fa-caret-right" aria-hidden="true"></i>Welcome Drink </a></li>
                                                <li><a><i class="fa fa-caret-right" aria-hidden="true"></i>Rain Dance </a></li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 col-md-offset-right-1">
                                        <div class="resot_list">
                                            <ul>
                                                <li><a><i class="fa fa-caret-right" aria-hidden="true"></i>Free Parking</a></li>
                                                <li><a><i class="fa fa-caret-right" aria-hidden="true"></i>stunning ocean view</a></li>
                                                <li><a><i class="fa fa-caret-right" aria-hidden="true"></i>4 wheel Drive</a></li>
                                                <li><a><i class="fa fa-caret-right" aria-hidden="true"></i>Camp fire with Dj</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="room_details_clients">
                                
                                <div class="clients_slider owl-carousel">
                                
                                    

                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="search_right_sidebar">
                            <div class="book_room_area">

                               <?php
                               if($_SESSION['availability_check']!="true")
                               {
                               ?>
                                <div class="book_room_box">
                                    <div class="book_table_item">
                                        <h3>check availability</h3>
                                    </div>
                                    <div class="book_table_item">
                                        <div class="input-append date form_datetime">
                                            <form action="function/availability.php?page=room-details.php?id=<?php echo $id; ?>&redirect=room-details.php&id=<?php echo $id;  ?>" method="post" >
                                            <input size="16" type="text" value=""  placeholder="Arrival Date" required name="arrival" readonly>
                                            <span class="add-on"><i class="fa fa-calendar" aria-hidden="true" ></i></span>
                                        </div>
                                    </div>
                                    <div class="book_table_item">
                                        <div class="input-append date form_datetime">
                                            <input size="16" type="text" value=""  placeholder="Departure Date" required name="departure" readonly>
                                            <span class="add-on"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                        </div>
                                    </div>
                                    <div class="book_table_item">
                                        <select class="form-control1" required name="adults"><!--Reserve now-->
                                            <option value="">Adults</option>
                                            <option>1</option>
                                           <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                    <div class="book_table_item">
                                        <select class="form-control1" required name="children">
                                            <option value="">Children</option>
                                            <option>0</option>
                                            <option>1</option>
                                            <option>2</option>
                                        </select>

                                    </div>
                                    <div class="book_table_item">
                                        <input type="submit" class="astext" value="Check Availability" >
                                        </from>
                                    </div>
                                </div>
                            </div>
                            <?php 
                            }
                            if($_SESSION['availability_check']=="true")
                            {
                            ?>
                            <?php
                            if($id==1)
                            {
                                if($_SESSION['cart'][1]<$_SESSION['avail_ecnomy'])
                                {
                            ?>
                            <div class="book_now_button">
                            <a class="book_now_btn_black2" href="function/addtocart.php?id=<?php echo $id ?>&redirect=room-details.php?id=<?php echo $id ?>">add to cart</a><br>
                            </div>
                            <?php
                        }
                        }
                            ?>
                             <?php 
                            }
                            if($_SESSION['availability_check']=="true")
                            {
                            ?>
                            <?php
                            if($id==2)
                            {
                                if($_SESSION['cart'][2]<$_SESSION['available_standerd'])
                                {
                            ?>
                            <div class="book_now_button">
                            <a class="book_now_btn_black2" href="function/addtocart.php?id=<?php echo $id ?>&redirect=room-details.php?id=<?php echo $id ?>">add to cart</a><br>
                            </div>
                            <?php
                        }
                        }
                            ?>

                            <div class="your_book_box">
                            <h4> YOUR CART</h4>
                              
                                <?php
                                if(($_SESSION['cart'][1]!=0)||($_SESSION['cart'][2]!=0))
                                {
                                ?>
                                    <div style="overflow-x:auto;">
                                    <table>
                                    <tr>
                                    <th>Room</th>
                                    
                                     <th>Days</th>
                                    <th>Price</th>
                                    <th>Action</th>
                                    </tr>
                                    <?php
                                    }
                                    ?>
                             <?php 
                                    if(($_SESSION['cart'][1]==0)&&($_SESSION['cart'][2]==0))
                                    {
                                    echo "<h5>your cart is empty</h5>";
                                    }
                                    if($_SESSION['cart'][1]!=0)
                                    {
                                    
                                  


                                    

                                        $querycart="select * from room where id=1";
                                        $queryexecart=mysqli_query($conn,$querycart);
                                        $result=mysqli_fetch_assoc($queryexecart);
                                        $room_namecart=$result['roomname'];
                                        $room_pricecart=$result['price'];
                                        $room_desccart=$result['oneline'];
                                    
                                        echo "<tr>";
                                        echo "<td>".ucfirst($room_namecart)." x (".$_SESSION['cart'][1].")"."</td>";
                                        echo "<td>".$_SESSION['days']."</td>";
                                        echo "<td>".$_SESSION['cart'][1]*$room_pricecart*$_SESSION['days']."</td>";
                                    ?>


                                            <td>
                                                <a href="function/removechart.php?id=1&redirect=<?php echo $actual_link; ?>">
                                                    <font color='red'>Remove<font>
                                                </a>
                                             </td>
                                            </font>
                                        </tr>
                             
                                    <?php
                                        }
                                        if($_SESSION['cart'][2]!=0)
                                         {
                                        ?>
                               
                                <?php
                                    $querycart1="select * from room where id=2";
                                    $queryexecart1=mysqli_query($conn,$querycart1);
                                    $result=mysqli_fetch_assoc($queryexecart1);
                                    $room_namecart1=$result['roomname'];
                                    $room_pricecart1=$result['price'];
                                    $room_desccart1=$result['oneline'];
                                    

                                    echo "<tr>";
                                    echo "<td>".ucfirst($room_namecart1)." x (".$_SESSION['cart'][2].")"."</td>";
                                    echo "<td>".$_SESSION['days']."</td>";
                                    echo "<td>".$_SESSION['cart'][2]*$room_pricecart1*$_SESSION['days']."</td>";
                                  

                                ?>

                                    <td>
                                    
                                    <a href="function/removechart.php?id=2&redirect=<?php echo $actual_link; ?>">
                                    <font color='red'>Remove <font>
                                    </a>
                                    </td>
                                    </tr>
                             
                                <?php
                                }
                                ?>

                                </tr>
                                <?php
                                if(($_SESSION['cart'][1]!=0)||($_SESSION['cart'][2]!=0))
                                {
                                ?>
                                </table>
                                </div>
                               <br>
                               <br>
                            <table>
                                <tr>
                               
                               <?php echo ucfirst(" <th><h5><b>Tottel :");?>
                                    <?php $tottel=$_SESSION['cart'][1]*$room_pricecart+$_SESSION['cart'][2]*$room_pricecart1;
                                echo $tottel*$_SESSION['days'];

                                 ?>/-<b></h5></th>
                                
                                </tr>
                            </table>
                           
                             <center>  <h6><b><font color="red">*</font>NOTE-TAXES MAY BE APPLICABLE</b></h6></center>
                                </div>
                                 <?php
                        }
                            ?>
                              <?php
                                if(($_SESSION['cart'][1]!=0)||($_SESSION['cart'][2]!=0))
                                {
                                ?>

                                <div class="book_now_button" >
                                <a class="book_now_btn_black1" href="booking.php" id="next" >complete order</a>
                               

                             </div>

                             <?php
                                }
                            }
                             ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Search Room Area =================-->
        
        <!--================Footer Area =================-->
      <footer class="footer_area">
            <div class="footer_widget_area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-xs-6">
                            <aside class="f_widget about_widget">

                                <img src="img/footer-logo.png" alt="">
                                <div class="ab_wd_list">
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="fa fa-map-marker"></i>
                                        </div>
                                        <div class="media-body">
                                            <h4><?php echo  $fetch_array['resort_address']?></h4>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <div class="media-body">
                                           <h4> <b>+91 <?php echo  $fetch_array['resort_phno']; ?></b></h4>
                                        </div>
                                    </div>
                                     <div class="media">
                                        <div class="media-left">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <div class="media-body">
                                            <h5>+91 9744242048</h5>
                                        </div>
                                    </div>
                                     <div class="media">
                                        <div class="media-left">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <div class="media-body">
                                            <h5>+91 8592970713</h5>
                                        </div>
                                    </div>
                                  <div class="media">
                                        <div class="media-left">
                                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        </div>
                                        <div class="media-body">
                                            <ul class="header_social">
                                <li><a href="<?php echo $fetch_array['resort_fb'] ?>"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="<?php echo $fetch_array['resort_insta'] ?>"><i class="fa fa-youtube"></i></a></li>
                                 <li><a href="<?php echo "" ?>"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="<?php echo $fetch_array['resort_whatsapp'] ?>"><i class="fa fa-whatsapp"></i></a></li>
                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                        
                        
                      
                   
                                <div class="book_now_area">
                                    <a class="book_now_btn" href="function/booknow.php">Book now</a>
                                </div>
                            </aside>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <aside class="f_widget link_widget">
                                <div class="f_title">
                                    <h3>Extra Links</h3>
                                </div>
                                <ul>
                                    <li><a href="room.php">-  Rooms</a></li>
                                    <li><a href="gallery.php">-  Gallery</a></li>
                                    <li><a href="about-us.php">-  About Us</a></li>
                                    <li><a href="contact-us.php">-  Contact Us</a></li>
                                    <li><a href="function/booknow.php">-  Reserve Now</a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <aside class="f_widget link_widget">
                                <div class="f_title">
                                    <h3>our services</h3>
                                </div>
                                <ul>
                                    <li><a>-  Food </a></li>
                                    <li><a>-  Rooms</a></li>
                                    <li><a >-  Travel guide</a></li>
                                    <li><a >-  Tourist packages</a></li>
                                  
                                </ul>
                            </aside>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <aside class="f_widget instagram_widget">
                                <div class="f_title">
                                    <h3>Payments</h3>
                                </div>
                                <ul >
                                    
                                    <li><a href=""><img src="img/Instamojo.jpg"></a></li>
                                </ul>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_copyright_area">
                <div class="container">
                    <div class="pull-left">
                        <h4>Copyright © Kairali Resort  <script>document.write(new Date().getFullYear());</script>. All rights reserved. </h4>
                    </div>
                    <div class="pull-right">
                        <h4>Created by: <a href="https://techzia.in">Techzia
</a></h4>
                    </div>
                </div>
            </div>
        </footer>
        <!--================End Footer Area =================-->
        
        <!--================Search Box Area =================-->
        <div class="search_area zoom-anim-dialog mfp-hide" id="test-search">
            <div class="search_box_inner">
                <h3>Search</h3>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><i class="icon icon-Search"></i></button>
                    </span>
                </div>
            </div>
        </div>
        <!--================End Search Box Area =================-->
        
        
        
        
        
        <!--================End Footer Area =================-->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="js/jquery-2.2.4.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Rev slider js -->
        <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="vendors/magnify-popup/jquery.magnific-popup.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="vendors/counterup/waypoints.min.js"></script>
        <script src="vendors/counterup/jquery.counterup.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
        <script src="vendors/bootstrap-selector/bootstrap-select.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="js/theme.js"></script>
    </body>
</html>