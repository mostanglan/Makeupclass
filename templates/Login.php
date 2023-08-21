<?php
session_start();

if(isset($_SESSION['auth']) && $_SESSION['auth']=='auth'){
    header('location: userpage.php');
}
require('connection.php');


if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];

        $query = "select * from user where email='$email' AND password = '$pwd'";
        $retval = mysqli_query($conn, $query);
        $result = mysqli_fetch_assoc($retval);

        if($email == $result['email'] && $pwd == $result['password']){
            $_SESSION['auth'] = 'auth';
            $_SESSION['userid'] = $result['userid'];
            $_SESSION['username'] = $result['username'];
            $_SESSION['email'] = $result['email'];
            header('location: userpage.php');
        }
        else{
            echo "<script>alert('login Fail')</script>";
        }
    }
}
?>


<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Project-Makeup Video Recommend</title>
    <link rel="stylesheet" href="css/All.css">
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>


<!--FORM-->
<div class="form-container">
    
    <form method="POST">
        <h3>Login</h3>
        
        <input type="email" name="email" required placeholder="Enter Your Email">
        
        <input type="password" name="pwd" required placeholder="Enter Your Password">

        <input type="submit" name="submit" value="Login now" class="primary_btn">
        <p>Don't have an account?<a href="register.php">Register now</a></p>
        </form>
</div>
<!--END-->
        
    
</body>
</html>