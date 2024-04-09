<!DOCTYPE html>
<html>
<head>
	<title>Cheetah-Fast Delivery</title>
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
		body {
		background-image: url('img/admin.jpg');
		background-size: 1400px 800px;
		background-position: center top;
		background-repeat: no-repeat;
		}

		@media screen and (max-width: 768px) {
		body {
			background-size: 100%;
		}
		}
		/*label*/
		.background-label {
			position: absolute;
			 top: 2%; 
			left: 260px;
			/*margin-left: 260px;*/
			/* transform: translate(-50%, 50%); */
			color: #ffffff;
			font-size: 2rem;
			/* adjust to the desired font size */
		}

		.bar {
			position: absolute;
			top: 0%;
			left: 250px;
			width: 100%;
			height: 75px;
			/* adjust to the desired height of the bar */
			background-color: #000000;
			/* adjust to the desired color of the bar */
			opacity: 0.75;
			/* adjust to the desired opacity of the bar */
		}
			/*form*/
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
	<div class="background-container">
		<div class="bar"></div>
		<h1 class="background-label">All Parcel</h1>
	  </div>
	<!-- Quit Button -->
	<a href="logout.php">
		<button class="btn btn-danger quit-btn">Logout</button>
	</a>
	<!-- Sidebar Navigation -->
	<div class="col-md-2">
	<nav class="sidebar">
		<!-- Brand Logo -->
		<a class="navbar-brand" href="#"><img src="img/cheetahlogo.png"  alt="Bootstrap" width="120" height="80"></a>
		<!-- Navigation Links -->
		<ul class="navbar-nav flex-column">
			<li class="nav-item">
				<a class="nav-link" href="welcome.php">Welcome</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="Add_New_parcel.php">Add New Parcel</a>
			</li>
			<li class="nav-item">
				<a class="nav-link"  href="Search_Parcel.php">Search Parcel</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="allparcel.php"><b>All Parcel</b><span class="sr-only">(current)</span></a>
			</li>
            <li class="nav-item active">
				<a class="nav-link"  href="pickup_request.php">Pickup Request</a>
			</li>
            <li class="nav-item">
				<a class="nav-link" href="profile.php">Profile</a>
			</li>
		</ul>
	</nav>
</div>
<div id="form-container">
	<form action = "all_parcel.php" method = "POST">
	  <div class="form-group">
		<label for="name">User Name or User ID:</label>
		<input type="text" name = "search" required value = "<?php if(isset($_GEt['search'])){echo $_GET['search'];}?>" class="form-control" id="search">
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