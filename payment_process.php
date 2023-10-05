<?php
session_start();
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        if (isset($_POST['payButton'])) {
            include '_connection.php';
            $user_id = $_SESSION['userID'];

            $valuesToInsert = [];

            foreach ($_SESSION['cart'] as $key => $value) {
                $prod_id = $value['id'];
                $mainSQl = "select seller_id from products where prod_id = '$prod_id'";
                $resultMain = mysqli_query($conn, $mainSQl);

                if ($resultMain) {
                    // Check if the query was successful

                    // Fetch and echo the Order_id values
                    while ($row = mysqli_fetch_assoc($resultMain)) {
                        $seller_id = $row['seller_id'];
                    }
                }
                $randomString = bin2hex(random_bytes(3)); 
                // echo $randomString;
                $valuesToInsert[] = "('$user_id', '$seller_id', '$prod_id', '$randomString')";
            }

            $valuesString = implode(", ", $valuesToInsert);
            $sql = "INSERT INTO `transactiondetails` (`user_id`, `seller_id`, `prod_id`, `transaction_id`) VALUES $valuesString";
            $result = mysqli_query($conn,$sql);

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
            $mainSQl = "select seller_id from products where prod_id = '$prod_id'";
                $resultMain = mysqli_query($conn, $mainSQl);

                if ($resultMain) {
                    // Check if the query was successful

                    // Fetch and echo the Order_id values
                    while ($row = mysqli_fetch_assoc($resultMain)) {
                        $seller_id = $row['seller_id'];
                    }
                }
            $randomString = bin2hex(random_bytes(3));
            $sql = "INSERT INTO `transactiondetails` (`user_id`, `seller_id`, `prod_id`, `transaction_id`) VALUES ('$user_id', '$seller_id', '$prod_id', '$randomString')";
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