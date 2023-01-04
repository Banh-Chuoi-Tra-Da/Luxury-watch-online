-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 31, 2022 lúc 05:09 AM
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
(2, 'ĐỒNG HỒ SỐ'),
(3, 'ĐỒNG HỒ KIM');

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
  `anh1` varchar(300) NOT NULL,
  `anh2` varchar(300) NOT NULL,
  `mota` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `manhacungcap` int(10) NOT NULL,
  `ma_sp_theo_gt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`masanpham`, `tensanpham`, `maloaisanpham`, `soluong`, `dongia`, `anh`, `anh1`, `anh2`, `mota`, `manhacungcap`, `ma_sp_theo_gt`) VALUES
(3, 'GM-110EARTH-1A', 1, 30, 10000000, 'https://www.casio.com/content/dam/casio/product-info/locales/vn/vi/timepiece/product/watch/G/GM/GM1/gm-110earth-1a/assets/GM-110EARTH-1A.png.transform/main-visual-pc/image.png', 'https://www.casio.com/content/dam/casio/product-info/locales/vn/vi/timepiece/product/watch/G/GM/GM1/gm-110earth-1a/assets/GM-110EARTH-1A_urabuta.jpg.transform/main-visual-pc/image.jpg', 'https://www.casio.com/content/dam/casio/product-info/locales/vn/vi/timepiece/product/watch/G/GM/GM1/gm-110earth-1a/assets/GM-110EARTH-1A_N.png.transform/main-visual-pc/image.png', 'Bùng nổ với chiếc G-SHOCK đủ bền để đưa bạn ra ngoài vũ trụ ngắm nhìn Trái Đất xinh đẹp. Hình ảnh hành tinh quê hương của chúng ta khi nhìn từ vũ trụ được tái hiện một cách táo bạo trên lớp mạ ion của đường gờ kim loại và mặt đồng hồ được xử lý đặc biệt của mẫu GM-110 kim loại to bản đặc trưng. Một tuyên ngôn thời trang mạnh mẽ và phiêu lưu, với gờ kim loại thiết kế độc đáo mang hoạ tiết Trái Đất tuyệt đẹp.', 1, 2),
(4, 'GA-110Y-9A', 1, 20, 3000000, 'https://www.casio.com/content/dam/casio/product-info/locales/vn/vi/timepiece/product/watch/G/GA/GA1/ga-110y-9a/assets/GA-110Y-9A.png.transform/main-visual-pc/image.png', 'https://www.casio.com/content/dam/casio/product-info/locales/vn/vi/timepiece/product/watch/G/GA/GA1/ga-110y-9a/assets/GA-110Y-9A_N.png.transform/main-visual-pc/image.png', 'https://www.casio.com/content/dam/casio/product-info/locales/vn/vi/timepiece/product/watch/G/GA/GA1/ga-110y-9a/assets/GA-110Y-9A_GMA-S110Y-9A_model2.jpg.transform/main-visual-pc/image.jpg', 'Theo đuổi phong cách retro với chiếc G-SHOCK thể thao đầy màu sắc lấy cảm hứng từ thập niên 90 trong bộ sưu tập ’90s Sport Series. Thiết kế này gợi nhớ về bảng màu được ưa chuộng của mẫu DW-001 năm 1994. Có mẫu đồng hồ đôi để cùng chia sẻ đam mê với nửa kia của bạn.', 1, 2),
(5, 'BGD-565XG-2', 2, 25, 2500000, 'https://www.casio.com/content/dam/casio/product-info/locales/vn/vi/timepiece/product/watch/B/BG/BGD/bgd-565xg-2/assets/BGD-565XG-2.png.transform/main-visual-pc/image.png', 'https://www.casio.com/content/dam/casio/product-info/locales/vn/vi/timepiece/product/watch/B/BG/BGD/bgd-565xg-2/assets/BGD-565XG-2_N.png.transform/main-visual-pc/image.png', 'https://www.casio.com/content/dam/casio/product-info/locales/vn/vi/timepiece/product/watch/B/BG/BGD/bgd-565xg-2/assets/BGD-565XG-2_theme.jpg.transform/main-visual-pc/image.jpg', 'Đừng bỏ lỡ phong cách đường phố phù hợp với những cô gái cá tính. BABY-G và X-girl hợp tác tạo nên chiếc đồng hồ đơn giản vô cùng phù hợp với những cô gái năng động. BABY-G và X-girl là hai thương hiệu mang phong cách đường phố đích thực dành cho những cô gái sinh ra vào thời kỳ đỉnh cao của thời trang đường phố năm 1994. Họ đã trở lại với phong cách ảnh chế theo trào lưu vaporwave vào đầu những năm 2010 trong mẫu đồng hồ BGD-565 màu neon phân cực đặc trưng, tạo nên một cảm giác hư ảo và cổ điển. Dây đeo màu xanh lam nhạt mờ được hoàn thiện bằng lớp phủ ngọc trai màu tím, kết hợp với mặt đồng hồ phân cực với màu sắc óng ánh theo từng cử động nghiêng cổ tay. X-girl luôn đi đầu và là trung tâm của những điểm nhấn thiết kế đặc biệt. Logo X-girl được in trên vòng dây và xuất hiện trên màn hình khi bạn nhấn nút đèn. Ngoài ra còn có logo khuôn mặt nổi tiếng của thương hiệu do Mike Mills thiết kế được khắc trên phần lưng vỏ. Khi phong cách vaporwave không phù hợp với bầu không khí, chúng tôi có ngay dây đeo và gờ bằng nhựa màu đen có thể thay thế để đưa bạn đến bất cứ đâu. Chỉ cần trượt cần gạt trên lưng vỏ để dễ dàng hoán đổi dây đeo và khoác lên mình phong cách bạn muốn. Bao bì được thiết kế đặc biệt nhằm hoàn thiện trải nghiệm X-girl. Phong cách đường phố X-girl dành cho những cô gái cá tính. X-girl cung cấp “Trang phục cho những cô gái cá tính” lấy cảm hứng từ âm nhạc, văn hóa, thể thao và nhiều yếu tố khung cảnh đường phố khác đi trước thời đại', 2, 1),
(6, 'BGA-270S-4A', 1, 44, 4000000, 'https://www.casio.com/content/dam/casio/product-info/locales/vn/vi/timepiece/product/watch/B/BG/BG1/bg-169hrb-7/assets/BG-169HRB-7.png.transform/main-visual-pc/image.png', 'https://www.casio.com/content/dam/casio/product-info/locales/vn/vi/timepiece/product/watch/B/BG/BG1/bg-169hrb-7/assets/BG-169HRB-7_N.png.transform/main-visual-pc/image.png', 'https://www.casio.com/content/dam/casio/product-info/locales/vn/vi/timepiece/product/watch/B/BG/BG1/bg-169hrb-7/assets/BG-169HRB-7_urabuta.png.transform/main-visual-pc/image.png', 'Mẫu đồng hồ thuộc dòng “Màu trong suốt” hoàn hảo cho các hoạt động ngoài trời. Mẫu BGA-270 đặc trưng với cấu trúc gờ kết hợp các phần khác nhau của phần trên và dưới mặt đồng hồ, mẫu này được chọn là một trong những mẫu cơ bản. Dây đeo và vỏ được thiết kế chất liệu nhựa resin màu đỏ trong mờ gần như toàn bộ, sau đó, vỏ được hoàn thiện trong suốt xuyên thấu.', 2, 1),
(7, 'ECB-2000MFG-1A', 1, 23, 2300000, 'https://www.casio.com/content/dam/casio/product-info/locales/vn/vi/timepiece/product/watch/E/EC/ECB/ecb-2000mfg-1a/assets/ECB-2000MFG-1A.png.transform/main-visual-pc/image.png', 'https://www.casio.com/content/dam/casio/product-info/locales/vn/vi/timepiece/product/watch/E/EC/ECB/ecb-2000mfg-1a/assets/ECB-2000MFG-1A_N.png.transform/main-visual-pc/image.png', 'https://www.casio.com/content/dam/casio/product-info/locales/vn/vi/timepiece/product/watch/E/EC/ECB/ecb-2000mfg-1a/assets/ECB-2000MFG-1A_urabuta.png.transform/main-visual-pc/image.png', 'Đồng hồ bấm giờ EDIFICE cổ điển cỡ trung có sự kết hợp táo bạo giữa các chi tiết và thiết kế tinh xảo là sản phẩm sinh ra để dành cho bạn. Dây đeo bằng thép không gỉ chắc chắn kết hợp với mặt số màu nâu đỏ đậm, lấy cảm hứng từ phong cách lái xe thành thị sành điệu.', 3, 2),
(10, 'EQB-2000HR-1A', 1, 30, 10000000, 'https://www.casio.com/content/dam/casio/product-info/locales/vn/vi/timepiece/product/watch/E/EQ/EQB/eqb-2000hr-1a/assets/EQB-2000HR-1A.png.transform/main-visual-pc/image.png', 'https://www.casio.com/content/dam/casio/product-info/locales/vn/vi/timepiece/product/watch/E/EQ/EQB/eqb-2000hr-1a/assets/EQB-2000HR-1A_N.png.transform/main-visual-pc/image.png', 'https://www.casio.com/content/dam/casio/product-info/locales/vn/vi/timepiece/product/watch/E/EQ/EQB/eqb-2000hr-1a/assets/EQB-2000HR-1A_back.jpg.transform/main-visual-pc/image.jpg', 'Kiểm soát tốc độ và trí tuệ với mẫu đồng hồ EDIFICE kết hợp kim-số chạy bằng năng lượng mặt trời. Lấy cảm hứng từ hệ thống giảm xóc xe đua công thức, SOSPENSIONE ECB-2000 là mẫu đồng hồ EDIFICE đầu tiên có vỏ bằng nhựa gia cố bằng sợi carbon, nhờ thiết kế vỏ sắp xếp các vấu theo cấu hình bốn tay vô cùng độc đáo. Chiếc đồng hồ cũng gia cố các vấu bằng sợi carbon nhằm thể hiện tinh thần đua xe đích thực trong cả vật liệu lẫn phong cách thiết kế. Bạn có thể nhanh chóng đồng bộ hóa với điện thoại thông minh của bạn qua Bluetooth®. Nhấn vào ứng dụng chuyên dụng để truy cập tính năng bấm giờ chính xác đến từng giây, vốn rất quan trọng đối với các đội đua, đồng thời dễ dàng quản lý giờ thế giới và truyền dữ liệu đồng hồ bấm giờ được đo đến từng mili giây tới điện thoại thông minh của bạn. Đèn LED chiếu sáng cực mạnh giúp bạn dễ dàng xem mặt đồng hồ kim-số và hệ thống Tough Solar giúp bạn sạc đầy và tiếp tục chạy ngay cả khi thực hiện nhiều chức năng chỉ bằng một lượng ánh sáng nhỏ.', 3, 2),
(11, 'PRG-340-1', 1, 20, 3000000, 'https://www.casio.com/content/dam/casio/product-info/locales/vn/vi/timepiece/product/watch/P/PR/PRG/prg-340-1/assets/PRG-340-1.png.transform/main-visual-pc/image.png', 'https://www.casio.com/content/dam/casio/product-info/locales/vn/vi/timepiece/product/watch/P/PR/PRG/prg-340-1/assets/PRG-340-1_03.jpg.transform/main-visual-pc/image.jpg', 'https://www.casio.com/content/dam/casio/product-info/locales/vn/vi/timepiece/product/watch/P/PR/PRG/prg-340-1/assets/PRG-340-1_05.jpg.transform/main-visual-pc/image.jpg', 'Mẫu đồng hồ thuộc dòng PRW-50 \"Climber Line\" nhỏ, có khả năng thao tác tốt từ \"PRO TREK\", tiếp tục phát triển công nghệ và thiết kế tiên tiến. Dựa trên PRW-60 có thiết kế nhỏ hơn đáng kể thông qua cấu trúc tích hợp của nắp sau và các vấu kết nối vỏ và dây đeo, mẫu đồng hồ này có khả năng hiển thị tuyệt vời. Đạt được khả năng hiển thị cao bất chấp vẻ ngoài của cánh tay mảnh mai bằng cách kết hợp mặt số không bóng và vạch chỉ giờ kiểu chữ Ả Rập với sơn phát quang ở các phần thụt vào. Các khía dày, chạm khắc, được thiết kế để trông giống như bánh răng, được áp dụng trên chu vi bên ngoài của đường gờ để tạo cảm giác cơ học và tạo sự hấp dẫn ngoài trời, hoang dã cho đồng hồ. Mẫu đồng hồ kim cổ điển màu trắng ngà với khả năng đeo được cải thiện thông qua dây đeo Durasoft với khả năng chịu nhiệt độ thấp tuyệt vời. Ngoài ra, về mặt chức năng, mẫu đồng hồ được trang bị Bộ Ba Cảm Biến Phiên Bản 3 có thể đo hướng, áp suất khí quyển/nhiệt độ và độ cao.', 4, 1),
(12, 'SHE-4539FGM-9A', 3, 30, 1500000, 'https://www.casio.com/content/dam/casio/product-info/locales/vn/vi/timepiece/product/watch/S/SH/SHE/she-4539fgm-9a/assets/SHE-4539FGM-9AU.png.transform/main-visual-pc/image.png', 'https://www.casio.com/content/dam/casio/product-info/locales/vn/vi/timepiece/product/watch/S/SH/SHE/she-4539fgm-9a/assets/SHE-4539FGM-9A_front.jpg.transform/main-visual-pc/image.jpg', 'https://www.casio.com/content/dam/casio/product-info/locales/vn/vi/timepiece/product/watch/S/SH/SHE/she-4539fgm-9a/assets/SHE-4539_KV.jpg.transform/main-visual-pc/image.jpg', 'Trải nghiệm phong cách có đôi chút khác thường và lãng mạn với chiếc đồng hồ lấy cảm hứng từ những vòng hoa. Vòng hoa không có điểm kết thúc tượng trưng cho tình yêu vĩnh cửu và may mắn – những cảm xúc dường như bừng nở từ thiết kế vòng hoa của những chiếc đồng hồ này. Lớp hoàn thiện một tông màu kết hợp hài hòa với màu sắc của mặt số, cùng viên pha lê duy nhất lấp lánh đầy tinh tế ở vị trí 7 giờ. Vỏ và dây đeo đều được mạ ion cùng tông màu với mặt số, tạo nên diện mạo đơn sắc vô cùng tinh tế. Được trang bị mặt kính saphia chống xước và khả năng chống nước ở độ sâu lên đến 50 mét, chiếc đồng hồ tuyệt đẹp mà vẫn đầy đủ chức năng này mang đến cho bạn niềm vui trong cuộc sống năng động.', 5, 2),
(13, 'SHE-4539FPM-4A', 3, 20, 2000000, 'https://www.casio.com/content/dam/casio/product-info/locales/vn/vi/timepiece/product/watch/S/SH/SHE/she-4539fpm-4a/assets/SHE-4539FPM-4AU.png.transform/main-visual-pc/image.png', 'https://www.casio.com/content/dam/casio/product-info/locales/vn/vi/timepiece/product/watch/S/SH/SHE/she-4539fpm-4a/assets/SHE-4539FPM-4A_side.jpg.transform/main-visual-pc/image.jpg', 'https://www.casio.com/content/dam/casio/product-info/locales/vn/vi/timepiece/product/watch/S/SH/SHE/she-4539fpm-4a/assets/SHE-4539FPM-4A_model.jpg.transform/main-visual-pc/image.jpg', 'Bổ sung phiên bản đồng hồ mang màu sắc dịu nhẹ, lung linh vào bộ sưu tập bảng màu của bạn. Chiếc đồng hồ đơn giản có diện mạo cổ điển với kim giờ, phút và giây nay trông rực rỡ hơn với đường gờ và dây đeo phủ lớp tráng gương lấp lánh. Mặt kính saphia chống xước và khả năng chống nước ở độ sâu lên đến 50 mét giúp bạn không phải lo lắng, trong khi màn hình hiển thị ngày dễ đọc và các chức năng tiện dụng khác mang đến cho bạn cuộc sống dễ dàng hơn. Kết hợp cả phong cách lẫn tính thực tiễn, đây là món phụ kiện tuyệt đẹp mà cổ tay bạn đang còn thiếu', 5, 2),
(14, 'PRW-30-1A', 2, 3, 10000000, 'https://www.casio.com/content/dam/casio/product-info/locales/vn/vi/timepiece/product/watch/P/PR/PRG/PRG-650YL-3/assets/PRG-650YL-3_Seq1.png.transform/main-visual-pc/image.png', 'https://www.casio.com/content/dam/casio/product-info/locales/vn/vi/timepiece/product/watch/P/PR/PRW/PRW-30-1A/assets/PRW-30-1A_Seq1.png.transform/main-visual-pc/image.png', 'https://www.casio.com/content/dam/casio/product-info/locales/vn/vi/timepiece/product/watch/P/PR/PRG/PRG-650YL-3/assets/PRG-650YL-3_Seq3.jpg.transform/main-visual-pc/image.jpg', 'Mẫu đồng hồ theo chủ đề hang động (thám hiểm hang động) từ PRO TREK. Màu đen sắc nét gợi lên bóng tối mang màu đen thăm thẳm của hang động tạo thành màu cơ bản của đồng hồ, trong khi màu cam và màu vàng gợi nhớ đến trang phục thám hiểm hang động được sử dụng ở khắp mọi nơi để làm nổi bật màu sắc. Ngoài ra, dây đeo bằng da phát quang được sử dụng làm vật liệu phát quang cho các vạch chỉ giờ và đường gờ, khiến cho đồng hồ tỏa sáng trong bóng tối. Điều này làm tăng khả năng hiển thị vào ban đêm. Ngoài ra, vòng dây đeo bằng thép không gỉ được hoàn thiện bằng IP màu đen để thể hiện bóng tối mang màu đen thăm thẳm, đồng thời đạt được khả năng chống mài mòn và chất lượng cao. Về chức năng, đồng hồ được trang bị bộ ba cảm biến có thể đo hướng, độ cao/áp suất khí quyển và nhiệt độ, Tough Solar và chức năng thu gọn kim. Mẫu đồng hồ chức năng cao có thể đóng vai trò tích cực ngay cả trong bối cảnh thời trang.', 4, 2),
(15, 'GM-S110PG-1A', 2, 4, 2000000, 'https://www.casio.com/content/dam/casio/product-info/locales/vn/vi/timepiece/product/watch/G/GM/GMS/gm-s110pg-1a/assets/GM-S110PG-1A.png.transform/main-visual-pc/image.png', 'https://www.casio.com/content/dam/casio/product-info/locales/vn/vi/timepiece/product/watch/G/GM/GMS/gm-s110pg-1a/assets/GM-S110PG-1A_N.png.transform/main-visual-pc/image.png', 'https://www.casio.com/content/dam/casio/product-info/locales/vn/vi/timepiece/product/watch/G/GM/GMS/gm-s110pg-1a/assets/GM-S110PG-1A_side.jpg.transform/main-visual-pc/image.jpg', 'Mẫu đồng hồ G-SHOCK GM-110 kết hợp kim-số phủ kim loại vô cùng tiện dụng, nay sở hữu thiết kế mỏng và nhỏ gọn hơn. Mặt số có thiết kế đa dạng và chiều sâu ấn tượng được chế tạo bằng cách xếp lớp các bộ phận 3D với các chi tiết tinh xảo. Ngoài phong cách thiết kế kết hợp hoàn hảo giữa màn hình số và kim giờ, phút, mặt đồng hồ còn vô cùng dễ nhìn và dễ đọc. Các bộ phận mặt số màu kim loại tô điểm cho nắp đường gờ bằng thép không gỉ tạo nên diện mạo mang phong cách lôi cuốn và thanh lịch. Trong khi thiết kế dây phẳng tạo thêm điểm nhấn đặc trưng và làm tăng thêm độ mạnh mẽ.', 1, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sp_theo_gt`
--

CREATE TABLE `sp_theo_gt` (
  `ma_sp_theo_gt` int(11) NOT NULL,
  `ten_sp_theo_gt` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sp_theo_gt`
--

INSERT INTO `sp_theo_gt` (`ma_sp_theo_gt`, `ten_sp_theo_gt`) VALUES
(1, 'trẻ em'),
(2, 'người lớn');

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
  ADD KEY `san_pham_ibfk_3` (`ma_sp_theo_gt`),
  ADD KEY `san_pham_ibfk_1` (`maloaisanpham`),
  ADD KEY `san_pham_ibfk_2` (`manhacungcap`);

--
-- Chỉ mục cho bảng `sp_theo_gt`
--
ALTER TABLE `sp_theo_gt`
  ADD PRIMARY KEY (`ma_sp_theo_gt`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `loai_san_pham`
--
ALTER TABLE `loai_san_pham`
  MODIFY `maloaisanpham` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  MODIFY `manhacungcap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `masanpham` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `sp_theo_gt`
--
ALTER TABLE `sp_theo_gt`
  MODIFY `ma_sp_theo_gt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD CONSTRAINT `san_pham_ibfk_1` FOREIGN KEY (`maloaisanpham`) REFERENCES `loai_san_pham` (`maloaisanpham`) ON UPDATE CASCADE,
  ADD CONSTRAINT `san_pham_ibfk_2` FOREIGN KEY (`manhacungcap`) REFERENCES `nhacungcap` (`manhacungcap`) ON UPDATE CASCADE,
  ADD CONSTRAINT `san_pham_ibfk_3` FOREIGN KEY (`ma_sp_theo_gt`) REFERENCES `sp_theo_gt` (`ma_sp_theo_gt`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
