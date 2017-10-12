<html>
<head>
<title>Scheduling</title>
<meta name="viewport" charset="UTF-8" content="width=device-width, initial-scale=1.0" />
	<link href="<?php echo base_url('bootstrap/css/bootstrap.css'); ?>" rel="stylesheet" />
	<link href="<?php echo base_url('bootstrap/css/bootstrap-theme.css'); ?>" rel="stylesheet" />
	<link href="<?php echo base_url('bootstrap/css/custom.css'); ?>" rel="stylesheet" />

	<script src="<?php echo base_url('bootstrap/js/jquery.min.js'); ?>"></script>
	<script src="<?php echo base_url('bootstrap/js/bootstrap.min.js');?> "></script>
	
	

</head>
<body>
	<div class="container-fluid">
		<form action="inserto" method="post">
			<div class="row">
				<div class="form-group col-md-3">
				<label for="title">Title:</label> <input class="form-control" type="text" name="title" required/>
			</div>
			</div>
			
			<div class="row">				
				<div class="form-group col-md-3">
				<label for="date">Date:</label>
				<input class="form-control" type="date" name="date"  required/>
				</div>
				
				<div class="form-group col-md-3">
				<label for="time">Time</label>
				
				<input class="form-control" type="time" name="time" value="<?php echo date("h-i-a",time());?>" required/>
				</div>
			</div>
			
			<div class="row">
				<div class="form-group col-md-5">
				<label for="seltime">Length:</label><br />
				<select name="seltime" length="40">
					<option value="15">15 minutes</option>
					<option value="30">30 minutes</option>
					<option value="45">45 minutes</option>
					<option value="60">1 hour</option>
				</select>
				</div>
			</div>
			
			<div class="row">
				<div class="form-group col-md-5">
				<label for="repeat">Repeat:</label><br />
				<select name="repeat" length="40">
					<option value="Daily">Daily</option>
					<option value="Weekly">Weekly</option>
					<option value="Never">Never</option>
				</select>
				</div>
			</div>
			
			<div class="row">
				<div class="form-group col-md-5">
				<label for="decription">Description:</label><br />
				<textarea name="description" style="resize:none; width:300px; height:100px;"></textarea>
				</div>
			</div>
			
			<input type="submit" class="btn-primary" name="submit">
		</form>
		
		<?php
			if(isset($_GET['time'])){
				
				echo $_GET['time'];
			}
		
		?>
		
		
	</div>
</body>

</html>