<?php
session_start();
session_destroy(); 
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial scale=1.0">
        <title>Clothes Shop</title>
        <link rel="stylesheet" href="style.css">
        <!-- FontAwesome Icons -->
        <script src="https://kit.fontawesome.com/16dc81ab29.js" crossorigin="anonymous"></script>
        <!--Google Font-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
        
            <div class="container">
                <div class="navbar">
                    <div class="logo">
                        <img src="images/logo.png" width="125px">
                    </div>
                    <nav>
                        <ul id="MenuItems">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="products.html">Products</a></li>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="membership.html">Profile</a></li>
                        </ul>
                    </nav>
                    <a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
                    <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
                </div>
            </div>
            <div class="header">
                <div class="container">
                    <div class="row">
                        <div class="col-2">
                            <h1>Give Your Workout <br> A New Style!</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, amet. <br> Sint harum quas voluptatum culpa sed cupiditate blanditiis, fuga alias.</p>
                            <a href="products.html" class="btn">Explore Now</a>
                        </div>
                        <div class="col-2">
                            <img src="images/image1.png">
                        </div>
                    </div>
                </div>
            </div>    
                     
       
<!--Banner1-->
    <div class="banner1">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="images/banner1.png" style="height:auto ; width:500px;">
                </div>
                <div class="col-2">
                    <h1>Check Out Our <br> Latest Releases!</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, amet. <br> Sint harum quas voluptatum culpa sed cupiditate blanditiis, fuga alias.</p>
                    <a href="products.html" class="btn">Browse Here</a>
                </div>
            </div>
        </div>    
    </div>

<!--Banner2-->
    <div class="banner2">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <h1 style="padding-top:70px ;">Our Mission</h1>
                    <p style="color:black; padding-bottom: 70px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, amet. <br> Sint harum quas voluptatum culpa sed cupiditate blanditiis, fuga alias. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, amet. <br> Sint harum quas voluptatum culpa sed cupiditate blanditiis, fuga alias. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, amet. <br> Sint harum quas voluptatum culpa sed cupiditate blanditiis, fuga alias.<br> <a href="about.html" class="btn" style="text-align: center ;">Read More</a></p>
                </div>
                <div class="col-2">
                
                </div>
        </div>
    </div>
  

<!--Footer-->     
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>
                        Download Our App
                    </h3>
                    <p>
                        Find AthletesWear on Android and IOS.
                    </p>
                    <div class="app-logo">
                        <img src="images/play-store.png">
                        <img src="images/app-store.png">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="images/logo-white.png">
                </div>
                <div class="footer-col-3">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="products.html">Products</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="membership.php">Profile</a></li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Social Media</h3>
                    <p>Connect with us for the latest trends</p>
                    <ul>
                       <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                       <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                       <li><a href="#"><i class="fa-brands fa-tiktok"></i></a></li>
                       <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">
                &copy; Copyright 2022 
            </p>
        </div>
    </div>
        <script type = "text/javascript"  src = "menu.js" >
        </script>
    </body>
</html>