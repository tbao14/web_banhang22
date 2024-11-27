<?php

require_once('./backend/database.php');
?>

<?php

class cartegory {
    private $db;
    public function __construct()
    {
        $this -> db = new Database();
    }
  
    public function show_cartegory(){
        $query = "SELECT * FROM tbl_cartegory ";
        $result = $this ->db -> select($query);
        return $result;
    }
  
} 
?>

