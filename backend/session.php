<?php
class Session{
    /* td mỗi lần thêm vào giỏ hàng hoặc thanh toán giỏ hàng, đăng nhập admin (lưu phiên giao dịch)
        lưu phiên gdich xoaas ko làm mới trang
    */
    public static function init(){ 
        if (version_compare(phpversion(), 's.4.0'. '<')) {
            if (session_id() == '') {
                session_start();
            }
        } else {
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
        }
        
    }

    public static function set($key, $val){
        /*  key thành giá trị (usedname nhập là admin xuất ra  giá trị là admin)*/
        $_SESSION[$key] = $val;
    }

    public static function get($key){
        if (isset($_SESSION[$key])) {
            return $_SESSION[$key];
        } else {
            return false;
        }
    }

    public static function checkSession(){
        /* check phiên làm việc có tồn tại hay ko */
        self::init();
        if (self::get("login")== false) {
            self::destroy();
            header("Location:login.php");
            }
        }
        
    public static function checkLogin(){
        self::init();
        if (self::get("adminlogin")== true) {
            header("Location:index.php");
        }
    }    
    
    public static function destroy(){
        session_destroy();
        header("location:login.php");
    }
}

?>