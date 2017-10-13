<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
	  
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>TUP Live!</title>
      <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/components.css');?>">
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
	   .dexy h1 {
		font-family: Georgia;
		color: #c51d39;
	}
	.boxkular{
		background-color: #ffffe6;
		border-radius: 15px;
	
	}
	.boxkular h3{
		
		color: #1a1a1a;
	}
	.boxkular form{
		color: #1a1a1a;
		font-size: 25px;
	}
	.boxkular form label input[type=email],input[type=password]{
		color: #1a1a1a;
		border-radius: 15px;
		padding: 15px;
	}
   </style>
</head>
   <body class="size-960">
   
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
		
	<div class="container-fluid">
		<div>
			
		</div>
	</div>
                           

	
	
      <script type="text/javascript" src="<?php echo base_url('bootstrap/js/responsee.js');?>"></script>               
      
	  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="<?php echo base_url('bootstrap/js/index.js');?>"></script>
	<script>
		$(document).ready(function(){
			$("#panel1").delay(2000).animate({top: '50%', height: '0%' });
			$("#panel2").delay(2000).animate({height: '0%' });
		});

	</script>
	
   </body>
</html>
