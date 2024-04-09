
<!DOCTYPE html>
<html>
<head>
	<title>Responsive Sidebar Navigation Bar with Yellow Side Background</title>
	<!-- Include Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<!-- Custom Styles -->
	<style>
	/* Logout button */
.logout-btn {
    position: absolute;
	top: 20px;
	right: 20px;
}
/*body*/
body {
    background-image: url('img/allpages.jpg');
	background-size: 1400px 800px;
	background-position: center top;
	background-repeat: no-repeat;
}
/*container*/
#form-container {
	position: absolute;
	top: 100px;
	left: 58%;
	transform: translateX(-50%);
	width: 50%;
	height: 400px;	
}
/*background*/
.background-label {
	position: absolute;
	top: 2%; 
	left: 25px;
	color: #ffffff;
	font-size: 2rem;
}

.bar {
	position: absolute;
	top: 0%;
	left: 0px;
	width: 100%;
	height: 75px;
	background-color: #000000;
	opacity: 0.75;
}
.container {
    position: fixed;
    top: 100px;
    left: 100px;
}
</style>
</head>
<body>
 <div class="background-container">
		 <div class="bar"></div>
		<h1 class="background-label">Search Parcel</h1>
	  </div>
	<!-- Quit Button -->
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
			  <th>Delivered</th>
			  <th>Not Delivered</th>
			  <th>Pending</th>
            </tr>
			<?php
		 
         require_once("../config.php");

         if(isset($_GET['search']))
         {
             $filtervalue = $_GET['search'];
             $query = "SELECT * FROM parcel WHERE tracking_no = $filtervalue";
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
			 <td><button class = "btn btn-success  "><a href = "delivered.php" class = "text-light">Delivered</a></button></td>
			 <td><button class = "btn btn-info   "><a href = "notdelivered.php" class = "text-light">Not Delivered</a></button></td>
			 <td><button class = "btn btn-secondary "><a href = "pending.php" class = "text-light">Pending</a></button></td>
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