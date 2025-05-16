<?php
include "database.php";
?>

<?php
class productType {
    private $db;

    public function __construct() {
        $this -> db = new Database();
    }
    // thêm mới một productType 
    public function insert_productType($cartegory_id, $productType_name) {
        $query = "INSERT INTO tbl_productType (cartegory_id, productType_name) VALUES ('$cartegory_id','$productType_name')";
        $result = $this->db->insert($query);
        header("Location: productTypeList.php");
        return $result;
    }

    public function show_productType_and_Cartergory_Name() {
        $query = "SELECT tbl_productType.*, tbl_cartegory.cartegory_name FROM tbl_cartegory 
        INNER JOIN tbl_productType ON tbl_cartegory.cartegory_id = tbl_productType.cartegory_id ORDER BY productType_id DESC";
        $result = $this->db->select($query);
        return $result;
    }

    public function show_productType_cartegory_id($cartegory_id) {
        $query = "SELECT  productType_id, productType_name FROM tbl_productType WHERE cartegory_id = $cartegory_id";
        $result = $this->db->select($query);
        return $result;
    }

    // lấy dữ liệu của productType hiện lên thông tin để sửa
    public function get_productType($productType_id) {
        $query = "SELECT * FROM tbl_productType WHERE productType_id = $productType_id";
        $result = $this->db->select($query);
        return $result;
    }
    

    //lấy dữ liệu cartegory
    public function show_cartegory() {
        $query = "SELECT * FROM tbl_cartegory ORDER BY cartegory_id DESC ";
        $result = $this->db->select($query);
        return $result;
    }

    public function update_productType($productType_id, $productType_name) {
        $query = "UPDATE tbl_productType SET productType_name = '$productType_name' WHERE productType_id = '$productType_id' ";
        $result = $this->db->update($query);
        header("Location: productTypeList.php");
        return $result;
    }

    public function delete_ProductType($productType_id) {
        $query = "DELETE FROM tbl_productType WHERE productType_id = '$productType_id'";
        $result = $this->db->delete($query);
        header("Location: productTypeList.php");
        return $result;
    }



    public function get_cartegory($cartegory_id) {
        $query = "SELECT * FROM tbl_cartegory WHERE cartegory_id = '$cartegory_id'";
        $result = $this->db->select($query);
        return $result;
    }



    public function update_cartegory($cartegory_name, $cartegory_id) {
        $query = "UPDATE tbl_cartegory SET cartegory_name = '$cartegory_name' WHERE cartegory_id = '$cartegory_id'";
        $result = $this->db->update($query);
        header("Location: cartegoryList.php");
        return $result;
    }

    public function delete_cartegory($cartegory_id) {
        $query = "DELETE FROM tbl_cartegory WHERE cartegory_id = '$cartegory_id'";
        $result = $this->db->delete($query);
        header("Location: cartegoryList.php");
        return $result;
    }
}
?>