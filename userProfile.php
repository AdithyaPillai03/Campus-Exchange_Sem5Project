<?php
    // session_start();
    // unset($_SESSION['userType']);
?>
<?php

session_start();

if (!isset($_SESSION['userID']))
{
    $_SESSION['returnURL'] = $_SERVER['REQUEST_URI']; 
    echo "<script>
        alert('You are not logged in. Please login');
        window.location.href = 'login.php';
    </script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile | Campus Exchange</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;0,600;1,400;1,600&family=Poppins:wght@200;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="profile.css">
</head>
<body>

    <div class="ellipse-1"></div>
    <div class="ellipse-2"></div>

    <div class="mainContainer">
        <a href="index.php"><h1>Campus Exchange</h1></a>
        <div class="details">
            <h6 id="username"><?php  echo  ucfirst($_SESSION['user']);?></h6>
            <h6 id="type">Type: <?php  echo  ucfirst($_SESSION['userType']);?></h6>
            <button id="passChangeBtn">Change Password</button>
            <a href="logout.php">Logout</a>
        </div>
        <div class="passAlter" id="passAlter" style="display: none;">
            <form action="" onsubmit="return validatePassword()">
                <label for="oldPass">Enter old Password:</label>
                <input type="password" id ="oldPass" required>
                <br>
                <label for="newPass1">Enter new Password:</label>
                <input type="password" id ="newPass1" required>
                <br>
                <label for="newPass2">Confirm new Password:</label>
                <input type="password" id ="newPass2" required>
                <br>
                <button type="submit" id="passChangeActionBtn">Change</button>
            </form>
            <div id="error-message" style="color: red;"></div>
        </div>

        <div class="purchaseHistory">
            <h3>Purchase History: </h3>
            <div class="purchaseDetails">
                <?php 
                    $id = $_SESSION['userID'];
                    include '_connection.php';
                    $sql = "SELECT 
                            t.transaction_id, p.prod_id, p.title, p.img_loc
                        FROM 
                            transactiondetails t
                        JOIN 
                            products p ON t.prod_id = p.prod_id
                        WHERE 
                            t.user_id = '$id'";
                    // "SELECT prod_id FROM `transactiondetails` where seller_id = '$id'";
                    $result = mysqli_query($conn, $sql);
                    $resultCount = mysqli_num_rows($result);

                    if ($resultCount > 0) {
                        // echo "<h2 style='font-family: Poppins, sans-serif; font-size: 36px; color: #0E457B;'>ORDERS</h2>";
                        while ($row = mysqli_fetch_assoc($result)) {
                            $productImg = $row["img_loc"];
                            $productName = $row["title"];
                            $transactId = $row["transaction_id"];
                            echo '
                            <div class="prod1">
                                <img src="userUploads/'.$productImg.'" alt="">
                                <p>'.$productName.'</p>
                                <p>Transaction id is '.$transactId.'</p>
                            </div>';
                        }
                    }
                    else{
                        echo "<p>You haven't yet purchased anything. Your purchase history will be displayed here after any purchase.</p>";
                    }
                ?>
                <!-- <div class="prod1">
                    <img src="images/canonEOSm50.png" alt="">
                    <p>Canon EOS m50</p>
                </div>
                <div class="prod1">
                    <img src="images/gaming.png" alt="">
                    <p>DualSense Controller</p>
                </div>
                <div class="prod1">
                    <img src="images/speakers.png" alt="">
                    <p>Boat stone 500</p>
                </div> -->


            </div>
        </div>
    </div>

    <script>
        const showButton = document.getElementById('passChangeBtn');
        const hiddenContent = document.getElementById('passAlter');

        showButton.addEventListener('click', function () {
        if (hiddenContent.style.display === 'none') {
            hiddenContent.style.display = 'block';
        } else {
            hiddenContent.style.display = 'none';
        }
        });


        function validatePassword(){
            var password = document.getElementById('newPass1').value;
            var confirmPassword = document.getElementById('newPass2').value;
            var errorMessage = document.getElementById('error-message');

            if (password !== confirmPassword) {
                errorMessage.textContent = "Passwords do not match!";
                return false; 
            }
            errorMessage.textContent = "Passwords changed successfully";
            return true;
        }
    </script>
</body>
</html>