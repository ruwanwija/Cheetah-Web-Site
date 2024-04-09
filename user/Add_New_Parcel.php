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
	<link rel="stylesheet" href="css/AddNewParcel.css">
	
</head>
<body>
	<div class="background-container">
		<div class="bar"></div>
			<h1 class="background-label">Add New Parcel</h1>
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
			<li class="nav-item active">
				<a class="nav-link" href="Add_New_parcel.php"><b>Add New Parcel</b><span class="sr-only">(current)</span></a>
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
	<div id="form-container">
		<form action="parcel_adder.php" method="POST">
			<div class="form-group">
					<label for="parceltype"><b>Parcel Type</b></label>
					<select class="form-control" id="exampleFormControlSelect1" required name = "parceltype">
					<option value ="choose">Choose Parcel Type</option>
					<option value ="1kg">Less than 1kg</option>
					<option value ="1kg-5kg">1kg-5kg</option>
					<option value="5kg-15kg">5kg-15kg</option>
					<option value="15kg">More than 15kg</option>
					</select>
			</div>
			<div class="form-group">
				<label for="exampleFormControlTextarea1"><b>Parcel Description</b></label>
				<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required name = "description" placeholder = "Enter Parcel Description"></textarea>
			</div>
			<div class="form-group">
				<label for="name"><b>Receiver Name</b></label>
				<input type="text" class="form-control" id="name" required name = "name" placeholder = "Enter Receiver Name">
			</div>
			<div class="form-group">
				<label for="phone"><b>Contact Number</b></label>
				<input type="tel" id="phone" name="number" pattern="[0-9]{10}"  required placeholder = "Enter Contact Number">
			</div>
			<div class="form-group">
				<label for="inputAddress"><b>Receiver Address</b></label>
				<input type="text" class="form-control" id="inputAddress" name = "address" required placeholder = "Enter Receiver Address">
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
				<label for="inputCity"><b>Receiver City</b></label>
				<input type="text" class="form-control" id="inputCity" required name = "city" placeholder = "Enter Receiver City">
				</div>
				<div class="form-group col-md-4">
				<label for="inputState"><b>Receiver Province</b></label>
				<select class="form-control" id="exampleFormControlSelect1" required name = "receiver province">
				<option value ="choose">Choose Receiver Province</option>
				<option value ="colombo">Colombo</option>
				<option value ="gampaha">Gampaha</option>
				<option value="Kaluthara">Kaluthara</option>
				</select>
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary">Submit</button>
				<button type="reset" class="btn btn-pr">Reset</button>
			</div>
		</form>
	</div>
	  
	
	<!-- Include Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>