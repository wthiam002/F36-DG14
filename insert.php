<?php
session_start();
// Create connection
$conn = mysqli_connect("127.0.0.1", "root", "", "php_shopping_cart");

if(isset($_POST['submit'])){
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty ($_POST['phone'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        $query = "insert into member(name,email,number) values ('$name', '$email', '$phone')";
        $run = mysqli_query($conn,$query) or die(mysqli_error());
    }
}

?>

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
    </head>
    <body>
        <script>
            alert("Thank you for signing up with us!")
        </script>
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
                        <li><a href="membership.php">Profile</a></li>
                    </ul>
                </nav>
                <a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
                <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
            </div>
        </div>  
<!--Categories-->
        <div class="categories">
            <div class="small-container">
                <h2 class="title">Categories</h2>
                <div class="row">
                    <div class="col-3">
                        <a href="men.html">
                        <img src="images/category-1.jpg">
                        </a>
                        <h4>Men</h4>
                    </div>
                    <div class="col-3">
                        <a href="women.html">
                        <img src="images/category-3.jpg">
                        </a>
                        <h4>Women</h4>
                    </div>
                    <div class="col-3">
                        <a href="all.html">
                        <img src="images/category-2.jpg">
                        </a>
                        <h4>All</h4>
                    </div>
                </div>
            </div>    
        </div> 

<!--Featured products-->
        <div class="small-container">
            <h2 class="title">Featured Products</h2>
            <div class="row">
                <div class="col-4">
                    <a href="product-details.php">
                    <img src="images/men1.png">
                    </a>
                    <h4>Nike Men White Hoodie</h4>
                    <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <p>$50.00</p>
                </div>
                <div class="col-4">
                    <a href="product-details2.php">
                    <img src="images/women1.png">
                    </a>
                    <h4>Nike Women Exercise Tee</h4>
                    <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <p>$50.00</p>
                </div>
                <div class="col-4">
                    <a href="product-details3.php">
                    <img src="images/men2.png">
                    </a>
                    <h4>Nike Men Grey Hoodie</h4>
                    <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <p>$50.00</p>
                </div>
                <div class="col-4">
                    <a href="product-details4.php">
                    <img src="images/women2.png">
                    </a>
                    <h4>Nike Women Sleeveless Exercise Tee</h4>
                    <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <p>$50.00</p>
                </div>
            </div>

<!--Latest release-->            
            <div>
                <h2 class="title">Latest Release</h2>
            <div class="row">
                <div class="col-4">
                    <img src="images/latest1.png">
                    <h4>Blue Nike Globe Shirt</h4>
                    <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <p>$59.00</p>
                </div>
                <div class="col-4">
                    <img src="images/latest2.png">
                    <h4>Air Jordan Flight S3</h4>
                    <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <p>$182.00</p>
                </div>
                <div class="col-4">
                    <img src="images/latest3.png">
                    <h4>Joggers Slimfit</h4>
                    <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <p>$89.00</p>
                </div>
                <div class="col-4">
                    <img src="images/latest4.png">
                    <h4>Jordan Super Play J Balvin</h4>
                    <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <p>$99.00</p>
                </div>
                <div class="col-4">
                    <img src="images/latest5.png">
                    <h4>Red Printed Tee</h4>
                    <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <p>$50.00</p>
                </div>
                <div class="col-4">
                    <img src="images/latest6.png">
                    <h4>Red Printed Tee</h4>
                    <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <p>$50.00</p>
                </div>
                <div class="col-4">
                    <img src="images/latest7.png">
                    <h4>Red Printed Tee</h4>
                    <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <p>$50.00</p>
                </div>
                <div class="col-4">
                    <img src="images/latest8.png">
                    <h4>Red Printed Tee</h4>
                    <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <p>$50.00</p>
                </div>
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