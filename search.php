<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>E-treading | Home Page</title>
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
						<!--<input type="text" class="input-block-level search-query" Placeholder="eg. T-sirt"> -->
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
			<section class="main-content">
				<div class="row">
					<div class="span12">													
						<div class="row">
							<div class="span12">
								<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line">Searched <strong>Products</strong></span></span></span>
									<span class="pull-right">
										<form action="search.php" method="post">
  	  <div class="form-group">
                                            
                                            <select class="form-control" name="fvalue" id="fvalue">
                                            <?php
												include"config.php";
												
												$select_cat = mysql_query("select * from  categoty_tb") or die(mysql_error());			
													while($row=mysql_fetch_array($select_cat))
													{
													
											?>
                                                <option value="<?php echo $row["name"]; ?>"><?php echo $row["name"]; ?></option>
                                               <?php  } ?>
                                            </select>
                                        </div>

 <input type="submit" value="Filter" class="btn btn-default" name="filter">
   </form>
									</span>
								</h4>
								<div id="myCarousel" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails">	
                                            
                                         <?php
										 	include"config.php";
											 
										    $cat=$_POST["fvalue"];
											$select_our_products=mysql_query("select * from product_tb where type='$cat'") or die(mysql_error());
											
											while($row=mysql_fetch_array($select_our_products))
											{
											
										 
										 ?>											
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="product_detail.php?id=<?Php echo $row['Id']; ?>"><img src="Admin/Procdct/our/<?php echo $row['Image1']; ?>" alt="" /></a></p>
														<a href="product_detail.php?id=<?Php echo $row['Id']; ?>" class="title"><?php echo $row['Product_name'];?></a><br/>
														
														<p class="price">Rs.<?php echo $row['Price']; ?></p>
                                                        
                                                        
													</div>
                                                    
                                                    
												</li>
                                               
										<?php
											}
										?>		
												
												
											</ul>
										</div>
										
									</div>							
								</div>
							</div>						
						</div>
						<br/>
						
							
					</div>				
				</div>
			</section>
			<section class="our_client">
				<h4 class="title"><span class="text">Our Clients</span></h4>
				<div class="row">
                <?php
					include"config.php";
					
					$select_cmp=mysql_query("select * from Clients_tb") or die(mysql_error());
					while($row=mysql_fetch_array($select_cmp))
					{
					
				?>					
					<div class="span2">
						<a href="#"><img alt="" src="Procdct/logo/<?php echo $row['Logo']; ?>"></a>
   					</div>
                   <?php
					}
				   ?> 
					 
				</div>
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
		<script src="themes/js/jquery.flexslider-min.js"></script>
		<script type="text/javascript">
			$(function() {
				$(document).ready(function() {
					$('.flexslider').flexslider({
						animation: "fade",
						slideshowSpeed: 4000,
						animationSpeed: 600,
						controlNav: false,
						directionNav: true,
						controlsContainer: ".flex-container" // the container that holds the flexslider
					});
				});
			});
		</script>
    </body>
</html>