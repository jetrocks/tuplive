<!DOCTYPE html>
<html lang="en">
<head>
	<title>TUP Live!</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta charset="UTF-8"  />
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
	.table-curved {
    border-collapse: separate;
}
.table-curved {
    border: solid #ccc 1px;
    border-radius: 6px;
    border-left:0px;
}
.table-curved td, .table-curved th {
    border-left: 1px solid #ccc;
    border-top: 1px solid #ccc;
}
.table-curved th {
    border-top: none;
}
.table-curved th:first-child {
    border-radius: 6px 0 0 0;
}
.table-curved th:last-child {
    border-radius: 0 6px 0 0;
}
.table-curved th:only-child{
    border-radius: 6px 6px 0 0;
}
.table-curved tr:last-child td:first-child {
    border-radius: 0 0 0 6px;
}
.table-curved tr:last-child td:last-child {
    border-radius: 0 0 6px 0;
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
	table {
    width: 50%;
    margin-left: auto;
    margin-right: auto;
}
	.navvy li{
	font-size: 15px;
}
</style>
</head>
<body class="font" >
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
				<li><a href="<?php echo base_url(); ?>">Now Streaming</a></li>
				<li class="active"><a href="<?php echo base_url('watchlist'); ?>">Watchlist</a></li>
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
			<div>
				Today's Schedule (<?php echo $date; ?>)
			</div>
			<div>
				<div >
					<br />
					 <table class="s-6 m-6 l-6 table table-hover table-curved" style="color: #0d0d0d; text-align: center; width:100%; ">
						<thead style="text-align: center;">
							<tr>
							<th >TIME</th>
							<th>PROGRAM</th>
							</tr>
						</thead>
						<tbody>
						<?php
						$date_today= date("Y-m-d", strtotime($date));
						$day_today=date("l", strtotime($date));
						if(isset($prog) && isset($rep)){
							foreach ($prog as $p){
								if(($p['rep'] == 'Daily' && date("Y-m-d",strtotime($p['startdate'])) >= $date_today || date("Y-m-d",strtotime($p['enddate'])) <= $date_today )) {
										echo '<tr>';
										echo '<td>'.date("h:ia",strtotime($p['starttime'])).' - '.date("h:ia",strtotime($p['endtime'])).'</td>';
										echo '<td>'.$p['progname'].'</td>';
										echo '</tr>';
										}
								else if(($p['rep'] == 'Weekly' && date("Y-m-d",strtotime($p['startdate'])) >= $date_today || date("Y-m-d",strtotime($p['enddate'])) <= $date_today )){
									foreach ($rep as $pr){
										if($p['prog_id'] == $p['prog_id'] && $pr['repeat_every'] == $day_today){
											echo '<tr>';
											echo '<td>'.date("h:ia",strtotime($p['starttime'])).' - '.date("h:ia",strtotime($p['endtime'])).'</td>';
											echo '<td>'.$p['progname'].'</td>';
											echo '</tr>';
											}

										}
						
										}
								else if(($p['rep'] == 'Never' && date("Y-m-d",strtotime($p['startdate'])) == $date_today)){
										echo '<tr>';
										echo '<td>'.date("h:ia",strtotime($p['starttime'])).' - '.date("h:ia",strtotime($p['endtime'])).'</td>';
										echo '<td>'.$p['progname'].'</td>';
										echo '</tr>';
								}		

									}
								}		
								
							?>	
							

						</tbody>
					</table>
				</div>
			</div>
			
		</div>
		<br />	
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