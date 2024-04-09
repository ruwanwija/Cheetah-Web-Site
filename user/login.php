<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Cheetah-Fast Delivery</title>
	<!-- Include the Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<style>
		body {
			background-image: url('css/img/login.jpg');
			background-repeat: no-repeat;
			background-size: cover;
			background-color: #f2f2f2;
		}

		/* CSS for the login form */
		.container {
			margin: auto;
			width: 30%;
			margin-top: 10%;
			background-color: white;
			padding: 20px;
			border-radius: 10px;
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
			text-align: center;
		}

		input[type=text],
		input[type=password] {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}

		button {
			background-color: #4CAF50;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			width: 100%;
		}

		button:hover {
			background-color: #45a049;
		}

		h2 {
			color: #4CAF50;
			font-size: 28px;
			margin-bottom: 20px;
		}

		label {
			color: #888;
			font-size: 18px;
		}

		@media screen and (max-width: 600px) {
			.container {
				width: 80%;
			}
		}
	</style>
</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="index.php"><img src="img/cheetahlogo.png" alt="Bootstrap" width="120" height="80"></a>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item ">
					<a class="nav-link" href="index.php"><b>Home</b></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="aboutus.php"><b>About Us</b></a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="login.php"><b>Login</b><span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="signup.php"><b>signup</b></a>
				</li>
			</ul>
		</div>
	</nav>
	<div class="container">
		<div class="row mb-5">
			<h2>Login Form</h2>
			<form action="user_validator.php" method="POST">
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