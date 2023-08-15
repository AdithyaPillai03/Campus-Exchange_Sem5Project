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
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="mainContainer">
        <div class="header">
            <a href="index.html">
                <h1>Campus Exchange</h1>
            </a>
            <div class="search-bar">
                <input type="search" id="search-input" placeholder="Search for Products.. ">
                <a href="products.html"><button type="submit" id="search-btn">Search</button></a>
            </div>
            <div class="nav-btns">
                <a href="sellerProfile.php"><button id="BtnSell">Sell</button></a>
                <a href="home.html"><button><i class="fa-solid fa-cart-shopping"></i></button></a>
                <a href="userProfile.html"><button><i class="fa-solid fa-user"></i></button></a>
            </div>
        </div>

        <div class="hero">
            <div class="hero-content">
                <div class="hero-heads">
                    <div class="head1">
                        <h1>BUY, SELL, RENT,</h1>
                    </div>
                    <div class="head2">
                        <h1>CONNECT!!</h1>
                    </div>
                </div>
                <div class="sub-head">
                    <h6>FIND WHAT YOU NEED,</h6>
                    <h6>SELL WHAT YOU DON'T</h6>
                </div>
                <div class="hero-buttons">
                    <a href="signup.php"><button id="Join-Cta">Join Now</button></a>
                    <a href="allDeals.html"><button id="Deals-Cta">Discover deals</button></a>
                </div>
            </div>
                <img id="hero-image" src="images/shopping_cart.jpg" alt="shopping_cart">
        </div>

        <div class="categories">
            <h1>Shop By Category</h1>
            <div class="cat">
                    <div class="cat1">
                        <a href="categoryBooks.html">
                            <img src="images/stackOfBooks.jpg" alt="stackOfBooks">
                            <h2>Books</h2>
                        </a>
                    </div>
                    <div class="cat1">
                        <a href="categoryElectronics.html">
                            <img src="images/electonics.jpg" alt="electonics">
                            <h2>Electronics</h2>
                        </a>
                    </div>
                    <div class="cat1">
                        <a href="categoryFashion.html">
                            <img src="images/fashion.jpg" alt="fashion">
                            <h2>Fashion</h2>
                        </a>
                    </div>
                    <div class="cat1">
                        <a href="categorySports.html">
                            <img src="images/sports.jpg" alt="sports">
                            <h2>Sports</h2>
                        </a>
                    </div>
            </div>
        </div>

        <div class="whyUs">
            <h1>Why Choose Us?</h1>
            <div class="reasons">
                <div class="reason">
                    <img src="images/cartSVG2.svg" alt="sell">
                    <h2>Sell Stuff</h2>
                    <p>Turn unused items into cash with ease and convenience.</p>
                </div>
                <div class="reason">
                    <img src="images/rentSVG2.svg" alt="rent">
                    <h2>Rent With Ease</h2>
                    <p> Access a wide range of products for short-term use.</p>
                </div>
                <div class="reason">
                    <img src="images/verifiedUserSVG.svg" alt="user">
                    <h2>Verified Profiles</h2>
                    <p>Trustworthy interactions with authenticated user profiles.</p>
                </div>
            </div>
        </div>

        <div class="becomeSellerCta">
            <h1>Become A Seller</h1>
            <p>Turn your unused items into cash effortlessly. Become a seller on our marketplace app and connect with a vibrant community of buyers. List, sell, and earn with ease. Join Today!</p>
            <a href="register.html"><button>START SELLING NOW</button></a>
        </div>
    </div>
</body>
</html>