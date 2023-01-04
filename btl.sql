-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 26, 2022 lúc 01:51 PM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `btl`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_san_pham`
--

CREATE TABLE `loai_san_pham` (
  `maloaisanpham` int(10) NOT NULL,
  `tenloaisanpham` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `loai_san_pham`
--

INSERT INTO `loai_san_pham` (`maloaisanpham`, `tenloaisanpham`) VALUES
(1, 'ĐỒNG HỒ KIM-SỐ'),
(2, 'ĐỒNG HỒ SỐ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `email` varchar(200) NOT NULL,
  `tennguoidung` varchar(200) NOT NULL,
  `matkhau` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhacungcap`
--

CREATE TABLE `nhacungcap` (
  `manhacungcap` int(11) NOT NULL,
  `tennhacungcap` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nhacungcap`
--

INSERT INTO `nhacungcap` (`manhacungcap`, `tennhacungcap`) VALUES
(1, 'G-SHOCK'),
(2, 'BABY-G'),
(3, 'EDIFICE'),
(4, 'PRO TREK'),
(5, 'SHEEN');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_pham`
--

CREATE TABLE `san_pham` (
  `masanpham` int(10) NOT NULL,
  `tensanpham` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `maloaisanpham` int(10) NOT NULL,
  `soluong` int(15) NOT NULL,
  `dongia` int(15) NOT NULL,
  `anh` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mota` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `manhacungcap` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`masanpham`, `tensanpham`, `maloaisanpham`, `soluong`, `dongia`, `anh`, `mota`, `manhacungcap`) VALUES
(1, 'GM-110EARTH-1A', 1, 30, 10000000, 'https://www.casio.com/content/dam/casio/product-info/locales/vn/vi/timepiece/product/watch/G/GM/GM1/gm-110earth-1a/assets/GM-110EARTH-1A.png', 'Bùng nổ với chiếc G-SHOCK đủ bền để đưa bạn ra ngoài vũ trụ ngắm nhìn Trái Đất xinh đẹp. Hình ảnh hành tinh quê hương của chúng ta khi nhìn từ vũ trụ được tái hiện một cách táo bạo trên lớp mạ ion của đường gờ kim loại và mặt đồng hồ được xử lý đặc biệt của mẫu GM-110 kim loại to bản đặc trưng. Một tuyên ngôn thời trang mạnh mẽ và phiêu lưu, với gờ kim loại thiết kế độc đáo mang hoạ tiết Trái Đất tuyệt đẹp.', 1),
(2, 'BGD-565XG-2', 2, 20, 3000000, 'https://www.casio.com/content/dam/casio/product-info/locales/vn/vi/timepiece/product/watch/B/BG/BGD/bgd-565xg-2/assets/BGD-565XG-2.png.transform/main-visual-pc/image.png', 'Đừng bỏ lỡ phong cách đường phố phù hợp với những cô gái cá tính. BABY-G và X-girl hợp tác tạo nên chiếc đồng hồ đơn giản vô cùng phù hợp với những cô gái năng động. BABY-G và X-girl là hai thương hiệu mang phong cách đường phố đích thực dành cho những cô gái sinh ra vào thời kỳ đỉnh cao của thời trang đường phố năm 1994. Họ đã trở lại với phong cách ảnh chế theo trào lưu vaporwave vào đầu những năm 2010 trong mẫu đồng hồ BGD-565 màu neon phân cực đặc trưng, tạo nên một cảm giác hư ảo và cổ điển. Dây đeo màu xanh lam nhạt mờ được hoàn thiện bằng lớp phủ ngọc trai màu tím, kết hợp với mặt đồng hồ phân cực với màu sắc óng ánh theo từng cử động nghiêng cổ tay. X-girl luôn đi đầu và là trung tâm của những điểm nhấn thiết kế đặc biệt. Logo X-girl được in trên vòng dây và xuất hiện trên màn hình khi bạn nhấn nút đèn. Ngoài ra còn có logo khuôn mặt nổi tiếng của thương hiệu do Mike Mills thiết kế được khắc trên phần lưng vỏ. Khi phong cách vaporwave không phù hợp với bầu không khí, chúng tôi có ngay dây đeo và gờ bằng nhựa màu đen có thể thay thế để đưa bạn đến bất cứ đâu. Chỉ cần trượt cần gạt trên lưng vỏ để dễ dàng hoán đổi dây đeo và khoác lên mình phong cách bạn muốn. Bao bì được thiết kế đặc biệt nhằm hoàn thiện trải nghiệm X-girl. Phong cách đường phố X-girl dành cho những cô gái cá tính. X-girl cung cấp “Trang phục cho những cô gái cá tính” lấy cảm hứng từ âm nhạc, văn hóa, thể thao và nhiều yếu tố khung cảnh đường phố khác đi trước thời đại.', 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `loai_san_pham`
--
ALTER TABLE `loai_san_pham`
  ADD PRIMARY KEY (`maloaisanpham`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  ADD PRIMARY KEY (`manhacungcap`);

--
-- Chỉ mục cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`masanpham`),
  ADD KEY `maloaisanpham` (`maloaisanpham`),
  ADD KEY `manhacungcap` (`manhacungcap`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `loai_san_pham`
--
ALTER TABLE `loai_san_pham`
  MODIFY `maloaisanpham` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  MODIFY `manhacungcap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `masanpham` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD CONSTRAINT `san_pham_ibfk_1` FOREIGN KEY (`maloaisanpham`) REFERENCES `loai_san_pham` (`maloaisanpham`),
  ADD CONSTRAINT `san_pham_ibfk_2` FOREIGN KEY (`manhacungcap`) REFERENCES `nhacungcap` (`manhacungcap`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
