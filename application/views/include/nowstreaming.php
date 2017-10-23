<!DOCTYPE html>
<html lang="en">
<head>
	<title>TUP Live!</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta charset="UTF-8" />
	<link href="<?php echo base_url('bootstrap/css/bootstrap.css'); ?>" rel="stylesheet" />
	<link href="<?php echo base_url('bootstrap/css/bootstrap-theme.css'); ?>" rel="stylesheet" />
	<link href="<?php echo base_url('bootstrap/css/custom.css'); ?>" rel="stylesheet" />
	<link href="<?php echo base_url('bootstrap/css/components.css'); ?>" rel="stylesheet" />
	<link href="<?php echo base_url('bootstrap/css/icons.css'); ?>" rel="stylesheet" />
	<link href="<?php echo base_url('bootstrap/css/style.css'); ?>" rel="stylesheet" />
	<link href="<?php echo base_url('bootstrap/css/response.css'); ?>" rel="stylesheet" />
	<link href="<?php echo base_url('bootstrap/css/watchlist.css'); ?>" rel="stylesheet" />
	<link rel="shortcut icon" href="<?php echo base_url('bootstrap/css/tup.ico'); ?>">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="../TupLive/TLimages/tup.ico">
	<script src="<?php echo base_url('bootstrap/js/jquery.min.js'); ?>"></script>
	<script src="<?php echo base_url('bootstrap/js/bootstrap.min.js');?> "></script>
	<script src="<?php echo base_url('bootstrap/js/jquery-1.8.3.min.js');?> "></script>
	<script src="<?php echo base_url('bootstrap/js/jquery-ui.min.js');?> "></script>
	<script src="<?php echo base_url('bootstrap/js/responsee.js');?> "></script>
	<script src="<?php echo base_url('bootstrap/js/index.js');?> "></script>
	<script src="<?php echo base_url('bootstrap/js/watchlist.js');?> "></script>
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script type="text/javascript">
         jQuery(document).ready(function($) {	  
           $("#owl-demo").owlCarousel({		
           	navigation : true,
           	slideSpeed : 300,
           	paginationSpeed : 400,
           	autoPlay : true,
           	singleItem:true
           });
           $("#owl-demo2").owlCarousel({
        		items : 4,
           	lazyLoad : true,
           	autoPlay : true,
           	navigation : true,
           	pagination : false
           });
         });	 
      </script>
	


<style>
	body{
		background: url(TLimages/bg.jpg);
		 no-repeat center center fixed; 
		 font-family:"Montserrat";
		 text-align:left;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
	position: relative;  
	color: #ffffff;
	overflow-x: hidden;
		
	}
	.botroundy{
		border-radius: 0 0 25px 25px;
	}
	.logo{
		width: 100px;
		height: 100px;
	}
	.logo2{
		width: 200px;
		height: 50px;
	}
	
	.headcolor{
		background-color: #0d0d0d;
		box-shadow: 0px 10px 5px #1a1a1a;
		border-radius: 25px 25px 0 0;
		
	}
	.headcolorroundy{
		background-color: #0d0d0d;
		box-shadow: 0px 10px 5px #1a1a1a;
		border-radius: 25px 25px 25px 25px;
		
	}
	
	.headcolorroundy2{
		background-color: #0d0d0d;
		box-shadow: 0px 10px 5px #1a1a1a;
		border-radius: 25px 25px 25px 25px;
		width:60%;
		
	} 
	.headcolorroundy3{
		background-image: url('TLimages/req');
		-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
	position: relative;  
	color: #ffffff;
	overflow-x: hidden;
		box-shadow: 0px 10px 5px #1a1a1a;
		border-radius: 25px 25px 25px 25px;
		width:37%;
		
		
	} 
	.topp{
		z-index: 1;
	}

	
	

	.container2:hover .middle {
		opacity: 1;
	}
	.container2 {
		position: relative;
	}
	.container3 {
		position: relative;
	}
	.dexy ul li a{
		font-size: 15px;
		width: 100%;
		text-align: center;
	}
	.para{
		font-size: 10px;
	}
	nav ul{
		list-style: none;
		margin: 0 2px;
		padding: 0;
		display: flex;
		justify-content: space-around;
	}
	.dexy{
		width: 100%;
	}
	.footersize{
		font-size: 11px;
		color: black;
	}
	input {
		width: 250px;
	}
	textarea {
		height: 100px;
		width: 250px;
	}
	.icons ul li{
		height: 40px;
		width: 40px;
		display:inline-block;
	}
	.align{
		text-align: left;
	}
	.overlay {
   position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .5s ease;
}
.container3:hover .overlay {
  opacity: 1;
}
.text {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
}
.navvy li{
	font-size: 15px;
}
</style>
</head>
<body  class="align">
	<div class="container">
	<br />
	<!-- header -->	
	<header>
		<div class="line top">
			<div class="box headcolor">
				<div class="s-4 m-3 l-1" style="top: 50px;">
					<img class="logo" src="<?php echo base_url('TLimages/tupweb.png'); ?>" alt="logo">
				</div>
				
				<div class="s-8 m-8 l-4" style="text-align: left;" >
					<img class="logo2" src="<?php echo base_url('TLimages/livetitle.png'); ?>" alt="title">
					<h4>The Technological University of the Philippines'<br />Live Streaming Broadcasting Website</h4>
				</div>
			</div>
		</div>
	<!-- end of header -->
			 
	<!-- navigation -->
		<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>                        
			</button>
			<a class="navbar-brand" href="<?php echo base_url(); ?>">TUP Live!</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav navvy" >
				<li class="active"><a href="<?php echo base_url(); ?>">Now Streaming</a></li>
				<li><a href="<?php echo base_url('watchlist'); ?>">Watchlist</a></li>
				<li><a href="<?php echo base_url('request'); ?>">Request</a></li>
				<li><a href="<?php echo base_url('about'); ?>">About Us</a></li>
			</ul>
			</div>
		</div>
		</nav>
	<!-- end of navigation -->
	</header>

	<section>
		<div class="box container2 headcolorroundy">
			<h2 class="align">Now Streaming</h2>
			
			<iframe class="s-12 m-12 l-12" src="https://www.ustream.tv/embed/23425508?html5ui" style="border: 0 none transparent; height:500px;" ></iframe>
			
		</div>
		<br />
		<div class="line">
			<div class="box container2 headcolorroundy2 s-8 m-8 l-8">
				<iframe class="s-12 m-12 l-12" src="https://www.ustream.tv/socialstream/23425508" style="border: 0 none transparent; height:300px;"  ></iframe>
			</div>
			<div class="box container3 headcolorroundy3 s-4 m-4 l-4 " style="margin-left:10px; border: 0 none transparent; height:320px;">
				<br /><br />
				<div class="overlay">
					<div class="text">
						<h1 style="color: white;">Wanna see yourself on TUP instantly? </h1>
						<h2 style="color: white;">Request for a Timeslot </h1>
						<h4 style="color: white;">and shine bright </h4>
						<a href="<?php echo base_url('request');?>"><h3 style="color: white;">HERE </h3></a>
					</div>
				</div>
			</div>
		</div>
		<br />
		<div class="line">
			<div class="margin">
				<div class="s-12 m-6 l-4 margin-bottom">
					<div class="box headcolorroundy">
						<h2>About</h2>
						 <p class="para">This website is created by a group in BSIT-3A of TUP Manila Campus.<br /><br /><br /><a href="<?php echo base_url('about'); ?>">Read More...</a></p>
					</div>
				</div>
				<div class="s-12 m-6 l-4 margin-bottom">
					<div class="box headcolorroundy">
						<h2>Contact Us</h2>
						<p class="para">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam <br /><br /><br /><a href="<?php echo base_url('about'); ?>">Read More...</a></p>
					</div>
				</div>
				<div class="s-12 m-12 l-4 margin-bottom">
					<div class="box headcolorroundy">
						<h2>Services</h2>
						<p class="para">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<footer class="align" >
		<div class="box" style="width:100%">
			<div class="line"><br />
				<div class="s-11 m-11 l-3 " style="margin:20px;">
					GENERAL<br /><br />
					<div class="footersize">
						<a href="<?php echo base_url(); ?>">Now Streaming</a><br /><br />
						<a href="<?php echo base_url('watchlist'); ?>">Watchlist</a><br /><br />
						<a href="<?php echo base_url('request'); ?>">FAQ</a><br /><br />
						<a href="<?php echo base_url('about'); ?>">Contact Us!</a><br /><br />
					</div>
				</div>
				<div class="s-11 m-11 l-3"  style="margin:20px;">
					KNOW US<br /><br />
					<div class="footersize">
						<a href="<?php echo base_url('about'); ?>">About Us</a><br /><br />
						<a href="<?php echo base_url('about'); ?>">Disclaimer</a><br /><br />
						<a href="<?php echo base_url('about'); ?>">Terms and Conditions</a><br /><br />
						<a href="<?php echo base_url('about'); ?>">Site Help</a><br /><br />
					</div>
				</div>
				<div class="s-11 m-11 l-3"  style="margin:20px;">
					CONTACT US:<br /><br />
						<div class="icons">
							<ul>
								<li><a href="www.fb.com"><img src="<?php echo base_url('TLimages/fb.png'); ?>" alt="fb"/></a></li> 
								<li><a href="https://github.com/jetrocks/tuplive"><img src="<?php echo base_url('TLimages/git.png'); ?>" alt="git" /></a></li>
								<li><a href="www.twitter.com"><img src="<?php echo base_url('TLimages/twitter.png'); ?>" alt="twitter" /></a></li>
								
							</ul>
						</div>
				</div>
				
			</div>
		</div>

		</footer>
	
	</div>
</body>
</html>