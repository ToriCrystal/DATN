-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 20, 2023 at 03:12 PM
-- Server version: 10.3.39-MariaDB-cll-lve
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baoptqsi_cff`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'https://cdn.landesa.org/wp-content/uploads/default-user-image.png',
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `image`, `email`, `password`, `created_at`, `updated_at`, `status`) VALUES
(1, 'admin', 'https://cdn.landesa.org/wp-content/uploads/default-user-image.png', 'admin@gmail.com', '$2y$10$oOMYlJQikQXXziVxmB..c.4mIyzNtAdEWDV7IAFIScb3TzCZ2/V9q', '2023-12-15 15:21:44', '2023-12-15 15:21:44', 1),
(2, 'Quang Sang', 'https://cdn.landesa.org/wp-content/uploads/default-user-image.png', 'quang.sang1530@gmail.com', '$2y$10$LXzxTSPAMxmqQcs6a2Y4GeLB/35qdrk2L4RwEvI3u7Tz7MfbJOdx.', '2023-12-15 15:21:44', '2023-12-15 15:21:44', 1),
(3, 'admin', 'https://cdn.landesa.org/wp-content/uploads/default-user-image.png', 'admin@gmail.com', '$2y$10$oOMYlJQikQXXziVxmB..c.4mIyzNtAdEWDV7IAFIScb3TzCZ2/V9q', '2023-12-15 15:21:47', '2023-12-15 15:21:47', 1),
(4, 'Quang Sang', 'https://cdn.landesa.org/wp-content/uploads/default-user-image.png', 'quang.sang1530@gmail.com', '$2y$10$LXzxTSPAMxmqQcs6a2Y4GeLB/35qdrk2L4RwEvI3u7Tz7MfbJOdx.', '2023-12-15 15:21:47', '2023-12-15 15:21:47', 1);

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `author_name` varchar(255) NOT NULL,
  `author_img` varchar(255) NOT NULL,
  `author_debutDate` date NOT NULL,
  `author_description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `author_img_cloudinary` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`id`, `author_name`, `author_img`, `author_debutDate`, `author_description`, `created_at`, `updated_at`, `deleted_at`, `author_img_cloudinary`) VALUES
(107, 'Nguyễn Nhật Ánh', 'upload/img/vSfTNMhzBDLHGDqN502Xb04h1atniY0jqSY6Wfuq.jpg', '2023-11-25', 'Nguyễn Nhật Ánh là một nam nhà văn người Việt Nam. Được xem là một trong những nhà văn hiện đại xuất sắc nhất Việt Nam hiện nay, ông được biết đến qua nhiều tác phẩm văn học về đề tài tuổi trẻ. Nhiều tác phẩm của ông được độc giả và giới chuyên môn đánh giá cao, đa số đều đã được chuyển thể thành phim.', '2023-11-24 18:28:04', '2023-11-24 18:28:04', NULL, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1700875684/c6p44zxnffy035l7gn3r.jpg'),
(108, 'Haruki Murakami', 'upload/img/W6Hku4Qlgk1FfESLNmWhxzzCnD3qgpYy4C5z4EP7.webp', '2023-11-25', 'Murakami Haruki là một trong những tiểu thuyết gia, dịch giả văn học người Nhật Bản được biết đến nhiều nhất hiện nay cả trong lẫn ngoài nước Nhật.', '2023-11-24 18:28:43', '2023-11-24 18:28:43', NULL, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1700875723/av3yamhhmhnnosjqqctz.webp'),
(109, 'Nguyễn Du', 'upload/img/zcBwE3XLf4SIYxNa5FoNEakr4RdG1G08j9o28Gag.webp', '1788-10-21', 'Nguyễn Du tên tự là Tố Như, hiệu là Thanh Hiên, biệt hiệu là Hồng Sơn lạp hộ, Nam Hải điếu đồ, là một nhà thơ, nhà văn hóa lớn thời Lê mạt Nguyễn sơ ở Việt Nam. Ông được người Việt kính trọng tôn xưng là \"Đại thi hào dân tộc\" và được UNESCO vinh danh là \"Danh nhân văn hóa thế giới\".', '2023-11-24 18:30:18', '2023-11-24 18:30:18', NULL, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1700875818/iiuovgzg4ew59s2mrgw8.webp'),
(110, 'J.K. Rowling', 'upload/img/9ffFcBtbeJhUvb2vpLwnum77MD3ypuGNDRBt2qan.webp', '2023-11-21', 'Joanne Rowling CH, OBE, FRCPE, FRSL, thường được biết đến với bút danh J. K. Rowling, là một nhà văn, nhà từ thiện, nhà sản xuất phim và truyền hình, nhà biên kịch người Anh.', '2023-11-24 18:30:58', '2023-11-24 18:30:58', NULL, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1700875858/n3st3neyffybsssydcnc.webp'),
(111, 'Nguyễn Tuân', 'upload/img/KEVSAwPgzBkSLZtANy0nbTEGVMm1mbCOirFdcfd4.jpg', '2023-11-25', 'Nguyễn Tuân là một nhà văn người Việt Nam. Nguyễn Tuân có sở trường về tùy bút và ký. Ông viết văn với một phong cách tài hoa uyên bác và được xem là bậc thầy trong việc sáng tạo và sử dụng tiếng Việt.', '2023-11-24 18:31:42', '2023-11-24 18:31:42', NULL, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1700875902/hif9wmhu3oic0r91pqx5.jpg'),
(112, 'Paulo Coelho', 'upload/img/64LZ3adwzgS4BVBKBoH8YJlj807B1zFqYJjEdTEq.webp', '2023-11-25', 'Paulo Coelho sinh tại Rio de Janeiro (Brasil). Ông học đại học trường luật, nhưng đã bỏ học năm 1970 để du lịch qua México, Peru, Bolivia và Chile, cũng như châu Âu và Bắc Phi. Hai năm sau, ông trở về Brasil và bắt đầu soạn lời nhạc pop. Ông cộng tác với những nhạc sĩ pop như Raul Seixas. Năm 1974, ông bị bắt giam một thời gian ngắn vì những hoạt động chống lại chế độ độc tài thời đó ở Brazil.', '2023-11-24 18:32:30', '2023-11-24 18:32:30', NULL, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1700875950/u0ctnyhrkgaddjdffisr.webp'),
(113, 'Nguyên Hồng', 'upload/img/fGCirzN0zQwR7rZVaMtkzHjaWYtTuivQhIBlHwHQ.jpg', '2023-11-25', 'Ông sinh ngày 5 tháng 11 năm 1918 tại phố Hàng Cau, nay thuộc phường Trần Hưng Đạo, thành phố Nam Định, tỉnh Nam Định[2]. Cha ông làm cai đề lao, sau thất nghiệp, cảnh nhà sa sút, lại nghiện ngập và mắc bệnh lao, phải sống nghèo túng trong tâm trạng kẻ bất đắc chí. Mẹ ông là người ngoan đạo, tần tảo, hiền hậu, giàu đức hy sinh nhưng sống không có hạnh phúc trong gia đình nhà chồng.  Mới lên bảy, tám tuổi, Nguyên Hồng đã cảm nhận được một cách hồn nhiên và nhớ rất kỹ trong ký ức tuổi thơ của mình rằng \"thầy mẹ tôi lấy nhau không phải vì thương yêu nhau\" và bản thân mình là kết quả của cuộc hôn nhân gượng gạo ấy.  Năm 12 tuổi, Nguyên Hồng mồ côi cha. Không hiểu sao , mẹ ông lén lút đi bước nữa, bà bị gia đình nhà chồng ruồng bỏ, hắt hủi, không được tự do gần gũi, chăm sóc con. Nguyên Hồng phải sống nhờ bà nội cùng cô ruột và chịu sự rẻ rúng, khinh miệt của cô. Tuổi thơ Nguyên Hồng đã trải qua những ngày tháng nhiều cay đắng và tủi cực vì đói ăn, thiếu mặc, thiếu cả tình thương. Ông đã phải đi đánh đáo kiếm tiền ăn học và chung đụng với đủ mọi hạng trẻ hư hỏng của các lớp \"cặn bã\" nơi vườn hoa, cổng chợ, bến tàu, bến ô tô, bãi đá bóng.', '2023-11-24 18:34:07', '2023-11-24 18:34:07', NULL, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1700876047/j9a21qhcxrshh1nq9tbz.jpg'),
(114, 'Gabriel Garcia Marquez', 'upload/img/7lB72WkTFbB81VdloAMgB69pc0NSaVJpAIArj6He.webp', '2023-11-25', 'Gabriel José García Márquez là một nhà văn người Colombia. Ông còn là nhà báo và là một nhà hoạt động chính trị. Nổi tiếng với các tiểu thuyết Tình yêu thời thổ tả, Mùa thu của vị trưởng lão, Tướng quân giữa mê hồn trận và hơn cả là Trăm năm cô đơn, García Márquez là một đại diện tiêu biểu của nền văn học Mỹ Latinh.', '2023-11-24 18:34:36', '2023-11-24 18:34:36', NULL, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1700876076/duth92ivlezdrxfhakwe.webp'),
(115, 'Nguyễn Trãi', 'upload/img/EdEQqzPDQHIZYOiJ0UEtWPalKRFgbVVnmo84YhZv.jpg', '2023-11-25', 'Nguyễn Trãi (chữ Hán: 阮廌, 1380 – 19 tháng 9 năm 1442), hiệu là Ức Trai (抑齋), là một nhà chính trị, nhà văn, Danh nhân văn hóa thế giới, người đã tham gia tích cực Khởi nghĩa Lam Sơn do Lê Lợi lãnh đạo chống lại sự xâm lược của nhà Minh (Trung Quốc) với Đại Việt. Khi cuộc khởi nghĩa thành công vào năm 1428, Nguyễn Trãi trở thành một trong những khai quốc công thần của triều đại quân chủ nhà Hậu Lê trong Lịch sử Việt Nam. Ông được Bộ Văn hóa, Thể thao và Du lịch Việt Nam liệt kê trong 14 anh hùng tiêu biểu của dân tộc Việt Nam.', '2023-11-24 18:35:27', '2023-11-24 18:35:27', NULL, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1700876126/mk4jxtmc6frtrchhplog.jpg'),
(116, 'Margaret Atwood', 'upload/img/JasM08U8GGMrnwL4zbdY52F8rtxBopeUpcDE1Lr8.webp', '2023-11-25', 'Margaret Eleanor Atwood (sinh ngày 18 tháng 11 năm 1939) là một nhà thơ, tiểu thuyết gia, nhà phê bình văn học, người viết tiểu luận, nhà phát minh, nhà giáo và nhà hoạt động môi trường người Canada. Bà đã xuất bản mười bảy tập thơ, mười sáu tiểu thuyết, mười cuốn sách phi hư cấu, tám bộ tiểu thuyết ngắn, tám cuốn sách thiếu nhi, và một cuốn tiểu thuyết đồ họa, cũng như một số ấn bản báo chí nhỏ bằng thơ và tiểu thuyết. Atwood và các tác phẩm của bà đã giành được nhiều giải thưởng và danh hiệu bao gồm Giải thưởng Man Booker, Giải thưởng Arthur C. Clarke, Giải thưởng của Toàn quyền, Giải thưởng Franz Kafka và Giải thưởng Thành tựu trọn đời của Trung tâm phê bình sách và Trung tâm PEN Hoa Kỳ. Atwood cũng là nhà phát minh và phát triển LongPen và các công nghệ liên quan tạo điều kiện cho việc viết tài liệu bằng robot từ xa.', '2023-11-24 18:36:04', '2023-11-24 18:36:04', NULL, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1700876164/zfcbgfx3qvmu3unei5rh.webp'),
(117, 'George Orwell', 'upload/img/adsrWiPsvPIdZd376bVmX1yAF2wRgY7Ru5U5H6PA.jpg', '2023-11-25', 'Eric Arthur Blair, nổi tiếng với bút danh George Orwell, là một tác giả và phóng viên người Anh. Được biết đến như một tiểu thuyết gia, một nhà phê bình, một nhà bình luận về văn hóa, Orwell là một trong những ngòi bút tiếng Anh được hâm mộ nhất ở thế kỷ 20.', '2023-11-24 18:36:43', '2023-11-24 18:36:43', NULL, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1700876203/yoxyn8zlawbbt0svbocq.jpg'),
(118, 'Jane Austen', 'upload/img/ykFheqFWP8uTqhQejl2FkB2rAK9pwPG4Ty22rkEZ.webp', '2023-11-25', 'Jane Austen là một tiểu thuyết gia người Anh. Bà nổi tiếng với sáu cuốn tiểu thuyết lấy bối cảnh giới địa chủ trung lưu Anh vào cuối thế kỷ 18. Cốt truyện của Austen thường phản ánh tình cảnh phụ thuộc của người phụ nữ vào hôn nhân như là cứu cánh duy nhất để đảm bảo vị thế xã hội và lợi ích vật chất.', '2023-11-24 18:37:26', '2023-11-24 18:37:26', NULL, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1700876246/wxyn41rodwtziwsy6knu.webp'),
(119, 'Nguyễn Văn Cừ', 'upload/img/6VfycBOWuJNkRDvBfXKeha5Z7bJgtMoaOYbyPO1W.jpg', '2023-11-25', 'Nguyễn Văn Cừ sinh trong một gia đình Nho giáo, quê ở xã Phù Khê, tổng Nghĩa Lập, huyện Đông Ngạn, phủ Từ Sơn, tỉnh Bắc Ninh (nay là phường Phù Khê, thành phố Từ Sơn, tỉnh Bắc Ninh). Cụ tổ 17 đời của ông là Nguyễn Trãi.  Năm 1927, ông tham gia Việt Nam Thanh niên Cách mạng Đồng chí Hội.  Tháng 6 năm 1929, Nguyễn Văn Cừ được kết nạp vào chi bộ Đông Dương Cộng sản đảng đầu tiên ở Hà Nội. Năm 1930, được cử làm Bí thư đặc khu Hồng Gai – Uông Bí. Sau bị Pháp bắt, kết án khổ sai, đày đi Côn Đảo', '2023-11-24 18:38:22', '2023-11-24 18:38:22', NULL, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1700876301/pzutko1gq76gxezs41zd.jpg'),
(120, 'Fyodor Dostoevsky', 'upload/img/168k8YjDqLPx8Zdl6gr9LDKu88WtrthMgmeaTxX4.webp', '2023-11-25', 'Fyodor Mikhailovich Dostoyevsky, hay còn được gọi là Dostoevsky, là một nhà văn nổi tiếng người Nga. Cùng với Lev Tolstoy, Dostoevsky được xem là một trong hai nhà văn Nga vĩ đại thế kỷ 19.', '2023-11-24 18:38:49', '2023-11-24 18:38:49', NULL, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1700876329/bkprivdcw3jkguqdnvfs.webp'),
(121, 'Nguyễn Đình Thi', 'upload/img/HQpfWWej8pZDDyI3M8K0cNXhqM6ktulcfOvOfcyC.webp', '2023-11-25', 'Nguyễn Đình Thi là một nhà văn, nhà thơ, nhà phê bình văn học và nhạc sĩ Việt Nam thời hiện đại.', '2023-11-24 18:39:14', '2023-11-24 18:39:14', NULL, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1700876354/dvvhhitsvi6srawvt7xh.webp'),
(122, 'Ernest Hemingway', 'upload/img/5v1M4ZX8VF7BjNd6UTZbxz9sbAKAM44Pj4oVyUCB.webp', '2023-11-25', 'Ernest Miller Hemingway là một tiểu thuyết gia người Mỹ, nhà văn viết truyện ngắn và là một nhà báo. Ông là một phần của cộng đồng những người xa xứ ở Paris trong thập niên 20 của thế kỷ XX và là một trong những cựu quân nhân trong Chiến tranh thế giới I, sau đó được biết đến qua \"Thế hệ đã mất\".', '2023-11-24 18:39:41', '2023-11-24 18:39:41', NULL, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1700876381/y2tadpk1prkn2oykmpbr.webp'),
(123, 'Virginia Woolf', 'upload/img/F3QU5NFse4UC66cti6xJt9zBEhN7ZwXyBLyP28XJ.webp', '2023-11-25', 'Virginia Woolf là một tiểu thuyết gia và là một nhà văn tiểu luận người Anh, bà được coi là một trong những tác giả hiện đại quan trọng nhất của thế kỷ 20 và là người tiên phong trong việc sử dụng dòng ý thức như một phương tiện kể chuyện.', '2023-11-24 18:40:15', '2023-11-24 18:40:15', NULL, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1700876415/p2jmylrwm3ic4sbxeoio.webp'),
(124, 'Albert Camus', 'upload/img/OckT6NVSsG7pFa0HKSHkRCxNx580gt9OWgTS9i4e.webp', '2023-11-25', 'Albert Camus là một nhà văn, triết gia, nhà báo người Pháp nổi tiếng. Các tác phẩm tiêu biểu của ông bao gồm: Người xa lạ, Dịch hạch, Huyền thoại Sisyphe, Con người phản kháng, Sa đọa.', '2023-11-24 18:40:46', '2023-11-24 18:40:46', NULL, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1700876446/dnjiu67x5mpkjumvymqu.webp'),
(125, 'Nguyễn Bỉnh Khiêm', 'upload/img/ey9EG81ZTZMPnqfUgMKTRPdQ0pUU1Xj1aVfwbdIk.webp', '2023-11-25', 'Nguyễn Bỉnh Khiêm', '2023-11-24 18:41:20', '2023-11-24 18:41:20', NULL, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1700876479/nwsfcndnqjkp6ndeyvus.webp'),
(126, 'Oscar Wilde', 'upload/img/U5kqbq72oV6miszwXKDF7kEscjDQteY3VJxUJuSX.webp', '2023-11-25', 'Oscar Wilde, tên đầy đủ là Oscar Fingal O\'Flahertie Wills Wilde, là một nhà văn nổi tiếng người Ireland. Ông sinh ngày 16 tháng 10 năm 1854 tại thành phố Dublin thuộc Ireland, và mất ngày 30 tháng 11 năm 1900 tại Paris vì viêm não. Nguyên nhân cái chết của ông vẫn còn là một nghi vấn đối với các nhà khoa học.', '2023-11-24 18:41:44', '2023-11-24 18:41:44', NULL, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1700876504/xeh1do9cm3kwtgk5wrlt.webp'),
(127, 'Agatha Christie', 'upload/img/utzc9ZMy9aiXDiGRTVkQYzHNCmRXsGU2hc3OkZhV.webp', '2023-11-25', 'Agatha Christie', '2023-11-24 18:42:07', '2023-11-24 18:42:07', NULL, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1700876527/wcohkgfpzblarn8kvwtw.webp'),
(128, 'Nguyễn Gia Thiều', '', '2023-11-25', 'Nguyễn Gia Thiều là người có sự hiểu biết sâu rộng về văn học, sử học và triết học. Ông còn tinh thông nhiều bộ môn nghệ thuật như âm nhạc, hội họa, kiến trúc, trang trí. Về âm nhạc, Nguyễn Gia Thiều sở trường các bài ca, bài tán, ông là tác giả các bản Sơn trung âm và Sở từ điệu. Về hội họa, ông có bức tranh lớn Tống sơn đồ, dâng vua xem được khen thưởng. Về kiến trúc, trang trí, ông là người được chúa Trịnh giao cho trông nom việc trang hoàn phủ chúa và điều khiển xây tháp chùa Thiên Tích. Các công trình nghệ thuật của Nguyễn Gia Thiều đến nay không còn được lưu lại.', '2023-11-24 18:45:35', '2023-11-24 18:45:35', NULL, ''),
(129, 'Phan Huy Chú', '', '2023-11-25', 'Phan Huy Chú là con của Phan Huy Ích, một nhà nho có tiếng đậu tiến sĩ đời nhà Hậu Lê và từng làm quan cho nhà Tây Sơn. Mẹ ông là Ngô Thị Thực, con gái của Ngô Thì Sĩ, em gái của Ngô Thì Nhậm, bà mất khi ông 10 tuổi. Phan Huy Chú có tên là Hạo, sau vì kiêng quốc húy của nhà Nguyễn mới đổi là Chú, tự Lâm Khanh, hiệu Mai Phong.[3]  Ông sinh ra và lớn lên ở thôn Thụy Khuê, thuộc huyện Yên Sơn, phủ Quốc Oai (trước thuộc tỉnh Sơn Tây, sau thuộc Hà Tây và nay là thôn Thụy Khuê, xã Sài Sơn, huyện Quốc Oai, thành phố Hà Nội).[4]', '2023-11-24 18:48:09', '2023-11-24 18:48:09', NULL, ''),
(130, 'Mark Twain', 'upload/img/nzfe5rTWCEQNKMVVuSdW59rcz2DtShm074cSW2JB.webp', '2023-11-25', 'Mark Twain', '2023-11-24 18:49:19', '2023-11-24 18:49:19', NULL, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1700876958/kqwidns33rjnlkcj1wg2.webp'),
(131, 'Charles Dickens', 'upload/img/6zTm9CAjtfLYhZ05uNeqjelF67tz67bLpEFsNx8i.webp', '2023-11-25', 'Charles John Huffam Dickens, bút danh \"Boz\", là tiểu thuyết gia và người chỉ trích xã hội người Anh. Ông đã tạo ra một số nhân vật hư cấu được biết đến nhiều nhất trên toàn cầu và được coi là người viết văn nổi tiếng nhất thời đại Nữ hoàng Victoria.', '2023-11-24 18:49:48', '2023-11-24 18:49:48', NULL, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1700876987/fawrd5cjzmdo40c3hfu0.webp'),
(132, 'Harper Lee', 'upload/img/eLVJwYOTkVvej4nZviPEgitUenAYP2x601Ndg6Jh.webp', '2023-11-25', 'Harper Lee', '2023-11-24 18:50:37', '2023-11-24 18:50:37', NULL, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1700877037/ajh0vgp7cxtujka5ab3o.webp'),
(133, 'Stephen King', 'upload/img/osbTnTEScqoq06xyALroIVosk9T8KBLpdWLJARmT.webp', '2023-11-25', 'Stephen King là nhà văn người Mỹ thiên về thể loại kinh dị hoặc giả tưởng rất được tán thưởng khắp thế giới, đặc biệt với mô-típ biến đổi những tình huống căng thẳng bình thường thành hiện tượng khiếp đảm.', '2023-11-24 18:51:12', '2023-11-24 18:51:12', NULL, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1700877072/gcbuvkgivm4sc2ptx4gp.webp'),
(134, 'Agatha Christie', 'upload/img/icHG40bCVIDpx23rmVjt029PXRtmdjGI79c9zBZt.webp', '2023-11-25', 'Agatha Christie', '2023-11-24 18:51:36', '2023-11-24 18:51:36', NULL, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1700877095/uamrbqjrus3yvgqateu0.webp'),
(135, 'Edgar Allan Poe', 'upload/img/j0Xn5srUGXjnD45TVOlRdDtbM8wfpMzt0foJj11H.jpg', '2023-11-25', 'Edgar Allan Poe', '2023-11-24 18:52:06', '2023-11-24 18:52:06', NULL, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1700877126/qtvqinchmtppm1bwingb.jpg'),
(136, 'Kurt Vonnegut', 'upload/img/BPfI4vAXg6NIT1a6lA1P1UJzl305DHKKtYXv6jqm.webp', '2023-11-25', 'Kurt Vonnegut Jr. là một nhà văn người Mỹ nổi tiếng nhờ các tiểu thuyết châm biếm và hài hước đen tối. Trong sự nghiệp kéo dài 50 năm, ông đã xuất bản mười bốn cuốn tiểu thuyết, ba tuyển tập truyện ngnaws, năm vở kịch, và năm tác phẩm hư cấu; các tuyển tập khác được xuất bản sau khi ông qua đời.', '2023-11-24 18:52:29', '2023-11-24 18:52:29', NULL, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1700877149/ke9msxbvmnhzg1uksq58.webp'),
(137, 'Arthur Conan Doyle', 'upload/img/RXEXkoc41cbNfnqeNPOQb6Dc2RRjgm9z9VY6SgHI.webp', '2023-11-25', 'Sir Arthur Conan Doyle là một nhà văn người Scotland nổi tiếng với tiểu thuyết trinh thám Sherlock Holmes, tác phẩm được cho là một sáng kiến lớn trong lĩnh vực tiểu thuyết trinh thám. Tên ban đầu của Sherlock Holmes vốn là Shelling Ford.', '2023-11-24 18:52:58', '2023-11-24 18:52:58', NULL, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1700877178/rqryhvtv2kck7ljqkxck.webp'),
(138, 'John Steinbeck', 'upload/img/yDr9hill2LFHSthjUSeUEVcM5AVv2JRPKUzSxYQn.webp', '2023-11-25', 'John Steinbeck', '2023-11-24 18:53:21', '2023-11-24 18:53:21', NULL, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1700877200/c9jokz3xd1ie9drfd7un.webp'),
(139, 'Roald Dahl', 'upload/img/u7nWpP5X38aT2sxmrOsYFZjMBV4XZ4M38kWpY44e.webp', '2023-11-25', 'Roald Dahl là một tiểu thuyết gia, nhà văn viết truyện ngắn, nhà thơ, kịch tác gia, và phi công chiến đấu người Anh.', '2023-11-24 18:53:44', '2023-11-24 18:53:44', NULL, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1700877224/e1rcotn4g4vhdy0z8d2g.webp'),
(140, 'Emily Bronte', 'upload/img/dW6z4X6vYeXDdOq4EcHavVmwygv5YbAgMSTP6o0K.webp', '2023-11-25', 'Emily Bronte', '2023-11-24 18:54:06', '2023-11-24 18:54:06', NULL, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1700877245/jbrnc8xckkrrc7jqjd3h.webp'),
(141, 'Aldous Huxley', 'upload/img/xr8kIhUxWo1yvr6qimjN8baAu5DW7CR9OqKDwdzO.webp', '2023-11-25', 'Aldous Leonard Huxley là một nhà văn người Anh di cư đến Mỹ và sống ở Los Angeles cho đến cuối đời. Ông là một thành viên của gia tộc Huxley nổi tiếng.', '2023-11-24 18:54:25', '2023-11-24 18:54:25', NULL, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1700877265/zpb73oqubzbx0s3lhwqd.webp'),
(142, 'Victor Hugo', 'upload/img/ylwIWKzRRaMQmZyCLa7cahYl91sDNwudpKPzL1V3.webp', '2023-11-25', 'Victor Hugo', '2023-11-24 18:54:46', '2023-11-24 18:54:46', NULL, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1700877286/bu4bygm3kpqnjrverkzu.webp'),
(143, 'J. R. R. Tolkien', 'upload/img/OfzwSfe9fK6JEzpFA2cUgggmoNctAFl8QwzNjAsP.webp', '2023-11-25', 'John Ronald Reuel Tolkien CBE FRSL là một nhà văn, tiểu thuyết gia, và giáo sư người Anh, được công chúng biết đến nhiều nhất qua các tác phẩm Anh chàng Hobbit và Chúa tể những chiếc nhẫn.', '2023-11-24 18:55:12', '2023-11-24 18:55:12', NULL, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1700877312/zgrzmdks1qwiar7pvts2.webp'),
(144, 'Chinua Achebe', 'upload/img/UDUN4OznXEZp8DOHehOpV5AQGXnpIyvOnrTMV7QE.webp', '2023-11-25', 'Chinua Achebe', '2023-11-24 18:55:31', '2023-11-24 18:55:31', NULL, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1700877330/vgslbnday1o0pd0l25gf.webp'),
(145, 'Salman Rushdie', 'upload/img/sIk5REbgnvRretE9OTLHVoFFjbk2UbjRRHGacmB0.webp', '2023-11-25', 'Sir Ahmed Salman Rushdie CH FRSL là một tiểu thuyết gia người Anh gốc Ấn. Tác phẩm của ông thường kết hợp yếu tố hiện thực huyền ảo và lịch sử viẽn tưởng, với chủ đề về mối liên hệ và sự di cư giữa thế giới phương Đông và thế giới phương Tây. Các câu chuyện thường lấy bối cảnh ở tiểu lục địa Ấn Độ.', '2023-11-24 18:55:53', '2023-11-24 18:55:53', NULL, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1700877353/wqcfl8thxa3iluipbxzw.webp'),
(146, 'Isabel Allende', 'upload/img/AODPDjwoAti1h9ZJ5M3ihPxsyKnVU0TUu6pH9GR7.webp', '2023-11-25', 'Isabel Allende Llona là một nhà văn Chile với tư cách công dân Mỹ. Allende, có các tác phẩm đôi khi chứa đựng các khía cạnh của truyền thống \"ma thuật hiện thực\", nổi tiếng với tiểu thuyết như Ngôi nhà của các linh hồn và Thành phố của những tên ác quỷ đã thành công về mặt thương mại.', '2023-11-24 18:56:29', '2023-11-24 18:56:29', NULL, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1700877388/gypilkugg3rdo0vml6do.webp'),
(147, 'Franz Kafka', 'upload/img/jUd1W8cpYHAHeaam3RluIa4kuAzzeyWI59ermEam.webp', '2023-11-25', 'Franz Kafka là một tiểu thuyết gia và nhà văn viết truyện ngắn người Bohemia nói tiếng Đức, được giới phê bình đánh giá là một trong những tác giả có tầm ảnh hưởng nhất thế kỷ XX. Kafka là một nhà hiện đại chủ nghĩa và chịu ảnh hưởng mạnh bởi những thể loại khác, bao gồm chủ nghĩa hiện sinh.', '2023-11-24 18:56:54', '2023-11-24 18:56:54', NULL, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1700877413/ezr6hwkzusgqivbpvz61.webp'),
(148, 'Milan Kundera', 'upload/img/Mcdi2xUZXt2YkOVhO4wOUGDds3QeMqCJVyycIDtD.webp', '2023-11-25', 'Milan Kundera', '2023-11-24 18:57:15', '2023-11-24 18:57:15', NULL, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1700877435/dtaztt0qadnqizawa2qx.webp'),
(149, 'James Joyce', 'upload/img/QT1FboXFvpI9SJfvlJR5qZif6loSoPghss7Bw7en.webp', '2023-11-25', 'James Augustine Aloysius Joyce là một tiểu thuyết gia, nhà văn viết truyện ngắn, nhà thơ và nhà phê bình văn học người Ireland, được đánh giá là một trong những nhà văn có ảnh hưởng nhất thế kỷ 20. Ông nổi tiếng nhất với tiểu thuyết bước ngoặt Ulysses.', '2023-11-24 18:57:41', '2023-11-24 18:57:41', NULL, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1700877461/qqpmcfh9i3camyshhzbh.webp'),
(150, 'Vũ Trọng Phụng', 'upload/img/FwvzecdB17fFoByJaBp1TwlzSvGFs5vF5GM3prQD.jpg', '2023-11-25', 'Vũ Trọng Phụng là một nhà văn, nhà báo nổi tiếng của Việt Nam vào đầu thế kỷ 20.', '2023-11-24 19:02:20', '2023-11-24 19:02:20', NULL, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1700877740/q5cwu05kffppjx78ffyh.jpg'),
(151, 'Thạch Lam', 'upload/img/aytOAY1uAWQfIbIMlSJfls8bKhZRm5HG26FnJdlj.jpg', '2023-11-25', 'Thạch Lam sinh ra tại Hà Nội trong một gia đình công chức gốc quan lại, thuở nhỏ chủ yếu sống ở quê ngoại, phố huyện Cẩm Giàng, tỉnh Hải Dương. Thạch Lam là người con thứ 6 trong gia đình 7 người con (6 trai, 1 gái).[2] Nguyên tên ban đầu của ông do cha mẹ đặt là Nguyễn Trường Vinh. Đến năm Thạch Lam 15 tuổi, thấy mình học chậm, cần tăng thêm tuổi để học \"nhảy\" 4 năm, ông làm lại khai sinh thành Nguyễn Tường Lân.', '2023-11-24 19:02:59', '2023-11-24 19:02:59', NULL, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1700877779/dtfpm342uivgtrs7nrrh.jpg'),
(152, 'Nam Cao', 'upload/img/QcF3mNEuw3QxNEYAAmSW6ERVrKVHYQNhYgxKnkOL.jpg', '2023-11-25', 'Nam Cao', '2023-11-24 19:03:40', '2023-11-24 19:03:40', NULL, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1700877819/mf61htcmt7vclqmrrlah.jpg'),
(153, 'Nguyễn Thị Hoàng', '', '2023-11-25', 'Nguyễn Thị Hoàng (sinh năm 1939) là một nữ nhà văn, nhà thơ người Việt Nam. Bà là một trong những nhà văn miền Nam được nhiều người biết đến trước năm 1975.[1]  Bà sinh ngày 11 tháng 12 năm 1939 tại Huế thuộc Liên bang Đông Dương.[2] Năm 1957, bà chuyển vào sinh sống ở Nha Trang rồi đến năm 1960 bà vào Sài Gòn học Đại học Văn khoa và Luật nhưng bà bỏ ngang, không học hết mà lên Đà Lạt dạy học. Đến năm 1966, bà chuyển sang chuyên tâm viết tiểu thuyết.[2]  Cùng với văn xuôi, Nguyễn Thị Hoàng còn tham gia sáng tác thơ và từ đó bà trở thành một người nổi tiếng trong giới văn nghệ chuyên viết về những mâu thuẫn nội tại của giới trẻ Sài Gòn trong suốt thập niên 1960.[3]', '2023-11-24 19:04:03', '2023-11-24 19:04:03', NULL, ''),
(154, 'Nguyễn Minh Châu', 'upload/img/0KcL0T5oAOGnIDLNjkwgG16GC1kkoEuELINvCzPV.jpg', '2023-11-25', 'Nguyễn Minh Châu sinh ngày 20 tháng 10 năm 1930, quê ở làng Văn Thái, tên nôm là làng Thơi, xã Sơn Hải, huyện Quỳnh Lưu, tỉnh Nghệ An.  Theo lời kể của vợ ông, bà Nguyễn Thị Doanh, tên khai sinh của Nguyễn Minh Châu là Nguyễn Thí. Chỉ tới khi đi học, bố mẹ mới đổi tên cho ông thành Minh Châu. Trong những ghi chép cuối cùng, Ngồi buồn viết mà chơi ông viết trong những ngày nằm viện ở Bệnh viện Quân y 108, Nguyễn Minh Châu tự nhận xét về mình: \"Từ lúc còn nhỏ tôi đã là một thằng bé rụt rè và vô cùng nhút nhát. Tôi sợ từ con chuột nhắt cho đến ma quỷ. Sau này lớn lên, đến gần sáu chục tuổi, đến một nơi đông người tôi chỉ muốn lẻn vào một xó khuất và chỉ có như thế mới cảm thấy được yên ổn và bình tâm như con dế đã chui tọt vào lỗ\".', '2023-11-24 19:04:50', '2023-11-24 19:04:50', NULL, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1700877890/yguytx1ozkaee7msrd3f.jpg'),
(155, 'Nguyễn Ngọc Tư', 'upload/img/K64wSZNAL16jbvRAsiOzPalKfMAy3cURzuptoG5U.webp', '2023-11-25', 'Nguyễn Ngọc Tư là một nhà văn, thành viên Hội nhà văn Việt Nam. Năm 2018, cô được trao Giải thưởng Văn học Liberaturpreis 2018 do Litprom bình chọn, dựa trên việc xem xét các bản dịch tiếng Đức tác phẩm nổi bật của các tác giả nữ đương đại tiêu biểu trong khu vực.', '2023-11-24 19:05:24', '2023-11-24 19:05:24', NULL, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1700877923/xuzkotqfutyqr7hjciz1.webp'),
(156, 'Trang Hạ', 'upload/img/KyRsdUjMnvKGRt2MlDBE2x2yceSEfe3frxUdNZt2.jpg', '2023-11-25', 'rang Hạ sinh ngày 30 tháng 11 năm 1975 tại Hà Nội, là một nhà văn nổi tiếng của Việt Nam. Cô đã gây tiếng vang với tư cách là một trong những bút trưởng tiên phong của Hội bút Hương đầu mùa trên báo Hoa học trò vào những năm đầu thập kỷ 1990. Công việc chính của cô là viết văn, làm báo, phụ trách chuyên mục trên các tạp chí và viết kịch bản, quảng cáo. Ngay từ khi còn đi học, Trang Hạ đã cho thấy tài năng văn chương đặc biệt, với góc nhìn nhạy bén, phê phán và khả năng viết văn xuất sắc.    Các tác phẩm của nhà văn nữ nổi tiếng này luôn tôn vinh giá trị nhân cách của phụ nữ và khắc họa số phận những người phụ nữ bất hạnh. Những câu chuyện của cô được độc giả rất yêu thích vì sự chân thực và sắc bén trong việc phản ánh hiện thực cuộc sống. Tuy nhiên, một số ý kiến trái chiều cũng đã xuất hiện, cho rằng các tác phẩm của cô chỉ mang tính giải trí và thiếu yếu tố nghệ thuật. Dù vậy, Trang Hạ vẫn mạnh mẽ đứng vững trước những ý kiến trái chiều và đề cao tầm quan trọng của công việc viết văn nghiêm túc.    Một số tác phẩm nổi tiếng của Trang Hạ có thể kể đến như: \"Đàn bà 30\", \"Xin lỗi, em chỉ là con đĩ\", \"Tình nhân không bao giờ đòi cưới\"... được đông đảo bạn đọc đón nhận.', '2023-11-24 19:06:04', '2023-11-24 19:06:04', NULL, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1700877964/faioyxpatmscbdtzgpvo.jpg'),
(157, 'Trang Hạ', 'upload/img/BRCmIeugz6kBttEURaYw732bZdPfuwISe9jpbf9a.jpg', '2023-11-25', 'rang Hạ sinh ngày 30 tháng 11 năm 1975 tại Hà Nội, là một nhà văn nổi tiếng của Việt Nam. Cô đã gây tiếng vang với tư cách là một trong những bút trưởng tiên phong của Hội bút Hương đầu mùa trên báo Hoa học trò vào những năm đầu thập kỷ 1990. Công việc chính của cô là viết văn, làm báo, phụ trách chuyên mục trên các tạp chí và viết kịch bản, quảng cáo. Ngay từ khi còn đi học, Trang Hạ đã cho thấy tài năng văn chương đặc biệt, với góc nhìn nhạy bén, phê phán và khả năng viết văn xuất sắc.    Các tác phẩm của nhà văn nữ nổi tiếng này luôn tôn vinh giá trị nhân cách của phụ nữ và khắc họa số phận những người phụ nữ bất hạnh. Những câu chuyện của cô được độc giả rất yêu thích vì sự chân thực và sắc bén trong việc phản ánh hiện thực cuộc sống. Tuy nhiên, một số ý kiến trái chiều cũng đã xuất hiện, cho rằng các tác phẩm của cô chỉ mang tính giải trí và thiếu yếu tố nghệ thuật. Dù vậy, Trang Hạ vẫn mạnh mẽ đứng vững trước những ý kiến trái chiều và đề cao tầm quan trọng của công việc viết văn nghiêm túc.    Một số tác phẩm nổi tiếng của Trang Hạ có thể kể đến như: \"Đàn bà 30\", \"Xin lỗi, em chỉ là con đĩ\", \"Tình nhân không bao giờ đòi cưới\"... được đông đảo bạn đọc đón nhận.', '2023-11-24 19:06:11', '2023-11-24 19:06:11', NULL, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1700877970/vh07o3cyy3mb4zgwsb2x.jpg'),
(158, 'Nguyễn Phong Việt', 'upload/img/2kg3CRbm3P06vUqIgxcBhWV7hxXU0BD7ly1Hvt8e.jpg', '2023-11-25', 'Nguyễn Phong Việt, sinh ngày 18/7/1980 tại Tuy Hoà, Phú Yên, là một nhà văn và nhà thơ nổi tiếng của Việt Nam. Ông là cựu học sinh chuyên Nguyễn Huệ và tốt nghiệp Đại học Ngoại ngữ - Tin học Thành phố Hồ Chí Minh. Từ năm 1998, ông trở thành thành viên của hội bút Vòm me xanh trên báo Mực tím với bút danh Me Quê và sau đó được bổ nhiệm làm bút trưởng năm 2002. Ông cũng đã ba lần đoạt giải thưởng Bút mới của báo Tuổi trẻ.     Nguyễn Phong Việt đã gây ấn tượng và được đông đảo độc giả yêu mến thông qua nhiều tác phẩm nổi tiếng như \"Đi qua thương nhớ\", \"Sinh ra là để cô đơn\", \"Sống một cuộc đời bình thường\" và gần đây nhất là \"Chúng ta sống là vì\". Các tác phẩm của ông được đông đảo độc giả đón nhận bởi lối viết gần gũi, dung dị nhưng đầy hoài niệm. Qua đó, để lại cho độc giả những trải nghiệm sâu sắc về cuộc sống, tình yêu và khám phá những khía cạnh tinh tế trong tâm hồn con người.', '2023-11-24 19:06:42', '2023-11-24 19:06:42', NULL, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1700878002/ckppkokiphyfn5rcpt0h.jpg'),
(159, 'Anh Khang', 'upload/img/qKrbh9gk87IsJBZ2l5ZrKp42XTOdFxrTqrfSUccs.jpg', '2023-11-25', 'Anh Khang, là tác giả và MC nổi tiếng, sinh năm 1987 và là cử nhân khoa Báo chí và Truyền thông tại Đại học Khoa học Xã hội và Nhân văn TP.HCM.  Ngay từ khi là sinh viên, Anh Khang đã có kinh nghiệm làm người dẫn chương trình (MC). Sau này anh không chỉ làm việc trong lĩnh vực PR - Marketing, mà còn đảm nhận vai trò MC và sáng tác nhạc. Anh đã trở thành một cây bút quen thuộc cho độc giả của báo Doanh nhân Sài Gòn cuối tuần. Hiện tại, anh đang là biên tập viên tại một công ty truyền thông.  Danh sách tác phẩm của Anh Khang bao gồm nhiều cuốn sách nổi tiếng như \"Ngày trôi về phía cũ\", \"Buồn làm sao buông\", \"Trời vẫn còn xanh, \"Em vẫn còn anh\" và \"Thả thính chân kinh\". Anh Khang đã được mệnh danh là \"Nhà văn triệu bản\" vì cuốn sách nào anh viết cũng thu hút sự quan tâm của độc giả. Tác phẩm của anh mang đậm nét buồn của tình yêu và câu chuyện chân thực, tạo được sự đồng cảm và yêu thích từ phía độc giả.', '2023-11-24 19:07:04', '2023-11-24 19:07:04', NULL, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1700878024/x9c63wcxcwdaovtnlnwl.jpg'),
(160, 'Nguyễn Ngọc Thạch', 'upload/img/85bgB4Q1zZWB6zSs2weS93C6GgI4tH0MR2Umj2C1.jpg', '2023-11-25', 'Nguyễn Ngọc Thạch, sinh năm 1987, một nhà văn khá nổi tiếng hiện nay, là một trong số hiếm hoi các tác giả thuộc thế hệ 8x có số lượng sách bán chạy tại Việt Nam. Các tác phẩm của anh liên tục đạt vị trí hàng đầu trong danh sách best-sellers trên các trang bán sách trực tuyến.  Nguyễn Ngọc Thạch được đông đảo bạn trẻ biết đến và yêu mến. Anh nổi tiếng với những tác phẩm tập trung viết về đề tài đồng tính và các khía cạnh đen tối trong thế giới thứ ba. Các tác phẩm như \"Đời Callboy\" và \"Chênh vênh 25\" của nhà văn này đã nhận được sự đón nhận nhiệt tình từ phía độc giả. Việc xây dựng một phong cách riêng đã đem lại cho anh những thành công đáng kể.  Ngay từ khi bước chân vào con đường viết lách, Nguyễn Ngọc Thạch đã can đảm công khai mình là người thuộc cộng đồng LGBT. Giọng văn của anh mang tính chân thực, giản dị, được người đọc đông đảo hâm mộ và yêu mến. Khi đọc qua một số tác phẩm của nhà văn 8x này, chúng ta có thể cảm nhận được sự trần thực và không hoa mỹ, nhưng lại tràn đầy cảm xúc, mỗi tác phẩm mang một dấu ấn độc đáo. Một số cuốn sách nổi tiếng của anh có thể kể đến như \"Chênh vênh 25\", \"Khóc giữ Sài Gòn\", \"Lưng chừng cô đơn\", \"Thất tình không sao\"...nhận được đông đảo sự quan tâm từ độc giả.', '2023-11-24 19:07:32', '2023-11-24 19:07:32', NULL, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1700878052/hhan2hlvytmi5xc4s7d9.jpg'),
(161, 'Hamlet Trương', 'upload/img/fXIpP3vaizjnsT0wt8GzGLPz8x4xv1Wb4POwHpJb.jpg', '2023-11-25', 'Hamlet Trương là một nghệ sĩ đa năng với vai trò ca sĩ và nhà văn. Anh đã xây dựng được sự nổi tiếng trong cả hai lĩnh vực này. Với âm nhạc, Hamlet Trương là một ca sĩ và nhạc sĩ tự sáng tác. Anh đã cho ra mắt nhiều bài hát thành công và được yêu thích như \"Bụi bay vào mắt,\" \"Tình yêu cao thượng,\" \"Luật cho người thay thế,\" và \"Yêu không hối tiếc.\" Những ca khúc của anh thường mang đậm yếu tố lãng mạn và chất tự sự, thu hút sự quan tâm của đông đảo khán giả.    Ngoài ra, Hamlet Trương cũng là một nhà văn với những tác phẩm bán chạy tại Việt Nam. Anh viết về cuộc sống, tình yêu và những trải nghiệm cá nhân. Danh sách tác phẩm của anh bao gồm \"Thời gian để yêu,\" \"Thương nhau để đó,\" \"Tay tìm tay níu tay,\" \"Yêu đi rồi khóc,\" \"Ai rồi cũng khác,\" \"Mỉm cười cho qua,\" \"12 cách yêu,\" \"Người lớn không khóc,\" \"Lên rừng giấu lá,\" và \"Yêu một người khó lắm.\" Sự kết hợp giữa vai trò ca sĩ và nhà văn của Hamlet Trương tạo nên một phong cách sáng tác độc đáo và tạo được sự đột phá trong làng giải trí Việt Nam.', '2023-11-24 19:07:55', '2023-11-24 19:07:55', NULL, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1700878074/b8kcv9ywlmn5lhz8prgu.jpg'),
(162, 'Iris Cao', 'upload/img/dWyQwL6G9dnzhwSO7WCJdRPFRLEdOffj2QioCBxo.jpg', '2023-11-25', 'Iris Cao tên thật của là Cao Bích Thủy - một nhà văn trẻ hiện đại, đã và đang thu hút được sự yêu thích của độc giả. Trước khi bước vào con đường văn chương, cô đã du học tại Singapore với chuyên ngành quảng cáo - truyền thông. Sau đó, cô gia nhập vào các công ty lớn như Wepro, YanTV, và phát triển sự nghiệp trong lĩnh vực viết quảng cáo. Hiện nay, tác giả cũng là một nhiếp ảnh gia xuất sắc, sở hữu một studio riêng và hợp tác với nhiều ngôi sao Vpop.    Vào một ngày tình cờ, Iris Cao gặp Hamlet Trương, người đã truyền cảm hứng và đưa cô vào con đường văn chương. Năm 2012, cuốn sách của hai tác giả kết hợp với nhau được ra mắt với tên gọi \"Thương nhau để đó\". Với phong cách viết tự sự mộc mạc và lối hành văn trôi chảy, Iris Cao nhanh chóng thu hút sự quan tâm của độc giả. Ngoài viết sách, cô cũng viết kịch bản cho các MV ca nhạc như \"Nỗi nhớ kéo dài\", \"Khổ tâm\", \"Sông có khúc người có lúc\",... Các ca khúc \"Tình thân\" và \"I love you too\" đã để lại ấn tượng sâu sắc trong lòng khán giả. Cùng với đó, cô cũng là đồng tác giả của ca khúc \"Người dưng ngược lối\" của Phạm Quỳnh Anh, gây sốt trong một thời gian dài.', '2023-11-24 19:08:18', '2023-11-24 19:08:18', NULL, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1700878098/en06cyggmpnchizs6b7x.jpg'),
(163, 'Rosie Nguyễn', 'upload/img/KoddpN2GQq0QBdHXUvXo36eTzfyZKlED0oaHBbFe.jpg', '2023-11-25', 'Rosie Nguyễn, tên thật Nguyễn Hoàng Nguyên, sinh năm 1987, là một tác giả sách, giảng viên các khóa học kỹ năng và huấn luyện viên yoga. Hiện tại, cô đang theo đuổi công việc viết tự do. Từ khi còn nhỏ, Rosie đã có niềm đam mê viết lách.   Sau khi tốt nghiệp chuyên ngành Kinh tế đối ngoại tại Đại học Ngoại Thương, Rosie đã làm việc cho ba công ty khác nhau trong vòng 6 năm. Mặc dù có một công việc ổn định, nhưng cô cảm thấy cuộc sống của mình nhàm chán và đơn điệu. Cô chỉ biết về lĩnh vực mà mình được đào tạo, thiếu kiến thức về các vấn đề xã hội và cảm thấy mình tụt hậu. Vì vậy, cô quyết định phát triển bản thân thông qua việc đọc sách.  Cảm hứng sau mỗi chuyến đi đã thúc đẩy Rosie quay lại với đam mê từ thuở nhỏ của mình, đó là viết lách. Cô bắt đầu chia sẻ về các chuyến du lịch và quá trình học hỏi cá nhân trên các mạng xã hội. Dần dần, những bài viết của cô được nhiều người biết đến và Rosie trở thành một blogger nổi tiếng về văn hóa và du lịch. Một số tác phẩm nổi tiếng của cô có thể kể đến như \"Tuổi trẻ đáng giá bao nhiêu\", \"Mình nói gì khi nói về hạnh phúc\", \"Ta ba lô trên đất Á\", được đón nhận và quan tâm bởi nhiều bạn đọc trẻ.', '2023-11-24 19:08:42', '2023-11-24 19:08:42', NULL, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1700878122/edguionkxstpafgofdxj.jpg'),
(164, 'Tuệ Nghi', 'upload/img/DafDqi1cVIlxbTTOPDq9XrSIYzFi5skrlDaWRqJd.jpg', '2023-11-25', 'Tuệ Nghi, tên thật Phan Thanh Bảo Ngọc, sinh năm 1993, là một người trẻ thành công trong lĩnh vực kinh doanh và tác giả của nhiều cuốn sách nổi tiếng. Cô bắt đầu khởi nghiệp từ khi chỉ mới 15 tuổi, và đạt thành công lớn khi thành lập công ty riêng ở tuổi 18. Sự nỗ lực và tài năng của Tuệ Nghi đã được công nhận khi cô nhận được danh hiệu Top 10 Ngôi sao Kinh doanh châu Á - Thái Bình Dương vào tuổi 20. Những thành tựu đáng kể này đã thu hút sự quan tâm của báo chí quốc tế vì Tuệ Nghi đã đạt được thành công trong lĩnh vực kinh doanh từ khi còn rất trẻ.    Tuệ Nghi viết về những điều mình nhìn thấy và trải qua. Không điều gì vui hơn khi biết những câu chuyện của mình có thể truyền cảm hứng cho người khác, thậm chí thay đổi cuộc đời họ theo hướng tích cực. Một số tác phẩm nổi tiếng của Tuệ Nghi có thể kể đến như \"Sẽ có cách đừng lo\", \"Đàn ông hay hứa, Phụ nữ hay tin\", \"Cứ bình tĩnh\", \"Can trường bước tiếp\"...được đông đảo độc giả đón nhận, đặc biệt là các bạn trẻ.', '2023-11-24 19:09:03', '2023-11-24 19:09:03', NULL, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1700878143/r9m4e8nwbmdoove3zpfn.jpg'),
(165, 'test', '', '2023-11-25', 's', '2023-11-24 19:25:16', '2023-11-24 19:26:08', '2023-11-24 19:26:08', 'upload/img/wDo6NImbigowfxy1OCE4bfu6KdeNxNoKepXVcNga.jpg'),
(166, 'test', '', '2023-11-25', '123123', '2023-11-24 19:26:31', '2023-11-24 19:42:08', '2023-11-24 19:42:08', 'upload/img/hrzvzM2nXGwKqEw4edSw2vquNLjZpLk5gCndzQfa.jpg'),
(167, 'tesstt', 'upload/img/DHyFJVnfQRwrxeEwhSaVcjJ9rlSjSdYrrt9xfu5b.jpg', '2023-11-25', 'asdasd', '2023-11-24 19:33:58', '2023-11-24 19:42:30', NULL, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1700880149/uinuycj83qxhmmyp7hpg.jpg'),
(168, 'Gào', 'upload/img/9C6bn1efj5i8wI90b1R8PxBzI2cTG2bcph5OJiRN.jpg', '2023-11-25', 'Gào (tên thật là Vũ Phương Thanh), sinh năm 1988 tại Hà Nội. Cô vốn là một blogger nổi tiếng trên mạng xã hội với khởi đầu từ những trang viết tản mạn về tình yêu đôi lứa.  Gào đã từng cho ra mắt nhiều tác phẩm và được nhiều bạn trẻ đón nhận. Sau đó, cô đã nhận được tương tác và lượt người theo dõi đông đảo trên mạng xã hội.', '2023-11-24 19:50:29', '2023-11-24 19:50:29', NULL, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1700880628/nduotduhjsuavzcb0tot.jpg'),
(169, 'Nguyễn Phong Việt', '', '2023-11-25', 'Nguyễn Phong Việt được sinh ra tại Tuy Hòa, Phú Yên. Anh theo học tại trường Trung học Phổ thông Nguyễn Huệ, sau đó tốt nghiệp Trường Đại học Ngoại ngữ - Tin học Thành phố Hồ Chí Minh. Năm 1998, anh trở thành hội viên của Hội bút Vòm Me Xanh của báo Mực Tím với bút danh \"Me Quê\" và từ năm 2002 là Bút trưởng của hội. Anh đã ba lần đạt được giải thưởng \"Bút mới\" của báo Tuổi trẻ. Ngoài ra, anh từng là phóng viên mảng văn hóa - nghệ thuật của báo Mực Tím cũng như là trưởng trang Xzone.vn phía nam tại Thành phố Hồ Chí Minh.', '2023-11-24 19:52:38', '2023-11-24 19:52:38', NULL, ''),
(170, 'Sơn Paris', 'upload/img/4QCg1M1Ub2RlmTJRcT09rLh78U8aPfhVbEbYIpcF.webp', '2023-11-25', 'Sơn Paris, chàng thủ khoa đa tài của Học viện Ngoại giao \"chạm ngõ\" với sự nổi tiếng khi tích cực tham gia nhiều chương trình, sự kiện lớn nhỏ dành cho học sinh, sinh viên và phủ sóng hình ảnh của mình trên nhiều phương tiện truyền thông, báo chí. Nhưng cũng chính từ đây, Sơn Paris vướng phải nhiều rắc rối trên cộng đồng mạng.  Thời gian trước, cái tên Sơn Paris luôn gắn liền với danh xưng \"hot boy\", nhiều người cho rằng, chàng trai này không \"xứng\" với hai chữ ấy. Nhưng một luồng ý kiến mạnh mẽ khác lại liên tục phản pháo. Với xuất phát điểm là một thủ khoa, lại học hai chuyên ngành song song tại một trong những trường Đại học hàng đầu, Sơn Paris hoàn toàn có thể đi lên bằng chính đôi chân của mình mà không cần dùng tới chiêu trò hay phát ngôn gây sốc nào cả.  Suốt thời gian ấy, Sơn Paris phải trải qua một thời kỳ khó khăn, vừa chống chọi với \"cơn mưa gạch đá\" vừa loay hoay tìm cách để giải thoát cho chính mình. Không dễ dàng khuất phục trước dư luận, Sơn Paris âm thầm nỗ lực để chạm tay tới thành công của riêng mình.  Gặp lại Sơn Paris sau một năm vắng bóng, anh chàng giờ đã trưởng thành hơn rất nhiều. Với Sơn, việc thoát khỏi hai chữ “hot boy” là một may mắn, bởi Sơn đã có một cú “lột xác” ngoạn mục, trở thành một trong những tác giả trẻ nổi lên của làng sách Việt Nam.', '2023-11-24 19:53:27', '2023-11-24 19:53:27', NULL, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1700880806/okutugi3gpphyfusip9f.webp'),
(171, 'Đỗ Nhật Nam', 'upload/img/ZnsgWT8bUAp2MjLOW312QjLn9YUqn5MBDYzjp2ew.webp', '2023-11-25', 'Đỗ Nhật Nam là một sinh viên người Việt Nam. Khi anh ở tuổi thiếu niên, nhiều tờ báo ca ngợi anh như là một người trẻ tài năng, một thần đồng. Ngoài ra, anh cũng là một người viết sách và một dịch giả. Hiện anh có dự định theo đuổi ngành âm nhạc.', '2023-11-24 19:54:06', '2023-11-24 19:54:06', NULL, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1700880845/gygmgbchkp1u7446w37z.webp'),
(172, 'Ernest Miller Hemingway', 'upload/img/7I7F96amFoUQXP7ngoB8zH5X5PvCy3cj2Uim0aMc.webp', '2023-11-25', 'Ernest Miller Hemingway là một tiểu thuyết gia người Mỹ, nhà văn viết truyện ngắn và là một nhà báo. Ông là một phần của cộng đồng những người xa xứ ở Paris trong thập niên 20 của thế kỷ XX và là một trong những cựu quân nhân trong Chiến tranh thế giới I, sau đó được biết đến qua \"Thế hệ đã mất\".', '2023-11-24 19:55:19', '2023-11-24 19:55:19', NULL, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1700880919/hoiusia7pjgxawdwfbig.webp'),
(173, 'Fredrik Backman', 'upload/img/iZb0XpoXO87X48EcsswalknMpEuZeH0cP6vpfVlo.webp', '2023-11-25', 'Được dịch từ tiếng Anh-Fredrik Backman là một tác giả, blogger và nhà báo chuyên mục người Thụy Điển. Ông đã viết Một người đàn ông được gọi là Ove, Những điều con trai tôi cần biết về thế giới, Bà của tôi yêu cầu tôi nói với bạn rằng bà ấy xin lỗi, Britt-Marie đã ở đây, Beartown, Chúng tôi chống lại bạn, Người lo lắng và Người chiến thắng.', '2023-11-24 19:57:36', '2023-11-24 19:57:36', NULL, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1700881055/funigb64mdwon8a8bxl4.webp'),
(174, 'Yuval Noah Harari', 'upload/img/j03BkB1cKikrCK1EA1UfmZZ52GALNMBJiBTZ1Qkl.webp', '2023-11-25', 'Yuval Noah Harari là một nhà sử học người Israel và là giáo sư Khoa Lịch sử tại Đại học Hebrew Jerusalem. Ông là tác giả của các cuốn sách bán chạy thế giới Sapiens: Lược sử loài người, Homo Deus: Lược sử tương lai và 21 bài học cho thế kỷ 21.', '2023-11-24 19:58:17', '2023-11-24 19:58:17', NULL, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1700881097/w87dhzxwkmo5mfo31aqk.webp'),
(175, 'Nhật', 'upload/img/wWbajn7aAEYv9TyY8JTMuuyhLOMTGAUuN4BTi88J.jpg', '2023-12-20', 'Chào', '2023-12-18 09:30:21', '2023-12-18 10:14:36', '2023-12-18 10:14:36', ''),
(176, 'Nhật', 'upload/img/jBRYZzyvjIhM6xw6bzfWchJC8ekj8NWbD58HtVZj.jpg', '2023-12-13', 'Chào', '2023-12-18 09:31:36', '2023-12-18 10:14:42', '2023-12-18 10:14:42', 'https://res.cloudinary.com/dpobeimdp/image/upload/v1702891897/rg9hbxxvxrusaxn3qwky.jpg'),
(177, 'Bartos Erika', '', '2010-12-18', 'Erika Bartos (Budapest, 1974 bằng ngôn ngữ ký hiệu và in ấn. chữ nổi Braille Loạt truyện cổ tích hoạt hình Hungary. Ngay từ khi bắt đầu sự nghiệp, cô đã tích cực làm việc với trẻ em có hoàn cảnh đặc biệt hoặc mắc bệnh hiểm nghèo. Tác phẩm của ông đã được xuất bản bằng nhiều thứ tiếng, một số truyện của ông có sẵn bằng thay đổi chế độ cũng đã được chuyển thể thành phim hoạt hình, đây là bộ phim đầu tiên kể từ Bộ truyện Bogyó és Babóca loạt tác giả của nó. Anna, Peti và Gergő và Bogyó và Babóca. Trong số những cuốn khác, có cuốn kiến trúc sư , nhà văn–) Người Hungary Ngày 7 tháng 2.', '2023-12-18 10:22:44', '2023-12-18 10:22:44', NULL, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1702894966/iv5uc3df2vn6sqmd1ssl.jpg'),
(178, 'Bartos Erika', '', '2010-12-18', 'Erika Bartos (Budapest, 1974 bằng ngôn ngữ ký hiệu và in ấn. chữ nổi Braille Loạt truyện cổ tích hoạt hình Hungary. Ngay từ khi bắt đầu sự nghiệp, cô đã tích cực làm việc với trẻ em có hoàn cảnh đặc biệt hoặc mắc bệnh hiểm nghèo. Tác phẩm của ông đã được xuất bản bằng nhiều thứ tiếng, một số truyện của ông có sẵn bằng thay đổi chế độ cũng đã được chuyển thể thành phim hoạt hình, đây là bộ phim đầu tiên kể từ Bộ truyện Bogyó és Babóca loạt tác giả của nó. Anna, Peti và Gergő và Bogyó và Babóca. Trong số những cuốn khác, có cuốn kiến trúc sư , nhà văn–) Người Hungary Ngày 7 tháng 2.', '2023-12-18 10:23:41', '2023-12-18 10:23:41', NULL, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1702895022/ylvpf28f6jyazfzfoq7h.jpg'),
(179, 'Fujiko F Fujio', '', '2013-02-14', 'Fujiko Fujio (藤子 不二雄 (Đằng Tử Bất Nhị Hùng) ふじこ ふじお?, IPA: /ɸɯdʒiko ɸɯdʒio/) là bút danh chung của hai nghệ sĩ manga Nhật Bản, người Việt gọi là Ông Hai Phú hay Ông Phú Sĩ. Tên thật của họ là Fujimoto Hiroshi (藤本 弘 (Đằng Bản Hoằng)?)(1 tháng 12 năm 1933 – 23 tháng 9 năm 1996) và Abiko Motoo (安孫子 素雄 (An Tôn Tử Tố Hùng)?)(10 tháng 3 năm 1934 – 7 tháng 4 năm 2022) Năm 1954, hai người đều dùng cái tên \"Fujiko Fujio\" cho tới năm 1987, họ chia tay để theo đuổi con đường sáng tác riêng lẻ và trở thành \"Fujiko F. Fujio\" và \"Fujiko Fujio (A)\".', '2023-12-18 13:29:26', '2023-12-18 13:29:26', NULL, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1702906169/hbb8pbvuaightyrar8k5.jpg'),
(180, 'Jared Diamond', '', '2023-12-19', 'Jared Mason Diamond (sinh ngày 10 tháng 9 năm 1937) là nhà khoa học Mỹ và là tác giả nổi tiếng với các tác phẩm khoa học phổ thông gồm Loài tinh tinh thứ ba (1991); Súng, vi trùng và thép (1997), được trao giải Pulitzer); Sụp đổ (2005);[1] và Thế giới cho đến ngày hôm qua (2012). Sinh trưởng trong một gia đình trí thức có bố là bác sĩ và mẹ là giáo viên, nhạc sĩ kiêm nhà ngôn ngữ học. Sau khi tốt nghiệp khoa học sinh vật học thí nghiệm,', '2023-12-19 16:17:51', '2023-12-19 16:17:51', NULL, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1703002673/s6d6dtzsuruesukmpubt.jpg'),
(181, 'E.H.Gombrich', '', '2023-12-19', 'Ernst Gombrich (1909-2001) sinh ngày 30.3.1909 là một nhà lịch sử nghệ thuật.  Ông sinh ra tại Áo, trở thành công dân Anh quốc năm 1947, phần lớn thời gian làm việc của ông ở nước Anh.  Ông là tác giả của rất nhiều cuốn sách về lịch sử văn hóa và nghệ thuật, trong đó có cuốn Câu chuyện Nghệ thuật (The Story of Art) được coi là một trong những cuốn giới thiệu phổ biến nhất về nghệ thuật thị giác.  Gombrich học Đại học Vienna trước khi tới Anh vào năm 1936, tại đây ông làm trợ lý nghiên cứu tại Viện Warburg, Đại học London.  Trong Thế chiến II, Gombrich làm việc cho BBC World Service, giám sát kênh phát thanh tiếng Đức.  Năm 1945, ông quay trở lại làm việc tại Viện Warburg, trở thành giảng viên rồi thành giáo sư sử học và làm giám đốc học viện từ năm 1959 tới năm 1972.  Ông được bầu làm Viện sĩ Viện hàn lâm Anh năm 1960, phong tước hiệp sĩ năm 1972, huân chương cống hiến năm 1988.  Ông nhận giải thưởng Goethe Prize năm 1994 và Balzan Prize năm 1985 về Lịch sử Nghệ thuật phương Tây.', '2023-12-19 16:40:41', '2023-12-19 16:40:41', NULL, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1703004043/pumnh6olayynfgx8r5xv.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `author_product`
--

CREATE TABLE `author_product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `author_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `author_product`
--

INSERT INTO `author_product` (`id`, `product_id`, `author_id`, `created_at`, `updated_at`) VALUES
(505, 501, 127, '2023-12-15 15:56:09', '2023-12-15 15:56:09'),
(506, 502, 125, '2023-12-15 16:05:34', '2023-12-15 16:05:34'),
(507, 503, 111, '2023-12-16 07:12:15', '2023-12-16 07:12:15'),
(509, 504, 122, '2023-12-17 11:03:46', '2023-12-17 11:03:46'),
(510, 504, 134, '2023-12-17 11:03:46', '2023-12-17 11:03:46'),
(511, 504, 124, '2023-12-17 11:03:46', '2023-12-17 11:03:46'),
(512, 505, 123, '2023-12-18 04:52:55', '2023-12-18 04:52:55'),
(522, 509, 178, '2023-12-18 10:48:02', '2023-12-18 10:48:02'),
(525, 510, 179, '2023-12-18 13:31:55', '2023-12-18 13:31:55'),
(529, 512, 179, '2023-12-18 13:42:36', '2023-12-18 13:42:36'),
(530, 511, 179, '2023-12-18 13:42:49', '2023-12-18 13:42:49'),
(531, 507, 178, '2023-12-18 13:43:06', '2023-12-18 13:43:06'),
(533, 513, 179, '2023-12-18 13:50:27', '2023-12-18 13:50:27'),
(536, 514, 179, '2023-12-18 13:58:14', '2023-12-18 13:58:14'),
(537, 515, 179, '2023-12-18 13:58:25', '2023-12-18 13:58:25'),
(539, 516, 179, '2023-12-18 14:01:38', '2023-12-18 14:01:38'),
(542, 518, 179, '2023-12-18 14:05:50', '2023-12-18 14:05:50'),
(543, 517, 179, '2023-12-18 14:06:05', '2023-12-18 14:06:05'),
(546, 521, 127, '2023-12-18 15:10:58', '2023-12-18 15:10:58'),
(547, 522, 126, '2023-12-18 15:13:09', '2023-12-18 15:13:09'),
(548, 523, 126, '2023-12-18 15:28:02', '2023-12-18 15:28:02'),
(549, 520, 107, '2023-12-19 11:14:06', '2023-12-19 11:14:06'),
(551, 524, 107, '2023-12-19 11:16:48', '2023-12-19 11:16:48'),
(553, 525, 107, '2023-12-19 11:18:38', '2023-12-19 11:18:38'),
(557, 528, 107, '2023-12-19 11:24:49', '2023-12-19 11:24:49'),
(558, 527, 107, '2023-12-19 11:25:04', '2023-12-19 11:25:04'),
(559, 526, 107, '2023-12-19 11:25:20', '2023-12-19 11:25:20'),
(561, 529, 109, '2023-12-19 12:01:02', '2023-12-19 12:01:02'),
(563, 530, 109, '2023-12-19 12:09:27', '2023-12-19 12:09:27'),
(565, 531, 174, '2023-12-19 16:04:18', '2023-12-19 16:04:18'),
(567, 532, 180, '2023-12-19 16:22:20', '2023-12-19 16:22:20'),
(569, 533, 181, '2023-12-19 16:43:02', '2023-12-19 16:43:02'),
(571, 535, 118, '2023-12-19 16:47:01', '2023-12-19 16:47:01'),
(572, 536, 122, '2023-12-19 16:49:33', '2023-12-19 16:49:33'),
(574, 537, 109, '2023-12-20 02:46:58', '2023-12-20 02:46:58'),
(576, 538, 109, '2023-12-20 02:48:35', '2023-12-20 02:48:35'),
(578, 539, 109, '2023-12-20 02:50:50', '2023-12-20 02:50:50'),
(580, 540, 109, '2023-12-20 02:52:55', '2023-12-20 02:52:55'),
(582, 541, 119, '2023-12-20 02:55:41', '2023-12-20 02:55:41'),
(584, 542, 111, '2023-12-20 02:59:10', '2023-12-20 02:59:10'),
(587, 543, 111, '2023-12-20 03:04:11', '2023-12-20 03:04:11'),
(588, 544, 111, '2023-12-20 03:04:20', '2023-12-20 03:04:20'),
(590, 545, 111, '2023-12-20 03:10:37', '2023-12-20 03:10:37'),
(592, 546, 111, '2023-12-20 04:39:57', '2023-12-20 04:39:57'),
(594, 547, 111, '2023-12-20 04:41:30', '2023-12-20 04:41:30'),
(596, 548, 111, '2023-12-20 04:43:29', '2023-12-20 04:43:29');

-- --------------------------------------------------------

--
-- Table structure for table `cart_items`
--

CREATE TABLE `cart_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `amount` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_slug` varchar(255) NOT NULL,
  `category_image` varchar(255) DEFAULT NULL,
  `isVisible` tinyint(1) NOT NULL DEFAULT 1,
  `isPublisher` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_slug`, `category_image`, `isVisible`, `isPublisher`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Chính trị – pháp luật', 'chinh-tri-phap-luat', NULL, 0, 0, '2023-12-15 15:21:47', '2023-12-15 15:21:47', NULL),
(2, 'Khoa học công nghệ – Kinh tế', 'khoa-hoc-cong-nghe-kinh-te', NULL, 0, 0, '2023-12-15 15:21:47', '2023-12-15 15:21:47', NULL),
(3, 'Văn hóa xã hội – Lịch sử', 'van-hoa-xa-hoi-lich-su', NULL, 0, 0, '2023-12-15 15:21:47', '2023-12-15 15:21:47', NULL),
(4, 'Văn học nghệ thuật', 'van-hoc-nghe-thuat', NULL, 1, 0, '2023-12-15 15:21:47', '2023-12-15 15:21:47', NULL),
(5, 'Giáo trình', 'giao-trinh', NULL, 0, 0, '2023-12-15 15:21:47', '2023-12-15 15:21:47', NULL),
(6, 'Truyện, tiểu thuyết', 'truyen-tieu-thuyet', NULL, 1, 0, '2023-12-15 15:21:48', '2023-12-15 15:21:48', NULL),
(7, 'Tâm lý, tâm linh, tôn giáo', 'tam-ly-tam-linh-ton-giao', NULL, 0, 0, '2023-12-15 15:21:48', '2023-12-15 15:21:48', NULL),
(8, 'Sách thiếu nhi', 'sach-thieu-nhi', NULL, 1, 0, '2023-12-15 15:21:48', '2023-12-15 15:21:48', NULL),
(9, 'Khoa học viễn tưởng', 'khoa-hoc-vien-tuong', NULL, 1, 0, '2023-12-15 15:21:48', '2023-12-15 15:21:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category_detail`
--

CREATE TABLE `category_detail` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `item` varchar(50) NOT NULL,
  `category_slug` varchar(50) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_detail`
--

INSERT INTO `category_detail` (`id`, `name`, `item`, `category_slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Pháp luật', 'Luật dân sự', 'chinh-tri-phap-luat', 1, NULL, NULL),
(2, 'Pháp luật', 'Luật hình sự', 'chinh-tri-phap-luat', 1, NULL, NULL),
(3, 'Pháp luật', 'Luật quốc tế', 'chinh-tri-phap-luat', 1, NULL, NULL),
(4, 'Pháp luật', 'Luật kinh tế', 'chinh-tri-phap-luat', 1, NULL, NULL),
(5, 'Chính trị', 'Lịch sử chính trị', 'chinh-tri-phap-luat', 1, NULL, NULL),
(6, 'Chính trị', 'Triết học chính trị', 'chinh-tri-phap-luat', 1, NULL, NULL),
(7, 'Chính trị', 'Hệ thống chính trị', 'chinh-tri-phap-luat', 1, NULL, NULL),
(8, 'Chính trị', 'Lãnh đạo và chính trị gia', 'chinh-tri-phap-luat', 1, NULL, NULL),
(9, 'Khoa học', 'Tự nhiên', 'khoa-hoc-cong-nghe-kinh-te', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category_products`
--

CREATE TABLE `category_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `products_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_products`
--

INSERT INTO `category_products` (`id`, `products_id`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 1, 5, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(2, 1, 3, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(3, 1, 8, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(4, 2, 1, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(5, 3, 1, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(6, 4, 3, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(7, 4, 4, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(8, 5, 3, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(9, 5, 7, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(10, 5, 3, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(11, 6, 8, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(12, 7, 5, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(13, 8, 7, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(14, 9, 7, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(15, 9, 8, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(16, 10, 6, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(17, 10, 3, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(18, 10, 1, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(19, 11, 2, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(20, 11, 4, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(21, 12, 8, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(22, 12, 6, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(23, 13, 4, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(24, 13, 2, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(25, 14, 1, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(26, 15, 7, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(27, 15, 1, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(28, 16, 8, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(29, 16, 2, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(30, 17, 4, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(31, 18, 2, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(32, 19, 3, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(33, 20, 7, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(34, 20, 2, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(35, 21, 7, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(36, 22, 6, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(37, 22, 8, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(38, 22, 1, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(39, 23, 2, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(40, 23, 1, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(41, 23, 7, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(42, 24, 2, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(43, 24, 3, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(44, 25, 5, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(45, 26, 3, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(46, 26, 6, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(47, 27, 8, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(48, 27, 7, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(49, 28, 8, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(50, 28, 8, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(51, 28, 6, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(52, 29, 7, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(53, 29, 2, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(54, 29, 5, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(55, 30, 4, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(56, 30, 7, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(57, 31, 1, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(58, 32, 3, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(59, 32, 4, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(60, 33, 4, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(61, 33, 6, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(62, 34, 1, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(63, 34, 3, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(64, 34, 2, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(65, 35, 8, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(66, 36, 2, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(67, 37, 6, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(68, 37, 1, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(69, 37, 4, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(70, 38, 5, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(71, 39, 2, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(72, 39, 2, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(73, 40, 8, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(74, 41, 4, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(75, 41, 5, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(76, 41, 6, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(77, 42, 2, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(78, 42, 8, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(79, 42, 3, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(80, 43, 7, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(81, 43, 5, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(82, 43, 8, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(83, 44, 3, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(84, 45, 2, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(85, 45, 8, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(86, 45, 5, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(87, 46, 8, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(88, 47, 4, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(89, 47, 1, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(90, 47, 7, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(91, 48, 4, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(92, 49, 1, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(93, 49, 2, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(94, 50, 6, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(95, 51, 7, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(96, 51, 4, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(97, 52, 7, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(98, 52, 8, '2023-12-15 15:21:44', '2023-12-15 15:21:44'),
(99, 53, 2, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(100, 53, 5, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(101, 54, 2, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(102, 55, 5, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(103, 55, 6, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(104, 56, 3, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(105, 56, 4, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(106, 57, 5, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(107, 57, 3, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(108, 58, 1, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(109, 59, 6, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(110, 60, 6, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(111, 60, 3, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(112, 61, 5, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(113, 61, 4, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(114, 61, 5, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(115, 62, 1, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(116, 62, 8, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(117, 63, 8, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(118, 63, 6, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(119, 63, 2, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(120, 64, 8, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(121, 64, 1, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(122, 64, 6, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(123, 65, 6, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(124, 66, 6, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(125, 66, 2, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(126, 67, 7, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(127, 68, 4, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(128, 68, 8, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(129, 68, 6, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(130, 69, 1, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(131, 70, 1, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(132, 70, 6, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(133, 70, 4, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(134, 71, 1, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(135, 71, 7, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(136, 72, 8, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(137, 73, 4, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(138, 73, 3, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(139, 73, 2, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(140, 74, 2, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(141, 74, 7, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(142, 75, 7, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(143, 76, 7, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(144, 77, 1, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(145, 78, 3, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(146, 79, 6, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(147, 80, 4, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(148, 81, 6, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(149, 81, 3, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(150, 81, 2, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(151, 82, 2, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(152, 82, 7, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(153, 82, 7, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(154, 83, 4, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(155, 84, 4, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(156, 84, 2, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(157, 85, 6, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(158, 86, 3, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(159, 87, 4, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(160, 87, 3, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(161, 87, 3, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(162, 88, 3, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(163, 88, 1, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(164, 88, 1, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(165, 89, 5, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(166, 89, 3, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(167, 90, 5, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(168, 90, 8, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(169, 91, 6, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(170, 91, 5, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(171, 91, 1, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(172, 92, 7, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(173, 92, 6, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(174, 92, 6, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(175, 93, 1, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(176, 94, 3, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(177, 95, 6, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(178, 95, 2, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(179, 96, 6, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(180, 96, 2, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(181, 96, 5, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(182, 97, 6, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(183, 97, 3, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(184, 98, 7, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(185, 99, 7, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(186, 100, 6, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(187, 100, 8, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(188, 101, 5, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(189, 101, 3, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(190, 101, 2, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(191, 102, 4, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(192, 102, 6, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(193, 102, 1, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(194, 103, 8, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(195, 103, 3, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(196, 103, 6, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(197, 104, 1, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(198, 104, 5, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(199, 104, 1, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(200, 105, 8, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(201, 106, 2, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(202, 106, 4, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(203, 107, 2, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(204, 107, 5, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(205, 108, 5, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(206, 109, 8, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(207, 109, 7, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(208, 109, 5, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(209, 110, 1, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(210, 111, 8, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(211, 111, 4, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(212, 111, 2, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(213, 112, 5, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(214, 112, 6, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(215, 113, 2, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(216, 114, 2, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(217, 114, 8, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(218, 114, 6, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(219, 115, 7, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(220, 115, 3, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(221, 116, 4, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(222, 117, 7, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(223, 117, 7, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(224, 118, 6, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(225, 119, 4, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(226, 119, 2, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(227, 120, 6, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(228, 120, 8, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(229, 121, 2, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(230, 121, 3, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(231, 121, 5, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(232, 122, 8, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(233, 122, 7, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(234, 122, 6, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(235, 123, 6, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(236, 123, 5, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(237, 124, 4, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(238, 125, 4, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(239, 125, 4, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(240, 125, 6, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(241, 126, 8, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(242, 127, 7, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(243, 127, 2, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(244, 128, 2, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(245, 128, 5, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(246, 129, 2, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(247, 129, 4, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(248, 130, 7, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(249, 131, 2, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(250, 131, 7, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(251, 132, 8, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(252, 132, 2, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(253, 132, 4, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(254, 133, 6, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(255, 133, 7, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(256, 134, 8, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(257, 135, 6, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(258, 135, 4, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(259, 135, 4, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(260, 136, 5, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(261, 137, 7, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(262, 137, 4, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(263, 137, 7, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(264, 138, 5, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(265, 138, 1, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(266, 138, 5, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(267, 139, 5, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(268, 139, 7, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(269, 139, 4, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(270, 140, 6, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(271, 141, 4, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(272, 141, 1, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(273, 141, 4, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(274, 142, 5, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(275, 143, 5, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(276, 143, 5, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(277, 143, 4, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(278, 144, 1, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(279, 144, 6, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(280, 145, 5, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(281, 146, 7, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(282, 146, 6, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(283, 146, 7, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(284, 147, 4, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(285, 147, 3, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(286, 148, 6, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(287, 149, 2, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(288, 149, 8, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(289, 150, 6, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(290, 150, 1, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(291, 150, 2, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(292, 151, 7, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(293, 151, 4, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(294, 151, 4, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(295, 152, 8, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(296, 152, 6, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(297, 153, 6, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(298, 154, 6, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(299, 154, 8, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(300, 154, 5, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(301, 155, 3, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(302, 156, 6, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(303, 156, 1, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(304, 157, 8, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(305, 158, 7, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(306, 159, 5, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(307, 160, 4, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(308, 160, 7, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(309, 160, 1, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(310, 161, 8, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(311, 161, 8, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(312, 162, 4, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(313, 162, 4, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(314, 163, 6, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(315, 163, 5, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(316, 163, 7, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(317, 164, 3, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(318, 164, 8, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(319, 164, 7, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(320, 165, 2, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(321, 165, 5, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(322, 166, 2, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(323, 166, 6, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(324, 166, 2, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(325, 167, 4, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(326, 167, 7, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(327, 167, 1, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(328, 168, 7, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(329, 168, 7, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(330, 169, 6, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(331, 169, 8, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(332, 169, 4, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(333, 170, 4, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(334, 170, 6, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(335, 170, 6, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(336, 171, 8, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(337, 171, 7, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(338, 172, 1, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(339, 172, 4, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(340, 173, 5, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(341, 173, 3, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(342, 173, 8, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(343, 174, 8, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(344, 174, 4, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(345, 175, 5, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(346, 175, 7, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(347, 175, 6, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(348, 176, 6, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(349, 176, 3, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(350, 176, 4, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(351, 177, 4, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(352, 177, 2, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(353, 178, 5, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(354, 179, 4, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(355, 180, 2, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(356, 181, 7, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(357, 181, 5, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(358, 182, 1, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(359, 183, 5, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(360, 183, 3, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(361, 183, 8, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(362, 184, 4, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(363, 184, 4, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(364, 185, 3, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(365, 186, 4, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(366, 186, 3, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(367, 186, 5, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(368, 187, 2, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(369, 188, 2, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(370, 189, 3, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(371, 190, 6, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(372, 191, 1, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(373, 192, 7, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(374, 193, 5, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(375, 194, 2, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(376, 194, 3, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(377, 195, 4, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(378, 196, 1, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(379, 196, 2, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(380, 196, 7, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(381, 197, 4, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(382, 197, 3, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(383, 197, 7, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(384, 198, 7, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(385, 198, 5, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(386, 198, 7, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(387, 199, 8, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(388, 200, 7, '2023-12-15 15:21:45', '2023-12-15 15:21:45'),
(389, 201, 3, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(390, 201, 2, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(391, 202, 3, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(392, 202, 8, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(393, 203, 6, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(394, 203, 8, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(395, 204, 1, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(396, 204, 2, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(397, 205, 3, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(398, 205, 4, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(399, 205, 5, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(400, 206, 3, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(401, 206, 7, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(402, 206, 6, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(403, 207, 8, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(404, 208, 8, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(405, 208, 3, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(406, 208, 5, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(407, 209, 4, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(408, 209, 6, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(409, 210, 7, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(410, 211, 5, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(411, 212, 7, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(412, 212, 4, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(413, 213, 5, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(414, 214, 8, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(415, 214, 5, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(416, 214, 6, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(417, 215, 8, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(418, 215, 8, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(419, 216, 2, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(420, 216, 5, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(421, 217, 3, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(422, 217, 8, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(423, 217, 6, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(424, 218, 5, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(425, 219, 1, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(426, 219, 6, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(427, 220, 2, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(428, 220, 8, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(429, 220, 4, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(430, 221, 2, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(431, 221, 7, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(432, 221, 6, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(433, 222, 3, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(434, 222, 3, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(435, 223, 5, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(436, 223, 8, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(437, 224, 7, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(438, 225, 4, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(439, 225, 4, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(440, 225, 8, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(441, 226, 7, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(442, 227, 5, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(443, 228, 2, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(444, 228, 3, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(445, 228, 8, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(446, 229, 4, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(447, 229, 3, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(448, 229, 8, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(449, 230, 1, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(450, 231, 7, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(451, 231, 3, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(452, 232, 7, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(453, 232, 8, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(454, 232, 8, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(455, 233, 5, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(456, 234, 1, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(457, 235, 6, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(458, 235, 8, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(459, 236, 5, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(460, 236, 1, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(461, 237, 5, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(462, 237, 8, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(463, 237, 2, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(464, 238, 8, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(465, 238, 6, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(466, 238, 5, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(467, 239, 7, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(468, 239, 6, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(469, 239, 8, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(470, 240, 4, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(471, 240, 2, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(472, 240, 6, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(473, 241, 2, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(474, 241, 6, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(475, 242, 5, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(476, 243, 5, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(477, 244, 2, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(478, 244, 6, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(479, 245, 4, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(480, 245, 5, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(481, 245, 1, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(482, 246, 6, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(483, 247, 3, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(484, 248, 7, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(485, 248, 8, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(486, 249, 5, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(487, 250, 5, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(488, 251, 5, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(489, 251, 6, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(490, 252, 1, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(491, 252, 1, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(492, 253, 3, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(493, 253, 2, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(494, 254, 1, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(495, 254, 2, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(496, 255, 6, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(497, 255, 4, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(498, 256, 6, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(499, 257, 8, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(500, 258, 1, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(501, 259, 3, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(502, 260, 3, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(503, 260, 1, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(504, 261, 2, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(505, 262, 1, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(506, 262, 6, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(507, 262, 1, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(508, 263, 5, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(509, 263, 8, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(510, 263, 4, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(511, 264, 4, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(512, 264, 5, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(513, 265, 4, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(514, 266, 4, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(515, 266, 4, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(516, 266, 8, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(517, 267, 7, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(518, 267, 6, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(519, 267, 5, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(520, 268, 5, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(521, 268, 5, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(522, 269, 5, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(523, 269, 8, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(524, 270, 2, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(525, 270, 7, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(526, 270, 6, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(527, 271, 2, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(528, 272, 8, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(529, 273, 5, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(530, 274, 3, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(531, 274, 1, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(532, 275, 6, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(533, 275, 3, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(534, 276, 2, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(535, 276, 4, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(536, 277, 3, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(537, 278, 5, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(538, 278, 1, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(539, 278, 5, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(540, 279, 4, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(541, 280, 7, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(542, 280, 4, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(543, 280, 7, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(544, 281, 8, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(545, 281, 7, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(546, 281, 6, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(547, 282, 1, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(548, 282, 4, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(549, 283, 2, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(550, 284, 5, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(551, 285, 3, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(552, 285, 2, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(553, 285, 7, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(554, 286, 4, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(555, 286, 8, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(556, 287, 6, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(557, 288, 2, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(558, 289, 1, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(559, 290, 3, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(560, 291, 5, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(561, 292, 2, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(562, 293, 8, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(563, 293, 2, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(564, 293, 6, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(565, 294, 7, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(566, 294, 6, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(567, 295, 8, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(568, 296, 4, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(569, 297, 2, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(570, 297, 2, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(571, 298, 7, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(572, 298, 4, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(573, 298, 6, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(574, 299, 5, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(575, 300, 5, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(576, 300, 4, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(577, 300, 6, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(578, 301, 1, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(579, 302, 8, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(580, 302, 8, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(581, 303, 5, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(582, 303, 1, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(583, 303, 6, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(584, 304, 3, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(585, 304, 8, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(586, 304, 6, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(587, 305, 5, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(588, 306, 1, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(589, 306, 8, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(590, 306, 4, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(591, 307, 7, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(592, 308, 8, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(593, 308, 1, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(594, 309, 4, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(595, 309, 6, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(596, 310, 6, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(597, 310, 3, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(598, 311, 1, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(599, 311, 1, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(600, 312, 5, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(601, 312, 7, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(602, 313, 1, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(603, 313, 6, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(604, 314, 1, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(605, 314, 5, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(606, 314, 3, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(607, 315, 4, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(608, 316, 7, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(609, 317, 8, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(610, 317, 4, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(611, 317, 8, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(612, 318, 2, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(613, 318, 1, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(614, 318, 4, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(615, 319, 5, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(616, 319, 3, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(617, 320, 8, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(618, 320, 5, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(619, 320, 4, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(620, 321, 1, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(621, 321, 1, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(622, 321, 2, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(623, 322, 4, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(624, 322, 1, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(625, 322, 4, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(626, 323, 4, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(627, 324, 5, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(628, 324, 5, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(629, 324, 2, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(630, 325, 1, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(631, 325, 4, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(632, 325, 8, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(633, 326, 3, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(634, 327, 3, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(635, 327, 1, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(636, 327, 8, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(637, 328, 7, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(638, 329, 2, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(639, 330, 5, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(640, 331, 2, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(641, 332, 7, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(642, 332, 1, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(643, 332, 2, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(644, 333, 1, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(645, 333, 2, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(646, 334, 2, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(647, 334, 5, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(648, 335, 8, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(649, 335, 2, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(650, 336, 3, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(651, 337, 6, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(652, 338, 7, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(653, 338, 7, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(654, 338, 2, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(655, 339, 6, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(656, 340, 1, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(657, 341, 8, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(658, 341, 4, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(659, 341, 1, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(660, 342, 5, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(661, 342, 6, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(662, 342, 7, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(663, 343, 2, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(664, 344, 4, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(665, 344, 5, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(666, 344, 3, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(667, 345, 3, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(668, 345, 5, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(669, 345, 8, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(670, 346, 8, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(671, 346, 4, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(672, 346, 8, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(673, 347, 5, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(674, 347, 5, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(675, 347, 7, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(676, 348, 2, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(677, 349, 1, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(678, 349, 3, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(679, 349, 1, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(680, 350, 5, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(681, 351, 8, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(682, 351, 5, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(683, 351, 7, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(684, 352, 8, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(685, 353, 3, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(686, 354, 1, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(687, 354, 5, '2023-12-15 15:21:46', '2023-12-15 15:21:46'),
(688, 355, 6, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(689, 355, 8, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(690, 356, 5, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(691, 357, 5, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(692, 357, 2, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(693, 358, 3, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(694, 359, 8, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(695, 360, 5, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(696, 360, 3, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(697, 360, 4, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(698, 361, 5, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(699, 361, 3, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(700, 362, 2, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(701, 363, 1, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(702, 363, 3, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(703, 363, 5, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(704, 364, 7, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(705, 365, 1, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(706, 365, 7, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(707, 365, 6, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(708, 366, 2, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(709, 367, 8, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(710, 368, 6, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(711, 368, 4, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(712, 368, 1, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(713, 369, 7, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(714, 369, 5, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(715, 369, 1, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(716, 370, 7, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(717, 370, 4, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(718, 371, 8, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(719, 372, 1, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(720, 373, 1, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(721, 374, 2, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(722, 374, 4, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(723, 375, 5, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(724, 375, 1, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(725, 375, 3, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(726, 376, 5, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(727, 376, 1, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(728, 376, 7, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(729, 377, 2, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(730, 377, 7, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(731, 377, 1, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(732, 378, 3, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(733, 378, 8, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(734, 378, 1, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(735, 379, 1, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(736, 380, 8, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(737, 380, 1, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(738, 381, 8, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(739, 381, 5, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(740, 381, 5, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(741, 382, 4, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(742, 382, 5, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(743, 382, 3, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(744, 383, 8, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(745, 383, 2, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(746, 383, 4, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(747, 384, 2, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(748, 384, 5, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(749, 384, 5, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(750, 385, 2, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(751, 385, 2, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(752, 386, 6, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(753, 386, 2, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(754, 387, 5, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(755, 388, 8, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(756, 388, 6, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(757, 389, 2, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(758, 390, 4, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(759, 390, 4, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(760, 391, 6, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(761, 392, 4, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(762, 393, 3, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(763, 394, 7, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(764, 395, 4, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(765, 395, 2, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(766, 396, 2, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(767, 397, 5, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(768, 397, 7, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(769, 397, 6, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(770, 398, 6, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(771, 399, 5, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(772, 399, 6, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(773, 399, 5, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(774, 400, 6, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(775, 401, 6, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(776, 402, 4, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(777, 402, 4, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(778, 402, 2, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(779, 403, 2, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(780, 404, 7, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(781, 405, 3, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(782, 406, 4, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(783, 406, 3, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(784, 407, 2, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(785, 407, 8, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(786, 408, 5, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(787, 409, 8, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(788, 409, 5, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(789, 410, 1, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(790, 410, 3, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(791, 411, 1, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(792, 412, 8, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(793, 412, 6, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(794, 413, 5, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(795, 414, 6, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(796, 414, 4, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(797, 414, 1, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(798, 415, 7, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(799, 415, 8, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(800, 415, 3, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(801, 416, 1, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(802, 417, 7, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(803, 418, 3, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(804, 418, 4, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(805, 419, 8, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(806, 420, 3, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(807, 421, 3, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(808, 422, 3, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(809, 422, 1, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(810, 423, 4, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(811, 423, 2, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(812, 423, 7, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(813, 424, 4, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(814, 424, 2, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(815, 425, 8, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(816, 425, 5, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(817, 426, 7, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(818, 426, 5, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(819, 426, 6, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(820, 427, 4, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(821, 428, 2, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(822, 429, 6, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(823, 429, 4, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(824, 429, 5, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(825, 430, 7, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(826, 431, 2, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(827, 431, 1, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(828, 431, 3, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(829, 432, 5, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(830, 432, 3, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(831, 432, 2, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(832, 433, 2, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(833, 434, 7, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(834, 435, 1, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(835, 435, 8, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(836, 436, 1, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(837, 436, 6, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(838, 436, 1, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(839, 437, 5, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(840, 437, 5, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(841, 437, 7, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(842, 438, 8, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(843, 439, 6, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(844, 439, 4, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(845, 439, 5, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(846, 440, 1, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(847, 441, 2, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(848, 441, 6, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(849, 442, 4, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(850, 443, 4, '2023-12-15 15:21:47', '2023-12-15 15:21:47');
INSERT INTO `category_products` (`id`, `products_id`, `category_id`, `created_at`, `updated_at`) VALUES
(851, 444, 6, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(852, 444, 6, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(853, 445, 8, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(854, 446, 6, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(855, 447, 2, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(856, 447, 6, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(857, 447, 7, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(858, 448, 7, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(859, 448, 4, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(860, 449, 3, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(861, 449, 1, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(862, 449, 6, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(863, 450, 5, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(864, 450, 5, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(865, 451, 2, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(866, 451, 1, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(867, 451, 1, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(868, 452, 5, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(869, 452, 6, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(870, 453, 4, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(871, 454, 1, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(872, 454, 8, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(873, 454, 6, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(874, 455, 2, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(875, 455, 1, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(876, 456, 4, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(877, 457, 5, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(878, 458, 6, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(879, 458, 2, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(880, 458, 3, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(881, 459, 4, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(882, 459, 8, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(883, 460, 6, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(884, 460, 2, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(885, 461, 7, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(886, 461, 1, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(887, 462, 7, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(888, 462, 7, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(889, 463, 5, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(890, 464, 4, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(891, 464, 3, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(892, 464, 8, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(893, 465, 3, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(894, 465, 4, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(895, 465, 2, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(896, 466, 8, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(897, 466, 8, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(898, 466, 2, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(899, 467, 2, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(900, 467, 7, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(901, 468, 7, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(902, 469, 3, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(903, 469, 1, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(904, 470, 8, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(905, 470, 7, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(906, 470, 6, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(907, 471, 5, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(908, 472, 7, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(909, 472, 1, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(910, 473, 2, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(911, 474, 1, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(912, 474, 3, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(913, 475, 7, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(914, 476, 8, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(915, 477, 4, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(916, 477, 6, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(917, 477, 7, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(918, 478, 5, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(919, 478, 5, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(920, 479, 6, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(921, 480, 3, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(922, 480, 7, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(923, 480, 4, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(924, 481, 2, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(925, 482, 7, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(926, 482, 2, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(927, 482, 7, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(928, 483, 3, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(929, 483, 1, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(930, 484, 3, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(931, 485, 5, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(932, 485, 6, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(933, 486, 4, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(934, 486, 5, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(935, 487, 7, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(936, 487, 4, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(937, 487, 6, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(938, 488, 6, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(939, 489, 2, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(940, 490, 8, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(941, 491, 2, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(942, 491, 3, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(943, 491, 2, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(944, 492, 1, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(945, 492, 6, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(946, 493, 7, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(947, 493, 1, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(948, 494, 7, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(949, 495, 5, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(950, 496, 4, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(951, 496, 3, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(952, 497, 4, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(953, 497, 4, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(954, 498, 2, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(955, 498, 3, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(956, 499, 3, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(957, 499, 8, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(958, 499, 8, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(959, 500, 2, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(960, 500, 5, '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(961, 504, 5, '2023-12-17 11:03:46', '2023-12-17 11:03:46'),
(962, 504, 9, '2023-12-17 11:03:46', '2023-12-17 11:03:46'),
(966, 509, 8, '2023-12-18 10:48:02', '2023-12-18 10:48:02'),
(968, 510, 6, '2023-12-18 13:31:55', '2023-12-18 13:31:55'),
(970, 512, 6, '2023-12-18 13:42:36', '2023-12-18 13:42:36'),
(971, 512, 8, '2023-12-18 13:42:36', '2023-12-18 13:42:36'),
(972, 511, 8, '2023-12-18 13:42:49', '2023-12-18 13:42:49'),
(973, 511, 6, '2023-12-18 13:42:49', '2023-12-18 13:42:49'),
(974, 507, 8, '2023-12-18 13:43:06', '2023-12-18 13:43:06'),
(975, 507, 3, '2023-12-18 13:43:06', '2023-12-18 13:43:06'),
(976, 507, 4, '2023-12-18 13:43:06', '2023-12-18 13:43:06'),
(977, 513, 8, '2023-12-18 13:50:27', '2023-12-18 13:50:27'),
(978, 513, 9, '2023-12-18 13:50:27', '2023-12-18 13:50:27'),
(979, 513, 6, '2023-12-18 13:50:27', '2023-12-18 13:50:27'),
(980, 514, 8, '2023-12-18 13:58:14', '2023-12-18 13:58:14'),
(981, 514, 9, '2023-12-18 13:58:14', '2023-12-18 13:58:14'),
(982, 514, 6, '2023-12-18 13:58:14', '2023-12-18 13:58:14'),
(983, 515, 8, '2023-12-18 13:58:25', '2023-12-18 13:58:25'),
(984, 515, 6, '2023-12-18 13:58:25', '2023-12-18 13:58:25'),
(985, 515, 9, '2023-12-18 13:58:25', '2023-12-18 13:58:25'),
(986, 516, 8, '2023-12-18 14:01:38', '2023-12-18 14:01:38'),
(987, 516, 9, '2023-12-18 14:01:38', '2023-12-18 14:01:38'),
(988, 516, 6, '2023-12-18 14:01:38', '2023-12-18 14:01:38'),
(989, 518, 8, '2023-12-18 14:05:50', '2023-12-18 14:05:50'),
(990, 518, 6, '2023-12-18 14:05:50', '2023-12-18 14:05:50'),
(991, 518, 9, '2023-12-18 14:05:50', '2023-12-18 14:05:50'),
(992, 517, 8, '2023-12-18 14:06:05', '2023-12-18 14:06:05'),
(993, 517, 6, '2023-12-18 14:06:05', '2023-12-18 14:06:05'),
(994, 517, 9, '2023-12-18 14:06:05', '2023-12-18 14:06:05'),
(995, 520, 6, '2023-12-19 11:14:06', '2023-12-19 11:14:06'),
(996, 520, 3, '2023-12-19 11:14:06', '2023-12-19 11:14:06'),
(997, 524, 6, '2023-12-19 11:16:48', '2023-12-19 11:16:48'),
(998, 524, 3, '2023-12-19 11:16:48', '2023-12-19 11:16:48'),
(999, 525, 4, '2023-12-19 11:18:38', '2023-12-19 11:18:38'),
(1000, 525, 6, '2023-12-19 11:18:38', '2023-12-19 11:18:38'),
(1001, 528, 6, '2023-12-19 11:24:49', '2023-12-19 11:24:49'),
(1002, 528, 4, '2023-12-19 11:24:49', '2023-12-19 11:24:49'),
(1003, 527, 6, '2023-12-19 11:25:04', '2023-12-19 11:25:04'),
(1004, 527, 4, '2023-12-19 11:25:04', '2023-12-19 11:25:04'),
(1005, 526, 6, '2023-12-19 11:25:20', '2023-12-19 11:25:20'),
(1006, 526, 4, '2023-12-19 11:25:20', '2023-12-19 11:25:20'),
(1007, 529, 4, '2023-12-19 12:01:02', '2023-12-19 12:01:02'),
(1008, 529, 3, '2023-12-19 12:01:02', '2023-12-19 12:01:02'),
(1009, 530, 4, '2023-12-19 12:09:27', '2023-12-19 12:09:27'),
(1010, 531, 3, '2023-12-19 16:04:18', '2023-12-19 16:04:18'),
(1011, 532, 7, '2023-12-19 16:22:20', '2023-12-19 16:22:20'),
(1012, 533, 7, '2023-12-19 16:43:02', '2023-12-19 16:43:02'),
(1013, 533, 6, '2023-12-19 16:43:02', '2023-12-19 16:43:02'),
(1014, 537, 3, '2023-12-20 02:46:58', '2023-12-20 02:46:58'),
(1015, 537, 4, '2023-12-20 02:46:58', '2023-12-20 02:46:58'),
(1016, 537, 6, '2023-12-20 02:46:58', '2023-12-20 02:46:58'),
(1017, 538, 3, '2023-12-20 02:48:35', '2023-12-20 02:48:35'),
(1018, 538, 4, '2023-12-20 02:48:35', '2023-12-20 02:48:35'),
(1019, 538, 6, '2023-12-20 02:48:35', '2023-12-20 02:48:35'),
(1020, 539, 4, '2023-12-20 02:50:50', '2023-12-20 02:50:50'),
(1021, 539, 3, '2023-12-20 02:50:50', '2023-12-20 02:50:50'),
(1022, 539, 6, '2023-12-20 02:50:50', '2023-12-20 02:50:50'),
(1023, 540, 3, '2023-12-20 02:52:55', '2023-12-20 02:52:55'),
(1024, 540, 4, '2023-12-20 02:52:55', '2023-12-20 02:52:55'),
(1025, 540, 6, '2023-12-20 02:52:55', '2023-12-20 02:52:55'),
(1026, 541, 3, '2023-12-20 02:55:41', '2023-12-20 02:55:41'),
(1027, 541, 1, '2023-12-20 02:55:41', '2023-12-20 02:55:41'),
(1028, 541, 5, '2023-12-20 02:55:41', '2023-12-20 02:55:41'),
(1029, 542, 3, '2023-12-20 02:59:10', '2023-12-20 02:59:10'),
(1030, 542, 6, '2023-12-20 02:59:10', '2023-12-20 02:59:10'),
(1031, 543, 3, '2023-12-20 03:04:11', '2023-12-20 03:04:11'),
(1032, 543, 4, '2023-12-20 03:04:11', '2023-12-20 03:04:11'),
(1033, 544, 3, '2023-12-20 03:04:20', '2023-12-20 03:04:20'),
(1034, 544, 4, '2023-12-20 03:04:20', '2023-12-20 03:04:20'),
(1035, 545, 3, '2023-12-20 03:10:37', '2023-12-20 03:10:37'),
(1036, 545, 4, '2023-12-20 03:10:37', '2023-12-20 03:10:37'),
(1037, 546, 3, '2023-12-20 04:39:57', '2023-12-20 04:39:57'),
(1038, 546, 4, '2023-12-20 04:39:57', '2023-12-20 04:39:57'),
(1039, 547, 3, '2023-12-20 04:41:30', '2023-12-20 04:41:30'),
(1040, 547, 4, '2023-12-20 04:41:30', '2023-12-20 04:41:30'),
(1041, 548, 3, '2023-12-20 04:43:29', '2023-12-20 04:43:29'),
(1042, 548, 4, '2023-12-20 04:43:29', '2023-12-20 04:43:29');

-- --------------------------------------------------------

--
-- Table structure for table `chude_product`
--

CREATE TABLE `chude_product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `chu_de_id` tinyint(3) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chude_product`
--

INSERT INTO `chude_product` (`id`, `product_id`, `chu_de_id`, `created_at`, `updated_at`) VALUES
(1, 504, 4, '2023-12-17 11:03:46', '2023-12-17 11:03:46'),
(2, 504, 6, '2023-12-17 11:03:46', '2023-12-17 11:03:46'),
(5, 509, 10, '2023-12-18 10:48:02', '2023-12-18 10:48:02');

-- --------------------------------------------------------

--
-- Table structure for table `chu_de`
--

CREATE TABLE `chu_de` (
  `chu_de_id` tinyint(3) UNSIGNED NOT NULL COMMENT 'id chủ đề',
  `chu_de_ma` varchar(50) NOT NULL COMMENT 'mã chủ đề',
  `chu_de_ten` varchar(250) NOT NULL COMMENT 'tên chủ đề (không dấu)',
  `chu_de_ten_vn` varchar(250) NOT NULL COMMENT 'tên chủ đề',
  `chu_de_ten_en` varchar(255) DEFAULT NULL COMMENT 'tên chủ đề tiếng anh',
  `chu_de_tao_moi` timestamp NOT NULL DEFAULT current_timestamp(),
  `chu_de_cap_nhat` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chu_de`
--

INSERT INTO `chu_de` (`chu_de_id`, `chu_de_ma`, `chu_de_ten`, `chu_de_ten_vn`, `chu_de_ten_en`, `chu_de_tao_moi`, `chu_de_cap_nhat`) VALUES
(1, '1', 'Free ship', 'Free ship', 'Free ship', '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(2, '2', 'Free ship Extra', 'Free ship Extra', 'Free ship Extra', '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(3, '3', 'Khuyen mai khung', 'Khuyến mãi khủng', 'Khuyen mai khung', '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(4, '4', 'Mua nhieu giam nhieu', 'Mua nhiều giảm nhiều', 'Mua nhieu giam nhieu', '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(5, '5', 'Re vo dich', 'Rẻ vô địch', 'Re vo dich', '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(6, '6', 'Sale upto 40%', 'Sale upto 40%', 'Sale upto 40%', '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(7, '7', 'Sale upto 50%', 'Sale upto 50%', 'Sale upto 50%', '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(8, '8', 'Sale upto 60%', 'Sale upto 60%', 'Sale upto 60%', '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(9, '9', 'Sale upto 70%', 'Sale upto 70%', 'Sale upto 70%', '2023-12-15 15:21:47', '2023-12-15 15:21:47'),
(10, '10', 'San pham ban chay', 'Sản phẩm bán chạy', 'Sale upto 70%', '2023-12-15 15:21:47', '2023-12-15 15:21:47');

-- --------------------------------------------------------

--
-- Table structure for table `comments_post`
--

CREATE TABLE `comments_post` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `admin_id` bigint(20) UNSIGNED DEFAULT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) DEFAULT NULL,
  `message` text NOT NULL,
  `isVisible` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comments_product`
--

CREATE TABLE `comments_product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `admin_id` bigint(20) UNSIGNED DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) DEFAULT NULL,
  `message` text NOT NULL,
  `isVisible` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `user_id`, `name`, `email`, `subject`, `message`, `completed_at`, `created_at`, `updated_at`) VALUES
(2, NULL, 'Le Nhat', 'Nhatforgm@gmail.com', 'Chương trình khuyến mãi', 'Cập nhập khuyến mãi sản phẩm liệu có theo các dịp sự kiện hay không?', '2023-12-18 15:58:41', '2023-12-18 08:37:48', '2023-12-18 15:58:41'),
(3, NULL, 'Nishant Sharma', 'nishant.developer22@gmail.com', 'Khác', 'Hi,\r\n\r\nI was just browsing your website and I came up with a great plan to re-develop your website using the latest technology to generate additional revenue and beat your opponents. (cffbook.shop)\r\n\r\nI\'m an excellent web developer capable of almost anything you can come up with, and my costs are affordable for nearly everyone.\r\n\r\nI would be happy to send you \"Quotes\", “Proposal” Past work Details, \"Our Packages\", and “Offers”!\r\n\r\nThanks in advance,\r\nNishant Sharma (Business Development Executive)', NULL, '2023-12-18 19:48:39', '2023-12-18 19:48:39');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `describe` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `attributes` longtext NOT NULL,
  `priority` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event_name`, `start_date`, `end_date`, `describe`, `status`, `attributes`, `priority`, `created_at`, `updated_at`) VALUES
(21, 'Giáng sinh', '2023-12-19 22:11:00', '2023-12-26 22:11:00', 'Giáng sinh an lành', 1, '{\"imageHeader\":[\"https:\\/\\/res.cloudinary.com\\/dpobeimdp\\/image\\/upload\\/v1702998736\\/sc0eb0id9gt1urwd5nok.jpg\",\"https:\\/\\/res.cloudinary.com\\/dpobeimdp\\/image\\/upload\\/v1702999110\\/jkn8s9rtrksree9nqnxb.jpg\",\"https:\\/\\/res.cloudinary.com\\/dpobeimdp\\/image\\/upload\\/v1702999113\\/tto0jz5bz84riuf7nxxa.jpg\"],\"imageFooter\":[\"https:\\/\\/res.cloudinary.com\\/dpobeimdp\\/image\\/upload\\/v1702998739\\/hmhtgdwkuwetvejzl5cp.jpg\"],\"imageLeft\":[\"https:\\/\\/res.cloudinary.com\\/dpobeimdp\\/image\\/upload\\/v1702998742\\/yemvl2xudrqjd7g0orqf.jpg\"],\"imageRight\":[\"https:\\/\\/res.cloudinary.com\\/dpobeimdp\\/image\\/upload\\/v1702998745\\/k2cunxyr35jnlci66cw7.jpg\"],\"colorEvent\":\"#ff0000\"}', 3, '2023-12-19 15:12:23', '2023-12-19 15:22:41');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_08_25_094233_create_admin_table', 1),
(6, '2023_09_18_071413_create_categories_table', 1),
(7, '2023_09_18_071614_create_products_table', 1),
(8, '2023_09_18_072214_create_orders_table', 1),
(9, '2023_09_18_072832_create_order_deital_table', 1),
(10, '2023_09_18_073218_create_cart_items_table', 1),
(11, '2023_09_18_075123_create_categoies_products_table', 1),
(12, '2023_09_20_070013_create_category_detail_table', 1),
(13, '2023_09_23_115545_create_author_table', 1),
(14, '2023_09_23_115559_create_author_product_table', 1),
(15, '2023_10_12_122713_create_events_table', 1),
(16, '2023_10_15_152221_create_posts_category_table', 1),
(17, '2023_10_15_153148_create_posts_table', 1),
(18, '2023_10_20_144740_create_post_comments_table', 1),
(19, '2023_10_21_051602_create_comments_product', 1),
(20, '2023_10_21_051626_create_comments_post', 1),
(21, '2023_10_31_064927_create_chu_de_table', 1),
(22, '2023_11_04_153818_add_notification_sent_to_orders', 1),
(23, '2023_11_08_051106_create_chude_product_table', 1),
(24, '2023_11_08_161057_add_deleted_at', 1),
(25, '2023_11_08_161334_add_stripe_session_id_at', 1),
(26, '2023_11_10_082301_create_vouchers_table', 1),
(27, '2023_11_12_092752_create_statistics_table', 1),
(28, '2023_11_13_164630_create_sessions_table', 1),
(29, '2023_11_18_101756_add_soft_deletes', 1),
(30, '2023_11_18_232631_add_usage_count_column_to_vouchers_table', 1),
(31, '2023_11_22_130306_create_contacts_table', 1),
(32, '2023_11_22_234946_delete_post_comments', 1),
(33, '2023_11_25_074646_add_image_author', 1),
(34, '2023_11_29_223415_add_status_to_admin', 1),
(35, '2023_12_06_223748_create_reviews_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `total_price` decimal(8,2) NOT NULL,
  `recipient_name` varchar(255) DEFAULT NULL,
  `recipient_phone` varchar(11) DEFAULT NULL,
  `recipient_address` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `type_payment` tinyint(4) NOT NULL DEFAULT 0,
  `viewed` tinyint(1) NOT NULL DEFAULT 0,
  `order_code` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `notification_sent` tinyint(1) NOT NULL DEFAULT 0,
  `stripe_session_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `total_price`, `recipient_name`, `recipient_phone`, `recipient_address`, `status`, `type_payment`, `viewed`, `order_code`, `created_at`, `updated_at`, `notification_sent`, `stripe_session_id`) VALUES
(33, 114, 414.00, 'nguyễn quang sang', '0352767274', '32 / Xã Thạnh Hòa / Huyện Phụng Hiệp / Hậu Giang (Nhà riêng)', 0, 2, 0, 'ORD13059482', '2023-12-20 08:06:38', '2023-12-20 08:07:02', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `order_code` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `order_id`, `product_id`, `order_code`, `product_name`, `amount`, `price`, `created_at`, `updated_at`) VALUES
(40, 33, 507, 'ORD13059482', 'Khu rừng trong trai', 1, 103200.00, '2023-12-20 08:06:38', '2023-12-20 08:06:38'),
(41, 33, 509, 'ORD13059482', 'Berry & Dolly (Bộ 3 Tập)', 1, 244200.00, '2023-12-20 08:06:38', '2023-12-20 08:06:38'),
(42, 33, 510, 'ORD13059482', 'nobita và người khổng lồ xanh', 1, 29000.00, '2023-12-20 08:06:38', '2023-12-20 08:06:38');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_slug` varchar(255) NOT NULL,
  `post_excerpt` varchar(255) NOT NULL,
  `post_thumbnail` varchar(255) NOT NULL,
  `post_content` text NOT NULL,
  `isHot` tinyint(1) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `published_at` datetime NOT NULL,
  `admin_id` bigint(20) UNSIGNED NOT NULL,
  `post_category_id` bigint(20) UNSIGNED NOT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `likes` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `post_title`, `post_slug`, `post_excerpt`, `post_thumbnail`, `post_content`, `isHot`, `status`, `published_at`, `admin_id`, `post_category_id`, `meta_title`, `meta_description`, `views`, `likes`, `created_at`, `updated_at`, `deleted_at`) VALUES
(17, 'Những cuốn sách hay về ngày nhà giáo', 'nhung-cuon-sach-hay-ve-ngay-nha-giao', 'NXB Kim Đồng', 'https://res.cloudinary.com/dpobeimdp/image/upload/v1702915239/prvyzu2jkjplhracwv40.jpg', '<p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><strong style=\"box-sizing:border-box;font-family:Roboto !important;font-size:14px !important;\">Nhân dịp kỷ niệm Ngày Nhà giáo Việt Nam 20-11, xin giới thiệu đến bạn đọc những cuốn sách hay về nghề giáo, tình thầy trò, về gương sáng thầy cô trong sự nghiệp trồng người.</strong></p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:center;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><img style=\"border-style:none;border-width:0px;box-sizing:border-box;font-family:Roboto !important;font-size:14px !important;margin:0px;max-width:100%;vertical-align:middle;\" src=\"https://file.hstatic.net/200000343865/file/truong_8b5d01d687b943249f1992a8cc74fb21_grande.jpg\" width=\"600\" height=\"271\"></p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">“Nghề thầy” (NXB Hội Nhà văn): Sách của nhà giáo dục, nhà hoạt động văn hóa nổi tiếng Hoàng Đạo Thúy, được xuất bản lần đầu tiên năm 1944, đến nay vẫn còn vẹn nguyên giá trị với những triết lý giáo dục sâu sắc. Điển hình như tác giả cho rằng nếu học sinh đến trường chỉ để “học đọc, học viết, học tính, để thi đỗ, để rồi đi làm...” là “sai lạc cả mục đích giáo dục”. Hay nghề giáo không chỉ dạy học mà là khai sáng kiêm hoạt động xã hội… Cuốn sách được viết như sự sẻ chia chuyện nghề của một người thầy, nhưng đến nay rất nhiều các vấn đề tác giả đặt ra và bàn luận vẫn được quan tâm.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">“Mái trường thân yêu” (NXB Tổng hợp TP Hồ Chí Minh): Là tác phẩm của thầy giáo Lê Khắc Hoan, kể câu chuyện có thật về học sinh tên Việt, vốn từ thị xã chuyển về trường huyện Lâm Thao do hoàn cảnh gia đình. Việt ở cùng bà nội và làm quen với thầy cô, các bạn, môi trường học tập mới. Việt vốn là học sinh học giỏi, nhất là môn toán; nhưng chưa hòa nhập được ở trường mới, nên xảy ra biết bao chuyện bi hài. Cũng từ đó, người đọc hòa cùng câu chuyện chân thật và cảm động về tình thầy trò, tình bạn ở một ngôi trường trong thời chiến tranh bom đạn...</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">“Những người thầy trong sử Việt” (NXB Kim Đồng): Các tác giả Nguyễn Quốc Tín - Nguyễn Huy Thắng - Nguyễn Như Mai đưa người đọc tìm hiểu về những người thầy đặc biệt trong lịch sử. Đó là câu chuyện cuộc đời vinh quang và thăng trầm của cụ Lê Văn Thịnh, Trạng nguyên khai khoa đầu tiên, hầu học cho Thái tử Càn Đức, con vua Lý Thánh Tông. Hay câu chuyện về người thầy được tôn vinh là “vạn thế sư biểu” Chu Văn An. Hoặc chân dung họa sĩ Tardieu đã dành nửa cuối cuộc đời xây dựng Trường Cao đẳng Mỹ thuật Đông Dương…</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">“Từ bục giảng tới văn đàn - Chân dung 25 người thầy” (NXB Trẻ): Cuốn sách được tác giả Trần Hữu Tá kể về 25 giáo sư với tấm lòng đạo đức, tâm huyết với nghề vào nửa đầu thế kỷ 20. Ngoại trừ giáo sư Dương Quảng Hàm và Trương Vĩnh Ký thì 23 giáo sư khác đều là đồng nghiệp của tác giả nên bên cạnh giới thiệu các cống hiến, tác giả còn kể lại các kỷ niệm riêng, nói về tính cách, nhân phẩm và đời sống thường ngày của các thầy.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">“Ông giáo làng trên tầng gác mái” (NXB Thế giới): Là tự truyện của tác giả Nguyễn Thế Vinh. Ông là một trong những người thầy đại diện cho nỗ lực phi thường, lạc quan giữa nghịch cảnh và trên hết đó là lòng kiên nhẫn, sự trách nhiệm, nghiêm khắc nhưng luôn dành trọn yêu thương cho bao thế hệ học trò.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">“Tôi học đại học” (NXB Tổng hợp TP Hồ Chí Minh): Là cuốn tự truyện nổi tiếng của nhà văn - Nhà giáo ưu tú Nguyễn Ngọc Ký, người thầy với nghị lực phi thường dù bị liệt hai tay từ năm 4 tuổi, đã viết bằng chân. Xuyên suốt cuốn sách, người đọc sẽ thấy sáng ngời một tấm gương vượt khó, tâm hồn lạc quan yêu cuộc sống của một người thông minh, hiền lành nhưng kém may mắn. Quyển sách còn truyền tải thông điệp về sự yêu thương, sẻ chia của những con người nhân hậu, luôn sẵn sàng dang rộng vòng tay để giúp đỡ kẻ khó, những người thầy tâm huyết với sự nghiệp giáo dục…</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">“Thầy cô giáo hạnh phúc sẽ thay đổi thế giới” (NXB Đại học Quốc gia Hà Nội): Thiền sư Thích Nhất Hạnh đã kết hợp với Katherine Weare, một nhà giáo dục, để cho ra đời tác phẩm. Quyển sách là sự tôn vinh dành cho những người đang thực hiện sứ mệnh trồng người với những cống hiến, sự hy sinh thầm lặng. Sách được chia thành 2 tập gồm “Cẩm nang hạnh phúc” và “Đi như một dòng sông”.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">“Đề tặng thầy cô - Lớp học yêu thương” (NXB Trẻ): Sách do nhiều tác giả viết, không chỉ mang đến câu chuyện cảm động về tình thầy trò, tình bạn mà còn đọng lại trong người đọc lòng biết ơn thầy cô bởi những giá trị nhân văn mà người thầy mang đến. Sách là lời tri ân, cảm ơn sâu sắc tới công lao to lớn của thầy cô.</p>', 0, 1, '2023-12-18 00:00:00', 1, 14, 'Những cuốn sách hay về ngày nhà giáo', 'Những cuốn sách hay về ngày nhà giáo', 6, 0, '2023-12-18 16:00:37', '2023-12-19 15:00:16', NULL),
(18, '111', '111', '11', 'https://res.cloudinary.com/dpobeimdp/image/upload/v1702916801/d7peziywvwraadywnw4l.jpg', '<p>a</p>', 0, 1, '2023-12-19 00:00:00', 1, 12, 'Xin chào', '11', 0, 0, '2023-12-18 16:26:39', '2023-12-18 16:29:23', '2023-12-18 16:29:23'),
(19, 'Truyện hay dưới mái trường', 'truyen-hay-duoi-mai-truong', 'Truyện hay dưới mái trường', 'https://res.cloudinary.com/dpobeimdp/image/upload/v1703038436/jfmupbc5q71oeavtnbqg.webp', '<p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><strong style=\"box-sizing:border-box;font-family:Roboto !important;font-size:14px !important;\">Nếu “Những tấm lòng cao cả”, “Người thầy đầu tiên”, “Totto-chan bên cửa sổ” là những cuốn truyện “kinh điển” thế giới về thầy cô, bè bạn, mái trường đã trở nên quá quen thuộc, thì những cuốn sách của tác giả Việt Nam về đề tài này lại mang đến những cảm xúc mới lạ, ấm áp, lay động, dù với lứa tuổi học sinh hay người đọc trưởng thành.</strong></p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:center;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><img style=\"border-style:none;border-width:0px;box-sizing:border-box;font-family:Roboto !important;font-size:14px !important;margin:0px;max-width:100%;vertical-align:middle;\" src=\"https://file.hstatic.net/200000343865/file/mai_truong_571a3b0434824ffebe58f27acb4729ec_grande.jpg\" width=\"600\" height=\"403\"></p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:center;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><span style=\"color:rgb(0,0,204);font-family:Roboto !important;font-size:14px !important;\"><em style=\"box-sizing:border-box;font-family:Roboto !important;font-size:14px !important;\"><i><span style=\"box-sizing:border-box;\">Một số cuốn sách hay viết về thầy cô và mái trường. Ảnh: Vân Hạ</span></i></em></span></p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Một điểm đặc biệt trong các cuốn sách viết về thầy cô và mái trường là phần lớn các tác giả hay chọn điểm nhìn lùi về quá khứ. Phải chăng chỉ khi đã xa tuổi thơ, có độ lắng của thời gian và nhiều chiêm nghiệm của tuổi đời, người ta mới nhận ra rằng những câu chuyện dưới mái trường dù vui dù buồn cũng đều mang lại nhiều ý nghĩa.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Bởi thế, nhiều cuốn sách nhắc nhớ về thầy cô, mái trường được viết dưới dạng hồi ký, hồi ức, truyện kể. Có thể những nhân vật, tình tiết trong truyện được hư cấu, tưởng tượng, nhưng cũng có thể là những câu chuyện thật như nhà văn Duy Khán từng “nói với các con tôi về cuốn sách này” trong tác phẩm “Tuổi thơ im lặng”: “Những chuyện này bố nhớ và mang theo trong trí, nó từng đốt cháy tấm lòng suốt chặng đường bốn mươi mốt tuổi và hai mươi bảy năm cầm súng, làm Người đến suốt mai sau...”.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">“Tuổi thơ im lặng” như được nhà văn Duy Khán rút ruột gan mà viết. Ông viết về người thân trong gia đình, viết về làng, về con mèo, con vện trong nhà, hay cả về những nấm mộ bên đường đi... và trong đó, viết về “Thầy Dung đi xa rồi” đầy xót xa: “Tôi về thăm trường không thấy thầy đâu. Tôi tập viết bằng được lối viết chữ như chữ của thầy. Chữ tôi từ đấy trở đi hoàn toàn giống hệt chữ thầy Dung. Giọng thầy giảng như vẫn văng vẳng đâu đây mà thầy đã đi xa rồi. Nghe nói thầy đi lặng lẽ và đi xa lắm!”.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Cũng ở dạng truyện kể nhưng nhà văn Lê Văn Nghĩa lại chọn lối viết hư cấu kết hợp với nhiều sự kiện, nhân vật có thật nên các tác phẩm như “Mùa hè năm Petrus”, “Tụi lớp Nhứt trường Bình Tây, cây viết máy và con chó nhỏ”, “Mùa tiểu học cuối cùng” đều rất lôi cuốn không chỉ nhờ cốt truyện mà còn nhờ những chi tiết từ đời thực được tái tạo trong văn hư cấu.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Kể về những người bạn của ngôi trường mang tên Petrus Ký, nhà văn Lê Văn Nghĩa từng tâm sự: “Tôi viết quyển truyện này để nhớ những người bạn, nhớ ngôi trường thân yêu, nhớ thầy, nhớ cô, nhớ những kỷ niệm đẹp kể cả những điều không vui. Cứ coi như quyển truyện này là một cách để tôi đi tìm sự an lạc nhằm chống chọi với bệnh tật bằng những kỷ niệm của riêng tôi”.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Viết về những tháng năm đi học thì “Mái trường thân yêu” của tác giả Lê Khắc Hoan là cuốn sách không thể không nhắc đến. Xuất bản lần đầu tiên vào năm 1964, cuốn sách đặc biệt về tình thầy trò trong thời chiến tranh bom đạn khó khăn đã trở thành một hiện tượng trong lịch sử xuất bản Việt Nam lúc bấy giờ. Làm nên sức hút của “Mái trường thân yêu” là câu chuyện có thật được kể với giọng văn giản dị, tự nhiên khiến lớp lớp độc giả những năm ấy và nhiều năm sau này luôn cảm thấy đó là câu chuyện của chính mình, của lớp mình, của trường mình, sinh động, chân thực và đầy cảm động.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Cùng với “Mái trường thân yêu” của Lê Khắc Hoan, “Mái trường xưa” của nhà văn Viết Linh cũng là một trong những tác phẩm được nhiều thế hệ độc giả yêu thích. Những tuổi thơ trong “Mái trường xưa” phải sớm trưởng thành trong những ngày tháng tản cư tránh giặc giã, súng đạn, nhưng niềm lạc quan và tình yêu thương cuộc sống, con người vẫn luôn tha thiết nơi trái tim của các nhân vật thiếu niên.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Cũng hoài nhớ về những năm tháng ấu thơ đi học nơi sơ tán, “Bỏ trốn” của tác giả Bình Ca lại đầy lôi cuốn với những tình tiết vừa hài hước, vừa phiêu lưu, nhưng cũng thật cảm động của “một ngôi trường mà sau bảy mươi năm, chỉ còn lưu giữ trong ký ức của một số ít người. Đó là Trại Nhi đồng Khe Khao, nhà trẻ nội trú đầu tiên của ngành giáo dục mầm non nước Việt Nam Dân chủ Cộng hòa”. Đọc “Bỏ trốn”, độc giả không khỏi bật cười trước những “thủ thuật đối phó” với thầy cô của đám “nhất quỷ, nhì ma, thứ ba học trò” đầy nghịch ngợm, ma lanh.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Không lùi về quá khứ để viết về tuổi thơ dưới mái trường, cuốn sách thiếu nhi đầu tiên viết về chuyện học online thời Covid - “Cơ Bản là Cơ Bản” - thật hài hước và sống động về chuyện học trực tuyến của học trò thời nay. Song, “Cơ Bản là Cơ Bản” không chỉ đơn giản viết về những tình tiết vui nhộn mà còn là câu chuyện xúc động của tình bạn, tình người và mở ra thế giới văn hóa giữa dân gian và hiện đại, giữa miền ngược và miền xuôi cho độc giả khám phá.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Trong những cuốn sách đề tài về mái trường còn có bộ ba tập “Nhật ký cô giáo” của tác giả Hồ Yên Thục với “Học kỳ xuân”, “Học kỳ hè”, “Học kỳ thu” đã mở ra những góc nhìn thú vị về môi trường đại học mà ở đó cũng có biết bao câu chuyện đầy cung bậc cảm xúc hỉ nộ ái ố. Điểm đặc biệt là bộ sách được viết bởi giọng văn dí dỏm, lôi cuốn về thầy và trò trong thời công nghệ 4.0: “Tôi thực sự yêu mến sinh viên của mình. Hằng ngày được ngắm những tâm hồn trong sáng và những trái tim thơ ngây là hạnh phúc ngập tràn. Tôi thương các em vô cùng vì cuộc đời xô đẩy cho em va vấp quá sớm. Vì em đã cho tôi cảm nhận gần hết những đắng chát và chua cay trong bài luận em viết. Mong rằng ngày mai trời đẹp và những con người mong manh ấy không vỡ vụn ra khi thấy bảng điểm tôi chăm chút từng con số”.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Bộ sách “Nhật ký cô giáo” cũng như nhiều cuốn sách viết về mái trường khác đều cho thấy giáo dục học sinh, sinh viên không chỉ là dạy kiến thức và hoàn thành công việc được giao mà còn rèn nhân cách, hướng đến xây dựng con người biết chia sẻ, biết tri ân, sống có trách nhiệm và có ích trong đời.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:right;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><em style=\"box-sizing:border-box;font-family:Roboto !important;font-size:14px !important;\"><i>Nguồn: Hà Nội Mới</i></em></p>', 0, 1, '2023-12-20 00:00:00', 1, 11, 'Truyện hay dưới mái trường', 'Truyện hay dưới mái trường', 20, 0, '2023-12-18 16:29:19', '2023-12-20 05:20:19', NULL),
(20, '111', '111', '111', 'https://res.cloudinary.com/dpobeimdp/image/upload/v1702960707/i5xs8s4a1ce9sw5uqyzq.jpg', '<p>12</p>', 0, 1, '2023-12-20 00:00:00', 1, 12, 'Xin chào', 'Xin chào', 0, 0, '2023-12-19 04:38:26', '2023-12-19 04:38:31', '2023-12-19 04:38:31'),
(21, 'Năng Lực Tự Chữa Lành – Những Thứ Không Giết Chết Được Bạn, Sẽ Khiến Bạn Càng Thêm Mạnh Mẽ!', 'nang-luc-tu-chua-lanh-nhung-thu-khong-giet-chet-duoc-ban-se-khien-ban-cang-them-manh-me', 'Amak Books', 'https://res.cloudinary.com/dpobeimdp/image/upload/v1703034660/jkipjonrlcxb2hum0mnu.jpg', '<p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);border-width:0px;box-sizing:border-box;color:rgb(45, 45, 45);font-family:Roboto;font-feature-settings:inherit;font-kerning:inherit;font-optical-sizing:inherit;font-size:14px;font-stretch:inherit;font-style:normal;font-variant-alternates:inherit;font-variant-caps:normal;font-variant-east-asian:inherit;font-variant-ligatures:normal;font-variant-numeric:inherit;font-variant-position:inherit;font-variation-settings:inherit;font-weight:400;letter-spacing:normal;line-height:inherit;margin:0px 0px 20px;orphans:2;outline:0px;padding:0px;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;vertical-align:baseline;white-space:normal;widows:2;word-spacing:0px;\"><em style=\"border-width:0px;box-sizing:border-box;font-family:inherit;font-feature-settings:inherit;font-kerning:inherit;font-optical-sizing:inherit;font-size:14px;font-stretch:inherit;font-variant:inherit;font-variation-settings:inherit;font-weight:inherit;line-height:inherit;margin:0px;outline:0px;padding:0px;vertical-align:baseline;\"><i>“Buổi tối tôi thường khó ngủ, trằn trọc bởi vô vàn chuyện phiền não. Tôi muốn quên đi tất cả, nhưng không thể nào làm được. Hôm sau thức giấc, cả người lơ mơ đầu óc nặng trịch, rồi tôi lại phải trải qua một ngày trong mệt mỏi mơ màng. Cứ lặp đi lặp lại như thế, tôi thấy mình sắp phát điên rồi.”</i></em></p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);border-width:0px;box-sizing:border-box;color:rgb(45, 45, 45);font-family:Roboto;font-feature-settings:inherit;font-kerning:inherit;font-optical-sizing:inherit;font-size:14px;font-stretch:inherit;font-style:normal;font-variant-alternates:inherit;font-variant-caps:normal;font-variant-east-asian:inherit;font-variant-ligatures:normal;font-variant-numeric:inherit;font-variant-position:inherit;font-variation-settings:inherit;font-weight:400;letter-spacing:normal;line-height:inherit;margin:0px 0px 20px;orphans:2;outline:0px;padding:0px;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;vertical-align:baseline;white-space:normal;widows:2;word-spacing:0px;\">Bạn có thấy câu chuyện này rất quen không? Chúng ta thường thấy mọi người xung quanh hoặc bản thân phiền não vì những vấn đề tương tự?</p><figure class=\"image\" style=\"height:auto;\"><img class=\"aligncenter wp-image-2743 size-full\" style=\"aspect-ratio:448/600;border-width:0px;box-sizing:border-box;clear:both;display:block;font-family:inherit;font-feature-settings:inherit;font-kerning:inherit;font-optical-sizing:inherit;font-size:14px;font-stretch:inherit;font-style:inherit;font-variant:inherit;font-variation-settings:inherit;font-weight:inherit;line-height:inherit;margin:0px auto;max-width:100%;outline:0px;padding:0px;text-align:center;vertical-align:middle;\" src=\"https://amak.vn/wp-content/uploads/2023/03/nang-luc-tu-chua-lang-2.jpeg\" alt=\"nang-luc-tu-chua-lanh-1\" width=\"448\" height=\"600\" decoding=\"async\" title=\"Năng Lực Tự Chữa Lành - Những thứ không giết chết được bạn, sẽ khiến bạn càng thêm mạnh mẽ! 1\"></figure><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);border-width:0px;box-sizing:border-box;color:rgb(45, 45, 45);font-family:Roboto;font-feature-settings:inherit;font-kerning:inherit;font-optical-sizing:inherit;font-size:14px;font-stretch:inherit;font-style:normal;font-variant-alternates:inherit;font-variant-caps:normal;font-variant-east-asian:inherit;font-variant-ligatures:normal;font-variant-numeric:inherit;font-variant-position:inherit;font-variation-settings:inherit;font-weight:400;letter-spacing:normal;line-height:inherit;margin:0px 0px 20px;orphans:2;outline:0px;padding:0px;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;vertical-align:baseline;white-space:normal;widows:2;word-spacing:0px;\">Mỗi khi gặp trắc trở trong cuộc sống, bị khó khăn quật ngã, bị kẻ khác chế nhạo, bị mất niềm tin, chúng ta phải làm gì? Lẽ nào buông xuôi để mặc mọi chuyện ngày càng tồi tệ hơn? Đương nhiên không thể, chuyện mà chúng ta cần làm, chính là chữa lành niềm tin đã vụn vỡ, đứng lên từ khó khăn, rút ra bài học từ thất bại và tiếp tục bước đi. Muốn trở nên kiên cường, chúng ta buộc phải bồi đắp “<a style=\"background-color:rgba(0, 0, 0, 0);border-width:0px;box-sizing:border-box;color:rgb(1, 135, 99);cursor:pointer;font-family:inherit;font-feature-settings:inherit;font-kerning:inherit;font-optical-sizing:inherit;font-size:14px;font-stretch:inherit;font-style:inherit;font-variant:inherit;font-variation-settings:inherit;font-weight:inherit;line-height:inherit;margin:0px;outline:0px;padding:0px;text-underline-offset:3px;transition:all 0.3s ease 0s;vertical-align:baseline;\" href=\"https://amakstore.vn/products/nang-luc-chua-lanh\" rel=\"nofollow noopener\" target=\"_blank\"><u>Năng lực tự chữa lành</u></a>” sau mỗi thương tổn và khổ đau.</p><figure class=\"image\" style=\"height:auto;\"><img class=\"aligncenter size-full wp-image-2742\" style=\"aspect-ratio:600/449;border-width:0px;box-sizing:border-box;clear:both;display:block;font-family:inherit;font-feature-settings:inherit;font-kerning:inherit;font-optical-sizing:inherit;font-size:14px;font-stretch:inherit;font-style:inherit;font-variant:inherit;font-variation-settings:inherit;font-weight:inherit;line-height:inherit;margin:0px auto;max-width:100%;outline:0px;padding:0px;text-align:center;vertical-align:middle;\" src=\"https://amak.vn/wp-content/uploads/2023/03/nang-luc-tu-chua-lang-3.jpeg\" alt=\"nang-luc-tu-chua-lanh-1\" width=\"600\" height=\"449\" decoding=\"async\" title=\"Năng Lực Tự Chữa Lành - Những thứ không giết chết được bạn, sẽ khiến bạn càng thêm mạnh mẽ! 2\"></figure><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);border-width:0px;box-sizing:border-box;color:rgb(45, 45, 45);font-family:Roboto;font-feature-settings:inherit;font-kerning:inherit;font-optical-sizing:inherit;font-size:14px;font-stretch:inherit;font-style:normal;font-variant-alternates:inherit;font-variant-caps:normal;font-variant-east-asian:inherit;font-variant-ligatures:normal;font-variant-numeric:inherit;font-variant-position:inherit;font-variation-settings:inherit;font-weight:400;letter-spacing:normal;line-height:inherit;margin:0px 0px 20px;orphans:2;outline:0px;padding:0px;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;vertical-align:baseline;white-space:normal;widows:2;word-spacing:0px;\">Thất bại nhất thời không có nghĩa là thất bại mãi mãi, thành công tạm thời không có nghĩa là vĩnh viễn thành công. Bởi vậy đừng sợ hãi thất bại và trắc trở, càng không cần sợ những tổn thương từ chúng, học cách tích cực tìm kiếm phương pháp, để sau khi chữa lành, những vết thương ấy trở thành bộ “áo giáp” kiên cố bảo vệ bạn.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);border-width:0px;box-sizing:border-box;color:rgb(45, 45, 45);font-family:Roboto;font-feature-settings:inherit;font-kerning:inherit;font-optical-sizing:inherit;font-size:14px;font-stretch:inherit;font-style:normal;font-variant-alternates:inherit;font-variant-caps:normal;font-variant-east-asian:inherit;font-variant-ligatures:normal;font-variant-numeric:inherit;font-variant-position:inherit;font-variation-settings:inherit;font-weight:400;letter-spacing:normal;line-height:inherit;margin:0px 0px 20px;orphans:2;outline:0px;padding:0px;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;vertical-align:baseline;white-space:normal;widows:2;word-spacing:0px;\">Sách đã được <a style=\"background-color:rgba(0, 0, 0, 0);border-width:0px;box-sizing:border-box;color:rgb(1, 135, 99);cursor:pointer;font-family:inherit;font-feature-settings:inherit;font-kerning:inherit;font-optical-sizing:inherit;font-size:14px;font-stretch:inherit;font-style:inherit;font-variant:inherit;font-variation-settings:inherit;font-weight:inherit;line-height:inherit;margin:0px;outline:0px;padding:0px;text-underline-offset:3px;transition:all 0.3s ease 0s;vertical-align:baseline;\" href=\"https://amak.vn/\"><strong style=\"border-width:0px;box-sizing:border-box;font-family:inherit;font-feature-settings:inherit;font-kerning:inherit;font-optical-sizing:inherit;font-size:14px;font-stretch:inherit;font-style:inherit;font-variant:inherit;font-variation-settings:inherit;line-height:inherit;margin:0px;outline:0px;padding:0px;vertical-align:baseline;\"><u>Amakbooks</u></strong></a> phát hành rộng rãi trên toàn quốc.</p>', 0, 1, '2023-12-21 00:00:00', 1, 11, 'Năng Lực Tự Chữa Lành – Những Thứ Không Giết Chết Được Bạn, Sẽ Khiến Bạn Càng Thêm Mạnh Mẽ!', 'Năng Lực Tự Chữa Lành – Những Thứ Không Giết Chết Được Bạn, Sẽ Khiến Bạn Càng Thêm Mạnh Mẽ!', 3, 0, '2023-12-20 01:10:58', '2023-12-20 03:05:29', NULL),
(22, 'Những tín hiệu vui sau hội sách quốc tế FRANKFURT', 'nhung-tin-hieu-vui-sau-hoi-sach-quoc-te-frankfurt', 'Những tín hiệu vui sau hội sách quốc tế FRANKFURT', 'https://res.cloudinary.com/dpobeimdp/image/upload/v1703034873/fakismzxe8tn078hb4rx.jpg', '<p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><strong style=\"box-sizing:border-box;font-family:Roboto !important;font-size:14px !important;\">“Những miền lưu dấu - Cảnh Việt trong văn chương” của NXB Kim Đồng là cuốn sách duy nhất của Việt Nam có tên trong danh mục tác phẩm đáng chú ý nhất năm 2023 dành cho thanh, thiếu nhi “The White Ravens” tại Hội sách quốc tế Frankfurt lần thứ 75.</strong></p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:center;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><img style=\"border-style:none;border-width:0px;box-sizing:border-box;font-family:Roboto !important;font-size:14px !important;margin:0px;max-width:100%;vertical-align:middle;\" src=\"https://file.hstatic.net/200000343865/file/anh-3-hoi-sach-frankfurt_9905ae6f2e1f4978af0a5977698eaa3c_grande.jpg\" width=\"600\" height=\"376\"></p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:center;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><span style=\"color:rgb(0,0,255);font-family:Roboto !important;font-size:14px !important;\"><em style=\"box-sizing:border-box;font-family:Roboto !important;font-size:14px !important;\"><i><span style=\"box-sizing:border-box;\">Gian hàng Nhà Xuất bản Kim Đồng tại Hội sách quốc tế Frankfurt lần thứ 75.</span></i></em></span></p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Là hội sách lớn nhất thế giới, Hội sách quốc tế Frankfurt lần thứ 75 (diễn ra từ ngày 18 đến 22-10, tại Đức) với thông điệp “Và câu chuyện vẫn được tiếp nối” đã quy tụ hơn 4.000 đơn vị xuất bản đến từ gần 100 quốc gia, với hàng trăm sự kiện, chương trình giao lưu, gặp gỡ tác giả, hội thảo về sách và xuất bản được tổ chức trực tiếp và trên các nền tảng số.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Năm nay, đoàn Việt Nam đến với Hội sách quốc tế Frankfurt với gần 100 thành viên. Tham dự hội sách, NXB Kim Đồng giới thiệu gần 60 tựa sách thuộc nhiều thể loại sách tranh đương đại, tranh truyện dân gian Việt Nam, văn học, kiến thức, kỹ năng… tới các đối tác và độc giả quốc tế.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Đại diện NXB Kim Đồng đã có gần 30 cuộc gặp với các đối tác bản quyền, qua đó nhiều tựa sách tiềm năng đã được phát hiện, hứa hẹn sẽ mang đến cho độc giả Việt Nam những cuốn sách thú vị từ các nhà xuất bản hàng đầu thế giới trong thời gian tới.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Những vị khách ghé thăm gian hàng của NXB Kim Đồng tại hội sách cũng đã dành nhiều lời khen cho tác phẩm “Lĩnh Nam chích quái”, “Dế mèn phiêu lưu kí” do họa sĩ Tạ Huy Long vẽ minh họa. Một số tựa sách cũng đã nhận được đề nghị mua bản quyền như “Búp sen xanh”, “Lược sử nước Việt bằng tranh”.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Hai cuốn sách tranh của Trang Nguyễn và Jeet Zdũng là “Chang hoang dã - Gấu” và “Chang hoang dã - Voi” cũng nhận được nhiều sự quan tâm của đối tác quốc tế.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:center;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><img style=\"border-style:none;border-width:0px;box-sizing:border-box;font-family:Roboto !important;font-size:14px !important;margin:0px;max-width:100%;vertical-align:middle;\" src=\"https://file.hstatic.net/200000343865/file/anh-6-the-green-lotus-bud-bup-sen-xanh_81d84d34d24c4b72b1469737e9aedf9a_grande.jpg\" width=\"600\" height=\"450\"></p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:center;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><span style=\"color:rgb(0,0,255);font-family:Roboto !important;font-size:14px !important;\"><em style=\"box-sizing:border-box;font-family:Roboto !important;font-size:14px !important;\"><i><span style=\"box-sizing:border-box;\">Ấn bản \"The Green Lotus Bud\" (Búp Sen Xanh) của nhà văn Sơn Tùng, do Phan Thanh Hảo, Diane Fox, Kate Jellema chuyển ngữ, NXB Kim Đồng xuất bản quý III-2023.</span></i></em></span></p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Đặc biệt, tại hội sách, đại diện của Tổ chức Thư viện Thanh niên quốc tế (International Youth Library) ở Munich (Đức) đã thông báo, tác phẩm “Những miền lưu dấu - Cảnh Việt trong văn chương” vinh dự có tên trong danh mục tác phẩm đáng chú ý nhất năm 2023 dành cho thanh, thiếu nhi “The White Ravens”.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Đây là cuốn sách duy nhất của Việt Nam được lựa chọn năm nay, và là 1 trong 200 tác phẩm xuất sắc nhất vượt qua 5.000 tác phẩm được đề cử từ 57 quốc gia trên thế giới, với 37 ngôn ngữ khác nhau. Các chuyên gia đã thẩm định, lựa chọn trên tiêu chí về chủ đề, chất văn chương, hình ảnh đẹp, cách tiếp cận mới mẻ và sáng tạo.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:center;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><img style=\"border-style:none;border-width:0px;box-sizing:border-box;font-family:Roboto !important;font-size:14px !important;margin:0px;max-width:100%;vertical-align:middle;\" src=\"https://file.hstatic.net/200000343865/file/anh-5_canh-viet-trong-van-chuong_fdca7fc88780427f83ed70a727ebbf3e_grande.jpg\" width=\"600\" height=\"400\"></p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:center;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><span style=\"color:rgb(0,0,255);font-family:Roboto !important;font-size:14px !important;\"><em style=\"box-sizing:border-box;font-family:Roboto !important;font-size:14px !important;\"><i><span style=\"box-sizing:border-box;\">Cuốn “Những miền lưu dấu - Cảnh Việt trong văn chương” do tác giả Thanh Nguyệt, Quỳnh Liên biên soạn.</span></i></em></span></p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Trước đây, ấn phẩm “Lĩnh Nam chích quái” và “Cái Tết của mèo con” của NXB Kim Đồng cũng có tên trong danh mục uy tín này. Đây là những tín hiệu vui cho thấy xuất bản phẩm của Việt Nam, đặc biệt là các tác phẩm dành cho thiếu nhi, đang bắt kịp với xu hướng của thế giới.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:right;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><em style=\"box-sizing:border-box;font-family:Roboto !important;font-size:14px !important;\"><i>Nguồn: hanoimoi.vn</i></em></p>', 0, 1, '2023-12-20 00:00:00', 1, 13, 'Những tín hiệu vui sau hội sách quốc tế FRANKFURT', 'Những tín hiệu vui sau hội sách quốc tế FRANKFURT', 1, 0, '2023-12-20 01:13:36', '2023-12-20 03:02:00', NULL),
(23, 'Sách văn học Việt Nam: Muôn nẻo đường \"xuất ngoại\"', 'sach-van-hoc-viet-nam-muon-neo-duong-xuat-ngoai', 'Sách văn học Việt Nam: Muôn nẻo đường \"xuất ngoại\"', 'https://res.cloudinary.com/dpobeimdp/image/upload/v1703035180/b6yqtw8x7sgmrjxqio8x.jpg', '<p>Sách văn học Việt Nam: Muôn nẻo đường \"xuất ngoại\"</p>', 0, 1, '2023-12-20 00:00:00', 1, 13, 'Sách văn học Việt Nam: Muôn nẻo đường \"xuất ngoại\"', 'Sách văn học Việt Nam: Muôn nẻo đường \"xuất ngoại\"', 1, 0, '2023-12-20 01:19:39', '2023-12-20 03:02:07', NULL);
INSERT INTO `posts` (`id`, `post_title`, `post_slug`, `post_excerpt`, `post_thumbnail`, `post_content`, `isHot`, `status`, `published_at`, `admin_id`, `post_category_id`, `meta_title`, `meta_description`, `views`, `likes`, `created_at`, `updated_at`, `deleted_at`) VALUES
(24, 'Sách văn học Việt: Muôn nẻo đường \"xuất ngoại\"', 'sach-van-hoc-viet-muon-neo-duong-xuat-ngoai', 'Sách văn học Việt: Muôn nẻo đường \"xuất ngoại\"', 'https://res.cloudinary.com/dpobeimdp/image/upload/v1703038287/fyg3xnxs1cgmc16eer0a.webp', '<p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><strong style=\"box-sizing:border-box;font-family:Roboto !important;font-size:14px !important;\">Những năm gần đây, sự phát triển của Internet đã làm mờ đi khoảng cách biên giới và rào cản ngôn ngữ giữa các quốc gia. Ngày càng có nhiều tác phẩm văn học của thế giới được giới thiệu ở Việt Nam chỉ sau một vài tháng được xuất bản tại chính quốc và cũng có nhiều tác phẩm văn học Việt Nam đương đại được giới thiệu với các nước bạn trên thế giới...</strong></p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">1. Cuối tháng 10 vừa qua, nhà văn Nguyễn Bình Phương đã có mặt tại Hàn Quốc để tham gia họp báo ra mắt tiểu thuyết \"Mình và Họ\" của ông với phiên bản tiếng Hàn do NXB Asia ấn hành. Tiểu thuyết \"Mình và Họ\" do dịch giả Ha Jae-hong - người đã làm luận văn Tiến sĩ chuyên ngành về Văn học Việt Nam - chuyển ngữ. Tiến sĩ Ha Jae-hong cũng chính là dịch giả đã chuyển ngữ một số tác phẩm văn học Việt Nam tiêu biểu sang tiếng Hàn như: \"Nỗi buồn chiến tranh\" của Bảo Ninh, \"Cánh đồng bất tận\" của Nguyễn Ngọc Tư, \"Chí Phèo\" của Nam Cao.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Theo chia sẻ của dịch giả - Tiến sĩ Ha Jae-hong với truyền thông, chính tác giả của \"Nỗi buồn chiến tranh\" là người đã giới thiệu cho ông tác phẩm \"Mình và Họ\" của nhà văn Nguyễn Bình Phương. Năm 2015, tiểu thuyết \"Mình và Họ\" được Hội Nhà văn Hà Nội trao giải thưởng tác phẩm văn xuôi xuất sắc nhất với đánh giá cao khi Nguyễn Bình Phương \"tiếp tục khai triển lối viết phức tạp, đa tuyến, đa chiều của anh, vừa đẩy nghệ thuật viết tiểu thuyết mang đặc hiệu của tác giả lên một mức độ cao\"…</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:center;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><img style=\"border-style:none;border-width:0px;box-sizing:border-box;font-family:Roboto !important;font-size:14px !important;margin:0px;max-width:100%;vertical-align:middle;\" src=\"https://file.hstatic.net/200000343865/file/1-1700134014945_5af74c7d27aa41ca965c2023dd0fd749_grande.jpg\" width=\"600\" height=\"349\"></p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:center;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><span style=\"color:rgb(0,0,204);font-family:Roboto !important;font-size:14px !important;\"><em style=\"box-sizing:border-box;font-family:Roboto !important;font-size:14px !important;\"><i><span style=\"box-sizing:border-box;\">Nhà văn Nguyễn Bình Phương (hàng đầu, ngồi giữa) tại buổi họp báo ra mắt tiểu thuyết \"Mình và Họ\" phiên bản tiếng Hàn.</span></i></em></span></p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Vậy là đến nay, nhà văn Nguyễn Bình Phương đã có 3 tiểu thuyết được xuất bản ở nước ngoài. Trước đó, hai tiểu thuyết khác của ông cũng đã được dịch, giới thiệu ở Pháp gồm: \"Thoạt kỳ thuỷ\" (NXB Riveneuve) xuất bản năm 2014 và \"Trí nhớ suy tàn\" (NXB Riveneuve) xuất bản năm 2019.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Theo Thông tấn xã Việt Nam, tại buổi ra mắt tiểu thuyết \"Mình và Họ\", dịch giả - Tiến sĩ Ha Jae-hong nhấn mạnh rằng: \"Giao lưu văn học và tác phẩm văn học là điều vô cùng quan trọng. Ca nhạc hay phim ảnh là văn hóa nghe nhìn nên rất khó có thể hiểu sâu về nội dung hàm chứa bên trong, nhưng văn học thì khác. Văn học phản ánh hiện thực của cuộc sống xã hội. Thông qua văn học và những tác phẩm cụ thể như \"Mình và Họ\", người Hàn Quốc có thể hiểu sâu sắc, chính xác về văn hóa, đặc tính của dân tộc Việt Nam...\".</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Có thể nói, do có những đặc điểm tương đồng về lịch sử - văn hóa, nên đến nay đã có khá nhiều tác giả - tác phẩm văn học tiêu biểu của Việt Nam được giới thiệu tại Hàn Quốc. Ngoài những tên tuổi lớn được dịch và giới thiệu ở nhiều nước trên thế giới như Nguyễn Du, Nguyễn Trãi, Hồ Chí Minh, Võ Nguyên Giáp, Tô Hoài, Nam Cao… là những nhà văn đương đại như Hữu Thỉnh, Bảo Ninh, Nguyễn Quang Thiều, Nguyễn Bình Phương, Ma Văn Kháng, Hồ Anh Thái, Mai Văn Phấn, Lê Minh Khuê, Nguyễn Nhật Ánh, Y Ban, Nguyễn Ngọc Tư, Đỗ Bích Thúy... Trong đó, \"Nỗi buồn chiến tranh\" là một tác phẩm gây được tiếng vang lớn tại Hàn Quốc khi năm 2018, nhà văn Bảo Ninh vinh dự được trao \"Giải thưởng Văn học châu Á ở Hàn Quốc\" trong khuôn khổ \"Liên hoan Văn học châu Á lần thứ 2\" được tổ chức ở Gwangju, Hàn Quốc.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Trước đó, 2 tác phẩm văn học Việt Nam cũng về đề tài chiến tranh là \"Áo trắng\" của Nguyễn Văn Bổng và \"Nếu anh còn được sống\" của Văn Lê đã được độc giả Hàn Quốc biết đến từ khá sớm. Vào đầu năm 2022, tiểu thuyết \"Chúa đất\" của nhà văn Đỗ Bích Thúy cũng đã được giới thiệu tại Hàn Quốc qua bản dịch của Giáo sư Ahn Kyong-hwan. Việc dịch, xuất bản tiểu thuyết \"Chúa đất\" của tác giả Đỗ Bích Thúy do tổ chức \"Hanse Yes 24 Foundation\" tài trợ và được \"Hanse Yes 24 Foundation\" chuyển tới các thư viện khắp Hàn Quốc.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">2.Hội sách Quốc tế Frankfurt lần thứ 75 diễn ra vào trung tuần tháng 10 vừa qua tại thành phố Frankfurt (Đức) đã thu hút trên 4.000 đơn vị xuất bản của gần 100 quốc gia tham gia. Tại hội sách có quy mô lớn nhất thế giới này, có hàng trăm sự kiện, chương trình giao lưu, gặp gỡ tác giả, hội thảo về sách và xuất bản được tổ chức trực tiếp và trên các nền tảng số. Tham gia sự kiện này, Việt Nam có một số đơn vị xuất bản tham gia như: Cục Xuất bản, In và Phát hành (Bộ Thông tin và Truyền thông), Sở Thông tin và Truyền thông TP. Hồ Chí Minh, NXB Trẻ, NXB Kim Đồng, Công ty Đại Trường Phát.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Để chuẩn bị cho sự có mặt tại Hội sách Quốc tế Frankfurt, trước đó vài tháng, NXB Trẻ đã ấn hành 2 tác phẩm của nhà văn Nguyễn Nhật Ánh bằng tiếng Anh để giới thiệu đến bạn đọc cũng như các đồng nghiệp của thế giới đó là \"Chúc một ngày tốt lành\" (Have a good day) và \"Ngồi khóc trên cây\" (Crying in trees) do Nhã Thuyên và Kaitlin Rees chuyển ngữ. Hai tác phẩm xuất bản bằng tiếng Anh mới này đã làm phong phú hơn danh mục các tác phẩm đã được dịch sang tiếng Anh cũng như được bán bản quyền cho đối tác ở các nước trên thế giới của các nhà văn nổi tiếng Việt Nam như Nguyễn Nhật Ánh, Bảo Ninh, Nguyễn Ngọc Tư, Nguyễn Ngọc Thuần, Dương Thụy... mang thương hiệu NXB Trẻ.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Trước đó, vào năm 2018, NXB Trẻ đã tổ chức dịch, in ấn và phát hành một tác phẩm nổi tiếng khác của nhà văn Nguyễn Nhật Ánh sang tiếng Anh đó là \"Tôi thấy hoa vàng trên cỏ xanh\" (I see yellow flowers in the green grass) cũng do Nhã Thuyên và &nbsp;Kaitlin Rees chuyển ngữ. Sau đó, vào năm 2020, tác phẩm đã được NXB Hannacroix Creek Books mua tác quyền để xuất bản, phát hành tại Mỹ và hiện tác phẩm này đang được bán trên sàn thương mại điện tử Amazon.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Có lẽ đến nay, nhà văn Nguyễn Nhật Ánh vẫn là tác giả Việt có nhiều tác phẩm được mua bản quyền, xuất bản ở nhiều nước trên thế giới bậc nhất Việt Nam với các tác phẩm như: \"Mắt biếc\" (tiếng Nhật Bản, 2004), \"Cho tôi xin một vé đi tuổi thơ\" (tiếng Thái Lan, 2011; tiếng Hàn Quốc, 2013; tiếng Anh, 2014; tiếng Nhật Bản, 2020), \"Cô gái đến từ hôm qua\" (được chọn đưa vào chương trình dạy tiếng Việt của Đại học Moskva M.V. Lomonosov, 2012), \"Tôi thấy hoa vàng trên cỏ xanh\" (tiếng Nhật Bản, 2017; tiếng Anh, 2018), \"Đi qua hoa cúc\" (tiếng Nhật Bản, 2020), \"Tôi là Bêtô\" (tiếng Hàn Quốc, 2021).</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:center;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><img style=\"border-style:none;border-width:0px;box-sizing:border-box;font-family:Roboto !important;font-size:14px !important;margin:0px;max-width:100%;vertical-align:middle;\" src=\"https://file.hstatic.net/200000343865/file/2-1700134015351_89db3f4e012f4063a9e7f35368732ee1_grande.jpg\" width=\"600\" height=\"398\"></p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:center;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><span style=\"color:rgb(0,0,204);font-family:Roboto !important;font-size:14px !important;\"><em style=\"box-sizing:border-box;font-family:Roboto !important;font-size:14px !important;\"><i><span style=\"box-sizing:border-box;\">Cán bộ NXB Kim Đồng làm việc với đối tác ở hội sách Frankfurt (Đức) tháng 10/2023</span></i></em></span></p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Có thể thấy, việc NXB Trẻ đi tiên phong trong việc tự tổ chức dịch thuật và giới thiệu tác phẩm của mình sang những ngôn ngữ khác để giới thiệu đến bạn đọc thế giới và các đối tác xuất bản đã đem đến cho chính họ những cơ hội hợp tác mới cũng như quảng bá văn học Việt Nam ra nước ngoài. Cũng với quan điểm này, tham gia hội sách Frankfurt năm nay (cũng là năm thứ 2 NXB Kim Đồng tham gia), đơn vị này cũng đã giới thiệu gần 60 tựa sách thuộc nhiều thể loại: sách tranh đương đại, tranh truyện dân gian Việt Nam, sách văn học… tới các đối tác và độc giả quốc tế.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Có một tin vui đó là, tại Hội sách, Đại diện của Tổ chức Thư viện Thanh niên Quốc tế (International Youth Library) ở Munich (Đức) đã đến thông báo trực tiếp tại gian hàng của NXB Kim Đồng về việc tác phẩm \"Những miền lưu dấu - Cảnh Việt trong văn chương\" vinh dự có tên trong danh mục tác phẩm đáng chú ý nhất năm 2023 dành cho thanh thiếu nhi. Đây cũng là cuốn sách duy nhất của Việt Nam được lựa chọn năm nay, trở thành 1 trong 200 tác phẩm xuất sắc nhất vượt qua 5.000 tác phẩm được đề cử từ 57 quốc gia trên thế giới với 37 ngôn ngữ khác nhau.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Trước đây, ấn phẩm \"Lĩnh Nam chích quái\" và \"Cái Tết của mèo con\" của NXB Kim Đồng cũng từng có tên trong danh mục uy tín này. Đại diện đoàn công tác của NXB Kim Đồng cho biết, một số tựa sách khác cũng được quan tâm và có đề nghị mua bản quyền và được quan tâm như \"Búp sen xanh\" của nhà văn Sơn Tùng, \"Lược sử nước Việt bằng tranh\" (nhóm tác giả) hay tập \"Chang hoang dã - Gấu\" và \"Chang hoang dã - Voi\" của Trang Nguyễn và Jeet Zdũng...</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Đây thực sự là những tín hiệu vui không chỉ riêng với NXB Kim Đồng mà còn cho thấy xu hướng hợp tác, tìm kiếm cơ hội quốc tế là tất yếu của sự phát triển. Việc quảng bá sách - xuất bản phẩm nói chung và văn học Việt Nam nói riêng ở nước ngoài đang được nhiều đơn vị xuất bản chú trọng hơn sẽ đem đến cho các nhà văn cơ hội được giới thiệu tác phẩm của mình ra thế giới khi nó là những tác phẩm xuất sắc.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:right;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><em style=\"box-sizing:border-box;font-family:Roboto !important;font-size:14px !important;\"><i>Nguồn: CAND</i></em></p>', 0, 1, '2023-12-20 00:00:00', 1, 12, 'Sách văn học Việt: Muôn nẻo đường \"xuất ngoại\"', 'Sách văn học Việt: Muôn nẻo đường \"xuất ngoại\"', 0, 0, '2023-12-20 02:11:26', '2023-12-20 02:11:35', '2023-12-20 02:11:35'),
(25, 'Thúc đẩy xuất khẩu sách Việt', 'thuc-day-xuat-khau-sach-viet', 'Thúc đẩy xuất khẩu sách Việt', 'https://res.cloudinary.com/dpobeimdp/image/upload/v1703038404/vim741zrjn7xzaflh8f2.webp', '<div class=\"article-content\" style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><div class=\"article-body\" style=\"box-sizing:border-box;line-height:24px;\"><p style=\"box-sizing:border-box;font-family:Roboto !important;font-size:14px !important;margin:0px 0px 15px;text-align:justify;\"><strong style=\"box-sizing:border-box;font-family:Roboto !important;font-size:14px !important;\">Trở về từ Hội chợ sách quốc tế Frankfurt - hội chợ sách thường niên có quy mô lớn nhất thế giới, lần thứ 75 tại Đức vào cuối tháng 10 vừa qua, các đơn vị xuất bản và người làm sách nước nhà đang háo hức và tất bật thực hiện những dự án hợp tác được thỏa thuận thành công tại sự kiện này.</strong></p><p style=\"box-sizing:border-box;font-family:Roboto !important;font-size:14px !important;margin:0px 0px 15px;text-align:justify;\">Nhiều năm qua, những người làm sách Việt Nam đã góp mặt ngày càng đông tại Hội chợ sách quốc tế Frankfurt. Không chỉ có nhà quản lý, đơn vị sự nghiệp công lập, đơn vị 100% vốn nhà nước mà nhiều đơn vị xuất bản tư nhân năng nổ góp mặt. Trước đây, các đơn vị làm sách đến với sự kiện này chỉ mong muốn gặp gỡ đối tác, giao lưu với các nhà xuất bản quốc tế hay mua bản quyền những cuốn sách “hot” về xuất bản tại Việt Nam. Thế nhưng vài năm nay, đặc biệt năm 2023, những người làm sách Việt Nam đã tăng cường giới thiệu và bán khá tốt bản quyền sách của tác giả nước nhà cho đối tác quốc tế.</p><p style=\"box-sizing:border-box;font-family:Roboto !important;font-size:14px !important;margin:0px 0px 15px;text-align:center;\"><img style=\"border-style:none;border-width:0px;box-sizing:border-box;font-family:Roboto !important;font-size:14px !important;margin:0px;max-width:100%;vertical-align:middle;\" src=\"https://file.hstatic.net/200000343865/file/chang_hoang_da_54483732704f4594a284bbf9ea5560ba_grande_83d93bf75334441da15dd372309ebd9d_grande.jpg\" width=\"600\" height=\"412\"></p><p style=\"box-sizing:border-box;font-family:Roboto !important;font-size:14px !important;margin:0px 0px 15px;text-align:justify;\">Điển hình, trong gần 60 tựa sách được giới thiệu tại gian hàng của Nhà Xuất bản Kim Đồng, có 2 tựa sách nhận được đề nghị mua bản quyền là “Búp sen xanh”, “Lược sử nước Việt bằng tranh”. Các cuốn “Lĩnh Nam chích quái”, “Dế mèn phiêu lưu ký” do Tạ Huy Long minh họa hay bộ “Chang hoang dã - Gấu” và “Chang hoang dã - Voi”... nhận được nhiều lời khen và quan tâm của đối tác quốc tế. Nhà Xuất bản Chính trị quốc gia Sự thật, Công ty cổ phần Sách Thái Hà... cũng đã gặp gỡ hàng chục đối tác xuất bản của Anh, Pháp, Trung Quốc... và có được thỏa thuận mua, bán bản quyền sách, trong đó có sách của tác giả Việt Nam.</p><p style=\"box-sizing:border-box;font-family:Roboto !important;font-size:14px !important;margin:0px 0px 15px;text-align:justify;\">Tuy là những con số nhỏ trong sự kiện quy tụ 4.000 đơn vị xuất bản đến từ 95 quốc gia và vùng lãnh thổ song sự nỗ lực, năng nổ, chuẩn bị kỹ với những tựa sách chất lượng của các đơn vị xuất bản Việt Nam đáng được ghi nhận. Nhờ đó, góp phần đưa sách của tác giả Việt Nam được biết đến và xuất khẩu ra thế giới.</p><p style=\"box-sizing:border-box;font-family:Roboto !important;font-size:14px !important;margin:0px 0px 15px;text-align:right;\"><em style=\"box-sizing:border-box;font-family:Roboto !important;font-size:14px !important;\"><i>Nguồn: hanoimoi.vn</i></em></p></div></div><div class=\"social-network-actions-outside text-right\" style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;orphans:2;padding:15px 0px 15px 15px;text-align:right !important;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><div class=\"fb-send\" style=\"box-sizing:border-box;\" data-href=\"https://nxbkimdong.com.vn/blogs/hoat-dong/thuc-day-xuat-khau-sach-viet\">&nbsp;</div><div class=\"fb-like fb_iframe_widget\" style=\"box-sizing:border-box;display:inline-block;position:relative;\" data-href=\"https://nxbkimdong.com.vn/blogs/hoat-dong/thuc-day-xuat-khau-sach-viet\" data-layout=\"button\" data-action=\"like\" data-size=\"small\" data-show-faces=\"true\" data-share=\"true\" fb-xfbml-state=\"rendered\" fb-iframe-plugin-query=\"action=like&amp;app_id=&amp;container_width=833&amp;href=https%3A%2F%2Fnxbkimdong.com.vn%2Fblogs%2Fhoat-dong%2Fthuc-day-xuat-khau-sach-viet&amp;layout=button&amp;locale=vi_VN&amp;sdk=joey&amp;share=true&amp;show_faces=true&amp;size=small\">&nbsp;</div></div><p><br>&nbsp;</p>', 0, 1, '2023-12-20 00:00:00', 1, 12, 'Thúc đẩy xuất khẩu sách Việt', 'Thúc đẩy xuất khẩu sách Việt', 1, 0, '2023-12-20 02:12:22', '2023-12-20 03:02:10', NULL),
(26, 'Đưa sách tới cộng đồng, lan tỏa văn hóa đọc', 'dua-sach-toi-cong-dong-lan-toa-van-hoa-doc', 'Đưa sách tới cộng đồng, lan tỏa văn hóa đọc', 'https://res.cloudinary.com/dpobeimdp/image/upload/v1703038574/evhwdn1rui0nq3b0ulsf.webp', '<p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><strong style=\"box-sizing:border-box;font-family:Roboto !important;font-size:14px !important;\">Cùng với việc chú trọng đầu tư nâng cao chất lượng sách, đáp ứng tốt hơn nhu cầu của độc giả, thời gian qua, các nhà xuất bản, đơn vị phát hành đã tổ chức nhiều chương trình, hoạt động nhằm lan tỏa tri thức, khơi gợi tình yêu sách và xây dựng thói quen đọc sách trong cộng đồng.</strong></p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:center;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><img style=\"border-style:none;border-width:0px;box-sizing:border-box;font-family:Roboto !important;font-size:14px !important;margin:0px;max-width:100%;vertical-align:middle;\" src=\"https://file.hstatic.net/200000343865/file/khucthiphuong_1e7116a4a9364843986c9c7cb6e03d9c_grande.jpg\" width=\"598\" height=\"400\"></p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:center;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><span style=\"color:rgb(0,0,204);font-family:Roboto !important;font-size:14px !important;\"><em style=\"box-sizing:border-box;font-family:Roboto !important;font-size:14px !important;\"><i><span style=\"box-sizing:border-box;\">Bà Khúc Thị Hoa Phượng, Giám đốc, Tổng Biên tập NXB Phụ nữ Việt Nam nói chuyện khuyến đọc với các nữ phạm nhân ở Thanh Hóa</span></i></em></span></p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><strong style=\"box-sizing:border-box;font-family:Roboto !important;font-size:14px !important;\">Tạo dựng không gian đọc ở cơ sở</strong></p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Khẳng định vị trí, vai trò và tầm quan trọng của sách đối với việc nâng cao kiến thức, kỹ năng, phát triển tư duy, giáo dục, rèn luyện nhân cách con người; khuyến khích và phát triển phong trào đọc sách trong cộng đồng, tạo dựng môi trường đọc thuận lợi; hình thành thói quen đọc sách trong gia đình, trường học, cơ quan, tổ chức; góp phần xây dựng xã hội học tập, thời gian vừa qua, nhiều tủ sách, không gian văn hóa đọc đã được các NXB phối hợp với các tổ chức, cá nhân xây dựng, phục vụ nhu cầu đọc sách, tìm hiểu, nghiên cứu, tham khảo, trở thành những không gian văn hóa thân thuộc với mọi người.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Ông Nguyễn Thái Bình, Phó Giám đốc NXB Chính trị Quốc gia Sự thật cho biết, đề án trang bị sách cho cơ sở xã, phường, thị trấn mà NXB là cơ quan thường trực đã được Ban Bí thư chỉ đạo triển khai từ năm 2009 đến nay, góp phần không nhỏ vào việc tạo dựng các không gian văn hóa đọc cho đông đảo các tầng lớp nhân dân ở cơ sở. Từ các đợt trang bị sách của Đề án, sách đã nhanh chóng được đưa tới từng xã, từng phường, từng thị trấn, phân bổ tới từng thư viện, nhà văn hóa phục vụ cán bộ và bà con đọc, tìm hiểu, ứng dụng vào công tác, vào đời sống sinh hoạt, sản xuất rất hiệu quả.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Ứng dụng công nghệ xuất bản điện tử cũng là một hoạt động nhằm giữ gìn, chấn hưng văn hóa đọc trong cộng đồng, nhất là với những người trẻ. Ý thức rất rõ về nhiệm vụ, trách nhiệm đó, NXB Chính trị Quốc gia Sự thật đã không ngừng tìm hiểu, nghiên cứu, đầu tư công sức, trang bị cơ sở vật chất, cơ sở hạ tầng để số hóa dữ liệu, xây dựng hệ thống xuất bản điện tử. Trang sachquocgia.vn sắp được giới thiệu tới bạn đọc, công chúng với nhiều cuốn sách hay phục vụ đông đảo các tầng lớp bạn đọc quan tâm.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Theo ông Nguyễn Thái Bình, nhằm khích lệ phong trào đọc sách, hàng trăm nghìn tài khoản đọc miễn phí các tủ sách điện tử như Tủ sách Bảo vệ nền tảng tư tưởng của Đảng; Tủ sách Học tập và làm theo tư tưởng, đạo đức, phong cách Hồ Chí Minh; Tủ sách Chi bộ… đã được NXB trao tặng cho cán bộ, đảng viên tại nhiều tỉnh, thành trên cả nước.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Bà Vũ Thị Quỳnh Liên, Phó Giám đốc, Tổng Biên tập NXB Kim Đồng chia sẻ: “Hơn 66 năm qua, đơn vị đã luôn nỗ lực, tích cực trong các hoạt động khuyến đọc, phát triển văn hóa đọc trong cộng đồng. Việc trao tặng các Tủ sách cho trẻ em nghèo, các tỉnh vùng sâu vùng xa, các địa bàn còn nhiều khó khăn được thực hiện thường xuyên”. Chương trình Một triệu cuốn sách cho trẻ em nghèo khởi động năm 2013 là một trong những chương trình như thế. Qua hơn 3 năm triển khai, chương trình đã mang sách đến hơn 2.000 điểm trường tại các địa phương khó khăn nhất trong cả nước. Tháng 9.2023, NXB đã trao tặng 50 tủ sách Kim Đồng với 25.000 cuốn sách cho thiếu nhi tại năm tỉnh, thành: Đồng Tháp, Tiền Giang, Long An, Cần Thơ, Vĩnh Long. NXB Kim Đồng cũng là đơn vị bảo trợ, thường xuyên tặng sách cho các thư viện.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:center;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><img style=\"border-style:none;border-width:0px;box-sizing:border-box;font-family:Roboto !important;font-size:14px !important;margin:0px;max-width:100%;vertical-align:middle;\" src=\"https://file.hstatic.net/200000343865/file/hdgiaoluu_675421d6941a4c58b32be43646f0c4cc_grande.jpg\" width=\"348\" height=\"400\"></p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:center;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><span style=\"color:rgb(0,0,204);font-family:Roboto !important;font-size:14px !important;\"><em style=\"box-sizing:border-box;font-family:Roboto !important;font-size:14px !important;\"><i><span style=\"box-sizing:border-box;\">Nhiều hoạt động giao lưu, giới thiệu sách được các đơn vị xuất bản tổ chức</span></i></em></span></p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><strong style=\"box-sizing:border-box;font-family:Roboto !important;font-size:14px !important;\">Nuôi dưỡng niềm đam mê đọc sách</strong></p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Nhiều hoạt động với hình thức đa dạng, phong phú, cách làm sáng tạo, như ra mắt, giới thiệu sách mới, tổ chức gặp gỡ, giao lưu tác giả, chuyên gia để trao đổi về ý nghĩa, giá trị các cuốn sách; trưng bày triển lãm sách; tổ chức các cuộc thi giới thiệu sách… đã được các đơn vị xuất bản quan tâm thực hiện.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Bà Trương Ngọc Lan, cán bộ truyền thông NXB Phụ nữ Việt Nam cho biết, để phát triển văn hóa đọc ra cộng đồng, bên cạnh việc thành lập quỹ sách Khuyến đọc để tặng sách tới những thư viện phục vụ cộng đồng, thư viện trường học, thư viện trại giam… NXB cũng tổ chức các buổi giao lưu giới thiệu sách (online và offline), đưa tác phẩm, tác giả đến gần hơn với bạn đọc; các buổi nói chuyện chuyên đề thông qua các dòng sách mà đơn vị có thế mạnh như nuôi dạy con, học ngoại ngữ, bảo vệ môi trường, giới và phát triển… “Cùng với sự chung tay của các cấp Hội Liên hiệp Phụ nữ Việt Nam, các cơ quan, các nhân tố khuyến đọc trong cả nước, 5 năm trở lại đây, trung bình mỗi năm NXB Phụ nữ Việt Nam tổ chức khoảng 50 sự kiện khuyến đọc lớn/nhỏ. Đặc biệt, hai năm qua, NXB nhận được sự đồng hành của nhiều cá nhân, tổ chức nên ngày càng có nhiều chương trình tặng sách và nói chuyện khuyến đọc, tạo sức lan tỏa mạnh mẽ trong cộng đồng”, bà Trương Ngọc Lan chia sẻ.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Việc khuyến đọc trong trại giam cũng đang có xu hướng phát triển mạnh, tính đến tháng 11.2023, NXB Phụ nữ Việt Nam đã phối hợp cùng Hội Phụ nữ các tỉnh Thanh Hóa, Bình Định, Bắc Giang, Gia Lai, Thư viện tỉnh Thái Nguyên tổ chức tặng sách và nói chuyện khuyến đọc tại sáu trại giam với các chủ đề như <em style=\"box-sizing:border-box;font-family:Roboto !important;font-size:14px !important;\"><i>Chọn một con đường, chọn một lối đi, Hạnh phúc hay không do ta quyết định…</i></em></p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Trong khi đó, theo đại diện NXB Kim Đồng, thời gian qua, chuỗi sự kiện Từ cuốn sách nhỏ đến thếgiới lớn và chương trình Sách Kim Đồng từ0 đến có, đã có hàng trăm chương trình giao lưu, trải nghiệm giúp các em học sinh tìm hiểu về sách, quá trình làm ra một cuốn sách… được tổ chức. Từ năm 2022, NXB Kim Đồng hợp tác với dự án Sách Nhà mình khai thác chất liệu từ trong sách Kim Đồng để tổ chức các hoạt động, trò chơi tương tác tại các trường học trên địa bàn TP Hà Nội, Hải Phòng… Từ cuối tháng 5.2023, chuỗi sự kiện Góc đọc sách hè và tiếp đó là Góc đọc cuối tuần đã được tổ chức vào sáng thứ Bảy hằng tuần tại NXB Kim Đồng. Độc giả nhí được đọc sách, tham gia các hoạt động tương tác, làm thí nghiệm khoa học, học kỹ năng mới… với sự đồng hành của các chuyên gia, nhà văn, nhà thơ, họa sĩ. NXB Kim Đồng hy vọng, những gợi mở ấy sẽ góp phần nuôi dưỡng niềm yêu thích đọc sách và khám phá tri thức của các bạn nhỏ mỗi ngày.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Có thể thấy, ngày càng nhiều NXB quan tâm và tích cực triển khai các hoạt động xây dựng văn hóa đọc trong cộng đồng, từ đó thực hiện tốt nhiệm vụ phát triển văn hóa đọc - yếu tố vô cùng quan trọng để phát triển ngành Xuất bản. Đây cũng là nội dung mà Bí thư Trung ương Đảng, Trưởng ban Tuyên giáo Trung ương Nguyễn Trọng Nghĩa đã đặt ra tại Đại hội Đại biểu Hội Xuất bản Việt Nam khóa V vừa qua.&nbsp;</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:right;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><em style=\"box-sizing:border-box;font-family:Roboto !important;font-size:14px !important;\"><i>Nguồn: baovanhoa.vn</i></em></p>', 0, 1, '2023-12-20 00:00:00', 1, 13, 'Đưa sách tới cộng đồng, lan tỏa văn hóa đọc', 'Đưa sách tới cộng đồng, lan tỏa văn hóa đọc', 1, 0, '2023-12-20 02:16:13', '2023-12-20 03:02:22', NULL),
(27, 'Khi nhà văn yêu mèo', 'khi-nha-van-yeu-meo', 'Thanh niên', 'https://res.cloudinary.com/dpobeimdp/image/upload/v1703038675/h9alxb2bdsngymtyvofh.jpg', '<p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><em style=\"box-sizing:border-box;font-family:Roboto !important;font-size:14px !important;\"><i><strong style=\"box-sizing:border-box;font-family:Roboto !important;font-size:14px !important;\">Từng là chủ bút nhóm Vòm me xanh của Báo Mực Tím, nhà văn Gia Bảo (hội viên Hội Nhà văn TP.HCM) dù đã có nhiều cuốn sách về người lớn nhưng chị vẫn không quên mảng sách cho thiếu nhi.</strong></i></em></p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Sự nâng niu trẻ em và tình yêu thương loài vật - đặc biệt là loài mèo - của Gia Bảo thể hiện rất rõ trong hai tác phẩm của chị vừa ra mắt độc giả là Soái ca Mèo Mái Ngói và Nông trại Hoa Đậu Biếc (NXB Kim Đồng). Ở đó, chị kể về mèo với những câu chuyện hướng thiện, ngộ nghĩnh đáng yêu phù hợp tâm lý trẻ em.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:center;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><img style=\"border-style:none;border-width:0px;box-sizing:border-box;font-family:Roboto !important;font-size:14px !important;margin:0px;max-width:100%;vertical-align:middle;\" src=\"https://file.hstatic.net/200000343865/file/19c-1700920448367232721474_01780c19e03549488128fa0a6b0325f4_grande.jpg\" width=\"600\" height=\"420\"></p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:center;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><span style=\"color:rgb(0,0,204);font-family:Roboto !important;font-size:14px !important;\"><em style=\"box-sizing:border-box;font-family:Roboto !important;font-size:14px !important;\"><i><span style=\"box-sizing:border-box;\">Nhà văn Gia Bảo ký tặng độc giả tại buổi ra mắt sách sáng 25.11 ở Đường sách TP.HCM</span></i></em></span></p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Chẳng hạn, chuyện chị Mèo được về quê ở với vợ chồng thầy giáo Lai, khi nhìn thấy đĩa cá rô bí chiên, đúng lúc bụng đói meo nên Mèo nghĩ đơn giản: \"Mình đói thì mình ăn thôi\" và ăn ngon lành. Nhưng ngay sau đó, dù bụng vẫn còn réo, miệng thì thòm thèm nhưng Mèo sợ người lớn bắt quả tang, đánh giá không tốt sẽ \"mất tư cách\", nên dừng lại. Lúc bị chủ nhà phát hiện, biết lỗi lớn nên Mèo cố gắng chuộc lỗi bằng cách canh me bắt cho được con chồn ăn gà. Và nhờ chuyện… la làng phát hiện ra chồn ăn gà mà chị Mèo được vợ thầy Lai tha cho tội ăn vụng, còn đặt tên cho Mèo là ... Cá Rô, thật đúng sở thích của Mèo.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:right;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><em style=\"box-sizing:border-box;font-family:Roboto !important;font-size:14px !important;\"><i>Nguồn: Thanh Niên</i></em></p>', 0, 1, '2023-12-20 00:00:00', 1, 14, 'Khi nhà văn yêu mèo', 'Khi nhà văn yêu mèo', 2, 0, '2023-12-20 02:17:54', '2023-12-20 03:05:48', NULL);
INSERT INTO `posts` (`id`, `post_title`, `post_slug`, `post_excerpt`, `post_thumbnail`, `post_content`, `isHot`, `status`, `published_at`, `admin_id`, `post_category_id`, `meta_title`, `meta_description`, `views`, `likes`, `created_at`, `updated_at`, `deleted_at`) VALUES
(28, 'Hội Xuất bản Việt Nam và Tik Tok Việt Nam phối hợp phát triển văn hóa đọc', 'hoi-xuat-ban-viet-nam-va-tik-tok-viet-nam-phoi-hop-phat-trien-van-hoa-doc', 'Hội Xuất bản Việt Nam và Tik Tok Việt Nam phối hợp phát triển văn hóa đọc', 'https://res.cloudinary.com/dpobeimdp/image/upload/v1703038767/y1pgc8d44wqrqwvsw2jt.webp', '<p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><strong style=\"box-sizing:border-box;font-family:Roboto !important;font-size:14px !important;\">Sáng 20-11, tại Hà Nội, Hội Xuất bản Việt Nam và Tik Tok Việt Nam tổ chức lễ ký kết và tập huấn về bảo vệ bản quyền và phát triển thị trường sách trên nền tảng TikTok.</strong></p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Thỏa thuận hợp tác giữa Hội Xuất bản Việt Nam với Tik Tok Việt Nam tập trung vào các nội dung chính sau:</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Hỗ trợ quảng bá sách và văn hóa đọc tại Việt Nam. Thông qua hashtag #BookTok, Hội Xuất bản Việt Nam và TikTok Việt Nam khuyến khích các nhà sáng tạo nội dung tiếp tục kết nối, lan tỏa và chia sẻ niềm đam mê sách trong cộng đồng.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Triển khai “Ngày #BookTok” định kỳ mỗi tháng trên nền tảng TikTok. Hội Xuất bản Việt Nam khuyến khích các nhà xuất bản, nhà phát hành và các nhà sáng tạo nội dung trên nền tảng cùng đồng hành quảng bá sách theo các chủ đề được giới thiệu mỗi tháng đến với người dùng TikTok, đồng thời xây dựng các chương trình bán sách với giá ưu đãi tới độc giả.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Ngăn chặn các hoạt động mua bán sách giả, sách lậu trên nền tảng, hướng tới mục tiêu các cửa hàng bán sách giả, sách lậu sẽ bị xóa trong vòng 48 giờ kể từ khi nhận thông tin từ Hội Xuất bản.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Tổ chức chương trình đào tạo về khai thác hiệu quả TikTok Shop. Qua đó, giúp các nhà xuất bản, nhà phát hành nắm bắt cơ hội và khai thác hiệu quả tiềm năng của TikTok Shop. Đồng thời, giúp độc giả có thể mua sách chính hãng trực tiếp từ các nhà xuất bản, công ty phát hành sách, công ty sách.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:center;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><img style=\"border-style:none;border-width:0px;box-sizing:border-box;font-family:Roboto !important;font-size:14px !important;margin:0px;max-width:100%;vertical-align:middle;\" src=\"https://file.hstatic.net/200000343865/file/hoi_xuat_ban_tiktok_1d3c88f6b0ba465c95d864414e8d3705_grande.jpg\" width=\"600\" height=\"450\"></p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:center;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><span style=\"color:rgb(0,0,255);font-family:Roboto !important;font-size:14px !important;\"><em style=\"box-sizing:border-box;font-family:Roboto !important;font-size:14px !important;\"><i><span style=\"box-sizing:border-box;\">Đại diện Hội Xuất bản Việt Nam và Tik Tok Việt Nam ký kết thỏa thuận hợp tác.</span></i></em></span></p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Phát biểu tại lễ ký kết, ông Nguyễn Nguyên, Phó chủ tịch Hội Xuất bản Việt Nam, Cục trưởng Cục Xuất bản, In và Phát hành, cho biết: “Tại Việt Nam, chuyển đổi số đã mang đến những thay đổi ngày càng rõ nét trong các khâu xuất bản, truyền thông, phát hành. Dù mang lại thời cơ lớn, song chuyển đổi số cũng đặt ra những thách thức đối với ngành xuất bản về năng lực chuyển đổi số của các Nhà xuất bản, Nhà phát hành. Do đó, chương trình hợp tác giữa Hội Xuất bản Việt Nam và nền tảng TikTok sẽ là chìa khóa mở ra nhiều cơ hội tiềm năng cho ngành xuất bản để tiếp tục vai trò, sứ mệnh lan tỏa văn hóa đọc đến với toàn thể cộng đồng”.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Chia sẻ về định hướng của TikTok, ông Nguyễn Thanh Lâm, đại diện TikTok Việt Nam, chia sẻ: “TikTok rất vinh dự được đồng hành cùng Hội Xuất bản Việt Nam mang đến nhiều hoạt động thiết thực nhằm góp phần chấn hưng văn hóa đọc tại Việt Nam, đồng thời truyền cảm hứng cho một thế hệ mới tràn đầy tình yêu sách. Đây là một phần trong nỗ lực của TikTok nhằm tạo ra không gian số an toàn, lành mạnh, đáng tin cậy cũng như mang đến nhiều giá trị tích cực cho cộng đồng”.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Bên cạnh lễ ký kết, Hội Xuất bản Việt Nam và TikTok phối hợp tập huấn cho các nhà xuất bản, các công ty phát hành sách, doanh nghiệp sách khai thác hiệu quả TikTokShop nhằm cung cấp kiến thức và nâng cao kỹ năng số cho các Nhà xuất bản, Nhà phát hành sách tại Việt Nam. Chương trình tập huấn tập trung vào các nội dung cơ bản đó là: Cách nền tảng TikTok bảo vệ bản quyền tác giả, Nhà xuất bản và Nhà phát hành; sự phát triển của ngành sách trên nền tảng TikTok Shop; cách xây dựng kênh và nội dung sáng tạo liên quan đến chủ đề #BookTok; cách xây dựng kênh.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:right;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><em style=\"box-sizing:border-box;font-family:Roboto !important;font-size:14px !important;\"><i>Nguồn: qdnd.vn</i></em></p>', 0, 1, '2023-12-20 00:00:00', 1, 12, 'Hội Xuất bản Việt Nam và Tik Tok Việt Nam phối hợp phát triển văn hóa đọc', 'Hội Xuất bản Việt Nam và Tik Tok Việt Nam phối hợp phát triển văn hóa đọc', 0, 0, '2023-12-20 02:19:25', '2023-12-20 02:19:25', NULL),
(29, 'Văn học thiếu nhi Tây Nam bộ khởi sắc', 'van-hoc-thieu-nhi-tay-nam-bo-khoi-sac', 'Văn học thiếu nhi Tây Nam bộ khởi sắc', 'https://res.cloudinary.com/dpobeimdp/image/upload/v1703038975/qri7nmoa1ztdg0wfcn0q.jpg', '<p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><strong style=\"box-sizing:border-box;font-family:Roboto !important;font-size:14px !important;\">Những năm gần đây, văn học thiếu nhi của miền Tây Nam bộ đang có những tín hiệu khởi sắc, đặc biệt là sự tham gia của nhiều cây bút trẻ đã tạo nên những tác phẩm bất ngờ, thú vị cho các em nhỏ.</strong></p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:center;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><img style=\"border-style:none;border-width:0px;box-sizing:border-box;font-family:Roboto !important;font-size:14px !important;margin:0px;max-width:100%;vertical-align:middle;\" src=\"https://file.hstatic.net/200000343865/file/z6a-2752_579df309b1bb4b5d912bc36d531780a0_grande.jpg\" width=\"560\" height=\"409\"></p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:center;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><span style=\"color:rgb(0,0,204);font-family:Roboto !important;font-size:14px !important;\"><em style=\"box-sizing:border-box;font-family:Roboto !important;font-size:14px !important;\"><i><span style=\"box-sizing:border-box;\">Một số nhà văn trẻ nổi bật của miền Tây Nam bộ giao lưu cùng độc giả thiếu nhi trong chương trình Những trang văn lấp lánh phù sa do NXB Kim Đồng tổ chức. Ảnh: NHIÊN HƯƠNG</span></i></em></span></p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><strong style=\"box-sizing:border-box;font-family:Roboto !important;font-size:14px !important;\">Những thế hệ tiếp nối</strong></p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Văn học thiếu nhi của miền Tây Nam bộ từng tạo được dấu ấn với những tên tuổi như Đoàn Giỏi, Nguyễn Quang Sáng, Anh Đức; về sau có Nguyễn Thị Thanh Huệ, Mai Bửu Minh, Hoàng Mai Quyên, Nguyễn Ngọc Tư, Trần Tùng Chinh, Võ Diệu Thanh, Lê Minh Nhựt… Thời điểm hiện tại cũng đang có một thế hệ tiếp nối trẻ và tiềm năng gồm: Trương Chí Hùng, Lê Quang Trạng, Phát Dương, Nguyễn Chí Ngoan…</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Năm 2023 có lẽ là một năm “được mùa” của văn học thiếu nhi khu vực này khi xuất hiện nhiều tác phẩm ấn tượng thuộc các thể loại khác nhau. Mở đầu là Phát Dương (Cần Thơ) với truyện dài 100 cửa sổ, viết về hành trình phiêu lưu ly kỳ, hài hước có thêm yếu tố kỳ ảo; sau đó là hàng loạt tác phẩm của các tác giả ở An Giang như: Sống cùng nước (Trương Chí Hùng), Cá linh đi học (Lê Quang Trạng), Mùa hè năm ấy có cơn mưa rào (Trần Tùng Chinh), Thiên thần Ốc Tiêu (Võ Diệu Thanh), Chiều chiều quạ nói với diều (Giai Du); và Căn cước U Minh (Nguyễn Chí Ngoan, Kiên Giang)…</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><em style=\"box-sizing:border-box;font-family:Roboto !important;font-size:14px !important;\"><i>“Với lợi thế đẫm đầy không gian thiên nhiên, sông nước và lịch sử khẩn hoang mở cõi, miền Tây Nam bộ là không gian gợi mở, mang đến nhiều lợi thế cho các tác giả nơi đây có thể sáng tác văn học thiếu nhi với những chất liệu rất riêng, đặc biệt là ở thể loại đồng thoại”</i></em>, nhà văn Văn Thành Lê chia sẻ.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Vừa qua, NXB Kim Đồng đã tổ chức một cuộc gặp gỡ với các nhà văn thiếu nhi khu vực Tây Nam bộ tại tỉnh An Giang. Theo nhà văn Văn Thành Lê, Giám đốc Chi nhánh NXB Kim Đồng tại TPHCM, cuộc gặp bên cạnh việc phát động Giải thưởng Văn học Kim Đồng lần thứ nhất, còn nhằm tạo cơ hội để các nhà văn trẻ khu vực có dịp trao đổi về xuất bản tác phẩm, đồng thời khơi gợi tinh thần sáng tác cho trẻ em. “Theo quan sát của chúng tôi, văn học thiếu nhi miền Tây Nam bộ những năm gần đây đang có nhiều khởi sắc. Chỉ tính riêng An Giang đã có đến 20 cây viết trẻ đã và đang viết cho thiếu nhi, đây thật sự là con số mơ ước với rất nhiều địa phương, cho thấy tiềm năng sáng tác cho thiếu nhi ở khu vực đang rất mạnh mẽ…”.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><strong style=\"box-sizing:border-box;font-family:Roboto !important;font-size:14px !important;\">Cần một giải thưởng văn học thiếu nhi ở ĐBSCL</strong></p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Tháng 9 vừa qua, nhà văn trẻ Lê Quang Trạng là đại biểu Việt Nam tham dự Diễn đàn Văn học châu Á lần thứ 5-2023 tổ chức tại Gwangju (Hàn Quốc). Khi chia sẻ đến bạn bè trong nước cũng như khu vực, anh không giấu niềm tự nào khi khu vực Tây Nam bộ từng có một lớp nhà văn lớn, và họ có một sự quan tâm sâu sắc đến văn học thiếu nhi. Đặc biệt, những tác phẩm của họ vừa phục vụ cho thiếu nhi, lại vừa chở được hồn cốt văn hóa để làm cội rễ bám chặt vào lòng độc giả. “Tôi cảm giác, vùng đất này dư dả những câu chuyện, cảm hứng và nguồn tác giả để đóng góp nên một nền văn học thiếu nhi lớn mạnh”, Lê Quang Trạng bày tỏ.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Tuy nhiên, theo Lê Quang Trạng, có vẻ như không khí văn học thiếu nhi ở vùng đất này vẫn còn “hiền” và khá lặng lẽ. Ngoài các tác phẩm kinh điển như Đất rừng phương Nam, Dòng sông thơ ấu được độc giả nhiều thế hệ ghi nhận, đến nay văn học thiếu nhi Tây Nam bộ vẫn chưa tìm thấy tác phẩm vượt trội so với “bóng của những ngọn núi” trước đây. Điều đó đáng để chúng ta suy ngẫm và tìm cách gầy dựng phong trào.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Nhà văn trẻ Nguyễn Chí Ngoan thì cho rằng, không khí sáng tác cho thiếu nhi ở khu vực Tây Nam bộ đang rất sôi động, bằng chứng là ngày càng có nhiều tác giả viết cho thiếu nhi và nhiều tác phẩm ra mắt độc giả. Hiện nay, có rất nhiều cuộc thi viết cho thiếu nhi đang diễn ra, thu hút được nhiều tác giả tham gia. Đó cũng chính là động lực để anh và các tác giả tiếp tục viết cho thiếu nhi.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Hiện nay, hàng năm, 13 Hội VHNT khu vực ĐBSCL thường luân phiên tổ chức các cuộc thi như: truyện ngắn, thơ, bút ký… nhưng vẫn chưa có cuộc thi nào dành cho văn học thiếu nhi. “Tôi nghĩ rằng, nếu có cuộc thi dành riêng cho văn học thiếu nhi ở ĐBSCL thì sẽ thu hút hơn nữa các tác giả viết cho thiếu nhi, vì thiếu nhi, để các em biết thêm nhiều về lịch sử, văn hóa và con người miền Tây”, nhà văn trẻ Nguyễn Chí Ngoan đề xuất.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Trước đề xuất này, nhà văn trẻ Lê Quang Trạng nói thêm: “Văn học ĐBSCL nói chung và một “gò đất đang nổi lên” của văn học thiếu nhi ở miền châu thổ hết sức hào sảng này sẽ thành “cồn bãi, cù lao” xanh tốt trù phú hay không, phụ thuộc vào sự bồi tụ từ hôm nay bằng từng “hạt phù sa”, trong đó có những “hạt phù sa” được gieo hái từ các cuộc thi”.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(51, 51, 51);font-family:Roboto;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:0.5px;margin:0px 0px 15px;orphans:2;text-align:right;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><em style=\"box-sizing:border-box;font-family:Roboto !important;font-size:14px !important;\"><i>Nguồn: SGGP</i></em></p>', 0, 1, '2023-12-20 00:00:00', 1, 12, 'Văn học thiếu nhi Tây Nam bộ khởi sắc', 'Văn học thiếu nhi Tây Nam bộ khởi sắc', 0, 0, '2023-12-20 02:22:54', '2023-12-20 02:22:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `posts_category`
--

CREATE TABLE `posts_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_category_name` varchar(255) NOT NULL,
  `post_category_slug` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts_category`
--

INSERT INTO `posts_category` (`id`, `post_category_name`, `post_category_slug`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(11, 'Tin bài', 'tin-bai', 1, '2023-12-18 15:56:34', '2023-12-18 15:56:34', NULL),
(12, 'Sự kiện', 'su-kien', 1, '2023-12-18 15:56:56', '2023-12-18 15:56:56', NULL),
(13, 'Hoạt động', 'hoat-dong', 1, '2023-12-18 15:57:27', '2023-12-18 15:58:23', NULL),
(14, 'Điểm sách', 'diem-sach', 1, '2023-12-18 15:57:48', '2023-12-18 15:58:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `product_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `author` varchar(255) NOT NULL DEFAULT 'Không xác định',
  `product_slug` varchar(255) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `discount_price` decimal(8,2) DEFAULT NULL,
  `weekly_discount` tinyint(1) NOT NULL DEFAULT 0,
  `product_image` varchar(255) NOT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `likes` int(11) NOT NULL DEFAULT 0,
  `remaining` int(11) NOT NULL DEFAULT 0,
  `isHot` tinyint(1) NOT NULL DEFAULT 0,
  `isVisible` tinyint(1) NOT NULL DEFAULT 1,
  `attributes` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`attributes`)),
  `product_description` text NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `created_at`, `updated_at`, `product_name`, `author`, `product_slug`, `price`, `discount_price`, `weekly_discount`, `product_image`, `views`, `likes`, `remaining`, `isHot`, `isVisible`, `attributes`, `product_description`, `deleted_at`) VALUES
(507, '2023-12-18 10:35:03', '2023-12-20 08:06:38', 'Khu rừng trong trai', '178', 'khu-rung-trong-trai', 139000.00, 103200.00, 0, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1702895705/fhoyra0z8ocb5g9fac1l.jpg', 0, 0, 75, 1, 1, '{\"\\u0110\\u1ecbnh d\\u1ea1ng\":\"1\",\"Trang\":\"60\",\"K\\u00edch th\\u01b0\\u1edbc\":\"18 x 25\",\"Ng\\u00e0y xu\\u1ea5t b\\u1ea3n\":\"2017-04-19\",\"Nh\\u00e0 xu\\u1ea5t b\\u1ea3n\":\"phuongnambook\",\"Ng\\u00f4n ng\\u1eef\":\"0\",\"Ghi ch\\u00fa minh h\\u1ecda\":\"S\\u1ea3n ph\\u1ea9m r\\u1ea5t t\\u1ed1t cho s\\u1ef1 h\\u1ecdc t\\u1eadp v\\u00e0 ph\\u00e1t tri\\u1ec3n c\\u1ee7a tr\\u1ebb em c\\u0169ng nh\\u01b0 mang \\u0111\\u1ebfn nh\\u1eefng b\\u00e0i h\\u1ecdc \\u00fd ngh\\u0129a cho m\\u1ecdi l\\u1ee9a tu\\u1ed5i.\"}', 'Khu Rừng Trong Chai kể về hành trình phiêu lưu của cậu nhóc An An, bắt đầu từ khi cậu được trao cho một hạt giống lạ. Mang theo giấc mơ về cây đậu thần khổng lồ, An An gieo hạt vào một cái chai thủy tinh... Trong thế giới bao bọc khép kín, hạt giống lặng lẽ nảy mầm, lớn lên, sinh sôi nảy nở tạo nên cả một khu rừng…\r\n\r\nThế rồi gần cả thế kỷ trôi qua, khu rừng trong chai dần rơi vào quên lãng, màu xanh của cây cỏ cũng dần mất đi, giờ đây chỉ còn trơ trọi những tòa nhà chọc trời, khói bụi độc hại, Trái đất chìm trong biển nước ngập mặn,… liệu con người sẽ tiếp tục tồn tại như thế nào? Và liệu khu rừng năm xưa trong chiếc chai nhỏ bé sẽ xảy ra điều gì kỳ diệu?\r\n\r\nMời bạn cùng An An dạo bước đến Khu Rừng Trong Chai, để khám phá không chỉ vẻ đẹp muôn màu, mà còn là sức sống mãnh liệt của tự nhiên, dù bị giam hãm, lãng quên hay hủy hoại đến thế nào vẫn kiên cường gieo mầm hy vọng cho hành tinh xanh mãi.\r\n\r\nLần tới, khi nhận được một hạt giống trên tay, bạn có sẵn lòng gieo xuống?\r\n\r\nVà câu chuyện của bạn sẽ là…\r\n\r\n......\r\n\r\nMột quyển tranh truyện đầy sắc màu, hình ảnh dễ thương bắt mắt cùng câu chuyện hấp dẫn kì lạ, chắc hẳn sẽ lôi cuốn không chỉ các bạn đọc nhỏ tuổi mà em tin rằng các bạn trẻ, các bậc phụ huynh cũng sẽ cảm thấy vô cùng thú vị và hào hứng khi theo dõi Khu Rừng Trong Chai.\r\n\r\nQuyển sách được in màu, bìa cứng dày dặn cùng hiệu ứng kim tuyến lấp lánh, tặng kèm 2 Bookmark ngộ nghĩnh và 3 Postcard xinh xắn khi mua sách.', NULL),
(509, '2023-12-18 10:39:49', '2023-12-20 08:06:38', 'Berry & Dolly (Bộ 3 Tập)', '178', 'berry-dolly-bo-3-tap', 288000.00, 244200.00, 0, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1702895990/gth9xssvlwvztx3r9ntu.jpg', 0, 0, 98, 1, 1, '{\"\\u0110\\u1ecbnh d\\u1ea1ng\":\"1\",\"Trang\":\"120\",\"K\\u00edch th\\u01b0\\u1edbc\":\"24 x 30\",\"Ng\\u00e0y xu\\u1ea5t b\\u1ea3n\":\"2018-06-14\",\"Nh\\u00e0 xu\\u1ea5t b\\u1ea3n\":\"NXB Ph\\u1ee5 N\\u1eef\",\"Ng\\u00f4n ng\\u1eef\":\"0\",\"Ghi ch\\u00fa minh h\\u1ecda\":\"H\\u00e3y c\\u00f9ng theo d\\u00f5i nh\\u1eefng m\\u1ea9u chuy\\u1ec7n d\\u1ec5 th\\u01b0\\u01a1ng v\\u00e0 c\\u00e1c b\\u1ee9c v\\u1ebd ng\\u1ed9 ngh\\u0129nh, \\u0111\\u00e1ng y\\u00eau trong Berry & Dolly nh\\u00e9!\"}', 'Nằm trong series truyện thiếu nhi BOGYÓ ÉS BABÓCA nổi tiếng của Hungary do nữ tác giả Bartos Erika viết lời và vẽ minh họa. 3 tập Berry & Dolly xoay quanh những câu chuyện hàng ngày của đôi bạn thân – cậu bé ốc sên Berry và cô bé cánh cam Dolly.\r\n\r\nNiềm vui, khó khăn hay xung đột trong những năm mẫu giáo được tác giả trình bày bằng ngôn ngữ giản dị, gần gũi để các bé nhỏ có thể đọc hiểu, tăng trí tưởng tượng và tương tác qua những hình ảnh sinh động, đầy màu sắc. Series truyện còn nhắc đến nhiều vấn đề khó nói với trẻ nhỏ như sự đố kỵ, sợ hãi, sự ăn năn, mất mát... thông qua đó tuyền tải những bài học về kỹ năng sống, về cách giao tiếp, ứng xử với mọi người xung quanh.', NULL),
(510, '2023-12-18 13:31:39', '2023-12-20 08:06:38', 'nobita và người khổng lồ xanh', '179', 'nobita-va-nguoi-khong-lo-xanh', 29000.00, NULL, 0, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1702906301/evjk6mjrhwpikippnat0.jpg', 0, 0, 96, 1, 1, '{\"\\u0110\\u1ecbnh d\\u1ea1ng\":\"0\",\"Trang\":\"40\",\"K\\u00edch th\\u01b0\\u1edbc\":\"15 x 25\",\"Ng\\u00e0y xu\\u1ea5t b\\u1ea3n\":\"2023-12-14\",\"Nh\\u00e0 xu\\u1ea5t b\\u1ea3n\":\"Kim \\u0110\\u1ed3ng\",\"Ng\\u00f4n ng\\u1eef\":\"0\",\"Ghi ch\\u00fa minh h\\u1ecda\":\"M\\u1ed9t quy\\u1ec3n s\\u00e1ch gi\\u1ea3i tr\\u00ed hay v\\u00e0 \\u00fd ngh\\u0129a\"}', 'Nobita đã dùng bảo bối \"dung dịch giúp cây tự phát triển\" để biến cái cây cậu nhặt về trên núi thành một cái cây có linh hồn biết cử động. Cái cây đó được Nobita đặt tên là Kibou. Bỗng một ngày, đang chơi trên ngọn núi sau nhà, Nobita và Kibou đã bị người thực vật đưa đến hành tinh xanh - Green. Và nhóm bạn biết được kế hoạch làm sống lại người khổng lồ xanh để cướp hết các loài thực vật và thôn tính Trái đất. Doraemon ơi, hãy cứu lấy Kibou và tương lai của Trái Đất nhé!', NULL),
(511, '2023-12-18 13:39:59', '2023-12-19 15:26:59', 'Nobita Và Những Hiệp Sĩ Không Gian', '179', 'nobita-va-nhung-hiep-si-khong-gian', 29500.00, NULL, 0, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1702907070/xlutmqfdcvtqxgx97dpv.webp', 0, 0, 49, 1, 1, '{\"\\u0110\\u1ecbnh d\\u1ea1ng\":\"0\",\"Trang\":\"100\",\"K\\u00edch th\\u01b0\\u1edbc\":\"14 x 25\",\"Ng\\u00e0y xu\\u1ea5t b\\u1ea3n\":\"2023-12-18\",\"Nh\\u00e0 xu\\u1ea5t b\\u1ea3n\":\"Kim \\u0110\\u1ed3ng\",\"Ng\\u00f4n ng\\u1eef\":\"0\",\"Ghi ch\\u00fa minh h\\u1ecda\":\"S\\u00e1ch hay v\\u00e0 gi\\u1ea3i tr\\u00ed\"}', 'Nhóm bạn Nobita vì ngưỡng mộ bộ phim “Vệ binh dải ngân hà” chiếu trên ti vi nên đã quyết định tự thực hiện một bộ phim về đề tài anh hùng. Nhờ bảo bối “Đạo diễn Burger”, bộ phim đã chính thức bấm máy! Nhóm bạn trở thành những siêu anh hùng sở hữu tuyệt chiêu riêng của từng người. Để giúp đỡ cậu bạn Aron tới Trái Đất nhằm tìm kiếm cứu tinh, cả nhóm đã đáp xuống hành tinh Pokkuru. Một tập phim tuyệt tác với những pha hành động gay cấn đến thót tim của 5 người bạn nhỏ!', NULL),
(512, '2023-12-18 13:42:08', '2023-12-18 13:48:36', 'Chuyến phiêu lưu vào xứ quỷ', '179', 'chuyen-phieu-luu-vao-xu-quy', 40000.00, NULL, 0, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1702907318/rczz4p1lml5zwtzejnqe.webp', 0, 0, 40, 1, 1, '{\"\\u0110\\u1ecbnh d\\u1ea1ng\":\"0\",\"Trang\":\"100\",\"K\\u00edch th\\u01b0\\u1edbc\":\"16 x 25\",\"Ng\\u00e0y xu\\u1ea5t b\\u1ea3n\":\"2019-01-30\",\"Nh\\u00e0 xu\\u1ea5t b\\u1ea3n\":\"Kim \\u0110\\u1ed3ng\",\"Ng\\u00f4n ng\\u1eef\":\"0\",\"Ghi ch\\u00fa minh h\\u1ecda\":\"S\\u00e1ch hay v\\u00e0 \\u00fd\"}', 'Chuyến phiêu lưu mới của 7 dũng sĩ phép thuật gợi nhớ lại thế kỉ 21. Câu chuyện bắt đầu từ lời nói: “Tôi muốn biến thế giới này thành thế giới phép thuật” của Nobita!! Con quỷ Medusa đầy bí ẩn và đáng sợ tấn công hòng chiếm đoạt thế giới, nhóm bạn Doraemon và Miyoko chiến đấu bằng phép thuật và những bảo bối bí mật. Vận mệnh sẽ đi về đâu!?', NULL),
(513, '2023-12-18 13:50:13', '2023-12-18 13:50:13', 'Cuộc Phiêu Lưu Của Loài Thú', '179', 'cuoc-phieu-luu-cua-loai-thu', 40000.00, NULL, 0, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1702907415/lmfikffhozrbfzomctdd.webp', 0, 0, 100, 1, 1, '{\"\\u0110\\u1ecbnh d\\u1ea1ng\":\"0\",\"Trang\":\"100\",\"K\\u00edch th\\u01b0\\u1edbc\":\"14 x 25\",\"Ng\\u00e0y xu\\u1ea5t b\\u1ea3n\":\"2023-12-06\",\"Nh\\u00e0 xu\\u1ea5t b\\u1ea3n\":\"Kim \\u0110\\u1ed3ng\",\"Ng\\u00f4n ng\\u1eef\":\"0\",\"Ghi ch\\u00fa minh h\\u1ecda\":\"S\\u00e1ch hay v\\u00e0 \\u00fd ngh\\u0129a\"}', 'Nhóm Nobita đến thăm hòn đảo bí ẩn, nơi bảo vệ các loài động vật bị tuyệt chủng. Hòn đảo đó được bảo vệ bởi sức mạnh của con bọ hung sừng chữ Y hoàng kim có tên gọi “Golden Hercules”. Trên hòn đảo, nhóm bạn gặp Dakke, một cậu bé bí ẩn trông giống hệt Nobita. Nhưng một thương nhân xấu xa tên Sharman muốn cướp con bọ hung hoàng kim xuất hiện, gây ra cuộc đại chiến. Các cậu, chúng ta hãy dốc hết sức bảo vệ hòn đảo của ước mơ và hi vọng!', NULL),
(514, '2023-12-18 13:56:17', '2023-12-18 13:56:17', 'Cuộc Đại Thủy Chiến Sở Xứ Sở Người Cá', '179', 'cuoc-dai-thuy-chien-so-xu-so-nguoi-ca', 40000.00, NULL, 0, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1702907779/ruc0hgesc3u5slmce6m6.webp', 0, 0, 100, 1, 1, '{\"\\u0110\\u1ecbnh d\\u1ea1ng\":\"0\",\"Trang\":\"100\",\"K\\u00edch th\\u01b0\\u1edbc\":\"18 x 25\",\"Ng\\u00e0y xu\\u1ea5t b\\u1ea3n\":\"2023-12-19\",\"Nh\\u00e0 xu\\u1ea5t b\\u1ea3n\":\"Kim \\u0110\\u1ed3ng\",\"Ng\\u00f4n ng\\u1eef\":\"0\",\"Ghi ch\\u00fa minh h\\u1ecda\":\"S\\u00e1ch hay v\\u00e0 \\u00fd ngh\\u0129a\"}', 'Doraemon đã dùng bảo bối \"máy bơm nước giả tưởng\" để biến cả thành phố nơi Nobita đang ở chìm xuống đáy biển. Sau khi phải rời khỏi hành tinh Aqua, cư dân tộc người cá đã đáp xuống Trái đất và âm thầm sống dưới đáy biển. Một ngày, công chúa Sophia đã vô tình bơi lạc vào vùng biển giả tưởng của N Phát hiện ra nơi ẩn náu của tộc người cá, Buikin và bè lũ quái vật người cá xuất hiện tấn công họ. Và cuộc đại thủy chiến liên quan đến thanh gươm truyền thuyết của tộc người cá bùng nổ!!!', NULL),
(515, '2023-12-18 13:58:01', '2023-12-18 13:58:01', 'Nobita Và Viện Bảo Tàng Bảo Bối', '179', 'nobita-va-vien-bao-tang-bao-boi', 40000.00, NULL, 0, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1702907884/wr86xw1tgnc2owdifh11.webp', 0, 0, 100, 1, 1, '{\"\\u0110\\u1ecbnh d\\u1ea1ng\":\"0\",\"Trang\":\"100\",\"K\\u00edch th\\u01b0\\u1edbc\":\"18\",\"Ng\\u00e0y xu\\u1ea5t b\\u1ea3n\":\"2023-11-29\",\"Nh\\u00e0 xu\\u1ea5t b\\u1ea3n\":\"Kim \\u0110\\u1ed3ng\",\"Ng\\u00f4n ng\\u1eef\":\"0\",\"Ghi ch\\u00fa minh h\\u1ecda\":\"Hay v\\u00e0 \\u00fd ngh\\u0129a\"}', 'Để tìm lại chiếc chuông bị siêu trộm DX lấy mất của Doraemon, nhóm Nobita đã đến “Viện bảo tàng bảo bối”, nơi trưng bày rất nhiều món bảo bối bí mật.\r\n\r\nTrong quá trình tìm kiếm ở bảo tàng, các bạn nhỏ đã khám phá ra rất nhiều sự thật!\r\n\r\nRốt cuộc siêu trộm DX là ai!? Chiếc chuông của Doraemon có bí mật gì?\r\n\r\nMời bạn đón đọc kiệt tác truyện dài đầy kỉ niệm này để hiểu thêm về sự ra đời của các món bảo bối bí mật nhé!', NULL),
(516, '2023-12-18 14:00:35', '2023-12-18 14:01:14', 'Vương Quốc Bánh Kẹo Okashinana', '179', 'vuong-quoc-banh-keo-okashinana', 29000.00, NULL, 0, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1702908076/w1gor55fax9zy6mp6tro.webp', 0, 0, 100, 1, 1, '{\"\\u0110\\u1ecbnh d\\u1ea1ng\":\"0\",\"Trang\":\"100\",\"K\\u00edch th\\u01b0\\u1edbc\":\"18 x 25\",\"Ng\\u00e0y xu\\u1ea5t b\\u1ea3n\":\"2021-06-24\",\"Nh\\u00e0 xu\\u1ea5t b\\u1ea3n\":\"Kim \\u0110\\u1ed3ng\",\"Ng\\u00f4n ng\\u1eef\":\"0\",\"Ghi ch\\u00fa minh h\\u1ecda\":\"S\\u00e1ch hay v\\u00e0 \\u00fd ngh\\u0129a.\"}', 'Câu chuyện bắt đầu khi Dora Vương và Dora - The - Kid lên đường tới Vương quốc Okashinana, nơi được mệnh danh là \"Nhà máy bánh kẹo lớn nhất thế giới\". Ở đó có Jedora - bạn học cùng Trường đào tạo robot và cũng là một thợ làm bánh tài ba. Jedora đã nhờ nhóm Doraemon chuyển tới những nguyên liệu làm bánh tươi ngon nhất để cậu có thể tham gia Lễ hội bánh ngọt được tổ chức một lần trong năm, Thế nhưng, lễ hội đã trở nên hỗn loạn bởi những kẻ gây rối từ đâu xuất hiệ Mời các bạn cùng theo dõi diễn biến câu chuyện!', NULL),
(517, '2023-12-18 14:03:01', '2023-12-18 14:03:01', 'Những Pháp Sư Gió Bí Ẩn', '179', 'nhung-phap-su-gio-bi-an', 29000.00, NULL, 0, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1702908183/adnqf708y6asaupwxz5v.webp', 0, 0, 100, 1, 1, '{\"\\u0110\\u1ecbnh d\\u1ea1ng\":\"0\",\"Trang\":\"100\",\"K\\u00edch th\\u01b0\\u1edbc\":\"18\",\"Ng\\u00e0y xu\\u1ea5t b\\u1ea3n\":\"2023-12-07\",\"Nh\\u00e0 xu\\u1ea5t b\\u1ea3n\":\"Kim \\u0110\\u1ed3ng\",\"Ng\\u00f4n ng\\u1eef\":\"0\",\"Ghi ch\\u00fa minh h\\u1ecda\":\"S\\u00e1ch hay v\\u00e0 \\u00fd ngh\\u0129a\"}', 'Những chuyến phiêu lưu không bị hạn chế bởi không gian và thời gian. Đó là chuyến du hành vượt qua thời gian trở về thời tiền sử của vũ trụ (Nobita và lịch sử khai phá vũ trụ), của trái đất (Chú khủng long của Nobita), của nước Nhật (Nobita và nước Nhật thời nguyên thủy), đến tương lai (Nobita và cuộc phiêu lưu ở thành phố dây cót, Nobita và vương quốc robot) 24 chuyến phiêu lưu của nhóm bạn có đích đến là 24 địa điểm kỳ thú, chỉ có trí tưởng tượng và ước mơ có thể vươn tới (Nobita và hành tinh muông thú, Nobita và chuyến du hành xứ quỷ).', NULL),
(518, '2023-12-18 14:05:04', '2023-12-18 14:05:04', 'Doraemon Tuyển Tập Tranh Truyện Màu Kĩ Thuật Số', '179', 'doraemon-tuyen-tap-tranh-truyen-mau-ki-thuat-so', 29000.00, NULL, 0, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1702908306/gkqipvn1he9zxnlfcdrw.webp', 0, 0, 100, 1, 1, '{\"\\u0110\\u1ecbnh d\\u1ea1ng\":\"0\",\"Trang\":\"100\",\"K\\u00edch th\\u01b0\\u1edbc\":\"18 x 25\",\"Ng\\u00e0y xu\\u1ea5t b\\u1ea3n\":\"2023-12-18\",\"Nh\\u00e0 xu\\u1ea5t b\\u1ea3n\":\"Kim \\u0110\\u1ed3ng\",\"Ng\\u00f4n ng\\u1eef\":\"0\",\"Ghi ch\\u00fa minh h\\u1ecda\":\"S\\u00e1ch hay v\\u00e0 \\u00fd ngh\\u0129a\"}', 'Trong bối cảnh khoa học kĩ thuật phát triển, chúng tôi đã quyết định đổ màu cho tác phẩm \"Doraemon\" để tác phẩm trở nên sống động hơn mà vẫn không làm sai lệch chủ ý của tác giả Fujiko.F.Fujio.', NULL),
(520, '2023-12-18 14:55:42', '2023-12-18 14:55:42', 'những người hàng xóm', '107', 'nhung-nguoi-hang-xom', 76500.00, NULL, 0, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1702911344/krveaadwgjndvsdx9w4e.webp', 0, 0, 50, 1, 1, '{\"\\u0110\\u1ecbnh d\\u1ea1ng\":\"0\",\"Trang\":\"200\",\"K\\u00edch th\\u01b0\\u1edbc\":\"18 x 25\",\"Ng\\u00e0y xu\\u1ea5t b\\u1ea3n\":\"2022-02-09\",\"Nh\\u00e0 xu\\u1ea5t b\\u1ea3n\":\"NXB Tr\\u1ebb\",\"Ng\\u00f4n ng\\u1eef\":\"0\",\"Ghi ch\\u00fa minh h\\u1ecda\":\"S\\u00e1ch hay v\\u00e0 \\u00fd ngh\\u0129a\"}', '<p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">Câu chuyện đi theo lời kể của một anh chàng mới lấy vợ, chuẩn bị đi làm và có ý thích viết văn. Anh chàng yêu vợ theo cách của mình, khen ngợi sùng bái người yêu cũng theo cách của mình, nhưng nhìn cuộc đời theo cách sống của những người hàng xóm. Sống trong tình yêu của vợ đầy mùi thơm và nhiều vị ngọt. Chứng kiến tình yêu của anh cảnh sát với cô bạn gái ngành y; mối tình thứ hai của người phụ nữ tốt bụng phát thanh viên ngôn ngữ ký hiệu. Và được chiêm nghiệm trong tình yêu đắm đuối mỗi ngày của ông họa sĩ già thương nhớ người vợ xinh đẹp-người mẫu, nàng thơ của ông.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">Như một cuốn phim đầy màu sắc với âm điệu dịu dàng, êm ả. Cuộc sống bình yên của những người yêu thương nhau. Bài học về tình người đứng phía sau bài học về nghề viết, và cả trong câu chuyện về… một lối kinh doanh nhà cực kỳ đặc biệt!&nbsp;</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">Câu chuyện mở ra sẽ là bất ngờ với bạn đọc “ruột” của Nguyễn Nhật Ánh, và kết thúc trong một sự dịu dàng nhẹ nhõm lòng, bởi nhà văn đã nhắc lại cho ta nhớ:&nbsp; cuộc sống luôn thật là tươi đẹp biết bao. Khép sách lại, bạn sẽ nhận được niềm vui bình yên.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\"><strong style=\"box-sizing:border-box;font-weight:500;line-height:21px;\">Vài đoạn trích trong tác phẩm:</strong></p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">“…Nếu con biết cách mở cửa sổ, đời sống sẽ tràn vào trang viết của con. Đôi khi chúng ta vẫn nhìn đấy, nhưng chúng ta không thấy. Nếu trái tim con đập vì con người, thậm chí đập vì một con chim, con sẽ nhìn thấy rất nhiều thứ”…</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">“…Ruben là người tử tế. Người tử tế cao hơn người đàng hoàng một bậc. Người đàng hoàng sống ngay ngắn, không làm hại ai. Còn người tử tế là người sẵn sàng chịu thiệt thòi vì người khác.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">Tôi không rõ định nghĩa của ông Jakob chính xác đến mức nào nhưng tôi biết câu chuyện của ông đang làm tôi cảm động…”</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">Rất nhiều những câu chuyện cảm động nho nhỏ, có khi chỉ là tình tiết, hay một câu nói… trong khắp từng chương sách khiến bạn đọc vẫn có thể nhận ngay ra “chất văn” của nhà văn mình yêu quý - Nguyễn Nhật Ánh. Mặc dù cuốn sách này được ông viết theo một cách khác, hoàn toàn mới lạ, gây ngạc nhiên từ cảnh quan cho đến nhân vật.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">Và ắt nhiên - có một bài thơ dịu ngọt từ một tình yêu đáng ngưỡng mộ dài cả gần thế kỷ.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">Ngoài ra, qua tác phẩm tác giả còn đề cập những đặc trưng của Việt Nam và Bỉ qua món ăn, qua danh lam thắng cảnh…</p>', NULL),
(521, '2023-12-18 15:10:58', '2023-12-19 11:14:12', 'test', '127', 'test', 100000.00, NULL, 0, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1702912260/unimbp2zcepvrhsmdrll.jpg', 0, 0, 1, 1, 1, '{\"\\u0110\\u1ecbnh d\\u1ea1ng\":\"1\",\"Trang\":\"11\",\"K\\u00edch th\\u01b0\\u1edbc\":\"1\",\"Ng\\u00e0y xu\\u1ea5t b\\u1ea3n\":\"2023-12-20\",\"Nh\\u00e0 xu\\u1ea5t b\\u1ea3n\":\"s\",\"Ng\\u00f4n ng\\u1eef\":\"1\",\"Ghi ch\\u00fa minh h\\u1ecda\":\"s\"}', '<p>ss</p>', '2023-12-19 11:14:12'),
(522, '2023-12-18 15:13:09', '2023-12-18 15:24:11', 'bao', '126', 'bao', 100000.00, NULL, 0, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1702912391/q2p4pckwa8uicy6sjrof.webp', 0, 0, 11, 1, 1, '{\"\\u0110\\u1ecbnh d\\u1ea1ng\":\"1\",\"Trang\":\"11\",\"K\\u00edch th\\u01b0\\u1edbc\":\"1\",\"Ng\\u00e0y xu\\u1ea5t b\\u1ea3n\":\"2023-12-22\",\"Nh\\u00e0 xu\\u1ea5t b\\u1ea3n\":\"s\",\"Ng\\u00f4n ng\\u1eef\":\"1\",\"Ghi ch\\u00fa minh h\\u1ecda\":\"s\"}', '<p>1</p>', '2023-12-18 15:24:11'),
(523, '2023-12-18 15:28:02', '2023-12-19 11:13:35', 'test', '126', 'test-658065024fe10', 1.00, 1.00, 0, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1702913284/dcpu2ewiithwvdsalghv.webp', 0, 0, 1, 1, 1, '{\"\\u0110\\u1ecbnh d\\u1ea1ng\":\"1\",\"Trang\":\"1\",\"K\\u00edch th\\u01b0\\u1edbc\":\"1\",\"Ng\\u00e0y xu\\u1ea5t b\\u1ea3n\":\"2023-12-19\",\"Nh\\u00e0 xu\\u1ea5t b\\u1ea3n\":\"s\",\"Ng\\u00f4n ng\\u1eef\":\"1\",\"Ghi ch\\u00fa minh h\\u1ecda\":\"ss\"}', '<p>sss</p>', '2023-12-19 11:13:35'),
(524, '2023-12-19 11:16:31', '2023-12-19 11:16:31', 'Cho tôi xin một vé đi tuổi thơ', '107', 'cho-toi-xin-mot-ve-di-tuoi-tho', 80000.00, 65000.00, 0, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1702984592/glrvrvi7agbms3fbb24n.jpg', 0, 0, 50, 1, 1, '{\"\\u0110\\u1ecbnh d\\u1ea1ng\":\"0\",\"Trang\":\"100\",\"K\\u00edch th\\u01b0\\u1edbc\":\"13 x 20\",\"Ng\\u00e0y xu\\u1ea5t b\\u1ea3n\":\"2023-12-05\",\"Nh\\u00e0 xu\\u1ea5t b\\u1ea3n\":\"NXB Tr\\u1ebb\",\"Ng\\u00f4n ng\\u1eef\":\"0\",\"Ghi ch\\u00fa minh h\\u1ecda\":\"S\\u00e1ch hay v\\u00e0 \\u00fd ngh\\u0129a\"}', '<p><span style=\"background-color:rgb(255,255,255);color:rgb(36,36,36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Truyện Cho tôi xin một vé đi tuổi thơ là sáng tác mới nhất của nhà văn Nguyễn Nhật Ánh. Nhà văn mời người đọc lên chuyến tàu quay ngược trở lại thăm tuổi thơ và tình bạn dễ thương của 4 bạn nhỏ. Những trò chơi dễ thương thời bé, tính cách thật thà, thẳng thắn một cách thông minh và dại dột, những ước mơ tự do trong lòng… khiến cuốn sách có thể làm các bậc phụ huynh lo lắng rồi thở phào. Không chỉ thích hợp với người đọc trẻ, cuốn sách còn có thể hấp dẫn và thực sự có ích cho người lớn trong quan hệ với con mình.</span></span></p>', NULL),
(525, '2023-12-19 11:18:18', '2023-12-19 12:08:49', 'Ngày xưa có một chuyện tình', '107', 'ngay-xua-co-mot-chuyen-tinh', 97000.00, NULL, 0, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1702987730/mwh8so7oogjnlpbbkpv4.webp', 0, 0, 50, 1, 1, '{\"\\u0110\\u1ecbnh d\\u1ea1ng\":\"0\",\"Trang\":\"100\",\"K\\u00edch th\\u01b0\\u1edbc\":\"13 x 20\",\"Ng\\u00e0y xu\\u1ea5t b\\u1ea3n\":\"2023-12-01\",\"Nh\\u00e0 xu\\u1ea5t b\\u1ea3n\":\"NXB Tr\\u1ebb\",\"Ng\\u00f4n ng\\u1eef\":\"0\",\"Ghi ch\\u00fa minh h\\u1ecda\":\"Hay v\\u00e0 \\u00fd ngh\\u0129a\"}', '<p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">NGÀY XƯA CÓ MỘT CHUYỆN TÌNH là tác phẩm mới tinh thứ 2 trong năm 2016 của nhà văn Nguyễn Nhật Ánh dài hơn 300 trang, được coi là tập tiếp theo của tập truyện Mắt biếc. Có một tình yêu dữ dội, với em, của một người yêu em hơn chính bản thân mình - là anh.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">Ngày xưa có một chuyện tình có phải là một câu chuyện cảm động khi người ta yêu nhau, nỗi khát khao một hạnh phúc êm đềm ấm áp đến thế; hay đơn giản chỉ là chuyện ba người - anh, em, và người ấy…?</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">Bạn hãy mở sách ra, để chứng kiến làn gió tình yêu chảy qua như rải nắng trên khuôn mặt mùa đông của cô gái; nụ hôn đầu tiên ngọt mật, cái ôm đầu tiên, những giọt nước mắt và cái ôm xiết cuối cùng… rồi sẽ tìm thấy câu trả lời, cho riêng mình.</p>', NULL),
(526, '2023-12-19 11:19:52', '2023-12-19 11:19:52', 'Làm bạn với bầu trời', '107', 'lam-ban-voi-bau-troi', 85100.00, NULL, 0, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1702984794/zyracr1i4yy65mj4qy1y.webp', 0, 0, 50, 1, 1, '{\"\\u0110\\u1ecbnh d\\u1ea1ng\":\"0\",\"Trang\":\"100\",\"K\\u00edch th\\u01b0\\u1edbc\":\"13 x 20\",\"Ng\\u00e0y xu\\u1ea5t b\\u1ea3n\":\"2023-11-30\",\"Nh\\u00e0 xu\\u1ea5t b\\u1ea3n\":\"NXB Tr\\u1ebb\",\"Ng\\u00f4n ng\\u1eef\":\"0\",\"Ghi ch\\u00fa minh h\\u1ecda\":\"S\\u00e1ch hay v\\u00e0 \\u00fd ngh\\u0129a\"}', '<p><span style=\"background-color:rgb(255,255,255);color:rgb(36,36,36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Một câu chuyện giản dị, chứa đầy bất ngờ cho tới trang cuối cùng. Vẻ đẹp lộng lẫy, vì lòng vị tha và tình yêu thương, khiến mắt rưng rưng vì một nỗi mừng vui hân hoan. Cuốn sách như một đốm lửa thắp lên lòng khát khao sống tốt trên đời.</span></span><br><br><span style=\"background-color:rgb(255,255,255);color:rgb(36,36,36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Viết về điều tốt đã không dễ, viết sao cho người đọc có thể đón nhận đầy cảm xúc tích cực, và muốn được hưởng, được làm những điều tốt dù nhỏ bé mới thật là khó. Làm bạn với bầu trời của Nguyễn Nhật Ánh đã làm được điều này.</span></span><br><br><span style=\"background-color:rgb(255,255,255);color:rgb(36,36,36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Như nhà văn từng phát biểu “điểm mạnh của văn chương nằm ở khả năng thẩm thấu. Bằng hình thức đặc thù của mình, văn chương góp phần mài sắc các ý niệm đạo đức nơi người đọc một cách vô hình. Bồi đắp tâm hồn và nhân cách một cách âm thầm và bền bỉ, đó là chức năng gốc rễ của văn chương, đặc biệt là văn chương viết cho thanh thiếu niên.”</span></span><br><br><strong style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:500;letter-spacing:normal;line-height:21px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">TRÍCH ĐOẠN HAY TRONG SÁCH</strong><br><br><span style=\"background-color:rgb(255,255,255);color:rgb(36,36,36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Cậu nhỏ luôn tươi tắn nụ cười trên môi, ước mơ luôn trong mắt, nồng hậu, dịu dàng, cậu truyền tình yêu và lòng tin vào cuộc sống, hồn nhiên coi thường mọi bất hạnh.</span></span><br><br><span style=\"background-color:rgb(255,255,255);color:rgb(36,36,36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Trên trời có mây đủ hình, có những cánh chim bay, thỉnh thoảng có những cánh bướm đủ màu lượn quanh cửa sổ. Những hạt mưa như có ai chấm lên người từng chấm lạnh. Như là ai đó dùng chiếc cọ nhúng vào mưa quét lên người chọc ghẹ</span></span><br><br><span style=\"background-color:rgb(255,255,255);color:rgb(36,36,36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Thiên nhiên và con người hiền hòa đẹp dịu dàng mê mải, trong một không gian chỉ toàn những tươi vui và thương yêu ấm áp.</span></span><br><br><span style=\"background-color:rgb(255,255,255);color:rgb(36,36,36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">“Dường như trái tim thằng Tèo luôn nhúng vào tình yêu. Nó luôn tìm thấy cơ hội để tha thứ cho cuộc đời, nhờ vậy tâm hồn nó lúc nào cũng bình yên.</span></span><br><br><span style=\"background-color:rgb(255,255,255);color:rgb(36,36,36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Bao giờ cũng nhìn thấy sự may mắn trong một hoàn cảnh không may mắn, bao giờ cũng tươi vui trong một số phận kém vui tươi, bao giờ cũng đối xử tốt với cuộc đời mặc dù không phải lúc nào cuộc đời cũng đối xử tốt với mình. Những phẩm chất đó có lẽ chỉ có ở thằng Tèo, đứa bé xem việc được làm bạn với bầu trời cao xanh và khoáng đạt là niềm vui lớn lao. Lớn lao hơn nhiều so với những mất mát của bản thân mình.</span></span><br><br><span style=\"background-color:rgb(255,255,255);color:rgb(36,36,36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Thiên thần đã ở lại với thị trấn Mặt Trăng và không ngừng làm tôi ngạc nhiên. Và tôi biết tại sao tâm hồn tôi đẹp dần lên mỗi ngà”</span></span></p>', NULL),
(527, '2023-12-19 11:21:07', '2023-12-19 11:21:07', 'Thiên thần nhỏ của tôi', '107', 'thien-than-nho-cua-toi', 56600.00, NULL, 0, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1702984868/ki59zueomawdyobfvtdb.webp', 0, 0, 50, 0, 1, '{\"\\u0110\\u1ecbnh d\\u1ea1ng\":\"0\",\"Trang\":\"100\",\"K\\u00edch th\\u01b0\\u1edbc\":\"13 x 20\",\"Ng\\u00e0y xu\\u1ea5t b\\u1ea3n\":\"2023-12-05\",\"Nh\\u00e0 xu\\u1ea5t b\\u1ea3n\":\"NXB Tr\\u1ebb\",\"Ng\\u00f4n ng\\u1eef\":\"1\",\"Ghi ch\\u00fa minh h\\u1ecda\":\"S\\u00e1ch hay v\\u00e0 \\u00fd ngh\\u0129a\"}', '<p><span style=\"background-color:rgb(255,255,255);color:rgb(36,36,36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Khi dọn về ngôi nhà mới, Kha có một cô bạn nghèo sống trong ngõ hẻm gần đó. Khu vườn và ngôi biệt thự mà cha mẹ Kha được cấp không ngờ là nơi quen thuộc của Hồng Hoa, cứ như cô ấy đã gắn bó với nó từ lâu rồi. Vì thế, dù bị chủ nhà mới ngăn cấm, cô vẫn lén lút tìm vào khu vườn, để rồi gặp phải tai nạn. Và…</span></span></p>', NULL),
(528, '2023-12-19 11:22:15', '2023-12-19 11:22:15', 'Bàn có năm chỗ ngồi', '107', 'ban-co-nam-cho-ngoi', 79700.00, NULL, 0, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1702984937/zhaqs8o41luzfrkbwzar.webp', 0, 0, 50, 0, 1, '{\"\\u0110\\u1ecbnh d\\u1ea1ng\":\"1\",\"Trang\":\"100\",\"K\\u00edch th\\u01b0\\u1edbc\":\"18 x 25\",\"Ng\\u00e0y xu\\u1ea5t b\\u1ea3n\":\"2023-12-05\",\"Nh\\u00e0 xu\\u1ea5t b\\u1ea3n\":\"NXB Tr\\u1ebb\",\"Ng\\u00f4n ng\\u1eef\":\"0\",\"Ghi ch\\u00fa minh h\\u1ecda\":\"S\\u00e1ch hay v\\u00e0 \\u00fd ngh\\u0129a\"}', '<p><span style=\"background-color:rgb(255,255,255);color:rgb(36,36,36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Tác giả quen thuộc của thiếu nhi, của tuổi ô mai. Những tập truyện của anh luôn dí dỏm, hài hước, đem lại nhiều cảm xúc, nhiều bài học nhẹ nhàng cho lứa tuổi học trò. Hãy đọc để cùng gặp những nhân vật rất dễ thương, hoặc phải vượt qua những hoàn cảnh khó khăn, hoặc sẵn lòng chia sẻ với bạn bè, người thân… Thậm chí cả những nhân vật tạm gọi là “phe xấu” với nhiều trò đùa nghịch… cũng mang dáng dấp hồn nhiên. Tất cả hướng về CHÂN – THIỆN – MỸ. Họ là năm người bạn với năm cá tính và hoàn cảnh khác nhau cùng chung trong một lớp học. Những trò nghịch ngợm trẻ con đôi khi gây ra mâu thuẫn, nhưng trên tất cả đó là những đứa trẻ ham học, giàu lòng nhân ái và biết quan tâm đến bạn bè. Cảm thông với hoàn cảnh của nhau, từng bạn nghĩ ra cách giúp đỡ bạn mình theo khả năng để tình bạn ấy lớn dần theo năm tháng.</span></span></p>', NULL),
(529, '2023-12-19 11:27:52', '2023-12-20 02:00:42', 'Truyện kiều', '109', 'truyen-kieu', 26500.00, NULL, 0, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1703037643/dsgu0rb0etbe9e0mlkbr.webp', 0, 0, 50, 0, 1, '{\"\\u0110\\u1ecbnh d\\u1ea1ng\":\"1\",\"Trang\":\"100\",\"K\\u00edch th\\u01b0\\u1edbc\":\"18 x 25\",\"Ng\\u00e0y xu\\u1ea5t b\\u1ea3n\":\"2023-12-08\",\"Nh\\u00e0 xu\\u1ea5t b\\u1ea3n\":\"Huy Ho\\u00e0ng Bookstore\",\"Ng\\u00f4n ng\\u1eef\":\"0\",\"Ghi ch\\u00fa minh h\\u1ecda\":\"S\\u00e1ch hay v\\u00e0 \\u00fd ngh\\u0129a\"}', '<p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">Tác phẩm <strong style=\"box-sizing:border-box;font-weight:500;line-height:21px;\">Truyện Kiều</strong>, nguyên tên là Đoạn trường tân thanh, từ khi ra đời đến nay (khoảng 200 năm), trong lịch sử Văn học Việt Nam chưa có công trình nào nghiên cứu sâu sắc về nó. Một trong nguyên nhân chính là vì bản gốc của <strong style=\"box-sizing:border-box;font-weight:500;line-height:21px;\">Nguyễn Du </strong>sáng tác không còn nữa. Tuy nhiên, không phải vì vậy mà <strong style=\"box-sizing:border-box;font-weight:500;line-height:21px;\">Truyện Kiều </strong>bị mai một. <strong style=\"box-sizing:border-box;font-weight:500;line-height:21px;\">Truyện Kiều</strong> vẫn trường tồn với thời gian, những lời thơ, câu chữ đến nay vẫn còn nguyên giá trị:</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\"><em style=\"box-sizing:border-box;line-height:21px;\"><i>\"Trăm năm trong cõi người ta,</i></em></p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\"><em style=\"box-sizing:border-box;line-height:21px;\"><i>Chữ tài chữ mệnh khéo là ghét nhau.</i></em></p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\"><em style=\"box-sizing:border-box;line-height:21px;\"><i>Trải qua một cuộc bể dâu,</i></em></p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\"><em style=\"box-sizing:border-box;line-height:21px;\"><i>Những điều trông thấy mà đau đớn lòng.</i></em></p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\"><em style=\"box-sizing:border-box;line-height:21px;\"><i>Lạ gì bỉ sắc tư phong,</i></em></p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\"><em style=\"box-sizing:border-box;line-height:21px;\"><i>Trời xanh quen thói má hồng đánh ghen\".</i></em></p>', NULL);
INSERT INTO `products` (`id`, `created_at`, `updated_at`, `product_name`, `author`, `product_slug`, `price`, `discount_price`, `weekly_discount`, `product_image`, `views`, `likes`, `remaining`, `isHot`, `isVisible`, `attributes`, `product_description`, `deleted_at`) VALUES
(530, '2023-12-19 12:02:36', '2023-12-19 15:23:56', 'Truyện kiều chú giải', '107', 'truyen-kieu-chu-giai', 120000.00, 109000.00, 0, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1702999438/b29q1ejpa4mwb2ilsiss.webp', 0, 0, 50, 1, 1, '{\"\\u0110\\u1ecbnh d\\u1ea1ng\":\"1\",\"Trang\":\"100\",\"K\\u00edch th\\u01b0\\u1edbc\":\"18 x 25\",\"Ng\\u00e0y xu\\u1ea5t b\\u1ea3n\":\"2023-12-07\",\"Nh\\u00e0 xu\\u1ea5t b\\u1ea3n\":\"Nh\\u00e0 s\\u00e1ch Minh Th\\u1eafng\",\"Ng\\u00f4n ng\\u1eef\":\"0\",\"Ghi ch\\u00fa minh h\\u1ecda\":\"S\\u00e1ch hay v\\u00e0 \\u00fd ngh\\u0129a\"}', '<p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\"><strong style=\"box-sizing:border-box;font-weight:500;line-height:21px;\">Truyện Kiều Chú Giải</strong></p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">Tác giả húy là Nguyễn Du, tự là Tố Như, hiệu là Thanh Hiên, biệt hiệu là Hồng Sơn Liệp Hộ, quán tại làng Tiên Điền, huyện Nghi Xuân, tỉnh Hà Tĩnh, con thứ bảy cụ Hoàng Giáp Xuân Quận Công Nguyễn Nghiễm, làm Tể tướng thời Lê - Trịnh. Cha chú, anh em đều thi đỗ làm quan to, thật là một nhà vọng tộc.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">Nguyễn Du sinh năm Ất Dậu, niên hiệu Cảnh Hưng thứ 26 đời Lê (1765), thông minh từ thủa nhỏ, năm 19 tuổi đã đỗ tam trường (cũng như cử nhân) Truyện Kiều nguyên danh do tác giả đặt là Đoạn trường tân thanh. Sau cụ Phạm Quý Thích đem khắc in, đổi tên là Kim Vân Kiều tân truyện.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">Hai nhà chú giải Bùi Kỷ và Trần Trọng Kim đổi gọi là Truyện Thúy Kiều, thi sĩ&nbsp; ản Đà Nguyễn Khắc Hiếu thì đổi tên là Vương Thúy Kiều chú giải tân truyện.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">Người ta tán thưởng Truyện Kiều, người ta học tập Truyện Kiều, là tán thưởng và học tập phần văn chương Truyện Kiều. Chính phần văn chương đó đã làm Truyện Kiều bất hủ. Nghĩ vậy, chúng tôi không nề học vấn nông cạn, thì giờ ít ỏi, tài liệu nghèo nàn, đánh bạo chú giải lại Truyện Kiều, hy vọng giúp ích phần nào cho anh em học viên.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">Nội dung chú giải gồm mấy điểm chính sau đây:</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">1. Chú giải những tiếng Nôm khó hiểu.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">2. Chú giải ý nghĩa từng câu.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">3. Chú giải văn phạm, văn pháp.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">4. Chú giải điển cố văn chương, chữ sách Tàu, chữ lấy ở ca dao tục ngữ.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">5. Vạch những chữ tác giả dùng sai.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">6. Sửa những chữ in lầm từ trước.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">7. Sửa những lời chú giải sai lầm của các bản trước (Việt, Pháp).</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">8. Nêu những chỗ hay, dở trong văn lý.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">9. Phê bình lướt qua nhân vật trong truyện về mặt luân lý.</p>', NULL),
(531, '2023-12-19 15:38:53', '2023-12-19 16:23:17', 'Sapiens Lược Sử Loài Người (Tái Bản 2022)', '174', 'sapiens-luoc-su-loai-nguoi-tai-ban-2022', 185000.00, 150000.00, 0, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1703002999/p7w3nrdgfzlwjsu72cmw.webp', 0, 0, 15, 1, 1, '{\"\\u0110\\u1ecbnh d\\u1ea1ng\":\"1\",\"Trang\":\"600\",\"K\\u00edch th\\u01b0\\u1edbc\":\"16.0 x 24.0\",\"Ng\\u00e0y xu\\u1ea5t b\\u1ea3n\":\"2023-12-19\",\"Nh\\u00e0 xu\\u1ea5t b\\u1ea3n\":\"Nh\\u00e0 Xu\\u1ea5t B\\u1ea3n Tri Th\\u1ee9c\",\"Ng\\u00f4n ng\\u1eef\":\"1\",\"Ghi ch\\u00fa minh h\\u1ecda\":\"Cu\\u1ed1n s\\u00e1ch t\\u1eadp trung v\\u00e0o s\\u1ee9c m\\u1ea1nh c\\u1ee7a c\\u00e2u chuy\\u1ec7n v\\u00e0 huy\\u1ec1n tho\\u1ea1i, t\\u1ea1o h\\u1ee9ng th\\u00fa.\"}', '<p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">Sapiens là một câu chuyện lịch sử lớn về nền văn minh nhân loại – cách chúng ta phát triển từ xã hội săn bắt hái lượm thuở sơ khai đến cách chúng ta tổ chức xã hội và nền kinh tế ngày nay.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">Trong ấn bản mới này của cuốn Sapiens - Lược sử loài người, chúng tôi đã có một số hiệu chỉnh về nội dung với sự tham gia, đóng góp của các thành viên Cộng đồng đọc sách Tinh hoa. Xin trân trọng cảm ơn ý kiến đóng góp tận tâm của các quý độc giả, đặc biệt là ông Nguyễn Hoàng Giang, ông Nguyễn Việt Long, ông Đặng Trọng Hiếu cùng những người khác. Mong tiếp tục nhận được sự quan tâm và góp ý từ độc giả.</p>', NULL),
(532, '2023-12-19 16:22:06', '2023-12-19 16:22:06', 'Súng, Vi Trùng Và Thép (Tái bản)', '180', 'sung-vi-trung-va-thep-tai-ban', 210000.00, 180000.00, 0, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1703002928/tja1t7djcfhiiqkhkmid.webp', 0, 0, 30, 1, 1, '{\"\\u0110\\u1ecbnh d\\u1ea1ng\":\"1\",\"Trang\":\"660\",\"K\\u00edch th\\u01b0\\u1edbc\":\"16x24\",\"Ng\\u00e0y xu\\u1ea5t b\\u1ea3n\":\"2023-12-18\",\"Nh\\u00e0 xu\\u1ea5t b\\u1ea3n\":\"Nh\\u00e0 Xu\\u1ea5t B\\u1ea3n Th\\u1ebf Gi\\u1edbi\",\"Ng\\u00f4n ng\\u1eef\":\"0\",\"Ghi ch\\u00fa minh h\\u1ecda\":\"S\\u00fang, vi tr\\u00f9ng v\\u00e0 th\\u00e9p: \\u0110\\u1ecbnh m\\u1ec7nh c\\u1ee7a c\\u00e1c x\\u00e3 h\\u1ed9i lo\\u00e0i ng\\u01b0\\u1eddi\\u201d l\\u00e0 cu\\u1ed1n s\\u00e1ch khoa h\\u1ecdc ph\\u1ed5 th\\u00f4ng th\\u1ee9 hai v\\u00e0 n\\u1ed5i ti\\u1ebfng nh\\u1ea5t c\\u1ee7a Jared Diamond, \\u0111\\u01b0\\u1ee3c xu\\u1ea5t b\\u1ea3n l\\u1ea7n \\u0111\\u1ea7u tr\\u00ean th\\u1ebf gi\\u1edbi v\\u00e0o n\\u0103m 1997.\"}', '<p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">Súng, vi trùng và thép: Định mệnh của các xã hội loài người” là cuốn sách khoa học phổ thông thứ hai và nổi tiếng nhất của Jared Diamond, được xuất bản lần đầu trên thế giới vào năm 1997.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">Cuốn sách đã trở thành cuốn sách bán chạy nhất trên thế giới thời điểm đó, được dịch ra 33 thứ tiếng và nhận được nhiều giải thưởng, trong đó có một giải Pulitzer, một giải thưởng Sách Khoa học Aventis và giải thưởng Khoa học Phi Beta Kap-pa năm 1997. Một bộ phim tài liệu truyền hình nhiều tập dựa trên cuốn sách đã được Hiệp hội Địa lý Quốc gia sản xuất vào năm 2005.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">Đến nay, \"Súng, vi trùng và thép\" đã bán được hàng triệu bản và vẫn được xem là một công trình nền tảng về địa lý liên ngành, toàn diện và đột phá.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">Yuval Harari đã lấy cảm hứng từ chính cuốn sách này của Jared Diamond để sáng tác ra một cuốn sách nổi tiếng không kém: “Sapiens: Lược sử về loài người”. Colin Renfrew – Thành viên Quốc hội Vương quốc Liên hiệp Anh và Bắc Ireland nhận xét: “Diamond đã viết nên một tác phẩm với tầm tri thức đặc biệt xuất sắc. Đây là một trong những công trình quan trọng nhất và đáng đọc nhất về loài người”.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">Nhân dịp tác phẩm nhận được Giải A Sách Quốc gia 2021, chúng tôi tái bản bìa mới, chỉnh sửa một số lỗi và đặc biệt là có bổ sung thêm index. Các đường vân trên bìa biểu trưng cho dòng chảy thời gian, dòng chảy văn minh của nhân loại, đồng thời kết nối quá khứ với hiện tại.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">Nội dung cuốn sách giải thích vì sao các nền văn minh Á – Âu (bao gồm cả Bắc Phi) lại tồn tại được, cũng như đã chinh phục các nền văn minh khác, cùng lúc ông bác bỏ các lý thuyết về sự thống trị của các nền văn minh Á –Âu dựa trên trí tuệ, đạo đức hay ưu thế di truyền. Jared Diamond lập luận rằng, sự khác biệt về quyền lực và công nghệ giữa các xã hội loài người có nguồn gốc từ sự khác biệt về môi trường, trong đó sự khác biệt này được khuếch đại không ngừng. Qua đó, ông giải thích tại sao Tây Âu, chứ không phải các nền văn minh khác trong thế giới Á – Âu như Trung Quốc, lại trở thành các thế lực thống trị.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\"><strong style=\"box-sizing:border-box;font-weight:500;line-height:21px;\">Về tác giả Jared Diamond</strong></p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">Giáo sư Địa lý học tại Đại học Los Angeles, Mỹ.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">Ông đã nhận được nhiều giải thưởng danh giá, trong đó phải kể đến Huy chương Khoa học Quốc gia, Giải thưởng Cosmos của Nhật Bản, Giải thưởng Lewis Thomas do Đại học Rockefeller trao tặng, và đặc biệt là giải Pulitzer cho thể loại sách phi hư cấu năm 1998 với tác phẩm Guns, Germs and Steel (Súng, Vi trùng và Thép).</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">Tác phẩm tiêu biểu: The Third Chimpanzee (Loài tinh tinh thứ 3) (1991), Why Is Sex Fun? (Tại sao tình dục lại thú vị?) (1997), Guns, Germs and Steel (Súng, Vi trùng và Thép) (1997), Collapse (Sụp đổ) (2005), The World Until Yesterday (Thế giới cho đến ngày hôm qua) (2012), Upheaval (Biến động) (2019)</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng)..…</p>', NULL),
(533, '2023-12-19 16:42:53', '2023-12-19 16:42:53', 'Lược Sử Thế Giới', '181', 'luoc-su-the-gioi', 228000.00, NULL, 0, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1703004175/rohg1yxsdxpon7dftrix.webp', 0, 0, 100, 1, 1, '{\"\\u0110\\u1ecbnh d\\u1ea1ng\":\"0\",\"Trang\":\"426\",\"K\\u00edch th\\u01b0\\u1edbc\":\"18.5 x 23.5\",\"Ng\\u00e0y xu\\u1ea5t b\\u1ea3n\":\"2023-12-19\",\"Nh\\u00e0 xu\\u1ea5t b\\u1ea3n\":\"Nh\\u00e0 Xu\\u1ea5t B\\u1ea3n Th\\u1ebf Gi\\u1edbi\",\"Ng\\u00f4n ng\\u1eef\":\"0\",\"Ghi ch\\u00fa minh h\\u1ecda\":\"T\\u1eeb khi \\u0111\\u01b0\\u1ee3c vi\\u1ebft ra b\\u1eb1ng ti\\u1ebfng \\u0110\\u1ee9c n\\u0103m 1935,\\u00a0L\\u01b0\\u1ee3c s\\u1eed th\\u1ebf gi\\u1edbi\\u00a0\\u0111\\u00e3 tr\\u1edf th\\u00e0nh cu\\u1ed1n s\\u00e1ch l\\u1ecbch s\\u1eed b\\u00e1n ch\\u1ea1y \\u1edf ba m\\u01b0\\u01a1i ng\\u00f4n ng\\u1eef.\"}', '<p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">Từ khi được viết ra bằng tiếng Đức năm 1935,&nbsp;<em style=\"box-sizing:border-box;line-height:21px;\"><i>Lược sử thế giới</i></em>&nbsp;đã trở thành cuốn sách lịch sử bán chạy ở ba mươi ngôn ngữ. Năm 2005, cuốn sách được xuất bản bằng tiếng Anh với phần minh họa bổ sung, và phiên bản này bán được hơn nửa triệu bản trên toàn thế giới.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">Như một bài thơ về lịch sử thế giới, E. H. Gombrich lịch lãm dẫn người đọc đi từ thời kỳ Đồ đá đến thời kỳ của năng lượng nguyên tử, với những biến cố lịch sử phức tạp nhất, các trào lưu tư tưởng khó hiểu nhất, những nhân vật lịch sử đa chiều nhất, các thành tựu lớn lao nhất của trí tuệ con người… tất cả đều được tác giả mô tả và diễn giải dễ hiểu đến bất ngờ.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">Với cuốn sách này trong tay, bạn sẽ thấy niềm vui to lớn trong việc tìm hiểu lịch sử, cùng vô số khoảnh khắc quên hết tất cả để say mê đắm mình trong quá vãng của dòng chảy lịch sử.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">“Một câu chuyện hấp dẫn, được tổ chức tuyệt vời và được kể với một năng lượng và sự tự tin vô cùng cuốn hút, tràn ngập tình nhân văn và tinh thần hào sảng mà hàng ngàn người ngưỡng mộ Gombrich đã yêu mến trong suốt cuộc đời dài và đầy sáng tạo của ông. Cuốn sách thực sự là một điều bất ngờ đầy thú vị, không thể nào cưỡng lại!”</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">- Philip Pullman</p>', NULL),
(534, '2023-12-19 16:44:52', '2023-12-19 16:44:52', 'Những Vị Thần Bắc Âu', '122', 'nhung-vi-than-bac-au', 114000.00, NULL, 0, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1703004293/tjxaa7m9zruiiwf0peya.webp', 0, 0, 15, 1, 1, '{\"\\u0110\\u1ecbnh d\\u1ea1ng\":\"1\",\"Trang\":\"166\",\"K\\u00edch th\\u01b0\\u1edbc\":\"18.5 x 23.5\",\"Ng\\u00e0y xu\\u1ea5t b\\u1ea3n\":\"2023-12-19\",\"Nh\\u00e0 xu\\u1ea5t b\\u1ea3n\":\"Nh\\u00e0 Xu\\u1ea5t B\\u1ea3n H\\u00e0 N\\u1ed9i\",\"Ng\\u00f4n ng\\u1eef\":\"0\",\"Ghi ch\\u00fa minh h\\u1ecda\":\"T\\u00f3m t\\u1eaft: Nh\\u1eefng v\\u1ecb th\\u1ea7n B\\u1eafc \\u00c2u k\\u1ec3 l\\u1ea1i s\\u1ef1 t\\u00edch v\\u00e0 h\\u00e0nh tr\\u1ea1ng c\\u1ee7a c\\u00e1c v\\u1ecb th\\u1ea7n B\\u1eafc \\u00c2u,\"}', '<p><span style=\"background-color:rgb(255,255,255);color:rgb(36,36,36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Tóm tắt: Những vị thần Bắc Âu kể lại sự tích và hành trạng của các vị thần Bắc Âu, từ sự ra đời của những người đầu tiên và sự sáng tạo ra cửu giới, đến cái kết của thế giới và các thần trong trận chiến cuối cùng Ragnarok. Tác giả: Ingri d’Aulaire và Edgar Parin d’Aulaire là cặp vợ chồng nhà văn và nhà minh họa sách thiếu nhi. Họ từ châu Âu nhập cư vào Mỹ và cho ra đời những cuốn sách chủ yếu tập trung vào chủ đề lịch sử. Vợ chồng d’Aulaire nằm trong thế hệ những nghệ sĩ nhập cư đã tạo nên Thời kỳ Hoàng kim của sách tranh ở nước Mỹ thế kỷ 20. Những cuốn sách tranh in thạch bản của họ đã trở thành sách gối đầu giường của trẻ em nước Mỹ trong nhiều thế hệ. Ingri và Edgar Parin đã nhận Huy chương Caldecott năm 1940 Những sách nổi bật gồm Những vị thần Bắc Âu, Những thần thoại Hy Lạp, Thạch yêu, Review: \"ó rất nhiều chè chén, nhiều ẩu đả và những hành động xấu xí, đặc biệt là về phía thần Thor hung hăng người mãi mãi nện búa vào đầu những tên khổng lồ băng, và thần Loki vô cùng thú vị, kẻ mang tính cách phức tạp và xảo quyệt hơn bất kể ai khác trong thế giới thần thoại nói chung. Loki là cây hài của thần thoại Bắc Âu, mãi mãi nghịch dại, mãi mãi phải gánh hậu quả và rồi cũng mãi mãi thoát được nhờ cái lưỡi dẻo quẹo.\" - The New York Times Book Review</span></span></p>', NULL),
(535, '2023-12-19 16:47:01', '2023-12-19 16:47:01', 'Lịch Sử Châu Âu', '118', 'lich-su-chau-au', 224000.00, NULL, 0, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1703004422/tlxv2dfo9snohcucfkif.webp', 0, 0, 55, 1, 1, '{\"\\u0110\\u1ecbnh d\\u1ea1ng\":\"0\",\"Trang\":\"150\",\"K\\u00edch th\\u01b0\\u1edbc\":\"16.0 x 24.0\",\"Ng\\u00e0y xu\\u1ea5t b\\u1ea3n\":\"2023-12-28\",\"Nh\\u00e0 xu\\u1ea5t b\\u1ea3n\":\"Nh\\u00e0 Xu\\u1ea5t B\\u1ea3n H\\u1ed3ng \\u0110\\u1ee9c\",\"Ng\\u00f4n ng\\u1eef\":\"0\",\"Ghi ch\\u00fa minh h\\u1ecda\":\"Norman Davies mang l\\u1ea1i cho ch\\u00fang ta m\\u1ed9t pho s\\u1eed \\u0111\\u1ed3 s\\u1ed9 v\\u00e0 \\u0111\\u1ea7y tham v\\u1ecdng v\\u1ec1 ch\\u00e2u \\u00c2u t\\u1eeb th\\u1eddi C\\u1ed5 \\u0111\\u1ea1i \\u0111\\u1ebfn th\\u1eddi Hi\\u1ec7n \\u0111\\u1ea1i, v\\u1edbi v\\u0103n phong nghi\\u00eam c\\u1ea9n c\\u1ee7a m\\u1ed9t s\\u1eed gia nh\\u01b0ng c\\u0169ng \\u0111\\u1ea7y x\\u00fac c\\u1ea3m v\\u00e0 t\\u00e0i hoa.\"}', '<p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">Norman Davies mang lại cho chúng ta một pho sử đồ sộ và đầy tham vọng về châu Âu từ thời Cổ đại đến thời Hiện đại, với văn phong nghiêm cẩn của một sử gia nhưng cũng đầy xúc cảm và tài hoa.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">Tờ The Observer viết: “Điều kỳ diệu là Norman Davies đã đưa vào công trình nghiên cứu của ông, cùng với niềm đam mê, là thơ ca, âm nhạc, huyền thoạ, tất cả hoà quyện trong những trang sử bi tráng của châu Âu hàng ngàn năm dâu bể.”</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">Còn Norman Davies lại nói: “Tôi đặt ra cho mình nhiệm vụ dường như bất khả thi là cấu trúc lại toàn bộ cảnh quan lịch sử châu Âu qua từng thời kỳ”.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">Norman Davies là giáo sư sử học, Viện Nghiên cứu Slav và Đông Âu, Đại học London, Anh quốc. Ông cũng là tác giả của nhiều cuốn sách nổi tiếng về lịch sử cổ đại và cận đại.</p>', NULL),
(536, '2023-12-19 16:49:33', '2023-12-19 16:49:33', 'Làm Sao Để Che Giấu Một Đế Quốc - How To Hide An Empire', '122', 'lam-sao-de-che-giau-mot-de-quoc-how-to-hide-an-empire', 194000.00, NULL, 0, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1703004573/c4ugn2wpc1haaihtc9bf.webp', 0, 0, 155, 1, 1, '{\"\\u0110\\u1ecbnh d\\u1ea1ng\":\"0\",\"Trang\":\"584\",\"K\\u00edch th\\u01b0\\u1edbc\":\"16.0 x 24.0\",\"Ng\\u00e0y xu\\u1ea5t b\\u1ea3n\":\"2023-12-19\",\"Nh\\u00e0 xu\\u1ea5t b\\u1ea3n\":\"Nh\\u00e0 Xu\\u1ea5t B\\u1ea3n D\\u00e2n Tr\\u00ed\",\"Ng\\u00f4n ng\\u1eef\":\"0\",\"Ghi ch\\u00fa minh h\\u1ecda\":\"V\\u1edbi ng\\u01b0\\u1eddi d\\u00e2n M\\u1ef9 n\\u00f3i ri\\u00eang th\\u00ec Hoa K\\u1ef3 l\\u00e0 qu\\u1ed1c gia c\\u00f3 n\\u1ec1n d\\u00e2n tr\\u1ecb l\\u1edbn nh\\u1ea5t th\\u1ebf gi\\u1edbi.\"}', '<p><span style=\"background-color:rgb(255,255,255);color:rgb(36,36,36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Danh sách Sách hay 2019 của Chicago Tribune</span></span></p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">Sách hay nhất 2019 của Publishers Weekly</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">Sách hay 2019 do các nhà phê bình của New York Times bình chọn</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">Giải thưởng Robert H.Ferrell của Hiệp hội Sử gia chuyên về Quan hệ đối ngoại Hoa Kỳ</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">&nbsp;</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">Với người dân Mỹ nói riêng thì Hoa Kỳ là quốc gia có nền dân trị lớn nhất thế giới. Hơn thế nữa, Hoa Kỳ từng là thuộc địa của đế quốc Anh nhiều năm. Với người dân Mỹ, “đế quốc” là một từ để áp dụng cho các nước khác chứ không phải Hoa Kỳ. Hoa Kỳ đã che giấu đế quốc của chính mình bằng cách nào, và tại sao họ lại làm như vậy? Đây là những câu hỏi cốt yếu mà sử gia Daniel Immerwahr cố gắng trả lời.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">“Làm sao để che giấu một đế quốc có hai mươi hai chương, đầy những nhân vật sống động, những tình tiết hài hước và những sự thật gây kinh ngạc. Nó đầy tính giải trí và tác giả có ý làm như vậy. Nhưng mục đích của nó khá nghiêm túc: cố gắng làm thay đổi cách người dân nghĩ về lịch sử Hoa Kỳ… Immerwahr lập luận một cách thuyết phục rằng: Hoa Kỳ thay thế các thuộc địa bằng hóa học, và dùng ‘công nghệ thay thế cho lãnh thổ’ . Đó là những lập luận kinh tế mạnh mẽ và chói sáng… cuốn sách đã thành công ở mục tiêu cốt lõi của nó: tái hiện lịch sử Hoa Kỳ với tư cách là lịch sử của Đế quốc Đại Hoa Kỳ.”</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">- Patrick Iber, The New Republic -</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">Tiến sĩ Daniel Immerwahr là giáo sư lịch sử ở Đại học Northwestern. Ông chuyên về lịch sử Hoa Kỳ thế kỷ 20 trong bối cảnh toàn cầu.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">Cuốn đầu tay của Immerwahr, Thinking Small: The United States and the Lure of Community Development (Tư duy nhỏ: Hoa Kỳ và sự cuốn hút của việc phát triển cộng đồng) từng giành giải Merle Curti của Tổ chức Các sử gia Mỹ dành cho lĩnh vực Lịch sử Tri thức)</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">Làm sao để che giấu một đế quốc là cuốn sách thứ hai của ông về lịch sử Hoa Kỳ và các vùng lãnh thổ của nó. Sách đã trở thành một trong những cuốn sách bán chạy nhất của New York Times, lọt vào danh sách Sách hay năm 2019 do các nhà phê bình của New York Times bình chọn và đoạt giải Robert H. Ferrell của Hiệp hội Sử gia chuyên về Quan hệ đối ngoại Hoa Kỳ.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">Immerwahr còn viết cho New York Times, The Guardian, The Washington Post, The New Republic, The Nation, Dissent và nhiều báo khác.</p>', NULL),
(537, '2023-12-20 02:46:44', '2023-12-20 02:46:44', 'Kim, Vân, Kiều Truyện (Tái Bản 2021)', '109', 'kim-van-kieu-truyen-tai-ban-2021', 75100.00, NULL, 0, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1703040405/xmubmed5tih0jpj62kst.webp', 0, 0, 50, 0, 1, '{\"\\u0110\\u1ecbnh d\\u1ea1ng\":\"0\",\"Trang\":\"100\",\"K\\u00edch th\\u01b0\\u1edbc\":\"18 x 25\",\"Ng\\u00e0y xu\\u1ea5t b\\u1ea3n\":\"2023-12-13\",\"Nh\\u00e0 xu\\u1ea5t b\\u1ea3n\":\"Cty V\\u0103n H\\u00f3a Minh L\\u00e2m\",\"Ng\\u00f4n ng\\u1eef\":\"0\",\"Ghi ch\\u00fa minh h\\u1ecda\":\"Hay v\\u00e0 \\u00fd ngh\\u0129a\"}', '<p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">Kim, Vân, Kiều là tiểu thuyết chương hồi của Thanh Tâm Tài nhân - Tác giả đời nhà Minh, Trung Quốc. Nguyễn Du lấy cảm hứng từ tác phẩm này viết nên \"Truyện Kiều\" - Áng văn bất hủ của văn chương Việt Nam.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">Cuốn sách \"Kim, Vân, Kiều truyện\" này do P.J Trương Vĩnh Ký dịch. In theo bản \"Pòe Kim, Vân, Kiều truyện\" P.J Trương Vĩnh Ký, Saigon P-H Schneider, 1911. Trương Vĩnh Ký là người đầu tiên phiên âm truyện Kim, Vân, Kiều truyện từ chữ Nôm ra chữ Quốc ngữ. (năm 1875)</p>', NULL);
INSERT INTO `products` (`id`, `created_at`, `updated_at`, `product_name`, `author`, `product_slug`, `price`, `discount_price`, `weekly_discount`, `product_image`, `views`, `likes`, `remaining`, `isHot`, `isVisible`, `attributes`, `product_description`, `deleted_at`) VALUES
(538, '2023-12-20 02:48:17', '2023-12-20 02:48:17', 'Truyện Kiều (Bình Giải - Chú Thích - Minh Họa)', '109', 'truyen-kieu-binh-giai-chu-thich-minh-hoa', 20000.00, NULL, 0, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1703040498/vsspxrg5rcdqck95b7s6.webp', 0, 0, 50, 0, 1, '{\"\\u0110\\u1ecbnh d\\u1ea1ng\":\"0\",\"Trang\":\"100\",\"K\\u00edch th\\u01b0\\u1edbc\":\"18 x 25\",\"Ng\\u00e0y xu\\u1ea5t b\\u1ea3n\":\"2023-12-06\",\"Nh\\u00e0 xu\\u1ea5t b\\u1ea3n\":\"Hi\\u1ec7u s\\u00e1ch 337\",\"Ng\\u00f4n ng\\u1eef\":\"0\",\"Ghi ch\\u00fa minh h\\u1ecda\":\"Hay v\\u00e0 \\u00fd ngh\\u0129a\"}', '<p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\"><span style=\"color:rgb(255,102,0);font-size:medium;\"><span style=\"box-sizing:border-box;line-height:24px;\"><strong style=\"box-sizing:border-box;font-weight:500;line-height:24px;\">Truyện Kiều (Bình Giải - Chú Thích - Minh Họa)</strong></span></span></p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">Nói tới văn học cổ điển Việt Nam, trước hết chúng ta phải nhắc đến đại thi hào.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">Nguyễn Du và kiệt tác Truyện Kiều của ông. Viết Truyện Kiều, Nguyễn Du chỉ khiêm nhường coi đó là những \"...Lời quê góp nhặt dông dài\". Nhưng, thực tế đã cho thấy, bất chấp quy luật và sự sàng lọc nghiệt ngã của thời gian, Truyện Kiều đã khẳng định sức sống bất tử của một tác phẩm bất hủ.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">Tác phẩm Truyện Kiều, nguyên tên là Đoạn Trường Tân Thanh, từ khi ra đời đến nay, khoảng 200 năm, trong lịch sử Văn học Việt Nam, chưa có tác phẩm nào được các nhà khảo cứu, phê bình, xuất bản quan tâm đến nó, từ nội dung, hình thức, lẫn văn bản và thời điểm sáng tác đặc biệt đến như vậy. Một trong nguyên nhân chính là vì bản gốc của Nguyễn Du sáng tác không còn nữa.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\"><em style=\"box-sizing:border-box;line-height:21px;\"><i>\"Trăm năm trong cõi người ta</i></em></p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\"><em style=\"box-sizing:border-box;line-height:21px;\"><i>Chữ tài chữ mệnh khéo là ghét nhau</i></em></p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\"><em style=\"box-sizing:border-box;line-height:21px;\"><i>Trải qua một cuộc bể dâu</i></em></p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\"><em style=\"box-sizing:border-box;line-height:21px;\"><i>Những điều trông thấy mà đau đớn lòng</i></em></p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\"><em style=\"box-sizing:border-box;line-height:21px;\"><i>Lạ gì bỉ sắc tư phong</i></em></p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\"><em style=\"box-sizing:border-box;line-height:21px;\"><i>Trời xanh quen thói má hồng đánh ghen\"</i></em></p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\"><strong style=\"box-sizing:border-box;font-weight:500;line-height:21px;\">(Trích Truyện Kiều)</strong></p>', NULL),
(539, '2023-12-20 02:50:32', '2023-12-20 02:50:32', 'The song of Kieu', '109', 'the-song-of-kieu', 371000.00, NULL, 0, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1703040634/igchfhurlq6c0kofgpsw.webp', 0, 0, 50, 1, 1, '{\"\\u0110\\u1ecbnh d\\u1ea1ng\":\"1\",\"Trang\":\"100\",\"K\\u00edch th\\u01b0\\u1edbc\":\"18 x 25\",\"Ng\\u00e0y xu\\u1ea5t b\\u1ea3n\":\"2023-12-05\",\"Nh\\u00e0 xu\\u1ea5t b\\u1ea3n\":\"Kim \\u0110\\u1ed3ng\",\"Ng\\u00f4n ng\\u1eef\":\"1\",\"Ghi ch\\u00fa minh h\\u1ecda\":\"Hay v\\u00e0 \\u00fd ngh\\u0129a\"}', '<p><span style=\"background-color:rgb(255,255,255);color:rgb(36,36,36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">An essential book for anyone invested, not only in Vietnamese literature, but the historic power of the national epic . . . and its perennial place in our species efforts toward self-knowledge. Tim Allen\'s new translation offers clean fluidity while honouring the original\'s varied rhythms and jagged lyricism. A luminous feat.\' Ocean Vuong, winner of the 2017 T. S. Eliot Prize</span></span><br><span style=\"background-color:rgb(255,255,255);color:rgb(36,36,36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Ever since it exploded into Vietnam\'s cultural life two centuries ago, The Song of Kieu has been one of that nation\'s most beloved and defining central myths.</span></span><br><span style=\"background-color:rgb(255,255,255);color:rgb(36,36,36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">It recounts the tragic fate of the beautiful singer and poet Kieu, who agrees to marry to save her family from debt but is tricked into working in a brothel. Over the course of a swift-moving story involving kidnap, war, jealous wives and rebel heroes, she will become a queen, wife, nun, slave, victim and avenger, surviving through the strength of her words and her wits alone.</span></span></p>', NULL),
(540, '2023-12-20 02:52:45', '2023-12-20 02:52:45', 'Truyền Kỳ Mạn Lục', '109', 'truyen-ky-man-luc', 360000.00, NULL, 0, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1703040766/p1ckkhnnnrsvjafbi2ll.webp', 0, 0, 50, 0, 1, '{\"\\u0110\\u1ecbnh d\\u1ea1ng\":\"1\",\"Trang\":\"100\",\"K\\u00edch th\\u01b0\\u1edbc\":\"18 x 25\",\"Ng\\u00e0y xu\\u1ea5t b\\u1ea3n\":\"2023-12-06\",\"Nh\\u00e0 xu\\u1ea5t b\\u1ea3n\":\"Kim \\u0110\\u1ed3ng\",\"Ng\\u00f4n ng\\u1eef\":\"0\",\"Ghi ch\\u00fa minh h\\u1ecda\":\"S\\u00e1ch hay v\\u00e0 \\u00fd ngh\\u0129a\"}', '<p><span style=\"background-color:rgb(255,255,255);color:rgb(36,36,36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Truyền Kỳ Mạn Lục</span></span></p>', NULL),
(541, '2023-12-20 02:55:21', '2023-12-20 05:20:59', 'Một Tấm Gương Cộng Sản Mẫu Mực', '119', 'mot-tam-guong-cong-san-mau-muc', 250000.00, 220000.00, 0, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1703049660/lbvvdyrf17eoohv2htxt.webp', 0, 0, 100, 0, 1, '{\"\\u0110\\u1ecbnh d\\u1ea1ng\":\"1\",\"Trang\":\"840\",\"K\\u00edch th\\u01b0\\u1edbc\":\"18 x 25\",\"Ng\\u00e0y xu\\u1ea5t b\\u1ea3n\":\"2023-12-06\",\"Nh\\u00e0 xu\\u1ea5t b\\u1ea3n\":\"NXB Ch\\u00ednh Tr\\u1ecb Qu\\u1ed1c Gia\",\"Ng\\u00f4n ng\\u1eef\":\"0\",\"Ghi ch\\u00fa minh h\\u1ecda\":\"S\\u00e1ch hay v\\u00e0 \\u00fd ngh\\u0129a\"}', '<p>Cuốn sách tuyển chọn những bài viết của các đồng chí lãnh đạo Đảng và Nhà nước, các nhà khoa học về cuộc đời và sự nghiệp cách mạng của đồng chí Nguyễn Văn Cừ nhằm tôn vinh và khẳng định công lao và những cống hiến của đồng chí Nguyễn Văn Cừ đối với Đảng và dân tộc ta, góp phần giáo dục truyền thống cách mạng cho thế hệ hôm nay và mai sau; giúp cán bộ, đảng viên và nhân dân nhận thức sâu sắc về thân thế, sự nghiệp cách mạng của cố Tổng Bí thư Nguyễn Văn Cừ - nhà lãnh đạo xuất sắc của Đảng và cách mạng Việt Nam.</p>', NULL),
(542, '2023-12-20 02:58:58', '2023-12-20 02:58:58', 'Vang Bóng Một Thời (Việt Nam Danh Tác)', '111', 'vang-bong-mot-thoi-viet-nam-danh-tac', 46500.00, NULL, 0, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1703041139/oldvswdmhpbcekt7na9n.webp', 0, 0, 50, 0, 1, '{\"\\u0110\\u1ecbnh d\\u1ea1ng\":\"0\",\"Trang\":\"100\",\"K\\u00edch th\\u01b0\\u1edbc\":\"18 x 25\",\"Ng\\u00e0y xu\\u1ea5t b\\u1ea3n\":\"2023-11-29\",\"Nh\\u00e0 xu\\u1ea5t b\\u1ea3n\":\"Nh\\u00e0 Xu\\u1ea5t B\\u1ea3n H\\u1ed9i Nh\\u00e0 V\\u0103n\",\"Ng\\u00f4n ng\\u1eef\":\"0\",\"Ghi ch\\u00fa minh h\\u1ecda\":\"S\\u00e1ch hay v\\u00e0 \\u00fd ngh\\u0129a\"}', '<p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">Chùa nhà ta có cái giếng này quý lắm. Nước rất ngọt. Có lẽ tôi nghiện trà tàu vì nước giếng chùa nhà đây. Tôi sở dĩ không đi đâu xa được là vì không đem theo được nước giếng này đi để pha trà. Bạch sư cụ, sư cụ nhớ hộ tôi câu</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">thế này: Là giếng chùa nhà mà cạn thì tôi sẽ cho không người nào muốn xin bộ đồ trà rất quý của tôi. Chỉ có nước</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">giếng đây là pha trà không bao giờ lạc mất hương vị</p>', NULL),
(543, '2023-12-20 03:01:38', '2023-12-20 03:01:38', 'Nguyễn Tuân - Chuyện Văn Chuyện Đời', '111', 'nguyen-tuan-chuyen-van-chuyen-doi', 102000.00, NULL, 0, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1703041299/kmh3oftrjixrctbsuubo.webp', 0, 0, 100, 0, 1, '{\"\\u0110\\u1ecbnh d\\u1ea1ng\":\"1\",\"Trang\":\"250\",\"K\\u00edch th\\u01b0\\u1edbc\":\"18 x 25\",\"Ng\\u00e0y xu\\u1ea5t b\\u1ea3n\":\"2023-11-29\",\"Nh\\u00e0 xu\\u1ea5t b\\u1ea3n\":\"Nh\\u00e0 Xu\\u1ea5t B\\u1ea3n H\\u1ed9i Nh\\u00e0 V\\u0103n\",\"Ng\\u00f4n ng\\u1eef\":\"0\",\"Ghi ch\\u00fa minh h\\u1ecda\":\"Hay v\\u00e0 \\u00fd ngh\\u0129a\"}', '<h2 style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;letter-spacing:normal;line-height:31.5px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Nguyễn Tuân - Chuyện Văn Chuyện Đời</h2><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">Nguyễn Tuân (1910-1987) là một trong số các tác gia lớn của văn học hiện đại Việt Nam. Một số tác phẩm tiêu biểu của ông đã được lựa chọn, đưa vào dạy học trong nhà trường trung học phổ thông. Sau khi ông qua đời, đã có nhiều cuốn sách có giá trị công bố những bài viết bổ ích về thân thế và sự nghiệp sáng tác của ông. Sách Nguyễn Tuân - chuyện văn, chuyện đời được sưu tầm, tuyển chọn, biên soạn theo một cách thức mới và một tinh thần mới. Với mục đích mang đến cho bạn đọc những hiểu biết phong phú, đa dạng về phong cách sống, phong cách sáng tác của nhà văn, chúng tôi đã tuyển chọn những bài dạng kể chuyện hấp dẫn, bổ ích về tác giả và bên lề tác phẩm, không đăng lại những bài nghiên cứu, phê bình, chân dung văn học mang tính học thuật cao mà bạn đọc từ lâu đã không còn xa lạ nữa.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">Cuốn sách nhằm đáp ứng nhu cầu của bạn đọc rộng rãi từ học sinh, sinh viên, nhà giáo, các nhà nghiên cứu đến tất cả những ai ngưỡng mộ nhà văn Nguyễn Tuân và sự nghiệp của ông.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">Sách được chia làm ba phần:</p><ul><li style=\"box-sizing:border-box;line-height:21px;text-align:justify;\">Phần I. Con người lãng tử, hào hoa, bao gồm các bài viết về cuộc sống sinh hoạt hằng ngày, các sở thích, quan niệ của Nguyễn Tuân về cuộc đời và nghệ thuật.</li><li style=\"box-sizing:border-box;line-height:21px;text-align:justify;\">Phần II. Khi con chữ vào trang giấy, gồm những bài viết liên quan đến quá trình sáng tác nghệ thuật của Nguyễn Tuân.</li><li style=\"box-sizing:border-box;line-height:21px;text-align:justify;\">Phần III. Chuyện vui và giai thoại, gồm những mẩu chuyện nhỏ, chủ yếu thể hiện những nét cá tính, phong cách độc đáo của nhà văn. Việc sắp xếp các bài trong sách thành ba phần như trên chỉ mang tính tương đối. Trong khuôn khổ có hạn của cuốn sách, ở hầu hết các bài, người biên soạn đều biên tập lại, sửa nhan đề, cắt đi một vài đoạn nhằm tập trung vào nội dung chính; nếu bài được rút ra từ một cuốn sách trọn vẹn thì chọn đoạn trích nào đó thích hợp. Bên dưới từng bài đều có nêu xuất xứ để bạn đọc dễ tìm&nbsp; hiểu văn bản mà người sưu tầm đã sử dụng.</li></ul><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">Do sách tuyển chọn bài của nhiều tác giả, đăng ở nhiều nơi trong nhiều năm, trong đó có những bài không phải là bản&nbsp; đăng đầu tiên, cho nên khó tránh khỏi sai sót. Rất mong nhận được ý kiến đóng góp của bạn đọc.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">Chúng tôi xin chân thành cảm ơn.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">Phạm Đình Ân</p>', NULL),
(544, '2023-12-20 03:03:58', '2023-12-20 03:03:58', 'Chùa Đàn - Bìa cứng', '111', 'chua-dan-bia-cung', 94500.00, 90000.00, 0, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1703041440/mqxpwslfwj87zn9cguh1.webp', 0, 0, 100, 0, 1, '{\"\\u0110\\u1ecbnh d\\u1ea1ng\":\"0\",\"Trang\":\"100\",\"K\\u00edch th\\u01b0\\u1edbc\":\"18 x 25\",\"Ng\\u00e0y xu\\u1ea5t b\\u1ea3n\":\"2023-11-28\",\"Nh\\u00e0 xu\\u1ea5t b\\u1ea3n\":\"Nh\\u00e0 Xu\\u1ea5t B\\u1ea3n H\\u1ed9i Nh\\u00e0 V\\u0103n\",\"Ng\\u00f4n ng\\u1eef\":\"0\",\"Ghi ch\\u00fa minh h\\u1ecda\":\"S\\u00e1ch hay v\\u00e0 \\u00fd ngh\\u0129a\"}', '<p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">Sách có 555 bản bìa cứng, được đánh số từ 1-555 và được đóng triện Nhã Nam Thư Xã, thiết kế riêng cho bộ sách Việt Nam danh tác.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">QUY CÁCH:</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">- Sách bìa cứng, có bìa áo (jacket). Bìa áo in giấy couché matt cán mờ định lượng 150gsm, tên sách, tên tác giả và bộ Việt Nam danh tác được phủ bóng.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">- Sách khổ 14,5x20,5 cm, in trên giấy tốt định lượng 100 gsm.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">Phần đông độc giả, đặc biệt là những độc giả trẻ thường biết đến Nguyễn Tuân nhiều hơn qua những tác phẩm thuộc thể loại tùy bút hay truyện ngắn như Tuỳ bút sông Đà, Vang bóng một thời… Tuy nhiên, ở một thể loại mà không có quá nhiều bạn đọc chú ý tới như dòng văn học ma mị, Nguyễn Tuân đã cho ra đời một trong những tác phẩm xuất sắc nhất trong sự nghiệp sáng tác của ông - Chùa Đàn.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">Chùa Đàn được viết vào năm 1945 với tiền thân là đoản thiên “Tâm sự của nước độc”, ở thời điểm này, tác phẩm mang đậm màu sắc Liêu Trai, đây cũng là âm hưởng chung làm nên một vệt truyện “yêu ngôn” của Nguyễn Tuân lúc này, những Đới roi, Loạn âm, Lửa nến trong xanh, Rượu bệnh… Cùng với bước ngoặt lịch sử của dân tộc, Nguyễn Tuân mau chóng giác ngộ Cách mạng và viết thêm phần đầu tên “Dựng” và phần kết mang tên “Mưỡu cuối” cho tác phẩm. Sự thay đổi này dẫu đã đem đến những tranh cãi gay gắt và ánh nhìn hồ nghi không chỉ với Chùa Đàn mà còn với chính Nguyễn Tuân, thế nhưng, không thể phủ nhận rằng, đây là một tác phẩm tiêu biểu cho tâm thái văn nghệ sĩ trước sự biến thiên của thời cuộc.</p>', NULL),
(545, '2023-12-20 03:10:25', '2023-12-20 03:10:25', 'Ngọn đèn đầu lạc', '111', 'ngon-den-dau-lac', 26100.00, 22000.00, 0, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1703041826/c52io8fuv1thfvvnturv.webp', 0, 0, 50, 1, 1, '{\"\\u0110\\u1ecbnh d\\u1ea1ng\":\"0\",\"Trang\":\"100\",\"K\\u00edch th\\u01b0\\u1edbc\":\"18 x 25\",\"Ng\\u00e0y xu\\u1ea5t b\\u1ea3n\":\"2023-11-29\",\"Nh\\u00e0 xu\\u1ea5t b\\u1ea3n\":\"Nh\\u00e0 Xu\\u1ea5t B\\u1ea3n H\\u1ed9i Nh\\u00e0 V\\u0103n\",\"Ng\\u00f4n ng\\u1eef\":\"0\",\"Ghi ch\\u00fa minh h\\u1ecda\":\"S\\u00e1ch hay v\\u00e0 \\u00fd ngh\\u0129a\"}', '<p><span style=\"background-color:rgb(255,255,255);color:rgb(36,36,36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Ngọn đèn dầu lạc là tập phóng sự về việc hút thuốc phiện ở Việt Nam hồi đầu thế kỷ 20. Hút thuốc phiện dưới con mắt của Nguyễn Tuân vừa độc hại như một thứ gây nghiện, tàn phá sức khỏe của kẻ hút và làm khốn đốn gia đình, xã hội. Nhưng đồng thời hút thuộc phiện cũng được Nguyễn Tuân mô tả như một thú chơi của giới nghệ sĩ, trí thức, đem đến những cảm xúc thăng hoa trong sáng tạo và công việc.</span></span></p>', NULL),
(546, '2023-12-20 04:39:46', '2023-12-20 04:39:46', 'Vang Bóng Một Thời (Việt Nam Danh Tác)', '111', 'vang-bong-mot-thoi-viet-nam-danh-tac-658270121f654', 45600.00, 40000.00, 0, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1703047187/wovqbucgo9d1qbrpzgt9.webp', 0, 0, 50, 1, 1, '{\"\\u0110\\u1ecbnh d\\u1ea1ng\":\"1\",\"Trang\":\"100\",\"K\\u00edch th\\u01b0\\u1edbc\":\"18 x 25\",\"Ng\\u00e0y xu\\u1ea5t b\\u1ea3n\":\"2023-12-07\",\"Nh\\u00e0 xu\\u1ea5t b\\u1ea3n\":\"Nh\\u00e0 Xu\\u1ea5t B\\u1ea3n H\\u1ed9i Nh\\u00e0 V\\u0103n\",\"Ng\\u00f4n ng\\u1eef\":\"0\",\"Ghi ch\\u00fa minh h\\u1ecda\":\"S\\u00e1ch hay v\\u00e0 \\u00fd ngh\\u0129a\"}', '<p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">Chùa nhà ta có cái giếng này quý lắm. Nước rất ngọt. Có lẽ tôi nghiện trà tàu vì nước giếng chùa nhà đây. Tôi sở dĩ không đi đâu xa được là vì không đem theo được nước giếng này đi để pha trà. Bạch sư cụ, sư cụ nhớ hộ tôi câu</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">thế này: Là giếng chùa nhà mà cạn thì tôi sẽ cho không người nào muốn xin bộ đồ trà rất quý của tôi. Chỉ có nước</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(36, 36, 36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:21px;margin:5px 0px 12px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-break:break-word;word-spacing:0px;\">giếng đây là pha trà không bao giờ lạc mất hương vị</p>', NULL),
(547, '2023-12-20 04:41:22', '2023-12-20 04:41:22', 'Chiếc lư đồng mắt cua', '111', 'chiec-lu-dong-mat-cua', 53500.00, NULL, 0, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1703047283/cm2srltg7mjq0rttxv8z.webp', 0, 0, 50, 0, 1, '{\"\\u0110\\u1ecbnh d\\u1ea1ng\":\"1\",\"Trang\":\"100\",\"K\\u00edch th\\u01b0\\u1edbc\":\"18 x 25\",\"Ng\\u00e0y xu\\u1ea5t b\\u1ea3n\":\"2023-11-29\",\"Nh\\u00e0 xu\\u1ea5t b\\u1ea3n\":\"Nh\\u00e0 Xu\\u1ea5t B\\u1ea3n H\\u1ed9i Nh\\u00e0 V\\u0103n\",\"Ng\\u00f4n ng\\u1eef\":\"0\",\"Ghi ch\\u00fa minh h\\u1ecda\":\"S\\u00e1ch hay v\\u00e0 \\u00fd ngh\\u0129a\"}', '<p><span style=\"background-color:rgb(255,255,255);color:rgb(36,36,36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">NHƯNG LÚC NÀY TÂM NGÀ NGÀ SAY RƯỢU, tỏ ý say thêm đối với nghề nghiệp, khổ phách gõ xinh hơn mọi lần, tiếng phách ròn vui như tiếng chim buổi sớm mai trong bụi cây. Trái với tiếng phách vui, giọng hát Tâm đượm muig sầu xứ, mỗi hơi chuyển từ làn này sang làn khác là một giọng cảm động đầy tha hương thương nhớâm nhìn làn khói mà hát, mắt long lanh tiếng hát có tinh thần và nhiều chữ mở, nhiều hơi mớm rất thần tình. Một giọng hát đẹp này vẳng lên vào một trường hợp cảm động lúc năm đã hồ tàn hình như đủ gột hết khỏi người Tâm tất cả những bẩn thỉu chát vào kể tư lúc dấn thân và nghề.</span></span></p>', NULL),
(548, '2023-12-20 04:43:12', '2023-12-20 04:43:12', 'Tàn đèn dầu lạc', '111', 'tan-den-dau-lac', 45000.00, NULL, 0, 'https://res.cloudinary.com/dpobeimdp/image/upload/v1703047393/meuedolezz61xctgqupe.webp', 0, 0, 50, 1, 1, '{\"\\u0110\\u1ecbnh d\\u1ea1ng\":\"1\",\"Trang\":\"100\",\"K\\u00edch th\\u01b0\\u1edbc\":\"18 x 25\",\"Ng\\u00e0y xu\\u1ea5t b\\u1ea3n\":\"2023-12-06\",\"Nh\\u00e0 xu\\u1ea5t b\\u1ea3n\":\"Nh\\u00e0 Xu\\u1ea5t B\\u1ea3n H\\u1ed9i Nh\\u00e0 V\\u0103n\",\"Ng\\u00f4n ng\\u1eef\":\"0\",\"Ghi ch\\u00fa minh h\\u1ecda\":\"S\\u00e1ch hay v\\u00e0 \\u00fd ngh\\u0129a\"}', '<p><span style=\"background-color:rgb(255,255,255);color:rgb(36,36,36);font-family:Inter, Helvetica, Arial, sans-serif;font-size:14px;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Tàn đèn dầu lạc được xem là tập tiếp theo của cuốn Ngọn đèn dầu lạc. Tiếp tục đề tài hút thuốc phiện, Nguyễn Tuân kể lại những câu chuyện xung quanh chiếc bàn đèn thuốc phiện, trong đó tập trung vào những thói tính xấu xí, bệ rạc, hư hỏng của kẻ nghiện thuốc.</span></span></p>', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `rating` tinyint(4) NOT NULL,
  `comment` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `statistics`
--

CREATE TABLE `statistics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doanhSo` int(11) NOT NULL,
  `donHang` int(11) NOT NULL,
  `tyLeChuyenDoi` int(11) NOT NULL DEFAULT 0,
  `luotTruyCap` int(11) NOT NULL DEFAULT 0,
  `luotXemTrang` int(11) NOT NULL DEFAULT 0,
  `doanhSoMoiDonHang` int(11) NOT NULL,
  `thoiGian` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statistics`
--

INSERT INTO `statistics` (`id`, `doanhSo`, `donHang`, `tyLeChuyenDoi`, `luotTruyCap`, `luotXemTrang`, `doanhSoMoiDonHang`, `thoiGian`, `created_at`, `updated_at`) VALUES
(2, 279966, 3, 0, 0, 0, 93322, '23:00:02 15-12-2023', '2023-12-15 16:00:03', '2023-12-15 16:00:03'),
(3, 0, 0, 0, 0, 0, 0, '00:00:03 16-12-2023', '2023-12-15 18:00:03', '2023-12-15 18:00:03'),
(4, 0, 0, 0, 0, 0, 0, '01:00:02 16-12-2023', '2023-12-15 19:00:03', '2023-12-15 19:00:03'),
(5, 0, 0, 0, 0, 0, 0, '02:00:03 16-12-2023', '2023-12-15 20:00:03', '2023-12-15 20:00:03'),
(6, 0, 0, 0, 0, 0, 0, '03:00:03 16-12-2023', '2023-12-15 21:00:03', '2023-12-15 21:00:03'),
(7, 0, 0, 0, 0, 0, 0, '04:00:02 16-12-2023', '2023-12-15 22:00:02', '2023-12-15 22:00:02'),
(8, 0, 0, 0, 0, 0, 0, '05:00:03 16-12-2023', '2023-12-15 23:00:03', '2023-12-15 23:00:03'),
(9, 0, 0, 0, 0, 0, 0, '06:00:02 16-12-2023', '2023-12-16 00:00:02', '2023-12-16 00:00:02'),
(10, 0, 0, 0, 0, 0, 0, '07:00:03 16-12-2023', '2023-12-16 01:00:03', '2023-12-16 01:00:03'),
(11, 0, 0, 0, 0, 0, 0, '08:00:03 16-12-2023', '2023-12-16 02:00:03', '2023-12-16 02:00:03'),
(12, 0, 0, 0, 0, 0, 0, '09:00:02 16-12-2023', '2023-12-16 03:00:02', '2023-12-16 03:00:02'),
(13, 0, 0, 0, 0, 0, 0, '10:00:02 16-12-2023', '2023-12-16 04:00:02', '2023-12-16 04:00:02'),
(14, 0, 0, 0, 0, 0, 0, '11:00:03 16-12-2023', '2023-12-16 05:00:03', '2023-12-16 05:00:03'),
(15, 0, 0, 0, 0, 0, 0, '12:00:03 16-12-2023', '2023-12-16 06:00:03', '2023-12-16 06:00:03'),
(16, 0, 0, 0, 0, 0, 0, '13:00:03 16-12-2023', '2023-12-16 07:00:03', '2023-12-16 07:00:03'),
(17, 0, 0, 0, 0, 0, 0, '14:00:03 16-12-2023', '2023-12-16 08:00:03', '2023-12-16 08:00:03'),
(18, 0, 0, 0, 0, 0, 0, '15:00:03 16-12-2023', '2023-12-16 09:00:03', '2023-12-16 09:00:03'),
(19, 0, 0, 0, 0, 0, 0, '16:00:02 16-12-2023', '2023-12-16 10:00:03', '2023-12-16 10:00:03'),
(20, 0, 0, 0, 0, 0, 0, '17:00:03 16-12-2023', '2023-12-16 11:00:04', '2023-12-16 11:00:04'),
(21, 0, 0, 0, 0, 0, 0, '18:00:03 16-12-2023', '2023-12-16 12:00:03', '2023-12-16 12:00:03'),
(22, 0, 0, 0, 0, 0, 0, '19:00:03 16-12-2023', '2023-12-16 13:00:03', '2023-12-16 13:00:03'),
(23, 0, 0, 0, 0, 0, 0, '20:00:03 16-12-2023', '2023-12-16 14:00:03', '2023-12-16 14:00:03'),
(24, 0, 0, 0, 0, 0, 0, '21:00:03 16-12-2023', '2023-12-16 15:00:03', '2023-12-16 15:00:03'),
(25, 0, 0, 0, 0, 0, 0, '22:00:02 16-12-2023', '2023-12-16 16:00:02', '2023-12-16 16:00:02'),
(26, 0, 0, 0, 0, 0, 0, '23:00:03 16-12-2023', '2023-12-16 17:00:03', '2023-12-16 17:00:03'),
(27, 0, 0, 0, 0, 0, 0, '00:00:02 17-12-2023', '2023-12-16 18:00:02', '2023-12-16 18:00:02'),
(28, 0, 0, 0, 0, 0, 0, '01:00:02 17-12-2023', '2023-12-16 19:00:02', '2023-12-16 19:00:02'),
(29, 0, 0, 0, 0, 0, 0, '02:00:03 17-12-2023', '2023-12-16 20:00:03', '2023-12-16 20:00:03'),
(30, 0, 0, 0, 0, 0, 0, '03:00:02 17-12-2023', '2023-12-16 21:00:02', '2023-12-16 21:00:02'),
(31, 0, 0, 0, 0, 0, 0, '04:00:03 17-12-2023', '2023-12-16 22:00:03', '2023-12-16 22:00:03'),
(32, 0, 0, 0, 0, 0, 0, '05:00:03 17-12-2023', '2023-12-16 23:00:03', '2023-12-16 23:00:03'),
(33, 0, 0, 0, 0, 0, 0, '06:00:04 17-12-2023', '2023-12-17 00:00:04', '2023-12-17 00:00:04'),
(34, 0, 0, 0, 0, 0, 0, '07:00:03 17-12-2023', '2023-12-17 01:00:03', '2023-12-17 01:00:03'),
(35, 0, 0, 0, 0, 0, 0, '08:00:03 17-12-2023', '2023-12-17 02:00:03', '2023-12-17 02:00:03'),
(36, 0, 0, 0, 0, 0, 0, '09:00:03 17-12-2023', '2023-12-17 03:00:03', '2023-12-17 03:00:03'),
(37, 0, 0, 0, 0, 0, 0, '10:00:03 17-12-2023', '2023-12-17 04:00:03', '2023-12-17 04:00:03'),
(38, 0, 0, 0, 0, 0, 0, '11:00:04 17-12-2023', '2023-12-17 05:00:04', '2023-12-17 05:00:04'),
(39, 0, 0, 0, 0, 0, 0, '12:00:04 17-12-2023', '2023-12-17 06:00:04', '2023-12-17 06:00:04'),
(40, 0, 0, 0, 0, 0, 0, '13:00:04 17-12-2023', '2023-12-17 07:00:04', '2023-12-17 07:00:04'),
(41, 0, 0, 0, 0, 0, 0, '14:00:03 17-12-2023', '2023-12-17 08:00:03', '2023-12-17 08:00:03'),
(42, 0, 0, 0, 0, 0, 0, '15:00:03 17-12-2023', '2023-12-17 09:00:03', '2023-12-17 09:00:03'),
(43, 0, 0, 0, 0, 0, 0, '16:00:03 17-12-2023', '2023-12-17 10:00:03', '2023-12-17 10:00:03'),
(44, 0, 0, 0, 0, 0, 0, '17:00:03 17-12-2023', '2023-12-17 11:00:03', '2023-12-17 11:00:03'),
(45, 0, 0, 0, 0, 0, 0, '18:00:03 17-12-2023', '2023-12-17 12:00:03', '2023-12-17 12:00:03'),
(46, 0, 0, 0, 0, 0, 0, '19:00:03 17-12-2023', '2023-12-17 13:00:03', '2023-12-17 13:00:03'),
(47, 0, 0, 0, 0, 0, 0, '20:00:03 17-12-2023', '2023-12-17 14:00:03', '2023-12-17 14:00:03'),
(48, 0, 0, 0, 0, 0, 0, '21:00:02 17-12-2023', '2023-12-17 15:00:03', '2023-12-17 15:00:03'),
(49, 0, 0, 0, 0, 0, 0, '22:00:03 17-12-2023', '2023-12-17 16:00:03', '2023-12-17 16:00:03'),
(50, 0, 0, 0, 0, 0, 0, '23:00:04 17-12-2023', '2023-12-17 17:00:04', '2023-12-17 17:00:04'),
(51, 0, 0, 0, 0, 0, 0, '00:00:04 18-12-2023', '2023-12-17 18:00:04', '2023-12-17 18:00:04'),
(52, 0, 0, 0, 0, 0, 0, '01:00:03 18-12-2023', '2023-12-17 19:00:03', '2023-12-17 19:00:03'),
(53, 0, 0, 0, 0, 0, 0, '02:00:03 18-12-2023', '2023-12-17 20:00:03', '2023-12-17 20:00:03'),
(54, 0, 0, 0, 0, 0, 0, '03:00:03 18-12-2023', '2023-12-17 21:00:03', '2023-12-17 21:00:03'),
(55, 0, 0, 0, 0, 0, 0, '04:00:02 18-12-2023', '2023-12-17 22:00:03', '2023-12-17 22:00:03'),
(56, 0, 0, 0, 0, 0, 0, '05:00:03 18-12-2023', '2023-12-17 23:00:03', '2023-12-17 23:00:03'),
(57, 0, 0, 0, 0, 0, 0, '06:00:02 18-12-2023', '2023-12-18 00:00:02', '2023-12-18 00:00:02'),
(58, 0, 0, 0, 0, 0, 0, '07:00:02 18-12-2023', '2023-12-18 01:00:02', '2023-12-18 01:00:02'),
(59, 0, 0, 0, 0, 0, 0, '08:00:03 18-12-2023', '2023-12-18 02:00:03', '2023-12-18 02:00:03'),
(60, 0, 0, 0, 0, 0, 0, '09:00:03 18-12-2023', '2023-12-18 03:00:03', '2023-12-18 03:00:03'),
(61, 0, 0, 0, 0, 0, 0, '10:00:03 18-12-2023', '2023-12-18 04:00:03', '2023-12-18 04:00:03'),
(62, 0, 0, 0, 0, 0, 0, '11:00:03 18-12-2023', '2023-12-18 05:00:03', '2023-12-18 05:00:03'),
(63, 0, 0, 0, 0, 0, 0, '12:00:02 18-12-2023', '2023-12-18 06:00:02', '2023-12-18 06:00:02'),
(64, 0, 0, 0, 0, 0, 0, '13:00:02 18-12-2023', '2023-12-18 07:00:02', '2023-12-18 07:00:02'),
(65, 0, 0, 0, 0, 0, 0, '14:00:02 18-12-2023', '2023-12-18 08:00:02', '2023-12-18 08:00:02'),
(66, 0, 0, 0, 0, 0, 0, '15:00:03 18-12-2023', '2023-12-18 09:00:03', '2023-12-18 09:00:03'),
(67, 200, 100, 0, 0, 0, 10, '', '2023-12-15 16:00:03', '2023-12-15 16:00:03'),
(68, 0, 0, 0, 0, 0, 0, '16:00:02 18-12-2023', '2023-12-18 10:00:02', '2023-12-18 10:00:02'),
(69, 0, 0, 0, 0, 0, 0, '17:00:03 18-12-2023', '2023-12-18 11:00:03', '2023-12-18 11:00:03'),
(70, 0, 0, 0, 0, 0, 0, '18:00:02 18-12-2023', '2023-12-18 12:00:02', '2023-12-18 12:00:02'),
(71, 0, 0, 0, 0, 0, 0, '19:00:03 18-12-2023', '2023-12-18 13:00:03', '2023-12-18 13:00:03'),
(72, 0, 0, 0, 0, 0, 0, '20:00:02 18-12-2023', '2023-12-18 14:00:02', '2023-12-18 14:00:02'),
(73, 0, 0, 0, 0, 0, 0, '21:00:03 18-12-2023', '2023-12-18 15:00:03', '2023-12-18 15:00:03'),
(74, 253961, 2, 0, 0, 0, 126981, '22:00:03 18-12-2023', '2023-12-18 16:00:03', '2023-12-18 16:00:03'),
(75, 0, 0, 0, 0, 0, 0, '23:00:02 18-12-2023', '2023-12-18 17:00:02', '2023-12-18 17:00:02'),
(76, 0, 0, 0, 0, 0, 0, '00:00:02 19-12-2023', '2023-12-18 18:00:02', '2023-12-18 18:00:02'),
(77, 0, 0, 0, 0, 0, 0, '01:00:03 19-12-2023', '2023-12-18 19:00:03', '2023-12-18 19:00:03'),
(78, 0, 0, 0, 0, 0, 0, '02:00:03 19-12-2023', '2023-12-18 20:00:03', '2023-12-18 20:00:03'),
(79, 0, 0, 0, 0, 0, 0, '03:00:02 19-12-2023', '2023-12-18 21:00:03', '2023-12-18 21:00:03'),
(80, 0, 0, 0, 0, 0, 0, '04:00:03 19-12-2023', '2023-12-18 22:00:03', '2023-12-18 22:00:03'),
(81, 0, 0, 0, 0, 0, 0, '05:00:02 19-12-2023', '2023-12-18 23:00:02', '2023-12-18 23:00:02'),
(82, 0, 0, 0, 0, 0, 0, '06:00:03 19-12-2023', '2023-12-19 00:00:03', '2023-12-19 00:00:03'),
(83, 0, 0, 0, 0, 0, 0, '07:00:03 19-12-2023', '2023-12-19 01:00:03', '2023-12-19 01:00:03'),
(84, 0, 0, 0, 0, 0, 0, '08:00:03 19-12-2023', '2023-12-19 02:00:03', '2023-12-19 02:00:03'),
(85, 0, 0, 0, 0, 0, 0, '09:00:03 19-12-2023', '2023-12-19 03:00:03', '2023-12-19 03:00:03'),
(86, 0, 0, 0, 0, 0, 0, '10:00:02 19-12-2023', '2023-12-19 04:00:02', '2023-12-19 04:00:02'),
(87, 0, 0, 0, 0, 0, 0, '11:00:03 19-12-2023', '2023-12-19 05:00:03', '2023-12-19 05:00:03'),
(88, 0, 0, 0, 0, 0, 0, '12:00:03 19-12-2023', '2023-12-19 06:00:03', '2023-12-19 06:00:03'),
(89, 0, 0, 0, 0, 0, 0, '13:00:02 19-12-2023', '2023-12-19 07:00:02', '2023-12-19 07:00:02'),
(90, 0, 0, 0, 0, 0, 0, '14:00:02 19-12-2023', '2023-12-19 08:00:02', '2023-12-19 08:00:02'),
(91, 120301, 1, 0, 0, 0, 120301, '15:00:03 19-12-2023', '2023-12-19 09:00:03', '2023-12-19 09:00:03'),
(92, 0, 0, 0, 0, 0, 0, '16:00:03 19-12-2023', '2023-12-19 10:00:03', '2023-12-19 10:00:03'),
(93, 0, 0, 0, 0, 0, 0, '17:00:03 19-12-2023', '2023-12-19 11:00:03', '2023-12-19 11:00:03'),
(94, 0, 0, 0, 0, 0, 0, '18:00:03 19-12-2023', '2023-12-19 12:00:03', '2023-12-19 12:00:03'),
(95, 0, 0, 0, 0, 0, 0, '19:00:03 19-12-2023', '2023-12-19 13:00:03', '2023-12-19 13:00:03'),
(96, 467701, 1, 0, 0, 0, 467701, '20:00:03 19-12-2023', '2023-12-19 14:00:03', '2023-12-19 14:00:03'),
(97, 570901, 1, 0, 0, 0, 570901, '21:00:02 19-12-2023', '2023-12-19 15:00:02', '2023-12-19 15:00:02'),
(98, 241102, 2, 0, 0, 0, 120551, '22:00:03 19-12-2023', '2023-12-19 16:00:03', '2023-12-19 16:00:03'),
(99, 0, 0, 0, 0, 0, 0, '23:00:03 19-12-2023', '2023-12-19 17:00:03', '2023-12-19 17:00:03'),
(100, 0, 0, 0, 0, 0, 0, '00:00:03 20-12-2023', '2023-12-19 18:00:03', '2023-12-19 18:00:03'),
(101, 0, 0, 0, 0, 0, 0, '01:00:03 20-12-2023', '2023-12-19 19:00:03', '2023-12-19 19:00:03'),
(102, 0, 0, 0, 0, 0, 0, '02:00:03 20-12-2023', '2023-12-19 20:00:03', '2023-12-19 20:00:03'),
(103, 0, 0, 0, 0, 0, 0, '03:00:03 20-12-2023', '2023-12-19 21:00:03', '2023-12-19 21:00:03'),
(104, 0, 0, 0, 0, 0, 0, '04:00:02 20-12-2023', '2023-12-19 22:00:02', '2023-12-19 22:00:02'),
(105, 0, 0, 0, 0, 0, 0, '05:00:03 20-12-2023', '2023-12-19 23:00:03', '2023-12-19 23:00:03'),
(106, 0, 0, 0, 0, 0, 0, '06:00:03 20-12-2023', '2023-12-20 00:00:03', '2023-12-20 00:00:03'),
(107, 0, 0, 0, 0, 0, 0, '07:00:02 20-12-2023', '2023-12-20 01:00:02', '2023-12-20 01:00:02'),
(108, 0, 0, 0, 0, 0, 0, '08:00:03 20-12-2023', '2023-12-20 02:00:03', '2023-12-20 02:00:03'),
(109, 0, 0, 0, 0, 0, 0, '09:00:03 20-12-2023', '2023-12-20 03:00:04', '2023-12-20 03:00:04'),
(110, 0, 0, 0, 0, 0, 0, '10:00:03 20-12-2023', '2023-12-20 04:00:03', '2023-12-20 04:00:03'),
(111, 0, 0, 0, 0, 0, 0, '11:00:03 20-12-2023', '2023-12-20 05:00:03', '2023-12-20 05:00:03'),
(112, 141885, 2, 0, 0, 0, 70943, '12:00:03 20-12-2023', '2023-12-20 06:00:03', '2023-12-20 06:00:03'),
(113, 0, 0, 0, 0, 0, 0, '13:00:03 20-12-2023', '2023-12-20 07:00:03', '2023-12-20 07:00:03'),
(114, 0, 0, 0, 0, 0, 0, '14:00:03 20-12-2023', '2023-12-20 08:00:03', '2023-12-20 08:00:03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `gender` tinyint(4) NOT NULL DEFAULT 0,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `points` decimal(8,2) NOT NULL DEFAULT 0.00,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `google_id` varchar(255) DEFAULT NULL,
  `facebook_id` varchar(255) DEFAULT NULL,
  `wishlist` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`wishlist`)),
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `image`, `email`, `address`, `gender`, `email_verified_at`, `password`, `points`, `status`, `google_id`, `facebook_id`, `wishlist`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(114, 'quang sang', NULL, 'quang.sang1530@gmail.com', 'VN', 0, NULL, '$2y$10$xpjWgtZLtiCjSW5AHPnei.IEK9zceIF8aTggeOdINoW3mLbY6suc6', 0.00, 1, NULL, NULL, NULL, NULL, '2023-12-20 08:04:35', '2023-12-20 08:04:35', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vouchers`
--

CREATE TABLE `vouchers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) NOT NULL,
  `usage_limit` int(11) DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `usage_count` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `discount_type` varchar(255) NOT NULL,
  `discount_value` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vouchers`
--

INSERT INTO `vouchers` (`id`, `code`, `usage_limit`, `expires_at`, `usage_count`, `discount_type`, `discount_value`, `created_at`, `updated_at`) VALUES
(4, '81607600', 20, '2023-12-20 17:00:00', 0, 'percent', 10.00, '2023-12-18 11:11:54', '2023-12-18 11:11:54'),
(5, '816076002', 20, '2023-12-18 17:00:00', 0, 'fixed', 10000.00, '2023-12-18 11:12:47', '2023-12-18 11:15:22'),
(8, '81607600ssc', 3, '2023-12-18 17:00:00', 0, 'percent', 3333.00, '2023-12-18 11:28:41', '2023-12-18 11:28:41'),
(10, 'CODE', 100, '2023-12-31 15:27:12', 4, 'percent', 10.00, '2023-12-31 15:28:39', '2023-12-20 05:45:31'),
(11, 'hihi', 3, '2023-12-18 17:00:00', 0, 'percent', 1.00, '2023-12-18 16:04:17', '2023-12-18 16:04:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `author_product`
--
ALTER TABLE `author_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `author_product_product_id_foreign` (`product_id`),
  ADD KEY `author_product_author_id_foreign` (`author_id`);

--
-- Indexes for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_items_product_id_foreign` (`product_id`),
  ADD KEY `cart_items_user_id_foreign` (`user_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_category_slug_unique` (`category_slug`);

--
-- Indexes for table `category_detail`
--
ALTER TABLE `category_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_products`
--
ALTER TABLE `category_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_products_products_id_foreign` (`products_id`),
  ADD KEY `category_products_category_id_foreign` (`category_id`);

--
-- Indexes for table `chude_product`
--
ALTER TABLE `chude_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chude_product_product_id_foreign` (`product_id`),
  ADD KEY `chude_product_chu_de_id_foreign` (`chu_de_id`);

--
-- Indexes for table `chu_de`
--
ALTER TABLE `chu_de`
  ADD PRIMARY KEY (`chu_de_id`);

--
-- Indexes for table `comments_post`
--
ALTER TABLE `comments_post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_post_user_id_foreign` (`user_id`),
  ADD KEY `comments_post_admin_id_foreign` (`admin_id`),
  ADD KEY `comments_post_post_id_foreign` (`post_id`);

--
-- Indexes for table `comments_product`
--
ALTER TABLE `comments_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_product_user_id_foreign` (`user_id`),
  ADD KEY `comments_product_admin_id_foreign` (`admin_id`),
  ADD KEY `comments_product_product_id_foreign` (`product_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contacts_user_id_foreign` (`user_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `orders_order_code_unique` (`order_code`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_detail_order_id_foreign` (`order_id`),
  ADD KEY `order_detail_product_id_foreign` (`product_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_admin_id_foreign` (`admin_id`),
  ADD KEY `posts_post_category_id_foreign` (`post_category_id`);

--
-- Indexes for table `posts_category`
--
ALTER TABLE `posts_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_product_slug_unique` (`product_slug`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_product_id_foreign` (`product_id`),
  ADD KEY `reviews_user_id_foreign` (`user_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `statistics`
--
ALTER TABLE `statistics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vouchers`
--
ALTER TABLE `vouchers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `vouchers_code_unique` (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=182;

--
-- AUTO_INCREMENT for table `author_product`
--
ALTER TABLE `author_product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=597;

--
-- AUTO_INCREMENT for table `cart_items`
--
ALTER TABLE `cart_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `category_detail`
--
ALTER TABLE `category_detail`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `category_products`
--
ALTER TABLE `category_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1043;

--
-- AUTO_INCREMENT for table `chude_product`
--
ALTER TABLE `chude_product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `chu_de`
--
ALTER TABLE `chu_de`
  MODIFY `chu_de_id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'id chủ đề', AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `comments_post`
--
ALTER TABLE `comments_post`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `comments_product`
--
ALTER TABLE `comments_product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `posts_category`
--
ALTER TABLE `posts_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=549;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `statistics`
--
ALTER TABLE `statistics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `vouchers`
--
ALTER TABLE `vouchers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `author_product`
--
ALTER TABLE `author_product`
  ADD CONSTRAINT `author_product_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `author` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `author_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD CONSTRAINT `cart_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cart_items_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `category_products`
--
ALTER TABLE `category_products`
  ADD CONSTRAINT `category_products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `category_products_products_id_foreign` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `chude_product`
--
ALTER TABLE `chude_product`
  ADD CONSTRAINT `chude_product_chu_de_id_foreign` FOREIGN KEY (`chu_de_id`) REFERENCES `chu_de` (`chu_de_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `chude_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `comments_post`
--
ALTER TABLE `comments_post`
  ADD CONSTRAINT `comments_post_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_post_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_post_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `comments_product`
--
ALTER TABLE `comments_product`
  ADD CONSTRAINT `comments_product_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_product_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `contacts`
--
ALTER TABLE `contacts`
  ADD CONSTRAINT `contacts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_detail_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `posts_post_category_id_foreign` FOREIGN KEY (`post_category_id`) REFERENCES `posts_category` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
