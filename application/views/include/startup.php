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
    <body class="size-1280">
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
	<div class="container-fluid">
	<header>
	<br>
	<div class="line">
	<div class="m-1 s-1">
		<img style="width: 100%; height: 100%; margin-right: 20%;" src="<?php echo base_url('bootstrap/images/tupweb.png');?>" alt="">
		
	</div>
	<div class="m-11 s-11 dexy">
		<br>
		<h1>
		TUP Live!
		</h1>
		
	</div>
	</div>
	</header></div>
                   
	<!--end of itaas-->
	    <br />
	<br />
	<br />
	<br />
	    <!--start of reg and log-->
	<div class="line">
		<div id="log" class="box m-4 s-12 boxkular">
			<h3>Sign In <button id="ctoreg">Reg</button></h3>
			
			<form>
				<label for="webmail">TUP mail:
				<input type="email" name="webmail">
				</label>
				<br />
				<br />
				<label for="pass">Password:
				<input type="password" name="pass">
				</label>
				
			</form>
		</div>
		
		<div id="reg" class="box m-4 s-12 boxkular">
			<h3>Register <button id="ctolog">Login</button></h3>
			
			<form>
				<label for="webmail">TUP mail:
				<input type="email" name="webmail">
				</label>
				<br>
				<br>
				<label for="pass">Password:
				<input type="password" name="pass">
				</label>
				
			</form>
		</div>
		
	</div>
                           
<!--end of reg and log-->
	
	
      <script type="text/javascript" src="<?php echo base_url('bootstrap/js/responsee.js');?>"></script>               
      
	  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="<?php echo base_url('bootstrap/js/index.js');?>"></script>
	
	<script>
		$(document).ready(function(){
			$("#panel1").delay(1000).animate({top: '50%', height: '0%' });
			$("#panel2").delay(1000).animate({height: '0%' });
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
