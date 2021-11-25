-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 08, 2020 lúc 03:45 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.3.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `auction`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `bn_id` bigint(20) UNSIGNED NOT NULL,
  `bn_hinhanh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bn_tieude` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bn_noidung` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bn_trangthai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `banner`
--



--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `bl_id` bigint(20) UNSIGNED NOT NULL,
  `sp_id` bigint(20) UNSIGNED NOT NULL,
  `kh_id` bigint(20) UNSIGNED NOT NULL,
  `bl_noidung` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `ctdh_id` bigint(20) UNSIGNED NOT NULL,
  `sp_id` bigint(20) UNSIGNED NOT NULL,
  `sp_dongia` int(11) NOT NULL,
  `sp_soluongsp` int(11) NOT NULL,
  `dh_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietgiohang`
--

CREATE TABLE `chitietgiohang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethinhanh`
--

CREATE TABLE `chitiethinhanh` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------



--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `dh_id` bigint(20) UNSIGNED NOT NULL,
  `dh_tongtien` int(11) NOT NULL,
  `dh_madon` int(11) NOT NULL,
  `dh_nguoinhan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dh_noinhan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dh_thoigiandathang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dh_thoigiannhanhang` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dh_trangthai` int(11) NOT NULL DEFAULT 1,
  `dh_quatrinhvanchuyen` int(11) NOT NULL DEFAULT 1,
  `kh_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinhanh`
--

CREATE TABLE `hinhanh` (
  `ha_id` bigint(20) UNSIGNED NOT NULL,
  `ha_ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sp_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hinhanh`
--

INSERT INTO `hinhanh` (`ha_id`, `ha_ten`, `sp_id`, `created_at`, `updated_at`) VALUES
(1, '7871chi-ke-1.jpg', 1, '2020-06-07 07:37:43', '2020-06-07 07:37:43'),
(2, '6011chi-ke-2.jpg', 1, '2020-06-07 07:38:02', '2020-06-07 07:38:02'),
(3, '9532son-over-game-1.jpg', 2, '2020-06-07 08:16:28', '2020-06-07 08:16:28'),
(4, '9602son-over-game-2.jpg', 2, '2020-06-07 08:16:36', '2020-06-07 08:16:36'),
(5, '4702son-over-game-23jpg.png', 2, '2020-06-07 08:16:43', '2020-06-07 08:16:43'),
(6, '4843kem-duong.jpg', 3, '2020-06-07 08:20:25', '2020-06-07 08:20:25'),
(7, '9783kem-duong-2.jpg', 3, '2020-06-07 08:20:32', '2020-06-07 08:20:32'),
(8, '6314da-chet-1.jpg', 4, '2020-06-07 08:24:35', '2020-06-07 08:24:35'),
(9, '2674da-chet-2.jpg', 4, '2020-06-07 08:25:21', '2020-06-07 08:25:21'),
(10, '5155duong-da-chet-1.jpg', 5, '2020-06-07 08:29:22', '2020-06-07 08:29:22'),
(11, '9335duong-da-chet-2.jpg', 5, '2020-06-07 08:29:27', '2020-06-07 08:29:27'),
(12, '3776nhh1.jpg', 6, '2020-06-07 08:34:42', '2020-06-07 08:34:42'),
(13, '556nhh2.jpg', 6, '2020-06-07 08:34:49', '2020-06-07 08:34:49'),
(14, '6976nhh3.jpg', 6, '2020-06-07 08:34:55', '2020-06-07 08:34:55'),
(15, '6237sdt-1.jpg', 7, '2020-06-07 08:44:38', '2020-06-07 08:44:38'),
(16, '2467sdt-2.jpg', 7, '2020-06-07 08:44:44', '2020-06-07 08:44:44'),
(17, '2228dt-1.jpg', 8, '2020-06-07 08:47:02', '2020-06-07 08:47:02'),
(18, '568dt-2.jpg', 8, '2020-06-07 08:47:07', '2020-06-07 08:47:07'),
(19, '5999nh-1.jpg', 9, '2020-06-07 08:49:47', '2020-06-07 08:49:47'),
(20, '4149nh-2.jpg', 9, '2020-06-07 08:49:52', '2020-06-07 08:49:52'),
(21, '4529nh-3.jpg', 9, '2020-06-07 08:49:58', '2020-06-07 08:49:58');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinhthucthanhtoan`
--

CREATE TABLE `hinhthucthanhtoan` (
  `httt_id` bigint(20) UNSIGNED NOT NULL,
  `httt_ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Tên của hình thức thanh toán',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinhthucvanchuyen`
--

CREATE TABLE `hinhthucvanchuyen` (
  `htvc_id` bigint(20) UNSIGNED NOT NULL,
  `htvc_ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Tên của hình thức vận chuyển',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `kh_id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kh_hoten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kh_gioitinh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kh_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kh_diachi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kh_sdt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lkh_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`kh_id`, `username`, `password`, `kh_hoten`, `kh_gioitinh`, `kh_email`, `kh_diachi`, `kh_sdt`, `lkh_id`, `created_at`, `updated_at`) VALUES
(1, 'ngocduc', '$2y$10$tQ2e9D4Zalo7k5cSvMxuNOuDmQmdQp5H6tRRFboD.CNZvXxA/f4YW', 'Lê Ngọc Đức', 'Nam', 'lnd240998@gmail.com', 'Cần Thơ', '0123456789', 1, NULL, NULL),
(2, 'ngocnguyen', '$2y$10$1wAUcSTL2Tt4skyGpdDNPOULo877z6VKN5r9ahQzVTeXzJNBJSXke', 'Đỗ Thị Ngọc Nguyên', 'Nữ', 'nguyen98@gmail.com', 'An Giang', '0123456789', 1, NULL, NULL),
(3, 'ngoctam', '$2y$10$PBr8OOb98lrRFAetWZRF1O6ikMQmkOqfGVP9geBecS9xqO.MaxUNm', 'Dương Ngọc Tâm', 'Nam', 'tam98@gmail.com', 'Thốt Nốt', '0123456789', 1, NULL, NULL),
(4, 'quocbinh', '$2y$10$tkY5xlIod0y10TDTCCta5.qKt93tyi0PFod..kY1Osx7Rx.1B7QGu', 'Lương Quốc Bình', 'Nam', 'binh98@gmail.com', 'Cần Thơ', '0123456789', 1, NULL, NULL),
(5, 'tranphung', '$2y$10$/lTDrOuP2GVY.sflMtPwVevO39bv6zoIOhiERzU9AenDNXh47KbFa', 'Trần Thanh Phụng', 'Nam', 'phung98@gmail.com', 'Trà Vinh', '0123456789', 1, NULL, NULL),
(6, 'tuongvy', '$2y$10$4ffrcqLaiRZZXzSq.Z58Lu1SJSIWiB.bznJ5k67OsAW.8C20Hftxm', 'Đặng Thị Tường Vy', 'Nữ', 'vy98@gmail.com', 'Vĩnh Long', '0123456789', 1, NULL, NULL),
(7, 'minhnghia', '$2y$10$8L5MibPmBlCRP3IOYoU0MOiPgeGr9egxdbio0IIkAQifehE4vPEOS', 'Lê Minh Nghĩa', 'Nam', 'nghia98@gmail.com', 'Cần Thơ', '0123456789', 1, NULL, NULL),
(8, 'user1', '$2y$10$Uc9S12uIsapNdrFEl6lrXumCNtrgadzs.0kOFN3tY9lpguFUXjPvy', 'Nguyễn Văn A', 'Nam', 'nguyenvan98a@gmail.com', 'An Giang', '0123456789', 1, NULL, NULL),
(9, 'user2', '$2y$10$zvVLxVCJhWUYWdMGiyXhs.os0vA5yJ/0g6UYitaAoQ4pDoBc7XFYy', 'Nguyễn Văn B', 'Nam', 'nguyenvan98b@gmail.com', 'An Giang', '0123456789', 1, NULL, NULL),
(10, 'user3', '$2y$10$WWlkB028XOcbgX565/vy7OH0VOZkiMFwrO1HNtTqvqlLzQeeDxvLS', 'Nguyễn Thị C', 'Nam', 'nguyenthi98c@gmail.com', 'An Giang', '0123456789', 1, NULL, NULL),
(11, 'user4', '$2y$10$Pag/ThqNNdBAC10EZvh9FOVcKRCXjjEbuz.LW0lJ62pL6R7Rx.Yo2', 'Nguyễn Văn ABC', 'Nam', 'nguyenvan98abc@gmail.com', 'An Giang', '0123456789', 1, NULL, NULL);

-- --------------------------------------------------------



-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai`
--

CREATE TABLE `loai` (
  `l_id` bigint(20) UNSIGNED NOT NULL,
  `l_ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loai`
--

INSERT INTO `loai` (`l_id`, `l_ten`, `created_at`, `updated_at`) VALUES
(1, 'Trang Điểm', '2020-06-07 07:28:20', '2020-06-07 07:28:20'),
(2, 'Chăm Sóc Da', '2020-06-07 07:28:20', '2020-06-07 07:28:20'),
(3, 'Chăm Sóc Toàn Thân', '2020-06-07 07:28:20', '2020-06-07 07:28:20'),
(4, 'Chăm Sóc Tóc', '2020-06-07 07:28:20', '2020-06-07 07:28:20'),
(5, 'Nước Hoa', '2020-06-07 07:28:20', '2020-06-07 07:28:20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaikhachhang`
--

CREATE TABLE `loaikhachhang` (
  `lkh_id` bigint(20) UNSIGNED NOT NULL COMMENT 'ID loại khách hàng giá trị tự tăng',
  `lkh_ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Tên của loại khách hàng đó',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaikhachhang`
--

INSERT INTO `loaikhachhang` (`lkh_id`, `lkh_ten`, `created_at`, `updated_at`) VALUES
(1, 'Khách hàng thường', '2020-06-07 07:28:20', '2020-06-07 07:28:20'),
(2, 'Khách hàng VIP', '2020-06-07 07:28:20', '2020-06-07 07:28:20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_12_11_061154_create_wishlists_table', 1),
(4, '2020_02_05_170103_create_table_quyen', 1),
(5, '2020_02_05_170104_create_table_nhanvien', 1),
(6, '2020_02_05_170105_create_table_loai', 1),
(7, '2020_02_05_171218_create_table_khuyen_mai', 1),
(9, '2020_02_05_171326_create_table_cong_dung', 1),
(10, '2020_02_05_171507_create_table_trang_thai_don_hang', 1),
(11, '2020_02_05_171527_create_table_hinh_thuc_thanh_toan', 1),
(12, '2020_02_05_171546_create_table_hinh_thuc_van_chuyen', 1),
(13, '2020_02_05_171623_create_table_chi_tiet_hinh_anh', 1),
(14, '2020_02_05_171640_create_table_loai_khach_hang', 1),
(15, '2020_02_05_171641_create_table_khach_hang', 1),
(16, '2020_02_05_171655_create_table_don_hang', 1),
(17, '2020_02_05_171929_create_table_xuatxu', 1),
(19, '2020_02_08_050213_create_table_sanpham', 1),
(20, '2020_02_08_052945_create_table_hinhanh', 1),
(23, '2020_04_12_141044_create_banner_table', 1),
(27, '2020_04_22_154644_create_table_gio_hang_table', 1),
(28, '2020_04_22_154708_create_table_chi_tiet_gio_hang_table', 1),
(29, '2020_04_24_204232_create_thuonghieu_table', 1),
(30, '2020_05_08_154442_create_table_binh_luan', 1),
(31, '2020_05_09_162447_create_table_chi_tiet_don_hang', 1),

-- --------------------------------------------------------


--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `nv_id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nv_ten` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nv_diachi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nv_sdt` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nv_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `q_id` bigint(20) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`nv_id`, `username`, `password`, `nv_ten`, `nv_diachi`, `nv_sdt`, `nv_email`, `q_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin1', '$2y$10$aA3et0Q9sZDKkt3v7NWMsuJOO70uD6tR86CAVulE6Psjpnvk/WwjO', 'Lê Ngọc Đức', 'Cần Thơ', '0837068434', 'ducb1605271', 1, 'EiUaC8yS3bBL3aUC8emJ8CMhwECAE4EpsXepx2AfkNB7wODxCNAIIPCZlbjA', NULL, NULL),
(2, 'admin2', '$2y$10$ex0Dd7K/vs1VJ3wZSlwq6OhM5mvAfHWB0/APadc3triPJqXfpW6uy', 'Lương Quốc Bình', 'Cần Thơ', '0837068434', 'binhb1605202@student.ctu.edu.vn', 2, 'XeCp6IRzdlnw27oF9hQ37KeWlyGbWZJswq6xINCEXRZlyKyeA1LrfW0cxEZR', NULL, NULL),
(3, 'admin3', '$2y$10$0a2G.4sK88gMAjp8p1XDI.JP4/kNluwSzuVVImDP3TH9O2qih6aqC', 'Đỗ Thị Ngọc Nguyên', 'Cần Thơ', '0837068434', 'nguyenb1605292@student.ctu.edu.vn', 2, NULL, NULL, NULL),
(4, 'admin3', '$2y$10$ETb1pfo7FPiU.gxkbjDc8.1BmzxHVRWEp513pZpFGxZXJpx678ABy', 'Đặng Thị Tường Vy', 'Vĩnh Long', '0837068434', 'vyb1605319@student.ctu.edu.vn', 2, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quyen`
--

CREATE TABLE `quyen` (
  `q_id` bigint(20) UNSIGNED NOT NULL,
  `q_ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `quyen`
--

INSERT INTO `quyen` (`q_id`, `q_ten`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2020-06-07 07:28:20', '2020-06-07 07:28:20'),
(2, 'Nhân viên bán hàng', '2020-06-07 07:28:20', '2020-06-07 07:28:20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `sp_id` bigint(20) UNSIGNED NOT NULL,
  `sp_ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sp_giagoc` int(11) DEFAULT NULL,
  `sp_thongtin` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sp_danhgia` int(11) DEFAULT NULL,
  `sp_trangthai` int(11) NOT NULL DEFAULT 0 COMMENT 'Trạng thái có 0 hoặc 1 chỉ Còn hàng hoặc Hết hàng',
  `sp_anhdaidien` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sp_soluong` int(11) DEFAULT NULL,
  `l_id` bigint(20) UNSIGNED NOT NULL,
  `xx_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


--
-- Cấu trúc bảng cho bảng `thuonghieu`
--

CREATE TABLE `thuonghieu` (
  `th_id` bigint(20) UNSIGNED NOT NULL,
  `th_ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Tên thương hiệu sản phẩm',
  `th_logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trangthaidonhang`
--

CREATE TABLE `trangthaidonhang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `wishlists`
--

CREATE TABLE `wishlists` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `xuatxu`
--

CREATE TABLE `xuatxu` (
  `xx_id` bigint(20) UNSIGNED NOT NULL,
  `xx_ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Tên nơi xuất xứ sản phẩm',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `xuatxu`
--

INSERT INTO `xuatxu` (`xx_id`, `xx_ten`, `created_at`, `updated_at`) VALUES
(1, 'Việt Nam', '2020-06-07 07:28:20', '2020-06-07 07:28:20'),
(2, 'Trung Quốc', '2020-06-07 07:28:20', '2020-06-07 07:28:20'),
(3, 'Hàn Quốc', '2020-06-07 07:28:20', '2020-06-07 07:28:20'),
(4, 'Nhật Bản', '2020-06-07 07:28:20', '2020-06-07 07:28:20'),
(5, 'Thái Lan', '2020-06-07 07:28:20', '2020-06-07 07:28:20');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`bn_id`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`bl_id`),
  ADD KEY `binhluan_sp_id_foreign` (`sp_id`),
  ADD KEY `binhluan_kh_id_foreign` (`kh_id`);

--
-- Chỉ mục cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`ctdh_id`),
  ADD KEY `chitietdonhang_sp_id_foreign` (`sp_id`),
  ADD KEY `chitietdonhang_dh_id_foreign` (`dh_id`);

--
-- Chỉ mục cho bảng `chitietgiohang`
--
ALTER TABLE `chitietgiohang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chitiethinhanh`
--
ALTER TABLE `chitiethinhanh`
  ADD PRIMARY KEY (`id`);

--
-
--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`dh_id`),
  ADD KEY `donhang_kh_id_foreign` (`kh_id`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hinhanh`
--
ALTER TABLE `hinhanh`
  ADD PRIMARY KEY (`ha_id`),
  ADD KEY `hinhanh_sp_id_foreign` (`sp_id`);

--
-- Chỉ mục cho bảng `hinhthucthanhtoan`
--
ALTER TABLE `hinhthucthanhtoan`
  ADD PRIMARY KEY (`httt_id`);

--
-- Chỉ mục cho bảng `hinhthucvanchuyen`
--
ALTER TABLE `hinhthucvanchuyen`
  ADD PRIMARY KEY (`htvc_id`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`kh_id`),
  ADD KEY `khachhang_lkh_id_foreign` (`lkh_id`);

--
-- Chỉ mục cho bảng `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`l_id`);

--
-- Chỉ mục cho bảng `loaikhachhang`
--
ALTER TABLE `loaikhachhang`
  ADD PRIMARY KEY (`lkh_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`nv_id`),
  ADD KEY `nhanvien_q_id_foreign` (`q_id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `quyen`
--
ALTER TABLE `quyen`
  ADD PRIMARY KEY (`q_id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`sp_id`),
  ADD KEY `sanpham_l_id_foreign` (`l_id`),
  ADD KEY `sanpham_cd_id_foreign` (`cd_id`),
  ADD KEY `sanpham_cdp_id_foreign` (`cdp_id`),
  ADD KEY `sanpham_xx_id_foreign` (`xx_id`);

--
-- Chỉ mục cho bảng `thuonghieu`
--
ALTER TABLE `thuonghieu`
  ADD PRIMARY KEY (`th_id`);

--
-- Chỉ mục cho bảng `trangthaidonhang`
--
ALTER TABLE `trangthaidonhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--

--
-- Chỉ mục cho bảng `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `xuatxu`
--
ALTER TABLE `xuatxu`
  ADD PRIMARY KEY (`xx_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `bn_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `bl_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `ctdh_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `chitietgiohang`
--
ALTER TABLE `chitietgiohang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `chitiethinhanh`
--
ALTER TABLE `chitiethinhanh`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `dh_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hinhanh`
--
ALTER TABLE `hinhanh`
  MODIFY `ha_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `hinhthucthanhtoan`
--
ALTER TABLE `hinhthucthanhtoan`
  MODIFY `httt_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hinhthucvanchuyen`
--
ALTER TABLE `hinhthucvanchuyen`
  MODIFY `htvc_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `kh_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `km_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `khuyenmai_sanpham`
--
ALTER TABLE `khuyenmai_sanpham`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `lo`
--
ALTER TABLE `lo`
  MODIFY `lo_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `loai`
--
ALTER TABLE `loai`
  MODIFY `l_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `loaikhachhang`
--
ALTER TABLE `loaikhachhang`
  MODIFY `lkh_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ID loại khách hàng giá trị tự tăng', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `ngoaite`
--
ALTER TABLE `ngoaite`
  MODIFY `nt_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `nv_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `quyen`
--
ALTER TABLE `quyen`
  MODIFY `q_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `sp_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `thuonghieu`
--
ALTER TABLE `thuonghieu`
  MODIFY `th_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `trangthaidonhang`
--
ALTER TABLE `trangthaidonhang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `vouchers`
--
ALTER TABLE `vouchers`
  MODIFY `vc_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `xuatxu`
--
ALTER TABLE `xuatxu`
  MODIFY `xx_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_kh_id_foreign` FOREIGN KEY (`kh_id`) REFERENCES `khachhang` (`kh_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `binhluan_sp_id_foreign` FOREIGN KEY (`sp_id`) REFERENCES `sanpham` (`sp_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `chitietdonhang_dh_id_foreign` FOREIGN KEY (`dh_id`) REFERENCES `donhang` (`dh_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chitietdonhang_sp_id_foreign` FOREIGN KEY (`sp_id`) REFERENCES `sanpham` (`sp_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `chitietkhuyenmai`
--
ALTER TABLE `chitietkhuyenmai`
  ADD CONSTRAINT `chitietkhuyenmai_lo_id_foreign` FOREIGN KEY (`lo_id`) REFERENCES `lo` (`lo_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chitietkhuyenmai_sp_id_foreign` FOREIGN KEY (`sp_id`) REFERENCES `sanpham` (`sp_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `chitietlo`
--
ALTER TABLE `chitietlo`
  ADD CONSTRAINT `chitietlo_lo_id_foreign` FOREIGN KEY (`lo_id`) REFERENCES `lo` (`lo_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chitietlo_sp_id_foreign` FOREIGN KEY (`sp_id`) REFERENCES `sanpham` (`sp_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_kh_id_foreign` FOREIGN KEY (`kh_id`) REFERENCES `khachhang` (`kh_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `hinhanh`
--
ALTER TABLE `hinhanh`
  ADD CONSTRAINT `hinhanh_sp_id_foreign` FOREIGN KEY (`sp_id`) REFERENCES `sanpham` (`sp_id`);

--
-- Các ràng buộc cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD CONSTRAINT `khachhang_lkh_id_foreign` FOREIGN KEY (`lkh_id`) REFERENCES `loaikhachhang` (`lkh_id`);

--
-- Các ràng buộc cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `nhanvien_q_id_foreign` FOREIGN KEY (`q_id`) REFERENCES `quyen` (`q_id`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_cd_id_foreign` FOREIGN KEY (`cd_id`) REFERENCES `congdung` (`cd_id`),
  ADD CONSTRAINT `sanpham_cdp_id_foreign` FOREIGN KEY (`cdp_id`) REFERENCES `congdungphu` (`cdp_id`),
  ADD CONSTRAINT `sanpham_l_id_foreign` FOREIGN KEY (`l_id`) REFERENCES `loai` (`l_id`),
  ADD CONSTRAINT `sanpham_xx_id_foreign` FOREIGN KEY (`xx_id`) REFERENCES `xuatxu` (`xx_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
