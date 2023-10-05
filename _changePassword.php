<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    include '_connection.php';
    $newPass = $_POST['newPass1'];
    $oldPass = $_POST['oldPass'];
    $id = $_SESSION['userID'];

    $sql = "SELECT * FROM `user` where user_id = '$id'";
    $result = mysqli_query($conn, $sql);
    $resultCount = mysqli_num_rows($result);

    if ($resultCount > 0 ){
            $row = mysqli_fetch_assoc($result);
            if ($oldPass == $row['password']){
                $updateQuery = "UPDATE `user` SET `password` = '$newPass' WHERE `user`.`user_id` = '$id'";

                // Execute the query
                $result = mysqli_query($conn, $updateQuery);
                // if (!$result) {
                //     echo "Error: " . mysqli_error($conn);
                // }
                if ($result) {
                    echo '<script>
                        alert("Passwords changed successfully!!");
                        window.location.href = "index.php";
                    </script>';
                } 
            }
            else{
                echo '<script>
                        alert("You have entered incorrect old password!!");
                        window.location.href = "index.php";
                    </script>';
            }
        }
}