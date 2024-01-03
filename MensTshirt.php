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
                <a href="cart.php"><button><i class="fa-solid fa-cart-shopping"></i></button></a>
                <a href="userProfile.php"><button><i class="fa-solid fa-user"></i></button></a>
            </div>
        </div>
        <div class="Category">
            <h1>PHOTOGRAPHY</h1>
            <div class="row">
                <?php
                    include '_connection.php';
                    $sql = "SELECT * FROM `products` where `category`='sports'";
                    $result = mysqli_query($conn, $sql);
                    $resultCount = mysqli_num_rows($result);
                    if ($resultCount > 0)
                    {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $img = $row["img_loc"];
                            $price = $row["price"];
                            $title = $row["title"];
                            $type = $row["type"];
                            // echo "image is.$img";
                            echo "
                                <a href='individualProduct.php'>
                                    <div class='imgcontainer'>
                                        <img src='userUploads/$img' alt='$type'>                        
                                        <h6>₹$price</h6>
                                        <h6>$title</h6>
                                    </div>
                                </a>";
                        }
                    }
                    else{
                        echo "<h1> There is no products related to your search! Try something else!!! Sorry for the inconvenience!";
                    }
                    $conn->close();
                ?>
                    <!-- <a href="canonEOSm50.php">
                        <div class="imgcontainer">
                            <img src="images/canonEOSm50.png" alt="canon eos m50">                        
                            <h6>Canon EOS M50 Mark II</h6>
                            <h6>$788</h6>
                        </div>
                    </a>
                    
                    <a href="sonyAlpha7.php">
                        <div class="imgcontainer">
                            <img src="images/sonyAlpha7.png" alt="SONY ZV-E10">
                            <h6>SONY ZV-E10 Mirrorless Camera</h6>
                            <h6>$699</h6>
                        </div>
                    </a> -->
            </div>
        </div>

    </div>
</body>
</html>
