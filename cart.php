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
            echo '<script>alert("Item Has Been Added to Shopping Cart")</script>';
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

if(isset($_POST["checkout"])) {
	$to = 'f32ee@localhost';
	$subject = 'Thank you for ordering from AthletesWear!';
	$message = 'Your items will be arriving in 2 weeks!';
	$headers = 'From: f32ee@localhost' . "\r\n" .
	'Reply-To: f32ee@localhost' . "\r\n" .
	'X-Mailer: PHP/' . phpversion();
	mail($to, $subject, $message, $headers,
	'-ff32ee@localhost');
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

    <div class="small-container cart-page">
		<h2 class="title">Order Details</h2>
		<table style="overflow-x:auto;">
			<tr>
				<th>Item Image</th>
				<th>Item Name</th>
				<th>Quantity</th>
				<th>Price</th>
				<th>Total</th>
				<th>Action</th>
			</tr>
					<?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					?>
					<tr>
						<td><img src="images/<?php echo $values["item_img"]; ?>" width="300" height="auto"></td>
						<td><?php echo $values["item_name"]; ?></td>
						<td><?php echo $values["item_quantity"]; ?></td>
						<td> <?php echo $values["item_price"]; ?></td>
						<td> <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
						<td><a href="product-details.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
					</tr>
					<?php
							$total = $total + ($values["item_quantity"] * $values["item_price"]);
						}
					?>
					<tr>
						<td colspan="3" >Total</td>
						<td ></td>
						<td><?php echo number_format($total, 2); ?></td>
						<form method="post" action="logout.php">
							<td>
								<input type = "submit" name="checkout" value="Check Out" onclick= CheckOut() class="btn" style="border:none;"/>
							</td>
						</form>
					</tr>
					<?php
					}
					?>		
		</table>
	</div>  
    <script type = "text/javascript"  src = "menu.js" >
    </script> 
	<script type = "text/javascript"  src = "checkout.js" >
    </script> 
    </body>
</html>






