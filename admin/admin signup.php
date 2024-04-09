<!DOCTYPE html>
<html>
<head>
	<title>Cheetah-Fast Delivery</title>
	<!-- Include Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<!-- CSS -->
	<link rel="stylesheet" href="css/AdminSignup.css">
</head>
<body>
	<div class="background-container">
		<div class="bar"></div>
			<h1 class="background-label">Admin Signup</h1>
	</div>
	<!-- Sidebar Navigation -->
	<nav class="sidebar">
		<!-- Brand Logo -->
		<a class="navbar-brand" href="#"><img src="img/cheetahlogo.png"  alt="Bootstrap" width="120" height="80"></a>
		<!-- Navigation Links -->
		<ul class="navbar-nav flex-column">
            <li class="nav-item active">
				<a class="nav-link" href="admin signup.php"><b>Create Admin Account</b><span class="sr-only">(current)</span></a>
			</li>
            <li class="nav-item">
				<a class="nav-link" href="admin login.php">Admin Login</a>
			</li>
		</ul>
	</nav>
	<div class="container">
		<div class="row justify-content-end">
    		<div class="col-lg-9 offset-lg-">
				<form action="admin_adder.php" method="POST">
						<div class="form-group">
							<label for="email">Email (Username)</label>
							<input type="email" class="form-control" id="email" placeholder="Enter email" name = "email">
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" class="form-control" id="password" placeholder="Enter password" name = "password">
						</div>
						<div class="form-group">
							<label for="name">Name</label>
							<input type="text" class="form-control" id="name" placeholder="Enter name" name = "name">
						</div>
						<div class="form-group">
							<label for="contact">Contact Number</label>
							<input type="tel" class="form-control" id="contact" placeholder="Enter contact number" name = "number">
						</div>
						<div class="form-group">
							<label for="nic">NIC</label>
							<input type="text" class="form-control" id="nic" placeholder="Enter NIC number" name = "nic">
						</div>
						<div class="form-group">
							<label for="address">Address</label>
							<input type="text" class="form-control" id="address" placeholder="Enter address" name = "address">
						</div>
						<div class="form-group">
							<label for="gender">Gender</label>
							<select class="form-control" id="exampleFormControlSelect1" name = "gender">
							<option value ="gender">Enter gender</option>
							<option value ="male">Male</option>
						<option value ="female">Female</option>
						</select>
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