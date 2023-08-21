<?php
session_start();

if(isset($_SESSION['auth']) && $_SESSION['auth']=='auth'){
    header('location: userpage.php');
}
require('connection.php');

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];
        $cpwd = $_POST['cpwd'];
        $validation = true;
        if($cpwd != $pwd) {
            $validation = false;
        }
        if($validation){
            $query = "INSERt INTO user (username, email, password) VALUES ('$username', '$email', '$pwd')";
            if(mysqli_query($conn, $query)){
                header('location: Login.php');
            }
            else{
                echo "<script>alert('registration Fail')</script>";
            }
        } 
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Register Form</title>
    <link rel="stylesheet" href="css/All.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <div class="form-container">
        

        <form action="register.php" method="POST">
        <h3>Register</h3>
        <input type="text" name="username" required placeholder= "Enter Your Name">
        
        <input type="email" name="email" required placeholder="Enter Your Email">
        
        <input type="password" name="pwd" required placeholder="Enter Your Password">
        
        <input type="password" name="cpwd" required placeholder="Confirm Your Password">
        

        
        <input type="submit" name="submit" value="Register now" class="primary_btn">
        <p>Already have an account?<a href="Login.php">Login now</a></p>
</form>
</div>
</body>
</html>
