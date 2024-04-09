<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Cheetah-Fast Delivery</title>
  <!-- Include the Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    body {
  background-image: url('css/img/registraion.jpg');
  background-size: cover;
}
@media (max-width: 600px) {
	.container {
				max-width: 50%;
      }
    }
  </style>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php"><img src="img/cheetahlogo.png"  alt="Bootstrap" width="120" height="80"></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item ">
          <a class="nav-link" href="index.php"><b>Home</b></a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="aboutus.php"><b>About Us</b><span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php"><b>Login</b></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="signup.php"><b>signup</b><span class="sr-only">(current)</span></a>
          </li>
      </ul>
    </div>
  </nav>
  
  <div class="container">
		<div class="row justify-content-end">
    		<div class="col-lg-10 ">
			<form action="user_adder.php" method="POST">
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
				<input type="tel" class="form-control" id="contact" placeholder="Enter contact number" name= "number">
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
				<label for="city">City</label>
				<input type="text" class="form-control" id="city" placeholder="Enter city" name = "city">
			  </div>
			  <div class="form-group">
				<button type="submit" class="btn btn-primary">Submit</button>
				<button type="reset" class="btn btn-pr">Reset</button>
			  </div>
			</form>
		  </div>
		</div>
	  </div>
	  <footer class="bg-dark text-white">
		<div class="container">
		  <div class="row">
			
        <div class="col-sm-4">
          <h4>
            Cheetah Delivery Service
          </h4>
        <p>Having incepted its business in January 2023 as a fully owned Sri Lankan company. We deliver in western province over three districts in Colombo, Kalutara, and Gampaha. We provide cash on delivery, as well as we deliver all parcels as you wish.</p>
			</div>
			<div class="col-sm-4">
			  <h4>Quick Menu</h4>
			  <ul class="list-unstyled">
				<li><a href="index.php">Home</a></li>
				<li><a href="aboutus.php">About Us</a></li>
				<li><a href="login.php">Log in</a></li>
				<li><a href="signup.php">Sign Up</a></li>
			  </ul>
			</div>
			<div class="col-sm-4">
			  <h4>Contact Us</h4>
			  <ul class="list-unstyled">
        <li><i class="fa fa-phone"></i><b> Phone</b></li>
        <li><i class="fa fa-phone"></i>076 76 790 88</li>
				<li><i class="fa fa-envelope"></i><b>Email</b></li>
        <li><i class="fa fa-envelope"></i> <a href="mailto:info@gmail.com">udayanganisala511@gmail.com</a></li>
				<li><i class="fa fa-map-marker"></i><b>Address</b></li>
        <li><i class="fa fa-map-marker"></i>Galapatha, Wadumullla, Bentota.</li>
			  </ul>
			</div>
		  </div>
		</div>
	  </footer>


  
  <!-- Include the Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  
  
</body>
</html>