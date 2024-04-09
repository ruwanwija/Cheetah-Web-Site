<!DOCTYPE html>
<html>
<head>
	<title>Responsive Sidebar Navigation Bar with Yellow Side Background</title>
	<!-- Include Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<!-- Custom Styles -->
	<style>
		/* Set yellow background color */
		.sidebar {
			background-color: #ffd500;
			height: 100vh;
			position: fixed;
			top: 0;
			left: 0;
			width: 250px;
			padding: 20px;
		}
		/* Set white text color */
		.nav-link {
			color: #070707;
		}
		/* Set position of Quit button */
		.quit-btn {
			position: absolute;
			top: 20px;
			right: 20px;
		}
	</style>
</head>
<body>
	<!-- Quit Button -->
	<button class="btn btn-danger quit-btn">Quit</button>
	<!-- Sidebar Navigation -->
	<nav class="sidebar">
		<!-- Brand Logo -->
		<a class="navbar-brand" href="#"><img src="../img/cheetahlogo.png"  alt="Bootstrap" width="120" height="80"></a>
		<!-- Navigation Links -->
		<ul class="navbar-nav flex-column active">
			<li class="nav-item active">
				<a class="nav-link" href="welcome.php"><b>Welcome</b><span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="parcel.php">Parcel</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="pickup_request.php">Pickup Request</a>
			</li>
            <li class="nav-item active active">
				<a class="nav-link" href="finance.php">Finance</a>
			</li>
            <li class="nav-item">
				<a class="nav-link" href="profile.php">Profile</a>
			</li>
            <li class="nav-item">
				<a class="nav-link" href="Rules_and_regulation.php">Rules and Regulations</a>
			</li>
		</ul>
	</nav>
	
	<!-- Include Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>