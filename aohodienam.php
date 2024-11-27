<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aohoddienam</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/style.css">
</head>
<style>
    * {
        /*all*/
        margin: 0px;
        padding-top: 0px;
        font-family: popp;
        box-sizing: border-box;
    }

    a {
        text-decoration: none;
    }

    ul {
        list-style: none;
    }

    body {
        background-color: #e3e3e3;
    }

    /*---product*/
    .product-category {
        display: block;
    }

    .product-details {
        max-width: 1200px;
        width: 90%;
        display: grid;
        grid-template-columns: 1fr 1fr;
        margin: 50px auto;
        min-height: 100vh;
    }

    .product-img {
        background-color: #f3f3f3;
        position: relative;
        width: 100%;
        overflow: hidden;
    }

    .mySwiper {
        width: 100%;
        height: 100%;

    }

    .slider-btns {
        position: absolute;
        right: 0px;
        bottom: 0px;
        z-index: 101;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .swiper-button-next,
    .swiper-button-prev {
        position: static !important;
        width: 80px !important;
        height: 60px !important;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #ffffff;
    }

    .swiper-slide img {
        width: 100%;
        height: 100%;
        object-position: center;
        object-fit: cover;

    }

    .product-text {
        background-color: #ffffff;
        padding: 60px;

    }

    .product-text .product-category {

        color: #000;
        font: 14px;
    }

    .product-text h3 {
        color: #252525;
        font-size: 50px;
        font-weight: 600;
        margin: 10px 0px;
    }

    .product-text .product-price {
        font-size: 30px;
        color: #d0011b;
        font-weight: 500;
    }

    .favorite-tag {
        position: relative;
        display: inline-flex;
        background-color: #ee4d2d;
        color: white;
        padding-inline: 5px;
        border-radius: 10%;
        margin-right: 10px;
        vertical-align: middle;
    }

    .product-size-container strong {
        border: #000;
        font-size: 1rem;
        font-weight: 600;
        letter-spacing: 2px;
        border-bottom: 1px solid black;
    }

    .product-size {
        display: flex;
        justify-content: flex-start;
        align-items: center;
        flex-wrap: wrap;
        margin-top: 20px;
    }

    .product-size label {
        font-size: 1.1rem;
        background-color: #f3f3f3;
        width: 40px;
        height: 40px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-right: 10px;
        cursor: pointer;
        user-select: none;
        font-weight: 500;
    }

    .s-checkbox:checked+.s-label {
        color: #ee4d2d;
        border: 1px solid #ee4d2d;
    }

    .s-checkbox {
        display: none;
    }

    .product-buttons {
        display: grid;
        grid-template-columns: 1fr 1fr;
        margin: 30px 0px;
        grid-gap: 20px;

    }

    .product-buttons a {
        width: 100%;
        height: 45px;
        display: flex;
        justify-content: center;
        align-items: center;
        text-transform: uppercase;
        font-weight: 600;
        letter-spacing: 0.5px;
        font-size: 0.5rem;
        border-radius: 4px;
    }

    .product-buttons .giohang-btn {
        background-color: rgba(255, 87, 34, 0.1);
        color: #ee4d2d;
    }

    .product-buttons .muangay-btn {
        color: white;
        background-color: #ee4d2d;
    }
</style>

<body>
   
        <div class="header1">
            <span></span>
        </div>

        <section class="product-page">
            <div class="product-details">

                <div class="product-img">
                    <!-- Swiper -->
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <!--1-->
                            <div class="swiper-slide">
                                <img src="./img/b4.jfif" />
                            </div>
                            <!--2-->
                            <div class="swiper-slide">
                                <img src="./img/b4.1.jfif" />
                            </div>
                            <div class="swiper-slide">
                                <img src="./img/b4.2.jfif" />
                            </div>

                        </div>
                        <div class="slider-btns">
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>

                        </div>
                    </div>
                </div>

                <div class="product-text">
                    <span class="product-category">Thời Trang Nam</span>
                    <div class="favorite-tag">
                        Yeu thich
                    </div>
                    <h3 style="display: inline;"> Áo thun tia sét cổ co giãn </h3>
                    <div>
                        <span class="product-price">50.000đ</span>
                    </div>
                    <div style="display: flex; align-items: center;margin: 20px 0;">
                        <h4 style="width: 110px;color: #757575;font-weight: 400;">Mã giảm giá của shop</h4>
                        <span
                            style="background-color: #EE4D2D;font-size: 16px;color: #fff;padding: 5px;font-weight: 800;padding-right: 15px;">giảm
                            5k</span>
                    </div>
                    <div style="display: flex; align-items: center;">
                        <h4 style="width: 110px;color: #757575;font-weight: 400;">Combo khuyến mãi</h4>
                        <span
                            style="border: 1px solid #EE4D2D;font-size: 16px;color: #EE4D2D;padding: 5px;font-weight: 800;padding-right: 15px;">mua
                            2 giảm 10%</span>
                    </div>
                    <!--size container -->
                    <div class="product-size-container">
                        <strong>Chọn Size:-</strong>
                        <!--size only-->
                        <div class="product-size">
                            <!--S-->
                            <input type="checkbox" class="s-checkbox" id="S-S">
                            <label for="S-S" class="s-label">S</label>
                            <!--M-->
                            <input type="checkbox" class="s-checkbox" id="S-M">
                            <label for="S-M" class="s-label">M</label>
                            <!--S-->
                            <input type="checkbox" class="s-checkbox" id="S-L">
                            <label for="S-L" class="s-label">L</label>
                            <!--S-->
                            <input type="checkbox" class="s-checkbox" id="S-XL">
                            <label for="S-XL" class="s-label">XL</label>

                        </div>
                    </div>
                    <div class="product-buttons">
                        <a class="giohang-btn" href="">Thêm vào giỏ hàng</a>
                        <a class="muangay-btn" href="checkout.html">Mua ngay</a>
                    </div>
                </div>

            </div>

        </section>
        <script src="https://code.jquery.com/jquery-3.7.1.js"
            integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
        <!-- Swiper JS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

        <script>
            $('.s-checkbox').on('change', function () {
                $('.s-checkbox').not(this).prop('checked', false);
            });
            //swiperjs//
            var swiper = new Swiper(".mySwiper", {
                slidesPerView: 1,
                spaceBetween: 10,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                breakpoints: {
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    768: {
                        slidesPerView: 4,
                        spaceBetween: 40,
                    },
                    1024: {
                        slidesPerView: 2,
                        spaceBetween: 0,
                    },
                },
            });
        </script>
        <footer>
            <div class="comment">
                <h5>SHOPPING-GÌ CŨNG CÓ,MUA HẾT Ở SHOPPING </h5>
                <span>Shopping-ứng dụng mua sắm trực tuyến thú vị, tin cậy, an toàn và miễn phí! Shopping là nền tảng
                    giao dịch trực tuyến hàng đầu ở Đông Nam Á, có trụ sở ở khắp các tỉnh trong nước.Với sự đảm bảo của
                    Shopping, bạn sẽ mua hàng trực tuyến an tâm và nhanh chóng hơn bao giờ hết! </span>
                <h6>MUA SẮM VÀ BÁN HÀNG ONLINE ĐƠN GIẢN, NHANH CHÓNG VÀ AN TOÀN</h6>
                <span>Nếu bạn đang tìm kiếm một trang web để mua hàng trực tuyến thì Shopping là một sự lựa chọn tuyệt
                    vời dành cho bạn.shopping là trang thương mại điện tử cho phép người mua dễ dàng tiếp cận thông tin
                    và các chương trình khuyến mại của shop.</span>
                <h6>MUA HÀNG CHÍNH HÃNG TỪ CÁC THƯƠNG HIỆU LỚN VỚI SHOPPING</h6>
                <span>Mua hàng trên Shopping luôn là một trải nghiệm ấn tượng. Dù bạn đang có nhu cầu mua bất kỳ mặt
                    hàng thời trang nam, thời trang nữ, đồng hồ, điện thoại, máy tính & laptop,... thì Shopping cũng sẽ
                    đảm bảo cung cấp cho bạn những sản phẩm ưng ý. Bên cạnh đó, Shopping cũng có sự tham gia của các
                    thương hiệu hàng đầu thế giới ở đa dạng nhiều lĩnh vực khác nhau. Trong đó có thể kể đến Samsung,
                    OPPO, Xiaomi, Innisfree, Unilever, P&G, Biti’s,...Các thương hiệu này hiện cũng đã có trên Shopping
                    với hàng trăm mặt hàng chính hãng, được cập nhập liên tục. Là một kênh bán hàng uy tín, Shopping
                    luôn cam kết mang lại cho khách hàng những trải nghiệm mua sắm online giá rẻ, an toàn và tin
                    cậy.</span>
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