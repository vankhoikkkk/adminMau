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
   
    
        $productType_id = $_GET['productType_id'];
        $getProductType = $productType->get_productType($productType_id);
        $resultA = $getProductType->fetch_assoc();
    
        

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
                    <select name="cartegory_id" id="cartegory_id">
                        <option value="NULL">---Chọn danh mục</option>
                        <?php 
                            $show_cartegory = $productType->show_cartegory();
                            if($show_cartegory) {
                                while($result = $show_cartegory->fetch_assoc()){
                        ?>
                        <option <?php if($result['cartegory_id'] == $resultA['cartegory_id']) {echo "SELECTED";} ?> value="<?php echo $result['cartegory_id'] ?>"> <?php echo $result['cartegory_name'] ?></option>

                        <?php
                               }
                            }
                        ?>
                    </select>

                    <select name="productType_id" id="productType_id">
                    </select>
                    
                    <input style="padding: 10px; width: 200px;" required name="productType_name" type="text"
                     placeholder="Nhập tên loại sản phẩm" value =" <?php echo $resultA['productType_name']?>">
                    <button type="submit">Thêm</button>
                </form>
            </div>
        </div>
    </section>

    <script>
            const xhr = new XMLHttpRequest();
            document.getElementById("cartegory_id").addEventListener("change", function() {
                const cartegory_id = document.getElementById("cartegory_id").value;
                const productType_select = document.getElementById("productType_id");
                console.log("Selected Category ID:", cartegory_id);
                
                xhr.open("GET", "fetch_productTypeEdit.php?cartegory_id=" + cartegory_id, true);
                
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === 4) {
                        console.log("Response Status:", xhr.status);
                        if (xhr.status === 200) {
                            try {
                                const responseData = JSON.parse(xhr.responseText);
                                console.log("Parsed Response Data:", responseData);

                                // Lấy dữ liệu từ responseData
                                if (responseData.length > 0) {
                                    productType_select.innerHTML = ""; // Xóa hết các option
                                    responseData.forEach(function(e) {
                                        const productType = e; // Lấy phần tử đầu tiên
                                        console.log("Product Type ID:", productType.productType_id);
                                        console.log("Product Type Name:", productType.productType_name);

                                        // Cập nhật giao diện
                                        const newOption = document.createElement("option");
                                        newOption.text = productType.productType_name; // Thêm tên loại sản phẩm
                                        productType_select.appendChild(newOption);
                                    });
                                }
                            } catch (e) {
                                console.error("Error parsing JSON:", e);
                            }
                        } else {
                            console.error("Error: " + xhr.status);
                        }
                    }
                };
                xhr.send(); // Gửi yêu cầu
            });
        //}
    </script>
    
</body>
</html>