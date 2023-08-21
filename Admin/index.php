<?php
session_start();

if(isset($_SESSION['adminauth']) && $_SESSION['adminauth']=='auth'){
    header('location: adminpanel.php');
}
require('../templates/connection.php');


if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];

        $query = "select * from admin where email='$email' AND password = '$pwd'";
        $retval = mysqli_query($conn, $query);

        if(mysqli_num_rows($retval) == 1){
            $result = mysqli_fetch_assoc($retval);
            $_SESSION['adminauth'] = 'auth';
            $_SESSION['adminid'] = $result['adminid'];
            $_SESSION['adminemail'] = $result['email'];
            header('location: adminpanel.php');
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
    <title>Makeup Class Management System</title>
    <link rel="stylesheet" href="./All.css">
    <link rel="stylesheet" href="./style.css">
    
</head>
<body>




<!--FORM-->
<div class="form-container">
        <form action="#" method="post">
        <h3>Admin Login</h3>
        
        <input type="email" name="email" required placeholder="Enter Your Email">
        
        <input type="password" name="pwd" required placeholder="Enter Your Password">

        <input type="submit" name="submit" value="Login now" class="primary_btn">
        
        </form>
</div>

        
    
</body>
</html>

