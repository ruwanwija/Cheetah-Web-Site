
<!DOCTYPE html>
<html>
<head>
	<title>Cheetah-Fast Delivery</title>
	<!-- Include Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<!-- Custom Styles -->
	<link rel="stylesheet" href="css/Userpannel.css">
</head>
<body>
	<div class="background-container">
		<div class="bar"></div>
		<h1 class="background-label">User Pannel</h1>
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
			<ul class="navbar-nav flex-column active">
				<li class="nav-item active">
					<a class="nav-link" href="useraccount.php">Create User Account</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="userpannel.php"><b>User Pannel</b><span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="newparcel.php">Add New Parcel</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="searchparcel.php">Search Parcel</a>
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
<?php

		require_once("../config.php");

		$query_userpannel = "SELECT * FROM users";
		$result_userpannel = mysqli_query($conn,$query_userpannel);
	?>
<div class="container text-end mb-5">
	<table class="table table-bordered table-hover table-responsive-sm">
		<tr>
		  <th>User ID</th>
		  <th>User Name</th>
		</tr>
		<?php
		 
		 while($row = mysqli_fetch_array($result_userpannel)){
			 $user_id = $row['user_id'];
			 $user_name = $row['user_name'];
			 
		 
		 ?>
	  
	  <tr>
		<td><?php echo $user_id; ?></td>
		<td><?php echo $user_name; ?></td>
		<td><button class = "btn btn-primary"><a href = "edit.php" class = "text-light">Edit</a></button></td>
		<td><button  class = "btn btn-danger"><a href = "delete.php?deleteid='$tracking_no'" class = "text-light">Delete</a></button></td>
	</tr>
	<?php }?>
	  <tbody>

	
	<!-- Include Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>