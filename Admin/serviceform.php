<?php
session_start();
if(!(isset($_SESSION['adminauth'])) && !($_SESSION['adminauth']=='auth')){
    header('location: index.php');
}
require('../templates/connection.php');

if(isset($_POST['submit'])){
  $sname = $_POST['sname'];
  $cprice = $_POST['cprice'];
  $photo = $_POST['photo'];

  $query = "INSERT INTO service (sname, scoast, simage) VALUES('$sname', '$cprice', '$photo')";
  if(mysqli_query($conn, $query)){
    echo "<script>alert('service have added')</script>";
    header("locaion: adminpanel.php");
  }else{
    echo "<script>alert('try again')</script>";
  }
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="sform.css">
	<title>Admin</title>
</head>
<body>
	<center>
	<h1>Update</h1>
    </center>

    <style>
.topnav {
  overflow: hidden;
  background-color:#a2de96;
}

.topnav a {
  float: left;
  color:black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color:#26643b;
  color: black;
}

.topnav a.split {
  float: right;
  background-color: #26643b;
  color: white;
}
</style>
</head>
<body>

<div class="topnav">
  <a href="adminview.php">New Service</a>
  <a href="serviceform.php">Add Service</a>
  <a href="adminlogout.php" class="split">Log Out</a>
</div>
<div class="form-container">
  <form>
    <h1>Services Updation</h1><br>
    <img src="../Images/1.png" alt="service"><img src="../Images/2.png" alt="service"><br>

    <label for="sname"><b>Service Name</b></label>
    <input type="text"  name="sname" required><br>
    <label for="cprice"><b>Cost Price</b></label>
    <input type="text"  name="cprice" required><br>

    <label for="text"><b>Picture of new service</b></label><br>
     <input type="file"  name="photo" required><br>

    <button type="submit" class="btn"><b>Submit</b></button>
   
</form>
</div>

</body>
</html>