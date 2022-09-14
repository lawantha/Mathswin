
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
		<!-- aos Animate On Scroll CSS -->
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
		
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

		<!-- Main -->
		<div class="container">
			<div class="row p-5">
				<div class="col-lg-6">
				</div>
				<div class="col-lg-6">
				
					<div data-aos="zoom-in" data-aos-duration="1000" class="row mydiv ">
					
						<!-- container -->
						<div class="h-100 col-lg-5  p-5 border border-warning mx-auto" name="sum" style="margin: 20px;">
							<a class="link-tag click" href="gameGUI.php?mod=sum">
							<span class="container">
								<a class="centered" href="gameGUI.php?mod=sum"><img class="imgg" src="assets\images\+.png"></a>
							</span></a>
						</div>
						<!-- container -->
						<div class="h-100 col-lg-5  p-5 border border-warning mx-auto" name="min" style="margin: 20px;">
							<a class="link-tag click" style="display:block;" href="gameGUI.php?mod=min">
							<span class="container">
								<a class="centered" href="gameGUI.php?mod=min"><img class="imgg" src="assets\images\-.png"></a>
							</span></a>
						</div>
					</div>
					
					<div data-aos="zoom-in" data-aos-duration="1000" class="row mydiv ">
					
						<!-- container -->
						<div class="h-100 col-lg-5  p-5 border border-warning mx-auto" name="mul" style="margin: 20px;">
							<a class="link-tag click" href="gameGUI.php?mod=mul">
							<span class="container">
								<a class="centered" href="gameGUI.php?mod=mul"><img class="imgg" src="assets\images\x.png"></a>
							</span></a>
						</div>
						<!-- container -->
						<div class="h-100 col-lg-5  p-5 border border-warning mx-auto" name="mix" style="margin: 20px">
							<a class="link-tag click" style="display:block;" href="gameGUI.php?mod=mix">
							<span class="container">
								<a class="centered" href="gameGUI.php?mod=mix"><img class="imgg" src="assets\images\mix.png"></a>
							</span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	<!-- footer -->
	<?php include('footer.php') ?>
		<!-- End Main -->
		
		<!--aos Animate On Scroll Library-->
		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		<script>
		  AOS.init();
		</script>
		
		<!--import firebasejs inside the body for use of navbar-->
		<script src="https://www.gstatic.com/firebasejs/5.6.0/firebase-app.js"></script>
		<script src="https://www.gstatic.com/firebasejs/5.6.0/firebase-auth.js"></script>
		<script src="https://www.gstatic.com/firebasejs/5.6.0/firebase-database.js"></script>
		
	</body>
</html>
