<?php
session_start();
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        if (isset($_POST['payButton'])) {
            include '_connection.php';
            $user_id = $_SESSION['userID'];

            $valuesToInsert = [];

            foreach ($_SESSION['cart'] as $key => $value) {
                $prod_id = $value['id'];
                
                $valuesToInsert[] = "('$user_id', '$prod_id')";
            }
            $valuesString = implode(", ", $valuesToInsert);
            $sql = "INSERT INTO `transactiondetails` (`user_id`, `prod_id`) VALUES $valuesString";

            if ($result) {
                unset($_SESSION['cart']);
                session_destroy();
                echo "<script>
                    alert('Payment Successfuly! Thank You!!');
                    window.location.href = 'index.php';
                </script>"; 
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        }
        elseif (isset($_POST['paySingleButton'])) {
            include '_connection.php';
            $user_id = $_SESSION['userID'];
            $prod_id = $_SESSION['singleProd']['id'];
            $sql = "INSERT INTO `transactiondetails` (`user_id`, `prod_id`) VALUES ('$user_id', '$prod_id')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                // unset($_SESSION['cart']);
                // session_destroy();
                echo "<script>
                    alert('Payment Successfuly! Thank You!!');
                    window.location.href = 'index.php';
                </script>"; 
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        }
    }
?>