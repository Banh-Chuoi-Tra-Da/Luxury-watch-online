-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2023 at 04:38 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `luxury_watch_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `forgot_password`
--

CREATE TABLE `forgot_password` (
  `customer_id` int(11) NOT NULL,
  `token` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sp_theo_gt`
--

CREATE TABLE `sp_theo_gt` (
  `ma_sp_theo_gt` int(11) NOT NULL,
  `ten_sp_theo_gt` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sp_theo_gt`
--

INSERT INTO `sp_theo_gt` (`ma_sp_theo_gt`, `ten_sp_theo_gt`) VALUES
(1, 'trẻ em'),
(2, 'người lớn');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_binh_luan`
--

CREATE TABLE `tbl_binh_luan` (
  `id_binh_luan` int(11) NOT NULL,
  `noi_dung_binh_luan` text NOT NULL,
  `masanpham` int(11) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_loai_san_pham`
--

CREATE TABLE `tbl_loai_san_pham` (
  `maloaisanpham` int(10) NOT NULL,
  `tenloaisanpham` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_loai_san_pham`
--

INSERT INTO `tbl_loai_san_pham` (`maloaisanpham`, `tenloaisanpham`) VALUES
(1, 'ĐỒNG HỒ KIM-SỐ'),
(2, 'ĐỒNG HỒ SỐ'),
(3, 'đồng hồ kim');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nguoi_dung`
--

CREATE TABLE `tbl_nguoi_dung` (
  `id` int(11) NOT NULL,
  `names` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `passwords` varchar(100) NOT NULL,
  `token` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_nguoi_dung`
--

INSERT INTO `tbl_nguoi_dung` (`id`, `names`, `email`, `passwords`, `token`) VALUES
(1, 'Halluo', '23a4040079@bav.edu.vn', 'Haluo1632@123', 'user_63b42548171508.54823217'),
(2, 'gthyjH', 'luongha1632@gmail.com', 'Haluo1632@', 'user_63b44ac9308581.82893781');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nha_cung_cap`
--

CREATE TABLE `tbl_nha_cung_cap` (
  `manhacungcap` int(11) NOT NULL,
  `tennhacungcap` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_nha_cung_cap`
--

INSERT INTO `tbl_nha_cung_cap` (`manhacungcap`, `tennhacungcap`) VALUES
(1, 'G-SHOCK'),
(2, 'BABY-G'),
(3, 'EDIFICE'),
(4, 'PRO TREK'),
(5, 'SHEEN');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_san_pham`
--

CREATE TABLE `tbl_san_pham` (
  `masanpham` int(10) NOT NULL,
  `tensanpham` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `maloaisanpham` int(10) NOT NULL,
  `soluong` int(15) NOT NULL,
  `dongia` int(15) NOT NULL,
  `anh` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mota` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `manhacungcap` int(10) NOT NULL,
  `ma_sp_theo_gt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_san_pham`
--

INSERT INTO `tbl_san_pham` (`masanpham`, `tensanpham`, `maloaisanpham`, `soluong`, `dongia`, `anh`, `mota`, `manhacungcap`, `ma_sp_theo_gt`) VALUES
(3, 'GM-110EARTH-1A', 1, 30, 10000000, 'p-1.png', 'Bùng nổ với chiếc G-SHOCK đủ bền để đưa bạn ra ngoài vũ trụ ngắm nhìn Trái Đất xinh đẹp. Hình ảnh hành tinh quê hương của chúng ta khi nhìn từ vũ trụ được tái hiện một cách táo bạo trên lớp mạ ion của đường gờ kim loại và mặt đồng hồ được xử lý đặc biệt của mẫu GM-110 kim loại to bản đặc trưng. Một tuyên ngôn thời trang mạnh mẽ và phiêu lưu, với gờ kim loại thiết kế độc đáo mang hoạ tiết Trái Đất tuyệt đẹp.', 1, 2),
(4, 'GA-110Y-9A', 1, 20, 3000000, 'p-2.png', 'Theo đuổi phong cách retro với chiếc G-SHOCK thể thao đầy màu sắc lấy cảm hứng từ thập niên 90 trong bộ sưu tập ’90s Sport Series. Thiết kế này gợi nhớ về bảng màu được ưa chuộng của mẫu DW-001 năm 1994. Có mẫu đồng hồ đôi để cùng chia sẻ đam mê với nửa kia của bạn.', 1, 2),
(5, 'BGD-565XG-2', 2, 25, 2500000, 'p-3.png', 'Đừng bỏ lỡ phong cách đường phố phù hợp với những cô gái cá tính. BABY-G và X-girl hợp tác tạo nên chiếc đồng hồ đơn giản vô cùng phù hợp với những cô gái năng động. BABY-G và X-girl là hai thương hiệu mang phong cách đường phố đích thực dành cho những cô gái sinh ra vào thời kỳ đỉnh cao của thời trang đường phố năm 1994. Họ đã trở lại với phong cách ảnh chế theo trào lưu vaporwave vào đầu những năm 2010 trong mẫu đồng hồ BGD-565 màu neon phân cực đặc trưng, tạo nên một cảm giác hư ảo và cổ điển. Dây đeo màu xanh lam nhạt mờ được hoàn thiện bằng lớp phủ ngọc trai màu tím, kết hợp với mặt đồng hồ phân cực với màu sắc óng ánh theo từng cử động nghiêng cổ tay. X-girl luôn đi đầu và là trung tâm của những điểm nhấn thiết kế đặc biệt. Logo X-girl được in trên vòng dây và xuất hiện trên màn hình khi bạn nhấn nút đèn. Ngoài ra còn có logo khuôn mặt nổi tiếng của thương hiệu do Mike Mills thiết kế được khắc trên phần lưng vỏ. Khi phong cách vaporwave không phù hợp với bầu không khí, chúng tôi có ngay dây đeo và gờ bằng nhựa màu đen có thể thay thế để đưa bạn đến bất cứ đâu. Chỉ cần trượt cần gạt trên lưng vỏ để dễ dàng hoán đổi dây đeo và khoác lên mình phong cách bạn muốn. Bao bì được thiết kế đặc biệt nhằm hoàn thiện trải nghiệm X-girl. Phong cách đường phố X-girl dành cho những cô gái cá tính. X-girl cung cấp “Trang phục cho những cô gái cá tính” lấy cảm hứng từ âm nhạc, văn hóa, thể thao và nhiều yếu tố khung cảnh đường phố khác đi trước thời đại', 2, 1),
(6, 'BGA-270S-4A', 1, 44, 4000000, 'p-4.png', 'Mẫu đồng hồ thuộc dòng “Màu trong suốt” hoàn hảo cho các hoạt động ngoài trời. Mẫu BGA-270 đặc trưng với cấu trúc gờ kết hợp các phần khác nhau của phần trên và dưới mặt đồng hồ, mẫu này được chọn là một trong những mẫu cơ bản. Dây đeo và vỏ được thiết kế chất liệu nhựa resin màu đỏ trong mờ gần như toàn bộ, sau đó, vỏ được hoàn thiện trong suốt xuyên thấu.', 2, 1),
(7, 'EFR-526D-5CV', 1, 23, 2300000, 'p-5.png', 'Đồng hồ bấm giờ EDIFICE cổ điển cỡ trung có sự kết hợp táo bạo giữa các chi tiết và thiết kế tinh xảo là sản phẩm sinh ra để dành cho bạn. Dây đeo bằng thép không gỉ chắc chắn kết hợp với mặt số màu nâu đỏ đậm, lấy cảm hứng từ phong cách lái xe thành thị sành điệu.', 3, 2),
(10, 'ECB-2000PB-1A', 1, 30, 10000000, 'p-6.png', 'Kiểm soát tốc độ và trí tuệ với mẫu đồng hồ EDIFICE kết hợp kim-số chạy bằng năng lượng mặt trời. Lấy cảm hứng từ hệ thống giảm xóc xe đua công thức, SOSPENSIONE ECB-2000 là mẫu đồng hồ EDIFICE đầu tiên có vỏ bằng nhựa gia cố bằng sợi carbon, nhờ thiết kế vỏ sắp xếp các vấu theo cấu hình bốn tay vô cùng độc đáo. Chiếc đồng hồ cũng gia cố các vấu bằng sợi carbon nhằm thể hiện tinh thần đua xe đích thực trong cả vật liệu lẫn phong cách thiết kế. Bạn có thể nhanh chóng đồng bộ hóa với điện thoại thông minh của bạn qua Bluetooth®. Nhấn vào ứng dụng chuyên dụng để truy cập tính năng bấm giờ chính xác đến từng giây, vốn rất quan trọng đối với các đội đua, đồng thời dễ dàng quản lý giờ thế giới và truyền dữ liệu đồng hồ bấm giờ được đo đến từng mili giây tới điện thoại thông minh của bạn. Đèn LED chiếu sáng cực mạnh giúp bạn dễ dàng xem mặt đồng hồ kim-số và hệ thống Tough Solar giúp bạn sạc đầy và tiếp tục chạy ngay cả khi thực hiện nhiều chức năng chỉ bằng một lượng ánh sáng nhỏ.', 3, 2),
(11, 'PRW-50Y-1B', 1, 20, 3000000, 'p-7.png', 'Mẫu đồng hồ thuộc dòng PRW-50 \"Climber Line\" nhỏ, có khả năng thao tác tốt từ \"PRO TREK\", tiếp tục phát triển công nghệ và thiết kế tiên tiến. Dựa trên PRW-60 có thiết kế nhỏ hơn đáng kể thông qua cấu trúc tích hợp của nắp sau và các vấu kết nối vỏ và dây đeo, mẫu đồng hồ này có khả năng hiển thị tuyệt vời. Đạt được khả năng hiển thị cao bất chấp vẻ ngoài của cánh tay mảnh mai bằng cách kết hợp mặt số không bóng và vạch chỉ giờ kiểu chữ Ả Rập với sơn phát quang ở các phần thụt vào. Các khía dày, chạm khắc, được thiết kế để trông giống như bánh răng, được áp dụng trên chu vi bên ngoài của đường gờ để tạo cảm giác cơ học và tạo sự hấp dẫn ngoài trời, hoang dã cho đồng hồ. Mẫu đồng hồ kim cổ điển màu trắng ngà với khả năng đeo được cải thiện thông qua dây đeo Durasoft với khả năng chịu nhiệt độ thấp tuyệt vời. Ngoài ra, về mặt chức năng, mẫu đồng hồ được trang bị Bộ Ba Cảm Biến Phiên Bản 3 có thể đo hướng, áp suất khí quyển/nhiệt độ và độ cao.', 4, 1),
(12, 'SHE-4539FGM-9A', 3, 30, 1500000, 'p-8.png', 'Trải nghiệm phong cách có đôi chút khác thường và lãng mạn với chiếc đồng hồ lấy cảm hứng từ những vòng hoa. Vòng hoa không có điểm kết thúc tượng trưng cho tình yêu vĩnh cửu và may mắn – những cảm xúc dường như bừng nở từ thiết kế vòng hoa của những chiếc đồng hồ này. Lớp hoàn thiện một tông màu kết hợp hài hòa với màu sắc của mặt số, cùng viên pha lê duy nhất lấp lánh đầy tinh tế ở vị trí 7 giờ. Vỏ và dây đeo đều được mạ ion cùng tông màu với mặt số, tạo nên diện mạo đơn sắc vô cùng tinh tế. Được trang bị mặt kính saphia chống xước và khả năng chống nước ở độ sâu lên đến 50 mét, chiếc đồng hồ tuyệt đẹp mà vẫn đầy đủ chức năng này mang đến cho bạn niềm vui trong cuộc sống năng động.', 5, 2),
(13, 'SHE-4541PG-2A', 3, 20, 2000000, 'https://www.casio.com/content/dam/casio/product-info/locales/vn/vi/timepiece/product/watch/S/SH/SHE/she-4541pg-2a/assets/SHE-4541PG-2AU.png.transform/main-visual-pc/image.png', 'Bổ sung phiên bản đồng hồ mang màu sắc dịu nhẹ, lung linh vào bộ sưu tập bảng màu của bạn. Chiếc đồng hồ đơn giản có diện mạo cổ điển với kim giờ, phút và giây nay trông rực rỡ hơn với đường gờ và dây đeo phủ lớp tráng gương lấp lánh. Mặt kính saphia chống xước và khả năng chống nước ở độ sâu lên đến 50 mét giúp bạn không phải lo lắng, trong khi màn hình hiển thị ngày dễ đọc và các chức năng tiện dụng khác mang đến cho bạn cuộc sống dễ dàng hơn. Kết hợp cả phong cách lẫn tính thực tiễn, đây là món phụ kiện tuyệt đẹp mà cổ tay bạn đang còn thiếu', 5, 2),
(14, 'PRW-30-1A', 2, 3, 10000000, 'https://www.casio.com/content/dam/casio/product-info/locales/vn/vi/timepiece/product/watch/P/PR/PRW/PRW-30-1A/assets/PRW-30-1A_Seq1.png.transform/main-visual-pc/image.png', 'Mẫu đồng hồ số PRW-30 từ dòng PRO TREK climber line có thể thao tác trực quan. Một nút lớn trực tiếp cho phép đo hướng, áp suất khí quyển/cao độ và nhiệt độ bằng một lần nhấn phía bên phải của đồng hồ và kết quả đo được hiển thị bằng số. Gần mỗi nút có các biểu tượng cho biết hướng, độ cao và áp suất khí quyển để có thể nhận biết các chức năng ngay lập tức, cho phép đo trực quan và phân biệt những thông tin cần thiết ngay cả trong các tình huống thời tiết khắc nghiệt. Ngoài ra, khả năng hiển thị đã được cải thiện bằng màn hình tinh thể lỏng STN và phông chữ đậm. Ngoài các chức năng đo lường, đồng hồ được trang bị các chức năng hoạt động cơ bản như Tough Solar, chức năng thu sóng vô tuyến và khả năng chống nước ở độ sâu 10 bar, vì vậy có thể được sử dụng ngay cả trong các trường hợp có điều kiện khắc nghiệt. Dòng đồng hồ này cũng đã được thiết kế nhỏ hơn và nhẹ hơn để không cản trở chuyển động của cổ tay. Đồng hồ cũng sử dụng dây đeo Durasoft bền hơn. Khả năng đeo của đồng hồ cũng đã được cải thiện để có thể đeo trong thời gian dài khi leo núi và ở ngoài trời.', 4, 2),
(15, 'GMD-S6900Y-9', 2, 4, 2000000, 'https://www.casio.com/content/dam/casio/product-info/locales/vn/vi/timepiece/product/watch/G/GM/GMD/gmd-s6900y-9/assets/GMD-S6900Y-9.png.transform/main-visual-pc/image.png', 'Theo đuổi phong cách retro với chiếc G-SHOCK thể thao đầy màu sắc lấy cảm hứng từ thập niên 90 trong bộ sưu tập ’90s Sport Series. Thiết kế này gợi nhớ về bảng màu được ưa chuộng của mẫu DW-001 năm 1994. Có mẫu đồng hồ đôi để cùng chia sẻ đam mê với nửa kia của bạn', 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `forgot_password`
--
ALTER TABLE `forgot_password`
  ADD PRIMARY KEY (`customer_id`),
  ADD UNIQUE KEY `token` (`token`);

--
-- Indexes for table `sp_theo_gt`
--
ALTER TABLE `sp_theo_gt`
  ADD PRIMARY KEY (`ma_sp_theo_gt`);

--
-- Indexes for table `tbl_binh_luan`
--
ALTER TABLE `tbl_binh_luan`
  ADD PRIMARY KEY (`id_binh_luan`),
  ADD KEY `binh_luan_ibfk_1` (`masanpham`);

--
-- Indexes for table `tbl_loai_san_pham`
--
ALTER TABLE `tbl_loai_san_pham`
  ADD PRIMARY KEY (`maloaisanpham`);

--
-- Indexes for table `tbl_nguoi_dung`
--
ALTER TABLE `tbl_nguoi_dung`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tbl_nha_cung_cap`
--
ALTER TABLE `tbl_nha_cung_cap`
  ADD PRIMARY KEY (`manhacungcap`);

--
-- Indexes for table `tbl_san_pham`
--
ALTER TABLE `tbl_san_pham`
  ADD PRIMARY KEY (`masanpham`),
  ADD KEY `san_pham_ibfk_3` (`ma_sp_theo_gt`),
  ADD KEY `san_pham_ibfk_1` (`maloaisanpham`),
  ADD KEY `san_pham_ibfk_2` (`manhacungcap`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `forgot_password`
--
ALTER TABLE `forgot_password`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sp_theo_gt`
--
ALTER TABLE `sp_theo_gt`
  MODIFY `ma_sp_theo_gt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_binh_luan`
--
ALTER TABLE `tbl_binh_luan`
  MODIFY `id_binh_luan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_loai_san_pham`
--
ALTER TABLE `tbl_loai_san_pham`
  MODIFY `maloaisanpham` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_nguoi_dung`
--
ALTER TABLE `tbl_nguoi_dung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_nha_cung_cap`
--
ALTER TABLE `tbl_nha_cung_cap`
  MODIFY `manhacungcap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_san_pham`
--
ALTER TABLE `tbl_san_pham`
  MODIFY `masanpham` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_binh_luan`
--
ALTER TABLE `tbl_binh_luan`
  ADD CONSTRAINT `binh_luan_ibfk_1` FOREIGN KEY (`masanpham`) REFERENCES `tbl_san_pham` (`masanpham`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_san_pham`
--
ALTER TABLE `tbl_san_pham`
  ADD CONSTRAINT `tbl_san_pham_ibfk_1` FOREIGN KEY (`maloaisanpham`) REFERENCES `tbl_loai_san_pham` (`maloaisanpham`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_san_pham_ibfk_2` FOREIGN KEY (`manhacungcap`) REFERENCES `tbl_nha_cung_cap` (`manhacungcap`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_san_pham_ibfk_3` FOREIGN KEY (`ma_sp_theo_gt`) REFERENCES `sp_theo_gt` (`ma_sp_theo_gt`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
