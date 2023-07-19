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
    <title>User Page</title>
    <link rel="stylesheet" href="css/All.css">
    <link rel="stylesheet" href="css/component.css">
    <link rel="stylesheet" href="css/style.css">
    
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



</body>
</html>