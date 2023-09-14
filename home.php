<?php
ob_start();
session_start();

$name=$_SESSION["sess_user_name"];
if($name=="Login.php")
{
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>AUTOMATIC E-TRADING FOR SMALL SCALE INDUSTRIES</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">		
		<link href="themes/css/bootstrappage.css" rel="stylesheet"/>
		
		<!-- global styles -->
		<link href="themes/css/flexslider.css" rel="stylesheet"/>
		<link href="themes/css/main.css" rel="stylesheet"/>
		<script src="Ajax/jquery.js"></script>
        <script src="Ajax/jquery-ui.min.js"></script>
        <link href="Ajax/jquery-ui.min.css" type="text/css" rel="stylesheet">
		<!-- scripts -->
		<script src="themes/js/jquery-1.7.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>				
		<script src="themes/js/superfish.js"></script>	
		<script src="themes/js/jquery.scrolltotop.js"></script>
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>
    <body>		
		<div id="top-bar" class="container">
			<div class="row">
				<div class="span4">
					<form method="POST" class="search_form">
					<a href="index.php" class="logo pull-left"><div style="padding-bottom:2px; font-size:24px;padding-top:2px;"><strong>
Online Car Parts Shopping
</strong></div>  </a>
						 <!-- <input type="text" class="input-block-level search-query" Placeholder=""> -->
					</form>
				</div>
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">				
							<li><a href="cart.php">Your Cart</a></li>
							<li><a href="checkout.php">Checkout</a></li>					
							<li><a href="index.php">Home</a></li>			
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<a href="index.html" class="logo pull-left"><div style="padding-bottom:2px; font-size:24px;padding-top:2px;"><strong>AUTOMATIC E-TRADING</strong></div>  </a>
					<nav id="menu" class="pull-right">
						<ul>
																					
										
							<li><a href="#">View History</a>
								<ul>									
									<li><a href="#">View Invoice</a></li>
									<li><a href="#">VIew Products</a></li>
									
								</ul>
							</li>
                            
                            <li><a href="#">Account Details</a>					
								<ul>
									<li><a href="#">Change Password </a></li>									
									<li><a href="#l">Logout</a></li>									
								</ul>
							</li>								
							
						</ul>
					</nav>
				</div>
			</section>
			<section class="main-content">
				<div class="row">
					<div class="span12">													
						
						
					</div>				
				</div>
			</section>
				<section id="footer-bar">
				<div class="row">
					<div class="span3">
						<h4>Our Page</h4>
						<ul class="nav">
							<li><a href="index.php">Homepage</a></li>  
							<li><a href="about.php">About Us</a></li>
							<li><a href="contact.php">Contac Us</a></li>
							<li><a href="cart.php">Your Cart</a></li>
							<li><a href="register.php">Login</a></li>							
						</ul>					
					</div>
					<div class="span4">
						
					</div>
					<div class="span5">
						
						
						<br/>
						
					</div>					
				</div>	
			</section>
			<section id="copyright">
				<span>Copyright 2013 &copy; E-trading.com</span>
			</section>
		</div>
		<script src="themes/js/common.js"></script>
		<script>
			$(document).ready(function() {
				$('#checkout').click(function (e) {
					document.location.href = "checkout.html";
				})
			});
		</script>		
    </body>
</html>