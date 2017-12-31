<?php
  session_start()
?>
<!DOCTYPE html>
<html>
<head>
<title>MINERVA Academic & Learning Center</title>
<link rel="icon" href="images/icon.png" type="image/png">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/jquery.min.js"></script>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/bootstrap.min.js"></script>
<link href='//fonts.googleapis.com/css?family=Catamaran:400,100,300,500,700,600,800,900' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
</head>
<body>
 <div class="header">
	<div class="container">
		<div class="head-top">
			<div class="logo">
				<a href="index.php"><img src="images/logo3.png" alt="" title="MINERVA"></a>
			</div>
			<div class="login">
				<ul class="nav-login">
					<!-- <li><a href="login-lecturer.php">Lecturer</a></li>
					<li><a href="login-student.php">Student</a></li> -->
					<li><a href="#" data-toggle="modal" data-target="#modalLogin">Login</a></li>
					<li><a href="#" data-toggle="modal" data-target="#modalRegisterStudent">Signup as Student</a></li>
					<li><a href="#" data-toggle="modal" data-target="#modalRegisterLecturer">Signup as Teacher</a></li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
			<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
									<div class="login-right">
										<form action="loginFunction.php" method="POST">
											<h3>Signin with your account </h3>
											<input type="text" placeholder="Enter your Username" name="username" required="">
											<input type="password" placeholder="Password" name="password" required="">
											<h4><a href="#">Forgot password</a> / <a href="#">Create new password</a></h4>
											<div class="single-bottom">
												<input type="checkbox"  id="brand" value="">
												<label for="brand"><span></span>Remember Me.</label>
											</div>
											<input type="submit" value="SIGN IN" >
										</form>
									</div>
								<p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="modalRegisterLecturer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
								<div class="login-right">
									<form action="registerLecturer.php" method="post">
										<h3>Create Acount as Lecturer </h3>
										<input type="text" placeholder="Lecturer ID" name="lecturerID" required="">
										<input type="text" placeholder="Full Name" name="name" required="">
										<input type="email" placeholder="Email Address" name="email" required="">
										<input type="text" placeholder="Username" name="username" required="">
										<input type="password" placeholder="Password" name="password" required="">
										<input type="submit" name="register" value="CREATE ACCOUNT" >
									</form>
								</div>
								<p>By registering you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="modalRegisterStudent" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
								<div class="login-right">
									<form action="registerStudent.php" method="post">
										<h3>Create Account as Student </h3>
										<input type="text" placeholder="Student ID" name="studentID" required="">
										<input type="text" placeholder="Full Name" name="studentName" required="">
										<input type="email" placeholder="Email Address" name="email" required="">
										<input type="text" placeholder="Username" name="username" required="">
										<input type="password" placeholder="Password" name="password" required="">
										<input type="submit" name="register" value="CREATE ACCOUNT" >
									</form>
								</div>
								<p>By registering you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		<div class="banner">
			<div class="container">
				<div class="banner-text">
					<h2>Minerva</h2>
					<p>Learning & Academy </p>
				</div>
				<p class="banner-text1">Minerva is an E-Learning site created to help connect student and lecturer outside of school wall and time, to study anytime anywhere using any platform.</p>
			</div>
		</div>
</div>
</body>
</html>
