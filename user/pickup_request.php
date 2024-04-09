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
	<style>	/* Sliderbar */
.sidebar {
background-color: #ffd500;
height: 100vh;
position: fixed;
top: 0;
left: 0;
width: 250px;
padding: 20px;
}
.nav-link {
color: #070707;
}
/*Logout button */
.logout-btn {
position: absolute;
top: 20px;
right: 20px;
}
/*body*/
body {
margin-top: 200px;
margin-right: 400px;
display: flex;
justify-content: flex-end;
align-items: center;
height: 100vh;
padding: 0 20px;
}
/*form container*/
.form-container {
  max-width: 400px;
  width: 100%;
}
/*form group*/
.form-group {
  margin-bottom: 10px;
}
/*label*/
label {
  margin-bottom: 5px;
}
/*input*/
input[type="text"] {
  width: 100%;
  padding: 0px;
  font-size: 15px;
}
button {
  padding: 10px 20px;
  font-size: 5px;
}
/*bg = label*/
.background-label {
position: absolute;
top: -2%;
left: 24%;
transform: translate(-50%, 50%);
color: #ffffff;
font-size: 2rem; /* adjust to the desired font size */
}
/*bar*/
.bar {
position: absolute;
top:0%;
left: 250px;
width: 100%;
height: 75px; 
background-color: #000000;
opacity: 0.75;
}
/*image*/
body {
background-image: url('img/allpages.jpg');
background-size: 1400px 800px;
background-position: center top;
background-repeat: no-repeat;
}
</style>
</head>
<body>
	<div class="background-container">
		<div class="bar"></div>
			<h1 class="background-label">Pickup Request</h1>
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
				<li class="nav-item">
					<a class="nav-link" href="Add_New_parcel.php">Add New Parcel</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="Search_Parcel.php">Search Parcel</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="allparcel.php">All Parcel</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="pickup_request.php"><b>Pickup Request</b><span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="profile.php">Profile</a>
				</li>
		</ul>
	</nav>
	<!-- Form with Dropdown Menu -->
	<div class="col-lg-5 offset-lg-">
		<form action = "request_adder.php" method = "POST">
			<div class="form-group">
				<h3>Dimention</h3>
				<label for="length">Length:</label>
				<input type="text" id="length" name="length" required name = "length" placeholder = "Enter Parcel Length">
				<label for="width">Width:</label>
				<input type="text" id="width" name="width" required name = "width" placeholder = "Enter Parcel Width">
				<label for="height">Height:</label>
				<input type="text" id="height" name="height" required name = "height" placeholder = "Enter Parcel Height">
			</div>
			<div class="form-group">
				<h3>Convenient Time for Sender</h3>
				<label for="date-input">Date:</label>
				<input type="date" id="date-input" required name="sender-date-input" placeholder = "Enter Convenient Date for Sender"><br>
				<label for="start-time">From:</label>
				<input type="text" id="start-date" required name="sender-start-time" required placeholder = "Enter Sender's Time From">
				<label for="end-date">To:</label>
				<input type="text" id="end-date" required name="sender-end-time" required placeholder = "Enter Sender's Time To">
				<h3>Convenient Time for Receiver</h3>
				<label for="date-input">Date:</label>
				<input type="date" id="date-input" required name="receiver-date-input" placeholder = "Enter Convenient Date for Receiver"><br>
				<label for="start-time">From:</label>
				<input type="text" id="start-date" required name="receiver-start-time" required placeholder = "Enter Receiver's Time From">
				<label for="end-date">To:</label>
				<input type="text" id="end-date" required name="receiver-end-time" required placeholder = "Enter Receiver's Time To">
			</div>
			<div class="form-group">
				<h3>Sender's Address</h3>
				<label for="street">Street:</label>
				<input type="text" id="street" name="street" required placeholder = "Enter Sender's Address">
				<label for="city">City:</label>
				<input type="text" id="city" name="city" required placeholder = "Enter Sender's City">
				</div>
			<div class="form-group">
				<h3>Sender's Contact Number</h3>
				<input type="text" id="phone" name="phone" required placeholder = "Enter  Sender's Contact Number">
			</div>
				<div class="form-group">
				<button type="submit" class="btn btn-primary">Submit</button>
				<button type="reset" class="btn btn-pr">Reset</button>
			</div>
			</form>
		</div>
			</form>
		</div>

	
	<!-- Include Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>