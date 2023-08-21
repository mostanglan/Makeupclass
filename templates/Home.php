<?php
session_start();
$auth=1;
if(isset($_SESSION['auth']) && $_SESSION['auth']=='auth'){
    $auth="Logined";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Makeup Cource Recommendation System</title>
    <link rel="stylesheet" href="css/All.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/component.css">
    <link rel="stylesheet" href="css/h.css">
</head>
<body>

<!--NAV Section-->
<div class="nav">
    <div class="container">
        <div class="nav__wrapper">
            <a href="./Home.php" class="logo">
                <img src="../Images/logs.png" alt="Makeup class">
                 </a>
                 <nav>
                    <div class="nav__icon">
                    <svg
                     xmlns="http://www.w3.org/2000/svg"
                     width="24"
                     height="24"
                     viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
>
                 <line x1="3" y1="12" x2="21" y2="12" />
                 <line x1="3" y1="6" x2="21" y2="6" />
                 <line x1="3" y1="18" x2="21" y2="18" />
</svg>
</div>
<div class="nav__bgOverlay"></div>
<ul class="nav__list">
    <div class="nav__close">
    <svg
   xmlns="http://www.w3.org/2000/svg"
   width="24"
  height="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <line x1="18" y1="6" x2="6" y2="18" />
  <line x1="6" y1="6" x2="18" y2="18" />
</svg>
</div>
<div class="nav__list__wrapper">
    <li><a href="Home.php" class="nav__link">Home</a></li>
    <li> <a href="courses.php" class="nav__link">Courses</a></li>
    <li> <a href="About.php" class="nav__link">About Us</a></li>
    <li><a href="Contact.php" class="nav__link">Contact</a></li>
    <?php
    if($auth=="Logined")
    {
        echo"<li><a href='userpage.php' class='nav__link'>Profile</a></li>";
        echo"<li><a href='logout.php' class='nav__link'>Logout</a></li>";
    }
    else{

   echo "<li></li><a href='Login.php' class='nav__link'>Login</a></li>";
    }
    ?>
</div>
</ul>
</nav>
</div>
</div>
</div>
<!-- End of nav section -->
<!--Start-->
<section id="hero">
    <div class="container">
        <div class="hero__wrapper">
        <div class="hero__left">
            <div class="hero__left__wrapper">
                <h1 class="hero__heading">Our purpose is to recommend makeup cources as the user prefer to watch</h1>
                <p class="hero__info">Our intention is to optimize your time allocation, allowing you to allocate valuable moments towards.
                    </p>
                <div class="button__wrapper">
                    <a href="services.php" class="btn primary_btn">Recommend Me</a>
                    
                </div>
            </div>
        </div>
        <div class="hero__right">
            <div class="hero__imWrapper">
                 <img src="../Images/salon.jpg" alt="facilities" style="height: 40%;">
            </div>
        </div>
       </div>
      </div>

</section>
<!--End-->
<!--Info Section-->
<section id="storeInfo">
    <div class="container">
        <div class="storeInfo__wrapper">
            <div class="storeInfo__item">
                <div class="storeInfo__icon">
                    <img src="../Images/nc.png" alt="icon">
                </div>
                <h3 class="storeInfo__title">
                    7AM - 8PM
                </h3>
                <p class="storeInfo__text">
                    Opening Hour
                </p>
            </div>
                
                        <div class="storeInfo__item">
                            <div class="storeInfo__icon">
                                <img src="../Images/location.png" alt="icon">
                            </div>
                        
                            <h3 class="storeInfo__title">
                             Solteemode
                            </h3>
                            <p class="storeInfo__text">
                                Address
                            </p>
                        
                        </div>
            
                                    <div class="storeInfo__item">
                                        <div class="storeInfo__icon">
                                            <img src="../Images/call.png" alt="icon">
                                        </div>
                                        <h3 class="storeInfo__title">
                                            01-24553210
                                        </h3>
                                        <p class="storeInfo__text">
                                            Call Now
                                        </p>
                                    </div>
        </div>
    </div>

</section>

<!--End Info section-->
<!--Speciality-->
<section id="ourSpecials">
    <div class="container">
        <div class="ourSpecials__wrapper">
            <div class="ourSpecials__left">
                <div class="ourSpecials__service" onclick="window.location.href='bookings.php?service=Creative Makeup'">
                    <div class="ourSpecials__service__img">
                        <img src="../Images/hair.png" alt="spa">

                    </div>
                    <h2 class="ourSpecials__service__title">Bridal Makeup</h2>
                    <h3 class="ourSpecials__service__price">Rs.5000
                    <div class="ourSpecials__service__stars">
                    
                    </div>
                    <p class="ourSpecials__service__text">
                    Hair is the main part of us,
                    every dress and makeup matches if hair is perfect.
                    
                    </p>
                </div>
        
            
                <div class="ourSpecials__service" onclick="window.location.href='bookings.php?service=Nail Extension'">
                    <div class="ourSpecials__service__img">
                        <img src="../Images/nails.png" alt="spa">

                    </div>
                    <h2 class="ourSpecials__service__title">Nail Extension</h2>
                    <h3 class="ourSpecials__service__price">Rs.5000</h3>
                    <div class="ourSpecials__service__stars">
                
                    </div>
                    <p class="ourSpecials__service__text">
                  It provides services for a fee or any cosideration or exchange to cut,
                  shape or to enhance the appaearance of the nails.It includes the application and removal of
                  sculptured or artificial nails.
                    </p>
          
          
                </div>
            
        </div>

            
        <div class="ourSpecials__right">
      <h2 class="ourSpecials__title">Our Speciality </h2>
        <p class="ourSpecials__text">
        All these makeup and hair videos are provided to you for learning and creating same looks without getting any trouble while searching those kind of makeup vidos.     
   </p>
   <a href="./Services.php" class="btn primary_btn"> Book</a>

     </div>
    </div>
    </div>

</section>
<!--End with speciality-->

<!-- Top   Services-->
<section id="Grid">
<div class="container">
    <h2 class="serviceGrid__title">
        Top Facilities
    </h2>
    <div class="serviceGrid__wrapper" >
        <div class="serviceGrid__item" onclick="window.location.href='bookings.php?service=Hair Styling'">
            <div class="serviceGrid__item__img">
                <img src="../Images/newcreative.jpg" alt="service">
            </div>
            <div class="serviceGrid__item__info">
                <h3 class="serviceGrid__item__title">Creative Makeup
                </h3>
                
                    
                </div>
            </div>
            <div class="serviceGrid__item" onclick="window.location.href='bookings.php?service=Facials and Skincare Treatment'">
                <div class="serviceGrid__item__img">
                    <img src="../Images/Austhetic.jpg" alt="service">
                </div>
                <div class="serviceGrid__item__info">
                    <h3 class="serviceGrid__item__title">Austhetic makeup looks
                    </h3>
                    
                        
                    </div>
                </div>
                

    </div>
    </div>

</section>
<!--ENd -->
<!--event section-->
<section id="eventsMedia">
<div class="container">
 <div class="eventsMedia__wrapper">
    <div class="eventsMedia__1">
        <img src="../Images/1.png" alt="events">
        
    </div>
    <div class="eventsMedia__2">
        <img src="../Images/bridal.png" alt="events2">

    </div>
    </div>  

</div>
</section>
<!--end-->
<!--Events Info section-->
<section id="eventsInfo">
    <div class="container">
     <div class="eventsInfo__wrapper">
        <div class="eventsInfo__left">
            <div class="eventsInfo__item" onclick="window.location.href='bookings.php?service=Party Hairstyles'">
                <div class="eventsInfo__item__img">
                    <img src="../Images/2.png" alternative="1">
                </div>
                <div class="eventsInfo__item__info">
                    <h2 class="eventsInfo__item__title">Party Hairstyles</h2>
                    <p class="eventsInfo__item__text">
                    Makeup cource recomendation system will help you to do your hair and makeup do more easier and look beautiful for your any special day.
                    You dont have to waste your time in searching different videos foryour hairs on youtube or instagram you can directly go to our website and search for any hairstyles by your look.
                    </p>
                </div> 
            </div>
        
            
            <div class="eventsInfo__item" onclick="window.location.href='bookings.php?service=Lashes Extension'">
                <div class="eventsInfo__item__img">
                    <img src="../Images/5.png" alternative="1">
                </div>
                <div class="eventsInfo__item__info">
                    <h2 class="eventsInfo__item__title">Lashes Extension</h2>
                    <p class="eventsInfo__item__text">
                        We have also added the features of lashes extension.Eyelash extensions are semi-permanent 
                        fibers that are attached to your natural eyelashes in order to make your lash fringe look longer.
                    </p>
                </div> 
            </div>
            </div>

        
            <div class="eventsInfo__right">
                <h2 class="eventsInfo__title">
                    Start Booking
                </h2>
                <p class="eventsInfo__text">
                    Book for your services instantly through Makeup class Management for
                    your self care day. 
                </p>
                <a href="./Contact.php" class="btn primary_btn">
                    Contact Now
                </a>
            </div>
            
            </div>
            </div>
            </section>
            
        
<!--End-->
<!--Newsletter section-->
<section id="newsletter">
    <div class="container">
        <div class="newsletter__wrapper">
            <div class="newsletter__info">
                <h2 class="newsletter__title">Join Latest News</h2>
                    <p class="newsletter__text"> Get Notified with the latets news
                        and recent offers from the "Makeup Class Management". 
                    </p>
                    </div>
                    <div class="newsletter__form">
                        <form>
                            
                                <a href="login.php" class="btn primary_btn"> Click Here to Create New Account</a>
                        </form>

                    </div>
                </div>
                </div>
    
</section>
<!--End-->




<!--Footer-->
<footer>
    <div class="container">
        <div class="footer__wrapper">
            <div class="footer__col1">
                <div class="footer__logo">
                <img src="../Images/logs.png" alt="Makeup Class Management">
                </div>
                <p class="footer__desc">
                    Life is just so beautiful like you, just need some time to freshen up.
                </p>
                <div class="footer__socials">
                    <h4 class="footer__socials__titles">Follow us</h4>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                >
                                <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                            </svg>
                            </a>

                            <a href="#">
                                <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                              >
                                <rect x="2" y="2" width="20" height="20" rx="5" ry="5" />
                                <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                                <line x1="17.5" y1="6.5" x2="17.51" y2="6.5" />
                              </svg>
                            </a>

                            <a href="#">
                                <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                              >
                                <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z" />
                              </svg>

                            </a>
                </div>
            </div>
            <div class="footer__col2">
                <h3 class="footer__text__title">
                    Links
                </h3>
                <ol class="footer__text">
                    <li>
                        <a href="Home.php">Home</a>
                    </li>
                    <li>
                        <a href="RecommendClass.php">Recommend</a>
                    </li>
                    <li>
                        <a href="About.php">About US</a>
                    </li>
                    
                    <li>
                        <a href="Contact.php">Contact</a>
                    </li>
                    <li>
                        <a href="Login.php">Login</a>
                    </li>
                    
                    <li>
                        <a href="#">Privary and Policy</a>
                    </li>
                </ol>
            </div>
            <div class="footer__col2">
                <h3 class="footer__text__title">
                    Support
                </h3>
                <ol class="footer__text">
                    
                    <li>
                        <a href="Contact.html">Contact</a>
                    </li>
                    <li>
                        <a href="#">Support Center</a>
                    </li>
                    <li>
                        <a href="#">Feedback</a>
                    </li>
                </ol>
            </div>
            <div class="footer__col2">
                <h3 class="footer__text__title">
                    Contact
                </h3>
                <ol class="footer__text">
                    
                    <li>
                        <a href="tel:01-24553210">01-24553210</a>
                    </li>
                    <li>
                        <a href="mail to:muaworld2020@gmail.com">muaworld2020@gmail.com</a>
                    </li>
                    <li>
                        <a href="#">Solteemode,Kathmandu</a>
                    </li>
                </ol>
        </div>
    </div>
</div>
</footer>
<div id="copyright">
    <div class="container">
        <p class="copyright__text">
            
            © copyright 2022 Makeup Class Management | All rights reserved

        </p>

    </div>
</div>
<!--End of footer-->

    
</body>
</html>