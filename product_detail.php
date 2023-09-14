<?php
	ob_start();
	session_start();
	
	$_SESSION['sessionid']=session_id();
	
	

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>E-treading | Home Page</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
        <script src="Ajax/jquery.js"></script>
        
        <script language="javascript" type="text/ecmascript">
			function addtocart()
			{
				$.ajax({
					url : 'addtocart.php',
					type:'POST',
					data:{quty:$("#cart_val").val()},
					success: function(data)
					{
						if(data)
						{
							alert('Your Product Added to Cart Sucessfully');
						}
					}
					});
			}
		
		</script>
		<!-- bootstrap -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
		
		<link href="themes/css/bootstrappage.css" rel="stylesheet"/>
		
		<!-- global styles -->
		<link href="themes/css/flexslider.css" rel="stylesheet"/>
		<link href="themes/css/main.css" rel="stylesheet"/>

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
						 <!-- <input type="text" class="input-block-level search-query" Placeholder="eg. T-sirt"> -->
					</form>
				</div>
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">				
							
							<li><a href="cart.php">Your Cart</a></li>
							<li><a href="checkout.php">Checkout</a></li>					
							<li><a href="login.php">Login</a></li>		
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<a href="index.php" class="logo pull-left"><div style="padding-bottom:2px; font-size:24px;padding-top:2px;"><strong>AUTOMATIC E-TRADING</strong></div>  </a>
					<nav id="menu" class="pull-right">
						
					</nav>
				</div>
			</section>			
			<section class="header_text sub">
			<img class="pageBanner" src="themes/images/ben.jpg" alt="New products" >
				<h4><span>PRODUCT DETAIL</span></h4>
			</section>
            
            <?php
				include"config.php";


				$id=$_SESSION['prdtid']=$_GET['id'];
				
				$get_data=mysql_query("select * from product_tb where Id ='$id'") or die(mysql_error());
				
				while($row=mysql_fetch_array($get_data))
				{
				
			?>
			<section class="main-content">				
				<div class="row">						
					<div class="span9">
						<div class="row">
							<div class="span4">
								<a href="Admin/Procdct/Our/<?php echo $row['Image1']; ?>" class="thumbnail" data-fancybox-group="group1" title="Description 1"><img alt="" src="Admin/Procdct/Our/<?php echo $row['Image1']; ?>"></a>												
								<ul class="thumbnails small">								
									
								</ul>
							</div>
							
							<div class="span5">
								<address>
									<strong>Brand:</strong> <span><?php echo $row['Brand']; ?></span><br>
									<strong>Product Code:</strong> <span><?php echo $row['Product_code']; ?></span><br>
									
									<strong>Availability:</strong> <span><?php 
									
									if($row['Stock']==0)
									{
										echo "Out Of Stock";
									}
									else
									{
										echo "Available";
									}
									
									?></span><br>								
								</address>									
								<h4><strong>Price: Rs.<?php echo $row['Price']; ?></strong></h4>
							</div>
							<div class="span5">
								<Div class="form-inline">
									
									
									<p>&nbsp;</p>
									<label>Qty:</label>
									<input type="text" class="span1" value="1" id="cart_val">
									<button class="btn btn-inverse" onClick="addtocart()" type="submit">Add to cart</button>
								</div>
							</div>							
						</div>
						<div class="row">
							<div class="span9">
								<ul class="nav nav-tabs" id="myTab">
									<li class="active"><a href="#home">Description</a></li>
									
								</ul>							 
								<div class="tab-content">
									<div class="tab-pane active" id="home"><?php echo $row['Description'];  ?></div>
									
								</div>							
							</div>	
                            <?php  } ?>					
							
								</section>			
			<section id="footer-bar">
				<div class="row">
					<div class="span3">
						<h4>Navigation</h4>
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
						
					</div>					
				</div>	
			</section>
			<section id="copyright">
				<span>Copyright 2015 &copy; <a href="#">E-Treading.com.</a></span>
			</section>
		</div>
	<script src="themes/js/common.js"></script>
		<script>
			$(function () {
				$('#myTab a:first').tab('show');
				$('#myTab a').click(function (e) {
					e.preventDefault();
					$(this).tab('show');
				})
			})
			$(document).ready(function() {
				$('.thumbnail').fancybox({
					openEffect  : 'none',
					closeEffect : 'none'
				});
				
				$('#myCarousel-2').carousel({
                    interval: 2500
                });								
			});
		</script>
    </body>
</html>