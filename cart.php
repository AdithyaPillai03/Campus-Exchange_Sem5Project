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
        <div class="header">
            <a href="index.php">
                <h1>Campus Exchange</h1>
            </a>
            <div class="search-bar">
                <form action="search.php" method="post">
                    <input type="search" name="search-input" id="" placeholder="Search for Products.. ">
                    <button type="submit" id="search-btn">Search</button>
                </form>
            </div>
            <div class="nav-btns">
                <a href="sellerProfile.php"><button id="BtnSell">Sell</button></a>
                <a href="cart.php"><button><i class="fa-solid fa-cart-shopping"></i></button></a>
                <a href="userProfile.php"><button><i class="fa-solid fa-user"></i></button></a>
            </div>
        </div>
        <br>
        <br>
        <br>
        <p style="font-size: 50px;color: #0E457B;">My Cart</p>
        <div class="cart">
            <div class="prodDetails">
                <div class="product">
                    <img src="images/electonics.jpg" alt="hii"><br>
                    <div class="details">
                        <h3>SONY ZV-E10 Mirrorless Camera</h3>
                        <h5>₹58924/-</h5>
                        <button type="submit" class="buyBtn">Remove from cart</button>
                    </div>
                </div>
                <div class="product">
                    <img src="images/speakers.png" alt="img"><br>
                    <div class="details">
                        <h3>Cricket bat - willow wood</h3>
                        <h5>₹3999/-</h5>
                        <button type="submit" class="buyBtn">Remove from cart</button>
                    </div>
                </div>
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
            </div>
            <div class="orderDetails">
                <h3 style="font-size: 50px;color: #0E457B;">Order Details</h3>
                <p style="font-size: 30px;color: #0E457B;">Total Amount: ₹63921/-</p>
                <button type="submit" class="buyBtn">Place Order</button>
            </div>
        </div>
</body>
</html>