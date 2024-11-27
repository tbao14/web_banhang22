<?php
require "db/connect.php";
if (isset($_POST["btn-reg"])) 
    
    

//truyen du lieu vao database
    $username = $_POST['username'];
    $fullname= $_POST['fullname'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $Gender = $_POST['Gender'];
    $address = $_POST['address'];
  
    if (!empty($username) || !empty($fullname) || !empty($password) || !empty($email) || !empty($Gender) || !empty($address)) {
        //echo"<pre>";
        //print_r($_POST);

        $sql = "INSERT INTO `info_users` (`username`, `fullname`, `password`, `email`, `Gender`, `address`) VALUE('$username', '$fullname',md5('$password'), '$email', '$Gender', '$address') ";

        if ($conn->query($sql)===true){
            echo "Data saved";

        }else{
            echo "{$sql} Error".$conn->error;
        }
    
    }else{
    
        echo "You need to enter the information";
    }
    header("location: login.php")
?>
<!-- <a href="login.php">Back to login page</a> -->