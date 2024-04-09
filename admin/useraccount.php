
<!DOCTYPE html>
<html>
<head>
	<title>Cheetah-Fast Delivery</title>
	<!-- Include Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<!-- CSS -->
	<link rel="stylesheet" href="css/UserAccount.css">
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
		<a class="navbar-brand" href="#"><img src="img/cheetahlogo.png"  alt="Bootstrap" width="120" height="80"></a>
		<!-- Navigation Links -->
		<ul class="navbar-nav flex-column">
			<li class="nav-item active">
				<a class="nav-link" href="useraccount.php"><b>Create User Account</b><span class="sr-only">(current)</span></a>
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
            <li class="nav-item">
				<a class="nav-link" href="pickuprequest.php">Pickup Request Message</a>
			</li>
		</ul>
	</nav>
	<div class="container">
		<div class="row justify-content-end">
    		<div class="col-lg-9 offset-lg-">
				<form action="admin_user_adder.php" method="POST">
					<div class="form-group">
						<label for="email">Email (Username)</label>
						<input type="email" class="form-control" id="email" placeholder="Enter email" required name = "email">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" id="password" placeholder="Enter password" required name = "password">
					</div>
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" class="form-control" id="name" placeholder="Enter name" required name = "name">
					</div>
					<div class="form-group">
						<label for="contact">Contact Number</label>
						<input type="tel" class="form-control" id="number" placeholder="Enter contact number" required name = "number">
					</div>
					<div class="form-group">
						<label for="nic">NIC</label>
						<input type="text" class="form-control" id="nic" placeholder="Enter NIC number" required name = "nic">
					</div>
					<div class="form-group">
						<label for="address">Address</label>
						<input type="text" class="form-control" id="address" placeholder="Enter address" required name = "address">
					</div>
					<div class="form-group">
						<label for="city">City</label>
						<input type="text" class="form-control" id="city" placeholder="Enter city" required name = "city">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Submit</button>
						<button type="reset" class="btn btn-pr">Reset</button>
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