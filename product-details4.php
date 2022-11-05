<?php
session_start();
// Create connection
$conn = mysqli_connect("127.0.0.1", "root", "", "php_shopping_cart");

if(isset($_POST["add_to_cart"]))
{
    // checks if session has data with id shopping_cart
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
            // if item not added
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"],
                'item_img'		    =>	$_POST["hidden_img"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array; //store items details
            echo '<script>alert("Item Has Been Added To Shopping Cart")</script>';
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else // if no data
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"],
            'item_img'		    =>	$_POST["hidden_img"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
        echo '<script>alert("Item Has Been Added To Shopping Cart")</script>';
	}
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="cart.php"</script>';
			}
		}
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

<?php
$sql = "SELECT * FROM products WHERE id = 4";
$result = mysqli_query($conn, $sql); 
$row = mysqli_fetch_assoc($result)
// echo $row['id'] ." ". $row['name'] ." ". $row['image'] ." ". $row['price']."<br>";
?>

<!--Product Details-->

        <div class="small-container single-product">
            <div class="row">
                <div class="col-2">
                    <img src="images/<?php echo $row['image']?>" width="100%" id="product-img">
                    <div class="small-img-row">
                        <div class="small-img-col">
                            <img src="images/women2-details1.png" width="100%" class="small-img">
                        </div>
                        <div class="small-img-col">
                            <img src="images/women2-details2.png" width="100%" class="small-img">
                        </div>
                        <div class="small-img-col">
                            <img src="images/women2-details3.png" width="100%" class="small-img">
                        </div>
                        <div class="small-img-col">
                            <img src="images/women2-details4.png" width="100%" class="small-img">
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <form method="post" action="product-details4.php?action=add&id=<?php echo $row["id"]; ?>">
                    <p>Prducts / T-Shirt</p>
                    <h1><?php echo $row['name']?></h1>
                    <h4>$<?php echo $row['price']?></h4>
                    <select id="size" required>
                        <option disabled>Select Size</option>
                        <option value="1">Large</option>
                        <option value="2">Medium</option>
                        <option value="3">Small</option>
                    </select>
                    <input type="number" id="quantity" name="quantity" value="1" min="1" max="300">
                    <input type="hidden" name="hidden_name"  value='<?php echo $row['name']?>'> 
                    <input type="hidden" name="hidden_price"  value='<?php echo $row['price']?>'>
                    <input type="hidden" name="hidden_img"  value='<?php echo $row['image']?>'>
                    <input type="submit" name="add_to_cart" class="btn" style="border:none;" value="Add to Cart" />
                    </form>
                    <h3>Product Details</h3>
                    <p>Made with a lightweight and airy dri-fit material, this sleeveless tee keeps things breezy and relaxed. Simply a must-have for your next adventure.</p>
                </div>
            </div>
        </div>

<!--Products below-->
        <div class="small-container">
            <h2 class="title" style="margin-top: 30px;">Related Products</h2>        
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
                    <p>$50.00</p>
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
                        <i class="fa-regular fa-star"></i>
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
    <script type = "text/javascript"  src = "productimg.js" >
    </script>
    </body>
</html>