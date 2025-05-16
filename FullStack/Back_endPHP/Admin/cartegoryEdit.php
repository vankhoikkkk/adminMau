<?php
include "header.php";
include "slider.php";
include "class/cartegory_class.php";
?>

<?php 
// hiện cartegory để sửa
    $cartegory = new cartegory();
    if(!isset($_GET['cartegory_id']) || ($_GET['cartegory_id'] == NULL)) {
        // chuyển trang bằng js và header   
        // echo "<script>window.location =  'cartegoryList.php'</script>";
        header("Location: cartegoryList.php");
        exit();// Dừng chương trình sau khi chuyển trang
    }else {
        $cartegory_id1 = $_GET['cartegory_id'];
    }

    $getID = $cartegory->get_cartegory($cartegory_id1);
    if($getID) {
        $result = $getID->fetch_assoc();
    }
?>

<?php 
// lấy name từ thẻ input người dùng để sửa
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cartegory_name = $_POST["cartegory_name"];
    $update_cartegory = $cartegory->update_cartegory($cartegory_name, $cartegory_id);
}
// var_dump($cartegory_name);
// header("Location: cartegoryList.php");
?>


<div class="admin-content-right">
            <div class="admin-content-right-cartegory-add">
                <h1 style ="width: 260px;">SỬA DANH MỤC</h1> <br>
                <form action="" method="POST">
                    <input style="padding: 10px;" required name="cartegory_name" type="text" 
                    placeholder="Nhập tên danh mục" value ="<?php echo $result['cartegory_name']?>" >
                    <button type="submit">Thêm</button>
                </form>
            </div>
        </div>
    </section>
    
</body>
</html>