-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 28, 2023 at 08:11 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `polpp`
--

-- --------------------------------------------------------

--
-- Table structure for table `arsip`
--

CREATE TABLE `arsip` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomor_surat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_surat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu_pengarsipan` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `arsip`
--

INSERT INTO `arsip` (`id`, `nomor_surat`, `kategori_id`, `judul`, `file_surat`, `waktu_pengarsipan`, `created_at`, `updated_at`) VALUES
(11, '323232', 4, 'pengumuman kelulusan angkatan 2023', 'Surat20231128050822.pdf', '2023-11-28 05:10:56', '2023-11-27 22:08:22', '2023-11-27 22:10:56');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `id_kategori`, `nama`, `keterangan`, `created_at`, `updated_at`) VALUES
(3, 3, 'Undangan', 'Undangan Kunjungan Ke Kampus Lain', '2023-11-23 00:41:53', '2023-11-26 19:41:21'),
(4, 5, 'Pengumuman', 'Pengumuman Kelulusan angkatan 2023', '2023-11-26 07:04:37', '2023-11-27 22:13:17');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_05_20_095742_create_user_table', 1),
(3, '2023_07_21_002453_pam', 1),
(4, '2023_07_24_062835_pemadaman', 1),
(5, '2023_07_25_002855_patroli', 1),
(6, '2023_07_25_012934_resque', 2),
(7, '2023_07_25_013557_operasi_penertiban', 2),
(8, '2023_07_25_025839_kualifikasi', 3),
(9, '2023_07_25_061400_pendataan_linmas', 4),
(10, '2023_07_25_120500_add_sttp_to_kualifikasi', 5),
(11, '2023_07_25_121142_add_sttp_to_kualifikasi', 6),
(12, '2023_07_25_121753_pendataan_linmas', 7),
(13, '2023_07_25_130207_add_sttp_to_kualifikasi', 8),
(14, '2023_07_25_142309_trantibumlinmas', 9),
(15, '2023_07_26_032127_peningkatan_kapasitas_linmas', 10),
(16, '2023_07_26_033719_add_kecdesa_on_trantibumlinmas', 10),
(17, '2023_07_26_034718_add_tglkecdesa_to_pemadaman', 11),
(18, '2023_07_26_034738_add_tglkecdesa_to_resque', 11),
(19, '2023_07_26_040802_add_tglkecdesa_to_pemadaman', 12),
(20, '2023_07_26_040841_add_tglkecdesa_to_resque', 12),
(21, '2023_07_26_041101_add_tglkecdesa_to_resque', 13),
(22, '2023_07_26_041109_add_tglkecdesa_to_pemadaman', 13),
(23, '2023_07_26_041253_add_tglkecdesa_to_pemadaman', 14),
(24, '2023_07_26_044150_add_tglsttp_to_kualifikasi', 15),
(25, '2023_07_27_004224_mobilisasi_linmas', 16),
(26, '2023_07_27_011243_mobilisasilinmas', 17),
(27, '2023_07_28_011054_mobilisasi_linmas', 18),
(28, '2023_07_28_011729_mobilisasi_linmas', 19),
(29, '2023_07_28_011948_mobilisasi_linmas', 20),
(30, '2023_07_28_023314_sdm_satpol', 21),
(31, '2023_07_28_030549_sdm_satpol', 22),
(32, '2023_07_28_034715_sdm_satpol', 23),
(33, '2023_07_31_013203_pelanggaran_perda', 24),
(34, '2023_07_31_013454_pelanggaran_perkada', 24),
(35, '2023_07_31_015057_sdm_satpol', 25),
(36, '2023_07_31_121650_penegakan_perda', 26),
(37, '2023_05_20_034633_create_kos_table', 27),
(38, '2023_05_20_034650_create_kamar_table', 27),
(39, '2023_05_21_130807_create_penyewa_table', 27),
(40, '2023_05_21_155427_add_index_to_kmrno_in_kamar_table', 27),
(41, '2023_05_21_155533_add_foreign_key_to_penyewa_table', 27),
(42, '2023_05_22_075809_create_tagihan_table', 27),
(43, '2023_05_22_080258_add_foreign_key_to_tagihan_table', 27),
(44, '2023_05_22_083203_add_bulantahun_to_tagihan_table', 27),
(45, '2023_05_22_123613_add_id_penyewa_to_penyewa_table', 27),
(46, '2023_07_31_134252_sosialisasi_perda', 28),
(47, '2023_08_01_015630_operasi_penertiban', 29),
(48, '2023_08_14_062429_add_tanggal_pengisian_to_kualifikasi', 30),
(49, '2023_08_14_070008_add_kecdesa_to_pam', 31),
(50, '2023_08_14_072752_add_kecdesa_to_patroli', 32),
(51, '2023_08_20_151153_kecamatan', 33),
(52, '2023_08_20_151218_desa', 33),
(53, '2023_08_20_154046_kecamatan', 34),
(54, '2023_08_20_154753_kecamatan2', 35),
(55, '2023_11_19_093631_arsip', 36),
(56, '2023_11_19_124144_arsip', 37),
(57, '2023_11_19_125130_arsip', 38),
(58, '2023_11_20_020241_kategori', 39),
(59, '2023_11_20_021556_kategori', 40),
(60, '2023_11_23_053522_create_arsip', 41),
(61, '2023_11_23_055427_arsip', 42),
(62, '2023_11_23_061716_add_file_to_arsip', 43),
(63, '2023_11_23_064140_create_table_arsip', 44),
(64, '2023_11_23_065836_create_table_arsip', 45),
(65, '2023_11_28_070837_create_user_table', 46);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nim`, `nama`, `password`, `level`, `created_at`, `updated_at`) VALUES
(2, '2131730090', 'Ika Lestari', '$2y$10$9Ojd/hQHd4WEXyji61nV/.uRriyRScy22Uba9O0bFzWh9kG8JbIQu', 'administrator', '2023-11-28 00:10:29', '2023-11-28 00:10:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arsip`
--
ALTER TABLE `arsip`
  ADD PRIMARY KEY (`id`),
  ADD KEY `arsip_kategori_id_foreign` (`kategori_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arsip`
--
ALTER TABLE `arsip`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `arsip`
--
ALTER TABLE `arsip`
  ADD CONSTRAINT `arsip_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
