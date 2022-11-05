<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Clothes Shop</title>
        <link rel="stylesheet" href="style.css">
        <!-- FontAwesome Icons -->
        <script src="https://kit.fontawesome.com/16dc81ab29.js" crossorigin="anonymous"></script>
        <!--Google Font-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <script type="text/javascript" src="jobs_validator.js"></script>
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
                        <li><a href="membership.php">Membership</a></li>
                    </ul>
                </nav>
                <a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
                <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
            </div>
        </div>  
     
<!--Banner2-->
<div class="banner1" style="padding-top:70px ; padding-bottom:20px;">
    <div class="small-container">
        <div class="row">
            <div class="col-2">
                <h1>Join Us</h1>
                <p>We’re kicking off the party with exclusive product drops, Members-only experiences and more.
                    Sign up now to enjoy Member-exclusive promos and rewards when you shop with us.
                </p>
            </div>
            <div class="col-2">
                <img src="images/member.png" width="300px" height="auto" style="padding-left: 30px; margin-left:50px">
            </div>
        </div>
    </div>    
</div>        

<!--Offer--> 
<div class="banner1" style="padding-top:70px ; padding-bottom:20px;">
    <div class="small-container">
        <hr style="margin-bottom:20px">
        <div class="row">
            <div class="col-2">
                <img src="images/exclusive.png" class="offer-img" style="width: 400px;">
            </div>
            <div class="col-2">
                <p>Member's Exclusive</p>
                <h1>Smart Band 4</h1>
                <p>Become a member and get access to member's exclusive products & 15% off.</p>
            </div>
        </div>
    </div>
</div>  

<!--Sign up form-->
<div class="small-container" style="margin-bottom: 70px;">
    <hr style="margin-top:10px; margin-bottom:125px;">
    <div class="row">
        <div class="col-2">
            <h1>Sign Up For Free!</h1>
            <form action="insert.php" method="post" id="member">
                <label>Name: </label><input type = "text" name= "name" id="myName" onchange="chkName(event)" required><br>
                <label>Email: </label><input type = "email" name= "email" id="myEmail" onchange="chkEmail(event)" required><br>
                <label>Contact: </label><input type = "text" name= "phone" id="phone" onchange="chkPhone(event)" required><br>
                <button type="submit" name="submit" class=btn style="border:none; margin-top:30px; font-size: 17px;">Sign Up Now</button>
            </form>
        </div> 
        <div class="col-2">
                <img src="images/member3.png"  width="300px" height="auto" style="padding-left: 30px; margin-left:80px">
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
    <script type="text/javacript" src="jobs_events.js"></script>
    <script type = "text/javascript"  src = "menu.js" ></script>
    </body>
</html>