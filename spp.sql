-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2022 at 02:59 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spp`
--

-- --------------------------------------------------------

--
-- Table structure for table `atlet`
--

CREATE TABLE `atlet` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_atlet` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nisn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_registrasi` date DEFAULT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_telepon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tingkat_sabuk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kelas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `atlet`
--

INSERT INTO `atlet` (`id`, `kode_atlet`, `nisn`, `gambar`, `name`, `tgl_registrasi`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `bb`, `tb`, `no_telepon`, `tingkat_sabuk`, `kelas`, `user_id`, `created_at`, `updated_at`) VALUES
(3, 'ATLTEWEWW', '001122', NULL, 'listanto', '2022-05-29', 'Malang', '2022-05-01', 'Perempuan', '50', '170', '0812456878', 'Hitam', 'poomsae', 15, NULL, '2022-05-31 10:25:51'),
(4, 'ATLT3RKPU', '09123456', NULL, 'dhani', '2022-05-31', 'Malang', '2022-05-01', 'Laki-laki', '55', '165', '0981821821', 'Hitam', 'poomsae', 16, '2022-05-31 09:58:07', '2022-05-31 09:58:07'),
(5, 'ATLTYWQCL', '00112211', NULL, 'Vista Tenassa', '2022-05-31', 'Malang', '2022-05-01', 'Laki-laki', '60', '170', '0981821821', 'Hitam', 'kyorugi', 17, '2022-05-31 10:22:28', '2022-05-31 10:22:28'),
(6, 'ATLTJSC51', '11223311', NULL, 'dendi santoso', '2022-05-31', 'Malang', '2022-05-01', 'Laki-laki', '55', '170', '0981821821', 'Hitam', 'kyorugi', 18, '2022-05-31 14:31:59', '2022-05-31 14:31:59'),
(7, 'ATLTIPZDG', '8877', NULL, 'Caril', '2022-02-10', 'gresik', '2000-10-10', 'Laki-laki', '55', '170', '92747394', 'Hitam', 'poomsae', 19, '2022-05-31 14:36:17', '2022-05-31 14:36:17'),
(8, 'ATLTHGHOB', '111111', NULL, 'Surya', '2022-10-20', 'Malang', '2001-05-10', 'Laki-laki', '50', '180', '05213221444', 'Putih', 'reguler', 20, '2022-05-31 14:45:10', '2022-06-02 07:43:59'),
(9, NULL, '3322', NULL, 'anjay', '2022-06-02', 'Malang', '2022-06-02', 'Perempuan', '55', '165', '0981821821', 'Hitam', 'poomsae', 37, '2022-06-02 16:05:57', '2022-06-02 16:27:10');

-- --------------------------------------------------------

--
-- Table structure for table `cobak`
--

CREATE TABLE `cobak` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kelas` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kompetensi_keahlian` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `nama_kelas`, `kompetensi_keahlian`, `created_at`, `updated_at`) VALUES
(4, 'XI RPL 3', 'Rekayasa Perangkat Lunak', '2021-07-20 03:30:11', '2022-05-29 07:28:17'),
(5, 'ww', 'akutansi', '2022-05-30 07:29:49', '2022-05-31 10:20:44');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2021_07_01_123554_create_petugas_table', 1),
(6, '2021_07_01_123659_create_kelas_table', 1),
(7, '2021_07_01_123746_create_spp_table', 1),
(8, '2021_07_10_224442_create_permission_tables', 1),
(9, '2021_07_15_072638_create_siswa_table', 1),
(10, '2021_07_15_072759_create_pembayaran_table', 1),
(11, '2022_05_27_091140_create_cobak_table', 2),
(12, '2022_05_28_222017_create_atlet_table', 2),
(13, '2022_05_29_134244_create_pembayaran_table', 3),
(14, '2022_05_31_175405_create_prestasi_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(1, 'App\\Models\\User', 6),
(2, 'App\\Models\\User', 2),
(2, 'App\\Models\\User', 14),
(3, 'App\\Models\\User', 3),
(3, 'App\\Models\\User', 9),
(3, 'App\\Models\\User', 10),
(3, 'App\\Models\\User', 11),
(3, 'App\\Models\\User', 12),
(3, 'App\\Models\\User', 15),
(3, 'App\\Models\\User', 16),
(3, 'App\\Models\\User', 17),
(3, 'App\\Models\\User', 18),
(3, 'App\\Models\\User', 19),
(3, 'App\\Models\\User', 20),
(3, 'App\\Models\\User', 27),
(3, 'App\\Models\\User', 33),
(3, 'App\\Models\\User', 34),
(3, 'App\\Models\\User', 36),
(3, 'App\\Models\\User', 37);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_pembayaran` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `atlet_id` bigint(20) UNSIGNED NOT NULL,
  `nisn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kelas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_bayar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bulan_bayar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tahun_bayar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_bayar` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id`, `kode_pembayaran`, `atlet_id`, `nisn`, `kelas`, `tanggal_bayar`, `bulan_bayar`, `tahun_bayar`, `jumlah_bayar`, `created_at`, `updated_at`) VALUES
(1, 'SPPRG6ZQR', 3, '001122', 'poomsae', '2022-05-29 14:11:17', 'April', '2022', 175000, '2022-05-29 07:11:17', '2022-05-29 07:11:17'),
(2, 'SPPRKKZRF', 3, '001122', 'poomsae', '2022-05-31 19:42:38', 'Januari', '2022', 175000, '2022-05-31 12:42:38', '2022-05-31 12:42:38'),
(3, 'SPPRJ2F2N', 8, '111111', 'reguler', '2022-06-02 16:46:33', 'Maret', '2022', 175000, '2022-06-02 09:46:33', '2022-06-02 09:46:33');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'create-atlet', 'web', '2021-07-20 02:19:13', '2022-05-25 11:02:22'),
(2, 'read-atlet', 'web', '2021-07-20 02:19:13', '2022-05-25 11:02:29'),
(3, 'update-atlet', 'web', '2021-07-20 02:19:13', '2022-05-25 11:02:35'),
(4, 'delete-atlet', 'web', '2021-07-20 02:19:13', '2022-05-25 11:02:41'),
(5, 'create-users', 'web', '2021-07-20 02:19:13', '2021-07-20 02:19:13'),
(6, 'read-users', 'web', '2021-07-20 02:19:13', '2021-07-20 02:19:13'),
(7, 'update-users', 'web', '2021-07-20 02:19:13', '2021-07-20 02:19:13'),
(8, 'delete-users', 'web', '2021-07-20 02:19:13', '2021-07-20 02:19:13'),
(9, 'create-spp', 'web', '2021-07-20 02:19:14', '2021-07-20 02:19:14'),
(10, 'read-spp', 'web', '2021-07-20 02:19:14', '2021-07-20 02:19:14'),
(11, 'update-spp', 'web', '2021-07-20 02:19:14', '2021-07-20 02:19:14'),
(12, 'delete-spp', 'web', '2021-07-20 02:19:14', '2021-07-20 02:19:14'),
(13, 'create-kelas', 'web', '2021-07-20 02:19:14', '2021-07-20 02:19:14'),
(14, 'read-kelas', 'web', '2021-07-20 02:19:14', '2021-07-20 02:19:14'),
(15, 'update-kelas', 'web', '2021-07-20 02:19:14', '2021-07-20 02:19:14'),
(16, 'delete-kelas', 'web', '2021-07-20 02:19:14', '2021-07-20 02:19:14'),
(17, 'create-roles', 'web', '2021-07-20 02:19:14', '2021-07-20 02:19:14'),
(18, 'read-roles', 'web', '2021-07-20 02:19:14', '2021-07-20 02:19:14'),
(19, 'update-roles', 'web', '2021-07-20 02:19:14', '2021-07-20 02:19:14'),
(20, 'delete-roles', 'web', '2021-07-20 02:19:15', '2021-07-20 02:19:15'),
(21, 'create-permissions', 'web', '2021-07-20 02:19:15', '2021-07-20 02:19:15'),
(22, 'read-permissions', 'web', '2021-07-20 02:19:15', '2021-07-20 02:19:15'),
(23, 'update-permissions', 'web', '2021-07-20 02:19:15', '2021-07-20 02:19:15'),
(24, 'delete-permissions', 'web', '2021-07-20 02:19:15', '2021-07-20 02:19:15'),
(25, 'create-pembayaran', 'web', '2021-07-20 02:19:15', '2021-07-20 02:19:15'),
(26, 'read-pembayaran', 'web', '2021-07-20 02:19:15', '2021-07-20 02:19:15'),
(28, 'delete-pembayaran', 'web', '2021-07-20 02:19:15', '2021-07-20 02:19:15'),
(29, 'create-prestasi', 'web', '2022-05-25 05:33:07', '2022-05-25 05:33:07'),
(30, 'read-prestasi', 'web', '2022-05-25 05:33:08', '2022-05-25 05:33:08'),
(31, 'update-prestasi', 'web', '2022-05-25 05:33:08', '2022-05-25 05:33:08'),
(32, 'delete-prestasi', 'web', '2022-05-25 05:33:08', '2022-05-25 05:33:08'),
(33, 'create-prestasiAtlet', 'web', '2022-05-31 13:40:19', '2022-05-31 13:40:19'),
(34, 'read-prestasiAtlet', 'web', '2022-05-31 13:40:19', '2022-05-31 13:40:19'),
(35, 'update-prestasiAtlet', 'web', '2022-05-31 13:40:19', '2022-05-31 13:40:19'),
(36, 'delete-prestasiAtlet', 'web', '2022-05-31 13:40:19', '2022-05-31 13:40:19');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `kode_petugas` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_petugas` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_kelamin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id`, `user_id`, `kode_petugas`, `nama_petugas`, `jenis_kelamin`, `created_at`, `updated_at`) VALUES
(1, 1, 'PTG8M1CF', 'Administrator', 'Laki-laki', '2021-07-20 02:19:18', '2021-07-20 02:19:18');

-- --------------------------------------------------------

--
-- Table structure for table `prestasi`
--

CREATE TABLE `prestasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_kejuaraan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tingkat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kelas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `perolehan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_acara` date DEFAULT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prestasi`
--

INSERT INTO `prestasi` (`id`, `name`, `nama_kejuaraan`, `tingkat`, `kelas`, `kategori`, `perolehan`, `tgl_acara`, `lokasi`, `created_at`, `updated_at`) VALUES
(3, 'surya', 'Taekwondo', 'nasional', 'cadet', 'prestasi', 'perak', '2022-05-31', 'Surabaya', '2022-05-31 15:13:16', '2022-05-31 15:13:16'),
(4, NULL, 'Taekwondo', 'internasional', 'junior', 'pemula', 'emas', '2022-05-31', 'Surabaya', '2022-05-31 15:15:41', '2022-05-31 15:15:41'),
(12, NULL, 'Taekwondo', 'nasional', 'cadet', 'prestasi', 'perak', '2022-06-01', 'Surabaya', '2022-06-01 13:42:53', '2022-06-01 13:42:53'),
(13, NULL, 'Taekwondo', 'nasional', 'senior', 'prestasi', 'perak', '2022-06-01', 'Semarang', '2022-06-01 13:46:42', '2022-06-01 13:46:42'),
(14, '8', 'Taekwondo', 'nasional', 'cadet', 'pemula', 'perak', '2022-06-01', 'Surabaya', '2022-06-01 14:26:11', '2022-06-01 14:26:11'),
(15, '8', 'Taketake', 'nasional', 'cadet', 'pemula', 'perak', '2022-06-01', 'Bandung', '2022-06-01 14:28:11', '2022-06-01 14:28:11'),
(16, '8', 'Taketake', 'internasional', 'senior', 'pemula', 'emas', '2022-06-01', 'Jakarta', '2022-06-01 14:28:40', '2022-06-01 14:28:40'),
(17, '6', 'Taekwondo', 'nasional', 'cadet', 'pemula', 'perak', '2022-06-01', 'Surabaya', '2022-06-01 14:35:00', '2022-06-01 14:35:00'),
(18, '4', 'Taketake', 'nasional', 'cadet', 'prestasi', 'perak', '2022-06-07', 'Surabaya', '2022-06-01 14:38:38', '2022-06-01 14:38:38'),
(19, 'dhani', 'Taketake', 'provinsi', 'cadet', 'pemula', 'perak', '2022-06-01', 'Bandung', '2022-06-01 14:39:47', '2022-06-01 14:39:47'),
(20, 'Surya', 'Taekwondo', 'kabupaten', 'cadet', 'pemula', 'perak', '2022-06-01', 'Surabaya', '2022-06-01 14:46:44', '2022-06-01 14:46:44');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2021-07-20 02:19:15', '2021-07-20 02:19:15'),
(2, 'petugas', 'web', '2021-07-20 02:19:16', '2021-07-20 02:19:16'),
(3, 'atlet', 'web', '2021-07-20 02:19:17', '2021-07-20 02:19:17');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(2, 2),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(10, 2),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(14, 2),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(26, 2),
(28, 1),
(29, 1),
(29, 3),
(30, 1),
(30, 2),
(30, 3),
(31, 1),
(31, 3),
(32, 1),
(32, 3),
(33, 3),
(34, 3),
(35, 3),
(36, 3);

-- --------------------------------------------------------

--
-- Table structure for table `spp`
--

CREATE TABLE `spp` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tahun` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nominal` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `spp`
--

INSERT INTO `spp` (`id`, `tahun`, `nominal`, `created_at`, `updated_at`) VALUES
(1, '2020', '165000', '2021-07-20 02:19:15', '2021-07-20 02:19:15'),
(2, '2021', '170000', '2021-07-20 02:19:15', '2021-07-20 02:19:15'),
(3, '2022', '175000', '2021-07-20 02:19:15', '2021-07-20 02:19:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_register` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `id_register`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, 'admin123', NULL, 'admin@example.com', NULL, '$2y$10$zDfvJK8w8Ap4yhcAtvDA7.N4.fCwJp42vAKnl.RP7TyIcp9pq7Sie', NULL, NULL, NULL, '2021-07-20 02:19:18', '2021-07-20 02:19:18'),
(15, NULL, 'ciwi', NULL, NULL, NULL, '$2y$10$QyngWqS0z32KNYx8xWtcAuOFjqLhQBQpgqW/H.bdXO1NzdLU1ouqy', NULL, NULL, NULL, '2022-05-25 07:40:28', '2022-05-25 07:40:28'),
(16, NULL, 'amin', NULL, NULL, NULL, '$2y$10$ptFMfcgSqwW4IfP39GYW8.dabheppcrJluQPpj2BEPhljN2PMuOOe', NULL, NULL, NULL, '2022-05-31 09:58:07', '2022-05-31 09:58:07'),
(17, NULL, 'vista', NULL, NULL, NULL, '$2y$10$32l0Ay7UVOPl/9MmIjIMOuh5Co.73Ev6I/5xG8GIFo.Z4Qu9BDude', NULL, NULL, NULL, '2022-05-31 10:22:28', '2022-05-31 10:22:28'),
(18, NULL, 'dendi', NULL, NULL, NULL, '$2y$10$1YNqD0nAUzQYdRAeeYsRyup5gB7OI92eUXn2TrjLTGLwQ3Dtl7SKC', NULL, NULL, NULL, '2022-05-31 14:31:59', '2022-05-31 14:31:59'),
(19, 'caril', 'caril', NULL, NULL, NULL, '$2y$10$TOkan4lGvnLqI2l9n9wncun7H6AmZH0HZoNUU281VH3q0Id61hT3a', NULL, NULL, NULL, '2022-05-31 14:36:17', '2022-05-31 14:36:17'),
(20, 'surya', 'surya', NULL, NULL, NULL, '$2y$10$Q/lkYyWjH057g.miQ3lrAuZ5tr8qfvWy9Md.a4LWPeszDBjbhG9h.', NULL, NULL, NULL, '2022-05-31 14:45:10', '2022-05-31 14:45:10'),
(27, 'listanto', 'masrud', NULL, NULL, NULL, '$2y$10$azVHiaWfMwCv5FyaXmkLYuEM/LzVStRDVVpVKJoFTyj6lKkpb2mVy', NULL, NULL, NULL, '2022-06-01 04:34:03', '2022-06-01 04:34:03'),
(32, 'anji', 'anji', 'REG-20220602224013', 'anji@gmail.com', NULL, '$2y$10$K6.oYe2xRZAr9qBRUbssDuMBx7T4oGGWfznXqC.vx5V.eQikJe4I6', NULL, NULL, NULL, '2022-06-02 15:40:13', '2022-06-02 15:40:13'),
(33, 'dia', 'dia', 'REG-20220602225037', 'dia@gmail.com', NULL, '$2y$10$iXMcatjIQYCv0lhE6pTPp.HiijCbG5.lHpCHQ3wZ7JU7C4lSbScAm', NULL, NULL, NULL, '2022-06-02 15:50:38', '2022-06-02 15:50:38'),
(37, 'anjay', 'anjay', 'REG-20220602230557', 'anjay@gmail.com', NULL, '$2y$10$uJRQhmDRYnc32nrgxFuzEOWbwJEkgSKtuUe5jqz9qMb4lecAH7CS2', NULL, NULL, NULL, '2022-06-02 16:05:57', '2022-06-02 16:05:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atlet`
--
ALTER TABLE `atlet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `atlet_user_id_foreign` (`user_id`);

--
-- Indexes for table `cobak`
--
ALTER TABLE `cobak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pembayaran_atlet_id_foreign` (`atlet_id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `petugas_user_id_foreign` (`user_id`);

--
-- Indexes for table `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `spp`
--
ALTER TABLE `spp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atlet`
--
ALTER TABLE `atlet`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cobak`
--
ALTER TABLE `cobak`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `spp`
--
ALTER TABLE `spp`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `atlet`
--
ALTER TABLE `atlet`
  ADD CONSTRAINT `atlet_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_atlet_id_foreign` FOREIGN KEY (`atlet_id`) REFERENCES `atlet` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `petugas`
--
ALTER TABLE `petugas`
  ADD CONSTRAINT `petugas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
