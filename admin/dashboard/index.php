<?php 
$url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
include_once('../../function/database.php');
session_start();
$_SESSION['alert_type']='w3-panel w3-blue w3-display-container';
$_SESSION['alert_typeclass']='w3-button w3-blue w3-large w3-display-topright';
$_SESSION['alert_msg']='Please Check Whether The Room Is Available Or Not';
$_SESSION['alert_typei']='Info';
$conn=connection();
if($_SESSION['login_status']!="true")
{
    header('location:../');
}
$earning=mysqli_query($conn,"select sum(amount) from booking where status='paid';");
$earningexe=mysqli_fetch_array($earning);
$inquiryexe=mysqli_query($conn,"SELECT * FROM message ORDER BY id DESC;");
$inquiry=mysqli_affected_rows($conn);
$inquiry_result=mysqli_fetch_array($inquiryexe);
$new_bookingexe=mysqli_query($conn,"select * from booking where month(bookingdate)=month(current_date());");
$new_booking=mysqli_affected_rows($conn);
$oderexe=mysqli_query($conn,"select * from booking;");
$oder=mysqli_affected_rows($conn);
$result = mysqli_query($conn,"SELECT * FROM booking where month(bookingdate)=month(current_date()) ORDER BY id DESC ");

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
    <title>Kairali Resort | Home
</title>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<!-- icons -->
    <link href="assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<!--bootstrap -->
	<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="assets/plugins/summernote/summernote.css" rel="stylesheet">
	<!-- morris chart -->
    <link href="assets/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="assets/plugins/material/material.min.css">
	<link rel="stylesheet" href="assets/css/material_style.css">
	<!-- animation -->
	<link href="assets/css/pages/animate_page.css" rel="stylesheet">
	<!-- Template Styles -->
    <link href="assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/theme-color.css" rel="stylesheet" type="text/css" />

 
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
                                    <a href="http://techzia.in">
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
	                        
	                        <li class="nav-item start active">
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
	                         <li class="nav-item">
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
	                                <li class="nav-item">
	                                    <a href="add_photo.php" class="nav-link ">
	                                        <span class="title">Add photos</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </li>

	                        
	                      <br><br><br><br><br><br><br><br><br><br><br>





	                            </ul>
	                        </li>
	                    </ul>
	                </div>
                </div>
            </div>
            <!-- end sidebar menu --> 
			<!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Dashboard</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                   <!-- start widget -->
					<div class="state-overview">
						<div class="row">
					        <div class="col-xl-3 col-md-6 col-12">
					          <div class="info-box bg-blue">
					            <span class="info-box-icon push-bottom"><i class="material-icons">style</i></span>
					            <div class="info-box-content">
					              <span class="info-box-text">Orders</span><br>
					              <span class="info-box-number"><?php echo $oder; ?></span>
					            
					             
					            </div>
					            <!-- /.info-box-content -->
					          </div>
					          <!-- /.info-box -->
					        </div>
					        <!-- /.col -->
					        <div class="col-xl-3 col-md-6 col-12">
					          <div class="info-box bg-orange">
					            <span class="info-box-icon push-bottom"><i class="material-icons">card_travel</i></span>
					            <div class="info-box-content">
					              <span class="info-box-text">New Booking</span><br>
					              <span class="info-box-number"><?php echo $new_booking;  ?></span>
					             
					            </div>
					            <!-- /.info-box-content -->
					          </div>
					          <!-- /.info-box -->
					        </div>
					        <!-- /.col -->
					        <div class="col-xl-3 col-md-6 col-12">
					          <div class="info-box bg-purple">
					            <span class="info-box-icon push-bottom"><i class="material-icons">phone_in_talk</i></span>
					            <div class="info-box-content">
					              <span class="info-box-text">Inquiry</span><br>
					              <span class="info-box-number"><?php echo $inquiry; ?></span>
					            
					            </div>
					            <!-- /.info-box-content -->
					          </div>
					          <!-- /.info-box -->
					        </div>
					        <!-- /.col -->
					        <div class="col-xl-3 col-md-6 col-12">
					          <div class="info-box bg-success">
					            <span class="info-box-icon push-bottom"><i class="material-icons">monetization_on</i></span>
					            <div class="info-box-content">
					              <span class="info-box-text">Total Earning</span><br>
					              <span class="info-box-number"> ₹ <?php echo $earningexe['sum(amount)']; ?></span><span>  </span>
					             
					            </div>
					            <!-- /.info-box-content -->
					          </div>
					          <!-- /.info-box -->
					        </div>
					        <!-- /.col -->
					      </div>
						</div>
					<!-- end widget -->
                     <!-- chart start -->
                  

                     <!-- start Payment Details -->
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card  card-box">
                                <div class="card-head">
                                    <header>New Booking Details</header>
                                    <div class="tools">
                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
	                                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
	                                    <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                    </div>
                                </div>
                                <div class="card-body ">
                                  <div class="table-wrap">
										<div class="table-responsive">
											<table class="table display product-overview mb-30" id="support_table5">
												<thead>
													<tr>
														<th>No</th>
														<th>Name</th>
														<th>Check In</th>
														<th>Check Out</th>
														<th>Status</th>
														<th>Phone</th>
														<th>Room Type</th>
														<th>Edit</th>
													</tr>
												</thead>
												<tbody>
													<?php
													$i=1;
													while($row = mysqli_fetch_array($result)){

														?>

													<tr>
														<td><?php echo $i++; ?></td>
														<td><?php echo ucfirst($row['name']) ;  ?></td>
														<td><?php  $date=$row['arrival'] ;
														$newDate = date("d/m/Y", strtotime($date)); 
														echo $newDate;
														?>
															
														</td>
														<td><?php  $date=$row['departure'] ;
														$newDate = date("d/m/Y", strtotime($date)); 
														echo $newDate;
														?>
														</td>
														<td>
														<?php
														if(($row['status']=='paid')&&($row['paymentid']!=null))
															echo "<span class='label label-sm label-success'>paid</span>";
														elseif($row['status']=='unpaid')
															echo "<span class='label label-sm label-danger'>unpaid</span>";
														else
															echo "<span class='label label-sm label-danger'>Error</span>";

														?>
														
														</td>
														<td><?php echo $row['phno'] ; ?></td>
														<td><?php echo ucfirst($row['roomtype']) ; ?></td>
														<td>
															<a href="edit_booking.php?id=<?php echo $row['id']; ?>" class="btn btn-tbl-edit btn-xs">
																<i class="fa fa-pencil"></i>
																
															</a>
															<?php
																if($row['status']=='paid'){
															 ?>
															<a href="invoice.php?id=<?php echo $row['id']; ?>&checkin=<?php echo $row['arrival']; ?>&checkout=<?php echo $row['departure']; ?>&phno=<?php echo $row['phno']; ?>" class="btn btn-tbl-edit btn-xs">
																<i class="fa fa-print"></i>
															</a>
															<?php
																}
															?>

															<a class="btn btn-tbl-delete btn-xs" href="../../function/delete.php?id=<?php echo $row['id']; ?>&redirect=<?php echo $url; ?>" onclick="return confirm('Are you sure you want to delete this item?');">
																<i class="fa fa-trash-o " ></i>
															</a>

														</td>
													</tr>
													<?php
												}
													?>


												


													
												</tbody>
											</table>
										</div>
									</div>	
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end Payment Details -->
                    <div class="row">
							<div class="col-md-12 col-sm-12">
                                   <div class="card-box ">
                                <div class="card-head">
                                    <header>Inquiry</header>
                                    <div class="tools">
                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
	                                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
	                                    <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                    </div>
                                </div>
                                <div class="card-body ">
                                  <div class="row">
                                        <ul class="docListWindow small-slimscroll-style">
                                <?php
                                $msgprint=mysqli_query($conn,"SELECT * FROM message ORDER BY id DESC;");
                                while($msg= mysqli_fetch_array($msgprint)){
                                ?>
                                            <li>
                                                <div class="row">
	                                            	<div class="col-md-8 col-sm-8">
		                                                
		                                                <div class="details">
		                                                    <div class="title">
		                                                        <a href="#"><?php echo ucfirst($msg['name']); ?></a> 
		                                                        <p class="rating-text"><?php echo nl2br($msg['msg']); ?></p>
		                                                        <-------------------->
		                                                        <p class="rating-text">Phone Number:+91  <?php echo $msg['phno'];  ?></p>
		                                                        <p class="rating-text">Email:  <?php echo $msg['email'];  ?></p>
		                                                    </div>
		                                                </div>
	                                                </div>
	                                                <div class="col-md-4 col-sm-4 rating-style">
		                                                <i class="material-icons">star</i>
		                                                <i class="material-icons">star_half</i>
		                                                <i class="material-icons">star_border</i>
		                                                <i class="material-icons">star_border</i>
		                                                <i class="material-icons">star_border</i>
	                                                </div>
                                                </div>
                                            </li>
                                            <?php
                                        }
                                            ?>
                                     
                                           
                                        </ul>
                                       
                                </div>
                            </div>
							</div>
							
                                            </li>
                                        </ul>
                                 </div>
                             </div>
                         </div>
						</div>
                </div>
            </div>
            <!-- end page content -->
            <!-- start chat sidebar -->
           
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
    <script src="assets/plugins/sparkline/jquery.sparkline.min.js" ></script>
	<script src="assets/js/pages/sparkline/sparkline-data.js" ></script>
    <!-- Common js-->
	<script src="assets/js/app.js" ></script>
    <script src="assets/js/layout.js" ></script>
    <script src="assets/js/theme-color.js" ></script>
    <!-- material -->
    <script src="assets/plugins/material/material.min.js"></script>
    <!-- animation -->
    <script src="assets/js/pages/ui/animations.js" ></script>
    <!-- morris chart -->
    <script src="assets/plugins/morris/morris.min.js" ></script>
    <script src="assets/plugins/morris/raphael-min.js" ></script>
    <script src="assets/js/pages/chart/morris/morris_home_data.js" ></script>
    
    <!-- end js include path -->
  </body>
</html>