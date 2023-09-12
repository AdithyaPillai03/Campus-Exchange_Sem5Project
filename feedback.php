<?php
include('_connection.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["fbname"];
    $email = $_POST["fbemail"];
    $feedback = $_POST["feedback"];

    $sql = "INSERT INTO `feedback`(`name`, `email`, `feedback`) VALUES ('$name','$email','$feedback')";
    
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>
            alert('Thank You for your feedback!!');
            window.location.href = 'index.php';
        </script>";
    } else {
        echo "Error updating password: ";
    }
    $conn->close();
    
}
?>