<?php
include "header.php";
include "slider.php";
include "class/productType_class.php";
?>

<?php 
$productType = new productType();
// lấy dữ liệu từ get hiện thị thông tin sản phẩm được người dùng chọn để sửa
$productType_id = $_GET['productType_id'];
$getProductType = $productType->get_productType($productType_id);
$resultA = $getProductType->fetch_assoc();

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $productType_nameSL = $_POST['productType_name'];
    $productType->update_productType($productType_id, $productType_nameSL);
}



?>


<style>
    select{
        padding: 10px;
        width: 200px;
        margin-bottom: 20px;
    }
</style>

<div class="admin-content-right">
            <div class="admin-content-right-cartegory-add">
                <h1 style = "width: 260px" >Sửa Loại Sản Phẩm</h1> <br>
                <form action="" method="POST">
                    <select name="cartegory_id" id="cartegory_id">
                        <option value="NULL">---Chọn danh mục</option>
                        <?php 
                        // show cartegory ra
                            $show_cartegory = $productType->show_cartegory();
                            if($show_cartegory) {
                                while($result = $show_cartegory->fetch_assoc()){
                        ?>
                        <option <?php if($result['cartegory_id'] == $resultA['cartegory_id']) {echo "SELECTED";} ?> 
                            value="<?php echo $result['cartegory_id'] ?>"> <?php echo $result['cartegory_name'] ?></option>

                        <?php
                               }
                            }
                        ?>
                    </select>
                    
                    <input style="padding: 10px; width: 200px;" required name="productType_name" type="text"
                     placeholder="Nhập tên loại sản phẩm" value =" <?php echo $resultA['productType_name']?>">
                    <button type="submit">SỬA</button>
                </form>
            </div>
        </div>
    </section>