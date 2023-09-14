<?php
	ob_start();
	session_start();
	 error_reporting(0);
	
	
		$product_id=$_SESSION['sessionid'];
	
		//echo $product_id;
	include"config.php";

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>E-treading | Home Page</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
        <script src="Ajax/jquery.js"></script>
        <script>
		function remove_cart(Id)
		{
			$.ajax({
				url : 'remove_cart.php',
				type:'POST',
				data:{Id:Id},
				success : function(data)
				{
					if(data)
					{
						$("#cart").load("cart.php #load_cart");
						alert('Item Removed Sucessfully');
					}
				}
				});
		}
		function updatecart (id)
		{
			//alert(id);
			$.ajax({
				url:'update_cart.php',
				type:'POST',
				data:{Id:id,Quty:$("#quty").val()},
				success: function(data)
				{
					if(data)
					{
						$("#cart").load("cart.php #load_cart");
						alert('Item Updated Sucessfully');
					}
				}
				
				});
		}
		function clear_cart()
		{
			$.ajax({
				url :'clear_session.php',
				success: function(data)
				{
					if(data)
					{
						$("#cart").load("cart.php #load_cart");
						alert("Cart Clear Sucessfully");
					}
				}
				});
		}
		
		</script>
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
						<a href="index.php" class="logo pull-left"><div style="padding-bottom:2px; font-size:24px;padding-top:2px;"><strong>
Online Automobile Parts Shopping
</strong></div>  </a>
						<!-- <input type="text" class="input-block-level search-query" Placeholder=""> -->
					</form>
				</div>
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">				
							
							<li><a href="Index.php">Home</a></li>
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
					<!--<a href="index.php" class="logo pull-left"><div style="padding-bottom:2px; font-size:24px;padding-top:2px;"><strong>
Online Car Parts Shopping
</strong></div>  </a> -->
					<nav id="menu" class="pull-right">
						
					</nav>
				</div>
			</section>			
			<section class="header_text sub">
			<section class="header_text sub">
			<img class="pageBanner" src="themes/images/parts1.jpg" alt="New products" >
				<h4><span>Shopping Cart</span></h4>
			</section>
			<section class="main-content">				
				<div class="row">
					<div class="span9" id="cart">	
                    <div id="load_cart">				
						<h4 class="title"><span class="text"><strong>Your</strong> Cart</span></h4>
						<table class="table table-striped" align="center">
							<thead>
								<tr>
									<th>Remove</th>
									<th>Image</th>
									<th>Product Name</th>
									<th>Quantity</th>
									<th>Unit Price</th>
									<th>Total</th>
								</tr>
							</thead>
							<tbody>
                            <?php
							
							$tamnt = 0;
								$select_cart_data=mysql_query("select Cart_tb.Id,product_tb.Image1,product_tb.Product_name,cart_tb.Quty,product_tb.Price from product_tb inner join cart_tb on product_tb.Id=cart_tb.Product_id where cart_tb.Session_id='$product_id'") or die(mysql_error());
								
								while($row=mysql_fetch_array($select_cart_data))
								{
								
							
							?>
								<tr>
									<td><input type="image" src="Images/shopping-basket-remove.png" height="30px" width="30px" value="<?php echo $row['Id']; ?>" onClick="remove_cart(this.value)" ></td>
									<td><a href="product_detail.html"><img alt="" src="admin/Procdct/Our/<?php echo $row['Image1']; ?>" height="250" width="250"></a></td>
									<td><?php echo $row['Product_name']; ?></td>
									<td><input type="text" value="<?php echo $row['Quty']; ?>" class="input-mini" id="quty"><input type="image" src="Images/Shopping-Cart-Icon-with-PSD-and-PNG-Format.png" height="30" width="30" style="padding-left:3px;" value="<?php echo $row['Id']; ?>" onClick="updatecart(this.value)"></td>
									<td><?php echo $row['Price']; ?></td>
									<td><?php 
									
											$amnt=$row['Quty']*$row['Price'];
											
											echo $amnt;
									  
											
											$tamnt=$tamnt+$amnt;
									
									?></td>
								</tr>			  
								<?php
								}
								?>
								
								<tr>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td><strong><?php echo $tamnt; 
									
									echo $famnt; ?> </strong></td>
								</tr>		  
							</tbody>
						</table>
                       
						<hr>
						<p class="cart-total right">
							<strong>Total</strong>:	Rs.<?php echo $tamnt;?><br>
							
						
						</p>
						<hr/>
						<p class="buttons center">				
							
							<a href="index.php" class="btn">Continue</a>
							<a href="checkout.php" class="btn btn-inverse">Checkout</a>
                            <button class="btn" onClick="clear_cart()">Clear Cart</button>
                            
						</p>
                         </div>					
					</div>
				
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