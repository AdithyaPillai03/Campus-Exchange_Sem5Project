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
    $_SESSION['returnURL'] = $_SERVER['REQUEST_URI']; 
    echo "<script>
        console.log('Before redirection');
        alert('You are not logged in. Please login if you are a seller.');
        window.location.href = 'login.php';
    </script>";
    // header("Location: login.php", true, 303);
    // exit();
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
            <h6 id="username"><?php echo strtoupper($_SESSION['user']); ?></h6>
            <h6 id="type"><?php echo ucfirst($_SESSION['userType']); ?></h6>
            <button id="passChangeBtn">Change Password</button>
            <a href="logout.php"><button>Logout</button></a>
        </div>
        <div class="passAlter" id="passAlter" style="display: none;">
            <form action="_changePassword.php" onsubmit="return validatePassword()" method="POST">
                <label for="oldPass">Enter old Password:</label>
                <input type="password" id ="oldPass" name="oldPass" required>
                <br>
                <label for="newPass1">Enter new Password:</label>
                <input type="password" id ="newPass1" name="newPass1" required>
                <br>
                <label for="newPass2">Confirm new Password:</label>
                <input type="password" id ="newPass2" required>
                <br>
                <button type="submit" id="passChangeActionBtn">Change</button>
            </form>
            <div id="error-message" style="color: red;"></div>
        </div>
        <br>
        <br>
        <br>
        <div class="buttons">
            <button type="submit" id="addProduct">Add Item</button>
            <button type="submit" id="delProduct">Delete Item</button>
            <button type="submit" id="updProduct">Update Item</button>
        </div>

        <div class="addItem" id="addItem" style="display: none;">
            <form action="itemUpload.php" method="post" enctype="multipart/form-data">
                <label for="category">Select Category:</label>
                <select id="category" name="category">
                    <option value="cricket">cricket</option>
                    <option value="badminton">badminton</option>
                    <option value="cycling">cycling</option>
                    <option value="gym">gym</option>
                    <option value="entrance">entrance</option>
                    <option value="comics">comics</option>
                    <option value="self-help">self-help</option>
                    <option value="fantasy">fantasy</option>
                    <option value="photography">photography</option>
                    <option value="mobile">mobile</option>
                    <option value="speakers">speakers</option>
                    <option value="gaming">gaming</option>
                    <option value="mens-tshirt">mens-tshirt</option>
                    <option value="jeans">jeans</option>
                    <option value="sarees">sarees</option>
                    <option value="kurtas">kurtas</option>
                </select>
                <!-- <input type="text" name="category" id ="category" required> -->
                <br>
                <label for="prodName">Enter name of product:</label>
                <input type="text" name="prodName" id ="prodName" required>
                <br>
                <label for="prodDesc">Enter description of product:</label>
                <textarea name="prodDesc" id="prodDesc" cols="50" rows="8" placeholder="Please refrain from using any quotations."></textarea>
                <br>
                <label for="prodPrice">Enter price of product:</label>
                <input type="number" name="prodPrice" id ="prodPrice" required>
                <br>
                <label for="keywords">Select Keywords:</label>
                <input type="text" name="keywords" id ="keywords" required>
                <br>
                <label for="type">Enter type:</label>
                <input type="text" name="type" id ="type" required>
                <br>
                <label for="img_upload">Insert Image:</label>
                <input type="file" name="img_upload" id ="img_upload" required>
                <br>
                <button type="submit" name="addItemBtn" id="addItemBtn">ADD</button>
            </form>
        </div>
        <div class="delItem" id="delItem" style="display: none;">
            <form action="itemDelete.php" method="post">
                <label for="prodSelect">Select Item:</label>
                <input type="text" name="prodSelect" id="prodSelect" required>
                <button type="submit" id="delItemActionBtn">CONFIRM DELETE</button>
            </form>
        </div>
        <div class="updateItem" id="updateItem" style="display: none;">
            <!-- <button type="submit" id="updateDesc">Add Item</button>
            <button type="submit" id="updatePrice">Delete Item</button>
            <button type="submit" id="updateName">Update Item</button> -->

            <form action="itemUpdate.php" method="post">
                <label for="prodSelect">Select Product:</label>
                <input type="text" name="prodSelect" id ="prodSelect" required>
                <br>
                <label for="updProdName">Change name of product:</label>
                <input type="text" name="updProdName" id ="updProdName" >
                <br>
                <label for="updProdDesc">Change description of product:</label>
                <textarea name="updProdDesc" id="updProdDesc" cols="50" rows="8"></textarea>
                <br>
                <label for="updProdPrice">Change price of product:</label>
                <input type="number" name="updProdPrice" id ="updProdPrice" >
                <br>
                <label for="updKeywords">Select Keywords:</label>
                <input type="text" name="updKeywords" id ="updKeywords" >
                <br>
                <p>If you want to change 'image' of product, 'category' or 'type of product' then please delete the entire product and add again</p>
                <br>
                <button type="submit" id="updItemBtn">CONFIRM UPDATE</button>
            </form>
        </div>
        <br>
        <br>        
        <div class="orderReqTable">
            <!-- <?php
                // $id = $_SESSION['userID'];
                // include '_connection.php';
                //         $sql = "SELECT * FROM `transactiondetails` where `seller_id`='$id'";
                //         $result = mysqli_query($conn, $sql);
                //         $resultCount = mysqli_num_rows($result);
                //         if ($resultCount > 0)
                //         {
                //             echo "<h2 style='font-style: Poppins, sans-serif;font-size: 36px;color: #0E457B;'>ORDERS</h2>";
                //             echo "<table>
                //                     <tr>
                //                         <th>Requests</th>
                //                         <th>Action</th>
                //                     </tr>";
                //             while ($row = mysqli_fetch_assoc($result)) {
                //                 $user_id = $row["user_id"];
                //                 $prod_id = $row["prod_id"];


                //                 $sql2 = "SELECT title,img_loc FROM `products` where prod_id = '$prod_id'";
                //                 $result2 = mysqli_query($conn, $sql2);
                //                 $resultCount2 = mysqli_num_rows($result2);
                //                 $row2 = mysqli_fetch_assoc($result2);
                //                 $name = $row2['title'];
                //                 echo "<tr>
                //                     <td> User $user_id has ordered for product $name</td>
                //                     <td><a href='index.php'><button> Check transaction ID </button></a></td>
                //                 </tr>";
                //                 // echo "<h2> User $user_id has ordered for product $name</h2>";
                //                 // echo "<button> click </button>";
                //             }
                //             echo "</table>";
                //         }
                //         else{
                //             echo "<h1> No Product requests yet";
                //         }
                //         $conn->close();
            ?> -->
            <?php
                $id = $_SESSION['userID'];
                include '_connection.php';

                $sql = "SELECT td.user_id, td.transaction_id, td.prod_id, p.title, u.email
                        FROM `transactiondetails` td
                        INNER JOIN `products` p ON td.prod_id = p.prod_id
                        INNER JOIN `user` u ON td.user_id = u.user_id
                        WHERE p.seller_id = '$id'";

                $result = mysqli_query($conn, $sql);
                $resultCount = mysqli_num_rows($result);

                if ($resultCount > 0) {
                    echo "<h2 style='font-family: Poppins, sans-serif; font-size: 36px; color: #0E457B; text-align:center;'>ORDERS</h2>";
                    echo "<table>
                            <tr>
                                <th>Requests</th>
                                <th>ID</th>
                                <th></th>
                            </tr>";

                    while ($row = mysqli_fetch_assoc($result)) {
                        $email = $row["email"];
                        $productName = $row["title"];
                        $transactId = $row["transaction_id"];

                        echo "<tr>
                                    <td>User $email has requested '$productName'</td>
                                    <td><button class='showPopup'> Check transaction ID </button></td>
                                    <td><button onclick='deleteRow(this)'>Ignore</button></td>
                                </tr>
                                <div id='popup' class='popup'>
                                    <h2>Transaction id for this product is: </h2>
                                    <p>$transactId</p>
                                    <p style='color: red;'>Match this ID with the ID that the customer will show you on meetup</p>
                                    <button class='closePopup'>Close</button>
                                </div>";
                    }

                    echo "</table>";
                } else {
                    echo "<h2 style='font-family: Poppins, sans-serif; font-size: 36px; color: #0E457B;'>No Product requests yet</h2>";
                }

                $conn->close();
            ?>

        </div>
        
        <!-- <div class="userOrderDetails">
            <p style="font-size: 30px;color: #0E457B;">Adithya  for 'BOAR'</p>
            <img src="userUploads/inosuke.jpg" alt="image2">
            <table>
  <thead>
    <tr>
      <th>Name</th>
      <th>Age</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Alice</td>
      <td>25</td>
      <td><button onclick="deleteRow(this)">Delete</button></td>
    </tr>
    <tr>
      <td>Bob</td>
      <td>30</td>
      <td><button onclick="deleteRow(this)">Delete</button></td>
    </tr>
  </tbody>
</table>
function deleteRow(button) {
  // Get the row that contains the button.
  var row = button.closest('tr');

  // Remove the row from the table.
  row.remove();
}
$(document).ready(function() {
  // Add a click event handler to all "Delete" buttons.
  $('.delete-button').click(function() {
    // Get the row that contains the button.
    var row = $(this).closest('tr');

    // Remove the row from the table.
    row.remove();
  });
});

        </div> -->
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
            // errorMessage.textContent = "Passwords changed successfully";
            // return true;
        }

        function deleteRow(button) {
        var row = button.closest('tr');

        row.remove();
        }

        // const showPopupButton = document.getElementById('showPopup');
        // const closePopupButton = document.getElementById('closePopup');
        // const popup = document.getElementById('popup');

        // function openPopup() {
        //     popup.style.display = 'block';
        // }

        // function closePopup() {
        //     popup.style.display = 'none';
        // }
        // showPopupButton.addEventListener('click', openPopup);
        // closePopupButton.addEventListener('click', closePopup);


        const showPopupButtons = document.querySelectorAll('.showPopup');
        const popups = document.querySelectorAll('.popup');
        const closePopupButtons = document.querySelectorAll('.closePopup');

        // Function to open the corresponding popup
        function openPopup(index) {
            popups[index].style.display = 'block';
        }

        // Function to close the corresponding popup
        function closePopup(index) {
            popups[index].style.display = 'none';
        }

        // Attach click event listeners to all buttons
        showPopupButtons.forEach((button, index) => {
            button.addEventListener('click', () => openPopup(index));
        });
        closePopupButtons.forEach((button, index) => {
            button.addEventListener('click', () => closePopup(index));
        });
            </script>
</body>
</html>