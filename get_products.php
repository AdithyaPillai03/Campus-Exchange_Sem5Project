<?php
include '_connection.php';
$sql = "SELECT * FROM `products` where `category` == 'electronics'";
$result = mysqli_query($conn, $sql);

$products = array();

if ($result->num_rows > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $products[] = array(
            "img" => $row["img_loc"],
            "price" => $row["price"],
            "title" => $row["title"]
        );
    }
}

$conn->close();

header("Content-Type: application/json");
echo json_encode($products);


?>