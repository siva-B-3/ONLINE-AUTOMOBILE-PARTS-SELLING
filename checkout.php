<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>AUTOMATIC E-TRADING FOR SMALL SCALE INDUSTRIES</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
        <script src="Ajax/jquery.js"></script>
        
        <script>
		function gust_user()
		{
			if (document.getElementById('guest').checked)
			{
			$("#Click_address").click();
			$("#confirm_order").attr("Onclick","Gust_checkout()");
			}
			if(document.getElementById('register').checked)
			{
				$("#user_form").load("user_form.php");
			}
		}
		function Gust_checkout()
		{
			var data = {
				fname : fname.value,
				lname : lname.value,
				mail :mail.value,
				
				address1:address1.value,
				address2:address2.value,
				contact:contact.value,
				commends:commends.value,
				city:city.value,
				postal:pcode.value
			
				
				
				
				};
				
				$.ajax({
					url : 'gust_order.php',
					type:'POST',
					data :data,
					success: function(data)
					{
						if(data)
						{
							alert("Your Order Placed Sucessfully");
						}
					}
					});
		}
		
		function login_user()
{
	$.ajax({
		url :'userlogin.php',
		type:'POST',
		datatype:'JSON',
		data:{username:$("#username").val(),passwrd:$("#password").val()},
		success: function(data)
		{
			if(data)
			{
				var fname;
				var lname;
				var Email;
				var Address1;
				var Address2;
				var City;
				var Postal;
				var Contact;
				 data = JSON.parse(data);
  					 for(i=0;i<data.length;i++)
    				{
						fname = data[i]['Fname'];
						lname = data[i]['Lname'];
						Email = data[i]['Email'];
						Address1 = data[i]['Address1'];
						Address2 = data[i]['Address2'];
						City = data[i]['City'];
						Postal = data[i]['Postal'];
						Contact = data[i]['Contact'];
						//alert(fname);
					}
					$("#contact").val(Contact);
					$("#pcode").val(Postal);
					$("#city").val(City);
					$("#address2").val(Address2);
					$("#address1").val(Address1);
					$("#mail").val(Email);
					$("#lname").val(lname);
					$('#fname').val(fname);
					$("#Click_address").click();
					$("#confirm_order").attr("Onclick","Register_user()");
					$("#feed_mail").val(Email);
			}
			else
			{
				$("#error").html("<span style='color:red'>Invalid Username or Password</span>");
			}
		}
		});
}
		function Register_user()
		{
			$.ajax({
				url : 'order_regsiter.php',
				type: 'POST',
				data:{mail:$("#mail").val(),command:$("#commends").val()},
				success: function(data)
				{
					if(data)
					{
						alert("Your Order Placed Sucessfully... Thank you..");
					}
				}
				});
		}
		
		function post_feed()
		{
			var data = {
				feed_mail:feed_mail.value,
				feed_date:feed_date.value,
				feed_cmd:feed_cmd.value
				
				};
				
				$.ajax({
					
					url:'post_feedback.php',
					type:'POST',
					data:data,
					success: function(data)
					{
						if(data)
						{
							alert("Thank you for Your Comments");
						}
						else
						{
							alert("Error in Feedback Sending");
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
					<a href="index.html" class="logo pull-left"><div style="padding-bottom:2px; font-size:24px;padding-top:2px;"><strong>
Online Car Part Shopping
</strong></div></a>
						<!-- <input type="text" class="input-block-level search-query" Placeholder=""> -->
					</form>
				</div>
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">
                        	<li><a href="Index.php">Home</a></li>				
							<li><a href="cart.php">Your Cart</a></li>
												
							<li><a href="index.php">Home</a></li>			
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<!-- <a href="index.html" class="logo pull-left"><div style="padding-bottom:2px; font-size:24px;padding-top:2px;"><strong>
Online Car Part Shopping
</strong></div></a> -->
					<nav id="menu" class="pull-right">
						
					</nav>
				</div>
			</section>			
			<section class="header_text sub">
			<img class="pageBanner" src="themes/images/parts1.jpg" alt="New products" >
				<h4><span>Check Out</span></h4>
			</section>	
			<section class="main-content">
				<div class="row">
					<div class="span12">
						<div class="accordion" id="accordion2">
							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">Checkout Options</a>
								</div>
								<div id="collapseOne" class="accordion-body in collapse">
									<div class="accordion-inner">
										<div class="row-fluid">
											<div class="span6">
												<h4>New Customer</h4>
												<p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
												<form action="#" method="post">
													<fieldset>
														<label class="radio" for="register">
															<input type="radio" name="account" value="register" id="register" checked="checked">Register Account
														</label>
														<label class="radio" for="guest">
															<input type="radio" name="account" value="guest" id="guest">Guest Checkout
														</label>
														<br>
														<button class="btn btn-inverse" data-toggle="collapse" data-parent="#collapse2" onClick="gust_user()">Continue</button>
													</fieldset>
												</form>
											 </div>
											 <div class="span6" id="user_form">
                                             </div>
										</div>
									</div>
								</div>
							</div>
							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo" id="Click_address">Account &amp; Billing Details</a>
								</div>
								<div id="collapseTwo" class="accordion-body collapse">
									<div class="accordion-inner">
										<div class="row-fluid">
											<div class="span6">
												<h4>Your Personal Details</h4>
												<div class="control-group">
													<label class="control-label">First Name</label>
													<div class="controls">
														<input type="text" placeholder="" class="input-xlarge" id='fname'>
													</div>
												</div>
												<div class="control-group">
													<label class="control-label">Last Name</label>
													<div class="controls">
														<input type="text" placeholder="" class="input-xlarge" id="lname">
													</div>
												</div>					  
												<div class="control-group">
													<label class="control-label">Email Address</label>
													<div class="controls">
														<input type="text" placeholder="" class="input-xlarge" id="mail">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label">Telephone</label>
													<div class="controls">
														<input type="text" placeholder="" class="input-xlarge" id="contact">
													</div>
												</div>
																							</div>
											<div class="span6">
												<h4>Your Address</h4>
												<div class="control-group">
													<label class="control-label"><span class="required">*</span> Address 1:</label>
													<div class="controls">
														<input type="text" placeholder="" class="input-xlarge" id="address1">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label">Address 2:</label>
													<div class="controls">
														<input type="text" placeholder="" class="input-xlarge" id="address2">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label"><span class="required">*</span> City:</label>
													<div class="controls">
														<input type="text" placeholder="" class="input-xlarge" id="city">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label"><span class="required">*</span> Post Code:</label>
													<div class="controls">
														<input type="text" placeholder="" class="input-xlarge" id="pcode">
													</div>
												</div>
												
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">Confirm Order</a>
								</div>
								<div id="collapseThree" class="accordion-body collapse">
									<div class="accordion-inner">
										<div class="row-fluid">
											<div class="control-group">
												<label for="textarea" class="control-label">Comments</label>
												<div class="controls">
													<textarea rows="3" class="span12" id="commends"></textarea>
												</div>
											</div>									
											<button class="btn btn-inverse pull-right" id="confirm_order">Confirm order</button>
										</div>
									</div>
								</div>
							</div>
						</div>				
					</div>
				</div>
			</section>			
			<section id="footer-bar">
				<div class="row">
					<div class="span3" align="center" style="padding-left:400px;">
						<h4>FeedBack</h4>
						<ul class="nav">
							<li>E-mail Address : <input type="text" id="feed_mail" style="width:500px;"></li>  
							<li>Date:<br> <input type="text" value="<?php echo date('d/m/Y'); ?>" id="feed_date" style="width:500px;"></li>
							<li>Comments:<br><textarea rows="5" id="feed_cmd" style="width:500px;"></textarea></li>
							<li><button onClick="post_feed()">Send Feedback</button></li>
											
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