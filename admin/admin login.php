
<!DOCTYPE html>
<html>
<head>
	<title>Cheetah-Fast Delivery</title>
	<!-- Include Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<!-- Custom Styles -->
	<link rel="stylesheet" href="css/AdminLogin.css">
</head>
<body>
	<div class="background-container">
		<div class="bar"></div>
			<h1 class="background-label">Admin Login</h1>
	</div>
	<!-- Sidebar Navigation -->
	<div class="col-md-2">
	<nav class="sidebar">
		<!-- Brand Logo -->
		<a class="navbar-brand" href="#"><img src="img/cheetahlogo.png"  alt="Bootstrap" width="120" height="80"></a>
		<!-- Navigation Links -->
		<ul class="navbar-nav flex-column active">
		<li class="nav-item active">
				<a class="nav-link" href="admin signup.php">Create Admin Account</a>
			</li>
            <li class="nav-item active">
				<a class="nav-link" href="admin login.php"><b>Admin Login</b><span class="sr-only">(current)</span></a>
			</li>
		</ul>
	</nav>
</div>
<div class="container">
	<div class="row mb-5">
		<h2>Login Form</h2>
		<form action = "admin_validity.php" method = "POST"> 
			<label for="username">Username</label>
			<input type="text" id="username" name="username" placeholder="Enter Username" required>

			<label for="password">Password</label>
			<input type="password" id="password" name="password" placeholder="Enter password" required>

			<button type="submit">Login</button>
		</form>

	</div>
</div>

  
	
	<!-- Include Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>