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
        <script type="text/javascript">
		function create_user()
		{
			var data = {
				fname : fname.value,
				lname : lname.value,
				mail :mail.value,
				pass:pass.value,
				address1:address1.value,
				address2:address2.value,
				contact:contact.value,
				city:city.value,
				postal:postal.value,
				
				
				
				};
				
				$.ajax({
					url :'register.php',
					type : 'POST',
					data : data,
					success : function(data)
					{
						if(data)
						{
							$("#msg").html("<span style='color:green;font-weight:bold;fornt-size:24px'>Account Created Sucessfully </span>");
						}
						else
						{
							$("#msg").html("<span style='color:red;font-weight:bold;fornt-size:24px'>Account Created UnSucessfully </span>");
				
						}
					}
					});
		}
		
		function login_user()
		{
			$.ajax({
				url:'Userlogin.php',
				type:'POST',
				data:{username:$("#username").val(),passwrd:$("#password").val()},
				success: function(data)
				{
					if(data)
					{
						window.location.href="home.php";
					}
					else
					{
						$("#fail_msg").html("<span style='color:red;font-weight:bold;font-size:24px;'>Invalid Username or password</span>");
			
					}
				},
				failure :function()
				{
					$("#fail_msg").html("<span style='color:red;font-weight:bold;font-size:14px;'>Invalid Username or password</span>");
				}
				});
		}
		</script>
	</head>
    <body>		
		<div id="top-bar" class="container">
			<div class="row">
				<div class="span4">
					<form method="POST" class="search_form">
					<a href="index.php" class="logo pull-left"><div style="padding-bottom:2px; font-size:24px;padding-top:2px;"><strong>
Online Automobile car Parts Shopping
</strong></div>  </a>
						<!-- <input type="text" class="input-block-level search-query" Placeholder="eg. T-sirt"> -->
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
				<!--	<a href="index.html" class="logo pull-left"><div style="padding-bottom:2px; font-size:24px;padding-top:2px;"><strong>
ALLWYN ONLINE GROCERY SHOPPING
</strong></div></a> -->
					<nav id="menu" class="pull-right">
						
					</nav>
				</div>
			</section>			
			<section class="header_text sub">
			<img class="pageBanner" src="themes/images/pageBanner.png" alt="New products" >
				<h4><span>Login or Regsiter</span></h4>
			</section>			
			<section class="main-content">				
				<div class="row">
					<div class="span5">					
						<h4 class="title"><span class="text"><strong>Login</strong> Form</span></h4>
						<div >
                        	<div id="fail_msg"> </div>
							<input type="hidden" name="next" value="/">
							<fieldset>
								<div class="control-group">
									<label class="control-label">Username</label>
									<div class="controls">
										<input type="text" placeholder="Enter your username" id="username" class="input-xlarge">
									</div>
								</div>
                                
								<div class="control-group">
									<label class="control-label">Password</label>
									<div class="controls">
										<input type="password" placeholder="Enter your password" id="password" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<button class="btn btn-inverse large" onClick="login_user()">Sign into your account</button>
									<hr>
									
								</div>
							</fieldset>
						</div>				
					</div>
					<div class="span7">					
						<h4 class="title"><span class="text"><strong>Register</strong> Form</span></h4>
						<div class="form-stacked">
                        	<div id="msg"></div>
							<fieldset>
								<div class="control-group">
									<label class="control-label">First Name</label>
									<div class="controls">
										<input type="text" placeholder="Enter your username" class="input-xlarge" id="fname">
									</div>
								</div>
                                <div class="control-group">
									<label class="control-label">Last Name</label>
									<div class="controls">
										<input type="text" placeholder="Enter your username" class="input-xlarge" id="lname">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Email address:</label>
									<div class="controls">
										<input type="text" placeholder="Enter your email" class="input-xlarge" id="mail">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Password:</label>
									<div class="controls">
										<input type="password" placeholder="Enter your password" class="input-xlarge" id="pass">
									</div>
								</div>
                                <div class="control-group">
									<label class="control-label"> Address 1:</label>
									<div class="controls">
										<input type="text" placeholder="Enter your Address Line 1"  class="input-xlarge" id="address1">
									</div>
								</div>
                                <div class="control-group">
									<label class="control-label"> Address 2:</label>
									<div class="controls">
										<input type="text" placeholder="Enter your Address Line 2"  class="input-xlarge" id="address2">
									</div>
								</div>	
                                	<div class="control-group">
									<label class="control-label"> City:</label>
									<div class="controls">
										<input type="text" placeholder="Enter your City"  class="input-xlarge" id="city">
									</div>
								</div>	
                                <div class="control-group">
									<label class="control-label"> Postal Code:</label>
									<div class="controls">
										<input type="text" placeholder="Enter your Postal Code"  class="input-xlarge" id="postal">
									</div>
								</div>	
                                
                                <div class="control-group">
									<label class="control-label">Contact Number:</label>
									<div class="controls">
										<input type="text" placeholder="Enter your Contact Number" class="input-xlarge" id="contact">
									</div>
								</div>						                            
								
								<hr>
								<div class="actions"><button class="btn btn-inverse large" onClick="create_user()">Create your account</button></div>
							</fieldset>
						</div>					
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