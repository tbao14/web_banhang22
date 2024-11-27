<?php

require_once('./backend/database.php');
?>

<?php

class product {
    private $db;
    public function __construct()
    {
        $this -> db = new Database();
    }
  
    public function show_product(){
        $query = "SELECT * FROM tbl_product ";
        $result = $this ->db -> select($query);
        return $result;
    }
  
} 
?>

