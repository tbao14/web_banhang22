<?php
include "config.php";
?>

<?php
class Database{
    public $host  = DB_HOST;
    public $user  = DB_USER;
    public $pass  = DB_PASS;
    public $dbname = DB_NAME;

    public $link;
    public $error;

public function __construct(){
    $this->connectDB(); /* file cha chạy từ */
}

private function connectDB(){
    $this->link = new mysqli($this->host, $this->user,$this->pass,$this->dbname);
    if(!$this->link){
        $this->error ="Connecttion fail".$this->link->connect_error;
    return false;
    }
}
/* ko kết nối đc  */
// select data chọn ra trong dữ liệu
public function select($query){
    $result = $this->link->query($query) or
     die($this->link->error.__LINE__);
    if($result->num_rows > 0){
        return $result;
    } else {
        return false;
    }
}

    /* INsert data chèn dữ  */
public function insert($query){
    $insert_row = $this->link->query($query) or
     die($this->link->error.__LINE__);
    if($insert_row){
        return $insert_row;
    } else {
        return false;
    }
}
    /* update data thêm  */
public function update($query){
    $update_row = $this->link->query($query) or
     die($this->link->error.__LINE__);
    if($update_row){
        return $update_row;
    } else {
        return false;
    }
}

    /* Delete data xóa */
public function delete($query){
    $delete_row = $this->link->query($query) or 
     die($this->link->error.__LINE__);
    if($delete_row){
        return $delete_row;
    } else {
        return false;
    }
   }
}
?>