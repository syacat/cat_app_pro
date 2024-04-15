-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:8889
-- 生成日時: 2024 年 3 月 29 日 17:21
-- サーバのバージョン： 5.7.39
-- PHP のバージョン: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `catphote`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `cats`
--

CREATE TABLE `cats` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_icelandic_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_icelandic_ci NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `cats`
--

INSERT INTO `cats` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `user_id`, `deleted_at`, `created_at`, `updated_at`, `role`) VALUES
(7, 'aaa', 'aaa@123', NULL, '$2y$10$55U55JM/NzjczbBxBnOp4eDZTVQQRbag.iMPE15feP7M9RvAvYqTq', 'WGNWdf22NiBuHPqItrkphMvsdpetWDXlw8oQsYqIWn1wVBb3fel9RVqNE2Rz', NULL, NULL, NULL, NULL, 1),
(8, 'bbb', 'bbb@bbb', NULL, '$2y$10$Yc3haUtF2pr8wN6RV0uA8OJ7ZEhCH2YGqb0NLjPVVDiJTEMhogJwW', 'EmXvlUfCJh9uu3yp2lgqNUacViNrriPCcxp7xCLkNNIndU1wzEg49Ahn8BG2', NULL, NULL, NULL, NULL, 0),
(9, 'zzz', 'zzz@zzz', NULL, '$2y$10$t9b.1s4h7ZM5FZcqbIiFcOr9oWrMBe.W6dzXyt/RPToINu68fYKv.', 'fuQ98NO5HJ6wc57GseJ3my9BnzLuntftE72PTAyFvIqupzQwNN4HUpq9f5gV', NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- テーブルの構造 `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `photo_id` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- テーブルの構造 `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- テーブルの構造 `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `cat_name` varchar(255) DEFAULT NULL,
  `image_path` varchar(255) NOT NULL,
  `caption` text NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `photos`
--

INSERT INTO `photos` (`id`, `cat_id`, `cat_name`, `image_path`, `caption`, `deleted_at`, `created_at`, `updated_at`) VALUES
(74, NULL, NULL, 'uploads/cats/RAhYmCfBuFZPAci1aFxVYDOK1Sg0GJNVRXBMyBeE.jpg', 'テスト', NULL, '2024-03-29 02:32:08', '2024-03-29 02:32:08'),
(75, NULL, NULL, 'uploads/cats/176eNXbWYsxHRGFRihDJo6UTjDk0FlXKWIEWepYh.jpg', 'テスト', NULL, '2024-03-29 02:32:22', '2024-03-29 02:32:22'),
(76, NULL, NULL, 'uploads/cats/fuutOpss3Pt4OLLsIpuTfWQvXHpE7Iaf0BypGogG.jpg', 'テスト', NULL, '2024-03-29 02:32:36', '2024-03-29 02:32:36'),
(77, NULL, NULL, 'uploads/cats/XMhUt2JEZR3YUuw5sM5pUuYrXKx95x8CYAh0b7Md.jpg', 'テスト', NULL, '2024-03-29 02:32:53', '2024-03-29 02:32:53'),
(78, NULL, NULL, 'uploads/cats/cfvwsHld3uxl7XIrRO1zdz1D9tZbGpDqYQE53nZm.jpg', 'テスト', NULL, '2024-03-29 02:33:10', '2024-03-29 02:33:10'),
(79, NULL, NULL, 'uploads/cats/Y5I3wHBTfmtz9dWBAnM2Wv7uc7ejudbT50uUOofC.jpg', 'テスト', NULL, '2024-03-29 02:33:41', '2024-03-29 02:33:41'),
(80, NULL, NULL, 'uploads/cats/cmvKe31hcqCAwi4gFmRgH2WPjEm2LAEWXIhJAieZ.jpg', 'テスト', NULL, '2024-03-29 02:34:01', '2024-03-29 02:34:01'),
(81, NULL, NULL, 'uploads/cats/BVOSl69vKJ2QVN7abKhPKDOGk7Bpmi8IgfiVsOqB.jpg', 'テスト', NULL, '2024-03-29 02:34:20', '2024-03-29 02:34:20'),
(82, NULL, NULL, 'uploads/cats/0gGjqkrn9BEvjqUKFGkqnjg2uVNmJRQppToya4EP.jpg', 'テスト', NULL, '2024-03-29 02:34:41', '2024-03-29 02:34:41'),
(83, NULL, NULL, 'uploads/cats/DrKP51Mr7ek8s60kfSAO48JRhGyIOWWf9YaK5ZOj.jpg', 'テスト', NULL, '2024-03-29 02:34:59', '2024-03-29 02:34:59'),
(84, NULL, NULL, 'uploads/cats/iJN4Y9ReqJWQndadF1R1lRHCfUTikUNjkZFy8Flt.jpg', 'テスト', NULL, '2024-03-29 02:35:36', '2024-03-29 02:35:36'),
(85, NULL, NULL, 'uploads/cats/SSV7uzAiUnzyRB0OGtOuMfpgVzlSV2tXY9tiVAHj.jpg', 'テスト', NULL, '2024-03-29 02:35:57', '2024-03-29 02:35:57'),
(86, NULL, NULL, 'uploads/cats/lO5hFaMYkFkuYoeb7XyjCFL6Qzl2I4f7fyWqKPVX.jpg', 'テスト', NULL, '2024-03-29 06:14:55', '2024-03-29 06:14:55'),
(87, NULL, NULL, 'uploads/cats/GPfJ3UA3T21x3M6Eh3PG3JRQyaUEs2l1MBqYTQhq.jpg', 'テスト', NULL, '2024-03-29 06:24:52', '2024-03-29 06:24:52'),
(88, NULL, NULL, 'uploads/cats/XTdrMQdzZ0v07EsnftC1PjgItgqf1JjC9wnsQVt9.jpg', 'テスト', NULL, '2024-03-29 06:25:06', '2024-03-29 06:25:06'),
(89, NULL, NULL, 'uploads/cats/kdCyeIsvV7vB3axlOj3zZgeVxgIlaXZ9Hgfg83Zm.jpg', 'テスト', NULL, '2024-03-29 06:25:20', '2024-03-29 06:25:20'),
(90, NULL, NULL, 'uploads/cats/N0R4eE6yHJrzevpU8AVedrMIBTVdpriz0Cl4RdaZ.jpg', 'テスト', NULL, '2024-03-29 06:25:39', '2024-03-29 06:25:39'),
(91, NULL, NULL, 'uploads/cats/SA3lBGVNG51XXzv2aUrrdF0jguRp2Md7EAp13AYt.jpg', 'テスト', NULL, '2024-03-29 06:26:07', '2024-03-29 06:26:07'),
(93, NULL, NULL, 'uploads/cats/NDe70zZZZRwJcIConzlC2TA8nH9hnYd6dAeUrbpn.jpg', 'テスト', NULL, '2024-03-29 06:26:43', '2024-03-29 06:26:43'),
(94, NULL, NULL, 'uploads/cats/0HbrQNq1pYQMHEgeWfddUFopt3MJe1YEEp9n3vqp.jpg', 'テスト', NULL, '2024-03-29 06:27:06', '2024-03-29 06:27:06'),
(95, NULL, NULL, 'uploads/cats/7DX1dvFYzwcXv3iREOZJ7Q4TOdcy8fZlzdNXDbwH.jpg', 'テスト', NULL, '2024-03-29 06:27:47', '2024-03-29 06:27:47'),
(96, NULL, NULL, 'uploads/cats/6XOckhPBAij98FaN6w1uWaoq1FKMK1Bs0TX8EGhi.jpg', 'テスト', NULL, '2024-03-29 06:30:40', '2024-03-29 06:30:40'),
(97, NULL, NULL, 'uploads/cats/vOE4hSTo3XuA7hC1x6cgaBrLvzi8MgrF6Q7hMVMe.jpg', 'テスト', NULL, '2024-03-29 06:31:02', '2024-03-29 06:31:02'),
(98, NULL, NULL, 'uploads/cats/qZSF2Jjr1H7OtWxwInLT8NPvDlExPGbERxFxhMea.jpg', 'テスト', NULL, '2024-03-29 06:31:19', '2024-03-29 06:31:19'),
(99, NULL, NULL, 'uploads/cats/LNtC7D3Ly7BmZAa1vB3utswa0eOezpU6H0IDe0Bp.jpg', 'テスト', NULL, '2024-03-29 06:31:39', '2024-03-29 06:31:39'),
(100, NULL, NULL, 'uploads/cats/QVpwZRN8A9iR7dmAtkKTDKB1ZNl5vUJqWHFnY7po.jpg', 'テスト', NULL, '2024-03-29 06:32:08', '2024-03-29 06:32:08'),
(101, NULL, NULL, 'uploads/cats/AEQd49RnVRxXAt2EsuxJuFJV03e2uAnkLoszjmtO.jpg', 'テスト', NULL, '2024-03-29 06:32:34', '2024-03-29 06:32:34');

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- テーブルの構造 `テーブル名`
--

CREATE TABLE `テーブル名` (
  `id` int(11) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `photo_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `cats`
--
ALTER TABLE `cats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `name` (`name`);

--
-- テーブルのインデックス `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `image_path` (`image_path`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `photo_id` (`photo_id`);

--
-- テーブルのインデックス `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`cat_id`),
  ADD KEY `cat_name` (`cat_name`);

--
-- テーブルのインデックス `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `テーブル名`
--
ALTER TABLE `テーブル名`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `photo_id` (`photo_id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `cats`
--
ALTER TABLE `cats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- テーブルの AUTO_INCREMENT `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- テーブルの AUTO_INCREMENT `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- テーブルの AUTO_INCREMENT `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- テーブルの AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- テーブルの AUTO_INCREMENT `テーブル名`
--
ALTER TABLE `テーブル名`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- ダンプしたテーブルの制約
--

--
-- テーブルの制約 `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `fk_photo_id` FOREIGN KEY (`photo_id`) REFERENCES `photos` (`id`),
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`photo_id`) REFERENCES `photos` (`id`);

--
-- テーブルの制約 `photos`
--
ALTER TABLE `photos`
  ADD CONSTRAINT `photos_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `cats` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `photos_ibfk_2` FOREIGN KEY (`cat_name`) REFERENCES `cats` (`name`);

--
-- テーブルの制約 `テーブル名`
--
ALTER TABLE `テーブル名`
  ADD CONSTRAINT `テーブル名_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `テーブル名_ibfk_2` FOREIGN KEY (`photo_id`) REFERENCES `photos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
