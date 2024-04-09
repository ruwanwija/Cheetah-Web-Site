<?php

require_once("../config.php");

if(!isset($_SESSION['current_user_name'])){
	header("location:login.php");
}

?>

<!DOCTYPE html>
<html>

<head>
	<title>Cheetah-Fast Delivery</title>
	<!-- Include Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<!-- Custom Styles -->
	<link rel="stylesheet" href="css/welcome.css">
</head>

<body>
	<div class="background-container">
		<div class="bar"></h1></div>
		<h1 class="background-label"><?php echo $_SESSION['current_user_name']?>
	</div>
	<!-- Logout Button -->
		<a href="logout.php">
			<button class="btn btn-danger logout-btn">Logout</button>
		</a>
	<!-- Sidebar Navigation -->
	<div id id="left-div">
		<!-- Sidebar Navigation -->
		<nav class="sidebar">
				<!-- Brand Logo -->
				<a class="navbar-brand" href="welcome.php"><img src="img/cheetahlogo.png" alt="Bootstrap" width="120" height="80"></a>
			<!-- Navigation Links -->
			<ul class="navbar-nav flex-column active">
				<li class="nav-item active">
					<a class="nav-link" href="welcome.php"><b>Welcome</b><span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="Add_New_parcel.php">Add New Parcel</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="Search_Parcel.php">Search Parcel</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="allparcel.php">All Parcel</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="pickup_request.php">Pickup Request</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="profile.php">Profile</a>
				</li>
			</ul>
		</nav>
	</div>



	<!-- Include Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>