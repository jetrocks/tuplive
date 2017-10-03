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
	<link rel="shortcut icon" href="<?php echo base_url('bootstrap/css/logo_1.ico'); ?>">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

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



</style>
<body >

<div class="container">
	<br />
	
	<header>
	
		<!-- header -->
		<div class="line topp">
            <div class="box headcolor">
               <div class="s-6 l-1">
                  <img class="logo" src="<?php echo base_url('TLimages/livelogo.png'); ?>">
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
            <nav class="margin-bottom">
               <p class="nav-text">MENU</p>
               <div class="top-nav s-12 l-10">
                  <ul>
                     <li><a>Home</a></li>
                     <li><a>Watchlist</a></li>
					 <li><a>Community</a></li> 
                     <li><a>About Us</a></li>
					 <li><a href="#"  id="loginform" >Login</a>
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
					 
					 <li><a>Join Us</a></li>
                  </ul>
               </div>
            </nav>
         </div>
		<!-- end of navigation -->
		
	</header>

	






<section>

	<div class="box headcolor container2">
		<h2>Now Streaming</h2>
		
		<video class="video s-12 m-12 1-4" autoplay  muted loop >
			<source src="<?php echo base_url('TLimages/flow.mp4'); ?>" type="video/mp4" >
					 Your browser does not support HTML5 video.
		</video>
		<div class="middle">
				<div align="center" class="text">Wanna be part of the nation?<br /><br /> <a href="#"> JOIN NA! </a></div>
		</div>
	</div>



</section>



</div>


</body>
</html>