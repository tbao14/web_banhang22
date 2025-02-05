<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../frontend/css/style.css">
  <link rel="stylesheet" href="js/idk.js">
  <title>Shopping</title>
  <meta name="viewport" content="with-device-width, initial-scale=1.0">
  <link rel="icon" href="./img/smalllogo.png" type="image/x-icon">
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
      <div class="logo"> <img src="img/smalllogo.png" class="logo" style="border-radius: 50%;"></div>
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
          <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
            aria-describedby="search-addon" />
          <span class="input-group-text border-0" id="search-addon">
            <i class="fas fa-search"></i>
          </span>
          <div><a href="login.php"><i class="fa-solid fa-user fa-2xl"></i></a></div>
        </div>
      </li>
      <div class="carousel-container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1" ></li>></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2" ></li>></li>
          </ol>
          <div class="carousel-inner inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="./img/shopee1.png" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="./img/shopee2.png" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="./img/shopee3.jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
          </a>
        </div>
      </div>
    </div>
    <!--div class="content">
      <h1>Welcome to ours page</h1>
      <p>All of ours products are 100% authentic</p>
    </div>
  </div-->
  
<!-----------------------------------cartegory------------------------------------------->
<section>
  <div class="cartegory">
    <div class="cartegory-header">
      <p>Trang chủ</p><span>&#8702;</span><p>Giày nam / nữ</p>
    </div>
    <div class="cartegory-left">
      <ul>
          <div class="cartegory-left-list">
          <li><a href="" class="cartegory-left-header"><i class="fa-solid fa-list" style="color: #103728;"></i> Tất Cả Danh Mục</a></li>
          <li><a href=""><i class="fa-solid fa-caret-right"></i> Giày nam / nữ</a>
            <ul>
              <li><a href="product.php">MLB</a></li>
              <li><a href="">Nike</a></li>
              <li><a href="">Off-White</a></li>
              <li><a href="">Balenciaga</a></li>
              <li><a href="">Gucci</a></li>
            
            </ul>
          </li>
        </div>
        <ul class="cartegory-left-list">
          <li><a href="" class="cartegory-left-header"><i class="fa-solid fa-filter"></i> BỘ LỌC TÌM KIẾM</a></li>
        
        <div class="cartegory-left-list">
          <li><a href="" class="cartegory-left-header">Khoảng Giá</a></li>
          <input type="text" placeholder="Từ"> <span>&#9472; </span><input type="text" placeholder="Đến">
          <button><span>Áp Dụng</span></button>
        </div>
      </ul>
    </div>
    <div class="cartegory-right">
        <div class="cartegory-right-top cartegory">
          <span>Sắp xếp theo</span>
          <div class="cartegory-right-top-item">
            <button><span> Phổ Biến</span></button>
            <button><span> Mới Nhất</span></button>
            <button><span> Bán Chạy</span></button>
          </div>
          <div class="cartegory-right-top-item">
            <select name="" id="">
              <option value="">Giá</option>
              <option value="">Giá: Thấp đến Cao</option>
              <option value="">Giá: Cao đến Thấp</option>
            </select>
          </div>
        </div>
        <div class="cartegory-right-bottom cartegory">
          <div class="cartegory-right-bottom-item">
            <img style="height: 70%;" src="img/shoes/2/product_1.jpg" alt="">
            <div>
              <a href="">Giày Balenciaga đen</a>
              <p>110.000<sup>đ</sup> - 150.000<sup>đ</sup></p>
            </div>
            </div>
          <div class="cartegory-right-bottom-item">
            <img style="height: 70%;" src="img/shoes/2/product_2.jpg" alt="">
            <div>
              <a href="">Giày MLB Big Ball Chunky </a>
              <p>14.000<sup>đ</sup> - 50.000<sup>đ</sup></p>
            </div>
          </div>
          <div class="cartegory-right-bottom-item ">
            <img style="height: 70%;" src="img/shoes/2/product_3.jpg" alt="">
            <div>
              <a href="">Giày MLB Linear Chunky</a>
              <p>129.000<sup>đ</sup><p>
            </div>
          </div>
          <div class="cartegory-right-bottom-item ">
            <img style="height: 70%;" src="img/shoes/2/product_4.jpg" alt="">
            <div>
              <a href="">Quần Gucci chú báo hồng</a>
              <p>140.000<sup></sup> - 150.000<sup>đ</sup></p>
            </div>
          </div>
          <div class="cartegory-right-bottom-item ">
            <img style="height: 70%;" src="img/shoes/2/product_5.jpg" alt="">
            <div>
              <a href="">Nike Jordan 1 Đen  </a>
              <p>97.000<sup>đ</sup> - 150.000<sup>đ</sup></p>
            </div>
          </div>
          <div class="cartegory-right-bottom-item ">
            <img style="height: 70%;" src="img/shoes/2/product_6.jpg" alt="">
            <div>
              <a href="">Nike Air Force 1 Full White</a>
              <p>110.000<sup></sup> - 150.000<sup>đ</sup></p>
            </div>
          </div>
          <div class="cartegory-right-bottom-item ">
            <img style="height: 70%;" src="img/shoes/2/product_7.jpg" alt="">
            <div>
              <a href="">Giày Off-White Low</a>
              <p>110.000<sup></sup> - 150.000<sup>đ</sup></p>
            </div>
          </div>
          <div class="cartegory-right-bottom-item ">
            <img style="height: 70%;" src="img/shoes/2/product_8.jpg" alt="">
            <div>
              <a href="">Giày Off-White Cổ Cao</a>
              <p>110.000<sup></sup> - 150.000<sup>đ</sup></p>
            </div>
          </div>
          
          
        </div>
    </div>
    <div class="cartegory-bottom">
      <button style="background-color: white;"><a href="shoes.php" style="color: black; text-decoration: none;">&#10510;</a></button>
      <button style="background-color: white;border-radius: 3px;"><a href="shoes.php" style="color: black; text-decoration: none;">1</a></button>
      <button style="background-color: red; border-radius: 3px"><a href="#" style="color: white;text-decoration: none;">2</a></button>
      <span style="background-color: white; margin-left: 10px;">...</span>
      <button style="background-color: white;">&#10511;</button>
    </div>
  </div>
</section>


<!--------------------------------footer------------------------------------------------>
    <footer>
        <div class="comment">
          <h5>SHOPPING-GÌ CŨNG CÓ,MUA HẾT Ở SHOPPING </h5>
          <span>Shopping-ứng dụng mua sắm trực tuyến thú vị, tin cậy, an toàn và miễn phí! Shopping là nền tảng giao dịch trực tuyến hàng đầu ở Đông Nam Á, có trụ sở ở khắp các tỉnh trong nước.Với sự đảm bảo của Shopping, bạn sẽ mua hàng trực tuyến an tâm và nhanh chóng hơn bao giờ hết! </span>
          <h6>MUA SẮM VÀ BÁN HÀNG ONLINE ĐƠN GIẢN, NHANH CHÓNG VÀ AN TOÀN</h6>
          <span>Nếu bạn đang tìm kiếm một trang web để mua hàng trực tuyến thì Shopping là một sự lựa chọn tuyệt vời dành cho bạn.shopping là trang thương mại điện tử cho phép người mua dễ dàng tiếp cận thông tin và các chương trình khuyến mại của shop.</span>
          <h6>MUA HÀNG CHÍNH HÃNG TỪ CÁC THƯƠNG HIỆU LỚN VỚI SHOPPING</h6>
          <span>Mua hàng trên Shopping luôn là một trải nghiệm ấn tượng. Dù bạn đang có nhu cầu mua bất kỳ mặt hàng thời trang nam, Giày nam / nữ, đồng hồ, điện thoại, máy tính & laptop,... thì Shopping cũng sẽ đảm bảo cung cấp cho bạn những sản phẩm ưng ý. Bên cạnh đó, Shopping cũng có sự tham gia của các thương hiệu hàng đầu thế giới ở đa dạng nhiều lĩnh vực khác nhau. Trong đó có thể kể đến Samsung, OPPO, Xiaomi, Innisfree, Unilever, P&G, Biti’s,...Các thương hiệu này hiện cũng đã có trên Shopping với hàng trăm mặt hàng chính hãng, được cập nhập liên tục. Là một kênh bán hàng uy tín, Shopping luôn cam kết mang lại cho khách hàng những trải nghiệm mua sắm online giá rẻ, an toàn và tin cậy.</span>
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
            <img src="img/visa.png" alt="">
            <img src="img/spay.png" alt="">
    
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