<?php
session_start();
if(!(isset($_SESSION['adminauth'])) && !($_SESSION['adminauth']=='auth')){
    header('location: index.php');
}
require('../templates/connection.php');
if($_SERVER["REQUEST_METHOD"]=="POST"){
  if(isset($_POST['submit'])){
    $link = $_POST['link'];
    $skin = $_POST['skin'];
    $brand = $_POST['brand'];
    $style = $_POST['style'];
    $category = $_POST['category'];
    $title = $_POST['title'];
    $description = $_POST['description'];

    $query = "INSERT INTO video (title, description, category, style, brand, skintype, link) VALUES('$title', '$description', '$category', '$style', '$brand', '$skin', '$link')";
    if(mysqli_query($conn, $query)){
      echo "<script>alert('video have added')</script>";
      header("locaion: adminpanel.php");
    }else{
      echo "<script>alert('try again')</script>";
    }
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
  <a href="adminpanel.php">Dashboard</a>
  <a href="serviceform.php">Add video</a>
  <a href="serviceform.php">Show video</a>
  <a href="adminlogout.php" class="split">Log Out</a>
</div>
<div class="form-container">
  <form action="#" method="post">
    <h1>Video Addition</h1><br>
    <img src="../Images/newcreative.jpg" alt="service"><img src="../Images/new image.jpg" alt="service"><br>

    <label><b>Video link</b></label>
    <input type="text"  name="link" required><br>
    <label><b>Skin type</b></label>
    <input type="text"  name="skin"><br>
    <label><b>Brand name</b></label>
    <input type="text" name="brand"><br>
    <label><b>Style</b></label>
    <input type="text" name="style"><br>
    <label><b>Category</b></label>
    <input type="text" name="category"><br>
    <label><b>Title</b></label>
    <input type="text"  name="title" required><br>
    <label><b>Description</b></label>
    <textarea rows="4" cols="50"  name="description" required></textarea><br>

    <input type="submit" name="submit" value="Submit" class="btn">
   
</form>
</div>

</body>
</html>