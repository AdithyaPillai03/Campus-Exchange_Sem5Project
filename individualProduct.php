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
        <div class="product">
            <div class="imgContainer">
                <?php
                session_start();
                // print_r( $_SESSION['cart']);
                    if (isset($_GET['name'])) {
                        $name = $_GET['name'];
                    }
                    // echo "the name of the product is: '$name'";
                    include '_connection.php';
                    $sql = "SELECT * FROM `products` where `title`='$name'";
                    $result = mysqli_query($conn, $sql);
                    $resultCount = mysqli_num_rows($result);
                    if ($resultCount > 0)
                    {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $prod_id = $row["prod_id"];
                            $img = $row["img_loc"];
                            $price = $row["price"];
                            $desc = $row["description"];
                        }
                    }
                

                echo "<img src='userUploads/$img' alt='$name.img'><br>"
                ?>
                <form action='_manage_cart.php' method='POST'>
                    <input type='hidden' name='title' value='<?php echo $name; ?>'>
                    <input type='hidden' name='id' value='<?php echo $prod_id; ?>'>
                    <input type='hidden' name='price' value='<?php echo $price; ?>'>
                    <input type='hidden' name='img' value='<?php echo $img; ?>'>
                    <button type='submit' class='addtoCartBtn'>Add to Cart</button>
                </form>

                <form action='order.php' method='POST'>
                    <?php
                        $_SESSION['singleProd'] = array('name'=>$name,'price'=>$price, 'id'=>$prod_id);
                    ?>
                    <input type='hidden' name='title' value='<?php echo $name; ?>'>
                    <input type='hidden' name='id' value='<?php echo $prod_id; ?>'>
                    <input type='hidden' name='price' value='<?php echo $price; ?>'>
                    <input type='hidden' name='img' value='<?php echo $img; ?>'>
                    <button type="submit" name="directBuyBtn" class="directBuyBtn">BUY NOW</button>
                </form>
                
                <!-- echo "<form action='_manage_cart.php?title=$name,price=$price' method='POST'><button type='submit' class='addtoCartBtn'>ADD TO CART</button></form>"; -->

                
            </div>
            <div class="prodDesc">
                <?php
                    echo "<h6>$name</h6>
                    <h2>$price./-</h2>";
                    $descArray = explode(',', $desc);
                    echo "<p>Highlights</p>";
                    echo "<ul>";
                    foreach ($descArray as $item) {
                        echo "<li>$item</li>";
                    }
                    echo "</ul>";
                // <p>Highlights
                //     <li>$desc</li>
                // </p>
                ?>
            </div>
        </div>
</body>
</html>