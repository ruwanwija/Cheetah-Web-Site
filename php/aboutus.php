<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Rapid Application Project</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">
  <!-- Include the Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
 body {
  margin: 0;
  padding: 0;
}

.background-image {
  background-image: url("../img/aboutus.jpg");
  background-size: cover;
  background-position: center;
  position: relative;
  height: 100vh;
}

.content {
  position: absolute;
  top: 0;
  right: 0;
  width: 50%;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
}

.textbox {
  background-color: rgba(255, 255, 255, 0.7);
  padding: 20px;
  max-width: 600px;
}

h1 {
  text-align: left;
  margin: 0;
  font-size: 2em;
}

p {
  text-align: justify;
  line-height: 1.5;
}

@media only screen and (max-width: 768px) {
  .content {
    width: 100%;
  }
  
  .textbox {
    max-width: 100%;
  }
  
  h1 {
    text-align: center;
    font-size: 1.5em;
  }
  
  p {
    text-align: justify;
    line-height: 1.2;
  }
}


  </style>
</head>
<body>
<?php
$image_path = "../img/cheetahlogo.png";
?>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><img src="<?php echo $image_path; ?>"  alt="Bootstrap" width="120" height="80"></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item ">
          <a class="nav-link" href="home.php"><b>Home</b></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="aboutus.php"><b>About Us</b><span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php"><b>Login</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="signup.php"><b>signup</b></a>
        </li>
      </ul>
    </div>
    
  </nav>
  <div class="background-image">
    <div class="content">
      <div class="textbox">
        <h1>About Us</h1>
        <p>Having incepted its business in January 2023 as a fully owned Sri Lankan company. We deliver in western province over three districts in Colombo, Alutara, and Gampaha. We do not provide cash on delivery, as well as we deliver only parcels marked as already paid. You can contact us directly to deliver the parcels. The high-tech approach of the company has empowered us to provide our customers with the best service with our customer-oriented computerized system, which allows them real-time tracking of their packages. The personalized customer portal allows our regular customers to log in to their profile and see the history of their transactions and preview the records of past delivery status. We always make sure that the intended receiver receives the parcel anyhow. In case the receiver is uncontactable or not available to accept the parcel, we coordinate with the sender to re-check any misinformation and deliver the package.</p>
      </div>
    </div>
  </div>
  

  
  <!-- Include the Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  
  
</body>
</html>