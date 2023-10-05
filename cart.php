<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campus Exchange | Cart</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;0,600;1,400;1,600&family=Poppins:wght@200;400;600&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="products.css"> -->
    <link rel="stylesheet" href="cart.css">
</head>
<body>
    <div class="ellipse-1"></div>
    <div class="ellipse-2"></div>

    <div class="mainContainer">
        <!-- <div class="header">
            <a href="index.php">
                <h1>Campus Exchange</h1>
            </a>
            <div class="search-bar">
                <form action="search.php" method="post">
                    <input type="search" name = "search-input" id="" placeholder="Search for Products.. ">
                    <button type="submit" id="search-btn">Search</button>
                </form>
            </div>
            <div class="nav-btns">
                <a href="sellerProfile.php"><button id="BtnSell">Sell</button></a>
                <a href="cart.php"><button><i class="fa-solid fa-cart-shopping"></i></button></a>
                <a href="userProfile.php"><button><i class="fa-solid fa-user"></i></button></a>
            </div>
        </div> -->
        <?php
            include '_header.php';
        ?>
        <br>
        <br>
        <br>
        <p style="font-size: 50px;color: #0E457B;">My Cart</p>
        <p style="font-family: 'Poppins', sans-serif;color: red;">There is a problem with our cart - If you logout without purchasing but have contents in your cart then when you login next time then cart state won't be maintained! Please act accordingly and buy the things you want in your cart before loggin out Or just DON'T LOGOUT!! Sorry for the inconvenience caused...</p>
            <?php
                // session_start();
                if(isset($_SESSION['cart'])  && !empty($_SESSION['cart'])){
                    echo '
                    <div class="cart">
                        <div class="prodDetails">';
                        $total = 0;
                            foreach($_SESSION['cart'] as $key => $value)
                            {
                                $total = $total + (int)$value['price'];
                                $image = $value['img'];
                                echo "
                                <div class='product'>
                                    <img src='userUploads/$image' alt='hii'><br>
                                    <div class='details'>
                                        <h3>{$value['name']}</h3>
                                        <h5>{$value['price']}/-</h5>
                                        <form action='remove_item.php' method='POST'>
                                            <input type='hidden' name='item_key' value='{$value['name']}'>
                                            <button type='submit' class='removeBtn'>Remove from cart</button>
                                        </form>
                                    </div>
                                </div>
                                ";
                            }
                            echo "<div class='orderDetails'>
                                <h3 style='font-size: 50px;color: #0E457B;'>Order Details</h3>
                                <p style='font-size: 30px;color: #0E457B;'>Total Amount: $total/-</p>
                                <form action='order.php' method='POST'>
                                    <input type='hidden' name='final_amt' value='$total'>
                                    <button type='submit' class='buyBtn'>Place Order</button>
                                </form>
                                </div>
                                </div>
                                </div>";
                        
                }
                else{
                    echo "<h5 style='font-size: 50px;color: #0E457B;'>Looks like you don't have anything here yet!! Please add items to the cart!</h5>";
                }

            ?>

                <!-- <div class="product">
                    <img src="images/fashion.jpg" alt="img"><br>
                    <div class="details">
                        <h3>LEE Bomber Jacket - Black</h3>
                        <h5>₹998/-</h5>
                        <button type="submit" class="buyBtn">Remove from cart</button>
                    </div>
                </div>
                <div class="product">
                    <img src="images/fashion.jpg" alt="img"><br>
                    <div class="details">
                        <h3>LEE Bomber Jacket - Black</h3>
                        <h5>₹998/-</h5>
                        <button type="submit" class="buyBtn">Remove from cart</button>
                    </div>
                </div>
                <div class="product">
                    <img src="images/fashion.jpg" alt="img"><br>
                    <div class="details">
                        <h3>LEE Bomber Jacket - Black</h3>
                        <h5>₹998/-</h5>
                        <button type="submit" class="buyBtn">Remove from cart</button>
                    </div>
                </div>
                <div class="product">
                    <img src="images/fashion.jpg" alt="img"><br>
                    <div class="details">
                        <h3>LEE Bomber Jacket - Black</h3>
                        <h5>₹998/-</h5>
                        <button type="submit" class="buyBtn">Remove from cart</button>
                    </div>
                </div>
                <div class="product">
                    <img src="images/fashion.jpg" alt="img"><br>
                    <div class="details">
                        <h3>LEE Bomber Jacket - Black</h3>
                        <h5>₹998/-</h5>
                        <button type="submit" class="buyBtn">Remove from cart</button>
                    </div>
                </div> -->
            
</body>
</html>