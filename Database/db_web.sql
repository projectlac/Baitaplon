-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 19, 2018 lúc 12:28 PM
-- Phiên bản máy phục vụ: 10.1.36-MariaDB
-- Phiên bản PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `createdate` datetime NOT NULL,
  `is_block` tinyint(4) NOT NULL DEFAULT '0',
  `permision` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email`, `fullname`, `createdate`, `is_block`, `permision`) VALUES
(6, 'admin', '123456', 'dft1711198@gmail.com', 'Đặng Văn Tuyến', '2018-11-11 00:00:00', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cmt`
--

CREATE TABLE `cmt` (
  `cmt_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cmt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` datetime NOT NULL,
  `check1` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cmt`
--

INSERT INTO `cmt` (`cmt_id`, `name`, `cmt`, `time`, `check1`, `news_id`) VALUES
(3, 'Tuyến', 'Chồng của Tưu kìa', '2018-12-16 09:03:54', 'N', 3),
(4, 'Vô Hạn', 'Tuyến Hế Lô', '2018-12-16 11:03:17', 'N', 3),
(5, 'Vo', 'A~', '2018-12-16 11:09:46', 'N', 3),
(6, 'Tuyến', 'Đao xẹc cỳ', '2018-12-16 11:10:51', 'N', 7),
(7, 'a', 'a', '2018-12-16 11:28:13', 'N', 3),
(8, 'a', 'a', '2018-12-16 11:28:25', 'N', 3),
(9, 'CCa', 'Cẩu', '2018-12-16 19:19:57', 'N', 6),
(10, 'Tửu', 'Tưyr', '2018-12-16 19:20:19', 'N', 4),
(11, 'A', 'A', '2018-12-16 19:20:26', 'N', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `title_website` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description_website` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `keywords_website` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `google_map` mediumtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `logo` varchar(100) NOT NULL,
  `favicon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `google_users`
--

CREATE TABLE `google_users` (
  `google_id` decimal(21,0) NOT NULL,
  `google_name` varchar(60) NOT NULL,
  `google_email` varchar(60) NOT NULL,
  `google_link` varchar(60) NOT NULL,
  `google_picture_link` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `khach_hang` (
  `ma_khach_hang` int(11) NOT NULL,
  `ten_khach_hang` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phai` tinyint(1) NOT NULL DEFAULT '0',
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dien_thoai` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `matKhau` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` int(10) NOT NULL,
  `title` varchar(500) DEFAULT NULL,
  `content` text,
  `user_id` int(11) DEFAULT NULL,
  `is_public` tinyint(4) DEFAULT '0',
  `createdate` datetime DEFAULT NULL,
  `updatedate` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `user_id`, `is_public`, `createdate`, `updatedate`) VALUES
(3, 'Onmyoji là gì', '123456', 6, 1, '2018-11-30 09:04:45', '2018-11-30 09:04:45'),
(4, 'AVC', 'ASdsdflsjlkfj', 0, 1, '2018-12-06 10:13:44', '2018-12-06 10:13:44'),
(18, 'aa', 'ad', 0, 0, '2018-12-13 11:13:39', '2018-12-13 11:13:39'),
(6, 'Giàng A Tôngs', '123 Xòe tay ra', 0, 1, '2018-12-07 07:20:11', '2018-12-07 07:20:11'),
(7, 'Tỳ', 'Tỳ mạnh vcl', 0, 1, '2018-12-12 14:35:27', '2018-12-12 14:35:27'),
(8, 'Tửu', 'Tửu mạnh vcl', 0, 1, '2018-12-12 14:37:39', '2018-12-12 14:37:39'),
(9, 'Cẩu ', 'Cẩu mạnh vcl', 0, 1, '2018-12-12 14:41:42', '2018-12-12 14:41:42'),
(10, 'Đao', 'Đao manh vcl', 0, 1, '2018-12-12 14:45:08', '2018-12-12 14:45:08'),
(11, 'test', 'test', 0, 1, '2018-12-12 14:46:05', '2018-12-12 14:46:05'),
(12, 'Test', 'trs', 0, 1, '2018-12-12 14:48:03', '2018-12-12 14:48:03'),
(13, 'Onmyoji là gì', 'a', 0, 1, '2018-12-12 14:50:18', '2018-12-12 14:50:18'),
(14, 'Onmyoji là gì', 'd', 0, 1, '2018-12-12 14:51:19', '2018-12-12 14:51:19'),
(17, 'bai viet', 'aa', 0, 1, '2018-12-13 11:13:18', '2018-12-13 11:13:18'),
(20, 'Giàng A Tôngs', 'AAAAAAAAAAAAAAAAAAAAAA', 0, 1, '2018-12-14 08:00:24', '2018-12-14 08:00:24'),
(21, 'Giàng A Tôngs', 'w', 0, 0, '2018-12-14 08:01:00', '2018-12-14 08:01:00'),
(22, 'Giàng A Tôngs', 'Một Cộng Một Bằng Hola hola\r\n', 0, 1, '2018-12-14 09:06:53', '2018-12-14 09:06:53'),
(23, 'Thố Ngông Cuồng', 'Siêu Thố Ngông Cuồng', 0, 1, '2018-12-14 09:07:54', '2018-12-14 09:07:54');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thucthan`
--

CREATE TABLE `thucthan` (
  `id` int(10) NOT NULL,
  `name` varchar(500) DEFAULT NULL,
  `truyenthuyet` text,
  `noitai` text,
  `skill1` text,
  `skill2` text,
  `skill3` text,
  `skiil4` text,
  `skill1_name` text,
  `skill2_name` text,
  `skill3_name` text,
  `skill4_name` text,
  `noitai_name` text,
  `anh` text,
  `anhp` text,
  `anh1` text,
  `anh2` text,
  `anh3` text,
  `anh4` text,
  `anhc` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `thucthan`
--

INSERT INTO `thucthan` (`id`, `name`, `truyenthuyet`, `noitai`, `skill1`, `skill2`, `skill3`, `skiil4`, `skill1_name`, `skill2_name`, `skill3_name`, `skill4_name`, `noitai_name`, `anh`, `anhp`, `anh1`, `anh2`, `anh3`, `anh4`, `anhc`) VALUES
(3, 'Tỳ Mộc Đồng Tử', 'Tửu thôn đồng tử một vị tướng đấu sĩ mang phẩm chất SSR thương xuyên xuất hiện trong game với vai trò đấu sĩ dạng cấu rỉa/ áp chế', '3% máu cộng thêm chuyển thành giáp.', 'Kẻ địch đứng gần Ibaraki sẽ bị đàn áp, Giảm 10% tốc độ tấn công', 'Khi sử dụng kỹ năng Ibaraki Doji tiến vào trạng thái truy đuổi tăng 30% tốc độ di chuyển. Đòn đánh thường tiếp theo gây 25(+70%AD) sát thương vật lý đồng thời hất tung mục tiêu.', 'Ibaraki Doji tạo một vùng hỗn độn xung quanh bản thân. Gây 20(+13% AD) sát thương vật lý lên kẻ địch gần đó mỗi 0.5s duy trì 5s. 10% sát thương sẽ chuyển thành máu cho anh ta, tối đa 80 mỗi lần', 'Ibaraki Doji triệu hồi từ địa ngục một cách tay quỷ bóp nát Thức Thần địch. Gây 280(+30% máu đã mất ) sát thương phép đồng thời bất động mục tiêu trong 1s. Nếu mục tiêu tử vong, sẽ tạo một vùng sát thương gây Gây 280 (+30% máu đã mất) sát thương phép cho tất cả kẻ địch trong phạm vi.', 'La Sinh Môn', 'Quỷ Diễm', 'Lục Đạo Quỷ Địa', 'Địa Nhục Chi Thủ', 'Quỷ Uy', '3.jpg', 'noitai1.png ', 'skill11.png', 'skill21.png', 'skill31.png', 'skill41.png', 'img1.jpg'),
(4, 'Tửu Thôn Đồng Tử', 'Tửu thôn đồng tử một vị tướng đấu sĩ mang phẩm chất SSR thương xuyên xuất hiện trong game với vai trò đấu sĩ dạng cấu rỉa/ áp chế', 'Shuten Doji có cơ hội nhận được một điểm điên cuồng khi tấn công hoặc bị tấn công. Nhận được 1 điểm khi sử dụng kỹ năng lên thức thần địch. Khi đủ 4 điểm điên cuồng anh ta rơi vào trạng thái cuồng nộ. Kỹ năng Cuồng Khiếu và Quỷ Quyền nhận thêm hiệu ứng.', '\r\nHồi lại 25(+40%AD) HP cho Shuten Doji. Đồng thời cường hóa 2 đòn\r\nđánh thường tiếp theo gây thêm 15(+30%AD) sát thương vật lý và tăng\r\nphạm vi lên 50.\r\nTrong trạng thái cuồng nộ, hồi 50(+70% AD) HP và cường hóa 3 đòn\r\nđánh thường tiếp theo gây thêm 30(+40AD) sát thương vật lý đồng thời\r\nlàm giảm 30% tốc độ di chuyển.', '\r\nShuten Doji đấm một đấm về phía trước, gây thêm 15 (+130% AD)\r\nsát thương vật lý.\r\nTrong trạng thái Cuồng Nộ, Quỷ Quyền sẽ ném ra sau một khoảng thời\r\ngian ngắn, gây 25(+200AD) sát thương vật lý đồng thời tăng xuyên giáp\r\ntrong 4s.', '\r\nShuten Doji lùi lại và hút về phía trước, gây 75(+60%AD) sát thương vật\r\nlý đồng thời hất tung mục tiêu trong phạm vi.', '\r\nShuten Doji vào trạng thái Quỷ Vương, tăng giới hạn máu lên 375. Triệu\r\nhồi Quỷ Hồ Lô hỗ trợ tấn công, mỗi đòn đánh của Quỷ Hồ Lô gây\r\n80(+10% AD) sát thương phép.\r\nHiệu ứng tồn tại 12s, mỗi điểm cuồng khí tăng duy trì 2s.', 'Cuồng Khiếu', 'Quỷ Quyền', 'Hung Hăng', 'Quỷ Vương Giáng Lâm', 'Cuồng Khí', '4.jpg', 'noitai.png', 'skill1.png', 'skill2.png', 'skill3.png', 'skill4.png', 'img.jpg'),
(6, 'Đại Thiên Cẩu', 'Đại Thiên Cẩu, chắc chắn rồi đây là thức thần được nhiều bạn lựa chọn nhất khi nhận quà miễn phí 7 ngày đăng nhập. Đầu game Ootengu có vẻ thua thiệt hơn các vị tướng phép khác vị lượng sát thương và khống chế đơn mục tiêu khiến anh khó tránh khỏi những pha rượt đuổi khi đảo đường. Nhưng khi Late game hoặc combat tổng Đại thiên cẩu luôn cho đồng đội thấy được sức mạnh của vị thức thần mang trong mình sức mạnh bão tố.', '\r\nMỗi lần Ootengu sử dụng kỹ năng lên mục tiêu là thức thần, 1 sợi lông sẽ gắn lên người mục tiêu. Mỗi sợi lông sẽ gây thêm 5% sát thương phép của anh ta lên mục tiêu duy trì 8s. Khi đủ 3 sợi lông mục tiêu sẽ chịu 22(+15*Level) (+30%Ap) sát thương phép và bị làm chậm. Đồng thời giảm 20% kháng phép của mục tiêu.', 'Nội tại: tăng vĩnh viễn 12 Ap cho Ootengu.Nếu bản thân không bị tấn công trong 24 giây sẽ tạo cho Ootengu một lớp khiên xóa bỏ một kỹ năng tiếp theo lên anh ta. Đồng thời tăng 20% tốc độ di chuyển khi khiên vỡ.', ' Ootengu bắn một làn thi vũ về phía trước gây 120(+55% AP) sát thương phép lên mục tiêu trúng phải. Nếu mục tiêu là Thức Thần phe địch thi vũ sẽ tạo một vòng tròn dưới chân địch, sau một thời gian ngắn vòng tròn phát nổ gây thêm một lần 40(+15% Ap) sát thương phép trong phạm vi.', '\r\nOotengu thổi một ngọn lốc nhỏ về phía mục tiêu, gây 60(+40% AP)sát thương phép đồng thời hất tung mục tiêu và kẻ địch lân cận lên không trung trong 0.5s.', '\r\nOotengu tạo ra một cơn lốc gây 90(+35% AP) sát thương phép liên tục mỗi 0.5s lên một vùng chỉ định trong 3s. đồng thời làm chậm tất cả mục tiêu trúng phải. Cơn bão sẽ dẫn mở rộng và di chuyển về phía trước', 'Vô Giải Chi Vực', 'Thi Vũ', 'Tật phong chú', 'Bạo phong vũ', 'Đạo Thiên cẩu', '6.jpg', 'noitai2.png', 'skill12.png', 'skill22.png', 'skill32.png', 'skill42.png', 'img2.jpg'),
(7, 'Yêu Đao Cơ', 'Yêu Đao Cơ là đấu sĩ đường trên cũng như là một vị tướng đi rừng vô cùng mạnh mẽ.', 'Nội tại: khi Yêu Đao Cơ gây sát thương có 20% cơ hội gây thêm 40% sát thương vật lý lên mục tiêu. Nếu Yêu Đao Cơ tấn công liên tục cùng một thức thần 3 lần trong 4s sẽ tăng 15% tốc độ chạy và 50% miễn làm chậm trong 3s.', 'Yêu Đao Cơ tiến vào trạng thái Tàn Tâm, trong 0,8s trở nên bất khả chiến bại, nếu Yêu Đao Cơ đỡ được một kỹ năng khống chế sẽ phản đòn gây 120(+100% AP) sát thương phép đồng thời làm choáng mục tiêu. Nội tại:Yêu Đao Cơ hồi lại 30(+40% AD) HP sau 2 đòn đánh.', ' Yêu Đao Cơ lập tức tăng 20% tốc độ đánh trong 5s sau khi sử dụng. 3 đòn đánh tiếp theo chỉ gây ra 60% sát thương đòn đánh thường. Nhưng mỗi lần gây thêm 10(+10% AD) sát thương vật lý. Đòn đánh đầu tiên gây ra 10% làm chậm trong 1s. Nội tại: tăng vĩnh viễn 10 AD cho Yêu Đao Cơ.', ' Yêu Đao Cơ lướt về phía trước gây 90 (+80%AD) sát thương vật lý. Nếu kỹ năng tiêu diệt mục tiêu sẽ hồi lại ngay lập tức đồng thời hồi lại 35 MP.', 'Yêu Đao Cơ tấn công vào mục tiêu chỉ định, chém liên tục nhiều lần lên mục tiêu và thức thần xung quanh mỗi lần gây 140(+ 80% AD) sát thương vật lý. Tối đa 6 lần tấn công, đòn tấn công lên cùng 1 mục tiêu chỉ gây 40% sát thương.', 'Tàn Tâm', 'Phệ Ma', 'Đao Tập', 'Họa Đao', 'Chiến Ý', '7.jpg', 'noitai3.png', 'skill13.png', 'skill23.png', 'skill33.png', 'skill43.png', 'img3.jpg'),
(19, 'Hoang', 'Hoang một vị pháp sư toàn diện về mọi mặt có khả năng cơ động lẫn khống chế bên cạnh đó lượng sát thương của anh ta cực \"dầy\" khi tham gia combat.', 'Mỗi kỹ năng của Susabi trúng thức thần địch sẽ tích lũy 1 viên\r\nthiên thể năng lượng khi đủ 5 viên thiên thể sẽ tạo cho anh ta một\r\nlớp khiên kéo dài 3s. Nếu không có viên thiên thể mới nào trong\r\nvòng 15s, những viên cũ sẽ tự động tiêu tan.', 'Susabi triệu hồi 3 viên tinh thể tấn công liên tiếp lên phạm vi\r\nchỉ định, mỗi viên gây  45(+30% AP) sát thương phép lên kẻ địch\r\ntrúng chiêu. Mỗi tinh thể trúng mục tiêu sẽ mang lại cho anh ta 1\r\ntinh thể.', 'Susabi ném ra một chuỗi thiên thể về phía trước gây 75 (+40% AP)\r\nsát thương phép thuật đồng thời làm choáng 1,5s lên kẻ địch đầu\r\ntiên trúng phải và mang lại cho anh ta 1 viên thiên thể. ', 'Susabi lướt về phía chỉ định, triệu hồi 2 tinh thể tấn công kẻ địch\r\ngần đó. Mỗi tinh thể gây 45 (+30%AP) sát thương phép và để lại\r\ncho anh ta 1 thiên thể.', 'Susabi tạo một thể ước với thần thánh, triệu hồi một cơn mưa thiên\r\nthể liên tục rơi xuống kẻ địch trong phạm vi ảnh hưởng. Mỗi viên gây\r\n90(+25%Ap) sát thương phép, và mỗi kẻ địch chỉ nhận tối đa (3 + số\r\nthiên thể hiện tại) lần sát thương.\r\n\r\nNếu thiên phạt được triệu hồi với 5 thiên thể trong người những\r\nngôi sao sẽ tăng gấp đôi tốc độ rơi đồng thời giảm 30% tốc độ\r\ndi chuyển của kẻ địch trúng phải.', 'Viên tinh Quang', 'Tinh Nguyệt Tỏa Liên', 'Đẩu Chuyển Tinh Di', 'Tinh Nguyệt Thiên Phạt', 'Tinh nguyệt', '283skin1.jpg', 'tinh-nguyet.png', 'vien-tinh-quang.png', 'tinh-nguyet-toa-lien.png', 'dau-chuyen-tinh-di.png', 'tinh-nguyet-thien-phat.png', 'Onmyoji-Arena-Susabi-Overview.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trangchu`
--

CREATE TABLE `trangchu` (
  `id` int(10) NOT NULL,
  `tieude` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mota` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noidung` text COLLATE utf8mb4_unicode_ci,
  `img` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `trangchu`
--

INSERT INTO `trangchu` (`id`, `tieude`, `mota`, `noidung`, `img`) VALUES
(1, 'Tướng mới xuất hiện', 'Theo như NESTEAT thì hôm này Tuyết đồng từ sẽ có mặt tại Heian', 'HAHAHAHA', '6.jpg'),
(2, 'Onmyoji Arena - MOBA mới của NetEase đã cập bến ĐN', 'Sau những thành công nhất định mà Âm Dương Sư mang lại, NetEase Games đã quyết định tạo ra thêm cho ', 'Onmyoji Arena, tựa game MOBA dựa trên \"vũ trụ\" Onmyoji cuối cùng cũng chính thức ra mắt trên cả 2 nền tảng iOS và Android. Trò chơi của NetEase Games đã ra mắt tại Trung Quốc vào tháng 1 và cuối cùng mới tới Nhật Bản và ở thời điểm hiện tại là Đông Nam Á.', 'xa.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `createdate` datetime NOT NULL,
  `is_block` tinyint(4) NOT NULL DEFAULT '0',
  `permision` tinyint(4) NOT NULL DEFAULT '1',
  `salt` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `fullname`, `createdate`, `is_block`, `permision`, `salt`) VALUES
(6, 'admin', '123456', 'dft1711198@gmail.com', 'Đặng Văn Tuyến', '2018-11-30 08:56:14', 0, 2, NULL),
(7, 'Thangml', '123456', '132165asd@gmail.com', 'Tạ Quang Thắng', '2018-11-30 09:19:21', 0, 1, NULL),
(10, 'atnguyen30198', 'anhtu123', 'atnguyen30198@gmail.com', 'Nguyễn Anh Tú', '2018-12-06 09:42:53', 0, 1, NULL),
(11, 'test', '$2y$12$prefix5c146bc761e781.ugWLPFTre9vaNsEoSIo3pm', '123456asd@gmail.com', '123465asd', '2018-12-15 09:49:43', 0, 1, 'Array'),
(12, 'test2', '$2y$12$prefix5c146db7784877.u2FLNLzFRjsbq/QoYdZKCh', 'aaa@gmail.com', '123465asd', '2018-12-15 09:57:59', 0, 1, 'Array'),
(13, 'test3', '$2y$12$prefix5c146df74e58d5.uX0rIPq8WA5GXhk0z71T7C', 'asdadasas@gmail.com', '123456asd', '2018-12-15 09:59:03', 0, 1, 'Array'),
(14, 't4', '$2y$12$prefix5c14722be778d9.upHj6Oveo9qjVBLdGZVoxK', '123sss@gmail.cpm', 'asdadasd s', '2018-12-15 10:17:00', 0, 1, 'prefix5c14722be778d9.97294880'),
(15, 'test4', '$2y$12$prefix5c1476c1c579e8.u/PqQE0EnACABeK2xDMV7O', 'aa@gmail.con', 'a', '2018-12-15 10:36:34', 0, 1, 'prefix5c1476c1c579e8.30690821'),
(16, 'test5', '$2y$12$slluuSbm1jgPNNu70I22P.a1N4Pd2LzFs/lH1KoR2AD', '12d@gmail.com', '123456asd', '2018-12-15 10:42:59', 0, 1, NULL),
(17, 'test6', '$2y$12$heXQIXkgiHX9OTA43FuurOYiRrazVDMNRM5DfEuDep1', '1a@gmail.com', 'a', '2018-12-15 10:49:46', 0, 1, NULL),
(18, 'Thangml1', '$2y$10$Pig5.78xU6lMFhe54VzUjuGrOkvLdRq02GoPo0puosJ', 'aa1a@gmail.com', 'Thangml', '2018-12-15 10:51:55', 0, 1, NULL),
(19, 'Thangml2', '$2y$10$I9LuD5s7c.pnymyUua2LlOYPiHaHTy.8uSyqWSlZ1is', '123456a2sd@gmail.com', '12', '2018-12-15 10:55:49', 0, 1, NULL),
(24, 'test7', '123456', 'dft17111998@gmail.com', 'Đặng Thị Thú', '2018-12-15 18:25:35', 0, 1, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users1`
--

CREATE TABLE `users1` (
  `id` int(11) NOT NULL,
  `nickname` varchar(32) NOT NULL,
  `email` varchar(264) NOT NULL,
  `verified` int(11) NOT NULL COMMENT '0=no, 1=yes',
  `verification_code` varchar(264) NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vukhi`
--

CREATE TABLE `vukhi` (
  `w_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mota` text NOT NULL,
  `loai` varchar(10) NOT NULL,
  `gia` varchar(10) DEFAULT NULL,
  `name_noitai1` text,
  `noitai1` text,
  `name_noitai2` text,
  `noitai2` text,
  `image` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `vukhi`
--

INSERT INTO `vukhi` (`w_id`, `name`, `mota`, `loai`, `gia`, `name_noitai1`, `noitai1`, `name_noitai2`, `noitai2`, `image`) VALUES
(6, 'Âm dương chuyển luân', '+35 sát thương vật lý\r\n+800 máu\r\n+100% hồi HP', 'C', '2000g', 'Băm nhỏ', 'Sau mỗi 2 giây đòn tấn công cận chiến sẽ gây thêm sát thương (25% máu tối đa) lên các mục tiêu trúng phải. Sát thương lên quái là 300%', '', '', '6.png'),
(7, 'Kinh Mạn Đà Là', '+150 Phép, +100% Hồi Mp, +20% Giảm thời gian hồi chiêu', 'P', '1900G', 'Nội tại', 'Hồi phục 25% MP tiêu hao sau khi sử dụng chiêu thức', 'Nội tại', ' Hồi phục 20% MP tiêu hao sau khi hạ gục hoặc hội trợ tiêu diện thức thần địch', '7.png'),
(8, 'Đàn Tam Thập Lục', '+110 Phép, 80 Giáp, +100% Hồi Mp', 'D', '1950G', 'Kích Hoạt', 'Bất tử 2.5 (90s CD)', '', '', '8.png'),
(11, 'Ưng cung', '+45% tốc độ tấn công\r\n+25% chí mạng', 'C', '1750g', 'Đôi chân', '+7% tốc độ di chuyển', 'Nổi gió', 'đòn tấn công tầm xa sẽ nâng lên thành 3 mục tiêu cùng lúc, sát thương sẽ giảm 15% trên mỗi mục tiêu cộng thêm.', 'minh-cung.png');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Chỉ mục cho bảng `cmt`
--
ALTER TABLE `cmt`
  ADD PRIMARY KEY (`cmt_id`);

--
-- Chỉ mục cho bảng `google_users`
--
ALTER TABLE `google_users`
  ADD PRIMARY KEY (`google_id`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thucthan`
--
ALTER TABLE `thucthan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `trangchu`
--
ALTER TABLE `trangchu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Chỉ mục cho bảng `users1`
--
ALTER TABLE `users1`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `vukhi`
--
ALTER TABLE `vukhi`
  ADD PRIMARY KEY (`w_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `cmt`
--
ALTER TABLE `cmt`
  MODIFY `cmt_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `thucthan`
--
ALTER TABLE `thucthan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `trangchu`
--
ALTER TABLE `trangchu`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `users1`
--
ALTER TABLE `users1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `vukhi`
--
ALTER TABLE `vukhi`
  MODIFY `w_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
