<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campus Exchange | Products</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;0,600;1,400;1,600&family=Poppins:wght@200;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="products.css">
</head>
<body>
    <div class="mainContainer">
        <div class="header">
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
                <a href="home.php"><button><i class="fa-solid fa-cart-shopping"></i></button></a>
                <a href="userProfile.php"><button><i class="fa-solid fa-user"></i></button></a>
            </div>
        </div>
        <div class="product">
            <div class="imgContainer">
                <?php
                    if (isset($_GET['name'])) {
                        $name = $_GET['name'];
                        // echo $key;
                    }
                    echo "the name of the product is: '$name'";
                ?>

                <img src="images/sports.jpg" alt="img"><br>
                <a href="orders.php"><button type="submit" class="buyBtn">BUY NOW</button><br></a>
                <a href="cart.php"><button type="submit" class="addtoCartBtn">ADD TO CART</button></a>
            </div>
            <div class="prodDesc">
                <h6>SONY ZV-E10 Mirrorless Camera</h6>
                <h2>₹58924/-</h2>
                <p>Highlights
                    <li>4K video with oversampling for greater detail, Easy, impressive vlogs, One-touch control of background blurring, Interchangeable-lens camera for vlogging, Flexible connectivity for easy sharing, Designed for easy selfie and vlog shoots, Protection against recording failures, Fast, precise autofocus, Leave it up to the camera to focus on you, Easy background blur control, Natural-looking skin tones, Smooth and stable images even while walking, Easy sped-up and slowed-down motion, Clear recording even outdoors, For even higher audio quality, Optional grip for easy one-handed operation, Add special effects in-camera, Edit movies from your smartphone, Create time-lapse movies, Wi-Fi & Bluetooth
                        Effective Pixels: 24.2 MP
                        Sensor Type: CMOS
                        WiFi Available
                        4k</li>

                </p>
            </div>
        </div>
</body>
</html>