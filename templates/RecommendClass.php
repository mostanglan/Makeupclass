<?php
session_start();

if(!(isset($_SESSION['auth'])) && !($_SESSION['auth']=='auth')){
    header('location: login.php');
}
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recommend Me</title>
    <link rel="stylesheet" href="css/All.css">
    <link rel="stylesheet" href="css/component.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
      .container-form{
        width: 500px;
        margin-left: 30%;
        }
    </style>
</head>
<body>
  <div class="container">
<div class="content">
    
        <h3>User<span>Page</span></h3>
        <h1>Welcome <span><?php echo $_SESSION['username']; ?></span></h1>
        <p>This is our user page </p>
        <a href="home.php" class="btn primary_btn">Home</a>
        <a href="RecommendClass.php" class="btn primary_btn">Recommend Me</a>
        <a href="history.php" class="btn primary_btn">History</a>
        <a href="changepassword.php" class="btn primary_btn">Change Password</a>
        <a href="logout.php" class="btn primary_btn">Logout</a>

    </div>
</div>

<div class="container-form">
  <h2>Recommend Me</h2>
  <form class="form-horizontal" action="RecommendPage.php" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Select Class:</label>
      <div class="col-sm-10">
        <select class="form-control" id="course" name="course">
          <option value="1">simple makeup</option>
          <option value="2">bridal makeup</option>
          <option value="3">professional makeup</option>
          <option value="4">creative makeup</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Address:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="address" placeholder="Enter Address" name="address">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <button type="button" class="btn btn-primary" onclick="getLocation()">Get Location</button>
          <span id="longitude"></span>
          <span id="latitude"></span>
          <input type="hidden" id="hiddenLongitude" name="hiddenLongitude">
          <input type="hidden" id="hiddenLatitude" name="hiddenLatitude">

        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>

</body>
<script type="text/javascript">
        // Function to get the user's location
        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else {
                console.log("Geolocation is not supported by this browser.");
            }
        }

        // Function to display the latitude and longitude in the specified elements
        function showPosition(position) {
            var latitude = position.coords.latitude;
            var longitude = position.coords.longitude;

            // Display latitude and longitude in span tags
            document.getElementById("longitude").textContent = "Longitude: "+longitude;
            document.getElementById("latitude").textContent = "Latitude:" + latitude;

            // Store latitude and longitude in hidden input fields
            document.getElementById("hiddenLongitude").value = longitude;
            document.getElementById("hiddenLatitude").value = latitude;
        }

        // Call the getLocation function when the button is clicked
        document.getElementById("getLocationBtn").addEventListener("click", getLocation);

</script>
</html>
