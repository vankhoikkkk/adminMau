<?php
include "class/productType_class.php";
 

    $productType = new productType();
    if(!isset($_GET['productType_id']) || $_GET['productType_id'] == NULL) {
        header("Loacation: productTypeList.php");
        exit();
    }else {
        $getIDproductType = $_GET['productType_id'];
    }
    $deleteProductType = $productType->delete_ProductType($getIDproductType);
?>