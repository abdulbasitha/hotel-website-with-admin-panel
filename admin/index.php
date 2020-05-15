
<?php
error_reporting(E_ALL);
ini_set('display_errors', 0);
session_start();

?>







<!DOCTYPE html>
<html>
	
<head>

	<script src="basith.js"></script>
	<title>Kairali Resort
</title>
	 <link rel="icon" href="img/logo.png" type="image/x-icon" width='100%'>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}


img[src="https://cdn.rawgit.com/000webhost/logo/e9bd13f7/footer-powered-by-000webhost-white2.png"]{
display:none;





}

.alert {
    padding: 20px;
    background-color: #f44336;
    color: white;
}

.closebtn {
    margin-left: 15px;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
}

.closebtn:hover {
    color: black;
}
</style>
</head>
<body>

<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<!-- add header -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php"><h3><b>&nbsp;Kairali Resort</b></h3></a>
		</div>
		<!-- menu items -->
		
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-right">
				
				
				<li class="active"><a href="index.php">Admin</a></li>
			</ul>
		</div>
	</div></nav>
<?php
if($_SESSION['error']==1)
{
	echo "<div class='alert'>";
	echo "<span class='closebtn' onclick='this.parentElement.style.display='none';''>&times;</span>";
	echo ' <center><strong>Error!</strong> Something went wrong please try again later.
</div></center>';

$_SESSION['error']=0;
}
elseif($_SESSION['error']==2)
{
	echo "<div class='alert'>";
	echo "<span class='closebtn' onclick='this.parentElement.style.display='none';''>&times;</span>";
	echo ' <center> Incorrect Username or Password.
</div></center>';

$_SESSION['error']=0;
}

?>

   


<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 well">
			<form role="form" action="login.php" method="post" name="loginform">
				<fieldset>
					<legend>Login</legend>
					
					<div class="form-group">
						<label for="name">Username</label>
						<input type="text" name="b1"  placeholder="Enter Username" required class="form-control" />
					</div>

					<div class="form-group">
						<label for="name">Password</label>
						<input type="Password" placeholder="Enter Password" name="b2" required class="form-control" />
					</div>

					<div class="form-group">
						<input type="submit" name="login" value="Login" class="btn btn-primary" />
					</div>
				</fieldset>
			</form>
			<span class="text-danger"</span>
		</div>
	</div>
	<div class="row">
		
	</div>
</div><br><br><br>
<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
