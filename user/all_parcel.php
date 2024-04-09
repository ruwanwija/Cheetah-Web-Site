
<!DOCTYPE html>
<html>
<head>
	<title>Responsive Sidebar Navigation Bar with Yellow Side Background</title>
	<!-- Include Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<!-- Custom Styles -->
	<link rel="stylesheet" href="css/all parcel.css">
</head>
<body>


 <div class="background-container">
		<div class="bar"></div>
			<h1 class="background-label">Search Parcel</h1>
	    </div>
	<!-- Logout Button -->
	<a href="logout.php">
		<button class="btn btn-danger logout-btn">Logout</button>
	</a>
    <div class="container text-end mb-5">
        <table class="table table-bordered table-hover table-responsive-sm">
        <tr>
              <th>Sender Name</th>
			        <th>Parcel Type</th>
              <th>Parcel Description</th>
              <th>Receiver Name</th>
              <th>Phone Number</th>
              <th>Address</th>
              <th>City</th>
              <th>Province</th>
			  <th>Edit</th>
			  <th>Delete</th>
            </tr>
			<?php
		 
         require_once("../config.php");

         if(isset($_POST['search']))
         {
             $filtervalue = $_POST['search'];
             $query = "SELECT * FROM parcel WHERE sender_name = '$filtervalue'";
             $query_run = mysqli_query($conn,$query);

             if(mysqli_num_rows($query_run)>0)
             {
                 foreach($query_run as $items)
                 {
                     ?>
                 <td><?= $items['sender_name']; ?></td>
                 <td><?= $items['parcel_type']; ?></td>
                 <td><?= $items['parcel_description']; ?></td>
                 <td><?= $items['parcel_receiver']; ?></td>
                 <td><?= $items['parcel_contact_no']; ?></td>
                 <td><?= $items['parcel_address']; ?></td>
                 <td><?= $items['parcel_city']; ?></td>
                 <td><?= $items['parcel_province']; ?></td>
			  <td><button class = "btn btn-primary"><a href = "edit.php" class = "text-light">Edit</a></button></td>
			 <td><button  class = "btn btn-danger"><a href = "delete.php?deleteid='$tracking_no'" class = "text-light">Delete</a></button></td>
             <?php
             }
			}
            else{
                ?>
                <td>Null</td>
                <td>Null</td>
                <td>Null</td>
                <td>Null</td>
                <td>Null</td>
                <td>Null</td>
                <td>Null</td>
                <td>Null</td>
                <td>Null</td>
                <?php
				}
			}
			?>
      
	
	<!-- Include Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>