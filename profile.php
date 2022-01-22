<!doctype html>
<html>
	<head>
		<title> Update profile </title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
		<!-- Responsive meta  tag -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<title>MATHSWIN</title>
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<!-- Stylesheet CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/login_style.css">
		<link rel="stylesheet" type="text/css" href="assets/css/css.css">
		
		<!-- jquery -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		
		<!-- firbase API -->
		<script src="https://www.gstatic.com/firebasejs/8.2.7/firebase-app.js"></script>
		<script src="https://www.gstatic.com/firebasejs/8.2.7/firebase-auth.js"></script>
		<script src="https://www.gstatic.com/firebasejs/8.2.7/firebase-database.js"></script>
		<script src="https://www.gstatic.com/firebasejs/8.2.7/firebase-storage.js"></script>
		
		<!-- Bootstrap js -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		
		<!-- js files -->
		<script src="assets/js/auth.js"></script>
		<script src="assets/js/main.js"></script>

	</head>
	<body>
	
		<!-- Navigation bar -->
		<?php include('navbar.php')?>
		
		<div class="updateData form">
			<!--User Image-->
			<img src="https://firebasestorage.googleapis.com/v0/b/mathswin-c1317.appspot.com/o/images%2F<?php echo $_COOKIE['propic'] ?>" class="user">
			<!--Title-->
			<h2>My profile</h2>
			<!--Score-->
			<h3>Score = <?php echo $_COOKIE['score'] ?></h3>
			<!--User Name-->
			<p>User Name</p>
			<input type="text" name ="un" id="newUsername" placeholder="Enter User Name" value="<?php echo $_COOKIE['userName'] ?>" required>
			<!--Profile Picture-->
			<p>Profile Picture</p>
			<input type="file" accept="image/*" name="files[]" id="contentFile"/>
				
			<!--Sign up button(event-driven programming)-->
			<button type="submit" class="button" onclick="updateProfile()" name ="register" value="Sign Up">Update Profile</button>
		</div>
	</body>
</html>