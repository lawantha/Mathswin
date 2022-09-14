<?php
$mod = $_GET['mod'];
if (!isset($_COOKIE['userId'])) {
	header('Location:login.php');
}
?>

<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<!-- Responsive meta  tag -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>MATHSWIN</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<!-- Stylesheet CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/css.css">

	<!-- jquery -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

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
	<!-- navigation bar -->
	<?php include('navbar.php') ?>

	<!-- Main -->
	<div class="container mt-1">
		<div class="container-fluid section1">
			<div class="row">
				<div class="col-lg-8 coll">
					<div class="grid-container" id="gamediv">
						<!-- game api-->
						<?php include('API/newGame.php') ?>
					</div>

					<!--submit answer button(event-driven programming)-->
					<div class="lb2">
						<button onclick="SubmitAnswe()" class="btn btn-success btn-block" id="submitbtn">Next</button>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="lb1 lb2">
						<!-- Display Score -->
						<div id="scorediv">
							<h1 class="text-secondary text-center">Score = <?php echo $_COOKIE['score'] ?></h1>
						</div>
						<div>
							<h2 class="text-secondary text-center">Leaderboard</h2>
						</div>
						<!-- Leaderboard -->
						<div>
							<ul class="list-group" id="printlist">

							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- footer -->
	<?php include('footer.php') ?>
	<!-- End Main -->

	<!--import firebasejs inside the body for use of navbar-->
	<script src="https://www.gstatic.com/firebasejs/5.6.0/firebase-app.js"></script>
	<script src="https://www.gstatic.com/firebasejs/5.6.0/firebase-auth.js"></script>
	<script src="https://www.gstatic.com/firebasejs/5.6.0/firebase-database.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>

</html>