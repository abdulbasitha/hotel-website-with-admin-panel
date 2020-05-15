<?php 
$url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
include_once('../../function/database.php');
session_start();
$conn=connection();
if($_SESSION['login_status']!="true")
{
    header('location:../');
}

?>
<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="SmartUniversity" />
    <title>Kairali Resort</title>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<!-- icons -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <link href="assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<!--bootstrap -->
	<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="assets/plugins/material/material.min.css">
	<link rel="stylesheet" href="assets/css/material_style.css">
	<!-- animation -->
	<link href="assets/css/pages/animate_page.css" rel="stylesheet">
	<!-- Template Styles -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/theme-color.css" rel="stylesheet" type="text/css" />
	<!-- dropzone -->
    <link href="assets/plugins/dropzone/dropzone.css" rel="stylesheet" media="screen">
    <!-- Date Time item CSS -->
    <link rel="stylesheet" href="assets/plugins/material-datetimepicker/bootstrap-material-datetimepicker.css" />
	<!-- favicon -->
   <link rel="shortcut icon" href="assets/img/favicon.png" /> 
</head>
<!-- END HEAD -->
<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white dark-sidebar-color logo-dark">
    <div class="page-wrapper">
        <!-- start header -->
		<div class="page-header navbar navbar-fixed-top">
            <div class="page-header-inner ">
                <!-- logo start -->
                <div class="page-logo">
                    <a href="index.php">
                     <img alt="" src="assets/img/logo1.png">
                    <span class="logo-default" ></span> </a>
                </div>
                <!-- logo end -->
				<ul class="nav navbar-nav navbar-left in">
					<li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
				</ul>
                 
                
                <!-- start mobile menu -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                    <span></span>
                </a>
               <!-- end mobile menu -->
                <!-- start header menu -->
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                        <!-- start notification dropdown -->
                      
                        <!-- end notification dropdown -->
                        <!-- start message dropdown -->
                        
                        <!-- end message dropdown -->
                        <!-- start manage user dropdown -->
                        <li class="dropdown dropdown-user">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <img alt="" class="img-circle " src="assets/img/dp.jpg" />
                                <span class="username username-hide-on-mobile"> <?php echo strtoupper($_SESSION['admin_name']); ?> </span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default animated jello">
                               <li>
                                    <a href="profile.php">
                                        <i class="icon-user"></i> Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-directions"></i> Help
                                    </a>
                                </li>
                              
                                <li>
                                    <a href="../../function/logout.php">
                                        <i class="icon-logout"></i> Log Out </a>
                                </li>
                            </ul>
                        </li>
                        <!-- end manage user dropdown -->
                        <li class="dropdown dropdown-quick-sidebar-toggler">
                            
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end header -->
        <!-- start page container -->
        <div class="page-container">
 			<!-- start sidebar menu -->
<div class="sidebar-container">
                <div class="sidemenu-container navbar-collapse collapse fixed-menu">
                    <div id="remove-scroll">
                        <ul class="sidemenu page-header-fixed p-t-20" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                            <li class="sidebar-toggler-wrapper hide">
                                <div class="sidebar-toggler">
                                    <span></span>
                                </div>
                            </li>
                            <li class="sidebar-user-panel">
                                <div class="user-panel">
                                    <div class="row">
                                            <div class="sidebar-userpic">
                                                <img src="assets/img/dp.jpg" class="img-responsive" alt=""> </div>
                                        </div>
                                        <div class="profile-usertitle">
                                            <div class="sidebar-userpic-name">  <?php echo strtoupper($_SESSION['admin_name']); ?> </div>
                                           
                                        </div>
                                        <div class="sidebar-userpic-btn">
                                            <a class="tooltips" href="profile.php" data-placement="top" data-original-title="Profile">
                                           <i class="material-icons">person_outline</i>
                                            </a>
                                            <a class="tooltips" href="https://accounts.google.com/signin" data-placement="top" data-original-title="Mail">
                                                <i class="material-icons">mail_outline</i>
                                            </a>
                                           
                                            <a class="tooltips" href="../../function/logout.php" data-placement="top" data-original-title="Logout">
                                                <i class="material-icons">input</i>
                                            </a>
                                        </div>
                                </div>
                            
                            <li class="nav-item">
                                <a href="index.php" class="nav-link nav-toggle">
                                    <i class="material-icons">dashboard</i>
                                    <span class="title">Dashboard</span>
                                    <span class="selected"></span>
                                    
                                </a>
                               
                            </li>
                            
                            <li class="nav-item">
                                <a href="#" class="nav-link nav-toggle">
                                    <i class="material-icons">business_center</i>
                                    <span class="title">Booking</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item">
                                        <a href="new_booking.php" class="nav-link ">
                                            <span class="title">New Booking</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="view_booking.php" class="nav-link ">
                                            <span class="title">View Booking</span>
                                        </a>
                                    </li>
                                    
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link nav-toggle">
                                    <i class="material-icons">vpn_key</i>
                                    <span class="title">Rooms</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                   
                                    <li class="nav-item">
                                        <a href="all_rooms.php" class="nav-link ">
                                            <span class="title">View All Rooms</span>
                                        </a>
                                    </li>
                                    
                                </ul>
                            </li>
                             <li class="nav-item start active">
                                <a href="#" class="nav-link nav-toggle">
                                    <i class="material-icons">photo</i>
                                    <span class="title">Photos</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                   
                                    <li class="nav-item">
                                        <a href="view_photo.php" class="nav-link ">
                                            <span class="title">View Photos</span>
                                        </a>
                                    </li>
                                    <li class="nav-item start active">
                                        <a href="add_photo.php" class="nav-link ">
                                            <span class="title">Add photos</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            
                          <br><br><br><br><br><br><br><br><br><br><br>
                      </ul>
                  </li>
              </ul></div>
          </div>
      </div>
			 <!-- end sidebar menu -->
			<!-- start page content -->
            <form action="../../function/upload.php" method="post" enctype="multipart/form-data">
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                                   <!--  alert_start -->
                            <?php 
                            if(isset($_SESSION['alert_type'])&&(isset($_SESSION['alert_msg']))){
                            ?>
                            <div class="<?php echo $_SESSION['alert_type'];  ?>">
                               
                            <span onclick="this.parentElement.style.display='none'"
                            class="<?php echo $_SESSION['alert_typeclass'] ;?>" >&times;</span>
                            <h3><?php echo $_SESSION['alert_typei']; ?></h3>
                            <p><?php echo $_SESSION['alert_msg']; ?></p>
                            </div>
                            <?php
                        }
                        unset($_SESSION['alert_type']);
                         unset($_SESSION['alert_msg']);

                            ?>

                           <!--  alert_end -->
                            <div class=" pull-left">
                                <div class="page-title">Add Photos</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="view_photo.php">Photos</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Add Photos</li>
                            </ol>
                        </div>
                    </div>
                     <div class="row">
						<div class="col-sm-12">
							<div class="card-box">
								<div class="card-head">
									<header>Add Photos</header>
									
								</div>
								<div class="card-body row">
						            <div class="col-lg-6 p-t-20"> 
						              <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
					                     <input class = "mdl-textfield__input" type = "file"  id = "txtRoomNo" name="image" placeholder="" accept="image/*" / required>
					                     <label class = "mdl-textfield__label">Choose Photo</label>
					                  </div>
						            </div>
						            
						           	<div class="col-lg-6 p-t-20"> 
						              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
								            <input class="mdl-textfield__input" type="text" id="sample2" value="" name="category" required tabIndex="-1">
								            <label for="sample2" class="pull-right margin-0">
								                <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
								            </label>
								            <label for="sample2" class="mdl-textfield__label">Category</label>
								            <ul data-mdl-for="sample2" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
								                <li class="mdl-menu__item" data-val="DE">Rooms</li>
								                <li class="mdl-menu__item" data-val="BY">Activities</li>
                                                <li class="mdl-menu__item" data-val="BY">Events</li>
                                                <li class="mdl-menu__item" data-val="BY">Interior</li>
                                                <li class="mdl-menu__item" data-val="BY">Restaurant</li>
								            </ul>
								        </div>
						            </div>
						            
						            
						         
                                      
							         <div class="col-lg-12 p-t-20 text-center"> 
						              	<input type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink" value="Upload">
										</form>
						            </div>
								</div>
							</div>
						</div>
					</div> 
                </div>
            </div>
            <!-- end page content -->
            
        </div>
        <!-- end page container -->
       <!-- start footer -->
        <div class="page-footer">
            <div class="page-footer-inner"> <?php echo date("Y"); ?> &copy; Kairali Resort
  By
             <a href="https://techzia.in" class="makerCss">Techzia</a>
            </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>
        <!-- end footer -->
    </div>
    <!-- start js include path -->
    <script src="assets/plugins/jquery/jquery.min.js" ></script>
    <script src="assets/plugins/popper/popper.min.js" ></script>
    <script src="assets/plugins/jquery-blockui/jquery.blockui.min.js" ></script>
	<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- bootstrap -->
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js" ></script>
    <!-- Common js-->
	<script src="assets/js/app.js" ></script>
    <script src="assets/js/layout.js" ></script>
	<script src="assets/js/theme-color.js" ></script>
	<!-- Material -->
	<script src="assets/plugins/material/material.min.js"></script>
    <script src="assets/js/pages/material_select/getmdl-select.js" ></script>
    <script  src="assets/plugins/material-datetimepicker/moment-with-locales.min.js"></script>
	<script  src="assets/plugins/material-datetimepicker/bootstrap-material-datetimepicker.js"></script>
	<script  src="assets/plugins/material-datetimepicker/datetimepicker.js"></script>
    <!-- dropzone -->
    <script src="assets/plugins/dropzone/dropzone.js" ></script>
    <script src="assets/plugins/dropzone/dropzone-call.js" ></script>
	<!-- animation -->
	<script src="assets/js/pages/ui/animations.js" ></script>
    <!-- end js include path -->
</body>
</html>