<!DOCTYPE html>
<html lang="en">
<head>
	<title>CMS</title>
	<meta name="viewport" content="width=device-width; initial-scale=1.0" />
	<link href="<?php echo base_url('bootstrap/css/bootstrap.css'); ?>" rel="stylesheet" />
	<link href="<?php echo base_url('bootstrap/css/bootstrap-theme.css'); ?>" rel="stylesheet" />
	<link href="<?php echo base_url('bootstrap/css/custom.css'); ?>" rel="stylesheet" />

	<script src="<?php echo base_url('bootstrap/js/jquery.min.js'); ?>"></script>
	<script src="<?php echo base_url('bootstrap/js/bootstrap.min.js');?> "></script>
	
	<style>
	.title{
		background-color: #33ccff;
		font-family: Times New Roman;
	}
	.right{
		background-color: #ccf2ff; 
		font-family: Times New Roman;
	}
	.left{
		background-color: #80dfff;
		font-family: Times New Roman;
		font-size: 25px;
	}
	.left a{
		color: black;
	}
	</style>
	
</head>
<body>
	
	<div class="container-fluid">
	
		<div class="row">
			<div class="col-md-12 title">
				<h1><i>Course Management System</i></h1>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-3 left">
				<h2>MENU</h2>
				<ul>
					<br /><a href="#" title="Go Dashboard">Dashboard</a></li>
					<br /><a href="#" title="Manage Classes">Class Management</a></li>
					<br /><a href="#">Student Management</a></li>
					<br /><a href="#">Quiz Management</a></li>
					<br /><a href="#">Attendance Management</a></li>
					<br /><a href="#">Logout</a></li>
				</ul>
			</div>
			
			<div class="col-md-9 right">
				<h1><i>Course Management System</i></h1>
					<?php

						$query = "SELECT * FROM `course`";
						$connect = mysqli_connect("localhost", "root", "", "course");
						$result = mysqli_query($connect, $query);

					?>	
							
					
				<table class="table table-striped">
				<thead>
						<tr>
							<th>Course Code</th>
							<th>Course Description</th>
							<th>Created</th>
							<th>Updated</th>
							<th>Action</th>
							
						</tr>

				<!-- populate table from mysql database -->
						<?php while($row = mysqli_fetch_array($result)):
						echo '
						<tr class="center">
								<td>'.$row['course_id'].'</td>
								<td>'.$row['course_desc'].'</td>
								<td>'.$row['created'].'</td>
								<td>'.$row['updated'].'</td>
							
						<td class="center">
								<a href="viewstud.php?idno='.$row['course_id'].'">View</a> |
								<a href="update.php?idno='.$row['course_id'].'">Update</a> |
								<a href="delete.php?idno='.$row['course_id'].'" class="confirmation">Delete</a>
						</td>
						</tr>

						';
						endwhile; ?> 
						
						<a href="<?php echo base_url('course/create_course'); ?>"><input style="margin-left:800px;" type="submit" name="back" value="New Course" /></a>
							
							<script type="text/javascript">
								var elems = document.getElementsByClassName('confirmation');
								var confirmIt = function (e) {
								if (!confirm('Do you want to delete this record?')) e.preventDefault();
									};
								for (var i = 0, l = elems.length; i < l; i++) {
									elems[i].addEventListener('click', confirmIt, false);
									}
							</script>
						
					</thead>
					<tbody>
					</tbody>
					</table>
					
			
				
			</div>
		</div>
		
	</div>
	
</body>
</html>