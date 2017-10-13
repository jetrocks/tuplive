<!DOCTYPE html>
<html lang="en">
<head>
	<title>TUP Live!</title>
	<meta name="viewport" charset="UTF-8" content="width=device-width, initial-scale=1.0" />
	<link href="<?php echo base_url('bootstrap/css/bootstrap.css'); ?>" rel="stylesheet" />
	<link href="<?php echo base_url('bootstrap/css/bootstrap-theme.css'); ?>" rel="stylesheet" />
	<link href="<?php echo base_url('bootstrap/css/custom.css'); ?>" rel="stylesheet" />
	<link href="<?php echo base_url('bootstrap/css/components.css'); ?>" rel="stylesheet" />
	<link href="<?php echo base_url('bootstrap/css/icons.css'); ?>" rel="stylesheet" />
	<link href="<?php echo base_url('bootstrap/css/style.css'); ?>" rel="stylesheet" />
	<link href="<?php echo base_url('bootstrap/css/response.css'); ?>" rel="stylesheet" />
	<link rel="shortcut icon" href="<?php echo base_url('bootstrap/css/tup.ico'); ?>">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="../TupLive/TLimages/tup.ico">
	
	<script src="<?php echo base_url('bootstrap/js/jquery.min.js'); ?>"></script>
	<script src="<?php echo base_url('bootstrap/js/bootstrap.min.js');?> "></script>
	<script src="<?php echo base_url('bootstrap/js/jquery-1.8.3.min.js');?> "></script>
	<script src="<?php echo base_url('bootstrap/js/jquery-ui.min.js');?> "></script>
	<script src="<?php echo base_url('bootstrap/js/responsee.js');?> "></script>
	<script src="<?php echo base_url('bootstrap/js/index.js');?> "></script>
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
	

</head>
<style>
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
	body{
		background-color: #1a1a1a;
		
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
	.topp{
		z-index: 1;
	}

	.middle {
		transition: .5s ease;
		opacity: 0;
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		-ms-transform: translate(-50%, -50%)
	}
	.text {
		background-color: #c51e3a;
		color: #dedede;
		font-size: 16px;
		padding: 16px 32px;
		box-shadow: 0 8px 16px 0 rgba(242,242,242,0.5);
	}
	.text a{
		color: #dedede;
		font-size: 20px;
		font-style: italic;
		transition: font-size 1s;
	}
	.text a:hover{
		color: #dedede;
		font-size: 25px;
	}
	.container2:hover .video {
		opacity: 0.3;
	}
	.video {
		opacity: 1;
		display: block;
		transition: .5s ease;
		backface-visibility: hidden;
	}
	.container2:hover .middle {
		opacity: 1;
	}
	.container2 {
		position: relative;
	}
	.dexy ul li a{
		font-size: 11px;
		width: 100%;
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
		font-size: 10px;
		color: black;
	}
	input {
		width: 200px;
	}
	textarea {
		height: 100px;
		width: 200px;
	}

</style>
<body >
	<div class="container">
	<br />
	<!-- header -->	
	<header>
		<div class="line top">
			<div class="box headcolor">
				<div class="s-6 l-2" align="center" style="top: 50px;">
					<img class="logo" src="<?php echo base_url('TLimages/tupweb.png'); ?>">
				</div>
				<div class="s-6 l-4">
					<img class="logo2" src="<?php echo base_url('TLimages/livetitle.png'); ?>">
					<h4>The Technological University of the Philippines'<br />Live Streaming Broadcasting Website<h4>
				</div>
			</div>
		</div>
	<!-- end of header -->
			 
	<!-- navigation -->
		<div class="line">
			<nav class="margin-bottom botroundy">
			<p class="nav-text">MENU</p>
				<div class="top-nav">
					<ul >
						<div class="dexy" align="center">
							<li class="s-12 m-2"><a >Home</a></li>
							<li class="s-12 m-2" ><a>Watchlist</a></li>
							<li class="s-12 m-2" ><a>Community</a></li> 
							<li class="s-12 m-2" ><a>About Us</a></li>
							<li class="s-12 m-2" ><a href="#"  id="loginform" >Login</a>
								<div class="login" >
									<div class="arrow-up"></div>
										<div class="formholder">
											<div class="randompad">
												<fieldset style="font-family: "Montserrat"">
													<label name="email" style="color: black">Email</label>
													<input type="email" value="example@example.com" />
													<label name="password" style="color: black">Password</label>
													<input type="password" />
													<input type="submit" value="Login" />
												</fieldset>
											</div>
										</div>
								</div>
							</li>
							<li class="s-12 m-2"><a>Join Us</a></li>
						</div>
					</ul>
				</div>
			</nav>
		</div>
	<!-- end of navigation -->
	</header>

	<section>
		<div class="box container2 headcolorroundy">
			<h2>Now Streaming</h2>
			<video class="video s-12 m-12 1-4" autoplay  muted loop >
				<source src="<?php echo base_url('TLimages/flow.mp4'); ?>" type="video/mp4" >
							Your browser does not support HTML5 video.
			</video>
			<div class="middle">
					<div align="center" class="text">Wanna be part of the nation?<br /><br /> <a href="#"> JOIN NA! </a></div>
			</div>
		</div>
		<br />
		<br />
		<div class="line">
			<div class="margin">
				<div class="s-12 m-6 l-4 margin-bottom">
					<div class="box headcolorroundy">
						<h2>About</h2>
						 <p class="para">This website is created by a group in BSIT-3A of TUP Manila Campus.<br /><br /><br /><a href="">Read More...</a></p>
					</div>
				</div>
				<div class="s-12 m-6 l-4 margin-bottom">
					<div class="box headcolorroundy">
						<h2>Contact Us</h2>
						<p class="para">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam <br /><br /><br /><a href="">Read More...</a></p>
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
	
	<footer >
		<div class="box" style="width:100%">
			<div class="line">
				<div class="s-12 m-2 ">
					GENERAL<br /><br />
					<div class="footersize">
						<a href="#">Home</a><br /><br />
						<a href="#">Blog</a><br /><br />
						<a href="#">FAQ</a><br /><br />
						<a href="#">Contact Us!</a><br /><br />
					</div>
				</div>
				<div class="s-12 m-2 ">
					KNOW US<br /><br />
					<div class="footersize">
						<a href="#">About Us</a><br /><br />
						<a href="#">Disclaimer</a><br /><br />
						<a href="#">Terms and Conditions</a><br /><br />
						<a href="#">Site Help</a><br /><br />
					</div>
				</div>
				<div class="s-12 m-3">
					CONTACT US:<br /><br />
				</div>
				<div class="s-12 m-5">
					SEND US YOUR THOUGHTS: <br /><br />
					<div class="footersize">
						<form action="#" method="post">
							<input type="text" name="email" maxlength="30" placeholder="Email" /><br /><br />
							<textarea name="message" placeholder="Message"></textarea><br />
							<div>&nbsp;</div><button>Send</button>
						</form>
					</div>
				</div>
			
			</div>
		</div>

		</footer>
	
	</div>
</body>
</html>