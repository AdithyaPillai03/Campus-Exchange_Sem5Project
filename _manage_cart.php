<?php

session_start();
// session_destroy();

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (isset($_SESSION['cart'])){
        // echo "already there was cart";
        echo '<br>';
        $title = $_POST['title'];
        $price = $_POST['price'];
        $prod_id = $_POST['id'];
        // $price = (int)$price1;
        $img = $_POST['img'];
        $items = array_column($_SESSION['cart'],'name');
        if (in_array($title,$items)){
            echo "<script>
            alert('Item is already added to cart');
            window.location.href = 'individualProduct.php?name=$title';
            </script>";
        }
        else{
            $index = count($_SESSION['cart']);
            $_SESSION['cart'][$index] = array('name'=>$title,'price'=>$price,'img'=>$img, 'id'=>$prod_id);
            // print_r( $_SESSION['cart']);
            echo "<script>
            alert('Item added to cart');
            window.location.href = 'individualProduct.php?name=$title';
            </script>";
            // echo "$tp";
            // echo '<br>';
            // echo "$tp";
        }
    }
    else{
        // echo "new cart";
        $title = $_POST['title'];
        $price = $_POST['price'];
        $prod_id = $_POST['id'];
        $img = $_POST['img'];
        echo "<script>
            alert('Item added to cart');
            window.location.href = 'individualProduct.php?name=$title';
            </script>";
        // echo "$tp";
        // echo "$tp";
        $_SESSION['cart'][0] = array('name'=>$title,'price'=>$price,'img'=>$img, 'id'=>$prod_id);
        // print_r( $_SESSION['cart']);
    }
}
?>