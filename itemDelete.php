<?php
// isset($_POST['addItemBtn'])
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    include '_connection.php';
    $prodSelect = $_POST['prodSelect'];
     
    $sql = "Delete from `products` where title = '$prodSelect'";
    $result = mysqli_query($conn, $sql);
    // echo $result;
    $resultCount = mysqli_affected_rows($conn);
    // echo $resultCount;
    // $resultCount = mysqli_num_rows($result);
    if ($resultCount > 0){
        echo "<script>
            alert('Item has been successfully deleted!!');
            window.location.href = 'sellerProfile.php';
        </script>";   
    }
    else{
        echo "<script>
            alert('Item deletion failed!! There may not be any such item left to be deleted');
            window.location.href = 'sellerProfile.php';
        </script>"; 
    }


}

?>