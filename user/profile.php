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
	<!-- CSS -->
	<<link rel="stylesheet" href="css/profile.css">
</head>
<body>
	<div class="background-container">
		<div class="bar"></div>
			<h1 class="background-label">Profile</h1>
	  </div>
	<!-- Logout Button -->
	<a href="logout.php">
		<button class="btn btn-danger logout-btn">Logout</button>
	</a>
	<!-- Sidebar Navigation -->
	<nav class="sidebar">
		<!-- Brand Logo -->
		<a class="navbar-brand" href="welcome.php"><img src="img/cheetahlogo.png"  alt="Bootstrap" width="120" height="80"></a>
		<!-- Navigation Links -->
		<ul class="navbar-nav flex-column">
			<li class="nav-item">
				<a class="nav-link" href="welcome.php">Welcome</a>
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
            <li class="nav-item active">
				<a class="nav-link" href="profile.php"><b>Profile</b><span class="sr-only">(current)</span></a>
			</li>
		</ul>
	</nav>

	<?php

		require_once("../config.php");
		$current_user_id = $_SESSION["current_user_id"];
		$query_user = "SELECT * FROM users WHERE user_id = '$current_user_id'";
		$result_user = mysqli_query($conn,$query_user);
		$row = mysqli_fetch_assoc($result_user);
	?>
	<div class="container">
		<div class="row justify-content-end">
    		<div class="col-lg-9 offset-lg-">
				<form>
					<div class="form-group">
						<label for="email">Username: <?php echo $row["user_name"]?></label>
					</div>
					<div class="form-group">
						<label for="password">Password: <?php echo $row["user_password"]?></label>
					</div>
					<div class="form-group">
						<label for="name">Name: <?php echo $row["user_name"]?></label>
					</div>
					<div class="form-group">
						<label for="contact">Contact Number: <?php echo $row["user_contact_no"]?></label>
					</div>
					<div class="form-group">
						<label for="nic">NIC: <?php echo $row["user_nic"]?></label>
					</div>
					<div class="form-group">
						<label for="address">Address: <?php echo $row["user_address"]?></label>
					</div>
					<div class="form-group">
						<label for="city">City: <?php echo $row["user_city"]?></label>
					</div>
				</form>
			</div>
				</form>
		  </div>
		</div>
	  </div>
	  
	<!-- Include Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>