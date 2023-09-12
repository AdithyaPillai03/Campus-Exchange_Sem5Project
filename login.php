<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In | Campus Exchange</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;0,700;1,700&family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="loginStyle.css">
</head>
<body>
<?php
    session_start();
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        include '_connection.php';
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM `user` where email = '$email'";
        $result = mysqli_query($conn, $sql);
        $resultCount = mysqli_num_rows($result);

        if ($resultCount > 0 ){
                $row = mysqli_fetch_assoc($result);
                if ($password == $row['password']){
                    $_SESSION['user'] = $row["name"];
                    $_SESSION['userID'] = $row["user_id"];
                    $_SESSION['userType'] = $row["type"];
                    header("Location: index.php", true, 303);
                    exit();
                }
                else{
                    echo '<script>
                    window.location.href = "login.php";
                    alert("Invalid Password!!");
                    </script>';
                }
                // echo $row['password']."<br>";
            // echo "$result";
            // echo "your name is '$name' , email is '$email' and roll number is '$rollNo'";
            // echo "Your data has been successfully stored in our database"; 
            
        }
        else{
            echo '<script>
            window.location.href = "login.php";
            alert("Invalid Email or Password!!");
            </script>';
        }
}
?>

    <div class="heading">
        <a href="index.php"><h1>Campus Exchange</h1></a>
        <h4>Join the Student Community: Connect, Earn, and Thrive!</h4>
    </div>
    <div class="signUpForm">
        <form action="login.php" method="post">
              <label for="email">Enter E-mail:</label>
              <input type="email" id="email" name="email" required>
              <label for="password">Enter Password: </label>
              <input type="password" id="password" name="password" required>
            <button type="submit">LOGIN</button>
            <h6>Don't have an Account? <a href="signup.php">Join Now</a></h6>
        </form>
    </div>
</body>
</html>