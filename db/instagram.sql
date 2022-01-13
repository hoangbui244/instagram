-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 12, 2022 lúc 05:46 PM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `instagram`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `comment` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments_posts`
--

CREATE TABLE `comments_posts` (
  `comment_id` int(10) NOT NULL,
  `post_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `followers_following`
--

CREATE TABLE `followers_following` (
  `user_id` int(10) NOT NULL,
  `follower_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `followers_following`
--

INSERT INTO `followers_following` (`user_id`, `follower_id`) VALUES
(3, 6),
(3, 9),
(4, 5),
(36, 3),
(36, 4),
(36, 5),
(36, 6),
(36, 7),
(36, 14),
(36, 26),
(37, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `likes`
--

CREATE TABLE `likes` (
  `photo_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `photo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `report` int(10) NOT NULL,
  `report_content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `photo`, `report`, `report_content`) VALUES
(6, 5, '1640942800-img5.jpg', 0, ''),
(7, 5, '1640942817-1554200908315.jpg', 0, ''),
(8, 6, '1640942843-img6.png', 0, ''),
(9, 6, '1641015703-blank-user.jpg', 0, ''),
(11, 5, '1641110646-Img.jpg', 0, ''),
(12, 3, '1641175621-pic2.png', 1, 'Rối loạn ăn uống'),
(13, 3, '1641175728-pic1.png', 1, 'Lừa đảo hoặc gian lận'),
(14, 3, '1641175743-Img.jpg', 1, 'Tự tử hoặc tự gây thương tích'),
(15, 14, '1641195600-pic2.png', 0, ''),
(16, 36, '1641823053-Img.jpg', 0, ''),
(17, 36, '1641908996-bg_logo.jpg', 0, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_account`
--

CREATE TABLE `user_account` (
  `id` int(10) NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user_password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usertype` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `report_count` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user_account`
--

INSERT INTO `user_account` (`id`, `email`, `user_password`, `username`, `avatar`, `usertype`, `status`, `report_count`) VALUES
(3, 'email1@gmail.com', '123', 'acc1', '', '', 'Verified', 2),
(4, 'email2@gmail.com', '123', 'acc2', '', '', NULL, 0),
(5, 'email3@gmail.com', '123', 'acc3', '', '', NULL, 1),
(6, 'email4@gmail.com', '123', 'acc4', '1640942817-1554200908315.jpg', '', NULL, 4),
(7, 'khailovesao@gmail.com', '$2y$10$t7Tvu1xNRAFioyDgiMu1E.Ws8VtXdpl.WIcjVLe/Sti', 'test', '', '', 'Verified', 0),
(9, 'v', '$2y$10$qHmnxMry6QrB6qSozPYDrOTDHbSAsDRyMOYgbNu37Ip', 'v', '', '', NULL, 0),
(14, 't', '$2y$10$9fK3Scrf02Smzi1q2qEuhu.VHEyFVs4dTiDl9hUKHgp', 't', '', '', NULL, 0),
(26, 'khailovesao@gmail.com', '$2y$10$8FXe8dpA52RBh6LpTF17mO1SeC19vSml.zDTDnuA.fUVRvLEaeDlS', 'k', '', '', 'Verified', 0),
(27, 'khailovesao@gmail.com', '$2y$10$I1f31PeWE5gO8e83aIqX7.Iql8eJzrmBhTeD76qDyWPCtvTF/8KYi', 'o', '', '', 'Verified', 0),
(28, 'khailovesao@gmail.com', '$2y$10$OAsK2SvSWNpDj7XalJmeKutLqBV2XkXqTSdwpCve8mUd04wrWGPOu', 'y', '', '', 'Verified', 0),
(29, 'khailovesao@gmail.com', '$2y$10$54rWpdRNd4L/esDhet/rmOgF9x28nZMNe6X4qnCko8F7XziPEw9pS', 'ejstej', '', '', 'Verified', 0),
(30, 'khailovesao@gmail.com', '$2y$10$AAfdeMQQo..8wpgGwqQ12O32QZdtDLakrGOjTPLkofL0kadSQdpuO', 'awehawh', '', '', 'Verified', 0),
(31, 'khailovesao@gmail.com', '$2y$10$kUvH/K8D70pG5yFHyTy2yuqpuBeYyyZlhjNKEEL/nFRVijqM0W56a', 'cvcvb', '', '', 'Verified', 0),
(32, 'khailovesao@gmail.com', '$2y$10$io7oHAeLPsaUMGYH9rDZ7OKwFdVB9oyeJDM.2UaHicRd6d3Ry6aOW', 'bbb', '', '', 'Verified', 0),
(33, 'khailovesao@gmail.com', '$2y$10$TaPiSfRPSTzn4qP72xR43.FPQ.FjNYQJ94ULQ5hBgqJQKGZVSR8oa', 'mmm', '', '', 'Verified', 0),
(34, 'khailovesao@gmail.com', '$2y$10$GydKocULHJkOuN0EbTYhi.t5c0iY73qrrLcMYSESgW9JY8D/QsiFa', 'p', '', '', 'Verified', 0),
(35, 'khailovesao@gmail.com', '$2y$10$Y18UwFVTfiFA11E/hYyIQOwuZhOB/7vFonx9hrADggzWTg4.VD9qq', 'khai', '', 'admin', 'Verified', 0),
(36, 'khailovesao@gmail.com', '$2y$10$UcR5c2ca6wn8ZF0VAo6wt.Vex/6zwSMc4Zv9FY4r3WleW0PG2q8ha', 'h', '1641966509-bg_logo.jpg', '', 'Verified', 0),
(37, 'khailovesao@gmail.com', '$2y$10$q/.jo0NsY8EzYxUS0CFYkOMAg3lFfYKivN6n3HerClZ05UwA4ftPi', 'min', '', '', 'Verified', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_users_comments` (`user_id`);

--
-- Chỉ mục cho bảng `comments_posts`
--
ALTER TABLE `comments_posts`
  ADD PRIMARY KEY (`comment_id`,`post_id`),
  ADD KEY `comments_posts_ibfk_1` (`post_id`);

--
-- Chỉ mục cho bảng `followers_following`
--
ALTER TABLE `followers_following`
  ADD PRIMARY KEY (`user_id`,`follower_id`),
  ADD KEY `follower_id` (`follower_id`);

--
-- Chỉ mục cho bảng `likes`
--
ALTER TABLE `likes`
  ADD KEY `fk_photos` (`photo_id`),
  ADD KEY `fk_posts` (`user_id`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_posts` (`user_id`);

--
-- Chỉ mục cho bảng `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `user_account`
--
ALTER TABLE `user_account`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `fk_user_comment` FOREIGN KEY (`user_id`) REFERENCES `user_account` (`id`),
  ADD CONSTRAINT `fk_users_cmt` FOREIGN KEY (`user_id`) REFERENCES `user_account` (`id`),
  ADD CONSTRAINT `fk_users_comments` FOREIGN KEY (`user_id`) REFERENCES `user_account` (`id`);

--
-- Các ràng buộc cho bảng `comments_posts`
--
ALTER TABLE `comments_posts`
  ADD CONSTRAINT `comments_posts_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`),
  ADD CONSTRAINT `fk_comments` FOREIGN KEY (`comment_id`) REFERENCES `comments` (`id`);

--
-- Các ràng buộc cho bảng `followers_following`
--
ALTER TABLE `followers_following`
  ADD CONSTRAINT `followers_following_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_account` (`id`),
  ADD CONSTRAINT `followers_following_ibfk_2` FOREIGN KEY (`follower_id`) REFERENCES `user_account` (`id`);

--
-- Các ràng buộc cho bảng `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `fk_photo` FOREIGN KEY (`photo_id`) REFERENCES `posts` (`id`),
  ADD CONSTRAINT `fk_photos` FOREIGN KEY (`photo_id`) REFERENCES `posts` (`id`),
  ADD CONSTRAINT `fk_posts` FOREIGN KEY (`user_id`) REFERENCES `user_account` (`id`);

--
-- Các ràng buộc cho bảng `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `fk_user_posts` FOREIGN KEY (`user_id`) REFERENCES `user_account` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
