<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Rapid Application Project</title>
  <!-- Include the Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    body {
			background-image: url('../img/LoginImage.jpg');
			background-repeat: no-repeat;
			background-size: cover;
      background-color: #f2f2f2;
		}
      /* CSS for the login form */
      .container {
			margin: auto;
			width: 30%;
			margin-top: 10%;
			background-color: white;
			padding: 20px;
			border-radius: 10px;
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
			text-align: center;
		}

		input[type=text], input[type=password] {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}

		button {
			background-color: #4CAF50;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			width: 100%;
		}

		button:hover {
			background-color: #45a049;
		}

		h2 {
			color: #4CAF50;
			font-size: 28px;
			margin-bottom: 20px;
		}

		label {
			color: #888;
			font-size: 18px;
		}

		@media screen and (max-width: 600px) {
			.container {
				width: 80%;
			}
		}
    </style>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><img src="../img/cheetahlogo.png"  alt="Bootstrap" width="120" height="80"></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item ">
          <a class="nav-link" href="home.php"><b>Home</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="aboutus.php"><b>About Us</b></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="login.php"><b>Login</b><span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="signup.php"><b>signup</b></a>
        </li>
      </ul>
    </div>
  </nav>

  
  
  <div class="container">
		<h2>Login Form</h2>
		<form action="login.blade.php" method="post">
			<label for="username">Username</label>
			<input type="text" id="username" name="username" placeholder="Enter username" required>

			<label for="password">Password</label>
			<input type="password" id="password" name="password" placeholder="Enter password" required>

			<button type="submit">Login</button>
		</form>
	</div>
	


  <!-- Include the Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  

</body>
</html>