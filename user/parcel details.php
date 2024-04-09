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
		body {
		background-image: url('img/allpages.jpg');
		background-size: 1400px 800px;
		background-position: center top;
		background-repeat: no-repeat;
		}

		@media screen and (max-width: 768px) {
		body {
			background-size: 100%;
		}
		}
		#form-container {
			position: absolute;
			top: 100px;
			left: 58%;
			transform: translateX(-50%);
			width: 50%;
			height: 400px;
			
			}

			@media (min-width: 768px) {
			#form-container {
				top: 400px;
			}
			}

			@media (min-width: 992px) {
			#form-container {
				top: 100px;
				height: 500px;
			}
			}
            .background-label {
			position: absolute;
			/* top: -1%; */
			/* left: 260px; */
			margin-left: 5px;
            margin-top:8px;
			/* transform: translate(-50%, 50%); */
			color: rgb(122, 5, 5);
			font-size: 2rem;
			/* adjust to the desired font size */
		}
			.bar {
			position: absolute;
			top:0%;
			left: 0;
			width: 100%;
			height: 75px; /* adjust to the desired height of the bar */
			background-color: #c33939; /* adjust to the desired color of the bar */
			opacity: 0.5; /* adjust to the desired opacity of the bar */
			}
			.container {
            position: fixed;
            top: 250px;
            left: 200px;
            }



	</style>
</head>
<body>
  <div class="background-container">
		<div class="bar"></div>
		<h1 class="background-label">Parcel Description</h1>
	  </div>
	<!-- Quit Button -->
	<button class="btn btn-danger quit-btn">Quit</button>
	<!-- Sidebar Navigation -->
    <div class="container text-end mb-5">
        <table class="table table-bordered table-hover table-responsive-sm">
          <thead>
            <tr>
              <th>Parcel Type</th>
              <th>Parcel Description</th>
              <th>Receiver Name</th>
              <th>Phone Number</th>
              <th>Address</th>
              <th>City</th>
              <th>Province</th>
            </tr>
          </thead>
          <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
          </tbody>
        </table>
      </div>
      
	
	<!-- Include Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>