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
	<link href="<?php echo base_url('bootstrap/css/responsee.css'); ?>" rel="stylesheet" />
	<link rel="shortcut icon" href="<?php echo base_url('bootstrap/css/tup.ico'); ?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
		<script>
			function openNav() {
				document.getElementById("mySidenav").style.width = "20%";
				document.getElementById("main").style.marginLeft = "20%";
				document.body.style.backgroundColor = "#1a1a1a";
			}
			
			function closeNav() {
				document.getElementById("mySidenav").style.width = "0";
				document.getElementById("main").style.marginLeft= "7.15%";
				document.body.style.backgroundColor = "#1a1a1a";
			}
		</script>	

</head>
<style>
	body {
    
	background-image: url("TLimages/bg.jpg");
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
	
	h1 {
		font-size: 35px;
	}
.table{
		background-color: #121212;
		font-size: 15px;
	}
   
		table tfoot, table thead,table tr:nth-of-type(2n) {
		background:none repeat scroll 0 0 #121212;
	}
   
	thead{
		border-bottom: 1px solid #e5e5e5;
		background-color: #666666;
	}
   
	table thead{
		background-color: #666666;
	}
   
	table tbody tr{
		cursor: pointer;
		transition: background-color .5s;
	}
   
	table tbody tr:hover{
		background-color: #666666;
	}
	
	th {
		text-align: center;
	}
	
	td {
		text-align: center;
	}
	.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

#main {
    transition: margin-left .5s;
    padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
<body >
	<div id="mySidenav" class="s-12 sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<a href="<?php echo base_url('admin'); ?>">Pending List</a>
		<a href="<?php echo base_url('adminproglist'); ?>">Program List</a>
		</div>

	<span style="font-size:24px; cursor:pointer; border: 2px solid black"  onclick="openNav()"><button  ><i  class="fa fa-server"></i></button></span>
	<div class="container" id="main">
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
			</nav>
		</div>
	<!-- end of navigation -->
	</header>

	<section>
		<div class="box container2 headcolorroundy">
			<div class="col-md-12">
				<h1>Pending Requests</h1>
				<br />
			</div>
			<div class="col-md-12">
					<table class="table">
						<thead>
							<tr>
								
								<th>Program Name</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
							
								<td>Program Name 01</td>
								<td><a href="<?php echo base_url('pendview'); ?>">Review Request</a></td>
							</tr>						
							
							
						</tbody>
					</table>
			</div>
		</div>
		<br />
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