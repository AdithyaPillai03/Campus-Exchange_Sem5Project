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
                <input type="search" id="search-input" placeholder="Search for Products.. ">
                <a href="products.php"><button type="submit" id="search-btn">Search</button></a>
            </div>
            <div class="nav-btns">
                <a href="sellerProfile.php"><button id="BtnSell">Sell</button></a>
                <a href="cart.php"><button><i class="fa-solid fa-cart-shopping"></i></button></a>
                <a href="userProfile.php"><button><i class="fa-solid fa-user"></i></button></a>
            </div>
        </div>
        <div class="Category">
            <h1>PHOTOGRAPHY</h1>
            <div class="row" id="row">
            <?php
                include '_connection.php';
                $sql = "SELECT * FROM `products` where `category`='electronics'";
                $result = mysqli_query($conn, $sql);

                // $products = array();

                    while ($row = mysqli_fetch_assoc($result)) {
                        $img = $row["img_loc"];
                        $price = $row["price"];
                        $title = $row["title"];
                        $type = $row["type"];
                        // echo "image is.$img";
                        echo "
                            <a href='canonEOSm50.php'>
                                <div class='imgcontainer'>
                                    <img src='userUploads/$img' alt='$type'>                        
                                    <h6>$price</h6>
                                    <h6>$title</h6>
                                </div>
                            </a>";
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

    <!-- <script>
        document.addEventListener("DOMContentLoaded", function () {
        fetch("get_products.php")
            .then(response => response.json())
            .then(products => {
                const productList = document.getElementById("row");
                products.forEach(product => {
                    const productLink = document.createElement("a");
                    productLink.href = `#`;
                    
                    const productDiv = document.createElement("div");
                    productDiv.className = "imgcontainer";
                    productDiv.innerHTML = `
                        <img src="${product.img}" alt="${product.title}">
                        <h6>${product.title}</h6>
                        <h6>${product.price}</h6>
                    `;
                    productLink.appendChild(productDiv);
                    productList.appendChild(productLink);
                });
            })
                .catch(error => console.error("Error fetching products:", error));
        });

    </script> -->
</body>
</html>
