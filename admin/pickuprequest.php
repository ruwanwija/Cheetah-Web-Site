
<!DOCTYPE html>
<html>
<head>
	<title>Cheetah-Fast Delivery</title>
	<!-- Include Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<!-- Custom Styles -->
	<link rel="stylesheet" href="css/pickuprequestadmin.css">
</head>
<body>
	<div id="left-div">
		<!-- Sidebar Navigation -->
			<nav class="sidebar">
				<!-- Brand Logo -->
				<a class="navbar-brand" href="#"><img src="img/cheetahlogo.png"  alt="Bootstrap" width="120" height="80"></a>
				<!-- Navigation Links -->
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
					<li class="nav-item">
						<a class="nav-link" href="searchparcel.php">Search Parcel</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="allparcel.php">All Parcel</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="pickuprequest.php"><b>Pickup Request Message</b><span class="sr-only">(current)</span></a>
					</li>
				</ul>
			</nav>
	</div>

	<div id="right-div">
		<!-- black bar -->
		<div class="bar"> 
			<h1 class="top-bar-lable">Pickup Request Message</h1>
			<a href="logout.php">
				<button class="btn btn-danger logout-btn">Logout</button>
			</a>
		</div>

		<?php

			require_once("../config.php");

			$query_request = "SELECT * FROM request";
			$result_parcel = mysqli_query($conn,$query_request);
		?>

<table class="table table-bordered table-hover table-responsive-sm">
			<tr>
			<th>Request Number</th>
			<th>Parcel Length</th>
			<th>Parcel Width</th>
			<th>Parcel Height</th>
			<th>Convenient Date for Sender</th>
			<th>Convenient Time for Sender:From</th>
			<th>Convenient Time for Sender:To</th>
			<th>Convenient Date for Receiver</th>
			<th>Convenient Time for Receiver:From</th>
			<th>Convenient Time for Receiver:To</th>
			<th>Sender's stree</th>
			<th>Sender's City</th>
			<th>Sender's Contact Number</th>
			</tr>
			<tbody>
				<?php while($row = mysqli_fetch_array($result_parcel)){
					$request_no = $row['request_no'];
					$parcel_length = $row['parcel_length'];
					$parcel_width = $row['parcel_width'];
					$parcel_height = $row['parcel_height'];
					$sender_date = $row['sender_date'];
					$sender_from = $row['sender_from'];
					$sender_to = $row['sender_to'];
					$receiver_date = $row['receiver_date'];
					$receiver_from = $row['receiver_from'];
					$receiver_to = $row['receiver_to'];
					$sender_street = $row['sender_street'];
					$sender_city = $row['sender_city'];
					$contact_no = $row['contact_no']; ?>
					<tr>
						<td><?php echo $request_no; ?></td>
						<td><?php echo $parcel_length; ?></td>
						<td><?php echo $parcel_width; ?></td>
						<td><?php echo $parcel_height; ?></td>
						<td><?php echo $sender_date; ?></td>
						<td><?php echo $sender_from; ?></td>
						<td><?php echo $sender_to; ?></td>
						<td><?php echo $receiver_date; ?></td>
						<td><?php echo $receiver_from; ?></td>
						<td><?php echo $receiver_to; ?></td>
						<td><?php echo $sender_street; ?></td>
						<td><?php echo $sender_city; ?></td>
						<td><?php echo $contact_no; ?></td>
						</td>
					</tr>
				<?php }?>
			</tbody>
		</table>
		
	</div>






















	

	
	<!-- Include Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>