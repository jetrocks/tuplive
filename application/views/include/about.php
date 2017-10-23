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
	


<style>
	body{
		background: url(TLimages/bg.jpg)
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
	body{
background-color: #1a1a1a;
		background-image: url('TLimages/bg.jpg');
		font-family:"Montserrat";
		 no-repeat center center fixed; 
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
		position: relative;  
		color: #ffffff;
		overflow-x: hidden;
		
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

	.headcolorroundywhite{
		background-color: #ffffff;
		box-shadow: 0px 10px 5px #1a1a1a;
		border-radius: 15px 15px 15px 15px;
		
	}

	.headcolorroundygray{
		background-color: #C0C0C0;
		box-shadow: 0px 10px 5px #1a1a1a;
		border-radius: 15px 15px 15px 15px;
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
		font-size: 14px;
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

	.title {
		font-family: Montserrat;
		font-weight: bold;
		font-size: 40px;
		color: black;
	}

	.desc1 {
		font-family: Montserrat;
		font-weight: lighter;
		font-size: 15px;
		color: black;
		margin-left: 39%;
	}

	.desc2 {
		font-family: Montserrat;
		font-weight: lighter;
		font-size: 15px;
		color: black;
		margin-left: 45%;
	}

	.desc3 {
		font-family: Montserrat;
		font-weight: lighter;
		font-size: 15px;
		color: black;
		margin-left: 39%;
	}

	.title2 {
		text-align: center;
		font-family: Montserrat;
		font-weight: lighter;
		font-size: 40px;
		color: black;
	}
	
	.title2b {
		text-align: center;
		font-family: Montserrat;
		font-weight: lighter;
		font-size: 40px;
		color: #800000;
	}
	
	.identdesc {
		font-size: 15px;
		font-weight: light;
		color: black;
		text-align: center;
		<!-- border: 1px solid black; -->
	}

	#socialpic {
		width: 100px;
		height: 100px;
		margin-left: 35%;
	}

	#flexiblepic {
		width: 100px;
		height: 100px;
		margin-left: 35%;
	}
	
	#reliablepic {
		width: 100px;
		height: 100px;
		margin-left: 35%;
	}

	#butt1 {
		background-color: #800000;
		margin-left: 35%;
		margin-bottom: 60px;
		margin-top: 25px;
	}

	#butt2 {
		background-color: #800000;
		margin-left: 35%;
		margin-bottom: 60px;

	}
	
	#butt3 {
		background-color: #800000;
		margin-left: 35%;
		margin-bottom: 60px;
		margin-top: 46px;
	}	
	
	hr { 
		margin-top: 0.5em;
		margin-bottom: 0.5em;
		margin-left: auto;
		margin-right: auto;
		border-width: 3px;
		width: 100px;
		border-color: #800000;
	}
	
	.soc:hover {
		background-color: #00ffffff;
		box-shadow: 10px 0 10px 2px gray;
		border-radius:50%;
	}
	
	.flex:hover {
		background-color: #00ffffff;
		box-shadow:  0 0 5px 5px gray;
		border-radius:50%;
	}
	
	.reli:hover {
		background-color: #00ffffff;
		box-shadow: -10px 0 10px 2px gray;
		border-radius:50%;
	}
	
	.mnl:hover {
		background-color: #00ffffff;
		transform: rotateZ(-30deg);
	}
	
	.cav:hover {
		background-color: #00ffffff;
		transform: rotateZ(-30deg);
	}
	
	.tag:hover {
		background-color: #00ffffff;
		transform: rotateZ(-30deg);
	}
	
	.vis:hover {
		background-color: #00ffffff;
		transform: rotateZ(-30deg);
	}
	
	.glen {
		width: 200px;
		height: 220px;
		margin-left: 20%;
		margin-bottom: 80px;
	}
	
	.glen:hover {
		transform: scale(1.3);
	}
	
	.glendesc {
		width: 250px;
		height: 250px;
	}
	
	.dex {
		margin-left: 20%;
		margin-bottom: 80px;
		width: 200px;
		height: 225px;
	}
	
	
	.dex:hover {
		transform: scale(1.3);
	}
	
	.dexdesc {
		color: black;
		font-family: Montserrat;
		font-weight: light;
		width: 220px;
		height: 200px;
	}

	.tierce {
		width: 200px;
		height: 225px;
		margin-left: 20%;
		margin-bottom: 80px;
		
	}
	
	.tierce:hover {
		transform: scale(1.3);
		
	}
	
	.tiercedesc {
		color: black;
		font-family: Montserrat;
		font-weight: light;
		width: 200px;
		height: 150px;
		margin-left: -20px;
	}
	
	.aein {
		width: 200px;
		height: 220px;
		margin-left: 20%;
		margin-bottom: 80px;
		
	}
	
	.aein:hover {
		transform: scale(1.3);
	}
	
	.aeindesc {
		color: black;
		font-family: Montserrat;
		font-weight: light;
		width: 180px;
		height: 180px;
		margin-left: -22px;
	}
	
	.gel {
		width: 200px;
		height: 225px;
		margin-left: 40%;
		margin-bottom: 80px;
		
	}
	
	.gel:hover {
		-ms-transform: scale(2, 3); /* IE 9 */
    -webkit-transform: scale(2, 3); 
		transform: scale(1.3);
		
	}
	
	.geldesc {
		width: 250px;
		height: 250px;
		margin-left: 20%;
	}
	
	.titoldesc {
		color: #800000;
		text-align: center;
		font-size: 23px;
	}
	
	.titoldesc2 {
		margin-top: -5px;
		color: #800000;
		text-align: center;
		font-size: 23px;
	}
	
	.titoldesc3 {
		margin-top: 4px;
		color: #800000;
		text-align: center;
		font-size: 23px;
	}
	
	ul {
		 list-style-type: none;
	}
	
	.roledesc {
		font-size: 15px;
		font-weight: lighter;
		font-family: Arial;
		text-align: center;
		color: black;
	}
	
	.service1 {
		width: 100%; 
		height: 100%;
		border-radius: 10px;
		display: block;
		opacity:0.5;
	}
	
	.service1:hover {
		opacity:1;
	}
	
	.service2 {
		width: 100%; 
		height: 100%;
		border-radius: 10px;
		display: block;
		opacity:0.5;
	}
	
	.service2:hover {
		opacity:1;
	}
	
	.para1 {
		font-size: 50px;
		color: #800000;
		font-family: Montserrat;
		font-weight: Lighter;
	}
	
	.para2 {
		font-size: 50px;
		color: #800000;
		font-family: Montserrat;
		font-weight: Lighter;
		text-align: right;
	}
	.icons ul li{
		height: 40px;
		width: 40px;
		display:inline-block;
	}
	
}
.navvy li{
	font-size: 15px;
}

</style>
</head>
<body >
	<div class="container">
	<br />
	<!-- header -->	
	<header>
		<div class="line top">
			<div class="box headcolor">
				<div class="s-4 m-3 l-1" style="top: 50px;">
					<img class="logo" src="<?php echo base_url('TLimages/tupweb.png'); ?>" alt="logo">
				</div>
				
				<div class="s-8 m-8 l-4" >
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
				<li><a style="font-size: 14px;" href="<?php echo base_url(); ?>">Now Streaming</a></li>
				<li><a style="font-size: 14px;" href="<?php echo base_url('watchlist'); ?>">Watchlist</a></li>
				<li><a style="font-size: 14px;" href="<?php echo base_url('request'); ?>">Request</a></li>
				<li class="active"><a style="font-size: 14px;" href="<?php echo base_url('about'); ?>">About Us</a></li>
			</ul>
			</div>
		</div>
		</nav>
	<!-- end of navigation -->
	</header>

	<section>

		<!--Campus Section-->
		
			
			<div class="box container2 headcolorroundywhite">
			
			<br />
			
			<img src="<?php echo base_url('TLimages/campus.png'); ?>" alt="Our Campuses" class="center">
			
			<!--TUP Manila Picture-->
			
			<div class="col-md-3 mnl">	
			
			<br />
			<br />
								<a href="http://www.tup.edu.ph">
								<img src="<?php echo base_url('TLimages/mnl.png'); ?>" alt="TUP Manila"/>
								</a><br />
			</div>
			
			<!--TUP Cavite Picture-->
			
			<div class="col-md-3 mnl">	
			
			<br />
			<br />
								<a href="http://www.tup.edu.ph/cavite/home">
								<img src="<?php echo base_url('TLimages/cav.png'); ?>" alt="TUP Cavite"/>
								</a><br />
			</div>
			
			<!--TUP Taguig Picture-->
			
			<div class="col-md-3 mnl">	
			
			<br />
			<br />
								<a href="http://www.tup.edu.ph/page/campuses/tuptaguig">
								<img src="<?php echo base_url('TLimages/tag.png'); ?>" alt="TUP Taguig"/>
								</a><br />
			</div>
			
			<!--TUP Visayas Picture-->
			
			<div class="col-md-3 mnl">	
			
			<br />
			<br />
								<a href="http://www.tup.edu.ph/visayas/home">
								<img src="<?php echo base_url('TLimages/vis.png'); ?>" alt="TUP Visayas"/>
								</a><br />
			</div>
			
			</div>
			
			<br />

		<!--Identity Section-->
		
			<div class="box container2 headcolorroundygray">
			
			<br />
			
			<img src="<?php echo base_url('TLimages/identity.png'); ?>" alt="Our Identity" class="center">

			<div class="row">
			
			<!--Sociable-->	
			<div class="col-md-4 soc">	
			
			<br />
			<br />
			<br />
			<br />
								<img src="<?php echo base_url('TLimages/people.png'); ?>" alt="Sociable" id="socialpic"/> <br />
								<h3 class="title2">Sociable</h3>
								<p class="identdesc">We make every campuses updated through our announcements, and entertained <br /> 
													 by our top videos.</p><br />
								<button onclick="window.location.href='<?php echo base_url('watchlist')?>'" type="button" class="btn" id="butt1">Watchlist</button>
			</div>

			<!--Flexibility-->
			
			<div class="col-md-4 flex">
			
			<br />
			<br />
			<br />
			<br />
								<img src="<?php echo base_url('TLimages/gadgets.png'); ?>" alt="Flexibility" id="flexiblepic"/> <br />
								<h3 class="title2b">Flexibility</h3>
								<p class="identdesc">We provide services in most of today's <br />
													 technology and gives privilege to <br /> 
												     every TUPian students to watch <br />
													 &amp; subscribe on our videos.</p><br />
								<button onclick="window.location.href='https://web.facebook.com/TUPian/'" type="button" class="btn" id="butt2">Community</button>				
			</div>

			<!--Reliability-->
			
			<div class="col-md-4 reli">
			
			<br />
			<br />
			<br />
			<br />
								<img src="<?php echo base_url('TLimages/shakehands.png'); ?>" alt="Reliability" id="reliablepic"/> <br />
								<h3 class="title2">Reliability</h3>
								<p class="identdesc">Our videos are based on open source, reliable &amp; robust technologies</p><br>
								<button onclick="window.location.href='<?php echo base_url('request')?>'" type="button" class="btn" id="butt3">Join Us</button>	
			</div>
			</div>
			</div>

			<br />
			
		<!--Team Section-->
			
			<div class="box container2 headcolorroundywhite">
			
			<br />
			
			<img src="<?php echo base_url('TLimages/team.png'); ?>" alt="Our Team" class="center">

			<br />
			<br />
				
				<!--Glen Picture-->	
				
				
				<div class="row">
				
					<div class="col-md-6 glen">					
			
					<br />
					<br />
										<img src="<?php echo base_url('TLimages/glen.png'); ?>" alt="Glen" id="glendesc"/> <br />
										<h1 class="titoldesc">Glen Jester</h1>
										<h5 class="roledesc">Back-end Developer</h5>
										<br />
					</div>
					
				<!--Dex Picture-->
				
					<div class="col-md-6 dex">	
					
					<br />
					<br />
										<img src="<?php echo base_url('TLimages/dex.jpg'); ?>" alt="Dex"/> <br />
										<h1 class="titoldesc">John Xedricks</h1>
										<h5 class="roledesc">Front-end Developer</h5>
										<br />
					</div>
							
				</div>
				
				<br />
				<br />
				
				<div class="row">

				
				<!--Tierce Picture-->
				
				<div class="row">
				
					<div class="col-md-6 tierce">	
					
					<br />
					<br />
										<img src="<?php echo base_url('TLimages/tierce.jpg'); ?>" alt="Tierce"/> <br />
										<h1 class="titoldesc2">Mary Tierce</h1>
										<h5 class="roledesc">Integrator Designer</h5>
										<br />
					</div>
				
				<!--Aein Picture-->
				
					<div class="col-md-6 aein">
					
					<br />
					<br />
										<img src="<?php echo base_url('TLimages/aein.png'); ?>" alt="Aein"/> <br />
										<h1 class="titoldesc2">Aeinreb</h1>
										<h5 class="roledesc">Integrator Designer</h5>
										<br />
					</div>
				</div>
					
				<!--Gel Picture-->
					
					<div class="row">
					
					<div class="col-md-12 gel">
					
					<br />
					<br />
										<img src="<?php echo base_url('TLimages/gel.png'); ?>" alt="Angel"/> <br />
										<h1 class="titoldesc3">Mary Angeline</h1>
										<h5 class="roledesc">Integrator Designer</h5>
										<br />
										
						</div>
						</div>
					
					</div>
					<br />
					<br />
					
				</div>
				<br />
				
		<div class="line">
			<div class="margin">
			
		<!--Service Section-->
		
				<div class="box container2 headcolorroundygray">
						<br />	
					
						<img src="<?php echo base_url('TLimages/service.png'); ?>" alt="Our service" class="center">

						<br />
						<br />
						
						<div class="row">
						
							<!--First Pic-->
							
							<div class="col-md-6">
						
							<br />
							<br />
											<img src="<?php echo base_url('TLimages/livestream.png'); ?>" alt="Our service" class="service1"/> <br />
							</div>
							
							<div class="col-md-6">
						
							<br />
							<br />
											<h1 class="para1">Real-time live streaming</h1>
											<br />
											
							</div>
						</div>	

						<div class="row">
						
							<!--Second Pic-->
							
							<div class="col-md-6">
						
							<br />
							<br />
											<h1 class="para2">Latest News Updates</h1>
											<br />
											
							</div>
							
							<div class="col-md-6">
						
							<br />
							<br />
											<img src="<?php echo base_url('TLimages/news.jpg'); ?>" alt="Our service" class="service2"/> <br />
							</div>
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