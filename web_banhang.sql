-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 06, 2023 lúc 05:36 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web_banhang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `info_users`
--

CREATE TABLE `info_users` (
  `UserID` int(11) NOT NULL,
  `fullname` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `Gender` enum('Male','Female','Other') NOT NULL,
  `address` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `info_users`
--

INSERT INTO `info_users` (`UserID`, `fullname`, `username`, `password`, `email`, `Gender`, `address`) VALUES
(31, 'Nguyễn Anh Tuấn', 'H1norashi', 'e10adc3949ba59abbe56e057f20f883e', 'anhtuan10803@gmail.com', 'Male', 'Building NO3-T1 Embassy Garden, Xuan Tao ward, Bac Tu Liem district, Hanoi'),
(32, 'Nguyễn Anh Tuấn', 'dabbingking123456@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'anhtuan10803@gmail.com', 'Male', 'Building NO3-T1 Embassy Garden, Xuan Tao ward, Bac Tu Liem district, Hanoi'),
(33, 'Nguyễn Anh Tuấn', 'dabbingking123456@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'anhtuan10803@gmail.com', 'Male', 'Building NO3-T1 Embassy Garden, Xuan Tao ward, Bac Tu Liem district, Hanoi'),
(34, 'Nguyễn Anh Tuấn', 'H1norashi', 'e10adc3949ba59abbe56e057f20f883e', 'anhtuan10803@gmail.com', 'Male', 'Building NO3-T1 Embassy Garden, Xuan Tao ward, Bac Tu Liem district, Hanoi'),
(35, 'Trần Đức Mạnh', 'Mạnh', '827ccb0eea8a706c4c34a16891f84e7b', 'tranmanh15203@gmail.com', 'Male', '94 trần quốc vượng'),
(36, 'Trần Đức Mạnh', 'Manh11', '827ccb0eea8a706c4c34a16891f84e7b', 'ttranmanh15203@gmail.com', 'Male', '94 trần quốc vượng'),
(37, 'Trần Đức Mạnh', 'Manh11', '827ccb0eea8a706c4c34a16891f84e7b', 'ttranmanh15203@gmail.com', 'Male', '94 trần quốc vượng'),
(38, 'Trần Đức Mạnh', 'Manh11', '827ccb0eea8a706c4c34a16891f84e7b', 'ttranmanh15203@gmail.com', 'Male', '94 trần quốc vượng'),
(39, 'Trần Đức Mạnh', 'Manh11', '827ccb0eea8a706c4c34a16891f84e7b', 'ttranmanh15203@gmail.com', 'Male', '94 trần quốc vượng'),
(40, 'Trần Đức Mạnh', 'Manh11', '827ccb0eea8a706c4c34a16891f84e7b', 'ttranmanh15203@gmail.com', 'Male', '94 trần quốc vượng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `brand_id` int(11) NOT NULL,
  `cartegory_id` int(11) NOT NULL,
  `brand_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_brand`
--

INSERT INTO `tbl_brand` (`brand_id`, `cartegory_id`, `brand_name`) VALUES
(1, 0, 'quan au'),
(3, 0, 'quan au'),
(7, 70, 'Quần'),
(16, 68, 'Áo'),
(17, 74, 'Lego'),
(18, 72, 'Dior'),
(19, 72, 'Louis Vuitton');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cartegory`
--

CREATE TABLE `tbl_cartegory` (
  `cartegory_id` int(11) NOT NULL,
  `cartegory_name` varchar(255) NOT NULL,
  `href` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_cartegory`
--

INSERT INTO `tbl_cartegory` (`cartegory_id`, `cartegory_name`, `href`) VALUES
(68, 'THỜI TRANG NAM', 'cartegory.php'),
(70, 'THỜI TRANG NỮ', 'cartegory_female.php'),
(71, 'GIÀY DÉP', 'shoes.php'),
(72, 'PHỤ KIỆN THỜI TRANG ', ''),
(73, 'HÀNG HIỆU', ''),
(75, 'VỀ CHÚNG TÔI', ''),
(76, 'MÃ GIẢM GIÁ', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `cartegory_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_gsp` varchar(255) NOT NULL,
  `product_km` varchar(255) NOT NULL,
  `product_mt` varchar(5000) NOT NULL,
  `product_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `product_name`, `cartegory_id`, `brand_id`, `product_gsp`, `product_km`, `product_mt`, `product_img`) VALUES
(45, 'Áo ngắn tay', 70, 16, '120.000', '', '', 'b2.2.jfif'),
(47, 'Áo sơ mi', 0, 0, '10', '', 'Chất liệu thoáng mát', 'b8.jfif'),
(48, 'Ao len', 0, 0, '50000', '59.999', 'dge', 'b4.2.jfif'),
(49, 'ao nam', 0, 0, '50000', '', '', 'b6.jfif'),
(50, 'áo Hoodie nam nữ', 0, 0, '111110000', '', '', 'b4.2.jfif'),
(51, 'áo sơ mi', 0, 0, '2233', '', '', 'b8.1.jfif'),
(52, 'giày nam', 71, 0, '200.000', '', '', 'Nike-SB-Dunk-Low-Ben-Jerrys-Chunky-Dunky-Product.webp'),
(53, 'g', 71, 0, '10.000', '', '', 'nike-air-jordan-1-nrg-off-white.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `info_users`
--
ALTER TABLE `info_users`
  ADD PRIMARY KEY (`UserID`);

--
-- Chỉ mục cho bảng `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Chỉ mục cho bảng `tbl_cartegory`
--
ALTER TABLE `tbl_cartegory`
  ADD PRIMARY KEY (`cartegory_id`);

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `info_users`
--
ALTER TABLE `info_users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT cho bảng `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `tbl_cartegory`
--
ALTER TABLE `tbl_cartegory`
  MODIFY `cartegory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
