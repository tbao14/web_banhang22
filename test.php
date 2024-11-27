<?php 
  include "./backend/admin/class/render_product.php";
 
  $dl = new product;
  $kq = $dl-> show_product();
?>
<?php
  include "./backend/admin/class/render_cartegory.php";
  $danhmuc = new cartegory;
  $kq1 = $danhmuc -> show_cartegory();
 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="js/idk.js">
  <title>Shopping</title>
  <meta name="viewport" content="with-device-width, initial-scale=1.0">
  <link rel="icon" href="./frontend/img/smalllogo.png" type="image/x-icon">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">


</head>


<body>

  <div class="banner">
    <div class="navbar">
        <div class="logo"> <img src="./frontend/img/smalllogo.png" class="logo" style="border-radius: 50%;"></div>
        <div class="menu" style="margin-left: 100px;">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Sale</a></li>
            <li><a href="#">Deals for you</a></li>
            <li><a href="#">Coupons</a></li>
            <div class="container">
          </ul>
        </div>
        
      <li class style="display: inline-block ;margin-left: auto;margin-right: 200px;">
        <div class="input-group rounded">
          <form action= "index.php" method="POST" style="display: flex;">
            <input type="text" name="timkiem" value="" style="padding-left: 5px;">
            <input type="submit" name="Tìm kiếm" value="Tìm kiếm">
            <?php
              if(isset($_POST['Tìm kiếm'])){
                $timkiem = $_POST['timkiem'];  
              } else{
                echo $timkiem = false;
              }
            ?>
            <?php 
                include "db/connect.php";
                $sql = "SELECT * FROM tbl_product WHERE product_name LIKE '%$timkiem%' ";
                $result = mysqli_query($conn, $sql);
                while( $row = mysqli_fetch_array($result))
                {
                    echo $row['product_name'];
                }
            ?>
          </form>
          <div><a href="login.php"><i class="fa-solid fa-user fa-2xl"></i></a></div>
          <div><a href=""><i class="fa-solid fa-cart-shopping fa-2xl" ></i></a></div>
        </div>
      </li>
      
</body>

</html>