<?php

include "../../database.php";
?>

<?php

class product {
    private $db;
    public function __construct()
    {
        $this -> db = new Database();
    }
    public function show_cartegory(){
        $query = "SELECT * FROM tbl_cartegory ORDER BY cartegory_id DESC";
        $result = $this ->db -> select($query);
        return $result;
    }
    public function show_brand(){
        $query = "SELECT tbl_brand.*, tbl_cartegory.cartegory_name
        FROM tbl_brand INNER JOIN tbl_cartegory ON tbl_brand.cartegory_id = tbl_cartegory.cartegory_id
        ORDER BY tbl_brand.brand_id DESC";
        $result = $this ->db -> select($query);
        return $result;
    }
    public function show_product(){
        $query = "SELECT * FROM tbl_product";
        $result = $this ->db -> select($query);
        return $result;
    }


    public function insert_product() {
        $product_name = $_POST['product_name'];
        $cartegory_id= $_POST['cartegory_id'];
        $brand_id = $_POST['brand_id'];
        $product_gsp = $_POST['product_gsp'];
        $product_km = $_POST['product_km'];
        $product_mt = $_POST['product_mt'];
        $product_img = $_FILES['product_img']['name'];
        /* $x = str_replace('\\','/',dirname(__FILE__,4))."/frontend/img/".$_FILES['product_img']['name'];
    
        move_uploaded_file($_FILES['product_img']['tmp_name'],$x); */

        move_uploaded_file($_FILES['product_img']['tmp_name'],"../upload_images/".$_FILES['product_img']['name']);
        /* tải ảnh lên database */
        $query = "INSERT INTO tbl_product ( 
            product_name,
            cartegory_id,
            brand_id,
            product_gsp,
            product_km,
            product_mt,
            product_img) 
            VALUES (
            '$product_name',
            '$cartegory_id',
            '$brand_id',
            '$product_gsp',
            '$product_km',
            '$product_mt',
            '$product_img')";
        $result = $this ->db->insert($query);


        header('location:productlist.php');
        return $result;
    }
    public function get_product($product_id) {
        $query = "SELECT * FROM tbl_product WHERE product_id = '$product_id'";
        
        $result = $this ->db -> select($query);
        return $result;
    }
    public function update_product(
        $product_name,
        $cartegory_id,
        $brand_id,
        $product_gsp,
        $product_km,
        $product_mt,
        $product_img,
        $product_id) {
        $query = "UPDATE tbl_product SET product_name = '$product_name',
        cartegory_id = '$cartegory_id',
        product_gsp = '$product_gsp',
        brand_id = '$brand_id',
        product_km = '$product_km', 
        product_mt = '$product_mt', 
        product_img = '$product_mt', 
        product_img = '$product_img' WHERE product_id = '$product_id'";
        $result = $this ->db -> update($query);
        header('location:productlist.php');
        return $result;
    }

    
    public function delete_product($product_id) {
        $query = "DELETE FROM tbl_product WHERE product_id = '$product_id' ";
        $result = $this -> db -> delete($query);
        header('location:productlist.php');
        return $result;
    }
    
    
    
    
    public function update_brand($cartegory_id, $brand_name, $brand_id) {
        $query = "UPDATE tbl_brand SET brand_name = '$brand_name',cartegory_id = '$cartegory_id' WHERE brand_id = '$brand_id'";
        $result = $this ->db -> update($query);
        header('location:brandlist.php');
        return $result;
    }


    public function get_cartegory($cartegory_id) {
        $query = "SELECT * FROM tbl_cartegory WHERE cartegory_id = '$cartegory_id'";
        $result = $this ->db -> select($query);
        return $result;
    }
    public function delete_brand($brand_id) {
        $query = "DELETE FROM tbl_brand WHERE brand_id = '$brand_id' ";
        $result = $this -> db -> delete($query);
        header('location:brandlist.php');
        return $result;
    }
} 
?>