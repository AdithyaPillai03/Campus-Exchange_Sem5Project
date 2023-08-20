<?php

session_start();

if (isset($_SESSION['userType']))
{
    // if ($_SESSION['userType'] == 'seller'){
    //     header("Location: userProfile.php", true, 303);
    //     exit();
    // }
    if ($_SESSION['userType'] == 'user'){
        echo "<script>
            alert('You are not a seller. Please register as a seller.');
            window.location.href = 'sellerSignup.php';
        </script>";
        exit();
    }
}
else{
    header("Location: login.php", true, 303);
    exit();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller Profile | Campus Exchange</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;0,600;1,400;1,600&family=Poppins:wght@200;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="sellerProfileStyle.css">
</head>
<body>

    <div class="ellipse-1"></div>
    <div class="ellipse-2"></div>

    <div class="mainContainer">
        <a href="index.php"><h1>Campus Exchange</h1></a>
        <div class="details">
            <h6 id="username">Adithya Pillai</h6>
            <h6 id="email">adiurpillai@gmail.com</h6>
            <button id="passChangeBtn">Change Password</button>
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

        <div class="buttons">
            <button type="submit" id="addProduct">Add Item</button>
            <button type="submit" id="delProduct">Delete Item</button>
            <button type="submit" id="updProduct">Update Item</button>
        </div>

        <div class="addItem" id="addItem" style="display: none;">
            <form action="/sem5 Project New/new Resources/imgUpload.php" method="post" enctype="multipart/form-data">
                <label for="category">Select Category:</label>
                <input type="text" name="category" id ="category" required>
                <br>
                <label for="prodName">Enter name of product:</label>
                <input type="text" name="prodName" id ="prodName" required>
                <br>
                <label for="prodDesc">Enter description of product:</label>
                <textarea name="prodDesc" id="prodDesc" cols="50" rows="8"></textarea>
                <br>
                <label for="prodPrice">Enter price of product:</label>
                <input type="number" name="prodPrice" id ="prodPrice" required>
                <br>
                <label for="keywords">Select Keywords:</label>
                <input type="text" name="keywords" id ="keywords" required>
                <br>
                <label for="img_upload">Insert Image:</label>
                <input type="file" name="img_upload" id ="img_upload" required>
                <br>
                <button type="submit" name="addItemBtn" id="passChangeActionBtn">ADD</button>
            </form>
        </div>
        <div class="delItem" id="delItem" style="display: none;">
            <form action="" onsubmit="">
                <label for="prodSelect">Select Item:</label>
                <input type="text" id ="prodSelect" required>
                <button type="submit" id="delItemActionBtn">CONFIRM DELETE</button>
            </form>
        </div>
        <div class="updateItem" id="updateItem" style="display: none;">
            <form action="" onsubmit="">
                <label for="prodSelect">Select Product:</label>
                <input type="text" id ="prodSelect" required>
                <br>
                <label for="updProdName">Change name of product:</label>
                <input type="text" id ="updProdName" required>
                <br>
                <label for="updProdDesc">Change description of product:</label>
                <textarea name="text" id="updProdDesc" cols="50" rows="8"></textarea>
                <br>
                <label for="updProdPrice">Change price of product:</label>
                <input type="number" id ="updProdPrice" required>
                <br>
                <label for="updKeywords">Select Keywords:</label>
                <input type="text" id ="updKeywords" required>
                <br>
                <button type="submit" id="passChangeActionBtn">CONFIRM UPDATE</button>
            </form>
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

        const addButton = document.getElementById('addProduct');
        const addContent = document.getElementById('addItem');

        addButton.addEventListener('click', function () {
        if (addContent.style.display === 'none') {
            addContent.style.display = 'block';
        } else {
            addContent.style.display = 'none';
        }
        });
        const delButton = document.getElementById('delProduct');
        const delContent = document.getElementById('delItem');

        delButton.addEventListener('click', function () {
        if (delContent.style.display === 'none') {
            delContent.style.display = 'block';
        } else {
            delContent.style.display = 'none';
        }
        });
        const updButton = document.getElementById('updProduct');
        const updateContent = document.getElementById('updateItem');

        updButton.addEventListener('click', function () {
        if (updateContent.style.display === 'none') {
            updateContent.style.display = 'block';
        } else {
            updateContent.style.display = 'none';
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