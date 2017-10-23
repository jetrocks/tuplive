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
	
	
	<script>
		
			
		checks=0;
		function showDiv(elem){
			if(elem.value == "Weekly"){
				$("#day").slideDown('medium');
				$("#dayy").slideDown('medium');
			}
			if(elem.value == "Daily"){
				$("#dayy").slideDown('medium');
				$("#day").slideUp('medium');
			}
			if(elem.value == "Never") {
				$("#day").slideUp('medium');
				$("#dayy").slideUp('medium');
			}
		}
		
		function adding(){
			if(document.getElementById("day1").checked == true &&
				document.getElementById("day2").checked == true &&
				document.getElementById("day3").checked == true &&
				document.getElementById("day4").checked == true &&
				document.getElementById("day5").checked == true &&
				document.getElementById("day6").checked == true &&
				document.getElementById("day7").checked == true){
				
				$("#day").slideUp('medium');
			
				document.getElementById("day1").checked = false;
				document.getElementById("day2").checked = false;
				document.getElementById("day3").checked = false;
				document.getElementById("day4").checked = false;
				document.getElementById("day5").checked = false;
				document.getElementById("day6").checked = false;
				document.getElementById("day7").checked = false;
				document.getElementById("selpeat").selectedIndex = 1;
			}
		}
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
		background-image: url('TLimages/facade.png');
		-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
	position: relative;  
	color: #ffffff;
	overflow-x: hidden;
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
	.boxkular{
		background-color: #c51d39;
		border-radius: 15px;
		
	}

	.boxkular form{
		color: #white;
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
	.formy{
		color: white;
	}
	select{
		color: black;
		font-size: 10px;
		padding: 10px;
		border-radius: 5px;
	}
	.checkk input[type=checkbox]{
		
	}
	.align{
		text-align: left;
	}
	.navvy li{
	font-size: 15px;
}
</style>
</head>
<body class="align">
	<div class="container">
	<br />
	<!-- header -->	
	<header>
		<div class="line top">
			<div class="box headcolor">
				<div class="s-4 m-3 l-1" style="top: 50px;">
					<img class="logo" src="<?php echo base_url('TLimages/tupweb.png'); ?>" alt="logo">
				</div>
				
				<div class="s-8 m-8 l-4 align" >
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
				<li><a href="<?php echo base_url(); ?>">Now Streaming</a></li>
				<li><a href="<?php echo base_url('watchlist'); ?>">Watchlist</a></li>
				<li class="active"><a href="<?php echo base_url('request'); ?>">Request</a></li>
				<li><a href="<?php echo base_url('about'); ?>">About Us</a></li>
			</ul>
			</div>
		</div>
		</nav>
	<!-- end of navigation -->
	</header>

	<section>
		<div class="box container2 headcolorroundy ">
			<div class="line ">
				<div  class="s-12 m-12 l-6 sidetext align">
					<h1  style="font-family:Montserrat; margin-left:50px;" >
							Technological University of the Philippines is live now!
					</h1>
					<br />
					<h2  style="font-family:Montserrat;  margin-left:50px;" >
							This is TUP's one and powerful Live Streaming Website.<br />
							Take a peek to the small but powerful world of TUP.<br />
							Feel at home in your second-home by reaching out your laptop or smartphone. 
					</h2>
				</div>
				
				<div id="log" class="box s-12 m-10 l-5 boxkular" style="margin:40px; top:50px;">
					<br />
					<h1 style="color: white;">Request for a Timeslot </h1>
					<h4 style="color: white;">and shine bright. </h4>
					<br />
					<br />
					<h1 style="color: white;">Success! Please <a href="https://mail.google.com/" >open your gmail account</a> to receive the link for the form! </h1>
				</div>	
			</div>
		</div>
	</section>
	
	<br />
	
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