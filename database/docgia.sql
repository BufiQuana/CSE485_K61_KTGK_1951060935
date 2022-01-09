-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 09, 2022 lúc 05:34 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `1951060935_libraries`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `docgia`
--

CREATE TABLE `docgia` (
  `madg` int(11) NOT NULL,
  `hovaten` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioitinh` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namsinh` date NOT NULL,
  `nghenghiep` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaycapthe` date NOT NULL,
  `ngayhethan` date NOT NULL,
  `diachi` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `docgia`
--

INSERT INTO `docgia` (`madg`, `hovaten`, `gioitinh`, `namsinh`, `nghenghiep`, `ngaycapthe`, `ngayhethan`, `diachi`) VALUES
(11, 'Kettie Skough', 'Male', '1994-06-13', 'Geological Engineer', '2019-09-04', '2021-10-13', '96501 Bunting Center'),
(12, 'Wynny Bearne', 'Male', '1998-02-03', 'Structural Engineer', '2019-05-20', '2021-06-03', '5 Milwaukee Alley'),
(13, 'Essy Ivic', 'Male', '1992-04-19', 'Assistant Media Plan', '2019-07-12', '2021-06-20', '785 Pearson Terrace'),
(14, 'Pegeen McArd', 'Male', '1994-09-25', 'Professor', '2019-03-21', '2021-09-28', '84 Lukken Park'),
(15, 'Rand Gaskoin', 'Female', '1996-09-02', 'Senior Developer', '2019-12-21', '2021-09-27', '4510 Sutteridge Junction'),
(16, 'Orin Muehle', 'Female', '1992-11-21', 'Geologist I', '2019-01-17', '2021-08-26', '1 Melby Terrace'),
(17, 'Cati Delahunty', 'Female', '1993-09-12', 'Health Coach III', '2019-08-06', '2021-10-26', '2772 Northridge Alley'),
(18, 'Luis Elliot', 'Male', '1994-03-24', 'Information Systems ', '2019-07-21', '2021-11-15', '829 Hooker Hill'),
(19, 'Prentice Bolver', 'Male', '1996-03-06', 'Financial Advisor', '2019-07-24', '2021-07-06', '453 Steensland Lane'),
(20, 'Ellynn Bestwall', 'Male', '1996-03-29', 'Compensation Analyst', '2019-02-23', '2021-10-17', '8425 Moose Circle');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `docgia`
--
ALTER TABLE `docgia`
  ADD PRIMARY KEY (`madg`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `docgia`
--
ALTER TABLE `docgia`
  MODIFY `madg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
