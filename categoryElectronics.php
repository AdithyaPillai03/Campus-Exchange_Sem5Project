<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campus Exchange</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;0,600;1,400;1,600&family=Poppins:wght@200;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="categoryStyle.css">
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
                <input type="search" id="search-input" placeholder="Search for Products.. ">
                <a href="products.php"><button type="submit" id="search-btn">Search</button></a>
            </div>
            <div class="nav-btns">
                <a href="sellerProfile.php"><button id="BtnSell">Sell</button></a>
                <a href="home.php"><button><i class="fa-solid fa-cart-shopping"></i></button></a>
                <a href="userProfile.php"><button><i class="fa-solid fa-user"></i></button></a>
            </div>
        </div>
        <div class="Category">
            <h1>Shop Electronics</h1>
            <div class="row">
                <a href="photography.php">
                    <div class="imgcontainer">
                        <img src="images/sonyZ10.png" alt="b">
                        <h6>Photography</h6>
                    </div>
                </a>
                
                <a href="mobile.php">
                    <div class="imgcontainer">
                        <img src="images/mobileAccessories2.png" alt="b">
                        <h6>Mobile accessories</h6>
                    </div>
                </a>
            </div>
            <div class="row">
                <a href="speakers.php">
                    <div class="imgcontainer">
                        <img src="images/speakers.png" alt="b">
                        <h6>Speakers</h6>
                    </div>
                </a>
                
                <a href="gaming.php">
                    <div class="imgcontainer">
                        <img src="images/gaming.png" alt="b">                        
                        <h6>Gaming</h6>
                    </div>
                </a>
                
            </div>
                
        </div>

    </div>
</body>
</html>
