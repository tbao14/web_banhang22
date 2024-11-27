<?php
require_once "../../../db/connect.php";
if (isset($_POST['btn-reg'])) {

      $email = addslashes($_POST['email']);
      $password = addslashes($_POST['password']);
     
     if (empty($password) || empty($email)) {
      echo "Please enter the information needed";
     }
     $query = "SELECT email, password ,role FROM info_users WHERE email='$email'";
    if (!($conn->query($query))->fetch_array()) {
        echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    
    }
    

    $row = ($conn->query($query))->fetch_array();
   
    $password = md5($password);

    //So sánh 2 mật khẩu có trùng khớp hay không
    if ($password != $row['password']) {
        echo $row['password'];
        echo "<br>";  
        echo $password;
        exit;
    }
    
    $_SESSION ['login'] = $row['role'];
       //echo $_SESSION['login'];
        // print_r($row);
        //echo $row['role'];
    
    if(!$_SESSION['login']) {
     
        echo "hello";
    }

    if($_SESSION['login'] && $_SESSION['login']!='admin') {
        echo"user";
        /* header("Location:index.php"); */ /* them location file user đi vào */
        header("Location:../../../index.php");
        exit;

    }
    if($_SESSION['login'] && $_SESSION['login']=='admin') {
        /* echo "admin"; */
        //echo "<a href='.php'>1</a>"; thêm location file admin đi vào
        header("location: productlist.php");
    }  

    $_SESSION['username'] = $username;
    
    
    //echo "Xin chào " . $username . ". Bạn đã đăng nhập thành công. <a href='category.php'>Về trang chủ</a>";
    //die();
   }

?>