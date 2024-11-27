<?php
    // Assuming you have a valid database connection
    $connection = mysqli_connect("hostname", "username", "password", "database");

    // Check connection
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if(isset($_POST["Tìm kiếm"])){
        $sp = $_POST["timkiem"];
        if($sp == ""){
            echo "Vui lòng nhập vào thanh tìm kiếm! ";
        } else{
            $sql = "SELECT * FROM tbl_product WHERE product_name LIKE '%$sp%'";
            $query = mysqli_query($connection, $sql);
            $count = mysqli_num_rows($query);

            if($count <= 0){
                echo "Không có sản phẩm nào ".$sp;
            } else{
                echo "Tìm thấy ".$count. " kết quả với từ ".$sp;
            }
        }
    }

    // Don't forget to close the connection when you're done
    mysqli_close($connection);
?>
