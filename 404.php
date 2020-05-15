
<?php
include_once('function/database.php');
  $conn=connection();
$fetch=mysqli_query($conn,"select * from profile where id=1");
$fetch_array=mysqli_fetch_array($fetch);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
   
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Kairali Resort | 404 </title>

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

        <!--================Error Area =================-->
        <section class="error_area">
            <div class="container">
                <div class="error_inner_text_area">
                    <div class="error_inner_text">
                        <h3>404</h3>
                        <h4>Oops! That page can’t be found</h4>
                        <h5>Sorry, but the page you are looking for does not existing</h5>
                        <a class="book_now_btn" href="index.php">Go to home page</a>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Error Area =================-->
        
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
        
        
        
        
        
        
        
        <!--================End Footer Area =================-->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-2.2.4.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Rev slider js -->
        <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        
        <script src="vendors/magnify-popup/jquery.magnific-popup.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="vendors/counterup/waypoints.min.js"></script>
        <script src="vendors/counterup/jquery.counterup.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
        <script src="vendors/bootstrap-selector/bootstrap-select.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        
        <!-- instafeed-->
        <script type="text/javascript" src="vendors/instafeed/instafeed.min.js"></script>
        <script type="text/javascript" src="vendors/instafeed/script.js"></script>
        
        <script src="js/theme.js"></script>
    </body>
</html>