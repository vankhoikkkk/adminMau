<?php 
    include "class/cartegory_class.php";
    $cartegory = new cartegory();
    if(!isset($_GET['cartegory_id']) || $_GET['cartegory_id'] == NULL) {
        header("Location: cartegoryList.php");
        exit();
    }else {
        $getIdDelete = $_GET['cartegory_id'];
    }

    $deleteCartegory = $cartegory->delete_cartegory($getIdDelete);
    // header("Location: cartegoryList.php");
?>
