<?php
include "header.php";
include "slider.php";
include "class/productType_class.php";
?>
<?php 
$productType = new productType();
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cartegory_id = $_POST["cartegory_id"];
    $productType_name = $_POST["productType_name"];
    if($cartegory_id != "NULL"){
        $insert_productType = $productType->insert_productType($cartegory_id, $productType_name);
    }
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
                <h1 style = "width: 260px" >Thêm Loại Sản Phẩm</h1> <br>
                <form action="" method="POST">
                    <select name="cartegory_id" id="">
                        <option value="NULL">---Chọn danh mục</option>
                        <?php 
                            $show_cartegory = $productType->show_cartegory();
                            if($show_cartegory) {
                                while($result = $show_cartegory->fetch_assoc()){
                        ?>
                        <option value="<?php echo $result['cartegory_id'] ?>"> <?php echo $result['cartegory_name'] ?></option>
                        <?php
                               }
                            }
                        ?>
                    </select>
                    <input style="padding: 10px; width: 200px;" required name="productType_name" type="text" placeholder="Nhập tên loại sản phẩm">
                    <button type="submit">Thêm</button>
                </form>
            </div>
        </div>
    </section>
    
</body>
</html>