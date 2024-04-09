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
	<link rel="stylesheet" href="css/allparcel.css">
</head>
<body>
  <div class="background-container">
		<div class="bar"></div>
		<h1 class="background-label">All parcel</h1>
	  </div>
	<!-- Quit Button -->
	<a href="logout.php">
		<button class="btn btn-danger quit-btn">Logout</button>
	</a>
	<!-- Sidebar Navigation -->
	<nav class="sidebar">
		<!-- Brand Logo -->
		<a class="navbar-brand" href="#"><img src="img/cheetahlogo.png"  alt="Bootstrap" width="120" height="80"></a>
		<!-- Navigation Links -->
		<ul class="navbar-nav flex-column">
			<li class="nav-item">
				<a class="nav-link" href="useraccount.php">Create User Account</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="userpannel.php">User Pannel</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="newparcel.php">Add New Parcel</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="searchparcel.php">Search Parcel</a>
			</li>
            <li class="nav-item active">
				<a class="nav-link" href="allparcel.php"><b>All Parcel</b><span class="sr-only">(current)</span></a>
			</li>
            <li class="nav-item">
				<a class="nav-link" href="pickuprequest.php">Pickup Request Message</a>
			</li>
		</ul>
	</nav>
	<?php

		require_once("../config.php");

		$query_parcel = "SELECT * FROM parcel";
		$result_parcel = mysqli_query($conn,$query_parcel);
	?>
	
		
    <div class="container text-end mb-5">
        <table class="table table-bordered table-hover table-responsive-sm">
        
            <tr>
              <th>Tracking Number</th>
			  <th>Parcel Type</th>
              <th>Parcel Description</th>
              <th>Receiver Name</th>
              <th>Phone Number</th>
              <th>Address</th>
              <th>City</th>
              <th>Province</th>
            </tr>
          
		  <?php
		 
		while($row = mysqli_fetch_array($result_parcel)){
			$tracking_no = $row['tracking_no'];
			$parcel_type = $row['parcel_type'];
			$parcel_description = $row['parcel_description'];
			$parcel_receiver = $row['parcel_receiver'];
			$parcel_contact_no = $row['parcel_contact_no'];
			$parcel_address = $row['parcel_address'];
			$parcel_city = $row['parcel_city'];
			$parcel_province = $row['parcel_province'];
		
		?>
          
            <tr>
              <td><?php echo $tracking_no; ?></td>
			  <td><?php echo $parcel_type; ?></td>
              <td><?php echo $parcel_description; ?></td>
              <td><?php echo $parcel_receiver; ?></td>
              <td><?php echo $parcel_contact_no; ?></td>
              <td><?php echo $parcel_address; ?></td>
              <td><?php echo $parcel_city; ?></td>
              <td><?php echo $parcel_province; ?></td>
            </tr>
			<?php }?>
          
        </table>
		
      </div>
      
	
	<!-- Include Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>