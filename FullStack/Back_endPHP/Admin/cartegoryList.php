<?php
include "header.php";
include "slider.php";
include "class/cartegory_class.php";
?>
<?php 
$cartegory = new cartegory();
$show_cartegory = $cartegory->show_cartegory();
// var_dump($show_cartegory);
?>


<div class="admin-content-right">
<div class="admin-content-right-cartegory-list">
                <h1>DANH SÁCH DANH MỤC</h1>
              <table>
                    <tr>
                        <th>STT</th>
                        <th>ID</th>
                        <th>DANH MỤC</th>
                        <th>TUỲ BIẾN</th>
                    </tr>
                    <?php
                    if($show_cartegory) {
                        $i=0;
                        // fetch_assoc là lấy từng dòng dữ liệu trong $show_cartegory thành một mảng các cột
                        while($result = $show_cartegory->fetch_assoc()) {
                            $i++;
                    ?>
                    <tr>
                        <td><?php  echo $i ?></td>
                        <td><?php echo $result['cartegory_id'] ?></td>
                        <td> <?php echo $result['cartegory_name'] ?> </td>
                        <!-- href để lấy dữ liệu chỉnh sửa-->
                        <td><a href="cartegoryEdit.php?cartegory_id=<?php echo $result['cartegory_id'] ?>">Sửa</a>|
                        <a href="cartegoryDelete.php?cartegory_id=<?php echo $result['cartegory_id']?>">Xoá</a></td>
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