
<!DOCTYPE html>
<html>
<head>
	<title>Cheetah-Fast Delivery</title>
	<!-- Include Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<!-- CSS -->
	<link rel="stylesheet" href="css/AddNewParcel.css">
</head>
<body>
	<div class="background-container">
		<div class="bar"></div>
		<h1 class="background-label">Add New Parcel</h1>
	</div>
	<!-- Quit Button -->
	<a href="logout.php">
		<button class="btn btn-danger logout-btn">Logout</button>
	</a>
	<div id="form-container">
			<form action = "parcel_adder.php" method = "POST">
				<div class="form-group">
					<label for="exampleFormControlSelect1"><b>Parcel Type</b></label>
					<select class="form-control" id="exampleFormControlSelect1" name = "parcelType">
						<option>Enter Parcel Type</option>
						<option>Less than 1kg</option>
						<option>1kg-5kg</option>
						<option>5kg-15kg</option>
						<option>More than 15kg</option>
					</select>
				</div>
				<div class="form-group">
					<label for="exampleFormControlTextarea1"><b>Parcel Description</b></label>
					<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name = "description" placeholder = "Enter Parcel Description"></textarea>
				</div>
				<div class="form-group">
					<label for="name"><b>Receiver Name</b></label>
					<input type="text" class="form-control" id="name" name = "receiverName" placeholder = "Enter Receiver Name">
				</div>
				<div class="form-group">
					<label for="phone"><b>Contact Number</b></label>
					<input type="tel" id="phone" name="phone" pattern="[0-9]{10}" placeholder="+941234567890" required name = "contact" placeholder = "Enter Contact Number">
				</div>
				<div class="form-group">
					<label for="inputAddress"><b>Parcel Address</b></label>
					<input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name = "address" placeholder = "Enter Parcel Address">
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="inputCity"><b>Parcel City</b></label>
						<input type="text" class="form-control" id="inputCity" name = "city" placeholder = "Enter Parcel City">
					</div>
					<div class="form-group col-md-4">
						<label for="inputState"><b>Parcel Province</b></label>
						<select class="form-control" id="exampleFormControlSelect1" name = "province">
							<option>Enter Parcel Province</option> 
							<option>Less than 1kg</option>
							<option>1kg-5kg</option>
							<option>5kg-15kg</option>
							<option>More than 15kg</option>
						</select>
					</div>

				<div class="form-group">
						<button type="submit" class="btn btn-primary">Submit</button>
						<button type="reset" class="btn btn-pr">Reset</button>
				</div>
			</form>
	  </div>
	  
	
	<!-- Include Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>