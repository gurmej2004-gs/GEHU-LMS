<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>LMS</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class='background'></div>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">GRAPHIC ERA HILL UNIVERSITY DEHRADUN</a>
			</div>
	
		    <ul class="nav navbar-nav navbar-right">
		      <li class="nav-item">
		        <a class="nav-link" href="admin/index.php">ADMIN LOGIN</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="signup.php">REGISTER</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="index.php">LOGIN</a>
		      </li>
		    </ul>
		</div>
	</nav><br>
	<span><marquee>WELCOME TO THE GRAPHIC ERA HILL UNIVERSITY LIBRARY MANAGEMET SYSTEM. </marquee></span><br><br>
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
			<center><h3><u>User Login Form</u></h3></center>
			<form action="" method="post">
				<div class="form-group">
					<label for="email">Email ID:</label>
					<input type="text" name="email" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="password">Password:</label>
					<input type="password" name="password" class="form-control" required>
				</div>
				<button type="submit" name="login" class="btn btn-primary">Login</button> |
				<a href="signup.php"> Not registered yet ?</a>	
			</form>
			<?php 
				if(isset($_POST['login'])){
					$connection = mysqli_connect("localhost","root","");
					$db = mysqli_select_db($connection,"lms");
					$query = "select * from users where email = '$_POST[email]'";
					$query_run = mysqli_query($connection,$query);
					while ($row = mysqli_fetch_assoc($query_run)) {
						if($row['email'] == $_POST['email']){
							if($row['password'] == $_POST['password']){
								$_SESSION['name'] =  $row['name'];
								$_SESSION['email'] =  $row['email'];
								$_SESSION['id'] =  $row['id'];
								header("Location: user_dashboard.php");
							}
							else{
								?>
								<br><br><center><span class="alert-danger">Wrong Password !!</span></center>
								<?php
							}
						}
					}
				}
			?>
		</div>
	</div>
</body>
</html>
