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
    <title>Project-Makeup Video Rmendation System</title>
    <link rel="stylesheet" href="css/All.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/component.css">
    <link rel="stylesheet" href="css/about.css">
    
</head>
<body>

<!--NAV Section-->
<div class="nav">
    <div class="container">
        <div class="nav__wrapper">
            <a href="./home.php" class="logo">
                <img src="../Images/logs.png" alt="Salon Client">
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
<!--Our story-->
<section id="ourStory">
    <div class="container">
        <div class="ourStory__wrapper">
            <div class="ourStory__img">
                <img src="../Images/download.png" alt="story">
            </div>
            <div class="ourStory__info">
                <h3 class="ourStory__title">
                    Our Story
                </h3>
                <p class="ourStory__subtitle">
                    Started since 2015
                </p>
                <p class="ourStory__text">
 Welcome to our makeup class recommendation system! We are here to help you find the perfect makeup classes to enhance your skills and knowledge in the world of makeup artistry. Whether you're a beginner looking to learn the basics or an experienced makeup artist seeking advanced techniques, our system is designed to assist you in finding the ideal classes for your needs.
<br>
<br>
Our recommendation system leverages a vast database of reputable makeup schools, academies, and workshops worldwide, ensuring that you have access to a diverse range of options. We understand that everyone has unique preferences and objectives

                </p>
                
            </div>
        </div>
    </div>
</section>
<!--End-->
<!--Goals-->
<section id="ourGoals">
    <div class="container">
        <div class="ourGoals__info">
            <h3 class="ourGoals__title">
                Our Goals
            </h3>
            <p class="ourGoals__text">
                Our system was design for providing services to the client at their 
                correct time without having nay delay.Motive is to provide a great 
                service so that the client can come back time and time again.Our 
                system was design by watching ongoing time where people are always on rush 
                and cant give time for themselves also to those young generation who wants to learn about differnt beauty things through this they can also use their 
                free time
                for themselves and by learning different skills through this website.This 
                allows the clients to manage their appointments according to 
                their own preference which helps to increase the amount of 
                customer satisfaction that they 
                feel. Happy customers mean repeat business and better reviews for
                 the company.
                 Due to appointment management systems, you can make sure that the whole
                  working day is scheduled in such a way that you make the most of your 
                  time and that there is no time during the day that you will be idle or
                   wasting time.
                  This is a very good system for the time management of the whole company.
                  We wanted to add some more advance features in upcoming years so that our client 
                  get all services at one time

            </p>
        </div>
        <div class="ourGoals__img__wrapper">
            <div class="ourGoals__img1">
                <img src="../Images/1.jpg" alt="1">
            </div>
            <<!-- div class="ourGoals__img2">
                <img src="../Images/12.png" alt="2">
            </div> -->
            <div class="ourGoals__img3">
                <img src="../Images/creative.jpg" alt="2">
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
                <img src="../Images/logs.png" alt="Makeup video recommend">
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
                        <a href="Services.php">Services</a>
                    </li>
                    <li>
                        <a href="About.php">About Us</a>
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
                        <a href="mail to:mua2020@gmail.com">mua2020@gmail.com</a>
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