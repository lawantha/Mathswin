<!--navigation bar-->
<nav class="navbar navbar-expand-md navbar-dark pt-2 " onload="getData()">

	<!-- Navbar links -->
	<div class="navbar-brand px-md-2">
		<a class="navbar-brand mx-auto px-md-5" href="index.php" title="Home">
			<img src="assets\images\logo.png" width="150" height="50" alt="">
		</a>
	</div>
	<div class="dropdown ml-auto px-md-5">
		<?php if (isset($_COOKIE['userId'])) { ?>
			<a class="navbar-brand mx-auto font-weight-bold dropdown-toggle" href="#" title="logout" id="usernav" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<?php echo $_COOKIE['userName'] ?>
				<img class="prof img-circle" src="https://firebasestorage.googleapis.com/v0/b/mathswin-c1317.appspot.com/o/images%2F<?php echo $_COOKIE['propic'] ?>" alt="">
			</a>
			<div class="dropdown-menu" aria-labelledby="usernav">
				<a class="dropdown-item" href="profile.php">My Profile</a>
				<a class="dropdown-item" href="#" onClick="logout()">Logout</a>
			</div>
		<?php } else { ?>
			<a class="navbar-brand mx-auto font-weight-bold" href="login.php" title="login" id="usernav">Login</a>
		<?php } ?>
	</div>

</nav>