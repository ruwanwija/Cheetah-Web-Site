<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Cheetah-Fast Delivery</title>
  <!-- Include the Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="scss/_variables.scss">
  <style>
    #register-button {
      position: absolute;
      left: 1000px;
      top: 80%;
      transform: translateY(-50%);
      background-color: rgb(36, 169, 78);
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        font-weight: bold;
        cursor: pointer;
      }
      #register-button:hover {
        background-color: rgb(35, 165, 120);
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
        <li class="nav-item active">
          <a class="nav-link" href="index.php"> <b>Home</b><span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="aboutus.php"><b>About Us</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php"><b>Login</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="signup.php"><b>Signup</b></a>
        </li>
      </ul>
    </div>
  </nav>
  

  <div class="row">
      <div class="col-12"> 
       <img src="css/img/homepageImage.jpg" class="mx-auto d-block image fluid" alt="" style = "max-width: 100%; height: auto;" >
      </div>
  </div>
  <a href="signup.php"><button id="register-button">Register</button></a>
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
