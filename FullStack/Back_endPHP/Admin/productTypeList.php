<?php
include "header.php";
include "slider.php";
include "class/productType_class.php";
?>
<?php 
$productType = new productType();
$show_productType = $productType->show_productType_and_Cartergory_Name();

?>


<div class="admin-content-right">
<div class="admin-content-right-cartegory-list">
                <h1>DANH SÁCH LOẠI SẢN PHẨM</h1>
              <table>
                    <tr>
                        <th>STT</th>
                        <th>DM_ID</th>
                        <th>DANH MỤC</th>
                        <th>LOẠI SẢN PHẨM</th>
                        <th>TUỲ BIẾN</th>
                    </tr>
                    <?php
                    if($show_productType) {
                        $i=0;
                        while($result = $show_productType->fetch_assoc()) {
                            $i++;
                    ?>
                    <tr>
                        <td><?php  echo $i ?></td>
                        <td><?php echo $result['productType_id']?></td>
                        <td><?php echo $result['cartegory_name']?></td>
                        <td><?php echo $result['productType_name']?></td>
                        <!-- href để lấy dữ liệu chỉnh sửa-->
                        <td><a href="productTypeEdit.php?productType_id=<?php echo $result['productType_id'] ?>">Sửa</a>|
                        <a href="productTypeDelete.php?productType_id=<?php echo $result['productType_id']?>">Xoá</a></td>
                    </tr>
                    <?php
                      }
                    }
                    ?>
              </table>
            </div>
    </section>
    
</body>
</html>