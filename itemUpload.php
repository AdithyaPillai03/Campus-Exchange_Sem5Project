<?php
// isset($_POST['addItemBtn'])
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    include '_connection.php';
    $title = $_POST['prodName'];
    $desc = $_POST['prodDesc'];
    $price = $_POST['prodPrice'];
    $img = $_FILES['img_upload']['name'];
    $category = $_POST['category'];
    $keyword = $_POST['keywords'];
    $type = $_POST['type'];
    
    $sql = "INSERT INTO `products` (`seller_id`, `title`, `description`, `price`, `img_loc`, `category`,`type`,`keyword`) VALUES (2, '$title', '$desc', '$price', '$img' , '$category', '$type', '$keyword')";
    // echo $sql;
    $result = mysqli_query($conn, $sql);

    if ($result){
        move_uploaded_file($_FILES['img_upload']['tmp_name'], "userUploads/".$_FILES['img_upload']['name']);
        echo '<script>
        // window.location.href = "login.php";
        alert("File uploaded");
        window.location.href = "sellerSignup.php";
        </script>';
    }
    else{
        echo '<script>
        // window.location.href = "login.php";
        alert("File couldnt be uploaded");
        </script>';
    }

}

?>