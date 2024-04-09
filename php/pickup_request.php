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
        /* Set style for form */
		.form-control {
			margin-bottom: 20px;
		}
        .form-dropdown {
			position: absolute;
			left: 50%;
			top: 50%;
			transform: translate(100%, -50%);
            width: 1000%;
			max-width: 400px;
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
			<li class="nav-item">
				<a class="nav-link" href="parcel.php">Parcel</a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="pickup_request.php"><b>Pickup Request</b><span class="sr-only">(current)</span></a>
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
        <!-- Form with Dropdown Menu -->
		<div class="form-dropdown">
			<form>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="exampleFormControlSelect1">Time</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <br>
                        <option>8.00 a.m</option>
                        <option>8.30 a.m</option>
                        <option>9.00 a.m</option>
                        <option>9.30 a.m</option>
                        <option>10.00 a.m</option>
                        <option>10.30 a.m</option>
                        <option>11.00 a.m</option>
                        <option>11.30 a.m</option>
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <br>
                    <label for="exampleFormControlSelect1"></label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>12.00 p.m</option>
                        <option>12.30 p.m</option>
                        <option>1.00 p.m</option>
                        <option>1.30 p.m</option>
                        <option>2.00 p.m</option>
                        <option>2.30 p.m</option>
                        <option>3.00 p.m</option>
                        <option>3.30 p.m</option>
                        <option>4.00 p.m</option>
                        <option>4.30 p.m</option>
                        <option>5.00 p.m</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Vehicle</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>Car</option>
                        <option>Bike</option>
                        <option>Tuk Tuk</option>
                        <option>Lorry</option>
                    </select>
                </div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</nav>
	
	<!-- Include Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>