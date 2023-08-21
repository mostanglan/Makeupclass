<?php
session_start();

if((isset($_SESSION['auth'])) && !($_SESSION['auth']=='auth')){
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
    <style>
body {
  background: #e2eaef;
  font-family: "Open Sans", sans-serif;
}
h2 {
  color: #000;
  font-size: 26px;
  font-weight: 300;
  text-align: center;
  text-transform: uppercase;
  position: relative;
  margin: 30px 0 60px;
}
h2::after {
  content: "";
  width: 100px;
  position: absolute;
  margin: 0 auto;
  height: 4px;
  border-radius: 1px;
  background: #7ac400;
  left: 0;
  right: 0;
  bottom: -20px;
}
.carousel {
  margin: 50px auto;
  padding: 0 70px;
}
.carousel .item {
  color: #747d89;
  min-height: 325px;
  text-align: center;
  overflow: hidden;
}
.carousel .thumb-wrapper {
  padding: 25px 15px;
  background: #fff;
  border-radius: 6px;
  text-align: center;
  position: relative;
  box-shadow: 0 2px 3px rgba(0,0,0,0.2);
}
.carousel .item .img-box {
  height: 120px;
  margin-bottom: 20px;
  width: 100%;
  position: relative;
}
.carousel .item img { 
  max-width: 100%;
  max-height: 100%;
  display: inline-block;
  position: absolute;
  bottom: 0;
  margin: 0 auto;
  left: 0;
  right: 0;
}
.carousel .item h4 {
  font-size: 18px;
}
.carousel .item h4, .carousel .item p, .carousel .item ul {
  margin-bottom: 5px;
}
.carousel .thumb-content .btn {
  color: #7ac400;
  font-size: 11px;
  text-transform: uppercase;
  font-weight: bold;
  background: none;
  border: 1px solid #7ac400;
  padding: 6px 14px;
  margin-top: 5px;
  line-height: 16px;
  border-radius: 20px;
}
.carousel .thumb-content .btn:hover, .carousel .thumb-content .btn:focus {
  color: #fff;
  background: #7ac400;
  box-shadow: none;
}
.carousel .thumb-content .btn i {
  font-size: 14px;
  font-weight: bold;
  margin-left: 5px;
}
.carousel .item-price {
  font-size: 13px;
  padding: 2px 0;
}

</style>
    
<body>
    <div class="container">
<div class="content">
    
        <h3>User<span>Page</span></h3>
        <h1>Welcome <span><?php echo $_SESSION['username']; ?></span></h1>
        <p>This is our user page </p>
        <a href="home.php" class="btn primary_btn">Home</a>
        <a href="RecommendClass.php" class="btn primary_btn">Recommend</a>
        <a href="saved.php" class="btn primary_btn">Saved</a>
        <a href="changepassword.php" class="btn primary_btn">Change Password</a>
        <a href="logout.php" class="btn primary_btn">Logout</a>

    </div>
</div>
<div class="container-xl">
  <div class="row">
    <div class="col-md-12">
      <h2>Recommended<b>Video</b></h2>
      <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
      <!-- Carousel indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>   
      <!-- Wrapper for carousel items -->
      <div class="carousel-inner">
        <div class="item carousel-item active">
          <div class="row">
            <div class="col-sm-3">
              <div class="thumb-wrapper">
                <div class="img-box">
                  <img src="" class="img-fluid" alt="">                 
                </div>
                <div class="thumb-content">
                  <h4>Nail Extension</h4>                 
      
                  <p class="item-price">1500</p>
                  <p>Nail extension near you</p>
                  <a href="#" class="btn btn-primary">Show</a>
                </div>            
              </div>
            </div>
            <div class="col-sm-3">
              <div class="thumb-wrapper">
                <div class="img-box">
                  <img src="" class="img-fluid" alt="">                 
                </div>
                <div class="thumb-content">
                  <h4>Hair Style</h4>                 
      
                  <p class="item-price">2500</p>
                  <p>Hair styling near you</p>
                  <a href="#" class="btn btn-primary">Show</a>
                </div>            
              </div>
            </div>  
    </div>
    </div>
  </div>
</div>





</body>
</html>