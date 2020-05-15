<?php

include_once('function/database.php');
session_start();
if(!isset($_SESSION['cart']))
{
$_SESSION['cart']=array();
$_SESSION['cart'][1]=0;
$_SESSION['cart'][2]=0;
}
  $conn=connection();
        $query="select * from room where id=1";
            $queryexe=mysqli_query($conn,$query);
                $result=mysqli_fetch_assoc($queryexe);
            $room_name1=$result['roomname'];
            $_SESSION['roomname1']=$room_name1;
            $room_price1=$result['price'];
            $room_desc1=$result['oneline'];
            $comments1=nl2br($result['comments']);
        $query2="select * from room where id=2";
    
    $queryexe=mysqli_query($conn,$query2);
    $result=mysqli_fetch_assoc($queryexe);
            $room_name2=$result['roomname'];
             $_SESSION['roomname2']=$room_name2;
            $room_price2=$result['price'];
            $room_desc2=$result['oneline'];
            $comments2=nl2br($result['comments']);

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
}
</style>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Welcome To Kairali Resort. We are the Best resort located at Malappuram (Dist),Kerala. Please visit our website to know more about the different Kerala holiday packages we have on offer. We look forward to having you visit us ">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Kairali Resort | Home </title>

        <!-- Icon css link -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="vendors/stroke-icon/style.css" rel="stylesheet">
        <link href="vendors/flat-icon/flaticon.css" rel="stylesheet">
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
        <link href="vendors/lightbox/simpleLightbox.css" rel="stylesheet">
        
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
                               
                                    <li class="dropdown submenu active"><a href="index.php"> Home</a></li>
                                    <li><a href="room.php">Rooms</a></li>
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
        
        <!--================Slider Area =================-->
        <section class="main_slider_area main_s_banner">
            <div class="book_table_area">
                
                <div class="container">
                    
                    <h4 class="book_single_one"><font color="#242424" size="5px" >WELCOME TO <br> <font color="#242424" size="6px"> KAIRALI RESORT</font></font></h4>
                    <h4 class="book_single_text"><font color="#242424" size="6px">Book Your Room</font></h4>
                    <div class="book_table_inner row m0">
                        <div class="book_table_item">
                            
                            <div class="input-append date form_datetime">
                                <form action="function/availability.php?redirect=room.php&id=true&page=index.php"  method="post">
                                <input size="16" type="text" name="arrival"   placeholder="Arrival Date"    required readonly>
     
                                
                                <span class="add-on"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                            </div>
                        </div>
                        <div class="book_table_item">
                            <div class="input-append date form_datetime">
                                <input size="16" type="text" name="departure"  placeholder="Departure Date" required readonly>
                                <span class="add-on"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                            </div>
                        </div>
                        <div class="book_table_item">
                            <select class="form-control1" type="number" name="adults" placeholder="Adults"  required >
                                <option value="" >Adults</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                        </div>
                        <div class="book_table_item">
                            <select class="form-control1" name="children" required >
                                <option value="">Children</option>
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                            </select>
                        </div>
                        <div class="book_table_item">
                            

                           <a type="submit" class="book_now_btn"><input type="submit" class="astext" value="Check Availability" ></a>

                            
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Slider Area =================-->
        
        <!--================Introduction Area =================-->
        <section class="introduction_area intro_area2">
            <div class="container">
                <div class="row introduction_inner">
                    <div class="col-md-6">

                        <div class="introduction_img" style="padding-top:6% ">

                            <img src="img/introduction-img.jpg" alt="">
                            <div class="introduction_left_text">
                            
                            <h6></h6><br>
                            <h4>LOCATION</h4>
                            <p>Kakkadampoyil is situated in Koodaranhi Panchayat in Kozhikode District. This hill top village is one of the coolest tourist destination in Malabar region. It is about 15 km from Koodaranhi, 19 km from Thiruvambady and 24 km from the Nilambur. Calicut city is about 50 km from here. There are many indigenous tribal groups in this area. It is set high on the Western Ghats, with altitudes ranging from 700 ft to 2100 ft. Kozhippara waterfalls is situated near by here. KSRTC Buses are running services from Calicut and have few buses from Thiruvambady and Nilambur towns. There is also a continuous Jeep service from Koodaranhi town to Kakkadampoyil</p>
                            <img src="img/intro.jpg" alt="">
                        </div>
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="introduction_left_text">
                            <div class="intro_title">
                                <h2>Introduction <span>of resort</span></h2>
                                <p><?php echo  nl2br($fetch_array['resort_about']); ?></p>
                            </div>
                            <h4>we are ready to guide you</h4>
                            <p><?php echo  nl2br($fetch_array['resort_features']); ?></p>
                            <p>A large number of tourists come to Kakkadampoyil to enjoy the cool climate and to stay away from the bustle of the city.

On the mountain ranges of Western Ghats bordering Kerala. Kakkadanpoyil village, an unexplored hill station 48 km away from Calicut City. Surrounded by forests, misty hill ranges, deserted roads, untouched waterfalls (Kozhippara waterfalls), make the village worth a visit. Facilities for tourists are available</p>
                            <div class="row intro_box_item_area">
                                <div class="col-xs-4">
                                    <div class="intro_box_item">
                                        <i class="flaticon-toaster"></i>
                                        <h4>Restaurant</h4>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="intro_box_item">
                                        <i class="flaticon-taxi"></i>
                                        <h4>4 wheel drive</h4>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="intro_box_item">
                                        <i class="flaticon-wifi"></i>
                                        <h4>free wifi</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Introduction Area =================-->
        
        <!--================Choose Resot Area =================-->
        <section class="choose_resot_area">
            <div class="container">
                <div class="center_title">
                    <h2>why choose Kairali <span>resort</span></h2>
                    <p></p>
                </div>
                <div class="row choose_resot_inner">
                    <div class="col-md-5">
                        <div class="resot_list">
                            <ul>
                                <li><a ><i class="fa fa-caret-right" aria-hidden="true"></i>Strategic Position</a></li>
                                <li><a ><i class="fa fa-caret-right" aria-hidden="true"></i>Great Food</a></li>
                                <li><a ><i class="fa fa-caret-right" aria-hidden="true"></i>Family Resort</a></li>
                                <li><a ><i class="fa fa-caret-right" aria-hidden="true"></i>Delicious breakfast</a></li>
                                <li><a ><i class="fa fa-caret-right" aria-hidden="true"></i>High customer satisfaction</a></li>
                                <li><a ><i class="fa fa-caret-right" aria-hidden="true"></i>Good parking & security</a></li>
                                <li><a ><i class="fa fa-caret-right" aria-hidden="true"></i>Clean room service</a></li>
                                <li><a ><i class="fa fa-caret-right" aria-hidden="true"></i>Best atmosphere</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="choose_resot_slider owl-carousel">
                            <div class="item">
                                <img src="img/resot/resot-1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="img/resot/resot-2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="img/resot/resot-3.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="img/resot/resot-4.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="img/resot/resot-5.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Choose Resot Area =================-->
        
        <!--================Explor Room Area =================-->
        <section class="explor_room_area explor_slider_area">
            <div class="container">
                <div class="explor_title row m0">
                    <div class="pull-left">
                        <div class="left_wh_title">
                            <h2>Explore Our <span>rooms</span></h2>
                            <p>choose room according to budget</p>
                        </div>
                    </div>
                    <div class="pull-right">
                        <a class="about_btn_wh" href="room.php">view all rooms</a>
                    </div>
                </div>
               
                    <div class="col-md-4 col-sm-6">
                        <div class="explor_item">
                            <a href="room-details.php?id=1" class="room_image">
                                <img src="img/room/room-1.jpg" alt="">
                            </a>
                            <div class="explor_text">
                                <a href="room-details.php?id=1"><h4><?php echo $room_name1;?></h4></a>
                                <ul>
                                    <li><a><?php echo strtoupper($room_desc1); ?></a></li>
                                    
                                </ul>
                                <font color="red"><?php if(isset($_SESSION['avail_ecnomy'])){

                                    if($_SESSION['avail_ecnomy']>0)
                                    echo $_SESSION['avail_ecnomy']." Room Available";
                                    else
                                    echo " Room Not Available";}

                                    ?></font>
                                <div class="explor_footer">
                                    <div class="pull-left">
                                        <h3>₹<?php echo $room_price1 ?><span>/ Day</span></h3>
                                    </div>
                                    <div><br><br>
                                        <a class="book_now_btn" href="room-details.php?id=1">View details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
          
                    </div>
                        <div class="col-md-4 col-sm-6">
                        <div class="explor_item">
                            <a href="room-details.php?id=2" class="room_image">
                                <img src="img/room/room-2.jpg" alt="">
                            </a>
                            <div class="explor_text">
                                <a href="room-details.php?id=2"><h4><?php echo $room_name2;?></h4></a>
                                <ul>
                                    <li><a><?php echo strtoupper($room_desc2); ?></a></li>
                                    
                                </ul>
                                 <font color="red"><?php if(isset($_SESSION['avail_ecnomy'])){

                                    if($_SESSION['available_standerd']>0)
                                    echo $_SESSION['available_standerd']." Room Available";
                                    else
                                    echo " Room Not Available";}

                                    ?></font>
                                <div class="explor_footer">
                                    <div class="pull-left">
                                        <h3>₹<?php echo $room_price2; ?><span>/ Day</span></h3>
                                    </div>
                                    <div ><br><br>
                                        <a class="book_now_btn" href="room-details.php?id=2" >View details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </section>
        <!--================End Explor Room Area =================-->
        <!--   <section class="latest_news_area client_twin_area">
            <br><br>
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row latest_news_left">
                            <div class="left_ex_title">
                                <h2>Latest <span>News</span></h2>
                            </div>
                            <div class="col-sm-6">
                                <div class="l_news_item">
                                    <a href="blog-details.html" class="news_img">
                                        <img src="img/blog/latest-news/l-news-1.jpg" alt="">
                                    </a>
                                    <div class="news_text">
                                        <a class="l_date" href="#">26 Aug 2017</a>
                                        <a href="#"><h4>A Night in Resort with Family</h4></a>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusa nt ium dolor emque ...</p>
                                        <a class="news_more" href="blog-details.html">Read more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="l_news_item">
                                    <a href="blog-details.html" class="news_img">
                                        <img src="img/blog/latest-news/l-news-2.jpg" alt="">
                                    </a>
                                    <div class="news_text">
                                        <a class="l_date" href="#">26 Aug 2017</a>
                                        <a href="#"><h4>A Night in Resort with Family</h4></a>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusa nt ium dolor emque ...</p>
                                        <a class="news_more" href="blog-details.html">Read more</a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="right_event">
                            <div class="left_ex_title">
                                <h2>Upcoming <span>Events</span></h2>
                            </div>
                            <div class="right_event_area">
                                <div class="media">
                                    <div class="media-left">
                                        <h3>17<span>Aug</span></h3>
                                    </div>
                                    <div class="media-body">
                                        <h4>Anneversay of our resort</h4>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <h3>25<span>Dec</span></h3>
                                    </div>
                                    <div class="media-body">
                                        <h4>Anneversay of our resort</h4>
                                    </div>
                                </div>
                                <a class="all_s_btn" href="#">view all events</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>!-->
        <!--================Video Area =================-->
       
        <!--================End Video Area =================-->
        
     
        
        <!--================Discount Area =================-->
        <section class="discount_area">
            <div class="container">
                <div class="row discount_inner">
                   
                    <div class="col-md-12" align="center">
                        <div class="discount_right_content">
                            
                            <h4>You Are The One  <br /> We Have Been Waiting For </h4>
                            <a class="book_now_btn" href="function/booknow.php">book now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Discount Area =================-->
        
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