<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Rapid Application Project</title>
	<!-- Include the Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<!-- CSS -->
	<link rel="stylesheet" href="css/default_admin_login.css">
</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href=""><img src="img/cheetahlogo.png" alt="Bootstrap" width="120" height="80"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
	</nav>
	<div class="container">
		<div class="row mb-5">
			<h2>Login Form</h2>
			<form action="default_admin_validator.php" method="POST">
				<label for="username">Username</label>
				<input type="text" id="username" name="username" placeholder="Enter Username" required>

				<label for="password">Password</label>
				<input type="password" id="password" name="password" placeholder="Enter password" required>

				<button type="submit">Login</button>
			</form>

		</div>
	</div>
	<footer class="bg-dark text-white mt-5">
		<!-- <div class="container"> -->
		<div class="row">
			<div class="col-sm-4">
				<h4>
					Cheetah Delivery Service
				</h4>
				<p>Having incepted its business in January 2023 as a fully owned Sri Lankan company. We deliver in
					western province over three districts in Colombo, Kalutara, and Gampaha. We provide cash on
					delivery, as well as we deliver all parcels as you wish.</p>
			</div>
			<div class="col-sm-4">
				<h4>Quick Menu</h4>
					<ul class="list-unstyled">
						<li><a href="index.php">Home</a></li>
						<li><a href="aboutus.php">About Us</a></li>
						<li><a href="login.php">Log in</a></li>
						<li><a href="signup.php">Sign Up</a></li>
						<li><a href="Rules_and_regulation.php">Rules and Regulations</a></li>
					</ul>
			</div>
			<div class="col-sm-4">
				<h4>Contact Us</h4>
					<ul class="list-unstyled">
						<li><i class="fa fa-phone"></i><b> Phone</b></li>
						<li><i class="fa fa-phone"></i>076 76 790 88</li>
						<li><i class="fa fa-envelope"></i><b>Email</b></li>
						<li><i class="fa fa-envelope"></i> <a href="mailto:info@gmail.com">udayanganisala511@gmail.com</a>
						</li>
						<li><i class="fa fa-map-marker"></i><b>Address</b></li>
						<li><i class="fa fa-map-marker"></i>Galapatha, Wadumullla, Bentota.</li>
					</ul>
			</div>
		</div>
	</footer>


	<!-- Include the Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


</body>

</html>