-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2023 at 03:31 PM
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

--
-- Dumping data for table `tbl_binh_luan`
--

INSERT INTO `tbl_binh_luan` (`id_binh_luan`, `noi_dung_binh_luan`, `masanpham`, `email`) VALUES
(4, 'Sản phẩm đẹp, ổn định', 33, 'luongha1632@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chi_tiet_hoa_don`
--

CREATE TABLE `tbl_chi_tiet_hoa_don` (
  `id` int(11) NOT NULL,
  `hoa_don_id` int(11) NOT NULL,
  `mat_hang_id` int(11) NOT NULL,
  `gia_ban` float NOT NULL,
  `so_luong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_chi_tiet_hoa_don`
--

INSERT INTO `tbl_chi_tiet_hoa_don` (`id`, `hoa_don_id`, `mat_hang_id`, `gia_ban`, `so_luong`) VALUES
(1, 1, 21, 3000000, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hoa_don`
--

CREATE TABLE `tbl_hoa_don` (
  `id` int(11) NOT NULL,
  `ngay_hoa_don` timestamp NOT NULL DEFAULT current_timestamp(),
  `nguoi_dung_id` int(11) NOT NULL,
  `tong_tien` int(11) NOT NULL,
  `phone_number` char(100) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_hoa_don`
--

INSERT INTO `tbl_hoa_don` (`id`, `ngay_hoa_don`, `nguoi_dung_id`, `tong_tien`, `phone_number`, `address`) VALUES
(1, '2023-01-04 14:25:52', 2, 6000000, '0965198923', 'Hà Nam Ninh');

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
  `phone_number` int(11) NOT NULL,
  `address` text NOT NULL,
  `token` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_nguoi_dung`
--

INSERT INTO `tbl_nguoi_dung` (`id`, `names`, `email`, `passwords`, `phone_number`, `address`, `token`) VALUES
(2, 'gthyjH', 'luongha1632@gmail.com', 'Haluo1632@1223', 0, '', 'user_63b5677e9c06d9.10624642'),
(3, 'LuongHa', 'luongha21632@gmail.com', 'Luongha21632@', 0, '', '');

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
  `anh1` varchar(200) NOT NULL,
  `anh2` varchar(200) NOT NULL,
  `mota` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `manhacungcap` int(10) NOT NULL,
  `ma_sp_theo_gt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_san_pham`
--

INSERT INTO `tbl_san_pham` (`masanpham`, `tensanpham`, `maloaisanpham`, `soluong`, `dongia`, `anh`, `anh1`, `anh2`, `mota`, `manhacungcap`, `ma_sp_theo_gt`) VALUES
(3, 'GM-110EARTH-1A', 1, 30, 10000000, 'sp1-1.webp', 'sp1-2.webp', 'sp1-3.webp', 'Bùng nổ với chiếc G-SHOCK đủ bền để đưa bạn ra ngoài vũ trụ ngắm nhìn Trái Đất xinh đẹp. Hình ảnh hành tinh quê hương của chúng ta khi nhìn từ vũ trụ được tái hiện một cách táo bạo trên lớp mạ ion của đường gờ kim loại và mặt đồng hồ được xử lý đặc biệt của mẫu GM-110 kim loại to bản đặc trưng. Một tuyên ngôn thời trang mạnh mẽ và phiêu lưu, với gờ kim loại thiết kế độc đáo mang hoạ tiết Trái Đất tuyệt đẹp.', 1, 2),
(4, 'GA-110Y-9A', 1, 20, 3000000, 'sp2-1.webp', 'sp2-2.webp', 'sp2-3.webp', 'Theo đuổi phong cách retro với chiếc G-SHOCK thể thao đầy màu sắc lấy cảm hứng từ thập niên 90 trong bộ sưu tập ’90s Sport Series. Thiết kế này gợi nhớ về bảng màu được ưa chuộng của mẫu DW-001 năm 1994. Có mẫu đồng hồ đôi để cùng chia sẻ đam mê với nửa kia của bạn.', 1, 2),
(5, 'BGD-565XG-2', 2, 25, 2500000, 'sp3-1.webp', 'sp3-2.webp', 'sp3-3.webp', 'Đừng bỏ lỡ phong cách đường phố phù hợp với những cô gái cá tính. BABY-G và X-girl hợp tác tạo nên chiếc đồng hồ đơn giản vô cùng phù hợp với những cô gái năng động. BABY-G và X-girl là hai thương hiệu mang phong cách đường phố đích thực dành cho những cô gái sinh ra vào thời kỳ đỉnh cao của thời trang đường phố năm 1994. Họ đã trở lại với phong cách ảnh chế theo trào lưu vaporwave vào đầu những năm 2010 trong mẫu đồng hồ BGD-565 màu neon phân cực đặc trưng, tạo nên một cảm giác hư ảo và cổ điển. Dây đeo màu xanh lam nhạt mờ được hoàn thiện bằng lớp phủ ngọc trai màu tím, kết hợp với mặt đồng hồ phân cực với màu sắc óng ánh theo từng cử động nghiêng cổ tay. X-girl luôn đi đầu và là trung tâm của những điểm nhấn thiết kế đặc biệt. Logo X-girl được in trên vòng dây và xuất hiện trên màn hình khi bạn nhấn nút đèn. Ngoài ra còn có logo khuôn mặt nổi tiếng của thương hiệu do Mike Mills thiết kế được khắc trên phần lưng vỏ. Khi phong cách vaporwave không phù hợp với bầu không khí, chúng tôi có ngay dây đeo và gờ bằng nhựa màu đen có thể thay thế để đưa bạn đến bất cứ đâu. Chỉ cần trượt cần gạt trên lưng vỏ để dễ dàng hoán đổi dây đeo và khoác lên mình phong cách bạn muốn. Bao bì được thiết kế đặc biệt nhằm hoàn thiện trải nghiệm X-girl. Phong cách đường phố X-girl dành cho những cô gái cá tính. X-girl cung cấp “Trang phục cho những cô gái cá tính” lấy cảm hứng từ âm nhạc, văn hóa, thể thao và nhiều yếu tố khung cảnh đường phố khác đi trước thời đại', 2, 1),
(6, 'BGA-270S-4A', 2, 44, 4000000, 'sp4-1.webp', 'sp4-2.webp', 'sp4-3.webp', 'Mẫu đồng hồ thuộc dòng “Màu trong suốt” hoàn hảo cho các hoạt động ngoài trời. Mẫu BGA-270 đặc trưng với cấu trúc gờ kết hợp các phần khác nhau của phần trên và dưới mặt đồng hồ, mẫu này được chọn là một trong những mẫu cơ bản. Dây đeo và vỏ được thiết kế chất liệu nhựa resin màu đỏ trong mờ gần như toàn bộ, sau đó, vỏ được hoàn thiện trong suốt xuyên thấu.', 2, 1),
(7, 'DW-5900TD-9', 2, 23, 2300000, 'sp5-1.webp', 'sp5-2.webp', 'sp5-3.webp', 'Bước vào thế giới công nghệ xuyên không! Mẫu đồng hồ G-SHOCK với thiết kế biến dạng thời gian tạo nên sức hút không hề kém cạnh so với cái tên thương hiệu này. Dây đeo và mặt số được in hoa văn theo phong cách biến dạng thời gian và không gian phá cách bằng màu huỳnh quang rực rỡ, đưa bạn vào thế giới khoa học viễn tưởng. Bạn có thể chọn cho mình mẫu đồng hồ DW-D5600 số đặc trưng, mẫu DW-5900 với thiết kế đồ thị bộ ba hoặc mẫu DW-6900 với thiết kế nút bấm phía trước riêng biệt.', 1, 2),
(10, 'EQB-2000HR-1A', 1, 30, 10000000, 'sp6-1.webp', 'sp6-2.webp', 'sp6-3.webp', 'Kiểm soát tốc độ và trí tuệ với mẫu đồng hồ EDIFICE kết hợp kim-số chạy bằng năng lượng mặt trời. Lấy cảm hứng từ hệ thống giảm xóc xe đua công thức, SOSPENSIONE ECB-2000 là mẫu đồng hồ EDIFICE đầu tiên có vỏ bằng nhựa gia cố bằng sợi carbon, nhờ thiết kế vỏ sắp xếp các vấu theo cấu hình bốn tay vô cùng độc đáo. Chiếc đồng hồ cũng gia cố các vấu bằng sợi carbon nhằm thể hiện tinh thần đua xe đích thực trong cả vật liệu lẫn phong cách thiết kế. Bạn có thể nhanh chóng đồng bộ hóa với điện thoại thông minh của bạn qua Bluetooth®. Nhấn vào ứng dụng chuyên dụng để truy cập tính năng bấm giờ chính xác đến từng giây, vốn rất quan trọng đối với các đội đua, đồng thời dễ dàng quản lý giờ thế giới và truyền dữ liệu đồng hồ bấm giờ được đo đến từng mili giây tới điện thoại thông minh của bạn. Đèn LED chiếu sáng cực mạnh giúp bạn dễ dàng xem mặt đồng hồ kim-số và hệ thống Tough Solar giúp bạn sạc đầy và tiếp tục chạy ngay cả khi thực hiện nhiều chức năng chỉ bằng một lượng ánh sáng nhỏ.', 3, 2),
(11, 'PRG-340-1', 2, 20, 3000000, 'sp7-1.webp', 'sp7-2.webp', 'sp7-3.webp', 'Mẫu đồng hồ thuộc dòng PRW-50 \"Climber Line\" nhỏ, có khả năng thao tác tốt từ \"PRO TREK\", tiếp tục phát triển công nghệ và thiết kế tiên tiến. Dựa trên PRW-60 có thiết kế nhỏ hơn đáng kể thông qua cấu trúc tích hợp của nắp sau và các vấu kết nối vỏ và dây đeo, mẫu đồng hồ này có khả năng hiển thị tuyệt vời. Đạt được khả năng hiển thị cao bất chấp vẻ ngoài của cánh tay mảnh mai bằng cách kết hợp mặt số không bóng và vạch chỉ giờ kiểu chữ Ả Rập với sơn phát quang ở các phần thụt vào. Các khía dày, chạm khắc, được thiết kế để trông giống như bánh răng, được áp dụng trên chu vi bên ngoài của đường gờ để tạo cảm giác cơ học và tạo sự hấp dẫn ngoài trời, hoang dã cho đồng hồ. Mẫu đồng hồ kim cổ điển màu trắng ngà với khả năng đeo được cải thiện thông qua dây đeo Durasoft với khả năng chịu nhiệt độ thấp tuyệt vời. Ngoài ra, về mặt chức năng, mẫu đồng hồ được trang bị Bộ Ba Cảm Biến Phiên Bản 3 có thể đo hướng, áp suất khí quyển/nhiệt độ và độ cao.', 4, 1),
(12, 'SHE-4539FGM-9A', 3, 30, 1500000, 'sp8-1.webp', 'sp8-2.webp', 'sp8-3.webp', 'Trải nghiệm phong cách có đôi chút khác thường và lãng mạn với chiếc đồng hồ lấy cảm hứng từ những vòng hoa. Vòng hoa không có điểm kết thúc tượng trưng cho tình yêu vĩnh cửu và may mắn – những cảm xúc dường như bừng nở từ thiết kế vòng hoa của những chiếc đồng hồ này. Lớp hoàn thiện một tông màu kết hợp hài hòa với màu sắc của mặt số, cùng viên pha lê duy nhất lấp lánh đầy tinh tế ở vị trí 7 giờ. Vỏ và dây đeo đều được mạ ion cùng tông màu với mặt số, tạo nên diện mạo đơn sắc vô cùng tinh tế. Được trang bị mặt kính saphia chống xước và khả năng chống nước ở độ sâu lên đến 50 mét, chiếc đồng hồ tuyệt đẹp mà vẫn đầy đủ chức năng này mang đến cho bạn niềm vui trong cuộc sống năng động.', 5, 2),
(13, 'SHE-4539FPM-4A', 3, 20, 2000000, 'sp9-1.webp', 'sp9-2.webp', 'sp9-3.webp', 'Bổ sung phiên bản đồng hồ mang màu sắc dịu nhẹ, lung linh vào bộ sưu tập bảng màu của bạn. Chiếc đồng hồ đơn giản có diện mạo cổ điển với kim giờ, phút và giây nay trông rực rỡ hơn với đường gờ và dây đeo phủ lớp tráng gương lấp lánh. Mặt kính saphia chống xước và khả năng chống nước ở độ sâu lên đến 50 mét giúp bạn không phải lo lắng, trong khi màn hình hiển thị ngày dễ đọc và các chức năng tiện dụng khác mang đến cho bạn cuộc sống dễ dàng hơn. Kết hợp cả phong cách lẫn tính thực tiễn, đây là món phụ kiện tuyệt đẹp mà cổ tay bạn đang còn thiếu', 5, 2),
(14, 'PRW-30AE-2', 2, 3, 10000000, 'sp10-1.webp', 'sp10-2.webp', 'sp10-3.webp', 'Mẫu đồng hồ số PRW-30 từ dòng PRO TREK climber line có thể thao tác trực quan. Một nút lớn trực tiếp cho phép đo hướng, áp suất khí quyển/cao độ và nhiệt độ bằng một lần nhấn phía bên phải của đồng hồ và kết quả đo được hiển thị bằng số. Gần mỗi nút có các biểu tượng cho biết hướng, độ cao và áp suất khí quyển để có thể nhận biết các chức năng ngay lập tức, cho phép đo trực quan và phân biệt những thông tin cần thiết ngay cả trong các tình huống thời tiết khắc nghiệt. Ngoài ra, khả năng hiển thị đã được cải thiện bằng màn hình tinh thể lỏng STN và phông chữ đậm. Ngoài các chức năng đo lường, đồng hồ được trang bị các chức năng hoạt động cơ bản như Tough Solar, chức năng thu sóng vô tuyến và khả năng chống nước ở độ sâu 10 bar, đây cũng là chiếc đồng hồ nhỏ và nhẹ cho phép chuyển động cổ tay không bị hạn chế. Ngoài ra, dây đeo Durasoft bền hơn cải thiện khả năng đeo của đồng hồ để có thể đeo trong thời gian dài khi leo núi và ở ngoài trời. Dây đeo carabiner khiến đồng hồ trở nên hữu ích trong các tình huống ngoài trời khác nhau.', 4, 2),
(15, 'GM-S110PG-1A', 2, 4, 2000000, 'sp11-1.webp\r\n', 'sp11-2.webp', 'sp11-3.webp', 'Mẫu đồng hồ G-SHOCK GM-110 kết hợp kim-số phủ kim loại vô cùng tiện dụng, nay sở hữu thiết kế mỏng và nhỏ gọn hơn. Mặt số có thiết kế đa dạng và chiều sâu ấn tượng được chế tạo bằng cách xếp lớp các bộ phận 3D với các chi tiết tinh xảo. Ngoài phong cách thiết kế kết hợp hoàn hảo giữa màn hình số và kim giờ, phút, mặt đồng hồ còn vô cùng dễ nhìn và dễ đọc. Các bộ phận mặt số màu kim loại tô điểm cho nắp đường gờ bằng thép không gỉ tạo nên diện mạo mang phong cách lôi cuốn và thanh lịch. Trong khi thiết kế dây phẳng tạo thêm điểm nhấn đặc trưng và làm tăng thêm độ mạnh mẽ.', 1, 2),
(16, 'EQB-2000DB-1A', 3, 30, 10000000, 'sp12-1.webp', 'sp12-2.webp', 'sp12-3.webp', 'Xin giới thiệu mẫu đồng hồ flagship EDIFICE SOSPENSIONE EQB-2000 sở hữu thiết kế đa năng, tinh tế với kiểu dáng thể thao đích thực. Đồng hồ EDIFICE Speed & Intelligence sở hữu công nghệ sáng tạo, hiệu suất cao với kết cấu vấu bốn tay lấy cảm hứng từ hệ thống giảm xóc dạng xương đòn kép bốn tay trên những chiếc xe đua công thức. Các thành phần mặt số chính đều sở hữu màu sắc giống với vô lăng xe đua giúp bạn nhận diện nhanh chóng. Kim giây màu đỏ cung cấp tầm nhìn vượt trội cho các đội đua, những người luôn phải nỗ lực từng giây. Dây đeo, đường gờ mạ ion và mặt kính saphia tạo nên chiếc đồng hồ chống xước gợi lên dáng vẻ của một chiếc xe đua. Bạn có thể nhanh chóng đồng bộ hóa với điện thoại thông minh của bạn qua Bluetooth®. Nhấn vào ứng dụng để truy cập các chức năng quan trọng dành cho các đội đua, bao gồm chức năng điều chỉnh giờ tự động chính xác đến từng giây, dễ dàng quản lý giờ thế giới và truyền dữ liệu đồng hồ bấm giờ đo được tối đa 200 vòng giây lên đến từng mili giây cho điện thoại thông minh của bạn. Chức năng Tough Solar có thể sạc đồng hồ bằng năng lượng mặt trời hoặc thậm chí từ đèn ánh sáng đèn huỳnh quang, cũng như lưu trữ đủ năng lượng trong 5 tháng ở mức sử dụng bình thường.', 3, 2),
(17, 'GM-S110LB-2A', 1, 3, 6000000, 'sp13-1.webp', 'sp13-2.webp', 'sp13-3.webp', 'Mẫu đồng hồ G-SHOCK GM-110 kết hợp kim-số phủ kim loại vô cùng tiện dụng, nay sở hữu thiết kế mỏng và nhỏ gọn hơn. Mặt số có thiết kế đa dạng và chiều sâu ấn tượng được chế tạo bằng cách xếp lớp các bộ phận 3D với các chi tiết tinh xảo. Ngoài phong cách thiết kế kết hợp hoàn hảo giữa màn hình số và kim giờ, phút, mặt đồng hồ còn vô cùng dễ nhìn và dễ đọc. Các bộ phận mặt số màu kim loại tô điểm cho nắp đường gờ bằng thép không gỉ tạo nên diện mạo mang phong cách lôi cuốn và thanh lịch. Trong khi thiết kế dây phẳng tạo thêm điểm nhấn đặc trưng và làm tăng thêm độ mạnh mẽ.', 1, 2),
(18, 'BGD-565USW-5', 2, 20, 3000000, 'sp14-1.webp', 'sp14-2.webp', 'sp14-3.webp', 'Tự thưởng cho mình mẫu đồng hồ BABY-G màu sô cô la lấy cảm hứng từ hương vị sô cô la bạn yêu thích. Mẫu đồng hồ màu nâu nhạt với mặt số in hình khối hoạ tiết thanh sô cô la, làm bạn liên tưởng ngay đến vị ngọt của sô cô la sữa. Mẫu đồng hồ không chỉ ngon mắt mà còn có tính thực tiễn cao với cấu trúc chống va đập và khả năng chống nước ở độ sâu 100 mét.', 2, 1),
(19, 'BA-110X-7A1', 1, 25, 25000000, 'sp15-1.webp', 'sp15-2.webp', 'sp15-3.webp', 'Hãy đeo lên tay chiếc đồng hồ bắt mắt với màu sắc tươi tắn, thanh lịch, lấy cảm hứng từ thiết kế G-SHOCK GA-110 nổi tiếng. Sự kết hợp tinh xảo giữa mặt số, vạch chỉ giờ và các bộ phận khác tạo nên hình ảnh thiết bị cơ khí với điểm nhấn sắc nét tràn đầy năng lượng. Mẫu đồng hồ BABY-G mang phong cách thời trang đường phố nổi trội và có nhiều chức năng. Trải nghiệm các chức năng tiện dụng, đáng tin cậy như đèn LED và đồng hồ bấm giờ, bên cạnh khả năng chống va đập và chống nước.', 2, 2),
(20, 'PRG-600YB-2', 1, 30, 10000000, 'sp16-1.webp', 'sp16-1.webp', 'sp16-1.webp', 'Từ dòng đồng hồ Cảm biến bộ ba PRO TREK PRG-600/650 cho phép bạn tiếp xúc với thế giới tự nhiên không ngừng biến đổi quanh mình, hãng đã cho ra mắt những mẫu này. Vỏ, dây đeo và các bộ phận chính khác có màu đen đồng nhất, trong khi những chi tiết còn lại có màu xanh hải quân. Về chức năng, mẫu này kết hợp Cảm biến bộ ba Phiên bản 3 để cho phép độ chính xác của phép đo cao hơn và khoảng thời gian đo ngắn hơn. Các tính năng khác bao gồm: thông báo khí áp cảnh báo người đeo khi khí áp đột ngột tăng hoặc giảm đáng kể, hai đèn LED chiếu sáng riêng cho mặt đồng hồ và màn hình LCD, v.v. Mẫu mới này bổ sung thêm hàng loạt cải tiến mới về thiết kế mà không ảnh hưởng đến bất kỳ chức năng nào của PRO TREK. Mẫu PRG-600YB nổi bật với gờ mạ ion và có dây đeo màu xanh hải quân. Mọi chi tiết của mẫu này đều được thiết kế và chế tạo để mang đến những chức năng và thiết kế phù hợp với hoạt động ngoài trời. • Tough Solar • Cảm biến bộ ba (phương vị, độ cao/áp suất khí quyển, nhiệt độ) • Đồ thị áp suất khí quyển • Cảnh báo áp suất khí quyển • Chịu nhiệt độ thấp (–10℃/14℉)', 4, 2),
(21, 'PRG-650Y-1', 1, 20, 3000000, 'sp17-1.webp', 'sp17-2.webp', 'sp17-3.webp', 'Giới thiệu mẫu mới được thiết kế dựa trên ý tưởng cuộc du ngoạn ban đêm cho dòng sản phẩm Cảm biến bộ ba Phiên bản 3 PRO TREK. Màu sắc và thiết kế của ba mẫu mới này được đặc biệt lựa chọn cho phù hợp với cảnh vật ngoài trời ban đêm. Mặt ngoài của dây đeo và mặt đồng hồ của cả ba mẫu này đều là màu đen. Thiết kế của ba mẫu này đều sành điệu và tinh tế, nhưng vẫn giữ được khả năng dễ đọc cần có trong các hoạt động vào ban đêm. Mẫu PRG-650Y/650 có dây đeo DURA-SOFT được làm từ chất liệu silicon giúp tăng độ bền. Mặt trong của dây đeo có khả năng phát quang nên có thể phát ra ánh sáng mờ trong các hoạt động vào ban đêm. Mẫu PRG-650Y/650YBE nổi bật với gờ mạ ion. Về chức năng, cả ba mẫu này đều được trang bị Đèn Neon để giúp bạn dễ xem thời gian và sử dụng các chế độ chức năng dù trời tối. ', 4, 2),
(22, 'ECB-10DC-3A', 1, 30, 10000000, 'sp18-1.webp', 'sp18-2.webp', 'sp18-3.webp', 'Chào mừng bạn đến với cuộc cách mạng của “Tốc độ & Trí tuệ” được gói gọn trong chiếc đồng hồ EDIFICE sở hữu công nghệ, thông số kỹ thuật cao, mang vẻ đẹp phá cách với hình bát giác phủ kim loại. Không chỉ có thiết kế đường gờ ấn tượng và nhiều màu bắt mắt để tạo cho bạn cảm giác mạnh mẽ và tự tin, những chiếc đồng hồ này còn kết nối với chức năng bấm giờ vô cùng chính xác. Nếu bạn ở gần điện thoại, hãy nhấn vào ứng dụng EDIFICE Connected qua Bluetooth® để thao tác dễ dàng với đồng hồ mà không cần nhấn nút, cũng như hiển thị giờ chính xác. Tính năng hẹn giờ theo lịch được phát triển nhằm đáp ứng nhu cầu của các đội đua Công thức 1 vì nó cho phép bạn lên lịch các sự kiện một cách thuận tiện qua điện thoại thông minh và nhận thông báo về thời gian bắt đầu và kết thúc. Đồng hồ trang bị đèn LED phát sáng mỗi khi bạn nghiêng cổ tay.', 3, 2),
(23, 'EFV-620D-2AV', 3, 4, 10000000, 'sp19-1.webp', 'sp19-2.webp', 'sp19-3.webp', '“Chơi lớn” với dòng đồng hồ ghi thời gian EDIFICE cổ điển, kết hợp táo bạo giữa các chi tiết tinh xảo và thiết kế ngoại cỡ. Lấy cảm hứng từ bộ môn đua xe thể thao, những chiếc đồng hồ này có sự kết hợp màu sắc sống động và mặt số lồng nổi bật, tạo nên phong cách toát lên vẻ đẹp của tốc độ và trí tuệ.', 3, 2),
(24, 'SHE-4548D-2A', 3, 4, 3000000, 'sp20-1.webp', 'sp20-2.webp', 'sp20-3.webp', 'Đắm mình trong vẻ đẹp lấp lánh của bầu trời, với mặt số được chia độ lấp lánh mang nhiều màu sắc khác nhau theo thời gian. Chiếc đồng hồ lộng lẫy được nghiên cứu về độ thanh lịch và bóng bẩy với mặt số gợi lên màu sắc bầu trời đêm của Dải Ngân Hà, được đặt trên gờ và dây đeo màu bạc. Viên pha lê nằm ở vị trí 7 giờ làm tôn lên độ lấp lánh và tinh tế đặc trưng. Chiếc đồng hồ cỡ trung mang đến vẻ sáng bóng chất lượng cao cho cổ tay của bạn với vỏ thép không gỉ tráng gương 32 mm, kết hợp với kiểu dáng mỏng chỉ 7,3 mm giúp bạn đeo thoải mái và tiện lợi. Mặt kính saphia chống xước giúp bạn dễ đọc. Khả năng chống nước tối đa ở độ sâu 50 mét giúp bạn không phải lo lắng khi rửa hoặc tiếp xúc với nước.', 5, 2),
(30, 'SHE-4550D-2A', 3, 3, 10000000, 'sp21-1.webp', 'sp21-2.webp', 'sp21-3.webp', 'Đắm chìm trong vẻ đẹp của những làn sóng lấp lánh vỗ về. Mặt số là những làn sóng long lanh vô tận và những màu sắc bãi biển rực rỡ, sử dụng kỹ thuật loang màu và dập nổi cho thiết kế mang chiều sâu độc đáo. Dải màu loang tuyệt đẹp tái hiện cảnh bãi biển về chiều, với bề mặt hoàn thiện lấp lánh như những con sóng mãi mãi vỗ bờ. Viên pha lê ở vị trí 7 giờ tạo thêm điểm nhấn ấn tượng. Vỏ bằng thép không gỉ được tráng gương để có diện mạo tinh xảo. Được trang bị mặt kính saphia chống xước và khả năng chống nước ở độ sâu lên đến 50 mét, chiếc đồng hồ tuyệt đẹp mà vẫn đầy đủ chức năng này giúp bạn nhẹ bớt gánh lo.', 5, 2),
(31, 'BGA-280PM-7A', 1, 4, 3000000, 'sp22-1.webp', 'sp22-2.webp', 'sp22-3.webp', 'Đồng hồ BABY-G pastel nhiều màu kết hợp kim loại vừa dễ thương vừa đơn giản, phù hợp với nhịp sống năng động của bạn. Mẫu đồng hồ với các dải và khối màu tông pastel mang phong cách pop nữ tính, kết hợp với những sắc màu dịu nhẹ tạo nên phong cách thiết kế đẹp mắt. Kim đồng hồ, vạch chỉ giờ và các thành phần mặt số khác đều được phủ lớp kim loại sáng bóng, tinh tế, kết hợp với vỏ và dây đeo mờ tạo nên phong cách độc đáo. Chiếc đồng hồ này không chỉ đẹp mắt mà còn cung cấp nhiều chức năng hữu ích hàng ngày như cấu trúc chống va đập và khả năng chống nước ở độ sâu lên đến 100 mét. Thể hiện phong cách huyền bí cùng sự tương phản ấn tượng bên trong mẫu đồng hồ kim loại mạnh mẽ với màu pastel dịu nhẹ.', 2, 1),
(32, 'BGD-565KRS-7', 1, 25, 2500000, 'sp23-1.webp', 'sp23-2.webp', 'sp23-3.webp', 'Xin giới thiệu mẫu hợp tác giữa BABY-G, dòng đồng hồ phổ thông cho những cô gái năng động, và KIRSH®, thương hiệu thời trang Hàn Quốc nổi tiếng với logo hình hai trái anh đào. Mẫu cơ sở là chính là chiếc BABY-G BGD-565 đã trở thành biểu tượng. Thiết kế lấy cảm hứng từ bề mặt màu trắng matte trong mờ của đồ chơi và phụ kiện phổ biến những năm 90, đối chọi với biểu tượng trái anh đào của KIRSH, biểu tượng chữ G của BABY-G, và logo đặc trưng của KIRSH trên dây đeo. Biểu tượng trái anh đào của KIRSH cũng có trên mặt đồng hồ, và hình ảnh trái anh đào xuất hiện trên màn hình bất cứ khi nào bật đèn. Biểu tượng này còn được khắc trên nắp sau của đồng hồ. Đồng hồ có cả dây đeo thay thế bằng nhựa resin màu xám matte trong mờ, để bạn có thể thay đổi theo tâm trạng hay phong cách thời trang. Dây đeo dạng gạt nút giúp bạn dễ dàng tháo lắp, chỉ cần gạt nút là xong. Bao bì của đồng hồ được thiết kế để làm nổi bật tình thần của mẫu hợp tác đặc biệt. Mẫu đồng hồ hợp tác mới này là một sản phẩm sáng tạo đỉnh cao kết hợp phong cách thời trang đường phố cùng thiết kế thể thao. KIRSH® Thành lập năm 2008, KIRSH® là một thương hiệu thời trang đường phố và mỹ phẩm của Hàn Quốc. Hãng nổi tiếng với dòng Big Cherry Sweatshirt, mang hoạ tiết trái anh đào lớn.', 2, 1),
(33, 'ECB-S100HG-1A', 1, 44, 4000000, 'sp24-1.webp', 'sp24-2.webp', 'sp24-3.webp', 'Đưa bạn vào giấc mơ của những tay đam mê xe thể thao với chiếc đồng hồ thể thao sở hữu những chi tiết ô tô rõ nét làm tôn lên vẻ đẹp của nhiệt huyết cháy bỏng. Từ vàng sang đỏ đến xanh lam, sự chuyển màu tuyệt đẹp của ống đuôi bằng titan khi nóng lên là một trong những điểm nổi bật của chiếc đồng hồ này, từ mặt số có khung hình chữ X và viền mặt kính saphia đến mặt số lồng nhỏ và kim đồng hồ. Mặt số dạng lưới gợi lên hình ảnh tấm lưới phía trước xe thể thao. Đồng bộ với điện thoại thông minh của bạn qua Bluetooth® để thao tác dễ dàng với đồng hồ và hiển thị giờ hiện hành chính xác ở bất cứ đâu bạn đến. Chỉ cần chạm vào ứng dụng để quản lý màn hình hiển thị giờ thế giới của hai thành phố khác nhau. Nhấn một nút trên đồng hồ để ghi lại ngày, giờ và vị trí hiện tại trên bản đồ trong ứng dụng chuyên dụng.', 3, 2),
(34, 'PRG-270-1A', 2, 23, 2300000, 'sp25-1.webp', 'sp25-2.webp', 'sp25-3.webp', 'Mẫu đồng hồ thuộc dòng \"PRO TREK\" được trang bị \"Bộ ba cảm biến phiên bản 3.\" Khoảng thời gian đo độ cao là 1 giây (chỉ trong 3 phút đầu tiên), đơn vị đo là 1 m và thời gian đo hướng liên tục là 60 giây nhờ cảm biến tiết kiệm điện. Việc kết hợp các chức năng đo lường này với các chức năng hiệu suất cơ bản như Tough Solar và khả năng chống nước 10 ATM, tạo ra thiết kế có khả năng sử dụng trong các tình huống khắc nghiệt ngoài trời khi hoàn cảnh thay đổi theo từng phút. Mẫu đồng hồ này cũng được trang bị các nút lớn trực tiếp cho phép đo chức năng thông qua một lần nhấn ngay cả khi đeo găng tay để nâng cao tính khả dụng. Đồng hồ này được trang bị thêm chức năng cảnh báo thông tin xu hướng áp suất khí quyển phát âm thanh báo động khi có thay đổi đáng chú ý về áp suất khí quyển dựa trên phân tích xu hướng áp suất khí quyển trong quá khứ. Chức năng này giúp nhanh chóng nắm bắt những thay đổi của áp suất khí quyển mà khó có thể nhận thấy.', 4, 2);

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
-- Indexes for table `tbl_chi_tiet_hoa_don`
--
ALTER TABLE `tbl_chi_tiet_hoa_don`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_hoa_don`
--
ALTER TABLE `tbl_hoa_don`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sp_theo_gt`
--
ALTER TABLE `sp_theo_gt`
  MODIFY `ma_sp_theo_gt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_binh_luan`
--
ALTER TABLE `tbl_binh_luan`
  MODIFY `id_binh_luan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_chi_tiet_hoa_don`
--
ALTER TABLE `tbl_chi_tiet_hoa_don`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_hoa_don`
--
ALTER TABLE `tbl_hoa_don`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_loai_san_pham`
--
ALTER TABLE `tbl_loai_san_pham`
  MODIFY `maloaisanpham` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_nguoi_dung`
--
ALTER TABLE `tbl_nguoi_dung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_nha_cung_cap`
--
ALTER TABLE `tbl_nha_cung_cap`
  MODIFY `manhacungcap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_san_pham`
--
ALTER TABLE `tbl_san_pham`
  MODIFY `masanpham` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

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
