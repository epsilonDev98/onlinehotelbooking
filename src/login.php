<?php include('dbconnect.php');

?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Hotel Website | Login </title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<!---start-Wrap--->
			<!---start-header--->
			<div class="header">
				<div class="wrap">
					<div class="header-top">
						<div class="logo">
							<a href="index.html"><img src="images/logo0.png" title="logo" /></a>
						</div>
						<div class="contact-info">
							<p class="phone">Call us : <a href="#">7380XXXXXX</a></p>
							</div>
						<div class="clear"> </div>
					</div>
				</div>
				<div class="header-top-nav">
					<div class="wrap">
						<ul>
						<li ><a href="index.html">Home</a></li>
						    <li class="active"><a href="login.html">Register</a></li>
							<li><a href="booking.html">Booking</a></li>
							<li><a href="gallery.html">Gallery</a></li>	
						    <li><a href="payment.html">Payment</a></li>
						    <li><a href="services.html">Services</a></li>
							<li><a href="contact.html">Contact</a></li>
							<li><a href="about.html">About</a></li>
							<div class="clear"> </div>
						</ul>
					</div>
				</div>
			</div>
			<!---End-header--->
			<div class="clear"> </div>
			<!---start-content----->
			<div class="content">
				<div class="wrap">
					<!-------start-contatct------>
					<div class="contact">
				<div class="section group">				
				<div class="col span_1_of_3">
					<div class="contact_info">
			    	 	
      				</div>
      					
		
						<div class="col span_2_of_3">
				  <div class="registration form">
				  	<h3>Register yourself</h3>
				<!-- 	<div>
					    <form method="post" action="contact-post.html">
						<input type="hidden" name="mode" value="PinRequest" /> 
				  
</div>-->
					<div class="col span_2_of_3">
				  <div class="register-form">
				  	
					    <form method="post" action="registeration.php">
						<div>
						 
	                 <span><label>choose type</label></span>
				     <span><input name="type" type="text" class="textbox"></span>
				</div>	
					    	<div>
						    	<span><label>full name</label></span>
						    	<span><input name="fname" required="required" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>mobile number</label></span>
						    	<span><input name="mnumber" required="required" type="text" class="textbox"></span>
						    </div>
						    <div>
						     	<span><label>email</label></span>
						    	<span><input name="email" required="required" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>password</label></span>
						    	<span><input id="password" name="password" required="required" type="password" /></span>
						    </div>
							 <div>
						    	<span><label>confirm password</label></span>
						    	<span><input id="password" name="psword" required="required" type="password" /></span>
						    </div>
						   <div>
						   		<span><input type="submit" value="Submit"></span>
						  </div>
					    </form>

				    </div>
  				</div>				
			  </div>
			</div>
					<!-------start-contatct------>
				</div>

				    </div>
  				</div>				
			  </div>
			</div>
					<!-------start-contatct------>
				</div>
				<div class="clear"> </div>
				<div class="boxs">
				<div class="wrap">
				<div class="box">
				
				</div>
				<div class="box center-box">
					<ul>
						<li><a href="https:www.code-projects.org">Leave a Feedback</a></li>
						<li><a href="https:www.code-projects.org">Reviews and Ratings</a></li>
						<li><a href="https:www.code-projects.org">FAQs</a></li>
						</ul>
				</div>
				<div class="box">
					 
				</div>
				<div class="clear"> </div>
			</div>
			<!---start-box---->
		</div>
		<!---start-copy-Right----->
		<div class="copy-tight">
			<p>&copy S3P,PSITCOE 2018 "THIS PROJECT IS MADE TO YOU BY <a href="http://www.code-projects.org/">S3P"</a></p>
		</div>
		<!---End-copy-Right----->
			</div>
			<!---End-content----->
		</div>
		<!---End-Wrap--->
	</body>
</html>

