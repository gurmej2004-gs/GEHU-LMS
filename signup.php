<!DOCTYPE html>
<html>
<head>
	<title>LMS|Register</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
	<style>
		form{
			display: grid ;
			grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
			gap: 2em ;
			margin-inline: auto ;
			container-type: inline-size;

			button{
				width: 100px ;
				height: 40px ;
				align-self: center ;
			}
		}
	</style>
</head>
<body>
	<div class='background'></div>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">GRAPHIC ERA HILL UNIVERSITY DEHRADUN</a>
			</div>
	
		    <ul class="nav navbar-nav navbar-right">
		      <li class="nav-item">
		        <a class="nav-link" href="index.php">Admin Login</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#"></span>Register</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="index.php">Login</a>
		      </li>
		    </ul>
		</div>
	</nav><br>
	<span><marquee>WELCOME TO THE GRAPHIC ERA HILL UNIVERSITY LIBRARY MANAGEMET SYSTEM.</marquee></span><br><br>
	<div class="row">
		<div class="col-md-4" id="side_bar">
			<ul>
			<h5>Library Timing</h5>
				<li>Opening: 10:00 AM</li>
				<li>Closing: 6:00 PM</li>
				<li>(Sunday Off)</li>
			</ul>
		</div>
		<div class="col-md-8" id="main_content">
			<center><h3><u>User Registration Form</u></h3></center>
			<form action="register.php" method="post">
				<div class="form-group">
					<label for="name">Full Name:</label>
					<input type="text" name="name" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="email">Email ID:</label>
					<input type="text" name="email" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="password">Password:</label>
					<input type="password" name="password" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="mobile">Mobile:</label>
					<input type="text" name="mobile" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="address">Address:</label>
					<textarea name="address" class="form-control" required></textarea> 
				</div>
				<button type="submit" class="btn btn-primary">Register</button>	
			</form>
		</div>
	</div>
</body>
</html>