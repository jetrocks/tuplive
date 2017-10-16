<!DOCTYPE html>
<html lang="en-US">
   <head>
     <meta charset="UTF-8">
	  
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>TUP Live!</title>
      <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/components.css');?>">
      <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.css');?>">
      <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/icons.css');?>">
      <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/style.css');?>">
      <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/responsee.css');?>">
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
      <script type="text/javascript" src="<?php echo base_url('bootstrap/js/jquery-1.8.3.min.js');?>"></script>
      <script type="text/javascript" src="<?php echo base_url('bootstrap/js/jquery-ui.min.js');?>"></script>     
	  

   
   <style>
		body {
    margin: 0;
    font-family: 'Lato', sans-serif;
	background-image: url("TLimages/bg.jpg");
	}
	
	.overlay {
		height: 50%;
		width: 100%;
		position: fixed;
		z-index: 1;
		top: 0;
		left: 0;
		overflow-y: hidden;
		
	}
	.overlay-content {
		position: relative;
		height: 100%;
		width: 100%;
		text-align: center;	
	}	
	@media screen and (max-height: 100px) {
	.overlay {overflow-y: auto;}
	}
	
	.overlay2 {
		height: 50%;
		width: 100%;
		position: fixed;
		z-index: 1;
		top: 50%;
		left: 0;
		overflow-y: hidden;
	}
	@media screen and (max-height: 100px) {
	.overlay2 {overflow-y: auto;}
	}
	.logo{
		width: 100px;
		height: 100px;
	}
	.logo2{
		width: 200px;
		height: 50px;
	}
	.dexy h1 {
		font-family: Georgia;
		color: #c51d39;
	}
	.boxkular{
		background-color: #c51d39;
		border-radius: 15px;
	}
	.boxkular form{
		color: white;
		font-size: 10px;
	}
	.boxkular button, form button{
		font-size: 20px;
	}
	.sidetext h1{
		color: white;
		font-size: 50px;
		font-family: bookman;
	}
	.sidetext h2{
		color: white;
		font-size: 30px;
		font-family: bookman;
	}
   </style>
</head>
    <body>
   		<!-- start of overlays-->
		<div id="panel1" class="overlay">
			<div class="overlay-content">
				<img style="width: 100%; height: 100%;" src="<?php echo base_url('bootstrap/images/upperpart.jpg');?>" alt=""/>
			</div>
		</div>
		
		<div id="panel2" class="overlay2">
			<div class="overlay-content">
				<img style="width: 100%; height: 100%;" src="<?php echo base_url('bootstrap/images/lowerpart.jpg');?>" alt=""/>
			</div>
		</div>
		<!-- end of overlays-->
	    
	    <!--start of itaas-->
	<div class="container-fluid" >
	<header >
	<!-- header -->
	<div class="row">
		<div class="line top" >
			<div class="box remcolor" >
				<div class="s-4 l-1" align="center" style="top: 50px;">
					<img class="logo" src="<?php echo base_url('TLimages/tupweb.png'); ?>">
				</div>
				
				<div class="s-8 l-4" >
					<img class="logo2" src="<?php echo base_url('TLimages/livetitle.png'); ?>">
					<h4>The Technological University of the Philippines'<br />Live Streaming Broadcasting Website<h4 />
				</div>
			</div>
		</div>
	</div>
		 <!-- end of header -->
	</header>
	
                   
	<!--end of itaas-->
	    <br />
	<br />
	<br />
	<br />
	    <!--start of reg and log-->
	<div class="line">
		
		
		<div class="m-1 s-12">
		<br />
		</div>
		
		<div  class="m-5 s-12 sidetext">
			<h1>
					Technological University of the Philippines is live now!
			</h1>
			<br />
			<h2>
					This is TUP's one and powerful Live Streaming Website.
					Take a peek to the small but powerful world of TUP.
					Feel at home in your second-home by reaching out your laptop or smartphone. 
			</h2>
		</div>
		
		<div class="m-1 s-12">
			<br />
		</div>
		
		<div id="log" class="box m-4 s-12 boxkular">
		
			<br />
			<h1 style="color: white;" align="center">Sign In </h1>
			<h4 style="color: white;" align="center">Log in now and join the fun! </h4>
			<br />
			<br />
			<form action="<?php echo base_url('logged');?>" class="formy">
				<div class="form-group">
				<label for="username">Username:</label>
				<input type="text" class="form-control" id="username" placeholder="Enter username..." name="username" />
				</div>
				<div class="form-group">
				<label for="pwd">Password:</label>
				<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" />
				</div>
				<div class="checkbox">
				<label><input type="checkbox" name="remember"> Remember me</label>
				</div>
				<button id="tempo" style="margin-left: 38%;" type="submit" class="btn btn-default">Log In</button>
			</form>
			<br />
			<h2 style="color: white;" align="center">Still not a member? Join the fun now!</h2>
			<br />
				<button style="margin-left: 38%;" id="ctoreg" class="btn btn-success">Register</button>
				<br />
			<br />
		</div>
		
		<div id="reg" class="box m-4 s-12 boxkular">
			<button style="font-size: 10px;" id="ctolog" class="btn btn-default">Go Back</button>
			<h1 style="color: white;" align="center">Register</h1>
			<h4 style="color: white;" align="center">Become a part of the funnation! </h4>
			<br />
			<br />
			<form action="<?php echo base_url();?>" class="formy">
				<div class="form-group">
				<label for="LastName">Last Name:</label>
				<input type="text" class="form-control" id="lastname" placeholder="Enter Last Name..." name="lname" />
				</div>
				<div class="form-group">
				<label for="FirstName">First name:</label>
				<input type="text" class="form-control" id="firstname" placeholder="Enter First Name..." name="fname" />
				</div>
				<div class="form-group">
				<label for="MidName">Middle name:</label>
				<input type="text" class="form-control" id="midname" placeholder="Enter Middle Name..." name="mname" />
				</div>
				<div class="form-group">
				<label for="username">Alias or Username:</label>
				<input type="text" class="form-control" id="username" placeholder="Enter Username..." name="username" />
				</div>
				<div class="form-group">
				<label for="tupmail">TUP Webmail:</label>
				<input type="email" class="form-control" id="tupmail" placeholder="Enter TUP Webmail..." name="tupmail" />
				</div>
				<div class="form-group">
				<label for="pass">Password:</label>
				<input type="password" class="form-control" id="pass" placeholder="Enter Password..." name="pass" />
				</div>
				<div class="form-group">
				<label for="conpass">Confirm Password:</label>
				<input type="password" class="form-control" id="conpass" placeholder="Enter Password..." name="conpass" />
				</div>
				<br />
			<br />
				<button style="margin-left: 38%;" type="submit" class="btn btn-default btn-success">Submit</button>
			</form>
			<br />
			<br />
		</div>
		
	</div>
                           
<!--end of reg and log-->
	
	
      <script type="text/javascript" src="<?php echo base_url('bootstrap/js/responsee.js');?>"></script>               
      
	  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="<?php echo base_url('bootstrap/js/index.js');?>"></script>
	
	<script>
		$(document).ready(function(){
			$("#panel1").delay(1000).animate({top: '-50%', height: '0%' });
			$("#panel2").delay(1000).animate({top: '100%',height: '0%' });
			$("#reg").hide();
			$("#ctoreg").click(function(){
				$("#log").slideUp("medium");
				$("#reg").delay(500).slideDown("medium");
				});
			$("#ctolog").click(function(){
				$("#reg").slideUp("medium");
				$("#log").delay(500).slideDown("medium");
				});
		});

	</script>
	
   </body>
</html>
