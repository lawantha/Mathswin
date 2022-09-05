<?php

// include "connection.php";

?>
<!doctype html>

<html>

<head>
	<title> Sign up form </title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<!-- Responsive meta  tag -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>MATHSWIN</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<!-- Stylesheet CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/login_style.css">

	<!-- jquery -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" crossorigin="anonymous"></script>

	<!-- firbase API -->
	<script src="https://www.gstatic.com/firebasejs/8.2.7/firebase-app.js"></script>
	<script src="https://www.gstatic.com/firebasejs/8.2.7/firebase-auth.js"></script>
	<script src="https://www.gstatic.com/firebasejs/8.2.7/firebase-database.js"></script>
	<script src="https://www.gstatic.com/firebasejs/8.2.7/firebase-storage.js"></script>

	<!-- js files -->
	<script src="assets/js/auth.js"></script>
	<script src="assets/js/main.js"></script>

</head>

<body>
	<div class="container-fluid mt-1">
		<div class="row">
			<div class="col-sm-6"></div>
			<div class="col-sm-6 d-flex justify-content-center">
				<div class="loginBox form" style="margin-top:60px;">
					<!--User Image-->
					<img src="assets\images\user.png" class="user">
					<!--Title-->
					<h2>Sign Up Here</h2>
					<!--Email-->
					<p>Email</p>
					<input type="text" name="username" id="email" placeholder="Enter Email" required>
					<!--User Name-->
					<p>User Name</p>
					<input type="text" name="un" id="username" placeholder="Enter User Name" required>
					<!--Password-->
					<p>Password</p>
					<input type="password" name="password" id="password" placeholder="Enter Password" required>
					<!--Profile Picture-->
					<p>Profile Picture</p>
					<input type="file" accept="image/*" name="files[]" id="contentFile" />

					<!--Sign up button(event-driven programming)-->
					<button type="submit" class="button" onclick="signUp()" name="register" value="Sign Up">Sign Up</button>
					<!--Link to login page-->
					<a href="login.php"> Already have an account! Login here</a>
				</div>
			</div>
		</div>
	</div>

</body>

</html>