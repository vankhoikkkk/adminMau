<?php
include "class/productType_class.php";

header('Content-Type: application/json'); 
$productType = new productType();

if (isset($_GET['cartegory_id'])) {
    $cartegory_id = $_GET['cartegory_id'];
    // var_dump($cartegory_id);
} else {
    // die("Category ID is missing.");
}

$result = $productType->show_productType_cartegory_id($cartegory_id);

if($result) {

    $productArray = [];
    while($row = $result->fetch_assoc()) {
        $productArray[] = $row;
    }
        
    echo json_encode($productArray); 
    exit;
}else {
    echo json_encode([]); 
    exit;
}   
?>