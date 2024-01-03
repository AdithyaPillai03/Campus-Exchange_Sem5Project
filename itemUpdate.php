<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    include '_connection.php';
    $prodSelect = $_POST['prodSelect'];
   // UPDATE `products` SET `description` = 'very speed,too many ads,descent cameras, good display,good battery,good !' WHERE `products`.`prod_id` = 4;
    // Initializing an empty array to store the update statements
    $updates = array();

    // Check if each field is set and add it to the update statements
    if (!empty($_POST['updProdName'])) {
        $newName = $_POST['updProdName'];
        $updates[] = "title = '$newName'";
    }

    if (!empty($_POST['updProdDesc'])) {
        $newDesc = $_POST['updProdDesc'];
        $updates[] = "description = '$newDesc'";
    }

    if (!empty($_POST['updProdPrice'])) {
        $newPrice = $_POST['updProdPrice'];
        $updates[] = "price = '$newPrice'";
    }

    if (!empty($_POST['updKeywords'])) {
        $newKeywords = $_POST['updKeywords'];
        $updates[] = "keyword = '$newKeywords'";
    }

    $updateQuery = "UPDATE products SET " . implode(", ", $updates) . " WHERE title = '$prodSelect'";

    // Execute the query
    $result = mysqli_query($conn, $updateQuery);
    // if (!$result) {
    //     echo "Error: " . mysqli_error($conn);
    // }
    if ($result) {
        echo '<script>
            alert("Product details updated successfully!!");
            window.location.href = "sellerProfile.php";
        </script>';
    } else {
        echo '<script>
            alert("Product update failed!!");
            window.location.href = "sellerProfile.php";
        </script>';
    }
}
?>


<?php
// isset($_POST['addItemBtn'])
// if ($_SERVER['REQUEST_METHOD'] == 'POST'){
//     include '_connection.php';
//     $prodSelect = $_POST['prodSelect'];
//     $sql = "Delete from `products` where title = '$prodSelect'";
//     $result = mysqli_query($conn, $sql);
//     // echo $result;
//     $resultCount = mysqli_affected_rows($conn);
//     // echo $resultCount;
//     // $resultCount = mysqli_num_rows($result);
//     if ($resultCount > 0){
//         echo "<script>
//             alert('Item has been successfully deleted!!');
//             window.location.href = 'sellerProfile.php';
//         </script>";   
//     }
//     else{
//         echo "<script>
//             alert('Item deletion failed!! There may not be any such item left to be deleted');
//             window.location.href = 'sellerProfile.php';
//         </script>"; 
//     }


// }

?>