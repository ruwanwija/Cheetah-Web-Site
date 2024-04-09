
<!DOCTYPE html>
<html>
<head>
	<title>Cheetah-Fast Delivery</title>
	<!-- Include Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<!-- Custom Styles -->
	<link rel="stylesheet" href="css/searchparcel.css">
</head>
<body>
	<div class="background-container">
		<div class="bar"></div>
		<h1 class="background-label">Search Parcel</h1>
	  </div>
	<!-- Quit Button -->
	<a href="logout.php">
		<button class="btn btn-danger logout-btn">Logout</button>
	</a>
	<!-- Sidebar Navigation -->
	<div class="col-md-2">
	<nav class="sidebar">
		<!-- Brand Logo -->
		<a class="navbar-brand" href="#"><img src="img/cheetahlogo.png"  alt="Bootstrap" width="120" height="80"></a>
		<!-- Navigation Links -->
		<ul class="navbar-nav flex-column active">
				<ul class="navbar-nav flex-column active">
				<li class="nav-item">
					<a class="nav-link" href="useraccount.php">Create User Account</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="userpannel.php">User Pannel</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="newparcel.php">Add New Parcel</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="searchparcel.php"><b>Search Parcel</b><span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="allparcel.php">All Parcel</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="pickuprequest.php">Pickup Request Message</a>
				</li>
		</ul>
	</nav>
</div>
<div id="form-container">
	<form action = "search parcel.php" method = "GET">
	  <div class="form-group">
		<label for="name">Tracking Number:</label>
		<input type="text" name = "search" required value = "<?php if(isset($_GEt['search'])){echo $_GET['search'];}?>" class="form-control" id="Number" placeholder = "Enter Tacking Number">
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