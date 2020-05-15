
<?php
include_once('function/database.php');
 $conn=connection();
$fetch=mysqli_query($conn,"select * from profile where id=1");
$fetch_array=mysqli_fetch_array($fetch);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
              <style>


</style>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Kairali Resort | About-Us</title>

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
        
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</script></head>
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
                                    <li><a href="room.php">Rooms</a></li>
                                    <li><a href="gallery.php">GALLERY</a></li>
                                  <li class="dropdown submenu active"><a href="about-us.php">About Us</a></li>
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
        </header>
        <!--================Header Area =================-->
        
        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_inner_content">
                    <h3>About Us</h3>
                    <ul>
                        <li ><a href="index.php">Home</a></li>
                        <li class="active"><a href="about-us.php">About Us</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
        
        <!--================Resort Story Area =================-->
        <section class="introduction_area resort_story_area">
            <div class="container">
                <div class="row introduction_inner">
                    <div class="col-md-5">
                        <a href="#" class="introduction_img">
                            <img src="img/introduction-img.jpg" alt="">
                        </a>
                       
                        <div class="introduction_left_text">
                            
                            <h6></h6>
                            <h4>LOCATION</h4>
                            <p>Kakkadampoyil is situated in Koodaranhi Panchayat in Kozhikode District. This hill top village is one of the coolest tourist destination in Malabar region. It is about 15 km from Koodaranhi, 19 km from Thiruvambady and 24 km from the Nilambur. Calicut city is about 50 km from here. There are many indigenous tribal groups in this area. It is set high on the Western Ghats, with altitudes ranging from 700 ft to 2100 ft. Kozhippara waterfalls is situated near by here. KSRTC Buses are running services from Calicut and have few buses from Thiruvambady and Nilambur towns. There is also a continuous Jeep service from Koodaranhi town to Kakkadampoyil</p>
                            
                        </div>
                     
                    </div>
                    <div class="col-md-7">
                        <div class="introduction_left_text">
                            <div class="resort_title">
                                <h2>Kairali  <span>resort</span></h2>
                                <h5>give best service to our customers</h5>
                            </div>
                            <h6><?php echo  nl2br($fetch_array['resort_about']); ?></h6>
                            <h4>WE ARE READY TO GUIDE YOU</h4>
                            <p><?php echo  nl2br($fetch_array['resort_features']); ?></p>
                            <p>A large number of tourists come to Kakkadampoyil to enjoy the cool climate and to stay away from the bustle of the city.

On the mountain ranges of Western Ghats bordering Kerala. Kakkadanpoyil village, an unexplored hill station 48 km away from Calicut City. Surrounded by forests, misty hill ranges, deserted roads, untouched waterfalls (Kozhippara waterfalls), make the village worth a visit. Facilities for tourists are available</p>
                           <center> <a class="about_btn_b" href="contact-us.php">contact us</a></center>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Resort Story Area =================-->
        
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
        
        <!--================Client Testimonial Area =================-->
     <!--   <section class="client_area client_three">
            <div class="container">
                <div class="clients_slider owl-carousel">
                    <div class="item">
                        <div class="media">
                            <div class="media-left">
                                <img src="img/clients/client-1.png" alt="">
                            </div>
                            <div class="media-body">
                                <p><i>“</i> ................................. </p>
                                <a href="#"><h4>- Michale John</h4></a>
                                <h5>Ceo of Minda</h5>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="media">
                            <div class="media-left">
                                <img src="img/clients/client-1.png" alt="">
                            </div>
                            <div class="media-body">
                                <p><i>“</i> ........................... </p>
                                <a href="#"><h4>- Michale John</h4></a>
                                <h5>Ceo of Minda</h5>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="media">
                            <div class="media-left">
                                <img src="img/clients/client-1.png" alt="">
                            </div>
                            <div class="media-body">
                                <p><i>“</i> ........................... </p>
                                <a href="#"><h4>- Michale John</h4></a>
                                <h5>Ceo of Minda</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!--================End Client Testimonial Area =================-->
       
        
        <!--================Fun Fact Area =================-->
  <!--      <section class="fun_fact_area about_fun_fact">
            <div class="container">
                <div class="row">
                    <div class="fun_fact_box row m0">
                        <div class="col-md-3 col-sm-6">
                            <div class="media">
                                <div class="media-left">
                                    <h3 class="counter">0</h3>
                                </div>
                                <div class="media-body">
                                    <h4>new <br /> friendships</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="media">
                                <div class="media-left">
                                    <h3 class="counter">0</h3>
                                </div>
                                <div class="media-body">
                                    <h4>International <br /> Guests</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="media">
                                <div class="media-left">
                                    <h3 class="counter">0</h3>
                                </div>
                                <div class="media-body">
                                    <h4>five stars <br /> rating</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="media">
                                <div class="media-left">
                                    <h3 class="counter">0</h3>
                                </div>
                                <div class="media-body">
                                    <h4>Served <br /> Breakfast</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!--================End Fun Fact Area =================-->
        
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