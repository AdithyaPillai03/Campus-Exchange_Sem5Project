<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | Campus Exchange</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;0,700;1,700&family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="signUpStyle.css">
</head>
<body>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $class = $_POST['classSelect'];

        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "ecommerce_db";

        // Create a connection
        $conn = mysqli_connect($servername, $username, $password, $database);
        // Die if connection was not successful
        if (!$conn){
            die("Sorry we failed to connect: ". mysqli_connect_error());
        }
        else{ 
            // Submit these to a database
            // Sql query to be executed 
            $sql = "INSERT INTO `user` (`name`, `email`, `password`, `type`, `class`) VALUES ('$name', '$email', '$password', 'user', '$class')";
            $result = mysqli_query($conn, $sql);

            if ($result){
                echo "your name is '$name' , email is '$email' .";
                echo "Your data has been successfully stored in our database";
            }
    }
    header("Location: login.php", true, 303);
    exit();
}
?>
    <div class="heading">
        <a href="index.php"><h1>Campus Exchange</h1></a>
        <h4>Join the Student Community: Connect, Earn, and Thrive!</h4>
    </div>
        <div class="signUpForm">
            <form action="/sem5 Project New/new Resources/signup.php" method="post">
                <div class="formGrp">
                    <label for="name">Enter Name:</label>
                    <input type="text" name="name" class="name" id="name" required>
                </div>
                <div class="formGrp">
                    <label for="email">Enter College Email:</label>
                    <input type="email" name="email" class="email" id="email" required> 
                </div>
                <div class="formGrp">
                    <label for="classSelect">Select class:</label>
                    <select id="classSelect" name="classSelect">
                        <option value="fycs">F.Y.Bsc CS</option>
                        <option value="fybcom">F.Y.BCOM</option>
                        <option value="fyit">F.Y.Bsc IT</option>
                        <option value="fybba">F.Y.B.B.A</option>
                        <option value="fybaf">F.Y.B.A.F</option>
                      </select>
                </div>
                <div class="formGrp">
                    <label for="password">Enter Password: (6 or more charachters)</label>
                    <input type="password" name="password" class="password" id="password" required>
                </div>
                <p>By clicking on join now, you accept Campus Exchange’s <span>user agreement,privacy policy and cookie policy</span></p>
                <button type="submit" id="signUpBtn">JOIN NOW</button>
                <h6>Have an Account? <a href="login.php">Sign In</a></h6>
                <h6>Wanna create a seller Account? <a href="sellerSignup.php">Seller Sign In</a></h6>
            </form>
        </div>
    </div>
    <script>
        var btn = document.getElementById('signUpBtn');
        var pass = document.getElementById('password');
        btn.addEventListener("click", function() {
            console.log(pass.value);
        });
        </script>
</body>
</html>

