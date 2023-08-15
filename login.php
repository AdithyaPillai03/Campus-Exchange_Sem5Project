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
    <div class="heading">
        <a href="index.php"><h1>Campus Exchange</h1></a>
        <h4>Join the Student Community: Connect, Earn, and Thrive!</h4>
    </div>
    <div class="signUpForm">
        <form action="">
              <label for="rollNo">Enter Roll No.:</label>
              <input type="text" id="rollNo" required>
              <label for="password">Enter Password: (6 or more charachters)</label>
              <input type="password" id="password" required>
            <button type="submit">LOGIN</button>
            <h6>Don't have an Account? <a href="signup.php">Join Now</a></h6>
        </form>
    </div>
</body>
</html>