<!DOCTYPE html>

<html>
	<head>
		<title> Login form </title>
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
		<div class="loginBox form">
			<!--User Image-->
			<img src="assets\images\user.png" class="user">
			<!--Title-->
			<h2>Log In Here</h2>
			<!--Email-->
				<p>Email</p>
				<input type="text" name ="email" id="email" placeholder="Enter Email" id="email">
			<!--Password-->
				<p>Password</p>
				<input type="password" name ="password" id="password" placeholder="Enter Password" id="password">
				
				<!--login button(event-driven programming)-->
				<button class="button" type="submit" onclick="login()" name ="sign_in" value="Sign In">Sign In</button>
				<!--Link to register page-->
				<a href="register.php"> Don't have an account! Sign Up here</a> 
		</div>

	</body>
	
</html>