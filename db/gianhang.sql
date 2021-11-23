-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2021 at 07:11 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gianhang`
--

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE `nguoidung` (
  `email` varchar(250) COLLATE utf8_vietnamese_ci NOT NULL,
  `username` varchar(250) COLLATE utf8_vietnamese_ci NOT NULL,
  `password` varchar(250) COLLATE utf8_vietnamese_ci NOT NULL,
  `type_id` int(11) NOT NULL,
  `sdt` varchar(10) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `gt` varchar(3) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `điachi` varchar(250) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `nen` varchar(250) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `avatar` varchar(250) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`email`, `username`, `password`, `type_id`, `sdt`, `gt`, `điachi`, `nen`, `avatar`, `created_at`, `updated_at`) VALUES
('1951120126@sv.ut.edu.vn', 'Nguyễn Như Phượng', 'e10adc3949ba59abbe56e057f20f883e', 2, '0707583174', 'Nữ', 'Xóm 2, Thuận Hiệp, Bình Thuận, Tây Sơn, Bình Định', NULL, 'blob:http://localhost:8080/8bec9f7a-9681-43d4-8609-70c2c743b836', '2021-11-10 06:43:20', '2021-11-23 07:17:00'),
('1954030051@sv.ut.edu.vn', 'Thảo', '17f9dd3b1bcc120b7052d5ba4a2a41b9', 2, NULL, NULL, NULL, 'https://chiase24.com/wp-content/uploads/2019/09/T%E1%BB%95ng-h%E1%BB%A3p-c%C3%A1c-h%C3%ACnh-%E1%BA%A3nh-l%C3%A0m-h%C3%ACnh-n%E1%BB%81n-m%C3%A0u-x%C3%A1m-%C4%91%E1%BA%B9p-nh%E1%BA%A5t-27.jpg', 'https://chiase24.com/wp-content/uploads/2019/09/T%E1%BB%95ng-h%E1%BB%A3p-c%C3%A1c-h%C3%ACnh-%E1%BA%A3nh-l%C3%A0m-h%C3%ACnh-n%E1%BB%81n-m%C3%A0u-x%C3%A1m-%C4%91%E1%BA%B9p-nh%E1%BA%A5t-27.jpg', '2021-11-21 07:45:50', '2021-11-21 07:45:50'),
('lanhthilehang@gmail.com', 'Lãnh Thị Lệ Hằng', 'c5e519f8921255ffd9a1207706a74f8c', 2, NULL, NULL, NULL, 'https://chiase24.com/wp-content/uploads/2019/09/T%E1%BB%95ng-h%E1%BB%A3p-c%C3%A1c-h%C3%ACnh-%E1%BA%A3nh-l%C3%A0m-h%C3%ACnh-n%E1%BB%81n-m%C3%A0u-x%C3%A1m-%C4%91%E1%BA%B9p-nh%E1%BA%A5t-27.jpg', 'https://chiase24.com/wp-content/uploads/2019/09/T%E1%BB%95ng-h%E1%BB%A3p-c%C3%A1c-h%C3%ACnh-%E1%BA%A3nh-l%C3%A0m-h%C3%ACnh-n%E1%BB%81n-m%C3%A0u-x%C3%A1m-%C4%91%E1%BA%B9p-nh%E1%BA%A5t-27.jpg', '2021-11-21 07:20:25', '2021-11-21 07:20:25'),
('minhanh@gmail.com', 'Minh Anh', 'e10adc3949ba59abbe56e057f20f883e', 2, NULL, NULL, NULL, 'https://chiase24.com/wp-content/uploads/2019/09/T%E1%BB%95ng-h%E1%BB%A3p-c%C3%A1c-h%C3%ACnh-%E1%BA%A3nh-l%C3%A0m-h%C3%ACnh-n%E1%BB%81n-m%C3%A0u-x%C3%A1m-%C4%91%E1%BA%B9p-nh%E1%BA%A5t-27.jpg', 'https://chiase24.com/wp-content/uploads/2019/09/T%E1%BB%95ng-h%E1%BB%A3p-c%C3%A1c-h%C3%ACnh-%E1%BA%A3nh-l%C3%A0m-h%C3%ACnh-n%E1%BB%81n-m%C3%A0u-x%C3%A1m-%C4%91%E1%BA%B9p-nh%E1%BA%A5t-27.jpg', '2021-11-20 05:01:48', '2021-11-20 05:01:48'),
('nguyenthiphuong2@gmail.com', 'Xuân Thời', 'e10adc3949ba59abbe56e057f20f883e', 2, '0842758921', 'Nữ', 'Xóm 4, Phú Hưng, Bình Tân, Tây Sơn, Bình Định', 'https://chiase24.com/wp-content/uploads/2019/09/T%E1%BB%95ng-h%E1%BB%A3p-c%C3%A1c-h%C3%ACnh-%E1%BA%A3nh-l%C3%A0m-h%C3%ACnh-n%E1%BB%81n-m%C3%A0u-x%C3%A1m-%C4%91%E1%BA%B9p-nh%E1%BA%A5t-27.jpg', 'blob:http://localhost:8080/66b9655b-2054-4602-a467-9a5a47adec82', '2021-11-22 03:18:18', '2021-11-23 04:53:36'),
('quanglinh@gmail.com', 'Quang Linh', 'e64b78fc3bc91bcbc7dc232ba8ec59e0', 1, '', '', '', NULL, NULL, '2021-11-11 06:14:25', '2021-11-11 06:27:35'),
('xuanthoi@gmail.com', 'Xuân Thời', 'e10adc3949ba59abbe56e057f20f883e', 2, '', '', '', NULL, NULL, '2021-11-17 02:21:45', '2021-11-23 04:00:35');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` varchar(12) COLLATE utf8_vietnamese_ci NOT NULL,
  `order_email` varchar(250) COLLATE utf8_vietnamese_ci NOT NULL,
  `fullname` varchar(100) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `phone_number` varchar(20) COLLATE utf8_vietnamese_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `total` int(11) NOT NULL,
  `order_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_email`, `fullname`, `phone_number`, `email`, `address`, `total`, `order_date`) VALUES
('ĐH0210467646', 'xuanthoi@gmail.com', 'Xuân Thời', '0712548695', 'xuanthoi@gmail.com', 'Tây Vinh, Tây Sơn, Bình Định', 120000, '2021-11-17 02:10:46'),
('ĐH0212424280', 'quanglinh@gmail.com', 'Quang Linh', '0707583174', 'quanglinh@gmail.com', 'Bình Thuận, Tây Sơn , Bình Định', 155000, '2021-11-17 02:12:42'),
('ĐH0634350488', '1951120126@sv.ut.edu.vn', 'Lan Anh', '0795847589', 'lananh@gmail.com', 'Bình Thuận, Tây Sơn , Bình Định', 25000, '2021-11-18 06:34:35'),
('ĐH0707126445', '1951120126@sv.ut.edu.vn', 'Xuân Thời', '0707586958', 'nguyenthinhuphuong2@gmail.com', 'Tây Vinh, Tây Sơn, Bình Định', 20000, '2021-11-19 07:07:12'),
('ĐH0748269982', 'lanhthilehang@gmail.com', 'Lãnh Thị Lệ Hằng', '0258764252', 'lanhthilehang@gmail.com', 'Tây Vinh, Tây Sơn, Bình Định', 160000, '2021-11-21 07:48:26'),
('ĐH0758520492', '1954030051@sv.ut.edu.vn', 'Thái Hoàng Phương Thảo ', '0763307675', '1954030051@sv.ut.edu.vn', 'Thuận Nhứt, Bình Thuận, Tây Sơn, Bình Định', 90000, '2021-11-21 07:58:52'),
('ĐH0824268854', 'quanglinh@gmail.com', '1951120126', '0712548695', '1951120126@sv.ut.edu.vn', 'Tây Vinh, Tây Sơn, Bình Định', 30000, '2021-11-19 08:24:26');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `order_id` varchar(12) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `product_title` varchar(250) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `num` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `product_title`, `num`, `price`) VALUES
(49, 'ĐH0212424280', 11, 'Trà sữa trân châu, đường đen', 1, 20000),
(50, 'ĐH0212424280', 20, 'Bimbimbap – Cơm trộn', 1, 85000),
(51, 'ĐH0212424280', 46, 'Ben and Jerry`s', 1, 50000),
(52, 'ĐH0210467646', 11, 'Trà sữa trân châu, đường đen', 1, 20000),
(53, 'ĐH0210467646', 12, 'Trà vải', 2, 25000),
(54, 'ĐH0210467646', 14, 'Combo 50K', 1, 50000),
(55, 'ĐH0634350488', 12, 'Trà vải', 1, 25000),
(56, 'ĐH0707126445', 11, 'Trà sữa trân châu, đường đen', 1, 20000),
(57, 'ĐH0824268854', 6, 'Bánh tráng trộn', 2, 15000),
(58, 'ĐH0748269982', 19, 'Bánh gạo Tokbokki', 2, 80000),
(59, 'ĐH0758520492', 6, 'Bánh tráng trộn', 1, 15000),
(60, 'ĐH0758520492', 15, 'Kem sầu riêng', 1, 15000),
(61, 'ĐH0758520492', 36, 'Kem Gelato', 1, 60000);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `title` varchar(150) COLLATE utf8_vietnamese_ci NOT NULL,
  `thumbnail` varchar(200) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `price` int(11) DEFAULT 0,
  `content` longtext COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `id_quanly` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `title`, `thumbnail`, `price`, `content`, `created_at`, `id_quanly`, `updated_at`) VALUES
(6, 'Bánh tráng trộn', 'https://images.foody.vn/res/g18/177251/prof/s576x330/foody-mobile-banh-trang-tron-jpg-116-636181015389203556.jpg', 15000, '<p>siêu cay, siêu ngon</p>', '2021-10-01 05:48:00', 19, '2021-11-02 04:59:34'),
(11, 'Trà sữa trân châu, đường đen', 'https://cotrangquan.com/wp-content/uploads/2021/02/foody-upload-api-foody-mobile-2-190129090407.jpg', 20000, 'Chè cũng là một món ăn vặt được nhiều người yêu thích bởi hương vị thơm ngon đặc trưng mà nó mang lại. Nổi tiếng nhất có thể nói đến đó chính là món chè bưởi và chè khoai dẻo.', '2021-10-01 03:53:53', 21, '2021-11-19 08:38:28'),
(12, 'Trà vải', 'https://kenbar.vn/wp-content/uploads/2020/09/tra-vai-truyen-thong-1.jpg', 25000, 'Chè cũng là một món ăn vặt được nhiều người yêu thích bởi hương vị thơm ngon đặc trưng mà nó mang lại. Nổi tiếng nhất có thể nói đến đó chính là món chè bưởi và chè khoai dẻo.', '2021-10-01 03:00:55', 21, '2021-11-19 08:01:29'),
(13, 'Trà đào', 'https://kenbar.vn/wp-content/uploads/2020/09/photo_2020-08-29_19-24-09.jpg', 20000, '<p><span style=\"color: rgb(146, 145, 145); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px;\">Chè cũng là một món ăn vặt được nhiều người yêu thích bởi hương vị thơm ngon đặc trưng mà nó mang lại. Nổi tiếng nhất có thể nói đến đó chính là món chè bưởi và chè khoai dẻo.</span><br></p>', '2021-10-01 03:02:57', 21, '2021-11-02 04:04:37'),
(14, 'Combo 50K', 'https://toplist.vn/images/800px/hari-tori-quan-an-vat-285222.jpg', 50000, '<p><span style=\"color: rgb(146, 145, 145); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px;\">Bánh Mochi với hương vị đa dạng là sự kết hợp tuyệt vời của lớp vỏ làm từ bột gạo nếp và phần kem mát lạnh bên trong.</span><br></p>', '2021-10-01 03:54:58', 19, '2021-11-02 04:20:37'),
(15, 'Kem sầu riêng', 'https://i-raovat.vnecdn.net/2020/01/19/d206922f2f03ec84141451e860bc0468.jpeg?w=1280&h=768&q=100&dpr=1&rt=auto&g=no&s=86speSADdPKuQiKMqqbtVw', 15000, '<p><span style=\"color: rgb(146, 145, 145); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px;\">Bánh Mochi với hương vị đa dạng là sự kết hợp tuyệt vời của lớp vỏ làm từ bột gạo nếp và phần kem mát lạnh bên trong.</span><br></p>', '2021-10-01 04:01:02', 20, '2021-11-02 04:39:37'),
(19, 'Bánh gạo Tokbokki', 'https://cdn.vntrip.vn/cam-nang/wp-content/uploads/2018/08/mon-ngon-han-quoc11-768x576.jpg', 80000, '<p><span style=\"color: rgb(38, 38, 38); font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif; font-size: 17.075px; text-align: justify;\">Món ăn Hàn Quốc Tokbokki là món ăn đường phố nổi tiếng ở đây. Nó có mặt ở hầu khắp các xe bán hàng ăn rong ngoài các con phố Seoul. Chỉ đơn giản làm từ bột gạo được nặn thành các thanh dài sau đó nấu chung với bột ớt.</span><br></p>', '2021-11-03 03:59:13', 18, '2021-11-05 03:38:20'),
(20, 'Bimbimbap – Cơm trộn', 'https://luhanhvietnam.com.vn/du-lich/vnt_upload/news/07_2019/com-tron-bibimbap-han-quoc-3.jpg', 85000, 'Cơm trộn Bibimbap Hàn Quốc - món ngon độc đáo gây thương nhớ của người Hàn', '2021-11-04 01:42:46', 18, '2021-11-04 01:49:47'),
(21, 'Miến trộn Hàn Quốc Japchae', 'https://cdn.vntrip.vn/cam-nang/wp-content/uploads/2018/08/mon-ngon-han-quoc16-768x512.jpg', 60000, '<p><span style=\"color: rgb(38, 38, 38); font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif; font-size: 17.075px; text-align: justify;\">Nguyên liệu chính của món ăn này chính là miến, tuy nhiên miến ở đây khác với Việt Nam. Những sợi miến được làm từ khoai lang tạo nên hương vị khác biệt.</span><br></p>', '2021-11-05 03:51:21', 18, '2021-11-05 03:51:21'),
(22, 'Gà rán Yangnyeom Tongdak', 'https://cdn.vntrip.vn/cam-nang/wp-content/uploads/2018/08/mon-ngon-han-quoc17-768x506.jpg', 150000, '<p><span style=\"color: rgb(38, 38, 38); font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif; font-size: 17.075px; text-align: justify;\">Ẩm thực Hàn Quốc nổi tiếng với món gà rán được chế biến thành nhiều cách khác nhau. Mỗi một cách chế biến đều mang đến hương vị đặc trưng thơm ngon khác nhau.</span><br></p>', '2021-11-05 03:41:22', 18, '2021-11-05 03:41:22'),
(23, 'Canh bò Seolleongtang', 'https://cdn.vntrip.vn/cam-nang/wp-content/uploads/2018/08/mon-ngon-han-quoc18-768x432.jpg', 70000, '<p><span style=\"color: rgb(38, 38, 38); font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif; font-size: 17.075px; text-align: justify;\">Một món ăn Hàn Quốc nổi tiếng mà có lẽ ít người Việt biết đến. Nhìn qua thì có vẻ giống với món bún bò ở Việt Nam nhưng lại mang hương vị hoàn toàn khác. Đây là món ăn cung đình của Hàn Quốc được các vua chúa ưa thích.</span><br></p>', '2021-11-05 03:39:23', 18, '2021-11-05 03:39:23'),
(24, 'Cháo gà DakJuk', 'https://cdn.vntrip.vn/cam-nang/wp-content/uploads/2018/08/mon-ngon-han-quoc19.jpg', 80000, '<p><span style=\"color: rgb(38, 38, 38); font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif; font-size: 17.075px; text-align: justify;\">Là gạo sushi, nhân sâm, thịt gà được ninh nhừ cùng hành tây được chế biến theo cách đặc biệt của người Hàn Quốc. Đây là món ăn nhất định bạn phải thử khi ghé thăm Hàn Quốc.</span><br></p>', '2021-11-05 03:25:24', 18, '2021-11-05 03:25:24'),
(25, 'Mì lạnh Naengmyeon', 'https://cdn.vntrip.vn/cam-nang/wp-content/uploads/2018/08/mon-ngon-han-quoc23-768x512.jpg', 90000, '<p><span style=\"color: rgb(38, 38, 38); font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif; font-size: 17.075px; text-align: justify;\">Hàn Quốc nổi tiếng với nhiều món ăn được chế biến từ mì, đặc biệt mì gói ăn liền của đất nước này cũng rất nổi tiếng. Mỳ lạnh mang hương vị thanh mát thường được ưa chuộng vào những hè oi bức.</span><br></p>', '2021-11-05 03:26:25', 18, '2021-11-05 03:26:25'),
(26, 'Sườn nướng Galbi', 'https://cdn.vntrip.vn/cam-nang/wp-content/uploads/2018/08/mon-ngon-han-quoc24.jpg', 90000, '<p><span style=\"color: rgb(38, 38, 38); font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif; font-size: 17.075px; text-align: justify;\">Nếu ai thường xuyên vào những quán ăn Hàn Quốc ở Việt Nam thì chắc hẳn không còn lạ gì với món sườn nướng Galbi. Sườn là một trong những nguyên liệu được ưa thích của người dân Hàn Quốc và được chế biến thành nhiều món ăn khác nhau.</span><br></p>', '2021-11-05 03:21:26', 18, '2021-11-05 03:21:26'),
(27, 'Mì Jajangmyeon', 'https://cdn.vntrip.vn/cam-nang/wp-content/uploads/2018/08/mon-ngon-han-quoc3-768x576.jpg', 70000, '<p><span style=\"color: rgb(38, 38, 38); font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif; font-size: 17.075px; text-align: justify;\">Món ăn Hàn Quốc này được người Việt biết đến bằng cái tên khác là mì tương đen bởi màu đen từ sốt của mì. Sợi mì tương đen vô cùng đặc biệt, sợi mì to dai sau khi làm chín được trộn với sốt đậu đen và ăn kèm với mì là trứng và rau củ.</span><br></p>', '2021-11-05 03:08:27', 20, '2021-11-05 03:08:27'),
(28, 'Songpyeon', 'https://cdn.vntrip.vn/cam-nang/wp-content/uploads/2018/08/mon-ngon-han-quoc25-768x432.jpg', 60000, '<p><span style=\"color: rgb(38, 38, 38); font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif; font-size: 17.075px; text-align: justify;\">Là tên của một món bánh Hàn Quốc.&nbsp;&nbsp;Songpyeon nổi tiếng là món bánh được dùng trong các hoàng cung Hàn Quốc xưa kia. Ngày nay&nbsp;&nbsp;Songpyeon xuất hiện trong Chuseok – một lễ hội mùa thu của người Hàn.</span><br></p>', '2021-11-05 03:29:28', 18, '2021-11-05 03:29:28'),
(29, 'Hotteok', 'https://cdn.vntrip.vn/cam-nang/wp-content/uploads/2018/08/mon-ngon-han-quoc26-768x512.jpg', 20000, '<p><span style=\"color: rgb(38, 38, 38); font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif; font-size: 17.075px; text-align: justify;\">Đây cũng là tên một loại bánh pancake đường phố ở Hàn Quốc. Món ăn ưa thích của học sinh và giới trẻ Hàn. Nguyên liệu chính của bánh là bột nếp được tạo hình thành những hình tròn dẹt nhỏ nhắn. Nhân bánh là đậu phộng, bột quế được trộn cùng đường sau đó đem đi nướng.</span><br></p>', '2021-11-05 03:30:31', 18, '2021-11-05 03:30:31'),
(30, 'Sữa chuối', 'https://www.chudu24.com/wp-content/uploads/2018/07/36136158_2093060617636538_435256602866483200_n.jpg', 20000, '<p><span style=\"color: rgb(34, 34, 34); font-family: Verdana, Geneva, sans-serif; font-size: 14px;\">Tiếp đến là một loại đồ uống không có cồn nhưng lại được cho rằng có khả năng gây nghiện đối với bất cứ ai uống thử nó một lần. Đối với nhiều người Hàn Quốc, sữa chuối là loại đồ uống gợi lại những ký ức thời thơ ấu.</span><br></p>', '2021-11-05 03:18:34', 21, '2021-11-05 03:18:34'),
(31, 'Rượu Hàn Quốc nổi tiếng là soju', 'https://www.chudu24.com/wp-content/uploads/2018/07/13628419_729337713835615_966818835_n.jpg', 50000, '<p><span style=\"color: rgb(34, 34, 34); font-family: Verdana, Geneva, sans-serif; font-size: 14px;\">Nhắc đến đồ uống của Hàn Quốc thì không thể không kể đến rượu soju, những chai rượu màu xanh lá cây có mặt ở khắp mọi nơi, từ những quán ăn ven đường cho đến những nhà hàng lớn hay bất cứ một siêu thị nào ở Hàn Quốc.</span><br></p>', '2021-11-05 03:03:35', 21, '2021-11-05 03:03:35'),
(32, 'Trà Omija', 'https://www.chudu24.com/wp-content/uploads/2018/07/35576041_212278489603680_2023747478448242688_n.jpg', 20000, '<p><span style=\"color: rgb(34, 34, 34); font-family: Verdana, Geneva, sans-serif; font-size: 14px;\">Omija được người Hàn Quốc sử dụng khá thường xuyên bởi nó có tác dụng tốt cho sức khỏe, đặc biệt là đối với bệnh cảm lạnh hay một số bệnh hô hấp khác.&nbsp;</span><span style=\"color: rgb(34, 34, 34); font-family: Verdana, Geneva, sans-serif; font-size: 14px;\">Trong y học cổ truyền Hàn Quốc, omija còn có ý nghĩa là “khôi phục lá gan của bạn”.</span><br></p>', '2021-11-05 03:06:36', 21, '2021-11-05 03:06:36'),
(33, 'Rượu makgeolli', 'https://www.chudu24.com/wp-content/uploads/2018/07/34184489_469661236802614_7113418951253557248_n.jpg', 35000, '<p><span style=\"color: rgb(34, 34, 34); font-family: Verdana, Geneva, sans-serif; font-size: 14px;\">Ngày nay, giới trẻ còn chuộng sử dụng makgeolli để chế biến một số loại cocktail với vị lạ như trộn với trái cây hoặc pha cùng với Chilsung Cider (một phiên bản của Sprite của Hàn Quốc).</span><br></p>', '2021-11-05 03:45:36', 20, '2021-11-05 03:45:36'),
(34, 'Trà yooja (trà citron)', 'https://www.chudu24.com/wp-content/uploads/2018/07/26273128_158706034909636_7095088503280631808_n.jpg', 60000, '<p><span style=\"color: rgb(34, 34, 34); font-family: Verdana, Geneva, sans-serif; font-size: 14px;\">Đặc biệt trà yooja mật ong được coi là một phương thuốc thảo dược trị các bệnh cảm lạnh và những bệnh của mùa đông. Thậm chí, bạn có thể tự tạo ra trà yooja chỉ với một muỗng si-rô trái cây cùng với nước ấm nóng.</span><br></p>', '2021-11-05 03:58:37', 21, '2021-11-05 03:58:37'),
(35, 'Nem nướng Nha Trang', 'https://chiasemonngon.com/wp-content/uploads/2018/12/1-4.jpg', 150000, '<p><span style=\"color: rgb(49, 49, 49); font-family: Lato, sans-serif; font-size: 14px;\">Nem nướng Nha Trang một món ăn bình dân thu hút được giới trẻ rất đông đảo. Giá cả vô cùng hấp dẫn 25k/ suất. Một suất nem nướng đầy đặn, có nem nướng, ram, phở, xoài và rau sống các loại. Nem nướng ở đây nạc cực kỳ nhưng không hề bị khô, vị ướp ngọt ngọt ăn chung với đồ chua rất hợp lý.</span><br></p>', '2021-11-05 03:25:39', 18, '2021-11-05 03:25:39'),
(36, 'Kem Gelato', 'https://media.cooky.vn/recipe/g2/13235/s800x500/recipe13235-635881005067084743.jpg', 60000, '<p><span style=\"color: rgb(29, 33, 41); font-family: &quot;SF UI Text&quot;; text-align: justify;\">Gelato là một món đặc sản nhất định bạn phải thử khi đến nước Ý. Thành phần chính của&nbsp;</span><span style=\"font-weight: 700; font-family: &quot;SF UI Text&quot;; color: rgb(29, 33, 41); text-align: justify;\">Gelato</span><span style=\"color: rgb(29, 33, 41); font-family: &quot;SF UI Text&quot;; text-align: justify;\">&nbsp;không phải là cream, mà được làm từ sữa nguyên chất hoặc sữa gầy đã tách toàn bộ hàm lượng kem béo.&nbsp;</span><br></p>', '2021-11-05 03:31:40', 20, '2021-11-05 03:31:40'),
(37, 'Chè trôi nước', 'https://toplist.vn/images/800px/che-troi-nuoc-16999.jpg', 40000, '<p><span style=\"color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(242, 242, 242);\">Ngày nay chè trôi nước được biến tấu nguyên liệu vừa thơm ngon lại mang màu sắc rất đẹp, ví dụ chè trôi lá dứa, chè trôi khoai lang tím...</span><br></p>', '2021-11-05 03:26:41', 20, '2021-11-05 03:26:41'),
(38, 'Trà Hoa Cúc', 'https://www.chudu24.com/wp-content/uploads/2018/07/tra-hoa-cuc.jpg', 40000, '<p><span style=\"color: rgb(34, 34, 34); font-family: Verdana, Geneva, sans-serif; font-size: 14px;\">Trà hoa cúc là một loại trà phổ biến ở nhiều nước châu Á nói chung và Hàn Quốc nói riêng. Những bông hoa cúc màu trắng, vàng được sấy khô và ủ ngập trong mật ong khoảng một tháng rồi sau đó pha như trà.</span><br></p>', '2021-11-05 03:08:42', 21, '2021-11-05 03:08:42'),
(39, 'Bánh tráng trộn – Tina trần Chùa Láng', 'https://chiasemonngon.com/wp-content/uploads/2018/12/2-4.jpg', 30000, '<p><span style=\"color: rgb(49, 49, 49); font-family: Lato, sans-serif; font-size: 14px;\">Bánh tráng trộn là một món ngon ăn vặt không bao giờ hết hót bởi màu sắc vô cùng bắt mắt và mùi vị cực kỳ quyến rũ. Một món ăn vặt mà bạn trẻ nào dùng thử qua cũng đều yêu thích. Với nguyên liệu làm vô cùng đơn giản gồm: bánh tráng, sa tế, mực, bò khô, xoài, tắc…</span><br></p>', '2021-11-05 03:18:43', 18, '2021-11-05 03:18:43'),
(40, 'Kem Mochi Tiramisu', 'https://media.cooky.vn/recipe/g5/40785/s800x500/cooky-recipe-cover-r40785.jpg', 40000, '<p><span style=\"color: rgb(29, 33, 41); font-family: &quot;SF UI Text&quot;; text-align: justify;\">Bạn chắc chắn phải thử qua kem Helado khi đã đến Argentina. Độ ngon của kem helado của Argentina chẳng kém cạnh với kem Ý đâu. Các viên kem sở hữu ngoại hình tròn trịa, mềm dẻo trông thật hút mắt. Vị béo và ngọt ngậy tan nhè nhẹ trên đầu lưỡi khi bạn thưởng thức.</span><br></p>', '2021-11-05 03:14:59', 20, '2021-11-05 03:14:59'),
(41, 'Chè đậu trắng', 'https://toplist.vn/images/800px/che-dau-trang-17008.jpg', 50000, '<p><span style=\"color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(242, 242, 242);\">Thưởng thức một bát chè trắng béo ngậy vị nước cốt dừa thì cảm nhận được cái tinh túy của ẩm thực Việt Nam. Những ngày chuẩn bị xuất hành khởi nghiệp làm ăn, người ta cũng thường làm món chè này để cúng.</span><br></p>', '2021-11-05 04:12:00', 20, '2021-11-05 04:12:00'),
(42, 'Chè bà ba', 'https://toplist.vn/images/800px/che-ba-ba-17020.jpg', 42000, '<p><span style=\"color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(242, 242, 242);\">Món chè này là sự kết hợp của nhiều loại lương thực như khoai lang bí lớn, nấm mèo, khoai môn, rong biển khô kết hợp cùng nhiều loại nguyên liệu tạo nên một món chè hấp dẫn.</span><br></p>', '2021-11-05 04:59:00', 20, '2021-11-05 04:59:00'),
(43, 'chè khoai dẻo', 'https://chiasemonngon.com/wp-content/uploads/2018/12/4-4.jpg', 30000, '<p><span style=\"color: rgb(49, 49, 49); font-family: Lato, sans-serif; font-size: 14px;\">bạn đã thưởng thực ngay được một bát chè đập tan cơn đói khát mùa hè. Màu sắc vô cùng hấp dẫn, nhưng mùi vị cũng không kém gì.</span><br></p>', '2021-11-05 04:36:02', 19, '2021-11-05 04:36:02'),
(44, 'Trà lúa mạch', 'https://www.chudu24.com/wp-content/uploads/2018/07/korean-barley-tea3.jpg', 30000, '<p><span style=\"color: rgb(34, 34, 34); font-family: Verdana, Geneva, sans-serif; font-size: 14px;\">Trà lúa mạch là một trong những thức uống nổi bật ở Châu Á, bạn có thể tìm thấy các biến thể của trà lúa mạch rang ở Trung Quốc cũng như Nhật Bản.</span><br></p>', '2021-11-05 04:55:03', 21, '2021-11-05 04:55:03'),
(45, 'Kem quả dừa Thái', 'https://chiasemonngon.com/wp-content/uploads/2018/12/8-1.jpg', 60000, '<p><span style=\"color: rgb(49, 49, 49); font-family: Lato, sans-serif; font-size: 14px;\">Là một món ăn được các bạn trẻ tìm đến nhiều nhất trong những ngày hè. Kem hương dừa thơm ngon, béo ngậy. kem dừa tươi không chất bảo quản rất tốt cho sức khỏe.</span><br></p>', '2021-11-05 04:24:09', 19, '2021-11-05 04:24:09'),
(46, 'Ben and Jerry`s', 'https://media.cooky.vn/images/blog-2016/thuong-thuc-12-loai-kem-ngon-noi-tieng-the-gioi-dap-tan-con-nong-mua-he%204.jpg', 50000, '<p><span style=\"color: rgb(29, 33, 41); font-family: &quot;SF UI Text&quot;; text-align: justify;\">Sở hữu những hương vị thơm ngon và đầy sáng tạo,&nbsp;</span><span style=\"font-weight: 700; font-family: &quot;SF UI Text&quot;; color: rgb(29, 33, 41); text-align: justify;\">Ben and Jerry`s&nbsp;</span><span style=\"color: rgb(29, 33, 41); font-family: &quot;SF UI Text&quot;; text-align: justify;\">dễ làm tan chảy đến trái tim của &nbsp;bất cứ ai thưởng thức qua nó. Người ta thường dùng kèm với hoa quả sấy khô để làm tăng mùi vị thơm ngon của nó hơn.</span><br></p>', '2021-11-05 04:13:10', 20, '2021-11-05 04:13:10'),
(47, 'Chè kho', 'https://toplist.vn/images/800px/che-kho-17081.jpg', 30000, '<p><span style=\"font-weight: 700; color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(242, 242, 242);\">Chè kho&nbsp;</span><span style=\"color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(242, 242, 242);\">là món ăn đặc sản của người Hà Nội, vào mỗi dịp Tết đến xuân về, trên mâm thờ tổ tiên của người Hà thành truyền thống nhất định phải có món ăn này.</span><br></p>', '2021-11-05 04:04:11', 19, '2021-11-05 04:04:11'),
(48, 'Bánh giò Thụy Khuê', 'https://chiasemonngon.com/wp-content/uploads/2018/12/9-1.jpg', 30000, '<p><span style=\"color: rgb(49, 49, 49); font-family: Lato, sans-serif; font-size: 14px;\">Những chiếc bánh giò nóng hổi thưởng thức vào ngày mưa thật ấm lòng. Nhân bánh thơm ngon của vị thịt băm và mộc nhĩ, vỏ bánh mềm dẻo.</span><br></p>', '2021-11-05 04:52:11', 18, '2021-11-05 04:52:11'),
(49, 'Khoai tây lốc xoáy', 'https://chiasemonngon.com/wp-content/uploads/2018/12/12.jpg', 25000, '<p><span style=\"color: rgb(49, 49, 49); font-family: Lato, sans-serif; font-size: 14px;\">Một món ăn mới nhưng được các bạn trẻ rất ưa chuộng. Khoai tây cắt lát tạo lốc xoáy. Khoai được chiên vàng ươm, tẩm cùng pho mai thơm mát. Ăn kèm với nước sốt hoặc tương ớt ngon tuyệt đỉnh.</span><br></p>', '2021-11-05 04:21:13', 19, '2021-11-05 04:21:13'),
(50, 'kem bọc sữa Cornwall', 'https://media.cooky.vn/images/blog-2016/thuong-thuc-12-loai-kem-ngon-noi-tieng-the-gioi-dap-tan-con-nong-mua-he%206.jpg', 30000, '<p><span style=\"color: rgb(29, 33, 41); font-family: &quot;SF UI Text&quot;;\">mịn màng và giàu chất béo&nbsp;nổi tiếng không chỉ tại xứ sở sương mù Anh Quốc mà còn trên toàn thế giới.</span><br></p>', '2021-11-05 04:21:18', 20, '2021-11-05 04:21:18'),
(51, 'Bánh gối', 'https://chiasemonngon.com/wp-content/uploads/2018/12/14.jpg', 45000, '<p><span style=\"color: rgb(49, 49, 49); font-family: Lato, sans-serif; font-size: 14px;\">Một món ngon ăn vặt rất dễ làm và được bán nhiều ở các khu phố vỉa hè. Bánh gối vàng ươm, nhân thịt đậm đà ăn kèm cùng nước chấm chua ngọt, dưa góp.</span><br></p>', '2021-11-05 04:01:19', 19, '2021-11-05 04:01:19'),
(52, 'kem kulfi', 'https://media.cooky.vn/images/blog-2016/thuong-thuc-12-loai-kem-ngon-noi-tieng-the-gioi-dap-tan-con-nong-mua-he%2011.jpg', 30000, '<p><span style=\"color: rgb(29, 33, 41); font-family: &quot;SF UI Text&quot;; text-align: justify;\">&nbsp;Thoạt nhìn, nó trông giống bánh trứng đông đá hơn là kem. Kulfi là một trong những loại kem có hình dáng dễ nhận dạng và mang tính đặc thù đất nước cao.</span><br></p>', '2021-11-05 04:55:19', 20, '2021-11-05 04:55:19'),
(53, 'Bánh Plan dâu', 'https://imgs.vietnamnet.vn/Images/2017/10/17/14/20171017144313-banh-flan.JPG', 20000, 'Bánh Plan dâu với hương vị đa dạng là sự kết hợp tuyệt vời của lớp vỏ làm từ bột gạo nếp và phần kem mát lạnh bên trong.', '2021-11-06 06:20:42', 20, '2021-11-06 06:20:42'),
(54, 'Kem Cherry', 'https://i.ytimg.com/vi/FWtM00N_iOQ/maxresdefault.jpg', 25000, 'Kem cherry với hương vị đa dạng là sự kết hợp tuyệt vời của lớp vỏ làm từ bột gạo nếp và phần kem mát lạnh bên trong.', '2021-11-06 06:05:45', 20, '2021-11-16 03:56:12'),
(55, 'Rau câu milo sữa', 'https://i.ytimg.com/vi/cEJmFnPfQ2w/maxresdefault.jpg', 30000, 'Rau câu milo sữa với hương vị đa dạng là sự kết hợp tuyệt vời của lớp vỏ làm từ bột gạo nếp và phần kem mát lạnh bên trong.', '2021-11-06 06:41:51', 20, '2021-11-06 06:58:51');

-- --------------------------------------------------------

--
-- Table structure for table `quanly`
--

CREATE TABLE `quanly` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_vietnamese_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `quanly`
--

INSERT INTO `quanly` (`id`, `name`, `created_at`, `updated_at`) VALUES
(18, 'Ẩm thực', '2021-11-02 04:03:16', '2021-11-06 05:57:21'),
(19, 'Ăn Vặt', '2021-11-02 04:35:18', '2021-11-02 04:35:18'),
(20, 'Tráng Miệng', '2021-11-02 04:42:18', '2021-11-02 04:42:18'),
(21, 'Nước Uống', '2021-11-02 04:53:18', '2021-11-02 04:53:18');

-- --------------------------------------------------------

--
-- Table structure for table `tokens`
--

CREATE TABLE `tokens` (
  `user_email` varchar(250) COLLATE utf8_vietnamese_ci NOT NULL,
  `token` varchar(250) COLLATE utf8_vietnamese_ci NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `tokens`
--

INSERT INTO `tokens` (`user_email`, `token`, `created_at`) VALUES
('1951120126@sv.ut.edu.vn', '51c99aaac59a4e02bc46a70ca16837f3', '2021-11-22 06:05:54'),
('1951120126@sv.ut.edu.vn', 'd8192a44fe481a03520ab2ce686360e0', '2021-11-23 06:14:54'),
('1951120126@sv.ut.edu.vn', 'e40ffda700aaa1723094ce5a764be62e', '2021-11-23 06:12:53'),
('1951120126@sv.ut.edu.vn', 'e4c260cba68a52163ead48abbc299b4b', '2021-11-23 05:45:56'),
('1954030051@sv.ut.edu.vn', '456041fd4abe1a62443d641287c5fee7', '2021-11-21 07:07:51'),
('lanhthilehang@gmail.com', 'a8088c4090bf4e73843248f076db4842', '2021-11-21 07:42:25'),
('minhanh@gmail.com', '5003617c40c2498e39571508cd0dff39', '2021-11-20 05:11:48'),
('minhanh@gmail.com', 'df466c78f9868ddf518eb3206a7cfd44', '2021-11-20 08:27:34'),
('nguyenthiphuong2@gmail.com', 'b3dc3fdb04b0fcb7352d15a9eaee9452', '2021-11-22 03:32:18'),
('quanglinh@gmail.com', '38dfd39dfaff2d07ddd3b732f597b86a', '2021-11-19 03:19:37'),
('quanglinh@gmail.com', '42e58b31a41ec1ebfee12b7bb1a20164', '2021-11-17 05:53:30'),
('quanglinh@gmail.com', '6907a24976b6303c74fdf4b5acc1a0b5', '2021-11-17 05:25:19'),
('quanglinh@gmail.com', '94fadcd8c8c82ccfd97538eaf3de8cbb', '2021-11-21 07:29:18'),
('quanglinh@gmail.com', 'a042924d6e9b1c973fdfdfb8088c3669', '2021-11-19 07:16:43'),
('quanglinh@gmail.com', 'a3cc600d9975fa41b4dd84854dc6418c', '2021-11-17 02:09:51'),
('quanglinh@gmail.com', 'a62dfde9af6128fdc8eb3225d89555f8', '2021-11-17 06:57:47'),
('quanglinh@gmail.com', 'aa1f4cbdb4933882a273af5bb3f5a84d', '2021-11-17 05:57:33'),
('quanglinh@gmail.com', 'c525bd0cd8d10a61589a3312d5576e43', '2021-11-17 05:29:35'),
('quanglinh@gmail.com', 'd4538339a72361486aa7f2767516b9a1', '2021-11-18 04:29:14'),
('quanglinh@gmail.com', 'e862baa00d435bb82db3ae46fd143395', '2021-11-19 12:34:22');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `name`) VALUES
(1, 'Admin'),
(2, 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`email`),
  ADD KEY `pk_type` (`type_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_ordermail` (`order_email`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_idorder` (`order_id`),
  ADD KEY `fk_idproduct` (`product_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_idquanly` (`id_quanly`);

--
-- Indexes for table `quanly`
--
ALTER TABLE `quanly`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tokens`
--
ALTER TABLE `tokens`
  ADD PRIMARY KEY (`user_email`,`token`),
  ADD UNIQUE KEY `token` (`token`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `quanly`
--
ALTER TABLE `quanly`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD CONSTRAINT `pk_type` FOREIGN KEY (`type_id`) REFERENCES `type` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_ordermail` FOREIGN KEY (`order_email`) REFERENCES `nguoidung` (`email`);

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `fk_id` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `fk_idproduct` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_idquanly` FOREIGN KEY (`id_quanly`) REFERENCES `quanly` (`id`);

--
-- Constraints for table `tokens`
--
ALTER TABLE `tokens`
  ADD CONSTRAINT `fk_emailuser` FOREIGN KEY (`user_email`) REFERENCES `nguoidung` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
