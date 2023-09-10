<?php
session_start();
if (isset($_POST['item_key'])) {
        $item_key = $_POST['item_key'];
        // echo 'now';
        // print_r( $_SESSION['cart']);
        // print_r($_SESSION['cart'][$item_key]);
        foreach($_SESSION['cart'] as $key => $value){
            if ($value['name'] == $item_key){
                unset($_SESSION['cart'][$key]);
                // print_r( $_SESSION['cart']);
                // Optionally, you can reorganize the cart array to ensure sequential keys
                $_SESSION['cart'] = array_values($_SESSION['cart']);
                // Redirect back to the cart page
                header('Location: cart.php');
                exit();
            }
            // else{
            //     echo "no...no...no";
            // }
        }
    }

    
?>