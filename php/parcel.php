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
		#form-container {
			position: absolute;
			top: 100px;
			left: 58%;
			transform: translateX(-50%);
			width: 50%;
			height: 400px;
			
			}

			@media (min-width: 768px) {
			#form-container {
				top: 400px;
			}
			}

			@media (min-width: 992px) {
			#form-container {
				top: 100px;
				height: 500px;
			}
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
		<ul class="navbar-nav flex-column">
			<li class="nav-item">
				<a class="nav-link" href="welcome.php">Welcome</a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="parcel.php"><b>Parcel</b><span class="sr-only">(current)</span></a>
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
	<div id="form-container">
		<form>
		  <div class="form-group">
			<label for="name">Tracking Number:</label>
			<input type="text" class="form-control" id="Number">
		  </div>
		  <div class="form-group">
			<label for="exampleFormControlSelect1">Parcel Type</label>
			<select class="form-control" id="exampleFormControlSelect1">
			  <option>Less than 1kg</option>
			  <option>1kg-5kg</option>
			  <option>5kg-15kg</option>
			  <option>More than 15kg</option>
			</select>
		  </div>
		  <div class="form-group">
			<label for="exampleFormControlTextarea1">Parcel Description</label>
			<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
		  </div>
		  <div class="form-group">
            <label for="name">Receiver Name:</label>
            <input type="text" class="form-control" id="name">
          </div>
		  <div class="form-group">
			<label for="inputAddress">Address</label>
			<input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
		  </div>
		  <div class="form-group">
			<label for="inputAddress2">Address 2</label>
			<input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
		  </div>
		  <div class="form-row">
			<div class="form-group col-md-6">
			  <label for="inputCity">City</label>
			  <input type="text" class="form-control" id="inputCity">
			</div>
			<div class="form-group col-md-4">
			  <label for="inputState">Province</label>
			  <select id="inputState" class="form-control">
				<option selected>Choose</option>
				<option>Colombo</option>
				<option>Kaluthara</option>
				<option>Gampaha</option>
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