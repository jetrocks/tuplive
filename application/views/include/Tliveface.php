<!DOCTYPE html>
<html lang="en">
<head>
	<title>TUP Live!</title>
	<meta name="viewport" content="width=device-width; initial-scale=1.0" />
	<link href="<?php echo base_url('bootstrap/css/bootstrap.css'); ?>" rel="stylesheet" />
	<link href="<?php echo base_url('bootstrap/css/bootstrap-theme.css'); ?>" rel="stylesheet" />
	<link href="<?php echo base_url('bootstrap/css/custom.css'); ?>" rel="stylesheet" />

	<script src="<?php echo base_url('bootstrap/js/jquery.min.js'); ?>"></script>
	<script src="<?php echo base_url('bootstrap/js/bootstrap.min.js');?> "></script>
	
	<style>
	
	
	
	.header{
		
		background-color: #101010;
		font-family: Tahoma, Geneva, sans-serif;
		color: white;
	}
	
	.header button{
		box-shadow: 0 8px 16px 0 rgba(242,242,242,0.5);
		width: 80px;
		height: 40px;
		border-radius: 8px;
		background-color: #c51e3a;
		border: none;
		color: #dedede;
		padding: 8px 16px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 16px;
		margin: 4px 2px;
		-webkit-transition-duration: 0.4s; /* Safari */
		transition-duration: 0.2s;
		cursor: pointer;
	}
	
	.header button:hover{
		box-shadow: 0 8px 16px 8px rgba(197,30,58,0.9);
		background-color: #dedede;
		color: #c51e3a;
	}
	
	.header button span {
		cursor: pointer;
		display: inline-block;
		position: relative;
		transition: 0.2s ease;
	}

	.header button span:after {
		content: '\00bb';
		position: absolute;
		opacity: 0;
		top: 0;
		right: -20px;
		transition: 0.2s ease;
	}

	.header button:hover span {
		padding-right: 25px;
	}

	.header button:hover span:after {
		opacity: 1;
		right: 0;
	}
	
	.navigation{
		
		background-color: #dedede;
		font-family: Tahoma, Geneva, sans-serif;
		color: white;
	}
	
	
	.navigation a{
		font-size: 15px;
		color: #c51e3a;
		width: 240px;
		height: 60px;
		padding: 17px ;
		transition: font-size 1s;
	}
	
	
	.navigation a:link, a:visited {
		
		background-color: #dedede;
		color: #c51e3a;
		border: 2px solid #c51e3a;
		// padding: 10px 10px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		}

	 .navigation a:hover, a:active {
		font-size: 25px;
		background-color: #c51e3a;
		color: #dedede;
		padding: 10px;
		transition: 0.5s ease;
		}
	
	.shadow{
		box-shadow: 10px 10px 5px grey;
	}
	
	.bod{
		
		background-color: #202020;
		font-family: Tahoma, Geneva, sans-serif;
		color: white;
	}
	
	
	
	.bod .side{
		background-color: #101010;
		
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
		font-size: 40px;
		margin-left: -25px;
		
	}
			
	.container2:hover .video {
							opacity: 0.3;
							}
	.video {
			opacity: 1;
			display: block;
			transition: .5s ease;
			backface-visibility: hidden;
			width:1080px; 
			height:600px;
			}
	.container2:hover .middle {
			opacity: 1;
			}
			
	.container2 {
			position: relative;
			}
	
	.foot{
		
		background-color: #202020;
		font-family: Tahoma, Geneva, sans-serif;
		color: white;
	}
	.foot a{
		color: white;
		
	}
	
	
	
	</style>
</head>
<body>

<div class="container-fluid" id="guide-template">

	<!-- HEADER -->

	<div class="row header">
	
		
		<div class="col-md-4 header">
		<br />
		<img src="<?php echo base_url('TLimages/livelogo.png'); ?>" style="margin-left: 50px;" alt="TUP Live! Logo" height="100px" width="100px" />
		<img src="<?php echo base_url('TLimages/livetitle.png'); ?>" style="margin-top:-50px;" alt="TUP Live! Logo" width="190px" />
		<h6 style="margin-left: 150px; margin-top:-50px;">The Technological University of the Philippines'<br />Live Streaming Broadcasting Website</h6>
		<br />
		
		</div>
		
		<div class="col-md-4 header" >
		
		
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		
		
		</div>
		
		<div class="col-md-4 header">

			<div class="row">
				<div class="col-md-6 header">
		
				<br />
		
				</div>
			
				<div class="col-md-6 header">
		
					<h6>	<a href="#" style="color: white;" >FAQs</a> | <a href="#" style="color: white;" >Login</a> | <a href="#" style="color: white;" >Mail</a> | <a href="#" style="color: white;" >Contact Us</a></h6>
		
				</div>
			</div>
			
			<div class="row">
			
				<div class="col-md-12 header">
		
					<input type="text" style="color:black;" size="40"  />
		
		
					<button type="button"><span>FIND</span></button>
		
				</div>
			
			</div>
			
			<div class="row">
			
				<div class="col-md-12 header">
		
					<h3 style="color: #1ca033; margin-left: 100px;">PH STRD TIME: 11:11:11 AM </h3>
		
				</div>
			
			</div>
		
		</div>
		
	</div>
	
	<!-- END OF HEADER -->
	
	<!-- NAVIGATION -->
	<div class="row navigation" id="da-thumbs" style="z-index:1;" >
		
		<div class="col-md-2" style="margin-left: -30px;">
			<a href="#">
				
					HOME
				
			</a>
		</div>
		
		<div class="col-md-2"  >
		<a href="#">
				
					WATCHLIST
				
			</a>
		</div>
		
		<div class="col-md-2"  >
		<a href="#">
				
					COMMUNITY
				
			</a>
		</div>
		
		<div class="col-md-2"  >
		<a href="#">
				
					ABOUT US
				
			</a>
		</div>
		
		<div class="col-md-2"  >
		<a href="#">
				
					LOGIN
				
			</a>
		</div>
		
		<div class="col-md-2"  >
		<a href="#">
				
					JOIN US
				
			</a>
		</div>
	</div>
	
	<!-- END OF NAVIGATION -->
	
	<!-- BODY -->
	
	<div class="row bod">
			<div class="col-md-12 side" style="widhth: 1000px;">
			<br/>
			<br/>
			
			
			
			</div>
		</div>
	
	<div class="row bod ">
	
	
		<div class="col-md-1 side">
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
		</div>
		
		<div class="col-md-10" style="box-shadow: 0 15px 25px 5px rgba(242,242,242,0.5);" >
			
			<div class="row">
			
			<div class="col-md-12 container2">
				<h4>NOW STREAMING: </h4>
				<h1>COS TALENT SEARCH 2017	 </h1>
				<h4 style="margin-left:900px; margin-top:-20px;	">September 4, 2017 </h4>
				<video class="video" autoplay  muted >
					<source src="<?php echo base_url('TLimages/flow.mp4'); ?>" type="video/mp4" >
					Your browser does not support HTML5 video.
				</video>
				<div class="middle">
				<div class="text">Wanna be part of the nation?<br /><br /> &emsp;&emsp;&emsp; <a href="#"> JOIN NA! </a></div>
				</div>
			</div>
			
			
			</div>
			
			<div class="row">
			<div class="col-md-12" style="background-color:#4d2027">
				<h4 style="margin-left:800px;"><i>UP NEXT: USG ANNOUNCEMENT</i></h4>
				<h5>
					Uploader's Message:
				</h5>
				<br />
				<br />
				<br />
				<br />
			</div>
			</div>
			
		</div>
		
		<div class="col-md-1 side">
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
		</div>
	

	
	</div>
	
	<div class="row bod">
		
		<div class="col-md-1 side">
		<br/>
		<br/>
		<br/>
		<br/>
		</div>
		
		<div class="col-md-10 side">
		<br/>
		<hr>
		<br/>
		</div>
		
		<div class="col-md-1 side">
		<br/>
		<br/>
		<br/>
		<br/>
		</div>
	</div>
	
	<!-- END OF BODY -->
	
	<!-- FOOTER -->
	<div class="row foot">
		<div class="col-md-1">
		</div>
		
		<div class="col-md-2">
			<h3 style="font-size:20px;">GENERAL</h3><br />
			<a href="#"><h4>Home</h4></a>
			<a href="#"><h4>Blog</h4></a>
			<a href="#"><h4>Faq</h4></a>
			<a href="#"><h4>Contact Us</h4></a>
		</div>
		
		<div class="col-md-2">
			<h3 style="font-size:20px;">KNOW US</h3><br />
			<a href="#"><h4>About Us</h4></a>
			<a href="#"><h4>Disclaimer</h4></a>
			<a href="#"><h4>Terms and Conditions</h4></a>
			<a href="#"><h4>Site Map</h4></a>
		</div>
		
		<div class="col-md-2">
			<h3 style="font-size:20px;">CONTACT US</h3><br />
		</div>
		
		<div class="col-md-5">
		</div>
		
	
	</div>
	
	<div class="row">
			<div class="col-md-12" style="background-color: #101010;">
				<br />
				<br />
			</div>
			
		</div>
	
	<!-- END OF FOOTER -->
	
	
</div>









</body>
</html>