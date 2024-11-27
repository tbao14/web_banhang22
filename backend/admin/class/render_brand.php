<?php

require_once('./backend/database.php');
?>

<?php

class brand {
    private $db;
    public function __construct()
    {
        $this -> db = new Database();
    }
  
    public function show_brand(){
        $query = "SELECT tbl_brand.*, tbl_cartegory.cartegory_name
        FROM tbl_brand INNER JOIN tbl_cartegory ON tbl_brand.cartegory_id = tbl_cartegory.cartegory_id
        ORDER BY tbl_brand.brand_id DESC";
        $result = $this ->db -> select($query);
        return $result;
    }
  
} 
?>

