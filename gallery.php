<?php
include_once('function/database.php');
session_start();
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
        <title>Kairali Resort | Gallery Grid</title>

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
        <link href="vendors/lightbox/simpleLightbox.css" rel="stylesheet">
        
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
                                    <li class="dropdown submenu active"><a href="gallery.php">GALLERY</a></li>
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
        </header>
        <!--================Header Area =================-->
        
        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_inner_content">
                    <h3>Gallery Grid</h3>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li  class="active"><a href="">gallery grid</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
        
        <!--================End Banner Area =================-->
        <section class="grid_gallery_area">
            <div class="container">
                <div class="grid_gallery_inner cobage_gallery_inner">
                    <ul class="gallery_filter">
                        <li class="active" data-filter="*"><a href="#">All</a></li>
                        <li data-filter=".rooms"><a href="#">Rooms</a></li>
                        <li data-filter=".activities"><a href="#">Activities</a></li>
                        <li data-filter=".events"><a href="#">Events</a></li>
                        <li data-filter=".interior"><a href="#">INterior</a></li>
                        <li data-filter=".restaurant"><a href="#">Restaurant</a></li>
                       
                    </ul>
                    <div class="row cobage_g_masonary imageGallery1">
                    
<?php
        $qu=mysqli_query($conn,"select * from images order by id desc;");
        while($row=mysqli_fetch_array($qu))
        {
?>
                        <div class="col-md-3 col-sm-4 col-xs-6 <?php echo strtolower($row['cat']); ?>">
                            <div class="grid_gallery_item">
                                <img src="function/images/<?php echo $row['image']; ?>" alt="">
                                <div class="resort_g_hover">
                                    <div class="resort_hover_inner">
                                        <a class="light" href="function/images/<?php echo $row['image']; ?>"><i class="fa fa-expand" aria-hidden="true"></i></a> 
                                        <h5>Our Gallery</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        <?php
                    }
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
        
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