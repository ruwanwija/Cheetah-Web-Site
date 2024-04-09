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
	<link rel="stylesheet" href="CSS/SearchParcel.css">
</head>
<body>
	<div class="background-container">
		<div class="bar"></div>
		<h1 class="background-label">Search Parcel</h1>
	  </div>
	<!-- Quit Button -->
	<a href="logout.php">
		<button class="btn btn-danger quit-btn">Logout</button>
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
            <li class="nav-item active">
				<a class="nav-link" href="Search_Parcel.php"><b>Search Parcel</b><span class="sr-only">(current)</span></a>
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
		<form action = "Search_Parcel.php" method = "GET">
		  <div class="form-group">
			<label for="name">Tracking Number:</label>
			<input type="text" name = "search" class="form-control" id="Number" required value = "<?php if(isset($_GEt['search'])){echo $_GET['search'];}?>" placeholder = "Enter Tracking Number" >
		  </div>
		  

			<div class="form-group">
				<button type="submit" class="btn btn-primary">Search</button>
				<button type="reset" class="btn btn-pr">Reset</button>
			  </div>
		</form>
	  </div>
	  <div class="container text-end mb-5">
        <table class="table table-bordered table-hover table-responsive-sm">
		<tr>
			  <th>Parcel Type</th>
              <th>Parcel Description</th>
              <th>Receiver Name</th>
              <th>Phone Number</th>
              <th>Address</th>
              <th>City</th>
              <th>Province</th>
            </tr>
			<?php

			require_once("../config.php");

			if(isset($_GET['search']))
			{
				$filtervalue = $_GET['search'];
				$query = "SELECT * FROM parcel WHERE tracking_no = $filtervalue";
				$query_run = mysqli_query($conn,$query);

				if(mysqli_num_rows($query_run)>0)
				{
					foreach($query_run as $items)
					{
						?>
					<td><?= $items['parcel_type']; ?></td>
					<td><?= $items['parcel_description']; ?></td>
					<td><?= $items['parcel_receiver']; ?></td>
					<td><?= $items['parcel_contact_no']; ?></td>
					<td><?= $items['parcel_address']; ?></td>
					<td><?= $items['parcel_city']; ?></td>
					<td><?= $items['parcel_province']; ?></td>
					<?php
					}
				}
				else{
					?>
					<td>Null</td>
					<td>Null</td>
					<td>Null</td>
					<td>Null</td>
					<td>Null</td>
					<td>Null</td>
					<td>Null</td>
					<?php
				}
			}
			?>
	<!-- Include Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>