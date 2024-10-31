-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 02, 2018 at 05:44 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quan_ly_quan_ca_phe`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

DROP TABLE IF EXISTS `account`;
CREATE TABLE IF NOT EXISTS `account` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `birthdate` date NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `address` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `idcard` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phan_quyen` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COMMENT='Accounts';

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `username`, `password`, `fullname`, `birthdate`, `gender`, `address`, `email`, `idcard`, `phone_number`, `phan_quyen`) VALUES
(2, 'nghia', 'e10adc3949ba59abbe56e057f20f883e', 'Đặng Nghĩa', '1997-01-25', 1, '108 ưu long phường 11 quận 08', 'dangnghia25197@gmail.com', '025606488', '01224588770', 0),
(6, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'Admin', '1997-01-25', 1, '1/6 Mễ Cốc Phường 15 Quận 8', 'dangnghia25197@gmail.com', '025606488', '01224588770', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ban`
--

DROP TABLE IF EXISTS `ban`;
CREATE TABLE IF NOT EXISTS `ban` (
  `ma_ban` int(11) NOT NULL AUTO_INCREMENT,
  `ten_ban` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `trang_thai` tinyint(1) NOT NULL DEFAULT '0',
  `ma_lau` int(11) NOT NULL,
  PRIMARY KEY (`ma_ban`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Bàn';

--
-- Dumping data for table `ban`
--

INSERT INTO `ban` (`ma_ban`, `ten_ban`, `trang_thai`, `ma_lau`) VALUES
(49, 'Bàn 1', 1, 1),
(50, 'Bàn 2', 1, 1),
(51, 'Bàn 3', 1, 1),
(52, 'Bàn 4', 0, 1),
(53, 'Bàn 5', 0, 1),
(54, 'Bàn 6', 0, 1),
(55, 'Bàn 7', 0, 1),
(56, 'Bàn 8', 0, 1),
(57, 'Bàn 9', 0, 1),
(58, 'Bàn 10', 0, 1),
(59, 'Bàn 11', 0, 2),
(60, 'Bàn 12', 0, 2),
(61, 'Bàn 13', 0, 2),
(62, 'Bàn 14', 0, 2),
(63, 'Bàn 15', 0, 2),
(64, 'Bàn 16', 0, 2),
(65, 'Bàn 17', 0, 2),
(66, 'Bàn 18', 0, 2),
(67, 'Bàn 19', 0, 2),
(68, 'Bàn 20', 0, 2),
(69, 'Bàn 21', 0, 3),
(70, 'Bàn 22', 0, 3),
(71, 'Bàn 23', 0, 3),
(72, 'Bàn 24', 0, 3),
(73, 'Bàn 25', 0, 3),
(74, 'Bàn 26', 0, 3),
(75, 'Bàn 27', 0, 3),
(76, 'Bàn 28', 0, 3),
(77, 'Bàn 29', 0, 3),
(78, 'Bàn 30', 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `chi_tiet_hoa_don`
--

DROP TABLE IF EXISTS `chi_tiet_hoa_don`;
CREATE TABLE IF NOT EXISTS `chi_tiet_hoa_don` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ma_hoa_don` int(7) NOT NULL,
  `ma_san_pham` int(6) NOT NULL,
  `ten_san_pham` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `so_luong` int(11) NOT NULL,
  `don_gia` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=335 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Chi tiết hóa đơn';

--
-- Dumping data for table `chi_tiet_hoa_don`
--

INSERT INTO `chi_tiet_hoa_don` (`id`, `ma_hoa_don`, `ma_san_pham`, `ten_san_pham`, `so_luong`, `don_gia`) VALUES
(245, 55, 9, 'Trà Đen', 1, 20000),
(246, 55, 5, 'Trà Nhân Sâm', 3, 39000),
(247, 55, 10, 'Trà Bắc', 1, 20000),
(248, 55, 4, 'Trà Earl Grey', 1, 39000),
(249, 55, 8, 'Trà Xanh', 2, 20000),
(250, 55, 3, 'Trà Thạch Đào', 2, 39000),
(251, 56, 7, 'Trà oolong sữa', 1, 39000),
(252, 56, 3, 'Trà Thạch Đào', 2, 39000),
(253, 56, 4, 'Trà Earl Grey', 2, 39000),
(254, 57, 7, 'Trà oolong sữa', 1, 39000),
(255, 57, 8, 'Trà Xanh', 1, 20000),
(256, 57, 3, 'Trà Thạch Đào', 8, 39000),
(257, 58, 10, 'Trà Bắc', 4, 20000),
(258, 58, 5, 'Trà Nhân Sâm', 1, 39000),
(259, 58, 9, 'Trà Đen', 3, 20000),
(260, 59, 5, 'Trà Nhân Sâm', 4, 39000),
(261, 59, 10, 'Trà Bắc', 1, 20000),
(262, 59, 4, 'Trà Earl Grey', 2, 39000),
(263, 60, 17, 'Latte', 1, 39000),
(264, 60, 18, 'cappuccino', 1, 39000),
(265, 61, 1, 'Trà Sen Vàng', 1, 39000),
(266, 61, 2, 'Trà Thanh Đào', 1, 39000),
(267, 61, 7, 'Trà oolong sữa', 2, 39000),
(268, 61, 8, 'Trà Xanh', 1, 20000),
(269, 62, 8, 'Trà Xanh', 1, 20000),
(270, 62, 9, 'Trà Đen', 1, 20000),
(271, 62, 4, 'Trà Earl Grey', 3, 39000),
(272, 62, 7, 'Trà oolong sữa', 2, 39000),
(273, 62, 2, 'Trà Thanh Đào', 2, 39000),
(274, 62, 6, 'Trà Chanh Vàng', 2, 39000),
(275, 62, 1, 'Trà Sen Vàng', 2, 39000),
(276, 62, 3, 'Trà Thạch Đào', 2, 39000),
(277, 62, 33, 'Mousse xoài', 2, 25000),
(278, 62, 34, 'Mousse trà xanh', 2, 25000),
(279, 62, 39, 'Phô mai cà phê', 1, 29000),
(280, 62, 38, 'Mousse chanh dây', 2, 25000),
(281, 62, 32, 'Tiramisu', 2, 29000),
(282, 62, 37, 'Mousse cam', 2, 25000),
(283, 62, 35, 'Mousse dâu tây', 2, 25000),
(284, 63, 8, 'Trà Xanh', 1, 20000),
(285, 63, 3, 'Trà Thạch Đào', 1, 39000),
(286, 63, 9, 'Trà Đen', 5, 20000),
(287, 63, 4, 'Trà Earl Grey', 1, 39000),
(288, 63, 7, 'Trà oolong sữa', 2, 39000),
(289, 63, 2, 'Trà Thanh Đào', 1, 39000),
(290, 63, 6, 'Trà Chanh Vàng', 1, 39000),
(291, 63, 10, 'Trà Bắc', 1, 20000),
(292, 63, 5, 'Trà Nhân Sâm', 2, 39000),
(293, 64, 8, 'Trà Xanh', 4, 20000),
(294, 64, 3, 'Trà Thạch Đào', 1, 39000),
(295, 64, 9, 'Trà Đen', 2, 20000),
(296, 64, 10, 'Trà Bắc', 1, 20000),
(297, 64, 5, 'Trà Nhân Sâm', 1, 39000),
(298, 64, 7, 'Trà oolong sữa', 1, 39000),
(299, 64, 1, 'Trà Sen Vàng', 1, 39000),
(300, 64, 12, 'Phin đen đá', 1, 29000),
(301, 64, 33, 'Mousse xoài', 1, 25000),
(302, 64, 34, 'Mousse trà xanh', 1, 25000),
(303, 64, 38, 'Mousse chanh dây', 1, 25000),
(304, 65, 4, 'Trà Earl Grey', 1, 39000),
(305, 65, 5, 'Trà Nhân Sâm', 4, 39000),
(306, 65, 10, 'Trà Bắc', 3, 20000),
(307, 65, 8, 'Trà Xanh', 1, 20000),
(308, 65, 3, 'Trà Thạch Đào', 1, 39000),
(309, 65, 2, 'Trà Thanh Đào', 1, 39000),
(310, 65, 1, 'Trà Sen Vàng', 1, 39000),
(311, 66, 5, 'Trà Nhân Sâm', 3, 39000),
(312, 66, 9, 'Trà Đen', 1, 20000),
(313, 66, 10, 'Trà Bắc', 2, 20000),
(314, 67, 49, 'Mojito dưa hấu', 1, 35000),
(315, 67, 43, 'Kiwi Mint Mojito', 2, 35000),
(316, 67, 48, 'Mojito kiwi', 4, 35000),
(320, 69, 8, 'Trà Xanh', 3, 20000),
(321, 69, 9, 'Trà Đen', 3, 20000),
(322, 69, 4, 'Trà Earl Grey', 3, 39000),
(323, 69, 3, 'Trà Thạch Đào', 1, 39000),
(324, 70, 10, 'Trà Bắc', 1, 20000),
(325, 70, 5, 'Trà Nhân Sâm', 1, 39000),
(326, 70, 9, 'Trà Đen', 1, 20000),
(327, 71, 10, 'Trà Bắc', 1, 20000),
(328, 71, 9, 'Trà Đen', 2, 20000),
(329, 71, 4, 'Trà Earl Grey', 1, 39000),
(330, 72, 10, 'Trà Bắc', 1, 20000),
(331, 72, 23, 'Xoài dừa đá xay', 1, 40000),
(332, 72, 24, 'Dâu nha đam đá xay', 1, 40000),
(333, 72, 2, 'Trà Thanh Đào', 1, 39000),
(334, 72, 1, 'Trà Sen Vàng', 1, 39000);

-- --------------------------------------------------------

--
-- Table structure for table `hoa_don`
--

DROP TABLE IF EXISTS `hoa_don`;
CREATE TABLE IF NOT EXISTS `hoa_don` (
  `ma_hoa_don` int(7) NOT NULL AUTO_INCREMENT,
  `ngay` date NOT NULL,
  `ma_ban` int(11) NOT NULL,
  `ten_ban` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `trang_thai` tinyint(1) NOT NULL DEFAULT '0',
  `tong_tien` double NOT NULL,
  `mang_ve` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ma_hoa_don`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Hóa đơn';

--
-- Dumping data for table `hoa_don`
--

INSERT INTO `hoa_don` (`ma_hoa_don`, `ngay`, `ma_ban`, `ten_ban`, `trang_thai`, `tong_tien`, `mang_ve`) VALUES
(55, '2018-04-28', 59, 'Bàn 11', 1, 314000, 'Mang về'),
(56, '2018-04-28', 49, 'Bàn 1', 1, 195000, ''),
(57, '2018-04-28', 50, 'Bàn 2', 1, 371000, 'Mang về'),
(58, '2018-04-28', 53, 'Bàn 5', 1, 179000, ''),
(59, '2018-04-28', 50, 'Bàn 2', 1, 254000, 'Mang về'),
(60, '2018-04-28', 49, 'Bàn 1', 1, 78000, 'Mang về'),
(61, '2018-04-28', 50, 'Bàn 2', 1, 176000, ''),
(62, '2018-04-28', 70, 'Bàn 22', 1, 884000, 'Mang về'),
(63, '2018-04-28', 53, 'Bàn 5', 1, 452000, 'Mang về'),
(64, '2018-04-28', 60, 'Bàn 12', 1, 400000, 'Mang về'),
(65, '2018-04-28', 50, 'Bàn 2', 0, 392000, ''),
(66, '2018-04-29', 49, 'Bàn 1', 1, 177000, ''),
(70, '2018-05-03', 49, 'Bàn 1', 0, 79000, 'Mang về'),
(71, '2018-05-03', 70, 'Bàn 22', 1, 99000, ''),
(72, '2018-05-03', 51, 'Bàn 3', 0, 178000, 'Mang về');

-- --------------------------------------------------------

--
-- Table structure for table `lau`
--

DROP TABLE IF EXISTS `lau`;
CREATE TABLE IF NOT EXISTS `lau` (
  `ma_lau` int(11) NOT NULL AUTO_INCREMENT,
  `ten_lau` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ma_lau`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lau`
--

INSERT INTO `lau` (`ma_lau`, `ten_lau`) VALUES
(1, 'Trệt'),
(2, 'Lầu 1'),
(3, 'Lầu 2');

-- --------------------------------------------------------

--
-- Table structure for table `loai_san_pham`
--

DROP TABLE IF EXISTS `loai_san_pham`;
CREATE TABLE IF NOT EXISTS `loai_san_pham` (
  `ma_loai` int(6) NOT NULL AUTO_INCREMENT,
  `ten_loai` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ma_loai`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Loại sản phẩm';

--
-- Dumping data for table `loai_san_pham`
--

INSERT INTO `loai_san_pham` (`ma_loai`, `ten_loai`) VALUES
(1, 'Trà'),
(2, 'Cà phê'),
(3, 'Cà phê máy'),
(4, 'Đá xay'),
(5, 'Bánh ngọt'),
(6, 'Thức uống khác');

-- --------------------------------------------------------

--
-- Table structure for table `san_pham`
--

DROP TABLE IF EXISTS `san_pham`;
CREATE TABLE IF NOT EXISTS `san_pham` (
  `ma_san_pham` int(6) NOT NULL AUTO_INCREMENT,
  `ten_san_pham` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ma_loai` int(6) NOT NULL,
  `don_gia` float NOT NULL,
  `hinh` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ma_san_pham`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Sản phẩm';

--
-- Dumping data for table `san_pham`
--

INSERT INTO `san_pham` (`ma_san_pham`, `ten_san_pham`, `ma_loai`, `don_gia`, `hinh`) VALUES
(1, 'Trà Sen Vàng', 1, 39000, 'tra_sen_vang.png'),
(2, 'Trà Thanh Đào', 1, 39000, 'tra_thanh_dao.jpg'),
(3, 'Trà Thạch Đào', 1, 39000, 'tra_dao_sua.jpg'),
(4, 'Trà Earl Grey', 1, 39000, 'tra_earl_grey.jpg'),
(5, 'Trà Nhân Sâm', 1, 39000, 'tra_nhan_sam.jpg'),
(6, 'Trà Chanh Vàng', 1, 39000, 'tra_chanh_vang.png'),
(7, 'Trà oolong sữa', 1, 39000, 'tra_oolong_sua.jpg'),
(8, 'Trà Xanh', 1, 20000, 'tra_xanh.jpg'),
(9, 'Trà Đen', 1, 20000, 'tra_den.jpg'),
(10, 'Trà Bắc', 1, 20000, 'tra_bac.jpg'),
(11, 'Phin sữa đá', 2, 29000, 'phin_sua_da.jpg'),
(12, 'Phin đen đá', 2, 29000, 'phin_den_da.jpg'),
(13, 'Bạc xĩu đá', 2, 29000, 'bac_xiu_da.jpg'),
(14, 'Cà phê sữa tươi', 2, 29000, 'ca_phe_sua_tuoi.jpg'),
(16, 'Espresso', 3, 29000, 'espresso.jpg'),
(17, 'Latte', 3, 39000, 'latte.jpg'),
(18, 'cappuccino', 3, 39000, 'capuccino.jpg'),
(19, 'Mocha', 3, 45000, 'mocha.jpg'),
(20, 'Americano', 3, 29000, 'americano.jpg'),
(21, 'Macchiato', 3, 45000, 'macchiato.jpg'),
(22, 'Matcha đá xay', 4, 49000, 'matcha_da_xay.jpg'),
(23, 'Xoài dừa đá xay', 4, 40000, 'xoai_dua_da_xay.jpg'),
(24, 'Dâu nha đam đá xay', 4, 40000, 'dau_nha_dam_da_xay.jpg'),
(25, 'Tắc bạc hà đá xay', 4, 40000, 'tac_bac_ha_da_xay.jpg'),
(26, 'Việt quất đá xay', 4, 40000, 'viet_quat_da_xay.jpg'),
(27, 'CINNAMON CHOCOLATE đá xay', 4, 45000, 'cinnamon_chocolate_da_xay.jpg'),
(28, 'Cookie Oreo đá xay', 4, 45000, 'cookie_oreo_da_xay.jpg'),
(29, 'Mocha Oreo Frappuccino', 4, 49000, 'mocha_oreo_frappuccino_da_xay.jpg'),
(30, 'Caramel Coffee đá xay', 4, 49000, 'caramel_coffee_da_xay.JPG'),
(31, 'Tắc xí muội đá xay', 4, 40000, 'tac-xi-muoi-da_xay.jpg'),
(32, 'Tiramisu', 5, 29000, 'banh_tiramisu.jpg'),
(33, 'Mousse xoài', 5, 25000, 'banh_mousse_xoai.jpg'),
(34, 'Mousse trà xanh', 5, 25000, 'banh_mousse_tra_xanh.jpg'),
(35, 'Mousse dâu tây', 5, 25000, 'banh_mousse_dau_tay.jpg'),
(36, 'Mousse việt quất', 5, 25000, 'banh_mousse_viet_quat.jpg'),
(37, 'Mousse cam', 5, 25000, 'banh_mousse_cam.jpg'),
(38, 'Mousse chanh dây', 5, 25000, 'banh_mousse_chanh_day.jpg'),
(39, 'Phô mai cà phê', 5, 29000, 'banh_pho_mai_ca_phe.jpg'),
(40, 'Coconut Chilli Mojito', 6, 35000, 'coconut_chilli_mojito.jpg'),
(41, 'Mojito việt quất', 6, 30000, 'viet_quat_mojito.jpg'),
(42, 'Mojito xoài', 6, 30000, 'mojito_xoai.jpg'),
(43, 'Kiwi Mint Mojito', 6, 35000, 'kiwi_mint_mojito.jpg'),
(44, 'Mojito chanh dây', 6, 30000, 'mojito_chanh_day.jpg'),
(45, 'Mojito nho đen', 6, 30000, 'mojito_nho_den.jpg'),
(46, 'Mojito táo bạc hà', 6, 35000, 'mojito_tao_bac_ha.jpg'),
(47, 'Mojito cherry', 6, 35000, 'mojito_cherry.jpg'),
(48, 'Mojito kiwi', 6, 35000, 'mojito_kiwi.jpg'),
(49, 'Mojito dưa hấu', 6, 35000, 'mojito_dua_hau.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
