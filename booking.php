
<?php  
error_reporting(E_ALL);
ini_set('display_errors', 0);
$actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
include_once('function/database.php');
session_start();
        /*invalid state*/
        if(!isset($_SESSION['arrival'])){
            header('location:index.php');
            }
if(!isset($_SESSION['cart']))
{
$_SESSION['cart']=array();
$_SESSION['cart'][1]=0;
$_SESSION['cart'][2]=0;
}
$conn=connection();
$tottel_rooms=$_SESSION['cart'][1]+$_SESSION['cart'][2];

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
        <title>Kairali Resort | Booking</title>

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
                                    <li class="dropdown submenu active"><a href="room.php">Rooms</a></li>
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
                    <h3>Booking</h3>
                    <ul>
                        <li ><a href="index.php">Home</a></li>
                        <li class="active"><a href="">booking</a></li>
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
                           <?php
                           if(($_SESSION['cart'][1]!=0)||($_SESSION['cart'][2]!=0))
                           {
                           ?> 
                            <div class="room_service_list">
                                 <h3 class="room_d_title">Room Booking</h3>
                            </div>
                      <h5><b>NOTE: <font color='green'> 100% Safe & Secure Gateway</font></b></h5>
                            <div class="room_details_comment">
                                
                                <form class="contact_us_form row" action="function/bookroom.php" method="post" id="contactForm" >
                                    <div class="form-group col-md-12">
                                        <input type="text" class="form-control" name="name" placeholder="Name*" autofocus required="Enter The Name" value="<?php if(isset($_SESSION['name'])){echo $_SESSION['name']; } ?>">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input type="email" class="form-control" name="email" placeholder="Email*" required  value="<?php if(isset($_SESSION['email'])){echo $_SESSION['email']; };?>">
                                    </div>


                                    <div class="form-group col-md-12">
                                        <select class="form-control" name="gender"  required  value="MALE">
                                            <option  value="">GENDER*</option>
                                            <option>MALE</option>
                                             <option>FEMALE</option>
                                             <option>OTHER</option></select>
                                    </div>

                                     <div class="form-group col-md-12">
                                        <input type="number" class="form-control" name="phno" max="9999999999"  max="1111111111"  placeholder="PHONE NUMBER*(9876543210)" required value="<?php if(isset($_SESSION['phno'])){echo $_SESSION['phno']; } ?>" >
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input type="text" class="form-control" name="arrival" readonly    placeholder="ARRIVAL*" required  value="<?php if(isset($_SESSION['arrival'])){echo $_SESSION['arrival']; } ?>">
                                        </div>
                                        <div class="form-group col-md-12">
                                        <input type="text"  class="form-control" name="departure" readonly   placeholder="DEPARTURE*" required value="<?php if(isset($_SESSION['departure'])){echo $_SESSION['departure']; } ?>">
                                    </div>

                                     <div class="form-group col-md-12">
                                        <select class="form-control" type="number" name="adults"  required  value="<?php if(isset($_SESSION['adults'])){echo $_SESSION['adults']; } ?>">
                                            <option  value="" >ADULTS*</option>
                                    <?php
                                    for($i=1;$i<=$tottel_rooms*3;$i++)
                                    {

                                    ?>
                                             <option><?php echo $i;   ?></option>
                                             
                                        <?php
                                    }
                                        ?>
                                         </select>
                                    </div>
                                     <div class="form-group col-md-12">
                                        <select class="form-control" type="number" name="children"  required value="0" value="<?php if(isset($_SESSION['children'])){echo $_SESSION['children']; } ?>">
                                            <option  value="" >CHILDREN*</option>
                                            
                                            <?php
                                    for($i=0;$i<=$tottel_rooms*2;$i++)
                                    {

                                    ?>
                                             <option><?php echo $i;   ?></option>
                                             
                                        <?php
                                    }
                                        ?>
                                        
                                         </select>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <select class="form-control" type="number" name="method_payment"  required value="<?php if(isset($_SESSION['method_payment'])){echo $_SESSION['method_payment']; } ?>">
                                            <option  value="" >METHOD OF PAYMENT*</option>
                                            
                                             <option>ONLINE PAYMENT</option>
                                             <option>OFFLINE PAYMENT</option>
                                             
                                         </select>
                                    </div>

                                    <div class="form-group col-md-12">
                                     <textarea class="form-control" name="address"  rows="1" placeholder="ADDRESS*" required value="<?php if(isset($_SESSION['address'])){echo $_SESSION['address']; } ?>"></textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <button type="submit" value="submit"  class="btn submit_btn form-control" required  >BOOK ROOM</button>
                                    </div>

                                    <?php 
                                }
                                    ?>


                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="search_right_sidebar">
                          
                              
                           
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
                               
                                <th><h5><b>Tottel:<?php $tottel=$_SESSION['cart'][1]*$room_pricecart+$_SESSION['cart'][2]*$room_pricecart1;
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


                             <?php
                                }
                            
                             ?>
                        

                                <div class="book_now_button">
                                <a class="book_now_btn_black1" href="room.php">ADD ROOM</a>
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