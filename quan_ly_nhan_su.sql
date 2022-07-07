-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 07, 2022 lúc 10:07 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quan_ly_nhan_su`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhan_su`
--

CREATE TABLE `nhan_su` (
  `id` int(11) NOT NULL,
  `ten` varchar(150) DEFAULT NULL,
  `ngay_sinh` date DEFAULT NULL,
  `dia_chi` varchar(250) DEFAULT NULL,
  `bo_phan` varchar(100) DEFAULT NULL,
  `chuc_vu` varchar(250) DEFAULT NULL,
  `so_dien_thoai` varchar(20) NOT NULL,
  `anh` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nhan_su`
--

INSERT INTO `nhan_su` (`id`, `ten`, `ngay_sinh`, `dia_chi`, `bo_phan`, `chuc_vu`, `so_dien_thoai`, `anh`) VALUES
(13, 'nguyễn ái nhi', '1999-03-12', 'quang trị', 'phòng nhân sự', 'nhân viên', '0338160762', '../anh/upload/1.jpeg'),
(16, 'trần thanh nhị', '2001-03-21', 'quảng trị', 'phòng kinh doanh', 'trưởng phòng', '09787326548', '../anh/upload/2.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phong`
--

CREATE TABLE `phong` (
  `id` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `so_dien_thoai` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `phong`
--

INSERT INTO `phong` (`id`, `name`, `so_dien_thoai`) VALUES
(1, 'phòng nhân sự', '0338123123'),
(2, 'phòng tài chinh', '0338234234'),
(3, 'phòng kinh doanh', '0338345345'),
(4, 'phòng marketing', '0338456456'),
(5, 'phòng hành chính', '0338567567');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `nhan_su`
--
ALTER TABLE `nhan_su`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `phong`
--
ALTER TABLE `phong`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `nhan_su`
--
ALTER TABLE `nhan_su`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `phong`
--
ALTER TABLE `phong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
