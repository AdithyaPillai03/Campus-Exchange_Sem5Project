<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campus Exchange | Deals</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;0,600;1,400;1,600&family=Poppins:wght@200;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="SubPageStyle.css">
</head>
<body>
    <div class="ellipse-1"></div>
    <div class="ellipse-2"></div>
    <div class="mainContainer">
        <?php
            include '_header.php';
        ?>
        <div class="productCategories">
            <div class="ElectronicsCategory">
                <h1>Best of Electronics</h1>
                <div class="images">
                    <a href="individualCategoryItems.php?key=photography">
                        <div class="imgcontainer">
                            <img src="images/sonyZ10.png" alt="b">
                            <h6>Photography</h6>
                        </div>
                    </a>
                    <a href="individualCategoryItems.php?key=mobile">
                        <div class="imgcontainer">
                            <img src="images/mobileAccessories2.png" alt="b">
                            <h6>Mobile accessories</h6>
                        </div>
                    </a>
                    <a href="individualCategoryItems.php?key=speakers">
                        <div class="imgcontainer">
                            <img src="images/speakers.png" alt="b">
                            <h6>Speakers</h6>
                        </div>
                    </a>
                    <a href="individualCategoryItems.php?key=gaming">
                        <div class="imgcontainer">
                            <img src="images/gaming.png" alt="b">                        
                            <h6>Gaming</h6>
                        </div>
                    </a>
                </div>
            </div>
            <div class="BooksCategory">
                <h1>Best of Books</h1>
                <div class="images">
                    <a href="individualCategoryItems.php?key=entrance">
                        <div class="imgcontainer">
                            <img src="images/entranceBooks.png" alt="b">                        
                            <h6>Entrance</h6>
                        </div>
                    </a>
                    <a href="individualCategoryItems.php?key=comics">
                        <div class="imgcontainer">
                            <img src="images/kidsBooks.png" alt="b">
                            <h6>Comics</h6>
                        </div>
                    </a>
                    <a href="individualCategoryItems.php?key=self-help">
                        <div class="imgcontainer">
                            <img src="images/books.png" alt="b">                        
                            <h6>Self-Help</h6>
                        </div>
                    </a>
                    <a href="individualCategoryItems.php?key=fantasy">
                        <div class="imgcontainer">
                            <img src="images/fantasyBooks.png" alt="b">
                            <h6>Fantasy</h6>
                        </div>
                    </a>
                </div>
            </div>
            <div class="FashionCategory">
                <h1>Best of Fashion</h1>
                <div class="images">
                    <a href="individualCategoryItems.php?key=mens-tshirt">
                        <div class="imgcontainer">
                            <img src="images/mensTshirt.png" alt="b">
                            <h6>Mens Tshirts</h6>
                        </div>
                    </a>
                    <a href="individualCategoryItems.php?key=jeans">
                        <div class="imgcontainer">
                            <img src="images/mensJeans.png" alt="b">
                            <h6>Mens Jeans</h6>
                        </div>
                    </a>
                    <a href="individualCategoryItems.php?key=sarees">
                        <div class="imgcontainer">
                            <img src="images/womensSarees.png" alt="b">
                            <h6>Sarees</h6>
                        </div>
                    </a>
                    <a href="individualCategoryItems.php?key=kurtas">
                        <div class="imgcontainer">
                            <img src="images/mensKurta.png" alt="b">
                            <h6>Mens kurtas</h6>
                        </div>
                    </a>
                </div>
            </div>
            <div class="SportsCategory">
                <h1>Best of Sports</h1>
                <div class="images">
                    <a href="individualCategoryItems.php?key=cricket">
                        <div class="imgcontainer">
                            <img src="images/cricketBat.png" alt="b">
                            <h6>Cricket</h6>
                        </div>
                    </a>
                    <a href="individualCategoryItems.php?key=badminton">
                        <div class="imgcontainer">
                            <img src="images/badminton2.png" alt="b">
                            <h6>Badminton</h6>
                        </div>
                    </a>
                    <a href="individualCategoryItems.php?key=cycling">
                        <div class="imgcontainer">
                            <img src="images/cycling.png" alt="b">
                            <h6>Cycling</h6>
                        </div>
                    </a>
                    <a href="individualCategoryItems.php?key=gym">
                        <div class="imgcontainer">
                            <img src="images/homeGym.png" alt="b">
                            <h6>Gym</h6>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <?php
            include '_footer.php';
        ?>
</body>
</html>