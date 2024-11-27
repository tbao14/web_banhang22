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
          <form action= "" method="GET" style="display: flex;">
            <input type="text" name="keyword" value="" style="padding-left: 5px;">
            <input type="submit" name="search" value="Tìm kiếm">

            <?php 
              include "db/connect.php";
            ?>
            <?php
              if(isset($_GET['search'])) {
                $keyword = $_GET['keyword'];
                $sql_timkiem= "SELECT * FROM tbl_product WHERE product_name LIKE '%". $keyword . "%' ";
                $query_timkiem= mysqli_query($conn, $sql_timkiem);
                /* header("location: index2.php"); */
              }
            ?>
          </form>
          <div><a href="login.php"><i class="fa-solid fa-user fa-2xl"></i></a></div>
          <div><a href=""><i class="fa-solid fa-cart-shopping fa-2xl" ></i></a></div>
        </div>
      </li>
      <div class="carousel-container" style="display: flex;">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="width: 70%;">
          <ul class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1" ></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2" ></li>
          </ul>
          <div class="carousel-inner inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="./frontend/img/shopee1.png" alt="First slide" style="height: 505px;">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="./frontend/img/shopee2.png" alt="Second slide" style="height: 505px;">
            </div>
            <div class="carousel-item"><img class="d-block w-100" src="./frontend/img/shopee3.jpg" alt="Third slide" style="height: 505px;">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
          </a>
        </div>
        <div class="carousel slide-right" style="width: 30%; margin-left: 10px;">
          <img class="d-block w-100" src="./frontend/img/shopee3.jpg" alt="Third slide" style="width: 50%; height: 250px;">
          <img class="d-block w-100" src="./frontend/img/shopee3.jpg" alt="Third slide" style="width: 50%; height: 250px; margin-top: 5px;">
        </div>
      </div>
    </div>

  </div>
  <nav class="navbrand navbar-light">
    <div class="container-fluid">
      <?php 
        while($result = $kq1->fetch_assoc()){ 
      ?>
      <li><a href="<?php echo $result['href'] ?>"><?php echo $result['cartegory_name'] ?></a></li>
      <?php 
     
        } 
      ?>
    </div>
    <div class="header1">
      <span>GỢI Ý SẢN PHẨM</span>
    </div>
    
<!-------------------------------------Danh mục sản phẩm------------------------------->
    <!-- <div class="container-fluid-bottom">
      <?php 
        while($result = $kq->fetch_assoc()){ 
      ?>
      <div class="container-fluid-bottom-item">
       
        <img src="./backend/admin/upload_images/<?php echo $result['product_img'] ?>" alt="">
        <div>
          <h6 href="New folder/product.php"><?php echo $result['product_name'] ?></h6>
          <p><?php echo $result['product_gsp'] ?><sup>đ</sup></p>
        </div>
      </div>
      <?php 
        } 
      ?>
      
    </div> -->




    <div class="container-fluid-bottom">
        <?php 
          while($rowtimkiem = mysqli_fetch_array($query_timkiem)) {
        ?>
        <div class="container-fluid-bottom-item">
            <form action="<?php echo $rowtimkiem['product_id'] ?>" method="PORT">
            <img src="./backend/admin/upload_images/<?php echo $rowtimkiem['product_img'] ?>" alt="">
            <div>
                <h6 href="New folder/product.php"><?php echo $rowtimkiem['product_name'] ?></h6>
                <p><?php echo $rowtimkiem['product_gsp'] ?><sup>đ</sup></p>
            </div>
            </form>
        </div>
        <?php 
            } 
        ?>
      
    </div>

  </nav>
<!--------------------------------Footer---------------------------->
  <footer>
    <div class="comment">
      <h5>SHOPPING-GÌ CŨNG CÓ,MUA HẾT Ở SHOPPING </h5>
      <span>Shopping-ứng dụng mua sắm trực tuyến thú vị, tin cậy, an toàn và miễn phí! Shopping là nền tảng giao dịch trực tuyến hàng đầu ở Đông Nam Á, có trụ sở ở khắp các tỉnh trong nước.Với sự đảm bảo của Shopping, bạn sẽ mua hàng trực tuyến an tâm và nhanh chóng hơn bao giờ hết! </span>
      <h6>MUA SẮM VÀ BÁN HÀNG ONLINE ĐƠN GIẢN, NHANH CHÓNG VÀ AN TOÀN</h6>
      <span>Nếu bạn đang tìm kiếm một trang web để mua hàng trực tuyến thì Shopping là một sự lựa chọn tuyệt vời dành cho bạn.shopping là trang thương mại điện tử cho phép người mua dễ dàng tiếp cận thông tin và các chương trình khuyến mại của shop.</span>
      <h6>MUA HÀNG CHÍNH HÃNG TỪ CÁC THƯƠNG HIỆU LỚN VỚI SHOPPING</h6>
      <span>Mua hàng trên Shopping luôn là một trải nghiệm ấn tượng. Dù bạn đang có nhu cầu mua bất kỳ mặt hàng thời trang nam, thời trang nữ, đồng hồ, điện thoại, máy tính & laptop,... thì Shopping cũng sẽ đảm bảo cung cấp cho bạn những sản phẩm ưng ý. Bên cạnh đó, Shopping cũng có sự tham gia của các thương hiệu hàng đầu thế giới ở đa dạng nhiều lĩnh vực khác nhau. Trong đó có thể kể đến Samsung, OPPO, Xiaomi, Innisfree, Unilever, P&G, Biti’s,...Các thương hiệu này hiện cũng đã có trên Shopping với hàng trăm mặt hàng chính hãng, được cập nhập liên tục. Là một kênh bán hàng uy tín, Shopping luôn cam kết mang lại cho khách hàng những trải nghiệm mua sắm online giá rẻ, an toàn và tin cậy.</span>
    </div>
    <div class="comment1">
      <div class="comment1-1">
        <h6>CHĂM SÓC KHÁCH HÀNG</h6>
        <p>Trung Tâm Trợ Giúp</p>
        <p>Hướng Dẫn Mua Hàng</p>
        <p>Thanh Toán</p>
        <p>Trả Hàng Hoàn Tiền</p>
        <p>Chính Sách Bảo Hành</p>
      </div>
      <div class="comment1-1">
        <h6>VỀ SHOPPING</h6>
        <p>Giới Thiệu Về Shopping</p>
        <p>Tuyển Dụng</p>
        <p>Điều Khoản Shopping</p>
        <p>Chính Sách Bảo Mật</p>
        <p>Chính Hãng</p>
      </div>
      <div class="comment1-1">
        <h6>THANH TOÁN</h6>
        <img src="./frontend/img/visa.png" alt="">
        <img src="./frontend/img/spay.png" alt="">

      </div>
      <div class="comment1-1">
        <h6>THEO DÕI CHÚNG TÔI</h6>
        <p><i class="fa-brands fa-facebook"></i> Facebook</p>
        <p><i class="fa-brands fa-square-instagram"></i> Instagram</p>
        <p><i class="fa-brands fa-tiktok"></i> Tik Tok</p>
      </div>
    </div>
  </footer>
</div>
</body>

</html>